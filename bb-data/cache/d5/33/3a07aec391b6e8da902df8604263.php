<?php

/* mod_support_ticket.phtml */
class __TwigTemplate_d5333a07aec391b6e8da902df8604263 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
            'head' => array($this, 'block_head'),
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
        // line 13
        $context["active_menu"] = "support";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "messages")), "html", null, true);
        echo " ";
        echo gettext("message(s)");
    }

    // line 5
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 6
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/"), "html", null, true);
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("support"), "html", null, true);
        echo "\">";
        echo gettext("Support tickets");
        echo "</a></li>
    <li class=\"lastB\">#";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
        echo "  - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<div class=\"widget simpleTabs tabsRight\">
    <div class=\"head\">
        <h5 class=\"iSpeech\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), "html", null, true);
        echo "</h5>
    </div>

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 22
        echo gettext("Ticket");
        echo "</a></li>
        <li><a href=\"#tab-manage\">";
        // line 23
        echo gettext("Manage");
        echo "</a></li>
        <li><a href=\"#tab-notes\">";
        // line 24
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "notes")) > 0)) {
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "notes")), "html", null, true);
            echo " - ";
        }
        echo gettext("Notes");
        echo "</a></li>
        <li><a href=\"#tab-support\">";
        // line 25
        echo gettext("Client tickets");
        echo "</a></li>
    </ul>
    
    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">
            <table class=\"tableStatic wide\">
                <tbody>
                    <tr class=\"noborder\">
                        <td style=\"width: 30%\">";
        // line 34
        echo gettext("Ticket ID");
        echo "</td>
                        <td><b>#";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
        echo "</b></td>
                    </tr>

                    <tr>
                        <td>";
        // line 39
        echo gettext("Client");
        echo "</td>
                        <td>#";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "client"), "id"), "html", null, true);
        echo " <a href=\"";
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client/manage"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "client"), "id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "client"), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "client"), "last_name"), "html", null, true);
        echo "</a></td>
                    </tr>
                    
                    <tr>
                        <td>";
        // line 44
        echo gettext("Help desk");
        echo "</td>
                        <td class=\"shd\">
                            ";
        // line 46
        echo $context["mf"]->getselectbox("support_helpdesk_id", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_helpdesk_get_pairs"), $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "support_helpdesk_id"), 1);
        echo "
                        </td>
                    </tr>

                    <tr>
                        <td>";
        // line 51
        echo gettext("Status");
        echo "</td>
                        <td>
                            ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_ticket_get_statuses", array(0 => array("titles" => 1)), "method"));
        foreach ($context['_seq'] as $context["tcode"] => $context["tstatus"]) {
            // line 54
            echo "                            <label><input class=\"tst\" type=\"radio\" name=\"status\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["tcode"]) ? $context["tcode"] : null), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status") == (isset($context["tcode"]) ? $context["tcode"] : null))) {
                echo "checked=\"checked\"";
            }
            echo " /> ";
            echo twig_escape_filter($this->env, (isset($context["tstatus"]) ? $context["tstatus"] : null), "html", null, true);
            echo "</label>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tcode'], $context['tstatus'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 56
        echo "                        </td>
                    </tr>
                    
                    <tr>
                        <td>";
        // line 60
        echo gettext("Time opened");
        echo "</td>
                        <td>";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "created_at"), "l, d F Y"), "html", null, true);
        echo "</td>
                    </tr>

                 </tbody>

                ";
        // line 66
        $context["task"] = $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "rel");
        // line 67
        echo "                <tbody>
                ";
        // line 68
        if ($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "task")) {
            // line 69
            echo "                <tr>
                    <td><label>";
            // line 70
            echo gettext("Task");
            echo "</label></td>
                    <td><strong>";
            // line 71
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "task"));
            echo "</strong></td>
                </tr>
                ";
        }
        // line 74
        echo "
                ";
        // line 75
        if (($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "type") == "order")) {
            // line 76
            echo "                <tr>
                    <td><label>";
            // line 77
            echo gettext("Related to");
            echo "</label></td>
                    <td><a href=\"";
            // line 78
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("order/manage"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id"), "html", null, true);
            echo "\">Order #";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id"), "html", null, true);
            echo "</a></td>
                </tr>
                ";
        }
        // line 81
        echo "
                ";
        // line 82
        if (($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "task") == "upgrade")) {
            // line 83
            echo "                <tr>
                    <td><label>";
            // line 84
            echo gettext("Upgrade to");
            echo "</label></td>
                    <td><a href=\"";
            // line 85
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("product/manage"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "new_value"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "product_get_pairs"), $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "new_value"), array(), "array"), "html", null, true);
            echo "</a></td>
                </tr>
                ";
        }
        // line 88
        echo "
                </tbody>

                 <tfoot>
                     <tr>
                         <td colspan=\"2\">
                            <div class=\"aligncenter\">
                                ";
        // line 95
        if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status") != "closed")) {
            // line 96
            echo "                                <a href=\"admin/support/ticket_close?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"support?status=open\" class=\"btn55 mr10 api-link\" ><img src=\"images/icons/middlenav/stop.png\" alt=\"\"><span>Close ticket</span></a>
                                ";
        }
        // line 98
        echo "                                <a href=\"admin/support/ticket_delete?id=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
        echo "\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"support\" class=\"btn55 mr10 api-link\"><img src=\"images/icons/middlenav/trash.png\" alt=\"\"><span>Delete</span></a>

                                ";
        // line 100
        if (($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "status") == "pending")) {
            // line 101
            echo "                                <a href=\"admin/support/task_complete?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "\" class=\"btn55 mr10 api-link\" data-api-reload=\"1\"><img src=\"images/icons/middlenav/check.png\" alt=\"\" data-api-reload=\"1\"><span>Set Task complete</span></a>
                                ";
        }
        // line 103
        echo "                            </div>
                         </td>
                     </tr>
                 </tfoot>
            </table>
            <div class=\"fix\"></div>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-manage\">
            <form method=\"post\" action=\"admin/support/ticket_update\" class=\"mainForm api-form\" data-api-reload=\"1\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 115
        echo gettext("Subject");
        echo "</label>
                        <div class=\"formRight noborder\">
                            <input type=\"text\" name=\"subject\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 123
        echo gettext("Help desk");
        echo "</label>
                        <div class=\"formRight\">
                            ";
        // line 125
        echo $context["mf"]->getselectbox("support_helpdesk_id", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_helpdesk_get_pairs"), $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "support_helpdesk_id"), 1);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 131
        echo gettext("Status");
        echo "</label>
                        <div class=\"formRight\">
                            ";
        // line 133
        echo $context["mf"]->getselectbox("status", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_ticket_get_statuses", array(0 => array("titles" => 1)), "method"), $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status"), 1);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 139
        echo gettext("Priority");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"priority\" value=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "priority"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                     <input type=\"submit\" value=\"";
        // line 145
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
        echo "\">
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-notes\">

            <table class=\"tableStatic wide\">
            ";
        // line 154
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "notes"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 155
            echo "                <tr ";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                echo "class=\"noborder\"";
            }
            echo ">
                    <td>";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : null), "note"), "html", null, true);
            echo "</td>
                    <td style=\"width: 20%\"><a href=\"";
            // line 157
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("staff"), "html", null, true);
            echo "/manage/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : null), "admin_id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["note"]) ? $context["note"] : null), "author"), "name"), "html", null, true);
            echo "</a></td>
                    <td style=\"width: 5%\">
                        <a href=\"admin/support/note_delete?id=";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : null), "id"), "html", null, true);
            echo "\" data-api-confirm=\"Are you sure?\" data-api-reload=\"1\" class=\"bb-button btn14 api-link\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 163
        echo "                <tfoot>
                    <tr>
                        <td colspan=\"3\" ";
        // line 165
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "notes")) == 0)) {
            echo "class=\"noborder\"";
        }
        echo ">

                            <form method=\"post\" action=\"admin/support/note_create\" class=\"mainForm api-form\" data-api-reload=\"1\">
                                <fieldset>
                                    <textarea name=\"note\" cols=\"5\" rows=\"5\" required=\"required\" placeholder=\"Add new note\" style=\"width: 98%\"></textarea>
                                    <input type=\"submit\" value=\"";
        // line 170
        echo gettext("Add note");
        echo "\" class=\"greyishBtn submitForm\" style=\" margin-top: 22px; width: 100px\"/>
                                    <input type=\"hidden\" name=\"ticket_id\" value=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
        echo "\">
                                </fieldset>
                            </form>

                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-support\">
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td width=\"60%\">Subject</td>
                        <td width=\"15%\">Help desk</td>
                        <td width=\"15%\">Status</td>
                        <td>&nbsp;</td>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 194
        $context["tickets"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_ticket_get_list", array(0 => array("per_page" => "20", "client_id" => $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "client"), "id"))), "method");
        // line 195
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 196
            echo "                    <tr>
                        <td>";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "</td>
                        <td>";
            // line 198
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), 30), "html", null, true);
            echo "</td>
                        <td>";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "helpdesk"), "name"), "html", null, true);
            echo "</td>
                        <td>";
            // line 200
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status"));
            echo "</td>
                        <td class=\"actions\"><a class=\"bb-button btn14\" href=\"";
            // line 201
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/support/ticket"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a></td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 204
            echo "                    <tr>
                        <td colspan=\"5\">";
            // line 205
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 208
        echo "                </tbody>

                <tfoot>
                    <tr>
                        <td colspan=\"5\">
                            <a href=\"";
        // line 213
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("support"), "html", null, true);
        echo "?client_id=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
        echo "#tab-new\" class=\"btnIconLeft mr10 mt5\" ><img src=\"images/icons/dark/help.png\" alt=\"\" class=\"icon\"><span>New support ticket</span></a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

    </div>
