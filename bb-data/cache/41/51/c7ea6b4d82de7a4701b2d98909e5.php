<?php

/* partial_extensions.phtml */
class __TwigTemplate_4151c7ea6b4d82de7a4701b2d98909e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 2
            echo "<div class=\"help\">
    <h5>";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true);
            echo "</h5>
</div>
";
        }
        // line 6
        echo "<table class=\"tableStatic wide\">
    <thead>
        <tr>
            <td>&nbsp;</td>
            <td style=\"width: 30%\">Extension</td>
            <td>Description</td>
            <td width=\"18%\">&nbsp;</td>
        </tr>
    </thead>

    <tbody>
        ";
        // line 17
        $context["extensions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "extension_get_latest", array(0 => array("type" => (isset($context["type"]) ? $context["type"] : null))), "method");
        // line 18
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 19
            echo "        <tr>
            <td><img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "icon_url"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "name"), "html", null, true);
            echo "\" style=\"width: 32px; height: 32px;\"/></td>
            <td>
                <a class=\"bb-button\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "project_url"), "html", null, true);
            echo "\" target=\"_blank\" title=\"View extension details\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "name"), 40), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "version"), "html", null, true);
            echo "</a>
                <br/>by <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "author_url"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "author"), "html", null, true);
            echo "</a>
            </td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "description"), 150), "html", null, true);
            echo "</td>
            <td class=\"actions\">
                <a class=\"bb-button btn14 api-link\" data-api-confirm=\"By installing '";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "name"), "html", null, true);
            echo "' you agree with terms and conditions. Install only extensions you trust. Continue?\" data-api-reload=\"1\" href=\"admin/extension/install?type=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "type"), "html", null, true);
            echo "&id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "id"), "html", null, true);
            echo "\" title=\"Install extension\"><img src=\"images/icons/dark/cog.png\" alt=\"\"></a>
                <a class=\"bb-button btn14\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "project_url"), "html", null, true);
            echo "\" target=\"_blank\" title=\"Details\"><img src=\"images/icons/dark/globe.png\" alt=\"\"></a>
                <a class=\"bb-button btn14\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "download_url"), "html", null, true);
            echo "\" title=\"Download ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "name"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/download.png\" alt=\"\"></a>
            </td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "        <tr>
            <td colspan=\"4\" class=\"aligncenter\"><a href=\"http://extensions.boxbilling.com/\" target=\"_blank\">Explore BoxBilling extensions</a></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 37
        echo "    </tbody>
    <tfoot>
        <tr>
            <td colspan=\"4\"></td>
        </tr>
    </tfoot>

</table>";
    }

    public function getTemplateName()
    {
        return "partial_extensions.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 37,  102 => 33,  91 => 29,  87 => 28,  79 => 27,  74 => 25,  67 => 23,  59 => 22,  49 => 19,  43 => 18,  41 => 17,  28 => 6,  22 => 3,  19 => 2,  17 => 1,  612 => 278,  608 => 276,  599 => 272,  597 => 271,  592 => 268,  581 => 262,  576 => 260,  573 => 259,  568 => 258,  560 => 253,  556 => 252,  551 => 249,  549 => 248,  536 => 242,  532 => 241,  528 => 240,  522 => 239,  518 => 238,  511 => 234,  507 => 233,  504 => 232,  502 => 231,  493 => 225,  486 => 221,  481 => 219,  472 => 213,  467 => 211,  459 => 206,  454 => 204,  445 => 198,  440 => 196,  431 => 190,  427 => 189,  417 => 181,  407 => 177,  403 => 176,  397 => 175,  392 => 173,  389 => 172,  385 => 171,  377 => 166,  368 => 160,  364 => 159,  352 => 150,  344 => 145,  340 => 144,  335 => 142,  326 => 136,  322 => 135,  317 => 133,  308 => 127,  304 => 126,  299 => 124,  288 => 116,  277 => 108,  266 => 100,  255 => 92,  247 => 86,  236 => 84,  232 => 83,  226 => 80,  216 => 73,  207 => 67,  203 => 66,  193 => 58,  183 => 54,  177 => 53,  168 => 51,  165 => 50,  157 => 49,  147 => 48,  137 => 47,  132 => 45,  128 => 44,  124 => 43,  120 => 42,  117 => 41,  113 => 40,  104 => 34,  100 => 33,  96 => 32,  92 => 31,  88 => 30,  84 => 29,  75 => 23,  71 => 22,  60 => 14,  56 => 13,  52 => 20,  48 => 11,  44 => 10,  38 => 6,  35 => 5,  29 => 2,  24 => 3,);
    }
}
