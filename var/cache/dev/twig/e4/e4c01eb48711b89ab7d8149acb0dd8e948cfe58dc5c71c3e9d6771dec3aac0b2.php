<?php

/* GSBAccueilBundle:Default:index.html.twig */
class __TwigTemplate_5f41e2885c682f38c1dff35c5fbdac5be82cc1981eaacb221abc49feaf972407 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GSBAccueilBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_291f2644fd16df97af25323b019d0225329d2150a1c187acaaef485014b73f01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_291f2644fd16df97af25323b019d0225329d2150a1c187acaaef485014b73f01->enter($__internal_291f2644fd16df97af25323b019d0225329d2150a1c187acaaef485014b73f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBAccueilBundle:Default:index.html.twig"));

        $__internal_c08159573fc6ba18d4f603fb378180b9809b5120a35b6fdba9522ebd65d3d395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08159573fc6ba18d4f603fb378180b9809b5120a35b6fdba9522ebd65d3d395->enter($__internal_c08159573fc6ba18d4f603fb378180b9809b5120a35b6fdba9522ebd65d3d395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBAccueilBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_291f2644fd16df97af25323b019d0225329d2150a1c187acaaef485014b73f01->leave($__internal_291f2644fd16df97af25323b019d0225329d2150a1c187acaaef485014b73f01_prof);

        
        $__internal_c08159573fc6ba18d4f603fb378180b9809b5120a35b6fdba9522ebd65d3d395->leave($__internal_c08159573fc6ba18d4f603fb378180b9809b5120a35b6fdba9522ebd65d3d395_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e841df6c666035ee7d29ca559e4e6f0b54dd3c22552734622f86275722b8d71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e841df6c666035ee7d29ca559e4e6f0b54dd3c22552734622f86275722b8d71->enter($__internal_4e841df6c666035ee7d29ca559e4e6f0b54dd3c22552734622f86275722b8d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_68f0c898a4c42cc9a338fdbeb862b124425e4bfa0198ed9e8da84970672a6260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f0c898a4c42cc9a338fdbeb862b124425e4bfa0198ed9e8da84970672a6260->enter($__internal_68f0c898a4c42cc9a338fdbeb862b124425e4bfa0198ed9e8da84970672a6260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <center>
        <a href=\"/connexion/visiteur\" class=\"btn btn-info\">VISITEUR</a><br/><br/>
        <a href=\"/connexion/comptable\" class=\"btn btn-primary\">COMPTABLE</a><br/>
        <hr><br/>
        <a href=\"/inscription/visiteur/\" class=\"btn btn-warning\">INSCRIPTION VISITEUR</a><br/><br/>
        <a href=\"#\" class=\"btn btn-dark\">INSCRIPTION COMPTABLE</a>
    </center>
";
        
        $__internal_68f0c898a4c42cc9a338fdbeb862b124425e4bfa0198ed9e8da84970672a6260->leave($__internal_68f0c898a4c42cc9a338fdbeb862b124425e4bfa0198ed9e8da84970672a6260_prof);

        
        $__internal_4e841df6c666035ee7d29ca559e4e6f0b54dd3c22552734622f86275722b8d71->leave($__internal_4e841df6c666035ee7d29ca559e4e6f0b54dd3c22552734622f86275722b8d71_prof);

    }

    public function getTemplateName()
    {
        return "GSBAccueilBundle:Default:index.html.twig";
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
        return new Twig_Source("{% extends\"::base.html.twig\" %}

{% block body %}
    <center>
        <a href=\"/connexion/visiteur\" class=\"btn btn-info\">VISITEUR</a><br/><br/>
        <a href=\"/connexion/comptable\" class=\"btn btn-primary\">COMPTABLE</a><br/>
        <hr><br/>
        <a href=\"/inscription/visiteur/\" class=\"btn btn-warning\">INSCRIPTION VISITEUR</a><br/><br/>
        <a href=\"#\" class=\"btn btn-dark\">INSCRIPTION COMPTABLE</a>
    </center>
{% endblock %}", "GSBAccueilBundle:Default:index.html.twig", "C:\\wamp64\\www\\GSB-Visiteur\\src\\GSB\\AccueilBundle/Resources/views/Default/index.html.twig");
    }
}