</div>

<div class=\"conversation\">
";
        // line 224
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
            // line 225
            echo "<div class=\"widget ";
            echo (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last")) ? ("last") : (""));
            echo "\">
    <div class=\"head\" style=\"cursor: pointer;\">
        <h5 class=\"no-icon\"><img src=\"";
            // line 227
            echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "author"), "email")), "html", null, true);
            echo "?size=20\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "author"), "name"), "html", null, true);
            echo "\" class=\"gravatar\"/> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "author"), "name"), "html", null, true);
            echo "</h5>
        <h5 style=\"float:right;\">";
            // line 228
            echo twig_escape_filter($this->env, twig_bb_datetime($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "created_at")), "html", null, true);
            echo "</h5>
    </div>

    <div class=\"body\" style=\"display:";
            // line 231
            echo ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last") || (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") + 1) == twig_length_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "messages"))))) ? ("block") : ("none"));
            echo ";\">
        ";
            // line 232
            echo twig_bbmd_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "content"));
            echo "
        <div class=\"clear\"></div>
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
        // line 237
        echo "</div>


<div class=\"widget\" id=\"reply-box\">
    <div class=\"head\">
        <h5 class=\"iSpeech\">";
        // line 242
        echo gettext("Reply as");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "name"), "html", null, true);
        echo "</h5>
        ";
        // line 243
        $this->env->loadTemplate("mod_support_canned_selector.phtml")->display($context);
        // line 244
        echo "    </div>

    <form method=\"post\" action=\"admin/support/ticket_reply\" class=\"mainForm api-form\" data-api-redirect=\"support?status=open\">
        <fieldset>
            <textarea name=\"content\" cols=\"5\" rows=\"20\" required=\"required\" class=\"bb-textarea\" id=\"rt\">Hello ";
        // line 248
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "client"), "first_name"), "html", null, true);
        echo ",
