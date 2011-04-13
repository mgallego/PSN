<?php

namespace Acme\DemoBundle\Form;

use Symfony\Component\Form\Form;
use Symfony\Component\Form\TextField;
use Symfony\Component\Form\CheckboxField;
use Symfony\Component\Form\PasswordField;
use Symfony\Component\HttpFoundation\Response;
use Acme\DemoBundle\CreateUser\CreateRequest;

class CreateUserForm extends Form
{

   public $validate = false;
   /*public $username;
   
   public $userpass;
   public $first_name;
   public $last_name;
   public $rememberme;
  
   public $email;
   public $salt;
   */
   public function configure()
   {
     
     //     $this->setDataClass('Acme\\DemoBundle\\Entity\\User');
     $this->setDataClass('Acme\\DemoBundle\\Create\\CreateRequest');
     
     $this->add('username');     
     $this->add('password');
     $this->add('firstName');
     $this->add('lastName');
     $this->add('email');

     
     /*          $this->add(new TextField('username'));
	$this->add(new PasswordField('userpass'));
	$this->add(new TextField('first_name'));
	$this->add(new TextField('last_name'));
	$this->add(new TextField('email'));
     */
	//	$this->add(new CheckboxField('rememberme', array('required' => false,)));

   }

  
  
}