<?php

/* mod_servicehosting_index.phtml */
class __TwigTemplate_eb8d1f2b40ed9e3635f3c72d961b167d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_default.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
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
        echo gettext("Hosting plans and servers");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 9
        echo gettext("Hosting plans and servers");
        echo "</a></li>
        <li><a href=\"#tab-new-server\">";
        // line 10
        echo gettext("New server");
        echo "</a></li>
        <li><a href=\"#tab-new-plan\">";
        // line 11
        echo gettext("New hosting plan");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">

            <div class=\"help\">
                <h5>";
        // line 19
        echo gettext("Servers");
        echo "</h5>
            </div>

            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <th>";
        // line 25
        echo gettext("Name");
        echo "</th>
                        <th>";
        // line 26
        echo gettext("IP");
        echo "</th>
                        <th>";
        // line 27
        echo gettext("Server manager");
        echo "</th>
                        <th>";
        // line 28
        echo gettext("Active");
        echo "</th>
                        <th style=\"width:22%\">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 33
        $context["servers"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "servicehosting_server_get_list", array(0 => array("per_page" => 100)), "method");
        // line 34
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["servers"]) ? $context["servers"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
            // line 35
            echo "                    <tr>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "name"), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "ip"), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "status_name", array(0 => $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "manager")), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "q", array(0 => $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "active")), "method"), "html", null, true);
            echo "</td>
                        <td class=\"actions\">
                            <a class=\"bb-button btn14\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "cpanel_url"), "html", null, true);
            echo "\" target=\"_blank\"><img src=\"images/icons/dark/cog.png\" alt=\"\"></a>
                            <a class=\"bb-button btn14 api-link\" data-api-msg=\"Connected\" href=\"admin/servicehosting/server_test_connection?id=";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "id"), "html", null, true);
            echo "\" title=\"Test connection\"><img src=\"images/icons/dark/signal.png\" alt=\"\"></a>
                            <a class=\"bb-button btn14\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/servicehosting/server"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                            <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"servicehosting\" href=\"admin/servicehosting/server_delete?id=";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "                    <tr>
                        <td colspan=\"7\">";
            // line 49
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['server'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 52
        echo "                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"7\"></td>
                    </tr>
                </tfoot>
            </table>

            <div class=\"help\">
                <h5>";
        // line 61
        echo gettext("Hosting plans");
        echo "</h5>
            </div>

            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>";
        // line 67
        echo gettext("Title");
        echo "</td>
                        <td>";
        // line 68
        echo gettext("Addon domains");
        echo "</td>
                        <td>";
        // line 69
        echo gettext("Disk space");
        echo "</td>
                        <td>";
        // line 70
        echo gettext("Bandwidth");
        echo "</td>
                        <td style=\"width:13%\">&nbsp;</td>
                    </tr>
                </thead>
                
                <tbody>
                    ";
        // line 76
        $context["hps"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "servicehosting_hp_get_list", array(0 => "per_page:100"), "method");
        // line 77
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["hps"]) ? $context["hps"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["hp"]) {
            // line 78
            echo "                    <tr>
                        <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "name"), "html", null, true);
            echo "</td>
                        <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "max_addon"), "html", null, true);
            echo "</td>
                        <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "quota"), "html", null, true);
            echo "</td>
                        <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "bandwidth"), "html", null, true);
            echo "</td>
                        <td class=\"actions\">
                            <a class=\"bb-button btn14\" href=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/servicehosting/plan"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                            <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"servicehosting\" href=\"admin/servicehosting/hp_delete?id=";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 89
            echo "                    <tr>
                        <td colspan=\"2\">";
            // line 90
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hp'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 93
        echo "                </tbody>
            </table>


        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new-server\">
            <form method=\"post\" action=\"admin/servicehosting/server_create\" class=\"mainForm api-form\" data-api-redirect=\"servicehosting\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 103
        echo gettext("Name");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"name\" value=\"\" required=\"required\" placeholder=\"";
        // line 105
        echo gettext("Unique name to identify this server");
        echo "\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 110
        echo gettext("Hostname");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"hostname\" value=\"\" placeholder=\"";
        // line 112
        echo gettext("server1.yourserverdomain.com");
        echo "\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 117
        echo gettext("IP");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"ip\" value=\"\" required=\"required\" placeholder=\"";
        // line 119
        echo gettext("Primary IP address of the server used to connect to it like: 123.123.123.123");
        echo "\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 124
        echo gettext("Assigned IP Addresses");
        echo ":</label>
                        <div class=\"formRight\">
                            <textarea name=\"assigned_ips\" cols=\"5\" rows=\"5\" placeholder=\"";
        // line 126
        echo gettext("List the IP Addresses assigned to the server (One per line)");
        echo "\"></textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 132
        echo gettext("Enable/Disable");
        echo ":</label>
                            <div class=\"formRight\">
                                <input type=\"radio\" name=\"active\" value=\"1\" checked=\"checked\"/><label>";
        // line 134
        echo gettext("Yes");
        echo "</label>
                                <input type=\"radio\" name=\"active\" value=\"0\"/><label>";
        // line 135
        echo gettext("No");
        echo "</label>
                            </div>
                        <div class=\"fix\"></div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Nameservers</legend>
                    <div class=\"rowElem\">
                        <label>";
        // line 144
        echo gettext("Nameserver 1");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"ns1\" value=\"\" placeholder=\"";
        // line 146
        echo gettext("ns1.yourdomain.com");
        echo "\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 152
        echo gettext("Nameserver 2");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"ns2\" value=\"\" placeholder=\"";
        // line 154
        echo gettext("ns2.yourdomain.com");
        echo "\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 160
        echo gettext("Nameserver 3");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"ns3\" value=\"\" placeholder=\"";
        // line 162
        echo gettext("ns3.yourdomain.com");
        echo "\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 167
        echo gettext("Nameserver 4");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"ns4\" value=\"\" placeholder=\"";
        // line 169
        echo gettext("ns4.yourdomain.com");
        echo "\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Server manager</legend>
                    <div class=\"rowElem\">
                        <label>";
        // line 178
        echo gettext("Server manager");
        echo ":</label>
                        <div class=\"formRight\">
                            <select name=\"manager\">
                                ";
        // line 181
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "servicehosting_manager_get_pairs"));
        foreach ($context['_seq'] as $context["code"] => $context["manager"]) {
            // line 182
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["manager"]) ? $context["manager"] : null), "label"), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['manager'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 184
        echo "                            </select>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 190
        echo gettext("Username");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"username\" value=\"\" placeholder=\"";
        // line 192
        echo gettext("Login username to your server: root/reseller");
        echo "\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 198
        echo gettext("Password");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 200
        echo gettext("Login password to your server");
        echo "\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 205
        echo gettext("Access Hash (Insted of password for cPanel servers)");
        echo ":</label>
                        <div class=\"formRight\">
                            <textarea name=\"accesshash\" cols=\"5\" rows=\"5\"></textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 213
        echo gettext("Use Secure connection");
        echo ":</label>
                            <div class=\"formRight\">
                                <input type=\"radio\" name=\"secure\" value=\"1\"/><label>";
        // line 215
        echo gettext("Yes");
        echo "</label>
                                <input type=\"radio\" name=\"secure\" value=\"0\" checked=\"checked\"/><label>";
        // line 216
        echo gettext("No");
        echo "</label>
                            </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 221
        echo gettext("Add server");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new-plan\">
            <div class=\"help\">
                <h3>";
        // line 228
        echo gettext("Adding new hosting plan");
        echo "</h3>
                <p>";
        // line 229
        echo gettext("Depending on server manager used to setup hosting account you may require provide additional parameters in next step. In this step provide basic hosting plan information.");
        echo "</p>
            </div>
            <form method=\"post\" action=\"admin/servicehosting/hp_create\" class=\"mainForm api-form\" data-api-jsonp=\"onAfterHostingPlanCreate\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 234
        echo gettext("Name");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"name\" value=\"\" required=\"required\" placeholder=\"";
        // line 236
        echo gettext("Unique name to identify this hosting plan");
        echo "\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 242
        echo gettext("Disk quota (MB)");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"quota\" value=\"1024\" placeholder=\"\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 249
        echo gettext("Bandwidth (MB)");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"bandwidth\" value=\"1024\" placeholder=\"\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 256
        echo gettext("Create hosting plan");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>
    </div>
</div>



";
    }

    // line 268
    public function block_js($context, array $blocks = array())
    {
        // line 269
        echo "<script type=\"text/javascript\">
\$(function() {

});

function onAfterHostingPlanCreate(id) {
    bb.redirect(\"servicehosting/plan/\"+id);
}
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_servicehosting_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  552 => 269,  549 => 268,  535 => 256,  525 => 249,  515 => 242,  506 => 236,  501 => 234,  493 => 229,  489 => 228,  479 => 221,  471 => 216,  467 => 215,  462 => 213,  451 => 205,  443 => 200,  438 => 198,  429 => 192,  424 => 190,  416 => 184,  405 => 182,  401 => 181,  395 => 178,  383 => 169,  378 => 167,  370 => 162,  365 => 160,  356 => 154,  351 => 152,  342 => 146,  337 => 144,  325 => 135,  321 => 134,  316 => 132,  307 => 126,  302 => 124,  294 => 119,  289 => 117,  281 => 112,  276 => 110,  268 => 105,  263 => 103,  251 => 93,  242 => 90,  239 => 89,  230 => 85,  224 => 84,  219 => 82,  215 => 81,  211 => 80,  207 => 79,  204 => 78,  198 => 77,  196 => 76,  187 => 70,  183 => 69,  179 => 68,  175 => 67,  166 => 61,  155 => 52,  146 => 49,  143 => 48,  134 => 44,  128 => 43,  124 => 42,  120 => 41,  115 => 39,  111 => 38,  107 => 37,  103 => 36,  100 => 35,  94 => 34,  92 => 33,  84 => 28,  80 => 27,  76 => 26,  72 => 25,  63 => 19,  52 => 11,  48 => 10,  44 => 9,  39 => 6,  36 => 5,  30 => 2,  25 => 3,);
    }
}
