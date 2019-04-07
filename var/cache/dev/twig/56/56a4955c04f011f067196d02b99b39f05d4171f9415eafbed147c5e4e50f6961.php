<?php

/* GSBVisiteurBundle:FicheFrais:selectMois.html.twig */
class __TwigTemplate_c22482a6ded2dd62d005072a927ed9b9c2c0b39da8b3ae51046a5a3b95504e6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Visiteur:base.html.twig", "GSBVisiteurBundle:FicheFrais:selectMois.html.twig", 1);
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
        $__internal_9b9e1b2ba13cafabd92e7db2cb27b275855291741a725b6ec78a0ed602683f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b9e1b2ba13cafabd92e7db2cb27b275855291741a725b6ec78a0ed602683f3e->enter($__internal_9b9e1b2ba13cafabd92e7db2cb27b275855291741a725b6ec78a0ed602683f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FicheFrais:selectMois.html.twig"));

        $__internal_6e2c5ffa5ac68895462d4c69e66cf98bf2cbb947dd7ae5a4577dce0c53553604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2c5ffa5ac68895462d4c69e66cf98bf2cbb947dd7ae5a4577dce0c53553604->enter($__internal_6e2c5ffa5ac68895462d4c69e66cf98bf2cbb947dd7ae5a4577dce0c53553604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FicheFrais:selectMois.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b9e1b2ba13cafabd92e7db2cb27b275855291741a725b6ec78a0ed602683f3e->leave($__internal_9b9e1b2ba13cafabd92e7db2cb27b275855291741a725b6ec78a0ed602683f3e_prof);

        
        $__internal_6e2c5ffa5ac68895462d4c69e66cf98bf2cbb947dd7ae5a4577dce0c53553604->leave($__internal_6e2c5ffa5ac68895462d4c69e66cf98bf2cbb947dd7ae5a4577dce0c53553604_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_37b7656d9394164bff7816f8177cc11c0e045243c024ef6836b45e6c3cc9db6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b7656d9394164bff7816f8177cc11c0e045243c024ef6836b45e6c3cc9db6d->enter($__internal_37b7656d9394164bff7816f8177cc11c0e045243c024ef6836b45e6c3cc9db6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8561074957ff34d8abeb9ce0e0c0bcc7efcfe216a9a0dfceacfe7f0ad154f14e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8561074957ff34d8abeb9ce0e0c0bcc7efcfe216a9a0dfceacfe7f0ad154f14e->enter($__internal_8561074957ff34d8abeb9ce0e0c0bcc7efcfe216a9a0dfceacfe7f0ad154f14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <center>
        <div class=\"container\">
            ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            <h3>Selectionnez le mois pour la recherche des Fiche Frais</h3><br/>
            ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
            <div class=\"form-group col-md-3\">
                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mois", array()), 'label');
        echo "
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mois", array()), 'errors');
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mois", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div><br/>
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "valid", array()), 'widget', array("attr" => array("class" => "btn btn-outline-success")));
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
        </div>
    </center>
";
        
        $__internal_8561074957ff34d8abeb9ce0e0c0bcc7efcfe216a9a0dfceacfe7f0ad154f14e->leave($__internal_8561074957ff34d8abeb9ce0e0c0bcc7efcfe216a9a0dfceacfe7f0ad154f14e_prof);

        
        $__internal_37b7656d9394164bff7816f8177cc11c0e045243c024ef6836b45e6c3cc9db6d->leave($__internal_37b7656d9394164bff7816f8177cc11c0e045243c024ef6836b45e6c3cc9db6d_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:FicheFrais:selectMois.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 16,  80 => 15,  76 => 14,  71 => 12,  67 => 11,  63 => 10,  58 => 8,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
        <div class=\"container\">
            {{ form_start(form) }}
            <h3>Selectionnez le mois pour la recherche des Fiche Frais</h3><br/>
            {{ form_errors(form) }}
            <div class=\"form-group col-md-3\">
                {{ form_label(form.mois) }}
                {{ form_errors(form.mois) }}
                {{ form_widget(form.mois, {'attr' : {'class' : 'form-control' }}) }}
            </div><br/>
            {{ form_widget(form.valid, {'attr' : {'class' : 'btn btn-outline-success'}}) }}
            {{ form_widget(form._token) }}
            {{ form_rest(form) }}
        </div>
    </center>
{% endblock %}", "GSBVisiteurBundle:FicheFrais:selectMois.html.twig", "C:\\wamp64\\www\\GSB\\src\\GSB\\VisiteurBundle/Resources/views/FicheFrais/selectMois.html.twig");
    }
}
