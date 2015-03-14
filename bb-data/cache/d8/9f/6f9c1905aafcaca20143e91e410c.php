<?php

/* layout_default.phtml */
class __TwigTemplate_d89f6f9c1905aafcaca20143e91e410c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'meta_description' => array($this, 'block_meta_description'),
            'meta_keywords' => array($this, 'block_meta_keywords'),
            'opengraph' => array($this, 'block_opengraph'),
            'head' => array($this, 'block_head'),
            'header_buttons' => array($this, 'block_header_buttons'),
            'content_before' => array($this, 'block_content_before'),
            'content' => array($this, 'block_content'),
            'content_after' => array($this, 'block_content_after'),
            'sidebar' => array($this, 'block_sidebar'),
            'sidebar2' => array($this, 'block_sidebar2'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["company"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_company");
        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 5
        $this->displayBlock('meta_title', $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_title"), "html", null, true);
        echo "</title>

    <meta property=\"bb:url\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, constant("BB_URL"), "html", null, true);
        echo "\"/>
    <meta property=\"bb:client_area\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("/"), "html", null, true);
        echo "\"/>
    
    <meta name=\"description\" content=\"";
        // line 10
        $this->displayBlock('meta_description', $context, $blocks);
        echo "\" />
    <meta name=\"keywords\" content=\"";
        // line 11
        $this->displayBlock('meta_keywords', $context, $blocks);
        echo "\" />
    <meta name=\"robots\" content=\"index, follow\" />
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />

    <link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 15
        echo twig_asset_url($this->env, "favicon.png");
        echo "\" />
    <link href=\"https://fonts.googleapis.com/css?family=Cuprum\" rel=\"stylesheet\" type=\"text/css\" />
    ";
        // line 17
        echo twig_stylesheet_tag(twig_asset_url($this->env, "print.css"), "print");
        echo "
    ";
        // line 18
        echo twig_stylesheet_tag(twig_asset_url($this->env, "style.css"));
        echo "
    <!--[if IE 6]>";
        // line 19
        echo twig_stylesheet_tag(twig_asset_url($this->env, "ie6.css"));
        echo "<![endif]-->
    <!--[if IE 7]>";
        // line 20
        echo twig_stylesheet_tag(twig_asset_url($this->env, "ie.css"));
        echo "<![endif]-->

    ";
        // line 22
        echo twig_script_tag(twig_asset_url($this->env, "jquery.min.js"));
        echo "
    ";
        // line 23
        echo twig_script_tag(twig_asset_url($this->env, "jquery.tipsy.js"));
        echo "
    ";
        // line 24
        echo twig_script_tag(twig_asset_url($this->env, "bb-jquery.js"));
        echo "

    ";
        // line 26
        $this->displayBlock('opengraph', $context, $blocks);
        // line 27
        echo "    ";
        $this->displayBlock('head', $context, $blocks);
        // line 28
        echo "</head>

<body>

<div class=\"header\">
    <div class=\"container_16\">
        <div class=\"grid_4\">
            <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_bb_client_link_filter(""), "html", null, true);
        echo "\">
                ";
        // line 36
        if ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "logo_url")) {
            // line 37
            echo "                    ";
            echo twig_img_tag($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "logo_url"));
            echo "
                ";
        } else {
            // line 39
            echo "                    ";
            echo twig_img_tag(twig_asset_url($this->env, "images/logo.png"));
            echo "
                ";
        }
        // line 41
        echo "            </a>
        </div>

        <div class=\"grid_12\">
            ";
        // line 45
        if ((isset($context["client"]) ? $context["client"] : null)) {
            // line 46
            echo "            <ul class=\"middleNav\">
                <li>
                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_bb_client_link_filter(""), "html", null, true);
            echo "\" class=\"show-tip\" title=\"";
            echo gettext("Dashboard");
            echo "\"><span class=\"big-dark-icon i-home\"></span></a>
                </li>
                <li>
                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("cart"), "html", null, true);
            echo "\" class=\"show-tip\" title=\"";
            echo gettext("Shopping cart");
            echo "\"><span class=\"big-dark-icon i-cart\"></span></a>
                </li>
                <li>
                    <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("me"), "html", null, true);
            echo "\" class=\"show-tip\" title=\"";
            echo gettext("Profile");
            echo "\"><span class=\"big-dark-icon i-profile\"></span></a>
                </li>
                <li>
                    <a href=\"client/client/logout\" class=\"show-tip api\" title=\"";
            // line 57
            echo gettext("Sign out");
            echo "\"><span class=\"big-dark-icon i-logout\"></span></a>
                </li>
            </ul>

            ";
        } else {
            // line 62
            echo "            ";
            $this->displayBlock('header_buttons', $context, $blocks);
            // line 68
            echo "            ";
        }
        // line 69
        echo "        </div>
        <div class=\"clear\"></div>
    </div>
