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

/* news.archive.html.twig */
class __TwigTemplate_0bca96aee13c2405634aa8717eb6bc7e0bbb31ed6e9f6a1872c3b798c9e6fd95 extends \Twig\Template
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
        echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t<tr bgcolor=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
        echo "\">
\t\t<td colspan=\"3\" class=\"white\"><b>News archive</b></td>
\t</tr>

\t";
        // line 6
        $context["i"] = 0;
        // line 7
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["newses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 8
            echo "\t";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 9
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]), "html", null, true);
            echo "\">
\t\t<td width=4%>
\t\t\t<div style=\"text-align:center\">
\t\t\t\t<img src=\"";
            // line 12
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/news/icon_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "icon_id", []), "html", null, true);
            echo "_small.gif\"/>
\t\t\t</div>
\t\t</td>
\t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["news"], "date", []), "j.n.Y"), "html", null, true);
            echo "</td>
\t\t<td>
\t\t\t<b><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "link", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "title", []), "html", null, true);
            echo "</a></b>
\t\t</td>
\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "news.archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 21,  70 => 17,  65 => 15,  57 => 12,  50 => 9,  47 => 8,  42 => 7,  40 => 6,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "news.archive.html.twig", "/var/www/html/system/templates/news.archive.html.twig");
    }
}
