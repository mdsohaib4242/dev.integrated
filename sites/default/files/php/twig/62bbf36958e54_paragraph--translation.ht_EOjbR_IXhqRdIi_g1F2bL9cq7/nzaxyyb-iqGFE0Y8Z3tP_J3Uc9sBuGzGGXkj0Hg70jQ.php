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

/* themes/custom/integrated/templates/paragraph/paragraph--translation.html.twig */
class __TwigTemplate_665be41991259fe24a0cfa679a1f6882328b1843d685d38156ad1387ef092144 extends \Twig\Template
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
        echo "<section class=\"translation\">
    <div class=\"translation-top\">
        <h4 class=\"topic-highlighter\"> ";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title_", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "</h4>
        <p> ";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_body", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "</p>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <img src=\"";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 8), 0, [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\" class=\"img-fluid\">
        </div>
        <div class=\"col-lg-6\">
            <div class=\"translation-right\">
                <h5> ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title_inner", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "</h5>
                <ul>
                    <p>";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_body_inner", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "</p>
                </ul>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/integrated/templates/paragraph/paragraph--translation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 14,  61 => 12,  54 => 8,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"translation\">
    <div class=\"translation-top\">
        <h4 class=\"topic-highlighter\"> {{ content.field_title_}}</h4>
        <p> {{ content.field_body}}</p>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <img src=\"{{ content.field_image.0}}\" class=\"img-fluid\">
        </div>
        <div class=\"col-lg-6\">
            <div class=\"translation-right\">
                <h5> {{ content.field_title_inner}}</h5>
                <ul>
                    <p>{{ content.field_body_inner}}</p>
                </ul>
            </div>
        </div>
    </div>
</section>", "themes/custom/integrated/templates/paragraph/paragraph--translation.html.twig", "C:\\xampp\\htdocs\\ng\\integrated\\themes\\custom\\integrated\\templates\\paragraph\\paragraph--translation.html.twig");
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
