<?php

/* partial_message.phtml */
class __TwigTemplate_5614ae97c162dcdd1abc3a7d631143df extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["flashes"]) ? $context["flashes"] : null));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 2
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 3
                echo "        <div class=\"h-block ";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "\">
            <h2>";
                // line 4
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "</h2>
            <p>";
                // line 5
                echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : null), "html", null, true);
                echo "</p>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "partial_message.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  587 => 131,  582 => 85,  577 => 81,  572 => 80,  567 => 76,  558 => 65,  552 => 64,  549 => 63,  546 => 62,  541 => 27,  536 => 26,  530 => 11,  524 => 10,  519 => 5,  514 => 229,  512 => 228,  509 => 227,  507 => 226,  503 => 225,  489 => 217,  487 => 216,  473 => 203,  467 => 200,  462 => 198,  454 => 192,  448 => 188,  446 => 187,  439 => 185,  431 => 182,  423 => 179,  416 => 175,  411 => 172,  404 => 167,  391 => 164,  388 => 163,  383 => 162,  381 => 161,  375 => 158,  371 => 156,  369 => 155,  359 => 149,  344 => 147,  340 => 146,  334 => 143,  330 => 141,  328 => 140,  313 => 130,  307 => 126,  294 => 124,  290 => 123,  283 => 119,  276 => 116,  268 => 112,  264 => 110,  255 => 104,  243 => 100,  235 => 97,  230 => 95,  225 => 93,  219 => 90,  215 => 88,  210 => 86,  208 => 85,  203 => 82,  197 => 80,  195 => 79,  191 => 77,  189 => 76,  177 => 68,  174 => 62,  158 => 54,  142 => 48,  138 => 46,  136 => 45,  124 => 39,  118 => 37,  116 => 36,  112 => 35,  103 => 28,  100 => 27,  98 => 26,  89 => 23,  80 => 20,  72 => 18,  68 => 17,  63 => 15,  52 => 10,  43 => 7,  36 => 5,  31 => 4,  358 => 75,  351 => 73,  341 => 66,  335 => 63,  323 => 53,  320 => 52,  318 => 132,  314 => 49,  311 => 48,  284 => 42,  279 => 117,  263 => 37,  249 => 34,  213 => 87,  199 => 25,  187 => 24,  173 => 20,  161 => 19,  149 => 15,  132 => 13,  128 => 12,  119 => 11,  105 => 10,  76 => 19,  71 => 4,  56 => 11,  41 => 1,  35 => 5,  32 => 36,  29 => 1,  26 => 3,  20 => 17,  17 => 1,  648 => 296,  645 => 295,  639 => 290,  635 => 288,  627 => 283,  622 => 281,  618 => 279,  616 => 278,  613 => 277,  605 => 272,  598 => 270,  594 => 268,  592 => 226,  589 => 266,  581 => 261,  574 => 259,  570 => 257,  568 => 256,  560 => 251,  553 => 249,  544 => 243,  537 => 241,  527 => 234,  520 => 232,  515 => 229,  506 => 222,  497 => 219,  494 => 218,  482 => 215,  474 => 214,  469 => 213,  464 => 199,  457 => 208,  447 => 200,  438 => 197,  435 => 196,  427 => 193,  419 => 192,  414 => 191,  409 => 190,  402 => 186,  386 => 175,  380 => 174,  370 => 167,  366 => 154,  360 => 163,  356 => 162,  350 => 159,  346 => 158,  338 => 153,  322 => 142,  316 => 131,  306 => 134,  302 => 47,  296 => 130,  292 => 129,  286 => 126,  282 => 125,  274 => 115,  258 => 109,  248 => 102,  244 => 101,  238 => 33,  234 => 97,  228 => 94,  224 => 29,  216 => 88,  200 => 81,  190 => 70,  186 => 69,  180 => 69,  176 => 65,  170 => 62,  166 => 57,  157 => 55,  152 => 52,  150 => 51,  147 => 50,  140 => 45,  130 => 41,  126 => 39,  117 => 35,  113 => 34,  109 => 33,  101 => 32,  97 => 31,  93 => 24,  90 => 29,  85 => 22,  77 => 23,  73 => 22,  69 => 21,  65 => 3,  61 => 19,  53 => 14,  49 => 12,  47 => 8,  45 => 10,  42 => 9,  40 => 8,  37 => 7,  34 => 6,  28 => 3,  23 => 22,);
    }
}
