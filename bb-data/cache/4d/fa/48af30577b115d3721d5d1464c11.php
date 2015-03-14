<?php

/* mod_spamchecker_settings.phtml */
class __TwigTemplate_4dfa48af30577b115d3721d5d1464c11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
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
        $context["active_menu"] = "system";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("SpamChecker settings");
    }

    // line 7
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 8
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/"), "html", null, true);
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("system"), "html", null, true);
        echo "\">";
        echo gettext("Settings");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 11
        echo gettext("SpamChecker settings");
        echo "</li>
</ul>
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
<div class=\"widget\">
    <div class=\"head\">
        <h5 class=\"iCog\">";
        // line 20
        echo gettext("SpamChecker settings");
        echo "</h5>
    </div>

";
        // line 23
        $context["params"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "extension_config_get", array(0 => array("ext" => "mod_spamchecker")), "method");
        // line 24
        echo "
<form method=\"post\" action=\"admin/extension/config_save\" class=\"mainForm api-form\" data-api-msg=\"";
        // line 25
        echo gettext("Configuration updated");
        echo "\">
    <fieldset>
        <div class=\"rowElem noborder\">
            <label>";
        // line 28
        echo gettext("Enable IP blocking");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"block_ips\" value=\"1\" ";
        // line 30
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "block_ips") == "1")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                <input type=\"radio\" name=\"block_ips\" value=\"0\" ";
        // line 31
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "block_ips") == "0")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("No");
        echo "</label>
            </div>
            <div class=\"fix\"></div>
        </div>
        <div class=\"rowElem noborder\">
            <label class=\"topLabel\">";
        // line 36
        echo gettext("Blocked IPs are not allowed to login, register or open public ticket. One IP per line");
        echo "</label>
            <div class=\"formBottom\">
                <textarea name=\"blocked_ips\" cols=\"5\" rows=\"5\" placeholder=\"127.0.0.1\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "blocked_ips"), "html", null, true);
        echo "</textarea>
            </div>
            <div class=\"fix\"></div>
        </div>
    </fieldset>

    <div class=\"help\">
        <h3>";
        // line 45
        echo gettext("Recaptcha settings");
        echo "</h3>
        <p>";
        // line 46
        echo gettext("Enable captcha for client registration and contact us forms");
        echo "</p>
        <p>";
        // line 47
        echo gettext("Sign up for Recaptcha key for your domain at");
        echo " <a href=\"http://www.google.com/recaptcha\" target=\"_blank\">http://www.google.com/recaptcha</a></p>
    </div>

    <fieldset>
        <div class=\"rowElem noborder\">
            <label>";
        // line 52
        echo gettext("Recaptcha Enabled");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"captcha_enabled\" value=\"1\" ";
        // line 54
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "captcha_enabled") == "1")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                <input type=\"radio\" name=\"captcha_enabled\" value=\"0\" ";
        // line 55
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "captcha_enabled") == "0")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("No");
        echo "</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 61
        echo gettext("ReCaptcha Public key");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"captcha_recaptcha_publickey\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "captcha_recaptcha_publickey"), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 69
        echo gettext("ReCaptcha Private key");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"captcha_recaptcha_privatekey\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "captcha_recaptcha_privatekey"), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"fix\"></div>
        </div>
    </fieldset>

    <div class=\"help\">
        <h3>";
        // line 78
        echo gettext("Akismet settings");
        echo "</h3>
        <p>";
        // line 79
        echo gettext("Enable forum messages checking on <a href=\"http://www.akismet.com/\" target=\"_blank\">http://www.akismet.com</a> database");
        echo "</p>
    </div>
    <fieldset>
        <div class=\"rowElem noborder\">
            <label>";
        // line 83
        echo gettext("Enable check");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"akismet_enabled\" value=\"1\" ";
        // line 85
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "akismet_enabled") == "1")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                <input type=\"radio\" name=\"akismet_enabled\" value=\"0\" ";
        // line 86
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "akismet_enabled") == "0")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("No");
        echo "</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 92
        echo gettext("Akismet API key");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"akismet_api_key\" value=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "akismet_api_key"), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"fix\"></div>
        </div>
        
    </fieldset>
    
    <div class=\"help\">
        <h3>";
        // line 102
        echo gettext("StopForumSpam.com settings");
        echo "</h3>
        <p>";
        // line 103
        echo gettext("If enabled, client ip will be checked on <a href=\"http://www.stopforumspam.com/\" target=\"_blank\">http://www.stopforumspam.com</a> database before registration");
        echo "</p>
    </div>
    <fieldset>
        <div class=\"rowElem noborder\">
            <label>";
        // line 107
        echo gettext("Enable check");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"sfs\" value=\"1\" ";
        // line 109
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "sfs") == "1")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                <input type=\"radio\" name=\"sfs\" value=\"0\" ";
        // line 110
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "sfs") == "0")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("No");
        echo "</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        <input type=\"submit\" value=\"";
        // line 115
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
        <input type=\"hidden\" name=\"ext\" value=\"mod_spamchecker\" />
    </fieldset>
</form>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_spamchecker_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 115,  274 => 110,  266 => 109,  261 => 107,  254 => 103,  250 => 102,  239 => 94,  234 => 92,  221 => 86,  213 => 85,  208 => 83,  201 => 79,  197 => 78,  187 => 71,  182 => 69,  173 => 63,  168 => 61,  155 => 55,  147 => 54,  142 => 52,  134 => 47,  130 => 46,  126 => 45,  116 => 38,  111 => 36,  99 => 31,  91 => 30,  86 => 28,  80 => 25,  77 => 24,  75 => 23,  69 => 20,  64 => 17,  61 => 16,  54 => 11,  48 => 10,  42 => 9,  39 => 8,  36 => 7,  30 => 3,  25 => 4,  23 => 2,);
    }
}