</div>

<div id=\"main\">
    <div class=\"container_16\">
        ";
        // line 76
        $this->displayBlock('content_before', $context, $blocks);
        // line 77
        echo "
        <div class=\"grid_12\">
            ";
        // line 79
        $this->env->loadTemplate("partial_message.phtml")->display($context);
        // line 80
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 81
        echo "            ";
        $this->displayBlock('content_after', $context, $blocks);
        // line 82
        echo "        </div>

        <div class=\"grid_4\">
            ";
        // line 85
        $this->displayBlock('sidebar', $context, $blocks);
        // line 86
        echo "
            ";
        // line 87
        if ((!(isset($context["client"]) ? $context["client"] : null))) {
            // line 88
            echo "            <div class=\"widget\" id=\"login-form\" style=\"display: none;\" >
                <div class=\"head\">
                    <h2 class=\"dark-icon i-profile\">";
            // line 90
            echo gettext("Login to client area");
            echo "</h2>
                </div>
                <div class=\"block\">
                <form action=\"\" method=\"post\" class=\"api_form\" data-api-url=\"guest/client/login\" data-api-redirect=\"";
            // line 93
            echo twig_escape_filter($this->env, twig_bb_client_link_filter(""), "html", null, true);
            echo "\">
                    <fieldset>
                        <legend>";
            // line 95
            echo gettext("Login to client area");
            echo "</legend>
                        <p>
                            <input type=\"email\" name=\"email\" value=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "email"), "html", null, true);
            echo "\" required=\"required\" placeholder=\"";
            echo gettext("Email address");
            echo "\">
                        </p>
                        <p>
                            <input type=\"password\" name=\"password\" value=\"\" required=\"required\" placeholder=\"";
            // line 100
            echo gettext("Password");
            echo "\">
                        </p>
                        <a class=\"bb-button\" href=\"";
            // line 102
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("reset-password"), "html", null, true);
            echo "\">";
            echo gettext("Reset password");
            echo "</a>
                        <input type=\"hidden\" name=\"remember\" value=\"1\" />
                        <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
            // line 104
            echo gettext("Sign in");
            echo "\" style=\"float: right\">
                    </fieldset>
                </form>
                </div>
            </div>
            ";
        }
        // line 110
        echo "            
            <div class=\"gradient\" style=\"margin-bottom: 10px;\">
                <nav>";
        // line 112
        $this->env->loadTemplate("partial_menu.phtml")->display($context);
        echo "</nav>
            </div>

            ";
        // line 115
        $context["languages"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_languages");
        // line 116
        echo "            ";
        if ((twig_length_filter($this->env, (isset($context["languages"]) ? $context["languages"] : null)) > 1)) {
            // line 117
            echo "            <div class=\"widget\">
                <div class=\"head\">
                    <h2 class=\"dark-icon i-drag\">";
            // line 119
            echo gettext("Select language");
            echo "</h2>
                </div>
                <div class=\"block\">
                    <select name=\"lang\" class=\"language_selector\">
                    ";
            // line 123
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 124
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : null), "html", null, true);
                echo "\" class=\"lang_";
                echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, gettext((isset($context["lang"]) ? $context["lang"] : null)), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 126
            echo "                    </select>
                </div>
            </div>
            ";
        }
        // line 130
        echo "            
            ";
        // line 131
        $this->displayBlock('sidebar2', $context, $blocks);
        // line 132
        echo "
        </div>
        <div class=\"clear\"></div>
    </div>
</div>

