<?php

/* mod_forum_settings.phtml */
class __TwigTemplate_22acf3976d81c0f84070b85759b57c13 extends Twig_Template
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
        echo gettext("Forum settings");
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
        echo gettext("Forum settings");
        echo "</li>
</ul>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "
<div class=\"widget\">
    <div class=\"head\">
        <h5 class=\"iCog\">";
        // line 19
        echo gettext("Forum settings");
        echo "</h5>
    </div>

    ";
        // line 22
        $context["params"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "extension_config_get", array(0 => array("ext" => "mod_forum")), "method");
        // line 23
        echo "    
    <form method=\"post\" action=\"admin/extension/config_save\" class=\"mainForm api-form\" data-api-msg=\"";
        // line 24
        echo gettext("Configuration updated");
        echo "\">
        <fieldset>
            <div class=\"rowElem noborder\">
                <label>";
        // line 27
        echo gettext("Forum points");
        echo "</label>
                <div class=\"formRight\">
                    <input type=\"radio\" name=\"forum_points_enable\" value=\"1\"";
        // line 29
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "forum_points_enable")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Enabled");
        echo "</label>
                    <input type=\"radio\" name=\"forum_points_enable\" value=\"0\"";
        // line 30
        if ((!$this->getAttribute((isset($context["params"]) ? $context["params"] : null), "forum_points_enable"))) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("Disabled");
        echo "</label>
                </div>
                <div class=\"fix\"></div>
            </div>

            <div id=\"forum_points_block\" ";
        // line 35
        if ((!$this->getAttribute((isset($context["params"]) ? $context["params"] : null), "forum_points_enable"))) {
            echo "style=\"display:none;\"";
        }
        echo ">
            <div class=\"rowElem\">
                <div class=\"formBottom moreFields\">
                    <ul>
                        <li class=\"sep txt\">Give</li>
                        <li style=\"width: 50px\"><input type=\"text\" name=\"points\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "points"), "html", null, true);
        echo "\" placeholder=\"0\"></li>
                        <li class=\"sep txt\">points if post length is longer than</li>
                        <li style=\"width: 50px\">
                            <input type=\"text\" name=\"post_length\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "post_length"), "html", null, true);
        echo "\" placeholder=\"0\"/>
                        </li>
                        <li class=\"sep txt\">symbols</li>
                    </ul>
                </div>
                <div class=\"fix\"></div>
            </div>
            
            <table class=\"tableStatic wide with-tbb\">
                <thead>
                    <tr>
                        <td style=\"width: 5%\">
                            <input type=\"checkbox\" id=\"perm-check\" /> 
                        </td>
                        <td>";
        // line 57
        echo gettext("Give points for posting in selected forums");
        echo "</td>
                    </tr>
                </thead>
                
                <tbody>
                ";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "forum_get_categories"));
        foreach ($context['_seq'] as $context["category"] => $context["forums"]) {
            // line 63
            echo "                <tr class=\"group\">
                    <th colspan=\"2\">";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : null), "html", null, true);
            echo "</th>
                </tr>
                ";
            // line 66
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["forums"]) ? $context["forums"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
                // line 67
                echo "                <tr>
                    <td>
                        <input type=\"checkbox\" name=\"points_forums[]\" value=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "id"), "html", null, true);
                echo "\" class=\"perm\" ";
                if (twig_in_filter($this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "id"), $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "points_forums"))) {
                    echo "checked=\"checked\"";
                }
                echo "/>
                    </td>
                    <td>";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : null), "title"), "html", null, true);
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forum'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 74
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['category'], $context['forums'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 75
        echo "                </tbody>
            </table>
            <br/>
            </div>
            
            <input type=\"submit\" value=\"";
        // line 80
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
            <input type=\"hidden\" name=\"ext\" value=\"mod_forum\" />
        </fieldset>
    </form>
</div>

";
    }

    // line 88
    public function block_js($context, array $blocks = array())
    {
        // line 89
        echo "<script type=\"text/javascript\">
    
\$(function() {
    \$('input[name=forum_points_enable]').click(function(){
        if(\$(this).val() == 1) {
            \$('#forum_points_block').slideDown();
        } else {
            \$('#forum_points_block').slideUp();
        }
    });

    \$('#perm-check').click(function(){
        if(\$('#perm-check').is(':checked')) {
            \$('.perm').prop('checked', true);
        } else {
            \$('.perm').prop('checked', false);
        }
        \$.uniform.update(\".perm\");
    });
});

</script>
";
    }

    public function getTemplateName()
    {
        return "mod_forum_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 89,  215 => 88,  204 => 80,  197 => 75,  191 => 74,  182 => 71,  173 => 69,  169 => 67,  165 => 66,  160 => 64,  157 => 63,  153 => 62,  145 => 57,  128 => 43,  122 => 40,  112 => 35,  100 => 30,  92 => 29,  87 => 27,  81 => 24,  78 => 23,  76 => 22,  70 => 19,  65 => 16,  62 => 15,  55 => 10,  49 => 9,  43 => 8,  40 => 7,  37 => 6,  31 => 3,  26 => 4,  24 => 2,);
    }
}
