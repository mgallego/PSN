<?php

namespace SFM\PicmntBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{

  //Home page, only show the page
    /**
    * @extra:Route("/", name="home")
    * @extra:Template()
    */
    public function indexAction()
;{    
      	return array();
    }




}
