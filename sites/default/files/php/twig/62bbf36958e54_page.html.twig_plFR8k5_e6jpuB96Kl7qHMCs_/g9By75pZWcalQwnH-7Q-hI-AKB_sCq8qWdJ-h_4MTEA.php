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

/* themes/custom/integrated/templates/layout/page.html.twig */
class __TwigTemplate_56bfb6bd5ffa4c8122f1179dfcb0aa295f45b077a06256f0579a4b8c7aeb3214 extends \Twig\Template
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
        echo "

\t<div class=\"container-fullwidth navbar-section\">

\t\t<div class=\"topbar\">
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">STORE</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">E-LEARNING</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>

\t\t<div class=\"navbar-wrap\">

\t\t\t<!-- NAVBAR -->
\t\t\t<nav class=\"navbar navbar-expand-lg bg-white navbar-nav navbar-middle\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<a class=\"navbar-brand\" href=\"#\">
\t\t\t\t\t\t<span class=\"site-logo\">ils</span>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"#\">
\t\t\t\t\t\t<h4 class=\"text-dark site-name\">INTEGRATED LANGUAGE SOLUTIONS</h4>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t<ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
\t\t\t\t\t\t\t<li class=\"nav-item d-md-block d-none\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-magnifying-glass search-icon\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>


\t\t<div class=\"navbar-bottom d-lg-block d-none\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<ul class=\"navbar-bottom-menus\">
\t\t\t\t\t<li class=\"menu-link-1\">
\t\t\t\t\t\t<a href=\"";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 45, $this->source), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-house-chimney green-secoundary\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"menu-link-1\">
\t\t\t\t\t\t<a href=\"./our-firm.php\">
\t\t\t\t\t\t\t<span>OUR FIRM</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"menu-link-1 has-menu\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<span>SERVICES</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"menu-level-2\">
\t\t\t\t\t\t\t<div class=\"menu-summary\">
\t\t\t\t\t\t\t\t<h5>We help accelerate your business to global markets with our industry leading language solutions.</h5>
\t\t\t\t\t\t\t\t<i class=\"fas fa-times close\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<a href=\"./services.php\">
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2 service\"></div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Translation</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-level-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Professional Translation</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Certified Translation</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Neural Machine Translation</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Email and Chat Translation</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">On-Demand Translation</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2 menu-link-odd\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Interpretation</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-level-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">On-site Consecutive and Simultaneous Interpretation</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Over-the-Phone Interpretation</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Video Remote Consecutive and Simultaneous Interpretation </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Real-time Simultaneous Interpretation Application</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Multilingual Customer Support</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Equipment Rental and Support </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Sign-Language Interpretation </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">On-demand interpretation App </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Localisation</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-level-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Software Localization</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Mobile App Localization</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Game Localization</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Website Localization</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">eLearning Localization</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Multilingual Testing & Quality Assurance</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2 menu-link-odd\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Training</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-level-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Language Training</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Intercultural Training</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Staffing</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-level-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Multilingual Recruitment Services</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2 menu-link-odd\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Marketing Localization</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-level-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Multicultural Marketing</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Multilingual Content writing </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Global SEO</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Custom Design </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Multimedia Localization</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-level-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Transcription</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Subtitling </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">SDH And Closed Captions</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Dubbing </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Voice Over </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2 menu-link-odd\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Artificial Intelligence</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-level-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Data Services</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Multilingual Chatbots </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">AI-enabled Simultaneous Interpretation Application</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"menu-link-1\">
\t\t\t\t\t\t<a href=\"./language.php\">
\t\t\t\t\t\t\t<span>LANGUAGES</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"menu-link-1\">
\t\t\t\t\t\t<a href=\"./industry.php\">
\t\t\t\t\t\t\t<span>INDUSTRIES</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"menu-link-1 has-menu\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<span>RESOURCES</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"menu-level-2\">
\t\t\t\t\t\t\t<div class=\"menu-summary\">
\t\t\t\t\t\t\t\t<h5>We help accelerate your business to global markets with our industry leading language solutions.</h5>
\t\t\t\t\t\t\t\t<i class=\"fas fa-times close\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<a href=\"./resources.php\">
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2 resource\"></div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 433
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 433, $this->source), "html", null, true);
        echo "news\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">News</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2 menu-link-odd\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 441
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 441, $this->source), "html", null, true);
        echo "blogs\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Blogs</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 449
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 449, $this->source), "html", null, true);
        echo "articles\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Articles</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2 menu-link-odd\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 457
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 457, $this->source), "html", null, true);
        echo "case-studies\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Case Studies</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 465
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 465, $this->source), "html", null, true);
        echo "Language-Learning\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Language Learning</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"menu-link-1\">
