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

/* highscores.html.twig */
class __TwigTemplate_003cb4b0a6395db91509f2a781236b546d7ea7e124c45f56b76559e44212f3d4 extends \Twig\Template
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
        echo "<style type=\"text/css\">
\t.top_level {
\t\tposition: absolute;
\t\ttop: 29px;
\t\tleft: 6px;
\t\theight: 160px;
\t\twidth: 168px;
\t\tz-index: 20;
\t\tpadding-top: 6px;
\t\tfont-family: Tahoma, Geneva, sans-serif;
\t\tfont-size: 9.2pt;
\t\tcolor: #FFF;
\t\tfont-weight: bold;
\t\ttext-align: right;
\t\ttext-decoration: inherit;
\t\ttext-shadow: 0.1em 0.1em #333
\t}

\t#Topbar a {
\t\ttext-decoration: none;
\t}

\t.online {
\t\tcolor: #008000;
\t}

\t.offline {
\t\tcolor: #FF0000;
\t}

\ta.topfont {
\t\tfont-family: Verdana, Arial, Helvetica, sans-serif;
\t\tfont-size: 11px;
\t\ttext-decoration: none
\t}
\ta:hover.topfont {
\t\tfont-family: Verdana, Arial, Helvetica, sans-serif;
\t\tfont-size: 11px;
\t\tcolor: #CCC;
\t\ttext-decoration:none
\t}
</style>

<div id=\"Topbar\" class=\"Themebox\" style=\"background-image:url(";
        // line 44
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/themeboxes/highscores/highscores.png);\">
\t<div class=\"top_level\" style=\"background:url(";
        // line 45
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/themeboxes/bg_top.png)\" align=\"\t\">
    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["topPlayers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 47
            echo "\t    <div style=\"text-align:left\"><a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getPlayerLink')->getCallable(), [$this->getAttribute($context["player"], "name", [], "array"), false]), "html", null, true);
            echo " \" class=\"topfont ";
            if ($this->getAttribute($context["player"], "online", [], "array")) {
                echo "online";
            } else {
                echo "offline";
            }
            echo "\">
\t\t\t";
            // line 48
            if ($this->getAttribute(($context["config"] ?? null), "online_outfit", [])) {
                // line 49
                echo "\t\t\t\t<img style=\"position:absolute;margin-top:";
                if (twig_in_filter($this->getAttribute($context["player"], "looktype", []), [0 => 75, 1 => 266, 2 => 302])) {
                    echo "-20px;margin-left:-0px;";
                } else {
                    echo "-45px;margin-left:-25px;";
                }
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "outfit", []), "html", null, true);
                echo "\" alt=\"player outfit\"/>
\t\t\t";
            }
            // line 51
            echo "\t\t\t\t<span style=\"color: #CCC; margin-left: 40px\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "rank", [], "array"), "html", null, true);
            echo " - </span>
\t\t\t\t";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "name", [], "array"), "html", null, true);
            echo "
\t\t\t<br>
\t\t\t<small><span style=\"color: white; margin-left: 50px\">Level: (";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "level", [], "array"), "html", null, true);
            echo ")</span></small>
\t\t\t<br>
\t\t</a>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t<div class=\"Bottom\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/general/box-bottom.gif); top: 159px;; left:-5px;\">
\t</div>
</div>
</div>
<br/><br/><br/>
";
    }

    public function getTemplateName()
    {
        return "highscores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 59,  122 => 54,  117 => 52,  112 => 51,  100 => 49,  98 => 48,  87 => 47,  83 => 46,  79 => 45,  75 => 44,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "highscores.html.twig", "/var/www/html/templates/tibiacom/boxes/templates/highscores.html.twig");
    }
}
