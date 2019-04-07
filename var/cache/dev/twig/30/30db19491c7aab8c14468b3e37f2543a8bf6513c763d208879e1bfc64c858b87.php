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
        $__internal_c321524ed106a19ef8057e8aa6f169f837c7314d93219b79fba0c7a70e24716f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c321524ed106a19ef8057e8aa6f169f837c7314d93219b79fba0c7a70e24716f->enter($__internal_c321524ed106a19ef8057e8aa6f169f837c7314d93219b79fba0c7a70e24716f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FicheFrais:listMois.html.twig"));

        $__internal_3fdd955e20c6ee04d4a4af25e17da1ea03280021e743e0c24425e0ae54002de0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fdd955e20c6ee04d4a4af25e17da1ea03280021e743e0c24425e0ae54002de0->enter($__internal_3fdd955e20c6ee04d4a4af25e17da1ea03280021e743e0c24425e0ae54002de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FicheFrais:listMois.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c321524ed106a19ef8057e8aa6f169f837c7314d93219b79fba0c7a70e24716f->leave($__internal_c321524ed106a19ef8057e8aa6f169f837c7314d93219b79fba0c7a70e24716f_prof);

        
        $__internal_3fdd955e20c6ee04d4a4af25e17da1ea03280021e743e0c24425e0ae54002de0->leave($__internal_3fdd955e20c6ee04d4a4af25e17da1ea03280021e743e0c24425e0ae54002de0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_41ae03f6f47ba258621d8560346842d646d438388e3095b4baa331f495b4b67d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41ae03f6f47ba258621d8560346842d646d438388e3095b4baa331f495b4b67d->enter($__internal_41ae03f6f47ba258621d8560346842d646d438388e3095b4baa331f495b4b67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_65c2a05553d24dda698882d2f412866d4a084476418334c21958e6f9e080c175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c2a05553d24dda698882d2f412866d4a084476418334c21958e6f9e080c175->enter($__internal_65c2a05553d24dda698882d2f412866d4a084476418334c21958e6f9e080c175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <th>Modifier</th>
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFF"], "nbJustificatifs", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFF"], "montantValide", array()), "html", null, true);
            echo " €</td>
                        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFF"], "LeEtat", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["unFF"], "dateNotif", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td><a href=\"/visiteur/fiche_frais/modifier/";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFF"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">MODIFIER</a></td>
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
        
        $__internal_65c2a05553d24dda698882d2f412866d4a084476418334c21958e6f9e080c175->leave($__internal_65c2a05553d24dda698882d2f412866d4a084476418334c21958e6f9e080c175_prof);

        
        $__internal_41ae03f6f47ba258621d8560346842d646d438388e3095b4baa331f495b4b67d->leave($__internal_41ae03f6f47ba258621d8560346842d646d438388e3095b4baa331f495b4b67d_prof);

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
        return array (  97 => 24,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  69 => 16,  65 => 15,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
                    <th>Modifier</th>
                </tr>
                {% for unFF in ff %}
                    <tr>
                        <td>{{ unFF.nbJustificatifs }}</td>
                        <td>{{ unFF.montantValide }} €</td>
                        <td>{{ unFF.LeEtat }}</td>
                        <td>{{ unFF.dateNotif|date('d/m/Y') }}</td>
                        <td><a href=\"/visiteur/fiche_frais/modifier/{{ unFF.id }}\" class=\"btn btn-outline-primary\">MODIFIER</a></td>
                    </tr>
                {% endfor %}
            </table><br/>
            <a href=\"/visiteur/fiche_frais/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVELLE<br/>FICHE FRAIS</a><br/>
        </div>
    </center>

{% endblock %}", "GSBVisiteurBundle:FicheFrais:listMois.html.twig", "C:\\wamp64\\www\\GSB\\src\\GSB\\VisiteurBundle/Resources/views/FicheFrais/listMois.html.twig");
    }
}
