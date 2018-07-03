<?php

/* /dashboard-created.twig */
class __TwigTemplate_0dcd122f931170a8325061a5c47945f056e40fde5eb9952d1bbcd93ef0501f8f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "/dashboard-created.twig", 1);
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
                    <li class=\"tabs-list__item active\">
                        <a href=\"/t/dashboard-created.twig\">
                            <span>CREATED PROJECTS</span>
                        </a>
                    </li>
                    <li class=\"tabs-list__item\">
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
                <div class=\"projects-list__cards__card projects-list__cards__card--alternative\">
                    <div class=\"row\">
                        <div class=\"column column--no-pd projects-list__cards__card__image\">
                            <img src=\"";
        // line 45
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/w1024.jpg");
        echo "\" alt=\"\" />
                        </div>
                        <div class=\"column --no-pd projects-list__cards__card__info\">
                            <div class=\"row\">
                                <div class=\"column\">
                                    <a href=\"/t/project-details.twig\">
                                        <h3 class=\"projects-list__cards__card__info__title projects-list__cards__card__info__title--alternative\">Dahab Medical Center</h3>
                                    </a>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"column projects-list__cards__card__info__details\">
                                    <div class=\"projects-list__cards__card__info__details__key\">
                                        <span class=\"grey-text uppercase\">STATUS</span>
                                    </div>
                                    <div class=\"projects-list__cards__card__info__details__value\">
                                        <span class=\"black-text\">Post-Bidding</span>
                                    </div>
                                </div>
                                <div class=\"column projects-list__cards__card__info__details\">
                                    <div class=\"key\">
                                        <span class=\"grey-text uppercase\">STATUS</span>
                                    </div>
                                    <div class=\"value\">
                                        <span class=\"black-text\">Post-Bidding</span>
                                    </div>
                                </div>
                                <div class=\"column projects-list__cards__card__info__details\">
                                    <div class=\"projects-list__cards__card__info__details__key\">
                                        <span class=\"grey-text uppercase\">STATUS</span>
                                    </div>
                                    <div class=\"projects-list__cards__card__info__details__value\">
                                        <span class=\"black-text\">Post-Bidding</span>
                                    </div>
                                </div>
                                <div class=\"column projects-list__cards__card__info__details\">
                                    <div class=\"projects-list__cards__card__info__details__key\">
                                        <span class=\"grey-text uppercase\">STATUS</span>
                                    </div>
                                    <div class=\"projects-list__cards__card__info__details__value\">
                                        <span class=\"black-text\">Post-Bidding</span>
                                    </div>
                                </div>
                                <div class=\"column projects-list__cards__card__info__details\">
                                    <div class=\"projects-list__cards__card__info__details__key\">
                                        <span class=\"grey-text uppercase\">BIDS</span>
                                    </div>
                                    <div class=\"projects-list__cards__card__info__details__value\">
                                        <span class=\"blue-text text-bold\">3 received</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"projects-list__cards__card projects-list__cards__card--alternative\">
                    <div class=\"row\">
                        <div class=\"column column--no-pd projects-list__cards__card__image\">
                            <img src=\"";
        // line 103
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/w1024.jpg");
        echo "\" alt=\"\" />
                        </div>
                        <div class=\"column --no-pd projects-list__cards__card__info\">
                            <div class=\"row\">
                                <div class=\"column\">
                                    <a href=\"/t/project-details.twig\">
                                        <h3 class=\"projects-list__cards__card__info__title projects-list__cards__card__info__title--alternative\">Dahab Medical Center</h3>
                                    </a>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"column projects-list__cards__card__info__details\">
                                    <div class=\"projects-list__cards__card__info__details__key\">
                                        <span class=\"grey-text uppercase\">STATUS</span>
                                    </div>
                                    <div class=\"projects-list__cards__card__info__details__value\">
                                        <span class=\"black-text\">Post-Bidding</span>
                                    </div>
                                </div>
                                <div class=\"column projects-list__cards__card__info__details\">
                                    <div class=\"projects-list__cards__card__info__details__key\">
                                        <span class=\"grey-text uppercase\">STATUS</span>
                                    </div>
                                    <div class=\"projects-list__cards__card__info__details__value\">
                                        <span class=\"black-text\">Post-Bidding</span>
                                    </div>
                                </div>
                                <div class=\"column projects-list__cards__card__info__details\">
                                    <div class=\"projects-list__cards__card__info__details__key\">
                                        <span class=\"grey-text uppercase\">STATUS</span>
                                    </div>
                                    <div class=\"projects-list__cards__card__info__details__value\">
                                        <span class=\"black-text\">Post-Bidding</span>
                                    </div>
                                </div>
                                <div class=\"column projects-list__cards__card__info__details\">
                                    <div class=\"projects-list__cards__card__info__details__key\">
                                        <span class=\"grey-text uppercase\">STATUS</span>
                                    </div>
                                    <div class=\"projects-list__cards__card__info__details__value\">
                                        <span class=\"black-text\">Post-Bidding</span>
                                    </div>
                                </div>
                                <div class=\"column projects-list__cards__card__info__details\">
                                    <div class=\"projects-list__cards__card__info__details__key\">
                                        <span class=\"grey-text uppercase\">BIDS</span>
                                    </div>
                                    <div class=\"projects-list__cards__card__info__details__value\">
                                        <span class=\"blue-text text-bold\">3 received</span>
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

";
    }

    public function getTemplateName()
    {
        return "/dashboard-created.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 103,  90 => 45,  50 => 8,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/dashboard-created.twig", "/var/www/local.projecto.lan/public_html/src/Views/dashboard-created.twig");
    }
}
