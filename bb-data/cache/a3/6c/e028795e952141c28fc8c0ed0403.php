<?php

/* mod_client_login.phtml */
class __TwigTemplate_a36ce028795e952141c28fc8c0ed0403 extends Twig_Template
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
        // line 3
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Login / Sign up");
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"big-light-icon i-profile\"></span></div>
            <h2>";
        // line 11
        echo gettext("Sign In / Create new account");
        echo "</h2>
            <p>";
        // line 12
        echo gettext("Become a member to participate in forum, contact support, order new services");
        echo "</p>
        </div>
        <div class=\"block\" id=\"login-to-account\" ";
        // line 14
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "register")) {
            echo "style=\"display:none;\"";
        }
        echo ">
            <div class=\"splitter\">
            <div class=\"grid_6 alpha\">
                <div class=\"box\" >
                    <div class=\"block\">
                        <h2>";
        // line 19
        echo gettext("Sign in");
        echo "</h2>
                        <form action=\"\" method=\"post\" id=\"client-login\">
                            <fieldset>
                                <legend>";
        // line 22
        echo gettext("Login to client area");
        echo "</legend>
                                <p>
                                    <label>";
        // line 24
        echo gettext("Email Address");
        echo ": </label>
                                    <input type=\"email\" name=\"email\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "email"), "html", null, true);
        echo "\" required=\"required\">
                                </p>

                                <p>
                                    <label>";
        // line 29
        echo gettext("Password");
        echo ": </label>
                                    <input type=\"password\" name=\"password\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "password"), "html", null, true);
        echo "\" required=\"required\">
                                </p>
                                <input type=\"hidden\" name=\"remember\" value=\"1\" />
                                <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
        // line 33
        echo gettext("Login");
        echo "\">
                                <a class=\"bb-button\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("reset-password"), "html", null, true);
        echo "\">";
        echo gettext("Reset password");
        echo "</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>

            <div class=\"grid_6 omega\">
                <div class=\"box\" ";
        // line 42
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "register")) {
            echo "style=\"display:none;\"";
        }
        echo ">
                    <h2>";
        // line 43
        echo gettext("Do not have an account yet?");
        echo "</h2>
                    <div class=\"block\">
                        <a style=\"margin: 30px 0 0 40px;\" class=\"bb-button bb-button-red bb-button-big\" href=\"#\" onclick=\"\$('#login-to-account').slideUp(); \$('#register-new-account').slideDown(); return false;\" >";
        // line 45
        echo gettext("Register");
        echo "</a>
                    </div>
                    ";
        // line 47
        if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "oauth")), "method")) {
            // line 48
            echo "                        ";
            $this->env->loadTemplate("mod_oauth_buttons.phtml")->display(array_merge($context, array("redirect_to" => "me")));
            // line 49
            echo "                    ";
        }
        // line 50
        echo "                </div>
            </div>
            <div class=\"clear\"></div>
        </div>
        </div>

        <div class=\"block\" id=\"register-new-account\" ";
        // line 56
        if ((!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "register"))) {
            echo "style=\"display:none;\"";
        }
        echo ">
            <form action=\"\" method=\"post\" id=\"create-profile\">
            <div class=\"grid_6 alpha\">
                <div class=\"box\">
                    ";
        // line 60
        $context["r"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "client_required");
        // line 61
        echo "                    <h2>";
        echo gettext("Enter your details below");
        echo "</h2>
                    <div class=\"block\">
                        <fieldset>
                            <legend>";
        // line 64
        echo gettext("Create new profile");
        echo "</legend>
                            <p>
                                <label>";
        // line 66
        echo gettext("Email Address");
        echo ": </label>
                                <input type=\"email\" name=\"email\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "email"), "html", null, true);
        echo "\" required=\"required\" id=\"reg-email\">
                            </p>
                            <p>
                                <label>";
        // line 70
        echo gettext("First Name");
        echo ": </label>
                                <input type=\"text\" name=\"first_name\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "first_name"), "html", null, true);
        echo "\" required=\"required\">
                            </p>
                            ";
        // line 73
        if (twig_in_filter("last_name", (isset($context["r"]) ? $context["r"] : null))) {
            // line 74
            echo "                            <p>
                                <label>";
            // line 75
            echo gettext("Last Name");
            echo ": </label>
                                <input type=\"text\" name=\"last_name\" value=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "last_name"), "html", null, true);
            echo "\" required=\"required\">
                            </p>
                            ";
        }
        // line 79
        echo "                            
                            ";
        // line 80
        if (twig_in_filter("company", (isset($context["r"]) ? $context["r"] : null))) {
            // line 81
            echo "                            <p>
                                <label>";
            // line 82
            echo gettext("Company");
            echo ": </label>
                                <input type=\"text\" name=\"company\" value=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "company"), "html", null, true);
            echo "\" required=\"required\">
                            </p>
                            ";
        }
        // line 86
        echo "                            
                            ";
        // line 87
        if (twig_in_filter("birthday", (isset($context["r"]) ? $context["r"] : null))) {
            // line 88
            echo "                            <p>
                                <label>";
            // line 89
            echo gettext("Birthday");
            echo ": </label>
                                <input type=\"text\" name=\"birthday\" value=\"\">
                            </p>
                            ";
        }
        // line 93
        echo "                            
                            ";
        // line 94
        if (twig_in_filter("gender", (isset($context["r"]) ? $context["r"] : null))) {
            // line 95
            echo "                            <p>
                                <label>";
            // line 96
            echo gettext("You are");
            echo ": </label>
                                <select name=\"gender\">
                                    <option value=\"male\">Male</option>
                                    <option value=\"female\">Female</option>
                                </select>
                            </p>
                            ";
        }
        // line 103
        echo "                            
                            <p>
                                <label>";
        // line 105
        echo gettext("Password");
        echo ": </label>
                                <input type=\"password\" name=\"password\" value=\"\" required=\"required\" id=\"reg-password\">
                            </p>
                            
                            <p>
                                <label>";
        // line 110
        echo gettext("Password confirm");
        echo ": </label>
                                <input type=\"password\" name=\"password_confirm\" value=\"\" required=\"required\">
                            </p>
                            
                            ";
        // line 114
        echo $context["mf"]->getrecaptcha();
        echo "

                        </fieldset>
                    </div>
                </div>
            </div>

            <div class=\"grid_6 omega\">
                <div class=\"box\" id=\"register-new-account\">
                    <h2>&nbsp;</h2>
                    <div class=\"block\">
                        <fieldset>
                            <legend>";
        // line 126
        echo gettext("Create new profile");
        echo "</legend>

                                ";
        // line 128
        if (twig_in_filter("address_1", (isset($context["r"]) ? $context["r"] : null))) {
            // line 129
            echo "                                <p>
                                    <label>";
            // line 130
            echo gettext("Address");
            echo ": </label>
                                    <input type=\"text\" name=\"address_1\" value=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "address_1"), "html", null, true);
            echo "\">
                                </p>
                                ";
        }
        // line 134
        echo "                                
                                ";
        // line 135
        if (twig_in_filter("address_2", (isset($context["r"]) ? $context["r"] : null))) {
            // line 136
            echo "                                <p>
                                    <label>";
            // line 137
            echo gettext("Address 2");
            echo ": </label>
                                    <input type=\"text\" name=\"address_2\" value=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "address_2"), "html", null, true);
            echo "\">
                                </p>
                                ";
        }
        // line 141
        echo "                                
                                ";
        // line 142
        if (twig_in_filter("city", (isset($context["r"]) ? $context["r"] : null))) {
            // line 143
            echo "                                <p>
                                    <label>";
            // line 144
            echo gettext("City");
            echo ": </label>
                                    <input type=\"text\" name=\"city\" value=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "city"), "html", null, true);
            echo "\">
                                </p>
                                ";
        }
        // line 148
        echo "                                
                                ";
        // line 149
        if (twig_in_filter("country", (isset($context["r"]) ? $context["r"] : null))) {
            // line 150
            echo "                                <p>
                                    <label>";
            // line 151
            echo gettext("Country");
            echo ": </label>
                                    ";
            // line 152
            echo $context["mf"]->getselectbox("country", $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_countries"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "country"), 0, "Select country");
            echo "
                                </p>
                                ";
        }
        // line 155
        echo "                                
                                ";
        // line 156
        if (twig_in_filter("state", (isset($context["r"]) ? $context["r"] : null))) {
            // line 157
            echo "                                <p>
                                    <label>";
            // line 158
            echo gettext("State");
            echo ": </label>
                                     ";
            // line 160
            echo "                                     <input type=\"text\" name=\"state\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "state"), "html", null, true);
            echo "\" />
                                </p>
                                ";
        }
        // line 163
        echo "                                
                                ";
        // line 164
        if (twig_in_filter("postcode", (isset($context["r"]) ? $context["r"] : null))) {
            // line 165
            echo "                                <p>
                                    <label>";
            // line 166
            echo gettext("Zip/Postal Code");
            echo ": </label>
                                    <input type=\"text\" name=\"postcode\" value=\"";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "postcode"), "html", null, true);
            echo "\">
                                </p>
                                ";
        }
        // line 170
        echo "                                
                                ";
        // line 171
        if (twig_in_filter("phone", (isset($context["r"]) ? $context["r"] : null))) {
            // line 172
            echo "                                <p>
                                    <label>";
            // line 173
            echo gettext("Phone Number");
            echo ": </label>
                                    <br/>
                                    <input type=\"text\" name=\"phone_cc\" value=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "phone_cc"), "html", null, true);
            echo "\" style=\"width: 40px\"> <input type=\"text\" name=\"phone\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "phone"), "html", null, true);
            echo "\" style=\"width: 233px\">
                                </p>
                                ";
        }
        // line 178
        echo "                            <input class=\"bb-button bb-button-red bb-button-big\" type=\"submit\" value=\"";
        echo gettext("Register");
        echo "\" style=\"margin: 30px 0 0 70px;\">
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class=\"clear\"></div>
            </form>
        </div>
    </div>

