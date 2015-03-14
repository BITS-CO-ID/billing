<?php

/* mod_invoice_invoice.phtml */
class __TwigTemplate_ae252db576fb0173fcd0b2ac0591d5bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
            'sidebar2' => array($this, 'block_sidebar2'),
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
        echo gettext("Invoice");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "serie"), "html", null, true);
        echo twig_escape_filter($this->env, sprintf("%05s", $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "nr")), "html", null, true);
    }

    // line 7
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 8
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/"), "html", null, true);
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("invoice"), "html", null, true);
        echo "\">";
        echo gettext("Invoices");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "serie"), "html", null, true);
        echo twig_escape_filter($this->env, sprintf("%05s", $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "nr")), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
<div class=\"widget simpleTabs tabsRight\">
    <div class=\"head\">
        <h5>";
        // line 20
        echo gettext("Invoice");
        echo " #";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
        echo "</h5>
    </div>

    <ul class=\"tabs\">
        <li><a href=\"#tab-info\">Details</a></li>
        <li><a href=\"#tab-manage\">Manage</a></li>
        <li><a href=\"#tab-texts\">Texts</a></li>
        <li><a href=\"#tab-buyer-credentials\">Client credentials</a></li>
        <li><a href=\"#tab-seller-credentials\">Company credentials</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-info\">
            <div class=\"block\">
                <table class=\"tableStatic wide\">
                    <tbody>
                    <tr class=\"noborder\">
                        <td style=\"width: 20%\"><label>";
        // line 38
        echo gettext("ID");
        echo "</label></td>
                        <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td><label>";
        // line 42
        echo gettext("Number");
        echo "</label></td>
                        <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "serie"), "html", null, true);
        echo twig_escape_filter($this->env, sprintf("%05s", $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "nr")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td><label>";
        // line 46
        echo gettext("Currency");
        echo "</label></td>
                        <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td><label>";
        // line 50
        echo gettext("Client");
        echo "</label></td>
                        <td><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client/manage"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "client"), "id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "client"), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "client"), "last_name"), "html", null, true);
        echo "</a></td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 55
        echo gettext("Status");
        echo "</label></td>
                        <td>";
        // line 56
        echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status"));
        echo "</td>
                    </tr>

                    ";
        // line 59
        if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "tax")) {
            // line 60
            echo "                    <tr>
                        <td><label>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "taxname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "taxrate"), "html", null, true);
            echo "%</label></td>
                        <td>";
            // line 62
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "tax"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
            echo "</td>
                    </tr>
                    ";
        }
        // line 65
        echo "                    
                    <tr>
                        <td><label>";
        // line 67
        echo gettext("Total");
        echo "</label></td>
                        <td>";
        // line 68
        echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "total"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
        echo "</td>
                    </tr>
                    
                    <tr>
                        <td><label>";
        // line 72
        echo gettext("Created at");
        echo "</label></td>
                        <td>";
        // line 73
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "created_at")), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 77
        echo gettext("Due at");
        echo "</label></td>
                        <td>";
        // line 78
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "due_at")), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 82
        echo gettext("Paid at");
        echo "</label></td>
                        <td>";
        // line 83
        if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "paid_at")) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "paid_at")), "html", null, true);
        } else {
            echo "-";
        }
        echo "</td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 87
        echo gettext("Reminded at");
        echo "</label></td>
                        <td>";
        // line 88
        if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "reminded_at")) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "reminded_at")), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_timeago_filter($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "reminded_at")), "html", null, true);
            echo " ago) ";
        }
        echo "</td>
                    </tr>
                    
                    ";
        // line 91
        if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "notes")) {
            // line 92
            echo "                    <tr>
                        <td><label>";
            // line 93
            echo gettext("Notes");
            echo "</label></td>
                        <td>";
            // line 94
            echo twig_bbmd_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "notes"));
            echo "</td>
                    </tr>
                    ";
        }
        // line 97
        echo "                    </tbody>
                    
                    <tfoot>
                        <tr>
                            <td colspan=\"2\">
                                <div class=\"aligncenter\">
                                    <a href=\"";
        // line 103
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("invoice"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "hash"), "html", null, true);
        echo "\" title=\"\" class=\"btn55 mr10\" target=\"_blank\"><img src=\"images/icons/middlenav/preview.png\" alt=\"\"><span>View as client</span></a>
                                    <a href=\"admin/invoice/delete?id=";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
        echo "\" data-api-confirm=\"Are you sure?\"  title=\"\" class=\"btn55 mr10 api-link\" data-api-redirect=\"invoice\"><img src=\"images/icons/middlenav/trash.png\" alt=\"\"><span>Delete</span></a>
                                    ";
        // line 105
        if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status") == "unpaid")) {
            // line 106
            echo "                                    <a href=\"admin/invoice/send_reminder?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
            echo "\" title=\"\" class=\"btn55 mr10 api-link\" data-api-msg=\"Payment reminder was sent\"><img src=\"images/icons/middlenav/mail.png\" alt=\"\"><span>Send reminder</span></a>
                                    <a href=\"admin/invoice/mark_as_paid?id=";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
            echo "&execute=1\" title=\"\" class=\"btn55 mr10 api-link\" data-api-reload=\"Invoice marked as paid\"><img src=\"images/icons/middlenav/play2.png\" alt=\"\"><span>Mark as paid</span></a>
                                    ";
        }
        // line 109
        echo "                                    
                                    ";
        // line 110
        if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status") == "paid")) {
            // line 111
            echo "                                    <a href=\"admin/invoice/refund?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
            echo "\" data-api-confirm=\"Are you sure?\"  title=\"\" class=\"btn55 mr10 api-link\" data-api-redirect=\"invoice\"><img src=\"images/icons/middlenav/refresh4.png\" alt=\"\"><span>Refund</span></a>
                                    ";
        }
        // line 113
        echo "                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>

        <div class=\"tab_content nopadding\" id=\"tab-manage\">
            <form action=\"admin/invoice/update\" method=\"post\" class=\"mainForm api-form\" data-api-reload=\"Invoice updated\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 126
        echo gettext("Status");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"status\" value=\"paid\"";
        // line 128
        if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status") == "paid")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Paid</label>
                            <input type=\"radio\" name=\"status\" value=\"unpaid\"";
        // line 129
        if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status") == "unpaid")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>Unpaid</label>
                            <input type=\"radio\" name=\"status\" value=\"refunded\"";
        // line 130
        if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status") == "refunded")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>Refunded</label>
                            <input type=\"radio\" name=\"status\" value=\"canceled\"";
        // line 131
        if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status") == "canceled")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>Canceled</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 137
        echo gettext("Approved");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"approved\" value=\"1\"";
        // line 139
        if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "approved")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Yes</label>
                            <input type=\"radio\" name=\"approved\" value=\"0\"";
        // line 140
        if ((!$this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "approved"))) {
            echo " checked=\"checked\"";
        }
        echo " /><label>No</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 146
        echo gettext("Serie and number");
        echo ":</label>
                        <div class=\"formRight moreFields\">
                            <ul>
                                <li style=\"width: 150px\">
                                    <input type=\"text\" name=\"serie\" value=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "serie"), "html", null, true);
        echo "\"/>
                                </li>
                                <li class=\"sep\">&nbsp;</li>
                                <li style=\"width: 150px\">
                                    <input type=\"text\" name=\"nr\" value=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "nr"), "html", null, true);
        echo "\"/>
                                </li>
                            </ul>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 162
        echo gettext("Tax");
        echo ":</label>
                        <div class=\"formRight moreFields\">
                            <ul>
                                <li style=\"width: 150px\">
                                    <input type=\"text\" name=\"taxname\" value=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "taxname"), "html", null, true);
        echo "\"/>
                                </li>
                                <li class=\"sep\">&nbsp;</li>
                                <li style=\"width: 40px\">
                                    <input type=\"text\" name=\"taxrate\" value=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "taxrate"), "html", null, true);
        echo "\"/>
                                </li>
                                <li class=\"sep\">%</li>
                            </ul>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 178
        echo gettext("Payment method");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 180
        echo $context["mf"]->getselectbox("gateway_id", $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "invoice_gateways", array(0 => array("format" => "pairs")), "method"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "gateway_id"), 0, "Select payment method");
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 186
        echo gettext("Created at");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"created_at\" value=\"";
        // line 188
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "created_at"), "Y-m-d"), "html", null, true);
        echo "\" class=\"datepicker\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 194
        echo gettext("Due at");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"due_at\" value=\"";
        // line 196
        if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "due_at")) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "due_at"), "Y-m-d"), "html", null, true);
        }
        echo "\" class=\"datepicker\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 202
        echo gettext("Paid at");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"paid_at\" value=\"";
        // line 204
        if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "paid_at")) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "paid_at"), "Y-m-d"), "html", null, true);
        }
        echo "\" class=\"datepicker\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 210
        echo gettext("Notes");
        echo ":</label>
                        <div class=\"formRight\">
                            <textarea name=\"notes\" cols=\"5\" rows=\"6\">";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "notes"), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 217
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
        echo "\" />
                </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-texts\">
            <form action=\"admin/invoice/update\" method=\"post\" class=\"mainForm api-form\" data-api-msg=\"Invoice updated\">
                <fieldset>
                    <label class=\"topLabel\">";
        // line 226
        echo gettext("Text before invoice items table");
        echo "</label>
                    <textarea name=\"text_1\"  cols=\"5\" rows=\"6\" class=\"bb-textarea\"/>";
        // line 227
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "text_1"), "html", null, true);
        echo "</textarea>
                </fieldset>
                
                <fieldset>    
                    <label class=\"topLabel\">";
        // line 231
        echo gettext("Text after invoice items table");
        echo "</label>
                    <textarea name=\"text_2\" cols=\"5\" rows=\"6\" class=\"bb-textarea\"/>";
        // line 232
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "text_2"), "html", null, true);
        echo "</textarea>
                    <input type=\"submit\" value=\"";
        // line 233
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
        echo "\" />
                </fieldset>
            </form>

            <div class=\"fix\"></div>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-seller-credentials\">
            ";
        // line 242
        $context["seller"] = $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "seller");
        // line 243
        echo "            <form action=\"admin/invoice/update\" method=\"post\" class=\"mainForm api-form\" data-api-msg=\"Invoice updated\">
                <fieldset>
                    <legend>Company details at the moment of purchase</legend>

                    <div class=\"rowElem noborder\">
                        <label>";
        // line 248
        echo gettext("Company");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"seller_company\" value=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "company"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 256
        echo gettext("Company VAT");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"seller_company_vat\" value=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "company_vat"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 264
        echo gettext("Company Number");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"seller_company_number\" value=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "company_number"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 272
        echo gettext("Address");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"seller_address\" value=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "address"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 280
        echo gettext("Phone");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"seller_phone\" value=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "phone"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 288
        echo gettext("Email");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"seller_email\" value=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "email"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 295
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
        echo "\" />
                </fieldset>
            </form>

            <div class=\"fix\"></div>
        </div>


        <div class=\"tab_content nopadding\" id=\"tab-buyer-credentials\">
            ";
        // line 305
        $context["buyer"] = $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "buyer");
        // line 306
        echo "            <form action=\"admin/invoice/update\" method=\"post\" class=\"mainForm api-form\" data-api-msg=\"Invoice updated\">
                <fieldset>
                    <legend>Client details at the moment of purchase</legend>

                    <div class=\"rowElem noborder\">
                        <label>";
        // line 311
        echo gettext("First name");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_first_name\" value=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "first_name"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 319
        echo gettext("Last name");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_last_name\" value=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "last_name"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 327
        echo gettext("Company");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_company\" value=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "company"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 335
        echo gettext("Company VAT");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_company_vat\" value=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "company_vat"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 343
        echo gettext("Company Number");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_company_number\" value=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "company_number"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 351
        echo gettext("Address");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_address\" value=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "address"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 359
        echo gettext("City");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_city\" value=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "city"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 367
        echo gettext("State");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 370
        echo "                            <input type=\"text\" name=\"buyer_state\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "state"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 376
        echo gettext("Country");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 378
        echo $context["mf"]->getselectbox("buyer_country", $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_countries"), $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "country"), 0, "Select country");
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 384
        echo gettext("Phone");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_phone\" value=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "phone"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 392
        echo gettext("Zip");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_zip\" value=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "zip"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 400
        echo gettext("Email");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_email\" value=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "email"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 407
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
        echo "\" />
                </fieldset>
            </form>

            <div class=\"fix\"></div>
        </div>

    </div>
</div>


<div class=\"widget\">
    <div class=\"head\">
        <h5>";
        // line 421
        echo gettext("Invoice items");
        echo "</h5>
    </div>

";
        // line 424
        if ((!$this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "approved"))) {
            // line 425
            echo "
    <form action=\"admin/invoice/update\" method=\"post\" class=\"mainForm api-form\" data-api-reload=\"1\">
        <fieldset>
        <table class=\"tableStatic wide\">
            <thead>
                <tr>
                    <th>";
            // line 431
            echo gettext("Title");
            echo "</th>
                    <th class=\"currency\">";
            // line 432
            echo gettext("Price");
            echo "</th>
                    <th>";
            // line 433
            echo gettext("Tax");
            echo "</th>
                    <th class=\"actions\">&nbsp;</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 439
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "lines"));
            foreach ($context['_seq'] as $context["i"] => $context["item"]) {
                // line 440
                echo "                <tr>
                    <td style=\"width: 60%;\"><input type=\"text\" name=\"items[";
                // line 441
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
                echo "][title]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
                echo "\" style=\"width:98%\"></td>
                    <td style=\"width: 20%;\"><input type=\"text\" name=\"items[";
                // line 442
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
                echo "][price]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "price"), "html", null, true);
                echo "\" style=\"width:80px\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"), "html", null, true);
                echo "</td>
                    <td style=\"width: 5%;\">
                        <input type=\"checkbox\" name=\"items[";
                // line 444
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
                echo "][taxed]\" value=\"1\" ";
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "taxed")) {
                    echo "checked=\"checked\"";
                }
                echo "/>
                    </td>
                    <td style=\"width: 5%;\">
                        <a class=\"bb-button btn14 api-link\" data-api-confirm=\"Are you sure?\" href=\"admin/invoice/item_delete?id=";
                // line 447
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
                echo "\" data-api-reload=\"1\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 451
            echo "
                <tr>
                    <td style=\"width: 70%;\"><input type=\"text\" name=\"new_item[title]\" value=\"\" style=\"width:98%\" placeholder=\"New line description\"></td>
                    <td style=\"width: 20%;\"><input type=\"text\" name=\"new_item[price]\" value=\"\" style=\"width:80px\" placeholder=\"Price\"> ";
            // line 454
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"), "html", null, true);
            echo "</td>
                    <td><input type=\"checkbox\" name=\"new_item[taxed]\" value=\"1\"/></td>
                    <td>&nbsp;</td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <td colspan=\"4\" class=\"currency\">
                        Subtotal: ";
            // line 463
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "subtotal"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
            echo "
                    </td>
                </tr>
                <tr>
                    <td colspan=\"4\" class=\"currency\">
                        ";
            // line 468
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "taxname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "taxrate"), "html", null, true);
            echo "%: ";
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "tax"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
            echo "
                    </td>
                </tr>
                <tr>
                    <td colspan=\"4\" class=\"currency\">
                        Total: ";
            // line 473
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "total"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
            echo "
                    </td>
                </tr>
                <tr>
                    <td colspan=\"4\">
                        ";
            // line 478
            if ((!$this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "approved"))) {
                // line 479
                echo "                        <a href=\"admin/invoice/approve?id=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
                echo "\"  title=\"\" class=\"btnIconLeft mr10 api-link\" data-api-reload=\"";
                echo twig_escape_filter($this->env, twig_bb_admin_link_filter("invoices"), "html", null, true);
                echo "\"><img src=\"images/icons/dark/check.png\" alt=\"\" class=\"icon\"><span>Approve</span></a>
                        ";
            }
            // line 481
            echo "                        <input type=\"submit\" value=\"";
            echo gettext("Update");
            echo "\" class=\"greyishBtn submitForm\" style=\"width:100px\"/>
                    </td>
                </tr>
            </tfoot>
        </table>
        </fieldset>

        <input type=\"hidden\" name=\"id\" value=\"";
            // line 488
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
            echo "\" />
    </form>

