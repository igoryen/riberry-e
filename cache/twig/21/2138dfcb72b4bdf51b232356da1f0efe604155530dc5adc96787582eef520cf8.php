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

/* post-list.html.twig */
class __TwigTemplate_a3c0211011b1ec1006cc8275029009452209eb0764a04dd65c03f56a83e1af98 extends \Twig\Template
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
        $this->loadTemplate("post-list.html.twig", "post-list.html.twig", 1, "1901043209")->display($context);
    }

    public function getTemplateName()
    {
        return "post-list.html.twig";
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
        return new Source("{% embed 'partials/base.html.twig' %}

    {% set collection = page.collection %}
    {% set pagination = collection.params.pagination %}

    {% set jscroll_init %}
    \$(document).ready(function() {
        \$('.infinite-scroll').jscroll({
        autoTrigger: true,
        nextSelector: '[rel=\"next\"]'
        });
    });
    {% endset %}

    {% block javascripts %}
        {{ parent() }}
        {% do assets.addInlineJs(jscroll_init) %}
    {% endblock %}

    {% block header %}
        {% if theme_config.home_profile %}
            {% include 'partials/profile.html.twig' %}
        {% else %}
            {{ parent() }}
        {% endif %}
    {% endblock %}

    {% block content %}
    <ul id=\"post-list\" class=\"infinite-scroll\">
        {% for post in collection %}
        {% include 'partials/post-item.html.twig' %}
        {% endfor %}
        {% if config.plugins.pagination.enabled and collection.params.pagination %}
            {% include 'partials/load-more.html.twig' %}
        {% endif %}
    </ul>

    {% endblock %}

{% endembed %}
", "post-list.html.twig", "J:\\riberry\\e\\grav-skeleton-multilang-site\\user\\themes\\cacti\\templates\\post-list.html.twig");
    }
}


/* post-list.html.twig */
class __TwigTemplate_a3c0211011b1ec1006cc8275029009452209eb0764a04dd65c03f56a83e1af98___1901043209 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", []);
        // line 4
        $context["pagination"] = $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []);
        // line 6
        $context["jscroll_init"] = ('' === $tmp = "    \$(document).ready(function() {
        \$('.infinite-scroll').jscroll({
        autoTrigger: true,
        nextSelector: '[rel=\"next\"]'
        });
    });
    ") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "post-list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_javascripts($context, array $blocks = [])
    {
        // line 16
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        ";
        // line 17
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => ($context["jscroll_init"] ?? null)], "method");
        // line 18
        echo "    ";
    }

    // line 20
    public function block_header($context, array $blocks = [])
    {
        // line 21
        echo "        ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "home_profile", [])) {
            // line 22
            echo "            ";
            $this->loadTemplate("partials/profile.html.twig", "post-list.html.twig", 22)->display($context);
            // line 23
            echo "        ";
        } else {
            // line 24
            echo "            ";
            $this->displayParentBlock("header", $context, $blocks);
            echo "
        ";
        }
        // line 26
        echo "    ";
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        // line 29
        echo "    <ul id=\"post-list\" class=\"infinite-scroll\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 31
            echo "        ";
            $this->loadTemplate("partials/post-item.html.twig", "post-list.html.twig", 31)->display($context);
            // line 32
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 34
            echo "            ";
            $this->loadTemplate("partials/load-more.html.twig", "post-list.html.twig", 34)->display($context);
            // line 35
            echo "        ";
        }
        // line 36
        echo "    </ul>

    ";
    }

    public function getTemplateName()
    {
        return "post-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 36,  219 => 35,  216 => 34,  213 => 33,  199 => 32,  196 => 31,  179 => 30,  176 => 29,  173 => 28,  169 => 26,  163 => 24,  160 => 23,  157 => 22,  154 => 21,  151 => 20,  147 => 18,  145 => 17,  140 => 16,  137 => 15,  132 => 1,  124 => 6,  122 => 4,  120 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

    {% set collection = page.collection %}
    {% set pagination = collection.params.pagination %}

    {% set jscroll_init %}
    \$(document).ready(function() {
        \$('.infinite-scroll').jscroll({
        autoTrigger: true,
        nextSelector: '[rel=\"next\"]'
        });
    });
    {% endset %}

    {% block javascripts %}
        {{ parent() }}
        {% do assets.addInlineJs(jscroll_init) %}
    {% endblock %}

    {% block header %}
        {% if theme_config.home_profile %}
            {% include 'partials/profile.html.twig' %}
        {% else %}
            {{ parent() }}
        {% endif %}
    {% endblock %}

    {% block content %}
    <ul id=\"post-list\" class=\"infinite-scroll\">
        {% for post in collection %}
        {% include 'partials/post-item.html.twig' %}
        {% endfor %}
        {% if config.plugins.pagination.enabled and collection.params.pagination %}
            {% include 'partials/load-more.html.twig' %}
        {% endif %}
    </ul>

    {% endblock %}

{% endembed %}
", "post-list.html.twig", "J:\\riberry\\e\\grav-skeleton-multilang-site\\user\\themes\\cacti\\templates\\post-list.html.twig");
    }
}
