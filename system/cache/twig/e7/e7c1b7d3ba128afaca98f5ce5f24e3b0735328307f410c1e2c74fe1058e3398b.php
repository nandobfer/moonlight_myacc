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

/* account.create.html.twig */
class __TwigTemplate_c09df14556e80370d4a894f1f09aec9353dd138b8d9d61942cd5dd009d3ffccb extends \Twig\Template
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_BEFORE_FORM"]), "html", null, true);
        echo "
<form action=\"";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/create"]), "html", null, true);
        echo "\" method=\"post\" id=\"createaccount\">
\t<div class=\"TableContainer\" >
\t\t<table class=\"Table5\" cellpadding=\"0\" cellspacing=\"0\" >
\t\t\t<div class=\"CaptionContainer\" >
\t\t\t\t<div class=\"CaptionInnerContainer\" >
\t\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 7
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 8
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 9
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\" ></span>
\t\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 10
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\" /></span>
\t\t\t\t\t<div class=\"Text\" >Create ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo " Account</div>
\t\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 12
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 13
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\" ></span>
\t\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 14
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 15
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"InnerTableContainer\" >
\t\t\t\t\t\t<table style=\"width:100%;\" >
\t\t\t\t\t\t\t";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_BEFORE_BOXES"]), "html", null, true);
        echo "
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowContainerRightTop\"> <div class=\"TableShadowRightTop\" style=\"background-image:url(";
        // line 25
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-rt.gif);\"></div></div>
\t\t\t\t\t\t\t\t\t<div class=\"TableContentAndRightShadow\" style=\"background-image:url(";
        // line 26
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-rm.gif);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\">
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_BEFORE_ACCOUNT"]), "html", null, true);
        echo "

