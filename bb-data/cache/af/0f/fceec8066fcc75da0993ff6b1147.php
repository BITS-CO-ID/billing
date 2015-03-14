<?php

/* mod_support_settings.phtml */
class __TwigTemplate_af0ffceec8066fcc75da0993ff6b1147 extends Twig_Template
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
        // line 4
        $context["active_menu"] = "system";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Support settings");
    }

    // line 6
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 7
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/"), "html", null, true);
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("system"), "html", null, true);
        echo "\">";
        echo gettext("Settings");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 10
        echo gettext("Support settings");
        echo "</li>
</ul>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 19
        echo gettext("Settings");
        echo "</a></li>
        <li><a href=\"#tab-helpdesks\">";
        // line 20
        echo gettext("Help desks");
        echo "</a></li>
        <li><a href=\"#tab-new-helpdesk\">";
        // line 21
        echo gettext("New help desk");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">

            ";
        // line 28
        $context["params"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "extension_config_get", array(0 => array("ext" => "mod_support")), "method");
        // line 29
        echo "
            <form method=\"post\" action=\"admin/extension/config_save\" class=\"mainForm api-form\" data-api-msg=\"";
        // line 30
        echo gettext("Configuration updated");
        echo "\">

                <fieldset>
                    <legend>";
        // line 33
        echo gettext("Auto responder settings");
        echo "</legend>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 35
        echo gettext("Enable auto responder");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"autorespond_enable\" value=\"1\" ";
        // line 37
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "autorespond_enable") == "1")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                            <input type=\"radio\" name=\"autorespond_enable\" value=\"0\" ";
        // line 38
        if ((!$this->getAttribute((isset($context["params"]) ? $context["params"] : null), "autorespond_enable"))) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("No");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div id=\"autorespond_enable\" ";
        // line 43
        if ((!$this->getAttribute((isset($context["params"]) ? $context["params"] : null), "autorespond_enable"))) {
            echo "style=\"display:none;\"";
        }
        echo ">
                    <div class=\"rowElem\">
                        <label class=\"\">";
        // line 45
        echo gettext("Auto respond message");
        echo "</label>
                        <div class=\"formRight\">
                            <select name=\"autorespond_message_id\" style=\"width: 250px;\">
                                ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_canned_get_list", array(0 => array("per_page" => 90)), "method"), "list"));
        foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
            // line 49
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["response"]) ? $context["response"] : null), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "autorespond_message_id") == $this->getAttribute((isset($context["response"]) ? $context["response"] : null), "id"))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["response"]) ? $context["response"] : null), "title"), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 51
        echo "                            </select>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
        </div>
        </fieldset>

        <fieldset>
            <legend>";
        // line 59
        echo gettext("Delay message - selected canned response message will be added to default reply message");
        echo "</legend>
            <div class=\"rowElem noborder\">
                <label>";
        // line 61
        echo gettext("Enable delay message");
        echo "</label>
                <div class=\"formRight\">
                    <input type=\"radio\" name=\"delay_enable\" value=\"1\" ";
        // line 63
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "delay_enable") == "1")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                    <input type=\"radio\" name=\"delay_enable\" value=\"0\" ";
        // line 64
        if ((!$this->getAttribute((isset($context["params"]) ? $context["params"] : null), "delay_enable"))) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("No");
        echo "</label>
                </div>
                <div class=\"fix\"></div>
            </div>

            <div id=\"delay_enable\" ";
        // line 69
        if ((!$this->getAttribute((isset($context["params"]) ? $context["params"] : null), "delay_enable"))) {
            echo "style=\"display:none;\"";
        }
        echo ">
            <div class=\"rowElem\">
                <label class=\"\">";
        // line 71
        echo gettext("Delay hours");
        echo "</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"delay_hours\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "delay_hours", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "delay_hours"), 24)) : (24)), "html", null, true);
        echo "\" style=\"width: 40px;\" placeholder=\"24\"/>
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label class=\"\">";
        // line 79
        echo gettext("Delay reply");
        echo "</label>
                <div class=\"formRight\">
                    <select name=\"delay_message_id\" style=\"width: 250px;\">
                        ";
        // line 82
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_canned_get_list", array(0 => array("per_page" => 90)), "method"), "list"));
        foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
            // line 83
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["response"]) ? $context["response"] : null), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "delay_message_id") == $this->getAttribute((isset($context["response"]) ? $context["response"] : null), "id"))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["response"]) ? $context["response"] : null), "title"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 85
        echo "                    </select>
                </div>
                <div class=\"fix\"></div>
            </div>
    </div>

    <input type=\"submit\" value=\"";
        // line 91
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
    <input type=\"hidden\" name=\"ext\" value=\"mod_support\" />
    </fieldset>
    </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-helpdesks\">

            ";
        // line 99
        echo $context["mf"]->gettable_search();
        echo "
            <table class=\"tableStatic wide\">
                <thead>
                <tr>
                    <th style=\"width: 40%\">";
        // line 103
        echo gettext("Title");
        echo "</th>
                    <th>";
        // line 104
        echo gettext("Email");
        echo "</th>
                    <th>";
        // line 105
        echo gettext("Close tickets after");
        echo "</th>
                    <th style=\"width: 13%\">&nbsp;</th>
                </tr>
                </thead>

                <tbody>
                ";
        // line 111
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_helpdesk_get_list", array(0 => twig_array_merge(array("per_page" => 50, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method"), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["helpdesk"]) {
            // line 112
            echo "                <tr>
                    <td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helpdesk"]) ? $context["helpdesk"] : null), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helpdesk"]) ? $context["helpdesk"] : null), "email"), "html", null, true);
            echo "</td>
                    <td>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helpdesk"]) ? $context["helpdesk"] : null), "close_after"), "html", null, true);
            echo " hour(s)</td>
                    <td class=\"actions\">
                        <a class=\"bb-button btn14\" href=\"";
            // line 117
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/support/helpdesk"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helpdesk"]) ? $context["helpdesk"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"extension/settings/support\" href=\"admin/support/helpdesk_delete?id=";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helpdesk"]) ? $context["helpdesk"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>
                </tbody>

                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 124
            echo "                <tbody>
                <tr>
                    <td colspan=\"4\">
                        ";
            // line 127
            echo gettext("The list is empty");
            // line 128
            echo "                    </td>
                </tr>
                </tbody>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['helpdesk'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 132
        echo "            </table>

        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new-helpdesk\">

            <form method=\"post\" action=\"admin/support/helpdesk_create\" class=\"mainForm save api-form\" data-api-redirect=\"extension/settings/support\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 141
        echo gettext("Title");
        echo "</label>
                        <div class=\"formRight noborder\">
                            <input type=\"text\" name=\"name\" value=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helpdesk"]) ? $context["helpdesk"] : null), "name"), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 148
        echo gettext("Email");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"email\" value=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helpdesk"]) ? $context["helpdesk"] : null), "email"), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 155
        echo gettext("Signature");
        echo "</label>
                        <div class=\"formRight\">
                            <textarea name=\"signature\" cols=\"5\" rows=\"3\">";
        // line 157
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helpdesk"]) ? $context["helpdesk"] : null), "signature"), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 162
        echo gettext("Close after");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"close_after\" value=\"";
        // line 164
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["helpdesk"]) ? $context["helpdesk"] : null), "close_after", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["helpdesk"]) ? $context["helpdesk"] : null), "close_after"), "48")) : ("48")), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 169
        echo gettext("Can reopen");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"can_reopen\" value=\"1\" checked=\"checked\"/><label>";
        // line 171
        echo gettext("Yes");
        echo "</label>
                            <input type=\"radio\" name=\"can_reopen\" value=\"0\"/><label>";
        // line 172
        echo gettext("No");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 177
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helpdesk"]) ? $context["helpdesk"] : null), "id"), "html", null, true);
        echo "\"/>
                </fieldset>
            </form>

        </div>
    </div>

