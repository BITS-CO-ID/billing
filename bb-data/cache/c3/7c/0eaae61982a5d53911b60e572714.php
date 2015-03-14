<?php

/* mod_order_index.phtml */
class __TwigTemplate_c37c0eaae61982a5d53911b60e572714 extends Twig_Template
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
        // line 2
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        // line 5
        $context["periods"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_periods");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Order");
    }

    // line 7
    public function block_content_before($context, array $blocks = array())
    {
        // line 8
        $this->env->loadTemplate("partial_steps.phtml")->display(array_merge($context, array("selected" => 1)));
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
<div class=\"h-block\">
    <div class=\"h-block-header\">
        <div class=\"icon\"><span class=\"number\">1</span></div>
        <h2>";
        // line 16
        echo gettext("Select Product");
        echo "</h2>
        <p>";
        // line 17
        echo gettext("Choose products we offer for selling");
        echo "</p>
    </div>
    <div class=\"block\">
    ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "product_category_get_list"), "list"));
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
        foreach ($context['_seq'] as $context["i"] => $context["category"]) {
            // line 21
            echo "    <div class=\"product-category";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last")) {
                echo " last";
            }
            echo "\" id=\"pc-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "html", null, true);
            echo "\">
        <div class=\"show-products\">
            ";
            // line 23
            if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "icon_url")) {
                // line 24
                echo "            <div style=\"float: left; margin: 20px;\">
                ";
                // line 25
                echo twig_img_tag($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "icon_url"));
                echo "
            </div>
            ";
            }
            // line 28
            echo "            <div class=\"block product-pricing\" style=\"float: right;\">
                <span class=\"starting_from\">";
            // line 29
            echo gettext("Starting from:");
            echo "</span>
                <div class=\"currency\">";
            // line 30
            echo twig_money_convert($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "price_starting_from"));
            echo "</div>
                <a class=\"bb-button\" href=\"#\">";
            // line 31
            echo gettext("View products");
            echo "</a>
            </div>
            <div class=\"block\">
                <h2>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "title"), "html", null, true);
            echo "</h2>
                ";
            // line 35
            echo twig_bbmd_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "description"));
            echo "
            </div>
        </div>
        <div class=\"clear\"></div>
        <div class=\"products\" style=\"display:none; position: relative;\">
            <div class=\"fader\" style=\"width: 100%;margin-right: 0;height: 8px;position: absolute;top: 0;left: 0;opacity: 0.75;border-top: 1px solid rgba(0, 0, 0, 0.4);background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .2)), to(transparent));-webkit-mask-box-image: -webkit-gradient(linear, left top, right top, color-stop(0.0, rgba(0,0,0,0)), color-stop(0.5, rgba(0,0,0,.8)), color-stop(1.0, rgba(0,0,0,0)));\"></div>
            ";
            // line 41
            $context["listing_template"] = (("mod_service" . $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "type")) . "_listing.phtml");
            // line 42
            echo "            ";
            if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_template_exists", array(0 => array("file" => (isset($context["listing_template"]) ? $context["listing_template"] : null))), "method")) {
                // line 43
                echo "                <div class=\"mod_service";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "type"), "html", null, true);
                echo "\">";
                $template = $this->env->resolveTemplate((isset($context["listing_template"]) ? $context["listing_template"] : null));
                $template->display($context);
                echo "</div>
            ";
            } else {
                // line 45
                echo "            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "products"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 46
                    echo "            <div class=\"product";
                    if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                        echo " first";
                    }
                    if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last")) {
                        echo " last";
                    }
                    echo "\">
                <div class=\"block\" style=\"position: relative;\">
                    <div class=\"product-pricing\" style=\"float:right; text-align: right; margin: 0 0 20px 20px;\">
                        <span class=\"starting_from\">";
                    // line 49
                    echo gettext("Starting from:");
                    echo "</span>
                        <div class=\"currency\">";
                    // line 50
                    echo twig_money_convert($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price_starting_from"));
                    echo "</div>
                        ";
                    // line 51
                    if (($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "pricing"), "type") == "recurrent")) {
                        // line 52
                        echo "                        <form method=\"get\" action=\"";
                        echo twig_escape_filter($this->env, twig_bb_client_link_filter("/order"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "slug"), "html", null, true);
                        echo "\">
                        <p>
                        <select name=\"period\" id=\"period-selector\">
                        ";
                        // line 55
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "pricing"), "recurrent"));
                        foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                            // line 56
                            echo "                            ";
                            if ($this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "enabled")) {
                                // line 57
                                echo "                            <option value=\"";
                                echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
                                echo "\" data-bb-price=\"";
                                echo twig_money_convert($this->env, $this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "price"));
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periods"]) ? $context["periods"] : null), (isset($context["code"]) ? $context["code"] : null), array(), "array"), "html", null, true);
                                echo "</option>
                            ";
                            }
                            // line 59
                            echo "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 60
                        echo "                        </select>
                        </p>
                        <button class=\"bb-button bb-button-submit\" type=\"submit\">";
                        // line 62
                        echo gettext("Order now");
                        echo "</button>
                        </form>
                        ";
                    } else {
                        // line 65
                        echo "                        <p><button class=\"bb-button bb-button-submit\" type=\"button\" onclick=\"parent.location='";
                        echo twig_escape_filter($this->env, twig_bb_client_link_filter("/order"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "slug"), "html", null, true);
                        echo "'\">";
                        echo gettext("Order now");
                        echo "</button></p>
                        ";
                    }
                    // line 67
                    echo "                    </div>

                    ";
                    // line 69
                    if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "icon_url")) {
                        // line 70
                        echo "                    <div style=\"display: block;float:left; margin:0 20px 20px 0;\">
                        ";
                        // line 71
                        echo twig_img_tag($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "icon_url"));
                        echo "
                    </div>
                    ";
                    }
                    // line 74
                    echo "                    
                    <h2>";
                    // line 75
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title"), "html", null, true);
                    echo "</h2>

                    ";
                    // line 77
                    echo twig_bbmd_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"));
                    echo "
                    <div class=\"clear\"></div>
                </div>
                <div class=\"clear\"></div>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 83
                echo "            ";
            }
            // line 84
            echo "            <div class=\"clear\"></div>
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
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 88
        echo "    <div class=\"clear\"></div>
    </div>
