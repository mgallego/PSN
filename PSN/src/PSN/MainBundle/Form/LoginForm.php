<?php

namespace PSN\MainBundle\Form;

use Symfony\Component\Form\Form;
use Symfony\Component\Form\TextField;
use Symfony\Component\Form\CheckboxField;
use Symfony\Component\Form\PasswordField;
use Symfony\Component\HttpFoundation\Response;


class LoginForm extends Form
{

   public $validate = false;
   public $username;
   public $userpass;
   public $rememberme;
   
   public function configure()
   {
	$this->add(new TextField('username'));
	$this->add(new PasswordField('userpass'));
	$this->add(new CheckboxField('rememberme', array('required' => false,)));

   }

   public function validar(){

		if ($this->username == 'moises' && $this->userpass == 'password'){
			
			$this->validate = true;
		}
		else
		{
			$this->validate = false;
		}
   	
   }
   
}