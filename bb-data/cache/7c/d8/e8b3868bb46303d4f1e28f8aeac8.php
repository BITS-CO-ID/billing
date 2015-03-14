<?php

/* mod_kb_index.phtml */
class __TwigTemplate_7cd8e8b3868bb46303d4f1e28f8aeac8 extends Twig_Template
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
        echo gettext("Knowledge base");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 7
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "q")) {
            // line 8
            echo "        ";
            $context["kbcategories"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "kb_category_get_list", array(0 => array("q" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "q"))), "method");
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "        ";
            $context["kbcategories"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "kb_category_get_list");
            // line 11
            echo "    ";
        }
        // line 12
        echo "
<div class=\"h-block\" >
    <div class=\"h-block-header\">
        <div class=\"icon\"><span class=\"big-light-icon i-kb\"></span></div>
        <h2>";
        // line 16
        echo gettext("Knowledge base");
        echo "</h2>
    </div>
    <div class=\"block\">
        <div class=\"block\" style=\"text-align: center; margin: 20px 0 20px 0\">
            <form method=\"get\" action=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("kb"), "html", null, true);
        echo "\" class=\"search\">
                <p>
                    <input class=\"search text\" name=\"q\" type=\"text\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "q"), "html", null, true);
        echo "\" placeholder=\"";
        echo gettext("What are you looking for?");
        echo "\">
                    <input class=\"bb-button bb-button-submit\" value=\"";
        // line 23
        echo gettext("Search");
        echo "\" type=\"submit\">
                </p>
            </form>
        </div>

    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["kbcategories"]) ? $context["kbcategories"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["category"]) {
            // line 29
            echo "        <div class=\"block kb\">
            <h2 class=\"big-dark-icon i-kb\" id=\"category-";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "html", null, true);
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("kb"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "title"), "html", null, true);
            echo "</a></h2>
            <ul>
            ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "articles"));
            foreach ($context['_seq'] as $context["i"] => $context["article"]) {
                // line 33
                echo "                <li><a href=\"";
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
            // line 35
            echo "            </ul>
        </div>

    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "        <p>
            ";
            // line 40
            echo gettext("Try using other keyword. No matches not for keyword:");
            // line 41
            echo "            <b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "q"), "html", null, true);
            echo "</b>
        </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 44
        echo "    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_kb_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 44,  134 => 41,  132 => 40,  129 => 39,  121 => 35,  106 => 33,  102 => 32,  91 => 30,  88 => 29,  83 => 28,  75 => 23,  69 => 22,  64 => 20,  57 => 16,  51 => 12,  48 => 11,  45 => 10,  42 => 9,  39 => 8,  37 => 7,  34 => 6,  31 => 5,  25 => 3,);
    }
}
