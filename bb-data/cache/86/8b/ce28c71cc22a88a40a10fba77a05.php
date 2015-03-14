<?php

/* mod_order_manage.phtml */
class __TwigTemplate_868bce28c71cc22a88a40a10fba77a05 extends Twig_Template
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
        // line 13
        $context["active_menu"] = "order";
        // line 15
        $context["service_partial"] = (("mod_service" . $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "service_type")) . "_manage.phtml");
        // line 16
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "group_master") == 1)) {
            // line 17
            $context["addons"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "order_addons", array(0 => array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"))), "method");
        }
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), "html", null, true);
    }

    // line 5
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 6
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/"), "html", null, true);
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("order"), "html", null, true);
        echo "\">";
        echo gettext("Orders");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "
<div class=\"widget simpleTabs tabsRight\">

    <div class=\"head\">
        <h5 class=\"iFrames\">";
        // line 25
        echo gettext("Order management");
        echo "</h5>
    </div>

    <ul class=\"tabs\">
        <li><a href=\"#tab-info\">";
        // line 29
        echo gettext("Details");
        echo "</a></li>
        <li><a href=\"#tab-manage\">";
        // line 30
        echo gettext("Edit order");
        echo "</a></li>
        ";
        // line 31
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_template_exists", array(0 => array("file" => (isset($context["service_partial"]) ? $context["service_partial"] : null))), "method")) {
            echo "<li><a href=\"#tab-service\">";
            echo gettext("Service management");
            echo "</a></li>";
        }
        // line 32
        echo "        <li><a href=\"#tab-invoices\">";
        echo gettext("Invoices");
        echo "</a></li>
        ";
        // line 33
        if ((twig_length_filter($this->env, (isset($context["addons"]) ? $context["addons"] : null)) > 0)) {
            echo "<li><a href=\"#tab-addons\">";
            echo gettext("Addons");
            echo "</a></li>";
        }
        // line 34
        echo "        <li><a href=\"#tab-status\">";
        echo gettext("History");
        echo "</a></li>
        <li><a href=\"#tab-support\">";
        // line 35
        echo gettext("Support");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-info\">
            <div class=\"help\">
                <h2>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), "html", null, true);
        echo "</h2>
            </div>

            <div class=\"block\">
                <table class=\"tableStatic wide\">
                    <tbody>
                    <tr class=\"noborder\">
                        <td><label>";
        // line 49
        echo gettext("Order");
        echo "</label></td>
                        <td>#";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "service_type"), "html", null, true);
        echo ")</td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 54
        echo gettext("Client");
        echo "</label></td>
                        <td><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client/manage"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "client"), "id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "client"), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "client"), "last_name"), "html", null, true);
        echo "</a></td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 59
        echo gettext("Title");
        echo "</label></td>
                        <td><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("product/manage"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "product_id"), "html", null, true);
        echo "\"><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), "html", null, true);
        echo "</strong></a></td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 64
        echo gettext("Payment amount");
        echo "</label></td>
                        <td>";
        // line 65
        echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "total"), $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "currency"));
        echo " ";
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "period")) {
            echo $context["mf"]->getperiod_name($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "period"));
        }
        echo " ";
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "quantity") > 1)) {
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "quantity"), "html", null, true);
            echo " x ";
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "price"), $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "currency"));
            echo ")";
        }
        echo "</td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 69
        echo gettext("Order status");
        echo "</label></td>
                        <td>";
        // line 70
        echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status"));
        echo "</td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 74
        echo gettext("Order created");
        echo "</label></td>
                        <td>";
        // line 75
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "created_at"), "l, d F Y"), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 79
        echo gettext("Activated");
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "activated_at")) {
            echo " ";
            echo twig_escape_filter($this->env, twig_timeago_filter($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "activated_at")), "html", null, true);
            echo " ago";
        }
        echo "</label></td>
                        <td>";
        // line 80
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "activated_at")) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "activated_at"), "l, d F Y"), "html", null, true);
            echo " ";
        } else {
            echo "-";
        }
        echo "</td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 84
        echo gettext("Renewal date");
        echo " ";
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "expires_at")) {
            echo " in ";
            echo twig_escape_filter($this->env, twig_daysleft_filter($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "expires_at")), "html", null, true);
            echo " day(s) ";
        }
        echo "</label></td>
                        <td>";
        // line 85
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "expires_at")) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "expires_at"), "l, d F Y"), "html", null, true);
        } else {
            echo "-";
        }
        echo "</td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 89
        echo gettext("Order notes");
        echo "</label></td>
                        <td>";
        // line 90
        echo twig_bbmd_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "notes"));
        echo "</td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 94
        echo gettext("Order group ID");
        echo "</label></td>
                        <td>";
        // line 95
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "group_id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "group_id"), "-")) : ("-")), "html", null, true);
        echo "</td>
                    </tr>

                    ";
        // line 98
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "promo_id")) {
            // line 99
            echo "                    <tr>
                        <td><label>";
            // line 100
            echo gettext("Order promo code");
            echo "</label></td>
                        <td>
                            ";
            // line 102
            $context["promo"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "product_promo_get", array(0 => array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "promo_id"))), "method");
            // line 103
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "code"), "html", null, true);
            echo "
                        </td>
                    </tr>
                    ";
        }
        // line 107
        echo "                    
                    ";
        // line 108
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "active_tickets") > 0)) {
            // line 109
            echo "                    <tr>
                        <td><label>";
            // line 110
            echo gettext("Active support tickets");
            echo "</label></td>
                        <td>
                            <div class=\"num\"><a href=\"";
            // line 112
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("support"), "html", null, true);
            echo "?status=open&order_id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\" class=\"redNum\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "active_tickets"), "html", null, true);
            echo "</a></div>
                        </td>
                    </tr>
                    ";
        }
        // line 116
        echo "                    </tbody>
                    
                    <tfoot>
                        <tr>
                            <td colspan=\"2\">
                                
                                <div class=\"aligncenter\">
                                    ";
        // line 123
        ob_start();
        // line 124
        echo "                                    
                                    ";
        // line 125
        if ((($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status") == "pending_setup") || ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status") == "failed_setup"))) {
            // line 126
            echo "                                    <a href=\"admin/order/activate?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\" title=\"\" data-api-confirm=\"Are you sure?\" class=\"btn55 mr10 api-link\" data-api-reload=\"Order activated\"><img src=\"images/icons/middlenav/play2.png\" alt=\"\"><span>Activate</span></a>
                                    ";
        }
        // line 128
        echo "                                    
                                    ";
        // line 129
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status") == "active")) {
            // line 130
            echo "                                    <a href=\"admin/order/renew?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\" title=\"\" data-api-confirm=\"Are you sure?\" class=\"btn55 mr10 api-link\" data-api-reload=\"Order renewed\"><img src=\"images/icons/middlenav/play2.png\" alt=\"\"><span>Renew</span></a>
                                    <a href=\"admin/order/suspend?id=";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\" title=\"\" class=\"btn55 mr10 api-link\" data-api-prompt-key=\"reason\" data-api-prompt=\"1\" data-api-prompt-text=\"";
            echo gettext("Reason of suspendation");
            echo "\" data-api-prompt-title=\"";
            echo gettext("Suspendation reason");
            echo "\" data-api-reload=\"Order suspended\"><img src=\"images/icons/middlenav/stop.png\" alt=\"\"><span>Suspend</span></a>
                                    <a href=\"admin/order/cancel?id=";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\" title=\"\" class=\"btn55 mr10 api-link\" data-api-prompt-key=\"reason\" data-api-prompt=\"1\" data-api-prompt-text=\"";
            echo gettext("Reason of cancelation");
            echo "\" data-api-prompt-title=\"";
            echo gettext("Cancelation reason");
            echo "\" data-api-reload=\"Order canceled\"><img src=\"images/icons/middlenav/close.png\" alt=\"\"><span>Cancel</span></a>
                                    ";
        }
        // line 134
        echo "                                    
                                    ";
        // line 135
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status") == "suspended")) {
            // line 136
            echo "                                    <a href=\"admin/order/unsuspend?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\" title=\"\" data-api-confirm=\"Are you sure?\" class=\"btn55 mr10 api-link\" data-api-reload=\"Order activated\"><img src=\"images/icons/middlenav/play2.png\" alt=\"\"><span>Unsuspend</span></a>
                                    ";
        }
        // line 138
        echo "                                    
                                    ";
        // line 139
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status") == "canceled")) {
            // line 140
            echo "                                    <a href=\"admin/order/uncancel?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\" title=\"\" data-api-confirm=\"Are you sure?\" class=\"btn55 mr10 api-link\" data-api-reload=\"Order activated\"><img src=\"images/icons/middlenav/play2.png\" alt=\"\"><span>Activate</span></a>
                                    ";
        }
        // line 142
        echo "                                    
                                    <a href=\"admin/order/delete?id=";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo "\" title=\"\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"order\" class=\"btn55 mr10 api-link\"><img src=\"images/icons/middlenav/trash.png\" alt=\"\"><span>Delete</span></a>

                                    ";
        // line 145
        if ((!$this->getAttribute((isset($context["order"]) ? $context["order"] : null), "unpaid_invoice_id"))) {
            // line 146
            echo "                                    <a href=\"admin/invoice/renewal_invoice?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\" title=\"\" data-api-confirm=\"Are you sure?\" class=\"btn55 mr10 api-link\" data-api-reload=\"1\"><img src=\"images/icons/middlenav/create.png\" alt=\"\"><span>Issue invoice</span></a>
                                    ";
        }
        // line 148
        echo "                                    ";
        $context["order_actions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 149
        echo "                                    
                                    ";
        // line 150
        echo twig_escape_filter($this->env, (isset($context["order_actions"]) ? $context["order_actions"] : null), "html", null, true);
        echo "
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>

        <div class=\"tab_content nopadding\" id=\"tab-manage\">
            <div class=\"help\">
                <h2>Order management</h2>
            </div>
            <form method=\"post\" action=\"admin/order/update\" class=\"mainForm api-form\" data-api-reload=\"1\">
                <fieldset>

                    <div class=\"rowElem noborder\">
                        <label>";
        // line 168
        echo gettext("Title");
        echo "</label>
                        <div class=\"formRight noborder\">
                            <input type=\"text\" name=\"title\" value=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 176
        echo gettext("Changes status without performing action");
        echo "</label>
                        <div class=\"formRight noborder\">
                            ";
        // line 178
        echo $context["mf"]->getselectbox("status", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "order_get_status_pairs"), $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status"), 0, "Select status");
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 184
        echo gettext("Invoice option");
        echo "</label>
                        <div class=\"formRight noborder\">
                            ";
        // line 186
        echo $context["mf"]->getselectbox("invoice_option", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "order_get_invoice_options"), $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "invoice_option"));
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 192
        echo gettext("Price");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"price\" value=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "price"), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 200
        echo gettext("Reason");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"reason\" value=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "reason"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 208
        echo gettext("Period");
        echo "</label>
                        <div class=\"formRight\">
                            ";
        // line 210
        echo $context["mf"]->getselectbox("period", $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_periods"), $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "period"), 0, "Not recurrent");
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 216
        echo gettext("Expires at");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"expires_at\" value=\"";
        // line 218
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "expires_at")) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "expires_at"), "Y-m-d"), "html", null, true);
        }
        echo "\" class=\"datepicker\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 224
        echo gettext("Created at");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"created_at\" value=\"";
        // line 226
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "created_at"), "Y-m-d"), "html", null, true);
        echo "\" required=\"required\" class=\"datepicker\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 232
        echo gettext("Activated at");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"activated_at\" value=\"";
        // line 234
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "activated_at"), "Y-m-d"), "html", null, true);
        echo "\" required=\"required\" class=\"datepicker\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 240
        echo gettext("Notes");
        echo "</label>
                        <div class=\"formRight\">
                            <textarea name=\"notes\" cols=\"5\" rows=\"5\">";
        // line 242
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "notes"), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                     <input type=\"submit\" value=\"";
        // line 247
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo "\">
            </form>
            
            ";
        // line 270
        echo "            ";
        // line 271
        echo "            
            ";
        // line 295
        echo "        </div>

        <div class=\"tab_content nopadding\" id=\"tab-addons\">
            <div class=\"help\">
                <h2>";
        // line 299
        echo gettext("Addons you have ordered with this service");
        echo "</h2>
            </div>
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>";
        // line 304
        echo gettext("Product/Service");
        echo "</td>
                        <td>";
        // line 305
        echo gettext("Price");
        echo "</td>
                        <td>";
        // line 306
        echo gettext("Billing Cycle");
        echo "</td>
                        <td>";
        // line 307
        echo gettext("Next due date");
        echo "</td>
                        <td>";
        // line 308
        echo gettext("Status");
        echo "</td>
                        <td>&nbsp</td>
                    </tr>
                </thead>

                <tbody>
                ";
        // line 314
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addons"]) ? $context["addons"] : null));
        foreach ($context['_seq'] as $context["i"] => $context["addon"]) {
            // line 315
            echo "                <tr>
                    <td>";
            // line 316
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "title"), "html", null, true);
            echo "</td>
                    <td>";
            // line 317
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "total"), $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "currency"));
            echo "</td>
                    <td>";
            // line 318
            echo $context["mf"]->getperiod_name($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "period"));
            echo "</td>
                    <td>";
            // line 319
            if ($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "expires_at")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "expires_at"), "l, d F Y"), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
                    <td>";
            // line 320
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "status"));
            echo "</td>
                    <td class=\"actions\"><a class=\"bb-button btn14\" href=\"";
            // line 321
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/order/manage"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a></td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['addon'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 324
        echo "                </tbody>
            </table>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-service\">
            ";
        // line 329
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_template_exists", array(0 => array("file" => (isset($context["service_partial"]) ? $context["service_partial"] : null))), "method")) {
            // line 330
            echo "                ";
            $context["service"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "order_service", array(0 => array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"))), "method");
            // line 331
            echo "                ";
            $template = $this->env->resolveTemplate((isset($context["service_partial"]) ? $context["service_partial"] : null));
            $template->display(array_merge($context, array("order" => (isset($context["order"]) ? $context["order"] : null), "service" => (isset($context["service"]) ? $context["service"] : null))));
            // line 332
            echo "            ";
        }
        // line 333
        echo "        </div>

        <div class=\"tab_content nopadding\" id=\"tab-invoices\">
            <div class=\"help\">
                <h2>";
        // line 337
        echo gettext("Order invoices");
        echo "</h2>
            </div>

            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td width=\"15%\">";
        // line 344
        echo gettext("Amount");
        echo "</td>
                        <td width=\"30%\">";
        // line 345
        echo gettext("Issued at");
        echo "</td>
                        <td width=\"30%\">";
        // line 346
        echo gettext("Paid at");
        echo "</td>
                        <td width=\"15%\">";
        // line 347
        echo gettext("Status");
        echo "</td>
                        <td>&nbsp;</td>
                    </tr>
                </thead>
                
                <tbody>
                    ";
        // line 353
        $context["invoices"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_get_list", array(0 => array("per_page" => 50, "order_id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"))), "method");
        // line 354
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["invoices"]) ? $context["invoices"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 355
            echo "                    <tr>
                        <td>";
            // line 356
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
            echo "</td>
                        <td>";
            // line 357
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "total"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"), 1);
            echo "</td>
                        <td>";
            // line 358
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "created_at"), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>";
            // line 359
            if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "paid_at")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "paid_at"), "Y-m-d"), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
                        <td>";
            // line 360
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status"));
            echo "</td>
                        <td class=\"actions\"><a class=\"bb-button btn14\" href=\"";
            // line 361
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/invoice/manage"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a></td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 364
            echo "                    <tr>
                        <td colspan=\"5\">";
            // line 365
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 368
        echo "                </tbody>
            </table>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-status\">
            <div class=\"help\">
                <h2>";
        // line 374
        echo gettext("Order status change history");
        echo "</h2>
            </div>
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>";
        // line 379
        echo gettext("Status");
        echo "</td>
                        <td>";
        // line 380
        echo gettext("Note");
        echo "</td>
                        <td>";
        // line 381
        echo gettext("Date");
        echo "</td>
                        <td>";
        // line 382
        echo gettext("Actions");
        echo "</td>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 386
        $context["statuses"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "order_status_history_get_list", array(0 => array("per_page" => 50, "id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"))), "method");
        // line 387
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "list"));
        foreach ($context['_seq'] as $context["i"] => $context["sh"]) {
            // line 388
            echo "                    <tr>
                        <td>";
            // line 389
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["sh"]) ? $context["sh"] : null), "status"));
            echo "</td>
                        <td><div style=\"overflow: auto; width: 470px; max-height: 50px;\">";
            // line 390
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sh"]) ? $context["sh"] : null), "notes"), "html", null, true);
            echo "</div></td>
                        <td>";
            // line 391
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["sh"]) ? $context["sh"] : null), "created_at"), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"support\" href=\"admin/order/status_history_delete?id=";
            // line 393
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sh"]) ? $context["sh"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['sh'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 397
        echo "                </tbody>
            </table>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-support\">
            <div class=\"help\">
                <h2>";
        // line 403
        echo gettext("Support tickets regarding this order");
        echo "</h2>
            </div>
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td width=\"60%\">";
        // line 409
        echo gettext("Subject");
        echo "</td>
                        <td width=\"15%\">";
        // line 410
        echo gettext("Help desk");
        echo "</td>
                        <td width=\"15%\">";
        // line 411
        echo gettext("Status");
        echo "</td>
                        <td>&nbsp;</td>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 417
        $context["tickets"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_ticket_get_list", array(0 => array("per_page" => "20", "order_id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"))), "method");
        // line 418
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 419
            echo "                    <tr>
                        <td>";
            // line 420
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "</td>
                        <td>";
            // line 421
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), 30), "html", null, true);
            echo "</td>
                        <td>";
            // line 422
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "helpdesk"), "name"), "html", null, true);
            echo "</td>
                        <td>";
            // line 423
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status"));
            echo "</td>
                        <td class=\"actions\"><a class=\"bb-button btn14\" href=\"";
            // line 424
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/support/ticket"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a></td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 427
            echo "                    <tr>
                        <td colspan=\"5\">";
            // line 428
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 431
        echo "                </tbody>
            </table>
        </div>
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "mod_order_manage.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  947 => 431,  938 => 428,  935 => 427,  925 => 424,  921 => 423,  917 => 422,  913 => 421,  909 => 420,  906 => 419,  900 => 418,  898 => 417,  889 => 411,  885 => 410,  881 => 409,  872 => 403,  864 => 397,  854 => 393,  849 => 391,  845 => 390,  841 => 389,  838 => 388,  833 => 387,  831 => 386,  824 => 382,  820 => 381,  816 => 380,  812 => 379,  804 => 374,  796 => 368,  787 => 365,  784 => 364,  774 => 361,  770 => 360,  762 => 359,  758 => 358,  754 => 357,  750 => 356,  747 => 355,  741 => 354,  739 => 353,  730 => 347,  726 => 346,  722 => 345,  718 => 344,  708 => 337,  702 => 333,  699 => 332,  695 => 331,  692 => 330,  690 => 329,  683 => 324,  672 => 321,  668 => 320,  660 => 319,  656 => 318,  652 => 317,  648 => 316,  645 => 315,  641 => 314,  632 => 308,  628 => 307,  624 => 306,  620 => 305,  616 => 304,  608 => 299,  602 => 295,  599 => 271,  597 => 270,  591 => 249,  586 => 247,  578 => 242,  573 => 240,  564 => 234,  559 => 232,  550 => 226,  545 => 224,  534 => 218,  529 => 216,  520 => 210,  515 => 208,  506 => 202,  501 => 200,  492 => 194,  487 => 192,  478 => 186,  473 => 184,  464 => 178,  459 => 176,  450 => 170,  445 => 168,  424 => 150,  421 => 149,  418 => 148,  412 => 146,  410 => 145,  405 => 143,  402 => 142,  396 => 140,  394 => 139,  391 => 138,  385 => 136,  383 => 135,  380 => 134,  371 => 132,  363 => 131,  358 => 130,  356 => 129,  353 => 128,  347 => 126,  345 => 125,  342 => 124,  340 => 123,  331 => 116,  320 => 112,  315 => 110,  312 => 109,  310 => 108,  307 => 107,  299 => 103,  297 => 102,  292 => 100,  289 => 99,  287 => 98,  281 => 95,  277 => 94,  270 => 90,  266 => 89,  255 => 85,  245 => 84,  233 => 80,  224 => 79,  217 => 75,  213 => 74,  206 => 70,  202 => 69,  183 => 65,  179 => 64,  168 => 60,  164 => 59,  151 => 55,  147 => 54,  138 => 50,  134 => 49,  124 => 42,  114 => 35,  109 => 34,  103 => 33,  98 => 32,  92 => 31,  88 => 30,  84 => 29,  77 => 25,  71 => 21,  68 => 20,  61 => 9,  55 => 8,  49 => 7,  46 => 6,  43 => 5,  37 => 3,  31 => 17,  29 => 16,  27 => 15,  25 => 13,  23 => 2,);
    }
}
