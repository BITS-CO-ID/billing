<?php

/* mod_email_history.phtml */
class __TwigTemplate_1eb70b65fc4383d99add360795188583 extends Twig_Template
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
        echo gettext("Email history");
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"widget\">
    <div class=\"head\"><h5 class=\"iFrames\">";
        // line 8
        echo gettext("Email history");
        echo "</h5></div>

";
        // line 10
        echo $context["mf"]->gettable_search();
        echo "
<table class=\"tableStatic wide\">
    <thead>
        <tr>
            <td>";
        // line 14
        echo gettext("To");
        echo "</td>
            <td>";
        // line 15
        echo gettext("From");
        echo "</td>
            <td>";
        // line 16
        echo gettext("Subject");
        echo "</td>
            <td>";
        // line 17
        echo gettext("Date");
        echo "</td>
            <td style=\"width: 13%\">&nbsp;</td>
        </tr>
    </thead>

    <tbody>
    ";
        // line 23
        $context["emails"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "email_email_get_list", array(0 => twig_array_merge(array("per_page" => 30, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 24
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["emails"]) ? $context["emails"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["email"]) {
            // line 25
            echo "    <tr>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "recipients"), "html", null, true);
            echo "</td>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "sender"), "html", null, true);
            echo "</td>
        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "subject"), 40), "html", null, true);
            echo "</td>
        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "created_at"), "Y-m-d"), "html", null, true);
            echo "</td>
        <td class=\"actions\">
            <a class=\"bb-button btn14\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/email"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
            <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-redirect=\"email/history\" data-api-confirm=\"Are you sure?\"  href=\"admin/email/email_delete?id=";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
        </td>
    </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "        <tr>
            <td colspan=\"7\">
                ";
            // line 38
            echo gettext("The list is empty");
            // line 39
            echo "            </td>
        </tr>
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['email'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 43
        echo "    </tbody>
</table>

</div>

";
        // line 48
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["emails"]) ? $context["emails"] : null), "url" => "email/history")));
        // line 49
        echo "
";
    }

    public function getTemplateName()
    {
        return "mod_email_history.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 49,  139 => 48,  132 => 43,  123 => 39,  121 => 38,  117 => 36,  108 => 32,  102 => 31,  97 => 29,  93 => 28,  89 => 27,  85 => 26,  82 => 25,  76 => 24,  74 => 23,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  46 => 10,  41 => 8,  38 => 7,  35 => 6,  29 => 3,  24 => 4,  22 => 2,);
    }
}
