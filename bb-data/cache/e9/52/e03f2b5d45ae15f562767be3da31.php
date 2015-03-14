<?php

/* mod_news_post.phtml */
class __TwigTemplate_e952e03f2b5d45ae15f562767be3da31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'opengraph' => array($this, 'block_opengraph'),
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), "html", null, true);
    }

    // line 5
    public function block_opengraph($context, array $blocks = array())
    {
        // line 6
        echo "
    <meta property=\"og:title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), "html", null, true);
        echo "\" />
    <meta property=\"og:type\" content=\"article\" />
    <meta property=\"og:url\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_current_url"), "html", null, true);
        echo "\" />
    <meta property=\"og:image\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "image"), "html", null, true);
        echo "\" />
    <meta property=\"article:author\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "author"), "name"), "html", null, true);
        echo "\" />
    
    ";
        // line 13
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "published_at")) {
            echo "<meta property=\"article:published_time\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "published_at"), "html", null, true);
            echo "\" />";
        }
        // line 14
        echo "    ";
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "updated_at")) {
            echo "<meta property=\"article:modified_time\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "updated_at"), "html", null, true);
            echo "\" />";
        }
        // line 15
        echo "    ";
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "expires_at")) {
            echo "<meta property=\"article:expiration_time\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "expires_at"), "html", null, true);
            echo "\" />";
        }
        // line 16
        echo "    ";
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "section")) {
            echo "<meta property=\"article:section\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "section"), "html", null, true);
            echo "\" />";
        }
        // line 17
        echo "    ";
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "tags")) {
            echo "<meta property=\"article:tag\" content=\"";
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "tags"), ", "), "html", null, true);
            echo "\" />";
        }
        // line 18
        echo "    
";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"big-light-icon i-blog\"></span></div>
            <h2>";
        // line 25
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), 50), "html", null, true);
        echo "</h2>
            <p>";
        // line 26
        echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "created_at")), "html", null, true);
        echo " ";
        echo gettext("by ");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "author"), "name"), "html", null, true);
        echo "</p>
        </div>
        <div class=\"block articles\">
            <div class=\"article last\">
                ";
        // line 30
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "image")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "image"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), "html", null, true);
            echo "\">";
        }
        // line 31
        echo "                ";
        echo twig_bbmd_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content"));
        echo "
                ";
        // line 33
        echo "            </div>
        </div>
    </div>

    ";
        // line 37
        if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "comment")), "method")) {
            $this->env->loadTemplate("mod_comment_block.phtml")->display($context);
        }
        // line 38
        echo "
    <p><a class=\"bb-button\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("blog"), "html", null, true);
        echo "\"><span class=\"dark-icon i-arrow\"></span> ";
        echo gettext("Back to list");
        echo "</a></p>

";
    }

    public function getTemplateName()
    {
        return "mod_news_post.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 39,  141 => 38,  137 => 37,  131 => 33,  126 => 31,  118 => 30,  107 => 26,  103 => 25,  98 => 22,  95 => 21,  90 => 18,  83 => 17,  76 => 16,  69 => 15,  62 => 14,  56 => 13,  51 => 11,  47 => 10,  43 => 9,  38 => 7,  35 => 6,  32 => 5,  26 => 3,);
    }
}
