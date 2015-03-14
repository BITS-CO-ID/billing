<?php

/* mod_servicehosting_order.phtml */
class __TwigTemplate_4d2e4db36a1f0ab403df11a906bc1712 extends Twig_Template
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
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title"), "html", null, true);
    }

    // line 5
    public function block_content_before($context, array $blocks = array())
    {
        // line 6
        $this->env->loadTemplate("partial_steps.phtml")->display(array_merge($context, array("selected" => 2)));
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
";
        // line 11
        $context["periods"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_periods");
        // line 12
        $context["pricing"] = $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "pricing");
        // line 13
        echo "
<form method=\"post\" action=\"\" class=\"api_form\" data-api-url=\"guest/cart/add_item\" data-api-redirect=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("cart"), "html", null, true);
        echo "\">

    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"number\">2</span></div>
            <h2>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title"), "html", null, true);
        echo "</h2>
            <p>";
        // line 20
        echo gettext("Please configure domain for your hosting account");
        echo "</p>
            ";
        // line 22
        echo "        </div>
        <div class=\"block\">
            ";
        // line 34
        echo "            <div class=\"clear\"></div>
            <div class=\"grid_8 alpha\">
                <div class=\"widget simpleTabs tabsRight\" style=\"margin: 10px 0 10px 10px;\">
                    <div class=\"head\">
                        ";
        // line 39
        echo "                    </div>

                    <ul class=\"tabs\">
                        <li><a href=\"#owndomain\" rel=\"owndomain\"><span class=\"dark-icon\"></span>";
        // line 42
        echo gettext("Use own");
        echo "</a></li>
                        <li><a href=\"#register\" rel=\"register\"><span class=\"dark-icon\"></span>";
        // line 43
        echo gettext("Register");
        echo "</a></li>
                        <li><a href=\"#transfer\" rel=\"transfer\"><span class=\"dark-icon\"></span>";
        // line 44
        echo gettext("Transfer");
        echo "</a></li>
                    </ul>

                    <div class=\"tabs_container\">

                        <div class=\"tab_content\" id=\"owndomain\">
                            <fieldset>
                                <legend>";
        // line 51
        echo gettext("I will use my existing domain and update nameservers");
        echo "</legend>
                                <p>
                                    <input type=\"text\" name=\"domain[owndomain_sld]\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "owndomain_sld"), "html", null, true);
        echo "\" style=\"width: 321px\" placeholder=\"";
        echo gettext("Enter your domain name");
        echo "\">
                                    <input type=\"text\" name=\"domain[owndomain_tld]\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "owndomain_tld", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "owndomain_tld"), ".com")) : (".com")), "html", null, true);
        echo "\" style=\"width: 80px\">
                                </p>
                            </fieldset>
                        </div>

                        <div class=\"tab_content\" id=\"register\">
                            <fieldset>
                                <legend>";
        // line 61
        echo gettext("Register a new domain");
        echo "</legend>
                                <p>
                                    <input type=\"text\" name=\"domain[register_sld]\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "register_sld"), "html", null, true);
        echo "\" style=\"width: 333px\" placeholder=\"";
        echo gettext("Enter your domain name");
        echo "\">
                                    ";
        // line 64
        echo $context["mf"]->getselectboxtld("domain[register_tld]", $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "serviceDomain_tlds", array(0 => array("allow_register" => 1)), "method"));
        echo "
                                </p>

                                <button class=\"bb-button bb-button-big\" type=\"button\" id=\"domain-check\" style=\"float: right;\">";
        // line 67
        echo gettext("Check");
        echo "</button>
                            
                                <div id=\"domain-config\" style=\"display:none;\">
                                    <label>";
        // line 70
        echo gettext("Period");
        echo ":
                                    ";
        // line 71
        echo $context["mf"]->getselectbox("domain[register_years]", array());
        echo "</label>
                                </div>
                            </fieldset>
                        </div>

                        <div class=\"tab_content\" id=\"transfer\">
                            <fieldset>
                                <legend>";
        // line 78
        echo gettext("Transfer your domain from another registrar");
        echo "</legend>
                                <p>
                                    <input type=\"text\" name=\"domain[transfer_sld]\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "transfer_sld"), "html", null, true);
        echo "\"  style=\"width: 333px\" placeholder=\"";
        echo gettext("Enter your domain name");
        echo "\">
                                    ";
        // line 81
        echo $context["mf"]->getselectboxtld("domain[transfer_tld]", $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "serviceDomain_tlds", array(0 => array("allow_transfer" => 1)), "method"));
        echo "
                                </p>
                                
                                <button class=\"bb-button bb-button-big\" type=\"button\" id=\"transfer-check\" style=\"float: right;\">";
        // line 84
        echo gettext("Check");
        echo "</button>
                            
                                <div id=\"domain-transfer-config\" style=\"display:none;\">
                                    <p>";
        // line 87
        echo gettext("Transfer price");
        echo ": <span id=\"transfer-price\"></span></p>
                                    <input type=\"text\" name=\"domain[transfer_code]\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "transfer_code"), "html", null, true);
        echo "\" style=\"width: 200px\" placeholder=\"";
        echo gettext("Enter domain transfer code");
        echo "\">
                                </div>

                            </fieldset>
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"grid_4 omega\">
                ";
        // line 99
        $this->env->loadTemplate("partial_pricing.phtml")->display(array_merge($context, array("product" => (isset($context["product"]) ? $context["product"] : null))));
        // line 100
        echo "            </div>
            
            <div class=\"clear\"></div>
        </div>
    </div>

    ";
        // line 106
        $this->env->loadTemplate("partial_addons.phtml")->display(array_merge($context, array("product" => (isset($context["product"]) ? $context["product"] : null))));
        // line 107
        echo "    
    <input type=\"hidden\" name=\"domain[action]\" value=\"owndomain\" id=\"domain-action\"/>
    <input type=\"hidden\" name=\"id\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
        echo "\" />