\t\t\t\t\t\t<a href=\"./contact-us.php\">
\t\t\t\t\t\t\t<span>CONTACT US</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>

\t</div>

\t<div>
\t\t<nav class=\"navbar navbar-light bg-light d-lg-none d-block sticky-top\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasNavbar\" aria-controls=\"offcanvasNavbar\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<i class=\"fa-solid fa-magnifying-glass text-green\"></i>
\t\t\t\t<div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasNavbar\" aria-labelledby=\"offcanvasNavbarLabel\">
\t\t\t\t\t<div class=\"offcanvas-header\">
\t\t\t\t\t\t<h5 class=\"offcanvas-title\" id=\"offcanvasNavbarLabel\">HOME</h5>
\t\t\t\t\t\t<button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"offcanvas-body menu-small-wrap\">
\t\t\t\t\t\t<ul class=\"navbar-nav justify-content-end flex-grow-1 pe-3\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link menu-small-link\" aria-current=\"page\" href=\"#\">OUR FIRM</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"menu-small has-menu\">
\t\t\t\t\t\t\t\t<a class=\"nav-link menu-small-link\" href=\"#\">
\t\t\t\t\t\t\t\t\tSERVICES
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"level-small-2\">
\t\t\t\t\t\t\t\t\t<div class=\"link-small-2 has-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">TRANSLATION</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"level-small-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Professional Translation</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Certified Translation</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Neural Machine Translation</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Email and Chat Translation</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>On-Demand Translation</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-small-2 has-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">INTERPRETATION</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"level-small-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>On-site Consecutive and Simultaneous Interpretation</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Over-the-Phone Interpretation</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Video Remote Consecutive and Simultaneous Interpretation</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Real-time Simultaneous Interpretation Application</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Multilingual Customer Support</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Equipment Rental and Support</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Multilingual Customer Support</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Sign-Language Interpretation</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>On-demand interpretation App</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-small-2 has-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Localisation</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"level-small-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Software Localization</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Mobile App Localization</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Game Localization</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Website Localization</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>eLearning Localization</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Multilingual Testing & Quality Assurance</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-small-2 has-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Training</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"level-small-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Language Training</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Intercultural Training</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-small-2 has-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Staffing</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"level-small-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Multilingual Recruitment Services</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-small-2 has-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Marketing Localization</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"level-small-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Multicultural Marketing</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Multilingual Content writing</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Global SEO</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Custom Design</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-small-2 has-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Multimedia Localization</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"level-small-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Transcription</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Subtitling</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>GSDH And Closed Captions</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Dubbing</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Voice Over</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-small-2 has-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Artificial Intelligence</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"level-small-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Data Services</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Multilingual Chatbots</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Multilingual Chatbots</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>AI-enabled Simultaneous Interpretation Application</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"menu-small\">
\t\t\t\t\t\t\t\t<a class=\"nav-link menu-small-link\" href=\"#\">LANGUAGES</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"nav-link menu-small-link\" href=\"#\">INDUSTRIES</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"menu-small has-menu\">
\t\t\t\t\t\t\t\t<a class=\"nav-link menu-small-link\" href=\"#\">RESOURCES</a>
\t\t\t\t\t\t\t\t<div class=\"level-small-2\">
\t\t\t\t\t\t\t\t\t<div class=\"link-small-2\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 739
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 739, $this->source), "html", null, true);
        echo "news\">NEWS</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-small-2\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 742
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 742, $this->source), "html", null, true);
        echo "blogs\">BLOGS</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-small-2\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 745
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 745, $this->source), "html", null, true);
        echo "articles\">ARTICLES</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-small-2\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 748
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 748, $this->source), "html", null, true);
        echo "case-studies\">CASE STUDIES</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-small-2\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 751
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 751, $this->source), "html", null, true);
        echo "Language-Learning\">LANGUAGE LEARNING</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"nav-link menu-small-link\" href=\"#\">INDUSTRIES</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</div>