";
        } else {
            // line 492
            echo "    <table class=\"tableStatic wide\">
        <thead>
            <tr>
                <th  style=\"width: 11%;\" colspan=\"2\"></th>
                <th style=\"width: 70%;\">";
            // line 496
            echo gettext("Title");
            echo "</th>
                <th style=\"width: 7%;\">";
            // line 497
            echo gettext("Tax");
            echo "</th>
                <th class=\"currency\" style=\"width: 15%;\">";
            // line 498
            echo gettext("Total");
            echo "</th>
            </tr>
        </thead>

        <tbody>
            ";
            // line 503
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "lines"));
            foreach ($context['_seq'] as $context["i"] => $context["item"]) {
                // line 504
                echo "
            <tr>
                <td>";
                // line 506
                echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : null) + 1), "html", null, true);
                echo ".</td>
                <td>
                    <div class=\"bull task ";
                // line 508
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "status"), "html", null, true);
                echo "\" title=\"Task status: ";
                echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "status"));
                echo "\"></div>
                    <div class=\"bull charge ";
                // line 509
                echo (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "charged")) ? ("yes") : ("no"));
                echo "\" title=\"";
                echo (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "charged")) ? ("Charged from client balance") : ("Not charged from client balance"));
                echo "\"></div>
                </td>
                <td>
                ";
                // line 512
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "order_id")) {
                    // line 513
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, twig_bb_admin_link_filter("order/manage"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "order_id"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
                    echo " ";
                    if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "quantity") > 1)) {
                        echo " x ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "quantity"), "html", null, true);
                        echo " ";
                    }
                    echo "</a>
                ";
                } else {
                    // line 515
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
                    echo " ";
                    if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "quantity") > 1)) {
                        echo " x ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "quantity"), "html", null, true);
                        echo " ";
                    }
                    // line 516
                    echo "                ";
                }
                // line 517
                echo "                </td>
                <td>";
                // line 518
                echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "tax"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
                echo "</td>
                <td class=\"currency\">";
                // line 519
                echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "total"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
                echo "</td>
            </tr>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 523
            echo "        </tbody>
        
        <tfoot>
            <tr>
                <td colspan=\"5\" class=\"currency\">
                    Subtotal: ";
            // line 528
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "subtotal"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
            echo "
                </td>
            </tr>
            <tr>
                <td colspan=\"5\" class=\"currency\">
                    ";
            // line 533
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "taxname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "taxrate"), "html", null, true);
            echo "%: ";
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "tax"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
            echo "
                </td>
            </tr>
            <tr>
                <td colspan=\"5\" class=\"currency\">
                    Total: ";
            // line 538
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "total"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
            echo "
                </td>
            </tr>
        </tfoot>
    </table>
