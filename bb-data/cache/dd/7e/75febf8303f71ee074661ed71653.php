<?php

/* mod_order_list.phtml */
class __TwigTemplate_dd7e75febf8303f71ee074661ed71653 extends Twig_Template
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
        // line 3
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("My Products & Services");
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"big-light-icon i-services\"></span></div>
            <h2>";
        // line 11
        echo gettext("Ordered Services");
        echo "</h2>
        </div>
        <div class=\"block\">

        <table class=\"with-border\">
            <thead>
                <tr>
                    <th>";
        // line 18
        echo gettext("Product/Service");
        echo "</th>
                    <th>";
        // line 19
        echo gettext("Price");
        echo "</th>
                    <th>";
        // line 20
        echo gettext("Next due date");
        echo "</th>
                    <th>";
        // line 21
        echo gettext("Status");
        echo "</th>
                    <th>&nbsp</th>
                </tr>
            </thead>

            <tbody>
                ";
        // line 27
        $context["orders"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "order_get_list", array(0 => array("per_page" => 10, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page"), "hide_addons" => 1)), "method");
        // line 28
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["orders"]) ? $context["orders"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["order"]) {
            // line 29
            echo "
                <tr class=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "\">
                    <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/service/manage"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 32
            echo twig_money($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "total"), $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "currency"));
            echo " ";
            if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "period")) {
                echo twig_period_title($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "period"));
            }
            echo "</td>
                    <td>";
            // line 33
            if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "expires_at")) {
                echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "expires_at")), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
                    <td>";
            // line 34
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status"));
            echo "</td>
                    <td class=\"actions\"><a class=\"bb-button\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/service/manage"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\"><span class=\"dark-icon i-drag\"></span></a></td>
                </tr>

                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "
                <tr>
                    <td colspan=\"5\">";
            // line 41
            echo gettext("The list is empty");
            echo "</td>
                </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 45
        echo "
            </tbody>

        </table>

            <div class=\"box\">
                <a class=\"bb-button bb-button-red\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("order"), "html", null, true);
        echo "\">";
        echo gettext("Order new service");
        echo "</a>
            </div>
        </div>
    </div>

";
        // line 56
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["orders"]) ? $context["orders"] : null))));
        // line 57
        echo "
";
    }

    public function getTemplateName()
    {
        return "mod_order_list.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 57,  158 => 56,  148 => 51,  140 => 45,  130 => 41,  126 => 39,  115 => 35,  111 => 34,  103 => 33,  95 => 32,  87 => 31,  83 => 30,  80 => 29,  74 => 28,  72 => 27,  63 => 21,  59 => 20,  55 => 19,  51 => 18,  41 => 11,  36 => 8,  33 => 7,  27 => 5,  22 => 3,);
    }
}
