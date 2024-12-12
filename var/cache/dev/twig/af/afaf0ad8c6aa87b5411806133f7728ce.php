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

/* home/contact.html.twig */
class __TwigTemplate_aadda7b24d5c4e8b2604b6f75c2dd513 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/contact.html.twig", 1);
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

        yield "Contact";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<header class=\"navbar\" style=\"background-color: #ffc5c5; padding: 10px 20px;\">
    <div class=\"logo\" style=\"display: inline-block;\">
        <span class=\"logo-icon\" style=\"font-size: 1.5rem; color: #000;\"></span>
        <span class=\"logo-text\" style=\"font-size: 1.5rem; font-weight: bold; color: #000;\">BiblioVerse</span>
    </div>
    <nav style=\"display: inline-block; float: right;\">
        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_contact");
        yield "\" class=\"nav-item\" style=\"color: #000; text-decoration: none; margin-right: 15px;\">Contact</a>
        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signin");
        yield "\" class=\"nav-item\" style=\"color: #000; text-decoration: none; margin-right: 15px;\">Sign In</a>
        <button class=\"signup-button\" onclick=\"window.location.href='";
        // line 14
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



<main class=\"contact-page\" style=\"background-color: #fff; color: #333;\">
    <section class=\"contact-header\">
        <h1 style=\"color: #000; text-align: center; font-size: 3rem; font-weight: bold;\">Contactez BiblioVerse</h1>
        <p style=\"text-align: center; font-size: 1.2rem; font-style: italic;\">Votre bibliothèque locale, à votre service pour tous vos besoins de lecture et de culture.</p>
    </section>

    <section class=\"contact-info\">
        <h2 style=\"color: #000; font-size: 2rem; font-weight: 600;\">Nos Coordonnées</h2>
        <p><strong>Adresse :</strong> 123 Rue al Qods, 6000, Oujda</p>
        <p><strong>Téléphone :</strong> +212 1 23 45 67 89</p>
        <p><strong>Email :</strong> contact@bibliovverse.fr</p>
        <p><strong>Horaires d'ouverture :</strong></p>
        <ul>
            <li>Lundi - Vendredi : 9h00 - 18h00</li>
            <li>Samedi : 10h00 - 16h00</li>
            <li>Dimanche : Fermé</li>
        </ul>
    </section>

    <section class=\"about\">
        <h2 style=\"color: #000;\">À propos de BiblioVerse</h2>
        <p>BiblioVerse est une bibliothèque locale réinventée pour répondre aux besoins modernes des passionnés de lecture. Avec un catalogue de plus de 140 livres, 30 dictionnaires et 90 magazines, nous offrons une expérience unique qui allie diversité et accessibilité.</p>
        <p>Notre mission est de rendre la lecture accessible à tous, en créant un espace de partage et de découverte.</p>
        <ul>
            <li><strong>Empruntez :</strong> Réservez vos livres préférés en ligne et venez les chercher en quelques clics.</li>
            <li><strong>Participez :</strong> Rejoignez nos clubs de lecture et événements culturels.</li>
            <li><strong>Profitez :</strong> Un accès illimité à des ressources numériques et imprimées.</li>
        </ul>
    </section>

    <section class=\"contact-form\">
        <h2 style=\"color: #000; font-size: 2rem;\">Envoyez-nous un message</h2>
        <form action=\"/send-message\" method=\"POST\">
            <div class=\"form-group\">
                <label for=\"name\" class=\"form-label\">Votre nom :</label>
                <input type=\"text\" id=\"name\" name=\"name\" class=\"form-input\" required>
            </div>
            <div class=\"form-group\">
                <label for=\"email\" class=\"form-label\">Votre email :</label>
                <input type=\"email\" id=\"email\" name=\"email\" class=\"form-input\" required>
            </div>
            <div class=\"form-group\">
                <label for=\"message\" class=\"form-label\">Votre message :</label>
                <textarea id=\"message\" name=\"message\" rows=\"5\" class=\"form-input\" required></textarea>
            </div>
            <button type=\"submit\" class=\"submit-button\">Envoyer</button>
        </form>
    </section>
