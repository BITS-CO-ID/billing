<?php

/* mod_product_manage.phtml */
class __TwigTemplate_43b918cf48c2e6ec11d8698b200c7bff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_default.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
            'head' => array($this, 'block_head'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_default.phtml";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["active_menu"] = "products";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Product configuration");
    }

    // line 6
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 7
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/"), "html", null, true);
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("product"), "html", null, true);
        echo "\">";
        echo gettext("Products");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title"), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-settings\">";
        // line 19
        echo gettext("General settings");
        echo "</a></li>
        <li><a href=\"#tab-config\">";
        // line 20
        echo gettext("Configuration");
        echo "</a></li>
        <li><a href=\"#tab-addons\">";
        // line 21
        echo gettext("Addons");
        echo "</a></li>
        <li><a href=\"#tab-upgrades\">";
        // line 22
        echo gettext("Upgrades");
        echo "</a></li>
        <li><a href=\"#tab-links\">";
        // line 23
        echo gettext("Links");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <form method=\"post\" action=\"admin/product/update\" class=\"mainForm api-form save\" data-api-msg=\"Product configuration updated\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-settings\">

            <div class=\"help\">
                <h5>";
        // line 32
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "type")), "html", null, true);
        echo " ";
        echo gettext("General settings");
        echo "</h5>
            </div>

            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>";
        // line 37
        echo gettext("Category");
        echo ":</label>
                    <div class=\"formRight \">
                        ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "product_category_id", 1 => $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "product_category_get_pairs"), 2 => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "product_category_id"), 3 => 0, 4 => "None"), "method"), "html", null, true);
        echo "
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"rowElem\">
                    <label>";
        // line 44
        echo gettext("Status");
        echo ":</label>
                    <div class=\"formRight\">
                        <input type=\"radio\" name=\"status\" value=\"enabled\"";
        // line 46
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "status") == "enabled")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Enabled</label>
                        <input type=\"radio\" name=\"status\" value=\"disabled\"";
        // line 47
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "status") == "disabled")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>Disabled</label>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"rowElem\">
                    <label>";
        // line 52
        echo gettext("Hidden");
        echo ":</label>
                    <div class=\"formRight\">
                        <input type=\"radio\" name=\"hidden\" value=\"1\"";
        // line 54
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "hidden")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Yes</label>
                        <input type=\"radio\" name=\"hidden\" value=\"0\"";
        // line 55
        if ((!$this->getAttribute((isset($context["product"]) ? $context["product"] : null), "hidden"))) {
            echo " checked=\"checked\"";
        }
        echo " /><label>No</label>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"rowElem\">
                    <label>";
        // line 60
        echo gettext("Activation");
        echo ":</label>
                    <div class=\"formRight\">
                        <input type=\"radio\" name=\"setup\" value=\"after_order\"";
        // line 62
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "setup") == "after_order")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>After order is placed</label>
                        <input type=\"radio\" name=\"setup\" value=\"after_payment\"";
        // line 63
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "setup") == "after_payment")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>After payment is received</label>
                        <input type=\"radio\" name=\"setup\" value=\"manual\"";
        // line 64
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "setup") == "manual")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>Manual activation</label>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
        // line 70
        echo gettext("Icon/Image URL");
        echo ":</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"icon_url\" id=\"bb-icon\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "icon_url"), "html", null, true);
        echo "\" placeholder=\"\" style=\"width: 80%\"/>
                        <input type=\"button\" value=\"";
        // line 73
        echo gettext("Browse");
        echo "\" class=\"bHtml blueBtn button\" />
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"rowElem\">
                    <label>";
        // line 78
        echo gettext("Title");
        echo ":</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"title\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"rowElem\">
                    <label>";
        // line 85
        echo gettext("Slug");
        echo ":</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"slug\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "slug"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                
                ";
        // line 92
        $this->env->loadTemplate("partial_pricing.phtml")->display(array_merge($context, array("product" => (isset($context["product"]) ? $context["product"] : null))));
        // line 93
        echo "
            </fieldset>

           <fieldset>
               <legend>";
        // line 97
        echo gettext("Product / service description");
        echo "</legend>
                <textarea name=\"description\" cols=\"5\" rows=\"5\" class=\"bb-textarea\">";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
        echo "</textarea>
                
                <input type=\"submit\" value=\"";
        // line 100
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
           </fieldset>
        <div class=\"fix\"></div>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-addons\">
            <div class=\"help\">
                <h5>";
        // line 107
        echo gettext("Choose which addons you would like to offer with");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title"), "html", null, true);
        echo "</h5>
            </div>

            <table class=\"tableStatic wide\">
                <tbody>
                    ";
        // line 112
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "product_addon_get_pairs"));
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
        foreach ($context['_seq'] as $context["addon_id"] => $context["addon_title"]) {
            // line 113
            echo "                    <tr ";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                echo "class=\"noborder\"";
            }
            echo ">
                        <td style=\"width:5%\">
                            <input type=\"hidden\" name=\"addons[";
            // line 115
            echo twig_escape_filter($this->env, (isset($context["addon_id"]) ? $context["addon_id"] : null), "html", null, true);
            echo "]\" value=\"0\">
                            <input type=\"checkbox\" name=\"addons[";
            // line 116
            echo twig_escape_filter($this->env, (isset($context["addon_id"]) ? $context["addon_id"] : null), "html", null, true);
            echo "]\" value=\"1\" id=\"addon_";
            echo twig_escape_filter($this->env, (isset($context["addon_id"]) ? $context["addon_id"] : null), "html", null, true);
            echo "\" ";
            if (twig_in_filter((isset($context["addon_id"]) ? $context["addon_id"] : null), (isset($context["assigned_addons"]) ? $context["assigned_addons"] : null))) {
                echo "checked=\"checked\"";
            }
            echo "/>
                        </td>
                        <td><label for=\"addon_";
            // line 118
            echo twig_escape_filter($this->env, (isset($context["addon_id"]) ? $context["addon_id"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["addon_title"]) ? $context["addon_title"] : null), "html", null, true);
            echo "</label></td>
                        <td style=\"width:5%\"><a class=\"bb-button btn14\" href=\"";
            // line 119
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/product/addon"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["addon_id"]) ? $context["addon_id"] : null), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a></td>
                    </tr>
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
            // line 122
            echo "                    <tr>
                        <td colspan=\"3\">";
            // line 123
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['addon_id'], $context['addon_title'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 126
        echo "                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"3\">
                            <a href=\"";
        // line 130
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("product/addons"), "html", null, true);
        echo "#tab-new\" title=\"\" class=\"btnIconLeft mr10 mt5\"><img src=\"images/icons/dark/settings2.png\" alt=\"\" class=\"icon\"><span>Create new addon</span></a>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <input type=\"submit\" value=\"";
        // line 135
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />


            <div class=\"fix\"></div>
        </div>

        <div class=\"tab_content nopadding mainForm\" id=\"tab-upgrades\">
            <div class=\"help\">
                <h5>";
        // line 143
        echo gettext("Choose which products can client upgrade to");
        echo "</h5>
            </div>
            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>";
        // line 147
        echo gettext("Product Upgrades");
        echo "</label>
                    <div class=\"formRight\">
                        ";
        // line 149
        $context["products"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "product_get_pairs");
        // line 150
        echo "                        <input type=\"hidden\" name=\"upgrades\" value=\"\">
                        <select name=\"upgrades[]\" multiple=\"multiple\" class=\"multiple\" size=\"";
        // line 151
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null)), "html", null, true);
        echo "\">
                            ";
        // line 152
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["ptitle"]) {
            // line 153
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" ";
            if ($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "upgrades"), (isset($context["id"]) ? $context["id"] : null), array(), "array")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["ptitle"]) ? $context["ptitle"] : null), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['ptitle'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 155
        echo "                        </select>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <input type=\"submit\" value=\"";
        // line 159
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
        echo "\" />
            </fieldset>
        </div>

        <input type=\"hidden\" name=\"id\" value=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
        echo "\" />
        </form>

        <div class=\"tab_content nopadding\" id=\"tab-config\">
            ";
        // line 168
        $context["service_partial"] = (("mod_service" . $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "type")) . "_config.phtml");
        // line 169
        echo "            ";
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_template_exists", array(0 => array("file" => (isset($context["service_partial"]) ? $context["service_partial"] : null))), "method")) {
            // line 170
            echo "                ";
            $template = $this->env->resolveTemplate((isset($context["service_partial"]) ? $context["service_partial"] : null));
            $template->display(array_merge($context, array("product" => (isset($context["product"]) ? $context["product"] : null))));
            // line 171
            echo "            ";
        } else {
            // line 172
            echo "                <div class=\"help\">
                    <h5>";
            // line 173
            echo gettext("No additional configuration for this product is required");
            echo "</h5>
                </div>
            ";
        }
        // line 176
        echo "            <div class=\"fix\"></div>
        </div>
        
        <div class=\"tab_content nopadding mainForm\" id=\"tab-links\">
            <fieldset>
            <div class=\"help\">
                <h5>";
        // line 182
        echo gettext("Product links");
        echo "</h5>
            </div>

            <div class=\"rowElem noborder\">
                <label>";
        // line 186
        echo gettext("Product ID");
        echo "</label>
                <div class=\"formRight\">
                    <input type=\"text\" value=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
        echo "\"/>
                    <div class=\"fix\"></div>
                </div>
            </div>

            <div class=\"rowElem\">
                <label>";
        // line 194
        echo gettext("Order page with ID");
        echo "</label>
                <div class=\"formRight\">
                    <input type=\"text\" value=\"";
        // line 196
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("order"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
        echo "\"/>
                    <div class=\"fix\"></div>
                </div>
            </div>

            <div class=\"rowElem\">
                <label>";
        // line 202
        echo gettext("Order page with slug");
        echo "</label>
                <div class=\"formRight\">
                    <input type=\"text\" value=\"";
        // line 204
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("order"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "slug"), "html", null, true);
        echo "\"/>
                    <div class=\"fix\"></div>
                </div>
            </div>

            </fieldset>
            
            <div class=\"body aligncenter\">
                <a href=\"";
        // line 212
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("order"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "slug"), "html", null, true);
        echo "\" title=\"\" class=\"btn55 mr10\" target=\"_blank\"><img src=\"images/icons/middlenav/preview.png\" alt=\"\"><span>View as client</span></a>
            </div>

            <div class=\"fix\"></div>
        </div>

    </div>