";
    }

    // line 190
    public function block_js($context, array $blocks = array())
    {
        // line 191
        echo "<script type=\"text/javascript\">
\$(function() {

    \$('#password-reset').bind('submit',function(event){
        bb.post(
            'guest/client/reset_password',
            \$(this).serialize(),
            function(result) {
                bb.msg('Password reset confirmation email was sent');
            }
        );
        return false;
    });

    \$('#client-login').bind('submit',function(event){
        bb.post(
            'guest/client/login',
            \$(this).serialize(),
            function(result) {
                bb.redirect();
            }
        );
        return false;
    });

    \$('#create-profile').bind('submit',function(event){
        bb.post(
            'guest/client/create',
            \$(this).serialize(),
            function(result) {
                //login after registration
                var login_details = {
                    email: \$('#reg-email').val(),
                    password: \$('#reg-password').val(),
                };
                bb.post(
                    'guest/client/login',
                    login_details,
                    function(result) {
                        bb.redirect();
                    }
                );
            }
        );
        return false;
    });

});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_client_login.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 191,  433 => 190,  417 => 178,  409 => 175,  404 => 173,  401 => 172,  399 => 171,  396 => 170,  390 => 167,  386 => 166,  383 => 165,  381 => 164,  378 => 163,  371 => 160,  367 => 158,  364 => 157,  362 => 156,  359 => 155,  353 => 152,  349 => 151,  346 => 150,  344 => 149,  341 => 148,  335 => 145,  331 => 144,  328 => 143,  326 => 142,  323 => 141,  317 => 138,  313 => 137,  310 => 136,  308 => 135,  305 => 134,  299 => 131,  295 => 130,  292 => 129,  290 => 128,  285 => 126,  270 => 114,  263 => 110,  255 => 105,  251 => 103,  241 => 96,  238 => 95,  236 => 94,  233 => 93,  226 => 89,  223 => 88,  221 => 87,  218 => 86,  212 => 83,  208 => 82,  205 => 81,  203 => 80,  200 => 79,  194 => 76,  190 => 75,  187 => 74,  185 => 73,  180 => 71,  176 => 70,  170 => 67,  166 => 66,  161 => 64,  154 => 61,  152 => 60,  143 => 56,  135 => 50,  132 => 49,  129 => 48,  127 => 47,  122 => 45,  117 => 43,  111 => 42,  98 => 34,  94 => 33,  88 => 30,  84 => 29,  77 => 25,  73 => 24,  68 => 22,  62 => 19,  52 => 14,  47 => 12,  43 => 11,  37 => 7,  34 => 6,  28 => 5,  23 => 3,);
    }
}
