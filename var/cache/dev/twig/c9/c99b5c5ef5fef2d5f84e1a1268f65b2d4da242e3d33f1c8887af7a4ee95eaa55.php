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
        $__internal_e832c22bf0c2f1d67773cbf6a30e6cc491551ea2f7d62100ed331d3ea003a9bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e832c22bf0c2f1d67773cbf6a30e6cc491551ea2f7d62100ed331d3ea003a9bb->enter($__internal_e832c22bf0c2f1d67773cbf6a30e6cc491551ea2f7d62100ed331d3ea003a9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Default:index.html.twig"));

        $__internal_c6256cf1375bc17b0724e1525894bd065dd32ede6fdc7158ea6b534be154f1f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6256cf1375bc17b0724e1525894bd065dd32ede6fdc7158ea6b534be154f1f6->enter($__internal_c6256cf1375bc17b0724e1525894bd065dd32ede6fdc7158ea6b534be154f1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e832c22bf0c2f1d67773cbf6a30e6cc491551ea2f7d62100ed331d3ea003a9bb->leave($__internal_e832c22bf0c2f1d67773cbf6a30e6cc491551ea2f7d62100ed331d3ea003a9bb_prof);

        
        $__internal_c6256cf1375bc17b0724e1525894bd065dd32ede6fdc7158ea6b534be154f1f6->leave($__internal_c6256cf1375bc17b0724e1525894bd065dd32ede6fdc7158ea6b534be154f1f6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_86dad4519e6a393c7158c837a16128659af688695c3dd3a956283d6cee558999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86dad4519e6a393c7158c837a16128659af688695c3dd3a956283d6cee558999->enter($__internal_86dad4519e6a393c7158c837a16128659af688695c3dd3a956283d6cee558999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a456efcea70f482eae7da86cbafbc407b5d186458862e0b4443ba3abe7a9de0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a456efcea70f482eae7da86cbafbc407b5d186458862e0b4443ba3abe7a9de0d->enter($__internal_a456efcea70f482eae7da86cbafbc407b5d186458862e0b4443ba3abe7a9de0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a456efcea70f482eae7da86cbafbc407b5d186458862e0b4443ba3abe7a9de0d->leave($__internal_a456efcea70f482eae7da86cbafbc407b5d186458862e0b4443ba3abe7a9de0d_prof);

        
        $__internal_86dad4519e6a393c7158c837a16128659af688695c3dd3a956283d6cee558999->leave($__internal_86dad4519e6a393c7158c837a16128659af688695c3dd3a956283d6cee558999_prof);

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
{% endblock %}", "GSBVisiteurBundle:Default:index.html.twig", "C:\\wamp64\\www\\GSB-Visiteur\\src\\GSB\\VisiteurBundle/Resources/views/Default/index.html.twig");
    }
}
