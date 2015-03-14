<?php

/* layout_default.phtml */
class __TwigTemplate_0bd9374772053be3cb85f8c32bc37e40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'head' => array($this, 'block_head'),
            'content_wide' => array($this, 'block_content_wide'),
            'left_top' => array($this, 'block_left_top'),
            'nav' => array($this, 'block_nav'),
            'left_bottom' => array($this, 'block_left_bottom'),
            'before_content' => array($this, 'block_before_content'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        // line 2
        $context["profile"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "profile_get");
        // line 3
        $context["company"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_company");
        // line 4
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <title>";
        // line 7
        $this->displayBlock('meta_title', $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "name"), "html", null, true);
        echo "</title>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\" />
    
    ";
        // line 11
        $this->env->loadTemplate("partial_bb_meta.phtml")->display($context);
        // line 12
        echo "    
    ";
        // line 13
        $this->env->loadTemplate("partial_styles.phtml")->display($context);
        // line 14
        echo "    
    <script type=\"text/javascript\" src=\"js/jquery.min.js?v=";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_version"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"js/ui/jquery.alerts.js?v=";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_version"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"js/ui/jquery.tipsy.js?v=";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_version"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"js/jquery.collapsible.min.js?v=";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_version"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"js/forms/forms.js?v=";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_version"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"js/jquery.ToTop.js?v=";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_version"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"js/jquery.scrollTo-min.js?v=";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_version"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"js/jquery-ui.js?v=";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_version"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"js/bb-admin.js?v=";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_version"), "html", null, true);
        echo "\"></script>

    ";
        // line 25
        $this->displayBlock('head', $context, $blocks);
        // line 26
        echo "</head>

<body>

<div id=\"topNav\">
    <div class=\"fixed\">
        <div class=\"wrapper\">
            <div class=\"welcome\"><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("staff/profile"), "html", null, true);
        echo "\" title=\"\"><img src=\"";
        echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "email")), "html", null, true);
        echo "?size=20\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "name"), "html", null, true);
        echo "\" /></a><span>";
        echo gettext("Hi,");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "name"), "html", null, true);
        echo "!</span></div>
            <div class=\"userNav\">
                <ul>
                    <li class=\"loading\" style=\"display:none;\"><img src=\"images/loader.gif\" alt=\"\" /><span>";
        // line 36
        echo gettext("Loading ...");
        echo "</span></li>
                    <li class=\"dd\"><img src=\"images/icons/topnav/register.png\" alt=\"\" /><span>";
        // line 37
        echo gettext("New");
        echo "</span>
                        ";
        // line 38
        $this->env->loadTemplate("partial_menu_top.phtml")->display($context);
        // line 39
        echo "                    </li>
                    ";
        // line 40
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "system")), "method")) {
            // line 41
            echo "                    <li class=\"dd\"><img src=\"images/icons/topnav/settings.png\" alt=\"\" /><span>";
            echo gettext("Settings");
            echo "</span>
                        <ul class=\"menu_body\">
                            <li><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("system"), "html", null, true);
            echo "\" title=\"\">";
            echo gettext("All settings");
            echo "</a></li>
                            <li><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("theme"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_theme"), "code"), "html", null, true);
            echo "\" title=\"\">";
            echo gettext("Theme settings");
            echo "</a></li>
                        </ul>
                    </li>
                    ";
        }
        // line 48
        echo "                    <li><a href=\"http://www.boxbilling.com/docs";
        if ((isset($context["help_query"]) ? $context["help_query"] : null)) {
            echo "/search.html?q=";
            echo twig_escape_filter($this->env, (isset($context["help_query"]) ? $context["help_query"] : null), "html", null, true);
        }
        echo "\" title=\"\" target=\"_blank\"><img src=\"images/icons/topnav/help.png\" alt=\"\" /><span>";
        echo gettext("Help");
        echo "</span></a></li>
                    <li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("/"), "html", null, true);
        echo "\" title=\"\" target=\"_blank\"><img src=\"images/icons/topnav/mainWebsite.png\" alt=\"\"/><span>";
        echo gettext("Visit site");
        echo "</span></a></li>
                    <li><a href=\"admin/profile/logout\" title=\"\" class=\"api-link\" data-api-redirect=\"staff/login\"><img src=\"images/icons/topnav/logout.png\" alt=\"\" /><span>";
        // line 50
        echo gettext("Logout");
        echo "</span></a></li>
                </ul>
            </div>
            <div class=\"fix\"></div>
        </div>
    </div>
