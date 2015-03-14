<?php

/* mod_client_login_history.phtml */
class __TwigTemplate_43b0fffaedcd25a08869eb0b72aa2922 extends Twig_Template
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
        echo "Clients login history";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"widget\">
    <div class=\"head\"><h5 class=\"iFrames\">";
        // line 8
        echo gettext("Clients logins history");
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
        echo gettext("Client");
        echo "</td>
            <td>";
        // line 15
        echo gettext("IP");
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
        $context["history"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "client_login_history_get_list", array(0 => twig_array_merge(array("per_page" => 30, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 24
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["event"]) {
            // line 25
            echo "    <tr>
        <td style=\"width:5%\"><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client/manage"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "client"), "id"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "client"), "email")), "html", null, true);
            echo "?size=20\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "client"), "email"), "html", null, true);
            echo "\" /></a></td>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "client"), "first_name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "client"), "last_name"), "html", null, true);
            echo "</td>
        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ip"), "html", null, true);
            echo "</td>
        <td>";
            // line 29
            echo twig_escape_filter($this->env, _twig_default_filter(twig_ipcountryname_filter($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ip")), "Unknown"), "html", null, true);
            echo "</td>
        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "created_at"), "Y-m-d H:i"), "html", null, true);
            echo "</td>
        <td class=\"actions\">
            <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"client/logins\" href=\"admin/client/login_history_delete?id=";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
        </td>
    </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "    <tr>
        <td colspan=\"6\">
            ";
            // line 38
            echo gettext("The list is empty");
            // line 39
            echo "        </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 42
        echo "    </tbody>
    
</table>
";
        // line 45
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["history"]) ? $context["history"] : null), "url" => "client/logins")));
        // line 46
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "mod_client_login_history.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 46,  142 => 45,  137 => 42,  129 => 39,  127 => 38,  123 => 36,  114 => 32,  109 => 30,  105 => 29,  101 => 28,  95 => 27,  85 => 26,  82 => 25,  76 => 24,  74 => 23,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  46 => 10,  41 => 8,  38 => 7,  35 => 6,  29 => 3,  24 => 4,  22 => 2,);
    }
}
