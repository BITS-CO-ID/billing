<?php

/* mod_support_helpdesk.phtml */
class __TwigTemplate_03ea46f9f3c381e7d99e9e8cbcc5f7d9 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helpdesk"]) ? $context["helpdesk"] : null), "name"), "html", null, true);
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
    <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("extension/settings/support"), "html", null, true);
        echo "#tab-helpdesks\">";
        echo gettext("Support settings");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 11
        echo gettext("Helpdesk -");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helpdesk"]) ? $context["helpdesk"] : null), "name"), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "<div class=\"widget\">
    
    <div class=\"head\">
        <h5 class=\"iFrames\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helpdesk"]) ? $context["helpdesk"] : null), "name"), "html", null, true);
        echo "</h5>
    </div>

    <div class=\"help\">
        <h3>";
        // line 23
        echo gettext("Support help desk");
        echo "</h3>
        <p>";
        // line 24
        echo gettext("Help desk name will be visible for clients when submitting new ticket. Define very large number of hours to disable auto close ticket option");
        echo "</p>
    </div>

    <form method=\"post\" action=\"admin/support/helpdesk_update\" class=\"mainForm save api-form\" data-api-msg=\"Help desk updated\">
        <fieldset>
            <div class=\"rowElem noborder\">
                <label>";
        // line 30
        echo gettext("Title");
        echo "</label>
                <div class=\"formRight noborder\">
                    <input type=\"text\" name=\"name\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helpdesk"]) ? $context["helpdesk"] : null), "name"), "html", null, true);
        echo "\" required=\"required\"/>
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>";
        // line 37
        echo gettext("Email");
        echo "</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"email\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helpdesk"]) ? $context["helpdesk"] : null), "email"), "html", null, true);
        echo "\" required=\"required\"/>
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>";
        // line 44
        echo gettext("Signature");
        echo "</label>
                <div class=\"formRight\">
                    <textarea name=\"signature\" cols=\"5\" rows=\"5\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helpdesk"]) ? $context["helpdesk"] : null), "signature"), "html", null, true);
        echo "</textarea>
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>";
        // line 51
        echo gettext("Close after");
        echo "</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"close_after\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helpdesk"]) ? $context["helpdesk"] : null), "close_after"), "html", null, true);
        echo "\" required=\"required\"/>
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>";
        // line 58
        echo gettext("Can reopen");
        echo "</label>
                <div class=\"formRight\">
                    <input type=\"radio\" name=\"can_reopen\" value=\"1\"";
        // line 60
        if (($this->getAttribute((isset($context["helpdesk"]) ? $context["helpdesk"] : null), "can_reopen") == "draft")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                    <input type=\"radio\" name=\"can_reopen\" value=\"0\"";
        // line 61
        if (((!$this->getAttribute((isset($context["helpdesk"]) ? $context["helpdesk"] : null), "can_reopen")) == "active")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("No");
        echo "</label>
                </div>
                <div class=\"fix\"></div>
            </div>
            
            <input type=\"submit\" value=\"";
        // line 66
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
            <input type=\"hidden\" name=\"id\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helpdesk"]) ? $context["helpdesk"] : null), "id"), "html", null, true);
        echo "\"/>
        </fieldset>
    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_support_helpdesk.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 67,  174 => 66,  162 => 61,  154 => 60,  149 => 58,  141 => 53,  136 => 51,  128 => 46,  123 => 44,  115 => 39,  110 => 37,  102 => 32,  97 => 30,  88 => 24,  84 => 23,  77 => 19,  72 => 16,  69 => 15,  60 => 11,  54 => 10,  48 => 9,  42 => 8,  39 => 7,  36 => 6,  30 => 3,  25 => 4,  23 => 2,);
    }
}
