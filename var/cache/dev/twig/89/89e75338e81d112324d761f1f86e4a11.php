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

/* book/edit.html.twig */
class __TwigTemplate_507a4196652d7afca9022a9297cd1df9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "book/edit.html.twig", 1);
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

        yield "Modifier le livre";
        
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
        yield "'\" style=\"background-color: #000; color: #fff; border: none; padding: 10px 30px; cursor: pointer; font-size: 1rem; border-radius: 30px; transition: background-color 0.3s ease; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);\">
            Sign Up
        </button>
    </nav>
</header>

<main class=\"admin-login-page\" style=\"background-color: #ffc5c5; color: #333; display: flex; justify-content: center; padding: 40px; min-height: 80vh;\">
    <section class=\"login-form-container\" style=\"width: 100%; max-width: 500px; background-color: #fff; padding: 40px; border-radius: 15px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.6);\">
        <h1 style=\"text-align: center; color: #000; font-size: 2rem; margin-bottom: 10px;\">Modifier le livre</h1>
        <p style=\"text-align: center; font-size: 1rem; color: #555; margin-bottom: 30px;\">Modifiez les informations du livre</p>

        ";
        // line 29
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start');
        yield "
            <div class=\"form-group\" style=\"width: 100%; text-align: center;\">
                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "titre", [], "any", false, false, false, 31), 'row', ["label" => false, "attr" => ["class" => "form-input form-control", "placeholder" => "Titre du livre", "style" => "padding: 12px; font-size: 1rem; width: 80%; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; outline: none; transition: border-color 0.3s ease; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;"]]);
        yield "
            </div>
            <div class=\"form-group\" style=\"width: 100%; text-align: center;\">
                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "isbn", [], "any", false, false, false, 34), 'row', ["label" => false, "attr" => ["class" => "form-input form-control", "placeholder" => "ISBN", "style" => "padding: 12px; font-size: 1rem; width: 80%; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; outline: none; transition: border-color 0.3s ease; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;"]]);
        yield "
            </div>
            <div class=\"form-group\" style=\"width: 100%; text-align: center;\">
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "type", [], "any", false, false, false, 37), 'row', ["label" => false, "attr" => ["class" => "form-input form-control", "placeholder" => "Type de livre", "style" => "padding: 12px; font-size: 1rem; width: 80%; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; outline: none; transition: border-color 0.3s ease; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;"]]);
        yield "
            </div>
            <div class=\"form-group\" style=\"width: 100%; text-align: center;\">
                ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "etat", [], "any", false, false, false, 40), 'row', ["label" => false, "attr" => ["class" => "form-input form-control", "style" => "padding: 12px; font-size: 1rem; width: 80%; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; outline: none; transition: border-color 0.3s ease; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;"]]);
        yield "
            </div>
            <div class=\"form-group\" style=\"width: 100%; text-align: center;\">
                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "editeur", [], "any", false, false, false, 43), 'row', ["label" => false, "attr" => ["class" => "form-input form-control", "placeholder" => "Éditeur du livre", "style" => "padding: 12px; font-size: 1rem; width: 80%; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; outline: none; transition: border-color 0.3s ease; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;"]]);
        yield "
            </div>
            <div class=\"form-group\" style=\"width: 100%; text-align: center;\">
                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "anneeEdition", [], "any", false, false, false, 46), 'row', ["label" => false, "attr" => ["class" => "form-input form-control", "placeholder" => "Année d'édition", "style" => "padding: 12px; font-size: 1rem; width: 80%; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; outline: none; transition: border-color 0.3s ease; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;"]]);
        yield "
            </div>
            <div style=\"width: 100%; text-align: center;\">
                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "save", [], "any", false, false, false, 49), 'row', ["attr" => ["class" => "btn btn-dark", "style" => "background-color: #000; color: #fff; padding: 15px 20px; font-size: 1.1rem; border-radius: 30px; border: none; cursor: pointer; transition: background-color 0.3s ease; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); margin-top: 20px; width: 80%; margin: 0 auto;"]]);
        yield "
            </div>
        ";
        // line 51
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_end');
        yield "
    </section>
</main>

