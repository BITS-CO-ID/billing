<?php

/* mod_staff_settings.phtml */
class __TwigTemplate_15d5a2805c9d5135fcad460727ae89c0 extends Twig_Template
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
        // line 3
        $context["active_menu"] = "system";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Staff");
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
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("system"), "html", null, true);
        echo "\">";
        echo gettext("Settings");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 9
        echo gettext("Staff");
        echo "</li>
</ul>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-staff\">";
        // line 17
        echo gettext("Staff");
        echo "</a></li>
        <li><a href=\"#tab-settings\">";
        // line 18
        echo gettext("Settings");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 19
        echo gettext("New staff member");
        echo "</a></li>
        <li><a href=\"#tab-groups\">";
        // line 20
        echo gettext("Manage groups");
        echo "</a></li>
        <li><a href=\"#tab-new-group\">";
        // line 21
        echo gettext("New group");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-staff\">
            
            ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "table_search"), "html", null, true);
        echo "
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td colspan=\"2\">";
        // line 32
        echo gettext("Name");
        echo "</td>
                        <td>";
        // line 33
        echo gettext("Email");
        echo "</td>
                        <td>";
        // line 34
        echo gettext("Group");
        echo "</td>
                        <td>";
        // line 35
        echo gettext("Status");
        echo "</td>
                        <td style=\"width: 5%\">&nbsp;</td>
                    </tr>
                </thead>
                
                <tbody>
                ";
        // line 41
        $context["members"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "staff_get_list", array(0 => twig_array_merge(array("per_page" => 100, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 42
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["members"]) ? $context["members"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["member"]) {
            // line 43
            echo "                <tr>
                    <td style=\"width: 5%\"><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("staff/manage"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "id"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "email")), "html", null, true);
            echo "?size=25\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "id"), "html", null, true);
            echo "\" /></a></td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "email"), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/staff/group"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "group"), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "group"), "name"), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "status_name", array(0 => $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "status")), "method"), "html", null, true);
            echo "</td>
                    <td style=\"width: 13%\" class=\"actions\">
                        <a class=\"bb-button btn14\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/staff/manage"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"staff\" href=\"admin/staff/delete?id=";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>
                </tbody>

                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            echo "                <tbody>
                    <tr>
                        <td colspan=\"5\">
                            ";
            // line 60
            echo gettext("The list is empty");
            // line 61
            echo "                        </td>
                    </tr>
                </tbody>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 65
        echo "            </table>

        </div>
        
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-settings\">
            ";
        // line 71
        $context["params"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "extension_config_get", array(0 => array("ext" => "mod_staff")), "method");
        // line 72
        echo "            <form method=\"post\" action=\"admin/extension/config_save\" class=\"mainForm api-form\" data-api-msg=\"";
        echo gettext("Configuration updated");
        echo "\">

                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 76
        echo gettext("Check login IP");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"check_ip\" value=\"1\" ";
        // line 78
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "check_ip") == "1")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                            <input type=\"radio\" name=\"check_ip\" value=\"0\" ";
        // line 79
        if ((!$this->getAttribute((isset($context["params"]) ? $context["params"] : null), "check_ip"))) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("No");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div id=\"check_ip\" ";
        // line 84
        if ((!$this->getAttribute((isset($context["params"]) ? $context["params"] : null), "check_ip"))) {
            echo "style=\"display:none;\"";
        }
        echo ">
                        <div class=\"rowElem\">
                            <label class=\"topLabel\">";
        // line 86
        echo gettext("Allowed IPs. One per line");
        echo "</label>
                            <div class=\"formBottom\">
                                <textarea name=\"allowed_ips\" cols=\"5\" rows=\"5\" placeholder=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_env", array(0 => array("ip" => 1)), "method"), "html", null, true);
        echo "\" />";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "allowed_ips"), "html", null, true);
        echo "</textarea>
                            </div>
                            <div class=\"fix\"></div>
                        </div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 94
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"ext\" value=\"mod_staff\" />
                </fieldset>
            </form>

        </div>
        
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-new\">
            <form method=\"post\" action=\"admin/staff/create\" class=\"mainForm api-form\" data-api-jsonp=\"onAfterStaffCreate\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 106
        echo gettext("Group");
        echo "</label>
                        <div class=\"formRight\">
                            ";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "admin_group_id", 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "staff_group_get_pairs"), 2 => "", 3 => 1), "method"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 114
        echo gettext("Name");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"name\" value=\"\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 122
        echo gettext("Email");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"email\" name=\"email\" value=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "email"), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 129
        echo gettext("Password");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"password\" name=\"password\" required=\"required\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 136
        echo gettext("Signature");
        echo "</label>
                        <div class=\"formRight\">
                            <textarea name=\"signature\" cols=\"5\" rows=\"2\"></textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 143
        echo gettext("Status");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"status\" value=\"inactive\" checked=\"checked\"/><label>";
        // line 145
        echo gettext("Inactive");
        echo "</label>
                            <input type=\"radio\" name=\"status\" value=\"active\"/><label>";
        // line 146
        echo gettext("Active");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 151
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>
        
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-groups\">

            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>";
        // line 162
        echo gettext("Name");
        echo "</td>
                        <td style=\"width: 13%\">&nbsp;</td>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 167
        $context["groups"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "staff_group_get_list", array(0 => array("per_page" => 100, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page"))), "method");
        // line 168
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["group"]) {
            // line 169
            echo "
                <tr>
                    <td>";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "name"), "html", null, true);
            echo "</td>
                    <td class=\"actions\">
                        <a class=\"bb-button btn14\" href=\"";
            // line 173
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/staff/group"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"staff\" href=\"admin/staff/group_delete?id=";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>
                </tbody>

                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 180
            echo "                <tbody>
                    <tr>
                        <td colspan=\"5\">
                            ";
            // line 183
            echo gettext("The list is empty");
            // line 184
            echo "                        </td>
                    </tr>
                </tbody>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 188
        echo "            </table>

        </div>

        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-new-group\">
            <form method=\"post\" action=\"admin/staff/group_create\" class=\"mainForm save api-form\" data-api-redirect=\"extension/settings/staff\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 197
        echo gettext("Name");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"name\" value=\"\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"submit\" value=\"";
        // line 203
        echo gettext("Create group");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

    </div>
</div>

";
    }

    // line 213
    public function block_js($context, array $blocks = array())
    {
        // line 214
        echo "<script type=\"text/javascript\">
function onAfterStaffCreate(id) {
    bb.redirect('staff/manage/' + id + '#tab-permissions');
}

\$(function() {
    \$('input[name=check_ip]').click(function(){
        if(\$(this).val() == 1) {
            \$('#check_ip').slideDown();
        } else {
            \$('#check_ip').slideUp();
        }
    });
});

</script>
";
    }

    public function getTemplateName()
    {
        return "mod_staff_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 214,  460 => 213,  447 => 203,  438 => 197,  427 => 188,  418 => 184,  416 => 183,  411 => 180,  400 => 174,  394 => 173,  389 => 171,  385 => 169,  379 => 168,  377 => 167,  369 => 162,  355 => 151,  347 => 146,  343 => 145,  338 => 143,  328 => 136,  318 => 129,  310 => 124,  305 => 122,  294 => 114,  285 => 108,  280 => 106,  265 => 94,  254 => 88,  249 => 86,  242 => 84,  230 => 79,  222 => 78,  217 => 76,  209 => 72,  207 => 71,  199 => 65,  190 => 61,  188 => 60,  183 => 57,  172 => 51,  166 => 50,  161 => 48,  153 => 47,  149 => 46,  145 => 45,  135 => 44,  132 => 43,  126 => 42,  124 => 41,  115 => 35,  111 => 34,  107 => 33,  103 => 32,  96 => 28,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  65 => 14,  62 => 13,  55 => 9,  49 => 8,  43 => 7,  40 => 6,  37 => 5,  31 => 2,  26 => 3,);
    }
}
