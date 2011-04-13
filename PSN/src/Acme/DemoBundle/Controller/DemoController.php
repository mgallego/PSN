<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Acme\DemoBundle\Form\ContactForm;
use Acme\DemoBundle\Entity\User;
use Acme\DemoBundle\Form\CreateUserForm;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;
use Acme\DemoBundle\Create\CreateRequest;


class DemoController extends Controller
{
    /**
     * @extra:Route("/", name="_demo")
     * @extra:Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @extra:Route("/crear/{name}", name="_demo_crear")
     */

    public function crearAction($name)
    {
      $user = new User();
      $user->setName($name);

      $em = $this->get('doctrine.orm.entity_manager');
      $em->persist($user);
      $em->flush();
      
      $id = $user->getId();

      return new Response('<html><title></title><body>El usuario '.$name.' ha sido creado con el id '.$id.'</body></html>');

    }

    /**
     * @extra:Route("/consultar/{id}", name="_demo_consultar")
     */
    public function consultarAction($id)
    {
      $em = $this->get('doctrine.orm.entity_manager');
      $user = $em->find('AcmeDemoBundle:User', $id);
      
      $name = $user->getName();

      return new Response('<html><head></head><body><h1>El usuario con id '.$id.' es '.$name.'</body></html>');

    }

    /**
     * @extra:Route("/hello/{name}", name="_demo_hello")
     * @extra:Template()
     */
    public function helloAction($name)
    {
        return array('name' => $name);
    }


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

            return new RedirectResponse($this->generateUrl('_demo'));
        }

        return array('form' => $form);
    }

    /**
     * @extra:Route("/createUser", name="_demo_create_user")
     */
    public function CreateUserAction()
    {
    	
    	//obtenemos el request
    	$request = $this->get('request');
    	
    	//cargamos en un array la clave login del post
    	$arrayuser = $request->request->get('createuser');
    	

	//comparamos con los valore de la base de datos
	$em = $this->get('doctrine.orm.entity_manager');

	$user = new User();
	$user->setFirstName($arrayuser['firstName']);
	$user->setLastName($arrayuser['lastName']);
	$user->setUserName($arrayuser['username']);
	$user->setEmail($arrayuser['email']);
	$user->setSalt(md5(time()));


	//	  $user->setPassword($arrayuser['password']);

	$encoder = new MessageDigestPasswordEncoder('sha512', true, 10);
	$password = $encoder->encodePassword($arrayuser['password'], $user->getSalt());

	$user->setPassword($password);

	$em->persist($user);
	$em->flush();
	
	$response =  new Response('<html><header></header><body><h1>USUARIO CREADO CORRECTAMENTE</h1></body></html>');
	
  	$response->headers->set('Content-Type', 'text/html');
    	    
    	return $response;


    }

    /**
     * @extra:Route("/create", name="_demo_create")
     * @extra:Template()
     */
    public function createAction()
    {

      $user = new User();
      $createRequest = new CreateRequest();

        $form = CreateUserForm::create($this->get('form.context'), 'createuser');

	$validator = $this->get('validator');

        $form->bind($this->container->get('request'), $createRequest);//$user);



	/* if ($form->isValid()) {
            $form->send($this->get('mailer'));

            $this->get('session')->setFlash('notice', 'Message sent!');

            return new RedirectResponse($this->generateUrl('_demo'));
        }
	*/
        return array('form' => $form);
    }



}
