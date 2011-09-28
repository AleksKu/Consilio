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

        $material = $dm->getRepository('PlazaBundle:Material')->find('4e561c2a3def27dc61000000');
        $material->setAttribute('title','testtitle');
        echo $material->getAttibute('title');

       var_dump($material);


        return new Response('ok');
    }

    public function testAction()
    {
/*        $dm = $this->get('doctrine.odm.mongodb.document_manager');

        $products = $dm->getRepository('PlazaBundle:Material')->findAll();

        foreach ($products as $product)
        {
            var_dump($product);


        }
        return new Response('ok');*/


        return $this->render('PlazaBundle:Default:index.html.twig', array('name' => 'alex'));
    }
}
