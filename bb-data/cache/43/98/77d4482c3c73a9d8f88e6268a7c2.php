<?php

/* macro_functions.phtml */
class __TwigTemplate_439877d4482c3c73a9d8f88e6268a7c2 extends Twig_Template
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
        // line 9
        echo "
";
        // line 17
        echo "
";
        // line 22
        echo "
";
        // line 27
        echo "
";
        // line 31
        echo "
";
        // line 36
        echo "
";
        // line 45
        echo "

";
    }

    // line 1
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
            // line 2
            echo "    <select name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                echo "required=\"required\"";
            }
            echo ">
        ";
            // line 3
            if ((isset($context["nullOption"]) ? $context["nullOption"] : null)) {
                echo "<option value=\"\">-- ";
                echo twig_escape_filter($this->env, (isset($context["nullOption"]) ? $context["nullOption"] : null), "html", null, true);
                echo " --</option>";
            }
            // line 4
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["val"] => $context["label"]) {
                // line 5
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
            // line 7
            echo "    </select>
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 10
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
            // line 11
            echo "    <select name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                echo "required=\"required\"";
            }
            echo " style=\"width:80px;\">
        ";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 13
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
            // line 15
            echo "    </select>
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 19
    public function getcurrency_format($price = null, $currency = null)
    {
        $context = $this->env->mergeGlobals(array(
            "price" => $price,
            "currency" => $currency,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 20
            echo "    ";
            echo twig_money($this->env, (isset($context["price"]) ? $context["price"] : null), (isset($context["currency"]) ? $context["currency"] : null));
            echo "
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 24
    public function getcurrency($price = null, $currency = null)
    {
        $context = $this->env->mergeGlobals(array(
            "price" => $price,
            "currency" => $currency,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 25
            echo "    ";
            echo twig_money_convert($this->env, (isset($context["price"]) ? $context["price"] : null), (isset($context["currency"]) ? $context["currency"] : null));
            echo "
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 28
    public function getstatus_name($status = null)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $status,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 29
            echo "    ";
            echo twig_escape_filter($this->env, gettext(twig_title_string_filter($this->env, strtr((isset($context["status"]) ? $context["status"] : null), array("_" => " ")))), "html", null, true);
            echo "
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 33
    public function getperiod_name($period = null)
    {
        $context = $this->env->mergeGlobals(array(
            "period" => $period,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 34
            echo "    ";
            echo twig_period_title($this->env, (isset($context["period"]) ? $context["period"] : null));
            echo "
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 37
    public function getmarkdown_quote($text = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $text,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 38
            echo "


";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter((isset($context["text"]) ? $context["text"] : null), "
"));
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 42
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

    // line 47
    public function getrecaptcha()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 48
            echo "
";
            // line 49
            if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "spamchecker")), "method")) {
                // line 50
                $context["rc"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "spamchecker_recaptcha");
                // line 51
                if ($this->getAttribute((isset($context["rc"]) ? $context["rc"] : null), "enabled")) {
                    // line 52
                    echo "    ";
                    $context["server"] = "https://www.google.com/recaptcha/api";
                    // line 53
                    echo "    <script type=\"text/javascript\">
        var RecaptchaOptions = {
        theme : 'custom',
        custom_theme_widget: 'recaptcha_widget'
    };
    </script>

    <div id=\"recaptcha_widget\" style=\"display:none\">

    <div id=\"recaptcha_image\"></div>
    <div class=\"recaptcha_only_if_incorrect_sol\" style=\"color:red\">";
                    // line 63
                    echo gettext("Incorrect please try again");
                    echo "</div>

    <p>
        <label>";
                    // line 66
                    echo gettext("Enter the words above");
                    echo "</label>
        <br/>
        <input type=\"text\" id=\"recaptcha_response_field\" name=\"recaptcha_response_field\" style=\"width: 245px\"/>
            <a class=\"bb-button\" href=\"javascript:Recaptcha.reload()\" style=\"float: right\"><span class=\"dark-icon i-reload\"></span></a>
    </p>
    </div>

    <script type=\"text/javascript\" src=\"";
                    // line 73
                    echo twig_escape_filter($this->env, (isset($context["server"]) ? $context["server"] : null), "html", null, true);
                    echo "/challenge?k=";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rc"]) ? $context["rc"] : null), "publickey"), "html", null, true);
                    echo "\"></script>
    <noscript>
        <iframe src=\"";
                    // line 75
                    echo twig_escape_filter($this->env, (isset($context["server"]) ? $context["server"] : null), "html", null, true);
                    echo "/noscript?k=";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rc"]) ? $context["rc"] : null), "publickey"), "html", null, true);
                    echo "\" height=\"300\" width=\"500\" frameborder=\"0\"></iframe><br/>
        <textarea name=\"recaptcha_challenge_field\" rows=\"3\" cols=\"40\"></textarea>
        <input type=\"hidden\" name=\"recaptcha_response_field\" value=\"manual_challenge\"/>
    </noscript>
";
                }
            }
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
        return array (  358 => 75,  351 => 73,  341 => 66,  335 => 63,  323 => 53,  320 => 52,  318 => 51,  314 => 49,  311 => 48,  284 => 42,  279 => 41,  263 => 37,  249 => 34,  213 => 28,  199 => 25,  187 => 24,  173 => 20,  161 => 19,  149 => 15,  132 => 13,  128 => 12,  119 => 11,  105 => 10,  76 => 5,  71 => 4,  56 => 2,  41 => 1,  35 => 45,  32 => 36,  29 => 31,  26 => 27,  20 => 17,  17 => 9,  648 => 296,  645 => 295,  639 => 290,  635 => 288,  627 => 283,  622 => 281,  618 => 279,  616 => 278,  613 => 277,  605 => 272,  598 => 270,  594 => 268,  592 => 267,  589 => 266,  581 => 261,  574 => 259,  570 => 257,  568 => 256,  560 => 251,  553 => 249,  544 => 243,  537 => 241,  527 => 234,  520 => 232,  515 => 229,  506 => 222,  497 => 219,  494 => 218,  482 => 215,  474 => 214,  469 => 213,  464 => 212,  457 => 208,  447 => 200,  438 => 197,  435 => 196,  427 => 193,  419 => 192,  414 => 191,  409 => 190,  402 => 186,  386 => 175,  380 => 174,  370 => 167,  366 => 166,  360 => 163,  356 => 162,  350 => 159,  346 => 158,  338 => 153,  322 => 142,  316 => 50,  306 => 134,  302 => 47,  296 => 130,  292 => 129,  286 => 126,  282 => 125,  274 => 38,  258 => 109,  248 => 102,  244 => 101,  238 => 33,  234 => 97,  228 => 94,  224 => 29,  216 => 88,  200 => 77,  190 => 70,  186 => 69,  180 => 66,  176 => 65,  170 => 62,  166 => 61,  157 => 55,  152 => 52,  150 => 51,  147 => 50,  140 => 45,  130 => 41,  126 => 39,  117 => 35,  113 => 34,  109 => 33,  101 => 32,  97 => 31,  93 => 7,  90 => 29,  85 => 28,  77 => 23,  73 => 22,  69 => 21,  65 => 3,  61 => 19,  53 => 14,  49 => 12,  47 => 11,  45 => 10,  42 => 9,  40 => 8,  37 => 7,  34 => 6,  28 => 3,  23 => 22,);
    }
}
