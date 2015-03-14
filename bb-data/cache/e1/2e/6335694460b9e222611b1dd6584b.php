<?php

/* mod_support_tickets.phtml */
class __TwigTemplate_e12e6335694460b9e222611b1dd6584b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'top_content' => array($this, 'block_top_content'),
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
        // line 4
        $context["active_menu"] = "support";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Support tickets");
    }

    // line 5
    public function block_top_content($context, array $blocks = array())
    {
        // line 6
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "show_filter")) {
            // line 7
            echo "<div class=\"widget filterWidget\">
    <div class=\"head\"><h5 class=\"iMagnify\">";
            // line 8
            echo gettext("Filter support tickets");
            echo "</h5></div>
    <div class=\"body nopadding\">

        <form method=\"get\" action=\"\" class=\"mainForm\">
            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>";
            // line 14
            echo gettext("Client ID");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"client_id\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "client_id"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 22
            echo gettext("Order ID");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"order_id\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "order_id"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 30
            echo gettext("Ticket subject");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"subject\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "subject"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 38
            echo gettext("Ticket messages");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"content\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "content"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 46
            echo gettext("Priority");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"priority\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "priority"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 54
            echo gettext("Status");
            echo "</label>
                        <div class=\"formRight\">
                            ";
            // line 56
            echo $context["mf"]->getselectbox("status", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_ticket_get_statuses", array(0 => array("titles" => 1)), "method"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "status"), 0, "All statuses");
            echo "
                        </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 62
            echo gettext("Help desk");
            echo ":</label>
                    <div class=\"formRight\">
                            ";
            // line 64
            echo $context["mf"]->getselectbox("support_helpdesk_id", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_helpdesk_get_pairs"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "support_helpdesk_id"), 0, "All help desks");
            echo "
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 70
            echo gettext("Created at");
            echo "</label>
                    <div class=\"formRight moreFields\">
                        <ul>
                            <li style=\"width: 100px\"><input type=\"text\" name=\"date_from\" value=\"";
            // line 73
            if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from"), "Y-m-d"), "html", null, true);
            }
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y-m-d"), "html", null, true);
            echo "\" class=\"datepicker\"/></li>
                            <li class=\"sep\">-</li>
                            <li style=\"width: 100px\"><input type=\"text\" name=\"date_to\" value=\"";
            // line 75
            if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_to")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_to"), "Y-m-d"), "html", null, true);
            }
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y-m-d"), "html", null, true);
            echo "\" class=\"datepicker\"/></li>
                        </ul>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <input type=\"hidden\" name=\"show_filter\" value=\"1\" />
                <input type=\"submit\" value=\"";
            // line 82
            echo gettext("Filter");
            echo "\" class=\"greyishBtn submitForm\" />
            </fieldset>
        </form>
        <div class=\"fix\"></div>
    </div>
</div>
";
        } else {
            // line 89
            $context["statuses"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_ticket_get_statuses");
            // line 90
            echo "<div class=\"stats\">
    <ul>
        <li><a href=\"";
            // line 92
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("support"), "html", null, true);
            echo "?status=open\" class=\"count green\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "open"), "html", null, true);
            echo "</a><span>";
            echo gettext("Tickets waiting for staff reply");
            echo "</span></li>
        <li><a href=\"";
            // line 93
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("support"), "html", null, true);
            echo "?status=on_hold\" class=\"count blue\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "on_hold"), "html", null, true);
            echo "</a><span>";
            echo gettext("Tickets waiting for client reply");
            echo "</span></li>
        <li><a href=\"";
            // line 94
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("support"), "html", null, true);
            echo "?status=closed\" class=\"count grey\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "closed"), "html", null, true);
            echo "</a><span>";
            echo gettext("Solved tickets");
            echo "</span></li>
        <li class=\"last\"><a href=\"";
            // line 95
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("support"), "html", null, true);
            echo "\" class=\"count grey\" title=\"\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "open") + $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "on_hold")) + $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "closed")), "html", null, true);
            echo "</a><span>";
            echo gettext("Total");
            echo "</span></li>
    </ul>
    <div class=\"fix\"></div>
</div>
";
        }
        // line 100
        echo "
