<?php

/* /dashboard-received.twig */
class __TwigTemplate_487687aab3a235518e9bb041aa270ee9431dee5ed089202a4596a1523641cfed extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "/dashboard-received.twig", 1);
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
        echo "Projecto - Details";
    }

    public function block_body($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

<div class=\"projects-header\">
    <div class=\"container container--alternative\">
        <div class=\"row projects-header__header\">
            <div class=\"column\">
                <div class=\"projects-header__header__heading\">
                    <img src=\"";
        // line 8
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/ic-placeholder-buildings-bg.svg");
        echo "\" alt=\"projecto\" />
                    <div class=\"projects-header__header__heading__name\">
                        <h3 class=\"projects-header__header__heading__name__title\">A1 Builders Ltd.</h3>
                        <a href=\"#\" class=\"projects-header__header__heading__name__link\">View public profile</a>
                    </div>
                </div>
            </div>
            <div class=\"column\">
                <button class=\"button button-blue\">Create project</button>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"column\">
                <ul class=\"tabs-list\">
                    <li class=\"tabs-list__item\">
                        <a href=\"/t/dashboard-created.twig\">
                            <span>CREATED PROJECTS</span>
                        </a>
                    </li>
                    <li class=\"tabs-list__item active\">
                        <a href=\"/t/dashboard-received.twig\">
                            <span>RECEIVED WON</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class=\"projects-list\">
    <div class=\"container container--alternative\">
        <div class=\"row\">
            <div class=\"column projects-list__cards\">
                <div class=\"row\">
                    <div class=\"column projects-list__title\">
                        <h2 class=\"align-left\">Napa Villa / Housing project</h2>
                        <span class=\"blue-text underline size14\">Project details</span>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"column\">
                        <div class=\"sort-cards\">
                            <div class=\"row\">
                                <div class=\"column\">
                                    <span></span>
                                </div>
                                <div class=\"column\">
                                    <span>NAME</span>
                                </div>
                                <div class=\"column\">
                                    <span>START DATE</span>
                                </div>
                                <div class=\"column\">
                                    <span>VALUE</span>
                                </div>
                                <div class=\"column\">
                                    <span>ATTACHMENTS</span>
                                </div>
                                <div class=\"column\">
                                    <span>SOFTWARE</span>
                                </div>
                            </div>
                            <hr />
                        </div>
                    </div>
                </div>
                <div class=\"projects-list__cards__card projects-list__cards__card--alternative small\">
                    <div class=\"row\">
                        <div class=\"column projects-list__cards__card__image\">
                            <img src=\"";
        // line 78
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/Washington_capitals_alternate_logo.gif");
        echo "\" alt=\"\" />
                        </div>
                        <div class=\"column projects-list__cards__card__info__details\">
                            <a href=\"/t/project-details.twig\">
                                <h3 class=\"projects-list__cards__card__info__title projects-list__cards__card__info__title--alternative\">Dahab Medical Center</h3>
                            </a>
                        </div>
                        <div class=\"column projects-list__cards__card__info__details\">
                            <div class=\"projects-list__cards__card__info__details__key\">
                                <span class=\"grey-text uppercase\">START DATE</span>
                            </div>
                            <div class=\"projects-list__cards__card__info__details__value\">
                                <span class=\"black-text\">Dec 25, 2017.</span>
                            </div>
                        </div>
                        <div class=\"column projects-list__cards__card__info__details\">
                            <div class=\"key\">
                                <span class=\"grey-text uppercase\">VALUE</span>
                            </div>
                            <div class=\"value\">
                                <span class=\"black-text\">\$1.300.000</span>
                            </div>
                        </div>
                        <div class=\"column projects-list__cards__card__info__details\">
                            <div class=\"projects-list__cards__card__info__details__key\">
                                <span class=\"grey-text uppercase\">ATTACHMENTS</span>
                            </div>
                            <div class=\"projects-list__cards__card__info__details__value\">
                                <span class=\"black-text\">5 files</span>
                            </div>
                        </div>
                        <div class=\"column projects-list__cards__card__info__details\">
                            <div class=\"projects-list__cards__card__info__details__key\">
                                <span class=\"grey-text uppercase\">SOFTWARE</span>
                            </div>
                            <div class=\"projects-list__cards__card__info__details__value\">
                                <span class=\"black-text\">ALL PLAN</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"projects-list__cards__card projects-list__cards__card--alternative small\">
                    <div class=\"row\">
                        <div class=\"column projects-list__cards__card__image\">
                            <img src=\"";
        // line 122
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/Washington_capitals_alternate_logo.gif");
        echo "\" alt=\"\" />
                        </div>
                        <div class=\"column projects-list__cards__card__info__details\">
                            <a href=\"/t/project-details.twig\">
                                <h3 class=\"projects-list__cards__card__info__title projects-list__cards__card__info__title--alternative\">Dahab Medical Center</h3>
                            </a>
                        </div>
                        <div class=\"column projects-list__cards__card__info__details\">
                            <div class=\"projects-list__cards__card__info__details__key\">
                                <span class=\"grey-text uppercase\">START DATE</span>
                            </div>
                            <div class=\"projects-list__cards__card__info__details__value\">
                                <span class=\"black-text\">Dec 25, 2017.</span>
                            </div>
                        </div>
                        <div class=\"column projects-list__cards__card__info__details\">
                            <div class=\"key\">
                                <span class=\"grey-text uppercase\">VALUE</span>
                            </div>
                            <div class=\"value\">
                                <span class=\"black-text\">\$1.300.000</span>
                            </div>
                        </div>
                        <div class=\"column projects-list__cards__card__info__details\">
                            <div class=\"projects-list__cards__card__info__details__key\">
                                <span class=\"grey-text uppercase\">ATTACHMENTS</span>
                            </div>
                            <div class=\"projects-list__cards__card__info__details__value\">
                                <span class=\"black-text\">5 files</span>
                            </div>
                        </div>
                        <div class=\"column projects-list__cards__card__info__details\">
                            <div class=\"projects-list__cards__card__info__details__key\">
                                <span class=\"grey-text uppercase\">SOFTWARE</span>
                            </div>
                            <div class=\"projects-list__cards__card__info__details__value\">
                                <span class=\"black-text\">ALL PLAN</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"column projects-list__cards\">
                <div class=\"row\">
                    <div class=\"column projects-list__title\">
                        <h2 class=\"align-left\">Napa Villa / Housing project</h2>
                        <span class=\"blue-text underline size14\">Project details</span>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"column\">
                        <div class=\"sort-cards\">
                            <div class=\"row\">
                                <div class=\"column\">
                                    <span></span>
                                </div>
                                <div class=\"column\">
                                    <span>NAME</span>
                                </div>
                                <div class=\"column\">
                                    <span>START DATE</span>
                                </div>
                                <div class=\"column\">
                                    <span>VALUE</span>
                                </div>
                                <div class=\"column\">
                                    <span>ATTACHMENTS</span>
                                </div>
                                <div class=\"column\">
                                    <span>SOFTWARE</span>
                                </div>
                            </div>
                            <hr />
                        </div>
                    </div>
                </div>
                <div class=\"projects-list__cards__card projects-list__cards__card--alternative small\">
                    <div class=\"row\">
                        <div class=\"column projects-list__cards__card__image\">
                            <img src=\"";
        // line 203
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/Washington_capitals_alternate_logo.gif");
        echo "\" alt=\"\" />
                        </div>
                        <div class=\"column projects-list__cards__card__info__details\">
                            <a href=\"/t/project-details.twig\">
                                <h3 class=\"projects-list__cards__card__info__title projects-list__cards__card__info__title--alternative\">Dahab Medical Center</h3>
                            </a>
                        </div>
                        <div class=\"column projects-list__cards__card__info__details\">
                            <div class=\"projects-list__cards__card__info__details__key\">
                                <span class=\"grey-text uppercase\">START DATE</span>
                            </div>
                            <div class=\"projects-list__cards__card__info__details__value\">
                                <span class=\"black-text\">Dec 25, 2017.</span>
                            </div>
                        </div>
                        <div class=\"column projects-list__cards__card__info__details\">
                            <div class=\"key\">
                                <span class=\"grey-text uppercase\">VALUE</span>
                            </div>
                            <div class=\"value\">
                                <span class=\"black-text\">\$1.300.000</span>
                            </div>
                        </div>
                        <div class=\"column projects-list__cards__card__info__details\">
                            <div class=\"projects-list__cards__card__info__details__key\">
                                <span class=\"grey-text uppercase\">ATTACHMENTS</span>
                            </div>
                            <div class=\"projects-list__cards__card__info__details__value\">
                                <span class=\"black-text\">5 files</span>
                            </div>
                        </div>
                        <div class=\"column projects-list__cards__card__info__details\">
                            <div class=\"projects-list__cards__card__info__details__key\">
                                <span class=\"grey-text uppercase\">SOFTWARE</span>
                            </div>
                            <div class=\"projects-list__cards__card__info__details__value\">
                                <span class=\"black-text\">ALL PLAN</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"projects-list__cards__card projects-list__cards__card--alternative small\">
                    <div class=\"row\">
                        <div class=\"column projects-list__cards__card__image\">
                            <img src=\"";
        // line 247
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/Washington_capitals_alternate_logo.gif");
        echo "\" alt=\"\" />
                        </div>
                        <div class=\"column projects-list__cards__card__info__details\">
                            <a href=\"/t/project-details.twig\">
                                <h3 class=\"projects-list__cards__card__info__title projects-list__cards__card__info__title--alternative\">Dahab Medical Center</h3>
                            </a>
                        </div>
                        <div class=\"column projects-list__cards__card__info__details\">
                            <div class=\"projects-list__cards__card__info__details__key\">
                                <span class=\"grey-text uppercase\">START DATE</span>
                            </div>
                            <div class=\"projects-list__cards__card__info__details__value\">
                                <span class=\"black-text\">Dec 25, 2017.</span>
                            </div>
                        </div>
                        <div class=\"column projects-list__cards__card__info__details\">
                            <div class=\"key\">
                                <span class=\"grey-text uppercase\">VALUE</span>
                            </div>
                            <div class=\"value\">
                                <span class=\"black-text\">\$1.300.000</span>
                            </div>
                        </div>
                        <div class=\"column projects-list__cards__card__info__details\">
                            <div class=\"projects-list__cards__card__info__details__key\">
                                <span class=\"grey-text uppercase\">ATTACHMENTS</span>
                            </div>
                            <div class=\"projects-list__cards__card__info__details__value\">
                                <span class=\"black-text\">5 files</span>
                            </div>
                        </div>
                        <div class=\"column projects-list__cards__card__info__details\">
                            <div class=\"projects-list__cards__card__info__details__key\">
                                <span class=\"grey-text uppercase\">SOFTWARE</span>
                            </div>
                            <div class=\"projects-list__cards__card__info__details__value\">
                                <span class=\"black-text\">ALL PLAN</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "/dashboard-received.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 247,  254 => 203,  170 => 122,  123 => 78,  50 => 8,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/dashboard-received.twig", "/var/www/local.projecto.lan/public_html/src/Views/dashboard-received.twig");
    }
}
