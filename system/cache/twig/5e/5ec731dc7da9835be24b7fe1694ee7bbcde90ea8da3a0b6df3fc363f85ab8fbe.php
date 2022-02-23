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

/* guilds.list.html.twig */
class __TwigTemplate_77875aa7429542a0f851bcc12f9bab8b2f313dbfe534151831ae463bd0b1a94a extends \Twig\Template
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
        echo "<div class=\"TableContainer\">
    <div class=\"CaptionContainer\">
        <div class=\"CaptionInnerContainer\">
            <span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 4
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
            <span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 5
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
            <span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 6
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
            <span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 7
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
            <div class=\"Text\">Active Guilds on ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo "</div>
            <span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 9
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
            <span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 10
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
            <span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 11
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
            <span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 12
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
        </div>
    </div>

    <table class=\"Table3\">
        <tbody>
            <tr>
                <td>
                    <div class=\"InnerTableContainer\">
                        <table style=\"width:100%;\">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class=\"TableShadowContainerRightTop\">
                                            <div class=\"TableShadowRightTop\" style=\"background-image:url(";
        // line 26
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-shadow-rt.gif);\"></div>
                                        </div>
                                        <div class=\"TableContentAndRightShadow\" style=\"background-image:url(";
        // line 28
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-shadow-rm.gif);\">
                                            <div class=\"TableContentContainer\">
                                                <table class=\"TableContent\" width=\"100%\">
                                                    <tbody>
                                                        ";
        // line 32
        if ((twig_length_filter($this->env, ($context["guilds"] ?? null)) > 0)) {
            // line 33
            echo "                                                        <tr bgcolor=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
            echo "\">
                                                            <td width=\"64\"><b>Logo</b></td>
                                                            <td><b>Description</b></td>
                                                            <td width=\"12%\"><b>&nbsp;</b></td>
                                                        </tr>

                                                            ";
            // line 39
            $context["i"] = 0;
            // line 40
            echo "                                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["guilds"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["guild"]) {
                // line 41
                echo "                                                            ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 42
                echo "                                                            <tr bgcolor=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]), "html", null, true);
                echo "\">
                                                                <td>
                                                                    <img src=\"images/guilds/";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["guild"], "logo", []), "html", null, true);
                echo "\" width=\"64\" height=\"64\">
                                                                </td>

                                                                <td>
                                                                    <span";
                // line 48
                if ( !twig_test_empty($this->getAttribute($context["guild"], "description", []))) {
                    echo " valign=\"top\"";
                }
                echo ">
                                                                        <b>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["guild"], "name", []), "html", null, true);
                echo "</b>";
                if (($context["isAdmin"] ?? null)) {
                    echo "<a href=\"?subtopic=guilds&action=delete_by_admin&guild=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["guild"], "name", []), "html", null, true);
                    echo "\"> - Delete this guild (for ADMIN only!)</a>";
                }
                // line 50
                echo "                                                                    </span>

                                                                    ";
                // line 52
                if ( !twig_test_empty($this->getAttribute($context["guild"], "description", []))) {
                    // line 53
                    echo "                                                                    <br>
                                                                    <span>";
                    // line 54
                    echo $this->getAttribute($context["guild"], "description", []);
                    echo "</span>
                                                                    ";
                }
                // line 56
                echo "                                                                </td>

                                                                <td>
                                                                    <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style=\"border:0;\">
                                                                                    <form action=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["guild"], "link", []), "html", null, true);
                echo "\" method=\"post\">
                                                                                        ";
                // line 64
                echo twig_include($this->env, $context, "buttons.view.html.twig");
                echo "
                                                                                    </form>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guild'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                                                        ";
        } else {
            // line 74
            echo "                                                        <tr bgcolor=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
            echo "\">
                                                            <td valign=\"top\">
                                                                <b>Create Guild</b>
                                                                <br/>
                                                                Actually there is no guild on server.";
            // line 78
            if (($context["logged"] ?? null)) {
                echo " Create first! Press button \"Create Guild\"";
            }
            // line 79
            echo "                                                            </td>

                                                            ";
            // line 81
            if (($context["logged"] ?? null)) {
                // line 82
                echo "                                                            <td>
                                                                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                                                    <form action=\"?subtopic=guilds&action=create\" method=\"post\">
                                                                        <form action=\"?subtopic=guilds&action=create\" method=\"post\">
                                                                            ";
                // line 86
                $context["button_name"] = "Found Guild";
                // line 87
                echo "                                                                            ";
                $context["button_image"] = "_sbutton_foundguild";
                // line 88
                echo "                                                                            ";
                $this->loadTemplate("buttons.base.html.twig", "guilds.list.html.twig", 88)->display($context);
                // line 89
                echo "                                                                        </form>
                                                                    </form>
                                                                </table>
                                                            </td>
                                                            ";
            }
            // line 94
            echo "                                                        </tr>
                                                        ";
        }
        // line 96
        echo "                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class=\"TableShadowContainer\">
                                            <div class=\"TableBottomShadow\" style=\"background-image:url(https://static.tibia.com/images/global/content/table-shadow-bm.gif);\">
                                                <div class=\"TableBottomLeftShadow\" style=\"background-image:url(";
        // line 102
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-shadow-bl.gif);\"></div>
                                                <div class=\"TableBottomRightShadow\" style=\"background-image:url(";
        // line 103
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-shadow-br.gif);\"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<br>

