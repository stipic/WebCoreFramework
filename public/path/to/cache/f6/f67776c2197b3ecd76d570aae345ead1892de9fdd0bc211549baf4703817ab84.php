<?php

/* base.html.twig */
class __TwigTemplate_9ac4c5a143f2ea9ba7100d8243c3e057fc54bf6cd45350d6f48902004091363f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 8
        echo "        
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('navigation', $context, $blocks);
        // line 44
        echo "
        ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "
        ";
        // line 47
        $this->displayBlock('footer', $context, $blocks);
        // line 87
        echo "
        ";
        // line 88
        $this->displayBlock('javascripts', $context, $blocks);
        // line 91
        echo "    </body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "            <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
            <meta charset=\"UTF-8\">
        ";
    }

    public function block_title($context, array $blocks = array())
    {
        echo "Projecto Dev!";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "            <link href=\"https://fonts.googleapis.com/css?family=Nunito&amp;subset=latin-ext\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("assets/css/app.css");
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("assets/css/owl.carousel.css");
        echo "\">
        ";
    }

    // line 16
    public function block_navigation($context, array $blocks = array())
    {
        // line 17
        echo "            <nav class=\"navigation\">
                <div class=\"container\">
                    <div class=\"navigation__inner\">
                        <div class=\"row\">
                            <div class=\"column\">
                                <a href=\"/\"><span class=\"logo\">PROJECTO</span></a>
                            </div>
                            <div class=\"column\">
                                <div class=\"row\">
                                    <div class=\"column nav\">
                                        <ul class=\"navigation__inner__list\">
                                            <li class=\"navigation__inner__list__item\"><a href=\"/t/project-list.twig\">Browse</a></li>
                                            <li class=\"navigation__inner__list__item\"><a href=\"#\">How it works</a></li>
                                            <li class=\"navigation__inner__list__item\"><a href=\"#\">About</a></li>
                                        </ul>
                                    </div>
                                    <div class=\"column navigation__inner__buttons\">
                                        <a href=\"/login\" class=\"button button-light-grey\">LOGIN</a>
                                        <a href=\"/register\" class=\"button button-blue\">REGISTER</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        ";
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        // line 48
        echo "            <footer class=\"footer\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"column footer__company\">
                            <span class=\"logo logo--alternative\">PROJECTO</span>
                            <span class=\"footer__company__desc\">Connecting clients and contractors</span>
                        </div>
                        <div class=\"column footer__nav\">
                            <div class=\"row\">
                                <div class=\"column\">
                                    <h5 class=\"footer__nav__heading\">BROWSE</h5>
                                    <ul class=\"footer__nav__list\">
                                        <li class=\"footer__nav__list__item\"><a href=\"#\" class=\"link-footer\">Projects</a></li>
                                        <li class=\"footer__nav__list__item\"><a href=\"#\" class=\"link-footer\">Companies</a></li>
                                        <li class=\"footer__nav__list__item\"><a href=\"#\" class=\"link-footer\">Materials</a></li>
                                    </ul>
                                </div>
                                <div class=\"column\">
                                    <h5 class=\"footer__nav__heading\">HOW IT WORKS</h5>
                                    <ul class=\"footer__nav__list\">
                                        <li class=\"footer__nav__list__item\"><a href=\"#\" class=\"link-footer\">I’m a investor</a></li>
                                        <li class=\"footer__nav__list__item\"><a href=\"#\" class=\"link-footer\">I’m a contractor</a></li>
                                    </ul>
                                </div>
                                <div class=\"column\">
                                    <h5 class=\"footer__nav__heading\">ABOUT</h5>
                                    <ul class=\"footer__nav__list\">
                                        <li class=\"footer__nav__list__item\"><a href=\"#\" class=\"link-footer\">Who are we</a></li>
                                        <li class=\"footer__nav__list__item\"><a href=\"#\" class=\"link-footer\">Privacy policy</a></li>
                                        <li class=\"footer__nav__list__item\"><a href=\"#\" class=\"link-footer\">Terms of Service</a></li>
                                        <li class=\"footer__nav__list__item\"><a href=\"#\" class=\"link-footer\">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        ";
    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        // line 89
        echo "            <script type=\"text/javascript\" src=\"";
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("assets/js/app.js");
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  186 => 89,  183 => 88,  141 => 48,  138 => 47,  133 => 45,  103 => 17,  100 => 16,  94 => 12,  90 => 11,  87 => 10,  84 => 9,  71 => 5,  68 => 4,  63 => 91,  61 => 88,  58 => 87,  56 => 47,  53 => 46,  51 => 45,  48 => 44,  46 => 16,  42 => 14,  40 => 9,  37 => 8,  35 => 4,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/var/www/local.projecto.lan/public_html/templates/base.html.twig");
    }
}
