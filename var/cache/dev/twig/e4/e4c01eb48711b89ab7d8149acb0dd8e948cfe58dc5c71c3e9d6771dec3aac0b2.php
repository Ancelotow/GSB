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
        $__internal_9267d6396158c24f9be78207d08666bec8caba33b86f6bd3b2018124915d9715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9267d6396158c24f9be78207d08666bec8caba33b86f6bd3b2018124915d9715->enter($__internal_9267d6396158c24f9be78207d08666bec8caba33b86f6bd3b2018124915d9715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBAccueilBundle:Default:index.html.twig"));

        $__internal_7fac7738fa19d7fc17f09445532610ed4b8d5c8e8aefc84b211cdf6b1a4c35e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fac7738fa19d7fc17f09445532610ed4b8d5c8e8aefc84b211cdf6b1a4c35e6->enter($__internal_7fac7738fa19d7fc17f09445532610ed4b8d5c8e8aefc84b211cdf6b1a4c35e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBAccueilBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9267d6396158c24f9be78207d08666bec8caba33b86f6bd3b2018124915d9715->leave($__internal_9267d6396158c24f9be78207d08666bec8caba33b86f6bd3b2018124915d9715_prof);

        
        $__internal_7fac7738fa19d7fc17f09445532610ed4b8d5c8e8aefc84b211cdf6b1a4c35e6->leave($__internal_7fac7738fa19d7fc17f09445532610ed4b8d5c8e8aefc84b211cdf6b1a4c35e6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_57f07a4fed0f61955886fe97820c7147c03ec69a0396dc944d85ef67b40cbf03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f07a4fed0f61955886fe97820c7147c03ec69a0396dc944d85ef67b40cbf03->enter($__internal_57f07a4fed0f61955886fe97820c7147c03ec69a0396dc944d85ef67b40cbf03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6142bcd65de3d6ff6243fcdda33459abe0230d1fb2a59327595cf8b1c7a3dd62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6142bcd65de3d6ff6243fcdda33459abe0230d1fb2a59327595cf8b1c7a3dd62->enter($__internal_6142bcd65de3d6ff6243fcdda33459abe0230d1fb2a59327595cf8b1c7a3dd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <center>
        <a href=\"/connexion/visiteur\" class=\"btn btn-info\">VISITEUR</a><br/><br/>
        <a href=\"/connexion/comptable\" class=\"btn btn-primary\">COMPTABLE</a><br/>
        <hr><br/>
        <a href=\"/inscription/visiteur/\" class=\"btn btn-warning\">INSCRIPTION VISITEUR</a><br/><br/>
        <a href=\"#\" class=\"btn btn-dark\">INSCRIPTION COMPTABLE</a>
    </center>
";
        
        $__internal_6142bcd65de3d6ff6243fcdda33459abe0230d1fb2a59327595cf8b1c7a3dd62->leave($__internal_6142bcd65de3d6ff6243fcdda33459abe0230d1fb2a59327595cf8b1c7a3dd62_prof);

        
        $__internal_57f07a4fed0f61955886fe97820c7147c03ec69a0396dc944d85ef67b40cbf03->leave($__internal_57f07a4fed0f61955886fe97820c7147c03ec69a0396dc944d85ef67b40cbf03_prof);

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
{% endblock %}", "GSBAccueilBundle:Default:index.html.twig", "C:\\wamp64\\www\\GSB\\src\\GSB\\AccueilBundle/Resources/views/Default/index.html.twig");
    }
}
