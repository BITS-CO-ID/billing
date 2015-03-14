<?php

/* mod_servicedomain_registrar.phtml */
class __TwigTemplate_c4a4b78c12b742576323cec7c33ec2e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        // line 4
        $context["active_menu"] = "system";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Registrar");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["registrar"]) ? $context["registrar"] : null), "title"), "html", null, true);
    }

    // line 6
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 7
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/"), "html", null, true);
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("servicedomain"), "html", null, true);
        echo "\">";
        echo gettext("Domain management");
        echo "</a></li>
    <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("servicedomain"), "html", null, true);
        echo "#tab-registrars\">";
        echo gettext("Registrars");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["registrar"]) ? $context["registrar"] : null), "title"), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "
<div class=\"widget\">
    <div class=\"head\">
        <h5>";
        // line 19
        echo gettext("Registrar configuration");
        echo "</h5>
    </div>

    <div class=\"help\">
        <h5>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["registrar"]) ? $context["registrar"] : null), "title"), "html", null, true);
        echo "</h5>
        <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["registrar"]) ? $context["registrar"] : null), "label"), "html", null, true);
        echo "</p>
    </div>

    <form method=\"post\" action=\"admin/servicedomain/registrar_update\" class=\"mainForm save api-form\" data-api-msg=\"Registrar updated\">
    <fieldset>
        <div class=\"rowElem noborder\">
            <label>";
        // line 30
        echo gettext("Enable test mode");
        echo ":</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"test_mode\" value=\"1\"";
        // line 32
        if ($this->getAttribute((isset($context["registrar"]) ? $context["registrar"] : null), "test_mode")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Yes</label>
                <input type=\"radio\" name=\"test_mode\" value=\"0\"";
        // line 33
        if ((!$this->getAttribute((isset($context["registrar"]) ? $context["registrar"] : null), "test_mode"))) {
            echo " checked=\"checked\"";
        }
        echo " /><label>No</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 39
        echo gettext("Registrar title");
        echo ":</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"title\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["registrar"]) ? $context["registrar"] : null), "title"), "html", null, true);
        echo "\" />
            </div>
            <div class=\"fix\"></div>
        </div>

        ";
        // line 47
        echo "        ";
        echo $context["mf"]->getbuild_form($this->getAttribute((isset($context["registrar"]) ? $context["registrar"] : null), "form"), $this->getAttribute((isset($context["registrar"]) ? $context["registrar"] : null), "config"));
        echo "

        <input type=\"submit\" value=\"";
        // line 49
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["registrar"]) ? $context["registrar"] : null), "id"), "html", null, true);
        echo "\" />
    </fieldset>
    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_servicedomain_registrar.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 50,  138 => 49,  132 => 47,  124 => 41,  119 => 39,  108 => 33,  102 => 32,  97 => 30,  88 => 24,  84 => 23,  77 => 19,  72 => 16,  69 => 15,  62 => 11,  56 => 10,  50 => 9,  44 => 8,  41 => 7,  38 => 6,  30 => 3,  25 => 4,  23 => 2,);
    }
}
