<?php

/* mod_support_public_tickets.phtml */
class __TwigTemplate_96a7be23092ba4fed3454084a223f5ec extends Twig_Template
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
        $context["active_menu"] = "support";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo "Public tickets";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        $context["statuses"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_public_ticket_get_statuses");
        // line 7
        echo "<div class=\"stats\">
    <ul>
        <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("support/public-tickets"), "html", null, true);
        echo "?status=open\" class=\"count green\" title=\"\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "open"), "html", null, true);
        echo "</a><span>";
        echo gettext("Tickets waiting for staff reply");
        echo "</span></li>
        <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("support/public-tickets"), "html", null, true);
        echo "?status=on_hold\" class=\"count blue\" title=\"\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "on_hold"), "html", null, true);
        echo "</a><span>";
        echo gettext("Tickets waiting for client reply");
        echo "</span></li>
        <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("support/public-tickets"), "html", null, true);
        echo "?status=closed\" class=\"count grey\" title=\"\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "closed"), "html", null, true);
        echo "</a><span>";
        echo gettext("Solved tickets");
        echo "</span></li>
        <li class=\"last\"><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("support/public-tickets"), "html", null, true);
        echo "\" class=\"count grey\" title=\"\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "open") + $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "on_hold")) + $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "closed")), "html", null, true);
        echo "</a><span>";
        echo gettext("Total");
        echo "</span></li>
    </ul>
    <div class=\"fix\"></div>
</div>

<div class=\"widget\">
    <div class=\"head\"><h5 class=\"iFrames\">";
        // line 18
        echo gettext("Public tickets");
        echo "</h5></div>

";
        // line 20
        echo $context["mf"]->gettable_search();
        echo "
<table class=\"tableStatic wide\">
    <thead>
        <tr>
            <td style=\"width: 50%\">";
        // line 24
        echo gettext("Subject");
        echo "</td>
            <td>";
        // line 25
        echo gettext("Email");
        echo "</td>
            <td>";
        // line 26
        echo gettext("Status");
        echo "</td>
            <td>";
        // line 27
        echo gettext("Date");
        echo "</td>
            <td style=\"width: 5%\">&nbsp;</td>
        </tr>
    </thead>

    <tbody>
    ";
        // line 33
        $context["tickets"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_public_ticket_get_list", array(0 => twig_array_merge(array("per_page" => 30, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 34
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["ticket"]) {
            // line 35
            echo "    <tr>
        <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/support/public-ticket"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "\">#";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "messages")), "html", null, true);
            echo ")</a></td>
        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "author_email"), "html", null, true);
            echo "</td>
        <td>";
            // line 38
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status"));
            echo "</td>
        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "updated_at"), "Y-m-d"), "html", null, true);
            echo "</td>
        <td class=\"actions\">
            <a class=\"bb-button btn14\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/support/public-ticket"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
        </td>
    </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "        <tr>
            <td colspan=\"5\">
                ";
            // line 47
            echo gettext("The list is empty");
            // line 48
            echo "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 51
        echo "    </tbody>
</table>
</div>
";
        // line 54
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["tickets"]) ? $context["tickets"] : null), "url" => "support/public-tickets")));
    }

    public function getTemplateName()
    {
        return "mod_support_public_tickets.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 54,  175 => 51,  167 => 48,  165 => 47,  161 => 45,  150 => 41,  145 => 39,  141 => 38,  137 => 37,  125 => 36,  122 => 35,  116 => 34,  114 => 33,  105 => 27,  101 => 26,  97 => 25,  93 => 24,  86 => 20,  81 => 18,  68 => 12,  60 => 11,  52 => 10,  44 => 9,  40 => 7,  38 => 6,  35 => 5,  29 => 3,  24 => 4,  22 => 2,);
    }
}
