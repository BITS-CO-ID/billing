<?php

/* mod_servicehosting_manage.phtml */
class __TwigTemplate_2e6cde31391e7c486307a0e8f635c8d9 extends Twig_Template
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
        $context["server"] = $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "server");
        // line 2
        $context["hp"] = $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "hosting_plan");
        // line 3
        echo "
<div class=\"help\">
    <h2>";
        // line 5
        echo gettext("Details");
        echo "</h2>
</div>
<table class=\"tableStatic wide\">
    <tbody>
        <tr class=\"noborder\">
            <td style=\"width: 30%;\">";
        // line 10
        echo gettext("Status");
        echo ":</td>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "status_name", array(0 => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status")), "method"), "html", null, true);
        echo "</td>
        </tr>

        <tr>
            <td>";
        // line 15
        echo gettext("Domain");
        echo ":</td>
            <td>
                <a target=\"_blank\" href=\"http://";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "domain"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "domain"), "html", null, true);
        echo "</a>
            </td>
        </tr>

        <tr>
            <td>";
        // line 22
        echo gettext("Server Name");
        echo ":</td>
            <td><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("servicehosting/server"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "name"), "html", null, true);
        echo "</a></td>
        </tr>

        <tr>
            <td>";
        // line 27
        echo gettext("Hosting plan");
        echo ":</td>
            <td><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("servicehosting/plan"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "name"), "html", null, true);
        echo "</a></td>
        </tr>

        <tr>
            <td>";
        // line 32
        echo gettext("Server IP");
        echo ":</td>
            <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "ip"), "html", null, true);
        echo "</td>
        </tr>

        <tr>
            <td>";
        // line 37
        echo gettext("Account IP");
        echo ":</td>
            <td><div id=\"editable-ip\" class=\"editable\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "ip"), "html", null, true);
        echo "</div></td>
        </tr>

        <tr>
            <td>";
        // line 42
        echo gettext("Username");
        echo ":</td>
            <td><div id=\"editable-username\" class=\"editable\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "username"), "html", null, true);
        echo "</div></td>
        </tr>

        <tr>
            <td>";
        // line 47
        echo gettext("Nameserver 1");
        echo ":</td>
            <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "ns1"), "html", null, true);
        echo "</td>
        </tr>

        <tr>
            <td>";
        // line 52
        echo gettext("Nameserver 2");
        echo ":</td>
            <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "ns2"), "html", null, true);
        echo "</td>
        </tr>

        ";
        // line 56
        if ($this->getAttribute((isset($context["server"]) ? $context["server"] : null), "ns3")) {
            // line 57
            echo "        <tr>
            <td>";
            // line 58
            echo gettext("Nameserver 3");
            echo ":</td>
            <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "ns3"), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        // line 62
        echo "
        ";
        // line 63
        if ($this->getAttribute((isset($context["server"]) ? $context["server"] : null), "ns4")) {
            // line 64
            echo "        <tr>
            <td>";
            // line 65
            echo gettext("Nameserver 4");
            echo ":</td>
            <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "ns4"), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        // line 69
        echo "
        <tr>
            <td>";
        // line 71
        echo gettext("Bandwidth");
        echo ":</td>
            <td>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "bandwidth"), "html", null, true);
        echo " MB / ";
        echo gettext("per month");
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 75
        echo gettext("Disk quota");
        echo ":</td>
            <td>";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "quota"), "html", null, true);
        echo " MB</td>
        </tr>

    </tbody>
    <tfoot>
        <tr>
            <td colspan=\"2\">
                <div class=\"aligncenter\">
                    ";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["order_actions"]) ? $context["order_actions"] : null), "html", null, true);
        echo "
                    <a class=\"btn55 mr10\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "cpanel_url"), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"images/icons/middlenav/linux.png\" alt=\"\"><span>";
        echo gettext("Jump to cPanel");
        echo "</span></a>
                    ";
        // line 86
        if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "reseller")) {
            // line 87
            echo "                    <a class=\"btn55 mr10\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "reseller_cpanel_url"), "html", null, true);
            echo "\" target=\"_blank\"><img src=\"images/icons/middlenav/linux.png\" alt=\"\"><span>";
            echo gettext("Reseller control panel");
            echo "</span></a>
                    ";
        }
        // line 89
        echo "
                    <a href=\"admin/servicehosting/sync?order_id=";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo "\" data-api-confirm=\"Are you sure?\" data-api-msg=\"Account was synced\" class=\"btn55 mr10 api-link\"><img src=\"images/icons/middlenav/transfer.png\" alt=\"\"><span>Sync with server</span></a>
                </div>
            </td>
        </tr>
    </tfoot>
</table>

<div class=\"help\">
    <h2>";
        // line 98
        echo gettext("Change hosting plan");
        echo "</h2>
</div>

<form action=\"admin/servicehosting/change_plan\" method=\"post\" class=\"mainForm api-form save\" data-api-msg=\"";
        // line 101
        echo gettext("Hosting plan changed");
        echo "\">
