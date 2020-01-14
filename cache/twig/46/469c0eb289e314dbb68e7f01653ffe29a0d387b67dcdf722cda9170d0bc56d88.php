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

/* partials/post-item.html.twig */
class __TwigTemplate_a3eaeb5b9c1309c2ace0963128c16bbd358a07405a4ccbf7a5e3839dc63789d7 extends \Twig\Template
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
        echo "<li>
    <a href='";
        // line 2
        echo $this->getAttribute(($context["post"] ?? null), "url", []);
        echo "'><aside class=\"dates\">";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translateArray("MONTHS_OF_THE_YEAR", (twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "date", []), "n") - 1));
        echo " ";
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "date", []), "d");
        echo "</aside></a>
    <a href='";
        // line 3
        echo $this->getAttribute(($context["post"] ?? null), "url", []);
        echo "'>";
        echo $this->getAttribute(($context["post"] ?? null), "title", []);
        echo " <h2>";
        echo $this->getAttribute($this->getAttribute(($context["post"] ?? null), "header", []), "headline", []);
        echo "</h2></a>
</li>
";
    }

    public function getTemplateName()
    {
        return "partials/post-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<li>
    <a href='{{ post.url }}'><aside class=\"dates\">{{ 'MONTHS_OF_THE_YEAR'|ta(post.date|date('n') - 1) }} {{ post.date|date('d') }}</aside></a>
    <a href='{{ post.url }}'>{{ post.title }} <h2>{{ post.header.headline }}</h2></a>
</li>
", "partials/post-item.html.twig", "J:\\riberry\\e\\grav-skeleton-multilang-site\\user\\themes\\cacti\\templates\\partials\\post-item.html.twig");
    }
}
