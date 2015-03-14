<?php

/* mod_client_password_reset.phtml */
class __TwigTemplate_6ce725f06761c6b5698bd0a8bbeed968 extends Twig_Template
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
        echo gettext("Reset password");
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"icon-mail\"></span></div>
            <h2>";
        // line 12
        echo gettext("How to reset my password?");
        echo "</h2>
            <p>";
        // line 13
        echo gettext("Enter your email to reset password. You will receive new password after reset link is confirmed.");
        echo "</p>
        </div>
        <div class=\"block\">
            <form action=\"\" method=\"post\" id=\"password-reset\">
                <fieldset>
                    <legend>";
        // line 18
        echo gettext("Reset password");
        echo "</legend>
                    <label>";
        // line 19
        echo gettext("Email Address");
        echo ": </label>
                    <input type=\"email\" name=\"email\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "email"), "html", null, true);
        echo "\" required=\"required\">
                    <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
        // line 21
        echo gettext("Reset password");
        echo "\">
                </fieldset>
            </form>
        </div>
    </div>

";
    }

    // line 29
    public function block_js($context, array $blocks = array())
    {
        // line 30
        echo "<script type=\"text/javascript\">
\$(function() {
    \$('#password-reset').bind('submit',function(event){
        bb.post(
            'guest/client/reset_password',
            \$(this).serialize(),
            function(result) {
                bb.msg('";
        // line 37
        echo gettext("Password reset confirmation email was sent");
        echo "');
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
        return "mod_client_password_reset.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 37,  81 => 30,  78 => 29,  67 => 21,  63 => 20,  59 => 19,  55 => 18,  47 => 13,  43 => 12,  37 => 8,  34 => 7,  28 => 5,  23 => 3,);
    }
}
