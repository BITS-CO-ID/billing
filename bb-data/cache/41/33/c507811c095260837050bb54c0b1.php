<?php

/* partial_pagination.phtml */
class __TwigTemplate_4133c507811c095260837050bb54c0b1 extends Twig_Template
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
            $context["page"] = $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "page");
            // line 3
            echo "
<div class=\"paginator\">
<ul>
  ";
            // line 6
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "pages")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 7
                echo "    <li>
    ";
                // line 8
                if (((isset($context["i"]) ? $context["i"] : null) == (isset($context["page"]) ? $context["page"] : null))) {
                    // line 9
                    echo "        <a class=\"bb-button bb-button-submit\" href=\"#\" onclick=\"return false;\">";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                    echo "</a>
    ";
                } else {
                    // line 11
                    echo "        <a class=\"bb-button\" href=\"?";
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
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                    echo "</a>
    ";
                }
                // line 13
                echo "    </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 15
            echo "</ul>
    <div class=\"clear\"></div>
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
        return array (  82 => 13,  41 => 11,  35 => 9,  33 => 8,  30 => 7,  26 => 6,  21 => 3,  19 => 2,  17 => 1,  128 => 29,  126 => 28,  120 => 24,  113 => 22,  93 => 19,  89 => 15,  85 => 17,  77 => 16,  70 => 15,  51 => 14,  49 => 13,  43 => 10,  39 => 9,  34 => 6,  31 => 5,  25 => 3,);
    }
}
