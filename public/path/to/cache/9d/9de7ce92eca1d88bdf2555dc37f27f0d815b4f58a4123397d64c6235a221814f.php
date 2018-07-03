<?php

/* login.twig */
class __TwigTemplate_3925bee1d8342b27451ce685a89fd14d9c809e8869e7d0c24877a8eeb357f5c9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "login.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Projecto - Login";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div class=\"signing\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"column\">
                    <h2>Log in and find projects</h2>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"column\">
                    <div class=\"signing__modal\">

                        ";
        // line 19
        if (($context["error"] ?? null)) {
            // line 20
            echo "                            <div>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", array()), "html", null, true);
            echo "</div>
                        ";
        }
        // line 22
        echo "
                        <form action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigFilters']->pathFor("fos_user_security_check"), "html", null, true);
        echo "\" method=\"post\">

                            <div class=\"input-wrapper\">
                                <input type=\"text\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" class=\"input-wrapper__field\" required />
                                <label class=\"label\" for=\"_username\">Your Email</label>
                            </div>

                            <div class=\"input-wrapper\">
                                <input type=\"password\" name=\"_password\" class=\"input-wrapper__field\" required />
                                <label class=\"label\" for=\"_password\">Your password</label>
                            </div>
                            
                            <div class=\"input-wrapper\">
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                <label for=\"remember_me\">Remember Me</label>
                            </div>

                            <button type=\"submit\" class=\"button button-blue login-button\">Login</button>

                        </form>

                        <div class=\"row signing__modal__info\">
                            <div class=\"column\">
                                <span class=\"signing__modal__info__account black-text\">Don't have an account? <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigFilters']->pathFor("fos_user_registration_register"), "html", null, true);
        echo "\">Sign Up</a></span>
                            </div>
                            <div class=\"column forgot-password\">
                                <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigFilters']->pathFor("fos_user_resetting_request"), "html", null, true);
        echo "\">Forgot password?</a>
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
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 49,  99 => 46,  76 => 26,  70 => 23,  67 => 22,  61 => 20,  59 => 19,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login.twig", "/var/www/local.projecto.lan/public_html/templates/login.twig");
    }
}
