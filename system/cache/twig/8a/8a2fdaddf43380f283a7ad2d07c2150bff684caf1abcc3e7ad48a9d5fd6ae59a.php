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

/* admin.pages.links.html.twig */
class __TwigTemplate_54086e286b6ac22cb89aa4e6ac1f0837e869d6bc88079f3e5beabed82ce4daf8 extends \Twig\Template
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
        echo "<div style=\"text-align: right;\">
\t<a href=\"admin/?p=pages&action=edit&id=";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "id", []), "html", null, true);
        echo "\" title=\"Edit in Admin Panel\" target=\"_blank\">
\t\t<img src=\"images/edit.png\"/>Edit
\t</a>
\t<a id=\"delete\" href=\"admin/?p=pages&action=delete&id=";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "id", []), "html", null, true);
        echo "\" onclick=\"return confirm('Are you sure?');\"
\t   title=\"Delete in Admin Panel\" target=\"_blank\">
\t\t<img src=\"images/del.png\"/>Delete
\t</a>
\t<a href=\"admin/?p=pages&action=hide&id=";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "id", []), "html", null, true);
        echo "\"
\t   title=\"";
        // line 10
        if (($this->getAttribute(($context["page"] ?? null), "hidden", []) != 1)) {
            echo "Hide";
        } else {
            echo "Show";
        }
        echo " in Admin Panel\" target=\"_blank\">
\t\t<img src=\"images/";
        // line 11
        if (($this->getAttribute(($context["page"] ?? null), "hidden", []) != 1)) {
            echo "success";
        } else {
            echo "error";
        }
        echo ".png\"/>";
        if (($this->getAttribute(($context["page"] ?? null), "hidden", []) != 1)) {
            echo "Hide";
        } else {
            echo "Show";
        }
        // line 12
        echo "\t</a>
\t<br/>
</div>";
    }

    public function getTemplateName()
    {
        return "admin.pages.links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 12,  58 => 11,  50 => 10,  46 => 9,  39 => 5,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin.pages.links.html.twig", "/var/www/html/system/templates/admin.pages.links.html.twig");
    }
}
