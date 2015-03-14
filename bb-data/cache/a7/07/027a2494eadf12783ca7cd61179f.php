<?php

/* mod_servicedomain_index.phtml */
class __TwigTemplate_a707027a2494eadf12783ca7cd61179f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_default.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
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
        echo "Domain management";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-tlds\">";
        // line 10
        echo gettext("Top level domains");
        echo "</a></li>
        <li><a href=\"#tab-new-tld\">";
        // line 11
        echo gettext("New top level domain");
        echo "</a></li>
        <li><a href=\"#tab-registrars\">";
        // line 12
        echo gettext("Registrars");
        echo "</a></li>
        <li><a href=\"#tab-new-registar\">";
        // line 13
        echo gettext("New domain registrar");
        echo "</a></li>
        <li><a href=\"#tab-nameservers\">";
        // line 14
        echo gettext("Nameservers");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-tlds\">

<div class=\"help\">
    <h5>";
        // line 22
        echo gettext("Manage TLDs");
        echo "</h5>
    <p>";
        // line 23
        echo gettext("Setup domain pricing and allowed operations. Assign specific domain registrars for each Top Level Domain (TLD)");
        echo "</p>
</div>

<table class=\"tableStatic wide\">
    <thead>
        <tr class=\"noborder\">
            <td>";
        // line 29
        echo gettext("TLD");
        echo "</td>
            <td>";
        // line 30
        echo gettext("Registration");
        echo "</td>
            <td>";
        // line 31
        echo gettext("Renew");
        echo "</td>
            <td>";
        // line 32
        echo gettext("Transfer");
        echo " </td>
            <td>";
        // line 33
        echo gettext("Operations");
        echo "</td>
            <td>";
        // line 34
        echo gettext("Registrar");
        echo "</td>
            <td style=\"width:13%\">&nbsp;</td>
        </tr>
    </thead>

    <tbody>
        ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "servicedomain_tld_get_list"), "list"));
        foreach ($context['_seq'] as $context["_key"] => $context["tld"]) {
            // line 41
            echo "        <tr>
            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tld"]) ? $context["tld"] : null), "tld"), "html", null, true);
            echo "</td>
            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["tld"]) ? $context["tld"] : null), "price_registration")), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["tld"]) ? $context["tld"] : null), "price_renew")), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["tld"]) ? $context["tld"] : null), "price_transfer")), "method"), "html", null, true);
            echo "</td>
            <td>
             ";
            // line 47
            echo gettext("Allow register:");
            echo " ";
            if ($this->getAttribute((isset($context["tld"]) ? $context["tld"] : null), "allow_register")) {
                echo gettext("Yes");
            } else {
                echo gettext("No");
            }
            echo "<br/>
             ";
            // line 48
            echo gettext("Allow transfer:");
            echo " ";
            if ($this->getAttribute((isset($context["tld"]) ? $context["tld"] : null), "allow_transfer")) {
                echo gettext("Yes");
            } else {
                echo gettext("No");
            }
            echo "<br/>
             ";
            // line 49
            echo gettext("Active:");
            echo " ";
            if ($this->getAttribute((isset($context["tld"]) ? $context["tld"] : null), "active")) {
                echo gettext("Yes");
            } else {
                echo gettext("No");
            }
            // line 50
            echo "            </td>
            <td><a class=\"\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("servicedomain/registrar"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tld"]) ? $context["tld"] : null), "registrar"), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tld"]) ? $context["tld"] : null), "registrar"), "title"), "html", null, true);
            echo "</a></td>
            <td class=\"actions\">
                <a class=\"btn14 mr5\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("servicedomain/tld"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tld"]) ? $context["tld"] : null), "tld"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" data-api-reload=\"1\" href=\"admin/servicedomain/tld_delete?tld=";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tld"]) ? $context["tld"] : null), "tld"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tld'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 58
        echo "     </tbody>