<fieldset>
    <div class=\"rowElem noborder\">
        <label>";
        // line 104
        echo gettext("New hosting plan");
        echo ":</label>
        <div class=\"formRight\">
            ";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "plan_id", 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "servicehosting_hp_get_pairs"), 2 => $this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "id"), 3 => 1), "method"), "html", null, true);
        echo "
        </div>
        <div class=\"fix\"></div>
    </div>

    <input type=\"hidden\" name=\"order_id\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo "\">
    <input type=\"submit\" value=\"";
        // line 112
        echo gettext("Change");
        echo "\" class=\"greyishBtn submitForm\" />
</fieldset>
</form>

<div class=\"help\">
    <h2>";
        // line 117
        echo gettext("Change account password");
        echo "</h2>
</div>

<form action=\"admin/servicehosting/change_password\" method=\"post\" class=\"mainForm api-form save\" data-api-msg=\"";
        // line 120
        echo gettext("Account password changed");
        echo "\">
<fieldset>
    <div class=\"rowElem noborder\">
        <label>";
        // line 123
        echo gettext("Password");
        echo ":</label>
        <div class=\"formRight\">
            <input type=\"password\" name=\"password\" required=\"required\"/>
        </div>
        <div class=\"fix\"></div>
    </div>
    <div class=\"rowElem\">
        <label>";
        // line 130
        echo gettext("Password Confirm");
        echo ":</label>
        <div class=\"formRight\">
            <input type=\"password\" name=\"password_confirm\"  required=\"required\"/>
        </div>
        <div class=\"fix\"></div>
    </div>

    <input type=\"hidden\" name=\"order_id\" value=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo "\">
    <input type=\"submit\" value=\"";
        // line 138
        echo gettext("Change");
        echo "\" class=\"greyishBtn submitForm\" />
</fieldset>
</form>

<div class=\"help\">
    <h2>";
        // line 143
        echo gettext("Change IP");
        echo "</h2>
</div>

<form method=\"post\" action=\"admin/servicehosting/change_ip\" class=\"mainForm api-form save\" data-api-msg=\"";
        // line 146
        echo gettext("Account IP changed");
        echo "\">
<fieldset>
    <div class=\"rowElem\">
        <label>";
        // line 149
        echo gettext("IP");
        echo ": </label>
        <div class=\"formRight\">
            <input type=\"text\" name=\"ip\" value=\"";
        // line 151
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ip", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ip"), $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "ip"))) : ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "ip"))), "html", null, true);
        echo "\" required=\"required\">
        </div>
        <div class=\"fix\"></div>
    </div>

    <input type=\"hidden\" name=\"order_id\" value=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo "\">
    <input class=\"greyishBtn submitForm\" type=\"submit\" value=\"";
        // line 157
        echo gettext("Change");
        echo "\">
</fieldset>
</form>

<div class=\"help\">
    <h2>";
        // line 162
        echo gettext("Change username");
        echo "</h2>
</div>

<form method=\"post\" action=\"admin/servicehosting/change_username\" class=\"mainForm api-form save\" data-api-msg=\"";
        // line 165
        echo gettext("Account username changed");
        echo "\">
<fieldset>
    <div class=\"rowElem\">
        <label>";
        // line 168
        echo gettext("Username");
        echo ": </label>
        <div class=\"formRight\">
            <input type=\"text\" name=\"username\" value=\"";
        // line 170
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "username"), $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "username"))) : ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "username"))), "html", null, true);
        echo "\" required=\"required\">
        </div>
        <div class=\"fix\"></div>
    </div>

    <input type=\"hidden\" name=\"order_id\" value=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo "\">
    <input class=\"greyishBtn submitForm\" type=\"submit\" value=\"";
        // line 176
        echo gettext("Change");
        echo "\">
</fieldset>
</form>

<div class=\"help\">
    <h2>";
        // line 181
        echo gettext("Change domain");
        echo "</h2>
</div>
<form method=\"post\" action=\"admin/servicehosting/change_domain\" class=\"mainForm api-form save\" data-api-msg=\"";
        // line 183
        echo gettext("Account domain changed");
        echo "\">
<fieldset>
    <div class=\"rowElem\">
        <label>";
        // line 186
        echo gettext("Domain");
        echo ": </label>
        <div class=\"formRight moreFields\">
            <ul>
                <li style=\"width: 200px\"><input type=\"text\" name=\"sld\" value=\"";
        // line 189
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "domain"), $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "sld"))) : ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "sld"))), "html", null, true);
        echo "\" required=\"required\"></li>
                <li class=\"sep\">-</li>
                <li style=\"width: 100px\"><input type=\"text\" name=\"tld\" value=\"";
        // line 191
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "domain"), $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "tld"))) : ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "tld"))), "html", null, true);
        echo "\" required=\"required\"></li>
            </ul>
        </div>

        <div class=\"fix\"></div>
    </div>

    <input type=\"hidden\" name=\"order_id\" value=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo "\">
    <input class=\"greyishBtn submitForm\" type=\"submit\" value=\"";
        // line 199
        echo gettext("Change");
        echo "\">
