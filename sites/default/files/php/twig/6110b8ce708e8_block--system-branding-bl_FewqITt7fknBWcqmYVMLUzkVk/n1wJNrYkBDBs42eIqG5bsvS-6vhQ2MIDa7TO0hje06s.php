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

/* themes/moschino/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_9a873b69229c46f7fb4ad70f246ec8bdcc6a4d24df9ad324ab4e46cc6016a453 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 17];
        $filters = ["escape" => 19, "t" => 19];
        $functions = ["path" => 18];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                ['path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("block.html.twig", "themes/moschino/templates/block/block--system-branding-block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        // line 17
        echo "  ";
        if (($context["site_logo"] ?? null)) {
            // line 18
            echo "    <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
            echo "\" rel=\"home\">
      <img src=\"";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null)), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" />
    </a>
  ";
        }
        // line 22
        echo "  <div class=\"site-branding\">
  ";
        // line 23
        if (($context["site_name"] ?? null)) {
            // line 24
            echo "    <h1 class=\"site-branding\">
      <a href=\"";
            // line 25
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" rel=\"home\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
            echo "</a>
    </h1>
  ";
        }
        // line 28
        echo "  <h2 class=\"site-description\">
  ";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
        echo "
  <h2>
  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/moschino/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 29,  101 => 28,  91 => 25,  88 => 24,  86 => 23,  83 => 22,  75 => 19,  70 => 18,  67 => 17,  64 => 16,  54 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"block.html.twig\" %}
{#
/**
 * @file
 * Theme override for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 */
#}
{% block content %}
  {% if site_logo %}
    <a href=\"{{ path('<front>') }}\" rel=\"home\">
      <img src=\"{{ site_logo }}\" alt=\"{{ 'Home'|t }}\" />
    </a>
  {% endif %}
  <div class=\"site-branding\">
  {% if site_name %}
    <h1 class=\"site-branding\">
      <a href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">{{ site_name }}</a>
    </h1>
  {% endif %}
  <h2 class=\"site-description\">
  {{ site_slogan }}
  <h2>
  </div>
{% endblock %}
", "themes/moschino/templates/block/block--system-branding-block.html.twig", "E:\\Users\\Admin\\PHP Projects\\Drupal\\theme-layout\\themes\\moschino\\templates\\block\\block--system-branding-block.html.twig");
    }
}