</div>

<div id=\"header\" class=\"wrapper\">
    <div class=\"logo\"><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("system"), "html", null, true);
        echo "\" title=\"\"><img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "logo_url"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "name"), "html", null, true);
        echo "\" style=\"max-height: 50px;\"/></a></div>
    <div class=\"middleNav\">
        
    \t<ul>
            ";
        // line 63
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "notification")), "method") && $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "notification")), "method"))) {
            // line 64
            echo "            ";
            $context["count_notifications"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "notification_get_list", array(0 => array("per_page" => 1)), "method"), "total");
            // line 65
            echo "        \t<li class=\"iMegaphone\"><a href=\"";
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("notification"), "html", null, true);
            echo "\" title=\"\"><span>";
            echo gettext("Notifications");
            echo "</span></a>";
            if ((isset($context["count_notifications"]) ? $context["count_notifications"] : null)) {
                echo "<span class=\"numberMiddle\">";
                echo twig_escape_filter($this->env, (isset($context["count_notifications"]) ? $context["count_notifications"] : null), "html", null, true);
                echo "</span>";
            }
            echo "</li>
            ";
        }
        // line 67
        echo "            
            ";
        // line 68
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "order")), "method")) {
            // line 69
            echo "            ";
            $context["count_orders"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "order_get_statuses"), "failed_setup");
            // line 70
            echo "        \t<li class=\"iOrders\"><a href=\"";
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("order"), "html", null, true);
            echo "?status=failed_setup\" title=\"\"><span>";
            echo gettext("Orders");
            echo "</span></a>";
            if ((isset($context["count_orders"]) ? $context["count_orders"] : null)) {
                echo "<span class=\"numberMiddle\">";
                echo twig_escape_filter($this->env, (isset($context["count_orders"]) ? $context["count_orders"] : null), "html", null, true);
                echo "</span>";
            }
            echo "</li>
            ";
        }
        // line 72
        echo "            
            ";
        // line 73
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "invoice")), "method")) {
            // line 74
            echo "            ";
            $context["count_invoices"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_get_statuses"), "unpaid");
            // line 75
            echo "        \t<li class=\"iInvoices\"><a href=\"";
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("invoice"), "html", null, true);
            echo "?status=unpaid\" title=\"\"><span>";
            echo gettext("Invoices");
            echo "</span></a>";
            if ((isset($context["count_invoices"]) ? $context["count_invoices"] : null)) {
                echo "<span class=\"numberMiddle\">";
                echo twig_escape_filter($this->env, (isset($context["count_invoices"]) ? $context["count_invoices"] : null), "html", null, true);
                echo "</span>";
            }
            echo "</li>
            ";
        }
        // line 77
        echo "            
            ";
        // line 78
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "support")), "method")) {
            // line 79
            echo "            ";
            $context["count_tickets"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_ticket_get_statuses"), "open");
            // line 80
            echo "            ";
            $context["count_ptickets"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_public_ticket_get_statuses"), "open");
            // line 81
            echo "        \t<li class=\"iSpeech\"><a href=\"";
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("support/public-tickets"), "html", null, true);
            echo "?status=open\" title=\"\"><span>";
            echo gettext("Inquiries");
            echo "</span></a>";
            if ((isset($context["count_ptickets"]) ? $context["count_ptickets"] : null)) {
                echo "<span class=\"numberMiddle\">";
                echo twig_escape_filter($this->env, (isset($context["count_ptickets"]) ? $context["count_ptickets"] : null), "html", null, true);
                echo "</span>";
            }
            echo "</li>
        \t<li class=\"iMes\"><a href=\"";
            // line 82
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("support"), "html", null, true);
            echo "?status=open\" title=\"\"><span>";
            echo gettext("Tickets");
            echo "</span></a>";
            if ((isset($context["count_tickets"]) ? $context["count_tickets"] : null)) {
                echo "<span class=\"numberMiddle\">";
                echo twig_escape_filter($this->env, (isset($context["count_tickets"]) ? $context["count_tickets"] : null), "html", null, true);
                echo "</span>";
            }
            echo "</li>
            ";
        }
        // line 84
        echo "            
            ";
        // line 85
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "client")), "method")) {
            // line 86
            echo "            <li class=\"iUser\"><a href=\"";
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client"), "html", null, true);
            echo "\" title=\"\"><span>";
            echo gettext("Clients");
            echo "</span></a></li>
            ";
        }
        // line 88
        echo "            
        \t<li class=\"iHome\"><a href=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("index"), "html", null, true);
        echo "\" title=\"\"><span>";
        echo gettext("Dashboard");
        echo "</span></a></li>
        </ul>
    </div>
    <div class=\"fix\"></div>
