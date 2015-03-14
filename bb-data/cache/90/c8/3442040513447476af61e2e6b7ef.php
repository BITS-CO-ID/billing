<?php

/* mod_forum_forum.phtml */
class __TwigTemplate_90c83442040513447476af61e2e6b7ef extends Twig_Template
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
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "title"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"big-light-icon i-forum\"></span></div>
            <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "title"), "html", null, true);
        echo "</h2>
            <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "description"), "html", null, true);
        echo "</p>
        </div>
        <div class=\"block\">

            <table>
                <thead>
                    <tr>
                        <th style=\"width:5%\">&nbsp;</th>
                        <th style=\"width:5%\">&nbsp;</th>
                        <th style=\"width:40%\">";
        // line 19
        echo gettext("Thread / Thread Starter");
        echo "</th>
                        <th>";
        // line 20
        echo gettext("Last post");
        echo "</th>
                        <th>";
        // line 21
        echo gettext("Replies");
        echo "</th>
                        <th>";
        // line 22
        echo gettext("Views");
        echo "</th>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 27
        $context["topics"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "forum_get_topic_list", array(0 => array("forum_id" => $this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "id"), "per_page" => 10, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page"))), "method");
        // line 28
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["topics"]) ? $context["topics"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["topic"]) {
            // line 29
            echo "
                    <tr class=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "\">
                        <td>
                            <span class=\"forum-status ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "status"), "html", null, true);
            echo "\"></span>
                        </td>
                        <td>
                            <img src=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "first"), "author"), "email")), "html", null, true);
            echo "?size=30\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "first"), "author"), "name"), "html", null, true);
            echo "\" />
                        </td>
                        <td>
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/forum"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "slug"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "slug"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "title"), "html", null, true);
            echo "</a>
                            <p style=\"font-size: .9em\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "first"), "author"), "name"), "html", null, true);
            echo "</p>
                        </td>
                        <td>
                            ";
            // line 42
            echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "last"), "created_at")), "html", null, true);
            echo "
                            <p style=\"font-size: .9em\">";
            // line 43
            echo gettext("by");
            echo " <a href=\"";
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/forum"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "slug"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "slug"), "html", null, true);
            echo "#m-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "last"), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "last"), "author"), "name"), "html", null, true);
            echo " ";
            echo "</p>
                        </td>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "stats"), "posts_count"), "html", null, true);
            echo "</td>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "stats"), "views_count"), "html", null, true);
            echo "</td>
                    </tr>

                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 50
            echo "
                    <tr>
                        <td colspan=\"6\">";
            // line 52
            echo gettext("The list is empty");
            echo "</td>
                    </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 56
        echo "
                </tbody>

            </table>

        </div>
    </div>

    ";
        // line 64
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["topics"]) ? $context["topics"] : null))));
        // line 65
        echo "
    <p>
        <button class=\"bb-button\" type=\"button\" onclick=\"parent.location='";
        // line 67
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("/forum"), "html", null, true);
        echo "'\"><span class=\"dark-icon i-arrow\"></span>";
        echo gettext("Forum list");
        echo "</button>
        ";
        // line 68
        if ((isset($context["client"]) ? $context["client"] : null)) {
            // line 69
            echo "        <button class=\"bb-button bb-button-submit\" type=\"button\" id=\"new-topic\">";
            echo gettext("New topic");
            echo "</button>
        ";
        } else {
            // line 71
            echo "        <button class=\"bb-button bb-button-red\" type=\"button\" onclick=\"parent.location='";
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/login"), "html", null, true);
            echo "'\">";
            echo gettext("Register");
            echo "</button>
        ";
        }
        // line 73
        echo "    </p>

    <div class=\"widget\" id=\"new-topic-block\" style=\"display: none\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-forum\">";
        // line 77
        echo gettext("Start new topic in");
        echo " \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "title"), "html", null, true);
        echo "\"</h2>
        </div>
        <div class=\"block\">
            <form action=\"\" method=\"post\" id=\"forum-new-topic\">
                <fieldset>
                    <legend>";
        // line 82
        echo gettext("Start new topic");
        echo "</legend>
                    <p>
                        <label>";
        // line 84
        echo gettext("Topic title");
        echo ": </label>
                        <input type=\"text\" name=\"topic\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "topic"), "html", null, true);
        echo "\" required=\"required\">
                    </p>
                    <p>
                        <label>";
        // line 88
        echo gettext("Topic message");
        echo ": </label>
                        <textarea name=\"message\" cols=\"5\" rows=\"5\" required=\"required\">";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "message"), "html", null, true);
        echo "</textarea>
                    </p>
                    <input type=\"hidden\" name=\"return\" value=\"slug\">
                    <input type=\"hidden\" name=\"forum_id\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "id"), "html", null, true);
        echo "\">
                    <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
        // line 93
        echo gettext("Create new topic");
        echo "\">
                </fieldset>
            </form>
        </div>
    </div>

";
    }

    // line 102
    public function block_js($context, array $blocks = array())
    {
        // line 103
        echo "<script type=\"text/javascript\">
\$(function() {

    \$('#new-topic').bind('click', function(){
        \$(this).fadeOut();
        \$('#new-topic-block').fadeIn();
        return false;
    });

    \$('#forum-new-topic').bind('submit', function(){
        bb.post(
            'client/forum/start_topic',
            \$(this).serialize(),
            function(result) {
                bb.redirect('";
        // line 117
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("forum"), "html", null, true);
        echo "' + '/' + '";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "slug"), "html", null, true);
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
        return "mod_forum_forum.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 117,  266 => 103,  263 => 102,  252 => 93,  248 => 92,  242 => 89,  238 => 88,  232 => 85,  228 => 84,  223 => 82,  213 => 77,  207 => 73,  199 => 71,  193 => 69,  191 => 68,  185 => 67,  181 => 65,  179 => 64,  169 => 56,  159 => 52,  155 => 50,  146 => 46,  142 => 45,  126 => 43,  122 => 42,  116 => 39,  106 => 38,  98 => 35,  92 => 32,  87 => 30,  84 => 29,  78 => 28,  76 => 27,  68 => 22,  64 => 21,  60 => 20,  56 => 19,  44 => 10,  40 => 9,  35 => 6,  32 => 5,  26 => 3,);
    }
}
