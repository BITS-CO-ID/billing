<?php

/* mod_order_manage.phtml */
class __TwigTemplate_91c331a178dcbc25f50f125b4295bb04 extends Twig_Template
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
        // line 5
        $context["service_partial"] = (("mod_service" . $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "service_type")) . "_manage.phtml");
        // line 6
        $context["upgradables"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "order_upgradables", array(0 => array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"))), "method");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), "html", null, true);
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"big-light-icon i-services\"></span></div>
            <h2>";
        // line 13
        echo gettext("Service details");
        echo "</h2>
            <p>";
        // line 14
        echo gettext("All information about your service");
        echo "</p>
        </div>
        <div class=\"block\">
            <table>
                <tbody>
                <tr>
                    <td><label>";
        // line 20
        echo gettext("Order");
        echo "</label></td>
                    <td>#";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo "</td>
                </tr>

                <tr>
                    <td><label>";
        // line 25
        echo gettext("Product name");
        echo "</label></td>
                    <td><strong>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), "html", null, true);
        echo "</strong></td>
                </tr>

                <tr>
                    <td><label>";
        // line 30
        echo gettext("Payment amount");
        echo "</label></td>
                    <td>";
        // line 31
        echo twig_money($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "total"), $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "currency"));
        echo "</td>
                </tr>

                ";
        // line 34
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "period")) {
            // line 35
            echo "                <tr>
                    <td><label>";
            // line 36
            echo gettext("Billing cycle");
            echo "</label></td>
                    <td>";
            // line 37
            echo twig_period_title($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "period"));
            echo "</td>
                </tr>
                ";
        }
        // line 40
        echo "                
                <tr>
                    <td><label>";
        // line 42
        echo gettext("Order status");
        echo "</label></td>
                    <td>";
        // line 43
        echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status"));
        echo "</td>
                </tr>

                <tr>
                    <td><label>";
        // line 47
        echo gettext("Order created");
        echo "</label></td>
                    <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "created_at")), "html", null, true);
        echo "</td>
                </tr>

                <tr>
                    <td><label>";
        // line 52
        echo gettext("Activated at");
        echo "</label></td>
                    <td>";
        // line 53
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "activated_at")) {
            echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "activated_at")), "html", null, true);
        } else {
            echo "-";
        }
        echo "</td>
                </tr>

                ";
        // line 56
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "period")) {
            // line 57
            echo "                <tr>
                    <td><label>";
            // line 58
            echo gettext("Renewal date");
            echo " ";
            if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "expires_at")) {
                echo " in ";
                echo twig_escape_filter($this->env, twig_daysleft_filter($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "expires_at")), "html", null, true);
                echo " day(s) ";
            }
            echo "</label></td>
                    <td>";
            // line 59
            if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "expires_at")) {
                echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "expires_at")), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
                </tr>
                ";
        }
        // line 62
        echo "                
                ";
        // line 63
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "notes")) {
            // line 64
            echo "                <tr>
                    <td><label>";
            // line 65
            echo gettext("Order notes");
            echo "</label></td>
                    <td>";
            // line 66
            echo twig_bbmd_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "notes"));
            echo "</td>
                </tr>
                ";
        }
        // line 69
        echo "
                ";
        // line 70
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "active_tickets") > 0)) {
            // line 71
            echo "                <tr>
                    <td><label>";
            // line 72
            echo gettext("Active support tickets");
            echo "</label></td>
                    <td>
                        <div class=\"num\"><a href=\"";
            // line 74
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("support"), "html", null, true);
            echo "\" class=\"redNum\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "active_tickets"), "html", null, true);
            echo "</a></div>
                        ";
            // line 76
            echo "                        ";
            // line 77
            echo "                    </td>
                </tr>
                ";
        }
        // line 80
        echo "                </tbody>
                
                <tfoot>
                    <tr>
                        <td colspan=\"2\">
                            
                        ";
        // line 86
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "period")) {
            // line 87
            echo "                        <button class=\"bb-button bb-button-submit\" type=\"button\" id=\"renewal-button\"><span class=\"light-icon i-invoice\"></span> ";
            echo gettext("Renew now");
            echo "</button>
                        ";
        }
        // line 89
        echo "
                        ";
        // line 90
        if ((isset($context["upgradables"]) ? $context["upgradables"] : null)) {
            // line 91
            echo "                        <button class=\"bb-button bb-button-submit\" type=\"button\" id=\"request-upgrade\"><span class=\"light-icon i-order\"></span> ";
            echo gettext("Request Upgrade");
            echo "</button>
                        ";
        }
        // line 93
        echo "
                        <button class=\"bb-button bb-button-submit\" type=\"button\" id=\"open-ticket\"><span class=\"light-icon i-support\"></span> ";
        // line 94
        echo gettext("Open ticket");
        echo "</button>
                        ";
        // line 95
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status") == "pending_setup")) {
            // line 96
            echo "                        <a class=\"bb-button api bb-button-submit\" href=\"client/order/delete?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\" data-api-redirect=\"";
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("service"), "html", null, true);
            echo "\"><span class=\"light-icon i-bin\"></span> ";
            echo gettext("Cancel");
            echo "</a>
                        ";
        }
        // line 98
        echo "
                        ";
        // line 99
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status") == "active")) {
            // line 100
            echo "                        <button class=\"bb-button bb-button-submit\" type=\"button\" id=\"request-cancellation\"><span class=\"light-icon i-forum\"></span> ";
            echo gettext("Request Cancellation");
            echo "</button>
                        ";
        }
        // line 102
        echo "
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div class=\"widget request-cancelation\" style=\"display: none;\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-services\">";
        // line 112
        echo gettext("Request Cancellation");
        echo "</h2>
        </div>
        <div class=\"block\">
            <form action=\"\" method=\"post\">
                <fieldset>
                    <p>
                        <label>";
        // line 118
        echo gettext("Help desk");
        echo ": </label>
                        ";
        // line 119
        echo $context["mf"]->getselectbox("support_helpdesk_id", $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "support_helpdesk_get_pairs"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "support_helpdesk_id"), 1);
        echo "
                    </p>

                    <p>
                        <label>";
        // line 123
        echo gettext("Subject");
        echo ": </label>
                        <input type=\"text\" name=\"subject\" value=\"";
        // line 124
        echo gettext("I would like to cancel");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), "html", null, true);
        echo "\" required=\"required\"/>
                    </p>

                    <p>
                        <label>";
        // line 128
        echo gettext("Reason");
        echo ": </label>
                        <textarea name=\"content\" cols=\"5\" rows=\"5\" required=\"required\">";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "content"));
        echo "</textarea>
                    </p>

                    <input type=\"hidden\" name=\"rel_type\" value=\"order\">
                    <input type=\"hidden\" name=\"rel_id\" value=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"rel_task\" value=\"cancel\">
                    <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
        // line 135
        echo gettext("Submit");
        echo "\">
                </fieldset>
            </form>
        </div>
    </div>

    <div class=\"widget open-ticket\" style=\"display: none;\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-services\">";
        // line 143
        echo gettext("Open new support ticket regarding this order");
        echo "</h2>
        </div>
        <div class=\"block\">
            <form action=\"\" method=\"post\">
                <fieldset>
                    <legend>";
        // line 148
        echo gettext("Submit new support ticket. Ticket will be visible in support section after submission");
        echo "</legend>
                    <p>
                        <label>";
        // line 150
        echo gettext("Help desk");
        echo ": </label>
                        ";
        // line 151
        echo $context["mf"]->getselectbox("support_helpdesk_id", $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "support_helpdesk_get_pairs"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "support_helpdesk_id"), 1);
        echo "
                    </p>

                    <p>
                        <label>";
        // line 155
        echo gettext("Subject");
        echo ": </label>
                        <input type=\"text\" name=\"subject\" value=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "subject"));
        echo "\" required=\"required\"/>
                    </p>

                    <p>
                        <label>";
        // line 160
        echo gettext("Message");
        echo ": </label>
                        <textarea name=\"content\" cols=\"5\" rows=\"5\" required=\"required\">";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "content"));
        echo "</textarea>
                    </p>

                    <input type=\"hidden\" name=\"rel_type\" value=\"order\">
                    <input type=\"hidden\" name=\"rel_id\" value=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo "\">
                    <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
        // line 166
        echo gettext("Submit");
        echo "\">
                </fieldset>
            </form>
        </div>
    </div>

    <div class=\"widget\" id=\"upgrades\" style=\"display: none;\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-services\">";
        // line 174
        echo gettext("Request upgrade");
        echo "</h2>
        </div>
        <div class=\"block\">
            <div class=\"block\">
                <form action=\"\" method=\"post\" class=\"api_form\" data-api-url=\"client/support/ticket_create\" data-api-msg=\"Upgrade request received\">
                    <fieldset>
                        <p>
                            <label>";
        // line 181
        echo gettext("Help desk");
        echo ": </label>
                            ";
        // line 182
        echo $context["mf"]->getselectbox("support_helpdesk_id", $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "support_helpdesk_get_pairs"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "support_helpdesk_id"), 1);
        echo "
                        </p>

                        <p>
                            <label>";
        // line 186
        echo gettext("Subject");
        echo ": </label>
                            <input type=\"text\" name=\"subject\" value=\"";
        // line 187
        echo gettext("I would like to upgrade");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), "html", null, true);
        echo "\" required=\"required\"/>
                        </p>

                        <p>
                            <label>";
        // line 191
        echo gettext("Upgrade to");
        echo ": </label>
                            ";
        // line 192
        echo $context["mf"]->getselectbox("rel_new_value", (isset($context["upgradables"]) ? $context["upgradables"] : null), "", 1);
        echo "
                        </p>

                        <p>
                            <label>";
        // line 196
        echo gettext("Notes");
        echo ": </label>
                            <textarea name=\"content\" cols=\"5\" rows=\"5\" placeholder=\"Your comment\">";
        // line 197
        echo gettext("I would like to upgrade");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), "html", null, true);
        echo "</textarea>
                        </p>

                        <input type=\"hidden\" name=\"rel_type\" value=\"order\">
                        <input type=\"hidden\" name=\"rel_id\" value=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"rel_task\" value=\"upgrade\">
                        <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
        // line 203
        echo gettext("Request");
        echo "\">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