</div>


<div class=\"wrapper\">
    
    ";
        // line 98
        if ((isset($context["hide_menu"]) ? $context["hide_menu"] : null)) {
            // line 99
            echo "    
    ";
            // line 100
            $this->displayBlock('content_wide', $context, $blocks);
            // line 101
            echo "    
    ";
        } else {
            // line 103
            echo "    <div class=\"leftNav\">
    ";
            // line 104
            $this->displayBlock('left_top', $context, $blocks);
            echo "    
    ";
            // line 105
            $this->displayBlock('nav', $context, $blocks);
            // line 106
            echo "    ";
            $this->displayBlock('left_bottom', $context, $blocks);
            // line 107
            echo "    </div>
    
    ";
            // line 109
            $this->displayBlock('before_content', $context, $blocks);
            // line 110
            echo "    <div class=\"content\">

        <div class=\"breadCrumbHolder module\">
            <div class=\"breadCrumb module\">
                ";
            // line 114
            $this->displayBlock('breadcrumbs', $context, $blocks);
            // line 120
            echo "            </div>
        </div>

        ";
            // line 123
            $this->displayBlock('top_content', $context, $blocks);
            // line 124
            echo "        ";
            $this->displayBlock('content', $context, $blocks);
            // line 125
            echo "    </div>
    ";
        }
        // line 127
        echo "    <div class=\"fix\"></div>
</div>

<div id=\"footer\">
\t<div class=\"wrapper\">
        ";
        // line 132
        $this->env->loadTemplate("partial_footer.phtml")->display(array_merge($context, array("product" => (isset($context["product"]) ? $context["product"] : null))));
        // line 133
        echo "    </div>
</div>
<div class=\"loading dim\"></div>    
    ";
        // line 136
        $this->displayBlock('js', $context, $blocks);
        // line 137
        echo "    <noscript id=\"noscript\">
        <div class=\"msg error\">
        NOTE: Many features on BoxBilling require Javascript and cookies. You can enable both via your browser's preference settings.
        </div>
    </noscript>
