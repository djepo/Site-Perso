<?php

namespace co\mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use co\mainBundle\Entity\article;

class ArticlesController extends Controller {

    /**
     * @Route("/articles")
     * @Route("/articles/{id}", defaults={"id" = 1}, requirements={"id" = "\d+"}, name="articles")
     * @Template()
     * @method({"GET"})
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
        } 
        else {
            //$em = $this->getDoctrine()->getEntityManager(); //initialisation de l'entitymanager            
            //$em->createquery("SELECT * FROM articles");            
            
            return $this->render('comainBundle:indexarticles:index.html.twig',array('articles'=>$em->getResult()));
        }        
    }
    
     /**     
     * @Route("/articles/edit/{id}", requirements={"id" = "\d+"}, name="articles_edition")
     * @Template()     
     */
    public function editAction($id) {
        $em=$this->getDoctrine()->getEntityManager();
        $article=$em->getRepository('comainBundle:article')->find($id);
        
        if (!$article){
            throw $this->createNotFoundException('Impossible de trouver l\'article désiré.');   //on lance une exception
        }
        else{
            return $this->render('comainBundle:article:edit.html.twig', array('article' => $article,));
        }            
    }
    
     /**     
     * @Route("/articles/add/", name="articles_ajout")
     * @Template()     
     */
    public function addAction() {
        //$em=$this->getDoctrine()->getEntityManager();
        //$article=$em->getRepository('comainBundle:article')->find($id);
        $article=new article();
                
        if (!$article){
            throw $this->createNotFoundException('Impossible de créer un nouvel article.');   //on lance une exception
        }
        else{
            
            // On crée le FormBuilder grâce à la méthode du contrôleur.
            $formBuilder = $this->createFormBuilder($article);
            
            $formBuilder->add('title','text');
            $formBuilder->add('author','text');
            $formBuilder->add('article','textarea');
            $formBuilder->add('created','date');
            $formBuilder->add('updated','date');
            
            $article->setAuthor("test");    //test de valeur par défaut
            $article->setcreated(new \Datetime());    //test de valeur par défaut
            $article->setupdated(new \Datetime());    //test de valeur par défaut
            
            
            // À partir du formBuilder, on génère le formulaire.
            $form = $formBuilder->getForm();
            
            return $this->render('comainBundle:article:add.html.twig', array('form'=>$form->createView(),));
        }            
    }

}