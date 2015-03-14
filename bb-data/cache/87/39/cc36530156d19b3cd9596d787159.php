<?php

/* mod_order_index.phtml */
class __TwigTemplate_8739cc36530156d19b3cd9596d787159 extends Twig_Template
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
        $context["active_menu"] = "order";
        // line 3
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Orders");
    }

    // line 7
    public function block_top_content($context, array $blocks = array())
    {
        // line 8
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "show_filter")) {
            // line 9
            echo "<div class=\"widget filterWidget\">
    <div class=\"head\"><h5 class=\"iMagnify\">";
            // line 10
            echo gettext("Filter orders");
            echo "</h5></div>
    <div class=\"body nopadding\">

        <form method=\"get\" action=\"\" class=\"mainForm\">
            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>";
            // line 16
            echo gettext("ID");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"id\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "id"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 24
            echo gettext("Title");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"title\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "title"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 32
            echo gettext("Status");
            echo "</label>
                    <div class=\"formRight\">
                        ";
            // line 34
            echo $context["mf"]->getselectbox("status", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "order_get_status_pairs"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "status"), 0, "All statuses");
            echo "
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 40
            echo gettext("Type");
            echo ":</label>
                    <div class=\"formRight\">
                        ";
            // line 42
            echo $context["mf"]->getselectbox("type", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "product_get_types"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "type"), 0, "All types");
            echo "
                    </div>
                    <div class=\"fix\"></div>
                </div>
                
                <div class=\"rowElem\">
                    <label>";
            // line 48
            echo gettext("Product");
            echo ":</label>
                    <div class=\"formRight\">
                        ";
            // line 50
            echo $context["mf"]->getselectbox("product_id", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "product_get_pairs"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "product_id"), 0, "All products");
            echo "
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 56
            echo gettext("Period");
            echo "</label>
                    <div class=\"formRight\">
                        ";
            // line 58
            echo $context["mf"]->getselectbox("period", $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_periods"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "period"), 0, "All periods");
            echo "
                    </div>
                    <div class=\"fix\"></div>
                </div>
                
                <div class=\"rowElem\">
                    <label>";
            // line 64
            echo gettext("Invoice option");
            echo "</label>
                    <div class=\"formRight\">
                        ";
            // line 66
            echo $context["mf"]->getselectbox("invoice_option", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "order_get_invoice_options"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "invoice_option"), 0, "All types");
            echo "
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 72
            echo gettext("Creation date");
            echo "</label>
                    <div class=\"formRight moreFields\">
                        <ul>
                            <li style=\"width: 100px\"><input type=\"text\" name=\"date_from\" value=\"";
            // line 75
            if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from"), "Y-m-d"), "html", null, true);
            }
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y-m-d"), "html", null, true);
            echo "\" class=\"datepicker\"/></li>
                            <li class=\"sep\">-</li>
                            <li style=\"width: 100px\"><input type=\"text\" name=\"date_to\" value=\"";
            // line 77
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
            // line 84
            echo gettext("Filter");
            echo "\" class=\"greyishBtn submitForm\" />
            </fieldset>
        </form>
        <div class=\"fix\"></div>
    </div>
</div>
";
        } else {
            // line 91
            $context["count_orders"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "order_get_statuses");
            // line 92
            echo "<div class=\"stats\">
    <ul>
        <li><a href=\"";
            // line 94
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("order"), "html", null, true);
            echo "?status=pending_setup\" class=\"count green\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["count_orders"]) ? $context["count_orders"] : null), "pending_setup"), "html", null, true);
            echo "</a><span>";
            echo gettext("Pending setup");
            echo "</span></li>
        <li><a href=\"";
            // line 95
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("order"), "html", null, true);
            echo "?status=active\" class=\"count blue\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["count_orders"]) ? $context["count_orders"] : null), "active"), "html", null, true);
            echo "</a><span>";
            echo gettext("Active");
            echo "</span></li>
        <li><a href=\"";
            // line 96
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("order"), "html", null, true);
            echo "?status=suspended\" class=\"count red\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["count_orders"]) ? $context["count_orders"] : null), "suspended"), "html", null, true);
            echo "</a><span>";
            echo gettext("Supended");
            echo "</span></li>
        <li class=\"last\"><a href=\"";
            // line 97
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("order"), "html", null, true);
            echo "\" class=\"count grey\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["count_orders"]) ? $context["count_orders"] : null), "total"), "html", null, true);
            echo " </a><span>";
            echo gettext("Total");
            echo "</span></li>
    </ul>
    <div class=\"fix\"></div>
</div>

";
        }
        // line 103
        echo "
