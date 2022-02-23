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

/* characters.html.twig */
class __TwigTemplate_bdee08ba018b0fae5ebe08dfefdc34ec0e70578a949b4bb814d55a33819f5bfe extends \Twig\Template
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
        echo "<script type=\"text/javascript\" src=\"tools/js/tipped.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"tools/css/tipped.css\"/>
<script>
\t\$(document).ready(function() {
\t    Tipped.create('.item_image');
\t});
</script>
";
        // line 8
        $context["rows"] = 0;
        // line 9
        echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tr>
\t<td><img src=\"<";
        // line 10
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/general/blank.gif\" width=\"10\" height=\"1\" border=\"0\"></td>
\t<td>
        ";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), [twig_constant("HOOK_CHARACTERS_BEFORE_INFORMATIONS")]), "html", null, true);
        echo "
\t\t";
        // line 13
        if (($context["canEdit"] ?? null)) {
            // line 14
            echo "\t\t\t<a href=\"admin/?p=players&id=";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getId", [], "method"), "html", null, true);
            echo "\" title=\"Edit in Admin Panel\" target=\"_blank\">
\t\t\t\t<img src=\"images/edit.png\"/>Edit
\t\t\t</a>
\t\t";
        }
        // line 18
        echo "\t\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t\t\t";
        // line 19
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "characters", []), "outfit", [])) {
            // line 20
            echo "\t\t\t<div style=\"width:64px;height:64px;border:2px solid #F1E0C6; border-radius:50px; padding:13px; margin-top:38px;margin-left:376px;position:absolute;\"><img style=\"margin-left:";
            if (twig_in_filter($this->getAttribute(($context["player"] ?? null), "getLookType", [], "method"), [0 => 75, 1 => 266, 2 => 302])) {
                echo "-0px;margin-top:-0px;width:64px;height:64px;";
            } else {
                echo "-60px;margin-top:-60px;width:128px;height:128px;";
            }
            echo "\" src=\"";
            echo twig_escape_filter($this->env, ($context["outfit"] ?? null), "html", null, true);
            echo "\" alt=\"player outfit\"/></div>
\t\t\t";
        }
        // line 22
        echo "
\t\t\t<tr bgcolor=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
        echo "\">
\t\t\t\t<td colspan=\"2\" class=\"white\"><b>Character Information</b></td>
\t\t\t</tr>

\t\t\t";
        // line 27
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 28
        echo "\t\t\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
        echo "\">
\t\t\t\t<td width=\"20%\">Name:</td>
\t\t\t\t<td>";
        // line 30
        echo ($context["flag"] ?? null);
        echo " <span style=\"color: ";
        if ($this->getAttribute(($context["player"] ?? null), "isOnline", [], "method")) {
            echo "green";
        } else {
            echo "red";
        }
        echo "\"><b>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getName", [], "method"), "html", null, true);
        echo "</b></span>";
        echo twig_escape_filter($this->env, ($context["oldName"] ?? null), "html", null, true);
        echo "</td>
\t\t\t</tr>

\t\t\t";
        // line 33
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 34
        echo "\t\t\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
        echo "\">
\t\t\t\t<td>Sex:</td>
\t\t\t\t<td>";
        // line 36
        echo twig_escape_filter($this->env, ($context["sex"] ?? null), "html", null, true);
        echo "</td>
\t\t\t</tr>

\t\t\t";
        // line 39
        if (($context["marriage_enabled"] ?? null)) {
            // line 40
            echo "\t\t\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 41
            echo "\t\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
\t\t\t\t<td>Marital status:</td>
\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, ($context["marital_status"] ?? null), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t\t";
        }
        // line 46
        echo "
\t\t\t";
        // line 47
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 48
        echo "\t\t\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
        echo "\">
\t\t\t\t<td>Profession:</td>
\t\t\t\t<td>";
        // line 50
        echo twig_escape_filter($this->env, ($context["vocation"] ?? null), "html", null, true);
        echo "</td>
