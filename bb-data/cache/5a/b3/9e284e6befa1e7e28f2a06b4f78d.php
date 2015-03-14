<?php

/* 404.phtml */
class __TwigTemplate_5ab39e284e6befa1e7e28f2a06b4f78d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_login.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_login.phtml";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["help_query"] = $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "getMessage");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Error");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "getCode"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<!-- Error info area -->
<div class=\"wrapper\">
    <div class=\"errorPage\">
        <h2 class=\"red errorTitle\"><span>";
        // line 10
        echo gettext("Something went wrong here");
        echo "</span></h2>
        <h1>";
        // line 11
        if (($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "getCode") == 0)) {
            echo "500";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "getCode"), "html", null, true);
            echo " ";
        }
        echo "</h1>
        <span class=\"bubbles\"></span>
        <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "getMessage"), "html", null, true);
        echo "!</p>
        ";
        // line 14
        if (($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "getCode") == 403)) {
            // line 15
            echo "        <div class=\"backToDash\"><a href=\"";
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/staff/login"), "html", null, true);
            echo "\" title=\"\" class=\"seaBtn button\">";
            echo gettext("Login");
            echo "</a></div>
        ";
        } else {
            // line 17
            echo "        <div class=\"backToDash\"><a href=\"";
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/index"), "html", null, true);
            echo "\" title=\"\" class=\"seaBtn button\">";
            echo gettext("Back to Dashboard");
            echo "</a></div>
        ";
        }
        // line 19
        echo "    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "404.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 19,  75 => 17,  67 => 15,  65 => 14,  61 => 13,  50 => 11,  46 => 10,  40 => 6,  37 => 5,  29 => 2,  24 => 3,);
    }
}
