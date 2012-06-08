<?php

namespace co\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;    //pour les exceptions d'utilisateurs non connectés
use co\BlogBundle\Entity\article;
use co\UserBundle;

class ArticlesController extends Controller {

    /**
     * @Route("/articles", name="articles")
     * @Template()
     *
     * Affiche la liste de tous les articles
     *
     */
    public function articlesAction() {
        $em = $this->getDoctrine()->getEntityManager(); //initialisation de l'entitymanager
        $articles = $em->getRepository('coBlogBundle:article')->findAll();
        return $this->render('coBlogBundle:article:indexarticles.html.twig', array('articles' => $articles,));
    }

    /**
     * @Route("/article/{id}", defaults={"id" = 0}, requirements={"id" = "\d+"}, name="article")
     * @Template()
     * @method({"GET"|"POST"})
     */
    public function articleAction($id = 0) {
        $em = $this->getDoctrine()->getEntityManager(); //initialisation de l'entitymanager

        if ($id > 0) {
            $article = $em->getRepository('coBlogBundle:article')->find($id);   //on mémorise l'article en l'appelant par son id'

            if (!$article) {    //si on n'a rien trouvé
                throw $this->createNotFoundException('Impossible de trouver l\'article désiré.');   //on lance une exception
            }

            //Mise à jour du nombre de vues sur l'article
            if ($article->getviewsCount()==null) {
                $article->setviewsCount(0);
            }
            $article->setviewsCount($article->getviewsCount()+1);
            $em->persist($article);
            $em->flush();
            
            //on lance un rendu de la page article avec en paramètre, l'array représentant l'article
            return $this->render('coBlogBundle:article:show.html.twig', array('article' => $article,));
        } else {
            throw $this->createNotFoundException('Impossible de trouver l\'article désiré.');   //on lance une exception
        }
    }

    /**
     * @Route("/article/edit/{id}", requirements={"id" = "\d+"}, name="article_edition")
     * @Template()
     */
    public function editAction($id) {
        $username = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($username)) {
            throw new AccessDeniedException('Vous n\'êtes pas authentifié.');
        } else {

            $em = $this->getDoctrine()->getEntityManager();
            $article = $em->getRepository('coBlogBundle:article')->find($id);

            if (!$article) {
                throw $this->createNotFoundException('Impossible de trouver l\'article désiré.');   //on lance une exception
            } else {
                $formBuilder = $this->createFormBuilder($article);
                $formBuilder->add('title', 'text');
                $formBuilder->add('image', 'text');
                $formBuilder->add('article', 'textarea', array('attr' => array('class' => 'tinymce')));
                $form = $formBuilder->getForm();

                $request = $this->get('request');
                if ($request->getMethod() == 'POST') {
                    $form->bindRequest($request);
                    $em->persist($article);
                    $em->flush();

                    $this->get('session')->setFlash('notification', 'L\'article à bien été modifié.');
                    //Pas de redirection, on met le flash sur la page courante, ce qui va la recharger directement.
                }
                return $this->render('coBlogBundle:article:edit.html.twig', array('form' => $form->createView(),));
            }
        }
    }

    /**
     * @Route("/article/add/", name="article_ajout")
     * @Template()
     */
    public function addAction() {
        $username = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($username)) {
            throw new AccessDeniedException('Vous n\'êtes pas authentifié.');
        }

        $article = new article();

        if (!$article) {
            throw $this->createNotFoundException('Impossible de créer un nouvel article.');   //on lance une exception
        } else {
            $em = $this->getDoctrine()->getEntityManager();
            

            // On crée le FormBuilder grâce à la méthode du contrôleur.
            $formBuilder = $this->createFormBuilder($article);

            $formBuilder->add('title', 'text');
            $formBuilder->add('image', 'text', array('required'=>false,));
            $formBuilder->add('article', 'textarea', array('required'=>false, 'attr' => array('class' => 'tinymce')));

            $article->setAuteur($username);            
            // À partir du formBuilder, on génère le formulaire.
            $form = $formBuilder->getForm();

            //au cas ou l'on arrive sur cette page avec une requete post
            $request = $this->get('request');
            if ($request->getMethod() == 'POST') {

                $form->bindRequest($request);

                $em->persist($article);
                $em->flush();

                $this->get('session')->setFlash('notification', 'L\'article à bien été ajouté.');
                return $this->redirect($this->generateUrl('article_ajout'));
            }


            return $this->render('coBlogBundle:article:add.html.twig', array('form' => $form->createView(),));
        }
    }

    /**
     * @Route("/article/delete/{id}", requirements={"id" = "\d+"}, name="article_supression")
     * @Template()
     */
    public function deleteAction($id=0) {
        $username = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($username)) {
            throw new AccessDeniedException('Vous n\'êtes pas authentifié.');
        } else {

            $em = $this->getDoctrine()->getEntityManager();
            $article = $em->getRepository('coBlogBundle:article')->find($id);

            if (!$article) {
                throw $this->createNotFoundException('Article Introuvable.');
            } else {
                //Ajouter une confirmation ici
                $em->remove($article);
                $em->flush();
                $this->get('session')->setFlash('notification', 'L\'article à bien été supprimé.');
            }
        }
        return $this->redirect($this->generateUrl('articles'));
    }

    /**
     * @Route("/article/Ajax/Update", name="article_ajax_update") 
     */
    public function articleAjaxUpdateAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user)) {
            throw new AccessDeniedException('Vous n\'êtes pas authentifié.');
        } else {
            //utilisateur authentifié
            $request=$this->getRequest();
            $content=$request->get('content');
            $contentId=$request->get('contentId');
            $articleId=$request->get('articleId');
            if (!$content ||!$contentId ||!$articleId)
            {
                throw new AccessDeniedException('Au moins un des paramètre attendu est manquant');
            }
            
            $em=$this->getDoctrine()->getEntityManager();
            $article = $em->getRepository('coBlogBundle:article')->find($articleId);
            
            if ($article->getAuteur()->getId()!=$user->getId())
            {
                throw new AccessDeniedException('Vous n\'êtes pas l\'auteur de cet article');
            }
            
            switch ($contentId)
            {
                case "articleTitle":
                    $article->setTitle(strip_tags($content));
                    $em->persist($article);
                    $em->flush();
                    break;
                case "articleBody":
                    $article->setArticle($content);
                    $em->persist($article);
                    $em->flush();
                    break;
                default:
                    throw new AccessDeniedException('Identifiant de contenu inconnu (attendu: articleTitle ou articleBody).');
            }
            
            return new Response ('success');            
            
        }
        
    }
    
}

