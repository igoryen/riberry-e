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

/* macros/dates.twig */
class __TwigTemplate_5b9e84c2f0808bc8645332da569f8874000c246884a44287173e591b63b60c28 extends \Twig\Template
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
        // line 5
        echo "
";
        // line 10
        echo "
";
    }

    // line 1
    public function gettranslateMonths($__index__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "index" => $__index__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            $context["months"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "translate", [0 => [0 => "MONTHS_OF_THE_YEAR"]], "method"), ",");
            // line 3
            echo $this->getAttribute(($context["months"] ?? null), (($context["index"] ?? null) - 1), [], "array");
            echo "
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 6
    public function gettranslateDays($__index__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "index" => $__index__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 7
            $context["days"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "translate", [0 => [0 => "DAYS_OF_THE_WEEK"]], "method"), ",");
            // line 8
            echo $this->getAttribute(($context["days"] ?? null), (($context["index"] ?? null) - 1), [], "array");
            echo "
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros/dates.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 8,  81 => 7,  69 => 6,  52 => 3,  50 => 2,  38 => 1,  33 => 10,  30 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro translateMonths(index) %}
{% set months = grav.language.translate(['MONTHS_OF_THE_YEAR'])|split(',') %}
{{ months[index - 1]}}
{% endmacro %}

{% macro translateDays(index) %}
{% set days = grav.language.translate(['DAYS_OF_THE_WEEK'])|split(',') %}
{{ days[index - 1]}}
{% endmacro %}

", "macros/dates.twig", "J:\\riberry\\e\\grav-skeleton-multilang-site\\user\\themes\\cacti\\templates\\macros\\dates.twig");
    }
}
