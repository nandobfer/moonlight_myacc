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

/* admin.login.html.twig */
class __TwigTemplate_53705464c5bc49056dd77c4683ba74649036df116cdeae1865ea906231c8920e extends \Twig\Template
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
        echo "<div class=\"login-box\">
\t";
        // line 2
        if (($context["logout"] ?? null)) {
            // line 3
            echo "\t\t<div class=\"alert alert-success alert-dismissible\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
\t\t\t<h4><i class=\"icon fa fa-check\"></i> Status</h4>
\t\t\t";
            // line 6
            echo twig_escape_filter($this->env, ($context["logout"] ?? null), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 9
        echo "
\t<form method=\"post\">
\t\t<div class=\"box box-info\">
\t\t\t<div class=\"box-header with-border\">
\t\t\t\t<h3 class=\"box-title\">Please login.</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-lock\"></i></span>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"account-name-input\" name=\"account_login\"
\t\t\t\t\t\t\t   placeholder=\"Account ";
        // line 20
        echo twig_escape_filter($this->env, ($context["account"] ?? null), "html", null, true);
        echo "\" required autofocus>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-key\"></i></span>
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"password_login\"
\t\t\t\t\t\t\t   placeholder=\"Password\" required>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"box-footer\">
\t\t\t\t<label>
\t\t\t\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"remember_me\" value=\"true\"> Remember me
\t\t\t\t</label>
\t\t\t\t<input type=\"hidden\" name=\"admin\" value=\"1\"/>
\t\t\t\t<button type=\"submit\" class=\"btn btn-info pull-right\">Sign in</button>
\t\t\t</div>
\t\t</div>
\t</form>
</div>";
    }

    public function getTemplateName()
    {
        return "admin.login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 20,  46 => 9,  40 => 6,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin.login.html.twig", "/var/www/html/system/templates/admin.login.html.twig");
    }
}
