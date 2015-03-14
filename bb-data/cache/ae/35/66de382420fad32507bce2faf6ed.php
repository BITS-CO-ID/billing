<?php

/* mod_product_promos.phtml */
class __TwigTemplate_ae3566de382420fad32507bce2faf6ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_default.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_default.phtml";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["active_menu"] = "products";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Product promotions");
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
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("product"), "html", null, true);
        echo "\">";
        echo gettext("Products");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 9
        echo gettext("Product promotions");
        echo "</li>
</ul>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-promos\">";
        // line 17
        echo gettext("Promo");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 18
        echo gettext("New promo");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">

        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-promos\">

            ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "table_search"), "html", null, true);
        echo "
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>";
        // line 30
        echo gettext("Code");
        echo "</td>
                        <td>";
        // line 31
        echo gettext("Discount");
        echo "</td>
                        <td>";
        // line 32
        echo gettext("Applies to");
        echo "</td>
                        <td>";
        // line 33
        echo gettext("Valid period");
        echo "</td>
                        <td>";
        // line 34
        echo gettext("Enabled");
        echo "</td>
                        <td>";
        // line 35
        echo gettext("Usage");
        echo "</td>
                        <td style=\"width: 13%\">&nbsp;</td>
                    </tr>
                </thead>

                <tbody>
                ";
        // line 41
        $context["promos"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "product_promo_get_list", array(0 => twig_array_merge(array("per_page" => 30, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 42
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["promos"]) ? $context["promos"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
            // line 43
            echo "                <tr>
                    <td><strong>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "code"), "html", null, true);
            echo "</strong></td>
                    <td>";
            // line 45
            if (($this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "type") == "percentage")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "value"), "html", null, true);
                echo "%";
            }
            if (($this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "type") == "absolute")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "value")), "method"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "applies_to"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["pid"] => $context["product"]) {
                // line 47
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, twig_bb_admin_link_filter("product/manage"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["pid"]) ? $context["pid"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, (isset($context["product"]) ? $context["product"] : null), 15), "html", null, true);
                echo "</a><br/>
                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 49
                echo "                        All products
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['pid'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 51
            echo "                    </td>
                    <td>
                        From ";
            // line 53
            if ($this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "start_at")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "start_at"), "Y-m-d"), "html", null, true);
            } else {
                echo "now";
            }
            // line 54
            echo "                        untill ";
            if ($this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "end_at")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "end_at"), "Y-m-d"), "html", null, true);
            } else {
                echo "disabled";
            }
            // line 55
            echo "                    </td>
                    <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "q", array(0 => $this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "active")), "method"), "html", null, true);
            echo "</td>
                    <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "used"), "html", null, true);
            echo " / ";
            if ($this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "maxuses")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "maxuses"), "html", null, true);
            } else {
                echo "&#8734;";
            }
            echo "</td>
                    <td class=\"actions\">
                        <a class=\"bb-button btn14\" href=\"";
            // line 59
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/product/promo"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" href=\"admin/product/promo_delete?id=";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "id"), "html", null, true);
            echo "\" data-api-redirect=\"product/promos\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 64
            echo "                    <tr>
                        <td colspan=\"7\">
                            ";
            // line 66
            echo gettext("The list is empty");
            // line 67
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 70
        echo "                </tbody>
            </table>
            
            ";
        // line 73
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["promos"]) ? $context["promos"] : null), "url" => "product/promos")));
        // line 74
        echo "        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new\">
            <div class=\"help\">
                <h3>";
        // line 78
        echo gettext("Create new coupon code");
        echo "</h3>
                <p>";
        // line 79
        echo gettext("Create special offers for your clients by creating coupon codes.");
        echo "</p>
            </div>
            
            <form method=\"post\" action=\"admin/product/promo_create\" class=\"mainForm save api-form\" data-api-redirect=\"product/promos\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 85
        echo gettext("Code");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"code\" value=\"\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 92
        echo gettext("Discount type");
        echo "</label>
                        <div class=\"formRight moreFields\">
                            <ul>
                                <li style=\"width: 270px\">
                                    <input type=\"radio\" name=\"type\" value=\"absolute\" checked=\"checked\"/><label>";
        // line 96
        echo gettext("Absolute");
        echo "</label>
                                    <input type=\"radio\" name=\"type\" value=\"percentage\"/><label>";
        // line 97
        echo gettext("Percentage");
        echo "</label>
                                </li>
                                <li style=\"width: 100px\"><input type=\"text\" name=\"value\" value=\"\" required=\"required\" placeholder=\"0\"/></li>
                            </ul>
                        </div> 
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 106
        echo gettext("Recurring");
        echo "</label>
                        <div class=\"formRight moreFields\">
                            <input type=\"radio\" name=\"recurring\" value=\"1\" checked=\"checked\"/><label>Applies to first order and renewals</label>
                            <input type=\"radio\" name=\"recurring\" value=\"0\"/><label>Applies to first order only</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 115
        echo gettext("Active");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"active\" value=\"1\" checked=\"checked\"/><label>";
        // line 117
        echo gettext("Yes");
        echo "</label>
                            <input type=\"radio\" name=\"active\" value=\"0\"/><label>";
        // line 118
        echo gettext("No");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 123
        echo gettext("Free setup");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"freesetup\" value=\"1\"/><label>";
        // line 125
        echo gettext("Yes");
        echo "</label>
                            <input type=\"radio\" name=\"freesetup\" value=\"0\" checked=\"checked\"/><label>";
        // line 126
        echo gettext("No");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>";
        // line 133
        echo gettext("Promo code limitations");
        echo "</legend>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 136
        echo gettext("Once per client");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"once_per_client\" value=\"1\" checked=\"checked\"/><label>Yes</label>
                            <input type=\"radio\" name=\"once_per_client\" value=\"0\"/><label>No</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 145
        echo gettext("Max uses (zero for unlimited)");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"maxuses\" value=\"\" class=\"dirRight\" title=\"Leave blank for unlimited uses\"  placeholder=\"0\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 152
        echo gettext("Valid time (Leave blank for undefined time)");
        echo "</label>
                        <div class=\"formRight moreFields\">
                            <ul>
                                <li style=\"width: 100px\"><input type=\"text\" name=\"start_at\" value=\"\" placeholder=\"";
        // line 155
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y-m-d"), "html", null, true);
        echo "\" class=\"datepicker\"/></li>
                                <li class=\"sep\">-</li>
                                <li style=\"width: 100px\"><input type=\"text\" name=\"end_at\" value=\"\" placeholder=\"";
        // line 157
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y-m-d"), "html", null, true);
        echo "\" class=\"datepicker\"/></li>
                            </ul>
                        </div> 
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 163
        echo gettext("Products (Select none to apply to all products)");
        echo "</label>
                        <div class=\"formRight\">
                            ";
        // line 165
        $context["products"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "product_get_pairs");
        // line 166
        echo "                            <select name=\"products[]\" multiple=\"multiple\" class=\"multiple\" size=\"";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null)), "html", null, true);
        echo "\">
                                ";
        // line 167
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["product"]) {
            // line 168
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["product"]) ? $context["product"] : null), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 170
        echo "                            </select>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 175
        echo gettext("Periods (Select none to apply to all periods)");
        echo "</label>
                        <div class=\"formRight\">
                            ";
        // line 177
        $context["periods"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_periods");
        // line 178
        echo "                            <select name=\"periods[]\" multiple=\"multiple\" class=\"multiple\" size=\"";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["periods"]) ? $context["periods"] : null)), "html", null, true);
        echo "\">
                                ";
        // line 179
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["periods"]) ? $context["periods"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["period"]) {
            // line 180
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["period"]) ? $context["period"] : null), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['period'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 182
        echo "                            </select>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    ";
        // line 200
        echo "                    <input type=\"submit\" value=\"";
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>
        
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_product_promos.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 200,  449 => 182,  438 => 180,  434 => 179,  429 => 178,  427 => 177,  422 => 175,  415 => 170,  404 => 168,  400 => 167,  395 => 166,  393 => 165,  388 => 163,  379 => 157,  374 => 155,  368 => 152,  358 => 145,  346 => 136,  340 => 133,  330 => 126,  326 => 125,  321 => 123,  313 => 118,  309 => 117,  304 => 115,  292 => 106,  280 => 97,  276 => 96,  269 => 92,  259 => 85,  250 => 79,  246 => 78,  240 => 74,  238 => 73,  233 => 70,  225 => 67,  223 => 66,  219 => 64,  210 => 60,  204 => 59,  193 => 57,  189 => 56,  186 => 55,  179 => 54,  173 => 53,  169 => 51,  162 => 49,  150 => 47,  145 => 46,  135 => 45,  131 => 44,  128 => 43,  122 => 42,  120 => 41,  111 => 35,  107 => 34,  103 => 33,  99 => 32,  95 => 31,  91 => 30,  84 => 26,  73 => 18,  69 => 17,  64 => 14,  61 => 13,  54 => 9,  48 => 8,  42 => 7,  39 => 6,  36 => 5,  30 => 2,  25 => 3,);
    }
}
