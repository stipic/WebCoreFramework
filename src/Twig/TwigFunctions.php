<?php
namespace App\Twig;

class TwigFunctions extends \Slim\Views\TwigExtension
{
    private $_container;

    public function __construct($container)
    {
        $this->_container = $container;
    }

    public function getFunctions()
    {
        return array
        (
            new \Twig_SimpleFunction('asset', 
                array
                (
                    $this, 
                    'TWIG_asset'
                ),
                array
                (
                    'is_safe' => array('html')
                )
            ),           
        );
    }

    public function TWIG_asset($path)
    {
        return '/' . $path;
    }
}