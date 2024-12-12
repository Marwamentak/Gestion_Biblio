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

/* borrowing/index.html.twig */
class __TwigTemplate_48d240f5c8dc802b20728ff362cb97bd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "borrowing/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "borrowing/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "borrowing/index.html.twig", 1);
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

        yield "Mes emprunts";
        
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

<main class=\"borrowings-page\" style=\"background-color: #ffc5c5; color: #333; padding: 40px 20px; min-height: 80vh;\">
    <section class=\"borrowings-table-container\" style=\"width: 100%; max-width: 1000px; background-color: #fff; padding: 30px; border-radius: 15px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); margin: 0 auto;\">
        <h1 style=\"text-align: center; font-size: 2rem; color: #000; margin-bottom: 30px;\">Mes emprunts</h1>

        <table class=\"table\" style=\"width: 100%; border-collapse: collapse; text-align: left;\">
            <thead>
                <tr style=\"background-color: #333; color: white;\">
                    <th style=\"padding: 12px 15px; font-size: 1rem; text-align: left;\">ID</th>
                    <th style=\"padding: 12px 15px; font-size: 1rem; text-align: left;\">Titre du livre</th>
                    <th style=\"padding: 12px 15px; font-size: 1rem; text-align: left;\">Date d'emprunt</th>
                    <th style=\"padding: 12px 15px; font-size: 1rem; text-align: left;\">Date de retour</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["borrowings"]) || array_key_exists("borrowings", $context) ? $context["borrowings"] : (function () { throw new RuntimeError('Variable "borrowings" does not exist.', 38, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["borrowing"]) {
            // line 39
            yield "                    <tr style=\"border-bottom: 1px solid #ddd;\">
                        <td style=\"padding: 12px 15px; font-size: 1rem;\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["borrowing"], "id", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                        <td style=\"padding: 12px 15px; font-size: 1rem;\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["borrowing"], "book", [], "any", false, false, false, 41), "titre", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                        <td style=\"padding: 12px 15px; font-size: 1rem;\">
                            ";
            // line 43
            ((CoreExtension::getAttribute($this->env, $this->source, $context["borrowing"], "dateEmprunt", [], "any", false, false, false, 43)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["borrowing"], "dateEmprunt", [], "any", false, false, false, 43), "d/m/Y"), "html", null, true)) : (yield "Non définie"));
            yield "
                        </td>
                        <td style=\"padding: 12px 15px; font-size: 1rem;\">
                            ";
            // line 46
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["borrowing"], "dateRetour", [], "any", false, false, false, 46))) {
                // line 47
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["borrowing"], "dateRetour", [], "any", false, false, false, 47), "d/m/Y"), "html", null, true);
                yield "
                            ";
            } else {
                // line 49
                yield "                                Non retourné
                            ";
            }
            // line 51
            yield "                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            yield "                    <tr>
                        <td colspan=\"4\" style=\"text-align: center; padding: 20px;\">Aucun emprunt en cours.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['borrowing'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "            </tbody>
        </table>

        <div style=\"text-align: center; margin-top: 30px;\">
            <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_list");
        yield "\" class=\"btn btn-secondary\" style=\"background-color: #333; color: #fff; padding: 12px 30px; text-decoration: none; border-radius: 30px; font-size: 1rem; transition: background-color 0.3s ease;\">
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
        return "borrowing/index.html.twig";
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
        return array (  224 => 62,  218 => 58,  209 => 54,  202 => 51,  198 => 49,  192 => 47,  190 => 46,  184 => 43,  179 => 41,  175 => 40,  172 => 39,  167 => 38,  144 => 18,  140 => 17,  136 => 16,  128 => 10,  115 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes emprunts{% endblock %}

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

<main class=\"borrowings-page\" style=\"background-color: #ffc5c5; color: #333; padding: 40px 20px; min-height: 80vh;\">
    <section class=\"borrowings-table-container\" style=\"width: 100%; max-width: 1000px; background-color: #fff; padding: 30px; border-radius: 15px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); margin: 0 auto;\">
        <h1 style=\"text-align: center; font-size: 2rem; color: #000; margin-bottom: 30px;\">Mes emprunts</h1>

        <table class=\"table\" style=\"width: 100%; border-collapse: collapse; text-align: left;\">
            <thead>
                <tr style=\"background-color: #333; color: white;\">
                    <th style=\"padding: 12px 15px; font-size: 1rem; text-align: left;\">ID</th>
                    <th style=\"padding: 12px 15px; font-size: 1rem; text-align: left;\">Titre du livre</th>
                    <th style=\"padding: 12px 15px; font-size: 1rem; text-align: left;\">Date d'emprunt</th>
                    <th style=\"padding: 12px 15px; font-size: 1rem; text-align: left;\">Date de retour</th>
                </tr>
            </thead>
            <tbody>
                {% for borrowing in borrowings %}
                    <tr style=\"border-bottom: 1px solid #ddd;\">
                        <td style=\"padding: 12px 15px; font-size: 1rem;\">{{ borrowing.id }}</td>
                        <td style=\"padding: 12px 15px; font-size: 1rem;\">{{ borrowing.book.titre }}</td>
                        <td style=\"padding: 12px 15px; font-size: 1rem;\">
                            {{ borrowing.dateEmprunt ? borrowing.dateEmprunt|date('d/m/Y') : 'Non définie' }}
                        </td>
                        <td style=\"padding: 12px 15px; font-size: 1rem;\">
                            {% if borrowing.dateRetour is not null %}
                                {{ borrowing.dateRetour|date('d/m/Y') }}
                            {% else %}
                                Non retourné
                            {% endif %}
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"4\" style=\"text-align: center; padding: 20px;\">Aucun emprunt en cours.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        <div style=\"text-align: center; margin-top: 30px;\">
            <a href=\"{{ path('book_list') }}\" class=\"btn btn-secondary\" style=\"background-color: #333; color: #fff; padding: 12px 30px; text-decoration: none; border-radius: 30px; font-size: 1rem; transition: background-color 0.3s ease;\">
                Retour à la liste des livres
            </a>
        </div>
    </section>
</main>

<footer style=\"background-color: #fff; padding: 30px 0; text-align: center; margin-top: 50px; border-top: 1px solid #ccc;\">
    <p style=\"color: #000; font-size: 1rem; margin-top: 30px;\">@biblioVerse 2024. All rights reserved.</p>
</footer>

{% endblock %}
", "borrowing/index.html.twig", "C:\\Users\\marwa\\biblioverse\\templates\\borrowing\\index.html.twig");
    }
}
