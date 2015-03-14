<?php

/* mod_system_index.phtml */
class __TwigTemplate_69bc2f428269982382613fb430fb8e7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
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
        // line 5
        $context["params"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_get_params");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Settings");
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 11
        echo gettext("Settings");
        echo "</a></li>
        <li><a href=\"#tab-license\">";
        // line 12
        echo gettext("License");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div id=\"tab-index\" class=\"tab_content nopadding\">
            ";
        // line 18
        echo $context["mf"]->gettable_search();
        echo "
            <table class=\"tableStatic wide\">
                <tbody>
                    ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "extension_get_list", array(0 => twig_array_merge(array("active" => 1, "has_settings" => 1), (isset($context["request"]) ? $context["request"] : null))), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ext"]) {
            // line 22
            echo "                    <tr ";
            echo (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) ? ("style=\"border-top:0;\"") : (""));
            echo ">
                        <td style=\"width: 32px;\"><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("extension/settings"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ext"]) ? $context["ext"] : null), "id"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["ext"]) ? $context["ext"] : null), "icon_url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["ext"]) ? $context["ext"] : null), "icon_url"), "images/icons/middlenav/cog.png")) : ("images/icons/middlenav/cog.png")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ext"]) ? $context["ext"] : null), "name"), "html", null, true);
            echo "\" style=\"width: 32px; height: 32px;\"/></a></td>
                        <td style=\"border: 0; font-weight: bold;\"><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("extension/settings"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ext"]) ? $context["ext"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ext"]) ? $context["ext"] : null), "name"), "html", null, true);
            echo "</a></td>
                        <td style=\"width: 5%; border: 0;\"><a class=\"bb-button btn14\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_bb_admin_link_filter("extension/settings"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ext"]) ? $context["ext"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/play.png\" alt=\"\" class=\"icon\" title=\"";
            echo gettext("Module settings");
            echo "\"></a></td>
                    </tr>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ext'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 28
        echo "                </tbody>
            </table>
        </div>

        <div id=\"tab-license\" class=\"tab_content nopadding\">

            <div class=\"help\">
                <h3>";
        // line 35
        echo gettext("License");
        echo "</h3>
                <p>";
        // line 36
        echo gettext("After purchase you have received an e-mail with license key. Update license key to unlock all features of BoxBilling");
        echo "</p>
                <p>";
        // line 37
        echo gettext("To change license key, change <em>BB_LICENSE</em> value in <em>bb-config.php</em> file");
        echo ". </p>
                <p><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("filemanager/ide"), "html", null, true);
        echo "?open=bb-config.php\" target=\"_blank\" target=\"_blank\">";
        echo gettext("Edit bb-config.php file");
        echo "</a> (File must be writable by web server)</p>
            </div>

            ";
        // line 41
        $context["env"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_env");
        // line 42
        echo "            ";
        $context["license"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_license_info");
        // line 43
        echo "            <table class=\"tableStatic wide\">
                <tbody>
                    <tr class=\"noborder\">
                        <td>";
        // line 46
        echo gettext("Licensed to");
        echo "</td>
                        <td align=\"right\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["license"]) ? $context["license"] : null), "licensed_to"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>";
        // line 50
        echo gettext("Key");
        echo "</td>
                        <td align=\"right\">";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["license"]) ? $context["license"] : null), "key"), "html", null, true);
        echo "</td>
                    </tr>

                    ";
        // line 54
        if ($this->getAttribute((isset($context["license"]) ? $context["license"] : null), "expires_at")) {
            // line 55
            echo "                    <tr>
                        <td>";
            // line 56
            echo gettext("Expires at");
            echo "</td>
                        <td align=\"right\">";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["license"]) ? $context["license"] : null), "expires_at"), "Y-m-d"), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        // line 60
        echo "                    
                    <tr>
                        <td>";
        // line 62
        echo gettext("IP");
        echo "</td>
                        <td align=\"right\">";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "ip"), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "mod_system_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 63,  204 => 62,  200 => 60,  194 => 57,  190 => 56,  187 => 55,  185 => 54,  179 => 51,  175 => 50,  169 => 47,  165 => 46,  160 => 43,  157 => 42,  155 => 41,  147 => 38,  143 => 37,  139 => 36,  135 => 35,  126 => 28,  105 => 25,  97 => 24,  87 => 23,  82 => 22,  65 => 21,  59 => 18,  50 => 12,  46 => 11,  40 => 7,  37 => 6,  31 => 3,  26 => 5,  24 => 4,  22 => 2,);
    }
}
