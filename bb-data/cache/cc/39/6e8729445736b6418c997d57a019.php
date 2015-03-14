<?php

/* macro_functions.phtml */
class __TwigTemplate_cc396e8729445736b6418c997d57a019 extends Twig_Template
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
        // line 4
        echo "
";
        // line 13
        echo "
";
        // line 21
        echo "
";
        // line 31
        echo "
";
        // line 69
        echo "
";
        // line 86
        echo "
";
        // line 110
        echo "
";
        // line 112
        echo "
";
        // line 116
        echo "
";
        // line 125
        echo "
";
    }

    // line 1
    public function getq($bool = null)
    {
        $context = $this->env->mergeGlobals(array(
            "bool" => $bool,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            if ((isset($context["bool"]) ? $context["bool"] : null)) {
                echo gettext("Yes");
            } else {
                echo gettext("No");
            }
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 5
    public function getselectbox($name = null, $options = null, $selected = null, $required = null, $nullOption = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $name,
            "options" => $options,
            "selected" => $selected,
            "required" => $required,
            "nullOption" => $nullOption,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 6
            echo "    <select name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                echo "required=\"required\"";
            }
            echo ">
        ";
            // line 7
            if ((isset($context["nullOption"]) ? $context["nullOption"] : null)) {
                echo "<option value=\"\">-- ";
                echo twig_escape_filter($this->env, (isset($context["nullOption"]) ? $context["nullOption"] : null), "html", null, true);
                echo " --</option>";
            }
            // line 8
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["val"] => $context["label"]) {
                // line 9
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
                echo "\" label=\"";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null));
                echo "\" ";
                if (((isset($context["selected"]) ? $context["selected"] : null) == (isset($context["val"]) ? $context["val"] : null))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null));
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['val'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 11
            echo "    </select>
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 14
    public function getselectboxtld($name = null, $options = null, $selected = null, $required = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $name,
            "options" => $options,
            "selected" => $selected,
            "required" => $required,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 15
            echo "    <select name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                echo "required=\"required\"";
            }
            echo " style=\"width:80px;\">
        ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 17
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tld"), "html", null, true);
                echo "\" label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tld"), "html", null, true);
                echo "\" ";
                if (((isset($context["selected"]) ? $context["selected"] : null) == $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tld"))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tld"), "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 19
            echo "    </select>
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 22
    public function gettable_search()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 23
            echo "<div style=\"position: relative;\">
    <div class=\"dataTables_filter\">
        <form method=\"get\" action=\"\">
            <label>";
            // line 26
            echo gettext("Search:");
            echo " <input type=\"text\" name=\"search\" placeholder=\"";
            echo gettext("Enter search text..");
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "search"), "html", null, true);
            echo "\"><div class=\"srch\"></div></label>
        </form>
    </div>