\t\t\t</tr>

\t\t\t";
        // line 53
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "characters", []), "level", [])) {
            // line 54
            echo "\t\t\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 55
            echo "\t\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
\t\t\t\t<td>Level:</td>
\t\t\t\t<td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getLevel", [], "method"), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t\t";
        }
        // line 60
        echo "
\t\t\t";
        // line 61
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "characters", []), "experience", [])) {
            // line 62
            echo "\t\t\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 63
            echo "\t\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
\t\t\t\t<td>Experience:</td>
\t\t\t\t<td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getExperience", [], "method"), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t\t";
        }
        // line 68
        echo "
\t\t\t";
        // line 69
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "characters", []), "magic_level", [])) {
            // line 70
            echo "\t\t\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 71
            echo "\t\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
\t\t\t\t<td>Magic Level:</td>
\t\t\t\t<td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getMagLevel", [], "method"), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t\t";
        }
        // line 76
        echo "
\t\t\t";
        // line 77
        if (($context["frags_enabled"] ?? null)) {
            // line 78
            echo "\t\t\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 79
            echo "\t\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
\t\t\t\t<td>Frags:</td>
\t\t\t\t<td>";
            // line 81
            echo twig_escape_filter($this->env, ($context["frags_count"] ?? null), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t\t";
        }
        // line 84
        echo "
\t\t\t";
        // line 85
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 86
        echo "\t\t\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
        echo "\">
\t\t\t\t<td>Residence:</td>
\t\t\t\t<td>";
        // line 88
        echo twig_escape_filter($this->env, ($context["town"] ?? null), "html", null, true);
        echo "</td>
\t\t\t</tr>

\t\t\t";
        // line 91
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "characters", []), "balance", [])) {
            // line 92
            echo "\t\t\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 93
            echo "\t\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
\t\t\t\t<td>Balance:</td>
\t\t\t\t<td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getBalance", [], "method"), "html", null, true);
            echo " Gold Coins.</td>
\t\t\t</tr>
\t\t\t";
        }
        // line 98
        echo "
\t\t\t";
        // line 99
        if ($this->getAttribute(($context["house"] ?? null), "found", [])) {
            // line 100
            echo "\t\t\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 101
            echo "\t\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
\t\t\t\t<td>House:</td>
\t\t\t\t<td>
\t\t\t\t\t<table border=\"0\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 106
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["house"] ?? null), "name", []) . $this->getAttribute(($context["house"] ?? null), "town", [])) . $this->getAttribute(($context["house"] ?? null), "add", [])), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<form action=\"?subtopic=houses&page=view\" method=\"post\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"house\" value=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute(($context["house"] ?? null), "name", []), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"image\" name=\"View\" alt=\"View\" src=\"";
            // line 110
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/buttons/sbutton_view.gif\" border=\"0\" width=\"120\">
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
        }
        // line 118
        echo "
\t\t\t";
        // line 119
        if ( !(null === $this->getAttribute(($context["guild"] ?? null), "rank", []))) {
            // line 120
            echo "\t\t\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 121
            echo "\t\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
\t\t\t\t<td>Guild membership:</td>
\t\t\t\t<td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute(($context["guild"] ?? null), "rank", []), "html", null, true);
            echo " of the ";
            echo $this->getAttribute(($context["guild"] ?? null), "link", []);
            echo "</td>
\t\t\t</tr>
\t\t\t";
        }
        // line 126
        echo "
\t\t\t";
        // line 127
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 128
        echo "\t\t\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
        echo "\">
\t\t\t\t<td>Last login:</td>
\t\t\t\t<td>";
        // line 130
        if (($this->getAttribute(($context["player"] ?? null), "getLastLogin", [], "method") == 0)) {
            echo "Never logged in.";
        } else {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getLastLogin", [], "method"), "M d Y, H:i:s"), "html", null, true);
            echo " CEST";
        }
        echo "</td>