</fieldset>
</form>

<script type=\"text/javascript\" src=\"js/jquery.jeditable.min.js\"></script>

<script type=\"text/javascript\">
\$(function() {
    \$('#editable-username').editable(function(value, settings) {
        api.post(
            'admin/servicehosting/update',
            {order_id:";
        // line 210
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo ", username: value},
            function(){
            bb.msg('Username updated');
         });
    });
    \$('#editable-ip').editable(function(value, settings) {
        api.post(
            'admin/servicehosting/update',
            {order_id:";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo ", ip: value},
            function(){
            bb.msg('IP updated');
         });
    });
});
</script>";
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
        return array (  457 => 218,  446 => 210,  432 => 199,  428 => 198,  413 => 189,  407 => 186,  401 => 183,  388 => 176,  384 => 175,  376 => 170,  365 => 165,  359 => 162,  351 => 157,  339 => 151,  334 => 149,  328 => 146,  322 => 143,  314 => 138,  300 => 130,  290 => 123,  284 => 120,  278 => 117,  258 => 106,  253 => 104,  247 => 101,  241 => 98,  230 => 90,  227 => 89,  219 => 87,  211 => 85,  207 => 84,  196 => 76,  192 => 75,  184 => 72,  180 => 71,  176 => 69,  170 => 66,  166 => 65,  163 => 64,  161 => 63,  158 => 62,  152 => 59,  148 => 58,  145 => 57,  143 => 56,  137 => 53,  133 => 52,  126 => 48,  122 => 47,  115 => 43,  111 => 42,  104 => 38,  100 => 37,  93 => 33,  89 => 32,  78 => 28,  74 => 27,  63 => 23,  59 => 22,  44 => 15,  33 => 10,  21 => 3,  19 => 2,  17 => 1,  947 => 431,  938 => 428,  935 => 427,  925 => 424,  921 => 423,  917 => 422,  913 => 421,  909 => 420,  906 => 419,  900 => 418,  898 => 417,  889 => 411,  885 => 410,  881 => 409,  872 => 403,  864 => 397,  854 => 393,  849 => 391,  845 => 390,  841 => 389,  838 => 388,  833 => 387,  831 => 386,  824 => 382,  820 => 381,  816 => 380,  812 => 379,  804 => 374,  796 => 368,  787 => 365,  784 => 364,  774 => 361,  770 => 360,  762 => 359,  758 => 358,  754 => 357,  750 => 356,  747 => 355,  741 => 354,  739 => 353,  730 => 347,  726 => 346,  722 => 345,  718 => 344,  708 => 337,  702 => 333,  699 => 332,  695 => 331,  692 => 330,  690 => 329,  683 => 324,  672 => 321,  668 => 320,  660 => 319,  656 => 318,  652 => 317,  648 => 316,  645 => 315,  641 => 314,  632 => 308,  628 => 307,  624 => 306,  620 => 305,  616 => 304,  608 => 299,  602 => 295,  599 => 271,  597 => 270,  591 => 249,  586 => 247,  578 => 242,  573 => 240,  564 => 234,  559 => 232,  550 => 226,  545 => 224,  534 => 218,  529 => 216,  520 => 210,  515 => 208,  506 => 202,  501 => 200,  492 => 194,  487 => 192,  478 => 186,  473 => 184,  464 => 178,  459 => 176,  450 => 170,  445 => 168,  424 => 150,  421 => 149,  418 => 191,  412 => 146,  410 => 145,  405 => 143,  402 => 142,  396 => 181,  394 => 139,  391 => 138,  385 => 136,  383 => 135,  380 => 134,  371 => 168,  363 => 131,  358 => 130,  356 => 129,  353 => 128,  347 => 156,  345 => 125,  342 => 124,  340 => 123,  331 => 116,  320 => 112,  315 => 110,  312 => 109,  310 => 137,  307 => 107,  299 => 103,  297 => 102,  292 => 100,  289 => 99,  287 => 98,  281 => 95,  277 => 94,  270 => 112,  266 => 111,  255 => 85,  245 => 84,  233 => 80,  224 => 79,  217 => 86,  213 => 74,  206 => 70,  202 => 69,  183 => 65,  179 => 64,  168 => 60,  164 => 59,  151 => 55,  147 => 54,  138 => 50,  134 => 49,  124 => 42,  114 => 35,  109 => 34,  103 => 33,  98 => 32,  92 => 31,  88 => 30,  84 => 29,  77 => 25,  71 => 21,  68 => 20,  61 => 9,  55 => 8,  49 => 17,  46 => 6,  43 => 5,  37 => 11,  31 => 17,  29 => 16,  27 => 15,  25 => 5,  23 => 2,);
    }
}