";
    }

    // line 103
    public function block_content($context, array $blocks = array())
    {
        // line 104
        echo "
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 108
        echo gettext("Support tickets");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 109
        echo gettext("New ticket");
        echo "</a></li>
        <li><a href=\"#tab-email\">";
        // line 110
        echo gettext("New email");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">

        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">

            ";
        // line 118
        echo $context["mf"]->gettable_search();
        echo "
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td colspan=\"2\">";
        // line 122
        echo gettext("Client");
        echo "</td>
                        <td>";
        // line 123
        echo gettext("Subject");
        echo "</td>
                        <td>";
        // line 124
        echo gettext("Status");
        echo "</td>
                        <td>";
        // line 125
        echo gettext("Helpdesk");
        echo "</td>
                        <td style=\"width: 13%\">&nbsp;</td>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 131
        $context["tickets"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_ticket_get_list", array(0 => twig_array_merge(array("per_page" => 30, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 132
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["ticket"]) {
            // line 133
            echo "                    <tr class=\"priority_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "priority"), "html", null, true);
            echo "\">
                        <td style=\"width:5%\"><a href=\"";
            // line 134
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client/manage"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "client_id"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "client"), "email")), "html", null, true);
            echo "?size=20\" alt=\"gravatar\" /></a></td>
                        <td style=\"width:20%\"><a href=\"";
            // line 135
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client/manage"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "client_id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "client"), "first_name"), 1, null, "."), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "client"), "last_name"), "html", null, true);
            echo "</a></td>
                        <td>
                            <a href=\"";
            // line 137
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("support/ticket"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "#reply-box\">#";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), 50), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "replies"), "html", null, true);
            echo ")</a>
                            <br/>
                            ";
            // line 139
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "notes"))) {
                // line 140
                echo "                            <a href=\"#\" rel=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "notes")), "html", null, true);
                echo "\" class=\"show-notes\"><img src=\"images/icons/dark/notebook.png\" alt=\"\" /></a>
                            ";
            }
            // line 142
            echo "                            ";
            echo twig_escape_filter($this->env, twig_timeago_filter($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "updated_at")), "html", null, true);
            echo " ";
            echo gettext("ago");
            // line 143
            echo "                        </td>
                        <td>";
            // line 144
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status"));
            echo "</td>
                        <td>";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "helpdesk"), "name"), "html", null, true);
            echo "</td>
                        <td class=\"actions\">
                            <a class=\"bb-button btn14\" href=\"";
            // line 147
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/support/ticket"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "#reply-box\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                            <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"support\" href=\"admin/support/ticket_delete?id=";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                        </td>
                    </tr>

                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 153
            echo "
                    <tr>
                        <td colspan=\"6\">";
            // line 155
            echo gettext("The list is empty");
            echo "</td>
                    </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 159
        echo "
                </tbody>
            </table>
            ";
        // line 162
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["tickets"]) ? $context["tickets"] : null), "url" => "support")));
        // line 163
        echo "        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new\">
            <div class=\"help\">
                <h3>";
        // line 167
        echo gettext("Open ticket for existing client");
        echo "</h3>
            </div>

            <form method=\"post\" action=\"admin/support/ticket_create\" class=\"mainForm api-form\" data-api-redirect=\"support\">
                <fieldset>
                    ";
        // line 172
        if ((!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "client_id"))) {
            // line 173
            echo "                    <div class=\"rowElem noborder\">
                        <label>";
            // line 174
            echo gettext("Client");
            echo "</label>
                        <div class=\"formRight noborder\">
                            <input type=\"text\" id=\"client_selector\" placeholder=\"";
            // line 176
            echo gettext("Start typing clients name, email or ID");
            echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    ";
        }
        // line 181
        echo "                    <div class=\"rowElem\">
                        <label>";
        // line 182
        echo gettext("Help desk");
        echo "</label>
                        <div class=\"formRight\">
                            ";
        // line 184
        echo $context["mf"]->getselectbox("support_helpdesk_id", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_helpdesk_get_pairs"), "", 1);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 190
        echo gettext("Subject");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"subject\" value=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 198
        echo gettext("Message");
        echo "</label>
                        <div class=\"formRight\">
                        <textarea name=\"content\" cols=\"5\" rows=\"10\" required=\"required\" id=\"msg-area-";
        // line 200
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "id"), "html", null, true);
        echo "\">

