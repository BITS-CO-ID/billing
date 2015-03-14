<?php

/* mod_index_dashboard.phtml */
class __TwigTemplate_a3a639bdffdf7a537630c04ad29295ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_default.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_default.phtml";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Dashboard");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_messages", array(0 => array("type" => "info")), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 8
            echo "<div class=\"nNote nInformation hideit ";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                echo "first";
            }
            echo "\">
    <p><strong>";
            // line 9
            echo gettext("INFORMATION");
            echo ": </strong>";
            echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : null), "html", null, true);
            echo "</p>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 12
        echo "
";
        // line 13
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "stats")), "method")) {
            // line 14
            echo "<div class=\"widget\">
    <div class=\"head\"><h5 class=\"iChart8\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_company"), "name"), "html", null, true);
            echo " ";
            echo gettext("Statistics");
            echo "</h5></div>
    ";
            // line 16
            $context["stats"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "stats_get_summary");
            // line 17
            echo "    ";
            $context["income"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "stats_get_summary_income");
            // line 18
            echo "    <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" class=\"tableStatic\">
        <thead>
            <tr>
                <td width=\"10%\">";
            // line 21
            echo gettext("Metric");
            echo "</td>
                <td>";
            // line 22
            echo gettext("Today");
            echo "</td>
                <td>";
            // line 23
            echo gettext("Yesterday");
            echo "</td>
                <td>";
            // line 24
            echo gettext("This month so far");
            echo "</td>
                <td>";
            // line 25
            echo gettext("Last month");
            echo "</td>
                <td>";
            // line 26
            echo gettext("Total");
            echo "</td>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>";
            // line 32
            echo gettext("Income");
            echo "</td>
                <td align=\"center\"><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("invoice"), "html", null, true);
            echo "?paid_at=";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["income"]) ? $context["income"] : null), "today")), "method"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("invoice"), "html", null, true);
            echo "?paid_at=";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "yesterday", "Y-m-d"), "html", null, true);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["income"]) ? $context["income"] : null), "yesterday")), "method"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("invoice"), "html", null, true);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["income"]) ? $context["income"] : null), "this_month")), "method"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("invoice"), "html", null, true);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["income"]) ? $context["income"] : null), "last_month")), "method"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("invoice"), "html", null, true);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["income"]) ? $context["income"] : null), "total")), "method"), "html", null, true);
            echo "</a></td>
            </tr>
            <tr>
                <td>";
            // line 40
            echo gettext("Clients");
            echo "</td>
                <td align=\"center\"><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client"), "html", null, true);
            echo "?created_at=";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "clients_today"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client"), "html", null, true);
            echo "?created_at=";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "yesterday", "Y-m-d"), "html", null, true);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "clients_yesterday"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client"), "html", null, true);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "clients_this_month"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client"), "html", null, true);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "clients_last_month"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client"), "html", null, true);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "clients_total"), "html", null, true);
            echo "</a></td>
            </tr>
            <tr>
                <td>";
            // line 48
            echo gettext("Orders");
            echo "</td>
                <td align=\"center\"><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("order"), "html", null, true);
            echo "?created_at=";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "orders_today"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("order"), "html", null, true);
            echo "?created_at=";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "yesterday", "Y-m-d"), "html", null, true);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "orders_yesterday"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("order"), "html", null, true);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "orders_this_month"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("order"), "html", null, true);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "orders_last_month"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("order"), "html", null, true);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "orders_total"), "html", null, true);
            echo "</a></td>
            </tr>
            <tr>
                <td>";
            // line 56
            echo gettext("Invoices");
            echo "</td>
                <td align=\"center\"><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("invoice"), "html", null, true);
            echo "?created_at=";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "invoices_today"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("invoice"), "html", null, true);
            echo "?created_at=";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "yesterday", "Y-m-d"), "html", null, true);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "invoices_yesterday"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("invoice"), "html", null, true);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "invoices_this_month"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("invoice"), "html", null, true);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "invoices_last_month"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 61
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("invoice"), "html", null, true);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "invoices_total"), "html", null, true);
            echo "</a></td>
            </tr>
            <tr>
                <td>";
            // line 64
            echo gettext("Tickets");
            echo "</td>
                <td align=\"center\"><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("support"), "html", null, true);
            echo "?created_at=";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "tickets_today"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("support"), "html", null, true);
            echo "?created_at=";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "yesterday", "Y-m-d"), "html", null, true);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "tickets_yesterday"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("support"), "html", null, true);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "tickets_this_month"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 68
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("support"), "html", null, true);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "tickets_last_month"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("support"), "html", null, true);
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "tickets_total"), "html", null, true);
            echo "</a></td>
            </tr>
        </tbody>
    </table>
</div>
";
        }
        // line 75
        echo "
