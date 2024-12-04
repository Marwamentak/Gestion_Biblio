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
class __TwigTemplate_255f118eff8109fcc20752c442047de2 extends Template
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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1>Mes emprunts</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre du livre</th>
                <th>Date d'emprunt</th>
                <th>Date de retour</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["borrowings"]) || array_key_exists("borrowings", $context) ? $context["borrowings"] : (function () { throw new RuntimeError('Variable "borrowings" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["borrowing"]) {
            // line 20
            yield "                <tr>
                    <td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["borrowing"], "id", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
                    <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["borrowing"], "book", [], "any", false, false, false, 22), "titre", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                    <td>";
            // line 23
            ((CoreExtension::getAttribute($this->env, $this->source, $context["borrowing"], "dateEmprunt", [], "any", false, false, false, 23)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["borrowing"], "dateEmprunt", [], "any", false, false, false, 23), "d/m/Y"), "html", null, true)) : (yield "Non définie"));
            yield "</td>
                    <td>
                        ";
            // line 25
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["borrowing"], "dateRetour", [], "any", false, false, false, 25))) {
                // line 26
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["borrowing"], "dateRetour", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true);
                yield "
                        ";
            } else {
                // line 28
                yield "                            Non retourné
                        ";
            }
            // line 30
            yield "                    </td>
                    <td>
                        ";
            // line 32
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["borrowing"], "dateRetour", [], "any", false, false, false, 32))) {
                // line 33
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("return", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["borrowing"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                yield "\" class=\"btn btn-success\">Retourner le livre</a>
                        ";
            }
            // line 35
            yield "                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            yield "                <tr>
                    <td colspan=\"5\">Aucun emprunt en cours.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['borrowing'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_list");
        yield "\" class=\"btn btn-secondary\">Retour à la liste des livres</a>
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
        return array (  181 => 45,  176 => 42,  167 => 38,  160 => 35,  154 => 33,  152 => 32,  148 => 30,  144 => 28,  138 => 26,  136 => 25,  131 => 23,  127 => 22,  123 => 21,  120 => 20,  115 => 19,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes emprunts{% endblock %}

{% block body %}
    <h1>Mes emprunts</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre du livre</th>
                <th>Date d'emprunt</th>
                <th>Date de retour</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for borrowing in borrowings %}
                <tr>
                    <td>{{ borrowing.id }}</td>
                    <td>{{ borrowing.book.titre }}</td>
                    <td>{{ borrowing.dateEmprunt ? borrowing.dateEmprunt|date('d/m/Y') : 'Non définie' }}</td>
                    <td>
                        {% if borrowing.dateRetour is not null %}
                            {{ borrowing.dateRetour|date('d/m/Y') }}
                        {% else %}
                            Non retourné
                        {% endif %}
                    </td>
                    <td>
                        {% if borrowing.dateRetour is null %}
                            <a href=\"{{ path('return', {'id': borrowing.id}) }}\" class=\"btn btn-success\">Retourner le livre</a>
                        {% endif %}
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"5\">Aucun emprunt en cours.</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('book_list') }}\" class=\"btn btn-secondary\">Retour à la liste des livres</a>
{% endblock %}
", "borrowing/index.html.twig", "C:\\Users\\marwa\\biblioverse\\templates\\borrowing\\index.html.twig");
    }
}