<div class=\"footer\">
    <div class=\"container_16\">
        ";
        // line 140
        if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "kb")), "method")) {
            // line 141
            echo "        <div class=\"grid_4\">
            <div class=\"box\">
                <h2>";
            // line 143
            echo gettext("Popular articles");
            echo "</h2>
                <div class=\"block\">
                    <ul>
                        ";
            // line 146
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "kb_article_get_list", array(0 => array("per_page" => 4)), "method"), "list"));
            foreach ($context['_seq'] as $context["i"] => $context["article"]) {
                // line 147
                echo "                            <li><a href=\"";
                echo twig_escape_filter($this->env, twig_bb_client_link_filter("/kb"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "category"), "slug"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "slug"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), 30), "html", null, true);
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 149
            echo "                    </ul>
                </div>
            </div>
        </div>
        ";
        }
        // line 154
        echo "
        ";
        // line 155
        if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "news")), "method")) {
            // line 156
            echo "        <div class=\"grid_4\">
            <div class=\"box\">
                <h2>";
            // line 158
            echo gettext("Recent posts");
            echo "</h2>
                <div class=\"block\">
                    <ul>
                        ";
            // line 161
            $context["posts"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "news_get_list", array(0 => array("per_page" => 4)), "method");
            // line 162
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "list"));
            foreach ($context['_seq'] as $context["i"] => $context["post"]) {
                // line 163
                echo "                        <li>
                            <a href=\"";
                // line 164
                echo twig_escape_filter($this->env, twig_bb_client_link_filter("/blog"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), 30), "html", null, true);
                echo "</a>
                        </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 167
            echo "                    </ul>
                </div>
            </div>
        </div>
        ";
        }
        // line 172
        echo "        
        <div class=\"grid_4\">
            <div class=\"box\">
                <h2>";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "name"), "html", null, true);
        echo "</h2>
                <div class=\"block\">
                    <ul>
                        <li>
                            <a href=\"";
        // line 179
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("/about-us"), "html", null, true);
        echo "\">";
        echo gettext("About us");
        echo "</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 182
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("/tos"), "html", null, true);
        echo "\">";
        echo gettext("Terms and conditions");
        echo "</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 185
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("/privacy-policy"), "html", null, true);
        echo "\">";
        echo gettext("Privacy policy");
        echo "</a>
                        </li>
                        ";
        // line 187
        if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "branding")), "method")) {
            // line 188
            echo "                        <li>
                            <a href=\"http://www.boxbilling.com\" title=\"Billing Software\" target=\"_blank\">Billing software</a>
                        </li>
                        ";
        }
        // line 192
        echo "                    </ul>
                </div>
            </div>
        </div>

        <div class=\"grid_4\">
            ";
        // line 198
        if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "branding")), "method")) {
            // line 199
            echo "            <p class=\"logo\">
                <a class=\"boxbilling\" href=\"http://www.boxbilling.com\" title=\"Invoicing software\" target=\"_blank\">";
            // line 200
            echo twig_img_tag(twig_asset_url($this->env, "images/boxbilling-logo.png"), "Business software");
            echo "</a>
            </p>
            ";
        }
        // line 203
        echo "        </div>

        <div class=\"clear\"></div>
    </div>
</div>

<div class=\"footer lower\">
    <div class=\"container_16\">
        <div class=\"grid_16\">
            <div class=\"box\">
                <div class=\"block\">
                    <p>
                    ";
        // line 216
        echo "                    ";
        // line 217
        echo "                    © ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "signature"), "html", null, true);
        echo "
                    </p>
                </div>
            </div>
        </div>
        <div class=\"clear\"></div>
    </div>
</div>
<div class=\"loading dim\" style=\"display:none\"><div class=\"popup_block\"><h3>";
        // line 225
        echo gettext("Loading ..");
        echo "</h3></div></div>
    ";
        // line 226
        $this->displayBlock('js', $context, $blocks);
        // line 227
        echo "    <noscript>NOTE: Many features on BoxBilling require Javascript and cookies. You can enable both via your browser's preference settings.</noscript>
    ";
        // line 228
        $this->env->loadTemplate("mod_cron_check.phtml")->display($context);
        // line 229
        echo "</body>
