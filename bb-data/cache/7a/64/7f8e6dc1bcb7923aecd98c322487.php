<?php

/* mod_invoice_tax.phtml */
class __TwigTemplate_7a647f8e6dc1bcb7923aecd98c322487 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_default.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_default.phtml";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["active_menu"] = "system";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta_title($context, array $blocks = array())
    {
        echo "Tax";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 9
        echo gettext("Tax rules");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 10
        echo gettext("New tax rule");
        echo "</a></li>
        <li><a href=\"#tab-settings\">";
        // line 11
        echo gettext("Tax settings");
        echo "</a></li>
        <li><a href=\"#tab-eu-vat\">";
        // line 12
        echo gettext("EU VAT");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>";
        // line 21
        echo gettext("Name");
        echo "</td>
                        <td>";
        // line 22
        echo gettext("Country");
        echo "</td>
                        <td>";
        // line 23
        echo gettext("State/Region");
        echo "</td>
                        <td>";
        // line 24
        echo gettext("Tax rate");
        echo "</td>
                        <td>";
        // line 25
        echo gettext("Actions");
        echo "</td>
                    </tr>
                </thead>

                <tbody>
                ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_tax_get_list", array(0 => array("per_page" => 100)), "method"), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tax"]) {
            // line 31
            echo "                <tr>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tax"]) ? $context["tax"] : null), "name"), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 34
            if ($this->getAttribute((isset($context["tax"]) ? $context["tax"] : null), "country")) {
                // line 35
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_countries"), $this->getAttribute((isset($context["tax"]) ? $context["tax"] : null), "country"), array(), "array"), "html", null, true);
                echo "
                        ";
            } else {
                // line 37
                echo "                        ";
                echo gettext("Applies to any country");
                // line 38
                echo "                        ";
            }
            // line 39
            echo "                    </td>
                    <td>
                        ";
            // line 41
            if ($this->getAttribute((isset($context["tax"]) ? $context["tax"] : null), "state")) {
                // line 42
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tax"]) ? $context["tax"] : null), "state"), "html", null, true);
                echo "
                        ";
            } else {
                // line 44
                echo "                        ";
                echo gettext("Applies to any state");
                // line 45
                echo "                        ";
            }
            // line 46
            echo "                    </td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tax"]) ? $context["tax"] : null), "taxrate"), "html", null, true);
            echo "%</td>
                    <td class=\"actions\" style=\"width: 5%;\">
                        <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-reload=\"1\" data-api-confirm=\"Are you sure?\" href=\"admin/invoice/tax_delete?id=";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tax"]) ? $context["tax"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>

                </tr>
                </tbody>

                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "                <tbody>
                    <tr>
                        <td colspan=\"5\">
                            ";
            // line 59
            echo gettext("The list is empty");
            // line 60
            echo "                        </td>
                    </tr>
                </tbody>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 64
        echo "            </table>
        </div>
        
        <div class=\"tab_content nopadding\" id=\"tab-settings\">
            <form method=\"post\" action=\"admin/system/update_params\" class=\"mainForm save api-form\" data-api-msg=\"Tax settings updated\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 71
        echo gettext("Enable tax support");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"tax_enabled\" value=\"1\"";
        // line 73
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_param", array(0 => array("key" => "tax_enabled")), "method")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("Yes");
        echo "</label>
                            <input type=\"radio\" name=\"tax_enabled\" value=\"0\"";
        // line 74
        if ((!$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_param", array(0 => array("key" => "tax_enabled")), "method"))) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("No");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"submit\" value=\"";
        // line 78
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-eu-vat\">

            <div class=\"help\">
                <h3>";
        // line 86
        echo gettext("Automatic VAT Tax Rules Setup");
        echo "</h3>
                <p>";
        // line 87
        echo gettext("If you would like BoxBilling to automatically setup the EU VAT tax rules for you for all EU Member States then simply enter your VAT Label & local VAT rate below and click the submit button. This action will delete any existing tax rules and configure the VAT rates for all EU countries.");
        echo "</p>
            </div>
            
            <form method=\"post\" action=\"admin/invoice/tax_setup_eu\" class=\"mainForm save api-form\" data-api-reload=\"1\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 93
        echo gettext("VAT Label");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"name\" value=\"VAT\" required=\"required\" placeholder=\"";
        // line 95
        echo gettext("VAT");
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 101
        echo gettext("VAT rate");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"taxrate\" value=\"20\" required=\"required\" placeholder=\"";
        // line 103
        echo gettext("21");
        echo "\" style=\"width: 100px\"/> %
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"submit\" value=\"";
        // line 107
        echo gettext("Create EU VAT Rules");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>
        
        <div class=\"tab_content nopadding\" id=\"tab-new\">

            <form method=\"post\" action=\"admin/invoice/tax_create\" class=\"mainForm save api-form\" data-api-reload=\"1\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 117
        echo gettext("Tax title");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"name\" value=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "name"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo gettext("sales Tax");
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 124
        echo gettext("Tax rate");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"taxrate\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "taxrate"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo gettext("18");
        echo "\" style=\"width: 100px\"/> %
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 131
        echo gettext("Country");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "country", 1 => $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_countries"), 2 => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "country"), 3 => 0, 4 => "Apply to all countries"), "method"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 138
        echo gettext("State");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 141
        echo "                            <input type=\"text\" name=\"state\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "state"), "html", null, true);
        echo "\" placeholder=\"";
        echo gettext("Leave empty to apply to all states");
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"submit\" value=\"";
        // line 145
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_invoice_tax.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 145,  316 => 141,  311 => 138,  303 => 133,  298 => 131,  288 => 126,  283 => 124,  273 => 119,  268 => 117,  255 => 107,  248 => 103,  243 => 101,  234 => 95,  229 => 93,  220 => 87,  216 => 86,  205 => 78,  194 => 74,  186 => 73,  181 => 71,  172 => 64,  163 => 60,  161 => 59,  156 => 56,  144 => 49,  139 => 47,  136 => 46,  133 => 45,  130 => 44,  124 => 42,  122 => 41,  118 => 39,  115 => 38,  112 => 37,  106 => 35,  104 => 34,  99 => 32,  96 => 31,  91 => 30,  83 => 25,  79 => 24,  75 => 23,  71 => 22,  67 => 21,  55 => 12,  51 => 11,  47 => 10,  43 => 9,  38 => 6,  35 => 5,  29 => 2,  24 => 3,);
    }
}
