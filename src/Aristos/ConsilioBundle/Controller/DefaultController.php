<?php

namespace Aristos\ConsilioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('AristosConsilioBundle:Default:index.html.twig', array('name' => 'alex'));
    }

    public function testAction()
    {
        echo 11;
    }
}
