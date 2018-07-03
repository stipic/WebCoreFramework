<?php

/* /project-new.twig */
class __TwigTemplate_11762b4df7c6b2c80349a4c932d4e0b6f9093e63020e49994208c4cb931bda6b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "/project-new.twig", 1);
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
        echo $this->extensions['App\Twig\TwigFilters']->TWIG_assets_root("images/dark.svg");
        echo "\" class=\"back-arrow\"></img>
                <div class=\"column\">
                    <div class=\"input-wrapper\">
                        <input type=\"text\" name=\"project_name\" class=\"input-wrapper__field\" placeholder=\"Project name\">
                    </div>
                </div>
                <div class=\"column\">

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

<div class=\"project-new\">
    <div class=\"container container--alternative\">
        <div class=\"row\">
            <div class=\"column\">
                <form>
                    <div class=\"form-section\">
                        <div class=\"key\">
                            <span>ATTACH PROJECT IMAGES</span>
                        </div>
                        <div class=\"value\">
                            <span class=\"text-bold\">Attach max. 10 photos in .jpeg format no bigger than 3 Mb per photo.</span>
                        </div>
                        <button class=\"button button-blue\" type=\"button\">BROWSE IMAGE</button>
                    </div>
                    <div class=\"form-section\">
                        <div class=\"row\">
                            <div class=\"column\">
                                <div class=\"select-wrapper account-dropdown\">
                                    <select class=\"select\">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                                <div class=\"select-wrapper account-dropdown\">
                                    <select class=\"select\">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                                <div class=\"select-wrapper account-dropdown\">
                                    <select class=\"select\">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                                <div class=\"select-wrapper account-dropdown\">
                                    <select class=\"select\">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"column\">
                                <div class=\"select-wrapper account-dropdown\">
                                    <select class=\"select\">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                                <div class=\"select-wrapper account-dropdown\">
                                    <select class=\"select\">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                                <div class=\"input-wrapper\">
                                    <input type=\"text\" name=\"type_value\" class=\"input-wrapper__field\" placeholder=\"Type value\">
                                </div>
                                <div class=\"select-wrapper account-dropdown\">
                                    <select class=\"select\">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-section\">
                        <div class=\"key\">
                            <span>PROJECT DISCRIPTION</span>
                        </div>
                        <div class=\"input-wrapper\">
                            <textarea data-autoresize rows=\"2\" class=\"input-wrapper__field\" placeholder=\"Type project description\"></textarea>
                        </div>
                    </div>
                    <div class=\"form-section\">
                        <div class=\"key\">
                            <span>PLANS AND SPECS</span>
                        </div>
                        <div class=\"value\">
                            <span class=\"text-bold\">Attach files in pdf format</span>
                        </div>
                        <button class=\"button button-blue\" type=\"button\">ADD FILE</button>
                    </div>
                    <div class=\"form-section\">
                        <div class=\"key\">
                            <span>PROJECT REQUIREMENTS</span>
                        </div>
                        <div class=\"input-wrapper\">
                            <textarea data-autoresize rows=\"2\" class=\"input-wrapper__field\" placeholder=\"Type project requirements\"></textarea>
                        </div>
                    </div>
                    <div class=\"form-section\">
                        <div class=\"key\">
                            <span>SOFTWARE REQUIREMENTS</span>
                        </div>

                    </div>
                    <div class=\"form-section\">
                        <div class=\"key\">
                            <span>ADD IMPORTANT DATES</span>
                        </div>
                        <div class=\"row\">
                            <div class=\"column\">
                                <div class=\"input-wrapper input-wrapper--combo\">
                                    <input type=\"text\" name=\"milestone\" class=\"input-wrapper__field input-wrapper--combo__field\" placeholder=\"Milestone name\">
                                    <div class=\"select-wrapper\">
                                        <select class=\"select\">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class=\"column\">
                                <div class=\"input-wrapper input-wrapper--combo\">
                                    <input type=\"text\" name=\"milestone\" class=\"input-wrapper__field input-wrapper--combo__field\" placeholder=\"Milestone name\">
                                    <div class=\"select-wrapper\">
                                        <select class=\"select\">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type=\"button\" class=\"button button-blue\">ADD DATE</button>
                    </div>
                    <div class=\"form-section\">
                        <div class=\"row\">
                            <div class=\"column\">
                                <div class=\"key\">
                                    <span>PROJECT OWNER</span>
                                </div>
                                <div class=\"input-wrapper input-wrapper--combo\">
                                    <input type=\"text\" name=\"name\" class=\"input-wrapper__field\" placeholder=\"Name\">
                                </div>
                                <div class=\"input-wrapper input-wrapper--combo\">
                                    <input type=\"text\" name=\"name\" class=\"input-wrapper__field\" placeholder=\"Name\">
                                </div>
                                <div class=\"input-wrapper input-wrapper--combo\">
                                    <input type=\"text\" name=\"name\" class=\"input-wrapper__field\" placeholder=\"Name\">
                                </div>
                                <div class=\"input-wrapper input-wrapper--combo\">
                                    <input type=\"text\" name=\"name\" class=\"input-wrapper__field\" placeholder=\"Name\">
                                </div>
                            </div>
                            <div class=\"column\">
                                <div class=\"key\">
                                    <span>PROJECT OWNER</span>
                                </div>
                                <div class=\"input-wrapper input-wrapper--combo\">
                                    <input type=\"text\" name=\"name\" class=\"input-wrapper__field\" placeholder=\"Name\">
                                </div>
                                <div class=\"input-wrapper input-wrapper--combo\">
                                    <input type=\"text\" name=\"name\" class=\"input-wrapper__field\" placeholder=\"Name\">
                                </div>
                                <div class=\"input-wrapper input-wrapper--combo\">
                                    <input type=\"text\" name=\"name\" class=\"input-wrapper__field\" placeholder=\"Name\">
                                </div>
                                <div class=\"input-wrapper input-wrapper--combo\">
                                    <input type=\"text\" name=\"name\" class=\"input-wrapper__field\" placeholder=\"Name\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-section\">
                        <div class=\"row\">
                            <div class=\"column\">
                                <div class=\"key\">
                                    <span>LOCATION</span>
                                </div>
                                <div class=\"input-wrapper input-wrapper--combo\">
                                    <input type=\"text\" name=\"location\" class=\"input-wrapper__field\" placeholder=\"Project location\">
                                </div>
                            </div>
                            <div class=\"column\">

                            </div>
                        </div>
                    </div>
                    <div class=\"buttons-wrapper buttons-wrapper--alternative\">
                        <button type=\"button\" class=\"button button-blue\">PUBLISH PROJECT</button>
                        <button type=\"button\" class=\"button button-dark-grey\">PREVIEW PROJECT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "/project-new.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/project-new.twig", "/var/www/local.projecto.lan/public_html/app/Views/project-new.twig");
    }
}
