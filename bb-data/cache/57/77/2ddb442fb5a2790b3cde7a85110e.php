<?php

/* partial_steps.phtml */
class __TwigTemplate_57772ddb442fb5a2790b3cde7a85110e extends Twig_Template
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
        echo "<div class=\"steps\">

<div class=\"grid_4 alpha";
        // line 3
        if (((isset($context["selected"]) ? $context["selected"] : null) == 1)) {
            echo " selected";
        }
        echo "\">
    <span>1</span>
    <p>";
        // line 5
        echo gettext("Select product");
        echo "</p>
</div>

<div class=\"grid_4";
        // line 8
        if (((isset($context["selected"]) ? $context["selected"] : null) == 2)) {
            echo " selected";
        }
        echo "\">
    <span>2</span>
    <p>";
        // line 10
        echo gettext("Configure");
        echo "</p>
</div>

<div class=\"grid_4";
        // line 13
        if (((isset($context["selected"]) ? $context["selected"] : null) == 3)) {
            echo " selected";
        }
        echo "\">
    <span>3</span>
    <p>";
        // line 15
        echo gettext("Confirm");
        echo "</p>
</div>

<div class=\"grid_4 omega";
        // line 18
        if (((isset($context["selected"]) ? $context["selected"] : null) == 4)) {
            echo " selected";
        }
        echo "\">
    <span>4</span>
    <p>";
        // line 20
        echo gettext("Checkout");
        echo "</p>
</div>

<div class=\"clear\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "partial_steps.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  60 => 18,  47 => 13,  34 => 8,  28 => 5,  21 => 3,  17 => 1,  337 => 115,  319 => 99,  316 => 97,  311 => 94,  308 => 93,  301 => 88,  284 => 84,  281 => 83,  261 => 77,  256 => 75,  253 => 74,  247 => 71,  244 => 70,  242 => 69,  238 => 67,  228 => 65,  222 => 62,  218 => 60,  212 => 59,  202 => 57,  199 => 56,  195 => 55,  186 => 52,  184 => 51,  180 => 50,  176 => 49,  164 => 46,  146 => 45,  137 => 43,  134 => 42,  132 => 41,  123 => 35,  119 => 34,  113 => 31,  109 => 30,  105 => 29,  102 => 28,  96 => 25,  93 => 24,  91 => 23,  81 => 21,  64 => 20,  58 => 17,  54 => 15,  48 => 12,  45 => 11,  41 => 10,  38 => 7,  32 => 3,  27 => 5,  25 => 2,);
    }
}