\t\t\t</tr>

\t\t\t";
        // line 133
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "characters", []), "creation_date", [])) {
            // line 134
            echo "\t\t\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 135
            echo "\t\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
\t\t\t\t<td>Created:</td>
\t\t\t\t<td>";
            // line 137
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getCreated", [], "method"), "M d Y, H:i:s"), "html", null, true);
            echo " CEST</td>
\t\t\t</tr>
\t\t\t";
        }
        // line 140
        echo "
\t\t\t";
        // line 141
        if ( !(null === ($context["comment"] ?? null))) {
            // line 142
            echo "\t\t\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 143
            echo "\t\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
\t\t\t\t<td valign=\"top\">Comment:</td>
\t\t\t\t<td>";
            // line 145
            echo ($context["comment"] ?? null);
            echo "</td>
\t\t\t</tr>
\t\t\t";
        }
        // line 148
        echo "
\t\t\t";
        // line 149
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 150
        echo "\t\t\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
        echo "\">
\t\t\t\t<td>Account Status:</td>
\t\t\t\t<td>";
        // line 152
        if ($this->getAttribute(($context["account"] ?? null), "isPremium", [], "method")) {
            echo "Premium Account";
        } else {
            echo "Free Account";
        }
        echo "</td>
\t\t\t</tr>
\t\t</table>
\t\t";
        // line 155
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), [twig_constant("HOOK_CHARACTERS_AFTER_INFORMATIONS")]), "html", null, true);
        echo "
\t\t<br/>
\t\t<table border=\"0\" width=\"100%\">
\t\t\t<tr>
\t\t\t\t";
        // line 159
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "characters", []), "skills", [])) {
            // line 160
            echo "\t\t\t\t<!-- SKILLS -->
\t\t\t\t<td width=\"30%\" valign=\"top\">
\t\t\t\t\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t\t\t\t\t\t<tr bgcolor=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<td colspan=\"2\" class=\"white\"><B>Skills</b></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            // line 166
            $context["i"] = 0;
            // line 167
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["skills"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                // line 168
                echo "\t\t\t\t\t\t";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 169
                echo "\t\t\t\t\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<td valign=\"top\">";
                // line 170
                echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "name", []), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "value", []), "html", null, true);
                echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t\t<!-- SKILLS_END -->
\t\t\t\t";
        }
        // line 178
        echo "
