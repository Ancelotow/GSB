<?php

/* GSBVisiteurBundle:FicheFrais:register.html.twig */
class __TwigTemplate_5b1e29ec742f95c7db4c5f9ada9da352f5d225add6716460c753228454fc6b66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Visiteur:base.html.twig", "GSBVisiteurBundle:FicheFrais:register.html.twig", 1);
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
        $__internal_f5c873bf999c57c093451a82a0a1d3b3358fb2c7d97fd3a437372c7d4f943cd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c873bf999c57c093451a82a0a1d3b3358fb2c7d97fd3a437372c7d4f943cd4->enter($__internal_f5c873bf999c57c093451a82a0a1d3b3358fb2c7d97fd3a437372c7d4f943cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FicheFrais:register.html.twig"));

        $__internal_cd3cac5678fb93cba4a0dc6c257a21d268e73348283a5a854bfda76d8394dfb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3cac5678fb93cba4a0dc6c257a21d268e73348283a5a854bfda76d8394dfb5->enter($__internal_cd3cac5678fb93cba4a0dc6c257a21d268e73348283a5a854bfda76d8394dfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FicheFrais:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5c873bf999c57c093451a82a0a1d3b3358fb2c7d97fd3a437372c7d4f943cd4->leave($__internal_f5c873bf999c57c093451a82a0a1d3b3358fb2c7d97fd3a437372c7d4f943cd4_prof);

        
        $__internal_cd3cac5678fb93cba4a0dc6c257a21d268e73348283a5a854bfda76d8394dfb5->leave($__internal_cd3cac5678fb93cba4a0dc6c257a21d268e73348283a5a854bfda76d8394dfb5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c09987cc158e268d8bd4697049068a7aa5fc0ad57bc1d95ef9da991358c05681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c09987cc158e268d8bd4697049068a7aa5fc0ad57bc1d95ef9da991358c05681->enter($__internal_c09987cc158e268d8bd4697049068a7aa5fc0ad57bc1d95ef9da991358c05681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aec7fa0e7de272bfad0dc463d8d5862ddba790d731afeb427fb6555253b0f325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aec7fa0e7de272bfad0dc463d8d5862ddba790d731afeb427fb6555253b0f325->enter($__internal_aec7fa0e7de272bfad0dc463d8d5862ddba790d731afeb427fb6555253b0f325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <center>
            <h3>Fiche frais bien Enregistrée</h3><br/>
            <a href=\"/visiteur/fiche_frais/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVELLE<br/>FICHE FRAIS</a><br/>
    </center>
";
        
        $__internal_aec7fa0e7de272bfad0dc463d8d5862ddba790d731afeb427fb6555253b0f325->leave($__internal_aec7fa0e7de272bfad0dc463d8d5862ddba790d731afeb427fb6555253b0f325_prof);

        
        $__internal_c09987cc158e268d8bd4697049068a7aa5fc0ad57bc1d95ef9da991358c05681->leave($__internal_c09987cc158e268d8bd4697049068a7aa5fc0ad57bc1d95ef9da991358c05681_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:FicheFrais:register.html.twig";
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
            <h3>Fiche frais bien Enregistrée</h3><br/>
            <a href=\"/visiteur/fiche_frais/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVELLE<br/>FICHE FRAIS</a><br/>
    </center>
{% endblock %}", "GSBVisiteurBundle:FicheFrais:register.html.twig", "C:\\wamp64\\www\\GSB\\src\\GSB\\VisiteurBundle/Resources/views/FicheFrais/register.html.twig");
    }
}
