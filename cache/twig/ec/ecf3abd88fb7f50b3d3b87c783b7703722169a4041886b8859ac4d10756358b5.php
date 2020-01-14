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

/* partials/share.html.twig */
class __TwigTemplate_0dee0edd26bc4ff1572d784544e3d7733089a9293ce787a744184b2bc1ddd849 extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", []), "twitter", [])) {
            // line 2
            echo "<a class=\"twitter\" href=\"https://twitter.com/intent/tweet?text=";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo " by ";
            echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", []), "twitter", []);
            echo " - ";
            echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
            echo "\"><span class=\"icon-twitter\"> ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "TWEET");
            echo "</span></a>
";
        }
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", []), "facebook", [])) {
            // line 5
            echo "<a class=\"facebook\" href=\"#\" onclick=\"
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),
      'facebook-share-dialog',
      'width=626,height=436');
    return false;\"><span class=\"icon-facebook-rect\"> ";
            // line 10
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "SHARE");
            echo "</span>
</a>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/share.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  46 => 5,  44 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if theme_config.social.twitter %}
<a class=\"twitter\" href=\"https://twitter.com/intent/tweet?text={{page.title}} by {{ theme_config.social.twitter }} - {{ page.url(true) }}\"><span class=\"icon-twitter\"> {{ 'TWEET'|t }}</span></a>
{% endif %}
{% if theme_config.social.facebook %}
<a class=\"facebook\" href=\"#\" onclick=\"
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),
      'facebook-share-dialog',
      'width=626,height=436');
    return false;\"><span class=\"icon-facebook-rect\"> {{ 'SHARE'|t }}</span>
</a>
{% endif %}
", "partials/share.html.twig", "J:\\riberry\\e\\grav-skeleton-multilang-site\\user\\themes\\cacti\\templates\\partials\\share.html.twig");
    }
}