<footer style=\"background-color: #fff; padding: 30px 0; text-align: center; margin-top: 50px; border-top: 1px solid #ccc;\">
    <p style=\"color: #000; font-size: 1rem; margin-top: 30px;\">@biblioVerse 2024. All rights reserved.</p>
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
        return "book/edit.html.twig";
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
        return array (  204 => 51,  199 => 49,  193 => 46,  187 => 43,  181 => 40,  175 => 37,  169 => 34,  163 => 31,  158 => 29,  144 => 18,  140 => 17,  136 => 16,  128 => 10,  115 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier le livre{% endblock %}

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
        <button class=\"signup-button\" onclick=\"window.location.href='{{ path('signup') }}'\" style=\"background-color: #000; color: #fff; border: none; padding: 10px 30px; cursor: pointer; font-size: 1rem; border-radius: 30px; transition: background-color 0.3s ease; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);\">
            Sign Up
        </button>
    </nav>
</header>

<main class=\"admin-login-page\" style=\"background-color: #ffc5c5; color: #333; display: flex; justify-content: center; padding: 40px; min-height: 80vh;\">
    <section class=\"login-form-container\" style=\"width: 100%; max-width: 500px; background-color: #fff; padding: 40px; border-radius: 15px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.6);\">
        <h1 style=\"text-align: center; color: #000; font-size: 2rem; margin-bottom: 10px;\">Modifier le livre</h1>
        <p style=\"text-align: center; font-size: 1rem; color: #555; margin-bottom: 30px;\">Modifiez les informations du livre</p>

        {{ form_start(form) }}
            <div class=\"form-group\" style=\"width: 100%; text-align: center;\">
                {{ form_row(form.titre, {'label': false, 'attr': {'class': 'form-input form-control', 'placeholder': 'Titre du livre', 'style': 'padding: 12px; font-size: 1rem; width: 80%; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; outline: none; transition: border-color 0.3s ease; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;'}}) }}
            </div>
            <div class=\"form-group\" style=\"width: 100%; text-align: center;\">
                {{ form_row(form.isbn, {'label': false, 'attr': {'class': 'form-input form-control', 'placeholder': 'ISBN', 'style': 'padding: 12px; font-size: 1rem; width: 80%; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; outline: none; transition: border-color 0.3s ease; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;'}}) }}
            </div>
            <div class=\"form-group\" style=\"width: 100%; text-align: center;\">
                {{ form_row(form.type, {'label': false, 'attr': {'class': 'form-input form-control', 'placeholder': 'Type de livre', 'style': 'padding: 12px; font-size: 1rem; width: 80%; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; outline: none; transition: border-color 0.3s ease; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;'}}) }}
            </div>
            <div class=\"form-group\" style=\"width: 100%; text-align: center;\">
                {{ form_row(form.etat, {'label': false, 'attr': {'class': 'form-input form-control', 'style': 'padding: 12px; font-size: 1rem; width: 80%; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; outline: none; transition: border-color 0.3s ease; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;'}}) }}
            </div>
            <div class=\"form-group\" style=\"width: 100%; text-align: center;\">
                {{ form_row(form.editeur, {'label': false, 'attr': {'class': 'form-input form-control', 'placeholder': 'Éditeur du livre', 'style': 'padding: 12px; font-size: 1rem; width: 80%; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; outline: none; transition: border-color 0.3s ease; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;'}}) }}
            </div>
            <div class=\"form-group\" style=\"width: 100%; text-align: center;\">
                {{ form_row(form.anneeEdition, {'label': false, 'attr': {'class': 'form-input form-control', 'placeholder': 'Année d\\'édition', 'style': 'padding: 12px; font-size: 1rem; width: 80%; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; outline: none; transition: border-color 0.3s ease; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;'}}) }}
            </div>
            <div style=\"width: 100%; text-align: center;\">
                {{ form_row(form.save, {'attr': {'class': 'btn btn-dark', 'style': 'background-color: #000; color: #fff; padding: 15px 20px; font-size: 1.1rem; border-radius: 30px; border: none; cursor: pointer; transition: background-color 0.3s ease; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); margin-top: 20px; width: 80%; margin: 0 auto;'}}) }}
            </div>
        {{ form_end(form) }}
    </section>
</main>

<footer style=\"background-color: #fff; padding: 30px 0; text-align: center; margin-top: 50px; border-top: 1px solid #ccc;\">
    <p style=\"color: #000; font-size: 1rem; margin-top: 30px;\">@biblioVerse 2024. All rights reserved.</p>
</footer>
{% endblock %}
", "book/edit.html.twig", "C:\\Users\\marwa\\biblioverse\\templates\\book\\edit.html.twig");
    }
}