";
        // line 766
        echo "

\t";
        // line 782
        echo "
\t";
        // line 783
        if ((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 783) == 19)) {
            // line 784
            echo "\t";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 784)) {
                // line 785
                echo "\t<section class=\"top-banner-simple\">
\t\t<div class=\"top-banner-simple-content\">
\t\t\t";
                // line 787
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 787), 787, $this->source), "html", null, true);
                echo " 
\t\t\t<div>
\t\t\t\t<img src=\"";
                // line 789
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "image_in_page", [], "any", false, false, true, 789), 789, $this->source))), "html", null, true);
                echo "\" class=\"img-fluid\">
\t\t\t</div>
\t\t</div>
\t</section>
\t";
            }
            // line 794
            echo "\t";
        } elseif (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "type", [], "any", false, false, true, 794) == "page") || (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "type", [], "any", false, false, true, 794) == "article"))) {
            // line 795
            echo "\t<section class=\"top-banner\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-8\">
\t\t\t\t<div class=\"top-banner-left\">
\t\t\t\t\t";
            // line 799
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 799), 799, $this->source), "html", null, true);
            echo " 
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-4\">
\t\t\t\t<div class=\"top-banner-right\">
\t\t\t\t\t<img src=\"";
            // line 804
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "image_in_page", [], "any", false, false, true, 804), 804, $this->source))), "html", null, true);
            echo "\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t";
        }
        // line 810
        echo "\t
\t
\t";
        // line 812
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 812)) {
            // line 813
            echo "\t<section class=\"breadcrum\">
\t\t<div class=\"breadcrum-top\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t<div class=\"breadcrum-top-left\">
\t\t\t\t\t\t\t";
            // line 819
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 819), 819, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 829
            echo "\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t<div class=\"breadcrum-top-right\">
\t\t\t\t\t\t\t<div class=\"breadcrum-social-links\">
\t\t\t\t\t\t\t\t<span>Share this page</span>
\t\t\t\t\t\t\t\t<a href=\"https://www.linkedin.com/shareArticle?mini=true&url=";
            // line 833
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "current_page_url", [], "any", false, false, true, 833), 833, $this->source), "html", null, true);
            echo "&title=TITLE&source=COMPANY\" class=\"share linkedin\" data-network=\"linkedin\"><i class=\"fa-brands fa-linkedin\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/sharer/sharer.php?u=";
            // line 834
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "current_page_url", [], "any", false, false, true, 834), 834, $this->source), "html", null, true);
            echo "&t=TITLE\" class=\"share facebook\" data-network=\"facebook\"><i class=\"fa-brands fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/share?url=";
            // line 835
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "current_page_url", [], "any", false, false, true, 835), 835, $this->source), "html", null, true);
            echo "&text=TITLE\" class=\"share twitter\" data-network=\"twitter\"><i class=\"fa-brands fa-twitter\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"breadcrum-tools\">
\t\t\t\t\t\t\t\t<span>Tools</span>
\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-envelope\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-alarm-clock\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t";
        }
        // line 849
        echo "\t\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tool_bar", [], "any", false, false, true, 849), 849, $this->source), "html", null, true);
        echo " 
\t\t";
        // line 850
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 850), 850, $this->source), "html", null, true);
        echo " 

\t\t
   <!-- footer   -->


