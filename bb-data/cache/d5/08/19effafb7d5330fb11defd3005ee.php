<?php

/* mod_servicehosting_manage.phtml */
class __TwigTemplate_d50819effafb7d5330fb11defd3005ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status") == "active")) {
            // line 2
            echo "<div class=\"widget simpleTabs tabsRight\">
    <div class=\"head\">
        <h2 class=\"dark-icon i-services\">";
            // line 4
            echo gettext("Manage hosting account");
            echo "</h2>
    </div>

    <ul class=\"tabs\">
        <li><a href=\"#tab-details\">";
            // line 8
            echo gettext("Details");
            echo "</a></li>
        <li><a href=\"#tab-change-pass\">";
            // line 9
            echo gettext("Password");
            echo "</a></li>
        <li><a href=\"#tab-change-domain\">";
            // line 10
            echo gettext("Domain");
            echo "</a></li>
        <li><a href=\"#tab-change-username\">";
            // line 11
            echo gettext("Username");
            echo "</a></li>
    </ul>

    <div class=\"tabs_container\">

        <div class=\"tab_content\" id=\"tab-details\">
            <div class=\"grid_6 alpha\">
                <div class=\"box\">
                    <h2>";
            // line 19
            echo gettext("Details");
            echo "</h2>
                    <div class=\"block\">
                    ";
            // line 21
            $context["server"] = $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "server");
            // line 22
            echo "                    ";
            $context["hp"] = $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "hosting_plan");
            // line 23
            echo "                        <table>
                            <tbody>
                                <tr>
                                    <td>";
            // line 26
            echo gettext("Domain");
            echo ":</td>
                                    <td>
                                        <a target=\"_blank\" href=\"http://";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "domain"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "domain"), "html", null, true);
            echo "</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>";
            // line 33
            echo gettext("Server IP");
            echo ":</td>
                                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "ip"), "html", null, true);
            echo "</td>
                                </tr>

                                <tr>
                                    <td>";
            // line 38
            echo gettext("Server Hostname");
            echo ":</td>
                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "hostname"), "html", null, true);
            echo "</td>
                                </tr>

                                <tr>
                                    <td>";
            // line 43
            echo gettext("Username");
            echo ":</td>
                                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "username"), "html", null, true);
            echo "</td>
                                </tr>

                                <tr>
                                    <td>";
            // line 48
            echo gettext("Password");
            echo ":</td>
                                    <td>******</td>
                                </tr>

                                <tr>
                                    <td>";
            // line 53
            echo gettext("Hosting plan");
            echo ":</td>
                                    <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "name"), "html", null, true);
            echo "</td>
                                </tr>

                                <tr>
                                    <td>";
            // line 58
            echo gettext("Bandwidth");
            echo ":</td>
                                    <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "bandwidth"), "html", null, true);
            echo " MB / ";
            echo gettext("per month");
            echo "</td>
                                </tr>
                                <tr>
                                    <td>";
            // line 62
            echo gettext("Disk quota");
            echo ":</td>
                                    <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "quota"), "html", null, true);
            echo " MB</td>
                                </tr>

                            </tbody>
                        </table>

                        <p>
                        ";
            // line 70
            if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "domain_order_id")) {
                // line 71
                echo "                        <a class=\"bb-button\" href=\"";
                echo twig_escape_filter($this->env, twig_bb_client_link_filter("/service/manage"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "domain_order_id"), "html", null, true);
                echo "\">";
                echo gettext("Manage domain");
                echo "</a>
                        ";
            }
            // line 73
            echo "
                        <a class=\"bb-button bb-button-submit\" href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "cpanel_url"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo gettext("Jump to cPanel");
            echo "</a>

                        ";
            // line 76
            if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "reseller")) {
                // line 77
                echo "                        <a class=\"bb-button bb-button-submit\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "reseller_cpanel_url"), "html", null, true);
                echo "\" target=\"_blank\">";
                echo gettext("Reseller control panel");
                echo "</a>
                        ";
            }
            // line 79
            echo "                        </p>
                    </div>
                </div>
            </div>

            <div class=\"grid_6 omega\">

                <div class=\"box\">
                    <h2>";
            // line 87
            echo gettext("Nameservers");
            echo "</h2>
                    <div class=\"block\">
                        <table>
                            <tbody>
                                <tr>
                                    <td>";
            // line 92
            echo gettext("Nameserver 1");
            echo ":</td>
                                    <td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "ns1"), "html", null, true);
            echo "</td>
                                </tr>

                                <tr>
                                    <td>";
            // line 97
            echo gettext("Nameserver 2");
            echo ":</td>
                                    <td>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "ns2"), "html", null, true);
            echo "</td>
                                </tr>

                                ";
            // line 101
            if ($this->getAttribute((isset($context["server"]) ? $context["server"] : null), "ns3")) {
                // line 102
                echo "                                <tr>
                                    <td>";
                // line 103
                echo gettext("Nameserver 3");
                echo ":</td>
                                    <td>";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "ns3"), "html", null, true);
                echo "</td>
                                </tr>
                                ";
            }
            // line 107
            echo "
                                ";
            // line 108
            if ($this->getAttribute((isset($context["server"]) ? $context["server"] : null), "ns4")) {
                // line 109
                echo "                                <tr>
                                    <td>";
                // line 110
                echo gettext("Nameserver 4");
                echo ":</td>
                                    <td>";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "ns4"), "html", null, true);
                echo "</td>
                                </tr>
                                ";
            }
            // line 114
            echo "                            </tbody>
                        </table>
                    </div>
                </div>

                <div class=\"box\">
                    <h2>";
            // line 120
            echo gettext("FTP details");
            echo "</h2>
                    <div class=\"block\">
                        <p>";
            // line 122
            echo gettext("Use these details to connect to your FTP account.");
            echo "</p>
                        <table>
                            <tbody>

                                <tr>
                                    <td>";
            // line 127
            echo gettext("FTP IP");
            echo ":</td>
                                    <td>";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "ip"), "html", null, true);
            echo "</td>
                                </tr>

                                <tr>
                                    <td>";
            // line 132
            echo gettext("FTP Username");
            echo ":</td>
                                    <td>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "username"), "html", null, true);
            echo "</td>
                                </tr>

                                <tr>
                                    <td>";
            // line 137
            echo gettext("FTP Password");
            echo ":</td>
                                    <td>******</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"clear\"></div>
        </div>

        <div class=\"tab_content box\" id=\"tab-change-pass\">
            <h2>";
            // line 150
            echo gettext("Change account password");
            echo "</h2>
            <div class=\"block\">
                <p>";
            // line 152
            echo gettext("Change your FTP cPanel SSH password.");
            echo "</p>
                <form action=\"\" method=\"post\" id=\"change-password\">
                    <fieldset>
                        <legend>";
            // line 155
            echo gettext("Change account password");
            echo "</legend>
                        <p>
                            <label>";
            // line 157
            echo gettext("Password");
            echo ": </label>
                            <input type=\"password\" name=\"password\" value=\"";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "password"), "html", null, true);
            echo "\" required=\"required\">
                        </p>

                        <p>
                            <label>";
            // line 162
            echo gettext("Password Confirm");
            echo ": </label>
                            <input type=\"password\" name=\"password_confirm\" value=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "password_confirm"), "html", null, true);
            echo "\" required=\"required\">
                        </p>

                        <input type=\"hidden\" name=\"order_id\" value=\"";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\">
                        <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
            // line 167
            echo gettext("Change password");
            echo "\">
                    </fieldset>
                </form>
            </div>
        </div>

        <div class=\"tab_content box\" id=\"tab-change-username\">
            <h2>";
            // line 174
            echo gettext("Change username");
            echo "</h2>
            <div class=\"block\">
                <form action=\"\" method=\"post\" id=\"change-username\">
                    <fieldset>
                        <legend>";
            // line 178
            echo gettext("Change username");
            echo "</legend>
                        <p>
                            <label>";
            // line 180
            echo gettext("Username");
            echo ": </label>
                            <input type=\"text\" name=\"username\" value=\"";
            // line 181
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "username"), $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "username"))) : ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "username"))), "html", null, true);
            echo "\" required=\"required\">
                        </p>

                        <input type=\"hidden\" name=\"order_id\" value=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\">
                        <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
            // line 185
            echo gettext("Change");
            echo "\">
                    </fieldset>
                </form>
            </div>
        </div>

        <div class=\"tab_content box\" id=\"tab-change-domain\">
            <h2>";
            // line 192
            echo gettext("Change domain");
            echo "</h2>
            <div class=\"block\">
                <form action=\"\" method=\"post\" id=\"change-domain\">
                    <fieldset>
                        <legend>";
            // line 196
            echo gettext("Change domain");
            echo "</legend>
                        <p>
                            <label>";
            // line 198
            echo gettext("Domain");
            echo ": </label>
                            <input type=\"text\" name=\"sld\" value=\"";
            // line 199
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "domain"), $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "sld"))) : ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "sld"))), "html", null, true);
            echo "\" required=\"required\" style=\"width: 250px;\">
                            <input type=\"text\" name=\"tld\" value=\"";
            // line 200
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "domain"), $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "tld"))) : ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "tld"))), "html", null, true);
            echo "\" required=\"required\" style=\"width: 50px;\">
                        </p>

                        <input type=\"hidden\" name=\"order_id\" value=\"";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\">
                        <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
            // line 204
            echo gettext("Change");
            echo "\">
                    </fieldset>
                </form>
            </div>
        </div>

    </div>

    <div class=\"clear\"></div>