</table>
</div>

        <div class=\"tab_content nopadding\" id=\"tab-new-tld\">

            <div class=\"help\">
                <h5>";
        // line 66
        echo gettext("Add new top level domain");
        echo "</h5>
                <p>";
        // line 67
        echo gettext("Setup new TLD prices and properties");
        echo "</p>
            </div>

            <form method=\"post\" action=\"admin/servicedomain/tld_create\" class=\"mainForm save api-form\" data-api-reload=\"1\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 73
        echo gettext("Tld");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"tld\" value=\".\" required=\"required\" class=\"dirTop\" title=\"Must start with a dot\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 80
        echo gettext("Registrar");
        echo ":</label>
                        <div class=\"formRight\">
                            <select name=\"tld_registrar_id\" required=\"required\">
                                ";
        // line 83
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "servicedomain_registrar_get_pairs"));
        foreach ($context['_seq'] as $context["id"] => $context["title"]) {
            // line 84
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 86
        echo "                            </select>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 92
        echo gettext("Registration price");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"price_registration\" value=\"\" required=\"required\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 100
        echo gettext("Renewal price");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"price_renew\" value=\"\" required=\"required\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 108
        echo gettext("Transfer price");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"price_transfer\" value=\"\" required=\"required\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 116
        echo gettext("Minimum years of registration");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"min_years\" value=\"1\" required=\"required\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 124
        echo gettext("Allow registration");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"allow_register\" value=\"1\"checked=\"checked\"/><label>";
        // line 126
        echo gettext("Yes");
        echo "</label>
                            <input type=\"radio\" name=\"allow_register\" value=\"0\"/><label>";
        // line 127
        echo gettext("No");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 133
        echo gettext("Allow transfer");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"allow_transfer\" value=\"1\" checked=\"checked\"/><label>";
        // line 135
        echo gettext("Yes");
        echo "</label>
                            <input type=\"radio\" name=\"allow_transfer\" value=\"0\"/><label>";
        // line 136
        echo gettext("No");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 142
        echo gettext("Active");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"active\" value=\"1\" checked=\"checked\"/><label>";
        // line 144
        echo gettext("Yes");
        echo "</label>
                            <input type=\"radio\" name=\"active\" value=\"0\"/><label>";
        // line 145
        echo gettext("No");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 150
        echo gettext("Add");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>

        </div>

        <div class=\"tab_content nopadding\" id=\"tab-registrars\">

        <div class=\"help\">
            <h5>";
        // line 159
        echo gettext("Domain registrars");
        echo "</h5>
            <p>";
        // line 160
        echo gettext("Manage domain registrars");
        echo "</p>
        </div>

        <table class=\"tableStatic wide\">
            <thead>
                <tr class=\"noborder\">
                    <th>";
        // line 166
        echo gettext("Title");
        echo "</th>
                    <th style=\"width:18%\">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 171
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "servicedomain_registrar_get_list"), "list"));
        foreach ($context['_seq'] as $context["_key"] => $context["registrar"]) {
            // line 172
            echo "                <tr>
                    <td>";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["registrar"]) ? $context["registrar"] : null), "title"), "html", null, true);
            echo "</td>
                    <td>
                        <a class=\"btn14 mr5\" href=\"";
            // line 175
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("servicedomain/registrar/"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["registrar"]) ? $context["registrar"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        <a class=\"bb-button btn14 api-link\" href=\"admin/servicedomain/registrar_copy?id=";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["registrar"]) ? $context["registrar"] : null), "id"), "html", null, true);
            echo "\" data-api-reload=\"1\" title=\"Install\"><img src=\"images/icons/dark/baloons.png\" alt=\"\"></a>
                        <a class=\"bb-button btn14 api-link\" href=\"admin/servicedomain/registrar_delete?id=";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["registrar"]) ? $context["registrar"] : null), "id"), "html", null, true);
            echo "\" data-api-confirm=\"Are you sure?\" data-api-reload=\"1\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['registrar'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 181
        echo "            </tbody>
        </table>

            </div>

        <div class=\"tab_content nopadding\" id=\"tab-nameservers\">

        <div class=\"help\">
            <h5>";
        // line 189
        echo gettext("Nameservers");
        echo "</h5>
            <p>";
        // line 190
        echo gettext("Setup default nameservers that will be used for new domain registrations if client have not provided his own nameservers in order form");
        echo "</p>
        </div>

        <form method=\"post\" action=\"admin/system/update_params\" class=\"mainForm api-form\" data-api-msg=\"Nameservers updated\">
        <fieldset>
            <div class=\"rowElem noborder\">
                <label>";
        // line 196
        echo gettext("Nameserver 1");
        echo ":</label>
                <div class=\"formRight noborder\">
                    <input type=\"text\" name=\"nameserver_1\" value=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_param", array(0 => array("key" => "nameserver_1")), "method"), "html", null, true);
        echo "\">
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label>";
        // line 204
        echo gettext("Nameserver 2");
        echo ":</label>
                <div class=\"formRight noborder\">
                    <input type=\"text\" name=\"nameserver_2\" value=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_param", array(0 => array("key" => "nameserver_2")), "method"), "html", null, true);
        echo "\">
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>";
        // line 211
        echo gettext("Nameserver 3");
        echo ":</label>
                <div class=\"formRight noborder\">
                    <input type=\"text\" name=\"nameserver_3\" value=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_param", array(0 => array("key" => "nameserver_3")), "method"), "html", null, true);
        echo "\">
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label>";
        // line 219
        echo gettext("Nameserver 4");
        echo ":</label>
                <div class=\"formRight noborder\">
                    <input type=\"text\" name=\"nameserver_4\" value=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_param", array(0 => array("key" => "nameserver_4")), "method"), "html", null, true);
        echo "\">
                </div>
                <div class=\"fix\"></div>
            </div>
            <input type=\"submit\" value=\"";
        // line 225
        echo gettext("Update nameservers");
        echo "\" class=\"greyishBtn submitForm\" />
        </fieldset>
        </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new-registar\">
            ";
        // line 231
        $this->env->loadTemplate("partial_extensions.phtml")->display(array("type" => "domain-registrar", "header" => "List of domain registrars on extensions site"));
        // line 232
        echo "            <div class=\"body\">
                <h1 class=\"pt10\">";
        // line 233
        echo gettext("Adding new domain registrar");
        echo "</h1>
                <p>";
        // line 234
        echo gettext("Follow instrunctions bellow to install new domain registrar.");
        echo "</p>

                <div class=\"pt20 list arrowGrey\">
                    <ul>
                        <li>";
        // line 238
        echo gettext("Check domain registrar you are looking for is available at");
        echo " <a href=\"http://extensions.boxbilling.com/\" target=\"_blank\">BoxBilling extensions site</a></li>
                        <li>";
        // line 239
        echo gettext("Download domain registrar file and place to");
        echo " <strong>";
        echo twig_escape_filter($this->env, constant("BB_PATH_LIBRARY"), "html", null, true);
        echo "/Registrar/Adapter</strong></li>
                        <li>";
        // line 240
        echo gettext("Reload this page to see newly detected domain registrar");
        echo "</li>
                        <li>";
        // line 241
        echo gettext("Click on install button. Now you will be able to create top level domains with new domain registrar");
        echo "</li>
                        <li>";
        // line 242
        echo gettext("For developers. Read");
        echo " <a href=\"http://www.boxbilling.com/docs/search.html?q=registrar\" target=\"_blank\">";
        echo gettext("BoxBilling documentation");
        echo "</a> ";
        echo gettext("to learn how to create your own domain registrar.");
        echo "</li>
                    </ul>
                </div>

            </div>

            ";
        // line 248
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "servicedomain_registrar_get_available")) > 0)) {
            // line 249
            echo "            <table class=\"tableStatic wide\">
            <thead>
                <tr>
                    <td>";
            // line 252
            echo gettext("Code");
            echo "</td>
                    <td style=\"width: 5%\">";
            // line 253
            echo gettext("Install");
            echo "</td>
                </tr>
            </thead>

            <tbody>
            ";
            // line 258
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "servicedomain_registrar_get_available"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                // line 259
                echo "            <tr>
                <td>";
                // line 260
                echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
                echo "</td>
                <td class=\"actions\">
                    <a class=\"bb-button btn14 api-link\" href=\"admin/servicedomain/registrar_install?code=";
                // line 262
                echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
                echo "\" data-api-msg=\"Domain registrar installed\" title=\"Install\"><img src=\"images/icons/dark/cog.png\" alt=\"\"></a>
                </td>
            </tr>
            </tbody>

            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 268
                echo "            <tbody>
                <tr>
                    <td colspan=\"5\">
                        ";
                // line 271
                echo gettext("All payment gateways installed");
                // line 272
                echo "                    </td>
                </tr>
            </tbody>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 276
            echo "        </table>
        ";
        }
        // line 278
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "mod_servicedomain_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  612 => 278,  608 => 276,  599 => 272,  597 => 271,  592 => 268,  581 => 262,  576 => 260,  573 => 259,  568 => 258,  560 => 253,  556 => 252,  551 => 249,  549 => 248,  536 => 242,  532 => 241,  528 => 240,  522 => 239,  518 => 238,  511 => 234,  507 => 233,  504 => 232,  502 => 231,  493 => 225,  486 => 221,  481 => 219,  472 => 213,  467 => 211,  459 => 206,  454 => 204,  445 => 198,  440 => 196,  431 => 190,  427 => 189,  417 => 181,  407 => 177,  403 => 176,  397 => 175,  392 => 173,  389 => 172,  385 => 171,  377 => 166,  368 => 160,  364 => 159,  352 => 150,  344 => 145,  340 => 144,  335 => 142,  326 => 136,  322 => 135,  317 => 133,  308 => 127,  304 => 126,  299 => 124,  288 => 116,  277 => 108,  266 => 100,  255 => 92,  247 => 86,  236 => 84,  232 => 83,  226 => 80,  216 => 73,  207 => 67,  203 => 66,  193 => 58,  183 => 54,  177 => 53,  168 => 51,  165 => 50,  157 => 49,  147 => 48,  137 => 47,  132 => 45,  128 => 44,  124 => 43,  120 => 42,  117 => 41,  113 => 40,  104 => 34,  100 => 33,  96 => 32,  92 => 31,  88 => 30,  84 => 29,  75 => 23,  71 => 22,  60 => 14,  56 => 13,  52 => 12,  48 => 11,  44 => 10,  38 => 6,  35 => 5,  29 => 2,  24 => 3,);
    }
}