\t\t\t\t";
        // line 179
        if (($context["quests_enabled"] ?? null)) {
            // line 180
            echo "\t\t\t\t<!-- QUESTS -->
\t\t\t\t<td width=\"40%\" valign=\"top\">
\t\t\t\t\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t\t\t\t\t\t<tr bgcolor=\"";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<td colspan=\"2\" class=\"white\"><b>Quests</b></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            // line 186
            $context["i"] = 0;
            // line 187
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["quests"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["done"]) {
                // line 188
                echo "\t\t\t\t\t\t";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 189
                echo "\t\t\t\t\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<td valign=\"top\">";
                // line 190
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</TD>
\t\t\t\t\t\t\t<td><img src=\"images/";
                // line 191
                if ($context["done"]) {
                    echo "true";
                } else {
                    echo "false";
                }
                echo ".png\" border=\"0\"/></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['done'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t\t<!-- QUESTS_END -->
\t\t\t\t";
        }
        // line 198
        echo "
\t\t\t\t";
        // line 199
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "characters", []), "equipment", [])) {
            // line 200
            echo "\t\t\t\t<!-- EQUIPMENT -->
\t\t\t\t<td width=\"100\" valign=\"top\">
\t\t\t\t\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t\t\t\t\t\t<tr bgcolor=\"";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<td colspan=\"2\" class=\"white\"><b>Equipment</b></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr bgcolor=\"";
            // line 206
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [1]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<table width=\"100\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\" style=\"background: #808080; border:1px solid #808080;\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<table cellspacing=\"0\" style=\"background: #292929;\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr><td style=\"border:1px solid #808080;\">";
            // line 212
            echo $this->getAttribute(($context["equipment"] ?? null), 2, [], "array");
            echo "</td></tr><tr><td style=\"border:1px solid #808080;\">";
            echo $this->getAttribute(($context["equipment"] ?? null), 6, [], "array");
            echo "</td></tr><tr><td style=\"border:1px solid #808080;\">";
            echo $this->getAttribute(($context["equipment"] ?? null), 9, [], "array");
            echo "</td></tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr height=\"11px\"><td>";
            // line 213
            if ( !(null === ($context["skull"] ?? null))) {
                echo "<img src=\"images/";
                echo twig_escape_filter($this->env, ($context["skull"] ?? null), "html", null, true);
                echo ".gif\">";
            }
            echo "</td></tr>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<table cellspacing=\"0\" style=\"background: #292929;\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr><td style=\"border:1px solid #808080;\">";
            // line 218
            echo $this->getAttribute(($context["equipment"] ?? null), 1, [], "array");
            echo "</td></tr><tr><td style=\"border:1px solid #808080;\">";
            echo $this->getAttribute(($context["equipment"] ?? null), 4, [], "array");
            echo "</td></tr><tr><td style=\"border:1px solid #808080;\">";
            echo $this->getAttribute(($context["equipment"] ?? null), 7, [], "array");
            echo "</td></tr><tr><td style=\"border:1px solid #808080;\">";
            echo $this->getAttribute(($context["equipment"] ?? null), 8, [], "array");
            echo "</td></tr>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<table cellspacing=\"0\" style=\"background: #292929;\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr><td style=\"border:1px solid #808080;\">";
            // line 223
            echo $this->getAttribute(($context["equipment"] ?? null), 3, [], "array");
            echo "</td></tr><tr><td style=\"border:1px solid #808080;\">";
            echo $this->getAttribute(($context["equipment"] ?? null), 5, [], "array");
            echo "</td></tr><tr><td style=\"border:1px solid #808080;\">";
            echo $this->getAttribute(($context["equipment"] ?? null), 10, [], "array");
            echo "</td></tr>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t\t<!-- EQUIPMENT_END -->
\t\t\t\t";
        }
        // line 234
        echo "\t\t\t</tr>
\t\t</table>

\t\t";
        // line 237
        if ((twig_length_filter($this->env, ($context["deaths"] ?? null)) > 0)) {
            // line 238
            echo "\t\t<!-- DEATHS -->
\t\t<br/>
\t\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t\t\t<tr bgcolor=\"";
            // line 241
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
            echo "\">
\t\t\t\t<td colspan=\"2\" class=\"white\"><b>Character Deaths</b></td>
\t\t\t</tr>
\t\t\t";
            // line 244
            $context["i"] = 0;
            // line 245
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["deaths"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["death"]) {
                // line 246
                echo "\t\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]), "html", null, true);
                echo "\">
\t\t\t\t<td width=\"20%\" align=\"center\">";
                // line 247
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["death"], "time", []), "j M Y, H:i"), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 248
                echo $this->getAttribute($context["death"], "description", []);
                echo "</td>
\t\t\t</tr>