";
        // line 202
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature"), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <input type=\"hidden\" name=\"client_id\" value=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "client_id"), "html", null, true);
        echo "\" id=\"client_id\"/>
                    <input type=\"submit\" value=\"";
        // line 208
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-email\">
            <div class=\"help\">
                <h3>";
        // line 215
        echo gettext("Open public ticket for non client");
        echo "</h3>
            </div>

            <form method=\"post\" action=\"admin/support/public_ticket_create\" class=\"mainForm api-form\" data-api-jsonp=\"onAfterPublicTicketCreate\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 221
        echo gettext("Receivers name");
        echo "</label>
                        <div class=\"formRight noborder\">
                            <input type=\"text\" name=\"name\" required=\"required\" placeholder=\"";
        // line 223
        echo gettext("John Smith");
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 229
        echo gettext("Email");
        echo "</label>
                        <div class=\"formRight noborder\">
                            <input type=\"text\" name=\"email\" required=\"required\" placeholder=\"";
        // line 231
        echo gettext("to@gmail.com");
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 237
        echo gettext("Subject");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"subject\" value=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo gettext("Email subject");
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 245
        echo gettext("Message");
        echo "</label>
                        <div class=\"formRight\">
                        <textarea name=\"message\" cols=\"5\" rows=\"10\" required=\"required\">

";
        // line 249
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature"), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <input type=\"hidden\" name=\"client_id\" value=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "client_id"), "html", null, true);
        echo "\" id=\"client_id\"/>
                    <input type=\"submit\" value=\"";
        // line 255
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

    </div>
    
</div>

";
    }

    // line 267
    public function block_js($context, array $blocks = array())
    {
        // line 268
        echo "<script type=\"text/javascript\">
\$(function() {

\t\$('#client_selector').autocomplete({
        source: function( request, response ) {
            \$.ajax({
                url: bb.restUrl('admin/client/get_pairs'),
                dataType: \"json\",
                data: {
                    per_page: 10,
                    search: request.term
                },
                success: function( data ) {
                    response( \$.map( data.result, function( name, id) {
                        return {
                            label: name,
                            value: id
                        }
                    }));
                }
            });
        },
        minLength: 1,
        select: function( event, ui ) {
            \$(\"#client_selector\").val(ui.item.label);
            \$(\"#client_id\").val(ui.item.value);
            return false;
        }
    });

    \$('a.show-notes').click(function(){
        bb.post('admin/support/ticket_get', { id:\$(this).attr('rel') }, function(result){
            var html = \$('<div>');
            \$.each(result.notes, function(i, v){
                html.append(\$('<div>').html(v.note));
                html.append(\$('<hr>'));
            });
            jAlert(html, '";
        // line 305
        echo gettext("Notes");
        echo "');
        });
        
        return false;
    });

});

function onAfterPublicTicketCreate(result) {
    bb.redirect('support/public-ticket/'+result);
}

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
        return array (  626 => 305,  587 => 268,  584 => 267,  570 => 255,  566 => 254,  558 => 249,  551 => 245,  540 => 239,  535 => 237,  526 => 231,  521 => 229,  512 => 223,  507 => 221,  498 => 215,  488 => 208,  484 => 207,  476 => 202,  471 => 200,  466 => 198,  457 => 192,  452 => 190,  443 => 184,  438 => 182,  435 => 181,  427 => 176,  422 => 174,  419 => 173,  417 => 172,  409 => 167,  403 => 163,  401 => 162,  396 => 159,  386 => 155,  382 => 153,  372 => 148,  366 => 147,  361 => 145,  357 => 144,  354 => 143,  349 => 142,  341 => 140,  339 => 139,  326 => 137,  315 => 135,  307 => 134,  302 => 133,  296 => 132,  294 => 131,  285 => 125,  281 => 124,  277 => 123,  273 => 122,  266 => 118,  255 => 110,  251 => 109,  247 => 108,  241 => 104,  238 => 103,  233 => 100,  221 => 95,  213 => 94,  205 => 93,  197 => 92,  193 => 90,  191 => 89,  181 => 82,  167 => 75,  158 => 73,  152 => 70,  143 => 64,  138 => 62,  129 => 56,  124 => 54,  115 => 48,  110 => 46,  101 => 40,  96 => 38,  87 => 32,  82 => 30,  73 => 24,  68 => 22,  59 => 16,  54 => 14,  45 => 8,  42 => 7,  40 => 6,  37 => 5,  31 => 3,  26 => 4,  24 => 2,);
    }
}
