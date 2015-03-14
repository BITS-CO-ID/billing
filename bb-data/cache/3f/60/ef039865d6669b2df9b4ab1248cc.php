<?php

/* partial_pagination.phtml */
class __TwigTemplate_3f60ef039865d6669b2df9b4ab1248cc extends Twig_Template
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
        if (($this->getAttribute((isset($context["list"]) ? $context["list"] : null), "pages") > 1)) {
            // line 2
            $context["currentPage"] = (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page"), 1)) : (1));
            // line 3
            $context["paginator"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_paginator", array(0 => array("total" => $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "total"), "page" => (isset($context["currentPage"]) ? $context["currentPage"] : null), "per_page" => $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "per_page"))), "method");
            // line 4
            echo "
<div class=\"pagination\">
    <ul class=\"pages\">
        ";
            // line 7
            if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentpage") != 1)) {
                // line 8
                echo "            <li class=\"prev\"><a href=\"";
                echo twig_escape_filter($this->env, twig_bb_admin_link_filter((isset($context["url"]) ? $context["url"] : null)), "html", null, true);
                echo "?";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge(array(), (isset($context["request"]) ? $context["request"] : null)), array("page" => ((isset($context["currentPage"]) ? $context["currentPage"] : null) - 1))));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
                    echo "=";
                    echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : null), "html", null, true);
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last") == false)) {
                        echo "&";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                echo "\"><</a></li>
        ";
            }
            // line 10
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "numpages")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 11
                echo "            ";
                if ((($this->getAttribute($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "range"), 0) > 2) && ((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "range"), 0)))) {
                    // line 12
                    echo "                  ...
            ";
                }
                // line 14
                echo "
            ";
                // line 15
                if (((((isset($context["i"]) ? $context["i"] : null) == 1) || ((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "numpages"))) || twig_in_filter((isset($context["i"]) ? $context["i"] : null), $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "range")))) {
                    // line 16
                    echo "                ";
                    if (((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentpage"))) {
                        // line 17
                        echo "                    <li><a class=\"active\" href=\"#\" onclick=\"return false;\">";
                        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                        echo "</a></li>
                ";
                    } else {
                        // line 19
                        echo "                <li><a href=\"";
                        echo twig_escape_filter($this->env, twig_bb_admin_link_filter((isset($context["url"]) ? $context["url"] : null)), "html", null, true);
                        echo "?";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge(array(), (isset($context["request"]) ? $context["request"] : null)), array("page" => (isset($context["i"]) ? $context["i"] : null))));
                        $context['loop'] = array(
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        );
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                            echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
                            echo "=";
                            echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : null), "html", null, true);
                            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last") == false)) {
                                echo "&";
                            }
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        echo "\"> ";
                        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                        echo "</a></li>
                ";
                    }
                    // line 21
                    echo "            ";
                }
                // line 22
                echo "
            ";
                // line 23
                if ((($this->getAttribute($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "range"), ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "midrange") - 1), array(), "array") < ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "numpages") - 1)) && ((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "range"), ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "midrange") - 1), array(), "array")))) {
                    // line 24
                    echo "                ...
            ";
                }
                // line 26
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 27
            echo "        ";
            if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentpage") != $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "numpages"))) {
                // line 28
                echo "        <li class=\"next\"><a href=\"";
                echo twig_escape_filter($this->env, twig_bb_admin_link_filter((isset($context["url"]) ? $context["url"] : null)), "html", null, true);
                echo "?";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge(array(), (isset($context["request"]) ? $context["request"] : null)), array("page" => ((isset($context["currentPage"]) ? $context["currentPage"] : null) + 1))));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
                    echo "=";
                    echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : null), "html", null, true);
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last") == false)) {
                        echo "&";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                echo "\">></a></li>
        ";
            }
            // line 30
            echo "    </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partial_pagination.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 30,  161 => 28,  158 => 27,  152 => 26,  148 => 24,  146 => 23,  143 => 22,  140 => 21,  97 => 19,  91 => 17,  88 => 16,  86 => 15,  83 => 14,  79 => 12,  76 => 11,  71 => 10,  30 => 8,  28 => 7,  23 => 4,  21 => 3,  19 => 2,  17 => 1,  734 => 327,  731 => 326,  718 => 316,  710 => 311,  705 => 309,  693 => 299,  684 => 296,  681 => 295,  672 => 291,  666 => 290,  661 => 288,  658 => 287,  653 => 286,  645 => 281,  641 => 280,  629 => 271,  619 => 264,  610 => 258,  605 => 256,  595 => 249,  590 => 247,  584 => 244,  576 => 239,  571 => 237,  563 => 232,  558 => 230,  549 => 225,  544 => 222,  536 => 217,  531 => 215,  523 => 210,  518 => 208,  510 => 203,  505 => 201,  497 => 196,  492 => 194,  483 => 188,  478 => 186,  472 => 183,  464 => 178,  459 => 176,  451 => 171,  446 => 169,  438 => 164,  434 => 163,  429 => 161,  418 => 152,  416 => 151,  411 => 148,  402 => 145,  399 => 144,  388 => 140,  384 => 139,  379 => 137,  375 => 136,  365 => 135,  355 => 134,  341 => 133,  335 => 132,  323 => 129,  319 => 127,  313 => 126,  311 => 125,  302 => 119,  298 => 118,  294 => 117,  290 => 116,  286 => 115,  279 => 111,  269 => 104,  265 => 103,  261 => 102,  257 => 101,  252 => 98,  249 => 97,  235 => 90,  227 => 89,  219 => 88,  211 => 87,  207 => 85,  205 => 84,  195 => 77,  181 => 70,  172 => 68,  166 => 65,  153 => 59,  145 => 58,  137 => 57,  129 => 56,  124 => 54,  115 => 48,  110 => 46,  101 => 40,  96 => 38,  87 => 32,  82 => 30,  73 => 24,  68 => 22,  59 => 16,  54 => 14,  45 => 8,  42 => 7,  40 => 6,  37 => 5,  31 => 3,  26 => 2,);
    }
}
