<?php

namespace Aristos\CronBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('CronBundle:Default:index.html.twig', array('name' => $name));
    }
}
