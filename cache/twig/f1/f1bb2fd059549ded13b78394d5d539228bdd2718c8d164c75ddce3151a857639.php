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

/* partials/base.html.twig */
class __TwigTemplate_7002c04cd40d8b02b8e6e7c1428db68a496f823c16ac8c887dc41ffe4ff5c23e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        $context["avatar_url"] = (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "find", [0 => "/about"], "method"), "media", []), "images", [])), "url", [])) ? ($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "find", [0 => "/about"], "method"), "media", []), "images", [])), "url", [])) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/avatar.png")));
        // line 3
        $context["dates"] = $this->loadTemplate("macros/dates.twig", "partials/base.html.twig", 3)->unwrap();
        // line 4
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
<head>
  <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " - ";
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "SITE.TITLE"), "html");
        echo "</title>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "  <link rel=\"shortcut icon\" href=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.ico");
        echo "\" />
  <link rel=\"alternate\" type=\"application/rss+xml\" title=\"My Blog\" href=\"/rss.xml\">

  ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "  
  ";
        // line 19
        $this->displayBlock('assets', $context, $blocks);
        // line 22
        echo "</head>
<body>

    ";
        // line 25
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 25)->display($context);
        // line 26
        echo "
    <section id=\"wrapper\">
        ";
        // line 28
        $this->displayBlock('header', $context, $blocks);
        // line 33
        echo "
        <div class=\"";
        // line 34
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []);
        echo "\">
        ";
        // line 35
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "        </div>

        ";
        // line 38
        $this->displayBlock('footer', $context, $blocks);
        // line 41
        echo "    </section>

    ";
        // line 43
        if ($this->getAttribute(($context["site"] ?? null), "analytics", [])) {
            // line 44
            echo "    ";
            $this->loadTemplate("partials/analytics.html.twig", "partials/base.html.twig", 44)->display($context);
            // line 45
            echo "    ";
        }
        // line 46
        echo "    
  ";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "
  ";
        // line 53
        $this->displayBlock('bottom', $context, $blocks);
        // line 57
        echo "</body>
</html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 16
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/style.css", 1 => 100], "method");
        // line 17
        echo "  ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 19
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "    
  ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 28
    public function block_header($context, array $blocks = [])
    {
        // line 29
        echo "            ";
        if (( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header", []) === false) && $this->getAttribute(($context["theme_config"] ?? null), "title_header", []))) {
            // line 30
            echo "                ";
            $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 30)->display($context);
            // line 31
            echo "            ";
        }
        // line 32
        echo "        ";
    }

    // line 35
    public function block_content($context, array $blocks = [])
    {
    }

    // line 38
    public function block_footer($context, array $blocks = [])
    {
        // line 39
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 39)->display($context);
        // line 40
        echo "        ";
    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        // line 48
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 49
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/main.js", 1 => 100], "method");
        // line 50
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.jscroll.min.js"], "method");
        // line 51
        echo "  ";
    }

    // line 53
    public function block_bottom($context, array $blocks = [])
    {
        // line 54
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    ";
        // line 55
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 55,  211 => 54,  208 => 53,  204 => 51,  201 => 50,  198 => 49,  195 => 48,  192 => 47,  188 => 40,  185 => 39,  182 => 38,  177 => 35,  173 => 32,  170 => 31,  167 => 30,  164 => 29,  161 => 28,  153 => 20,  150 => 19,  141 => 17,  138 => 16,  135 => 15,  128 => 57,  126 => 53,  123 => 52,  121 => 47,  118 => 46,  115 => 45,  112 => 44,  110 => 43,  106 => 41,  104 => 38,  100 => 36,  98 => 35,  94 => 34,  91 => 33,  89 => 28,  85 => 26,  83 => 25,  78 => 22,  76 => 19,  73 => 18,  71 => 15,  64 => 12,  62 => 11,  51 => 7,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
{% set avatar_url = pages.find('/about').media.images|first.url ?: url('theme://images/avatar.png') %}
{% import 'macros/dates.twig' as dates %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
  <title>{% if header.title %}{{ header.title|e('html') }} - {% endif %}{{ 'SITE.TITLE'|t|e('html') }}</title>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  {% include 'partials/metadata.html.twig' %}
  <link rel=\"shortcut icon\" href=\"{{ url('theme://images/favicon.ico') }}\" />
  <link rel=\"alternate\" type=\"application/rss+xml\" title=\"My Blog\" href=\"/rss.xml\">

  {% block stylesheets %}
    {% do assets.addCss('theme://css/style.css',100) %}
  {% endblock %}
  
  {% block assets deferred %}
    {{ assets.css()|raw }}    
  {% endblock %}
</head>
<body>

    {% include 'partials/navigation.html.twig' %}

    <section id=\"wrapper\">
        {% block header %}
            {% if page.header.header is not same as(false) and theme_config.title_header %}
                {% include 'partials/header.html.twig' %}
            {% endif %}
        {% endblock %}

        <div class=\"{{ page.header.class }}\">
        {% block content %}{% endblock %}
        </div>

        {% block footer %}
        {% include 'partials/footer.html.twig' %}
        {% endblock %}
    </section>

    {% if site.analytics %}
    {% include 'partials/analytics.html.twig' %}
    {% endif %}
    
  {% block javascripts %}
      {% do assets.addJs('jquery',101) %}
      {% do assets.addJs('theme://js/main.js',100) %}
      {% do assets.addJs('theme://js/jquery.jscroll.min.js') %}
  {% endblock %}

  {% block bottom %}
    {{ assets.js()|raw }}
    {{ assets.js('bottom')|raw }}
  {% endblock %}
</body>
</html>
", "partials/base.html.twig", "J:\\riberry\\e\\grav-skeleton-multilang-site\\user\\themes\\cacti\\templates\\partials\\base.html.twig");
    }
}