\t\t\t";
                // line 251
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 252
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['death'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 253
            echo "\t\t</table>
\t\t<!-- DEATHS_END -->
\t\t";
        }
        // line 256
        echo "\t\t";
        if ((twig_length_filter($this->env, ($context["frags"] ?? null)) > 0)) {
            // line 257
            echo "\t\t<!-- FRAGS -->
\t\t<br/>
\t\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t\t\t<tr bgcolor=\"";
            // line 260
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
            echo "\">
\t\t\t\t<td colspan=\"2\" class=\"white\"><b>Victims</b></td>
\t\t\t</tr>
\t\t\t";
            // line 263
            $context["i"] = 0;
            // line 264
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["frags"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["frag"]) {
                // line 265
                echo "\t\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]), "html", null, true);
                echo "\">
\t\t\t\t<td width=\"20%\" align=\"center\">";
                // line 266
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["frag"], "time", []), "j M Y, H:i"), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 267
                echo $this->getAttribute($context["frag"], "description", []);
                echo "(";
                if ($this->getAttribute($context["frag"], "unjustified", [])) {
                    echo "<span style=\"color: red; font-size: 10px\">Unjustified</span>";
                } else {
                    echo "<span style=\"color: green; font-size: 10px\">Justified</span>";
                }
                echo ")</td>
\t\t\t</tr>
\t\t\t";
                // line 269
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 270
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['frag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 271
            echo "\t\t</table>
\t\t<!-- FRAGS_END -->
\t\t";
        }
        // line 274
        echo "
\t\t";
        // line 275
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), [twig_constant("HOOK_CHARACTERS_BEFORE_SIGNATURE")]), "html", null, true);
        echo "

\t\t";
        // line 277
        if ($this->getAttribute(($context["config"] ?? null), "signature_enabled", [])) {
            // line 278
            echo "\t\t<!-- SIGNATURE -->
\t\t<script type=\"text/javascript\">
\t\t\tfunction showSignLinks()
\t\t\t{
\t\t\t\tif(document.getElementById('signLinks').style.display == \"none\")
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('signLinks').style.display = \"inline\";
\t\t\t\t\tdocument.getElementById('signText').innerHTML = \"Hide links\";
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('signLinks').style.display = \"none\";
\t\t\t\t\tdocument.getElementById('signText').innerHTML = \"Show links\";
\t\t\t\t}
\t\t\t}
\t\t</script>
\t\t<br/>
\t\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\"><tr bgcolor=\"";
            // line 295
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
            echo "\"><td colspan=2 class=\"white\"><b>Signature</b></td></tr>
\t\t\t<tr bgcolor=\"";
            // line 296
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "lightborder", []), "html", null, true);
            echo "\"><td align=\"center\" valign=\"top\">
\t\t\t\t<img src=\"";
            // line 297
            echo twig_escape_filter($this->env, ($context["signature_url"] ?? null), "html", null, true);
            echo "\" alt=\"Signature for player ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getName", [], "method"), "html", null, true);
            echo "\">
\t\t\t\t<br/>
\t\t\t\t<b><a href=\"#\" onclick=\"showSignLinks(); return false;\" id=\"signText\">Show links</a></b>
\t\t\t\t<br/>
\t\t\t\t<table id=\"signLinks\" style=\"display: none;\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Website:</td>
\t\t\t\t\t\t<td><input type=\"text\" value=\"<a href=&quot;";
            // line 304
            echo twig_escape_filter($this->env, ($context["player_link"] ?? null), "html", null, true);
            echo "&quot;><img src=&quot;";
            echo twig_escape_filter($this->env, ($context["signature_url"] ?? null), "html", null, true);
            echo "&quot;></a>\" style=\"width: 400px;\" onclick=\"this.select()\"></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Forum:</td>
\t\t\t\t\t\t<td><input type=\"text\" value=\"[URL=";
            // line 308
            echo twig_escape_filter($this->env, ($context["player_link"] ?? null), "html", null, true);
            echo "][IMG]";
            echo twig_escape_filter($this->env, ($context["signature_url"] ?? null), "html", null, true);
            echo "[/IMG][/URL]\" style=\"width: 400px;\" onclick=\"this.select()\"></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Direct link:</td>
\t\t\t\t\t\t<td><input type=\"text\" value=\"";
            // line 312
            echo twig_escape_filter($this->env, ($context["signature_url"] ?? null), "html", null, true);
            echo "\" style=\"width: 400px;\" onclick=\"this.select()\"></td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td></tr>
