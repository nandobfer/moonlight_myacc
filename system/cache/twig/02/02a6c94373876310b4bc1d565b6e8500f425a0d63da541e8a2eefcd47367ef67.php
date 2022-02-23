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

/* install.admin.html.twig */
class __TwigTemplate_69120b1e7a7cbbe58dddf8695ece0719ea2d443b84e16c028db4f3363b4959c1 extends \Twig\Template
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
        echo "<style>
\ttr, td {
\t\tborder-bottom: 1px solid #ddd;
\t\tpadding: 15px;
\t}
</style>
<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "install/\" method=\"post\" autocomplete=\"off\">
\t<input type=\"hidden\" name=\"step\" id=\"step\" value=\"finish\" />
\t<table>
\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "email", 1 => ($context["account"] ?? null), 2 => "password", 3 => "player_name"]);
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 11
            echo "\t\t<tr>
\t\t\t<td>
\t\t\t\t<label for=\"vars_";
            // line 13
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">
\t\t\t\t\t<span>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["locale"] ?? null), ("step_admin_" . $context["value"]), [], "array"), "html", null, true);
            echo "</span>
\t\t\t\t</label>
\t\t\t\t<br/>
\t\t\t\t<input type=\"text\" name=\"vars[";
            // line 17
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "]\" id=\"vars_";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
            if ( !(null === $this->getAttribute(($context["session"] ?? null), ("var_" . $context["value"]), [], "array"))) {
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["session"] ?? null), ("var_" . $context["value"]), [], "array"), "html", null, true);
                echo "\"";
            }
            echo "/>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<em>";
            // line 20
            echo $this->getAttribute(($context["locale"] ?? null), (("step_admin_" . $context["value"]) . "_desc"), [], "array");
            echo "</em>
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t</table>

\t";
        // line 26
        if ((isset($context["errors"]) || array_key_exists("errors", $context))) {
            // line 27
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 28
                echo "\t\t\t<p class=\"error\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</p>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t";
        }
        // line 31
        echo "\t";
        echo ($context["buttons"] ?? null);
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "install.admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 31,  106 => 30,  97 => 28,  92 => 27,  90 => 26,  86 => 24,  76 => 20,  62 => 17,  56 => 14,  52 => 13,  48 => 11,  44 => 10,  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "install.admin.html.twig", "/var/www/html/system/templates/install.admin.html.twig");
    }
}
