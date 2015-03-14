<?php

/* mod_notification_index.phtml */
class __TwigTemplate_e70aea7749d9873af3a069c765fb634b extends Twig_Template
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
        // line 4
        $context["active_menu"] = "activity";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo "Notifications center";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"widget simpleTabs\">
    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 9
        echo gettext("Notifications");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 10
        echo gettext("New note");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">

            ";
        // line 18
        echo $context["mf"]->gettable_search();
        echo "
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>";
        // line 22
        echo gettext("Message");
        echo "</td>
                        <td>";
        // line 23
        echo gettext("Date");
        echo "</td>
                        <td style=\"width: 5%\">&nbsp;</td>
                    </tr>
                </thead>

                <tbody>
                ";
        // line 29
        $context["events"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "notification_get_list", array(0 => twig_array_merge(array("per_page" => 10, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 30
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["events"]) ? $context["events"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["event"]) {
            // line 31
            echo "                <tr>
                    <td>";
            // line 32
            echo $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_string_render", array(0 => array("_tpl" => $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "meta_value"), "_try" => true)), "method");
            echo "</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "created_at"), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                    <td class=\"actions\">
                        <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"";
            // line 35
            echo gettext("Are you sure?");
            echo "\" data-api-redirect=\"activity\" href=\"admin/notification/delete?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "                    <tr>
                        <td colspan=\"6\">
                            ";
            // line 41
            echo gettext("The list is empty");
            // line 42
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 45
        echo "                </tbody>
            </table>
            
            ";
        // line 48
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["events"]) ? $context["events"] : null), "url" => "notification")));
        // line 49
        echo "            
            <div class=\"body\">
                <a href=\"admin/notification/delete_all\"  title=\"\" class=\"btnIconLeft mr10 api-link\" data-api-confirm=\"";
        // line 51
        echo gettext("Are you sure?");
        echo "\" data-api-reload=\"1\"><img src=\"images/icons/dark/trash.png\" alt=\"\" class=\"icon\"><span>";
        echo gettext("Delete all messages");
        echo "</span></a>
            </div>

        </div>
        
        <div class=\"tab_content nopadding\" id=\"tab-new\">
            <form method=\"post\" action=\"admin/notification/add\" class=\"mainForm api-form\" data-api-reload=\"1\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <div class=\"formBottom\">
                            <textarea cols=\"5\" rows=\"10\" name=\"message\" placeholder=\"";
        // line 61
        echo gettext("Add note or todo task");
        echo "\" ></textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                     <input type=\"submit\" value=\"";
        // line 66
        echo gettext("Add note");
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
        return "mod_notification_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 66,  148 => 61,  133 => 51,  129 => 49,  127 => 48,  122 => 45,  114 => 42,  112 => 41,  108 => 39,  97 => 35,  92 => 33,  88 => 32,  85 => 31,  79 => 30,  77 => 29,  68 => 23,  64 => 22,  57 => 18,  46 => 10,  42 => 9,  38 => 7,  35 => 6,  29 => 3,  24 => 4,  22 => 2,);
    }
}