";
    }

    // line 106
    public function block_content($context, array $blocks = array())
    {
        // line 107
        echo "
<div class=\"widget simpleTabs\">
    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 110
        echo gettext("Orders");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 111
        echo gettext("New order");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">
        ";
        // line 117
        echo $context["mf"]->gettable_search();
        echo "
        <table class=\"tableStatic wide\">
            <thead>
                <tr>
                    <td>";
        // line 121
        echo gettext("ID");
        echo "</td>
                    <td width=\"25%\" colspan=\"2\">";
        // line 122
        echo gettext("Client");
        echo "</td>
                    <td width=\"40%\">";
        // line 123
        echo gettext("Title");
        echo "</td>
                    <td>";
        // line 124
        echo gettext("Amount");
        echo "</td>
                    <td>";
        // line 125
        echo gettext("Period");
        echo "</td>
                    <td>";
        // line 126
        echo gettext("Status");
        echo "</td>
                    <td style=\"width: 14%\">&nbsp;</td>
                </tr>
            </thead>

            <tbody>
                ";
        // line 132
        $context["orders"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "order_get_list", array(0 => twig_array_merge(array("per_page" => 30, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page"), "hide_addons" => 1), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 133
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["orders"]) ? $context["orders"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["order"]) {
            // line 134
            echo "                <tr>
                    <td>";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 136
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client/manage"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "client_id"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "client"), "email")), "html", null, true);
            echo "?size=20\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "client"), "email"), "html", null, true);
            echo "\" /></a></td>
                    <td><a href=\"";
            // line 137
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client/manage"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "client_id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "client"), "first_name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "client"), "last_name"), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 138
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), 30), "html", null, true);
            echo "</td>
                    <td>";
            // line 139
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "total"), $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "currency"));
            echo "</td>
                    <td>";
            // line 140
            echo $context["mf"]->getperiod_name($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "period"));
            echo "</td>
                    <td>";
            // line 141
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status"));
            echo "</td>
                    <td class=\"actions\">
                        <a class=\"bb-button btn14\" href=\"";
            // line 143
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/order/manage"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" href=\"admin/order/delete?id=";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\" data-api-redirect=\"order\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 148
            echo "                <tr>
                    <td colspan=\"8\">";
            // line 149
            echo gettext("The list is empty");
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 152
        echo "            </tbody>
        </table>
        ";
        // line 154
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["orders"]) ? $context["orders"] : null), "url" => "order")));
        // line 155
        echo "        </div>
    </div>
    
    <div class=\"tab_content nopadding\" id=\"tab-new\">
        <form method=\"get\" action=\"";
        // line 159
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("order/new"), "html", null, true);
        echo "\" class=\"mainForm\">
            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>";
        // line 162
        echo gettext("Client");
        echo "</label>
                    <div class=\"formRight\">
                        ";
        // line 164
        if ((!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "client_id"))) {
            // line 165
            echo "                        <input type=\"text\" id=\"client_selector\" placeholder=\"";
            echo gettext("Start typing clients name, email or ID");
            echo "\"/>
                        <input type=\"hidden\" name=\"client_id\" value=\"";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "client_id"), "html", null, true);
            echo "\" id=\"client_id\"/>
                        ";
        } else {
            // line 168
            echo "                            ";
            $context["client"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "client_get", array(0 => array("id" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "client_id"))), "method");
            // line 169
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "first_name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "last_name"), "html", null, true);
            echo "
                        ";
        }
        // line 171
        echo "                    </div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"rowElem\">
                    <label>";
        // line 175
        echo gettext("Product");
        echo ":</label>
                    <div class=\"formRight\">
                        ";
        // line 177
        echo $context["mf"]->getselectbox("product_id", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "product_get_pairs"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "product_id"), 1);
        echo "
                    </div>
                    <div class=\"fix\"></div>
                </div>
                
            <input type=\"submit\" value=\"";
        // line 182
        echo gettext("Continue");
        echo "\" class=\"greyishBtn submitForm\" />
            ";
        // line 183
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "client_id")) {
            // line 184
            echo "            <input type=\"hidden\" name=\"client_id\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "client_id"), "html", null, true);
            echo "\" />
            ";
        }
        // line 186
        echo "            </fieldset>
        </form>
    </div>
</div>

";
    }

    // line 193
    public function block_head($context, array $blocks = array())
    {
        // line 194
        echo "<link href=\"css/jquery-ui.css\" rel=\"stylesheet\" type=\"text/css\" />
<script type=\"text/javascript\" src=\"js/jquery-ui.js\"></script>
";
    }

    // line 198
    public function block_js($context, array $blocks = array())
    {
        // line 199
        if ((!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "client_id"))) {
            // line 200
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
    }

    public function getTemplateName()
    {
        return "mod_order_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 200,  474 => 199,  471 => 198,  465 => 194,  462 => 193,  453 => 186,  447 => 184,  445 => 183,  441 => 182,  433 => 177,  428 => 175,  422 => 171,  414 => 169,  411 => 168,  406 => 166,  401 => 165,  399 => 164,  394 => 162,  388 => 159,  382 => 155,  380 => 154,  376 => 152,  367 => 149,  364 => 148,  355 => 144,  349 => 143,  344 => 141,  340 => 140,  336 => 139,  332 => 138,  322 => 137,  312 => 136,  308 => 135,  305 => 134,  299 => 133,  297 => 132,  288 => 126,  284 => 125,  280 => 124,  276 => 123,  272 => 122,  268 => 121,  261 => 117,  252 => 111,  248 => 110,  243 => 107,  240 => 106,  235 => 103,  222 => 97,  214 => 96,  206 => 95,  198 => 94,  194 => 92,  192 => 91,  182 => 84,  168 => 77,  159 => 75,  153 => 72,  144 => 66,  139 => 64,  130 => 58,  125 => 56,  116 => 50,  111 => 48,  102 => 42,  97 => 40,  88 => 34,  83 => 32,  74 => 26,  69 => 24,  60 => 18,  55 => 16,  46 => 10,  43 => 9,  41 => 8,  38 => 7,  32 => 5,  27 => 3,  25 => 2,);
    }
}
