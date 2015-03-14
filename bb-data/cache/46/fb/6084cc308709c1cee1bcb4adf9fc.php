<?php

/* mod_index_dashboard.phtml */
class __TwigTemplate_46fb6084cc308709c1cee1bcb4adf9fc extends Twig_Template
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
        // line 4
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Client Area");
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"dashboard\">
";
        // line 8
        if ((isset($context["client"]) ? $context["client"] : null)) {
            // line 9
            echo "
";
            // line 10
            $context["tickets"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "support_ticket_get_list", array(0 => array("status" => "on_hold")), "method");
            // line 11
            if (($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : null), "total") > 0)) {
                // line 12
                echo "    <div class=\"widget\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-support\">";
                // line 14
                echo gettext("Tickets waiting your reply");
                echo "</h2>
        </div>
        <table>
            <thead>
                <tr>
                    <th>";
                // line 19
                echo gettext("Id");
                echo "</th>
                    <th>";
                // line 20
                echo gettext("Subject");
                echo "</th>
                    <th>";
                // line 21
                echo gettext("Help desk");
                echo "</th>
                    <th>";
                // line 22
                echo gettext("Status");
                echo "</th>
                    <th>";
                // line 23
                echo gettext("Submitted");
                echo "</th>
                </tr>
            </thead>

            <tbody>
                ";
                // line 28
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : null), "list"));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["i"] => $context["ticket"]) {
                    // line 29
                    echo "
                <tr class=\"";
                    // line 30
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                    echo "\">
                    <td>";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
                    echo "</td>
                    <td><a href=\"";
                    // line 32
                    echo twig_escape_filter($this->env, twig_bb_client_link_filter("support/ticket"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), "html", null, true);
                    echo "</a></td>
                    <td>";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "helpdesk"), "name"), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 34
                    echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status"));
                    echo "</td>
                    <td>";
                    // line 35
                    echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "created_at")), "html", null, true);
                    echo "</td>
                </tr>

                ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 39
                    echo "
                <tr>
                    <td colspan=\"5\">";
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
        </table>
    </div>
";
            }
            // line 50
            echo "
