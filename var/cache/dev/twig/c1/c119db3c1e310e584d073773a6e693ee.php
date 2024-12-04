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
class __TwigTemplate_b51b7fe619fae06304f444f14334e3a1 extends Template
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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1>Liste des livres</h1>

    ";
        // line 9
        yield "    <table class=\"table\">
        <thead>
            <tr>
                <th>Titre</th>
                <th>ISBN</th>
                <th>Type</th>
                <th>Éditeur</th>
                <th>Année d'édition</th>
                <th>État</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 23
            yield "                <tr>
                    <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "titre", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
                    <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "isbn", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                    <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["book"], "type", [], "any", false, false, false, 26), "value", [], "any", false, false, false, 26)), "html", null, true);
            yield "</td>  ";
            // line 27
            yield "                    <td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "editeur", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                    <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "annee_edition", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                    <td>";
            // line 29
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["book"], "etat", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29) == "disponible")) ? ("Disponible") : ("Emprunté"));
            yield "</td>  ";
            // line 30
            yield "                    <td>
                        ";
            // line 32
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_book", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Modifier</a>
                        
                    </td>
                    <td>
                        
                        <form method=\"post\" action=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_book", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce livre ?');\" style=\"display:inline;\">
                            <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                        </form>
                    </td>
                    <td>
                        <!-- Bouton Borrow (Emprunter) -->
                        ";
            // line 43
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["book"], "etat", [], "any", false, false, false, 43), "value", [], "any", false, false, false, 43) == "disponible")) {
                // line 44
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("borrow", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                yield "\" class=\"btn btn-primary\">Emprunter</a>
                        ";
            } else {
                // line 46
                yield "                            <span>Ce livre est déjà emprunté</span>
                        ";
            }
            // line 48
            yield "                    </td>
                    
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            yield "                <tr>
                    <td colspan=\"7\">Aucun livre trouvé.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['book'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "        </tbody>
    </table>

    ";
        // line 60
        yield "    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_book");
        yield "\" class=\"btn btn-success\">Ajouter un livre</a>

    
    
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
        return array (  205 => 60,  200 => 56,  191 => 52,  183 => 48,  179 => 46,  173 => 44,  171 => 43,  162 => 37,  153 => 32,  150 => 30,  147 => 29,  143 => 28,  138 => 27,  135 => 26,  131 => 25,  127 => 24,  124 => 23,  119 => 22,  104 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des livres{% endblock %}

{% block body %}
    <h1>Liste des livres</h1>

    {# Affichage des livres sous forme de tableau #}
    <table class=\"table\">
        <thead>
            <tr>
                <th>Titre</th>
                <th>ISBN</th>
                <th>Type</th>
                <th>Éditeur</th>
                <th>Année d'édition</th>
                <th>État</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for book in books %}
                <tr>
                    <td>{{ book.titre }}</td>
                    <td>{{ book.isbn }}</td>
                    <td>{{ book.type.value | capitalize }}</td>  {# Affiche le type en utilisant la valeur de l'énumération #}
                    <td>{{ book.editeur }}</td>
                    <td>{{ book.annee_edition }}</td>
                    <td>{{ book.etat.value == 'disponible' ? 'Disponible' : 'Emprunté' }}</td>  {# Affiche l'état en texte #}
                    <td>
                        {# Ajouter des boutons ou liens pour les actions (voir, emprunter, modifier, etc.) #}
                        <a href=\"{{ path('edit_book', {'id': book.id}) }}\" class=\"btn btn-primary\">Modifier</a>
                        
                    </td>
                    <td>
                        
                        <form method=\"post\" action=\"{{ path('delete_book', {'id': book.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce livre ?');\" style=\"display:inline;\">
                            <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                        </form>
                    </td>
                    <td>
                        <!-- Bouton Borrow (Emprunter) -->
                        {% if book.etat.value == 'disponible' %}
                            <a href=\"{{ path('borrow', {'id': book.id}) }}\" class=\"btn btn-primary\">Emprunter</a>
                        {% else %}
                            <span>Ce livre est déjà emprunté</span>
                        {% endif %}
                    </td>
                    
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"7\">Aucun livre trouvé.</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    {# Lien pour ajouter un nouveau livre #}
    <a href=\"{{ path('add_book') }}\" class=\"btn btn-success\">Ajouter un livre</a>

    
    
{% endblock %}
", "book/list.html.twig", "C:\\Users\\marwa\\biblioverse\\templates\\book\\list.html.twig");
    }
}