</div>

<script type=\"text/javascript\">
\$(function() {
    \$('#change-domain').bind('submit',function(event){
        bb.post(
            'client/servicehosting/change_domain',
            \$(this).serialize(),
            function(result) {
                bb.msg('Domain name was changed');
            }
        );
        return false;
    });

    \$('#change-username').bind('submit',function(event){
        bb.post(
            'client/servicehosting/change_username',
            \$(this).serialize(),
            function(result) {
                bb.msg('Account Username was changed');
            }
        );
        return false;
    });

    \$('#change-password').bind('submit',function(event){
        bb.post(
            'client/servicehosting/change_password',
            \$(this).serialize(),
            function(result) {
                bb.msg('Account Password was changed');
            }
        );
        return false;
    });

});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "mod_servicehosting_manage.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 204,  437 => 203,  423 => 198,  418 => 196,  411 => 192,  401 => 185,  397 => 184,  387 => 180,  382 => 178,  375 => 174,  365 => 167,  361 => 166,  355 => 163,  351 => 162,  344 => 158,  340 => 157,  335 => 155,  324 => 150,  308 => 137,  301 => 133,  297 => 132,  290 => 128,  286 => 127,  278 => 122,  259 => 111,  255 => 110,  247 => 107,  241 => 104,  234 => 102,  222 => 97,  215 => 93,  185 => 77,  183 => 76,  176 => 74,  173 => 73,  163 => 71,  161 => 70,  151 => 63,  139 => 59,  135 => 58,  128 => 54,  124 => 53,  116 => 48,  109 => 44,  105 => 43,  98 => 39,  87 => 34,  83 => 33,  73 => 28,  68 => 26,  63 => 23,  58 => 21,  53 => 19,  42 => 11,  34 => 9,  30 => 8,  19 => 2,  17 => 1,  619 => 296,  614 => 294,  605 => 287,  602 => 285,  597 => 255,  594 => 253,  589 => 251,  586 => 250,  584 => 249,  576 => 246,  573 => 245,  566 => 240,  555 => 237,  551 => 236,  543 => 235,  539 => 234,  535 => 233,  531 => 232,  526 => 231,  522 => 230,  513 => 224,  509 => 223,  505 => 222,  501 => 221,  497 => 220,  489 => 215,  485 => 213,  483 => 212,  481 => 211,  479 => 210,  469 => 203,  464 => 201,  455 => 197,  451 => 196,  444 => 192,  440 => 191,  431 => 200,  427 => 199,  420 => 182,  416 => 181,  406 => 174,  395 => 166,  391 => 181,  384 => 161,  380 => 160,  373 => 156,  369 => 155,  362 => 151,  358 => 150,  353 => 148,  345 => 143,  334 => 135,  329 => 152,  322 => 129,  318 => 128,  309 => 124,  305 => 123,  298 => 119,  294 => 118,  285 => 112,  273 => 120,  267 => 100,  265 => 114,  262 => 98,  252 => 109,  250 => 108,  246 => 94,  243 => 93,  237 => 103,  235 => 90,  232 => 101,  226 => 98,  224 => 86,  216 => 80,  211 => 92,  209 => 76,  203 => 87,  198 => 72,  195 => 71,  193 => 79,  190 => 69,  184 => 66,  180 => 65,  177 => 64,  175 => 63,  172 => 62,  162 => 59,  152 => 58,  149 => 57,  147 => 62,  137 => 53,  133 => 52,  126 => 48,  122 => 47,  115 => 43,  111 => 42,  107 => 40,  101 => 37,  97 => 36,  94 => 38,  92 => 34,  86 => 31,  82 => 30,  75 => 26,  71 => 25,  64 => 21,  60 => 22,  51 => 14,  47 => 13,  41 => 9,  38 => 10,  32 => 3,  27 => 6,  25 => 5,  23 => 4,);
    }
}
