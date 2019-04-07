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
        $__internal_082a24c30aae63d11271aba19a1b7cb46dd0b049940064d16646c281a2fc6db6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_082a24c30aae63d11271aba19a1b7cb46dd0b049940064d16646c281a2fc6db6->enter($__internal_082a24c30aae63d11271aba19a1b7cb46dd0b049940064d16646c281a2fc6db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:LigneFraisForfait:index.html.twig"));

        $__internal_3db2bdfaf62df06c8863fd0d87f70f5650d5f7d664a732711675aa019165b203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db2bdfaf62df06c8863fd0d87f70f5650d5f7d664a732711675aa019165b203->enter($__internal_3db2bdfaf62df06c8863fd0d87f70f5650d5f7d664a732711675aa019165b203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:LigneFraisForfait:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_082a24c30aae63d11271aba19a1b7cb46dd0b049940064d16646c281a2fc6db6->leave($__internal_082a24c30aae63d11271aba19a1b7cb46dd0b049940064d16646c281a2fc6db6_prof);

        
        $__internal_3db2bdfaf62df06c8863fd0d87f70f5650d5f7d664a732711675aa019165b203->leave($__internal_3db2bdfaf62df06c8863fd0d87f70f5650d5f7d664a732711675aa019165b203_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e205cf859cc0c2398be51852007e6a92145770f25df09317b4d22fabcaf2fe47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e205cf859cc0c2398be51852007e6a92145770f25df09317b4d22fabcaf2fe47->enter($__internal_e205cf859cc0c2398be51852007e6a92145770f25df09317b4d22fabcaf2fe47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d11b4e33a039d3adc972003d299c80349355acb44921aaf462f22975b6bca44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d11b4e33a039d3adc972003d299c80349355acb44921aaf462f22975b6bca44->enter($__internal_7d11b4e33a039d3adc972003d299c80349355acb44921aaf462f22975b6bca44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <th>Supprimer</th>
                </tr>
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lff"] ?? $this->getContext($context, "lff")));
        foreach ($context['_seq'] as $context["_key"] => $context["unLFF"]) {
            // line 16
            echo "                    <tr>
                        <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unLFF"], "ficheFrais", array()), "FF", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unLFF"], "fraisForfais", array()), "libelle", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["unLFF"], "quantite", array()), "html", null, true);
            echo "</td>
                        <td><a href=\"/visiteur/ligne_frais_forfait/modifier/";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["unLFF"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">MODIFIER</a></td>
                        <td><a href=\"/visiteur/ligne_frais_forfait/supprimer/";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["unLFF"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-danger\">SUPPRIMER</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unLFF'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </table><br/>
            <a href=\"/visiteur/ligne_frais_forfait/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVELLE<br/>LIGNE FRAIS FORFAIT</a><br/>
        </div>
    </center>

";
        
        $__internal_7d11b4e33a039d3adc972003d299c80349355acb44921aaf462f22975b6bca44->leave($__internal_7d11b4e33a039d3adc972003d299c80349355acb44921aaf462f22975b6bca44_prof);

        
        $__internal_e205cf859cc0c2398be51852007e6a92145770f25df09317b4d22fabcaf2fe47->leave($__internal_e205cf859cc0c2398be51852007e6a92145770f25df09317b4d22fabcaf2fe47_prof);

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
            <h3>Liste des Lignes Frais Forfaits</h3><br/>
            <table class=\"table table-dark table-hover\">
                <tr>
                    <th>Fiche frais</th>
                    <th>Frais forfait</th>
                    <th>Quantite</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                {% for unLFF in lff %}
                    <tr>
                        <td>{{ unLFF.ficheFrais.FF }}</td>
                        <td>{{ unLFF.fraisForfais.libelle }}</td>
                        <td>{{ unLFF.quantite }}</td>
                        <td><a href=\"/visiteur/ligne_frais_forfait/modifier/{{ unLFF.id }}\" class=\"btn btn-outline-primary\">MODIFIER</a></td>
                        <td><a href=\"/visiteur/ligne_frais_forfait/supprimer/{{ unLFF.id }}\" class=\"btn btn-outline-danger\">SUPPRIMER</a></td>
                    </tr>
                {% endfor %}
            </table><br/>
            <a href=\"/visiteur/ligne_frais_forfait/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVELLE<br/>LIGNE FRAIS FORFAIT</a><br/>
        </div>
    </center>

{% endblock %}", "GSBVisiteurBundle:LigneFraisForfait:index.html.twig", "C:\\wamp64\\www\\GSB\\src\\GSB\\VisiteurBundle/Resources/views/LigneFraisForfait/index.html.twig");
    }
}
