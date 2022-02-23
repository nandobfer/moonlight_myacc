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

/* content.html */
class __TwigTemplate_72c63fa48d2a7d2db9fe6ce4a97ab196e8c63694457f0f2968a041e748fee17f extends \Twig\Template
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
        echo "<p>&nbsp;</p>
<p>&nbsp;</p>
<div style=\"text-align: center;\">We're using official Tibia Client <strong>";
        // line 3
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["config"] ?? null), "client", []) / 100), "html", null, true);
        echo "</strong><br />
<p>Download Tibia Client <strong>";
        // line 4
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["config"] ?? null), "client", []) / 100), "html", null, true);
        echo "</strong>&nbsp;for Windows <a href=\"https://drive.google.com/drive/folders/0B2-sMQkWYzhGSFhGVlY2WGk5czQ\" target=\"_blank\" rel=\"noopener\">HERE</a>.</p>
<h2>IP Changer:</h2>
<a href=\"https://static.otland.net/ipchanger.exe\" target=\"_blank\" rel=\"noopener\">HERE</a></div>";
    }

    public function getTemplateName()
    {
        return "content.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "content.html", "");
    }
}
