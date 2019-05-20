<?php

/* GSBVisiteurBundle:LigneFraisHorsForfait:register.html.twig */
class __TwigTemplate_0f45992588d6ee931f8b887f70df851b2ee6554eae960845750812c847cb1e4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Visiteur:base.html.twig", "GSBVisiteurBundle:LigneFraisHorsForfait:register.html.twig", 1);
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
        $__internal_04935eab8a766853de143c6481a1c9bf12702bbe4351ca832d53cf7bca4b1513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04935eab8a766853de143c6481a1c9bf12702bbe4351ca832d53cf7bca4b1513->enter($__internal_04935eab8a766853de143c6481a1c9bf12702bbe4351ca832d53cf7bca4b1513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:LigneFraisHorsForfait:register.html.twig"));

        $__internal_0390de056e3fe37049410baff3e4c750ab4ea5b81e86b71580a89c61e2790224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0390de056e3fe37049410baff3e4c750ab4ea5b81e86b71580a89c61e2790224->enter($__internal_0390de056e3fe37049410baff3e4c750ab4ea5b81e86b71580a89c61e2790224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:LigneFraisHorsForfait:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04935eab8a766853de143c6481a1c9bf12702bbe4351ca832d53cf7bca4b1513->leave($__internal_04935eab8a766853de143c6481a1c9bf12702bbe4351ca832d53cf7bca4b1513_prof);

        
        $__internal_0390de056e3fe37049410baff3e4c750ab4ea5b81e86b71580a89c61e2790224->leave($__internal_0390de056e3fe37049410baff3e4c750ab4ea5b81e86b71580a89c61e2790224_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_36c6b1da17e34b856386811a7c4d492f54d3e3c0e23c005afeb9f829964280e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c6b1da17e34b856386811a7c4d492f54d3e3c0e23c005afeb9f829964280e0->enter($__internal_36c6b1da17e34b856386811a7c4d492f54d3e3c0e23c005afeb9f829964280e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e7b0302b3107f698f29ad67d1474079d3f868aa2b3c472536b8b262493446686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b0302b3107f698f29ad67d1474079d3f868aa2b3c472536b8b262493446686->enter($__internal_e7b0302b3107f698f29ad67d1474079d3f868aa2b3c472536b8b262493446686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <center>
        <h3>Ligne frais hors forfait bien Enregistrée</h3><br/>
        <a href=\"/visiteur/ligne_frais_hors_forfait/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVELLE<br/>LIGEN FRAIS <br/>HORS FORFAIT</a><br/>
    </center>
";
        
        $__internal_e7b0302b3107f698f29ad67d1474079d3f868aa2b3c472536b8b262493446686->leave($__internal_e7b0302b3107f698f29ad67d1474079d3f868aa2b3c472536b8b262493446686_prof);

        
        $__internal_36c6b1da17e34b856386811a7c4d492f54d3e3c0e23c005afeb9f829964280e0->leave($__internal_36c6b1da17e34b856386811a7c4d492f54d3e3c0e23c005afeb9f829964280e0_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:LigneFraisHorsForfait:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
        <h3>Ligne frais hors forfait bien Enregistrée</h3><br/>
        <a href=\"/visiteur/ligne_frais_hors_forfait/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVELLE<br/>LIGEN FRAIS <br/>HORS FORFAIT</a><br/>
    </center>
{% endblock %}", "GSBVisiteurBundle:LigneFraisHorsForfait:register.html.twig", "C:\\wamp64\\www\\GSB-Visiteur\\src\\GSB\\VisiteurBundle/Resources/views/LigneFraisHorsForfait/register.html.twig");
    }
}
