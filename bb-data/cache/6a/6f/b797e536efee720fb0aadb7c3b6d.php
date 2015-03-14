<?php

/* mod_support_canned_selector.phtml */
class __TwigTemplate_6a6fb797e536efee720fb0aadb7c3b6d extends Twig_Template
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
        echo "<div class=\"canned_response\" style=\"position: relative;\">
    <select name=\"canned_response\" class=\"canned\" style=\"position: absolute; top: 10px; right: 10px;\">
        <option value=\"\">-- Canned Response --</option>
        ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_canned_pairs"));
        foreach ($context['_seq'] as $context["ctitle"] => $context["cat"]) {
            // line 5
            echo "            <optgroup label=\"";
            echo twig_escape_filter($this->env, (isset($context["ctitle"]) ? $context["ctitle"] : null), "html", null, true);
            echo "\">
                ";
            // line 6
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cat"]) ? $context["cat"] : null));
            foreach ($context['_seq'] as $context["mid"] => $context["mtitle"]) {
                // line 7
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["mid"]) ? $context["mid"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["mtitle"]) ? $context["mtitle"] : null), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['mid'], $context['mtitle'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 9
            echo "            </optgroup>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['ctitle'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 11
        echo "    </select>
</div>


<script type=\"text/javascript\">
\$(function() {
    \$('select.canned').change(function(){
        var id = \$(this).val();
        if(id) api.get('admin/support/canned_get', {id:id}, function(result){ bb.insertToTextarea('rt', result.content) });
        return false;
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_support_canned_selector.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  46 => 9,  35 => 7,  31 => 6,  26 => 5,  22 => 4,  17 => 1,  727 => 313,  712 => 301,  705 => 297,  681 => 275,  678 => 274,  667 => 265,  661 => 263,  659 => 262,  650 => 256,  646 => 255,  642 => 254,  638 => 253,  631 => 249,  627 => 248,  621 => 244,  619 => 243,  613 => 242,  606 => 237,  587 => 232,  583 => 231,  577 => 228,  569 => 227,  563 => 225,  546 => 224,  530 => 213,  523 => 208,  514 => 205,  511 => 204,  501 => 201,  497 => 200,  493 => 199,  489 => 198,  485 => 197,  482 => 196,  476 => 195,  474 => 194,  448 => 171,  444 => 170,  434 => 165,  430 => 163,  412 => 159,  403 => 157,  399 => 156,  392 => 155,  375 => 154,  365 => 147,  360 => 145,  353 => 141,  348 => 139,  339 => 133,  334 => 131,  325 => 125,  320 => 123,  311 => 117,  306 => 115,  292 => 103,  286 => 101,  284 => 100,  278 => 98,  272 => 96,  270 => 95,  261 => 88,  251 => 85,  247 => 84,  244 => 83,  242 => 82,  239 => 81,  229 => 78,  225 => 77,  222 => 76,  220 => 75,  217 => 74,  211 => 71,  207 => 70,  204 => 69,  202 => 68,  199 => 67,  197 => 66,  189 => 61,  185 => 60,  179 => 56,  164 => 54,  160 => 53,  155 => 51,  147 => 46,  142 => 44,  127 => 40,  123 => 39,  116 => 35,  112 => 34,  100 => 25,  92 => 24,  88 => 23,  84 => 22,  77 => 18,  72 => 15,  69 => 14,  60 => 9,  54 => 8,  48 => 7,  45 => 6,  42 => 5,  32 => 3,  27 => 13,  25 => 2,);
    }
}
