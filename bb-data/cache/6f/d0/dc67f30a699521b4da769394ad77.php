<?php

/* mod_email_settings.phtml */
class __TwigTemplate_6fd0dc67f30a699521b4da769394ad77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
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
        // line 14
        $context["active_menu"] = "system";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Email");
    }

    // line 5
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 6
        echo "    <ul>
        <li class=\"firstB\"><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/"), "html", null, true);
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
        <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("system"), "html", null, true);
        echo "\">";
        echo gettext("Settings");
        echo "</a></li>
        <li class=\"lastB\">";
        // line 9
        echo gettext("Email");
        echo "</li>
    </ul>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 19
        echo gettext("Email templates");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 20
        echo gettext("New template");
        echo "</a></li>
        <li><a href=\"#tab-email\">";
        // line 21
        echo gettext("Email settings");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">

            ";
        // line 28
        echo $context["mf"]->gettable_search();
        echo "
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td style=\"width: 50%\">";
        // line 32
        echo gettext("Title");
        echo "</td>
                        <td>";
        // line 33
        echo gettext("Extension");
        echo "</td>
                        <td>";
        // line 34
        echo gettext("Code");
        echo "</td>
                        <td>";
        // line 35
        echo gettext("Enabled");
        echo "</td>
                        <td width=\"13%\">&nbsp;</td>
                    </tr>
                </thead>

                <tbody>
                ";
        // line 41
        $context["templates"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "email_template_get_list", array(0 => twig_array_merge(array("per_page" => 100, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 42
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["templates"]) ? $context["templates"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["template"]) {
            // line 43
            echo "                <tr>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : null), "subject"), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : null), "category"), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : null), "action_code"), "html", null, true);
            echo "</td>
                    <td>";
            // line 47
            echo $context["mf"]->getq($this->getAttribute((isset($context["template"]) ? $context["template"] : null), "enabled"));
            echo "</td>
                    <td class=\"actions\">
                        <a class=\"bb-button btn14\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/email/template"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        <a class=\"btn14 bb-rm-tr api-link\" href=\"admin/email/template_delete?id=";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : null), "id"), "html", null, true);
            echo "\" data-api-confirm=\"Are you sure?\" data-api-reload=\"1\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                    
                </tr>

                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "                <tr>
                    <td colspan=\"5\">
                        ";
            // line 58
            echo gettext("The list is empty. Depending on modules enabled email templates will be inserted after first event occurrence.");
            // line 59
            echo "                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 62
        echo "                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"5\">
                            <div class=\"aligncenter\">
                                <a href=\"admin/email/batch_template_generate\" title=\"\" class=\"btn55 mr10 api-link\" data-api-reload=\"1\"><img src=\"images/icons/middlenav/power.png\" alt=\"\"><span>Generate templates</span></a>
                                <a href=\"admin/email/batch_template_enable\" title=\"\" class=\"btn55 mr10 api-link\" data-api-msg=\"All email templates enabled\"><img src=\"images/icons/middlenav/play2.png\" alt=\"\"><span>Enable all</span></a>
                                <a href=\"admin/email/batch_template_disable\" title=\"\" class=\"btn55 mr10 api-link\" data-api-msg=\"All email templates disabled\"><img src=\"images/icons/middlenav/stop.png\" alt=\"\"><span>Disable all</span></a>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
        
        ";
        // line 77
        $context["params"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "extension_config_get", array(0 => array("ext" => "mod_email")), "method");
        // line 78
        echo "        <div id=\"tab-email\" class=\"tab_content nopadding\">
            <div class=\"help\">
                <h3>";
        // line 80
        echo gettext("Configure email options");
        echo "</h3>
                <p>";
        // line 81
        echo gettext("BoxBilling sends emails using <em>sendmail</em> by default or you can configure your own SMTP server");
        echo "</p>
            </div>

            <form method=\"post\" action=\"admin/extension/config_save\" class=\"mainForm api-form\" data-api-msg=\"Email settings updated\">
                <fieldset>
                
                <div class=\"rowElem noborder\">
                    <label class=\"\">";
        // line 88
        echo gettext("Log sent emails to database");
        echo "</label>
                    <div class=\"formRight\" id=\"mailer\">
                        <input type=\"radio\" name=\"log_enabled\" value=\"1\" ";
        // line 90
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "log_enabled")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                        <input type=\"radio\" name=\"log_enabled\" value=\"0\" ";
        // line 91
        if ((!$this->getAttribute((isset($context["params"]) ? $context["params"] : null), "log_enabled"))) {
            echo "checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("No");
        echo "</label>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label class=\"\">";
        // line 97
        echo gettext("Email transport");
        echo "</label>
                    <div class=\"formRight\" id=\"mailer\">
                        <input type=\"radio\" name=\"mailer\" value=\"sendmail\" ";
        // line 99
        if ((($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "mailer") == "sendmail") || (!$this->getAttribute((isset($context["params"]) ? $context["params"] : null), "mailer")))) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("SendMail");
        echo "</label>
                        <input type=\"radio\" name=\"mailer\" value=\"smtp\" ";
        // line 100
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "mailer") == "smtp")) {
            echo "checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("SMTP");
        echo "</label>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                </fieldset>

                <fieldset class=\"smtp\" ";
        // line 106
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "mailer") != "smtp")) {
            echo "style=\"display:none;\"";
        }
        echo " >
                <div class=\"rowElem\">
                    <label class=\"topLabel\">";
        // line 108
        echo gettext("SMTP Hostname");
        echo "</label>
                    <div class=\"formBottom\">
                        <input type=\"text\" name=\"smtp_host\" value=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "smtp_host"), "html", null, true);
        echo "\" placeholder=\"smtp.gmail.com\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                    
                <div class=\"rowElem\">
                    <label class=\"topLabel\">";
        // line 116
        echo gettext("SMTP Port");
        echo "</label>
                    <div class=\"formBottom\">
                        <input type=\"text\" name=\"smtp_port\" value=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "smtp_port"), "html", null, true);
        echo "\" placeholder=\"587\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                    
                <div class=\"rowElem\">
                    <label class=\"topLabel\">";
        // line 124
        echo gettext("SMTP Username");
        echo "</label>
                    <div class=\"formBottom\">
                        <input type=\"text\" name=\"smtp_username\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "smtp_username"), "html", null, true);
        echo "\" placeholder=\"my.email@gmail.com\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                    
                <div class=\"rowElem\">
                    <label class=\"topLabel\">";
        // line 132
        echo gettext("SMTP Password");
        echo "</label>
                    <div class=\"formBottom\">
                        <input type=\"password\" name=\"smtp_password\" value=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "smtp_password"), "html", null, true);
        echo "\" placeholder=\"******\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                    
                <div class=\"rowElem\">
                    <label class=\"\">";
        // line 140
        echo gettext("SMTP Security");
        echo "</label>
                    <div class=\"formRight\">
                        <input type=\"radio\" name=\"smtp_security\" value=\"\"";
        // line 142
        if ((!$this->getAttribute((isset($context["params"]) ? $context["params"] : null), "smtp_security"))) {
            echo "checked=\"checked\"";
        }
        echo "/><label>None</label>
                        <input type=\"radio\" name=\"smtp_security\" value=\"ssl\"";
        // line 143
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "smtp_security") == "ssl")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>SSL</label>
                        <input type=\"radio\" name=\"smtp_security\" value=\"tls\"";
        // line 144
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "smtp_security") == "tls")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>TLS</label>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                </fieldset>
                    
                <fieldset>
                    <input type=\"submit\" value=\"";
        // line 151
        echo gettext("Update email settings");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"button\" value=\"";
        // line 152
        echo gettext("Send test email to staff members");
        echo "\" class=\"blackBtn leftBtn\" id=\"emailTest\"/>
                    <input type=\"hidden\" name=\"ext\" value=\"mod_email\"/>
                </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new\">
            <div class=\"help\">
                <h3>";
        // line 160
        echo gettext("Where I can use new email template?");
        echo "</h3>
                <p>";
        // line 161
        echo gettext("Newly created email templates can be used in custom event hooks.");
        echo "</p>
            </div>

            <form method=\"post\" action=\"admin/email/template_create\" class=\"mainForm save api-form\" data-api-reload=\"1\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 167
        echo gettext("Enabled");
        echo ":</label>
                        <div class=\"formRight noborder\">
                            <input type=\"radio\" name=\"enabled\" value=\"1\"/><label>";
        // line 169
        echo gettext("Yes");
        echo "</label>
                            <input type=\"radio\" name=\"enabled\" value=\"0\" checked=\"checked\"/><label>";
        // line 170
        echo gettext("No");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 175
        echo gettext("Category");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"category\" value=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requests"]) ? $context["requests"] : null), "category"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"General\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 182
        echo gettext("Action code");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"action_code\" value=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requests"]) ? $context["requests"] : null), "action_code"), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 189
        echo gettext("Subject");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"subject\" value=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requests"]) ? $context["requests"] : null), "subject"), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 196
        echo gettext("Content");
        echo "</label>
                        <div class=\"formRight\">
                            <textarea name=\"content\" cols=\"5\" rows=\"10\">";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requests"]) ? $context["requests"] : null), "content"), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 203
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>
    </div>
