<?php

/* mod_cart_index.phtml */
class __TwigTemplate_13c7c97d4203ef981d55da2fc6f42d73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content_before' => array($this, 'block_content_before'),
            'content' => array($this, 'block_content'),
            'sidebar2' => array($this, 'block_sidebar2'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        // line 11
        $context["cart"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "cart_get");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Order confirm");
    }

    // line 7
    public function block_content_before($context, array $blocks = array())
    {
        // line 8
        $this->env->loadTemplate("partial_steps.phtml")->display(array_merge($context, array("selected" => 3)));
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
";
        // line 15
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "items")) > 0)) {
            // line 16
            echo "<div id=\"shopping-cart\">
    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"number\">3</span></div>
            <h2>";
            // line 20
            echo gettext("Order confirmation");
            echo "</h2>
            <p>";
            // line 21
            echo gettext("These are the products you have selected");
            echo "</p>
        </div>
        <div class=\"block\">
            <table class=\"with-border\">
                <thead>
                    <tr>
                        <th>";
            // line 27
            echo gettext("Product");
            echo "</th>
                        <th>";
            // line 28
            echo gettext("Period");
            echo "</th>
                        <th class=\"currency\">";
            // line 29
            echo gettext("Price");
            echo "</th>
                    </tr>
                 </thead>

                 <tbody>
                    ";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "items"));
            foreach ($context['_seq'] as $context["i"] => $context["item"]) {
                // line 35
                echo "                    <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo "\">
                        <td>
                            ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
                echo "
                            ";
                // line 38
                if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "quantity") > 1)) {
                    // line 39
                    echo "                            x ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "quantity"), "html", null, true);
                    echo "
                            ";
                }
                // line 41
                echo "                        </td>
                        <td>";
                // line 42
                echo twig_period_title($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "period"));
                echo "</td>
                        <td class=\"currency\">
                            ";
                // line 44
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "discount_price")) {
                    // line 45
                    echo "                                <del>";
                    echo twig_money_convert($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "price"));
                    echo "</del>
                                ";
                    // line 46
                    echo twig_money_convert($this->env, ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "price") - $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "discount_price")));
                    echo "
                            ";
                } else {
                    // line 48
                    echo "                                ";
                    echo twig_money_convert($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "price"));
                    echo "
                            ";
                }
                // line 50
                echo "                        </td>
                    </tr>
                    ";
                // line 52
                if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "setup_price") != 0)) {
                    // line 53
                    echo "                    <tr>
                        <td>";
                    // line 54
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
                    echo " ";
                    echo gettext("setup");
                    echo "</td>
                        <td>-</td>
                        <td class=\"currency\">
                            ";
                    // line 57
                    if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "discount_setup")) {
                        // line 58
                        echo "                                <del>";
                        echo twig_money_convert($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "setup_price"));
                        echo "</del>
                                ";
                        // line 59
                        echo twig_money_convert($this->env, ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "setup_price") - $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "discount_setup")));
                        echo "
                            ";
                    } else {
                        // line 61
                        echo "                                ";
                        echo twig_money_convert($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "setup_price"));
                        echo "</td>
                            ";
                    }
                    // line 63
                    echo "                    </tr>
                    ";
                }
                // line 65
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 66
            echo "                 </tbody>
            </table>
            
            ";
            // line 69
            if ((isset($context["client"]) ? $context["client"] : null)) {
                // line 70
                echo "            <div class=\"grid_5 suffix_2 alpha\">
                <div class=\"box\">
                    <div class=\"block\">
                        <form action=\"guest/cart/apply_promo\" method=\"post\" class=\"api-form\" data-api-reload=\"1\">
                            <fieldset>
                                <input type=\"text\" name=\"promocode\" value=\"";
                // line 75
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "promocode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "promocode"), $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "promocode"))) : ($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "promocode"))), "html", null, true);
                echo "\" required=\"required\" placeholder=\"";
                echo gettext("Have a promo code?");
                echo "\">
                                ";
                // line 76
                if ($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "promocode")) {
                    // line 77
                    echo "                                <a href=\"guest/cart/remove_promo\" class=\"bb-button api-link\" data-api-reload=\"1\">";
                    echo gettext("Reset");
                    echo "</a>
                                ";
                } else {
                    // line 79
                    echo "                                <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
                    echo gettext("Apply");
                    echo "\">
                                ";
                }
                // line 81
                echo "                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"grid_5 omega\">
                <div class=\"box\">
                    <div class=\"block pricing\">
                        <p>";
                // line 89
                echo gettext("Total:");
                echo "</p>
                        <div class=\"currency\">";
                // line 90
                echo twig_money_convert($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "total"));
                echo "</div>
                        <form method=\"post\" action=\"client/cart/checkout\" class=\"api-form\" data-api-jsonp=\"onAfterCartCheckout\">
                        ";
                // line 92
                if ($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "total")) {
                    // line 93
                    echo "                        <div style=\"text-align: left;\">
                        ";
                    // line 94
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "invoice_gateways"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["gtw"]) {
                        // line 95
                        echo "                            ";
                        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "currency"), "code"), $this->getAttribute((isset($context["gtw"]) ? $context["gtw"] : null), "accepted_currencies"))) {
                            // line 96
                            echo "                            <label><input type=\"radio\" name=\"gateway_id\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gtw"]) ? $context["gtw"] : null), "id"), "html", null, true);
                            echo "\" ";
                            echo (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) ? ("checked") : (""));
                            echo "/>
                                ";
                            // line 97
                            echo gettext("Pay by");
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gtw"]) ? $context["gtw"] : null), "title"), "html", null, true);
                            echo "
                            </label>
                            <div class=\"clear\"></div>
                            ";
                        }
                        // line 101
                        echo "                        ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gtw'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 102
                    echo "                        </div>
                        ";
                }
                // line 104
                echo "                        <br/>
                        <button class=\"bb-button bb-button-submit bb-button-big\" type=\"submit\">";
                // line 105
                echo gettext("Checkout");
                echo "</button>
                        </form>
                    </div>
                </div>
            </div>
            ";
            } else {
                // line 111
                echo "
            <div class=\"block\">
                <div class=\"splitter\">
                <div class=\"grid_6 alpha\">
                    <div class=\"box\">
                        <div class=\"block\">
                            <h2>";
                // line 117
                echo gettext("Sign in");
                echo "</h2>
                            <form action=\"guest/client/login\" method=\"post\" class=\"api-form\" data-api-reload=\"1\">
                                <fieldset>
                                    <legend>";
                // line 120
                echo gettext("Login to client area");
                echo "</legend>
                                    <p>
                                        <label>";
                // line 122
                echo gettext("Email Address");
                echo ": </label>
                                        <input type=\"email\" name=\"email\" value=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "email"), "html", null, true);
                echo "\" required=\"required\">
                                    </p>
                                    <p>
                                        <label>";
                // line 126
                echo gettext("Password");
                echo ": </label>
                                        <input type=\"password\" name=\"password\" value=\"\" required=\"required\">
                                    </p>
                                    <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
                // line 129
                echo gettext("Login");
                echo "\">
                                    <a class=\"bb-button\" href=\"";
                // line 130
                echo twig_escape_filter($this->env, twig_bb_client_link_filter("reset-password"), "html", null, true);
                echo "\">";
                echo gettext("Reset password");
                echo "</a>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>

                <div class=\"grid_6 omega\">

                    ";
                // line 139
                if ((!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "register"))) {
                    // line 140
                    echo "                    <div class=\"box\">
                        <h2>";
                    // line 141
                    echo gettext("Do not have an account yet?");
                    echo "</h2>
                        <div class=\"block\">
                            <a class=\"bb-button bb-button-red bb-button-big\" href=\"#\" onclick=\"\$(this).parents('.box').hide(); \$('#register-new-account').fadeIn(); return false;\" style=\"margin: 30px 0 0 50px;\">";
                    // line 143
                    echo gettext("Register");
                    echo "</a>
                        </div>
                        ";
                    // line 145
                    if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "oauth")), "method")) {
                        // line 146
                        echo "                            ";
                        $this->env->loadTemplate("mod_oauth_buttons.phtml")->display(array_merge($context, array("redirect_to" => "cart")));
                        // line 147
                        echo "                        ";
                    }
                    // line 148
                    echo "                    </div>
                    ";
                }
                // line 150
                echo "
                    <div class=\"box\" id=\"register-new-account\" ";
                // line 151
                if ((!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "register"))) {
                    echo "style=\"display: none;\"";
                }
                echo " >
                            <h2>";
                // line 152
                echo gettext("Enter your details below");
                echo "</h2>
                            <div class=\"block\">
                                ";
                // line 154
                $context["r"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "client_required");
                // line 155
                echo "                                <form action=\"guest/client/create\" method=\"post\" class=\"api-form\" data-api-reload=\"1\">
                                <fieldset>
                                        <legend>";
                // line 157
                echo gettext("Create new profile");
                echo "</legend>
                                        <p>
                                            <label>";
                // line 159
                echo gettext("Email Address");
                echo ": </label>
                                            <input type=\"email\" name=\"email\" value=\"";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "email"), "html", null, true);
                echo "\" required=\"required\" id=\"reg-email\">
                                        </p>
                                        <p>
                                            <label>";
                // line 163
                echo gettext("First Name");
                echo ": </label>
                                            <input type=\"text\" name=\"first_name\" value=\"";
                // line 164
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "first_name"), "html", null, true);
                echo "\" required=\"required\">
                                        </p>

                                        ";
                // line 167
                if (twig_in_filter("last_name", (isset($context["r"]) ? $context["r"] : null))) {
                    // line 168
                    echo "                                        <p>
                                            <label>";
                    // line 169
                    echo gettext("Last Name");
                    echo ": </label>
                                            <input type=\"text\" name=\"last_name\" value=\"";
                    // line 170
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "last_name"), "html", null, true);
                    echo "\" required=\"required\">
                                        </p>
                                        ";
                }
                // line 173
                echo "
                                        ";
                // line 174
                if (twig_in_filter("company", (isset($context["r"]) ? $context["r"] : null))) {
                    // line 175
                    echo "                                        <p>
                                            <label>";
                    // line 176
                    echo gettext("Company");
                    echo ": </label>
                                            <input type=\"text\" name=\"company\" value=\"";
                    // line 177
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "company"), "html", null, true);
                    echo "\" required=\"required\">
                                        </p>
                                        ";
                }
                // line 180
                echo "
                                        ";
                // line 181
                if (twig_in_filter("birthday", (isset($context["r"]) ? $context["r"] : null))) {
                    // line 182
                    echo "                                        <p>
                                            <label>";
                    // line 183
                    echo gettext("Birthday");
                    echo ": </label>
                                            <input type=\"text\" name=\"birthday\" value=\"\" required=\"required\">
                                        </p>
                                        ";
                }
                // line 187
                echo "
                                        ";
                // line 188
                if (twig_in_filter("gender", (isset($context["r"]) ? $context["r"] : null))) {
                    // line 189
                    echo "                                        <p>
                                            <label>";
                    // line 190
                    echo gettext("You are");
                    echo ": </label>
                                            <select name=\"gender\" required=\"required\">
                                                <option value=\"male\">Male</option>
                                                <option value=\"female\">Female</option>
                                            </select>
                                        </p>
                                        ";
                }
                // line 197
                echo "
                                        ";
                // line 198
                if (twig_in_filter("address_1", (isset($context["r"]) ? $context["r"] : null))) {
                    // line 199
                    echo "                                        <p>
                                            <label>";
                    // line 200
                    echo gettext("Address");
                    echo ": </label>
                                            <input type=\"text\" name=\"address_1\" value=\"";
                    // line 201
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "address_1"), "html", null, true);
                    echo "\" required=\"required\">
                                        </p>
                                        ";
                }
                // line 204
                echo "
                                        ";
                // line 205
                if (twig_in_filter("address_2", (isset($context["r"]) ? $context["r"] : null))) {
                    // line 206
                    echo "                                        <p>
                                            <label>";
                    // line 207
                    echo gettext("Address 2");
                    echo ": </label>
                                            <input type=\"text\" name=\"address_2\" value=\"";
                    // line 208
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "address_2"), "html", null, true);
                    echo "\" required=\"required\">
                                        </p>
                                        ";
                }
                // line 211
                echo "
                                        ";
                // line 212
                if (twig_in_filter("city", (isset($context["r"]) ? $context["r"] : null))) {
                    // line 213
                    echo "                                        <p>
                                            <label>";
                    // line 214
                    echo gettext("City");
                    echo ": </label>
                                            <input type=\"text\" name=\"city\" value=\"";
                    // line 215
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "city"), "html", null, true);
                    echo "\" required=\"required\">
                                        </p>
                                        ";
                }
                // line 218
                echo "
                                        ";
                // line 219
                if (twig_in_filter("country", (isset($context["r"]) ? $context["r"] : null))) {
                    // line 220
                    echo "                                        <p>
                                            <label>";
                    // line 221
                    echo gettext("Country");
                    echo ": </label>
                                            ";
                    // line 222
                    echo $context["mf"]->getselectbox("country", $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_countries"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "country"), 0, "Select country");
                    echo "
                                        </p>
                                        ";
                }
                // line 225
                echo "
                                        ";
                // line 226
                if (twig_in_filter("state", (isset($context["r"]) ? $context["r"] : null))) {
                    // line 227
                    echo "                                        <p>
                                            <label>";
                    // line 228
                    echo gettext("State");
                    echo ": </label>
                                            ";
                    // line 230
                    echo "                                            <input type=\"text\" name=\"state\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "state"), "html", null, true);
                    echo "\" />
                                        </p>
                                        ";
                }
                // line 233
                echo "
                                        ";
                // line 234
                if (twig_in_filter("postcode", (isset($context["r"]) ? $context["r"] : null))) {
                    // line 235
                    echo "                                        <p>
                                            <label>";
                    // line 236
                    echo gettext("Zip/Postal Code");
                    echo ": </label>
                                            <input type=\"text\" name=\"postcode\" value=\"";
                    // line 237
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "postcode"), "html", null, true);
                    echo "\" required=\"required\">
                                        </p>
                                        ";
                }
                // line 240
                echo "
                                        ";
                // line 241
                if (twig_in_filter("phone", (isset($context["r"]) ? $context["r"] : null))) {
                    // line 242
                    echo "                                        <p>
                                            <label>";
                    // line 243
                    echo gettext("Phone");
                    echo ": </label>
                                            <br/>
                                            <input type=\"text\" name=\"phone_cc\" value=\"";
                    // line 245
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "phone_cc"), "html", null, true);
                    echo "\" required=\"required\" style=\"width: 30px; \">
                                            <input type=\"text\" name=\"phone\" value=\"";
                    // line 246
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "phone"), "html", null, true);
                    echo "\" required=\"required\"style=\"width: 230px; \">
                                        </p>
                                        ";
                }
                // line 249
                echo "
                                        <p>
                                            <label>";
                // line 251
                echo gettext("Password");
                echo ": </label>
                                            <input type=\"password\" name=\"password\" value=\"\" required=\"required\" id=\"reg-password\">
                                        </p>

                                        <p>
                                            <label>";
                // line 256
                echo gettext("Password confirm");
                echo ": </label>
                                            <input type=\"password\" name=\"password_confirm\" value=\"\" required=\"required\">
                                        </p>

                                        ";
                // line 260
                echo $context["mf"]->getrecaptcha();
                echo "

                                        <input class=\"bb-button bb-button-red\" type=\"submit\" value=\"";
                // line 262
                echo gettext("Register");
                echo "\">
                                        <input type=\"hidden\" name=\"auto_login\" value=\"1\">
                                    </fieldset>
                                </form>
                                </div>
                            </div>
                </div>
                <div class=\"clear\"></div>
                </div>
            </div>
            
            ";
            }
            // line 274
            echo "            <div class=\"clear\"></div>
        </div>
    </div>
