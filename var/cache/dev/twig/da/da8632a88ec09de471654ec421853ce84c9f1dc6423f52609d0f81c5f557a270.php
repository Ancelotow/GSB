<?php

/* GSBVisiteurBundle:FicheFrais:index.html.twig */
class __TwigTemplate_9d92f95ce0d065dfd6e91cfa9605f42279b0801106527a152388f07d7c0b0fc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Visiteur:base.html.twig", "GSBVisiteurBundle:FicheFrais:index.html.twig", 1);
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
        $__internal_6e175d8d43bbc1a5a01e11f1c244ca9ff554b0c645d17de4f7388805b76c1213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e175d8d43bbc1a5a01e11f1c244ca9ff554b0c645d17de4f7388805b76c1213->enter($__internal_6e175d8d43bbc1a5a01e11f1c244ca9ff554b0c645d17de4f7388805b76c1213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FicheFrais:index.html.twig"));

        $__internal_946c54624dd60932a73d56373743d51082a675f56c3ff1cb5bec90c75fe43227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946c54624dd60932a73d56373743d51082a675f56c3ff1cb5bec90c75fe43227->enter($__internal_946c54624dd60932a73d56373743d51082a675f56c3ff1cb5bec90c75fe43227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FicheFrais:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e175d8d43bbc1a5a01e11f1c244ca9ff554b0c645d17de4f7388805b76c1213->leave($__internal_6e175d8d43bbc1a5a01e11f1c244ca9ff554b0c645d17de4f7388805b76c1213_prof);

        
        $__internal_946c54624dd60932a73d56373743d51082a675f56c3ff1cb5bec90c75fe43227->leave($__internal_946c54624dd60932a73d56373743d51082a675f56c3ff1cb5bec90c75fe43227_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9f03b5087c48fd5e413f9fe9be9b9f49ad1537c21f3cb2b5621f04adc574008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9f03b5087c48fd5e413f9fe9be9b9f49ad1537c21f3cb2b5621f04adc574008->enter($__internal_f9f03b5087c48fd5e413f9fe9be9b9f49ad1537c21f3cb2b5621f04adc574008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1f733bd8f14b82440f0ac78fdbeb8e4ef882c769d2bea2ebb6322c5e3ac5dc53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f733bd8f14b82440f0ac78fdbeb8e4ef882c769d2bea2ebb6322c5e3ac5dc53->enter($__internal_1f733bd8f14b82440f0ac78fdbeb8e4ef882c769d2bea2ebb6322c5e3ac5dc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <center>
        <div class=\"container\">
            <h3>Liste des Fiche Frais</h3><br/>
            <table class=\"table table-dark table-hover\">
                <tr>
                    <th>Mois</th>
                    <th>Nombre de Justificatifs</th>
                    <th>Montant valide</th>
                    <th>Etat</th>
                    <th>Date de la Notifications</th>
                </tr>
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ff"] ?? $this->getContext($context, "ff")));
        foreach ($context['_seq'] as $context["_key"] => $context["unFF"]) {
            // line 16
            echo "                    <tr>
                        <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute(($context["mois"] ?? $this->getContext($context, "mois")), ($this->getAttribute($context["unFF"], "mois", array()) - 1), array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFF"], "nbJustificatifs", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFF"], "montantValide", array()), "html", null, true);
            echo " €</td>
                        <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFF"], "LeEtat", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["unFF"], "dateNotif", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFF'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </table><br/>
            <a href=\"/visiteur/fiche_frais/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVELLE<br/>FICHE FRAIS</a><br/>
        </div>
    </center>

";
        
        $__internal_1f733bd8f14b82440f0ac78fdbeb8e4ef882c769d2bea2ebb6322c5e3ac5dc53->leave($__internal_1f733bd8f14b82440f0ac78fdbeb8e4ef882c769d2bea2ebb6322c5e3ac5dc53_prof);

        
        $__internal_f9f03b5087c48fd5e413f9fe9be9b9f49ad1537c21f3cb2b5621f04adc574008->leave($__internal_f9f03b5087c48fd5e413f9fe9be9b9f49ad1537c21f3cb2b5621f04adc574008_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:FicheFrais:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 24,  85 => 21,  81 => 20,  77 => 19,  73 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
            <h3>Liste des Fiche Frais</h3><br/>
            <table class=\"table table-dark table-hover\">
                <tr>
                    <th>Mois</th>
                    <th>Nombre de Justificatifs</th>
                    <th>Montant valide</th>
                    <th>Etat</th>
                    <th>Date de la Notifications</th>
                </tr>
                {% for unFF in ff %}
                    <tr>
                        <td>{{ mois[unFF.mois - 1] }}</td>
                        <td>{{ unFF.nbJustificatifs }}</td>
                        <td>{{ unFF.montantValide }} €</td>
                        <td>{{ unFF.LeEtat }}</td>
                        <td>{{ unFF.dateNotif|date('d/m/Y') }}</td>
                    </tr>
                {% endfor %}
            </table><br/>
            <a href=\"/visiteur/fiche_frais/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVELLE<br/>FICHE FRAIS</a><br/>
        </div>
    </center>

{% endblock %}", "GSBVisiteurBundle:FicheFrais:index.html.twig", "C:\\wamp64\\www\\GSB-Visiteur\\src\\GSB\\VisiteurBundle/Resources/views/FicheFrais/index.html.twig");
    }
}
