<?php

/* /project-list.twig */
class __TwigTemplate_2fb575611dbc663786e13c74c9c0e7241c684cea741cadb79f76b37b05874125 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "/project-list.twig", 1);
        $this->blocks = array(
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

    public function block_body($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

<div class=\"projects-header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"column search-filter\">
                <span class=\"uppercase black-text size14\">SEARCH RESULTS <span class=\"grey-text\">(219)</span></span>
            </div>
            <div class=\"column search-filter\">
                <span class=\"uppercase black-text size14\">FILTER RESULTS</span>
            </div>
        </div>
    </div>
</div>

<div class=\"projects-list\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"column projects-list__cards\">
                <div class=\"projects-list__cards__card\">
                    <img class=\"projects-list__cards__card__badge\" src=\"";
        // line 21
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/ic-bookmark-outline.svg");
        echo "\"></img>
                    <div class=\"row\">
                        <div class=\"column column--no-pd projects-list__cards__card__image\">
                            <img src=\"";
        // line 24
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/w1024.jpg");
        echo "\" alt=\"\" />
                        </div>
                        <div class=\"column --no-pd projects-list__cards__card__info\">
                            <div class=\"row\">
                                <div class=\"column\">
                                    <a href=\"/t/project-details.twig\">
                                        <h3 class=\"projects-list__cards__card__info__title\">Dahab Medical Center</h3>
                                    </a>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"column\">
                                    <span class=\"projects-list__cards__card__info__subtitle\">published by Noritu Arhitects & Co.</span>
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"projects-list__cards__card\">
                    <img class=\"projects-list__cards__card__badge\" src=\"";
        // line 77
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/ic-bookmark-outline.svg");
        echo "\"></img>
                    <div class=\"row\">
                        <div class=\"column column--no-pd projects-list__cards__card__image\">
                            <img src=\"";
        // line 80
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/w1024.jpg");
        echo "\" alt=\"\" />
                        </div>
                        <div class=\"column --no-pd projects-list__cards__card__info\">
                            <div class=\"row\">
                                <div class=\"column\">
                                    <a href=\"/t/project-details.twig\">
                                        <h3 class=\"projects-list__cards__card__info__title\">Dahab Medical Center</h3>
                                    </a>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"column\">
                                    <span class=\"projects-list__cards__card__info__subtitle\">published by Noritu Arhitects & Co.</span>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"column projects-list__filters\">
                <div class=\"projects-list__filters__search\">
                    <div class=\"row\">
                        <div class=\"column\">
                            <div class=\"select-wrapper\">
                                <select class=\"select\">
                                    <option>Select use</option>
                                    <option>Select use</option>
                                    <option>Select use</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"column\">
                            <div class=\"select-wrapper\">
                                <select class=\"select\">
                                    <option>Select Type</option>
                                    <option>Select Type</option>
                                    <option>Select Type</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"column\">
                            <div class=\"select-wrapper\">
                                <select class=\"select\">
                                    <option>Select Country</option>
                                    <option>Select Country</option>
                                    <option>Select Country</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"column\">
                            <div class=\"select-wrapper\">
                                <select class=\"select\">
                                    <option>Select Due date</option>
                                    <option>Select Due date</option>
                                    <option>Select Due date</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"column\">
                            <button type=\"submit\" class=\"button button-blue\">Search</button>
                        </div>
                    </div>
                </div>
                <div class=\"projects-list__filters__options\">
                    <div class=\"projects-list__filters__options__category\">
                        <span class=\"projects-list__filters__options__category__title uppercase black-text\">Status</span>
                        <div class=\"projects-list__filters__options__category__wrapper\">
                            <input type=\"checkbox\" name=\"status\" class=\"projects-list__filters__options__category__checkbox\" />
                            <span>Conceptual</span>
                        </div>
                        <div class=\"projects-list__filters__options__category__wrapper\">
                            <input type=\"checkbox\" name=\"status\" class=\"projects-list__filters__options__category__checkbox\" />
                            <span>Conceptual</span>
                        </div>
                        <div class=\"projects-list__filters__options__category__wrapper\">
                            <input type=\"checkbox\" name=\"status\" class=\"projects-list__filters__options__category__checkbox\" />
                            <span>Conceptual</span>
                        </div>
                        <div class=\"projects-list__filters__options__category__wrapper\">
                            <input type=\"checkbox\" name=\"status\" class=\"projects-list__filters__options__category__checkbox\" />
                            <span>Conceptual</span>
                        </div>
                        <span class=\"load-more\">
                            + 5 more
                        </span>
                    </div>
                    <div class=\"projects-list__filters__options__category\">
                        <span class=\"projects-list__filters__options__category__title uppercase black-text\">Status</span>
                        <div class=\"projects-list__filters__options__category__wrapper\">
                            <input type=\"checkbox\" name=\"status\" class=\"projects-list__filters__options__category__checkbox\" />
                            <span>Conceptual</span>
                        </div>
                        <div class=\"projects-list__filters__options__category__wrapper\">
                            <input type=\"checkbox\" name=\"status\" class=\"projects-list__filters__options__category__checkbox\" />
                            <span>Conceptual</span>
                        </div>
                        <div class=\"projects-list__filters__options__category__wrapper\">
                            <input type=\"checkbox\" name=\"status\" class=\"projects-list__filters__options__category__checkbox\" />
                            <span>Conceptual</span>
                        </div>
                        <div class=\"projects-list__filters__options__category__wrapper\">
                            <input type=\"checkbox\" name=\"status\" class=\"projects-list__filters__options__category__checkbox\" />
                            <span>Conceptual</span>
                        </div>
                        <span class=\"load-more\">
                            + 5 more
                        </span>
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
        return "/project-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 80,  119 => 77,  63 => 24,  57 => 21,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/project-list.twig", "/var/www/local.projecto.lan/public_html/src/Views/project-list.twig");
    }
}
