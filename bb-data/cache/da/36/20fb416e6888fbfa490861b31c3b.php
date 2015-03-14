<?php

/* mod_seo_settings.phtml */
class __TwigTemplate_da3620fb416e6888fbfa490861b31c3b extends Twig_Template
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
        echo gettext("SEO settings");
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
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("system"), "html", null, true);
        echo "\">";
        echo gettext("Settings");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 10
        echo gettext("SEO settings");
        echo "</li>
</ul>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<div class=\"widget\">
    <div class=\"head\">
        <h5 class=\"iCog\">";
        // line 18
        echo gettext("SEO settings");
        echo "</h5>
    </div>

";
        // line 21
        $context["params"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "extension_config_get", array(0 => array("ext" => "mod_seo")), "method");
        // line 22
        echo "
<form method=\"post\" action=\"admin/extension/config_save\" class=\"mainForm api-form\" data-api-msg=\"";
        // line 23
        echo gettext("Configuration updated");
        echo "\">
    
    <fieldset>
        <legend>Sitemap</legend>
        <div class=\"rowElem noborder\">
            <label>";
        // line 28
        echo gettext("Ping sitemap to Google");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"sitemap_google\" value=\"1\" ";
        // line 30
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "sitemap_google") == "1")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                <input type=\"radio\" name=\"sitemap_google\" value=\"0\" ";
        // line 31
        if ((!$this->getAttribute((isset($context["params"]) ? $context["params"] : null), "sitemap_google"))) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("No");
        echo "</label>
            </div>
            <div class=\"fix\"></div>
        </div>
        
        <div class=\"rowElem\">
            <label>";
        // line 37
        echo gettext("Ping sitemap to Yahoo");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"sitemap_yahoo\" value=\"1\" ";
        // line 39
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "sitemap_yahoo") == "1")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                <input type=\"radio\" name=\"sitemap_yahoo\" value=\"0\" ";
        // line 40
        if ((!$this->getAttribute((isset($context["params"]) ? $context["params"] : null), "sitemap_yahoo"))) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("No");
        echo "</label>
            </div>
            <div class=\"fix\"></div>
        </div>
        
        <div class=\"rowElem\">
            <label>";
        // line 46
        echo gettext("Ping sitemap to Bing");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"sitemap_bing\" value=\"1\" ";
        // line 48
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "sitemap_bing") == "1")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                <input type=\"radio\" name=\"sitemap_bing\" value=\"0\" ";
        // line 49
        if ((!$this->getAttribute((isset($context["params"]) ? $context["params"] : null), "sitemap_bing"))) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("No");
        echo "</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        <input type=\"submit\" value=\"";
        // line 54
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
        <input type=\"hidden\" name=\"ext\" value=\"mod_seo\" />
    </fieldset>
</form>

</div>
";
    }

    public function getTemplateName()
    {
        return "mod_seo_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 54,  153 => 49,  145 => 48,  140 => 46,  127 => 40,  119 => 39,  114 => 37,  101 => 31,  93 => 30,  88 => 28,  80 => 23,  77 => 22,  75 => 21,  69 => 18,  64 => 15,  61 => 14,  54 => 10,  48 => 9,  42 => 8,  39 => 7,  36 => 6,  30 => 3,  25 => 4,  23 => 2,);
    }
}