</div>
";
    }

    // line 224
    public function block_head($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "bb_editor", array(0 => ".bb-textarea"), "method"), "html", null, true);
    }

    // line 226
    public function block_js($context, array $blocks = array())
    {
        // line 227
        echo "<script type=\"text/javascript\">
\$(function() {
\t\$(\".bHtml\").click( function() {
\t\tjAlert(bb.load('";
        // line 230
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("filemanager/icons"), "html", null, true);
        echo "', {rel:\"bb-icon\"}), '";
        echo gettext("Select icon and click OK");
        echo "');
\t});
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_product_manage.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  553 => 230,  548 => 227,  545 => 226,  539 => 224,  523 => 212,  510 => 204,  505 => 202,  494 => 196,  489 => 194,  480 => 188,  475 => 186,  468 => 182,  460 => 176,  454 => 173,  451 => 172,  448 => 171,  444 => 170,  441 => 169,  439 => 168,  432 => 164,  425 => 160,  421 => 159,  415 => 155,  400 => 153,  396 => 152,  392 => 151,  389 => 150,  387 => 149,  382 => 147,  375 => 143,  364 => 135,  356 => 130,  350 => 126,  341 => 123,  338 => 122,  320 => 119,  314 => 118,  303 => 116,  299 => 115,  291 => 113,  273 => 112,  263 => 107,  253 => 100,  248 => 98,  244 => 97,  238 => 93,  236 => 92,  228 => 87,  223 => 85,  215 => 80,  210 => 78,  202 => 73,  198 => 72,  193 => 70,  182 => 64,  176 => 63,  170 => 62,  165 => 60,  155 => 55,  149 => 54,  144 => 52,  134 => 47,  128 => 46,  123 => 44,  115 => 39,  110 => 37,  100 => 32,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  66 => 15,  63 => 14,  56 => 10,  50 => 9,  44 => 8,  41 => 7,  38 => 6,  32 => 3,  27 => 2,);
    }
}
