<?php

/* mod_invoice_index.phtml */
class __TwigTemplate_636fb37e3c88ea1fa075aeb8691c1827 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'head' => array($this, 'block_head'),
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
        echo gettext("Invoices");
    }

    // line 6
    public function block_top_content($context, array $blocks = array())
    {
        // line 7
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "show_filter")) {
            // line 8
            echo "<div class=\"widget filterWidget\">
    <div class=\"head\"><h5 class=\"iMagnify\">";
            // line 9
            echo gettext("Filter invoices");
            echo "</h5></div>
    <div class=\"body nopadding\">

        <form method=\"get\" action=\"\" class=\"mainForm\">
            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>";
            // line 15
            echo gettext("ID");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"id\" value=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "id"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 23
            echo gettext("Nr");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"nr\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "nr"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 31
            echo gettext("Currency");
            echo "</label>
                    <div class=\"formRight\">
                        ";
            // line 33
            echo $context["mf"]->getselectbox("currency", $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "currency_get_pairs"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "currency"), 0, "All currencies");
            echo "
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 39
            echo gettext("Status");
            echo "</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"status\" value=\"0\"";
            // line 41
            if ((!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "status"))) {
                echo " checked=\"checked\"";
            }
            echo "/><label>";
            echo gettext("All statuses");
            echo "</label>
                            <input type=\"radio\" name=\"status\" value=\"paid\"";
            // line 42
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "status") == "paid")) {
                echo " checked=\"checked\"";
            }
            echo "/><label>";
            echo gettext("Paid");
            echo "</label>
                            <input type=\"radio\" name=\"status\" value=\"unpaid\"";
            // line 43
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "status") == "unpaid")) {
                echo " checked=\"checked\"";
            }
            echo " /><label>";
            echo gettext("Unpaid");
            echo "</label>
                            <input type=\"radio\" name=\"status\" value=\"refunded\"";
            // line 44
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "status") == "refunded")) {
                echo " checked=\"checked\"";
            }
            echo " /><label>";
            echo gettext("Refunded");
            echo "</label>
                        </div>
                    <div class=\"fix\"></div>
                </div>

                ";
            // line 60
            echo "                <div class=\"rowElem\">
                    <label>";
            // line 61
            echo gettext("Issue date");
            echo "</label>
                    <div class=\"formRight moreFields\">
                        <ul>
                            <li style=\"width: 100px\"><input type=\"text\" name=\"date_from\" value=\"";
            // line 64
            if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from"), "Y-m-d"), "html", null, true);
            }
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y-m-d"), "html", null, true);
            echo "\" class=\"datepicker\"/></li>
                            <li class=\"sep\">-</li>
                            <li style=\"width: 100px\"><input type=\"text\" name=\"date_to\" value=\"";
            // line 66
            if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_to")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_to"), "Y-m-d"), "html", null, true);
            }
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y-m-d"), "html", null, true);
            echo "\" class=\"datepicker\"/></li>
                        </ul>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <input type=\"hidden\" name=\"show_filter\" value=\"1\" />
                <input type=\"submit\" value=\"";
            // line 73
            echo gettext("Filter");
            echo "\" class=\"greyishBtn submitForm\" />
            </fieldset>
        </form>
        <div class=\"fix\"></div>
    </div>
</div>
";
        } else {
            // line 80
            $context["statuses"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_get_statuses");
            // line 81
            echo "<div class=\"stats\">
    <ul>
        <li><a href=\"";
            // line 83
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("invoice"), "html", null, true);
            echo "?status=unpaid\" class=\"count blue\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "unpaid"), "html", null, true);
            echo "</a><span>";
            echo gettext("Unpaid invoices");
            echo "</span></li>
        <li><a href=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("invoice"), "html", null, true);
            echo "?status=refunded\" class=\"count red\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "refunded"), "html", null, true);
            echo "</a><span>";
            echo gettext("Refunded invoices");
            echo "</span></li>
        <li><a href=\"";
            // line 85
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("invoice"), "html", null, true);
            echo "?status=paid\" class=\"count green\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "paid"), "html", null, true);
            echo "</a><span>";
            echo gettext("Paid invoices");
            echo "</span></li>
        <li class=\"last\"><a href=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("invoice"), "html", null, true);
            echo "\" class=\"count grey\" title=\"\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "paid") + $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "unpaid")) + $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "refunded")), "html", null, true);
            echo "</a><span>";
            echo gettext("Total");
            echo "</span></li>
    </ul>
    <div class=\"fix\"></div>
</div>
";
        }
        // line 91
        echo "
