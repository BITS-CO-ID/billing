<?php

/* mod_order_settings.phtml */
class __TwigTemplate_730868b98267182b81237e15e9d757bd extends Twig_Template
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
        echo gettext("Orders settings");
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
        echo gettext("Orders settings");
        echo "</li>
</ul>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<div class=\"widget\">
    <div class=\"head\">
        <h5 class=\"iCog\">";
        // line 18
        echo gettext("Orders settings");
        echo "</h5>
    </div>

    ";
        // line 21
        $context["params"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "extension_config_get", array(0 => array("ext" => "mod_order")), "method");
        // line 22
        echo "    <form method=\"post\" action=\"admin/extension/config_save\" class=\"mainForm api-form\" data-api-msg=\"Settings updated\">
        <fieldset>
        <div class=\"rowElem noborder\">
            <label>";
        // line 25
        echo gettext("Expiration date");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"order_renewal_logic\" value=\"from_expiration_date\" ";
        // line 27
        if ((($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "order_renewal_logic") == "from_expiration_date") || (!$this->getAttribute((isset($context["params"]) ? $context["params"] : null), "order_renewal_logic")))) {
            echo "checked=\"checked\"";
        }
        echo "/><label>Next date is counted from last order expiration date</label>
                <div class=\"clear\"></div>
                <input type=\"radio\" name=\"order_renewal_logic\" value=\"from_today\" ";
        // line 29
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "order_renewal_logic") == "from_today")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>Next date is counted from renewal (payment) date</label>
                <div class=\"clear\"></div>
                <input type=\"radio\" name=\"order_renewal_logic\" value=\"from_greater\" ";
        // line 31
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "order_renewal_logic") == "from_greater")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>Next date is counted from last expiration date or renewal date whichever is greater</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 37
        echo gettext("Auto suspend reason");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"batch_suspend_reason\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "batch_suspend_reason"), "html", null, true);
        echo "\" />
            </div>
            <div class=\"fix\"></div>
        </div>

        <input type=\"hidden\" name=\"ext\" value=\"mod_order\" />
        <input type=\"submit\" value=\"";
        // line 45
        echo gettext("Update settings");
        echo "\" class=\"greyishBtn submitForm\" />
        </fieldset>
    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_order_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 45,  117 => 39,  112 => 37,  101 => 31,  94 => 29,  87 => 27,  82 => 25,  77 => 22,  75 => 21,  69 => 18,  64 => 15,  61 => 14,  54 => 10,  48 => 9,  42 => 8,  39 => 7,  36 => 6,  30 => 3,  25 => 4,  23 => 2,);
    }
}
