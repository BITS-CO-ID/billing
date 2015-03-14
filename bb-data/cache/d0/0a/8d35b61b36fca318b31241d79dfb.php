<?php

/* mod_client_balance.phtml */
class __TwigTemplate_d00a8d35b61b36fca318b31241d79dfb extends Twig_Template
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
        // line 4
        $context["profile"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "client_get");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Payments history");
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"h-block\">
    <div class=\"h-block-header\">
        <div class=\"icon\"><span class=\"big-light-icon i-payment\"></span></div>
        <h2>";
        // line 11
        echo gettext("Payments history");
        echo "</h2>
        <p>";
        // line 12
        echo gettext("Here you can track your payments you have made and what you have been charged for");
        echo "</p>
    </div>
    <div class=\"block\">
        <table>
            <thead>
                <tr>
                    <th>";
        // line 18
        echo gettext("Amount");
        echo "</th>
                    <th>";
        // line 19
        echo gettext("Description");
        echo "</th>
                    <th>";
        // line 20
        echo gettext("Date");
        echo "</th>
                </tr>
            </thead>

            <tbody>
                ";
        // line 25
        $context["transactions"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "client_balance_get_list", array(0 => array("per_page" => 10, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page"))), "method");
        // line 26
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["transactions"]) ? $context["transactions"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["tx"]) {
            // line 27
            echo "                <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "\">
                    <td>";
            // line 28
            echo twig_money($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "amount"), $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "currency"));
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "description"), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "created_at")), "html", null, true);
            echo "</td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "                <tr>
                    <td colspan=\"3\">";
            // line 34
            echo gettext("The list is empty");
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['tx'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 37
        echo "            </tbody>

            <tfoot>
                <tr>
                    <th><a class=\"bb-button\" href=\"#\" onclick=\"\$('#widget-add-funds').slideToggle(); return false;\" ><span class=\"dark-icon i-payment\"></span> ";
        // line 41
        echo gettext("Add Funds");
        echo "</a></th>
                    <th class=\"currency\" colspan=\"2\">";
        // line 42
        echo gettext("Balance");
        echo ": ";
        echo twig_money($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "balance"), $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "currency"));
        echo "</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

";
        // line 49
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["transactions"]) ? $context["transactions"] : null))));
        // line 50
        echo "
<div class=\"grid_6 suffix_6 alpha omega\">
<div class=\"widget\" style=\"display: none;\" id=\"widget-add-funds\">
    <div class=\"head\">
        <h2 class=\"dark-icon i-payment\">";
        // line 54
        echo gettext("Add funds in advance");
        echo "</h2>
    </div>
    <div class=\"block\">
        <p>";
        // line 57
        echo gettext("You can add funds to your account if you have active order.");
        echo "</p>
        <form action=\"\" method=\"post\" class=\"api_form\" data-api-url=\"client/invoice/funds_invoice\" data-api-jsonp=\"onAfterInvoiceCreated\">
            <fieldset>
                <legend>";
        // line 60
        echo gettext("Add funds in advance");
        echo "</legend>
                <p>
                    <label>";
        // line 62
        echo gettext("Amount");
        echo ": </label>
                    <input type=\"text\" name=\"amount\" value=\"\" required=\"required\"/>
                </p>
                <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
        // line 65
        echo gettext("Add funds");
        echo "\">
            </fieldset>
        </form>
    </div>
</div>
</div>

";
    }

    // line 74
    public function block_js($context, array $blocks = array())
    {
        // line 75
        echo "<script type=\"text/javascript\">
    function onAfterInvoiceCreated(hash) {
        var link = '";
        // line 77
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("invoice"), "html", null, true);
        echo "/' + hash;
        bb.redirect(link);
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_client_balance.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 77,  183 => 75,  180 => 74,  168 => 65,  162 => 62,  157 => 60,  151 => 57,  145 => 54,  139 => 50,  137 => 49,  125 => 42,  121 => 41,  115 => 37,  106 => 34,  103 => 33,  95 => 30,  91 => 29,  87 => 28,  82 => 27,  76 => 26,  74 => 25,  66 => 20,  62 => 19,  58 => 18,  49 => 12,  45 => 11,  39 => 7,  36 => 6,  30 => 3,  25 => 4,  23 => 2,);
    }
}
