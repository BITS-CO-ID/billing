<?php

/* mod_kb_article.phtml */
class __TwigTemplate_b20829b6d930f4002c053f382d400282 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
            'content_after' => array($this, 'block_content_after'),
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
        echo "</h2>
            <p class=\"meta\">";
        // line 11
        echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "created_at")), "html", null, true);
        echo " | ";
        echo gettext("Views");
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "views"), "html", null, true);
        echo "</p>
        </div>
        <div class=\"block\">

            ";
        // line 25
        echo "
            <div class=\"box articles\">
                <div class=\"block article first last\">
                    ";
        // line 28
        echo twig_bbmd_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "content"));
        echo "
                </div>
            </div>
        </div>
    </div>

    <p><a class=\"bb-button\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("kb"), "html", null, true);
        echo "\"><span class=\"dark-icon i-arrow\"></span> ";
        echo gettext("Back to list");
        echo "</a></p>
";
    }

    // line 37
    public function block_content_after($context, array $blocks = array())
    {
        // line 38
        echo "    <div class=\"grid_6 alpha\">
        <div class=\"widget\">
            <div class=\"head\">
                <h2 class=\"dark-icon i-kb\">";
        // line 41
        echo gettext("Similiar articles");
        echo "</h2>
            </div>
            <ul class=\"menu\">
            ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "kb_article_get_list", array(0 => array("kb_article_category_id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "kb_article_category_id"), "per_page" => 5)), "method"), "list"));
        foreach ($context['_seq'] as $context["i"] => $context["kbarticle"]) {
            // line 45
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/kb"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "category"), "slug"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kbarticle"]) ? $context["kbarticle"] : null), "slug"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["kbarticle"]) ? $context["kbarticle"] : null), "title"), 45), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['kbarticle'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 47
        echo "            </ul>
        </div>
</div>
<div class=\"grid_6 omega\">
        <div class=\"widget\">
            <div class=\"head\">
                <h2 class=\"dark-icon i-kb\">";
        // line 53
        echo gettext("Knowledge base categories");
        echo "</h2>
            </div>
            <ul class=\"menu\">
            ";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "kb_category_get_list", array(0 => array("per_page" => 5)), "method"), "list"));
        foreach ($context['_seq'] as $context["i"] => $context["category"]) {
            // line 57
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/kb"), "html", null, true);
            echo "#category-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "title"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 59
        echo "            </ul>
        </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_kb_article.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 59,  129 => 57,  125 => 56,  119 => 53,  111 => 47,  96 => 45,  92 => 44,  86 => 41,  81 => 38,  78 => 37,  70 => 34,  61 => 28,  56 => 25,  45 => 11,  41 => 10,  35 => 6,  32 => 5,  26 => 3,);
    }
}
