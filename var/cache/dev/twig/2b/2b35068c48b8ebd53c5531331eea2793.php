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

/* borrowing/borrow.html.twig */
class __TwigTemplate_a413e8b15e8ee109027e22040df2e320 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "borrowing/borrow.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "borrowing/borrow.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "borrowing/borrow.html.twig", 1);
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

        yield "Emprunter un livre";
        
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

<main class=\"borrow-book-page\" style=\"background-color: #ffc5c5; color: #333; display: flex; justify-content: center; padding: 40px; min-height: 80vh;\">
    <section class=\"borrow-form-container\" style=\"width: 100%; max-width: 800px; background-color: #fff; padding: 40px; border-radius: 15px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.6);\">
        <h1 style=\"text-align: center; color: #000; font-size: 2rem; margin-bottom: 10px;\">Emprunter le livre \"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 26, $this->source); })()), "titre", [], "any", false, false, false, 26), "html", null, true);
        yield "\"</h1>
        <p style=\"text-align: center; font-size: 1rem; color: #555; margin-bottom: 30px;\">Veuillez remplir les informations pour emprunter ce livre</p>

        ";
        // line 29
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start');
        yield "
            <div class=\"form-group\" style=\"width: 100%; text-align: center;\">
                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "nomEtudiant", [], "any", false, false, false, 31), 'row', ["label" => false, "attr" => ["class" => "form-input form-control", "placeholder" => "Nom de l'étudiant", "style" => "padding: 12px; font-size: 1rem; width: 100%; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; outline: none; transition: border-color 0.3s ease; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;"]]);
        yield "
            </div>
            <div class=\"form-group\" style=\"width: 100%; text-align: center;\">
                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "prenomEtudiant", [], "any", false, false, false, 34), 'row', ["label" => false, "attr" => ["class" => "form-input form-control", "placeholder" => "Prénom de l'étudiant", "style" => "padding: 12px; font-size: 1rem; width: 100%; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; outline: none; transition: border-color 0.3s ease; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;"]]);
        yield "
            </div>
            <div class=\"form-group\" style=\"width: 100%; text-align: center;\">
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "numCarteEtudiant", [], "any", false, false, false, 37), 'row', ["label" => false, "attr" => ["class" => "form-input form-control", "placeholder" => "Numéro de carte étudiant", "style" => "padding: 12px; font-size: 1rem; width: 100%; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; outline: none; transition: border-color 0.3s ease; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;"]]);
        yield "
            </div>
            <div class=\"form-group\" style=\"width: 100%; text-align: center;\">
                ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "telephoneEtudiant", [], "any", false, false, false, 40), 'row', ["label" => false, "attr" => ["class" => "form-input form-control", "placeholder" => "Téléphone de l'étudiant", "style" => "padding: 12px; font-size: 1rem; width: 100%; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; outline: none; transition: border-color 0.3s ease; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;"]]);
        yield "
            </div>
            <div class=\"form-group\" style=\"width: 100%; text-align: center;\">
                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "dateEmprunt", [], "any", false, false, false, 43), 'row', ["label" => false, "attr" => ["class" => "form-input form-control", "placeholder" => "Date d'emprunt", "style" => "padding: 12px; font-size: 1rem; width: 100%; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; outline: none; transition: border-color 0.3s ease; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;"]]);
        yield "
            </div>
            <div class=\"form-group\" style=\"width: 100%; text-align: center;\">
                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "dateRetour", [], "any", false, false, false, 46), 'row', ["label" => false, "attr" => ["class" => "form-input form-control", "placeholder" => "Date de retour", "style" => "padding: 12px; font-size: 1rem; width: 100%; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; outline: none; transition: border-color 0.3s ease; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;"]]);
        yield "
            </div>
            <div class=\"form-group\" style=\"width: 100%; text-align: center;\">
                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "etat_retour", [], "any", false, false, false, 49), 'row', ["label" => false, "attr" => ["class" => "form-input form-control", "style" => "padding: 12px; font-size: 1rem; width: 100%; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; outline: none; transition: border-color 0.3s ease; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;"]]);
        yield "
            </div>
            <div style=\"width: 100%; text-align: center;\">
                <button type=\"submit\" class=\"btn btn-dark\" style=\"background-color: #000; color: #fff; padding: 15px 20px; font-size: 1.1rem; border-radius: 30px; border: none; cursor: pointer; transition: background-color 0.3s ease; width: 100%; margin: 20px auto;\">
                    Enregistrer
                </button>
            </div>
        ";
        // line 56
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'form_end');
        yield "
        <div style=\"width: 100%; text-align: center; margin-top: 30px;\">
            <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_list");
        yield "\" class=\"btn btn-secondary\" style=\"background-color: #333; color: #fff; padding: 12px 30px; text-decoration: none; border-radius: 30px; transition: background-color 0.3s ease;\">
                Retour à la liste des livres
            </a>
        </div>
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
        return "borrowing/borrow.html.twig";
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
        return array (  217 => 58,  212 => 56,  202 => 49,  196 => 46,  190 => 43,  184 => 40,  178 => 37,  172 => 34,  166 => 31,  161 => 29,  155 => 26,  144 => 18,  140 => 17,  136 => 16,  128 => 10,  115 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Emprunter un livre{% endblock %}

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

<main class=\"borrow-book-page\" style=\"background-color: #ffc5c5; color: #333; display: flex; justify-content: center; padding: 40px; min-height: 80vh;\">
    <section class=\"borrow-form-container\" style=\"width: 100%; max-width: 800px; background-color: #fff; padding: 40px; border-radius: 15px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.6);\">
        <h1 style=\"text-align: center; color: #000; font-size: 2rem; margin-bottom: 10px;\">Emprunter le livre \"{{ book.titre }}\"</h1>
        <p style=\"text-align: center; font-size: 1rem; color: #555; margin-bottom: 30px;\">Veuillez remplir les informations pour emprunter ce livre</p>

        {{ form_start(form) }}
            <div class=\"form-group\" style=\"width: 100%; text-align: center;\">
                {{ form_row(form.nomEtudiant, {'label': false, 'attr': {'class': 'form-input form-control', 'placeholder': 'Nom de l\\'étudiant', 'style': 'padding: 12px; font-size: 1rem; width: 100%; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; outline: none; transition: border-color 0.3s ease; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;'}}) }}
            </div>
            <div class=\"form-group\" style=\"width: 100%; text-align: center;\">
                {{ form_row(form.prenomEtudiant, {'label': false, 'attr': {'class': 'form-input form-control', 'placeholder': 'Prénom de l\\'étudiant', 'style': 'padding: 12px; font-size: 1rem; width: 100%; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; outline: none; transition: border-color 0.3s ease; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;'}}) }}
            </div>
            <div class=\"form-group\" style=\"width: 100%; text-align: center;\">
                {{ form_row(form.numCarteEtudiant, {'label': false, 'attr': {'class': 'form-input form-control', 'placeholder': 'Numéro de carte étudiant', 'style': 'padding: 12px; font-size: 1rem; width: 100%; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; outline: none; transition: border-color 0.3s ease; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;'}}) }}
            </div>
            <div class=\"form-group\" style=\"width: 100%; text-align: center;\">
                {{ form_row(form.telephoneEtudiant, {'label': false, 'attr': {'class': 'form-input form-control', 'placeholder': 'Téléphone de l\\'étudiant', 'style': 'padding: 12px; font-size: 1rem; width: 100%; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; outline: none; transition: border-color 0.3s ease; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;'}}) }}
            </div>
            <div class=\"form-group\" style=\"width: 100%; text-align: center;\">
                {{ form_row(form.dateEmprunt, {'label': false, 'attr': {'class': 'form-input form-control', 'placeholder': 'Date d\\'emprunt', 'style': 'padding: 12px; font-size: 1rem; width: 100%; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; outline: none; transition: border-color 0.3s ease; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;'}}) }}
            </div>
            <div class=\"form-group\" style=\"width: 100%; text-align: center;\">
                {{ form_row(form.dateRetour, {'label': false, 'attr': {'class': 'form-input form-control', 'placeholder': 'Date de retour', 'style': 'padding: 12px; font-size: 1rem; width: 100%; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; outline: none; transition: border-color 0.3s ease; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;'}}) }}
            </div>
            <div class=\"form-group\" style=\"width: 100%; text-align: center;\">
                {{ form_row(form.etat_retour, {'label': false, 'attr': {'class': 'form-input form-control', 'style': 'padding: 12px; font-size: 1rem; width: 100%; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; outline: none; transition: border-color 0.3s ease; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;'}}) }}
            </div>
            <div style=\"width: 100%; text-align: center;\">
                <button type=\"submit\" class=\"btn btn-dark\" style=\"background-color: #000; color: #fff; padding: 15px 20px; font-size: 1.1rem; border-radius: 30px; border: none; cursor: pointer; transition: background-color 0.3s ease; width: 100%; margin: 20px auto;\">
                    Enregistrer
                </button>
            </div>
        {{ form_end(form) }}
        <div style=\"width: 100%; text-align: center; margin-top: 30px;\">
            <a href=\"{{ path('book_list') }}\" class=\"btn btn-secondary\" style=\"background-color: #333; color: #fff; padding: 12px 30px; text-decoration: none; border-radius: 30px; transition: background-color 0.3s ease;\">
                Retour à la liste des livres
            </a>
        </div>
    </section>
</main>

<footer style=\"background-color: #fff; padding: 30px 0; text-align: center; margin-top: 50px; border-top: 1px solid #ccc;\">
    <p style=\"color: #000; font-size: 1rem; margin-top: 30px;\">@biblioVerse 2024. All rights reserved.</p>
</footer>

{% endblock %}
", "borrowing/borrow.html.twig", "C:\\Users\\marwa\\biblioverse\\templates\\borrowing\\borrow.html.twig");
    }
}
