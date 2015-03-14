<?php

/* mod_kb_article.phtml */
class __TwigTemplate_df3908ba2825355d48d5f64a480a51e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_default.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
            'head' => array($this, 'block_head'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_default.phtml";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["active_menu"] = "kb";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), "html", null, true);
    }

    // line 5
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 6
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/"), "html", null, true);
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("kb"), "html", null, true);
        echo "\">";
        echo gettext("Knowledge Base");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
<div class=\"widget\">

    <div class=\"head\">
        <h5>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), "html", null, true);
        echo "</h5>
    </div>
    
    <form method=\"post\" action=\"admin/kb/article_update\" class=\"mainForm save api-form\" data-api-msg=\"";
        // line 21
        echo gettext("Article updated");
        echo "\">
        <fieldset>
            <textarea name=\"content\" cols=\"5\" rows=\"40\" class=\"bb-textarea\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content"), "html", null, true);
        echo "</textarea>
            <input type=\"submit\" value=\"";
        // line 24
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
            <input type=\"hidden\" name=\"id\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id"), "html", null, true);
        echo "\"/>
        </fieldset>
    </form>
</div>

<div class=\"widget\">

    <div class=\"head\">
        <h5>";
        // line 33
        echo gettext("Article details");
        echo "</h5>
    </div>

    <form method=\"post\" action=\"admin/kb/article_update\" class=\"mainForm save api-form\" data-api-msg=\"";
        // line 36
        echo gettext("Article updated");
        echo "\">
        <fieldset>
            <div class=\"rowElem noborder\">
                <label>";
        // line 39
        echo gettext("Category");
        echo ":</label>
                <div class=\"formRight\">
                    ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "kb_article_category_id", 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "kb_category_get_pairs"), 2 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "kb_article_category_id"), 3 => 1), "method"), "html", null, true);
        echo "
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label>";
        // line 47
        echo gettext("Title");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"title\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), "html", null, true);
        echo "\" required=\"required\"/>
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label>";
        // line 55
        echo gettext("Slug");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"slug\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug"), "html", null, true);
        echo "\" required=\"required\"/>
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label>";
        // line 63
        echo gettext("Views");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"views\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "views"), "html", null, true);
        echo "\" required=\"required\"/>
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label>";
        // line 71
        echo gettext("Status");
        echo ":</label>
                <div class=\"formRight noborder\">
                    <input type=\"radio\" name=\"status\" value=\"draft\"";
        // line 73
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "status") == "draft")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Draft</label>
                    <input type=\"radio\" name=\"status\" value=\"active\"";
        // line 74
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "status") == "active")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>Active</label>
                </div>
                <div class=\"fix\"></div>
            </div>
            
            <input type=\"submit\" value=\"";
        // line 79
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
            <input type=\"hidden\" name=\"id\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id"), "html", null, true);
        echo "\"/>
        </fieldset>
    </form>

    <div class=\"body\">
        <a href=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("kb"), "html", null, true);
        echo "\"  title=\"\" class=\"btnIconLeft mr10\"><img src=\"images/icons/dark/arrowLeft.png\" alt=\"\" class=\"icon\"><span>Go back</span></a>
    </div>
</div>
";
    }

    // line 90
    public function block_head($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "bb_editor", array(0 => ".bb-textarea"), "method"), "html", null, true);
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
        return array (  210 => 90,  202 => 85,  194 => 80,  190 => 79,  180 => 74,  174 => 73,  169 => 71,  160 => 65,  155 => 63,  146 => 57,  141 => 55,  132 => 49,  127 => 47,  118 => 41,  113 => 39,  107 => 36,  101 => 33,  90 => 25,  86 => 24,  82 => 23,  77 => 21,  71 => 18,  65 => 14,  62 => 13,  55 => 9,  49 => 8,  43 => 7,  40 => 6,  37 => 5,  31 => 3,  26 => 2,);
    }
}