<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
    <tbody>
        <tr>
            <td align=\"center\">
                <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "images/general/blank.gif\" width=\"80\" height=\"1\" border=\"0\">
            </td>

            <td align=\"center\">
                <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                    <tbody>
                        ";
        // line 128
        if (($context["logged"] ?? null)) {
            // line 129
            echo "                        No guild found that suits your needs?
                        <form action=\"?subtopic=guilds&action=create\" method=\"post\">
                            ";
            // line 131
            $context["button_name"] = "Found Guild";
            // line 132
            echo "                            ";
            $context["button_image"] = "_sbutton_foundguild";
            // line 133
            echo "                            ";
            $this->loadTemplate("buttons.base.html.twig", "guilds.list.html.twig", 133)->display($context);
            // line 134
            echo "                        </form>
                        ";
        } else {
            // line 136
            echo "                        <b>Before you can create a guild you must login.</b>
                        <br/>
                        <form action=\"?subtopic=accountmanagement&redirect=";
            // line 138
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["guilds"]), "html", null, true);
            echo "\" method=\"post\">
                            ";
            // line 139
            $this->loadTemplate("buttons.login.html.twig", "guilds.list.html.twig", 139)->display($context);
            // line 140
            echo "                        </form>
                        ";
        }
        // line 142
        echo "                    </tbody>
                </table>

                ";
        // line 145
        if (($context["logged"] ?? null)) {
            // line 146
            echo "                    <br/>
                    If you have any problem with guilds try:
                    <br/>
                    <a href=\"?subtopic=guilds&action=cleanup_players\">Cleanup players</a> - can't join guild/be invited? Can't create guild? Try cleanup players.
                    <br/>
                    <a href=\"?subtopic=guilds&action=cleanup_guilds\">Cleanup guilds</a> - made guild, you are a leader, but you are not on players list? Cleanup guilds!
                ";
        }
        // line 153
        echo "            </td>

            <td align=\"center\">
                <img src=\"";
        // line 156
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/general/blank.gif\" width=\"80\" height=\"1\" border=\"0\">
            </td>
        </tr>
    </tbody>
</table>




";
    }

    public function getTemplateName()
    {
        return "guilds.list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 156,  345 => 153,  336 => 146,  334 => 145,  329 => 142,  325 => 140,  323 => 139,  319 => 138,  315 => 136,  311 => 134,  308 => 133,  305 => 132,  303 => 131,  299 => 129,  297 => 128,  288 => 122,  266 => 103,  262 => 102,  254 => 96,  250 => 94,  243 => 89,  240 => 88,  237 => 87,  235 => 86,  229 => 82,  227 => 81,  223 => 79,  219 => 78,  211 => 74,  208 => 73,  185 => 64,  181 => 63,  172 => 56,  167 => 54,  164 => 53,  162 => 52,  158 => 50,  150 => 49,  144 => 48,  137 => 44,  131 => 42,  128 => 41,  110 => 40,  108 => 39,  98 => 33,  96 => 32,  89 => 28,  84 => 26,  67 => 12,  63 => 11,  59 => 10,  55 => 9,  51 => 8,  47 => 7,  43 => 6,  39 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "guilds.list.html.twig", "/var/www/html/system/templates/guilds.list.html.twig");
    }
}
