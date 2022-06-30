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

/* themes/custom/integrated/templates/paragraph/paragraph--industries-we-serve-section.html.twig */
class __TwigTemplate_8bc4ea6c26c01653023c9cc87973199ec315ba1e7cdc92c7bb4543a4c86523a8 extends \Twig\Template
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
        echo "<section class=\"industries-bg my-3 py-5\">
    <div class=\"container-fluid\">
    <h4 class=\"topic-highlighter text-center\"> ";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title_", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo " </h4>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"industries-text-services pb-3\">
                    <p class=\"py-3\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_body", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</p>
                    <a href=\"";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_link", [], "any", false, false, true, 8), "get", [0 => 0], "method", false, false, true, 8), "getUrl", [], "method", false, false, true, 8), "toString", [], "method", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\" class=\"explore-btn\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_link", [], "any", false, false, true, 8), "title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</a>
                </div>
            </div>
            <div class=\"col-lg-8\">
                <div class=\"row\">
                    ";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_industries_we_serve_inner", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/integrated/templates/paragraph/paragraph--industries-we-serve-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 13,  54 => 8,  50 => 7,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"industries-bg my-3 py-5\">
    <div class=\"container-fluid\">
    <h4 class=\"topic-highlighter text-center\"> {{content.field_title_}} </h4>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"industries-text-services pb-3\">
                    <p class=\"py-3\">{{content.field_body}}</p>
                    <a href=\"{{paragraph.field_link.get(0).getUrl().toString()}}\" class=\"explore-btn\">{{paragraph.field_link.title}}</a>
                </div>
            </div>
            <div class=\"col-lg-8\">
                <div class=\"row\">
                    {{content.field_industries_we_serve_inner}}
                </div>
            </div>
        </div>
    </div>
</section>", "themes/custom/integrated/templates/paragraph/paragraph--industries-we-serve-section.html.twig", "C:\\xampp\\htdocs\\ng\\integrated\\themes\\custom\\integrated\\templates\\paragraph\\paragraph--industries-we-serve-section.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
