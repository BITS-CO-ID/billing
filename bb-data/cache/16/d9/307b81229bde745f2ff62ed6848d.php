<?php

/* mod_client_manage.phtml */
class __TwigTemplate_16d9307b81229bde745f2ff62ed6848d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_default.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_default.phtml";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["active_menu"] = "client";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "last_name"), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client"), "html", null, true);
        echo "\">";
        echo gettext("Clients");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "last_name"), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-info\">";
        // line 18
        echo gettext("Profile");
        echo "</a></li>
        <li><a href=\"#tab-profile\">";
        // line 19
        echo gettext("Edit");
        echo "</a></li>
        <li><a href=\"#tab-orders\">";
        // line 20
        echo gettext("Orders");
        echo "</a></li>
        <li><a href=\"#tab-invoice\">";
        // line 21
        echo gettext("Invoices");
        echo "</a></li>
        <li><a href=\"#tab-support\">";
        // line 22
        echo gettext("Tickets");
        echo "</a></li>
        <li><a href=\"#tab-balance\">";
        // line 23
        echo gettext("Payments");
        echo "</a></li>
        <li><a href=\"#tab-history\">";
        // line 24
        echo gettext("Logins");
        echo "</a></li>
        <li><a href=\"#tab-emails\">";
        // line 25
        echo gettext("Emails");
        echo "</a></li>
        <li><a href=\"#tab-transactions\">";
        // line 26
        echo gettext("Transactions");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-info\">

            <div style=\"position: relative;\">
            <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "email")), "html", null, true);
        echo "?size=100\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "last_name"), "html", null, true);
        echo "\" style=\"right: 0; margin: 15px 15px 0 15px; position: absolute; border: 2px solid white; box-shadow: 0px 0px 10px 0px;\"/>
            </div>
            
            <table class=\"tableStatic wide\">
                <tbody>
                    <tr class=\"noborder\">
                        <td style=\"width: 15%\">ID:</td>
                        <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>
                        <td>Name:</td>
                        <td><strong class=\"red\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "last_name"), "html", null, true);
        echo "</strong></td>
                    </tr>

                    <tr>
                        <td>Company:</td>
                        <td><strong class=\"green\">";
        // line 51
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "company", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "company"), "-")) : ("-")), "html", null, true);
        echo "</strong></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "email"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Status:</td>
                        <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "status_name", array(0 => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "status")), "method"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Group:</td>
                        <td>";
        // line 63
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "group", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "group"), "-")) : ("-")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Currency:</td>
                        <td>";
        // line 67
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "currency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "currency"), "-")) : ("-")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>IP:</td>
                        <td>";
        // line 71
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "ip", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "ip"), "-")) : ("-")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_ipcountryname_filter($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "ip")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>API Key:</td>
                        <td>";
        // line 75
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "api_token", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "api_token"), "-")) : ("-")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td>
                            <span class=\"flag flag-";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "country"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_countries"), $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "country"), array(), "array"), "html", null, true);
        echo "\"></span>
                            ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_countries"), $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "country"), array(), "array"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "state"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "address_1"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "address_2"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "city"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "postcode"), "html", null, true);
        echo "
                        </td>
                    </tr>
                    <tr>
                        <td>Registered at:</td>
                        <td>";
        // line 86
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "created_at"), "M d, Y"), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"2\">
                            <a href=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client/login"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
        echo "\" class=\"btnIconLeft mr10 mt5\" target=\"_blank\"><img src=\"images/icons/dark/adminUser.png\" alt=\"\" class=\"icon\"><span>Login to client area</span></a>
                            <a href=\"admin/client/delete?id=";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
        echo "\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"client\" class=\"btnIconLeft mr10 mt5 api-link\" ><img src=\"images/icons/dark/trash.png\" alt=\"\" class=\"icon\"><span>Delete</span></a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-profile\">

            <div class=\"help\">
                <h3>";
        // line 103
        echo gettext("Client profile details");
        echo "</h3>
            </div>

            <form method=\"post\" action=\"admin/client/update\" class=\"mainForm api-form save\" data-api-msg=\"";
        // line 106
        echo gettext("Client Profile updated");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 109
        echo gettext("Status");
        echo ":</label>
                        <div class=\"formRight noborder\">
                            <input type=\"radio\" name=\"status\" value=\"active\"";
        // line 111
        if (($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "status") == "active")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Active");
        echo "</label>
                            <input type=\"radio\" name=\"status\" value=\"suspended\"";
        // line 112
        if (($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "status") == "suspended")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("Suspended");
        echo "</label>
                            <input type=\"radio\" name=\"status\" value=\"canceled\"";
        // line 113
        if (($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "status") == "canceled")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("Canceled");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 118
        echo gettext("Type");
        echo ":</label>
                        <div class=\"formRight noborder\">
                            <input type=\"radio\" name=\"type\" value=\"individual\"";
        // line 120
        if (($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "type") == "individual")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Individual");
        echo "</label>
                            <input type=\"radio\" name=\"type\" value=\"company\"";
        // line 121
        if (($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "type") == "company")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("Company");
        echo "</label>
                            <input type=\"radio\" name=\"type\" value=\"\"";
        // line 122
        if ((!$this->getAttribute((isset($context["client"]) ? $context["client"] : null), "type"))) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("Other/Unknown");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 127
        echo gettext("Group");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "group_id", 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "client_group_get_pairs"), 2 => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "group_id"), 3 => 0, 4 => "Select group"), "method"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 134
        echo gettext("Email");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"email\" value=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "email"), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 141
        echo gettext("Name");
        echo ":</label>
                        <div class=\"formRight moreFields\">
                            <ul>
                                <li style=\"width: 250px\"><input type=\"text\" name=\"first_name\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "first_name"), "html", null, true);
        echo "\" required=\"required\"/></li>
                                <li class=\"sep\"></li>
                                <li style=\"width: 245px\"><input type=\"text\" name=\"last_name\" value=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "last_name"), "html", null, true);
        echo "\" /></li>
                            </ul>
                        </div> 
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\" id=\"company-details\">
                        <label>";
        // line 152
        echo gettext("Company details");
        echo ":</label>
                        <div class=\"formRight moreFields\">
                            <ul>
                                <li style=\"width: 170px\"><input type=\"text\" name=\"company\" value=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "company"), "html", null, true);
        echo "\" title=\"Company name\" placeholder=\"Company name\"/></li>
                                <li class=\"sep\"></li>
                                <li style=\"width: 150px\"><input type=\"text\" name=\"company_vat\" value=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "company_vat"), "html", null, true);
        echo "\" title=\"Company VAT number\" placeholder=\"Company VAT number\"/></li>
                                <li class=\"sep\"></li>
                                <li style=\"width: 150px\"><input type=\"text\" name=\"company_number\" value=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "company_number"), "html", null, true);
        echo "\"  title=\"Company number\" placeholder=\"Company number\"/></li>
                                <li class=\"sep\"></li>
                            </ul>
                        </div> 
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"submit\" value=\"";
        // line 165
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
                
                <fieldset>
                    <legend>";
        // line 169
        echo gettext("Address and contact details");
        echo "</legend>
                    <div class=\"rowElem\">
                        <label>";
        // line 171
        echo gettext("Address Line 1");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"address_1\" value=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "address_1"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 178
        echo gettext("Address Line 2");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"address_2\" value=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "address_2"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 186
        echo gettext("Country");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 188
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "country", 1 => $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_countries"), 2 => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "country"), 3 => 0, 4 => "Select country"), "method"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 193
        echo gettext("State");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 196
        echo "                            <input type=\"text\" name=\"state\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "state"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 201
        echo gettext("City");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"city\" value=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "city"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 208
        echo gettext("Postcode");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"postcode\" value=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "postcode"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 215
        echo gettext("Phone");
        echo ":</label>
                        <div class=\"formRight moreFields\">
                            <ul>
                                <li><input type=\"text\" name=\"phone_cc\" value=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "phone_cc"), "html", null, true);
        echo "\" /></li>
                                <li class=\"sep\"></li>
                                <li style=\"width: 200px;\"><input type=\"text\" name=\"phone\" value=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "phone"), "html", null, true);
        echo "\" /></li>
                            </ul>  
                        </div> 
                        <div class=\"fix\"></div>   
                    </div>
                    <input type=\"submit\" value=\"";
        // line 225
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
                
                <fieldset>
                    <legend>";
        // line 229
        echo gettext("Additional settings");
        echo "</legend>
                    <div class=\"rowElem\">
                        <label>";
        // line 231
        echo gettext("Alternative ID");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"aid\" value=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "aid"), "html", null, true);
        echo "\" placeholder=\"";
        echo gettext("Used to identify client on foreign system. Usually used by importers");
        echo "\"/>
                        </div> 
                        <div class=\"fix\"></div>   
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 239
        echo gettext("Currency");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 241
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "currency", 1 => $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "currency_get_pairs"), 2 => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "currency"), 3 => 0, 4 => "Select currency"), "method"), "html", null, true);
        echo "
                        </div> 
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 247
        echo gettext("Exempt from tax");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"tax_exempt\" value=\"1\"";
        // line 249
        if ($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "tax_exempt")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Yes</label>
                            <input type=\"radio\" name=\"tax_exempt\" value=\"0\"";
        // line 250
        if ((!$this->getAttribute((isset($context["client"]) ? $context["client"] : null), "tax_exempt"))) {
            echo " checked=\"checked\"";
        }
        echo " /><label>No</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 255
        echo gettext("Signed up time");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"created_at\" value=\"";
        // line 257
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "created_at"), "Y-m-d"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 262
        echo gettext("Notes");
        echo ":</label>
                        <div class=\"formRight\">
                            <textarea name=\"notes\" cols=\"5\" rows=\"5\">";
        // line 264
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "notes"), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"submit\" value=\"";
        // line 268
        echo gettext("Update profile");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
        echo "\"/>
                </fieldset>
            </form>
            
            <div class=\"help\">
                <h3>";
        // line 274
        echo gettext("Change password");
        echo "</h3>
            </div>
            <form method=\"post\" action=\"admin/client/change_password\" class=\"mainForm api-form\" data-api-msg=\"";
        // line 276
        echo gettext("Password changed");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 279
        echo gettext("Password");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"password\" name=\"password\" value=\"\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 287
        echo gettext("Password confirm");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"password\" name=\"password_confirm\" value=\"\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 294
        echo gettext("Change password");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
        echo "\"/>
                </fieldset>
            </form>

            <div class=\"help\">
                <h3>";
        // line 300
        echo gettext("Custom fields");
        echo "</h3>
                <p>";
        // line 301
        echo gettext("Use these fields to define custom client details");
        echo "</p>
            </div>
            
            <form method=\"post\" action=\"admin/client/update\" class=\"mainForm api-form save\" data-api-msg=\"";
        // line 304
        echo gettext("Client Profile custom fields updated");
        echo "\">
                <fieldset>
                    ";
        // line 306
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 307
            echo "                    ";
            $context["fn"] = ("custom_" . (isset($context["i"]) ? $context["i"] : null));
            // line 308
            echo "                    <div class=\"rowElem";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                echo " noborder";
            }
            echo "\">
                        <label>";
            // line 309
            echo gettext("Custom field");
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "</label>
                        <div class=\"formRight\">
                            <textarea name=\"custom_";
            // line 311
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" cols=\"5\" rows=\"5\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), (isset($context["fn"]) ? $context["fn"] : null), array(), "array"), "html", null, true);
            echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 316
        echo "
                    <input type=\"submit\" value=\"";
        // line 317
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
        echo "\"/>
                </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-balance\">
            <div class=\"help\">
                <h3>";
        // line 325
        echo gettext("Client payments history");
        echo "</h3>
            </div>

            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <th style=\"width: 15%\">";
        // line 331
        echo gettext("Amount");
        echo "</th>
                        <th>";
        // line 332
        echo gettext("Description");
        echo "</th>
                        <th style=\"width: 20%\">";
        // line 333
        echo gettext("Date");
        echo "</th>
                        <th style=\"width: 5%\">&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 339
        $context["transactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "client_balance_get_list", array(0 => array("per_page" => 20, "client_id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"))), "method");
        // line 340
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["transactions"]) ? $context["transactions"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["tx"]) {
            // line 341
            echo "                    <tr>
                        <td>";
            // line 342
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "amount"), 1 => $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "currency")), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 343
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "description"), "html", null, true);
            echo "</td>
                        <td>";
            // line 344
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "created_at"), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" href=\"admin/client/balance_delete?id=";
            // line 346
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 350
            echo "                    <tr>
                        <td colspan=\"4\">";
            // line 351
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['tx'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 354
        echo "                </tbody>

                <tfoot>
                    <tr>
                        <th class=\"currency\" colspan=\"4\">";
        // line 358
        echo gettext("Balance");
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "balance"), 1 => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "currency")), "method"), "html", null, true);
        echo "</th>
                    </tr>
                </tfoot>
            </table>
            
            <div class=\"help\">
                <h3>";
        // line 364
        echo gettext("Add funds for client");
        echo "</h3>
            </div>

            <form method=\"post\" action=\"admin/client/balance_add_funds\" class=\"mainForm api-form save\" data-api-msg=\"";
        // line 367
        echo gettext("Funds added");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 370
        echo gettext("Amount");
        echo ":</label>
                        <div class=\"formRight noborder\">
                            <input type=\"text\" name=\"amount\" value=\"\" style=\"width: 100px;\" required=\"required\"/> ";
        // line 372
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "currency"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 378
        echo gettext("Description");
        echo ":</label>
                        <div class=\"formRight noborder\">
                            <input type=\"text\" name=\"description\" value=\"\"  required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 385
        echo gettext("Add funds");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
        echo "\"/>
                </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-orders\">
            <div class=\"help\">
                <h3>";
        // line 393
        echo gettext("Client orders");
        echo "</h3>
            </div>

            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td width=\"40%\">Title</td>
                        <td width=\"20%\">Amount</td>
                        <td width=\"20%\">Period</td>
                        <td width=\"20%\">Status</td>
                        <td>&nbsp;</td>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 408
        $context["orders"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "order_get_list", array(0 => array("per_page" => "20", "hide_addons" => 1, "client_id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"))), "method");
        // line 409
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["orders"]) ? $context["orders"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 410
            echo "                    <tr>
                        <td>";
            // line 411
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "</td>
                        <td>";
            // line 412
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), 30), "html", null, true);
            echo "</td>
                        <td>";
            // line 413
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "total"), 1 => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "currency")), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 414
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "period_name", array(0 => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "period")), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 415
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "status_name", array(0 => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status")), "method"), "html", null, true);
            echo "</td>
                        <td class=\"actions\"><a class=\"bb-button btn14\" href=\"";
            // line 416
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/order/manage"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a></td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 419
            echo "                    <tr>
                        <td colspan=\"6\">";
            // line 420
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 423
        echo "                </tbody>
                
                <tfoot>
                    <tr>
                        <td colspan=\"6\">
                            <a href=\"";
        // line 428
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("order"), "html", null, true);
        echo "?client_id=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
        echo "#tab-new\" class=\"btnIconLeft mr10 mt5\"><img src=\"images/icons/dark/money.png\" alt=\"\" class=\"icon\"><span>New order</span></a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-invoice\">
            <div class=\"help\">
                <h3>";
        // line 437
        echo gettext("Client invoices");
        echo "</h3>
            </div>

            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>#</td>
                        <td width=\"15%\">Amount</td>
                        <td width=\"30%\">Issued at</td>
                        <td width=\"30%\">Paid at</td>
                        <td width=\"15%\">Status</td>
                        <td>&nbsp;</td>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 452
        $context["invoices"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_get_list", array(0 => array("per_page" => "20", "client_id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"))), "method");
        // line 453
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["invoices"]) ? $context["invoices"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 454
            echo "                    <tr>
                        <td>";
            // line 455
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "serie_nr"), "html", null, true);
            echo "</td>
                        <td>";
            // line 456
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "total"), 1 => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency")), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 457
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "created_at"), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>";
            // line 458
            if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "paid_at")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "paid_at"), "Y-m-d"), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
                        <td>";
            // line 459
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "status_name", array(0 => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status")), "method"), "html", null, true);
            echo "</td>
                        <td class=\"actions\"><a class=\"bb-button btn14\" href=\"";
            // line 460
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/invoice/manage"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a></td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 463
            echo "                    <tr>
                        <td colspan=\"6\">";
            // line 464
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 467
        echo "                </tbody>
                
                <tfoot>
                    <tr>
                        <td colspan=\"6\">
                            <a href=\"admin/invoice/prepare?client_id=";
        // line 472
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
        echo "\" class=\"btnIconLeft mr10 mt5 api-link\" data-api-jsonp=\"onAfterInvoicePrepared\" ><img src=\"images/icons/dark/money.png\" alt=\"\" class=\"icon\"><span>New invoice</span></a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-support\">
            <div class=\"help\">
                <h3>";
        // line 481
        echo gettext("Client support tickets");
        echo "</h3>
            </div>
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td width=\"60%\">Subject</td>
                        <td width=\"15%\">Help desk</td>
                        <td width=\"15%\">Status</td>
                        <td>&nbsp;</td>
                    </tr>
                </thead>
                
                <tbody>
                    ";
        // line 495
        $context["tickets"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_ticket_get_list", array(0 => array("per_page" => "20", "client_id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"))), "method");
        // line 496
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 497
            echo "                    <tr>
                        <td>";
            // line 498
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "</td>
                        <td>";
            // line 499
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), 30), "html", null, true);
            echo "</td>
                        <td>";
            // line 500
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "helpdesk"), "name"), "html", null, true);
            echo "</td>
                        <td>";
            // line 501
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "status_name", array(0 => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status")), "method"), "html", null, true);
            echo "</td>
                        <td class=\"actions\"><a class=\"bb-button btn14\" href=\"";
            // line 502
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/support/ticket"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a></td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 505
            echo "                    <tr>
                        <td colspan=\"5\">";
            // line 506
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 509
        echo "                </tbody>
                
                <tfoot>
                    <tr>
                        <td colspan=\"5\">
                            <a href=\"";
        // line 514
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("support"), "html", null, true);
        echo "?client_id=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
        echo "#tab-new\" class=\"btnIconLeft mr10 mt5\" ><img src=\"images/icons/dark/help.png\" alt=\"\" class=\"icon\"><span>New support ticket</span></a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
        
        <div class=\"tab_content nopadding\" id=\"tab-history\">
            <div class=\"help\">
                <h3>";
        // line 523
        echo gettext("Logins history");
        echo "</h3>
            </div>
            
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <th>";
        // line 529
        echo gettext("IP");
        echo "</th>
                        <th>";
        // line 530
        echo gettext("Country");
        echo "</th>
                        <th>";
        // line 531
        echo gettext("Date");
        echo "</th>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 536
        $context["logins"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "client_login_history_get_list", array(0 => array("per_page" => 10, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page"), "client_id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"))), "method");
        // line 537
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["logins"]) ? $context["logins"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["login"]) {
            // line 538
            echo "                    <tr>
                        <td>";
            // line 539
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["login"]) ? $context["login"] : null), "ip"), "html", null, true);
            echo "</td>
                        <td>";
            // line 540
            echo twig_escape_filter($this->env, twig_ipcountryname_filter($this->getAttribute((isset($context["login"]) ? $context["login"] : null), "ip")), "html", null, true);
            echo "</td>
                        <td>";
            // line 541
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["login"]) ? $context["login"] : null), "created_at"), "l, d F Y"), "html", null, true);
            echo "</td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 544
            echo "                    <tr>
                        <td colspan=\"3\">";
            // line 545
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['login'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 548
        echo "                </tbody>
            </table>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-emails\">
            <div class=\"help\">
                <h3>";
        // line 554
        echo gettext("Emails sent to client");
        echo "</h3>
            </div>

            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <th>";
        // line 560
        echo gettext("Email subject");
        echo "</th>
                        <th>";
        // line 561
        echo gettext("To");
        echo "</th>
                        <th>";
        // line 562
        echo gettext("Date sent");
        echo "</th>
                        <th style=\"width: 5%\">&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 568
        $context["emails"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "email_email_get_list", array(0 => array("per_page" => "20", "client_id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"))), "method");
        // line 569
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["emails"]) ? $context["emails"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["email"]) {
            // line 570
            echo "                    <tr>
                        <td>";
            // line 571
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "subject"), "html", null, true);
            echo "</td>
                        <td>";
            // line 572
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "recipients"), "html", null, true);
            echo "</td>
                        <td>";
            // line 573
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "created_at"), "l, d F Y"), "html", null, true);
            echo "</td>
                        <td class=\"actions\"><a class=\"bb-button btn14\" href=\"";
            // line 574
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("email"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a></td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 577
            echo "                    <tr>
                        <td colspan=\"4\">";
            // line 578
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['email'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 581
        echo "                </tbody>
            </table>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-transactions\">
            <div class=\"help\">
                <h3>";
        // line 587
        echo gettext("Transactions received");
        echo "</h3>
            </div>

            ";
        // line 590
        $context["transactions"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_transaction_get_list", array(0 => array("client_id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "per_page" => 100)), "method"), "list");
        // line 591
        echo "            <table class=\"tableStatic wide\">
                <thead>
                <tr>
                    <th>";
        // line 594
        echo gettext("ID");
        echo "</th>
                    <th>";
        // line 595
        echo gettext("Type");
        echo "</th>
                    <th>";
        // line 596
        echo gettext("Gateway");
        echo "</th>
                    <th>";
        // line 597
        echo gettext("Amount");
        echo "</th>
                    <th>";
        // line 598
        echo gettext("Status");
        echo "</th>
                    <th>";
        // line 599
        echo gettext("Date");
        echo "</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>

                <tbody>
                ";
        // line 605
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["transactions"]) ? $context["transactions"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["tx"]) {
            // line 606
            echo "                    <tr>
                        <td>";
            // line 607
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "txn_id"), "html", null, true);
            echo "</td>
                        <td>";
            // line 608
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "type"), "html", null, true);
            echo "</td>
                        <td>";
            // line 609
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "gateway"), "html", null, true);
            echo "</td>
                        <td>";
            // line 610
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "amount"), 1 => $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "currency")), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 611
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "status_name", array(0 => $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "status")), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 612
            echo twig_escape_filter($this->env, twig_bb_datetime($this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "created_at")), "html", null, true);
            echo "</td>
                        <td style=\"width: 5%\">
                            <a class=\"bb-button btn14\" href=\"";
            // line 614
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/invoice/transaction"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 618
            echo "                    <tr>
                        <td colspan=\"7\">";
            // line 619
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['tx'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 622
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>


";
        // line 706
        echo "
";
    }

    // line 710
    public function block_js($context, array $blocks = array())
    {
        // line 711
        echo "<script type=\"text/javascript\">
\$(function() {

});

function onAfterInvoicePrepared(id) {
    bb.redirect(\"invoice/manage/\"+id);
}
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_client_manage.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1422 => 711,  1419 => 710,  1414 => 706,  1405 => 622,  1396 => 619,  1393 => 618,  1382 => 614,  1377 => 612,  1373 => 611,  1369 => 610,  1365 => 609,  1361 => 608,  1357 => 607,  1354 => 606,  1349 => 605,  1340 => 599,  1336 => 598,  1332 => 597,  1328 => 596,  1324 => 595,  1320 => 594,  1315 => 591,  1313 => 590,  1307 => 587,  1299 => 581,  1290 => 578,  1287 => 577,  1277 => 574,  1273 => 573,  1269 => 572,  1265 => 571,  1262 => 570,  1256 => 569,  1254 => 568,  1245 => 562,  1241 => 561,  1237 => 560,  1228 => 554,  1220 => 548,  1211 => 545,  1208 => 544,  1200 => 541,  1196 => 540,  1192 => 539,  1189 => 538,  1183 => 537,  1181 => 536,  1173 => 531,  1169 => 530,  1165 => 529,  1156 => 523,  1142 => 514,  1135 => 509,  1126 => 506,  1123 => 505,  1113 => 502,  1109 => 501,  1105 => 500,  1101 => 499,  1097 => 498,  1094 => 497,  1088 => 496,  1086 => 495,  1069 => 481,  1057 => 472,  1050 => 467,  1041 => 464,  1038 => 463,  1028 => 460,  1024 => 459,  1016 => 458,  1012 => 457,  1008 => 456,  1004 => 455,  1001 => 454,  995 => 453,  993 => 452,  975 => 437,  961 => 428,  954 => 423,  945 => 420,  942 => 419,  932 => 416,  928 => 415,  924 => 414,  920 => 413,  916 => 412,  912 => 411,  909 => 410,  903 => 409,  901 => 408,  883 => 393,  873 => 386,  869 => 385,  859 => 378,  850 => 372,  845 => 370,  839 => 367,  833 => 364,  822 => 358,  816 => 354,  807 => 351,  804 => 350,  795 => 346,  790 => 344,  786 => 343,  782 => 342,  779 => 341,  773 => 340,  771 => 339,  762 => 333,  758 => 332,  754 => 331,  745 => 325,  735 => 318,  731 => 317,  728 => 316,  707 => 311,  700 => 309,  693 => 308,  690 => 307,  673 => 306,  668 => 304,  662 => 301,  658 => 300,  650 => 295,  646 => 294,  636 => 287,  625 => 279,  619 => 276,  614 => 274,  606 => 269,  602 => 268,  595 => 264,  590 => 262,  582 => 257,  577 => 255,  567 => 250,  561 => 249,  556 => 247,  547 => 241,  542 => 239,  531 => 233,  526 => 231,  521 => 229,  514 => 225,  506 => 220,  501 => 218,  495 => 215,  487 => 210,  482 => 208,  474 => 203,  469 => 201,  460 => 196,  455 => 193,  447 => 188,  442 => 186,  433 => 180,  428 => 178,  420 => 173,  415 => 171,  410 => 169,  403 => 165,  394 => 159,  389 => 157,  384 => 155,  378 => 152,  369 => 146,  364 => 144,  358 => 141,  350 => 136,  345 => 134,  337 => 129,  332 => 127,  320 => 122,  312 => 121,  304 => 120,  299 => 118,  287 => 113,  279 => 112,  271 => 111,  266 => 109,  260 => 106,  254 => 103,  241 => 93,  235 => 92,  226 => 86,  208 => 81,  202 => 80,  194 => 75,  185 => 71,  178 => 67,  171 => 63,  164 => 59,  157 => 55,  150 => 51,  140 => 46,  132 => 41,  118 => 34,  107 => 26,  103 => 25,  99 => 24,  95 => 23,  91 => 22,  87 => 21,  83 => 20,  79 => 19,  75 => 18,  69 => 14,  66 => 13,  57 => 9,  51 => 8,  45 => 7,  42 => 6,  39 => 5,  31 => 3,  26 => 2,);
    }
}
