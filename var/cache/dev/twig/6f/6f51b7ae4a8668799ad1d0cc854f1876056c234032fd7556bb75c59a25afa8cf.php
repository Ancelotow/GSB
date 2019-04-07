<?php

/* GSBVisiteurBundle:FraisForfait:register.html.twig */
class __TwigTemplate_bd7709d40f2056a30c15394477e00e2c31aae43f8848e3e95eefcaa36f15b7ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Visiteur:base.html.twig", "GSBVisiteurBundle:FraisForfait:register.html.twig", 1);
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
        $__internal_81115204cff69b68ca328193b04fdfd00dde1fa01e3088239389049d24ca39af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81115204cff69b68ca328193b04fdfd00dde1fa01e3088239389049d24ca39af->enter($__internal_81115204cff69b68ca328193b04fdfd00dde1fa01e3088239389049d24ca39af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FraisForfait:register.html.twig"));

        $__internal_e35fd049bc6a0e4f3afdedad835471c5f7bdafa241dc312e527a7ecdddb02009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35fd049bc6a0e4f3afdedad835471c5f7bdafa241dc312e527a7ecdddb02009->enter($__internal_e35fd049bc6a0e4f3afdedad835471c5f7bdafa241dc312e527a7ecdddb02009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FraisForfait:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81115204cff69b68ca328193b04fdfd00dde1fa01e3088239389049d24ca39af->leave($__internal_81115204cff69b68ca328193b04fdfd00dde1fa01e3088239389049d24ca39af_prof);

        
        $__internal_e35fd049bc6a0e4f3afdedad835471c5f7bdafa241dc312e527a7ecdddb02009->leave($__internal_e35fd049bc6a0e4f3afdedad835471c5f7bdafa241dc312e527a7ecdddb02009_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fac5823e236743890cac41ba16d445ea6b4f231dea0ae46191818620ace5fdde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fac5823e236743890cac41ba16d445ea6b4f231dea0ae46191818620ace5fdde->enter($__internal_fac5823e236743890cac41ba16d445ea6b4f231dea0ae46191818620ace5fdde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e6badbee6f69e3058b910731bdc28940a914fe88d3b99d53c799b203b01bb1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e6badbee6f69e3058b910731bdc28940a914fe88d3b99d53c799b203b01bb1e->enter($__internal_6e6badbee6f69e3058b910731bdc28940a914fe88d3b99d53c799b203b01bb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <center>
        <h3>Frais forfait bien Enregistrée</h3><br/>
        <a href=\"/visiteur/frais_forfais/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVEAU<br/>FRAIS FORFAIT</a><br/>
    </center>
";
        
        $__internal_6e6badbee6f69e3058b910731bdc28940a914fe88d3b99d53c799b203b01bb1e->leave($__internal_6e6badbee6f69e3058b910731bdc28940a914fe88d3b99d53c799b203b01bb1e_prof);

        
        $__internal_fac5823e236743890cac41ba16d445ea6b4f231dea0ae46191818620ace5fdde->leave($__internal_fac5823e236743890cac41ba16d445ea6b4f231dea0ae46191818620ace5fdde_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:FraisForfait:register.html.twig";
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
        <h3>Frais forfait bien Enregistrée</h3><br/>
        <a href=\"/visiteur/frais_forfais/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVEAU<br/>FRAIS FORFAIT</a><br/>
    </center>
{% endblock %}", "GSBVisiteurBundle:FraisForfait:register.html.twig", "C:\\wamp64\\www\\GSB\\src\\GSB\\VisiteurBundle/Resources/views/FraisForfait/register.html.twig");
    }
}
