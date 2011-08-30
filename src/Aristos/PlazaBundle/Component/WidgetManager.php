<?php
namespace Aristos\PlazaBundle\Component;
 
class WidgetManager {

    protected $documentManager;
    
    public function __construct(\ObjectManager $documentManager)
    {
        $this->documentManager = $documentManager;
    }

}
