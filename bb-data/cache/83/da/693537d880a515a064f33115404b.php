<?php

/* mod_invoice_invoice.phtml */
class __TwigTemplate_83da693537d880a515a064f33115404b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content_before' => array($this, 'block_content_before'),
            'content' => array($this, 'block_content'),
            'sidebar2' => array($this, 'block_sidebar2'),
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
        echo gettext("Proforma invoice");
    }

    // line 5
    public function block_content_before($context, array $blocks = array())
    {
        // line 6
        if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status") == "unpaid")) {
            // line 7
            echo "    ";
            $this->env->loadTemplate("partial_steps.phtml")->display(array_merge($context, array("selected" => 4)));
        }
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        $context["nr"] = ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "serie") . sprintf("%05s", $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "nr")));
        // line 13
        $context["seller"] = $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "seller");
        // line 14
        $context["buyer"] = $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "buyer");
        // line 15
        $context["company"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_company");
        // line 16
        echo "
<div class=\"h-block\" id=\"invoice-block\">
    <div class=\"h-block-header\">
        <div class=\"icon\"><span class=\"big-light-icon i-invoice\"></span></div>
        ";
        // line 20
        if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status") == "unpaid")) {
            // line 21
            echo "        <h2>";
            echo gettext("Proforma Invoice");
            echo "</h2>
        <p>";
            // line 22
            echo gettext("Please choose payment type and pay for your chosen products.");
            echo "</p>
        ";
        } else {
            // line 24
            echo "        <h2>";
            echo gettext("Invoice");
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["nr"]) ? $context["nr"] : null), "html", null, true);
            echo "</h2>
        <p>";
            // line 25
            echo gettext("Invoice is paid");
            echo "</p>
        ";
        }
        // line 27
        echo "    </div>
    <div class=\"block\">
        <div id=\"invoice-header\">

        <div class=\"grid_6 alpha\">
            <div class=\"box\">
                <div class=\"block\">
                    <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "logo_url"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"max-height: 70px\">
                </div>
            </div>
        </div>

        <div class=\"grid_6 omega\">
            <div class=\"box\">
                <div class=\"block\" style=\"text-align: right;\">
                    <h2>";
        // line 42
        echo gettext("Invoice");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "serie_nr"), "html", null, true);
        echo "</h2>
                    <p>";
        // line 43
        echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "created_at")), "html", null, true);
        echo "</p>

                    <h2 class=\"invoice_";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status"), "html", null, true);
        echo "\">";
        if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status") == "unpaid")) {
            echo gettext("Unpaid");
        } else {
            echo gettext("Paid");
        }
        echo "</h2>
                </div>
            </div>
        </div>

        <div class=\"clear\"></div>

        <div class=\"grid_6 alpha\">
            <table class=\"seller\">
                ";
        // line 54
        if ($this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "company")) {
            // line 55
            echo "                <tr>
                    <td><b>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "company"), "html", null, true);
            echo "</b></td>
                </tr>
                ";
        }
        // line 59
        echo "
                ";
        // line 60
        if ($this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "address")) {
            // line 61
            echo "                <tr>
                    <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "address"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        // line 65
        echo "
                ";
        // line 66
        if ($this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "phone")) {
            // line 67
            echo "                <tr>
                    <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "phone"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        // line 71
        echo "
                ";
        // line 72
        if ($this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "email")) {
            // line 73
            echo "                <tr>
                    <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "email"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        // line 77
        echo "                
                ";
        // line 78
        if ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "account_number")) {
            // line 79
            echo "                <tr>
                    <td>";
            // line 80
            echo gettext("Account");
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "account_number"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        // line 83
        echo "
                ";
        // line 84
        if ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "number")) {
            // line 85
            echo "                <tr>
                    <td>";
            // line 86
            echo gettext("Company number");
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "number"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        // line 89
        echo "
                ";
        // line 90
        if ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "vat_number")) {
            // line 91
            echo "                <tr>
                    <td>";
            // line 92
            echo gettext("VAT");
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "vat_number"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        // line 95
        echo "
                ";
        // line 97
        echo "                ";
        // line 102
        echo "            </table>
        </div>

        <div class=\"grid_6 omega\">
            <table class=\"buyer\">
                ";
        // line 107
        if ($this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "company")) {
            // line 108
            echo "                <tr>
                    <td><b>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "company"), "html", null, true);
            echo "</b></td>
                </tr>
                ";
        }
        // line 112
        echo "
                ";
        // line 113
        if (($this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "first_name") || $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "last_name"))) {
            // line 114
            echo "                <tr>
                    <td><b>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "first_name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "last_name"), "html", null, true);
            echo "</b></td>
                </tr>
                ";
        }
        // line 118
        echo "
                ";
        // line 119
        if ($this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "email")) {
            // line 120
            echo "                <tr>
                    <td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "email"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        // line 124
        echo "
                ";
        // line 125
        if ($this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "address")) {
            // line 126
            echo "                <tr>
                    <td>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "address"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "city"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "state"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "postcode"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "country"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        // line 130
        echo "                
                ";
        // line 131
        if ($this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "phone")) {
            // line 132
            echo "                <tr>
                    <td>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "phone"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        // line 136
        echo "
            </table>
        </div>

        ";
        // line 140
        if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "text_1")) {
            // line 141
            echo "        <div class=\"grid_12 alpha omega\">
            <div class=\"box\">
                ";
            // line 143
            echo twig_markdown_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "text_1"));
            echo "
            </div>
        </div>
        ";
        }
        // line 147
        echo "
        <div class=\"clear\"></div>
        </div>

        <table class=\"with-border\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>";
        // line 155
        echo gettext("Title");
        echo "</th>
                    <th class=\"currency\">";
        // line 156
        echo gettext("Price");
        echo "</th>
                    <th class=\"currency\">";
        // line 157
        echo gettext("Total");
        echo "</th>
                </tr>
            </thead>

            <tbody>
                ";
        // line 162
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "lines"));
        foreach ($context['_seq'] as $context["i"] => $context["item"]) {
            // line 163
            echo "
                <tr class=\"";
            // line 164
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "\">
                    <td>";
            // line 165
            echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : null) + 1), "html", null, true);
            echo ".</td>
                    <td>
                        ";
            // line 167
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "order_id")) {
                // line 168
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, twig_bb_client_link_filter("/service"), "html", null, true);
                echo "/manage/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "order_id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
                echo "</a>
                        ";
            } else {
                // line 170
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
                echo "
                        ";
            }
            // line 172
            echo "                    </td>
                    <td class=\"currency\">
                        ";
            // line 174
            echo twig_money($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "price"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
            echo "
                        ";
            // line 175
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "quantity") > 1)) {
                // line 176
                echo "                        x ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "quantity"), "html", null, true);
                echo " ";
                // line 177
                echo "                        ";
            }
            // line 178
            echo "                    </td>
                    <td class=\"currency\">";
            // line 179
            echo twig_money($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "total"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
            echo "</td>
                </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 183
        echo "            </tbody>

            <tfoot>
            ";
        // line 186
        if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "tax") > 0)) {
            // line 187
            echo "                <tr>
                    <th colspan=\"3\">";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "taxname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "taxrate"), "html", null, true);
            echo "%</th>
                    <th class=\"currency\">";
            // line 189
            echo twig_money($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "tax"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
            echo "</th>
                </tr>
            ";
        }
        // line 192
        echo "            
            ";
        // line 193
        if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "discount") > 0)) {
            // line 194
            echo "                <tr>
                    <th colspan=\"3\">";
            // line 195
            echo gettext("Discount");
            echo "</th>
                    <th class=\"currency\">";
            // line 196
            echo twig_money($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "discount"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
            echo "</th>
                </tr>
            ";
        }
        // line 199
        echo "                <tr class=\"total\">
                    <th colspan=\"3\">";
        // line 200
        echo gettext("Total");
        echo "</th>
                    <th class=\"currency\">";
        // line 201
        echo twig_money($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "total"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
        echo "</th>
                </tr>
            </tfoot>
        </table>

        ";
        // line 206
        if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "text_2")) {
            // line 207
            echo "        <div class=\"grid_12 alpha omega\">
            <div class=\"box\">
                ";
            // line 209
            echo twig_markdown_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "text_2"));
            echo "
            </div>
        </div>
        ";
        }
        // line 213
        echo "
    ";
        // line 214
        if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status") == "unpaid")) {
            // line 215
            echo "        
        ";
            // line 216
            if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "gateway_id") && (!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "change_payment_method")))) {
                // line 217
                echo "
        <div class=\"grid_12 alpha omega\">
            <div class=\"box\">
                ";
                // line 220
                echo $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "invoice_payment", array(0 => array("gateway_id" => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "gateway_id"), "hash" => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "hash"), "auto_redirect" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "auto_redirect"))), "method"), "result");
                echo "
            </div>
        </div>

        <div class=\"clear\"></div>

        ";
            }
            // line 227
            echo "
        ";
            // line 228
            if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "change_payment_method")) {
                // line 229
                echo "        
        <form method=\"post\" action=\"guest/invoice/update\" class=\"api-form\" data-api-redirect=\"";
                // line 230
                echo twig_escape_filter($this->env, twig_bb_client_link_filter("invoice"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "hash"), "html", null, true);
                echo "?auto_redirect=1\">
            <div class=\"grid_8 alpha\">
                <div class=\"box\">
                    <div class=\"block pricing\">
                        ";
                // line 234
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "invoice_gateways"));
                foreach ($context['_seq'] as $context["_key"] => $context["gtw"]) {
                    // line 235
                    echo "                            ";
                    if (twig_in_filter($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"), $this->getAttribute((isset($context["gtw"]) ? $context["gtw"] : null), "accepted_currencies"))) {
                        // line 236
                        echo "                            <label class=\"gateway\">
                                <input type=\"radio\" name=\"gateway_id\" value=\"";
                        // line 237
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gtw"]) ? $context["gtw"] : null), "id"), "html", null, true);
                        echo "\"/>
                                ";
                        // line 238
                        echo gettext("Pay by");
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gtw"]) ? $context["gtw"] : null), "title"), "html", null, true);
                        echo "
                            </label>
                            ";
                    }
                    // line 241
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gtw'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 242
                echo "                        <div class=\"clear\"></div>
                    </div>
                </div>
            </div>

            <div class=\"grid_4 omega\">
                <div class=\"box\">
                    <div class=\"block pricing\">
                        <p>";
                // line 250
                echo gettext("Total:");
                echo "</p>
                        <div class=\"currency\">";
                // line 251
                echo twig_money($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "total"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
                echo "</div>
                        <button class=\"bb-button bb-button-submit bb-button-big\" type=\"submit\">";
                // line 252
                echo gettext("Pay now");
                echo "</button>
                    </div>
                </div>
            </div>
            <input type=\"hidden\" name=\"hash\" value=\"";
                // line 256
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "hash"), "html", null, true);
                echo "\"/>
        </form>
        
        ";
            }
            // line 260
            echo "    ";
        }
        // line 261
        echo "        <div class=\"clear\"></div>
    </div>
