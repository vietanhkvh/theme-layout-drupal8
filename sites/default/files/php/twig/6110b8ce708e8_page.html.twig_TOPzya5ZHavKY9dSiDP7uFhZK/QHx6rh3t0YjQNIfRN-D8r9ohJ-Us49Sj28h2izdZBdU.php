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

/* themes/moschino/page.html.twig */
class __TwigTemplate_ff79a2215d0da92e8b26bb6140ad1c97b87623cfc79cccfe6ac8533bc2af0a7b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 70];
        $filters = ["escape" => 48];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 45
        echo "<div class=\"container\">

  <header role=\"banner\" class=\"site-header\">
    ";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
  </header>

  ";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
  ";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
        echo "

  ";
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "

  ";
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "

  ";
        // line 58
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "

<!-- #masthead -->
<div id=\"content\" class=\"site-content\">
  <div id=\"primary\" class=\"content-area column full\">
    <main role=\"main\" id=\"main\" class=\"site-main\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 65
        echo "
      <div class=\"layout-content\">
        ";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
      </div>";
        // line 69
        echo "
      ";
        // line 70
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 71
            echo "        <aside class=\"layout-sidebar-first\" role=\"complementary\">
          ";
            // line 72
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
        </aside>
      ";
        }
        // line 75
        echo "
      ";
        // line 76
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 77
            echo "        <aside class=\"layout-sidebar-second\" role=\"complementary\">
          ";
            // line 78
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
        </aside>
      ";
        }
        // line 81
        echo "
    </main>
  </div>
</div>

  ";
        // line 86
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 87
            echo "    <footer role=\"contentinfo\">
      ";
            // line 88
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 91
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/moschino/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 91,  142 => 88,  139 => 87,  137 => 86,  130 => 81,  124 => 78,  121 => 77,  119 => 76,  116 => 75,  110 => 72,  107 => 71,  105 => 70,  102 => 69,  98 => 67,  94 => 65,  85 => 58,  80 => 56,  75 => 54,  70 => 52,  66 => 51,  60 => 48,  55 => 45,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div class=\"container\">

  <header role=\"banner\" class=\"site-header\">
    {{ page.header }}
  </header>

  {{ page.primary_menu }}
  {{ page.secondary_menu }}

  {{ page.breadcrumb }}

  {{ page.highlighted }}

  {{ page.help }}

<!-- #masthead -->
<div id=\"content\" class=\"site-content\">
  <div id=\"primary\" class=\"content-area column full\">
    <main role=\"main\" id=\"main\" class=\"site-main\">
      <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

      <div class=\"layout-content\">
        {{ page.content }}
      </div>{# /.layout-content #}

      {% if page.sidebar_first %}
        <aside class=\"layout-sidebar-first\" role=\"complementary\">
          {{ page.sidebar_first }}
        </aside>
      {% endif %}

      {% if page.sidebar_second %}
        <aside class=\"layout-sidebar-second\" role=\"complementary\">
          {{ page.sidebar_second }}
        </aside>
      {% endif %}

    </main>
  </div>
</div>

  {% if page.footer %}
    <footer role=\"contentinfo\">
      {{ page.footer }}
    </footer>
  {% endif %}

</div>{# /.layout-container #}
", "themes/moschino/page.html.twig", "E:\\Users\\Admin\\PHP Projects\\Drupal\\theme-layout\\themes\\moschino\\page.html.twig");
    }
}
