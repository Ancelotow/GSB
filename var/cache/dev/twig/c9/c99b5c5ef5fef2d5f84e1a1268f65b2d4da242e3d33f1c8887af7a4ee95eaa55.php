<?php

/* GSBVisiteurBundle:Default:index.html.twig */
class __TwigTemplate_47b8cba12382cbde4c28b6e52383d83cb6882474a47f493f230747b748c6b628 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Visiteur:base.html.twig", "GSBVisiteurBundle:Default:index.html.twig", 1);
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
        $__internal_9a256049e59abb34269db6d6074f90a1b94299ba0df8ef9316ce0a7fb27f4b72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a256049e59abb34269db6d6074f90a1b94299ba0df8ef9316ce0a7fb27f4b72->enter($__internal_9a256049e59abb34269db6d6074f90a1b94299ba0df8ef9316ce0a7fb27f4b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Default:index.html.twig"));

        $__internal_5764e38749c06cde62e7072259bcd672d43112df991c3ade9e32d9b2eceb9464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5764e38749c06cde62e7072259bcd672d43112df991c3ade9e32d9b2eceb9464->enter($__internal_5764e38749c06cde62e7072259bcd672d43112df991c3ade9e32d9b2eceb9464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a256049e59abb34269db6d6074f90a1b94299ba0df8ef9316ce0a7fb27f4b72->leave($__internal_9a256049e59abb34269db6d6074f90a1b94299ba0df8ef9316ce0a7fb27f4b72_prof);

        
        $__internal_5764e38749c06cde62e7072259bcd672d43112df991c3ade9e32d9b2eceb9464->leave($__internal_5764e38749c06cde62e7072259bcd672d43112df991c3ade9e32d9b2eceb9464_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_301e0d8634054784ce239f6b5686d4898b299ef50886f4b2c9903c945fe95a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_301e0d8634054784ce239f6b5686d4898b299ef50886f4b2c9903c945fe95a4b->enter($__internal_301e0d8634054784ce239f6b5686d4898b299ef50886f4b2c9903c945fe95a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3419de853f52e86a202dc6fa3aad9e4e4bd2461ebb0b111eba717fdbba1c8e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3419de853f52e86a202dc6fa3aad9e4e4bd2461ebb0b111eba717fdbba1c8e81->enter($__internal_3419de853f52e86a202dc6fa3aad9e4e4bd2461ebb0b111eba717fdbba1c8e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <center>
        <h3>Bienvenue sur notre espace Visiteur ";
        // line 5
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "nomVisiteur"), "method")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "prenomVisiteur"), "method"), "html", null, true);
        echo "</h3>
    </center>
";
        
        $__internal_3419de853f52e86a202dc6fa3aad9e4e4bd2461ebb0b111eba717fdbba1c8e81->leave($__internal_3419de853f52e86a202dc6fa3aad9e4e4bd2461ebb0b111eba717fdbba1c8e81_prof);

        
        $__internal_301e0d8634054784ce239f6b5686d4898b299ef50886f4b2c9903c945fe95a4b->leave($__internal_301e0d8634054784ce239f6b5686d4898b299ef50886f4b2c9903c945fe95a4b_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends':Visiteur:base.html.twig' %}

{% block body %}
    <center>
        <h3>Bienvenue sur notre espace Visiteur {{ app.session.get('nomVisiteur')|upper }} {{ app.session.get('prenomVisiteur') }}</h3>
    </center>
{% endblock %}", "GSBVisiteurBundle:Default:index.html.twig", "C:\\wamp64\\www\\GSB\\src\\GSB\\VisiteurBundle/Resources/views/Default/index.html.twig");
    }
}
