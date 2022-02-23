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

/* forum.boards.html.twig */
class __TwigTemplate_91be4e736646d0b46c23eee976838bd9da4ac8c53470121b1f41abd9ea2773d1 extends \Twig\Template
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
        echo "<b>Boards</b>
<table width=\"100%\">
\t<tr bgcolor=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
        echo "\" class=\"white\">
\t\t<td>
\t\t\t<span style=\"font-size: 10px\"><b>Board</b></span>
\t\t</td>
\t\t<td>
\t\t\t<span style=\"font-size: 10px\"><b>Posts</b></span>
\t\t</td>
\t\t<td>
\t\t\t<span style=\"font-size: 10px\"><b>Threads</b></span>
\t\t</td>
\t\t<td align=\"center\">
\t\t\t<span style=\"font-size: 10px\"><b>Last Post</b></span>
\t\t</td>
\t\t";
        // line 16
        if (($context["canEdit"] ?? null)) {
            // line 17
            echo "\t\t\t<td>
\t\t\t\t<span style=\"font-size: 10px\"><b>Options</b></span>
\t\t\t</td>
\t\t";
        }
        // line 21
        echo "\t</tr>
\t";
        // line 22
        $context["i"] = 0;
        // line 23
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["boards"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["board"]) {
            // line 24
            echo "\t";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 25
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]), "html", null, true);
            echo "\">
\t\t<td>
\t\t\t<a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "link", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "name", []), "html", null, true);
            echo "</a><br /><small>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "description", []), "html", null, true);
            echo "</small>
\t\t</td>
\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "posts", []), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "threads", []), "html", null, true);
            echo "</td>
\t\t<td>
\t\t";
            // line 32
            if ( !(null === $this->getAttribute($this->getAttribute($context["board"], "last_post", []), "name", []))) {
                // line 33
                echo "\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["board"], "last_post", []), "date", []), "d.m.y H:i:s"), "html", null, true);
                echo "<br/>by ";
                echo $this->getAttribute($this->getAttribute($context["board"], "last_post", []), "player_link", []);
                echo "
\t\t";
            } else {
                // line 35
                echo "\t\tNo posts
\t\t";
            }
            // line 37
            echo "\t\t</td>
\t\t";
            // line 38
            if (($context["canEdit"] ?? null)) {
                // line 39
                echo "\t\t\t<td>
\t\t\t\t<a href=\"?subtopic=forum&action=edit_board&id=";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "id", []), "html", null, true);
                echo "\" title=\"Edit\">
\t\t\t\t\t<img src=\"images/edit.png\"/>Edit
\t\t\t\t</a>
\t\t\t\t<a id=\"delete\" href=\"?subtopic=forum&action=delete_board&id=";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "id", []), "html", null, true);
                echo "\" onclick=\"return confirm('Are you sure?');\" title=\"Delete\">
\t\t\t\t\t<img src=\"images/del.png\"/>Delete
\t\t\t\t</a>
\t\t\t\t<a href=\"?subtopic=forum&action=hide_board&id=";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "id", []), "html", null, true);
                echo "\" title=\"";
                if (($this->getAttribute($context["board"], "hidden", []) != 1)) {
                    echo "Hide";
                } else {
                    echo "Show";
                }
                echo "\">
\t\t\t\t\t<img src=\"images/";
                // line 47
                if (($this->getAttribute($context["board"], "hidden", []) != 1)) {
                    echo "success";
                } else {
                    echo "error";
                }
                echo ".png\"/>";
                if (($this->getAttribute($context["board"], "hidden", []) != 1)) {
                    echo "Hide";
                } else {
                    echo "Show";
                }
                // line 48
                echo "\t\t\t\t</a>
\t\t\t\t";
                // line 49
                if ((($context["i"] ?? null) != 1)) {
                    // line 50
                    echo "\t\t\t\t\t<a href=\"?subtopic=forum&action=moveup_board&id=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "id", []), "html", null, true);
                    echo "\" title=\"Move up\">
\t\t\t\t\t\t<img src=\"images/icons/arrow_up.gif\"/>Move up
\t\t\t\t\t</a>
\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t";
                if ((($context["i"] ?? null) != ($context["last"] ?? null))) {
                    // line 55
                    echo "\t\t\t\t\t<a href=\"?subtopic=forum&action=movedown_board&id=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "id", []), "html", null, true);
                    echo "\" title=\"Move down\">
\t\t\t\t\t\t<img src=\"images/icons/arrow_down.gif\"/>Move down
\t\t\t\t\t</a>
\t\t\t\t";
                }
                // line 59
                echo "\t\t\t</td>
\t\t";
            }
            // line 61
            echo "\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['board'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "forum.boards.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 63,  179 => 61,  175 => 59,  167 => 55,  164 => 54,  156 => 50,  154 => 49,  151 => 48,  139 => 47,  129 => 46,  123 => 43,  117 => 40,  114 => 39,  112 => 38,  109 => 37,  105 => 35,  97 => 33,  95 => 32,  90 => 30,  86 => 29,  77 => 27,  71 => 25,  68 => 24,  63 => 23,  61 => 22,  58 => 21,  52 => 17,  50 => 16,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forum.boards.html.twig", "/var/www/html/system/templates/forum.boards.html.twig");
    }
}
