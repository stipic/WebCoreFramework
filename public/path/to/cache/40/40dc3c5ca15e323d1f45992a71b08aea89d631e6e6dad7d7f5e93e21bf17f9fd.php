<?php

/* /project-details.twig */
class __TwigTemplate_57392dfa2aa70da0bd06efbbde885c1bb857acd881a31484563ad24a20b30ad3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "/project-details.twig", 1);
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
    <div class=\"container\">
        <div class=\"container container--alternative\">
            <div class=\"row projects-header__header\">
                <img src=\"";
        // line 7
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/dark.svg");
        echo "\" class=\"back-arrow\"></img>
                <div class=\"column\">
                    <div class=\"projects-header__header__heading\">
                        <div class=\"projects-header__header__heading__name\">
                            <div class=\"header-icon\">
                                <h3 class=\"projects-header__header__heading__name__title\">Napa Villa / Housing project</h3>
                                <img src=\"";
        // line 13
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/ic-bookmark.svg");
        echo "\"></img>
                            </div>
                            <span class=\"projects-header__header__heading__name__subtitle\">published by
                                <a href=\"#\">Noritsu Arhitects & Co.</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class=\"column\">
                    <button class=\"button button-blue button-icon\">Place bid<img src=\"";
        // line 22
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/ic-place-bid.svg");
        echo "\" /></button>
                    <button class=\"button button-dark-grey button-icon\">PLANS & SPEC<img src=\"";
        // line 23
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/ic-plans-and-specs-download.svg");
        echo "\" /></button>
                    <div class=\"more-dots\"></div>
                    <div class=\"dropdown-menu\">
                        <ul>
                            <li>Delete project</li>
                            <li>Report project</li>
                            <li>Share</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"column\">
                    <ul class=\"tabs-list\">
                        <li class=\"tabs-list__item active\">
                            <a href=\"#overview\">
                                <span>OVERVIEW</span>
                            </a>
                        </li>
                        <li class=\"tabs-list__item\">
                            <a href=\"#description\">
                                <span>DESCRIPTION</span>
                            </a>
                        </li>
                        <li class=\"tabs-list__item\">
                            <a href=\"#plans_and_specs\">
                                <span>PLANS AND SPECS</span>
                            </a>
                        </li>
                        <li class=\"tabs-list__item\">
                            <a href=\"#requirements\">
                                <span>REQUIREMENTS</span>
                            </a>
                        </li>
                        <li class=\"tabs-list__item\">
                            <a href=\"#location\">
                                <span>LOCATION</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"project-details\">
    <div class=\"container container--alternative\">
        <div class=\"row\">
            <div class=\"column\">
                <div class=\"row project-details__short-info\" id=\"overview\">
                    <div class=\"column\">
                        <div class=\"row project-details__short-info__row\">
                            <div class=\"column\">
                                <div class=\"key\">
                                    <span class=\"grey-text uppercase\">STATUS</span>
                                </div>
                                <div class=\"value\">
                                    <span class=\"black-text\">Post-Bidding</span>
                                </div>
                            </div>
                            <div class=\"column\">
                                <div class=\"key\">
                                    <span class=\"grey-text uppercase\">STATUS</span>
                                </div>
                                <div class=\"value\">
                                    <span class=\"black-text\">Post-Bidding</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"row project-details__short-info__row\">
                            <div class=\"column\">
                                <div class=\"key\">
                                    <span class=\"grey-text uppercase\">STATUS</span>
                                </div>
                                <div class=\"value\">
                                    <span class=\"black-text\">Post-Bidding</span>
                                </div>
                            </div>
                            <div class=\"column\">
                                <div class=\"key\">
                                    <span class=\"grey-text uppercase\">STATUS</span>
                                </div>
                                <div class=\"value\">
                                    <span class=\"black-text\">Post-Bidding</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"row project-details__short-info__row\">
                            <div class=\"column\">
                                <div class=\"key\">
                                    <span class=\"grey-text uppercase\">STATUS</span>
                                </div>
                                <div class=\"value\">
                                    <span class=\"black-text\">Post-Bidding</span>
                                </div>
                            </div>
                            <div class=\"column\">
                                <div class=\"key\">
                                    <span class=\"grey-text uppercase\">STATUS</span>
                                </div>
                                <div class=\"value\">
                                    <span class=\"black-text\">Post-Bidding</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"row project-details__short-info__row\">
                            <div class=\"column\">
                                <div class=\"key\">
                                    <span class=\"grey-text uppercase\">STATUS</span>
                                </div>
                                <div class=\"value\">
                                    <span class=\"black-text\">Post-Bidding</span>
                                </div>
                            </div>
                            <div class=\"column\">
                                <div class=\"key\">
                                    <span class=\"grey-text uppercase\">STATUS</span>
                                </div>
                                <div class=\"value\">
                                    <span class=\"black-text\">Post-Bidding</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"column project-details__short-info__image\">
                        <img src=\"";
        // line 149
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/101430248.jpg");
        echo "\" />
                        <div class=\"row\">
                            <div class=\"column column--padding5\">
                                <img src=\"";
        // line 152
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/101430248.jpg");
        echo "\" />
                            </div>
                            <div class=\"column column--padding5\">
                                <img src=\"";
        // line 155
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/101430248.jpg");
        echo "\" />
                            </div>
                            <div class=\"column column--padding5\">
                                <img src=\"";
        // line 158
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/101430248.jpg");
        echo "\" />
                            </div>
                            <div class=\"column column--padding5\">
                                <img src=\"";
        // line 161
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/101430248.jpg");
        echo "\" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row project-details__description\">
                    <div class=\"column\">
                        <div class=\"key\">
                            <span class=\"grey-text uppercase\">SUPPORTED SOFTWARE</span>
                        </div>
                        <div class=\"project-details__description__images\">
                            <img src=\"";
        // line 172
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/Allplan.png");
        echo "\" />
                            <img src=\"";
        // line 173
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/revit-logo.png");
        echo "\" />
                        </div>
                    </div>
                </div>
                <div class=\"row project-details__description\" id=\"description\">
                    <div class=\"column\">
                        <div class=\"key\">
                            <span class=\"grey-text uppercase\">DESCRIPTION</span>
                        </div>
                        <div class=\"value\">
                            <p class=\"black-text\">Site work and new construction of a multi-residential development in Napa Valley, California.
                                Today it’s one of the most popular blogging tools on the Internet; it’s easy to use, powerful,
                                and very versatile. It also has a very active base of skilled users who are eager to improve
                                the product and to help out those who haven’t tried it before. The best part of the new version
                                is the security patch; the new “nonce” security key reduces the chances of a malicious hacker
                                finding a way into your admin panel. </p>
                        </div>
                    </div>
                </div>
                <div class=\"row project-details__description\" id=\"plans_and_specs\">
                    <div class=\"column\">
                        <div class=\"key\">
                            <span class=\"grey-text uppercase\">PLANS AND SPECS</span>
                        </div>
                        <div class=\"project-details__description__files\">
                            <div class=\"row\">
                                <div class=\"column\">
                                    <div class=\"project-details__description__files__item\">
                                        <img src=\"";
        // line 201
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/ic-archive-download-all.svg");
        echo "\" />
                                        <span class=\"black-text size15\">Download all as .zip file
                                            <span class=\"grey-text uppercase\">(1.3MB)</span>
                                        </span>
                                    </div>
                                </div>
                                <div class=\"column\">

                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"column\">
                                    <div class=\"project-details__description__files__item\">
                                        <img src=\"";
        // line 215
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/ic-file.svg");
        echo "\" />
                                        <span class=\"black-text size15\">filename1.pdf
                                            <span class=\"grey-text uppercase\">(1.3MB)</span>
                                        </span>
                                    </div>
                                    <div class=\"project-details__description__files__item\">
                                        <img src=\"";
        // line 221
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/ic-file.svg");
        echo "\" />
                                        <span class=\"black-text size15\">filename1.pdf
                                            <span class=\"grey-text uppercase\">(1.3MB)</span>
                                        </span>
                                    </div>
                                </div>
                                <div class=\"column\">
                                    <div class=\"project-details__description__files__item\">
                                        <img src=\"";
        // line 229
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/ic-file.svg");
        echo "\" />
                                        <span class=\"black-text size15\">filename1.pdf
                                            <span class=\"grey-text uppercase\">(1.3MB)</span>
                                        </span>
                                    </div>
                                    <div class=\"project-details__description__files__item\">
                                        <img src=\"";
        // line 235
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/ic-file.svg");
        echo "\" />
                                        <span class=\"black-text size15\">filename1.pdf
                                            <span class=\"grey-text uppercase\">(1.3MB)</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row project-details__description\" id=\"requirements\">
                    <div class=\"column\">
                        <div class=\"key\">
                            <span class=\"grey-text uppercase\">Requirements</span>
                        </div>
                        <div class=\"value\">
                            <p class=\"black-text\">Site work and new construction of a multi-residential development in Napa Valley, California.
                                Today it’s one of the most popular blogging tools on the Internet; it’s easy to use, powerful,
                                and very versatile. It also has a very active base of skilled users who are eager to improve
                                the product and to help out those who haven’t tried it before.</p>
                            <ul class=\"text-list\">
                                <li>- The best part of the new version is the security patch</li>
                                <li>- The new “nonce” security key</li>
                                <li>- Malicious hacker finding a way into your admin panel.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"row project-details__description\">
                    <div class=\"column project-details__description__columns\">
                        <div class=\"key\">
                            <span class=\"grey-text uppercase\">IMPORTATNT DATES</span>
                        </div>
                        <div class=\"value\">
                            <span>08-25-2017 - Project bid ends</span>
                            <span>10-12-2017 - Kickoff meeting</span>
                            <span>10-12-2017 - Kickoff meeting</span>
                            <span>10-12-2017 - Kickoff meeting</span>
                        </div>
                    </div>
                    <div class=\"column project-details__description__columns\">
                        <div class=\"key\">
                            <span class=\"grey-text uppercase\">PROJECT OWNER</span>
                        </div>
                        <div class=\"value\">
                            <span>08-25-2017 - Project bid ends</span>
                            <span>10-12-2017 - Kickoff meeting</span>
                            <span>10-12-2017 - Kickoff meeting</span>
                            <span>10-12-2017 - Kickoff meeting</span>
                        </div>
                    </div>
                    <div class=\"column project-details__description__columns\">
                        <div class=\"key\">
                            <span class=\"grey-text uppercase\">PROJECT MANAGER</span>
                        </div>
                        <div class=\"value\">
                            <span>08-25-2017 - Project bid ends</span>
                            <span>10-12-2017 - Kickoff meeting</span>
                            <span>10-12-2017 - Kickoff meeting</span>
                            <span>10-12-2017 - Kickoff meeting</span>
                        </div>
                    </div>
                </div>
                <div class=\"row project-details__description\" id=\"location\">
                    <div class=\"column\">
                        <div class=\"key\">
                            <span class=\"grey-text uppercase\">LOCATION</span>
                        </div>
                        <div id=\"map\"></div>
                    </div>
                </div>
                <div class=\"row project-details__description\">
                    <div class=\"column\">
                        <div class=\"project-details__description__footer\">
                            <h2>Do you have a question, comment, or information on this project?</h2>
                            <div class=\"row\">
                                <div class=\"column align-center\">
                                    <button class=\"button button-blue\">CONTACT PROJECT OWNER</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function initMap() {
        var uluru = { lat: -25.344, lng: 131.036 };
        var map = new google.maps.Map(
            document.getElementById('map'), { zoom: 7, center: uluru });
        var marker = new google.maps.Marker({ position: uluru, map: map });
    }
</script>

<script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBvhfuptwINcw_YBN854kFBigUK5ee02uw&callback=initMap\">
</script> ";
    }

    public function getTemplateName()
    {
        return "/project-details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 235,  313 => 229,  302 => 221,  293 => 215,  276 => 201,  245 => 173,  241 => 172,  227 => 161,  221 => 158,  215 => 155,  209 => 152,  203 => 149,  74 => 23,  70 => 22,  58 => 13,  49 => 7,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/project-details.twig", "/var/www/local.projecto.lan/public_html/app/Views/project-details.twig");
    }
}
