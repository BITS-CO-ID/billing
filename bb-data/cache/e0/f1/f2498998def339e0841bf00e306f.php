<?php

/* mod_page_privacy-policy.phtml */
class __TwigTemplate_e0f1f2498998def339e0841bf00e306f extends Twig_Template
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
        echo gettext("Privacy policy");
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "name"), "html", null, true);
        echo " ";
        echo gettext("Privacy policy");
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
        echo twig_bbmd_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "privacy_policy"));
        echo "
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_page_privacy-policy.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  46 => 10,  40 => 9,  34 => 5,  31 => 4,  25 => 2,);
    }
}
