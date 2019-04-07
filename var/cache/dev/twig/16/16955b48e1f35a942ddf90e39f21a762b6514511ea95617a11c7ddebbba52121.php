<?php

/* GSBVisiteurBundle:LigneFraisHorsForfait:index.html.twig */
class __TwigTemplate_5b0d1b49d35692f213974b006664deace131642b14fa799e4f2dd1a82c9989c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Visiteur:base.html.twig", "GSBVisiteurBundle:LigneFraisHorsForfait:index.html.twig", 1);
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
        $__internal_8f93329ee0a4efb232d46f77f807e398fff037c9fde45b70ac8d34e2e23f90a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f93329ee0a4efb232d46f77f807e398fff037c9fde45b70ac8d34e2e23f90a9->enter($__internal_8f93329ee0a4efb232d46f77f807e398fff037c9fde45b70ac8d34e2e23f90a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:LigneFraisHorsForfait:index.html.twig"));

        $__internal_e2c796699dc458c5e646caa082ae1a426fe501de5fc50f01f5c4b5f3ca5c08ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c796699dc458c5e646caa082ae1a426fe501de5fc50f01f5c4b5f3ca5c08ec->enter($__internal_e2c796699dc458c5e646caa082ae1a426fe501de5fc50f01f5c4b5f3ca5c08ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:LigneFraisHorsForfait:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f93329ee0a4efb232d46f77f807e398fff037c9fde45b70ac8d34e2e23f90a9->leave($__internal_8f93329ee0a4efb232d46f77f807e398fff037c9fde45b70ac8d34e2e23f90a9_prof);

        
        $__internal_e2c796699dc458c5e646caa082ae1a426fe501de5fc50f01f5c4b5f3ca5c08ec->leave($__internal_e2c796699dc458c5e646caa082ae1a426fe501de5fc50f01f5c4b5f3ca5c08ec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4db1d539d7462ec8e27cf5326f0b5ba69ca8ec1050db9b8c1604661c5129e9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4db1d539d7462ec8e27cf5326f0b5ba69ca8ec1050db9b8c1604661c5129e9c->enter($__internal_e4db1d539d7462ec8e27cf5326f0b5ba69ca8ec1050db9b8c1604661c5129e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e44e4975ab93166a13f75520c84e8c06049e37995809da2514609d5a55f6fc96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e44e4975ab93166a13f75520c84e8c06049e37995809da2514609d5a55f6fc96->enter($__internal_e44e4975ab93166a13f75520c84e8c06049e37995809da2514609d5a55f6fc96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <center>
        <div class=\"container\">
            <h3>Liste des Lignes Frais Forfaits</h3><br/>
            <table class=\"table table-dark table-hover\">
                <tr>
                    <th>Fiche frais</th>
                    <th>Date</th>
                    <th>Montant</th>
                    <th>Libelle</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lfhf"] ?? $this->getContext($context, "lfhf")));
        foreach ($context['_seq'] as $context["_key"] => $context["unLFHF"]) {
            // line 17
            echo "                    <tr>
                        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unLFHF"], "ficheFrais", array()), "FF", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["unLFHF"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["unLFHF"], "montant", array()), "html", null, true);
            echo " €</td>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["unLFHF"], "libelle", array()), "html", null, true);
            echo "</td>
                        <td><a href=\"/visiteur/ligne_frais_hors_forfait/modifier/";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["unLFHF"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">MODIFIER</a></td>
                        <td><a href=\"/visiteur/ligne_frais_hors_forfait/supprimer/";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["unLFHF"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-danger\">SUPPRIMER</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unLFHF'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </table><br/>
            <a href=\"/visiteur/ligne_frais_hors_forfait/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVELLE<br/>LIGNE FRAIS<br/> HORS FORFAIT</a><br/>
        </div>
    </center>

";
        
        $__internal_e44e4975ab93166a13f75520c84e8c06049e37995809da2514609d5a55f6fc96->leave($__internal_e44e4975ab93166a13f75520c84e8c06049e37995809da2514609d5a55f6fc96_prof);

        
        $__internal_e4db1d539d7462ec8e27cf5326f0b5ba69ca8ec1050db9b8c1604661c5129e9c->leave($__internal_e4db1d539d7462ec8e27cf5326f0b5ba69ca8ec1050db9b8c1604661c5129e9c_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:LigneFraisHorsForfait:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 26,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
            <h3>Liste des Lignes Frais Forfaits</h3><br/>
            <table class=\"table table-dark table-hover\">
                <tr>
                    <th>Fiche frais</th>
                    <th>Date</th>
                    <th>Montant</th>
                    <th>Libelle</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                {% for unLFHF in lfhf %}
                    <tr>
                        <td>{{ unLFHF.ficheFrais.FF }}</td>
                        <td>{{ unLFHF.date|date('d/m/Y') }}</td>
                        <td>{{ unLFHF.montant }} €</td>
                        <td>{{ unLFHF.libelle }}</td>
                        <td><a href=\"/visiteur/ligne_frais_hors_forfait/modifier/{{ unLFHF.id }}\" class=\"btn btn-outline-primary\">MODIFIER</a></td>
                        <td><a href=\"/visiteur/ligne_frais_hors_forfait/supprimer/{{ unLFHF.id }}\" class=\"btn btn-outline-danger\">SUPPRIMER</a></td>
                    </tr>
                {% endfor %}
            </table><br/>
            <a href=\"/visiteur/ligne_frais_hors_forfait/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVELLE<br/>LIGNE FRAIS<br/> HORS FORFAIT</a><br/>
        </div>
    </center>

{% endblock %}", "GSBVisiteurBundle:LigneFraisHorsForfait:index.html.twig", "C:\\wamp64\\www\\GSB\\src\\GSB\\VisiteurBundle/Resources/views/LigneFraisHorsForfait/index.html.twig");
    }
}
