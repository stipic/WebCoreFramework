<?php

/* /company-details.twig */
class __TwigTemplate_906bb42fc4438078d1cd0eb8fa5265a8bbb96078541c062fb9f605570e028803 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "/company-details.twig", 1);
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
                            <h3 class=\"projects-header__header__heading__name__title\">Napa Villa / Housing project</h3>
                        </div>
                    </div>
                </div>
                <div class=\"column\">
                    <button class=\"button button-blue\">Contact</button>
                    <button class=\"button button-dark-grey\">Invite to bid</button>
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
                            <a href=\"#about\">
                                <span>ABOUT US</span>
                            </a>
                        </li>
                        <li class=\"tabs-list__item\">
                            <a href=\"#contact\">
                                <span>CONTACT</span>
                            </a>
                        </li>
                        <li class=\"tabs-list__item\">
                            <a href=\"#services\">
                                <span>SERVICES</span>
                            </a>
                        </li>
                        <li class=\"tabs-list__item\">
                            <a href=\"#client_feedback\">
                                <span>CLIENT FEEDBACK</span>
                            </a>
                        </li>
                        <li class=\"tabs-list__item\">
                            <a href=\"#latest_projects\">
                                <span>LATEST PROJECTS</span>
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
                <div class=\"row project-details__short-info\">
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
                    </div>
                    <div class=\"column project-details__short-info__image\">
                        <img src=\"";
        // line 125
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/101430248.jpg");
        echo "\" />
                    </div>
                </div>
                <div class=\"row project-details__description\">
                    <div class=\"column\">
                        <div class=\"key\">
                            <span class=\"grey-text uppercase\">SUPPORTED SOFTWARE</span>
                        </div>
                        <div class=\"project-details__description__images\">
                            <img src=\"";
        // line 134
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/Allplan.png");
        echo "\" />
                            <img src=\"";
        // line 135
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/revit-logo.png");
        echo "\" />
                        </div>
                    </div>
                </div>
                <div class=\"row project-details__description\" id=\"about\">
                    <div class=\"column\">
                        <div class=\"key\">
                            <span class=\"grey-text uppercase\">ABOUT</span>
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
                <div class=\"row project-details__description\" id=\"services\">
                    <div class=\"column\">
                        <div class=\"key\">
                            <span class=\"grey-text uppercase\">SERVICES</span>
                        </div>
                        <ul class=\"text-list\">
                            <li>- The best part of the new version is the security patch</li>
                            <li>- The new “nonce” security key</li>
                            <li>- Malicious hacker finding a way into your admin panel.</li>
                        </ul>
                    </div>
                </div>
                <div class=\"row project-details__description\" id=\"client_feedback\">
                    <div class=\"column\">
                        <div class=\"key\">
                            <span class=\"grey-text uppercase\">CLIENT FEEDBACK</span>
                            <span class=\"blue-text uppercase\">SEE ALL FEEDBACK</span>
                        </div>
                        <div class=\"row\">
                            <div class=\"column\">
                                <div class=\"basic-card\">
                                    <p class=\"basic-card__text\">Site work and new construction of a multi-residential development in Napa Valley, California.
                                        Today it’s one of the most popular blogging tools on the Internet; it’s easy to use,
                                        powerful, and very versatile.</p>
                                    <div class=\"projects-header__header__heading\">
                                        <img src=\"";
        // line 179
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/ic-placeholder-buildings-bg.svg");
        echo "\" alt=\"projecto\" />
                                        <div class=\"projects-header__header__heading__name\">
                                            <h4 class=\"projects-header__header__heading__name__title\">William Brady</h4>
                                            <span class=\"size14 black-text\">Managing partner at Vello inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"column\">
                                <div class=\"basic-card\">
                                    <p class=\"basic-card__text\">Site work and new construction of a multi-residential development in Napa Valley, California.
                                        Today it’s one of the most popular blogging tools on the Internet; it’s easy to use,
                                        powerful, and very versatile.</p>
                                    <div class=\"projects-header__header__heading\">
                                        <img src=\"";
        // line 193
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/ic-placeholder-buildings-bg.svg");
        echo "\" alt=\"projecto\" />
                                        <div class=\"projects-header__header__heading__name\">
                                            <h4 class=\"projects-header__header__heading__name__title\">William Brady</h4>
                                            <span class=\"size14 black-text\">Managing partner at Vello inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row project-details__description\" id=\"latest_projects\">
                    <div class=\"column\">
                        <div class=\"key\">
                            <span class=\"grey-text uppercase\">LATEST PROJECTS</span>
                            <span class=\"blue-text uppercase\">SEE ALL PROJECTS</span>
                        </div>
                        <div class=\"row\">
                            <div class=\"column\">
                                <div class=\"basic-card basic-card--alternative\">
                                    <div class=\"basic-card--alternative__image-wrapper\">
                                        <img src=\"";
        // line 214
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/bridge.jpg");
        echo "\" alt=\"projecto\" />
                                    </div>
                                    <div class=\"basic-card--alternative__info\">
                                        <h3 class=\"align-left\">Bridges / Tunnels - Bridge</h3>
                                        <span class=\"size15 grey-text\">Quincy, US</span>
                                        <div class=\"row\">
                                            <div class=\"column\">
                                                <span class=\"grey-text block size14\">VALUE</span>
                                                <span class=\"block size14 black-text\">\$300.000</span>
                                            </div>
                                            <div class=\"column\">
                                                <span class=\"grey-text block size14\">BID WON</span>
                                                <span class=\"block size14 black-text\">6 months ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"column\">
                                <div class=\"basic-card basic-card--alternative\">
                                    <div class=\"basic-card--alternative__image-wrapper\">
                                        <img src=\"";
        // line 235
        echo $this->extensions['App\Twig\TwigFunctions']->TWIG_asset("images/bridge.jpg");
        echo "\" alt=\"projecto\" />
                                    </div>
                                    <div class=\"basic-card--alternative__info\">
                                        <h3 class=\"align-left\">Bridges / Tunnels - Bridge</h3>
                                        <span class=\"size15 grey-text\">Quincy, US</span>
                                        <div class=\"row\">
                                            <div class=\"column\">
                                                <span class=\"grey-text block size14\">VALUE</span>
                                                <span class=\"block size14 black-text\">\$300.000</span>
                                            </div>
                                            <div class=\"column\">
                                                <span class=\"grey-text block size14\">BID WON</span>
                                                <span class=\"block size14 black-text\">6 months ago</span>
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

";
    }

    public function getTemplateName()
    {
        return "/company-details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 235,  274 => 214,  250 => 193,  233 => 179,  186 => 135,  182 => 134,  170 => 125,  49 => 7,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/company-details.twig", "/var/www/local.projecto.lan/public_html/app/Views/company-details.twig");
    }
}
