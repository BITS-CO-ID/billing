<?php

/* mod_invoice_gateway.phtml */
class __TwigTemplate_2753a74a7894b8251629396f70317d3e extends Twig_Template
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
        echo gettext("Gateway");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "title"), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("invoice/gateways"), "html", null, true);
        echo "\">";
        echo gettext("Payment gateways");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "title"), "html", null, true);
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
        <h5>";
        // line 18
        echo gettext("Payment gateway configuration");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "title"), "html", null, true);
        echo "</h5>
    </div>

    <div class=\"help\">
        <h5>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "title"), "html", null, true);
        echo "</h5>
        ";
        // line 23
        echo $this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "description");
        echo "
    </div>

    <form method=\"post\" action=\"admin/invoice/gateway_update\" class=\"mainForm save api-form\" data-api-msg=\"Gateway updated\">
    <fieldset>
        <div class=\"rowElem noborder\">
            <label class=\"topLabel\">";
        // line 29
        echo gettext("Payment gateway title");
        echo ":</label>
            <div class=\"formBottom\">
                <input type=\"text\" name=\"title\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "title"), "html", null, true);
        echo "\" />
            </div>
            <div class=\"fix\"></div>
        </div>

        ";
        // line 37
        echo "        ";
        echo $context["mf"]->getbuild_form($this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "form"), $this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "config"));
        echo "

        <div class=\"rowElem\">
            <label class=\"topLabel\">";
        // line 40
        echo gettext("Select which currencies can accept this payment gateway (Select none to allow all currencies)");
        echo "</label>
            <div class=\"formBottom\">
                ";
        // line 42
        $context["currencies"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "currency_get_pairs");
        // line 43
        echo "                <select name=\"accepted_currencies[]\" multiple=\"multiple\" class=\"multiple\" size=\"";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["currencies"]) ? $context["currencies"] : null)), "html", null, true);
        echo "\">
                    ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["currency"]) {
            // line 45
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" ";
            if (twig_in_filter((isset($context["id"]) ? $context["id"] : null), $this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "accepted_currencies"))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["currency"]) ? $context["currency"] : null), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 47
        echo "                </select>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 53
        echo gettext("Enabled");
        echo ":</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"enabled\" value=\"1\"";
        // line 55
        if ($this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "enabled")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                <input type=\"radio\" name=\"enabled\" value=\"0\"";
        // line 56
        if ((!$this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "enabled"))) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("No");
        echo "</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        ";
        // line 61
        if ($this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "supports_one_time_payments")) {
            // line 62
            echo "        <div class=\"rowElem\">
            <label>";
            // line 63
            echo gettext("Allow one time payments");
            echo ":</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"allow_single\" value=\"1\"";
            // line 65
            if ($this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "allow_single")) {
                echo " checked=\"checked\"";
            }
            echo "/><label>";
            echo gettext("Yes");
            echo "</label>
                <input type=\"radio\" name=\"allow_single\" value=\"0\"";
            // line 66
            if ((!$this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "allow_single"))) {
                echo " checked=\"checked\"";
            }
            echo " /><label>";
            echo gettext("No");
            echo "</label>
            </div>
            <div class=\"fix\"></div>
        </div>
        ";
        } else {
            // line 71
            echo "        <input type=\"hidden\" name=\"allow_single\" value=\"0\" />
        ";
        }
        // line 73
        echo "        
        ";
        // line 74
        if ($this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "supports_subscriptions")) {
            // line 75
            echo "        <div class=\"rowElem\">
            <label>";
            // line 76
            echo gettext("Allow subscription payments");
            echo ":</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"allow_recurrent\" value=\"1\"";
            // line 78
            if ($this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "allow_recurrent")) {
                echo " checked=\"checked\"";
            }
            echo "/><label>";
            echo gettext("Yes");
            echo "</label>
                <input type=\"radio\" name=\"allow_recurrent\" value=\"0\"";
            // line 79
            if ((!$this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "allow_recurrent"))) {
                echo " checked=\"checked\"";
            }
            echo " /><label>";
            echo gettext("No");
            echo "</label>
            </div>
            <div class=\"fix\"></div>
        </div>
        ";
        } else {
            // line 84
            echo "        <input type=\"hidden\" name=\"allow_recurrent\" value=\"0\" />
        ";
        }
        // line 86
        echo "
        <div class=\"rowElem\">
            <label>";
        // line 88
        echo gettext("Enable test mode");
        echo ":</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"test_mode\" value=\"1\"";
        // line 90
        if ($this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "test_mode")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                <input type=\"radio\" name=\"test_mode\" value=\"0\"";
        // line 91
        if ((!$this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "test_mode"))) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("No");
        echo "</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 97
        echo gettext("IPN Callback URL");
        echo ":</label>
            <div class=\"formRight\">
                <input type=\"text\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "callback"), "html", null, true);
        echo "\" readonly=\"readonly\"/>
            </div>
            <div class=\"fix\"></div>
        </div>

        <input type=\"submit\" value=\"";
        // line 104
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "id"), "html", null, true);
        echo "\" />
    </fieldset>
    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_invoice_gateway.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 105,  291 => 104,  283 => 99,  278 => 97,  265 => 91,  257 => 90,  252 => 88,  248 => 86,  244 => 84,  232 => 79,  224 => 78,  219 => 76,  216 => 75,  214 => 74,  211 => 73,  207 => 71,  195 => 66,  187 => 65,  182 => 63,  179 => 62,  177 => 61,  165 => 56,  157 => 55,  152 => 53,  144 => 47,  129 => 45,  125 => 44,  120 => 43,  118 => 42,  113 => 40,  106 => 37,  98 => 31,  93 => 29,  84 => 23,  80 => 22,  71 => 18,  66 => 15,  63 => 14,  56 => 10,  50 => 9,  44 => 8,  41 => 7,  38 => 6,  30 => 3,  25 => 4,  23 => 2,);
    }
}
