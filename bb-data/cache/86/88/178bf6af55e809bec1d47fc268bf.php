<?php

/* mod_currency_manage.phtml */
class __TwigTemplate_8688178bf6af55e809bec1d47fc268bf extends Twig_Template
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
        // line 3
        $context["active_menu"] = "system";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Currency management");
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
    <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("extension/settings/currency"), "html", null, true);
        echo "\">";
        echo gettext("Currency settings");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currency"]) ? $context["currency"] : null), "code"), "html", null, true);
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
        // line 20
        echo gettext("Edit currency information");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currency"]) ? $context["currency"] : null), "code"), "html", null, true);
        echo "</h5>
    </div>

    <form method=\"post\" action=\"admin/currency/update\" class=\"mainForm save api-form\" data-api-msg=\"Currency updated\">
        <fieldset>
            <div class=\"rowElem noborder\">
                <label>";
        // line 26
        echo gettext("Title");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"title\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currency"]) ? $context["currency"] : null), "title"), "html", null, true);
        echo "\" required=\"required\">
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>";
        // line 33
        echo gettext("Conversion rate");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"conversion_rate\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currency"]) ? $context["currency"] : null), "conversion_rate"), "html", null, true);
        echo "\" required=\"required\">
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>";
        // line 40
        echo gettext("Format");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"format\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currency"]) ? $context["currency"] : null), "format"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"\$ ";
        echo "{{price}}";
        echo "\">
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>";
        // line 47
        echo gettext("Price format");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"radio\" name=\"price_format\" value=\"1\" ";
        // line 49
        if (($this->getAttribute((isset($context["currency"]) ? $context["currency"] : null), "price_format") == 1)) {
            echo "checked=\"checked\"";
        }
        echo "><label>1234.56</label>
                    <input type=\"radio\" name=\"price_format\" value=\"2\" ";
        // line 50
        if (($this->getAttribute((isset($context["currency"]) ? $context["currency"] : null), "price_format") == 2)) {
            echo "checked=\"checked\"";
        }
        echo "><label>1,234.56</label>
                    <input type=\"radio\" name=\"price_format\" value=\"3\" ";
        // line 51
        if (($this->getAttribute((isset($context["currency"]) ? $context["currency"] : null), "price_format") == 3)) {
            echo "checked=\"checked\"";
        }
        echo "><label>1.234,56</label>
                    <input type=\"radio\" name=\"price_format\" value=\"4\" ";
        // line 52
        if (($this->getAttribute((isset($context["currency"]) ? $context["currency"] : null), "price_format") == 4)) {
            echo "checked=\"checked\"";
        }
        echo "><label>1,234</label>
                    <input type=\"radio\" name=\"price_format\" value=\"5\" ";
        // line 53
        if (($this->getAttribute((isset($context["currency"]) ? $context["currency"] : null), "price_format") == 5)) {
            echo "checked=\"checked\"";
        }
        echo "><label>1234</label>
                </div>
                <div class=\"fix\"></div>
            </div>
            <input type=\"submit\" value=\"";
        // line 57
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
            <input type=\"hidden\" name=\"code\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currency"]) ? $context["currency"] : null), "code"), "html", null, true);
        echo "\"/>
        </fieldset>
    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_currency_manage.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 58,  166 => 57,  157 => 53,  151 => 52,  145 => 51,  139 => 50,  133 => 49,  128 => 47,  118 => 42,  113 => 40,  105 => 35,  100 => 33,  92 => 28,  87 => 26,  76 => 20,  70 => 16,  67 => 15,  60 => 11,  54 => 10,  48 => 9,  42 => 8,  39 => 7,  36 => 6,  30 => 4,  25 => 3,  23 => 2,);
    }
}
