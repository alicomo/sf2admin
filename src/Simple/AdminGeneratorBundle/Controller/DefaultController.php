<?php

namespace Simple\AdminGeneratorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('SimpleAdminGeneratorBundle:Default:index.html.twig', array('name' => $name));
    }
}
