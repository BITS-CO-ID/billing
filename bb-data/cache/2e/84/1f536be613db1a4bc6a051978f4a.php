<?php

/* mod_activity_index.phtml */
class __TwigTemplate_2e841f536be613db1a4bc6a051978f4a extends Twig_Template
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
        echo "System activity";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"widget\">
    <div class=\"head\"><h5 class=\"iFrames\">";
        // line 8
        echo gettext("System activity");
        echo "</h5></div>

";
        // line 10
        echo $context["mf"]->gettable_search();
        echo "
<table class=\"tableStatic wide\">
    <thead>
        <tr>
            <td colspan=\"2\">";
        // line 14
        echo gettext("Message");
        echo "</td>
            <td>";
        // line 15
        echo gettext("Ip");
        echo "</td>
            <td>";
        // line 16
        echo gettext("Country");
        echo "</td>
            <td>";
        // line 17
        echo gettext("Date");
        echo "</td>
            <td style=\"width: 5%\">&nbsp;</td>
        </tr>
    </thead>

    <tbody>
    ";
        // line 23
        $context["events"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "activity_log_get_list", array(0 => twig_array_merge(array("per_page" => 10, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 24
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["events"]) ? $context["events"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["event"]) {
            // line 25
            echo "    <tr>
        <td>
            ";
            // line 27
            if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "client")) {
                // line 28
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client/manage"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "client"), "id"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "client"), "name"), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "client"), "email")), "html", null, true);
                echo "?size=20\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "client"), "name"), "html", null, true);
                echo "\" /></a>
            ";
            } elseif ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "staff")) {
                // line 30
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, twig_bb_admin_link_filter("staff/manage"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "staff"), "id"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "staff"), "name"), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "staff"), "email")), "html", null, true);
                echo "?size=20\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "staff"), "name"), "html", null, true);
                echo "\" /></a>
            ";
            } else {
                // line 32
                echo "            Guest
            ";
            }
            // line 34
            echo "        </td>
        <td><div style=\"overflow: auto; width: 250px;\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "message"), "html", null, true);
            echo "</div></td>
        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ip"), "html", null, true);
            echo "</td>
        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_ipcountryname_filter($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ip")), "html", null, true);
            echo "</td>
        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "created_at"), "Y-m-d H:i"), "html", null, true);
            echo "</td>
        <td class=\"actions\">
            <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"";
            // line 40
            echo gettext("Are you sure?");
            echo "\" data-api-redirect=\"activity\" href=\"admin/activity/log_delete?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
        </td>
    </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "    <tr>
        <td colspan=\"6\">
            ";
            // line 46
            echo gettext("The list is empty");
            // line 47
            echo "        </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 50
        echo "    </tbody>
</table>

</div>

";
        // line 55
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["events"]) ? $context["events"] : null), "url" => "activity")));
        // line 56
        echo "
";
    }

    public function getTemplateName()
    {
        return "mod_activity_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 56,  172 => 55,  165 => 50,  157 => 47,  155 => 46,  151 => 44,  140 => 40,  135 => 38,  131 => 37,  127 => 36,  123 => 35,  120 => 34,  116 => 32,  102 => 30,  88 => 28,  86 => 27,  82 => 25,  76 => 24,  74 => 23,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  46 => 10,  41 => 8,  38 => 7,  35 => 6,  29 => 3,  24 => 4,  22 => 2,);
    }
}
