<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/my_theme/templates/user--page.html.twig */
class __TwigTemplate_dd40809aa86630787b0b6302b1444f8e5859b22316bafdbef9804ccda2a0586e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<article>
  ";
        // line 9
        if (($context["content"] ?? null)) {
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 10, $this->source), "html", null, true);
        }
        // line 12
        echo "</article>

  ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["text"] => $context["url"]) {
            // line 15
            echo "    <p>
      <a href=";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["url"], 16, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["text"], 16, $this->source), "html", null, true);
            echo "</a>
    </p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['text'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/my_theme/templates/user--page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  58 => 16,  55 => 15,  51 => 14,  47 => 12,  44 => 10,  42 => 9,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * Template for page of user if login_only_mode ON
 *
 * Add links to contact page and submission list page to the User profile page for quick access.
 */
#}
<article>
  {% if content %}
    {{- content -}}
  {% endif %}
</article>

  {% for text, url in links %}
    <p>
      <a href={{ url }}>{{ text }}</a>
    </p>
  {% endfor %}

", "themes/custom/my_theme/templates/user--page.html.twig", "/var/www/domain2.com/web/themes/custom/my_theme/templates/user--page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 9, "for" => 14);
        static $filters = array("escape" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
