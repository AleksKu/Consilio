<?php
namespace Aristos\PlazaBundle\Component;


 
abstract class Widget {



    abstract public function render();


    public static function factory($widgetName = null)
    {
        $class = new \Aristos\PlazaBundle\Widget\TestWidget();
        return new $class;
    }

}
