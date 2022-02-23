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

/* success.html.twig */
class __TwigTemplate_1fa8f3a204c73151799177c53dcfc0273c7553efe14cb0648dc5d5d4bffec27f extends \Twig\Template
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
        echo "<h2>";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h2><br/>
";
        // line 2
        echo ($context["description"] ?? null);
        echo "
";
        // line 3
        if ((isset($context["custom_buttons"]) || array_key_exists("custom_buttons", $context))) {
            // line 4
            echo ($context["custom_buttons"] ?? null);
            echo "
";
        } else {
            // line 6
            echo "<div style=\"text-align: center; margin: 0 auto;\">
\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t<form action=\"";
            // line 8
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/manage"]), "html", null, true);
            echo "\" method=\"post\">
\t\t\t<tr>
\t\t\t\t<td style=\"border:0px; text-align: center;\">
\t\t\t\t\t<input type=\"submit\" name=\"Back\" value=\"Back\"/>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</form>
\t</table>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  46 => 6,  41 => 4,  39 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "success.html.twig", "/var/www/html/templates/kathrine/success.html.twig");
    }
}
