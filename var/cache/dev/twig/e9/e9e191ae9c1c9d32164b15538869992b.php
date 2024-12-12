<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* home/index.html.twig */
class __TwigTemplate_4ee5f11f86475c1817a77709927a520d extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/homePage/style.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        yield "<header class=\"navbar\" style=\"background-color: #ffc5c5; padding: 10px 20px;\">
    <div class=\"logo\" style=\"display: inline-block;\">
        <span class=\"logo-icon\" style=\"font-size: 1.5rem; color: #000;\"></span>
        <span class=\"logo-text\" style=\"font-size: 1.5rem; font-weight: bold; color: #000;\">BiblioVerse</span>
    </div>
    <nav style=\"display: inline-block; float: right;\">
        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_contact");
        yield "\" class=\"nav-item\" style=\"color: #000; text-decoration: none; margin-right: 15px;\">Contact</a>
        <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signin");
        yield "\" class=\"nav-item\" style=\"color: #000; text-decoration: none; margin-right: 15px;\">Sign In</a>
        <button class=\"signup-button\" onclick=\"window.location.href='";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signup");
        yield "'\" style=\"
            background-color: #000; 
            color: #fff; 
            border: none; 
            padding: 10px 30px; 
            cursor: pointer; 
            font-size: 1rem; 
            border-radius: 30px; 
            transition: background-color 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        \">
            Sign Up
        </button>
    </nav>
</header>

<main class=\"hero\" style=\"display: flex; align-items: center; justify-content: space-between; padding: 20px; height: 70vh;\">
    <div class=\"hero-content\" style=\"flex: 1; text-align: left;\">
        <h1 style=\"font-size: 2rem;\">Votre bibliothèque locale, réinventée pour être à portée de clic.</h1>
        <p style=\"font-size: 1.2rem; font-style: italic;\">Explorez, empruntez, profitez — sans limites.</p>
    </div>
    <div class=\"hero-image\" style=\"flex: 1; text-align: right;\">
        <img src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/homePage/books.png"), "html", null, true);
        yield "\" alt=\"Stack of books\" style=\"max-width: 100%; height: auto;\">
    </div>
</main>

<footer class=\"stats\" style=\"display: flex; justify-content: space-between; margin-top: -15px; padding: 20px; background-color: #fff;\">
    <div class=\"stat\" style=\"flex: 1; text-align: left; padding-top: -5px;\">
        <h2>140+</h2>
        <p>Livres</p>
    </div>
    <div class=\"stat\" style=\"flex: 1; text-align: center; padding-top: -5px;\">
        <h2>30+</h2>
        <p>Dictionnaires</p>
    </div>
    <div class=\"stat\" style=\"flex: 1; text-align: right; padding-top: -5px;\">
        <h2>90+</h2>
        <p>Magazines</p>
    </div>
</footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  169 => 40,  144 => 18,  140 => 17,  136 => 16,  128 => 10,  115 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('/homePage/style.css') }}\">
{% endblock %}

{% block body %}
<header class=\"navbar\" style=\"background-color: #ffc5c5; padding: 10px 20px;\">
    <div class=\"logo\" style=\"display: inline-block;\">
        <span class=\"logo-icon\" style=\"font-size: 1.5rem; color: #000;\"></span>
        <span class=\"logo-text\" style=\"font-size: 1.5rem; font-weight: bold; color: #000;\">BiblioVerse</span>
    </div>
    <nav style=\"display: inline-block; float: right;\">
        <a href=\"{{ path('home_contact') }}\" class=\"nav-item\" style=\"color: #000; text-decoration: none; margin-right: 15px;\">Contact</a>
        <a href=\"{{ path('signin') }}\" class=\"nav-item\" style=\"color: #000; text-decoration: none; margin-right: 15px;\">Sign In</a>
        <button class=\"signup-button\" onclick=\"window.location.href='{{ path('signup') }}'\" style=\"
            background-color: #000; 
            color: #fff; 
            border: none; 
            padding: 10px 30px; 
            cursor: pointer; 
            font-size: 1rem; 
            border-radius: 30px; 
            transition: background-color 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        \">
            Sign Up
        </button>
    </nav>
</header>

<main class=\"hero\" style=\"display: flex; align-items: center; justify-content: space-between; padding: 20px; height: 70vh;\">
    <div class=\"hero-content\" style=\"flex: 1; text-align: left;\">
        <h1 style=\"font-size: 2rem;\">Votre bibliothèque locale, réinventée pour être à portée de clic.</h1>
        <p style=\"font-size: 1.2rem; font-style: italic;\">Explorez, empruntez, profitez — sans limites.</p>
    </div>
    <div class=\"hero-image\" style=\"flex: 1; text-align: right;\">
        <img src=\"{{ asset('/homePage/books.png') }}\" alt=\"Stack of books\" style=\"max-width: 100%; height: auto;\">
    </div>
</main>

<footer class=\"stats\" style=\"display: flex; justify-content: space-between; margin-top: -15px; padding: 20px; background-color: #fff;\">
    <div class=\"stat\" style=\"flex: 1; text-align: left; padding-top: -5px;\">
        <h2>140+</h2>
        <p>Livres</p>
    </div>
    <div class=\"stat\" style=\"flex: 1; text-align: center; padding-top: -5px;\">
        <h2>30+</h2>
        <p>Dictionnaires</p>
    </div>
    <div class=\"stat\" style=\"flex: 1; text-align: right; padding-top: -5px;\">
        <h2>90+</h2>
        <p>Magazines</p>
    </div>
</footer>
{% endblock %}
", "home/index.html.twig", "C:\\Users\\marwa\\biblioverse\\templates\\home\\index.html.twig");
    }
}
