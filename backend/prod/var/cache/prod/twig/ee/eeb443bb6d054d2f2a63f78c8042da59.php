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

/* includes/header.html.twig */
class __TwigTemplate_7c46a816659aa1edaa26cc2e5e4fe6b5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<a class=\"btn btn-warning\" href=\"/voyages\">Voyages</a>
<a class=\"btn btn-warning\" href=\"/categories\">Categories</a>
<a class=\"btn btn-warning\" href=\"/destinations\">Destinations</a>
<a class=\"btn btn-warning\" href=\"/users\">Users</a>
<a class=\"btn btn-warning\" href=\"/logout\">Deconexion</a>

<p>Connecté en tant que
\t";
        // line 9
        yield "\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 10
            yield "\t\trôle admin
\t";
        }
        // line 12
        yield "\t,
\t";
        // line 13
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITEUR")) {
            // line 14
            yield "\t\trôle éditeur
\t";
        }
        // line 16
        yield "</p>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "includes/header.html.twig";
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
        return array (  63 => 16,  59 => 14,  57 => 13,  54 => 12,  50 => 10,  47 => 9,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "includes/header.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Briefs_Simplon\\Brief7-AgenceDeVoyage\\backend\\prod\\templates\\includes\\header.html.twig");
    }
}
