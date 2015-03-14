<?php

/* mod_servicehosting_hp.phtml */
class __TwigTemplate_66581cd7bfdaff012af5cc2a34e5f675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_default.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
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
        echo "Hosting management";
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
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("servicehosting"), "html", null, true);
        echo "\">";
        echo gettext("Hosting plans and servers");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "name"), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "<div class=\"widget\">

    <div class=\"head\">
        <h5 class=\"iList\">Manage hosting plan</h5>
    </div>

    <form method=\"post\" action=\"admin/servicehosting/hp_update\" class=\"mainForm api-form\" data-api-msg=\"Hosting plan updated\">
        <fieldset>
            <div class=\"rowElem noborder\">
                <label>";
        // line 23
        echo gettext("Name");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"name\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "name"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"Unique name to identify this hosting plan\">
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label>";
        // line 31
        echo gettext("Disk quota");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"quota\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "quota"), "html", null, true);
        echo "\" placeholder=\"\">
                </div>
                <div class=\"fix\"></div>
            </div>
            
            <div class=\"rowElem\">
                <label>";
        // line 39
        echo gettext("Bandwidth");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"bandwidth\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "bandwidth"), "html", null, true);
        echo "\" placeholder=\"\">
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>";
        // line 46
        echo gettext("Max Addon domains");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"max_addon\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "max_addon"), "html", null, true);
        echo "\" placeholder=\"\">
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>";
        // line 53
        echo gettext("Max FTP accounts");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"max_ftp\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "max_ftp"), "html", null, true);
        echo "\" placeholder=\"\">
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>";
        // line 60
        echo gettext("Max SQL Databases");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"max_sql\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "max_sql"), "html", null, true);
        echo "\" placeholder=\"\">
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>";
        // line 67
        echo gettext("Max Email Accounts");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"max_pop\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "max_pop"), "html", null, true);
        echo "\" placeholder=\"\">
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>";
        // line 74
        echo gettext("Max Subdomains");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"max_sub\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "max_sub"), "html", null, true);
        echo "\" placeholder=\"\">
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>";
        // line 81
        echo gettext("Max Parked Domains");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"max_park\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "max_park"), "html", null, true);
        echo "\" placeholder=\"\">
                </div>
                <div class=\"fix\"></div>
            </div>
            </fieldset>
        
        ";
        // line 89
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "config")) > 0)) {
            // line 90
            echo "            <fieldset>
                <legend>";
            // line 91
            echo gettext("Server manager specific parameters");
            echo "</legend>
            ";
            // line 92
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "config"));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 93
                echo "            <div class=\"rowElem\">
                <label class=\"topLabel\">";
                // line 94
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo ":</label>
                    <div class=\"formBottom\">
                        <textarea rows=\"2\" cols=\"\" name=\"config[";
                // line 96
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "]\">";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "</textarea>
                    </div>
                <div class=\"fix\"></div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 101
            echo "            </fieldset>
            ";
        }
        // line 103
        echo "            
            <fieldset>
            <input type=\"submit\" value=\"";
        // line 105
        echo gettext("Update hosting plan");
        echo "\" class=\"greyishBtn submitForm\" />
            <input type=\"hidden\" name=\"id\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "id"), "html", null, true);
        echo "\"/>
            </fieldset>
    </form>

    <div class=\"help\">
        <h3>";
        // line 111
        echo gettext("Hosting plan additional parameters");
        echo "</h3>
        <p>";
        // line 112
        echo gettext("Depending on server manager used to setup hosting account you may require provide additional parameters. List of parameters server managers requires you can find on extensions page.");
        echo "</p>
    </div>

    <form method=\"post\" action=\"admin/servicehosting/hp_update\" class=\"mainForm save api-form\" data-api-reload=\"1\">
        <fieldset>
                <div class=\"floatleft twoOne\">
                <div class=\"rowElem noborder pb0\"><label class=\"topLabel\">Parameter name:</label><div class=\"formBottom\"><input type=\"text\" name=\"new_config_name\"></div><div class=\"fix\"></div></div>
                </div>
                <div class=\"floatright twoOne\">
                <div class=\"rowElem noborder\"><label class=\"topLabel\">Parameter value:</label><div class=\"formBottom\"><textarea rows=\"7\" cols=\"\" name=\"new_config_value\"></textarea></div><div class=\"fix\"></div></div>
                <input type=\"submit\" value=\"";
        // line 122
        echo gettext("Add new configuration field");
        echo "\" class=\"greyishBtn submitForm\" />
                </div>
                <div class=\"fix\"></div>
            <input type=\"hidden\" name=\"id\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hp"]) ? $context["hp"] : null), "id"), "html", null, true);
        echo "\"/>
        </fieldset>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "mod_servicehosting_hp.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 125,  266 => 122,  253 => 112,  249 => 111,  241 => 106,  237 => 105,  233 => 103,  229 => 101,  216 => 96,  211 => 94,  208 => 93,  204 => 92,  200 => 91,  197 => 90,  195 => 89,  186 => 83,  181 => 81,  173 => 76,  168 => 74,  160 => 69,  155 => 67,  147 => 62,  142 => 60,  134 => 55,  129 => 53,  121 => 48,  116 => 46,  108 => 41,  103 => 39,  94 => 33,  89 => 31,  80 => 25,  75 => 23,  64 => 14,  61 => 13,  54 => 9,  48 => 8,  42 => 7,  39 => 6,  36 => 5,  30 => 2,  25 => 3,);
    }
}
