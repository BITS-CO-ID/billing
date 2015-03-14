<?php

/* mod_staff_login.phtml */
class __TwigTemplate_b6c9ff3602a02180cace5e46630bb92d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_login.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_login.phtml";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Login");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<!-- Login form area -->
<div class=\"loginWrapper\">
    <div class=\"loginLogo\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_company"), "logo_url"), "html", null, true);
        echo "\" alt=\"\" style=\"max-height: 75px\"/></div>
    <div class=\"loginPanel\">
        ";
        // line 11
        if ((isset($context["create_admin"]) ? $context["create_admin"] : null)) {
            // line 12
            echo "        <div class=\"head\"><h5 class=\"iUser\">";
            echo gettext("Create main administrator account");
            echo "</h5></div>
        <form class=\"mainForm api-form\" action=\"guest/staff/create\" method=\"post\" data-api-redirect=\"index\">
            <fieldset>
                <div class=\"loginRow noborder\">
                    <label for=\"req1\">";
            // line 16
            echo gettext("Email");
            echo ":</label>
                    <div class=\"loginInput\"><input id=\"req1\" type=\"email\" name=\"email\" value=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "email"), "html", null, true);
            echo "\" placeholder=\"";
            echo gettext("Enter your email address");
            echo "\"/></div>
                    <div class=\"fix\"></div>
                </div>
                
                <div class=\"loginRow\">
                    <label for=\"req2\">";
            // line 22
            echo gettext("Password");
            echo ":</label>
                    <div class=\"loginInput\"><input id=\"req2\" type=\"password\" name=\"password\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "password"), "html", null, true);
            echo "\" placeholder=\"";
            echo gettext("Enter your password");
            echo "\"/></div>
                    <div class=\"fix\"></div>
                </div>
                
                <div class=\"loginRow\">
                    <input type=\"submit\" value=\"";
            // line 28
            echo gettext("Create administrator account");
            echo "\" class=\"greyishBtn submitForm\" />
                    <div class=\"fix\"></div>
                </div>
            </fieldset>
        </form>
        ";
        } else {
            // line 34
            echo "        <div class=\"head\"><h5 class=\"iUser\">";
            echo gettext("Login");
            echo "</h5></div>
        <form class=\"mainForm api-form\" action=\"guest/staff/login\" method=\"post\" data-api-redirect=\"index\">
            <fieldset>
                <div class=\"loginRow noborder\">
                    <label for=\"req1\">";
            // line 38
            echo gettext("Email");
            echo ":</label>
                    <div class=\"loginInput\"><input id=\"req1\" type=\"email\" name=\"email\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "email"), "html", null, true);
            echo "\" placeholder=\"";
            echo gettext("Enter your email address");
            echo "\"/></div>
                    <div class=\"fix\"></div>
                </div>
                
                <div class=\"loginRow\">
                    <label for=\"req2\">";
            // line 44
            echo gettext("Password");
            echo ":</label>
                    <div class=\"loginInput\"><input id=\"req2\" type=\"password\" name=\"password\" value=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "password"), "html", null, true);
            echo "\" placeholder=\"";
            echo gettext("Enter your password");
            echo "\"/></div>
                    <div class=\"fix\"></div>
                </div>
                
                <div class=\"loginRow\">
                    <div class=\"rememberMe\"><input type=\"checkbox\" id=\"remember\" name=\"remember\" value=\"1\" checked=\"checked\"/><label for=\"remember\">";
            // line 50
            echo gettext("Remember me");
            echo "</label></div>
                    <input type=\"submit\" value=\"";
            // line 51
            echo gettext("Log me in");
            echo "\" class=\"greyishBtn submitForm\" />
                    <div class=\"fix\"></div>
                </div>
            </fieldset>
        </form>
        ";
        }
        // line 57
        echo "    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_staff_login.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 57,  133 => 51,  129 => 50,  119 => 45,  115 => 44,  105 => 39,  101 => 38,  93 => 34,  84 => 28,  74 => 23,  70 => 22,  60 => 17,  56 => 16,  48 => 12,  46 => 11,  41 => 9,  36 => 6,  33 => 5,  27 => 3,);
    }
}
