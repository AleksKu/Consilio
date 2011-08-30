<?php
namespace Aristos\PlazaBundle\Widget;
use Aristos\PlazaBundle\Component\Widget;
 
class TestWidget extends Widget {

    public function render()
    {
       return 'testWidget';
    }

    public function geTemplate()
    {
        return 'PlazaBundle:Default:testWidget.html.twig';
    }

    public function getTestVar()
    {
        return 'xxx';
    }
}
