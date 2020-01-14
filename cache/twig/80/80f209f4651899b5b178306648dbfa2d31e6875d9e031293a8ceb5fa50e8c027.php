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

/* feed.rss.twig */
class __TwigTemplate_3f8a3a8c25ed48a569302337149a077a5ff275e12fdc99eae4f58e3835521c12 extends \Twig\Template
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
        $context["collection"] = (((isset($context["collection"]) || array_key_exists("collection", $context))) ? (_twig_default_filter(($context["collection"] ?? null), $this->getAttribute(($context["page"] ?? null), "collection", []))) : ($this->getAttribute(($context["page"] ?? null), "collection", [])));
        // line 2
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<rss xmlns:atom=\"http://www.w3.org/2005/Atom\" version=\"2.0\">
    <channel>
        <title>";
        // line 5
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</title>
        <link>";
        // line 6
        echo $this->getAttribute(($context["uri"] ?? null), "rootUrl", [0 => true], "method");
        echo $this->getAttribute(($context["uri"] ?? null), "route", [], "method");
        echo ".";
        echo $this->getAttribute(($context["uri"] ?? null), "extension", [], "method");
        echo "</link>
        <description>";
        // line 7
        echo $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "description", []);
        echo "</description>
        <language>";
        // line 8
        echo $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "lang", []);
        echo "</language>
        <atom:link href=\"";
        // line 9
        echo $this->getAttribute(($context["uri"] ?? null), "url", [0 => true], "method");
        echo ".";
        echo $this->getAttribute(($context["uri"] ?? null), "extension", []);
        echo "\" rel=\"self\" type=\"application/rss+xml\"/>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "        ";
            $context["banner"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["item"], "media", []), "images", []));
            // line 12
            echo "        <item>
            <title>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []));
            echo "</title>
            <link>";
            // line 14
            echo $this->getAttribute($context["item"], "url", [0 => true], "method");
            echo "</link>
            <description>
                <![CDATA[
                ";
            // line 17
            if (($context["banner"] ?? null)) {
                // line 18
                echo "                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->absoluteUrlFilter($this->getAttribute($this->getAttribute(($context["banner"] ?? null), "cropZoom", [0 => 600, 1 => 400], "method"), "html", []));
                echo "
                ";
            }
            // line 20
            echo "                ";
            echo \Grav\Common\Utils::safeTruncateHTML($this->getAttribute($context["item"], "content", []), $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "length", []));
            echo "
                ]]>
            </description>
            <category>";
            // line 23
            echo twig_join_filter($this->getAttribute($this->getAttribute($context["item"], "taxonomy", []), "tag", []), ",");
            echo "</category>
            <guid>";
            // line 24
            echo $this->getAttribute($context["item"], "url", [0 => true], "method");
            echo "</guid>
            <pubDate>";
            // line 25
            echo twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", []), "D, d M Y H:i:s O");
            echo "</pubDate>
        </item>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </channel>
</rss>
";
    }

    public function getTemplateName()
    {
        return "feed.rss.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 28,  105 => 25,  101 => 24,  97 => 23,  90 => 20,  84 => 18,  82 => 17,  76 => 14,  72 => 13,  69 => 12,  66 => 11,  62 => 10,  56 => 9,  52 => 8,  48 => 7,  41 => 6,  37 => 5,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set collection = collection|default(page.collection) %}
<?xml version=\"1.0\" encoding=\"utf-8\"?>
<rss xmlns:atom=\"http://www.w3.org/2005/Atom\" version=\"2.0\">
    <channel>
        <title>{{ page.title }}</title>
        <link>{{ uri.rootUrl(true) }}{{ uri.route() }}.{{ uri.extension() }}</link>
        <description>{{ collection.params.description }}</description>
        <language>{{ collection.params.lang }}</language>
        <atom:link href=\"{{ uri.url(true) }}.{{  uri.extension }}\" rel=\"self\" type=\"application/rss+xml\"/>
        {% for item in collection %}
        {% set banner = item.media.images|first %}
        <item>
            <title>{{ item.title|e }}</title>
            <link>{{ item.url(true) }}</link>
            <description>
                <![CDATA[
                {% if banner %}
                {{ banner.cropZoom(600,400).html|absolute_url|raw }}
                {% endif %}
                {{ item.content|safe_truncate_html(collection.params.length)|raw }}
                ]]>
            </description>
            <category>{{ item.taxonomy.tag|join(',') }}</category>
            <guid>{{ item.url(true) }}</guid>
            <pubDate>{{ item.date|date('D, d M Y H:i:s O') }}</pubDate>
        </item>
        {% endfor %}
    </channel>
</rss>
", "feed.rss.twig", "J:\\riberry\\e\\grav-skeleton-multilang-site\\user\\plugins\\feed\\templates\\feed.rss.twig");
    }
}
