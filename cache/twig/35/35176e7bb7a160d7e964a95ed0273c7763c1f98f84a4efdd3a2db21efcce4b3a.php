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

/* partials/langswitcher.html.twig */
class __TwigTemplate_c2de39029c7dbd8096f03c1c7116b5ef39cbbb989f54e3f4392a016d4341e2cf extends \Twig\Template
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
        echo "<ul class=\"langswitcher\">
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["langswitcher"] ?? null), "languages", []));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3
            echo "
    ";
            // line 4
            $context["show_language"] = true;
            // line 5
            echo "    ";
            if (($context["language"] == $this->getAttribute(($context["langswitcher"] ?? null), "current", []))) {
                // line 6
                echo "        ";
                $context["lang_url"] = $this->getAttribute(($context["page"] ?? null), "url", []);
                // line 7
                echo "        ";
                $context["active_class"] = " active";
                // line 8
                echo "    ";
            } else {
                // line 9
                echo "        ";
                $context["base_lang_url"] = (($context["base_url_simple"] ?? null) . $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguageURLPrefix", [0 => $context["language"]], "method"));
                // line 10
                echo "        ";
                $context["lang_url"] = ((($context["base_lang_url"] ?? null) . $this->getAttribute(($context["langswitcher"] ?? null), "page_route", [])) . $this->getAttribute(($context["page"] ?? null), "urlExtension", []));
                // line 11
                echo "        ";
                $context["untranslated_pages_behavior"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "plugins", []), "langswitcher", []), "untranslated_pages_behavior", []);
                // line 12
                echo "        ";
                if ((($context["untranslated_pages_behavior"] ?? null) != "none")) {
                    // line 13
                    echo "            ";
                    $context["translated_page"] = $this->getAttribute($this->getAttribute(($context["langswitcher"] ?? null), "translated_pages", []), $context["language"], [], "array");
                    // line 14
                    echo "            ";
                    if (( !($context["translated_page"] ?? null) ||  !$this->getAttribute(($context["translated_page"] ?? null), "published", []))) {
                        // line 15
                        echo "                ";
                        if ((($context["untranslated_pages_behavior"] ?? null) == "redirect")) {
                            // line 16
                            echo "                    ";
                            $context["lang_url"] = (($context["base_lang_url"] ?? null) . "/");
                            // line 17
                            echo "                ";
                        } elseif ((($context["untranslated_pages_behavior"] ?? null) == "hide")) {
                            // line 18
                            echo "                    ";
                            $context["show_language"] = false;
                            // line 19
                            echo "                ";
                        }
                        // line 20
                        echo "            ";
                    }
                    // line 21
                    echo "        ";
                }
                // line 22
                echo "        ";
                $context["active_class"] = "";
                // line 23
                echo "    ";
            }
            // line 24
            echo "
    ";
            // line 25
            if (($context["show_language"] ?? null)) {
                // line 26
                echo "        <li><a href=\"";
                echo (($context["lang_url"] ?? null) . $this->getAttribute(($context["uri"] ?? null), "params", []));
                echo "\" class=\"external";
                echo ($context["active_class"] ?? null);
                echo "\">";
                echo twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('native_name')->getCallable(), [$context["language"]]));
                echo "</a></li>
    ";
            }
            // line 28
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "partials/langswitcher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 30,  114 => 28,  104 => 26,  102 => 25,  99 => 24,  96 => 23,  93 => 22,  90 => 21,  87 => 20,  84 => 19,  81 => 18,  78 => 17,  75 => 16,  72 => 15,  69 => 14,  66 => 13,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  51 => 8,  48 => 7,  45 => 6,  42 => 5,  40 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"langswitcher\">
{% for language in langswitcher.languages %}

    {% set show_language = true %}
    {% if language == langswitcher.current %}
        {% set lang_url = page.url %}
        {% set active_class = ' active' %}
    {% else %}
        {% set base_lang_url = base_url_simple ~ grav.language.getLanguageURLPrefix(language) %}
        {% set lang_url = base_lang_url ~ langswitcher.page_route ~ page.urlExtension %}
        {% set untranslated_pages_behavior = grav.config.plugins.langswitcher.untranslated_pages_behavior %}
        {% if untranslated_pages_behavior != 'none' %}
            {% set translated_page = langswitcher.translated_pages[language] %}
            {% if (not translated_page) or (not translated_page.published) %}
                {% if untranslated_pages_behavior == 'redirect' %}
                    {% set lang_url = base_lang_url ~ '/' %}
                {% elseif untranslated_pages_behavior == 'hide' %}
                    {% set show_language = false %}
                {% endif %}
            {% endif %}
        {% endif %}
        {% set active_class = '' %}
    {% endif %}

    {% if show_language %}
        <li><a href=\"{{ lang_url ~ uri.params }}\" class=\"external{{ active_class }}\">{{ native_name(language)|capitalize }}</a></li>
    {% endif %}

{% endfor %}
</ul>
", "partials/langswitcher.html.twig", "J:\\riberry\\e\\grav-skeleton-multilang-site\\user\\plugins\\langswitcher\\templates\\partials\\langswitcher.html.twig");
    }
}