</div>

";
        // line 265
        $context["transactions"] = $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "invoice_transaction_get_list", array(0 => array("invoice_id" => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "type" => "payment", "per_page" => 100)), "method"), "list");
        // line 266
        echo "
";
        // line 267
        if ((twig_length_filter($this->env, (isset($context["transactions"]) ? $context["transactions"] : null)) > 0)) {
            // line 268
            echo "
<div class=\"widget\">
    <div class=\"head\">
        <h2 class=\"dark-icon i-payment\">";
            // line 271
            echo gettext("Transactions");
            echo "</h2>
    </div>
    <table>
        <thead>
            <tr>
                <th>";
            // line 276
            echo gettext("Transaction Date");
            echo "</th>
                <th>";
            // line 277
            echo gettext("Transaction ID");
            echo "</th>
                <th>";
            // line 278
            echo gettext("Gateway");
            echo "</th>
                <th>";
            // line 279
            echo gettext("Amount");
            echo "</th>
            </tr>
        </thead>

        <tbody>
            ";
            // line 284
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["transactions"]) ? $context["transactions"] : null));
            foreach ($context['_seq'] as $context["i"] => $context["tx"]) {
                // line 285
                echo "            <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo "\">
                <td>";
                // line 286
                echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "created_at")), "html", null, true);
                echo "</td>
                <td>";
                // line 287
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "txn_id"), "html", null, true);
                echo "</td>
                <td>";
                // line 288
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "gateway", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "gateway"), "-")) : ("-")), "html", null, true);
                echo "</td>
                <td>";
                // line 289
                echo twig_money($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "amount"), $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "currency"));
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['tx'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 292
            echo "
        </tbody>

    </table>
</div>

";
        }
        // line 299
        echo "

