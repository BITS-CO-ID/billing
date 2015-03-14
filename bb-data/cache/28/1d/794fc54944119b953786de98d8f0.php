<?php

/* mod_support_tickets.phtml */
class __TwigTemplate_281d794fc54944119b953786de98d8f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
            'sidebar2' => array($this, 'block_sidebar2'),
            'js' => array($this, 'block_js'),
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
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Support tickets");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"big-light-icon i-support\"></span></div>
            <h2>";
        // line 9
        echo gettext("Support tickets");
        echo "</h2>
            <p>";
        // line 10
        echo gettext("Need an answer? We are here to help");
        echo "</p>
        </div>
        <div class=\"block\">
            <table>
                <thead>
                    <tr>
                        <th style=\"width: 1%\">";
        // line 16
        echo gettext("Id");
        echo "</th>
                        <th style=\"width: 40%\">";
        // line 17
        echo gettext("Subject");
        echo "</th>
                        <th>";
        // line 18
        echo gettext("Help desk");
        echo "</th>
                        <th>";
        // line 19
        echo gettext("Status");
        echo "</th>
                        <th>";
        // line 20
        echo gettext("Submitted");
        echo "</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 26
        $context["tickets"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "support_ticket_get_list", array(0 => array("per_page" => 10, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page"))), "method");
        // line 27
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["ticket"]) {
            // line 28
            echo "
                    <tr class=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "\">
                        <td>#";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("support/ticket"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), 40), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "helpdesk"), "name"), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status"));
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_timeago_filter($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "created_at")), "html", null, true);
            echo " ";
            echo gettext("ago");
            echo "</td>
                        <td class=\"actions\"><a class=\"bb-button\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("support/ticket"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "\"><span class=\"dark-icon i-drag\"></span></a></td>
                    </tr>

                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "
                    <tr>
                        <td colspan=\"6\">";
            // line 41
            echo gettext("The list is empty");
            echo "</td>
                    </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 45
        echo "
                </tbody>

                <tfoot>
                    <tr>
                        <td colspan=\"2\" ><a class=\"bb-button\" href=\"#\" id=\"new-ticket-button\">";
        // line 50
        echo gettext("Submit new ticket");
        echo "</a></td>
                        <td colspan=\"4\">
                            ";
        // line 52
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["tickets"]) ? $context["tickets"] : null))));
        // line 53
        echo "                        </td>
                    </tr>
                </tfoot>

            </table>
        </div>
    </div>

<div class=\"widget\" id=\"new-ticket\" ";
        // line 61
        if ((!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ticket"))) {
            echo "style=\"display: none;\"";
        }
        echo ">
    <div class=\"head\">
        <h2 class=\"dark-icon i-support\">";
        // line 63
        echo gettext("Submit new ticket");
        echo "</h2>
    </div>
    <div class=\"block\">
        <form action=\"\" method=\"post\" id=\"ticket-submit\">
            <fieldset>
                <legend>";
        // line 68
        echo gettext("Submit new support ticket");
        echo "</legend>
                <p>
                    <label>";
        // line 70
        echo gettext("Help desk");
        echo ": </label>
                    ";
        // line 71
        echo $context["mf"]->getselectbox("support_helpdesk_id", $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "support_helpdesk_get_pairs"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "support_helpdesk_id"), 1);
        echo "
                </p>

                <p>
                    <label>";
        // line 75
        echo gettext("Subject");
        echo ": </label>
                    <input type=\"text\" name=\"subject\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "subject"));
        echo "\" required=\"required\"/>
                </p>

                <p>
                    <label>";
        // line 80
        echo gettext("Message");
        echo ": </label>
                    <textarea name=\"content\" cols=\"5\" rows=\"5\" required=\"required\">";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "content"));
        echo "</textarea>
                </p>

                <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
        // line 84
        echo gettext("Submit");
        echo "\">
            </fieldset>
        </form>
    </div>
</div>
";
    }

    // line 90
    public function block_sidebar2($context, array $blocks = array())
    {
        // line 91
        echo "
";
        // line 92
        if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "kb")), "method")) {
            // line 93
            echo "<div class=\"widget\">
    <div class=\"head\">
        <h2 class=\"dark-icon i-kb\">";
            // line 95
            echo gettext("Knowledge base");
            echo "</h2>
    </div>
    <ul class=\"menu\">
    ";
            // line 98
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "kb_category_get_list"), "list"));
            foreach ($context['_seq'] as $context["i"] => $context["category"]) {
                // line 99
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, twig_bb_client_link_filter("/kb"), "html", null, true);
                echo "#category-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "title"), "html", null, true);
                echo "</a></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 101
            echo "    </ul>
</div>
";
        }
        // line 104
        echo "
";
    }

    // line 108
    public function block_js($context, array $blocks = array())
    {
        // line 109
        echo "<script type=\"text/javascript\">
\$(function() {

    \$('#new-ticket-button').bind('click',function(event){
        \$('#new-ticket').slideToggle();
        return false;
    });

    \$('#ticket-submit').bind('submit',function(event){
        bb.post(
            'client/support/ticket_create',
            \$(this).serialize(),
            function(result) {
                bb.redirect('";
        // line 122
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("support/ticket"), "html", null, true);
        echo "' + '/' + result);
            }
        );
        return false;
    });

});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_support_tickets.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 122,  281 => 109,  278 => 108,  273 => 104,  268 => 101,  255 => 99,  251 => 98,  245 => 95,  241 => 93,  239 => 92,  236 => 91,  233 => 90,  223 => 84,  217 => 81,  213 => 80,  206 => 76,  202 => 75,  195 => 71,  191 => 70,  186 => 68,  178 => 63,  171 => 61,  161 => 53,  159 => 52,  154 => 50,  147 => 45,  137 => 41,  133 => 39,  122 => 35,  116 => 34,  112 => 33,  108 => 32,  100 => 31,  96 => 30,  92 => 29,  89 => 28,  83 => 27,  81 => 26,  72 => 20,  68 => 19,  64 => 18,  60 => 17,  56 => 16,  47 => 10,  43 => 9,  38 => 6,  35 => 5,  29 => 3,  24 => 2,);
    }
}