</html>";
    }

    // line 5
    public function block_meta_title($context, array $blocks = array())
    {
    }

    // line 10
    public function block_meta_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_description"), "html", null, true);
    }

    // line 11
    public function block_meta_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_keywords"), "html", null, true);
    }

    // line 26
    public function block_opengraph($context, array $blocks = array())
    {
    }

    // line 27
    public function block_head($context, array $blocks = array())
    {
    }

    // line 62
    public function block_header_buttons($context, array $blocks = array())
    {
        // line 63
        echo "            <div class=\"top-buttons\">
                <a id=\"login-form-link\" class=\"bb-button bb-button-submit\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("login"), "html", null, true);
        echo "\">";
        echo gettext("Sign in");
        echo "</a>
                <a class=\"bb-button bb-button-red\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("login"), "html", null, true);
        echo "?register=1\">";
        echo gettext("Register");
        echo "</a>
            </div>
            ";
    }

    // line 76
    public function block_content_before($context, array $blocks = array())
    {
    }

    // line 80
    public function block_content($context, array $blocks = array())
    {
    }

    // line 81
    public function block_content_after($context, array $blocks = array())
    {
    }

    // line 85
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 131
    public function block_sidebar2($context, array $blocks = array())
    {
    }

    // line 226
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout_default.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  587 => 131,  582 => 85,  577 => 81,  572 => 80,  567 => 76,  558 => 65,  552 => 64,  549 => 63,  546 => 62,  541 => 27,  536 => 26,  530 => 11,  524 => 10,  519 => 5,  514 => 229,  512 => 228,  509 => 227,  507 => 226,  503 => 225,  489 => 217,  487 => 216,  473 => 203,  467 => 200,  462 => 198,  454 => 192,  448 => 188,  446 => 187,  439 => 185,  431 => 182,  423 => 179,  416 => 175,  411 => 172,  404 => 167,  391 => 164,  388 => 163,  383 => 162,  381 => 161,  375 => 158,  371 => 156,  369 => 155,  359 => 149,  344 => 147,  340 => 146,  334 => 143,  330 => 141,  328 => 140,  313 => 130,  307 => 126,  294 => 124,  290 => 123,  283 => 119,  276 => 116,  268 => 112,  264 => 110,  255 => 104,  243 => 100,  235 => 97,  230 => 95,  225 => 93,  219 => 90,  215 => 88,  210 => 86,  208 => 85,  203 => 82,  197 => 80,  195 => 79,  191 => 77,  189 => 76,  177 => 68,  174 => 62,  158 => 54,  142 => 48,  138 => 46,  136 => 45,  124 => 39,  118 => 37,  116 => 36,  112 => 35,  103 => 28,  100 => 27,  98 => 26,  89 => 23,  80 => 20,  72 => 18,  68 => 17,  63 => 15,  52 => 10,  43 => 7,  36 => 5,  31 => 2,  358 => 75,  351 => 73,  341 => 66,  335 => 63,  323 => 53,  320 => 52,  318 => 132,  314 => 49,  311 => 48,  284 => 42,  279 => 117,  263 => 37,  249 => 34,  213 => 87,  199 => 25,  187 => 24,  173 => 20,  161 => 19,  149 => 15,  132 => 13,  128 => 12,  119 => 11,  105 => 10,  76 => 19,  71 => 4,  56 => 11,  41 => 1,  35 => 45,  32 => 36,  29 => 1,  26 => 27,  20 => 17,  17 => 9,  648 => 296,  645 => 295,  639 => 290,  635 => 288,  627 => 283,  622 => 281,  618 => 279,  616 => 278,  613 => 277,  605 => 272,  598 => 270,  594 => 268,  592 => 226,  589 => 266,  581 => 261,  574 => 259,  570 => 257,  568 => 256,  560 => 251,  553 => 249,  544 => 243,  537 => 241,  527 => 234,  520 => 232,  515 => 229,  506 => 222,  497 => 219,  494 => 218,  482 => 215,  474 => 214,  469 => 213,  464 => 199,  457 => 208,  447 => 200,  438 => 197,  435 => 196,  427 => 193,  419 => 192,  414 => 191,  409 => 190,  402 => 186,  386 => 175,  380 => 174,  370 => 167,  366 => 154,  360 => 163,  356 => 162,  350 => 159,  346 => 158,  338 => 153,  322 => 142,  316 => 131,  306 => 134,  302 => 47,  296 => 130,  292 => 129,  286 => 126,  282 => 125,  274 => 115,  258 => 109,  248 => 102,  244 => 101,  238 => 33,  234 => 97,  228 => 94,  224 => 29,  216 => 88,  200 => 81,  190 => 70,  186 => 69,  180 => 69,  176 => 65,  170 => 62,  166 => 57,  157 => 55,  152 => 52,  150 => 51,  147 => 50,  140 => 45,  130 => 41,  126 => 39,  117 => 35,  113 => 34,  109 => 33,  101 => 32,  97 => 31,  93 => 24,  90 => 29,  85 => 22,  77 => 23,  73 => 22,  69 => 21,  65 => 3,  61 => 19,  53 => 14,  49 => 12,  47 => 8,  45 => 10,  42 => 9,  40 => 8,  37 => 7,  34 => 6,  28 => 3,  23 => 22,);
    }
}
