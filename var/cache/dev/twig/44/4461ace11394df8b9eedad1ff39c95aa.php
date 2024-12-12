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

/* book/list.html.twig */
class __TwigTemplate_400781040fc9efd0b4d624a929cdc179 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "book/list.html.twig", 1);
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

        yield "Liste des livres";
        
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

<main class=\"book-list-page\" style=\"background-color: #ffc5c5; color: #333; padding: 40px 20px; min-height: 80vh;\">
    <section class=\"book-list-table-container\" style=\"width: 100%; max-width: 1200px; background-color: #fff; padding: 30px; border-radius: 15px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); margin: 0 auto;\">
        <h1 style=\"text-align: center; font-size: 2rem; color: #000; margin-bottom: 30px;\">Liste des livres</h1>

        <table class=\"table\" style=\"width: 100%; border-collapse: collapse; text-align: left;\">
            <thead>
                <tr style=\"background-color: #333; color: white;\">
                    <th style=\"padding: 12px 15px; font-size: 1rem; text-align: left;\">Titre</th>
                    <th style=\"padding: 12px 15px; font-size: 1rem; text-align: left;\">ISBN</th>
                    <th style=\"padding: 12px 15px; font-size: 1rem; text-align: left;\">Type</th>
                    <th style=\"padding: 12px 15px; font-size: 1rem; text-align: left;\">Éditeur</th>
                    <th style=\"padding: 12px 15px; font-size: 1rem; text-align: left;\">Année d'édition</th>
                    <th style=\"padding: 12px 15px; font-size: 1rem; text-align: left;\">État</th>
                    <th style=\"padding: 12px 15px; font-size: 1rem; text-align: left;\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 42
            yield "                    <tr style=\"border-bottom: 1px solid #ddd;\">
                        <td style=\"padding: 12px 15px; font-size: 1rem;\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "titre", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                        <td style=\"padding: 12px 15px; font-size: 1rem;\">";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "isbn", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                        <td style=\"padding: 12px 15px; font-size: 1rem;\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["book"], "type", [], "any", false, false, false, 45), "value", [], "any", false, false, false, 45)), "html", null, true);
            yield "</td>
                        <td style=\"padding: 12px 15px; font-size: 1rem;\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "editeur", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                        <td style=\"padding: 12px 15px; font-size: 1rem;\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "annee_edition", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
                        <td style=\"padding: 12px 15px; font-size: 1rem;\">
                            ";
            // line 49
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["book"], "etat", [], "any", false, false, false, 49), "value", [], "any", false, false, false, 49) == "disponible")) ? ("Disponible") : ("Emprunté"));
            yield "
                        </td>
                        <td style=\"padding: 12px 15px; font-size: 1rem; display: flex; gap: 10px;\">
                            <a href=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_book", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            yield "\" class=\"btn\" style=\"background-color: #000; color: white; padding: 8px 16px; text-decoration: none; border-radius: 5px;\">Modifier</a>
                            <form method=\"post\" action=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_book", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce livre ?');\" style=\"display:inline;\">
                                <button type=\"submit\" class=\"btn\" style=\"background-color: #000; color: white; padding: 8px 16px; border: none; border-radius: 5px;\">Supprimer</button>
                            </form>
                            ";
            // line 56
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["book"], "etat", [], "any", false, false, false, 56), "value", [], "any", false, false, false, 56) == "disponible")) {
                // line 57
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("borrow", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                yield "\" class=\"btn\" style=\"background-color: #000; color: white; padding: 8px 16px; text-decoration: none; border-radius: 5px;\">Emprunter</a>
                            ";
            } else {
                // line 59
                yield "                                <span style=\"color: #f44336;\">Ce livre est déjà emprunté</span>
                            ";
            }
            // line 61
            yield "                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 64
            yield "                    <tr>
                        <td colspan=\"7\" style=\"text-align: center; padding: 20px;\">Aucun livre trouvé.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['book'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "            </tbody>
        </table>

        <div style=\"text-align: center; margin-top: 30px;\">
            <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_book");
        yield "\" class=\"btn\" style=\"background-color: #000; color: white; padding: 12px 30px; text-decoration: none; border-radius: 30px; font-size: 1rem; transition: background-color 0.3s ease;\">
                Ajouter un livre
            </a>
            <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("borrowings");
        yield "\" class=\"btn\" style=\"background-color: #000; color: white; padding: 12px 30px; text-decoration: none; border-radius: 30px; font-size: 1rem; transition: background-color 0.3s ease; margin-left: 10px;\">
                Voir mes emprunts
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
        return "book/list.html.twig";
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
        return array (  255 => 75,  249 => 72,  243 => 68,  234 => 64,  227 => 61,  223 => 59,  217 => 57,  215 => 56,  209 => 53,  205 => 52,  199 => 49,  194 => 47,  190 => 46,  186 => 45,  182 => 44,  178 => 43,  175 => 42,  170 => 41,  144 => 18,  140 => 17,  136 => 16,  128 => 10,  115 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des livres{% endblock %}

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

<main class=\"book-list-page\" style=\"background-color: #ffc5c5; color: #333; padding: 40px 20px; min-height: 80vh;\">
    <section class=\"book-list-table-container\" style=\"width: 100%; max-width: 1200px; background-color: #fff; padding: 30px; border-radius: 15px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); margin: 0 auto;\">
        <h1 style=\"text-align: center; font-size: 2rem; color: #000; margin-bottom: 30px;\">Liste des livres</h1>

        <table class=\"table\" style=\"width: 100%; border-collapse: collapse; text-align: left;\">
            <thead>
                <tr style=\"background-color: #333; color: white;\">
                    <th style=\"padding: 12px 15px; font-size: 1rem; text-align: left;\">Titre</th>
                    <th style=\"padding: 12px 15px; font-size: 1rem; text-align: left;\">ISBN</th>
                    <th style=\"padding: 12px 15px; font-size: 1rem; text-align: left;\">Type</th>
                    <th style=\"padding: 12px 15px; font-size: 1rem; text-align: left;\">Éditeur</th>
                    <th style=\"padding: 12px 15px; font-size: 1rem; text-align: left;\">Année d'édition</th>
                    <th style=\"padding: 12px 15px; font-size: 1rem; text-align: left;\">État</th>
                    <th style=\"padding: 12px 15px; font-size: 1rem; text-align: left;\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for book in books %}
                    <tr style=\"border-bottom: 1px solid #ddd;\">
                        <td style=\"padding: 12px 15px; font-size: 1rem;\">{{ book.titre }}</td>
                        <td style=\"padding: 12px 15px; font-size: 1rem;\">{{ book.isbn }}</td>
                        <td style=\"padding: 12px 15px; font-size: 1rem;\">{{ book.type.value | capitalize }}</td>
                        <td style=\"padding: 12px 15px; font-size: 1rem;\">{{ book.editeur }}</td>
                        <td style=\"padding: 12px 15px; font-size: 1rem;\">{{ book.annee_edition }}</td>
                        <td style=\"padding: 12px 15px; font-size: 1rem;\">
                            {{ book.etat.value == 'disponible' ? 'Disponible' : 'Emprunté' }}
                        </td>
                        <td style=\"padding: 12px 15px; font-size: 1rem; display: flex; gap: 10px;\">
                            <a href=\"{{ path('edit_book', {'id': book.id}) }}\" class=\"btn\" style=\"background-color: #000; color: white; padding: 8px 16px; text-decoration: none; border-radius: 5px;\">Modifier</a>
                            <form method=\"post\" action=\"{{ path('delete_book', {'id': book.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce livre ?');\" style=\"display:inline;\">
                                <button type=\"submit\" class=\"btn\" style=\"background-color: #000; color: white; padding: 8px 16px; border: none; border-radius: 5px;\">Supprimer</button>
                            </form>
                            {% if book.etat.value == 'disponible' %}
                                <a href=\"{{ path('borrow', {'id': book.id}) }}\" class=\"btn\" style=\"background-color: #000; color: white; padding: 8px 16px; text-decoration: none; border-radius: 5px;\">Emprunter</a>
                            {% else %}
                                <span style=\"color: #f44336;\">Ce livre est déjà emprunté</span>
                            {% endif %}
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"7\" style=\"text-align: center; padding: 20px;\">Aucun livre trouvé.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        <div style=\"text-align: center; margin-top: 30px;\">
            <a href=\"{{ path('add_book') }}\" class=\"btn\" style=\"background-color: #000; color: white; padding: 12px 30px; text-decoration: none; border-radius: 30px; font-size: 1rem; transition: background-color 0.3s ease;\">
                Ajouter un livre
            </a>
            <a href=\"{{ path('borrowings') }}\" class=\"btn\" style=\"background-color: #000; color: white; padding: 12px 30px; text-decoration: none; border-radius: 30px; font-size: 1rem; transition: background-color 0.3s ease; margin-left: 10px;\">
                Voir mes emprunts
            </a>
        </div>
    </section>
</main>

<footer style=\"background-color: #fff; padding: 30px 0; text-align: center; margin-top: 50px; border-top: 1px solid #ccc;\">
    <p style=\"color: #000; font-size: 1rem; margin-top: 30px;\">@biblioVerse 2024. All rights reserved.</p>
</footer>

{% endblock %}
", "book/list.html.twig", "C:\\Users\\marwa\\biblioverse\\templates\\book\\list.html.twig");
    }
}
