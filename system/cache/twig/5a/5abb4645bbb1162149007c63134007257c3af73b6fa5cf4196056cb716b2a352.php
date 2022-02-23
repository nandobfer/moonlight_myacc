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

/* faq.form.html.twig */
class __TwigTemplate_2cd6f1bedecb4ae7cc7e757acb6aa153f49e05a9f2c415dd9e683f3dc205665b extends \Twig\Template
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
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 2
        if ((($context["action"] ?? null) == "edit")) {
            // line 3
            echo "        <input type=\"hidden\" name=\"id\" value=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" />
    ";
        }
        // line 5
        echo "\t<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"4\">
\t\t<tr>
\t\t\t<td bgcolor=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
        echo "\" class=\"white\"><b>";
        if ((($context["action"] ?? null) == "edit")) {
            echo "Edit";
        } else {
            echo "Add";
        }
        echo " FAQ</b></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td bgcolor=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
        echo "\">
\t\t\t\t<table border=\"0\" cellpadding=\"1\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Question:</td>
\t\t\t\t\t\t<td><input name=\"question\" value=\"";
        // line 14
        if ( !(null === ($context["question"] ?? null))) {
            echo twig_escape_filter($this->env, ($context["question"] ?? null), "html", null, true);
        }
        echo "\" size=\"29\" maxlength=\"29\"/></td>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Answer:</td>
\t\t\t\t\t\t<td><textarea name=\"answer\" maxlength=\"300\" cols=\"50\" rows=\"5\">";
        // line 17
        if ( !(null === ($context["answer"] ?? null))) {
            echo twig_escape_filter($this->env, ($context["answer"] ?? null), "html", null, true);
        }
        echo "</textarea></td>
\t\t\t\t\t<tr/>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"2\" align=\"center\"><input type=\"submit\" value=\"Submit\"/>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t</table>
</form>";
    }

    public function getTemplateName()
    {
        return "faq.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 17,  66 => 14,  59 => 10,  47 => 7,  43 => 5,  37 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "faq.form.html.twig", "/var/www/html/system/templates/faq.form.html.twig");
    }
}
