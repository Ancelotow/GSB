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
        $__internal_94814fbd41578a3223f09e2a51f0ef750b36909c4191fb027c332acc18cd82be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94814fbd41578a3223f09e2a51f0ef750b36909c4191fb027c332acc18cd82be->enter($__internal_94814fbd41578a3223f09e2a51f0ef750b36909c4191fb027c332acc18cd82be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FraisForfait:register.html.twig"));

        $__internal_73b8b64eb4473af5185e6876bf760900f5d430d15fff6f2028cd127774ae218c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b8b64eb4473af5185e6876bf760900f5d430d15fff6f2028cd127774ae218c->enter($__internal_73b8b64eb4473af5185e6876bf760900f5d430d15fff6f2028cd127774ae218c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FraisForfait:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94814fbd41578a3223f09e2a51f0ef750b36909c4191fb027c332acc18cd82be->leave($__internal_94814fbd41578a3223f09e2a51f0ef750b36909c4191fb027c332acc18cd82be_prof);

        
        $__internal_73b8b64eb4473af5185e6876bf760900f5d430d15fff6f2028cd127774ae218c->leave($__internal_73b8b64eb4473af5185e6876bf760900f5d430d15fff6f2028cd127774ae218c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc7c25bb5fe57861c1fa91b219e185ac6e89e6c093dd17f4bdb304ad18d5bebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc7c25bb5fe57861c1fa91b219e185ac6e89e6c093dd17f4bdb304ad18d5bebb->enter($__internal_bc7c25bb5fe57861c1fa91b219e185ac6e89e6c093dd17f4bdb304ad18d5bebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c23399808050aa9e17ba81bf365c6026d4fb4bc9c7d858ea1d1770c07b89b841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23399808050aa9e17ba81bf365c6026d4fb4bc9c7d858ea1d1770c07b89b841->enter($__internal_c23399808050aa9e17ba81bf365c6026d4fb4bc9c7d858ea1d1770c07b89b841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <center>
        <h3>Frais forfait bien Enregistrée</h3><br/>
        <a href=\"/visiteur/frais_forfait/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVEAU<br/>FRAIS FORFAIT</a><br/>
    </center>
";
        
        $__internal_c23399808050aa9e17ba81bf365c6026d4fb4bc9c7d858ea1d1770c07b89b841->leave($__internal_c23399808050aa9e17ba81bf365c6026d4fb4bc9c7d858ea1d1770c07b89b841_prof);

        
        $__internal_bc7c25bb5fe57861c1fa91b219e185ac6e89e6c093dd17f4bdb304ad18d5bebb->leave($__internal_bc7c25bb5fe57861c1fa91b219e185ac6e89e6c093dd17f4bdb304ad18d5bebb_prof);

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
        <a href=\"/visiteur/frais_forfait/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVEAU<br/>FRAIS FORFAIT</a><br/>
    </center>
{% endblock %}
", "GSBVisiteurBundle:FraisForfait:register.html.twig", "C:\\wamp64\\www\\GSB-Visiteur\\src\\GSB\\VisiteurBundle/Resources/views/FraisForfait/register.html.twig");
    }
}