</body>
</html>";
    }

    // line 7
    public function block_meta_title($context, array $blocks = array())
    {
    }

    // line 25
    public function block_head($context, array $blocks = array())
    {
    }

    // line 100
    public function block_content_wide($context, array $blocks = array())
    {
    }

    // line 104
    public function block_left_top($context, array $blocks = array())
    {
    }

    // line 105
    public function block_nav($context, array $blocks = array())
    {
        $this->env->loadTemplate("partial_menu.phtml")->display($context);
    }

    // line 106
    public function block_left_bottom($context, array $blocks = array())
    {
    }

    // line 109
    public function block_before_content($context, array $blocks = array())
    {
    }

    // line 114
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 115
        echo "                <ul>
                    <li class=\"firstB\"><a href=\"";
        // line 116
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/"), "html", null, true);
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
                    <li class=\"lastB\">";
        // line 117
        $this->displayBlock("meta_title", $context, $blocks);
        echo "</li>
                </ul>
                ";
    }

    // line 123
    public function block_top_content($context, array $blocks = array())
    {
    }

    // line 124
    public function block_content($context, array $blocks = array())
    {
    }

    // line 136
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout_default.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 124,  459 => 123,  452 => 117,  446 => 116,  435 => 109,  430 => 106,  424 => 105,  414 => 100,  409 => 25,  394 => 137,  387 => 133,  385 => 132,  378 => 127,  374 => 125,  371 => 124,  369 => 123,  364 => 120,  362 => 114,  356 => 110,  354 => 109,  350 => 107,  347 => 106,  345 => 105,  341 => 104,  338 => 103,  334 => 101,  332 => 100,  329 => 99,  327 => 98,  313 => 89,  310 => 88,  302 => 86,  297 => 84,  271 => 81,  268 => 80,  263 => 78,  260 => 77,  243 => 74,  238 => 72,  224 => 70,  221 => 69,  219 => 68,  216 => 67,  202 => 65,  199 => 64,  197 => 63,  186 => 59,  174 => 50,  168 => 49,  158 => 48,  141 => 43,  133 => 40,  130 => 39,  128 => 38,  124 => 37,  120 => 36,  106 => 33,  95 => 25,  86 => 22,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  58 => 15,  55 => 14,  53 => 13,  48 => 11,  39 => 7,  34 => 4,  30 => 2,  28 => 1,  646 => 135,  636 => 127,  625 => 126,  607 => 122,  602 => 121,  597 => 118,  586 => 117,  572 => 114,  561 => 113,  540 => 111,  527 => 108,  524 => 107,  521 => 106,  518 => 105,  515 => 104,  512 => 103,  509 => 102,  506 => 101,  503 => 100,  500 => 99,  497 => 98,  494 => 97,  492 => 96,  489 => 95,  487 => 94,  484 => 93,  481 => 92,  478 => 91,  475 => 90,  472 => 89,  469 => 136,  457 => 87,  443 => 115,  440 => 114,  437 => 82,  434 => 81,  431 => 80,  428 => 79,  425 => 78,  422 => 77,  419 => 104,  416 => 75,  413 => 74,  410 => 73,  407 => 72,  404 => 7,  392 => 136,  376 => 66,  363 => 62,  351 => 60,  340 => 56,  328 => 54,  323 => 51,  304 => 49,  300 => 85,  290 => 46,  284 => 82,  269 => 40,  265 => 79,  261 => 38,  251 => 36,  249 => 35,  246 => 75,  241 => 73,  229 => 32,  209 => 26,  195 => 22,  183 => 19,  166 => 17,  162 => 16,  153 => 15,  127 => 11,  110 => 9,  99 => 7,  90 => 23,  75 => 5,  60 => 2,  49 => 1,  44 => 125,  41 => 116,  38 => 112,  35 => 110,  32 => 3,  29 => 69,  23 => 21,  20 => 13,  17 => 4,  208 => 63,  204 => 23,  200 => 60,  194 => 57,  190 => 56,  187 => 55,  185 => 54,  179 => 51,  175 => 50,  169 => 47,  165 => 46,  160 => 43,  157 => 42,  155 => 41,  147 => 44,  143 => 37,  139 => 14,  135 => 41,  126 => 28,  105 => 8,  97 => 26,  87 => 23,  82 => 21,  65 => 21,  59 => 18,  50 => 12,  46 => 11,  40 => 7,  37 => 6,  31 => 3,  26 => 31,  24 => 4,  22 => 2,);
    }
}
