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
        $__internal_3ffdeba0963885b7f4b09a0e847a461aacbe5fccb7126ab9905ef10015056c15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ffdeba0963885b7f4b09a0e847a461aacbe5fccb7126ab9905ef10015056c15->enter($__internal_3ffdeba0963885b7f4b09a0e847a461aacbe5fccb7126ab9905ef10015056c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:LigneFraisHorsForfait:register.html.twig"));

        $__internal_3cdbb08e6761831e4ab11b0daf91a94b586265ae6d064e7b27d6c43f69fd210f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cdbb08e6761831e4ab11b0daf91a94b586265ae6d064e7b27d6c43f69fd210f->enter($__internal_3cdbb08e6761831e4ab11b0daf91a94b586265ae6d064e7b27d6c43f69fd210f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:LigneFraisHorsForfait:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ffdeba0963885b7f4b09a0e847a461aacbe5fccb7126ab9905ef10015056c15->leave($__internal_3ffdeba0963885b7f4b09a0e847a461aacbe5fccb7126ab9905ef10015056c15_prof);

        
        $__internal_3cdbb08e6761831e4ab11b0daf91a94b586265ae6d064e7b27d6c43f69fd210f->leave($__internal_3cdbb08e6761831e4ab11b0daf91a94b586265ae6d064e7b27d6c43f69fd210f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_24b1cac0864a3f89fdaf375c0a56086bc38a5626387a7fb6d74420983560a548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24b1cac0864a3f89fdaf375c0a56086bc38a5626387a7fb6d74420983560a548->enter($__internal_24b1cac0864a3f89fdaf375c0a56086bc38a5626387a7fb6d74420983560a548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1fee3ed7cf9d9d1b9723e08a51fab2fab46d6e09d75dc64b2fdae3b73c23a7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fee3ed7cf9d9d1b9723e08a51fab2fab46d6e09d75dc64b2fdae3b73c23a7e2->enter($__internal_1fee3ed7cf9d9d1b9723e08a51fab2fab46d6e09d75dc64b2fdae3b73c23a7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <center>
        <h3>Ligne frais hors forfait bien Enregistrée</h3><br/>
        <a href=\"/visiteur/ligne_frais_hors_forfait/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVELLE<br/>LIGEN FRAIS <br/>HORS FORFAIT</a><br/>
    </center>
";
        
        $__internal_1fee3ed7cf9d9d1b9723e08a51fab2fab46d6e09d75dc64b2fdae3b73c23a7e2->leave($__internal_1fee3ed7cf9d9d1b9723e08a51fab2fab46d6e09d75dc64b2fdae3b73c23a7e2_prof);

        
        $__internal_24b1cac0864a3f89fdaf375c0a56086bc38a5626387a7fb6d74420983560a548->leave($__internal_24b1cac0864a3f89fdaf375c0a56086bc38a5626387a7fb6d74420983560a548_prof);

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
{% endblock %}", "GSBVisiteurBundle:LigneFraisHorsForfait:register.html.twig", "C:\\wamp64\\www\\GSB\\src\\GSB\\VisiteurBundle/Resources/views/LigneFraisHorsForfait/register.html.twig");
    }
}
