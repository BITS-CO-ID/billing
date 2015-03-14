<?php

/* mod_servicedomain_config.phtml */
class __TwigTemplate_034c48ecd08f3110129382199bd9ff0f extends Twig_Template
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
        echo "<div class=\"help\">
    <h5>";
        // line 2
        echo gettext("Domains management");
        echo "</h5>
</div>

<div class=\"body\">
    <div class=\"aligncenter\">
        <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("servicedomain"), "html", null, true);
        echo "\" title=\"\" class=\"btn55 mr10\"><img src=\"images/icons/middlenav/pencil.png\" alt=\"\"><span>Management</span></a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "mod_servicedomain_config.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 7,  20 => 2,  310 => 127,  270 => 92,  265 => 90,  261 => 89,  257 => 88,  243 => 82,  239 => 81,  235 => 80,  226 => 76,  221 => 74,  217 => 73,  213 => 72,  204 => 68,  199 => 66,  195 => 65,  191 => 64,  177 => 58,  173 => 57,  169 => 56,  160 => 52,  151 => 49,  147 => 48,  138 => 44,  133 => 42,  129 => 41,  125 => 40,  118 => 36,  114 => 35,  108 => 34,  102 => 33,  94 => 30,  85 => 24,  81 => 23,  77 => 22,  70 => 18,  64 => 17,  58 => 16,  39 => 7,  33 => 6,  22 => 3,  19 => 2,  17 => 1,  553 => 230,  548 => 227,  545 => 226,  539 => 224,  523 => 212,  510 => 204,  505 => 202,  494 => 196,  489 => 194,  480 => 188,  475 => 186,  468 => 182,  460 => 176,  454 => 173,  451 => 172,  448 => 171,  444 => 170,  441 => 169,  439 => 168,  432 => 164,  425 => 160,  421 => 159,  415 => 155,  400 => 153,  396 => 152,  392 => 151,  389 => 150,  387 => 149,  382 => 147,  375 => 143,  364 => 135,  356 => 130,  350 => 126,  341 => 123,  338 => 122,  320 => 119,  314 => 118,  303 => 116,  299 => 115,  291 => 113,  273 => 112,  263 => 107,  253 => 100,  248 => 84,  244 => 97,  238 => 93,  236 => 92,  228 => 87,  223 => 85,  215 => 80,  210 => 78,  202 => 73,  198 => 72,  193 => 70,  182 => 60,  176 => 63,  170 => 62,  165 => 60,  155 => 50,  149 => 54,  144 => 52,  134 => 47,  128 => 46,  123 => 44,  115 => 39,  110 => 37,  100 => 32,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  66 => 15,  63 => 14,  56 => 10,  50 => 13,  44 => 8,  41 => 7,  38 => 6,  32 => 3,  27 => 5,);
    }
}