";
        // line 76
        $context["orders"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "order_get_list", array(0 => array("per_page" => "5", "hide_addons" => 1, "status" => "active")), "method");
        // line 77
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["orders"]) ? $context["orders"] : null), "list")) > 0)) {
            // line 78
            echo "<div class=\"widgets\">
    <div class=\"left\">
        <div class=\"widget\">
            <div class=\"head\">
                <h5 class=\"iMoney\">";
            // line 82
            echo gettext("Latest orders");
            echo "</h5>
                <div class=\"num\"><a href=\"";
            // line 83
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("order"), "html", null, true);
            echo "\" class=\"greenNum\">+";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["orders"]) ? $context["orders"] : null), "total"), "html", null, true);
            echo "</a></div>
            </div>
            <div style=\"height: 221px; overflow: auto;\">
                <table class=\"tableStatic wide\">
                    <thead>
                        <tr>
                            <td>";
            // line 89
            echo gettext("Order");
            echo "</td>
                            <td>";
            // line 90
            echo gettext("Client");
            echo "</td>
                        </tr>
                    </thead>
                    <tbody>
                    ";
            // line 94
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["orders"]) ? $context["orders"] : null), "list"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 95
                echo "                        <tr title=\"";
                echo twig_escape_filter($this->env, twig_timeago_filter($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "created_at")), "html", null, true);
                echo " ago\">
                            <td><a href=\"";
                // line 96
                echo twig_escape_filter($this->env, twig_bb_admin_link_filter("order/manage"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), 35), "html", null, true);
                echo "</a></td>
                            <td align=\"center\"><a href=\"";
                // line 97
                echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client/manage"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "client_id"), "html", null, true);
                echo "\" title=\"\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "client"), "first_name"), 1, null, "."), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "client"), "last_name"), "html", null, true);
                echo "</a></td>
                        </tr>
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 100
                echo "                    <tr>
                        <td colspan=\"2\" align=\"center\">";
                // line 101
                echo gettext("The list is empty");
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 104
            echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class=\"right\">
        <div class=\"widget\">
            <div class=\"head\">
                <h5 class=\"iGraph\">";
            // line 113
            echo gettext("Product sales");
            echo "</h5>
            </div>
            <div style=\"height: 221px; overflow: auto;\">
                <table class=\"tableStatic wide\">
                    <thead>
                        <tr>
                            <td>";
            // line 119
            echo gettext("Product/Service");
            echo "</td>
                            <td>";
            // line 120
            echo gettext("Orders");
            echo "</td>
                        </tr>
                    </thead>
                    <tbody>
                    ";
            // line 124
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "stats_get_product_summary"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 125
                echo "                        <tr>
                            <td><a href=\"";
                // line 126
                echo twig_escape_filter($this->env, twig_bb_admin_link_filter("product/manage"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "title"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "title"), 35), "html", null, true);
                echo "</a></td>
                            <td align=\"center\"><a href=\"";
                // line 127
                echo twig_escape_filter($this->env, twig_bb_admin_link_filter("order"), "html", null, true);
                echo "?product_id=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "\" title=\"\" class=\"webStatsLink\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "orders"), "html", null, true);
                echo "</a></td>
                        </tr>
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 130
                echo "                    <tr>
                        <td colspan=\"2\" align=\"center\">";
                // line 131
                echo gettext("No active orders available");
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 134
            echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class=\"fix\"></div>
</div>
";
        }
        // line 142
        echo "
";
        // line 143
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "stats")), "method")) {
            // line 144
            echo "<div class=\"widget\">
    <div class=\"head\">
        <h5 class=\"iDropper\">";
            // line 146
            echo gettext("Define date interval for graphs");
            echo "</h5>
    </div>
    <form method=\"get\" action=\"\" class=\"mainForm\">
        <fieldset>
            <div class=\"rowElem noborder\">
                <div class=\"moreFields\">
                    <ul>
                        <li style=\"width: 100px\"><input type=\"text\" name=\"date_from\" value=\"";
            // line 153
            if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from"), "Y-m-d"), "html", null, true);
            }
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y-m-d"), "html", null, true);
            echo "\" class=\"datepicker\"/></li>
                        <li class=\"sep\">-</li>
                        <li style=\"width: 100px\"><input type=\"text\" name=\"date_to\" value=\"";
            // line 155
            if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_to")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_to"), "Y-m-d"), "html", null, true);
            }
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y-m-d"), "html", null, true);
            echo "\" class=\"datepicker\"/></li>
                        <li class=\"sep\" style=\"padding-top: 0px\"><input type=\"submit\" value=\"";
            // line 156
            echo gettext("Update graphs");
            echo "\" class=\"greyishBtn\" /></li>
                    </ul>
                </div>
                <div class=\"fix\"></div>
            </div>
        </fieldset>
    </form>
