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
        $__internal_8ebe528832c675cf8e6276c9b0c223bb54178b4836a1d911b9b329e7d7430c5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ebe528832c675cf8e6276c9b0c223bb54178b4836a1d911b9b329e7d7430c5e->enter($__internal_8ebe528832c675cf8e6276c9b0c223bb54178b4836a1d911b9b329e7d7430c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FicheFrais:register.html.twig"));

        $__internal_8d7fdecc22972ec8134ce77319b0022b601fb11c6d9a386dfb1ad6f538879542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7fdecc22972ec8134ce77319b0022b601fb11c6d9a386dfb1ad6f538879542->enter($__internal_8d7fdecc22972ec8134ce77319b0022b601fb11c6d9a386dfb1ad6f538879542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FicheFrais:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ebe528832c675cf8e6276c9b0c223bb54178b4836a1d911b9b329e7d7430c5e->leave($__internal_8ebe528832c675cf8e6276c9b0c223bb54178b4836a1d911b9b329e7d7430c5e_prof);

        
        $__internal_8d7fdecc22972ec8134ce77319b0022b601fb11c6d9a386dfb1ad6f538879542->leave($__internal_8d7fdecc22972ec8134ce77319b0022b601fb11c6d9a386dfb1ad6f538879542_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_61ade16085bec6f5e6aad26affca91a19ab1bded195ed05f5b004753415b326e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61ade16085bec6f5e6aad26affca91a19ab1bded195ed05f5b004753415b326e->enter($__internal_61ade16085bec6f5e6aad26affca91a19ab1bded195ed05f5b004753415b326e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c37f4bb84a5569ae61ce5abc8c332c9dd866ae7deb3cdba8e38d18c4ef135040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c37f4bb84a5569ae61ce5abc8c332c9dd866ae7deb3cdba8e38d18c4ef135040->enter($__internal_c37f4bb84a5569ae61ce5abc8c332c9dd866ae7deb3cdba8e38d18c4ef135040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <center>
            <h3>Fiche frais bien Enregistrée</h3><br/>
            <a href=\"/visiteur/fiche_frais/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVELLE<br/>FICHE FRAIS</a><br/>
    </center>
";
        
        $__internal_c37f4bb84a5569ae61ce5abc8c332c9dd866ae7deb3cdba8e38d18c4ef135040->leave($__internal_c37f4bb84a5569ae61ce5abc8c332c9dd866ae7deb3cdba8e38d18c4ef135040_prof);

        
        $__internal_61ade16085bec6f5e6aad26affca91a19ab1bded195ed05f5b004753415b326e->leave($__internal_61ade16085bec6f5e6aad26affca91a19ab1bded195ed05f5b004753415b326e_prof);

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
{% endblock %}", "GSBVisiteurBundle:FicheFrais:register.html.twig", "C:\\wamp64\\www\\GSB-Visiteur\\src\\GSB\\VisiteurBundle/Resources/views/FicheFrais/register.html.twig");
    }
}
