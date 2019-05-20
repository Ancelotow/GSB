<?php

/* GSBVisiteurBundle:LigneFraisForfait:index.html.twig */
class __TwigTemplate_21c435d2eea544e45c2e78ca7682141a0873882c3ccf9043ac4400f7e5cc9bb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Visiteur:base.html.twig", "GSBVisiteurBundle:LigneFraisForfait:index.html.twig", 1);
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
        $__internal_8aca548916eea33499a628d04dbe226cc08b7c06b1d0584bb6222e66748204cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aca548916eea33499a628d04dbe226cc08b7c06b1d0584bb6222e66748204cf->enter($__internal_8aca548916eea33499a628d04dbe226cc08b7c06b1d0584bb6222e66748204cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:LigneFraisForfait:index.html.twig"));

        $__internal_d94a96e0f34dfa59a6dcd5f0ed5df4e2f76b09aaac77656bed222c93faf89a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d94a96e0f34dfa59a6dcd5f0ed5df4e2f76b09aaac77656bed222c93faf89a4d->enter($__internal_d94a96e0f34dfa59a6dcd5f0ed5df4e2f76b09aaac77656bed222c93faf89a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:LigneFraisForfait:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8aca548916eea33499a628d04dbe226cc08b7c06b1d0584bb6222e66748204cf->leave($__internal_8aca548916eea33499a628d04dbe226cc08b7c06b1d0584bb6222e66748204cf_prof);

        
        $__internal_d94a96e0f34dfa59a6dcd5f0ed5df4e2f76b09aaac77656bed222c93faf89a4d->leave($__internal_d94a96e0f34dfa59a6dcd5f0ed5df4e2f76b09aaac77656bed222c93faf89a4d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_07d42a57a249134dcde62b9e435498552c3fc5b88980fb1c298828dd8459f2ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d42a57a249134dcde62b9e435498552c3fc5b88980fb1c298828dd8459f2ac->enter($__internal_07d42a57a249134dcde62b9e435498552c3fc5b88980fb1c298828dd8459f2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e29b5a67322afbc3bb95d2460a6b08e82d687f1cd5c835f26be1f9ae083140c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e29b5a67322afbc3bb95d2460a6b08e82d687f1cd5c835f26be1f9ae083140c->enter($__internal_8e29b5a67322afbc3bb95d2460a6b08e82d687f1cd5c835f26be1f9ae083140c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <center>
        <div class=\"container\">
            <h3>Liste des Lignes Frais Forfaits</h3><br/>
            <table class=\"table table-dark table-hover\">
                <tr>
                    <th>Fiche frais</th>
                    <th>Frais forfait</th>
                    <th>Quantite</th>
                    <th>Modifier</th>
                </tr>
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lff"] ?? $this->getContext($context, "lff")));
        foreach ($context['_seq'] as $context["_key"] => $context["unLFF"]) {
            // line 15
            echo "                    <tr>
                        <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unLFF"], "ficheFrais", array()), "FF", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unLFF"], "fraisForfais", array()), "libelle", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["unLFF"], "quantite", array()), "html", null, true);
            echo "</td>
                        <td><a href=\"/visiteur/ligne_frais_forfait/modifier/";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["unLFF"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">MODIFIER</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unLFF'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </table><br/>
            <a href=\"/visiteur/ligne_frais_forfait/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVELLE<br/>LIGNE FRAIS FORFAIT</a><br/>
        </div>
    </center>

";
        
        $__internal_8e29b5a67322afbc3bb95d2460a6b08e82d687f1cd5c835f26be1f9ae083140c->leave($__internal_8e29b5a67322afbc3bb95d2460a6b08e82d687f1cd5c835f26be1f9ae083140c_prof);

        
        $__internal_07d42a57a249134dcde62b9e435498552c3fc5b88980fb1c298828dd8459f2ac->leave($__internal_07d42a57a249134dcde62b9e435498552c3fc5b88980fb1c298828dd8459f2ac_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:LigneFraisForfait:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 22,  80 => 19,  76 => 18,  72 => 17,  68 => 16,  65 => 15,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
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
                    <th>Frais forfait</th>
                    <th>Quantite</th>
                    <th>Modifier</th>
                </tr>
                {% for unLFF in lff %}
                    <tr>
                        <td>{{ unLFF.ficheFrais.FF }}</td>
                        <td>{{ unLFF.fraisForfais.libelle }}</td>
                        <td>{{ unLFF.quantite }}</td>
                        <td><a href=\"/visiteur/ligne_frais_forfait/modifier/{{ unLFF.id }}\" class=\"btn btn-outline-primary\">MODIFIER</a></td>
                    </tr>
                {% endfor %}
            </table><br/>
            <a href=\"/visiteur/ligne_frais_forfait/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVELLE<br/>LIGNE FRAIS FORFAIT</a><br/>
        </div>
    </center>

{% endblock %}", "GSBVisiteurBundle:LigneFraisForfait:index.html.twig", "C:\\wamp64\\www\\GSB-Visiteur\\src\\GSB\\VisiteurBundle/Resources/views/LigneFraisForfait/index.html.twig");
    }
}
