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

/* partials/profile.html.twig */
class __TwigTemplate_c04939cb83095bfa91f2cec4b8795fc7c230c49311d84b8c34ce848a927a13ba extends \Twig\Template
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
        echo "<div class=\"profile\">
    <header id=\"header\">
        ";
        // line 3
        $context["profile"] = $this->getAttribute(($context["pages"] ?? null), "find", [0 => "/about"], "method");
        // line 4
        echo "        <a href='";
        echo $this->getAttribute(($context["profile"] ?? null), "url", []);
        echo "'>
            <img id=\"avatar\" src=\"";
        // line 5
        echo ($context["avatar_url"] ?? null);
        echo "\"/>
        </a>
        <h1>";
        // line 7
        echo $this->getAttribute(($context["theme_config"] ?? null), "author", []);
        echo "</h1>
        <h2>";
        // line 8
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "SITE.DESCRIPTION");
        echo "</h2>
    </header>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  46 => 7,  41 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"profile\">
    <header id=\"header\">
        {% set profile = pages.find('/about') %}
        <a href='{{ profile.url }}'>
            <img id=\"avatar\" src=\"{{ avatar_url }}\"/>
        </a>
        <h1>{{ theme_config.author }}</h1>
        <h2>{{ 'SITE.DESCRIPTION'|t }}</h2>
    </header>
</div>
", "partials/profile.html.twig", "J:\\riberry\\e\\grav-skeleton-multilang-site\\user\\themes\\cacti\\templates\\partials\\profile.html.twig");
    }
}