";
        // line 210
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "group_master") == 1)) {
            // line 211
            $context["addons"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "order_addons", array(0 => array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"))), "method");
            // line 212
            if ((twig_length_filter($this->env, (isset($context["addons"]) ? $context["addons"] : null)) > 0)) {
                // line 213
                echo "    <div class=\"widget\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-services\">";
                // line 215
                echo gettext("Addons you have ordered with this service");
                echo "</h2>
        </div>
        <table>
            <thead>
                <tr>
                    <th>";
                // line 220
                echo gettext("Product/Service");
                echo "</th>
                    <th>";
                // line 221
                echo gettext("Price");
                echo "</th>
                    <th>";
                // line 222
                echo gettext("Billing Cycle");
                echo "</th>
                    <th>";
                // line 223
                echo gettext("Next due date");
                echo "</th>
                    <th>";
                // line 224
                echo gettext("Status");
                echo "</th>
                    <th>&nbsp</th>
                </tr>
            </thead>

            <tbody>
            ";
                // line 230
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["addons"]) ? $context["addons"] : null));
                foreach ($context['_seq'] as $context["i"] => $context["addon"]) {
                    // line 231
                    echo "            <tr class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                    echo "\">
                <td>";
                    // line 232
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "title"), "html", null, true);
                    echo "</td>
                <td>";
                    // line 233
                    echo twig_money($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "total"), $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "currency"));
                    echo "</td>
                <td>";
                    // line 234
                    echo twig_period_title($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "period"));
                    echo "</td>
                <td>";
                    // line 235
                    if ($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "expires_at")) {
                        echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "expires_at")), "html", null, true);
                    } else {
                        echo "-";
                    }
                    echo "</td>
                <td>";
                    // line 236
                    echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "status"));
                    echo "</td>
                <td class=\"actions\"><a class=\"bb-button\" href=\"";
                    // line 237
                    echo twig_escape_filter($this->env, twig_bb_client_link_filter("/service/manage"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "id"), "html", null, true);
                    echo "\"><span class=\"dark-icon i-drag\"></span></a></td>
            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['addon'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 240
                echo "            </tbody>
        </table>
    </div>
";
            }
        }
        // line 245
        echo "
