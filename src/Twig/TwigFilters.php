<?php
namespace App\Twig;

class TwigFilters extends \Slim\Views\TwigExtension
{
    private $_container;

    public function __construct($container)
    {
        $this->_container = $container;
    }

    /*public function getFilters()
    {
        return array
        (
            new \Twig_Filter('base_url', 
                array
                (
                    $this, 
                    'TWIG_base_url'
                ),
                array
                (
                    'is_safe' => array('html')
                )
            ),           
        );
    }

    public function TWIG_base_url($string)
    {
        $config = $this->_container->get('settings');
        return $config['base_url'] . (!empty($string) ? '/' . $string : '');
    }*/
}