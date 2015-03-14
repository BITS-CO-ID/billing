<?php

/* mod_news_index.phtml */
class __TwigTemplate_a938fc0a5cba1b46c060152daa495578 extends Twig_Template
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
        // line 2
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        // line 3
        $context["active_menu"] = "support";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_meta_title($context, array $blocks = array())
    {
        echo "News";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 10
        echo gettext("News and announcements");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 11
        echo gettext("New announcement");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">

        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">

        ";
        // line 19
        echo $context["mf"]->gettable_search();
        echo "
        <table class=\"tableStatic wide\">
            <thead>
                <tr>
                    <td colspan=\"2\">";
        // line 23
        echo gettext("Title");
        echo "</td>
                    <td>";
        // line 24
        echo gettext("Active");
        echo "</td>
                    <td>";
        // line 25
        echo gettext("Date");
        echo "</td>
                    <td style=\"width: 13%\">&nbsp;</td>
                </tr>
            </thead>

            <tbody>
            ";
        // line 31
        $context["posts"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "news_get_list", array(0 => twig_array_merge(array("per_page" => 30, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 32
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["post"]) {
            // line 33
            echo "            <tr>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id"), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "status"));
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_bb_datetime($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "created_at")), "html", null, true);
            echo "</td>
                <td class=\"actions\">
                    <a class=\"bb-button btn14\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/news/post"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                    <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" href=\"admin/news/delete?id=";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id"), "html", null, true);
            echo "\" data-api-redirect=\"news\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                </td>
            </tr>

            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "                <tr>
                    <td colspan=\"5\">
                        ";
            // line 47
            echo gettext("The list is empty");
            // line 48
            echo "                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 51
        echo "            </tbody>
        </table>
        ";
        // line 53
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["posts"]) ? $context["posts"] : null), "url" => "news/index")));
        // line 54
        echo "        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new\">

            <form method=\"post\" action=\"admin/news/create\" class=\"mainForm api-form\" data-api-redirect=\"news\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 61
        echo gettext("Title");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"title\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "title"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 68
        echo gettext("Status");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"status\" value=\"draft\"checked=\"checked\"/><label>";
        // line 70
        echo gettext("Draft");
        echo "</label>
                            <input type=\"radio\" name=\"status\" value=\"active\"/><label>";
        // line 71
        echo gettext("Active");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 76
        echo gettext("Content");
        echo "</label>
                        <div class=\"formRight\">
                            <textarea name=\"content\" cols=\"5\" rows=\"10\">";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "content"), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"submit\" value=\"";
        // line 82
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_news_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 82,  190 => 78,  185 => 76,  177 => 71,  173 => 70,  168 => 68,  160 => 63,  155 => 61,  146 => 54,  144 => 53,  140 => 51,  132 => 48,  130 => 47,  126 => 45,  116 => 40,  110 => 39,  105 => 37,  101 => 36,  97 => 35,  93 => 34,  90 => 33,  84 => 32,  82 => 31,  73 => 25,  69 => 24,  65 => 23,  58 => 19,  47 => 11,  43 => 10,  38 => 7,  35 => 6,  29 => 4,  24 => 3,  22 => 2,);
    }
}