\t\t</table>
\t\t<!-- SIGNATURE_END -->
\t\t";
        }
        // line 319
        echo "\t\t";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), [twig_constant("HOOK_CHARACTERS_AFTER_SIGNATURE")]), "html", null, true);
        echo "
\t\t";
        // line 320
        if ( !($context["hidden"] ?? null)) {
            // line 321
            echo "\t\t";
            $context["rows"] = 0;
            // line 322
            echo "\t\t<!-- ACCOUNT_INFORMATION -->
\t\t<br/><br/>
\t\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t\t\t<tr bgcolor=\"";
            // line 325
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
            echo "\">
\t\t\t\t<td colspan=\"2\" class=\"white\"><b>Account Information</b></td>
\t\t\t</tr>

\t\t\t";
            // line 329
            $context["realName"] = $this->getAttribute(($context["account"] ?? null), "getRLName", [], "method");
            // line 330
            echo "\t\t\t";
            if ( !twig_test_empty(($context["realName"] ?? null))) {
                // line 331
                echo "\t\t\t";
                $context["rows"] = (($context["rows"] ?? null) + 1);
                // line 332
                echo "\t\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
                echo "\">
\t\t\t\t<td width=\"20%\">Real name:</td>
\t\t\t\t<td>";
                // line 334
                echo twig_escape_filter($this->env, ($context["realName"] ?? null), "html", null, true);
                echo "</td>
\t\t\t</tr>
\t\t\t";
            }
            // line 337
            echo "
\t\t\t";
            // line 338
            $context["group"] = $this->getAttribute(($context["player"] ?? null), "getGroup", [], "method");
            // line 339
            echo "\t\t\t";
            if (($this->getAttribute(($context["group"] ?? null), "isLoaded", [], "method") && ($this->getAttribute(($context["group"] ?? null), "getId", [], "method") != 1))) {
                // line 340
                echo "\t\t\t";
                $context["rows"] = (($context["rows"] ?? null) + 1);
                // line 341
                echo "\t\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
                echo "\">
\t\t\t\t<td>Position:</td>
\t\t\t\t<td>";
                // line 343
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute(($context["group"] ?? null), "getName", [], "method")), "html", null, true);
                echo "</td>
\t\t\t</tr>
\t\t\t";
            }
            // line 346
            echo "
\t\t\t";
            // line 347
            $context["realLocation"] = $this->getAttribute(($context["account"] ?? null), "getLocation", [], "method");
            // line 348
            echo "\t\t\t";
            if ( !twig_test_empty(($context["realLocation"] ?? null))) {
                // line 349
                echo "\t\t\t";
                $context["rows"] = (($context["rows"] ?? null) + 1);
                // line 350
                echo "\t\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
                echo "\">
\t\t\t\t<td width=\"20%\">Location:</td>
\t\t\t\t<td>";
                // line 352
                echo twig_escape_filter($this->env, ($context["realLocation"] ?? null), "html", null, true);
                echo "</td>
\t\t\t</tr>
\t\t\t";
            }
            // line 355
            echo "
\t\t\t";
            // line 356
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 357
            echo "\t\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
\t\t\t\t<td width=\"20%\">Created:</td>
\t\t\t\t<td>";
            // line 359
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["account"] ?? null), "getCreated", [], "method"), "j F Y, g:i a"), "html", null, true);
            echo "
\t\t\t\t\t";
            // line 360
            if ((preg_match("/^\\d+\$/", ($context["bannedUntil"] ?? null)) || (($context["bannedUntil"] ?? null) == "-1"))) {
                // line 361
                echo "\t\t\t\t\t\t<span style=\"color: red\">[Banished ";
                if ((($context["bannedUntil"] ?? null) == "-1")) {
                    echo "forever";
                } else {
                    echo "until ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["bannedUntil"] ?? null), "d F Y, h:s"), "html", null, true);
                }
                echo "]</span>
\t\t\t\t\t";
            } else {
                // line 363
                echo "\t\t\t\t\t";
                echo ($context["bannedUntil"] ?? null);
                echo "
\t\t\t\t\t";
            }
            // line 365
            echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t\t<!-- ACCOUNT_INFORMATION_END -->