</div>

<div class=\"widget\">
    <div class=\"head\">
        <h5 class=\"iGraph\">";
            // line 167
            echo gettext("Income");
            echo "</h5>
    </div>
    <div class=\"body\">
        <div id=\"graph-income\" style=\"width: 100%; height: 200px;\"></div>
    </div>
</div>

<div class=\"widget\">
    <div class=\"head\">
        <h5 class=\"iGraph\">";
            // line 176
            echo gettext("Orders");
            echo "</h5>
    </div>
    <div class=\"body\">
        <div id=\"graph-orders\" style=\"width: 100%; height: 200px;\"></div>
    </div>
</div>

<div class=\"widget\">
    <div class=\"head\">
        <h5 class=\"iGraph\">";
            // line 185
            echo gettext("Invoices");
            echo "</h5>
    </div>
    <div class=\"body\">
        <div id=\"graph-invoice\" style=\"width: 100%; height: 200px;\"></div>
    </div>
</div>

<div class=\"widget\">
    <div class=\"head\">
        <h5 class=\"iGraph\">";
            // line 194
            echo gettext("Clients");
            echo "</h5>
    </div>
    <div class=\"body\">
        <div id=\"graph-clients\" style=\"width: 100%; height: 200px;\"></div>
    </div>
</div>

<div class=\"widget\">
    <div class=\"head\">
        <h5 class=\"iGraph\">";
            // line 203
            echo gettext("Support tickets");
            echo "</h5>
    </div>
    <div class=\"body\">
        <div id=\"graph-tickets\" style=\"width: 100%; height: 200px;\"></div>
    </div>
</div>
";
        }
        // line 210
        echo "
";
        // line 211
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "activity")), "method")) {
            // line 212
            echo "<div class=\"widget simpleTabs\">
    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
            // line 214
            echo gettext("Recent clients activity");
            echo "</a></li>
        <li><a href=\"#tab-staff\">";
            // line 215
            echo gettext("Recent staff activity");
            echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>

        <div class=\"tab_content nopadding\" id=\"tab-index\">
            <table class=\"tableStatic wide\">
                <tbody>
                ";
            // line 224
            $context["events"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "activity_log_get_list", array(0 => array("per_page" => 10, "only_clients" => 1)), "method");
            // line 225
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["events"]) ? $context["events"] : null), "list"));
            $context['_iterated'] = false;
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
            foreach ($context['_seq'] as $context["i"] => $context["event"]) {
                // line 226
                echo "                <tr ";
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                    echo "class=\"noborder\"";
                }
                echo ">
                    <td style=\"width: 5%\"><a href=\"";
                // line 227
                echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client/manage"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "client"), "id"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "client"), "name"), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "client"), "email")), "html", null, true);
                echo "?size=20\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "client"), "name"), "html", null, true);
                echo "\" /></a></td>
                    <td>";
                // line 228
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "client"), "name"), 40), "html", null, true);
                echo "</td>
                    <td><a href=\"";
                // line 229
                echo twig_escape_filter($this->env, twig_bb_admin_link_filter("client/manage"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "client"), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "message"), 50), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 230
                echo twig_escape_filter($this->env, twig_timeago_filter($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "created_at")), "html", null, true);
                echo " ago</td>
                </tr>
                </tbody>

                ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 235
                echo "                <tbody>
                    <tr class=\"noborder\">
                        <td colspan=\"4\">
                            ";
                // line 238
                echo gettext("The list is empty");
                // line 239
                echo "                        </td>
                    </tr>
                </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 243
            echo "            </table>
        </div>
        
        <div class=\"tab_content nopadding\" id=\"tab-staff\">
            <table class=\"tableStatic wide\">
                <tbody>
                ";
            // line 249
            $context["events"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "activity_log_get_list", array(0 => array("per_page" => 10, "only_staff" => 1)), "method");
            // line 250
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["events"]) ? $context["events"] : null), "list"));
            $context['_iterated'] = false;
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
            foreach ($context['_seq'] as $context["i"] => $context["event"]) {
                // line 251
                echo "                <tr ";
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                    echo "class=\"noborder\"";
                }
                echo ">
                    <td style=\"width: 5%\"><a href=\"";
                // line 252
                echo twig_escape_filter($this->env, twig_bb_admin_link_filter("staff/manage"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "staff"), "id"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "staff"), "name"), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "staff"), "email")), "html", null, true);
                echo "?size=20\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "staff"), "name"), "html", null, true);
                echo "\" /></a></td>
                    <td>";
                // line 253
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "staff"), "name"), "html", null, true);
                echo "</td>
                    <td><a href=\"";
                // line 254
                echo twig_escape_filter($this->env, twig_bb_admin_link_filter("staff/manage"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "staff"), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "message"), 50), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 255
                echo twig_escape_filter($this->env, twig_timeago_filter($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "created_at")), "html", null, true);
                echo " ago</td>
                </tr>
                </tbody>

                ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 260
                echo "                <tbody>
                    <tr class=\"noborder\">
                        <td colspan=\"4\">
                            ";
                // line 263
                echo gettext("The list is empty");
                // line 264
                echo "                        </td>
                    </tr>
                </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 268
            echo "            </table>
        </div>

    </div>
    
    <div class=\"fix\"></div>