<p><a class=\"bb-button\" href=\"";
        // line 246
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("/service"), "html", null, true);
        echo "\"><span class=\"dark-icon i-arrow\"></span> ";
        echo gettext("Back to services");
        echo "</a></p>


";
        // line 249
        if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_template_exists", array(0 => array("file" => (isset($context["service_partial"]) ? $context["service_partial"] : null))), "method")) {
            // line 250
            echo "    ";
            $context["service"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "order_service", array(0 => array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"))), "method");
            // line 251
            echo "    ";
            $template = $this->env->resolveTemplate((isset($context["service_partial"]) ? $context["service_partial"] : null));
            $template->display(array_merge($context, array("order" => (isset($context["order"]) ? $context["order"] : null), "service" => (isset($context["service"]) ? $context["service"] : null))));
        } else {
            // line 253
            echo "    ";
        }
        // line 255
        echo "
";
    }

    // line 285
    public function block_js($context, array $blocks = array())
    {
        // line 287
        echo "<script type=\"text/javascript\">
\$(function() {
    \$('#renewal-button').click(function(){

        if(confirm(\"This will generate new invoice. Are you sure you want to continue?\")) {
            bb.post(
                'client/invoice/renewal_invoice',
                {order_id: ";
        // line 294
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "js", null, true);
        echo " },
                function(result) {
                    bb.redirect('";
        // line 296
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("invoice"), "js", null, true);
        echo "' + '/' + result);
                }
            );
        }
        return false;
    });

    \$('#request-cancellation').click(function(){
        \$('div.request-cancelation').slideToggle();
        \$('div.open-ticket').slideUp();
    });

    \$('#open-ticket').click(function(){
        \$('div.open-ticket').slideToggle();
        \$('div.request-cancelation').slideUp();
    });

    \$('#request-upgrade').click(function(){
        \$('#upgrades').slideToggle();
    });

    \$('.open-ticket form').submit(function(){
        bb.post(
            'client/support/ticket_create',
            \$(this).serialize(),
            function(result) {
                bb.msg('Ticket was submitted. If you want to track conversation please go to support section');
                \$('div.open-ticket').fadeOut();
                \$('#open-ticket').fadeOut();
            }
        );
        return false;
    });

    \$('.request-cancelation form').submit(function(){
        bb.post(
            'client/support/ticket_create',
            \$(this).serialize(),
            function(result) {
                bb.msg('Service cancellation request received');
                \$('div.request-cancelation').fadeOut();
                \$('#request-cancellation').fadeOut();
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
        return "mod_order_manage.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  619 => 296,  614 => 294,  605 => 287,  602 => 285,  597 => 255,  594 => 253,  589 => 251,  586 => 250,  584 => 249,  576 => 246,  573 => 245,  566 => 240,  555 => 237,  551 => 236,  543 => 235,  539 => 234,  535 => 233,  531 => 232,  526 => 231,  522 => 230,  513 => 224,  509 => 223,  505 => 222,  501 => 221,  497 => 220,  489 => 215,  485 => 213,  483 => 212,  481 => 211,  479 => 210,  469 => 203,  464 => 201,  455 => 197,  451 => 196,  444 => 192,  440 => 191,  431 => 187,  427 => 186,  420 => 182,  416 => 181,  406 => 174,  395 => 166,  391 => 165,  384 => 161,  380 => 160,  373 => 156,  369 => 155,  362 => 151,  358 => 150,  353 => 148,  345 => 143,  334 => 135,  329 => 133,  322 => 129,  318 => 128,  309 => 124,  305 => 123,  298 => 119,  294 => 118,  285 => 112,  273 => 102,  267 => 100,  265 => 99,  262 => 98,  252 => 96,  250 => 95,  246 => 94,  243 => 93,  237 => 91,  235 => 90,  232 => 89,  226 => 87,  224 => 86,  216 => 80,  211 => 77,  209 => 76,  203 => 74,  198 => 72,  195 => 71,  193 => 70,  190 => 69,  184 => 66,  180 => 65,  177 => 64,  175 => 63,  172 => 62,  162 => 59,  152 => 58,  149 => 57,  147 => 56,  137 => 53,  133 => 52,  126 => 48,  122 => 47,  115 => 43,  111 => 42,  107 => 40,  101 => 37,  97 => 36,  94 => 35,  92 => 34,  86 => 31,  82 => 30,  75 => 26,  71 => 25,  64 => 21,  60 => 20,  51 => 14,  47 => 13,  41 => 9,  38 => 8,  32 => 3,  27 => 6,  25 => 5,  23 => 2,);
    }
}