\t\t";
            // line 369
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), [twig_constant("HOOK_CHARACTERS_AFTER_ACCOUNT")]), "html", null, true);
            echo "
\t\t<!-- CHARACTERS_LIST -->
\t\t<br/><br/>
\t\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t\t\t<tr bgcolor=\"";
            // line 373
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
            echo "\">
\t\t\t\t<td colspan=4 class=\"white\"><b>Characters</b></td>
\t\t\t</tr>
\t\t\t<tr bgcolor=\"";
            // line 376
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
            echo "\">
\t\t\t\t<td width=\"62%\"><B>Name</b></td>
\t\t\t\t<td width=\"30%\"><B>Level</b></td>
\t\t\t\t<td width=\"8%\"><b>Status</b></td>
\t\t\t\t<td><b>&#160;</b></td>
\t\t\t</tr>
\t\t\t";
            // line 382
            $context["i"] = 0;
            // line 383
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["account_players"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 384
                echo "\t\t\t\t";
                if (( !$this->getAttribute($context["player"], "isHidden", [], "method") && ($this->getAttribute(call_user_func_array($this->env->getFunction('config')->getCallable(), ["characters"]), "deleted", [], "array") ||  !$this->getAttribute($context["player"], "isDeleted", [], "method")))) {
                    // line 385
                    echo "\t\t\t\t";
                    $context["i"] = (($context["i"] ?? null) + 1);
                    // line 386
                    echo "\t\t\t<tr bgcolor=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]), "html", null, true);
                    echo "\">
\t\t\t\t<td>
\t\t\t\t\t<nobr>";
                    // line 388
                    echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
                    echo ".&#160;";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getName", [], "method"), "html", null, true);
                    if ($this->getAttribute($context["player"], "isDeleted", [], "method")) {
                        echo "<span style=\"color: red\"> [DELETED]</span>";
                    }
                    echo "</nobr>
\t\t\t\t</td>

\t\t\t\t<td>";
                    // line 391
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getLevel", [], "method"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getVocationName", [], "method"), "html", null, true);
                    echo "</td>
\t\t\t\t<td>";
                    // line 392
                    if ($this->getAttribute($context["player"], "isOnline", [], "method")) {
                        echo "<b><span style=\"color: green\">Online</span></b>";
                    }
                    echo "</td>
\t\t\t\t<td>
\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t\t<form action=\"";
                    // line 395
                    echo twig_escape_filter($this->env, ($context["characters_link"] ?? null), "html", null, true);
                    echo "\" method=post>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"name\" value=\"";
                    // line 398
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getName", [], "method"), "html", null, true);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t<input type=\"image\" name=\"View ";
                    // line 399
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getName", [], "method"), "html", null, true);
                    echo "\" alt=\"View ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getName", [], "method"), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
                    echo "/images/global/buttons/sbutton_view.gif\" border=\"0\" width=\"120\" height=\"18\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</form>
\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t\t";
                }
                // line 407
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 408
            echo "\t\t</table>
\t\t<!-- CHARACTERS_LIST_END -->
\t\t";
        }
        // line 411
        echo "\t\t";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), [twig_constant("HOOK_CHARACTERS_AFTER_CHARACTERS")]), "html", null, true);
        echo "
\t\t";
        // line 412
        if (($context["canEdit"] ?? null)) {
            // line 413
            echo "\t\t\t<a href=\"admin/?p=players&id=";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getId", [], "method"), "html", null, true);
            echo "\" title=\"Edit in Admin Panel\" target=\"_blank\">
\t\t\t\t<img src=\"images/edit.png\"/>Edit
\t\t\t</a>
\t\t";
        }
        // line 417
        echo "\t\t</td>
