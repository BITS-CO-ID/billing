<?php

/* mod_filemanager_index.phtml */
class __TwigTemplate_4b56320600f34d24d4392b4e937b9848 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content_wide' => array($this, 'block_content_wide'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        // line 4
        $context["active_menu"] = "system";
        // line 5
        $context["hide_menu"] = "1";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo "Filemanager";
    }

    // line 7
    public function block_content_wide($context, array $blocks = array())
    {
        // line 8
        echo "<iframe src=\"";
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("filemanager/ide"), "html", null, true);
        echo "?inline=1\" width=\"100%\" height=\"700\"></iframe>
";
    }

    public function getTemplateName()
    {
        return "mod_filemanager_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  37 => 7,  31 => 3,  26 => 5,  24 => 4,  22 => 2,);
    }
}