</div>
";
        }
        // line 276
        echo "
";
    }

    // line 279
    public function block_js($context, array $blocks = array())
    {
        // line 280
        echo "
";
        // line 281
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "stats")), "method")) {
            // line 282
            echo "<script type=\"text/javascript\" src=\"js/flot/jquery.flot.js\"></script>
<script type=\"text/javascript\" src=\"js/flot/excanvas.min.js\"></script>
<script type=\"text/javascript\">

\$(function() {
    setPlotDataData('graph-income', ";
            // line 287
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "stats_get_income", array(0 => array("date_from" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from"), "date_to" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_to"))), "method")), "html", null, true);
            echo " );
    setPlotDataData('graph-orders', ";
            // line 288
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "stats_get_orders", array(0 => array("date_from" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from"), "date_to" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_to"))), "method")), "html", null, true);
            echo " );
    setPlotDataData('graph-invoice', ";
            // line 289
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "stats_get_invoices", array(0 => array("date_from" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from"), "date_to" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_to"))), "method")), "html", null, true);
            echo " );
    setPlotDataData('graph-clients', ";
            // line 290
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "stats_get_clients", array(0 => array("date_from" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from"), "date_to" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_to"))), "method")), "html", null, true);
            echo " );
    setPlotDataData('graph-tickets', ";
            // line 291
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "stats_get_tickets", array(0 => array("date_from" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from"), "date_to" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_to"))), "method")), "html", null, true);
            echo " );
});

function setPlotDataData(id, result) {
    \$.plot(\$(\"#\"+id), [ result ] , {
        yaxis: {
            min: 0,
            tickDecimals: false
        },
        xaxis: {
            mode: \"time\",
            tickDecimals: false,
            timeformat: \"%y-%m-%d\"
        },
        clickable: true,
        colors: [\"#afd8f8\"],
        series: {
               lines: {
                    lineWidth: 2,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0.6 }, { opacity: 0.2 } ] },
                    steps: false
               }
            }
    });
}

</script>
";
        }
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
        return array (  864 => 291,  860 => 290,  856 => 289,  852 => 288,  848 => 287,  841 => 282,  839 => 281,  836 => 280,  833 => 279,  828 => 276,  818 => 268,  809 => 264,  807 => 263,  802 => 260,  784 => 255,  776 => 254,  772 => 253,  760 => 252,  753 => 251,  734 => 250,  732 => 249,  724 => 243,  715 => 239,  713 => 238,  708 => 235,  690 => 230,  682 => 229,  678 => 228,  666 => 227,  659 => 226,  640 => 225,  638 => 224,  626 => 215,  622 => 214,  618 => 212,  616 => 211,  613 => 210,  603 => 203,  591 => 194,  579 => 185,  567 => 176,  555 => 167,  541 => 156,  533 => 155,  524 => 153,  514 => 146,  510 => 144,  508 => 143,  505 => 142,  495 => 134,  486 => 131,  483 => 130,  471 => 127,  461 => 126,  458 => 125,  453 => 124,  446 => 120,  442 => 119,  433 => 113,  422 => 104,  413 => 101,  410 => 100,  396 => 97,  388 => 96,  383 => 95,  378 => 94,  371 => 90,  367 => 89,  356 => 83,  352 => 82,  346 => 78,  344 => 77,  342 => 76,  339 => 75,  328 => 69,  322 => 68,  316 => 67,  308 => 66,  300 => 65,  296 => 64,  288 => 61,  282 => 60,  276 => 59,  268 => 58,  260 => 57,  256 => 56,  248 => 53,  242 => 52,  236 => 51,  228 => 50,  220 => 49,  216 => 48,  208 => 45,  202 => 44,  196 => 43,  188 => 42,  180 => 41,  176 => 40,  168 => 37,  162 => 36,  156 => 35,  148 => 34,  140 => 33,  136 => 32,  127 => 26,  123 => 25,  119 => 24,  115 => 23,  111 => 22,  107 => 21,  102 => 18,  99 => 17,  97 => 16,  91 => 15,  88 => 14,  86 => 13,  83 => 12,  64 => 9,  57 => 8,  40 => 7,  37 => 6,  34 => 5,  28 => 3,);
    }
}