</div>

";
        } else {
            // line 280
            echo "
<div class=\"h-block\">
    <div class=\"h-block-header\">
        <div class=\"icon\"><span class=\"number\">3</span></div>
        <h2>";
            // line 284
            echo gettext("You have not selected any product");
            echo "</h2>
    </div>
    <div class=\"block\">

        <div class=\"box\">
            <a class=\"bb-button bb-button-red\" href=\"";
            // line 289
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("order"), "html", null, true);
            echo "\">";
            echo gettext("Order new service");
            echo "</a>
        </div>
        
    </div>
</div>

";
        }
    }

    // line 298
    public function block_sidebar2($context, array $blocks = array())
    {
        // line 299
        echo "    ";
        $this->env->loadTemplate("partial_currency.phtml")->display($context);
    }

    // line 302
    public function block_js($context, array $blocks = array())
    {
        // line 303
        echo "<script type=\"text/javascript\">
function onAfterCartCheckout(result)
{
    if(result.invoice_hash) {
        bb.redirect('";
        // line 307
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("invoice"), "html", null, true);
        echo "' + '/' + result.invoice_hash + '?auto_redirect=1');
    } else {
        bb.redirect('";
        // line 309
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("service/manage"), "html", null, true);
        echo "' + '/' + result.order_id );
    }
}
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_cart_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  725 => 309,  720 => 307,  714 => 303,  711 => 302,  706 => 299,  703 => 298,  689 => 289,  681 => 284,  675 => 280,  667 => 274,  652 => 262,  647 => 260,  640 => 256,  632 => 251,  628 => 249,  622 => 246,  618 => 245,  613 => 243,  610 => 242,  608 => 241,  605 => 240,  599 => 237,  595 => 236,  592 => 235,  590 => 234,  587 => 233,  580 => 230,  576 => 228,  573 => 227,  571 => 226,  568 => 225,  562 => 222,  558 => 221,  555 => 220,  553 => 219,  550 => 218,  544 => 215,  540 => 214,  537 => 213,  535 => 212,  532 => 211,  526 => 208,  522 => 207,  519 => 206,  517 => 205,  514 => 204,  508 => 201,  504 => 200,  501 => 199,  499 => 198,  496 => 197,  486 => 190,  483 => 189,  481 => 188,  478 => 187,  471 => 183,  468 => 182,  466 => 181,  463 => 180,  457 => 177,  453 => 176,  450 => 175,  448 => 174,  445 => 173,  439 => 170,  435 => 169,  432 => 168,  430 => 167,  424 => 164,  420 => 163,  414 => 160,  410 => 159,  405 => 157,  401 => 155,  399 => 154,  394 => 152,  388 => 151,  385 => 150,  381 => 148,  378 => 147,  375 => 146,  373 => 145,  368 => 143,  363 => 141,  360 => 140,  358 => 139,  344 => 130,  340 => 129,  334 => 126,  328 => 123,  324 => 122,  319 => 120,  313 => 117,  305 => 111,  296 => 105,  293 => 104,  289 => 102,  275 => 101,  266 => 97,  259 => 96,  256 => 95,  239 => 94,  236 => 93,  234 => 92,  229 => 90,  225 => 89,  215 => 81,  209 => 79,  203 => 77,  201 => 76,  195 => 75,  188 => 70,  186 => 69,  181 => 66,  175 => 65,  171 => 63,  165 => 61,  160 => 59,  155 => 58,  153 => 57,  145 => 54,  142 => 53,  140 => 52,  136 => 50,  130 => 48,  125 => 46,  120 => 45,  118 => 44,  113 => 42,  110 => 41,  104 => 39,  102 => 38,  98 => 37,  92 => 35,  88 => 34,  80 => 29,  76 => 28,  72 => 27,  63 => 21,  59 => 20,  53 => 16,  51 => 15,  48 => 14,  45 => 13,  41 => 8,  38 => 7,  32 => 5,  27 => 11,  25 => 3,);
    }
}
