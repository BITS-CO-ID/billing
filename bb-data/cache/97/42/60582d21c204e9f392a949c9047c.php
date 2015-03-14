<?php

/* mod_client_index.phtml */
class __TwigTemplate_974260582d21c204e9f392a949c9047c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_default.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'top_content' => array($this, 'block_top_content'),
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
        echo gettext("Clients");
    }

    // line 5
    public function block_top_content($context, array $blocks = array())
    {
        // line 6
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "show_filter")) {
            // line 7
            echo "<div class=\"widget filterWidget\">
    <div class=\"head\"><h5 class=\"iMagnify\">";
            // line 8
            echo gettext("Filter clients");
            echo "</h5></div>
    <div class=\"body nopadding\">

        <form method=\"get\" action=\"\" class=\"mainForm\">
            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>";
            // line 14
            echo gettext("ID");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"id\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "id"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 22
            echo gettext("Name");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"name\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "name"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>
                
                <div class=\"rowElem\">
                    <label>";
            // line 30
            echo gettext("Company name");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"company\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "company"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 38
            echo gettext("Email");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"email\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "email"), "html", null, true);
            echo "\" />
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 46
            echo gettext("Group");
            echo ":</label>
                    <div class=\"formRight\">
                        ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "group_id", 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "client_group_get_pairs"), 2 => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "group_id"), 3 => 0, 4 => "All groups"), "method"), "html", null, true);
            echo "
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 54
            echo gettext("Status");
            echo ":</label>
                    <div class=\"formRight\">
                        <input type=\"radio\" name=\"status\" value=\"\"";
            // line 56
            if ((!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "status"))) {
                echo " checked=\"checked\"";
            }
            echo "/><label>";
            echo gettext("All");
            echo "</label>
                        <input type=\"radio\" name=\"status\" value=\"active\"";
            // line 57
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "status") == "active")) {
                echo " checked=\"checked\"";
            }
            echo "/><label>";
            echo gettext("Active");
            echo "</label>
                        <input type=\"radio\" name=\"status\" value=\"suspended\"";
            // line 58
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "status") == "suspended")) {
                echo " checked=\"checked\"";
            }
            echo " /><label>";
            echo gettext("Suspended");
            echo "</label>
                        <input type=\"radio\" name=\"status\" value=\"canceled\"";
            // line 59
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "status") == "canceled")) {
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
            // line 65
            echo gettext("Registration date");
            echo "</label>
                    <div class=\"formRight moreFields\">
                        <ul>
                            <li style=\"width: 100px\"><input type=\"text\" name=\"date_from\" value=\"";
            // line 68
            if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from"), "Y-m-d"), "html", null, true);
            }
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y-m-d"), "html", null, true);
            echo "\" class=\"datepicker\"/></li>
                            <li class=\"sep\">-</li>
                            <li style=\"width: 100px\"><input type=\"text\" name=\"date_to\" value=\"";
            // line 70
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
            // line 77
            echo gettext("Filter");
            echo "\" class=\"greyishBtn submitForm\" />
            </fieldset>
        </form>
        <div class=\"fix\"></div>
    </div>
