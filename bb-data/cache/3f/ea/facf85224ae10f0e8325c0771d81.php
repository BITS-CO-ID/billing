<?php

/* partial_currency.phtml */
class __TwigTemplate_3feafacf85224ae10f0e8325c0771d81 extends Twig_Template
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
        $context["currencies"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "currency_get_pairs");
        // line 2
        if ((twig_length_filter($this->env, (isset($context["currencies"]) ? $context["currencies"] : null)) > 1)) {
            // line 3
            echo "<div class=\"widget\">
    <div class=\"head\">
        <h2 class=\"dark-icon i-payment\">";
            // line 5
            echo gettext("Select currency");
            echo "</h2>
    </div>
    <div class=\"block\">
        <select name=\"currency\" class=\"currency_selector\">
        ";
            // line 9
            $context["selected"] = $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "cart_get_currency"), "code");
            // line 10
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["code"] => $context["title"]) {
                // line 11
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
                echo "\" class=\"currency_";
                echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
                echo "\"";
                if (((isset($context["code"]) ? $context["code"] : null) == (isset($context["selected"]) ? $context["selected"] : null))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 13
            echo "        </select>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partial_currency.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 11,  19 => 2,  67 => 20,  60 => 18,  47 => 13,  34 => 10,  28 => 5,  21 => 3,  17 => 1,  337 => 115,  319 => 99,  316 => 97,  311 => 94,  308 => 93,  301 => 88,  284 => 84,  281 => 83,  261 => 77,  256 => 75,  253 => 74,  247 => 71,  244 => 70,  242 => 69,  238 => 67,  228 => 65,  222 => 62,  218 => 60,  212 => 59,  202 => 57,  199 => 56,  195 => 55,  186 => 52,  184 => 51,  180 => 50,  176 => 49,  164 => 46,  146 => 45,  137 => 43,  134 => 42,  132 => 41,  123 => 35,  119 => 34,  113 => 31,  109 => 30,  105 => 29,  102 => 28,  96 => 25,  93 => 24,  91 => 23,  81 => 21,  64 => 20,  58 => 13,  54 => 15,  48 => 12,  45 => 11,  41 => 10,  38 => 7,  32 => 9,  27 => 5,  25 => 5,);
    }
}
