<?php

/* GSBVisiteurBundle:FraisForfait:index.html.twig */
class __TwigTemplate_40e57de5a8eddeef5e55c14f1fa2338c5b89ba434da45a2a785a4703d52351dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Visiteur:base.html.twig", "GSBVisiteurBundle:FraisForfait:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Visiteur:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a62924397197358e5d52e551dd619758b4b250ed5830cfce5755f429212fc7b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a62924397197358e5d52e551dd619758b4b250ed5830cfce5755f429212fc7b3->enter($__internal_a62924397197358e5d52e551dd619758b4b250ed5830cfce5755f429212fc7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FraisForfait:index.html.twig"));

        $__internal_fe191ab9fdce85a15cbd553309c17421703e0e2cfc68578ab0e23447c176b6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe191ab9fdce85a15cbd553309c17421703e0e2cfc68578ab0e23447c176b6b4->enter($__internal_fe191ab9fdce85a15cbd553309c17421703e0e2cfc68578ab0e23447c176b6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FraisForfait:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a62924397197358e5d52e551dd619758b4b250ed5830cfce5755f429212fc7b3->leave($__internal_a62924397197358e5d52e551dd619758b4b250ed5830cfce5755f429212fc7b3_prof);

        
        $__internal_fe191ab9fdce85a15cbd553309c17421703e0e2cfc68578ab0e23447c176b6b4->leave($__internal_fe191ab9fdce85a15cbd553309c17421703e0e2cfc68578ab0e23447c176b6b4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5e358685744d31965deca05736447ce4dfc4f1a44b5e7636467c08ac821da58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5e358685744d31965deca05736447ce4dfc4f1a44b5e7636467c08ac821da58->enter($__internal_f5e358685744d31965deca05736447ce4dfc4f1a44b5e7636467c08ac821da58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e519ad7da47b355153ddff2d2421a557a2a714ea280814e37fa00704ed8651eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e519ad7da47b355153ddff2d2421a557a2a714ea280814e37fa00704ed8651eb->enter($__internal_e519ad7da47b355153ddff2d2421a557a2a714ea280814e37fa00704ed8651eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <center>
        <div class=\"container\">
            <h3>Liste des Frais Forfaits</h3><br/>
            <table class=\"table table-dark table-hover\">
                <tr>
                    <th>Libelle</th>
                    <th>Montant</th>
                </tr>
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ff"] ?? $this->getContext($context, "ff")));
        foreach ($context['_seq'] as $context["_key"] => $context["unFF"]) {
            // line 13
            echo "                    <tr>
                        <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFF"], "libelle", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFF"], "montant", array()), "html", null, true);
            echo " €</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFF'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </table><br/>
            <a href=\"/visiteur/frais_forfait/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVELLE<br/>FRAIS FORFAIT</a><br/>
        </div>
    </center>

";
        
        $__internal_e519ad7da47b355153ddff2d2421a557a2a714ea280814e37fa00704ed8651eb->leave($__internal_e519ad7da47b355153ddff2d2421a557a2a714ea280814e37fa00704ed8651eb_prof);

        
        $__internal_f5e358685744d31965deca05736447ce4dfc4f1a44b5e7636467c08ac821da58->leave($__internal_f5e358685744d31965deca05736447ce4dfc4f1a44b5e7636467c08ac821da58_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:FraisForfait:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 18,  70 => 15,  66 => 14,  63 => 13,  59 => 12,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":Visiteur:base.html.twig\" %}

{% block body %}
    <center>
        <div class=\"container\">
            <h3>Liste des Frais Forfaits</h3><br/>
            <table class=\"table table-dark table-hover\">
                <tr>
                    <th>Libelle</th>
                    <th>Montant</th>
                </tr>
                {% for unFF in ff %}
                    <tr>
                        <td>{{ unFF.libelle }}</td>
                        <td>{{ unFF.montant }} €</td>
                    </tr>
                {% endfor %}
            </table><br/>
            <a href=\"/visiteur/frais_forfait/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVELLE<br/>FRAIS FORFAIT</a><br/>
        </div>
    </center>

{% endblock %}", "GSBVisiteurBundle:FraisForfait:index.html.twig", "C:\\wamp64\\www\\GSB-Visiteur\\src\\GSB\\VisiteurBundle/Resources/views/FraisForfait/index.html.twig");
    }
}
