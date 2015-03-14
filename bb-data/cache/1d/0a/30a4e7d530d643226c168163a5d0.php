<?php

/* partial_addons.phtml */
class __TwigTemplate_1d0a30a4e7d530d643226c168163a5d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "addons")) > 0)) {
            // line 2
            echo "<div class=\"addons\" style=\"display: none;\">
<div class=\"widget\">
    <div class=\"head\">
        <h2 class=\"dark-icon i-services\">";
            // line 5
            echo gettext("Addons & extras");
            echo "</h2>
    </div>
    <table>
        <tbody>
            ";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "addons"));
            foreach ($context['_seq'] as $context["_key"] => $context["addon"]) {
                // line 10
                echo "            <tr>
                <td>
                    <input type=\"hidden\" name=\"addons[";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "id"), "html", null, true);
                echo "][selected]\" value=\"0\">
                    <input type=\"checkbox\" name=\"addons[";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "id"), "html", null, true);
                echo "][selected]\" value=\"1\" id=\"addon_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "id"), "html", null, true);
                echo "\">
                </td>
                <td>
                    <label for=\"addon_";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "id"), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "icon_url"), "html", null, true);
                echo "\" alt=\"\" width=\"36\"/></label>
                </td>
                <td style=\"width: 50%\">
                    <label for=\"addon_";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "id"), "html", null, true);
                echo "\"><h2>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "title"), "html", null, true);
                echo "</h2></label>
                    ";
                // line 20
                echo twig_bbmd_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "description"));
                echo "
                </td>
                <td>
                    ";
                // line 23
                if (($this->getAttribute($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "pricing"), "type") === "recurrent")) {
                    // line 24
                    echo "                    <select name=\"addons[";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "id"), "html", null, true);
                    echo "][period]\" class=\"addon-period-selector\" rel=\"addon-periods-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "id"), "html", null, true);
                    echo "\">
                    ";
                    // line 25
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "pricing"), "recurrent"));
                    foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                        // line 26
                        echo "                        ";
                        if ($this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "enabled")) {
                            // line 27
                            echo "                        <option value=\"";
                            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periods"]) ? $context["periods"] : null), (isset($context["code"]) ? $context["code"] : null), array(), "array"), "html", null, true);
                            echo "</option>
                        ";
                        }
                        // line 29
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 30
                    echo "                    </select>
                    ";
                }
                // line 32
                echo "                </td>
                <td class=\"currency\" style=\"width: 20%\">
                    ";
                // line 34
                if (($this->getAttribute($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "pricing"), "type") === "recurrent")) {
                    // line 35
                    echo "                    <div id=\"addon-periods-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "id"), "html", null, true);
                    echo "\">
                    ";
                    // line 36
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "pricing"), "recurrent"));
                    foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                        // line 37
                        echo "                        <span class=\"";
                        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
                        echo "\">";
                        echo twig_money_convert($this->env, ($this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "price") + $this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "setup")));
                        echo "</span>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 39
                    echo "                    </div>
                    ";
                }
                // line 41
                echo "
                    ";
                // line 42
                if (($this->getAttribute($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "pricing"), "type") === "once")) {
                    // line 43
                    echo "                        ";
                    echo twig_money_convert($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "pricing"), "once"), "price") + $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "pricing"), "once"), "setup")));
                    echo "
                    ";
                }
                // line 45
                echo "
                    ";
                // line 46
                if (($this->getAttribute($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "pricing"), "type") === "free")) {
                    // line 47
                    echo "                        ";
                    echo twig_money_convert($this->env, 0);
                    echo "
                    ";
                }
                // line 49
                echo "                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addon'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 52
            echo "        </tbody>
    </table>
</div>
<div class=\"block\" style=\"text-align: right; margin-bottom:10px;\">
    <button class=\"bb-button bb-button-submit bb-button-big\" type=\"submit\">";
            // line 56
            echo gettext("Order now");
            echo "</button>
</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partial_addons.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 56,  165 => 52,  157 => 49,  151 => 47,  146 => 45,  138 => 42,  135 => 41,  120 => 37,  109 => 34,  101 => 30,  73 => 24,  65 => 20,  35 => 10,  31 => 9,  24 => 5,  19 => 2,  227 => 82,  221 => 80,  215 => 78,  213 => 77,  209 => 75,  205 => 73,  194 => 71,  182 => 67,  175 => 65,  172 => 64,  164 => 59,  160 => 58,  154 => 55,  150 => 54,  140 => 43,  133 => 48,  129 => 46,  123 => 45,  111 => 35,  108 => 42,  104 => 41,  100 => 39,  94 => 35,  89 => 33,  86 => 32,  84 => 26,  80 => 25,  75 => 27,  71 => 23,  62 => 21,  59 => 19,  54 => 18,  42 => 14,  33 => 9,  28 => 7,  23 => 5,  17 => 1,  342 => 207,  327 => 195,  321 => 194,  245 => 120,  243 => 119,  240 => 118,  237 => 117,  232 => 114,  229 => 113,  222 => 109,  218 => 107,  216 => 106,  208 => 100,  206 => 99,  190 => 70,  186 => 69,  180 => 84,  174 => 81,  168 => 80,  163 => 78,  153 => 71,  149 => 46,  143 => 51,  137 => 49,  131 => 39,  126 => 61,  116 => 36,  110 => 53,  105 => 32,  95 => 29,  91 => 34,  87 => 27,  82 => 39,  76 => 34,  72 => 22,  68 => 25,  64 => 19,  56 => 19,  53 => 13,  51 => 16,  49 => 11,  46 => 15,  43 => 13,  39 => 12,  36 => 5,  30 => 8,  25 => 6,);
    }
}
