<?php
namespace Aristos\PlazaBundle\Twig\Extension;

use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Bundle\TwigBundle\Loader\FilesystemLoader;
use Aristos\PlazaBundle\Component\Widget;

class WidgetExtension extends \Twig_Extension
{


    protected $resources;
    protected $blocks;
    protected $environment;
    protected $themes;
    protected $varStack;
    protected $template;

    public function __construct(array $resources = array())
    {
        $this->themes = new \SplObjectStorage();
        $this->varStack = array();
        $this->blocks = new \SplObjectStorage();
        $this->resources = $resources;
    }

    /**
     * {@inheritdoc}
     */
    public function initRuntime(\Twig_Environment $environment)
    {
        $this->environment = $environment;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            'widget' => new \Twig_Function_Method($this, 'getWidget', array('is_safe' => array('html'))),
        );
    }


    public function getWidget($widgetName, array $variables = array())
    {
        $widget = Widget::factory($widgetName);
        $this->template = $this->environment->loadTemplate($widget->geTemplate());

       return $this->template->render(array('this'=>$widget));


    }


    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    function getName()
    {
        return 'widget';
    }


}