";
        }
        // line 544
        echo "
</div>

";
        // line 547
        $context["transactions"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_transaction_get_list", array(0 => array("invoice_id" => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "per_page" => 100)), "method"), "list");
        // line 548
        echo "
";
        // line 549
        if ((twig_length_filter($this->env, (isset($context["transactions"]) ? $context["transactions"] : null)) > 0)) {
            // line 550
            echo "
<div class=\"widget\">
    <div class=\"head\">
        <h5>";
            // line 553
            echo gettext("Transactions");
            echo "</h5>
    </div>
    <table class=\"tableStatic wide\">
        <thead>
            <tr>
                <th>";
            // line 558
            echo gettext("ID");
            echo "</th>
                <th>";
            // line 559
            echo gettext("Type");
            echo "</th>
                <th>";
            // line 560
            echo gettext("Gateway");
            echo "</th>
                <th>";
            // line 561
            echo gettext("Amount");
            echo "</th>
                <th>";
            // line 562
            echo gettext("Status");
            echo "</th>
                 <th>";
            // line 563
            echo gettext("Date");
            echo "</th>
                <th>&nbsp;</th>
            </tr>
        </thead>

        <tbody>
            ";
            // line 569
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["transactions"]) ? $context["transactions"] : null));
            foreach ($context['_seq'] as $context["i"] => $context["tx"]) {
                // line 570
                echo "            <tr>
                <td>";
                // line 571
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "txn_id"), "html", null, true);
                echo "</td>
                <td>";
                // line 572
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "type"), "html", null, true);
                echo "</td>
                <td>";
                // line 573
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "gateway"), "html", null, true);
                echo "</td>
                <td>";
                // line 574
                echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "amount"), $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "currency"));
                echo "</td>
                <td>";
                // line 575
                echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "status"));
                echo "</td>
                <td>";
                // line 576
                echo twig_escape_filter($this->env, twig_bb_datetime($this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "created_at")), "html", null, true);
                echo "</td>
                <td style=\"width: 5%\">
                    <a class=\"bb-button btn14\" href=\"";
                // line 578
                echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/invoice/transaction"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "id"), "html", null, true);
                echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['tx'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 582
            echo "        </tbody>
    </table>
</div>

";
        }
        // line 587
        echo "
