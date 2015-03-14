<?php

/* mod_kb_category.phtml */
class __TwigTemplate_945379237129c9add74d78bfbf6b8aff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "title"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"big-light-icon i-kb\"></span></div>
            <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "title"), "html", null, true);
        echo "</h2>
            <p class=\"meta\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "description"), "html", null, true);
        echo "</p>
        </div>
        <div class=\"block\">
            <div class=\"box\">
                <div class=\"block kb\">
                    <ul>
                    ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "articles"));
        foreach ($context['_seq'] as $context["i"] => $context["article"]) {
            // line 18
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/kb"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "category"), "slug"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "slug"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "                    </ul>
                </div>
            </div>
        </div>
    </div>

    <p><a class=\"bb-button\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("kb"), "html", null, true);
        echo "\"><span class=\"dark-icon i-arrow\"></span> ";
        echo gettext("Back to list");
        echo "</a></p>
";
    }

    public function getTemplateName()
    {
        return "mod_kb_category.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 26,  72 => 20,  57 => 18,  53 => 17,  44 => 11,  40 => 10,  34 => 6,  31 => 5,  25 => 3,);
    }
}
