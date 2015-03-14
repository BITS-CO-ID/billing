<?php

/* mod_forum_index.phtml */
class __TwigTemplate_5d09d2d3da3beed468d22c58cc7786c9 extends Twig_Template
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
        // line 3
        $context["active_menu"] = "support";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_meta_title($context, array $blocks = array())
    {
        echo "Forum";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 10
        echo gettext("Posts");
        echo "</a></li>
        <li><a href=\"#tab-topics\">";
        // line 11
        echo gettext("Topics");
        echo "</a></li>
        <li><a href=\"#tab-forums\">";
        // line 12
        echo gettext("Forums");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 13
        echo gettext("New topic");
        echo "</a></li>
        <li><a href=\"#tab-new-forum\">";
        // line 14
        echo gettext("New forum");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">

        <div class=\"fix\"></div>
        
        <div class=\"tab_content nopadding\" id=\"tab-index\">
        ";
        // line 22
        echo $context["mf"]->gettable_search();
        echo "
        <table class=\"tableStatic wide\">
            <thead>
                <tr>
                    <td colspan=\"2\">";
        // line 26
        echo gettext("Message");
        echo "</td>
                    <td>";
        // line 27
        echo gettext("Date");
        echo "</td>
                    <td style=\"width: 13%\">Actions</td>
                </tr>
            </thead>

            <tbody>
            ";
        // line 33
        $context["posts"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "forum_message_get_list", array(0 => twig_array_merge(array("per_page" => 30, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 34
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["post"]) {
            // line 35
            echo "            <tr class=\"msg-id-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id"), "html", null, true);
            echo "\">
                <td style=\"width: 5%;\"><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("forum/profile"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "author"), "id"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "author"), "gravatar"), "html", null, true);
            echo "?size=20\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "author"), "id"), "html", null, true);
            echo "\" /></a></td>
                <td>
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("forum/topic"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "forum_topic_id"), "html", null, true);
            echo "#msg-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "forum_title"), "html", null, true);
            echo "</a>
                    <br/>
                    ";
            // line 40
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "message"), 80), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_timeago_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "created_at")), "html", null, true);
            echo " ago</td>
                <td class=\"actions\">
                    <a class=\"bb-button btn14\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/forum/topic"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "forum_topic_id"), "html", null, true);
            echo "#msg-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                    <a class=\"bb-button btn14 bb-rm-tr api-link\" href=\"admin/forum/message_delete?id=";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id"), "html", null, true);
            echo "\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"forum\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                </td>
            </tr>
            
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "                <tr>
                    <td colspan=\"4\">
                        ";
            // line 51
            echo gettext("The list is empty");
            // line 52
            echo "                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 55
        echo "            </tbody>
        </table>
        ";
        // line 57
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["posts"]) ? $context["posts"] : null), "url" => "forum")));
        // line 58
        echo "        </div>
            
        <div class=\"tab_content nopadding\" id=\"tab-topics\">
            ";
        // line 61
        echo $context["mf"]->gettable_search();
        echo "
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td style=\"width: 60%\">";
        // line 65
        echo gettext("Title");
        echo "</td>
                        <td>";
        // line 66
        echo gettext("Replies");
        echo "</td>
                        <td>";
        // line 67
        echo gettext("Views");
        echo "</td>
                        <td>";
        // line 68
        echo gettext("Status");
        echo "</td>
                        <td>";
        // line 69
        echo gettext("Sticky");
        echo "</td>
                        <td style=\"width: 13%\">Actions</td>
                    </tr>
                </thead>

                <tbody>
                ";
        // line 75
        $context["topics"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "forum_topic_get_list", array(0 => twig_array_merge(array("per_page" => 30, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 76
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["topics"]) ? $context["topics"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["topic"]) {
            // line 77
            echo "
                <tr>
                    <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "forum"), "category"), "html", null, true);
            echo " > ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "forum"), "title"), "html", null, true);
            echo " > ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "title"), "html", null, true);
            echo "</td>
                    <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "stats"), "posts_count"), "html", null, true);
            echo "</td>
                    <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "stats"), "views_count"), "html", null, true);
            echo "</td>
                    <td>";
            // line 82
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "status"));
            echo "</td>
                    <td>";
            // line 83
            echo $context["mf"]->getq($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "sticky"));
            echo "</td>
                    <td class=\"actions\">
                        <a class=\"bb-button btn14\" href=\"";
            // line 85
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/forum/topic"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        <a class=\"bb-button btn14 bb-rm-tr api-link\" href=\"admin/forum/topic_delete?id=";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "id"), "html", null, true);
            echo "\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"forum\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 90
            echo "                    <tr>
                        <td colspan=\"6\">
                            ";
            // line 92
            echo gettext("The list is empty");
            // line 93
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 96
        echo "                </tbody>
            </table>
            ";
        // line 98
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["topics"]) ? $context["topics"] : null), "url" => "forum")));
        // line 99
        echo "        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new\">

            <form method=\"post\" action=\"admin/forum/topic_create\" class=\"mainForm save api-form\" data-api-redirect=\"forum\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 106
        echo gettext("Forum");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 108
        echo $context["mf"]->getselectbox("forum_id", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "forum_get_pairs"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "forum_id"), 1);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 113
        echo gettext("Status");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"status\" value=\"active\" checked=\"checked\"/><label>";
        // line 115
        echo gettext("Active");
        echo "</label>
                            <input type=\"radio\" name=\"status\" value=\"locked\" /><label>";
        // line 116
        echo gettext("Locked");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 121
        echo gettext("Sticky");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"sticky\" value=\"1\" /><label>";
        // line 123
        echo gettext("Yes");
        echo "</label>
                            <input type=\"radio\" name=\"sticky\" value=\"0\" checked=\"checked\"/><label>";
        // line 124
        echo gettext("No");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 129
        echo gettext("Title");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"title\" value=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "title"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 137
        echo gettext("Message");
        echo "</label>
                        <div class=\"formRight\">
                            <textarea name=\"message\" cols=\"5\" rows=\"10\">";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "message"), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"submit\" value=\"";
        // line 143
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new-forum\">

            <form method=\"post\" action=\"admin/forum/create\" class=\"mainForm save api-form\" data-api-redirect=\"forum\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 153
        echo gettext("Category");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"category\" value=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "category"), "html", null, true);
        echo "\" placeholder=\"\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 160
        echo gettext("Title");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"title\" value=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "title"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 167
        echo gettext("Status");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"status\" value=\"active\" checked=\"checked\"/><label>";
        // line 169
        echo gettext("Active");
        echo "</label>
                            <input type=\"radio\" name=\"status\" value=\"locked\" /><label>";
        // line 170
        echo gettext("Locked");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 175
        echo gettext("Description");
        echo "</label>
                        <div class=\"formRight\">
                            <textarea name=\"description\" cols=\"5\" rows=\"4\">";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "description"), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"submit\" value=\"";
        // line 181
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
            <div class=\"fix\"></div>
        </div>
        
        <div class=\"tab_content nopadding\" id=\"tab-forums\">
            <form method=\"post\" action=\"admin/forum/update_priority\" class=\"mainForm api-form\" data-api-reload=\"1\">
                <fieldset>
                    <table class=\"tableStatic wide\">
                        <thead>
                            <tr>
                                <td style=\"width: 5%\">";
        // line 193
        echo gettext("Sorting");
        echo "</td>
                                <td>";
        // line 194
        echo gettext("Title");
        echo "</td>
                                <td>";
        // line 195
        echo gettext("Actions");
        echo "</td>
                            </tr>
                        </thead>
                            
                        <tbody>
                        ";
        // line 200
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "forum_get_categories"));
        foreach ($context['_seq'] as $context["category"] => $context["forums"]) {
            // line 201
            echo "                        <tr class=\"group\">
                            <th colspan=\"3\">";
            // line 202
            echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : null), "html", null, true);
            echo "</th>
                        </tr>
                        ";
            // line 204
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["forums"]) ? $context["forums"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
                // line 205
                echo "                        <tr>
                            <td><input type=\"text\" name=\"priority[";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "id"), "html", null, true);
                echo "]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "priority"), "html", null, true);
                echo "\" style=\"width:30px;\"></td>
                            <td>";
                // line 207
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "title"), "html", null, true);
                echo "</td>
                            <td class=\"actions\" style=\"width:13%\">
                                <a class=\"bb-button btn14\" href=\"";
                // line 209
                echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/forum/"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "id"), "html", null, true);
                echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                                <a class=\"bb-button btn14 bb-rm-tr api-link\" href=\"admin/forum/delete?id=";
                // line 210
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "id"), "html", null, true);
                echo "\" data-api-redirect=\"forum\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forum'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 214
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['category'], $context['forums'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 215
        echo "                        </tbody>

                        <tfoot>
                            <tr>
                                <td colspan=\"3\"></td>
                            </tr>
                        </tfoot>
                    </table>
                    <input type=\"submit\" value=\"";
        // line 223
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>
        
        <div class=\"fix\"></div>
    </div>
</div>

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
        return array (  524 => 223,  514 => 215,  508 => 214,  498 => 210,  492 => 209,  487 => 207,  481 => 206,  478 => 205,  474 => 204,  469 => 202,  466 => 201,  462 => 200,  454 => 195,  450 => 194,  446 => 193,  431 => 181,  424 => 177,  419 => 175,  411 => 170,  407 => 169,  402 => 167,  394 => 162,  389 => 160,  381 => 155,  376 => 153,  363 => 143,  356 => 139,  351 => 137,  342 => 131,  337 => 129,  329 => 124,  325 => 123,  320 => 121,  312 => 116,  308 => 115,  303 => 113,  295 => 108,  290 => 106,  281 => 99,  279 => 98,  275 => 96,  267 => 93,  265 => 92,  261 => 90,  252 => 86,  246 => 85,  241 => 83,  237 => 82,  233 => 81,  229 => 80,  221 => 79,  217 => 77,  211 => 76,  209 => 75,  200 => 69,  196 => 68,  192 => 67,  188 => 66,  184 => 65,  177 => 61,  172 => 58,  170 => 57,  166 => 55,  158 => 52,  156 => 51,  152 => 49,  142 => 44,  134 => 43,  129 => 41,  125 => 40,  114 => 38,  103 => 36,  98 => 35,  92 => 34,  90 => 33,  81 => 27,  77 => 26,  70 => 22,  59 => 14,  55 => 13,  51 => 12,  47 => 11,  43 => 10,  38 => 7,  35 => 6,  29 => 4,  24 => 3,  22 => 2,);
    }
}