</form>
";
    }

    // line 113
    public function block_sidebar2($context, array $blocks = array())
    {
        // line 114
        echo "    ";
        $this->env->loadTemplate("partial_currency.phtml")->display($context);
    }

    // line 117
    public function block_js($context, array $blocks = array())
    {
        // line 118
        echo "
";
        // line 119
        $context["currency"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "cart_get_currency");
        // line 120
        echo "<script type=\"text/javascript\">
\$(function() {

    \$('ul.tabs li a').bind('click', function (){
        \$('#domain-action').val(\$(this).attr('rel'));

        \$(this).parents('ul').find('span.dark-icon')
            .removeClass('i-check i-uncheck')
            .addClass('i-uncheck');

        \$(this).find('span')
            .removeClass('i-uncheck')
            .addClass('i-check');
    });
    \$('ul.tabs li a:first').click();

    \$('#transfer-check').bind('click',function(event){
        var sld = \$('input[name=\"domain[transfer_sld]\"]').val();
        var tld = \$('select[name=\"domain[transfer_tld]\"]').val();
        var domain = sld + tld;
        bb.post(
            'guest/servicedomain/can_be_transferred',
            { sld: sld, tld: tld },
            function(result) {
                setTransferPricing(tld);
                \$('#domain-transfer-config').fadeIn('slow');
            }
        );
        return false;
    });

    \$('#domain-check').bind('click',function(event){
        var sld = \$('input[name=\"domain[register_sld]\"]').val();
        var tld = \$('select[name=\"domain[register_tld]\"]').val();
        var domain = sld + tld;
        bb.post(
            'guest/servicedomain/check',
            { sld: sld, tld: tld },
            function(result) {
                setRegistrationPricing(tld);
                \$('#domain-config').fadeIn('slow');
            }
        );
        return false;
    });

    if(\$(\".addons\").length && \$(\".addons\").is(':hidden')) {
        \$('#order-button').one('click', function(){
            \$(this).slideUp('fast');
            \$('.addons').slideDown('fast');
            return false;
        });
    }

    \$('#period-selector').change(function(){
        \$('.period').hide();
        \$('.period.' + \$(this).val()).show();
    }).trigger('change');

    \$('.addon-period-selector').change(function(){
        var r = \$(this).attr('rel');
        \$('#' + r + ' span').hide();
        \$('#' + r + ' span.' + \$(this).val()).fadeIn();
    }).trigger('change');

    function setRegistrationPricing(tld)
    {
        bb.post(
            'guest/servicedomain/pricing',
            { tld: tld },
            function(result) {
                var s = \$(\"select[name='domain[register_years]']\");
                s.find('option').remove();
                for (i=1;i<6;i++) {
                    var price = bb.currency(result.price_registration, ";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currency"]) ? $context["currency"] : null), "conversion_rate"), "html", null, true);
        echo ", \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currency"]) ? $context["currency"] : null), "code"), "html", null, true);
        echo "\", i);
                    s.append(new Option(i + \"";
        // line 195
        echo gettext(" Year/s @ ");
        echo "\" + price, i));
                }
            }
        );
    }

    function setTransferPricing(tld)
    {
        bb.post(
            'guest/servicedomain/pricing',
            { tld: tld },
            function(result) {
                var price = bb.currency(result.price_transfer, ";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currency"]) ? $context["currency"] : null), "conversion_rate"), "html", null, true);
        echo ", \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currency"]) ? $context["currency"] : null), "code"), "html", null, true);
        echo "\");
                \$('#transfer-price').text(price);
            }
        );
    }
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_servicehosting_order.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 207,  327 => 195,  321 => 194,  245 => 120,  243 => 119,  240 => 118,  237 => 117,  232 => 114,  229 => 113,  222 => 109,  218 => 107,  216 => 106,  208 => 100,  206 => 99,  190 => 88,  186 => 87,  180 => 84,  174 => 81,  168 => 80,  163 => 78,  153 => 71,  149 => 70,  143 => 67,  137 => 64,  131 => 63,  126 => 61,  116 => 54,  110 => 53,  105 => 51,  95 => 44,  91 => 43,  87 => 42,  82 => 39,  76 => 34,  72 => 22,  68 => 20,  64 => 19,  56 => 14,  53 => 13,  51 => 12,  49 => 11,  46 => 10,  43 => 9,  39 => 6,  36 => 5,  30 => 3,  25 => 2,);
    }
}
