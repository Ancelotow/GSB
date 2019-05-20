<?php

/* GSBVisiteurBundle:LigneFraisForfait:register.html.twig */
class __TwigTemplate_de3191904c533c6e191780db7477b81ddc58ee40602c04efbe7742e6090b2ce0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Visiteur:base.html.twig", "GSBVisiteurBundle:LigneFraisForfait:register.html.twig", 1);
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
        $__internal_82d6126e3beded28a4a0bd5c65dab2719e991e8554d078a5886fadefe294400a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d6126e3beded28a4a0bd5c65dab2719e991e8554d078a5886fadefe294400a->enter($__internal_82d6126e3beded28a4a0bd5c65dab2719e991e8554d078a5886fadefe294400a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:LigneFraisForfait:register.html.twig"));

        $__internal_82ad765433b4ff2caafa62b3d3cb7a59f09cc3dcb484f840a9ed60161ab957b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ad765433b4ff2caafa62b3d3cb7a59f09cc3dcb484f840a9ed60161ab957b1->enter($__internal_82ad765433b4ff2caafa62b3d3cb7a59f09cc3dcb484f840a9ed60161ab957b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:LigneFraisForfait:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82d6126e3beded28a4a0bd5c65dab2719e991e8554d078a5886fadefe294400a->leave($__internal_82d6126e3beded28a4a0bd5c65dab2719e991e8554d078a5886fadefe294400a_prof);

        
        $__internal_82ad765433b4ff2caafa62b3d3cb7a59f09cc3dcb484f840a9ed60161ab957b1->leave($__internal_82ad765433b4ff2caafa62b3d3cb7a59f09cc3dcb484f840a9ed60161ab957b1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff41c7fb4203fbce86496e593638e12f009770ef177020f994713dfff1394d4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff41c7fb4203fbce86496e593638e12f009770ef177020f994713dfff1394d4e->enter($__internal_ff41c7fb4203fbce86496e593638e12f009770ef177020f994713dfff1394d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_880140c3b759882a1583f735737bb9428e5272a5313e29e4cb38c238b1b1dd93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_880140c3b759882a1583f735737bb9428e5272a5313e29e4cb38c238b1b1dd93->enter($__internal_880140c3b759882a1583f735737bb9428e5272a5313e29e4cb38c238b1b1dd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <center>
        <h3>Ligne frais hors forfait bien Enregistrée</h3><br/>
        <a href=\"/visiteur/ligne_frais_forfait/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVELLE<br/>LIGNE FRAIS<br/>FORAFIT</a><br/>
    </center>
";
        
        $__internal_880140c3b759882a1583f735737bb9428e5272a5313e29e4cb38c238b1b1dd93->leave($__internal_880140c3b759882a1583f735737bb9428e5272a5313e29e4cb38c238b1b1dd93_prof);

        
        $__internal_ff41c7fb4203fbce86496e593638e12f009770ef177020f994713dfff1394d4e->leave($__internal_ff41c7fb4203fbce86496e593638e12f009770ef177020f994713dfff1394d4e_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:LigneFraisForfait:register.html.twig";
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
        <a href=\"/visiteur/ligne_frais_forfait/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVELLE<br/>LIGNE FRAIS<br/>FORAFIT</a><br/>
    </center>
{% endblock %}", "GSBVisiteurBundle:LigneFraisForfait:register.html.twig", "C:\\wamp64\\www\\GSB-Visiteur\\src\\GSB\\VisiteurBundle/Resources/views/LigneFraisForfait/register.html.twig");
    }
}
