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

/* install.config.html.twig */
class __TwigTemplate_167f6df41e183bedaa96c5f76c08e4baa45f332b676db5089641732e5a5414d9 extends \Twig\Template
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
        echo "<form action=\"";
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "install/\" method=\"post\" autocomplete=\"off\">
\t<input type=\"hidden\" name=\"step\" id=\"step\" value=\"database\" />
\t<table>
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "server_path", 1 => "mail_admin", 2 => "mail_address"]);
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 5
            echo "\t\t<tr>
\t\t\t<td>
\t\t\t\t<label for=\"vars_";
            // line 7
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">
\t\t\t\t\t<span>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute(($context["locale"] ?? null), ("step_config_" . $context["value"]), [], "array"), "html", null, true);
            echo "</span>
\t\t\t\t</label>
\t\t\t\t<br>
\t\t\t\t<input type=\"text\" name=\"vars[";
            // line 11
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
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["locale"] ?? null), (("step_config_" . $context["value"]) . "_desc"), [], "array"), "html", null, true);
            echo "</em>
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t<tr>
\t\t\t<td>
\t\t\t\t<label for=\"vars_date_timezone\">
\t\t\t\t\t<span>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["locale"] ?? null), "step_config_timezone", []), "html", null, true);
        echo "</span>
\t\t\t\t</label>
\t\t\t\t<br/>
\t\t\t\t<select name=\"vars[date_timezone]\" id=\"vars_date_timezone\">
\t\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 26
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["timezone"], "html", null, true);
            echo "\"";
            if ((( !(null === $this->getAttribute(($context["session"] ?? null), "var_date_timezone", [], "array")) && ($this->getAttribute(($context["session"] ?? null), "var_date_timezone", [], "array") == $context["timezone"])) || ((null === $this->getAttribute(($context["session"] ?? null), "var_date_timezone", [], "array")) && ($context["timezone"] == "Europe/Berlin")))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["timezone"], "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t\t</select>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<em>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["locale"] ?? null), "step_config_timezone_desc", []), "html", null, true);
        echo "</em>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<label for=\"vars_client\">
\t\t\t\t\t<span>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["locale"] ?? null), "step_config_client", []), "html", null, true);
        echo "</span>
\t\t\t\t</label>
\t\t\t\t<br/>
\t\t\t\t<select name=\"vars[client]\" id=\"vars_client\">
\t\t\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["version"]) {
            // line 42
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\"";
            if (( !(null === $this->getAttribute(($context["session"] ?? null), "var_client", [], "array")) && ($this->getAttribute(($context["session"] ?? null), "var_client", [], "array") == $context["id"]))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["version"], "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['version'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t\t\t</select>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<em>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["locale"] ?? null), "step_config_client_desc", []), "html", null, true);
        echo "</em>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<label for=\"vars_usage\">
\t\t\t\t\t<span>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["locale"] ?? null), "step_config_usage", []), "html", null, true);
        echo "</span>
\t\t\t\t</label>
\t\t\t\t<br/>
\t\t\t\t<input type=\"hidden\" value=\"0\" name=\"vars[usage]\">
\t\t\t\t<input type=\"checkbox\" name=\"vars[usage]\" id=\"vars_usage\" value=\"1\"";
        // line 57
        if (((null === $this->getAttribute(($context["session"] ?? null), "var_usage", [], "array")) || ($this->getAttribute(($context["session"] ?? null), "var_usage", [], "array") == 1))) {
            echo " checked";
        }
        echo "/>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<em>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["locale"] ?? null), "step_config_usage_desc", []), "html", null, true);
        echo "</em>
\t\t\t</td>
\t\t</tr>
\t</table>

\t";
        // line 65
        if ((isset($context["errors"]) || array_key_exists("errors", $context))) {
            // line 66
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 67
                echo "\t\t\t<p class=\"error\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</p>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "\t";
        }
        // line 70
        echo "\t";
        echo ($context["buttons"] ?? null);
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "install.config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 70,  203 => 69,  194 => 67,  189 => 66,  187 => 65,  179 => 60,  171 => 57,  164 => 53,  155 => 47,  150 => 44,  135 => 42,  131 => 41,  124 => 37,  115 => 31,  110 => 28,  95 => 26,  91 => 25,  84 => 21,  79 => 18,  69 => 14,  55 => 11,  49 => 8,  45 => 7,  41 => 5,  37 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "install.config.html.twig", "/var/www/html/system/templates/install.config.html.twig");
    }
}
