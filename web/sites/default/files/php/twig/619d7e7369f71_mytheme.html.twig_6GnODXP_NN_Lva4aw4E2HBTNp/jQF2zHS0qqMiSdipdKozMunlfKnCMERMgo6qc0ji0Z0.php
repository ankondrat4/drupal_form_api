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

/* modules/custom/smile_entity/templates/mytheme.html.twig */
class __TwigTemplate_6652aaf94e86f4bb45ce43eef275bd7043370d52cb31dee4f16b155a2f1de673 extends \Twig\Template
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
        // line 1
        if (($context["content"] ?? null)) {
            // line 2
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("smile_entity/global-styling"), "html", null, true);
            echo "
  <div";
            // line 3
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "entity_div"], "method", false, false, true, 3), 3, $this->source), "html", null, true);
            echo ">
    <p>
      ";
            // line 5
            echo t("<b>Title:</b>
      <a href=\"@url\">
        @label</a>", array("@url" =>             // line 6
($context["url"] ?? null), "@label" =>             // line 7
($context["label"] ?? null), ));
            // line 8
            echo "      ";
            // line 10
            echo "    </p>
    <p>
      ";
            // line 12
            echo t("<b>Body:</b> @body", array("@body" => ($context["body"] ?? null), ));
            // line 13
            echo "    </p>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/custom/smile_entity/templates/mytheme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  63 => 12,  59 => 10,  57 => 8,  55 => 7,  54 => 6,  51 => 5,  46 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if content %}
  {{ attach_library('smile_entity/global-styling')}}
  <div{{ attributes.addClass('entity_div') }}>
    <p>
      {% trans %}<b>Title:</b>
      <a href=\"{{ url }}\">
        {{ label }}</a>{% endtrans %}
      {# Link to entity id:1
      <a href=\"{{ url('entity.smile_entity.canonical', {'smile_entity': 1}) }}\">{{ 'View entity page'|t }}</a>#}
    </p>
    <p>
      {% trans %}<b>Body:</b> {{ body }}{% endtrans %}
    </p>
  </div>
{% endif %}
", "modules/custom/smile_entity/templates/mytheme.html.twig", "/var/www/domain2.com/web/modules/custom/smile_entity/templates/mytheme.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "trans" => 5);
        static $filters = array("escape" => 2);
        static $functions = array("attach_library" => 2);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape'],
                ['attach_library']
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