</div>
";
    }

    // line 189
    public function block_js($context, array $blocks = array())
    {
        // line 190
        echo "<script type=\"text/javascript\">
    
\$(function() {
    \$('input[name=autorespond_enable]').click(function(){
        if(\$(this).val() == 1) {
            \$('#autorespond_enable').slideDown();
        } else {
            \$('#autorespond_enable').slideUp();
        }
    });
    
    \$('input[name=delay_enable]').click(function(){
        if(\$(this).val() == 1) {
            \$('#delay_enable').slideDown();
        } else {
            \$('#delay_enable').slideUp();
        }
    });
});

</script>
";
    }

    public function getTemplateName()
    {
        return "mod_support_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 190,  442 => 189,  429 => 178,  425 => 177,  417 => 172,  413 => 171,  408 => 169,  400 => 164,  395 => 162,  387 => 157,  382 => 155,  374 => 150,  369 => 148,  361 => 143,  356 => 141,  345 => 132,  336 => 128,  334 => 127,  329 => 124,  318 => 118,  312 => 117,  307 => 115,  303 => 114,  299 => 113,  296 => 112,  291 => 111,  282 => 105,  278 => 104,  274 => 103,  267 => 99,  256 => 91,  248 => 85,  233 => 83,  229 => 82,  223 => 79,  214 => 73,  209 => 71,  202 => 69,  190 => 64,  182 => 63,  177 => 61,  172 => 59,  162 => 51,  147 => 49,  143 => 48,  137 => 45,  130 => 43,  118 => 38,  110 => 37,  105 => 35,  100 => 33,  94 => 30,  91 => 29,  89 => 28,  79 => 21,  75 => 20,  71 => 19,  65 => 15,  62 => 14,  55 => 10,  49 => 9,  43 => 8,  40 => 7,  37 => 6,  31 => 3,  26 => 4,  24 => 2,);
    }
}
