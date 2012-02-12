<?php

namespace co\mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;    //pour les exceptions d'utilisateurs non connectés
use co\mainBundle\Entity\article;

class ArticlesController extends Controller {

    /**     
     * @Route("/articles")
     * @Route("/articles/{id}", defaults={"id" = 1}, requirements={"id" = "\d+"}, name="articles")     
     * @Template()
     * @method({"GET"|"POST"})
     */
    public function articlesAction($id = 0) {
        if ($id > 0) {
            $em = $this->getDoctrine()->getEntityManager(); //initialisation de l'entitymanager
            $article = $em->getRepository('comainBundle:article')->find($id);   //on mémorise l'article en l'appelant par son id'

            if (!$article) {    //si on n'a rien trouvé
                throw $this->createNotFoundException('Impossible de trouver l\'article désiré.');   //on lance une exception
            }

            //sinon on lance un rendu de la page article avec en paramètre, l'array représentant l'article
            return $this->render('comainBundle:article:show.html.twig', array('article' => $article,));
        } else {
            //$em = $this->getDoctrine()->getEntityManager(); //initialisation de l'entitymanager
            //$em->createquery("SELECT * FROM articles");

            return $this->render('comainBundle:article:indexarticles.html.twig');
        }
    }

    /**
     * @Route("/articles/edit/{id}", requirements={"id" = "\d+"}, name="articles_edition")
     * @Template()
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getEntityManager();
        $article = $em->getRepository('comainBundle:article')->find($id);

        if (!$article) {
            throw $this->createNotFoundException('Impossible de trouver l\'article désiré.');   //on lance une exception
        } else {
            return $this->render('comainBundle:article:edit.html.twig', array('article' => $article,));
        }
    }

    /**
     * @Route("/articles/add/", name="articles_ajout")
     * @Template()
     */
    public function addAction() {
        $username = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($username)) {
            throw new AccessDeniedException('Vous n\'êtes pas authentifié.');
        }
        //$userid=$this->container->get('fos_user.user_manager');

        $article = new article();

        if (!$article) {
            throw $this->createNotFoundException('Impossible de créer un nouvel article.');   //on lance une exception
        } else {            
            // On crée le FormBuilder grâce à la méthode du contrôleur.
            $formBuilder = $this->createFormBuilder($article);

            $formBuilder->add('title', 'text');            
            $formBuilder->add('article', 'textarea', array('attr' => array('class' => 'tinymce')));
            
            $article->setAuthor($username);    //Insertion automatique du username (variable initialisée au début de la fonction)
            
            // À partir du formBuilder, on génère le formulaire.
            $form = $formBuilder->getForm();
            
            //au cas ou l'on arrive sur cette page avec une requete post
            $request = $this->get('request');            
            if ($request->getMethod() == 'POST') {
                
                $form->bindRequest($request);
                
                //if ($form->isValid()) {
                    $em = $this->getDoctrine()->getEntityManager();                    

                    $em->persist($article);                    
                    //$id=$article->getId();
                    $em->flush();
                  
                    return $this->redirect($this->generateUrl('articles',array('id'=>$article->getId())));
                 
                    
                //}
            }
            
            
            return $this->render('comainBundle:article:add.html.twig', array('form' => $form->createView(),));
        }
    }

}