<?php

/* mod_support_ticket.phtml */
class __TwigTemplate_c343c31a15b6c5ffcacdc89c5ffa4975 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"h-block forum\">
    <div class=\"h-block-header\">
        <div class=\"icon\"><span class=\"big-light-icon i-support\"></span></div>
        <h2>";
        // line 10
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), 60), "html", null, true);
        echo "</h2>
        <p>#";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "helpdesk"), "name"), "html", null, true);
        echo "</p>
    </div>
    <div class=\"block conversation\">
    ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "messages"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["i"] => $context["message"]) {
            // line 15
            echo "    <div class=\"widget simpleTabs tabsRight";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                echo " first";
            }
            echo "\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-forum\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "author"), "name"), "html", null, true);
            echo "</h2>
            <h3>";
            // line 18
            echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "created_at")), "html", null, true);
            echo "</h3>
        </div>
        <ul class=\"tabs\">
            <li><a href=\"#m-";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "id"), "html", null, true);
            echo "\">#";
            echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : null) + 1), "html", null, true);
            echo "</a></li>
            <li><a href=\"#reply-";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "id"), "html", null, true);
            echo "\"><span class=\"dark-icon i-support\"></span>";
            echo gettext("Reply");
            echo "</a></li>
            <li><a href=\"#quote-";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "id"), "html", null, true);
            echo "\"><span class=\"dark-icon i-quote\"></span>";
            echo gettext("Quote");
            echo "</a></li>
        </ul>
        <div class=\"tabs_container\">
            <div class=\"tab_content\" id=\"m-";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "id"), "html", null, true);
            echo "\">
                <div class=\"grid_2 alpha\">
                    <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "author"), "email")), "html", null, true);
            echo "?size=60\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "author"), "name"), "html", null, true);
            echo "\" class=\"gravatar\"/>
                </div>
                <div class=\"grid_10 omega\">
                    <div class=\"block message\">
                        <div class=\"body\">
                            ";
            // line 33
            echo twig_bbmd_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "content"));
            echo "
                            <div class=\"clear\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"clear\"></div>
            </div>
            <div class=\"tab_content\" id=\"reply-";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "id"), "html", null, true);
            echo "\">
                <form method=\"post\" action=\"\" class=\"api_form\" data-api-url=\"client/support/ticket_reply\" data-api-reload=\"1\">
                    <fieldset>
                        <p>
                            <textarea name=\"content\" cols=\"5\" rows=\"10\" required=\"required\"></textarea>
                        </p>
                        <input type=\"hidden\" name=\"id\" value=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "\">
                        <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
            // line 47
            echo gettext("Post");
            echo "\">
                    </fieldset>
                </form>
            </div>

            <div class=\"tab_content\" id=\"quote-";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "id"), "html", null, true);
            echo "\">
                <form method=\"post\" action=\"\" class=\"api_form\" data-api-url=\"client/support/ticket_reply\" data-api-reload=\"1\">
                    <fieldset>
                        <p>
                            <textarea name=\"content\" cols=\"5\" rows=\"10\" required=\"required\">";
            // line 56
            echo $context["mf"]->getmarkdown_quote($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "content"));
            echo "</textarea>
                        </p>
                        <input type=\"hidden\" name=\"id\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "\">
                        <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
            // line 59
            echo gettext("Post");
            echo "\">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 66
        echo "    </div>
</div>

<div class=\"grid_12 alpha omega\">
    <div class=\"widget\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-support\">";
        // line 72
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), 95), "html", null, true);
        echo "</h2>
        </div>
        <table>
            <tbody>
                <tr>
                    <td>";
        // line 77
        echo gettext("Ticket ID");
        echo "</td>
                    <td><b>#";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
        echo "</b></td>
                </tr>

                <tr>
                    <td>";
        // line 82
        echo gettext("Help desk");
        echo "</td>
                    <td>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "helpdesk"), "name"), "html", null, true);
        echo "</td>
                </tr>

                <tr>
                    <td>";
        // line 87
        echo gettext("Status");
        echo "</td>
                    <td>";
        // line 88
        echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status"));
        echo "</td>
                </tr>

                <tr>
                    <td>";
        // line 92
        echo gettext("Time opened");
        echo "</td>
                    <td>";
        // line 93
        echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "created_at")), "html", null, true);
        echo "</td>
                </tr>

                ";
        // line 96
        if ((($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "rel_type") == "order") && $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "rel_id"))) {
            // line 97
            echo "                <tr>
                    <td>";
            // line 98
            echo gettext("Related to");
            echo "</td>
                    <td><a href=\"";
            // line 99
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("service/manage"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "rel_id"), "html", null, true);
            echo "\">";
            echo gettext("Service #");
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "rel_id"), "html", null, true);
            echo "</a></td>
                </tr>
                ";
        }
        // line 102
        echo "             </tbody>

             <tfoot>
                 <tr>
                     <td colspan=\"2\">

                     <a class=\"bb-button\" href=\"";
        // line 108
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("/support"), "html", null, true);
        echo "\"><span class=\"dark-icon i-arrow\"></span>";
        echo gettext("Tickets list");
        echo "</a>

                     ";
        // line 110
        if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status") != "closed")) {
            // line 111
            echo "                        <button class=\"bb-button\" type=\"button\" id=\"ticket-close\">";
            echo gettext("Close ticket");
            echo "</button>
                        ";
        }
        // line 113
        echo "                     </td>
                 </tr>
             </tfoot>
        </table>
    </div>
</div>

";
    }

    // line 122
    public function block_js($context, array $blocks = array())
    {
        // line 123
        echo "<script type=\"text/javascript\">
\$(function() {

    \$('#ticket-close').bind('click',function(event){
        bb.post(
            'client/support/ticket_close',
            { id: ";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
        echo " },
            function(result) {
                bb.redirect('";
        // line 131
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("support"), "html", null, true);
        echo "');
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
        return "mod_support_ticket.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 131,  318 => 129,  310 => 123,  307 => 122,  296 => 113,  290 => 111,  288 => 110,  281 => 108,  273 => 102,  261 => 99,  257 => 98,  254 => 97,  252 => 96,  246 => 93,  242 => 92,  235 => 88,  231 => 87,  224 => 83,  220 => 82,  213 => 78,  209 => 77,  201 => 72,  193 => 66,  172 => 59,  168 => 58,  163 => 56,  156 => 52,  148 => 47,  144 => 46,  135 => 40,  125 => 33,  115 => 28,  110 => 26,  102 => 23,  96 => 22,  90 => 21,  84 => 18,  80 => 17,  72 => 15,  55 => 14,  47 => 11,  43 => 10,  37 => 6,  34 => 5,  28 => 3,  23 => 2,);
    }
}