</main>

<footer style=\"background-color: #ffc5c5; padding: 20px 0; text-align: center;\">
    <p style=\"color: #000;\">@copyright BiblioVerse 2024. All rights reserved.</p>
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
        return "home/contact.html.twig";
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
        return array (  116 => 14,  112 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact{% endblock %}

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



<main class=\"contact-page\" style=\"background-color: #fff; color: #333;\">
    <section class=\"contact-header\">
        <h1 style=\"color: #000; text-align: center; font-size: 3rem; font-weight: bold;\">Contactez BiblioVerse</h1>
        <p style=\"text-align: center; font-size: 1.2rem; font-style: italic;\">Votre bibliothèque locale, à votre service pour tous vos besoins de lecture et de culture.</p>
    </section>

    <section class=\"contact-info\">
        <h2 style=\"color: #000; font-size: 2rem; font-weight: 600;\">Nos Coordonnées</h2>
        <p><strong>Adresse :</strong> 123 Rue al Qods, 6000, Oujda</p>
        <p><strong>Téléphone :</strong> +212 1 23 45 67 89</p>
        <p><strong>Email :</strong> contact@bibliovverse.fr</p>
        <p><strong>Horaires d'ouverture :</strong></p>
        <ul>
            <li>Lundi - Vendredi : 9h00 - 18h00</li>
            <li>Samedi : 10h00 - 16h00</li>
            <li>Dimanche : Fermé</li>
        </ul>
    </section>

    <section class=\"about\">
        <h2 style=\"color: #000;\">À propos de BiblioVerse</h2>
        <p>BiblioVerse est une bibliothèque locale réinventée pour répondre aux besoins modernes des passionnés de lecture. Avec un catalogue de plus de 140 livres, 30 dictionnaires et 90 magazines, nous offrons une expérience unique qui allie diversité et accessibilité.</p>
        <p>Notre mission est de rendre la lecture accessible à tous, en créant un espace de partage et de découverte.</p>
        <ul>
            <li><strong>Empruntez :</strong> Réservez vos livres préférés en ligne et venez les chercher en quelques clics.</li>
            <li><strong>Participez :</strong> Rejoignez nos clubs de lecture et événements culturels.</li>
            <li><strong>Profitez :</strong> Un accès illimité à des ressources numériques et imprimées.</li>
        </ul>
    </section>

    <section class=\"contact-form\">
        <h2 style=\"color: #000; font-size: 2rem;\">Envoyez-nous un message</h2>
        <form action=\"/send-message\" method=\"POST\">
            <div class=\"form-group\">
                <label for=\"name\" class=\"form-label\">Votre nom :</label>
                <input type=\"text\" id=\"name\" name=\"name\" class=\"form-input\" required>
            </div>
            <div class=\"form-group\">
                <label for=\"email\" class=\"form-label\">Votre email :</label>
                <input type=\"email\" id=\"email\" name=\"email\" class=\"form-input\" required>
            </div>
            <div class=\"form-group\">
                <label for=\"message\" class=\"form-label\">Votre message :</label>
                <textarea id=\"message\" name=\"message\" rows=\"5\" class=\"form-input\" required></textarea>
            </div>
            <button type=\"submit\" class=\"submit-button\">Envoyer</button>
        </form>
    </section>
</main>

<footer style=\"background-color: #ffc5c5; padding: 20px 0; text-align: center;\">
    <p style=\"color: #000;\">@copyright BiblioVerse 2024. All rights reserved.</p>
</footer>

{% endblock %}
", "home/contact.html.twig", "C:\\Users\\marwa\\biblioverse\\templates\\home\\contact.html.twig");
    }
}