\t<footer class=\"container-fullwidth\">
\t\t<div class=\"footer-top\">\t
\t\t\t<div class=\"row background-gray\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"footer-top-left\">
\t\t\t\t\t\t<h4 class=\"pb-3\"><span>Let's create something amazing</span><span class=\"footer-top-left-line-break\"> together!</span></h4>
\t\t\t\t\t\t<h6><a href=\"#\"> Contact Us <i class=\"fa-solid fa-angle-right\"></i></a></h6>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"footer-top-right\">
\t\t\t\t\t\t<h4 class=\"pb-3\">Stay in the know with our  newsletter</h4>
\t\t\t\t\t\t<h6> <a href=\"#\">Subscribe <i class=\"fa-solid fa-angle-right\"></i></a></h6>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"footer-between\">
\t\t\t<div class=\"footer-between-content\">
\t\t\t\t<div>
\t\t\t\t\t<div class=\"footer-between-icon\"><i class=\"fa-solid fa-envelope\"></i></div>
\t\t\t\t\t<h6>info@integratedlanguages.com</h6>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<div class=\"footer-between-icon\"><i class=\"fa-solid fa-phone\"></i></div>
\t\t\t\t\t<h6>+91.124.4268266    +91.9811093093</h6>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"footer-content-sm\">
\t\t\t\t<div class=\"footer-content-sm-link\">
\t\t\t\t\t<div class=\"footer-between-icon\"><i class=\"fa-solid fa-envelope\"></i></div>
\t\t\t\t\t<h6>info@integratedlanguages.com</h6>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-content-sm-link\">
\t\t\t\t\t<div class=\"footer-between-icon\"><i class=\"fa-solid fa-phone\"></i></div>
\t\t\t\t\t<h6>+91.124.4268266    +91.9811093093</h6>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"scroll-top\">
\t\t\t\t<a href=\"#\"><i class=\"fa-solid fa-arrow-up\"></i></a>
\t\t\t</div>
\t\t\t<div class=\"footer-icon-bottom\">
\t\t\t\t<a href=\"#\"><img src=\"/themes/custom/integrated/img/footer-logo.png\"></a>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"footer-bottom\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t<div class=\"footer-bottom-left\">
\t\t\t\t\t\t<p> Legal Disclaimer </p>
\t\t\t\t\t\t<p>Privacy Policy</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<p>© 2022, Integrated Language Solutions Pvt.Ltd. All rights reserved</p> 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>



\t</footer>


<!-- Overlay -->
<div class=\"overlay\"></div>



