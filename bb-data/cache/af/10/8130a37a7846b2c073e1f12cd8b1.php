<?php

/* mod_invoice_subscriptions.phtml */
class __TwigTemplate_af108130a37a7846b2c073e1f12cd8b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
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
        $context["active_menu"] = "invoice";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Subscriptions");
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 11
        echo gettext("Subscriptions");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 12
        echo gettext("New subscription");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">

        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">

        ";
        // line 20
        echo $context["mf"]->gettable_search();
        echo "
        <table class=\"tableStatic wide\">
            <thead>
                <tr>
                    <th colspan=\"2\">";
        // line 24
        echo gettext("ID");
        echo "</th>
                    <th>";
        // line 25
        echo gettext("Status");
        echo "</th>
                    <th>";
        // line 26
        echo gettext("Gateway");
        echo "</th>
                    <th>";
        // line 27
        echo gettext("Amount");
        echo "</th>
                    <th width=\"13%\">&nbsp;</th>
                </tr>
            </thead>

            <tbody>
                ";
        // line 33
        $context["subscriptions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_subscription_get_list", array(0 => twig_array_merge(array("per_page" => 30, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 34
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["subscriptions"]) ? $context["subscriptions"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["subscription"]) {
            // line 35
            echo "                <tr>
                    <td style=\"width:5%;\"><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client/manage"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "client"), "id"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "client"), "email")), "html", null, true);
            echo "?size=20\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "client"), "email"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "client"), "first_name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "client"), "last_name"), "html", null, true);
            echo "\"/></a></td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "sid"), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "status"));
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "gateway"), "title"), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "amount"), $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "currency"));
            echo " ";
            echo $context["mf"]->getperiod_name($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "period"));
            echo "</td>
                    <td class=\"actions\">
                        <a class=\"btn14\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("invoice/subscription"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        <a class=\"btn14 bb-rm-tr api-link\" href=\"admin/invoice/subscription_delete?id=";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "id"), "html", null, true);
            echo "\" data-api-confirm=\"Are you sure?\" data-api-reload=\"1\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "                <tr>
                    <td colspan=\"6\">
                        ";
            // line 49
            echo gettext("The list is empty");
            // line 50
            echo "                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['subscription'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 53
        echo "            </tbody>
        </table>
        
        ";
        // line 56
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["subscriptions"]) ? $context["subscriptions"] : null), "url" => "invoice/subscriptions")));
        // line 57
        echo "    </div>
        
        <div class=\"tab_content nopadding\" id=\"tab-new\">

            <form method=\"post\" action=\"admin/invoice/subscription_create\" class=\"mainForm save api-form\" data-api-reload=\"1\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 64
        echo gettext("Client");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" id=\"client_selector\" placeholder=\"";
        // line 66
        echo gettext("Start typing clients name, email or ID");
        echo "\"/>
                            <input type=\"hidden\" name=\"client_id\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "client_id"), "html", null, true);
        echo "\" id=\"client_id\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 72
        echo gettext("Payment Gateway");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 74
        echo $context["mf"]->getselectbox("gateway_id", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_gateway_get_pairs"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "gateway_id"), 0, "Select payment gateway");
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 79
        echo gettext("Subscription ID on payment gateway");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"sid\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "sid"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 86
        echo gettext("Status");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"status\" value=\"active\" checked=\"checked\"/><label>";
        // line 88
        echo gettext("Active");
        echo "</label>
                            <input type=\"radio\" name=\"status\" value=\"canceled\" /><label>";
        // line 89
        echo gettext("Canceled");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 94
        echo gettext("Period");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 96
        echo $context["mf"]->getselectbox("period", $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_periods"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "period"), 1, "Select period");
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 102
        echo gettext("Amount");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"amount\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "amount"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 110
        echo gettext("Currency");
        echo "</label>
                        <div class=\"formRight\">
                            ";
        // line 112
        echo $context["mf"]->getselectbox("currency", $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "currency_get_pairs"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "currency"), 1, "Select currency");
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <input type=\"submit\" value=\"";
        // line 117
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
            </div>
        
    </div>
</div>
";
    }

    // line 127
    public function block_js($context, array $blocks = array())
    {
        // line 128
        echo "<script type=\"text/javascript\">
\$(function() {

\t\$('#client_selector').autocomplete({
        source: function( request, response ) {
            \$.ajax({
                url: bb.restUrl('admin/client/get_pairs'),
                dataType: \"json\",
                data: {
                    per_page: 10,
                    search: request.term
                },
                success: function( data ) {
                    response( \$.map( data.result, function( name, id) {
                        return {
                            label: name,
                            value: id
                        }
                    }));
                }
            });
        },
        minLength: 1,
        select: function( event, ui ) {
            \$(\"#client_selector\").val(ui.item.label);
            \$(\"#client_id\").val(ui.item.value);
            return false;
        }
    });

});

</script>
";
    }

    public function getTemplateName()
    {
        return "mod_invoice_subscriptions.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 128,  290 => 127,  278 => 117,  270 => 112,  265 => 110,  256 => 104,  251 => 102,  242 => 96,  237 => 94,  229 => 89,  225 => 88,  220 => 86,  212 => 81,  207 => 79,  199 => 74,  194 => 72,  186 => 67,  182 => 66,  177 => 64,  168 => 57,  166 => 56,  161 => 53,  153 => 50,  151 => 49,  147 => 47,  138 => 43,  132 => 42,  125 => 40,  121 => 39,  117 => 38,  113 => 37,  99 => 36,  96 => 35,  90 => 34,  88 => 33,  79 => 27,  75 => 26,  71 => 25,  67 => 24,  60 => 20,  49 => 12,  45 => 11,  39 => 7,  36 => 6,  30 => 3,  25 => 4,  23 => 2,);
    }
}
