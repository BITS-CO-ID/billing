<?php

/* mod_page_about-us.phtml */
class __TwigTemplate_648d7fa223a5531b99d14e2fd3a78f0b extends Twig_Template
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

    // line 2
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("About us");
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
<div class=\"h-block\">
    <div class=\"h-block-header\">
        <div class=\"icon\"><span class=\"big-light-icon i-quote\"></span></div>
        <h2>";
        // line 9
        echo gettext("About us");
        echo "</h2>
        <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "signature"), "html", null, true);
        echo "</p>
    </div>
    <div class=\"block\">
        <div class=\"box\">
            ";
        // line 14
        echo twig_bbmd_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "note"));
        echo "
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_page_about-us.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  44 => 10,  40 => 9,  34 => 5,  31 => 4,  25 => 2,);
    }
}
