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

/* history/index.html.twig */
class __TwigTemplate_4bc3f5154fd30a13b371474a7192e4e2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "history/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "history/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "history/index.html.twig", 1);
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

        yield "Historique des emprunts";
        
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
        yield "    <div class=\"container mt-5\">
        <h1>Historique de vos emprunts</h1>

        ";
        // line 9
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["borrowings"]) || array_key_exists("borrowings", $context) ? $context["borrowings"] : (function () { throw new RuntimeError('Variable "borrowings" does not exist.', 9, $this->source); })()))) {
            // line 10
            yield "            <div class=\"alert alert-info\">
                Vous n'avez pas encore d'historique d'emprunts.
            </div>
        ";
        } else {
            // line 14
            yield "            <table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th>Titre du livre</th>
                        <th>Date d'emprunt</th>
                        <th>Date de retour</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["borrowings"]) || array_key_exists("borrowings", $context) ? $context["borrowings"] : (function () { throw new RuntimeError('Variable "borrowings" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["borrowing"]) {
                // line 24
                yield "                        ";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, $context["borrowing"]);
                yield "
                    
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['borrowing'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "                </tbody>
            </table>
        ";
        }
        // line 30
        yield "    </div>
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
        return "history/index.html.twig";
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
        return array (  143 => 30,  138 => 27,  128 => 24,  124 => 23,  113 => 14,  107 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Historique des emprunts{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1>Historique de vos emprunts</h1>

        {% if borrowings is empty %}
            <div class=\"alert alert-info\">
                Vous n'avez pas encore d'historique d'emprunts.
            </div>
        {% else %}
            <table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th>Titre du livre</th>
                        <th>Date d'emprunt</th>
                        <th>Date de retour</th>
                    </tr>
                </thead>
                <tbody>
                    {% for borrowing in borrowings %}
                        {{ dump(borrowing) }}
                    
                    {% endfor %}
                </tbody>
            </table>
        {% endif %}
    </div>
{% endblock %}
", "history/index.html.twig", "C:\\Users\\marwa\\biblioverse\\templates\\history\\index.html.twig");
    }
}