";
    }

    // line 94
    public function block_content($context, array $blocks = array())
    {
        // line 95
        echo "

<div class=\"widget simpleTabs\">
    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 99
        echo gettext("Invoices");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 100
        echo gettext("New Invoice");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">

            ";
        // line 107
        echo $context["mf"]->gettable_search();
        echo "
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td colspan=\"3\">";
        // line 111
        echo gettext("Invoice");
        echo "</td>
                        <td>";
        // line 112
        echo gettext("Amount");
        echo "</td>
                        <td>";
        // line 113
        echo gettext("Issued at");
        echo "</td>
                        <td>";
        // line 114
        echo gettext("Paid at");
        echo "</td>
                        <td>";
        // line 115
        echo gettext("Status");
        echo "</td>
                        <td width=\"13%\">&nbsp;</td>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 120
        $context["invoices"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_get_list", array(0 => twig_array_merge(array("per_page" => 30, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 121
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["invoices"]) ? $context["invoices"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 122
            echo "                    <tr>
                        <td style=\"width:5%;\"><img src=\"";
            // line 123
            echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "buyer"), "email")), "html", null, true);
            echo "?size=20\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "buyer"), "email"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "buyer"), "first_name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "buyer"), "last_name"), "html", null, true);
            echo "\"/></td>
                        <td><a href=\"";
            // line 124
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client"), "html", null, true);
            echo "/manage/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "client"), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "client"), "first_name"), 1, null, "."), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "client"), "last_name"), 20), "html", null, true);
            echo "</a></td>
                        <td style=\"width:15%;\" title=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "serie_nr"), "html", null, true);
            echo "</td>
                        <td>";
            // line 126
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "total"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
            echo "</td>
                        <td>";
            // line 127
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "created_at"), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>";
            // line 128
            if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "paid_at")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "paid_at"), "Y-m-d"), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
                        <td>";
            // line 129
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status"));
            echo "</td>
                        <td class=\"actions\">
                            <a class=\"bb-button btn14\" href=\"";
            // line 131
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/invoice/manage"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                            <a class=\"btn14 bb-rm-tr api-link\" href=\"admin/invoice/delete?id=";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
            echo "\" data-api-confirm=\"Are you sure?\" data-api-reload=\"1\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 136
            echo "                    <tr>
                        <td colspan=\"8\">";
            // line 137
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 140
        echo "                </tbody>
            </table>
            
            ";
        // line 143
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["invoices"]) ? $context["invoices"] : null), "url" => "invoice")));
        // line 144
        echo "        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new\">
            <form method=\"post\" action=\"admin/invoice/prepare\" class=\"mainForm api-form\" data-api-jsonp=\"onAfterInvoicePrepared\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 150
        echo gettext("Client");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" id=\"client_selector\" placeholder=\"";
        // line 152
        echo gettext("Start typing clients name, email or ID");
        echo "\"/>
                            <input type=\"hidden\" name=\"client_id\" value=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "client_id"), "html", null, true);
        echo "\" id=\"client_id\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                     <input type=\"submit\" value=\"";
        // line 158
        echo gettext("Prepare");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>
    </div>
</div>

";
    }

    // line 168
    public function block_head($context, array $blocks = array())
    {
        // line 169
        echo "<link href=\"css/jquery-ui.css\" rel=\"stylesheet\" type=\"text/css\" />
<script type=\"text/javascript\" src=\"js/jquery-ui.js\"></script>
";
    }

    // line 173
    public function block_js($context, array $blocks = array())
    {
        // line 174
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

    function onAfterInvoicePrepared(id) {
        bb.redirect(\"invoice/manage/\"+id);
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_invoice_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 174,  419 => 173,  413 => 169,  410 => 168,  398 => 158,  390 => 153,  386 => 152,  381 => 150,  373 => 144,  371 => 143,  366 => 140,  357 => 137,  354 => 136,  345 => 132,  339 => 131,  334 => 129,  326 => 128,  322 => 127,  318 => 126,  312 => 125,  302 => 124,  292 => 123,  289 => 122,  283 => 121,  281 => 120,  273 => 115,  269 => 114,  265 => 113,  261 => 112,  257 => 111,  250 => 107,  240 => 100,  236 => 99,  230 => 95,  227 => 94,  222 => 91,  210 => 86,  202 => 85,  194 => 84,  186 => 83,  182 => 81,  180 => 80,  170 => 73,  156 => 66,  147 => 64,  141 => 61,  138 => 60,  126 => 44,  118 => 43,  110 => 42,  102 => 41,  97 => 39,  88 => 33,  83 => 31,  74 => 25,  69 => 23,  60 => 17,  55 => 15,  46 => 9,  43 => 8,  41 => 7,  38 => 6,  32 => 3,  27 => 4,  25 => 2,);
    }
}
