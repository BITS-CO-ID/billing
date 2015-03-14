<?php

/* layout_login.phtml */
class __TwigTemplate_00b4b47784c1476a4491c25bb7a92b6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <title>";
        // line 4
        $this->displayBlock('meta_title', $context, $blocks);
        echo "</title>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\" />
    
    ";
        // line 8
        $this->env->loadTemplate("partial_bb_meta.phtml")->display($context);
        // line 9
        echo "    
    <link rel=\"stylesheet\" href=\"css/main.css\" type=\"text/css\" media=\"screen\" />
    <link href=\"https://fonts.googleapis.com/css?family=Cuprum\" rel=\"stylesheet\" type=\"text/css\" />
    
    <script type=\"text/javascript\" src=\"js/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"js/ui/jquery.alerts.js\"></script>
    <script type=\"text/javascript\" src=\"js/ui/jquery.tipsy.js\"></script>
    <script type=\"text/javascript\" src=\"js/jquery.collapsible.min.js\"></script>
    <script type=\"text/javascript\" src=\"js/forms/forms.js\"></script>
    <script type=\"text/javascript\" src=\"js/jquery.ToTop.js\"></script>
    <script type=\"text/javascript\" src=\"js/jquery.scrollTo-min.js\"></script>
    <script type=\"text/javascript\" src=\"js/jquery-ui.js\"></script>
    <script type=\"text/javascript\" src=\"js/bb-admin.js?v=";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_version"), "html", null, true);
        echo "\"></script>
</head>

<body>
<!-- Top navigation bar -->
<div id=\"topNav\">
    <div class=\"fixed\">
        <div class=\"wrapper\">
            <div class=\"backTo\"><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("/"), "html", null, true);
        echo "\" title=\"\"><img src=\"images/icons/topnav/mainWebsite.png\" alt=\"\" /><span>";
        echo gettext("Main website");
        echo "</span></a></div>
            <div class=\"userNav\">
                <ul>
                    <li class=\"loading\" style=\"display:none;\"><img src=\"images/loader.gif\" alt=\"\" /><span>";
        // line 32
        echo gettext("Loading ...");
        echo "</span></li>
                    <li><a href=\"http://www.boxbilling.com/docs";
        // line 33
        if ((isset($context["help_query"]) ? $context["help_query"] : null)) {
            echo "/search.html?q=";
            echo twig_escape_filter($this->env, (isset($context["help_query"]) ? $context["help_query"] : null), "html", null, true);
        }
        echo "\" title=\"\" target=\"_blank\"><img src=\"images/icons/topnav/help.png\" alt=\"\" /><span>";
        echo gettext("Help");
        echo "</span></a></li>
                </ul>
            </div>
            <div class=\"fix\"></div>
        </div>
    </div>
</div>

";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "
<!-- Footer -->
<div id=\"footer\">
\t<div class=\"wrapper\">
    \t";
        // line 46
        $this->env->loadTemplate("partial_footer.phtml")->display(array_merge($context, array("product" => (isset($context["product"]) ? $context["product"] : null))));
        // line 47
        echo "    </div>
</div>
";
        // line 49
        $this->displayBlock('js', $context, $blocks);
        // line 50
        echo "</body>
</html>
";
    }

    // line 4
    public function block_meta_title($context, array $blocks = array())
    {
    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
    }

    // line 49
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout_login.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 49,  114 => 41,  109 => 4,  103 => 50,  101 => 49,  97 => 47,  95 => 46,  89 => 42,  87 => 41,  71 => 33,  59 => 29,  48 => 21,  34 => 9,  32 => 8,  25 => 4,  20 => 1,  83 => 19,  75 => 17,  67 => 32,  65 => 14,  61 => 13,  50 => 11,  46 => 10,  40 => 6,  37 => 5,  29 => 2,  24 => 3,);
    }
}