</div>
";
        } else {
            // line 84
            $context["count_clients"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "client_get_statuses");
            // line 85
            echo "<div class=\"stats\">
    <ul>
        <li><a href=\"";
            // line 87
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client"), "html", null, true);
            echo "?status=active\" class=\"count green\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["count_clients"]) ? $context["count_clients"] : null), "active"), "html", null, true);
            echo "</a><span>";
            echo gettext("Active");
            echo "</span></li>
        <li><a href=\"";
            // line 88
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client"), "html", null, true);
            echo "?status=suspended\" class=\"count blue\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["count_clients"]) ? $context["count_clients"] : null), "suspended"), "html", null, true);
            echo "</a><span>";
            echo gettext("Suspended");
            echo "</span></li>
        <li><a href=\"";
            // line 89
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client"), "html", null, true);
            echo "?status=canceled\" class=\"count red\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["count_clients"]) ? $context["count_clients"] : null), "canceled"), "html", null, true);
            echo "</a><span>";
            echo gettext("Canceled");
            echo "</span></li>
        <li class=\"last\"><a href=\"";
            // line 90
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client"), "html", null, true);
            echo "\" class=\"count grey\" title=\"\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["count_clients"]) ? $context["count_clients"] : null), "active") + $this->getAttribute((isset($context["count_clients"]) ? $context["count_clients"] : null), "canceled")) + $this->getAttribute((isset($context["count_clients"]) ? $context["count_clients"] : null), "suspended")), "html", null, true);
            echo "</a><span>";
            echo gettext("Total");
            echo "</span></li>
    </ul>
    <div class=\"fix\"></div>
</div>
";
        }
    }

    // line 97
    public function block_content($context, array $blocks = array())
    {
        // line 98
        echo "<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 101
        echo gettext("Clients");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 102
        echo gettext("New client");
        echo "</a></li>
        <li><a href=\"#tab-groups\">";
        // line 103
        echo gettext("Groups");
        echo "</a></li>
        <li><a href=\"#tab-new-group\">";
        // line 104
        echo gettext("New group");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">

        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">
            ";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "table_search"), "html", null, true);
        echo "
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td colspan=\"2\">";
        // line 115
        echo gettext("Name");
        echo "</td>
                        <td>";
        // line 116
        echo gettext("Company");
        echo "</td>
                        <td width=\"30%\">";
        // line 117
        echo gettext("Email");
        echo "</td>
                        <td>";
        // line 118
        echo gettext("Status");
        echo "</td>
                        <td>";
        // line 119
        echo gettext("Date");
        echo "</td>
                        <td width=\"13%\">&nbsp;</td>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 125
        $context["clients"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "client_get_list", array(0 => twig_array_merge(array("per_page" => 30, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 126
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["clients"]) ? $context["clients"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 127
            echo "                    <tr>
                        <td>
                            <a href=\"";
            // line 129
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client/manage"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "email")), "html", null, true);
            echo "?size=20\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
            echo "\" /></a>
                        </td>
                        <td>
                            <span class=\"flag flag-";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "country"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_countries"), $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "country"), array(), "array"), "html", null, true);
            echo "\"></span>
                            <a href=\"";
            // line 133
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client/manage"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "first_name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "last_name"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "first_name"), "1", null, "."), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "last_name"), 15), "html", null, true);
            echo "</a></td>
                        <td><a href=\"";
            // line 134
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client/manage"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "company"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, (($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "company", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "company"), "-")) : ("-")), 30), "html", null, true);
            echo "</a></td>
                        <td><a href=\"";
            // line 135
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client/manage"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "email"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "email"), 30), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "status_name", array(0 => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "status")), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 137
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "created_at"), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"btn14 bb-rm-tr api-link\" href=\"admin/client/delete?id=";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
            echo "\" data-api-confirm=\"Are you sure?\" data-api-reload=\"1\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                            <a class=\"btn14\" href=\"";
            // line 140
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client/manage"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 144
            echo "                    <tr>
                        <td colspan=\"7\">";
            // line 145
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 148
        echo "                </tbody>
            </table>
            
            ";
        // line 151
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["clients"]) ? $context["clients"] : null), "url" => "client")));
        // line 152
        echo "        </div>

        <div class=\"fix\"></div>
        
        <div class=\"tab_content nopadding\" id=\"tab-new\">

            <form method=\"post\" action=\"admin/client/create\" class=\"mainForm api-form save\" data-api-redirect=\"client\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 161
        echo gettext("Status");
        echo ":</label>
                        <div class=\"formRight noborder\">
                            <input type=\"radio\" name=\"status\" value=\"active\" checked=\"checked\"/><label>";
        // line 163
        echo gettext("Active");
        echo "</label>
                            <input type=\"radio\" name=\"status\" value=\"canceled\"/><label>";
        // line 164
        echo gettext("Canceled");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 169
        echo gettext("Group");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "group_id", 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "client_group_get_pairs"), 2 => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "group_id"), 3 => 0, 4 => "Select group"), "method"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 176
        echo gettext("Email");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"email\" value=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "email"), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 183
        echo gettext("Name");
        echo ":</label>
                        <div class=\"formRight moreFields\">
                            <ul>
                                <li style=\"width: 200px\"><input type=\"text\" name=\"first_name\" value=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "first_name"), "html", null, true);
        echo "\" required=\"required\"/></li>
                                <li class=\"sep\"></li>
                                <li style=\"width: 200px\"><input type=\"text\" name=\"last_name\" value=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "last_name"), "html", null, true);
        echo "\"/></li>
                            </ul>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 194
        echo gettext("Company");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"company\" value=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "company"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 201
        echo gettext("Address Line 1");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"address_1\" value=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "address_1"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 208
        echo gettext("Address Line 2");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"address_2\" value=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "address_2"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 215
        echo gettext("City");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"city\" value=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "city"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 222
        echo gettext("State");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 225
        echo "                            <input type=\"text\" name=\"state\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "state"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 230
        echo gettext("Country");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 232
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "country", 1 => $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_countries"), 2 => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "country"), 3 => 0, 4 => "Select country"), "method"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 237
        echo gettext("Postcode");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"postcode\" value=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "postcode"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 244
        echo gettext("Phone");
        echo ":</label>
                        <div class=\"formRight moreFields\">
                            <ul>
                                <li><input type=\"text\" name=\"phone_cc\" value=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "phone_cc"), "html", null, true);
        echo "\"/></li>
                                <li class=\"sep\"></li>
                                <li style=\"width: 200px;\"><input type=\"text\" name=\"phone\" value=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "phone"), "html", null, true);
        echo "\"/></li>
                            </ul>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 256
        echo gettext("Currency");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 258
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "currency", 1 => $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "currency_get_pairs"), 2 => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "currency"), 3 => 0, 4 => "Select currency"), "method"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 264
        echo gettext("Password");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"password\" name=\"password\" value=\"\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <input type=\"submit\" value=\"";
        // line 271
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-groups\">
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>";
        // line 280
        echo gettext("Title");
        echo "</td>
                        <td width=\"13%\">";
        // line 281
        echo gettext("Actions");
        echo "</td>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 286
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "client_group_get_pairs"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["id"] => $context["group"]) {
            // line 287
            echo "                    <tr>
                        <td>";
            // line 288
            echo twig_escape_filter($this->env, (isset($context["group"]) ? $context["group"] : null), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"btn14\" href=\"";
            // line 290
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client/group"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                            <a class=\"btn14 api-link bb-rm-tr\" data-api-reload=\"1\" data-api-confirm=\"Are you sure?\" href=\"admin/client/group_delete?id=";
            // line 291
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 295
            echo "                    <tr>
                        <td colspan=\"2\">";
            // line 296
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 299
        echo "                </tbody>
            </table>
        </div>


        <div class=\"tab_content nopadding\" id=\"tab-new-group\">

            <form method=\"post\" action=\"admin/client/group_create\" class=\"mainForm api-form save\" data-api-redirect=\"client\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 309
        echo gettext("Title");
        echo ":</label>
                        <div class=\"formRight noborder\">
                            <input type=\"text\" name=\"title\" value=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "title"), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 316
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

    </div>
</div>

";
    }

    // line 326
    public function block_js($context, array $blocks = array())
    {
        // line 327
        echo "


";
    }

    public function getTemplateName()
    {
        return "mod_client_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  734 => 327,  731 => 326,  718 => 316,  710 => 311,  705 => 309,  693 => 299,  684 => 296,  681 => 295,  672 => 291,  666 => 290,  661 => 288,  658 => 287,  653 => 286,  645 => 281,  641 => 280,  629 => 271,  619 => 264,  610 => 258,  605 => 256,  595 => 249,  590 => 247,  584 => 244,  576 => 239,  571 => 237,  563 => 232,  558 => 230,  549 => 225,  544 => 222,  536 => 217,  531 => 215,  523 => 210,  518 => 208,  510 => 203,  505 => 201,  497 => 196,  492 => 194,  483 => 188,  478 => 186,  472 => 183,  464 => 178,  459 => 176,  451 => 171,  446 => 169,  438 => 164,  434 => 163,  429 => 161,  418 => 152,  416 => 151,  411 => 148,  402 => 145,  399 => 144,  388 => 140,  384 => 139,  379 => 137,  375 => 136,  365 => 135,  355 => 134,  341 => 133,  335 => 132,  323 => 129,  319 => 127,  313 => 126,  311 => 125,  302 => 119,  298 => 118,  294 => 117,  290 => 116,  286 => 115,  279 => 111,  269 => 104,  265 => 103,  261 => 102,  257 => 101,  252 => 98,  249 => 97,  235 => 90,  227 => 89,  219 => 88,  211 => 87,  207 => 85,  205 => 84,  195 => 77,  181 => 70,  172 => 68,  166 => 65,  153 => 59,  145 => 58,  137 => 57,  129 => 56,  124 => 54,  115 => 48,  110 => 46,  101 => 40,  96 => 38,  87 => 32,  82 => 30,  73 => 24,  68 => 22,  59 => 16,  54 => 14,  45 => 8,  42 => 7,  40 => 6,  37 => 5,  31 => 3,  26 => 2,);
    }
}
