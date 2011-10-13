<?php

namespace Aristos\PlazaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Aristos\PlazaBundle\Document\Material;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{

    public function indexAction($name = null)
    {
        //  $product = new Material();
        // $product->setType('news');


        $dm = $this->get('doctrine.odm.mongodb.document_manager');

        /* @var \Aristos\PlazaBundle\Document\Material $material  */
        $material = $dm->getRepository('PlazaBundle:Material')->find('4e561c2a3def27dc61000000');

        $material->setCreatedAt(new \DateTime());
        $material->setUpdatedAt(new \DateTime());

        $material->addParam(12, array(1,4,6,7));
        $dm->persist($material);
        $dm->flush();

        var_dump($material->getParams());


        return new Response('ok');
    }

    public function testAction()
    {
        $dm = $this->get('doctrine.odm.mongodb.document_manager');
        $material = $dm->getRepository('PlazaBundle:Material')->find('4e561c2a3def27dc61000000');
        var_dump($material->getParams());


        return $this->render('PlazaBundle:Default:index.html.twig', array('name' => 'alex'));
    }
}

