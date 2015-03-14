<?php

/* partial_menu_top.phtml */
class __TwigTemplate_f20e4585507d85e7cc03f44d77a85094 extends Twig_Template
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
        echo "                        <ul class=\"menu_body\">
                            ";
        // line 2
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "order")), "method")) {
            // line 3
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("order#tab-new"), "html", null, true);
            echo "\" title=\"\">";
            echo gettext("Order");
            echo "</a></li>
                            ";
        }
        // line 5
        echo "                            
                            ";
        // line 6
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "invoice")), "method")) {
            // line 7
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("invoice#tab-new"), "html", null, true);
            echo "\" title=\"\">";
            echo gettext("Invoice");
            echo "</a></li>
                            ";
        }
        // line 9
        echo "                            
                            ";
        // line 10
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "client")), "method")) {
            // line 11
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client#tab-new"), "html", null, true);
            echo "\" title=\"\">";
            echo gettext("Client");
            echo "</a></li>
                            ";
        }
        // line 13
        echo "                            
                            ";
        // line 14
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "product")), "method")) {
            // line 15
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("product#tab-new"), "html", null, true);
            echo "\" title=\"\">";
            echo gettext("Product");
            echo "</a></li>
                            ";
        }
        // line 17
        echo "                            
                            ";
        // line 18
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "support")), "method")) {
            // line 19
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("support#tab-new"), "html", null, true);
            echo "\" title=\"\">";
            echo gettext("Support ticket");
            echo "</a></li>
                            ";
        }
        // line 21
        echo "                            
                            ";
        // line 22
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "staff")), "method")) {
            // line 23
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("staff#tab-new"), "html", null, true);
            echo "\" title=\"\">";
            echo gettext("Staff member");
            echo "</a></li>
                            ";
        }
        // line 25
        echo "                            
                            ";
        // line 26
        if (($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "news")), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "news")), "method"))) {
            // line 27
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("news#tab-new"), "html", null, true);
            echo "\" title=\"\">";
            echo gettext("Announcement");
            echo "</a></li>
                            ";
        }
        // line 29
        echo "                            
                            ";
        // line 30
        if (($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "forum")), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "forum")), "method"))) {
            // line 31
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("forum#tab-new"), "html", null, true);
            echo "\" title=\"\">";
            echo gettext("Forum topic");
            echo "</a></li>
                            ";
        }
        // line 33
        echo "                        </ul>";
    }

    public function getTemplateName()
    {
        return "partial_menu_top.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 33,  113 => 31,  111 => 30,  108 => 29,  100 => 27,  98 => 26,  85 => 22,  72 => 18,  69 => 17,  61 => 15,  56 => 13,  43 => 9,  33 => 6,  464 => 124,  459 => 123,  452 => 117,  446 => 116,  435 => 109,  430 => 106,  424 => 105,  414 => 100,  409 => 25,  394 => 137,  387 => 133,  385 => 132,  378 => 127,  374 => 125,  371 => 124,  369 => 123,  364 => 120,  362 => 114,  356 => 110,  354 => 109,  350 => 107,  347 => 106,  345 => 105,  341 => 104,  338 => 103,  334 => 101,  332 => 100,  329 => 99,  327 => 98,  313 => 89,  310 => 88,  302 => 86,  297 => 84,  271 => 81,  268 => 80,  263 => 78,  260 => 77,  243 => 74,  238 => 72,  224 => 70,  221 => 69,  219 => 68,  216 => 67,  202 => 65,  199 => 64,  197 => 63,  186 => 59,  174 => 50,  168 => 49,  158 => 48,  141 => 43,  133 => 40,  130 => 39,  128 => 38,  124 => 37,  120 => 36,  106 => 33,  95 => 25,  86 => 22,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  58 => 15,  55 => 14,  53 => 13,  48 => 11,  39 => 7,  34 => 4,  30 => 5,  28 => 4,  646 => 135,  636 => 127,  625 => 126,  607 => 122,  602 => 121,  597 => 118,  586 => 117,  572 => 114,  561 => 113,  540 => 111,  527 => 108,  524 => 107,  521 => 106,  518 => 105,  515 => 104,  512 => 103,  509 => 102,  506 => 101,  503 => 100,  500 => 99,  497 => 98,  494 => 97,  492 => 96,  489 => 95,  487 => 94,  484 => 93,  481 => 92,  478 => 91,  475 => 90,  472 => 89,  469 => 136,  457 => 87,  443 => 115,  440 => 114,  437 => 82,  434 => 81,  431 => 80,  428 => 79,  425 => 78,  422 => 77,  419 => 104,  416 => 75,  413 => 74,  410 => 73,  407 => 72,  404 => 7,  392 => 136,  376 => 66,  363 => 62,  351 => 60,  340 => 56,  328 => 54,  323 => 51,  304 => 49,  300 => 85,  290 => 46,  284 => 82,  269 => 40,  265 => 79,  261 => 38,  251 => 36,  249 => 35,  246 => 75,  241 => 73,  229 => 32,  209 => 26,  195 => 22,  183 => 19,  166 => 17,  162 => 16,  153 => 15,  127 => 11,  110 => 9,  99 => 7,  90 => 23,  75 => 5,  60 => 2,  49 => 1,  44 => 125,  41 => 116,  38 => 112,  35 => 7,  32 => 3,  29 => 69,  23 => 21,  20 => 2,  17 => 1,  208 => 63,  204 => 23,  200 => 60,  194 => 57,  190 => 56,  187 => 55,  185 => 54,  179 => 51,  175 => 50,  169 => 47,  165 => 46,  160 => 43,  157 => 42,  155 => 41,  147 => 44,  143 => 37,  139 => 14,  135 => 41,  126 => 28,  105 => 8,  97 => 26,  87 => 23,  82 => 21,  65 => 21,  59 => 14,  50 => 12,  46 => 10,  40 => 7,  37 => 6,  31 => 3,  26 => 3,  24 => 3,  22 => 3,);
    }
}
