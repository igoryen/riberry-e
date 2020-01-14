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

/* post.html.twig */
class __TwigTemplate_2e09a7bc66b51d932ee638c9f784fe78d5832e273af72b929f6c39e906e519e6 extends \Twig\Template
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
        $this->loadTemplate("post.html.twig", "post.html.twig", 1, "1987231415")->display($context);
    }

    public function getTemplateName()
    {
        return "post.html.twig";
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

    {% block content %}
    <article class=\"post\">
        <header>
            <h1>{{ page.title }}</h1>
            <h2 class=\"headline\">{{ 'MONTHS_OF_THE_YEAR'|ta(page.date|date('n') - 1) }} {{ page.date|date(\"d, Y\") }}</h2>
        </header>
        <section id=\"post-body\">
            {{ page.content }}
        </section>
    </article>
    <footer id=\"post-meta\" class=\"clearfix\">
        <a href=\"http://twitter.com/{{ theme_config.social.twitter|trim('@') }}\">
            <img class=\"avatar\" src=\"{{ avatar_url }}\">
            <div>
                <span class=\"dark\">{{ theme_config.author }}</span>
                <span>{{ 'SITE.DESCRIPTION'|t }}</span>
            </div>
        </a>

        <section id=\"sharing\">
            {% include 'partials/share.html.twig' %}
        </section>
    </footer>

    <nav id=\"post-nav\" class=\"clearfix\">
        {% if not page.isFirst %}
        <span class=\"prev\">
            <a href=\"{{ page.nextSibling.url }}\"><span class=\"arrow\">←</span> {{ page.nextSibling.title }}</a>
        </span>
        {% endif %}

        {% if not page.isLast %}
        <span class=\"next\">
            <a href=\"{{ page.prevSibling.url }}\">{{ page.prevSibling.title }} <span class=\"arrow\">→</span></a>
        </span>
        {% endif %}
    </nav>


    <!-- Disqus comments -->
    {% if page.header.disqus %}
        <div class=\"archive readmore\">
            <h3>Comments</h3>
            {% include 'partials/disqus.html.twig' %}
        </div>
    {% endif %}

    <!-- Archive post list -->
    {% if page.header.archive %}
        <ul id=\"post-list\" class=\"archive readmore\">
            <h3>Read more</h3>
            {% for post in site.posts %}
                <li>
                    <a href=\"{{ post.url }}\">{{ post.title }}<aside class=\"dates\">{{ post.date|date(\"M d\")  }}</aside></a>
                </li>
            {% endfor %}
        </ul>
    {% endif %}

    {% endblock %}


{% endembed %}
", "post.html.twig", "J:\\riberry\\e\\grav-skeleton-multilang-site\\user\\themes\\cacti\\templates\\post.html.twig");
    }
}


