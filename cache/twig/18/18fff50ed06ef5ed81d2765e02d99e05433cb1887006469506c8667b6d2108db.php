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

/* partials/load-more.html.twig */
class __TwigTemplate_37b9031c3ae64954b8095355152cb88131d0901b942aeab2684068bbcbbca956 extends \Twig\Template
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
        if ($this->getAttribute(($context["pagination"] ?? null), "hasNext", [])) {
            // line 2
            echo "    <div class=\"next\"><a rel=\"next\" href=\"";
            echo ($context["base_url"] ?? null);
            echo "/tmpl:infinite";
            echo $this->getAttribute(($context["pagination"] ?? null), "params", []);
            echo $this->getAttribute(($context["pagination"] ?? null), "nextUrl", []);
            echo "\">Load More...</a></div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/load-more.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if pagination.hasNext %}
    <div class=\"next\"><a rel=\"next\" href=\"{{ base_url }}/tmpl:infinite{{ pagination.params }}{{ pagination.nextUrl }}\">Load More...</a></div>
{% endif %}
", "partials/load-more.html.twig", "J:\\riberry\\e\\grav-skeleton-multilang-site\\user\\themes\\cacti\\templates\\partials\\load-more.html.twig");
    }
}
