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

/* forum.add_board.html.twig */
class __TwigTemplate_a3ed0c1cb5711ae42f3db3b707c9c2af98e81c08cdcd245f75bf63bda9759c13 extends \Twig\Template
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
\t";
        // line 2
        if ((($context["action"] ?? null) == "edit_board")) {
            // line 3
            echo "\t<input type=\"hidden\" name=\"id\" value=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" />
\t";
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
        echo " board</b></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td bgcolor=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
        echo "\">
\t\t\t\t<table border=\"0\" cellpadding=\"1\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Name:</td>
\t\t\t\t\t\t<td><input name=\"name\" value=\"";
        // line 14
        if ( !(null === ($context["name"] ?? null))) {
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        }
        echo "\" size=\"29\" maxlength=\"29\"/></td>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Description:</td>
\t\t\t\t\t\t<td><textarea name=\"description\" maxlength=\"300\" cols=\"50\" rows=\"5\">";
        // line 17
        if ( !(null === ($context["description"] ?? null))) {
            echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        }
        echo "</textarea></td>
\t\t\t\t\t<tr/>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Access:</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"access\">
\t\t\t\t\t\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["group"]) {
            // line 24
            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getId", [], "method"), "html", null, true);
            echo "\"";
            if ((($context["access"] ?? null) == $this->getAttribute($context["group"], "getId", [], "method"))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", [], "method"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Guild:</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"guild\">
\t\t\t\t\t\t\t\t<option value=\"0\"";
        // line 33
        if ((($context["guild"] ?? null) == 0)) {
            echo " selected";
        }
        echo ">----</option>
\t\t\t\t\t\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["guilds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["guild_"]) {
            // line 35
            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["guild_"], "id", []), "html", null, true);
            echo "\"";
            if ((($context["guild"] ?? null) == $this->getAttribute($context["guild_"], "id", []))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["guild_"], "name", []), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guild_'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
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
        return "forum.add_board.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 37,  123 => 35,  119 => 34,  113 => 33,  104 => 26,  89 => 24,  85 => 23,  74 => 17,  66 => 14,  59 => 10,  47 => 7,  43 => 5,  37 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forum.add_board.html.twig", "/var/www/html/system/templates/forum.add_board.html.twig");
    }
}
