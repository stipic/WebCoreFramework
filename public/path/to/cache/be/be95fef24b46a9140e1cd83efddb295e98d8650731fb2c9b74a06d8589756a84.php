<?php

/* /homepage.twig */
class __TwigTemplate_7426692b305609257c196818265da10e72afbcf834bb23361c1f06d8fa0d00b4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "/homepage.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_title($context, array $blocks = array())
    {
        echo "Projecto Home";
    }

    public function block_body($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Projecto compares hundreds of projects to find you the right one, fast.</h1>
        <div class=\"row\">
            <div class=\"column items\">
                <div class=\"jumbotron__item\">
                    <img src=\"";
        // line 9
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/ic-find-project.svg");
        echo "\" alt=\"find project\" />
                    <h5 class=\"jumbotron__item__heading\">Find project</h5>
                    <span class=\"jumbotron__item__description\">Find a perfect project that suits your needs.</span>
                </div>
                <div class=\"jumbotron__item\">
                    <img src=\"";
        // line 14
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/ic-bid-proposal.svg");
        echo "\" alt=\"find project\" />
                    <h5 class=\"jumbotron__item__heading\">Bid proposal</h5>
                    <span class=\"jumbotron__item__description\">Send your bid and wait for client to contact you.</span>
                </div>
                <div class=\"jumbotron__item\">
                    <img src=\"";
        // line 19
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/ic-work.svg");
        echo "\" alt=\"find project\" />
                    <h5 class=\"jumbotron__item__heading\">Work</h5>
                    <span class=\"jumbotron__item__description\">Start working on a project and get payed.</span>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"column\">
                <a href=\"\">
                    <span class=\"load-more load-more--alternative\">See how it works</span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class=\"filter-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"column\">
                <div class=\"filter-section__search-fields\">
                    <div class=\"select-wrapper home-filter\">
                        <select class=\"select\">
                            <option>Select Use</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class=\"select-wrapper home-filter\">
                        <select class=\"select\">
                            <option>Select Type</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class=\"select-wrapper home-filter\">
                        <select class=\"select\">
                            <option>Select Country</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class=\"select-wrapper home-filter\">
                        <select class=\"select\">
                            <option>Select Due Date</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <button class=\"button button-blue button-blue--alternative\">Find project</button>
                </div>
                <div class=\"filter-section__projects\">
                    <div class=\"filter-section__projects__inner\">
                        <div class=\"owl-carousel\">
                            <div class=\"item\">
                                <div class=\"row\">
                                    <div class=\"column column--no-pd\">
                                        <img class=\"filter-section__projects__image\" src=\"";
        // line 76
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/w1024.jpg");
        echo "\" alt=\"house\" />
                                    </div>
                                    <div class=\"column column--no-pd\">
                                        <div class=\"filter-section__projects__info\">
                                            <a href=\"/t/project-details.twig\">
                                                <h3 class=\"filter-section__projects__info__heading\">Napa Villa / Housing project
                                                </h3>
                                            </a>
                                            <h5 class=\"filter-section__projects__info__description\">NORITSU ARCGITECTS & CO
                                            </h5>
                                            <div class=\"filter-section__projects__info__details\">
                                                <div class=\"row\">
                                                    <div class=\"column filter-section__projects__info__details__key\">
                                                        <span>STATUS</span>
                                                    </div>
                                                    <div class=\"column filter-section__projects__info__details__key\">
                                                        <span>VALUE</span>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"column filter-section__projects__info__details__value\">
                                                        <span>Sub-Bidding</span>
                                                    </div>
                                                    <div class=\"column filter-section__projects__info__details__value\">
                                                        <span>\$300.000</span>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"column filter-section__projects__info__details__key\">
                                                        <span>START DATE</span>
                                                    </div>
                                                    <div class=\"column filter-section__projects__info__details__key\">
                                                        <span>BID DATE</span>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"column filter-section__projects__info__details__value\">
                                                        <span>Dec 25, 2017.</span>
                                                    </div>
                                                    <div class=\"column filter-section__projects__info__details__value\">
                                                        <span>Oct. 24, 2017.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"row\">
                                    <div class=\"column column--no-pd\">
                                        <img class=\"filter-section__projects__image\" src=\"";
        // line 127
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/w1024.jpg");
        echo "\" alt=\"house\" />
                                    </div>
                                    <div class=\"column column--no-pd\">
                                        <div class=\"filter-section__projects__info\">
                                            <a href=\"/t/project-details.twig\">
                                                <h3 class=\"filter-section__projects__info__heading\">Napa Villa / Housing project
                                                </h3>
                                            </a>
                                            <h5 class=\"filter-section__projects__info__description\">NORITSU ARCGITECTS & CO
                                            </h5>
                                            <div class=\"filter-section__projects__info__details\">
                                                <div class=\"row\">
                                                    <div class=\"column filter-section__projects__info__details__key\">
                                                        <span>STATUS</span>
                                                    </div>
                                                    <div class=\"column filter-section__projects__info__details__key\">
                                                        <span>VALUE</span>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"column filter-section__projects__info__details__value\">
                                                        <span>Sub-Bidding</span>
                                                    </div>
                                                    <div class=\"column filter-section__projects__info__details__value\">
                                                        <span>\$300.000</span>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"column filter-section__projects__info__details__key\">
                                                        <span>START DATE</span>
                                                    </div>
                                                    <div class=\"column filter-section__projects__info__details__key\">
                                                        <span>BID DATE</span>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"column filter-section__projects__info__details__value\">
                                                        <span>Dec 25, 2017.</span>
                                                    </div>
                                                    <div class=\"column filter-section__projects__info__details__value\">
                                                        <span>Oct. 24, 2017.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"portfolio\">
    <div class=\"container\">
        <h2>These companies trust us</h2>
        <div class=\"row portfolio__companies\">
            <div class=\"column\">
                <img src=\"";
        // line 188
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/lg.png");
        echo "\" class=\"portfolio__companies__logo\" />
            </div>
            <div class=\"column\">
                <img src=\"";
        // line 191
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/logos-portfolio-project-logos.png");
        echo "\" class=\"portfolio__companies__logo\" />
            </div>
            <div class=\"column\">
                <img src=\"";
        // line 194
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/apple-logo_318-40184.jpg");
        echo "\" class=\"portfolio__companies__logo\" />
            </div>
            <div class=\"column\">
                <img src=\"";
        // line 197
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/Washington_capitals_alternate_logo.gif");
        echo "\" class=\"portfolio__companies__logo\" />
            </div>
            <div class=\"column\">
                <img src=\"";
        // line 200
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/58503297ca7f0cdf1e8b526e-750-485.png");
        echo "\" class=\"portfolio__companies__logo\" />
            </div>
        </div>
    </div>
</div>

<div class=\"pricing\">
    <div class=\"container\">
        <h1 class=\"pricing__header\">Pricing</h1>
        <span class=\"header-description\">Start your free 60 day period, get hired and start working.</span>
        <div class=\"row cards\">
            <div class=\"column\">
                <div class=\"pricing__card\">
                    <div class=\"pricing__card__inner\">
                        <h2 class=\"pricing__card__heading\">Free</h2>
                        <span class=\"pricing__card__desc\">\$0/month</span>
                        <div class=\"pricing__card__info\">
                            <div class=\"row\">
                                <div class=\"column column--no-pd\">
                                    <span>Project visibility</span>
                                </div>
                                <div class=\"column column--no-pd\">
                                    <span>10</span>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"column column--no-pd\">
                                    <span>Project access</span>
                                </div>
                                <div class=\"column column--no-pd\">
                                    <span>2</span>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"column column--no-pd\">
                                    <span>Priority Ranking</span>
                                </div>
                                <div class=\"column column--no-pd\">
                                    <span>3rd</span>
                                </div>
                            </div>
                        </div>
                        <button class=\"button button-dark-grey\">GET STARTED</button>
                    </div>
                </div>
            </div>
            <div class=\"column\">
                <div class=\"pricing__card\">
                    <div class=\"pricing__card__inner\">
                        <h2 class=\"pricing__card__heading pricing__card__heading--alternative\">Free</h2>
                        <span class=\"pricing__card__desc\">\$0/month</span>
                        <div class=\"pricing__card__info\">
                            <div class=\"row\">
                                <div class=\"column\">
                                    <span>Project visibility</span>
                                </div>
                                <div class=\"column\">
                                    <span>10</span>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"column\">
                                    <span>Project access</span>
                                </div>
                                <div class=\"column\">
                                    <span>2</span>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"column\">
                                    <span>Priority Ranking</span>
                                </div>
                                <div class=\"column\">
                                    <span>3rd</span>
                                </div>
                            </div>
                        </div>
                        <button class=\"button button-blue\">GET STARTED</button>
                    </div>
                </div>
            </div>
            <div class=\"column\">
                <div class=\"pricing__card\">
                    <div class=\"pricing__card__inner\">
                        <h2 class=\"pricing__card__heading\">Free</h2>
                        <span class=\"pricing__card__desc\">\$0/month</span>
                        <div class=\"pricing__card__info\">
                            <div class=\"row\">
                                <div class=\"column\">
                                    <span>Project visibility</span>
                                </div>
                                <div class=\"column\">
                                    <span>10</span>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"column\">
                                    <span>Project access</span>
                                </div>
                                <div class=\"column\">
                                    <span>2</span>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"column\">
                                    <span>Priority Ranking</span>
                                </div>
                                <div class=\"column\">
                                    <span>3rd</span>
                                </div>
                            </div>
                        </div>
                        <button class=\"button button-dark-grey\">GET STARTED</button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"column\">
                <a href=\"\">
                    <span class=\"load-more load-more--alternative\">See details</span>
                </a>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "/homepage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 200,  263 => 197,  257 => 194,  251 => 191,  245 => 188,  181 => 127,  127 => 76,  67 => 19,  59 => 14,  51 => 9,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/homepage.twig", "/var/www/local.projecto.lan/public_html/src/Views/homepage.twig");
    }
}
