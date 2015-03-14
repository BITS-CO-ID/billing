<?php

/* partial_pricing.phtml */
class __TwigTemplate_dbc15ede1c8b1987e9621e71ad390230 extends Twig_Template
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
        echo "<div class=\"box\">
    <div class=\"block pricing\">

        <div class=\"total\">
            ";
        // line 5
        if (($this->getAttribute((isset($context["pricing"]) ? $context["pricing"] : null), "type") == "free")) {
            // line 6
            echo "            
                ";
            // line 7
            if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "allow_quantity_select")) {
                // line 8
                echo "                    <label>";
                echo gettext("Quantity:");
                // line 9
                echo "                        <input type=\"text\" name=\"quantity\" value=\"1\" style=\"width:30px;\"/>
                    </label>
                    <hr/>
                ";
            }
            // line 13
            echo "                
                <p>";
            // line 14
            echo gettext("Total price:");
            echo "</p>
                <div class=\"currency\">";
            // line 15
            echo twig_money_convert($this->env, 0);
            echo "</div>
            ";
        }
        // line 17
        echo "
            ";
        // line 18
        if (($this->getAttribute((isset($context["pricing"]) ? $context["pricing"] : null), "type") == "once")) {
            // line 19
            echo "                ";
            if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "allow_quantity_select")) {
                // line 20
                echo "                    <label>";
                echo gettext("Quantity:");
                // line 21
                echo "                        <input type=\"text\" name=\"quantity\" value=\"1\" style=\"width:30px;\"/>
                    </label>
                    <hr/>
                ";
            }
            // line 25
            echo "
                <p>";
            // line 26
            echo gettext("Total price:");
            echo "</p>
                <div class=\"currency\">";
            // line 27
            echo twig_money_convert($this->env, ($this->getAttribute($this->getAttribute((isset($context["pricing"]) ? $context["pricing"] : null), "once"), "price") + $this->getAttribute($this->getAttribute((isset($context["pricing"]) ? $context["pricing"] : null), "once"), "setup")));
            echo "</div>
            ";
        }
        // line 29
        echo "

        ";
        // line 31
        if (($this->getAttribute((isset($context["pricing"]) ? $context["pricing"] : null), "type") == "recurrent")) {
            // line 32
            echo "        
        ";
            // line 33
            if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "allow_quantity_select")) {
                // line 34
                echo "            <label>";
                echo gettext("Quantity:");
                // line 35
                echo "                <input type=\"text\" name=\"quantity\" value=\"1\" style=\"width:30px;\"/>
            </label>
            <hr/>
        ";
            }
            // line 39
            echo "                
        <select name=\"period\" id=\"period-selector\">
        ";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pricing"]) ? $context["pricing"] : null), "recurrent"));
            foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                // line 42
                echo "            ";
                if ($this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "enabled")) {
                    // line 43
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
                    echo "\"";
                    if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "period") == (isset($context["code"]) ? $context["code"] : null))) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periods"]) ? $context["periods"] : null), (isset($context["code"]) ? $context["code"] : null), array(), "array"), "html", null, true);
                    echo "</option>
            ";
                }
                // line 45
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 46
            echo "        </select>

        ";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pricing"]) ? $context["pricing"] : null), "recurrent"));
            foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                // line 49
                echo "        ";
                if ($this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "enabled")) {
                    // line 50
                    echo "        ";
                    if (($this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "setup") > 0)) {
                        // line 51
                        echo "        <div class=\"period ";
                        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
                        echo "\" style=\"display: none;\">
            <table>
                <tr>
                    <td>";
                        // line 54
                        echo gettext("Price");
                        echo "</td>
                    <td>";
                        // line 55
                        echo twig_money_convert($this->env, $this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "price"));
                        echo "</td>
                </tr>
                <tr>
                    <td>";
                        // line 58
                        echo gettext("Setup Price");
                        echo "</td>
                    <td>";
                        // line 59
                        echo twig_money_convert($this->env, $this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "setup"));
                        echo "</td>
                </tr>
            </table>
        </div>
        ";
                    }
                    // line 64
                    echo "        ";
                }
                // line 65
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 67
            echo "
        <hr/>
        <p>";
            // line 69
            echo gettext("Total price:");
            echo "</p>
        ";
            // line 70
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pricing"]) ? $context["pricing"] : null), "recurrent"));
            foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                // line 71
                echo "        <div class=\"currency period ";
                echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
                echo "\">";
                echo twig_money_convert($this->env, ($this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "price") + $this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "setup")));
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 73
            echo "        
        ";
        }
        // line 75
        echo "        </div>

        ";
        // line 77
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "addons")) > 0)) {
            // line 78
            echo "        <button class=\"bb-button bb-button-submit bb-button-big\" type=\"submit\" id=\"order-button\">";
            echo gettext("Continue");
            echo "</button>
        ";
        } else {
            // line 80
            echo "        <button class=\"bb-button bb-button-submit bb-button-big\" type=\"submit\" id=\"order-button\">";
            echo gettext("Order now");
            echo "</button>
        ";
        }
        // line 82
        echo "        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "partial_pricing.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 82,  221 => 80,  215 => 78,  213 => 77,  209 => 75,  205 => 73,  194 => 71,  182 => 67,  175 => 65,  172 => 64,  164 => 59,  160 => 58,  154 => 55,  150 => 54,  140 => 50,  133 => 48,  129 => 46,  123 => 45,  111 => 43,  108 => 42,  104 => 41,  100 => 39,  94 => 35,  89 => 33,  86 => 32,  84 => 31,  80 => 29,  75 => 27,  71 => 26,  62 => 21,  59 => 20,  54 => 18,  42 => 14,  33 => 9,  28 => 7,  23 => 5,  17 => 1,  342 => 207,  327 => 195,  321 => 194,  245 => 120,  243 => 119,  240 => 118,  237 => 117,  232 => 114,  229 => 113,  222 => 109,  218 => 107,  216 => 106,  208 => 100,  206 => 99,  190 => 70,  186 => 69,  180 => 84,  174 => 81,  168 => 80,  163 => 78,  153 => 71,  149 => 70,  143 => 51,  137 => 49,  131 => 63,  126 => 61,  116 => 54,  110 => 53,  105 => 51,  95 => 44,  91 => 34,  87 => 42,  82 => 39,  76 => 34,  72 => 22,  68 => 25,  64 => 19,  56 => 19,  53 => 13,  51 => 17,  49 => 11,  46 => 15,  43 => 9,  39 => 13,  36 => 5,  30 => 8,  25 => 6,);
    }
}