/* post.html.twig */
class __TwigTemplate_2e09a7bc66b51d932ee638c9f784fe78d5832e273af72b929f6c39e906e519e6___1987231415 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "post.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <article class=\"post\">
        <header>
            <h1>";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h1>
            <h2 class=\"headline\">";
        // line 7
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translateArray("MONTHS_OF_THE_YEAR", (twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "n") - 1));
        echo " ";
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "d, Y");
        echo "</h2>
        </header>
        <section id=\"post-body\">
            ";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
        </section>
    </article>
    <footer id=\"post-meta\" class=\"clearfix\">
        <a href=\"http://twitter.com/";
        // line 14
        echo twig_trim_filter($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", []), "twitter", []), "@");
        echo "\">
            <img class=\"avatar\" src=\"";
        // line 15
        echo ($context["avatar_url"] ?? null);
        echo "\">
            <div>
                <span class=\"dark\">";
        // line 17
        echo $this->getAttribute(($context["theme_config"] ?? null), "author", []);
        echo "</span>
                <span>";
        // line 18
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "SITE.DESCRIPTION");
        echo "</span>
            </div>
        </a>

        <section id=\"sharing\">
            ";
        // line 23
        $this->loadTemplate("partials/share.html.twig", "post.html.twig", 23)->display($context);
        // line 24
        echo "        </section>
    </footer>

    <nav id=\"post-nav\" class=\"clearfix\">
        ";
        // line 28
        if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
            // line 29
            echo "        <span class=\"prev\">
            <a href=\"";
            // line 30
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []);
            echo "\"><span class=\"arrow\">←</span> ";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "title", []);
            echo "</a>
        </span>
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
            // line 35
            echo "        <span class=\"next\">
            <a href=\"";
            // line 36
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []);
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "title", []);
            echo " <span class=\"arrow\">→</span></a>
        </span>
        ";
        }
        // line 39
        echo "    </nav>


    <!-- Disqus comments -->
    ";
        // line 43
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "disqus", [])) {
            // line 44
            echo "        <div class=\"archive readmore\">
            <h3>Comments</h3>
            ";
            // line 46
            $this->loadTemplate("partials/disqus.html.twig", "post.html.twig", 46)->display($context);
            // line 47
            echo "        </div>
    ";
        }
        // line 49
        echo "
    <!-- Archive post list -->
    ";
        // line 51
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "archive", [])) {
            // line 52
            echo "        <ul id=\"post-list\" class=\"archive readmore\">
            <h3>Read more</h3>
            ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "posts", []));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 55
                echo "                <li>
                    <a href=\"";
                // line 56
                echo $this->getAttribute($context["post"], "url", []);
                echo "\">";
                echo $this->getAttribute($context["post"], "title", []);
                echo "<aside class=\"dates\">";
                echo twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", []), "M d");
                echo "</aside></a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "        </ul>
    ";
        }
        // line 61
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 61,  279 => 59,  266 => 56,  263 => 55,  259 => 54,  255 => 52,  253 => 51,  249 => 49,  245 => 47,  243 => 46,  239 => 44,  237 => 43,  231 => 39,  223 => 36,  220 => 35,  218 => 34,  215 => 33,  207 => 30,  204 => 29,  202 => 28,  196 => 24,  194 => 23,  186 => 18,  182 => 17,  177 => 15,  173 => 14,  166 => 10,  158 => 7,  154 => 6,  150 => 4,  147 => 3,  30 => 1,);
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

    {% block content %}
    <article class=\"post\">
        <header>
            <h1>{{ page.title }}</h1>
            <h2 class=\"headline\">{{ 'MONTHS_OF_THE_YEAR'|ta(page.date|date('n') - 1) }} {{ page.date|date(\"d, Y\") }}</h2>
        </header>
        <section id=\"post-body\">
            {{ page.content }}
        </section>
    </article>
    <footer id=\"post-meta\" class=\"clearfix\">
        <a href=\"http://twitter.com/{{ theme_config.social.twitter|trim('@') }}\">
            <img class=\"avatar\" src=\"{{ avatar_url }}\">
            <div>
                <span class=\"dark\">{{ theme_config.author }}</span>
                <span>{{ 'SITE.DESCRIPTION'|t }}</span>
            </div>
        </a>

        <section id=\"sharing\">
            {% include 'partials/share.html.twig' %}
        </section>
    </footer>

    <nav id=\"post-nav\" class=\"clearfix\">
        {% if not page.isFirst %}
        <span class=\"prev\">
            <a href=\"{{ page.nextSibling.url }}\"><span class=\"arrow\">←</span> {{ page.nextSibling.title }}</a>
        </span>
        {% endif %}

        {% if not page.isLast %}
        <span class=\"next\">
            <a href=\"{{ page.prevSibling.url }}\">{{ page.prevSibling.title }} <span class=\"arrow\">→</span></a>
        </span>
        {% endif %}
    </nav>


    <!-- Disqus comments -->
    {% if page.header.disqus %}
        <div class=\"archive readmore\">
            <h3>Comments</h3>
            {% include 'partials/disqus.html.twig' %}
        </div>
    {% endif %}

    <!-- Archive post list -->
    {% if page.header.archive %}
        <ul id=\"post-list\" class=\"archive readmore\">
            <h3>Read more</h3>
            {% for post in site.posts %}
                <li>
                    <a href=\"{{ post.url }}\">{{ post.title }}<aside class=\"dates\">{{ post.date|date(\"M d\")  }}</aside></a>
                </li>
            {% endfor %}
        </ul>
    {% endif %}

    {% endblock %}


{% endembed %}
", "post.html.twig", "J:\\riberry\\e\\grav-skeleton-multilang-site\\user\\themes\\cacti\\templates\\post.html.twig");
    }
}
