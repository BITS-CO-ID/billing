<?php

/* mod_serviceyouhosting_settings.phtml */
class __TwigTemplate_2e8985ac776ebc2519be182aa7db5703 extends Twig_Template
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
        echo "YouHosting";
    }

    // line 6
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 7
        echo "    <ul>
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
        echo gettext("YouHosting settings");
        echo "</li>
    </ul>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        $context["params"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "extension_config_get", array(0 => array("ext" => "mod_serviceyouhosting")), "method");
        // line 16
        echo "<form method=\"post\" action=\"admin/extension/config_save\" class=\"mainForm api-form\" data-api-msg=\"Settings updated\">

<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 21
        echo gettext("YouHosting settings");
        echo "</a></li>
        <li><a href=\"#tab-advanced\">";
        // line 22
        echo gettext("Advanced");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
    <div class=\"fix\"></div>

    <div id=\"tab-index\" class=\"tab_content nopadding\">
            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>";
        // line 31
        echo gettext("Your IP");
        echo "</label>
                    <div class=\"formRight\">
                        <strong>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_env", array(0 => array("ip" => 1)), "method"), "html", null, true);
        echo "</strong>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
        // line 39
        echo gettext("WebHook URL");
        echo "</label>
                    <div class=\"formRight\">
                        <strong>";
        // line 41
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("api/guest/serviceyouhosting/webhook"), "html", null, true);
        echo "</strong>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
        // line 47
        echo gettext("Api Key");
        echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"api_key\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "api_key"), "html", null, true);
        echo "\" placeholder=\"Get API Key at YouHosting.com control panel\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>


                <input type=\"submit\" value=\"";
        // line 55
        echo gettext("Update settings");
        echo "\" class=\"greyishBtn submitForm\" />
                <div class=\"body\">
                    ";
        // line 58
        echo "                    <input type=\"button\" value=\"";
        echo gettext("Check connection");
        echo "\" class=\"blueBtn\" onclick=\"bb.post('admin/serviceyouhosting/get_plans', null, function(){ bb.msg('Successfully connected') }); return false;\"/>
                    <input type=\"button\" value=\"";
        // line 59
        echo gettext("Import clients");
        echo "\" class=\"blueBtn\" id=\"import-clients\" data-bb-import-page=\"1\"/>
                    <input type=\"button\" value=\"";
        // line 60
        echo gettext("Import clients, accounts and products");
        echo "\" class=\"blueBtn\" id=\"import-accounts\" data-bb-import-page=\"1\"/>
                </div>
            </fieldset>

        <div id=\"import-results\"></div>
        <pre id=\"import-results-log\"></pre>
    </div>

        <div id=\"tab-advanced\" class=\"tab_content nopadding\">
            <fieldset>
                <div class=\"rowElem noborder\">
                    <label class=\"topLabel\">";
        // line 71
        echo gettext("Allowed IPs for Webhook listener");
        echo "</label>
                    <div class=\"formBottom\">
                        <textarea name=\"yh_ips\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "yh_ips"), "html", null, true);
        echo "\" placeholder=\"212.1.209.2\"></textarea>
                    </div>
                    <div class=\"fix\"></div>
                </div>

            <input type=\"submit\" value=\"";
        // line 78
        echo gettext("Update settings");
        echo "\" class=\"greyishBtn submitForm\" />
            </fieldset>
        </div>

    </div>
</div>

<input type=\"hidden\" name=\"ext\" value=\"mod_serviceyouhosting\" />
</form>
";
    }

    // line 89
    public function block_js($context, array $blocks = array())
    {
        // line 90
        echo "<script type=\"text/javascript\">
    \$(function() {

        \$('#import-accounts').click(function(){
            \$.ajax({
                type: \"POST\",
                url: bb.restUrl('admin/serviceyouhosting/import_accounts'),
                data: {page: \$('#import-accounts').attr('data-bb-import-page')},
                dataType: 'json',
                error: function(jqXHR, textStatus, e) {
                    bb.msg(e, 'error');
                },
                success: function(data) {
                    if(data.result.continue) {
                        \$('#import-results-log').text(data.result.log);
                        \$('#import-results').text('Imported page ' + data.result.current + ' of ' + data.result.total);
                        \$('#import-accounts').attr('data-bb-import-page', data.result.next);
                        \$('#import-accounts').click();
                    }
                }
            });
            return false;
        });

        \$('#import-clients').click(function(){
            \$.ajax({
                type: \"POST\",
                url: bb.restUrl('admin/serviceyouhosting/import_clients'),
                data: {page: \$('#import-clients').attr('data-bb-import-page')},
                dataType: 'json',
                error: function(jqXHR, textStatus, e) {
                    bb.msg(e, 'error');
                },
                success: function(data) {
                    if(data.result.continue) {
                        \$('#import-results-log').text(data.result.log);
                        \$('#import-results').text('Imported page ' + data.result.current + ' of ' + data.result.total);
                        \$('#import-clients').attr('data-bb-import-page', data.result.next);
                        \$('#import-clients').click();
                    }
                }
            });
            return false;
        });

    });
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_serviceyouhosting_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 90,  187 => 89,  173 => 78,  165 => 73,  160 => 71,  146 => 60,  142 => 59,  137 => 58,  132 => 55,  123 => 49,  118 => 47,  109 => 41,  104 => 39,  95 => 33,  90 => 31,  78 => 22,  74 => 21,  67 => 16,  65 => 15,  62 => 14,  55 => 10,  49 => 9,  43 => 8,  40 => 7,  37 => 6,  31 => 3,  26 => 4,  24 => 2,);
    }
}
