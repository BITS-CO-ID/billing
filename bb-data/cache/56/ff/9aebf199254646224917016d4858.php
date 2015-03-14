<?php

/* mod_servicehosting_config.phtml */
class __TwigTemplate_56ff9aebf199254646224917016d4858 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"help\">
    <h5>";
        // line 2
        echo gettext("Hosting settings");
        echo "</h5>
</div>

<form method=\"post\" action=\"admin/product/update_config\" class=\"mainForm api-form save\" data-api-msg=\"Hosting settings updated\">
<fieldset>
    <div class=\"rowElem\">
        <label>";
        // line 8
        echo gettext("Server");
        echo ":</label>
        <div class=\"formRight noborder\">
            ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "config[server_id]", 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "servicehosting_server_get_pairs"), 2 => $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "config"), "server_id"), 3 => 0, 4 => "Select server"), "method"), "html", null, true);
        echo "
        </div>
        <div class=\"fix\"></div>
    </div>
    <div class=\"rowElem\">
        <label>";
        // line 15
        echo gettext("Hosting plan");
        echo ":</label>
        <div class=\"formRight\">
            ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "config[hosting_plan_id]", 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "servicehosting_hp_get_pairs"), 2 => $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "config"), "hosting_plan_id"), 3 => 0, 4 => "Select hosting plan"), "method"), "html", null, true);
        echo "
        </div>
        <div class=\"fix\"></div>
    </div>
    <div class=\"rowElem\">
        <label>";
        // line 22
        echo gettext("Reseller hosting");
        echo ":</label>
        <div class=\"formRight\">
            <input type=\"radio\" name=\"config[reseller]\" value=\"1\"";
        // line 24
        if ($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "config"), "reseller")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Yes</label>
            <input type=\"radio\" name=\"config[reseller]\" value=\"0\"";
        // line 25
        if ((!$this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "config"), "reseller"))) {
            echo " checked=\"checked\"";
        }
        echo " /><label>No</label>
        </div>
        <div class=\"fix\"></div>
    </div>
    <div class=\"rowElem\">
        <label>";
        // line 30
        echo gettext("Free domain registration");
        echo ":</label>
        <div class=\"formRight\">
            <input type=\"radio\" name=\"config[free_domain]\" value=\"1\"";
        // line 32
        if ($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "config"), "free_domain")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Yes</label>
            <input type=\"radio\" name=\"config[free_domain]\" value=\"0\"";
        // line 33
        if ((!$this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "config"), "free_domain"))) {
            echo " checked=\"checked\"";
        }
        echo " /><label>No</label>
        </div>
        <div class=\"fix\"></div>
    </div>
    <div class=\"rowElem\">
        <label>";
        // line 38
        echo gettext("Free domain transfer");
        echo ":</label>
        <div class=\"formRight\">
            <input type=\"radio\" name=\"config[free_transfer]\" value=\"1\"";
        // line 40
        if ($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "config"), "free_transfer")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Yes</label>
            <input type=\"radio\" name=\"config[free_transfer]\" value=\"0\"";
        // line 41
        if ((!$this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "config"), "free_transfer"))) {
            echo " checked=\"checked\"";
        }
        echo " /><label>No</label>
        </div>
        <div class=\"fix\"></div>
    </div>

    <input type=\"submit\" value=\"";
        // line 46
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
</fieldset>
        
<input type=\"hidden\" name=\"id\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
        echo "\" />
</form>

<div class=\"help\">
    <h5>";
        // line 53
        echo gettext("Hosting plans");
        echo "</h5>
</div>

<table class=\"tableStatic wide\">
    <thead>
        <tr>
            <td>Title</td>
            <td style=\"width:5%\">&nbsp;</td>
        </tr>
    </thead>
    <tbody>
        ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "servicehosting_hp_get_pairs"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["id"] => $context["plan"]) {
            // line 65
            echo "        <tr>
            <td>";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["plan"]) ? $context["plan"] : null), "html", null, true);
            echo "</td>
            <td class=\"actions\"><a class=\"bb-button btn14\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/servicehosting/plan"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a></td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 70
            echo "        <tr>
            <td colspan=\"2\">";
            // line 71
            echo gettext("The list is empty");
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['plan'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 74
        echo "    </tbody>
    <tfoot>
        <tr>
            <td colspan=\"2\">
                <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("servicehosting#tab-new-plan"), "html", null, true);
        echo "\" title=\"\" class=\"btnIconLeft mr10 mt5\"><img src=\"images/icons/dark/settings2.png\" alt=\"\" class=\"icon\"><span>New hosting plan</span></a>
            </td>
        </tr>
    </tfoot>
</table>

<div class=\"help\">
    <h5>";
        // line 85
        echo gettext("Servers");
        echo "</h5>
</div>

<table class=\"tableStatic wide\">
    <thead>
        <tr>
            <td>Title</td>
            <td style=\"width:5%\">&nbsp;</td>
        </tr>
    </thead>
    <tbody>
        ";
        // line 96
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "servicehosting_server_get_pairs"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["id"] => $context["server"]) {
            // line 97
            echo "        <tr>
            <td>";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["server"]) ? $context["server"] : null), "html", null, true);
            echo "</td>
            <td class=\"actions\"><a class=\"bb-button btn14\" href=\"";
            // line 99
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/servicehosting/server"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a></td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 102
            echo "        <tr>
            <td colspan=\"7\">";
            // line 103
            echo gettext("The list is empty");
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['server'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 106
        echo "    </tbody>
    <tfoot>
        <tr>
            <td colspan=\"2\">
                <a href=\"";
        // line 110
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("servicehosting#tab-new-server"), "html", null, true);
        echo "\" title=\"\" class=\"btnIconLeft mr10 mt5\"><img src=\"images/icons/dark/computer.png\" alt=\"\" class=\"icon\"><span>New server</span></a>
            </td>
        </tr>
    </tfoot>
</table>
";
    }

    public function getTemplateName()
    {
        return "mod_servicehosting_config.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 110,  243 => 106,  234 => 103,  231 => 102,  221 => 99,  217 => 98,  214 => 97,  209 => 96,  195 => 85,  185 => 78,  179 => 74,  170 => 71,  167 => 70,  157 => 67,  153 => 66,  150 => 65,  145 => 64,  131 => 53,  124 => 49,  118 => 46,  108 => 41,  102 => 40,  97 => 38,  87 => 33,  81 => 32,  76 => 30,  66 => 25,  60 => 24,  55 => 22,  47 => 17,  42 => 15,  34 => 10,  29 => 8,  20 => 2,  17 => 1,);
    }
}