</body>
</html> ";
    }

    public function getTemplateName()
    {
        return "themes/custom/integrated/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  949 => 850,  944 => 849,  927 => 835,  923 => 834,  919 => 833,  913 => 829,  907 => 819,  899 => 813,  897 => 812,  893 => 810,  884 => 804,  876 => 799,  870 => 795,  867 => 794,  859 => 789,  854 => 787,  850 => 785,  847 => 784,  845 => 783,  842 => 782,  838 => 766,  821 => 751,  815 => 748,  809 => 745,  803 => 742,  797 => 739,  520 => 465,  509 => 457,  498 => 449,  487 => 441,  476 => 433,  85 => 45,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

\t<div class=\"container-fullwidth navbar-section\">

\t\t<div class=\"topbar\">
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">STORE</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">E-LEARNING</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>

\t\t<div class=\"navbar-wrap\">

\t\t\t<!-- NAVBAR -->
\t\t\t<nav class=\"navbar navbar-expand-lg bg-white navbar-nav navbar-middle\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<a class=\"navbar-brand\" href=\"#\">
\t\t\t\t\t\t<span class=\"site-logo\">ils</span>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"#\">
\t\t\t\t\t\t<h4 class=\"text-dark site-name\">INTEGRATED LANGUAGE SOLUTIONS</h4>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t<ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
\t\t\t\t\t\t\t<li class=\"nav-item d-md-block d-none\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-magnifying-glass search-icon\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>


\t\t<div class=\"navbar-bottom d-lg-block d-none\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<ul class=\"navbar-bottom-menus\">
\t\t\t\t\t<li class=\"menu-link-1\">
\t\t\t\t\t\t<a href=\"{{base_path}}\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-house-chimney green-secoundary\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"menu-link-1\">
\t\t\t\t\t\t<a href=\"./our-firm.php\">
\t\t\t\t\t\t\t<span>OUR FIRM</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"menu-link-1 has-menu\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<span>SERVICES</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"menu-level-2\">
\t\t\t\t\t\t\t<div class=\"menu-summary\">
\t\t\t\t\t\t\t\t<h5>We help accelerate your business to global markets with our industry leading language solutions.</h5>
\t\t\t\t\t\t\t\t<i class=\"fas fa-times close\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<a href=\"./services.php\">
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2 service\"></div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Translation</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-level-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Professional Translation</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Certified Translation</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Neural Machine Translation</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Email and Chat Translation</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">On-Demand Translation</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2 menu-link-odd\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Interpretation</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-level-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">On-site Consecutive and Simultaneous Interpretation</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Over-the-Phone Interpretation</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Video Remote Consecutive and Simultaneous Interpretation </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Real-time Simultaneous Interpretation Application</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Multilingual Customer Support</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Equipment Rental and Support </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Sign-Language Interpretation </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">On-demand interpretation App </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Localisation</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-level-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Software Localization</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Mobile App Localization</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Game Localization</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Website Localization</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">eLearning Localization</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Multilingual Testing & Quality Assurance</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2 menu-link-odd\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Training</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-level-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Language Training</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Intercultural Training</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Staffing</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-level-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Multilingual Recruitment Services</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2 menu-link-odd\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Marketing Localization</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-level-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Multicultural Marketing</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Multilingual Content writing </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Global SEO</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Custom Design </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Multimedia Localization</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-level-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Transcription</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Subtitling </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">SDH And Closed Captions</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Dubbing </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Voice Over </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2 menu-link-odd\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Artificial Intelligence</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-level-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Data Services</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Multilingual Chatbots </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">AI-enabled Simultaneous Interpretation Application</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"menu-link-1\">
\t\t\t\t\t\t<a href=\"./language.php\">
\t\t\t\t\t\t\t<span>LANGUAGES</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"menu-link-1\">
\t\t\t\t\t\t<a href=\"./industry.php\">
\t\t\t\t\t\t\t<span>INDUSTRIES</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"menu-link-1 has-menu\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<span>RESOURCES</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"menu-level-2\">
\t\t\t\t\t\t\t<div class=\"menu-summary\">
\t\t\t\t\t\t\t\t<h5>We help accelerate your business to global markets with our industry leading language solutions.</h5>
\t\t\t\t\t\t\t\t<i class=\"fas fa-times close\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<a href=\"./resources.php\">
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2 resource\"></div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ base_path }}news\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">News</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2 menu-link-odd\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ base_path }}blogs\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Blogs</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ base_path }}articles\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Articles</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2 menu-link-odd\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ base_path }}case-studies\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Case Studies</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-link-2\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ base_path }}Language-Learning\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link-title\">Language Learning</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"menu-link-1\">
\t\t\t\t\t\t<a href=\"./contact-us.php\">
\t\t\t\t\t\t\t<span>CONTACT US</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>

\t</div>

