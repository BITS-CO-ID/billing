<?php

/* mod_forum_index.phtml */
class __TwigTemplate_ba1e0cebb82160f4314537be7b933e07 extends Twig_Template
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
        echo gettext("Forum");
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
        echo gettext("Forum");
        echo "</h2>
            <p>";
        // line 10
        echo gettext("Welcome to our forums. If you wish to become a member and post, you have to be registered member.");
        echo "</p>
        </div>
        <div class=\"block\">

            ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "forum_get_categories"));
        foreach ($context['_seq'] as $context["cat_name"] => $context["forums"]) {
            // line 15
            echo "            <table>
                <caption>";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["cat_name"]) ? $context["cat_name"] : null), "html", null, true);
            echo "</caption>
                <thead>
                    <tr>
                        <th>&nbsp;</th>
                        <th style=\"width:80%;\">";
            // line 20
            echo gettext("Forum");
            echo "</th>
                        <th>";
            // line 21
            echo gettext("Threads");
            echo "</th>
                        <th>";
            // line 22
            echo gettext("Posts");
            echo "</th>
                    </tr>
                </thead>

                <tbody>
                    ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["forums"]) ? $context["forums"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
                // line 28
                echo "                    <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo "\">
                        <td>
                            <span class=\"forum-status ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "status"), "html", null, true);
                echo "\"></span>
                        </td>
                        <td>
                            <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, twig_bb_client_link_filter("/forum"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "slug"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "title"), "html", null, true);
                echo "</a>
                            <p>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "description"), "html", null, true);
                echo "</p>
                        </td>
                        <td>
                            ";
                // line 37
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "stats", array(), "any", false, true), "topics_count", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "stats", array(), "any", false, true), "topics_count"), 0)) : (0)), "html", null, true);
                echo "
                        </td>
                        <td>";
                // line 39
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "stats", array(), "any", false, true), "posts_count", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "stats", array(), "any", false, true), "posts_count"), 0)) : (0)), "html", null, true);
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forum'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 42
            echo "                </tbody>
            </table>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['cat_name'], $context['forums'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 45
        echo "            
            ";
        // line 46
        if (((isset($context["client"]) ? $context["client"] : null) && $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "forum_favorites"))) {
            // line 47
            echo "            <h2>";
            echo gettext("Favorite topics");
            echo "</h2>
            <table>
                <thead>
                    <tr>
                        <th style=\"width:5%\">&nbsp;</th>
                        <th style=\"width:5%\">&nbsp;</th>
                        <th style=\"width:40%\">";
            // line 53
            echo gettext("Thread / Thread Starter");
            echo "</th>
                        <th>";
            // line 54
            echo gettext("Last post");
            echo "</th>
                        <th>";
            // line 55
            echo gettext("Replies");
            echo "</th>
                        <th>";
            // line 56
            echo gettext("Views");
            echo "</th>
                    </tr>
                </thead>

                <tbody>
                    ";
            // line 61
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "forum_favorites"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["topic"]) {
                // line 62
                echo "                    <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo "\">
                        <td>
                            <span class=\"forum-status ";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "status"), "html", null, true);
                echo "\"></span>
                        </td>
                        <td>
                            <img src=\"";
                // line 67
                echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "first"), "author"), "email")), "html", null, true);
                echo "?size=30\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "first"), "author"), "name"), "html", null, true);
                echo "\" />
                        </td>
                        <td>
                            <a href=\"";
                // line 70
                echo twig_escape_filter($this->env, twig_bb_client_link_filter("/forum"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "forum"), "slug"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "slug"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "title"), "html", null, true);
                echo "</a>
                            <p style=\"font-size: .9em\">";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "first"), "author"), "name"), "html", null, true);
                echo "</p>
                        </td>
                        <td>
                            ";
                // line 74
                echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "last"), "created_at")), "html", null, true);
                echo "
                            <p style=\"font-size: .9em\">";
                // line 75
                echo gettext("by");
                echo " <a href=\"";
                echo twig_escape_filter($this->env, twig_bb_client_link_filter("/forum"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "forum"), "slug"), "html", null, true);
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
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "stats"), "posts_count"), "html", null, true);
                echo "</td>
                        <td>";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "stats"), "views_count"), "html", null, true);
                echo "</td>
                    </tr>

                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 82
                echo "
                    <tr>
                        <td colspan=\"6\">";
                // line 84
                echo gettext("The list is empty");
                echo "</td>
                    </tr>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['topic'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 88
            echo "
                </tbody>

            </table>
            ";
        }
        // line 93
        echo "        </div>
    </div>

    ";
        // line 96
        if ((!(isset($context["client"]) ? $context["client"] : null))) {
            // line 97
            echo "    <p><button class=\"bb-button bb-button-red\" type=\"button\" onclick=\"parent.location='";
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/login"), "html", null, true);
            echo "'\">";
            echo gettext("Register");
            echo "</button></p>
    ";
        }
        // line 99
        echo "    
";
    }

    public function getTemplateName()
    {
        return "mod_forum_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 99,  269 => 97,  267 => 96,  262 => 93,  255 => 88,  245 => 84,  241 => 82,  232 => 78,  228 => 77,  212 => 75,  208 => 74,  202 => 71,  192 => 70,  184 => 67,  178 => 64,  172 => 62,  167 => 61,  159 => 56,  155 => 55,  151 => 54,  147 => 53,  137 => 47,  135 => 46,  132 => 45,  124 => 42,  115 => 39,  110 => 37,  104 => 34,  96 => 33,  90 => 30,  84 => 28,  80 => 27,  72 => 22,  68 => 21,  64 => 20,  57 => 16,  54 => 15,  50 => 14,  43 => 10,  39 => 9,  34 => 6,  31 => 5,  25 => 3,);
    }
}