";
    }

    // line 590
    public function block_sidebar2($context, array $blocks = array())
    {
        // line 591
        echo "
<div class=\"widget\">
    <div class=\"head\">
        <h2 class=\"dark-icon i-services\">";
        // line 594
        echo gettext("Actions");
        echo "</h2>
    </div>
    <div class=\"block\">
        <button class=\"bb-button\" type=\"button\" onclick=\"window.print()\"><span class=\"dark-icon i-print\"></span> ";
        // line 597
        echo gettext("Print");
        echo "</button>
        ";
        // line 598
        if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status") == "unpaid")) {
            // line 599
            echo "        <a class=\"bb-button api-link\" href=\"client/invoice/delete?hash=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "hash"), "html", null, true);
            echo "\"  data-api-confirm=\"Are you sure?\" data-api-redirect=\"";
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("invoice"), "html", null, true);
            echo "\"><span class=\"dark-icon i-bin\"></span> ";
            echo gettext("Delete");
            echo "</a>
        ";
        }
        // line 601
        echo "    </div>
</div>


";
    }

    // line 607
    public function block_head($context, array $blocks = array())
    {
        echo $context["mf"]->getbb_editor(".bb-textarea");
    }

    // line 608
    public function block_js($context, array $blocks = array())
    {
        // line 610
        echo "<script type=\"text/javascript\">
\$(function() {
    \$('input[name=gateway]:first').attr('checked', true);
    \$('#pay-now-button').click(function(){
        var link = \$('input[name=gateway]:checked').val();
        bb.redirect(link);
        return false;
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_invoice_invoice.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1282 => 610,  1279 => 608,  1273 => 607,  1265 => 601,  1255 => 599,  1253 => 598,  1249 => 597,  1243 => 594,  1238 => 591,  1235 => 590,  1230 => 587,  1223 => 582,  1211 => 578,  1206 => 576,  1202 => 575,  1198 => 574,  1194 => 573,  1190 => 572,  1186 => 571,  1183 => 570,  1179 => 569,  1170 => 563,  1166 => 562,  1162 => 561,  1158 => 560,  1154 => 559,  1150 => 558,  1142 => 553,  1137 => 550,  1135 => 549,  1132 => 548,  1130 => 547,  1125 => 544,  1116 => 538,  1104 => 533,  1096 => 528,  1089 => 523,  1079 => 519,  1075 => 518,  1072 => 517,  1069 => 516,  1060 => 515,  1044 => 513,  1042 => 512,  1034 => 509,  1028 => 508,  1023 => 506,  1019 => 504,  1015 => 503,  1007 => 498,  1003 => 497,  999 => 496,  993 => 492,  986 => 488,  975 => 481,  967 => 479,  965 => 478,  957 => 473,  945 => 468,  937 => 463,  925 => 454,  920 => 451,  910 => 447,  900 => 444,  891 => 442,  885 => 441,  882 => 440,  878 => 439,  869 => 433,  865 => 432,  861 => 431,  853 => 425,  851 => 424,  845 => 421,  829 => 408,  825 => 407,  817 => 402,  812 => 400,  803 => 394,  798 => 392,  789 => 386,  784 => 384,  775 => 378,  770 => 376,  760 => 370,  755 => 367,  746 => 361,  741 => 359,  732 => 353,  727 => 351,  718 => 345,  713 => 343,  704 => 337,  699 => 335,  690 => 329,  685 => 327,  676 => 321,  671 => 319,  662 => 313,  657 => 311,  650 => 306,  648 => 305,  636 => 296,  632 => 295,  624 => 290,  619 => 288,  610 => 282,  605 => 280,  596 => 274,  591 => 272,  582 => 266,  577 => 264,  568 => 258,  563 => 256,  554 => 250,  549 => 248,  542 => 243,  540 => 242,  529 => 234,  525 => 233,  521 => 232,  517 => 231,  510 => 227,  506 => 226,  495 => 218,  491 => 217,  483 => 212,  478 => 210,  467 => 204,  462 => 202,  451 => 196,  446 => 194,  437 => 188,  432 => 186,  423 => 180,  418 => 178,  407 => 170,  400 => 166,  393 => 162,  382 => 154,  375 => 150,  368 => 146,  357 => 140,  351 => 139,  346 => 137,  335 => 131,  329 => 130,  323 => 129,  317 => 128,  312 => 126,  297 => 113,  291 => 111,  289 => 110,  286 => 109,  281 => 107,  276 => 106,  274 => 105,  270 => 104,  264 => 103,  256 => 97,  250 => 94,  246 => 93,  243 => 92,  241 => 91,  230 => 88,  226 => 87,  215 => 83,  211 => 82,  204 => 78,  200 => 77,  193 => 73,  189 => 72,  182 => 68,  178 => 67,  174 => 65,  168 => 62,  162 => 61,  159 => 60,  157 => 59,  151 => 56,  147 => 55,  134 => 51,  130 => 50,  124 => 47,  120 => 46,  113 => 43,  109 => 42,  103 => 39,  99 => 38,  76 => 20,  71 => 17,  68 => 16,  60 => 11,  54 => 10,  48 => 9,  45 => 8,  42 => 7,  33 => 3,  28 => 4,  26 => 2,);
    }
}
