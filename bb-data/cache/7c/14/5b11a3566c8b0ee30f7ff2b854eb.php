<?php

/* mod_email_template.phtml */
class __TwigTemplate_7c145b11a3566c8b0ee30f7ff2b854eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_default.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_default.phtml";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["active_menu"] = "system";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta_title($context, array $blocks = array())
    {
        echo "Email template";
    }

    // line 5
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 6
        echo "<ul>
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
    <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("extension/settings/email"), "html", null, true);
        echo "\">";
        echo gettext("Email");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : null), "action_code"), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
";
        // line 21
        echo "    
<div class=\"widget simpleTabs\">
    <ul class=\"tabs\">
        <li><a href=\"#template\">";
        // line 24
        echo gettext("Template");
        echo "</a></li>
        <li><a href=\"#vars\">";
        // line 25
        echo gettext("Variables");
        echo "</a></li>
        <li><a href=\"#manage\" >";
        // line 26
        echo gettext("Template Settings");
        echo "</a></li>
        <li><a href=\"#reset\">";
        // line 27
        echo gettext("Reset template");
        echo "</a></li>
        <li><a href=\"#examples\">";
        // line 28
        echo gettext("Examples");
        echo "</a></li>
    </ul>

    <div class=\"tab_container\">
        <div id=\"template\" class=\"tab_content nopadding\">
            <div class=\"help\">
                <h3>";
        // line 34
        echo gettext("Manage email template");
        echo "</h3>
                <p>";
        // line 35
        echo gettext("Most email templates receives parameters from BoxBilling. You can browse them on \"Variables\" tab. Copy variable name to email template and hit preview to see parsed content. Please note that values will be different when actual email is sent.");
        echo "</p>
            </div>
            <div class=\"body\">
            <form method=\"post\" action=\"admin/email/template_update\" class=\"mainForm save api-form\" data-api-msg=\"";
        // line 38
        echo gettext("Template updated");
        echo "\">
                <fieldset>
                <div class=\"formBottom\">
                    <input type=\"text\" name=\"subject\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : null), "subject"), "html", null, true);
        echo "\" id=\"email-subject\" required=\"required\" placeholder=\"Email subject\"/>
                </div>
                <div class=\"formBottom\">
                    <textarea name=\"content\" cols=\"5\" rows=\"20\" id=\"email-template\" required=\"required\" placeholder=\"Email message\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : null), "content"), "html", null, true);
        echo "</textarea>
                </div>
                    
                ";
        // line 47
        if ($this->getAttribute((isset($context["template"]) ? $context["template"] : null), "vars")) {
            echo "<input type=\"button\" value=\"";
            echo gettext("Preview");
            echo "\" class=\"blueBtn\" id=\"preview-button\"/>";
        } else {
            echo gettext("Preview mode is disabled until first event occurrence");
        }
        // line 48
        echo "                <input type=\"submit\" value=\"";
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" style=\"margin: 0;\"/>
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : null), "id"), "html", null, true);
        echo "\"/>
                <div class=\"fix\"></div>
                </fieldset>
            </form>
            
            <div class=\"pt20\" id=\"preview\" style=\"display: none;\">
                <div class=\"body esubject mb20\" style=\"background: white; border: 1px dashed grey; overflow: auto;\"></div>
                <div class=\"body econtent\" style=\"background: white; border: 1px dashed grey; overflow: auto;\"></div>
            </div>
            </div>
        </div>
        
        <div id=\"manage\" class=\"tab_content nopadding\">
            <div class=\"help\">
                <h3>";
        // line 63
        echo gettext("Template settings");
        echo "</h3>
                <p>";
        // line 64
        echo gettext("Enable or disable this email template.");
        echo "</p>
            </div>
            <form method=\"post\" action=\"admin/email/template_update\" class=\"mainForm save api-form\" data-api-msg=\"";
        // line 66
        echo gettext("Template updated");
        echo "\">
            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>";
        // line 69
        echo gettext("Enabled");
        echo ":</label>
                    <div class=\"formRight noborder\">
                        <input type=\"radio\" name=\"enabled\" value=\"1\"";
        // line 71
        if ($this->getAttribute((isset($context["template"]) ? $context["template"] : null), "enabled")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Yes</label>
                        <input type=\"radio\" name=\"enabled\" value=\"0\"";
        // line 72
        if ((!$this->getAttribute((isset($context["template"]) ? $context["template"] : null), "enabled"))) {
            echo " checked=\"checked\"";
        }
        echo " /><label>No</label>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"rowElem\">
                    <label>";
        // line 77
        echo gettext("Category");
        echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"category\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : null), "category"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"General\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <input type=\"submit\" value=\"";
        // line 83
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : null), "id"), "html", null, true);
        echo "\"/>
            </fieldset>
            </form>
        </div>
        
        <div id=\"vars\" class=\"tab_content nopadding\">
            <div class=\"help\">
                <h3>";
        // line 91
        echo gettext("List of variables used in this email");
        echo "</h3>
                <p>";
        // line 92
        echo gettext("These values will change when real email is sent. You can pass these variables to admin or guest API to get additional information from database.");
        echo "</p>
            </div>
            
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <th>";
        // line 98
        echo gettext("Variable");
        echo "</th>
                        <th>";
        // line 99
        echo gettext("Example value");
        echo "</th>
                    </tr>
                </thead>
                
                <tbody>
                ";
        // line 104
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["template"]) ? $context["template"] : null), "vars"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["k"] => $context["var"]) {
            // line 105
            echo "                    ";
            if ((twig_length_filter($this->env, twig_get_array_keys_filter((isset($context["var"]) ? $context["var"] : null))) > 0)) {
                // line 106
                echo "                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["var"]) ? $context["var"] : null));
                foreach ($context['_seq'] as $context["subkey"] => $context["subvalue"]) {
                    // line 107
                    echo "
                        <tr>
                            <td>";
                    // line 109
                    echo "{{";
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
                    echo ".";
                    echo twig_escape_filter($this->env, (isset($context["subkey"]) ? $context["subkey"] : null), "html", null, true);
                    echo " ";
                    echo "}}";
                    echo "</td>
                            <td>";
                    // line 110
                    echo twig_escape_filter($this->env, (isset($context["subvalue"]) ? $context["subvalue"] : null), "html", null, true);
                    echo "</td>
                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['subkey'], $context['subvalue'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 113
                echo "                    ";
            } else {
                // line 114
                echo "                        <tr>
                            <td>";
                // line 115
                echo "{{";
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
                echo " ";
                echo "}}";
                echo "</td>
                            <td>";
                // line 116
                echo twig_escape_filter($this->env, (isset($context["var"]) ? $context["var"] : null), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            // line 119
            echo "
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 121
            echo "                    <tr>
                        <td colspan=\"2\">";
            // line 122
            echo gettext("This template does not receive any parameters");
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 125
        echo "                </tbody>
            </table>
        </div>
        
        <div id=\"reset\" class=\"tab_content nopadding\">
            <div class=\"help\">
                <h3>";
        // line 131
        echo gettext("Reset email template to default");
        echo "</h3>
            </div>
            
            <div class=\"body mainForm\">
                <form action=\"admin/email/template_reset\" class=\"api-form\" data-api-reload=\"1\">
                    <input type=\"submit\" value=\"";
        // line 136
        echo gettext("Reset to default");
        echo "\" class=\"blackBtn\"/>
                    <input type=\"hidden\" name=\"code\" value=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : null), "action_code"), "html", null, true);
        echo "\"/>
                </form>
            </div>
        </div>
        
        <div id=\"examples\" class=\"tab_content nopadding\">
            <div class=\"help\">
                <h3>";
        // line 144
        echo gettext("Email templates examples");
        echo "</h3>
                <p>";
        // line 145
        echo gettext("Email template playground. Use this tool to try rendering email templates.");
        echo "</p>
            </div>
            
            <div class=\"body mainForm\">
                <div class=\"formBottom\">
                    <textarea cols=\"5\" rows=\"20\" class=\"example\">";
        // line 183
        echo " {% filter markdown %}

This is an example of markdown syntax in email template

*Italic text*    
**Bolded text**   

Lists:

* Red
* Green
* Blue

***

Link to login form: <{{ 'login'|link }}>   

Company signature: {{ guest.system_company.signature }}   

You can event use IF statements in email templates: {% if 1 == 2 %}This will never show{% else %}Of course 1 is not equal 2{% endif %}

***

Accessing Admin API can get information about your BoxBilling, for example how many clients you have:   
{% set stats =  admin.stats_get_summary %}   
**Total clients:** {{ stats.clients_total }}

{# Comments in email templates. This text is not visible #}
{# Uncomment the line below to see what is the output #}

{#<pre>{% debug stats %}</pre>#}


{% endfilter %}";
        echo "</textarea>
                    <input type=\"button\" value=\"";
        // line 184
        echo gettext("Preview");
        echo "\" class=\"blueBtn mt10 epb\"/>
                    <div class=\"mt20 example-preview\" style=\"padding: 5px; background: white; border: 1px dashed grey; overflow: auto; display: none;\"></div>
                </div>
            </div>
            
        </div>
    </div>
    <div class=\"fix\"></div>\t 
</div>

";
    }

    // line 196
    public function block_js($context, array $blocks = array())
    {
        // line 197
        echo "<script type=\"text/javascript\">
\$(function() {
    \$('.epb').click(function(){
        var r = \$(this).siblings('.example-preview');
        var params = {_tpl:\$(this).siblings('textarea').val(), id:'";
        // line 201
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : null), "id"), "html", null, true);
        echo "' };
        api.post('admin/email/template_render', params, function(result){
            r.html(result).show();
        });
        
    });
    
    \$('#preview-button').click(function(){
        var params = {_tpl:\$('#email-template').val(), id:'";
        // line 209
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : null), "id"), "html", null, true);
        echo "' };
        api.post('admin/email/template_render', params, function(result){
            \$('#preview').show();
            \$('#preview .econtent').html(result);
        });
        
        var params = {_tpl:\$('#email-subject').val(), id:'";
        // line 215
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : null), "id"), "html", null, true);
        echo "' };
        api.post('admin/email/template_render', params, function(result){
            \$('#preview').show();
            \$('#preview .esubject').html(result);
        });
        return false;
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_email_template.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 215,  437 => 209,  426 => 201,  420 => 197,  417 => 196,  402 => 184,  365 => 183,  357 => 145,  353 => 144,  343 => 137,  339 => 136,  331 => 131,  323 => 125,  314 => 122,  311 => 121,  305 => 119,  299 => 116,  291 => 115,  288 => 114,  285 => 113,  276 => 110,  266 => 109,  262 => 107,  257 => 106,  254 => 105,  249 => 104,  241 => 99,  237 => 98,  228 => 92,  224 => 91,  214 => 84,  210 => 83,  203 => 79,  198 => 77,  188 => 72,  182 => 71,  177 => 69,  171 => 66,  166 => 64,  162 => 63,  145 => 49,  140 => 48,  132 => 47,  126 => 44,  120 => 41,  114 => 38,  108 => 35,  104 => 34,  95 => 28,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  74 => 21,  71 => 15,  68 => 14,  61 => 10,  55 => 9,  49 => 8,  43 => 7,  40 => 6,  37 => 5,  31 => 2,  26 => 3,);
    }
}