";
            // line 51
            $context["profile"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "client_get");
            // line 52
            echo "<div class=\"grid_6 alpha\">
    <div class=\"widget\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-profile\">";
            // line 55
            echo gettext("Profile");
            echo "</h2>
        </div>

        <table>
            <tbody>
                <tr>
                    <td>";
            // line 61
            echo gettext("ID");
            echo "</td>
                    <td>#";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "id"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>";
            // line 65
            echo gettext("Email");
            echo "</td>
                    <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "email"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>";
            // line 69
            echo gettext("Balance");
            echo "</td>
                    <td>";
            // line 70
            echo twig_money($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "balance"), $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "currency"));
            echo "</td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <td colspan=\"2\">
                        <a class=\"bb-button\" href=\"";
            // line 77
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("me"), "html", null, true);
            echo "\">";
            echo gettext("Manage profile");
            echo "</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<div class=\"grid_6 omega\">
    <div class=\"widget\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-invoice\">";
            // line 88
            echo gettext("Invoices");
            echo "</h2>
        </div>
        <table>
            <tbody>
                <tr>
                    <td>";
            // line 93
            echo gettext("Total");
            echo "</td>
                    <td>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "invoice_get_list", array(), "method"), "total"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>";
            // line 97
            echo gettext("Paid");
            echo "</td>
                    <td>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "invoice_get_list", array(0 => array("status" => "paid")), "method"), "total"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>";
            // line 101
            echo gettext("Unpaid");
            echo "</td>
                    <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "invoice_get_list", array(0 => array("status" => "unpaid")), "method"), "total"), "html", null, true);
            echo "</td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <td colspan=\"2\">
                        <a class=\"bb-button\" href=\"";
            // line 109
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("invoice"), "html", null, true);
            echo "\">";
            echo gettext("All Invoices");
            echo "</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<div class=\"grid_6 alpha\">
    <div class=\"widget\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-services\">";
            // line 120
            echo gettext("Services");
            echo "</h2>
        </div>
        <table>
            <tbody>
                <tr>
                    <td>";
            // line 125
            echo gettext("Total");
            echo "</td>
                    <td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "order_get_list", array(0 => array("hide_addons" => 1)), "method"), "total"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>";
            // line 129
            echo gettext("Active");
            echo "</td>
                    <td>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "order_get_list", array(0 => array("hide_addons" => 1, "status" => "active")), "method"), "total"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>";
            // line 133
            echo gettext("Soon expires");
            echo "</td>
                    <td>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "order_get_list", array(0 => array("expiring" => 1)), "method"), "total"), "html", null, true);
            echo "</td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <td colspan=\"2\">
                        <a class=\"bb-button\" href=\"";
            // line 141
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("service"), "html", null, true);
            echo "\">";
            echo gettext("All services");
            echo "</a>
                        <a class=\"bb-button bb-button-submit\" href=\"";
            // line 142
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("order"), "html", null, true);
            echo "\">";
            echo gettext("New order");
            echo "</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<div class=\"grid_6 omega\">
    <div class=\"widget\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-support\">";
            // line 153
            echo gettext("Tickets");
            echo "</h2>
        </div>
        <table>
            <tbody>
                <tr>
                    <td>";
            // line 158
            echo gettext("Total");
            echo "</td>
                    <td>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "support_ticket_get_list", array(), "method"), "total"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>";
            // line 162
            echo gettext("Open");
            echo "</td>
                    <td>";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "support_ticket_get_list", array(0 => array("status" => "open")), "method"), "total"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>";
            // line 166
            echo gettext("On Hold");
            echo "</td>
                    <td>";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "support_ticket_get_list", array(0 => array("status" => "on_hold")), "method"), "total"), "html", null, true);
            echo "</td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <td colspan=\"2\">
                        <a class=\"bb-button\" href=\"";
            // line 174
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("support"), "html", null, true);
            echo "\">";
            echo gettext("All tickets");
            echo "</a>
                        <a class=\"bb-button bb-button-submit\" href=\"";
            // line 175
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("support"), "html", null, true);
            echo "?ticket=1\">";
            echo gettext("New ticket");
            echo "</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<div class=\"grid_6 alpha\">
    <div class=\"widget\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-order\">";
            // line 186
            echo gettext("Recent orders");
            echo "</h2>
        </div>
        <table>
            <tbody>
                ";
            // line 190
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "order_get_list", array(0 => array("per_page" => 5, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page"), "hide_addons" => 1)), "method"), "list"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["order"]) {
                // line 191
                echo "                <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo "\">
                    <td><a href=\"";
                // line 192
                echo twig_escape_filter($this->env, twig_bb_client_link_filter("service/manage"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), 30), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 193
                echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status"));
                echo "</td>
                </tr>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 196
                echo "                <tr>
                    <td colspan=\"3\">";
                // line 197
                echo gettext("The list is empty");
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 200
            echo "            </tbody>
        </table>
    </div>
</div>

<div class=\"grid_6 omega\">
    <div class=\"widget\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-email\">";
            // line 208
            echo gettext("Recent emails");
            echo "</h2>
        </div>
        <table>
            <tbody>
                ";
            // line 212
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "email_get_list", array(0 => array("per_page" => 5)), "method"), "list"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["email"]) {
                // line 213
                echo "                <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo "\">
                    <td><a href=\"";
                // line 214
                echo twig_escape_filter($this->env, twig_bb_client_link_filter("email"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "subject"), 30), "html", null, true);
                echo "</a></td>
                    <td title=\"";
                // line 215
                echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "created_at")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_timeago_filter($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "created_at")), "html", null, true);
                echo " ";
                echo gettext("ago");
                echo "</td>
                </tr>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 218
                echo "                <tr>
                    <td colspan=\"2\">";
                // line 219
                echo gettext("The list is empty");
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['email'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 222
            echo "            </tbody>
        </table>
    </div>
</div>
<div class=\"clear\"></div>

";
        } else {
            // line 229
            echo "
    <div class=\"grid_6 alpha\">
        <div class=\"box\">
            <h2 class=\"big-dark-icon i-order\"><a href=\"";
            // line 232
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/order"), "html", null, true);
            echo "\">";
            echo gettext("Order");
            echo "</a></h2>
            <div class=\"block\">
                <p>";
            // line 234
            echo gettext("Order products and services");
            echo "</p>
            </div>
        </div>
    </div>

    <div class=\"grid_6 omega\">
        <div class=\"box\">
            <h2 class=\"big-dark-icon i-profile\"><a href=\"";
            // line 241
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/login"), "html", null, true);
            echo "?register=1\">";
            echo gettext("Register");
            echo "</a></h2>
            <div class=\"block\">
                <p>";
            // line 243
            echo gettext("Become a member and manage services");
            echo "</p>
            </div>
        </div>
    </div>
    <div class=\"grid_6 alpha\">
        <div class=\"box\">
            <h2 class=\"big-dark-icon i-email\"><a href=\"";
            // line 249
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/contact-us"), "html", null, true);
            echo "\">";
            echo gettext("Contact Us");
            echo "</a></h2>
            <div class=\"block\">
                <p>";
            // line 251
            echo gettext("Contact us for more information");
            echo "</p>
            </div>
        </div>
    </div>

    ";
            // line 256
            if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "news")), "method")) {
                // line 257
                echo "    <div class=\"grid_6 omega\">
        <div class=\"box\">
            <h2 class=\"big-dark-icon i-blog\"><a href=\"";
                // line 259
                echo twig_escape_filter($this->env, twig_bb_client_link_filter("/blog"), "html", null, true);
                echo "\">";
                echo gettext("Announcements");
                echo "</a></h2>
            <div class=\"block\">
                <p>";
                // line 261
                echo gettext("Latest news & announcements");
                echo "</p>
            </div>
        </div>
    </div>
    ";
            }
            // line 266
            echo "
    ";
            // line 267
            if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "kb")), "method")) {
                // line 268
                echo "    <div class=\"grid_6 alpha\">
        <div class=\"box\">
            <h2 class=\"big-dark-icon i-kb\"><a href=\"";
                // line 270
                echo twig_escape_filter($this->env, twig_bb_client_link_filter("/kb"), "html", null, true);
                echo "\">";
                echo gettext("Knowledge Base");
                echo "</a></h2>
            <div class=\"block\">
                <p>";
                // line 272
                echo gettext("Browse our KB for answers and FAQs");
                echo "</p>
            </div>
        </div>
    </div>
    ";
            }
            // line 277
            echo "
    ";
            // line 278
            if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "branding")), "method")) {
                // line 279
                echo "    <div class=\"grid_6 omega\">
        <div class=\"box\">
            <h2 class=\"big-dark-icon i-boxbilling\"><a href=\"http://www.boxbilling.com\">";
                // line 281
                echo gettext("Invoicing Software");
                echo "</a></h2>
            <div class=\"block\">
                <p>";
                // line 283
                echo gettext("Powered by BoxBilling invoicing software");
                echo "</p>
            </div>
        </div>
    </div>
    ";
            }
            // line 288
            echo "    <div class=\"clear\"></div>
