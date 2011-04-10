<?php

namespace PSN\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use PSN\MainBundle\Form\ContactForm;
use PSN\MainBundle\Form\LoginForm;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use PSN\MainBundle\Entity\User;

class DefaultController extends Controller
{

  //Accion principal, simplemente muestra la plantilla
    /**
    * @extra:Route("/", name="_psn")
    * @extra:Template()
    */
    public function indexAction()
    {
      	return array();
    }

    
    //muestra una web html que crea a traves del response con una frase
    /**
    * @extra:Route("/prueba", name="_psn_prueba")
    */
    public function pruebaAction()
    {
	return new Response('<html><body>Parace que voy pillandole el truco a esto!</body></html>');
    }


    //genera un formulario de login y lo muestra por pantalla
    /**
    * @extra:Route("/login", name="_psn_login")
    * @extra:Template()
    */
    public function loginAction()
    {

    	$form = LoginForm::create($this->get('form.context'), 'login');

    	$form->bind($this->container->get('request'), $form);
    	
    	if ($form->isValid()){
    		
    		$this->get('session')->setFlash('notice', 'Intentando Login');
    		
    		  		
    		return new RedirectResponse($this->generateUrl('_psn_login'));
    	}

    
    	return array('form' => $form);
    	
    	
    }
   
    //genera un formulario de contacto
	/**
     * @extra:Route("/contact", name="_demo_contact")
     * @extra:Template()
     */
    public function contactAction()
    {
        $form = ContactForm::create($this->get('form.context'), 'contact');

        $form->bind($this->container->get('request'), $form);
        if ($form->isValid()) {
            $form->send($this->get('mailer'));

            $this->get('session')->setFlash('notice', 'Message sent!');

            return new RedirectResponse($this->generateUrl('_psn'));
        }

        return array('form' => $form);
    }
		

    //valida el login
     /**
     * @extra:Route("/login_check", name="_psn_login_check")
     * 
     */
    public function loginCheckAction()
    {
    	
    	//obtenemos el request
    	$request = $this->get('request');
    	
    	//cargamos en un array la clave login del post
    	$arralogin = $request->request->get('login');
    	

	//comparamos con los valore de la base de datos
	$em = $this->get('doctrine.orm.entity_manager');

	$user = $em->getRepository('PSNMainBundle:User')->findOneBy(array('name' => $arralogin["username"]));

	//	$pass = $user->getPassword();
	
	if (isset($user))
        {
	  $pass = $user->getPassword();
	  if ($user->getPassword() == md5($arralogin["userpass"]))
	    {
	      $response =  new Response('<html><header></header><body><h1>BIENVENIDO '.$arralogin["username"].'</h1></body></html>');
	    }
	  else
	    {
	      $response =  new Response('<html><header></header><body><h1>A CAGAR AL CAMPO</h1></body></html>');
	    }
	}
	else
	  {
	     $response =  new Response('<html><header></header><body><h1>A CAGAR AL CAMPO</h1></body></html>');
	  }
  	
    	$response->headers->set('Content-Type', 'text/html');
    	    
    	return $response;
    }


}
