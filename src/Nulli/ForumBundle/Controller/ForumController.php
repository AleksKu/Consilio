<?php

namespace Nulli\ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ForumController extends Controller
{
    
    public function indexAction($name = 'xxx')
    {
        return $this->render('NulliForumBundle:Default:index.html.twig', array('name' => $name));
    }
}
