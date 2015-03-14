<?php

/* mod_email_index.phtml */
class __TwigTemplate_2798d14760d470f4d36edef7d2975e39 extends Twig_Template
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
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Emails");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"h-block\">
    <div class=\"h-block-header\">
        <div class=\"icon\"><span class=\"big-light-icon i-email\"></span></div>
        <h2>";
        // line 10
        echo gettext("Emails we have sent you");
        echo "</h2>
        <p>";
        // line 11
        echo gettext("Here you can track emails we have sent you");
        echo "</p>
    </div>
    <div class=\"block\">
        <table>
            <thead>
                <tr>
                    <th>";
        // line 17
        echo gettext("Email subject");
        echo "</th>
                    <th>";
        // line 18
        echo gettext("To");
        echo "</th>
                    <th>";
        // line 19
        echo gettext("Date sent");
        echo "</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>

            <tbody>
                ";
        // line 25
        $context["emails"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "email_get_list", array(0 => array("per_page" => 10, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page"))), "method");
        // line 26
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["emails"]) ? $context["emails"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["email"]) {
            // line 27
            echo "                <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "\">
                    <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("email"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "subject"), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "recipients"), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "created_at")), "html", null, true);
            echo "</td>
                    <td class=\"actions\"><a class=\"bb-button\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("email"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "id"), "html", null, true);
            echo "\"><span class=\"dark-icon i-drag\"></span></a></td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "                <tr>
                    <td colspan=\"4\">";
            // line 35
            echo gettext("The list is empty");
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['email'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 38
        echo "            </tbody>
        </table>
    </div>
</div>

";
        // line 43
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["emails"]) ? $context["emails"] : null))));
        // line 44
        echo "
";
    }

    public function getTemplateName()
    {
        return "mod_email_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 44,  128 => 43,  121 => 38,  112 => 35,  109 => 34,  99 => 31,  95 => 30,  91 => 29,  83 => 28,  78 => 27,  72 => 26,  70 => 25,  61 => 19,  57 => 18,  53 => 17,  44 => 11,  40 => 10,  34 => 6,  31 => 5,  25 => 3,);
    }
}
