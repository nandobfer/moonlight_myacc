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

/* faq.html.twig */
class __TwigTemplate_0940c84453fda6a860fe89aefa2e75af7f4c839cfbcc3d77ef3b5a35e50797dd extends \Twig\Template
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
        echo "<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t<tr class=\"white\" bgcolor=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
        echo "\">
\t\t<td>
\t\t\t<b>FAQ</b>
\t\t</td>
\t\t<td align=\"right\">
\t\t\t<a href=\"#\" onclick=\"toggleAll(); return false;\">Toggle all</a>
\t\t</td>
\t\t";
        // line 9
        if (($context["canEdit"] ?? null)) {
            // line 10
            echo "\t\t<td style=\"width: 300px\">
\t\t\tOptions
\t\t</td>
\t\t";
        }
        // line 14
        echo "\t</tr>
\t";
        // line 15
        $context["i"] = 0;
        // line 16
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["faqs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 17
            echo "\t\t";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 18
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]), "html", null, true);
            echo "\">
\t\t<td colspan=\"2\" style=\"cursor: pointer;\" onclick=\"toggleVisibility('faq_";
            // line 19
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo "'); return false;\">
\t\t\t<b>";
            // line 20
            echo $this->getAttribute($context["faq"], "question", []);
            echo "</b>

\t\t\t<div id=\"faq_";
            // line 22
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo "\" style=\"display: none;\">";
            echo $this->getAttribute($context["faq"], "answer", []);
            echo "</div>
\t\t</td>
\t\t";
            // line 24
            if (($context["canEdit"] ?? null)) {
                // line 25
                echo "\t\t\t<td>
\t\t\t\t<a href=\"?subtopic=faq&action=edit&id=";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["faq"], "id", []), "html", null, true);
                echo "\" title=\"Edit\">
\t\t\t\t\t<img src=\"images/edit.png\"/>Edit
\t\t\t\t</a>
\t\t\t\t<a id=\"delete\" href=\"?subtopic=faq&action=delete&id=";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["faq"], "id", []), "html", null, true);
                echo "\" onclick=\"return confirm('Are you sure?');\" title=\"Delete\">
\t\t\t\t\t<img src=\"images/del.png\"/>Delete
\t\t\t\t</a>
\t\t\t\t<a href=\"?subtopic=faq&action=hide&id=";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["faq"], "id", []), "html", null, true);
                echo "\" title=\"";
                if (($this->getAttribute($context["faq"], "hidden", []) != 1)) {
                    echo "Hide";
                } else {
                    echo "Show";
                }
                echo "\">
\t\t\t\t\t<img src=\"images/";
                // line 33
                if (($this->getAttribute($context["faq"], "hidden", []) != 1)) {
                    echo "success";
                } else {
                    echo "error";
                }
                echo ".png\"/>";
                if (($this->getAttribute($context["faq"], "hidden", []) != 1)) {
                    echo "Hide";
                } else {
                    echo "Show";
                }
                // line 34
                echo "\t\t\t\t</a>
                ";
                // line 35
                if ((($context["i"] ?? null) != 1)) {
                    // line 36
                    echo "\t\t\t\t\t<a href=\"?subtopic=faq&action=moveup&id=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["faq"], "id", []), "html", null, true);
                    echo "\" title=\"Move up\">
\t\t\t\t\t\t<img src=\"images/icons/arrow_up.gif\"/>Move up
\t\t\t\t\t</a>
                ";
                }
                // line 40
                echo "                ";
                if ((($context["i"] ?? null) != ($context["last"] ?? null))) {
                    // line 41
                    echo "\t\t\t\t\t<a href=\"?subtopic=faq&action=movedown&id=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["faq"], "id", []), "html", null, true);
                    echo "\" title=\"Move down\">
\t\t\t\t\t\t<img src=\"images/icons/arrow_down.gif\"/>Move down
\t\t\t\t\t</a>
                ";
                }
                // line 45
                echo "\t\t\t</td>
\t\t";
            }
            // line 47
            echo "\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</table>

<script type=\"text/javascript\">
\tvar expanded = false;

\tfunction toggleVisibility(id)
\t{
\t\tvar tmp = document.getElementById(id);
\t\tif(tmp)
\t\t\ttmp.style.display = tmp.style.display == 'none' ? '' : 'none';
\t}

\tfunction toggleAll()
\t{
\t\tfor(i = 1; i < ";
        // line 63
        echo twig_escape_filter($this->env, (($context["i"] ?? null) + 1), "html", null, true);
        echo "; i++)
\t\t{
\t\t\tdocument.getElementById('faq_' + i).style.display = expanded ? 'none' : '';
\t\t}

\t\texpanded = !expanded;
\t}
</script>";
    }

    public function getTemplateName()
    {
        return "faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 63,  159 => 49,  152 => 47,  148 => 45,  140 => 41,  137 => 40,  129 => 36,  127 => 35,  124 => 34,  112 => 33,  102 => 32,  96 => 29,  90 => 26,  87 => 25,  85 => 24,  78 => 22,  73 => 20,  69 => 19,  64 => 18,  61 => 17,  56 => 16,  54 => 15,  51 => 14,  45 => 10,  43 => 9,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "faq.html.twig", "/var/www/html/system/templates/faq.html.twig");
    }
}
