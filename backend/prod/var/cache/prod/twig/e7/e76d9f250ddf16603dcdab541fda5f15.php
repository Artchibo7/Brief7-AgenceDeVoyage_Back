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

/* voyage/index.html.twig */
class __TwigTemplate_e4b38c3a5e161b63b66c9cf327e35ee1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "voyage/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Art & Voyage
";
        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["erreur"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            yield "\t\t<div class=\"alert bg-danger text-center text-white p-1 m-5 mt-3 mb-3 rounded \">
\t\t\t";
            // line 9
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["message"], "html", null, true);
            yield "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "
\t<h1 class=\"text-center\" style=\"color: green\">Mes voyages</h1>
\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>NomVoyage</th>
\t\t\t\t<th>DateDepart</th>
\t\t\t\t<th>DateRetour</th>
\t\t\t\t<th>Destination</th>
\t\t\t\t<th>Prix</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 26), "voyages", [], "any", false, false, false, 26));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
            // line 27
            yield "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 28
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "NomVoyage", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 29
            ((CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "DateDepart", [], "any", false, false, false, 29)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "DateDepart", [], "any", false, false, false, 29), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
\t\t\t\t\t<td>";
            // line 30
            ((CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "DateRetour", [], "any", false, false, false, 30)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "DateRetour", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
\t\t\t\t\t<td>";
            // line 31
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "destination", [], "any", false, false, false, 31), "nomPays", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 32
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "prix", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
            // line 34
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voyage_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\">voir</a>
\t\t\t\t\t\t<a class=\"btn btn-success\" href=\"";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voyage_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\">éditer</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            yield "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"6\">Vous avez encore rien ajouté</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "\t\t</tbody>
\t</table>


\t<h1 class=\"text-center\" style=\"color: green\">Les voyages</h1>
\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>NomVoyage</th>
\t\t\t\t<th>DateDepart</th>
\t\t\t\t<th>DateRetour</th>
\t\t\t\t<th>Destination</th>
\t\t\t\t<th>Prix</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["voyages"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
            // line 61
            yield "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 62
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "NomVoyage", [], "any", false, false, false, 62), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 63
            ((CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "DateDepart", [], "any", false, false, false, 63)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "DateDepart", [], "any", false, false, false, 63), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
\t\t\t\t\t<td>";
            // line 64
            ((CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "DateRetour", [], "any", false, false, false, 64)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "DateRetour", [], "any", false, false, false, 64), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
\t\t\t\t\t<td>";
            // line 65
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "destination", [], "any", false, false, false, 65), "nomPays", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 66
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "prix", [], "any", false, false, false, 66), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
            // line 68
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voyage_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            yield "\">voir</a>
\t\t\t\t\t\t<a class=\"btn btn-success\" href=\"";
            // line 69
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voyage_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            yield "\">éditer</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 73
            yield "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"6\">Vous avez encore rien ajouté</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "\t\t</tbody>
\t</table>

\t<a class=\"btn btn-secondary\" href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voyage_new");
        yield "\">Créer un nouveau voyage</a>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "voyage/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  220 => 80,  215 => 77,  206 => 73,  197 => 69,  193 => 68,  188 => 66,  184 => 65,  180 => 64,  176 => 63,  172 => 62,  169 => 61,  164 => 60,  145 => 43,  136 => 39,  127 => 35,  123 => 34,  118 => 32,  114 => 31,  110 => 30,  106 => 29,  102 => 28,  99 => 27,  94 => 26,  78 => 12,  69 => 9,  66 => 8,  61 => 7,  57 => 6,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "voyage/index.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Briefs_Simplon\\Brief7-AgenceDeVoyage\\backend\\prod\\templates\\voyage\\index.html.twig");
    }
}
