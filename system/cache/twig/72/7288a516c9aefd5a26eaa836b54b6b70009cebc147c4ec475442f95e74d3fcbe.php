<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* menu.js.html.twig */
class __TwigTemplate_53c9ad1575492714683da7d6ed851ee235f21b4e31bb3552220f13a65d21a65b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "var list = new Array();
";
        // line 2
        $context["i"] = 0;
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 4
            echo "\t";
            if ((($this->getAttribute($context["cat"], "id", []) != "shops") || $this->getAttribute(($context["config"] ?? null), "gifts_system", []))) {
                // line 5
                echo "\tlist[";
                echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
                echo "] = '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", []), "html", null, true);
                echo "';
\t";
            }
            // line 7
            $context["i"] = (($context["i"] ?? null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
function initMenu()
{
\tvar length = list.length;
\tfor(i = 0; i < length; i++)
\t{
\t\tif(list[i] == category)
\t\t{
\t\t\tdocument.getElementById(list[i]).className = 'tab-active';
\t\t\tdocument.getElementById(list[i] + \"-submenu\").style.display = 'block';
\t\t}
\t\telse
\t\t{
\t\t\tdocument.getElementById(list[i]).className = 'tab';
\t\t\tdocument.getElementById(list[i] + \"-submenu\").style.display = 'none';
\t\t}
\t}
}

function menuSwitch(cat)
{
\tcategory = cat;
\tinitMenu();
}
";
    }

    public function getTemplateName()
    {
        return "menu.js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  50 => 7,  42 => 5,  39 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "menu.js.html.twig", "/var/www/html/templates/kathrine/menu.js.html.twig");
    }
}