";
        // line 249
        echo twig_escape_filter($this->env, (isset($context["canned_delay_message"]) ? $context["canned_delay_message"] : null), "html", null, true);
        echo "



";
        // line 253
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature"), "html", null, true);
        echo "
";
        // line 254
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "helpdesk"), "signature"), "html", null, true);
        echo "</textarea>
            <input type=\"hidden\" name=\"id\" value=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
        echo "\">
            <input type=\"submit\" value=\"";
        // line 256
        echo gettext("Post");
        echo "\" class=\"greyishBtn submitForm\" />


            <div class=\"body\">
                <a href=\"#\"  class=\"btnIconLeft mr10\" onclick=\"\$('.conversation .body').toggle(); return false;\"><span>Show/Hide messages</span></a>

                ";
        // line 262
        if (((twig_length_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "messages")) > 2) && ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status") != "closed"))) {
            // line 263
            echo "                <a href=\"admin/support/ticket_close?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"support?status=open\" class=\"btnIconLeft mr10 api-link\" ><span>Close ticket</span></a>
                ";
        }
        // line 265
        echo "            </div>
        </fieldset>
    </form>

    <div class=\"clear\"></div>
</div>

";
    }

    // line 274
    public function block_js($context, array $blocks = array())
    {
        // line 275
        echo "<script type=\"text/javascript\">
function setSelRange(inputEl, selStart, selEnd) { 
   if (inputEl.setSelectionRange) { 
     inputEl.focus(); 
     inputEl.setSelectionRange(selStart, selEnd); 
   } else if (inputEl.createTextRange) { 
     var range = inputEl.createTextRange(); 
     range.collapse(true); 
     range.moveEnd('character', selEnd); 
     range.moveStart('character', selStart); 
     range.select(); 
   }
}

\$(function() {

    \$('#reply-box textarea').focus();
    var ta = document.getElementById('rt');
    var pos = ta.innerHTML.indexOf('\\n') + 2;
    setSelRange(ta, pos, pos);
 
    \$('.shd select').change(function(){
        api.get('admin/support/ticket_update', {id:";
        // line 297
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
        echo ", support_helpdesk_id: \$(this).val()});
    });
    
    \$('input.tst').click(function(){
        api.get('admin/support/ticket_update', {id:";
        // line 301
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
        echo ", status: \$(this).val()});
    });

    \$('.conversation .head').click(function(){
        \$(this).siblings('.body').toggle();
        return false;
    });
    
});
</script>
";
    }

    // line 313
    public function block_head($context, array $blocks = array())
    {
        echo $context["mf"]->getbb_editor(".bb-textarea");
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
        return array (  727 => 313,  712 => 301,  705 => 297,  681 => 275,  678 => 274,  667 => 265,  661 => 263,  659 => 262,  650 => 256,  646 => 255,  642 => 254,  638 => 253,  631 => 249,  627 => 248,  621 => 244,  619 => 243,  613 => 242,  606 => 237,  587 => 232,  583 => 231,  577 => 228,  569 => 227,  563 => 225,  546 => 224,  530 => 213,  523 => 208,  514 => 205,  511 => 204,  501 => 201,  497 => 200,  493 => 199,  489 => 198,  485 => 197,  482 => 196,  476 => 195,  474 => 194,  448 => 171,  444 => 170,  434 => 165,  430 => 163,  412 => 159,  403 => 157,  399 => 156,  392 => 155,  375 => 154,  365 => 147,  360 => 145,  353 => 141,  348 => 139,  339 => 133,  334 => 131,  325 => 125,  320 => 123,  311 => 117,  306 => 115,  292 => 103,  286 => 101,  284 => 100,  278 => 98,  272 => 96,  270 => 95,  261 => 88,  251 => 85,  247 => 84,  244 => 83,  242 => 82,  239 => 81,  229 => 78,  225 => 77,  222 => 76,  220 => 75,  217 => 74,  211 => 71,  207 => 70,  204 => 69,  202 => 68,  199 => 67,  197 => 66,  189 => 61,  185 => 60,  179 => 56,  164 => 54,  160 => 53,  155 => 51,  147 => 46,  142 => 44,  127 => 40,  123 => 39,  116 => 35,  112 => 34,  100 => 25,  92 => 24,  88 => 23,  84 => 22,  77 => 18,  72 => 15,  69 => 14,  60 => 9,  54 => 8,  48 => 7,  45 => 6,  42 => 5,  32 => 3,  27 => 13,  25 => 2,);
    }
}