</div>
";
    }

    // line 211
    public function block_js($context, array $blocks = array())
    {
        // line 212
        echo "<script type=\"text/javascript\">
\$(function() {
    \$('#emailTest').click(function(){
        api.post('admin/email/send_test', null, function(result){
            bb.msg('Email was successfully sent');
        });
        return false;
    });
\t\$(\"#mailer input\").click( function() {
        if(\$(this).val() == 'smtp') {
            \$('fieldset.smtp').slideDown();
        } else {
            \$('fieldset.smtp').slideUp();
        }
\t});
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_email_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  467 => 212,  464 => 211,  453 => 203,  445 => 198,  440 => 196,  432 => 191,  427 => 189,  419 => 184,  414 => 182,  406 => 177,  401 => 175,  393 => 170,  389 => 169,  384 => 167,  375 => 161,  371 => 160,  360 => 152,  356 => 151,  344 => 144,  338 => 143,  332 => 142,  327 => 140,  318 => 134,  313 => 132,  304 => 126,  299 => 124,  290 => 118,  285 => 116,  276 => 110,  271 => 108,  264 => 106,  251 => 100,  243 => 99,  238 => 97,  225 => 91,  217 => 90,  212 => 88,  202 => 81,  198 => 80,  194 => 78,  192 => 77,  175 => 62,  167 => 59,  165 => 58,  161 => 56,  150 => 50,  144 => 49,  139 => 47,  135 => 46,  131 => 45,  127 => 44,  124 => 43,  118 => 42,  116 => 41,  107 => 35,  103 => 34,  99 => 33,  95 => 32,  88 => 28,  78 => 21,  74 => 20,  70 => 19,  65 => 16,  62 => 15,  55 => 9,  49 => 8,  43 => 7,  40 => 6,  37 => 5,  31 => 3,  26 => 14,  24 => 2,);
    }
}