\t<div>
\t\t<nav class=\"navbar navbar-light bg-light d-lg-none d-block sticky-top\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasNavbar\" aria-controls=\"offcanvasNavbar\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<i class=\"fa-solid fa-magnifying-glass text-green\"></i>
\t\t\t\t<div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasNavbar\" aria-labelledby=\"offcanvasNavbarLabel\">
\t\t\t\t\t<div class=\"offcanvas-header\">
\t\t\t\t\t\t<h5 class=\"offcanvas-title\" id=\"offcanvasNavbarLabel\">HOME</h5>
\t\t\t\t\t\t<button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"offcanvas-body menu-small-wrap\">
\t\t\t\t\t\t<ul class=\"navbar-nav justify-content-end flex-grow-1 pe-3\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link menu-small-link\" aria-current=\"page\" href=\"#\">OUR FIRM</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"menu-small has-menu\">
\t\t\t\t\t\t\t\t<a class=\"nav-link menu-small-link\" href=\"#\">
\t\t\t\t\t\t\t\t\tSERVICES
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"level-small-2\">
\t\t\t\t\t\t\t\t\t<div class=\"link-small-2 has-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">TRANSLATION</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"level-small-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Professional Translation</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Certified Translation</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Neural Machine Translation</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Email and Chat Translation</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>On-Demand Translation</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-small-2 has-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">INTERPRETATION</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"level-small-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>On-site Consecutive and Simultaneous Interpretation</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Over-the-Phone Interpretation</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Video Remote Consecutive and Simultaneous Interpretation</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Real-time Simultaneous Interpretation Application</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Multilingual Customer Support</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Equipment Rental and Support</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Multilingual Customer Support</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Sign-Language Interpretation</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>On-demand interpretation App</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-small-2 has-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Localisation</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"level-small-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Software Localization</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Mobile App Localization</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Game Localization</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Website Localization</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>eLearning Localization</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Multilingual Testing & Quality Assurance</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-small-2 has-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Training</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"level-small-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Language Training</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Intercultural Training</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-small-2 has-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Staffing</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"level-small-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Multilingual Recruitment Services</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-small-2 has-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Marketing Localization</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"level-small-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Multicultural Marketing</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Multilingual Content writing</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Global SEO</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Custom Design</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-small-2 has-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Multimedia Localization</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"level-small-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Transcription</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Subtitling</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>GSDH And Closed Captions</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Dubbing</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Voice Over</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-small-2 has-menu\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Artificial Intelligence</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"level-small-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Data Services</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Multilingual Chatbots</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Multilingual Chatbots</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"link-small-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>AI-enabled Simultaneous Interpretation Application</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"menu-small\">
\t\t\t\t\t\t\t\t<a class=\"nav-link menu-small-link\" href=\"#\">LANGUAGES</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"nav-link menu-small-link\" href=\"#\">INDUSTRIES</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"menu-small has-menu\">
\t\t\t\t\t\t\t\t<a class=\"nav-link menu-small-link\" href=\"#\">RESOURCES</a>
\t\t\t\t\t\t\t\t<div class=\"level-small-2\">
\t\t\t\t\t\t\t\t\t<div class=\"link-small-2\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ base_path }}news\">NEWS</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-small-2\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ base_path }}blogs\">BLOGS</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-small-2\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ base_path }}articles\">ARTICLES</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-small-2\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ base_path }}case-studies\">CASE STUDIES</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-small-2\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ base_path }}Language-Learning\">LANGUAGE LEARNING</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"nav-link menu-small-link\" href=\"#\">INDUSTRIES</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</div>