";
        }
        // line 290
        echo "
</div>
";
    }

    // line 295
    public function block_js($context, array $blocks = array())
    {
        // line 296
        echo "<script type=\"text/javascript\">
\$(function() {

    \$('#client-login').bind('submit',function(event){
        bb.post(
            'guest/client/login',
            \$(this).serialize(),
            function(result) {
                bb.redirect();
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
        return "mod_index_dashboard.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  648 => 296,  645 => 295,  639 => 290,  635 => 288,  627 => 283,  622 => 281,  618 => 279,  616 => 278,  613 => 277,  605 => 272,  598 => 270,  594 => 268,  592 => 267,  589 => 266,  581 => 261,  574 => 259,  570 => 257,  568 => 256,  560 => 251,  553 => 249,  544 => 243,  537 => 241,  527 => 234,  520 => 232,  515 => 229,  506 => 222,  497 => 219,  494 => 218,  482 => 215,  474 => 214,  469 => 213,  464 => 212,  457 => 208,  447 => 200,  438 => 197,  435 => 196,  427 => 193,  419 => 192,  414 => 191,  409 => 190,  402 => 186,  386 => 175,  380 => 174,  370 => 167,  366 => 166,  360 => 163,  356 => 162,  350 => 159,  346 => 158,  338 => 153,  322 => 142,  316 => 141,  306 => 134,  302 => 133,  296 => 130,  292 => 129,  286 => 126,  282 => 125,  274 => 120,  258 => 109,  248 => 102,  244 => 101,  238 => 98,  234 => 97,  228 => 94,  224 => 93,  216 => 88,  200 => 77,  190 => 70,  186 => 69,  180 => 66,  176 => 65,  170 => 62,  166 => 61,  157 => 55,  152 => 52,  150 => 51,  147 => 50,  140 => 45,  130 => 41,  126 => 39,  117 => 35,  113 => 34,  109 => 33,  101 => 32,  97 => 31,  93 => 30,  90 => 29,  85 => 28,  77 => 23,  73 => 22,  69 => 21,  65 => 20,  61 => 19,  53 => 14,  49 => 12,  47 => 11,  45 => 10,  42 => 9,  40 => 8,  37 => 7,  34 => 6,  28 => 3,  23 => 4,);
    }
}
