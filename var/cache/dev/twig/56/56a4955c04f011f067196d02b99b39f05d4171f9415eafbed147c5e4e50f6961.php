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
        $__internal_ef26ce685cd6e2ae73fbd4227c12acc62ed268a8f0bac88f9aab187b577a0f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef26ce685cd6e2ae73fbd4227c12acc62ed268a8f0bac88f9aab187b577a0f8a->enter($__internal_ef26ce685cd6e2ae73fbd4227c12acc62ed268a8f0bac88f9aab187b577a0f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FicheFrais:selectMois.html.twig"));

        $__internal_575e088a77c6a6645242beb0f76b13779d9c1f4747842a2c17e6d0aa5ff48a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575e088a77c6a6645242beb0f76b13779d9c1f4747842a2c17e6d0aa5ff48a57->enter($__internal_575e088a77c6a6645242beb0f76b13779d9c1f4747842a2c17e6d0aa5ff48a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FicheFrais:selectMois.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef26ce685cd6e2ae73fbd4227c12acc62ed268a8f0bac88f9aab187b577a0f8a->leave($__internal_ef26ce685cd6e2ae73fbd4227c12acc62ed268a8f0bac88f9aab187b577a0f8a_prof);

        
        $__internal_575e088a77c6a6645242beb0f76b13779d9c1f4747842a2c17e6d0aa5ff48a57->leave($__internal_575e088a77c6a6645242beb0f76b13779d9c1f4747842a2c17e6d0aa5ff48a57_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_429ece30ae48a92528ef6348d23d6a875627bc3a00f3f6f4071d2a448c2146c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_429ece30ae48a92528ef6348d23d6a875627bc3a00f3f6f4071d2a448c2146c2->enter($__internal_429ece30ae48a92528ef6348d23d6a875627bc3a00f3f6f4071d2a448c2146c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e847bbf8abfde1d153f77acb3fb73c841a0c208a813b9ead42d253d2772a2e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e847bbf8abfde1d153f77acb3fb73c841a0c208a813b9ead42d253d2772a2e06->enter($__internal_e847bbf8abfde1d153f77acb3fb73c841a0c208a813b9ead42d253d2772a2e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e847bbf8abfde1d153f77acb3fb73c841a0c208a813b9ead42d253d2772a2e06->leave($__internal_e847bbf8abfde1d153f77acb3fb73c841a0c208a813b9ead42d253d2772a2e06_prof);

        
        $__internal_429ece30ae48a92528ef6348d23d6a875627bc3a00f3f6f4071d2a448c2146c2->leave($__internal_429ece30ae48a92528ef6348d23d6a875627bc3a00f3f6f4071d2a448c2146c2_prof);

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
{% endblock %}", "GSBVisiteurBundle:FicheFrais:selectMois.html.twig", "C:\\wamp64\\www\\GSB-Visiteur\\src\\GSB\\VisiteurBundle/Resources/views/FicheFrais/selectMois.html.twig");
    }
}