\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
        // line 35
        if ($this->getAttribute(($context["errors"] ?? null), "account", [], "any", true, true)) {
            echo " class=\"red\"";
        }
        echo ">Account ";
        if (twig_constant("USE_ACCOUNT_NAME")) {
            echo "Name";
        } else {
            echo "Number";
        }
        echo ":</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"account\" id=\"account_input\" size=\"30\" maxlength=\"";
        // line 38
        if (twig_constant("USE_ACCOUNT_NAME")) {
            echo "30";
        } else {
            echo "10";
        }
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["account"] ?? null), "html", null, true);
        echo "\" autofocus/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img id=\"account_indicator\" src=\"images/global/general/";
        // line 39
        if (( !($context["save"] ?? null) || $this->getAttribute(($context["errors"] ?? null), "account", [], "any", true, true))) {
            echo "n";
        }
        echo "ok.gif\" style=\"display: none;\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr><td></td><td><span id=\"account_error\" class=\"FormFieldError\">";
        // line 42
        if ($this->getAttribute(($context["errors"] ?? null), "account", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errors"] ?? null), "account", []), "html", null, true);
        }
        echo "</span></td></tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 43
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_AFTER_ACCOUNT"]), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
        // line 46
        if ($this->getAttribute(($context["errors"] ?? null), "email", [], "any", true, true)) {
            echo " class=\"red\"";
        }
        echo ">Email Address:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" id=\"email\" size=\"30\" maxlength=\"50\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img id=\"email_indicator\" src=\"images/global/general/";
        // line 50
        if (( !($context["save"] ?? null) || $this->getAttribute(($context["errors"] ?? null), "email", [], "any", true, true))) {
            echo "n";
        }
        echo "ok.gif\" style=\"display: none;\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td><td><span id=\"email_error\" class=\"FormFieldError\">";
        // line 54
        if ($this->getAttribute(($context["errors"] ?? null), "email", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errors"] ?? null), "email", []), "html", null, true);
        }
        echo "</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 57
        if (($this->getAttribute(($context["config"] ?? null), "mail_enabled", []) && $this->getAttribute(($context["config"] ?? null), "account_mail_verify", []))) {
            // line 58
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr><td></td><td><span><strong>Please use real address!<br/>We will send a link to validate your Email.</strong></span></td></tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 60
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 61
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_AFTER_EMAIL"]), "html", null, true);
        echo "

                                                ";
        // line 63
        if ($this->getAttribute(($context["config"] ?? null), "account_country", [])) {
            // line 64
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
            // line 66
            if ($this->getAttribute($this->getAttribute(($context["errors"] ?? null), "country", [], "any", false, true), 0, [], "array", true, true)) {
                echo " class=\"red\"";
            }
            echo ">Country:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"country\" id=\"account_country\">
                                                                ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["country_"]) {
                // line 71
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\"";
                if ((((isset($context["country"]) || array_key_exists("country", $context)) && (($context["country"] ?? null) == $context["code"])) || ((null === ($context["country"] ?? null)) && (($context["country_recognized"] ?? null) == $context["code"])))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["country_"], "html", null, true);
                echo "</option>
                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['country_'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"\" id=\"account_country_img\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
                                                    ";
            // line 77
            if ($this->getAttribute(($context["errors"] ?? null), "country", [], "any", true, true)) {
                // line 78
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr><td></td><td><span class=\"FormFieldError\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["errors"] ?? null), "country", []), "html", null, true);
                echo "</span></td></tr>
                                                    ";
            }
            // line 80
            echo "                                                ";
        }
        // line 81
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 82
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_AFTER_COUNTRY"]), "html", null, true);
        echo "

\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
        // line 86
        if ($this->getAttribute(($context["errors"] ?? null), "password", [], "any", true, true)) {
            echo " class=\"red\"";
        }
        echo ">Password:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"password\" value=\"\" size=\"30\" maxlength=\"29\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img id=\"password_indicator\" src=\"images/global/general/";
        // line 90
        if (( !($context["save"] ?? null) || $this->getAttribute(($context["errors"] ?? null), "password", [], "any", true, true))) {
            echo "n";
        }
        echo "ok.gif\" style=\"display: none;\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr><td></td><td><span id=\"password_error\" class=\"FormFieldError\">";
        // line 93
        if ($this->getAttribute(($context["errors"] ?? null), "password", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errors"] ?? null), "password", []), "html", null, true);
        }
        echo "</span></td></tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
        // line 96
        if ($this->getAttribute(($context["errors"] ?? null), "password", [], "any", true, true)) {
            echo " class=\"red\"";
        }
        echo ">Repeat password:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password2\" id=\"password2\" value=\"\" size=\"30\" maxlength=\"29\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img id=\"password2_indicator\" src=\"images/global/general/";
        // line 100
        if (( !($context["save"] ?? null) || $this->getAttribute(($context["errors"] ?? null), "password", [], "any", true, true))) {
            echo "n";
        }
        echo "ok.gif\" style=\"display: none;\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr><td></td><td><span id=\"password2_error\" class=\"FormFieldError\">";
        // line 103
        if ($this->getAttribute(($context["errors"] ?? null), "password", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errors"] ?? null), "password", []), "html", null, true);
        }
        echo "</span></td></tr>

\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 105
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_AFTER_PASSWORDS"]), "html", null, true);
        echo "

                                                ";
        // line 107
        if ($this->getAttribute(($context["config"] ?? null), "recaptcha_enabled", [])) {
            // line 108
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
            // line 110
            if ($this->getAttribute($this->getAttribute(($context["errors"] ?? null), "verification", [], "any", false, true), 0, [], "array", true, true)) {
                echo " class=\"red\"";
            }
            echo ">Verification:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "recaptcha_site_key", []), "html", null, true);
            echo "\" data-theme=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "recaptcha_theme", []), "html", null, true);
            echo "\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
                                                    ";
            // line 116
            if ($this->getAttribute(($context["errors"] ?? null), "verification", [], "any", true, true)) {
                // line 117
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr><td></td><td><span class=\"FormFieldError\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["errors"] ?? null), "verification", []), "html", null, true);
                echo "</span></td></tr>
                                                    ";
            }
            // line 119
            echo "                                                ";
        }
        // line 120
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 121
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_AFTER_RECAPTCHA"]), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowContainer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomShadow\" style=\"background-image:url(";
        // line 127
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-bm.gif);\"> <div class=\"TableBottomLeftShadow\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-bl.gif);\"></div> <div class=\"TableBottomRightShadow\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-br.gif);\"></div> </div></div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t";
        // line 131
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_BETWEEN_BOXES_1"]), "html", null, true);
        echo "

\t\t\t\t\t\t\t";
        // line 133
        if ((( !$this->getAttribute(($context["config"] ?? null), "mail_enabled", []) ||  !$this->getAttribute(($context["config"] ?? null), "account_mail_verify", [])) && $this->getAttribute(($context["config"] ?? null), "account_create_character_create", []))) {
            // line 134
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowContainerRightTop\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableShadowRightTop\" style=\"background-image:url(";
            // line 137
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-shadow-rt.gif);\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"TableContentAndRightShadow\" style=\"background-image:url(";
            // line 139
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-shadow-rm.gif);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\">
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 144
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_BEFORE_CHARACTER_NAME"]), "html", null, true);
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
            // line 148
            if ($this->getAttribute(($context["errors"] ?? null), "name", [], "any", true, true)) {
                echo " class=\"red\"";
            }
            echo ">Character Name:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"character_name\" name=\"name\" size=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "character_name_max_length", []), "html", null, true);
            echo "\" maxlength=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "character_name_max_length", []), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img id=\"character_indicator\" src=\"images/global/general/";
            // line 152
            if (( !($context["save"] ?? null) || $this->getAttribute(($context["errors"] ?? null), "name", [], "any", true, true))) {
                echo "n";
            }
            echo "ok.gif\" style=\"display: none;\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"character_error\" class=\"FormFieldError\">";
            // line 159
            if ($this->getAttribute(($context["errors"] ?? null), "name", [], "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["errors"] ?? null), "name", []), "html", null, true);
            }
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 163
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_AFTER_CHARACTER_NAME"]), "html", null, true);
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
            // line 167
            if ($this->getAttribute(($context["errors"] ?? null), "sex", [], "any", true, true)) {
                echo " class=\"red\"";
            }
            echo ">Sex:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
                                                                    ";
            // line 174
            $context["i"] = 0;
            // line 175
            echo "                                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->getAttribute(($context["config"] ?? null), "genders", []), true));
            foreach ($context['_seq'] as $context["id"] => $context["gender"]) {
                // line 176
                echo "                                                                        ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 177
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"margin-right:15px;\" class=\"OptionContainer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"sex\" id=\"sex";
                // line 178
                echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "\"";
                if (( !(null === ($context["sex"] ?? null)) && (($context["sex"] ?? null) == $context["id"]))) {
                    echo " checked=\"checked\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"sex";
                // line 179
                echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["gender"]), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['gender'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"sex_error\" class=\"FormFieldError\">";
            // line 193
            if ($this->getAttribute(($context["errors"] ?? null), "sex", [], "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["errors"] ?? null), "sex", []), "html", null, true);
            }
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 197
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_AFTER_SEX"]), "html", null, true);
            echo "

                                                ";
            // line 199
            if ((twig_length_filter($this->env, $this->getAttribute(($context["config"] ?? null), "character_samples", [])) > 1)) {
                // line 200
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
                // line 202
                if ($this->getAttribute(($context["errors"] ?? null), "vocation", [], "any", true, true)) {
                    echo " class=\"red\"";
                }
                echo ">Vocation:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
                                                           \t\t";
                // line 209
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["config"] ?? null), "character_samples", []));
                foreach ($context['_seq'] as $context["key"] => $context["sample_char"]) {
                    // line 210
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"margin-right:15px;\" class=\"OptionContainer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vocation\" id=\"vocation";
                    // line 211
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"
                                                                                ";
                    // line 212
                    if (( !(null === ($context["vocation"] ?? null)) && (($context["vocation"] ?? null) == $context["key"]))) {
                        echo " checked=\"checked\"";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"vocation";
                    // line 213
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "vocations", [], "array"), $context["key"], [], "array"), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                            \t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['sample_char'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 216
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"vocation_error\" class=\"FormFieldError\">";
                // line 225
                if ($this->getAttribute(($context["errors"] ?? null), "vocation", [], "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["errors"] ?? null), "vocation", []), "html", null, true);
                }
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 229
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 230
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_AFTER_VOCATION"]), "html", null, true);
            echo "

                                                ";
            // line 232
            if ((twig_length_filter($this->env, $this->getAttribute(($context["config"] ?? null), "character_towns", [])) > 1)) {
                // line 233
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
                // line 235
                if ($this->getAttribute(($context["errors"] ?? null), "town", [], "any", true, true)) {
                    echo " class=\"red\"";
                }
                echo ">Select your city:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 242
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["config"] ?? null), "character_towns", []));
                foreach ($context['_seq'] as $context["_key"] => $context["town_id"]) {
                    // line 243
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"margin-right:15px;\" class=\"OptionContainer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"town\" id=\"town";
                    // line 244
                    echo twig_escape_filter($this->env, $context["town_id"], "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["town_id"], "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 245
                    if (( !(null === ($context["town"] ?? null)) && (($context["town"] ?? null) == $context["town_id"]))) {
                        echo " checked=\"checked\"";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"town";
                    // line 246
                    echo twig_escape_filter($this->env, $context["town_id"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "towns", []), $context["town_id"], [], "array"), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['town_id'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 249
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
                                                ";
            }
            // line 256
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 257
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_AFTER_TOWNS"]), "html", null, true);
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowContainer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomShadow\" style=\"background-image:url(";
            // line 264
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-shadow-bm.gif);\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomLeftShadow\" style=\"background-image:url(";
            // line 265
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-shadow-bl.gif);\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomRightShadow\" style=\"background-image:url(";
            // line 266
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-shadow-br.gif);\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        // line 272
        echo "
\t\t\t\t\t\t\t";
        // line 273
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_BETWEEN_BOXES_2"]), "html", null, true);
        echo "

\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowContainerRightTop\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableShadowRightTop\" style=\"background-image:url(";
        // line 278
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-rt.gif);\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"TableContentAndRightShadow\" style=\"background-image:url(";
        // line 280
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-rm.gif);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\">
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\" ><b>Please select the following check box:</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><input type=\"checkbox\" id=\"accept_rules\" name=\"accept_rules\" value=\"true\"";
        // line 289
        if (($context["accept_rules"] ?? null)) {
            echo "checked";
        }
        echo "/> <label for=\"accept_rules\">I agree to the <a href=\"?subtopic=rules\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo " Rules</a>.</label></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
                                                ";
        // line 292
        if ($this->getAttribute(($context["errors"] ?? null), "accept_rules", [], "any", true, true)) {
            // line 293
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FormFieldError\">";
            // line 295
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errors"] ?? null), "accept_rules", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
                                                ";
        }
        // line 299
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowContainer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomShadow\" style=\"background-image:url(";
        // line 304
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-bm.gif);\"> <div class=\"TableBottomLeftShadow\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-bl.gif);\"></div> <div class=\"TableBottomRightShadow\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-br.gif);\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t";
        // line 310
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_AFTER_BOXES"]), "html", null, true);
        echo "

\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</div>
\t<br/>
\t";
        // line 319
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_BEFORE_SUBMIT_BUTTON"]), "html", null, true);
        echo "
\t<table width=\"100%\">
\t\t<tr align=\"center\">
\t\t\t<td>
\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style=\"border:0px;\" >
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"save\" value=\"1\" >
\t\t\t\t\t\t\t";
        // line 327
        echo twig_include($this->env, $context, "buttons.submit.html.twig");
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t</table>
</form>
";
        // line 335
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_AFTER_FORM"]), "html", null, true);
        echo "
<script type=\"text/javascript\" src=\"tools/check_name.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "account.create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  784 => 335,  773 => 327,  762 => 319,  750 => 310,  737 => 304,  730 => 299,  723 => 295,  719 => 293,  717 => 292,  707 => 289,  695 => 280,  690 => 278,  682 => 273,  679 => 272,  670 => 266,  666 => 265,  662 => 264,  652 => 257,  649 => 256,  640 => 249,  629 => 246,  623 => 245,  617 => 244,  614 => 243,  610 => 242,  598 => 235,  594 => 233,  592 => 232,  587 => 230,  584 => 229,  575 => 225,  564 => 216,  553 => 213,  547 => 212,  541 => 211,  538 => 210,  534 => 209,  522 => 202,  518 => 200,  516 => 199,  511 => 197,  502 => 193,  489 => 182,  478 => 179,  468 => 178,  465 => 177,  462 => 176,  457 => 175,  455 => 174,  443 => 167,  436 => 163,  427 => 159,  415 => 152,  407 => 151,  399 => 148,  392 => 144,  384 => 139,  379 => 137,  374 => 134,  372 => 133,  367 => 131,  356 => 127,  347 => 121,  344 => 120,  341 => 119,  335 => 117,  333 => 116,  325 => 113,  317 => 110,  313 => 108,  311 => 107,  306 => 105,  299 => 103,  291 => 100,  282 => 96,  274 => 93,  266 => 90,  257 => 86,  250 => 82,  247 => 81,  244 => 80,  238 => 78,  236 => 77,  230 => 73,  215 => 71,  211 => 70,  202 => 66,  198 => 64,  196 => 63,  191 => 61,  188 => 60,  184 => 58,  182 => 57,  174 => 54,  165 => 50,  161 => 49,  153 => 46,  147 => 43,  141 => 42,  133 => 39,  123 => 38,  109 => 35,  102 => 31,  94 => 26,  90 => 25,  84 => 22,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "account.create.html.twig", "/var/www/html/system/templates/account.create.html.twig");
    }
}