\t\t<td>
\t\t\t<img src=\"";
        // line 419
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/general/blank.gif\" width=\"10\" height=\"1\" border=\"0\">
\t\t</td>
\t</tr>
</table>
<br/><br/>";
        // line 423
        echo ($context["search_form"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "characters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1038 => 423,  1031 => 419,  1027 => 417,  1019 => 413,  1017 => 412,  1012 => 411,  1007 => 408,  1001 => 407,  986 => 399,  982 => 398,  976 => 395,  968 => 392,  962 => 391,  951 => 388,  945 => 386,  942 => 385,  939 => 384,  934 => 383,  932 => 382,  923 => 376,  917 => 373,  910 => 369,  904 => 365,  898 => 363,  887 => 361,  885 => 360,  881 => 359,  875 => 357,  873 => 356,  870 => 355,  864 => 352,  858 => 350,  855 => 349,  852 => 348,  850 => 347,  847 => 346,  841 => 343,  835 => 341,  832 => 340,  829 => 339,  827 => 338,  824 => 337,  818 => 334,  812 => 332,  809 => 331,  806 => 330,  804 => 329,  797 => 325,  792 => 322,  789 => 321,  787 => 320,  782 => 319,  772 => 312,  763 => 308,  754 => 304,  742 => 297,  738 => 296,  734 => 295,  715 => 278,  713 => 277,  708 => 275,  705 => 274,  700 => 271,  694 => 270,  692 => 269,  681 => 267,  677 => 266,  672 => 265,  667 => 264,  665 => 263,  659 => 260,  654 => 257,  651 => 256,  646 => 253,  640 => 252,  638 => 251,  632 => 248,  628 => 247,  623 => 246,  618 => 245,  616 => 244,  610 => 241,  605 => 238,  603 => 237,  598 => 234,  580 => 223,  566 => 218,  554 => 213,  546 => 212,  537 => 206,  531 => 203,  526 => 200,  524 => 199,  521 => 198,  515 => 194,  502 => 191,  498 => 190,  493 => 189,  490 => 188,  485 => 187,  483 => 186,  477 => 183,  472 => 180,  470 => 179,  467 => 178,  461 => 174,  452 => 171,  448 => 170,  443 => 169,  440 => 168,  435 => 167,  433 => 166,  427 => 163,  422 => 160,  420 => 159,  413 => 155,  403 => 152,  397 => 150,  395 => 149,  392 => 148,  386 => 145,  380 => 143,  377 => 142,  375 => 141,  372 => 140,  366 => 137,  360 => 135,  357 => 134,  355 => 133,  344 => 130,  338 => 128,  336 => 127,  333 => 126,  325 => 123,  319 => 121,  316 => 120,  314 => 119,  311 => 118,  300 => 110,  296 => 109,  290 => 106,  281 => 101,  278 => 100,  276 => 99,  273 => 98,  267 => 95,  261 => 93,  258 => 92,  256 => 91,  250 => 88,  244 => 86,  242 => 85,  239 => 84,  233 => 81,  227 => 79,  224 => 78,  222 => 77,  219 => 76,  213 => 73,  207 => 71,  204 => 70,  202 => 69,  199 => 68,  193 => 65,  187 => 63,  184 => 62,  182 => 61,  179 => 60,  173 => 57,  167 => 55,  164 => 54,  162 => 53,  156 => 50,  150 => 48,  148 => 47,  145 => 46,  139 => 43,  133 => 41,  130 => 40,  128 => 39,  122 => 36,  116 => 34,  114 => 33,  98 => 30,  92 => 28,  90 => 27,  83 => 23,  80 => 22,  68 => 20,  66 => 19,  63 => 18,  55 => 14,  53 => 13,  49 => 12,  44 => 10,  41 => 9,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "characters.html.twig", "/var/www/html/system/templates/characters.html.twig");
    }
}