";
    }

    // line 303
    public function block_sidebar2($context, array $blocks = array())
    {
        // line 304
        echo "
<div class=\"widget\">
    <div class=\"head\">
        <h2 class=\"dark-icon i-services\">";
        // line 307
        echo gettext("Actions");
        echo "</h2>
    </div>
    <div class=\"block\">
        ";
        // line 310
        if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status") == "unpaid")) {
            // line 311
            echo "        <a class=\"bb-button\" href=\"";
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("invoice"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "hash"), "html", null, true);
            echo "?change_payment_method=1\">";
            echo gettext("Change payment method");
            echo "</a>
        ";
        }
        // line 313
        echo "    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_invoice_invoice.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  725 => 313,  715 => 311,  713 => 310,  707 => 307,  702 => 304,  699 => 303,  693 => 299,  684 => 292,  675 => 289,  671 => 288,  667 => 287,  663 => 286,  658 => 285,  654 => 284,  646 => 279,  642 => 278,  638 => 277,  634 => 276,  626 => 271,  621 => 268,  619 => 267,  616 => 266,  614 => 265,  608 => 261,  605 => 260,  598 => 256,  591 => 252,  587 => 251,  583 => 250,  573 => 242,  567 => 241,  559 => 238,  555 => 237,  552 => 236,  549 => 235,  545 => 234,  536 => 230,  533 => 229,  531 => 228,  528 => 227,  518 => 220,  513 => 217,  511 => 216,  508 => 215,  506 => 214,  503 => 213,  496 => 209,  492 => 207,  490 => 206,  482 => 201,  478 => 200,  475 => 199,  469 => 196,  465 => 195,  462 => 194,  460 => 193,  457 => 192,  451 => 189,  445 => 188,  442 => 187,  440 => 186,  435 => 183,  425 => 179,  422 => 178,  419 => 177,  415 => 176,  413 => 175,  409 => 174,  405 => 172,  399 => 170,  389 => 168,  387 => 167,  382 => 165,  378 => 164,  375 => 163,  371 => 162,  363 => 157,  359 => 156,  355 => 155,  345 => 147,  338 => 143,  334 => 141,  332 => 140,  326 => 136,  320 => 133,  317 => 132,  315 => 131,  312 => 130,  298 => 127,  295 => 126,  293 => 125,  290 => 124,  284 => 121,  281 => 120,  279 => 119,  276 => 118,  268 => 115,  265 => 114,  263 => 113,  260 => 112,  254 => 109,  251 => 108,  249 => 107,  242 => 102,  240 => 97,  237 => 95,  229 => 92,  226 => 91,  224 => 90,  221 => 89,  213 => 86,  210 => 85,  208 => 84,  205 => 83,  197 => 80,  194 => 79,  192 => 78,  189 => 77,  183 => 74,  180 => 73,  178 => 72,  175 => 71,  169 => 68,  166 => 67,  164 => 66,  161 => 65,  155 => 62,  152 => 61,  150 => 60,  147 => 59,  141 => 56,  138 => 55,  136 => 54,  118 => 45,  113 => 43,  107 => 42,  96 => 34,  87 => 27,  82 => 25,  75 => 24,  70 => 22,  65 => 21,  63 => 20,  57 => 16,  55 => 15,  53 => 14,  51 => 13,  49 => 12,  46 => 11,  40 => 7,  38 => 6,  35 => 5,  29 => 3,  24 => 2,);
    }
}
