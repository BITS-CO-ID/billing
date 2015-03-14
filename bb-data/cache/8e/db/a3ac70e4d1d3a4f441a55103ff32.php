<?php

/* mod_support_contact_us.phtml */
class __TwigTemplate_8edba3ac70e4d1d3a4f441a55103ff32 extends Twig_Template
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
        // line 2
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Contact us");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        $context["company"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_company");
        // line 7
        echo "
    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"big-light-icon i-contacts\"></span></div>
            <h2>";
        // line 11
        echo gettext("Contact us");
        echo "</h2>
            <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "signature"), "html", null, true);
        echo "</p>
        </div>
        <div class=\"block\">
                
            <div class=\"grid_6 alpha\">
            <form method=\"post\" action=\"\" id=\"public-ticket-create\">
                <fieldset>
                    <p>
                        <label>";
        // line 20
        echo gettext("Name");
        echo ": </label>
                        <input type=\"text\" name=\"name\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "name"), "html", null, true);
        echo "\" required=\"required\">
                    </p>

                    <p>
                        <label>";
        // line 25
        echo gettext("Email");
        echo ": </label>
                        <input type=\"email\" name=\"email\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "email"), "html", null, true);
        echo "\" required=\"required\">
                    </p>

                    <p>
                        <label>";
        // line 30
        echo gettext("Subject");
        echo ": </label>
                        <input type=\"text\" name=\"subject\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "subject"), "html", null, true);
        echo "\" required=\"required\">
                    </p>

                    <p>
                        <label>";
        // line 35
        echo gettext("Message");
        echo ": </label>
                        <textarea name=\"message\" cols=\"5\" rows=\"5\" required=\"required\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "message"), "html", null, true);
        echo "</textarea>
                    </p>

                    ";
        // line 39
        echo $context["mf"]->getrecaptcha();
        echo "

                    <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
        // line 41
        echo gettext("Send");
        echo "\" />
                    
                </fieldset>

                <input type=\"hidden\" name=\"anti-spam\" value=\"1\" id=\"anti-spam\" required=\"required\"/>
                </form>
            
            </div>

            <div class=\"grid_6 omega\">
                <ul class=\"contact-us\">
                    <li>
                        ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "name"), "html", null, true);
        echo "
                    </li>
                    <li>
                        ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "address_1"), "html", null, true);
        echo "
                    </li>
                    <li>
                        ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "address_2"), "html", null, true);
        echo "
                    </li>
                    <li>
                        ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "address_3"), "html", null, true);
        echo "
                    </li>
                    <li>
                        ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "tel"), "html", null, true);
        echo "
                    </li>
                    <li>
                        ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "www"), "html", null, true);
        echo "
                    </li>
                    <li>
                        ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "email"), "html", null, true);
        echo "
                    </li>
                </ul>
            </div>
            <div class=\"clear\"></div>
        </div>
    </div>

";
    }

    // line 81
    public function block_js($context, array $blocks = array())
    {
        // line 82
        echo "<script type=\"text/javascript\">
\$(function() {
    \$('#anti-spam').remove();

    \$('#public-ticket-create').bind('submit',function(event){
        bb.post(
            'guest/support/ticket_create',
            \$(this).serialize(),
            function(result) {
                bb.redirect('";
        // line 91
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("contact-us/conversation"), "html", null, true);
        echo "' + '/' + result);
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
        return "mod_support_contact_us.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 91,  175 => 82,  172 => 81,  159 => 71,  153 => 68,  147 => 65,  141 => 62,  135 => 59,  129 => 56,  123 => 53,  108 => 41,  103 => 39,  97 => 36,  93 => 35,  86 => 31,  82 => 30,  75 => 26,  71 => 25,  64 => 21,  60 => 20,  49 => 12,  45 => 11,  39 => 7,  37 => 6,  34 => 5,  28 => 3,  23 => 2,);
    }
}