</div>
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 32
    public function getbuild_form($elements = null, $values = null)
    {
        $context = $this->env->mergeGlobals(array(
            "elements" => $elements,
            "values" => $values,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 33
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) ? $context["elements"] : null));
            foreach ($context['_seq'] as $context["name"] => $context["element"]) {
                // line 34
                echo "    <div class=\"rowElem\">
            ";
                // line 35
                if (($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 0, array(), "array") == "select")) {
                    // line 36
                    echo "            <label class=\"topLabel\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "label"), "html", null, true);
                    if ($this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "description")) {
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "description"), "html", null, true);
                    }
                    echo "</label>
            <div class=\"formBottom\">
                <select name=\"config[";
                    // line 38
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "]\">
                ";
                    // line 39
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "multiOptions"));
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 40
                        echo "                    <option value=\"";
                        echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
                        echo "\" ";
                        if (((isset($context["k"]) ? $context["k"] : null) == $this->getAttribute((isset($context["values"]) ? $context["values"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"))) {
                            echo "selected=\"selected\"";
                        }
                        echo "/><label>";
                        echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : null), "html", null, true);
                        echo "</label>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 42
                    echo "                </select>
            </div>
            <div class=\"fix\"></div>
            ";
                } elseif (($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 0, array(), "array") == "radio")) {
                    // line 46
                    echo "            <label>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "label"), "html", null, true);
                    if ($this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "description")) {
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "description"), "html", null, true);
                    }
                    echo "</label>
            <div class=\"formRight\">
                ";
                    // line 48
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "multiOptions"));
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 49
                        echo "                    <input id=\"el-";
                        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                        echo "\" type=\"radio\" name=\"config[";
                        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                        echo "]\" value=\"";
                        echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
                        echo "\" ";
                        if (((isset($context["k"]) ? $context["k"] : null) == $this->getAttribute((isset($context["values"]) ? $context["values"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"))) {
                            echo "checked=\"checked\"";
                        }
                        echo "/><label>";
                        echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : null), "html", null, true);
                        echo "</label>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 51
                    echo "            </div>
            <div class=\"fix\"></div>
            ";
                } elseif (($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 0, array(), "array") == "textarea")) {
                    // line 54
                    echo "            <label class=\"topLabel\" for=\"el-";
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "label"), "html", null, true);
                    if ($this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "description")) {
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "description"), "html", null, true);
                    }
                    echo "</label>
            <div class=\"formBottom\">
                <textarea id=\"el-";
                    // line 56
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "\" name=\"config[";
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "]\" cols=\"5\" rows=\"20\" required=\"required\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "html", null, true);
                    echo "</textarea>
            </div>
            <div class=\"fix\"></div>
            ";
                } else {
                    // line 60
                    echo "            <label class=\"topLabel\" for=\"el-";
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "label"), "html", null, true);
                    if ($this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "description")) {
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "description"), "html", null, true);
                    }
                    echo "</label>
            <div class=\"formBottom\">
                <input id=\"el-";
                    // line 62
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "\" type=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : null), 0, array(), "array"), "html", null, true);
                    echo "\" name=\"config[";
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "html", null, true);
                    echo "\" required=\"required\"/>
            </div>
            <div class=\"fix\"></div>
            ";
                }
                // line 66
                echo "    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 70
    public function getcurrency_format($price = null, $currency = null)
    {
        $context = $this->env->mergeGlobals(array(
            "price" => $price,
            "currency" => $currency,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 71
            echo "    ";
            $context["c"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "currency_get", array(0 => array("code" => (isset($context["currency"]) ? $context["currency"] : null))), "method");
            // line 72
            echo "    ";
            $context["p"] = twig_number_filter((isset($context["price"]) ? $context["price"] : null));
            // line 73
            echo "    ";
            if (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "price_format") == 1)) {
                // line 74
                echo "        ";
                $context["p"] = twig_number_filter((isset($context["p"]) ? $context["p"] : null), "2", ".", "");
                // line 75
                echo "    ";
            } elseif (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "price_format") == 2)) {
                // line 76
                echo "        ";
                $context["p"] = twig_number_filter((isset($context["p"]) ? $context["p"] : null), "2", ".", ",");
                // line 77
                echo "    ";
            } elseif (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "price_format") == 3)) {
                // line 78
                echo "        ";
                $context["p"] = twig_number_filter((isset($context["p"]) ? $context["p"] : null), "2", ",", ".");
                // line 79
                echo "    ";
            } elseif (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "price_format") == 4)) {
                // line 80
                echo "        ";
                $context["p"] = twig_number_filter((isset($context["p"]) ? $context["p"] : null), "0", "", ",");
                // line 81
                echo "    ";
            } elseif (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "price_format") == 5)) {
                // line 82
                echo "        ";
                $context["p"] = twig_number_filter((isset($context["p"]) ? $context["p"] : null), 0, "", "");
                // line 83
                echo "    ";
            }
            // line 84
            echo "    ";
            echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "format"), array("{{price}}" => (isset($context["p"]) ? $context["p"] : null))), "html", null, true);
            echo "
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 87
    public function getcurrency($price = null, $currency = null)
    {
        $context = $this->env->mergeGlobals(array(
            "price" => $price,
            "currency" => $currency,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 88
            echo "    ";
            if (((isset($context["currency"]) ? $context["currency"] : null) == null)) {
                // line 89
                echo "        ";
                $context["c"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "cart_get_currency");
                // line 90
                echo "    ";
            } else {
                // line 91
                echo "        ";
                $context["c"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "currency_get", array(0 => array("code" => (isset($context["currency"]) ? $context["currency"] : null))), "method");
                // line 92
                echo "    ";
            }
            // line 93
            echo "
    ";
            // line 94
            $context["p"] = ((isset($context["price"]) ? $context["price"] : null) * $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "conversion_rate"));
            // line 95
            echo "    
    ";
            // line 96
            if (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "price_format") == 1)) {
                // line 97
                echo "        ";
                $context["p"] = twig_number_filter((isset($context["p"]) ? $context["p"] : null), "2", ".", "");
                // line 98
                echo "    ";
            } elseif (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "price_format") == 2)) {
                // line 99
                echo "        ";
                $context["p"] = twig_number_filter((isset($context["p"]) ? $context["p"] : null), "2", ".", ",");
                // line 100
                echo "    ";
            } elseif (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "price_format") == 3)) {
                // line 101
                echo "        ";
                $context["p"] = twig_number_filter((isset($context["p"]) ? $context["p"] : null), "2", ",", ".");
                // line 102
                echo "    ";
            } elseif (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "price_format") == 4)) {
                // line 103
                echo "        ";
                $context["p"] = twig_number_filter((isset($context["p"]) ? $context["p"] : null), "0", "", ",");
                // line 104
                echo "    ";
            } elseif (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "price_format") == 5)) {
                // line 105
                echo "        ";
                $context["p"] = twig_number_filter((isset($context["p"]) ? $context["p"] : null), 0, "", "");
                // line 106
                echo "    ";
            }
            // line 107
            echo "    
    ";
            // line 108
            echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "format"), array("{{price}}" => (isset($context["p"]) ? $context["p"] : null))), "html", null, true);
            echo "
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 111
    public function getstatus_name($status = null)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $status,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_escape_filter($this->env, gettext(twig_title_string_filter($this->env, strtr((isset($context["status"]) ? $context["status"] : null), array("_" => " ")))), "html", null, true);
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 113
    public function getperiod_name($period = null)
    {
        $context = $this->env->mergeGlobals(array(
            "period" => $period,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 114
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_period_title", array(0 => array("code" => (isset($context["period"]) ? $context["period"] : null))), "method"), "html", null, true);
            echo "
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 117
    public function getmarkdown_quote($text = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $text,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 118
            echo "


";
            // line 121
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter((isset($context["text"]) ? $context["text"] : null), "
"));
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 122
                echo "> ";
                echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : null), "html", null, true);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 126
    public function getbb_editor($selector = null)
    {
        $context = $this->env->mergeGlobals(array(
            "selector" => $selector,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 127
            echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"js/markitup/skins/boxbilling/style.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"js/markitup/sets/markdown/style.css\" />

<script src=\"js/markitup/jquery.markitup.js\" type=\"text/javascript\"></script>
<script src=\"js/markitup/sets/markdown/set.js\" type=\"text/javascript\"></script>

<script type=\"text/javascript\" >
   \$(document).ready(function() {
      \$(\"";
            // line 135
            echo twig_escape_filter($this->env, (isset($context["selector"]) ? $context["selector"] : null), "html", null, true);
            echo "\").markItUp(mySettings);
   });
</script>
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    public function getTemplateName()
    {
        return "macro_functions.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  646 => 135,  636 => 127,  625 => 126,  607 => 122,  602 => 121,  597 => 118,  586 => 117,  572 => 114,  561 => 113,  540 => 111,  527 => 108,  524 => 107,  521 => 106,  518 => 105,  515 => 104,  512 => 103,  509 => 102,  506 => 101,  503 => 100,  500 => 99,  497 => 98,  494 => 97,  492 => 96,  489 => 95,  487 => 94,  484 => 93,  481 => 92,  478 => 91,  475 => 90,  472 => 89,  469 => 88,  457 => 87,  443 => 84,  440 => 83,  437 => 82,  434 => 81,  431 => 80,  428 => 79,  425 => 78,  422 => 77,  419 => 76,  416 => 75,  413 => 74,  410 => 73,  407 => 72,  404 => 71,  392 => 70,  376 => 66,  363 => 62,  351 => 60,  340 => 56,  328 => 54,  323 => 51,  304 => 49,  300 => 48,  290 => 46,  284 => 42,  269 => 40,  265 => 39,  261 => 38,  251 => 36,  249 => 35,  246 => 34,  241 => 33,  229 => 32,  209 => 26,  195 => 22,  183 => 19,  166 => 17,  162 => 16,  153 => 15,  127 => 11,  110 => 9,  99 => 7,  90 => 6,  75 => 5,  60 => 2,  49 => 1,  44 => 125,  41 => 116,  38 => 112,  35 => 110,  32 => 86,  29 => 69,  23 => 21,  20 => 13,  17 => 4,  208 => 63,  204 => 23,  200 => 60,  194 => 57,  190 => 56,  187 => 55,  185 => 54,  179 => 51,  175 => 50,  169 => 47,  165 => 46,  160 => 43,  157 => 42,  155 => 41,  147 => 38,  143 => 37,  139 => 14,  135 => 35,  126 => 28,  105 => 8,  97 => 24,  87 => 23,  82 => 22,  65 => 21,  59 => 18,  50 => 12,  46 => 11,  40 => 7,  37 => 6,  31 => 3,  26 => 31,  24 => 4,  22 => 2,);
    }
}
