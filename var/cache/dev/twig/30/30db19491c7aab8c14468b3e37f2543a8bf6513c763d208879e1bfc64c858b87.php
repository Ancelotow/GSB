<?php

/* GSBVisiteurBundle:FicheFrais:listMois.html.twig */
class __TwigTemplate_b96d021e95461f852301f22d70a2113bdcec23c5c168758b46b7a11840dd1199 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Visiteur:base.html.twig", "GSBVisiteurBundle:FicheFrais:listMois.html.twig", 1);
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
        $__internal_280eee576da2ed2d138f3e1404a6ee43dab90dd17c31c1e77e74c9e8d89d9d2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_280eee576da2ed2d138f3e1404a6ee43dab90dd17c31c1e77e74c9e8d89d9d2c->enter($__internal_280eee576da2ed2d138f3e1404a6ee43dab90dd17c31c1e77e74c9e8d89d9d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FicheFrais:listMois.html.twig"));

        $__internal_46a57f3fca6c86aebee1a01038cb3b2c2453e74c8eb3045cda86677c80a82304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46a57f3fca6c86aebee1a01038cb3b2c2453e74c8eb3045cda86677c80a82304->enter($__internal_46a57f3fca6c86aebee1a01038cb3b2c2453e74c8eb3045cda86677c80a82304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FicheFrais:listMois.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_280eee576da2ed2d138f3e1404a6ee43dab90dd17c31c1e77e74c9e8d89d9d2c->leave($__internal_280eee576da2ed2d138f3e1404a6ee43dab90dd17c31c1e77e74c9e8d89d9d2c_prof);

        
        $__internal_46a57f3fca6c86aebee1a01038cb3b2c2453e74c8eb3045cda86677c80a82304->leave($__internal_46a57f3fca6c86aebee1a01038cb3b2c2453e74c8eb3045cda86677c80a82304_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d90ee121b7c0add29c94b9913a3713f6e785866a32f9b8847122c45c6cca97aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d90ee121b7c0add29c94b9913a3713f6e785866a32f9b8847122c45c6cca97aa->enter($__internal_d90ee121b7c0add29c94b9913a3713f6e785866a32f9b8847122c45c6cca97aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46951651f3a91aa64493b29f994db3bb84c59c37e75872f27c7092a8ddaa581d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46951651f3a91aa64493b29f994db3bb84c59c37e75872f27c7092a8ddaa581d->enter($__internal_46951651f3a91aa64493b29f994db3bb84c59c37e75872f27c7092a8ddaa581d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <center>
        <div class=\"container\">
            <h3>Liste des Fiche Frais du mois de ";
        // line 6
        echo twig_escape_filter($this->env, ($context["mois"] ?? $this->getContext($context, "mois")), "html", null, true);
        echo "</h3><br/>
            <table class=\"table table-dark table-hover\">
                <tr>
                    <th>Nombre de Justificatifs</th>
                    <th>Montant valide</th>
                    <th>Etat</th>
                    <th>Date de la Notifications</th>
                </tr>
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ff"] ?? $this->getContext($context, "ff")));
        foreach ($context['_seq'] as $context["_key"] => $context["unFF"]) {
            // line 15
            echo "                    <tr>
                        <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFF"], "nbJustificatifs", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFF"], "montantValide", array()), "html", null, true);
            echo " €</td>
                        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFF"], "LeEtat", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["unFF"], "dateNotif", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFF'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </table><br/>
            <a href=\"/visiteur/fiche_frais/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVELLE<br/>FICHE FRAIS</a><br/>
        </div>
    </center>

";
        
        $__internal_46951651f3a91aa64493b29f994db3bb84c59c37e75872f27c7092a8ddaa581d->leave($__internal_46951651f3a91aa64493b29f994db3bb84c59c37e75872f27c7092a8ddaa581d_prof);

        
        $__internal_d90ee121b7c0add29c94b9913a3713f6e785866a32f9b8847122c45c6cca97aa->leave($__internal_d90ee121b7c0add29c94b9913a3713f6e785866a32f9b8847122c45c6cca97aa_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:FicheFrais:listMois.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 22,  83 => 19,  79 => 18,  75 => 17,  71 => 16,  68 => 15,  64 => 14,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
            <h3>Liste des Fiche Frais du mois de {{ mois }}</h3><br/>
            <table class=\"table table-dark table-hover\">
                <tr>
                    <th>Nombre de Justificatifs</th>
                    <th>Montant valide</th>
                    <th>Etat</th>
                    <th>Date de la Notifications</th>
                </tr>
                {% for unFF in ff %}
                    <tr>
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

{% endblock %}", "GSBVisiteurBundle:FicheFrais:listMois.html.twig", "C:\\wamp64\\www\\GSB-Visiteur\\src\\GSB\\VisiteurBundle/Resources/views/FicheFrais/listMois.html.twig");
    }
}