</div>
";
    }

    // line 93
    public function block_sidebar2($context, array $blocks = array())
    {
        // line 94
        echo "    ";
        $this->env->loadTemplate("partial_currency.phtml")->display($context);
    }

    // line 97
    public function block_js($context, array $blocks = array())
    {
        // line 99
        echo "<script type=\"text/javascript\">
\$(function() {

    \$('.show-products').click(function(){
        if(\$(this).parents('.product-category').hasClass('selected')) {
            \$(this).parents('.product-category').find('.products').slideUp();
            \$(this).parents('.product-category').removeClass('selected');
        } else {
            \$('.product-category').removeClass('selected');
            \$(this).parents('.product-category').addClass('selected');
            \$('.product-category .products').slideUp('fast');
            \$(this).parents('.product-category').find('.products').slideToggle();
        }
        return false;
    });
    
    var open = '";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "show"), "js", null, true);
        echo "';
    if(open) {
        \$('#pc-' + open + ' .show-products').trigger('click');
    }
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_order_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 115,  319 => 99,  316 => 97,  311 => 94,  308 => 93,  301 => 88,  284 => 84,  281 => 83,  261 => 77,  256 => 75,  253 => 74,  247 => 71,  244 => 70,  242 => 69,  238 => 67,  228 => 65,  222 => 62,  218 => 60,  212 => 59,  202 => 57,  199 => 56,  195 => 55,  186 => 52,  184 => 51,  180 => 50,  176 => 49,  164 => 46,  146 => 45,  137 => 43,  134 => 42,  132 => 41,  123 => 35,  119 => 34,  113 => 31,  109 => 30,  105 => 29,  102 => 28,  96 => 25,  93 => 24,  91 => 23,  81 => 21,  64 => 20,  58 => 17,  54 => 16,  48 => 12,  45 => 11,  41 => 8,  38 => 7,  32 => 3,  27 => 5,  25 => 2,);
    }
}
