<?php

namespace co\mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
// Import new namespaces
use co\mainBundle\Entity\Enquiry;
use co\mainBundle\Form\EnquiryType;

class PageController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function indexAction()
    {
        //return array();
        return $this->render('comainBundle:Page:index.html.twig');
    }

     /**
     * @Route("/cv", name="cv")
     * @Template()
     */
    public function cvAction()
    {
        //return array();
        return $this->render('comainBundle:Page:cv.html.twig');
    }

     /**
     * @Route("/contact", name="contact")
     * @Template()
     * @method({"GET", "POST"})      
     */
    public function contactAction()
    {
        $enquiry = new Enquiry();                               //Nouvel objet nous permettant de manipuler nos champs (sujet, mail, objet etc...)
        $form = $this->createForm(new EnquiryType(), $enquiry); //Créatio nde notre formulaire de contact

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {
                // Perform some action, such as sending an email
                $message = \Swift_Message::newInstance()
                    ->setSubject('Message envoyé depuis la page de Contact du Site Perso')
                    ->setFrom('contact@djepo.craym.eu')
                    ->setTo($this->container->getParameter('blogger_blog.emails.contact_email'))                
                    ->setBody($this->renderView('comainBundle:Page:contactEmail.txt.twig', array('enquiry' => $enquiry)));
                $this->get('mailer')->send($message);
                
                $this->get('session')->setFlash('notification', 'Votre message à bien été envoyé. Nous vous répondrons dès que possible.');
                
                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('contact'));
            }
        }

        return $this->render('comainBundle:Page:contact.html.twig', array('form' => $form->createView()));
}
}