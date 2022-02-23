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
class __TwigTemplate_c180f39f26c487365963b66e0ea31c5170260716d447d4de9b2c531a07ec8e28 extends \Twig\Template
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
<div style=\"text-align: center;\">Pode usar qualquer cliente oficial Tibia <strong>10.85</strong> ou baixar o personalizado<br />
<p>Download Moonlight Client Client for Windows <a href=\"https://github.com/nandobfer/Moonlight-Client\" target=\"_blank\" rel=\"noopener\">HERE</a>.</p>
<h2>Download Direto:</h2>
<a href=\"https://github.com/nandobfer/Moonlight-Client/archive/refs/heads/main.zip\" target=\"_blank\" rel=\"noopener\">HERE</a></div>";
    }

    public function getTemplateName()
    {
        return "content.html";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
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
