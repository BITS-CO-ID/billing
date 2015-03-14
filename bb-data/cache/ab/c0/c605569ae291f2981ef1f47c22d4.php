<?php

/* mod_product_category.phtml */
class __TwigTemplate_abc0c605569ae291f2981ef1f47c22d4 extends Twig_Template
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
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_default.phtml";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["active_menu"] = "products";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "title"), "html", null, true);
    }

    // line 6
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 7
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/"), "html", null, true);
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("product"), "html", null, true);
        echo "\">";
        echo gettext("Products");
        echo "</a></li>
    <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("product"), "html", null, true);
        echo "#tab-categories\">";
        echo gettext("Categories");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "title"), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "<div class=\"widget\">
    
    <div class=\"head\">
        <h5>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "title"), "html", null, true);
        echo "</h5>
    </div>
    
    <form method=\"post\" action=\"admin/product/category_update\" class=\"mainForm save api-form\" data-api-msg=\"";
        // line 22
        echo gettext("Category updated");
        echo "\">
        <fieldset>
            <div class=\"rowElem noborder\">
                <label>";
        // line 25
        echo gettext("Title");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"title\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "title"), "html", null, true);
        echo "\" required=\"required\"/>
                </div>
                <div class=\"fix\"></div>
            </div>
            
            <div class=\"rowElem\">
                <label>";
        // line 33
        echo gettext("Icon");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"icon_url\" id=\"bb-icon\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "icon_url"), "html", null, true);
        echo "\" style=\"width: 80%\"/>
                    <input type=\"button\" value=\"";
        // line 36
        echo gettext("Browse");
        echo "\" class=\"bHtml blueBtn button\" />
                </div>
                <div class=\"fix\"></div>
            </div>

            <textarea name=\"description\" cols=\"5\" rows=\"20\" class=\"bb-textarea\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "description"), "html", null, true);
        echo "</textarea>

            <input type=\"submit\" value=\"";
        // line 43
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
            <input type=\"hidden\" name=\"id\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "html", null, true);
        echo "\"/>
        </fieldset>
    </form>
</div>

";
    }

    // line 51
    public function block_head($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "bb_editor", array(0 => ".bb-textarea"), "method"), "html", null, true);
    }

    // line 53
    public function block_js($context, array $blocks = array())
    {
        // line 54
        echo "<script type=\"text/javascript\">
\$(function() {
\t\$(\".bHtml\").click( function() {
\t\tjAlert(bb.load('";
        // line 57
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("filemanager/icons"), "html", null, true);
        echo "', {rel:\"bb-icon\"}), '";
        echo gettext("Select icon and click OK");
        echo "');
\t});
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_product_category.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 57,  148 => 54,  145 => 53,  139 => 51,  129 => 44,  125 => 43,  120 => 41,  112 => 36,  108 => 35,  103 => 33,  94 => 27,  89 => 25,  83 => 22,  77 => 19,  72 => 16,  69 => 15,  62 => 11,  56 => 10,  50 => 9,  44 => 8,  41 => 7,  38 => 6,  32 => 3,  27 => 2,);
    }
}