{# {{ node.id == 20}} #}


\t{# <section class=\"top-banner\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-8\">
\t\t\t\t<div class=\"top-banner-left\">
\t\t\t\t\t{{ page.page_title }} 
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-4\">
\t\t\t\t<div class=\"top-banner-right\">
\t\t\t\t\t<img src=\"{{ page.image_in_page|striptags|trim }}\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section> #}

\t{% if node.id == 19 %}
\t{% if page.page_title %}
\t<section class=\"top-banner-simple\">
\t\t<div class=\"top-banner-simple-content\">
\t\t\t{{ page.page_title }} 
\t\t\t<div>
\t\t\t\t<img src=\"{{ page.image_in_page|striptags|trim }}\" class=\"img-fluid\">
\t\t\t</div>
\t\t</div>
\t</section>
\t{% endif %}
\t{% elseif page.type == 'page' or page.type == 'article'%}
\t<section class=\"top-banner\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-8\">
\t\t\t\t<div class=\"top-banner-left\">
\t\t\t\t\t{{ page.page_title }} 
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-4\">
\t\t\t\t<div class=\"top-banner-right\">
\t\t\t\t\t<img src=\"{{ page.image_in_page|striptags|trim }}\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t{% endif %}
\t
\t
\t{% if page.breadcrumbs %}
\t<section class=\"breadcrum\">
\t\t<div class=\"breadcrum-top\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t<div class=\"breadcrum-top-left\">
\t\t\t\t\t\t\t{{ page.breadcrumbs }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{# <div class=\"col-md-5\">
\t\t\t\t\t\t<div class=\"breadcrum-top-left\">
\t\t\t\t\t\t\t<a href=\"#\">Home</a>
\t\t\t\t\t\t\t<i class=\"fa-solid fa-right-long\"></i>
\t\t\t\t\t\t\t<a href=\"#\">Resources</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> #}
\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t<div class=\"breadcrum-top-right\">
\t\t\t\t\t\t\t<div class=\"breadcrum-social-links\">
\t\t\t\t\t\t\t\t<span>Share this page</span>
\t\t\t\t\t\t\t\t<a href=\"https://www.linkedin.com/shareArticle?mini=true&url={{ page.current_page_url }}&title=TITLE&source=COMPANY\" class=\"share linkedin\" data-network=\"linkedin\"><i class=\"fa-brands fa-linkedin\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/sharer/sharer.php?u={{ page.current_page_url }}&t=TITLE\" class=\"share facebook\" data-network=\"facebook\"><i class=\"fa-brands fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/share?url={{ page.current_page_url }}&text=TITLE\" class=\"share twitter\" data-network=\"twitter\"><i class=\"fa-brands fa-twitter\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"breadcrum-tools\">
\t\t\t\t\t\t\t\t<span>Tools</span>
\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-envelope\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-alarm-clock\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t{% endif %}
\t\t{{ page.tool_bar }} 
\t\t{{ page.content }} 

\t\t
   <!-- footer   -->


\t<footer class=\"container-fullwidth\">
\t\t<div class=\"footer-top\">\t
\t\t\t<div class=\"row background-gray\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"footer-top-left\">
\t\t\t\t\t\t<h4 class=\"pb-3\"><span>Let's create something amazing</span><span class=\"footer-top-left-line-break\"> together!</span></h4>
\t\t\t\t\t\t<h6><a href=\"#\"> Contact Us <i class=\"fa-solid fa-angle-right\"></i></a></h6>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"footer-top-right\">
\t\t\t\t\t\t<h4 class=\"pb-3\">Stay in the know with our  newsletter</h4>
\t\t\t\t\t\t<h6> <a href=\"#\">Subscribe <i class=\"fa-solid fa-angle-right\"></i></a></h6>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"footer-between\">
\t\t\t<div class=\"footer-between-content\">
\t\t\t\t<div>
\t\t\t\t\t<div class=\"footer-between-icon\"><i class=\"fa-solid fa-envelope\"></i></div>
\t\t\t\t\t<h6>info@integratedlanguages.com</h6>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<div class=\"footer-between-icon\"><i class=\"fa-solid fa-phone\"></i></div>
\t\t\t\t\t<h6>+91.124.4268266    +91.9811093093</h6>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"footer-content-sm\">
\t\t\t\t<div class=\"footer-content-sm-link\">
\t\t\t\t\t<div class=\"footer-between-icon\"><i class=\"fa-solid fa-envelope\"></i></div>
\t\t\t\t\t<h6>info@integratedlanguages.com</h6>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-content-sm-link\">
\t\t\t\t\t<div class=\"footer-between-icon\"><i class=\"fa-solid fa-phone\"></i></div>
\t\t\t\t\t<h6>+91.124.4268266    +91.9811093093</h6>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"scroll-top\">
\t\t\t\t<a href=\"#\"><i class=\"fa-solid fa-arrow-up\"></i></a>
\t\t\t</div>
\t\t\t<div class=\"footer-icon-bottom\">
\t\t\t\t<a href=\"#\"><img src=\"/themes/custom/integrated/img/footer-logo.png\"></a>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"footer-bottom\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t<div class=\"footer-bottom-left\">
\t\t\t\t\t\t<p> Legal Disclaimer </p>
\t\t\t\t\t\t<p>Privacy Policy</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<p>© 2022, Integrated Language Solutions Pvt.Ltd. All rights reserved</p> 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>



\t</footer>


<!-- Overlay -->
<div class=\"overlay\"></div>



</body>
</html> ", "themes/custom/integrated/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\ng\\integrated\\themes\\custom\\integrated\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 783);
        static $filters = array("escape" => 45, "trim" => 789, "striptags" => 789);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'trim', 'striptags'],
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
