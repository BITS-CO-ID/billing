<?php

/* mod_filemanager_ide.phtml */
class __TwigTemplate_baef7bbd20f45f2573e99ea63c56a995 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["mod"] = (constant("BB_URL") . "bb-modules/mod_filemanager");
        // line 2
        echo "<html>
\t<head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /> 
\t\t<title>";
        // line 5
        echo gettext("File manager");
        echo "</title>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["mod"]) ? $context["mod"] : null), "html", null, true);
        echo "/src/css/bootstrap/bootstrap-1.0.0.min.css\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["mod"]) ? $context["mod"] : null), "html", null, true);
        echo "/src/css/app.css\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["mod"]) ? $context["mod"] : null), "html", null, true);
        echo "/src/css/jqueryui/jquery.ui.base.css\" />
\t\t<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["mod"]) ? $context["mod"] : null), "html", null, true);
        echo "/src/js/jquery.js\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["mod"]) ? $context["mod"] : null), "html", null, true);
        echo "/src/js/jquery-ui.js\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["mod"]) ? $context["mod"] : null), "html", null, true);
        echo "/src/js/disableText.js\" type=\"text/javascript\"></script>
\t\t<script type=\"text/javascript\">
\t\t\$(function(){
\t\t\t\$(\"#main-site\").tabs();
\t\t});
\t\t</script>
\t</head>
    
\t<body>
\t\t<div id=\"main-site\">
\t\t\t<div id=\"acct-nav\">
                Hint: Use Ctrl+S to save file |
                ";
        // line 23
        if ((isset($context["show_full_screen"]) ? $context["show_full_screen"] : null)) {
            // line 24
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("filemanager/ide"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo gettext("Full screen");
            echo "</a>
                ";
        } else {
            // line 26
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("index"), "html", null, true);
            echo "\">";
            echo gettext("Dashboard");
            echo "</a>
                ";
        }
        // line 28
        echo "\t\t\t</div>
\t\t\t<ul id=\"main-nav\">
\t\t\t\t<li class=\"active\"><a href=\"#tab-edit\">Edit</a></li>
\t\t\t\t<li><a href=\"#tab-ref\">Reference</a></li>
\t\t\t</ul>
            
\t\t\t<div id=\"tab-edit\">
                <div id=\"edit-files\">
                    <div id=\"edit-dir\">
                        <span class=\"icon icon-dir\"></span>
                        <div data-path=\"/\" id=\"select-dir\">/</div>
                    </div>
                    <ul id=\"path-tree\">
                        <li data-path=\"/\"><span class=\"icon icon-dir\"></span> /</li>
                    </ul>
                    <div id=\"file-tools\">
                        <a href=\"#\" onclick=\"newDir(); return false;\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["mod"]) ? $context["mod"] : null), "html", null, true);
        echo "/src/img/dir-add.png\" alt=\"new dir\" /></a>
                        <a href=\"#\" onclick=\"newFile(); return false;\"><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["mod"]) ? $context["mod"] : null), "html", null, true);
        echo "/src/img/document--plus.png\" alt=\"new dir\" /></a>
                    </div>
                    <ul id=\"file-list\"></ul>
                </div>
                <div id=\"edit-content\">
                    <ul></ul>
                </div>
                <script>
                var absoDir = '";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["dir"]) ? $context["dir"] : null), "html", null, true);
        echo "';
                var apiUrl = '";
        // line 54
        echo twig_escape_filter($this->env, constant("BB_URL_API"), "html", null, true);
        echo "';
                var bbUrl = '";
        // line 55
        echo twig_escape_filter($this->env, constant("BB_URL"), "html", null, true);
        echo "';
                var openFile = '";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["open"]) ? $context["open"] : null), "html", null, true);
        echo "';
                </script>
                <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["mod"]) ? $context["mod"] : null), "html", null, true);
        echo "/src/js/edit.js\" type=\"text/javascript\"></script>
\t\t\t</div>
            
\t\t\t<div id=\"tab-ref\">
                <div id=\"ref-list\">
                    <ul>
                        <li><a target=\"ref-iframe\" href=\"http://www.boxbilling.com/docs/\">BoxBilling.com Docs</a></li>
                        <li><a target=\"ref-iframe\" href=\"http://php.net\">PHP.net</a></li>
                        <li><a target=\"ref-iframe\" href=\"http://dev.w3.org/html5/spec/Overview.html\">HTML5 Spec</a></li>
                        <li><a target=\"ref-iframe\" href=\"http://reference.sitepoint.com/css\">CSS</a></li>
                        <li><a target=\"ref-iframe\" href=\"http://w3schools.com/\">W3 Schools</a></li>
                        <li><a target=\"ref-iframe\" href=\"http://jqapi.com/\">jQuery</a></li>
                    </ul>
                </div>
                <div id=\"ref-frame-wrap\">
                    <iframe id=\"ref-iframe\"></iframe>
                </div>
                <script>
                \$(function(){
                    resizeFrame();
                    \$(\"#ref-list ul li\").click(function(e){
                        \$(this).siblings().removeClass('ref-sel');
                        \$(this).addClass('ref-sel');
                        var href = \$(this).children('a').attr('href');
                        \$(\"#ref-iframe\")[0].src = href;
                    });
                });
                \$(window).resize(function(){
                    resizeFrame();
                });
                function resizeFrame(){
                    var hh = \$(window).height() - (\$(\"#main-nav\").height() + \$(\"#ref-list\").height());
                    \$(\"#ref-iframe\").css('height',hh+'px');
                }
                </script>
\t\t\t</div>
\t\t</div>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "mod_filemanager_ide.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 58,  126 => 56,  122 => 55,  118 => 54,  114 => 53,  103 => 45,  99 => 44,  81 => 28,  73 => 26,  65 => 24,  63 => 23,  48 => 11,  44 => 10,  40 => 9,  36 => 8,  32 => 7,  28 => 6,  24 => 5,  19 => 2,  17 => 1,);
    }
}
