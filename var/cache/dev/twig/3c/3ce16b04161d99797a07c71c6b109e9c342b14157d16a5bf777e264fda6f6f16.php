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
        $__internal_e517ef98ba8cc5e10df29c538d6c9aa558cd9ec985812e67489f1b3627104567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e517ef98ba8cc5e10df29c538d6c9aa558cd9ec985812e67489f1b3627104567->enter($__internal_e517ef98ba8cc5e10df29c538d6c9aa558cd9ec985812e67489f1b3627104567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:LigneFraisForfait:register.html.twig"));

        $__internal_69c3870f7565b7c0db8c682678392ef5fb9a42ae0f47e32517b8b09372763ec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c3870f7565b7c0db8c682678392ef5fb9a42ae0f47e32517b8b09372763ec2->enter($__internal_69c3870f7565b7c0db8c682678392ef5fb9a42ae0f47e32517b8b09372763ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:LigneFraisForfait:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e517ef98ba8cc5e10df29c538d6c9aa558cd9ec985812e67489f1b3627104567->leave($__internal_e517ef98ba8cc5e10df29c538d6c9aa558cd9ec985812e67489f1b3627104567_prof);

        
        $__internal_69c3870f7565b7c0db8c682678392ef5fb9a42ae0f47e32517b8b09372763ec2->leave($__internal_69c3870f7565b7c0db8c682678392ef5fb9a42ae0f47e32517b8b09372763ec2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_83e8396dcce8ee568b60de0a9364a015c2da293b82454735358509adfc825ed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e8396dcce8ee568b60de0a9364a015c2da293b82454735358509adfc825ed4->enter($__internal_83e8396dcce8ee568b60de0a9364a015c2da293b82454735358509adfc825ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_42cdb310551ee668196cbe8ecc8cd1ae6bf5c03003446d39adbf5ce08fc50ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42cdb310551ee668196cbe8ecc8cd1ae6bf5c03003446d39adbf5ce08fc50ffb->enter($__internal_42cdb310551ee668196cbe8ecc8cd1ae6bf5c03003446d39adbf5ce08fc50ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <center>
        <h3>Ligne frais hors forfait bien Enregistrée</h3><br/>
        <a href=\"/visiteur/ligne_frais_forfait/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVELLE<br/>LIGNE FRAIS<br/>FORAFIT</a><br/>
    </center>
";
        
        $__internal_42cdb310551ee668196cbe8ecc8cd1ae6bf5c03003446d39adbf5ce08fc50ffb->leave($__internal_42cdb310551ee668196cbe8ecc8cd1ae6bf5c03003446d39adbf5ce08fc50ffb_prof);

        
        $__internal_83e8396dcce8ee568b60de0a9364a015c2da293b82454735358509adfc825ed4->leave($__internal_83e8396dcce8ee568b60de0a9364a015c2da293b82454735358509adfc825ed4_prof);

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
{% endblock %}", "GSBVisiteurBundle:LigneFraisForfait:register.html.twig", "C:\\wamp64\\www\\GSB\\src\\GSB\\VisiteurBundle/Resources/views/LigneFraisForfait/register.html.twig");
    }
}
