<?php

/* GSBVisiteurBundle:LigneFraisForfait:ajout.html.twig */
class __TwigTemplate_0f44d997b396b2bc9376f10ec01e9420f5511692ddda365896d8f2c0e3bb7e33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Visiteur:base.html.twig", "GSBVisiteurBundle:LigneFraisForfait:ajout.html.twig", 1);
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
        $__internal_6d28e4ab863c7033474b2ca7c71d0b1333ac8edae681dacb7c5f498b93f563a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d28e4ab863c7033474b2ca7c71d0b1333ac8edae681dacb7c5f498b93f563a1->enter($__internal_6d28e4ab863c7033474b2ca7c71d0b1333ac8edae681dacb7c5f498b93f563a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:LigneFraisForfait:ajout.html.twig"));

        $__internal_d3de36b24021077743d88ddd49b2df5a03d4637280e3a34e4d914309ccffaf12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3de36b24021077743d88ddd49b2df5a03d4637280e3a34e4d914309ccffaf12->enter($__internal_d3de36b24021077743d88ddd49b2df5a03d4637280e3a34e4d914309ccffaf12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:LigneFraisForfait:ajout.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d28e4ab863c7033474b2ca7c71d0b1333ac8edae681dacb7c5f498b93f563a1->leave($__internal_6d28e4ab863c7033474b2ca7c71d0b1333ac8edae681dacb7c5f498b93f563a1_prof);

        
        $__internal_d3de36b24021077743d88ddd49b2df5a03d4637280e3a34e4d914309ccffaf12->leave($__internal_d3de36b24021077743d88ddd49b2df5a03d4637280e3a34e4d914309ccffaf12_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1e9472694013271aed0eec9b697089bab9a06bb75d963de6581d9e152907a5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1e9472694013271aed0eec9b697089bab9a06bb75d963de6581d9e152907a5e->enter($__internal_b1e9472694013271aed0eec9b697089bab9a06bb75d963de6581d9e152907a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_50f0f9add345572f551e4b77409b7eb24a17e7128dd25abe1124bc58f2fca47c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f0f9add345572f551e4b77409b7eb24a17e7128dd25abe1124bc58f2fca47c->enter($__internal_50f0f9add345572f551e4b77409b7eb24a17e7128dd25abe1124bc58f2fca47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <center>
        <div class=\"container\">
            ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            <h3>Formulaire d'ajout de Ligne Frais Forfait</h3><br/>
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
            <div class=\"form-group col-md-12\">
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ficheFrais", array()), 'label');
        echo "
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ficheFrais", array()), 'errors');
        echo "
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ficheFrais", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            <div class=\"form-row\">
                <div class=\"col-md-6 mb-6\">
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fraisForfais", array()), 'label');
        echo "
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fraisForfais", array()), 'errors');
        echo "
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fraisForfais", array()), 'widget');
        echo "
                </div>
                <div class=\"col-md-6 mb-6\">
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantite", array()), 'label');
        echo "
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantite", array()), 'errors');
        echo "
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantite", array()), 'widget');
        echo "
                </div>
            </div><br/>
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "valid", array()), 'widget', array("attr" => array("class" => "btn btn-outline-success")));
        echo "
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
        </div>
    </center>
";
        
        $__internal_50f0f9add345572f551e4b77409b7eb24a17e7128dd25abe1124bc58f2fca47c->leave($__internal_50f0f9add345572f551e4b77409b7eb24a17e7128dd25abe1124bc58f2fca47c_prof);

        
        $__internal_b1e9472694013271aed0eec9b697089bab9a06bb75d963de6581d9e152907a5e->leave($__internal_b1e9472694013271aed0eec9b697089bab9a06bb75d963de6581d9e152907a5e_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:LigneFraisForfait:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 31,  113 => 30,  109 => 29,  103 => 26,  99 => 25,  95 => 24,  89 => 21,  85 => 20,  81 => 19,  74 => 15,  70 => 14,  66 => 13,  61 => 11,  56 => 9,  52 => 7,  43 => 6,  33 => 1,  31 => 2,  11 => 1,);
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
{% form_theme form 'bootstrap_3_layout.html.twig' %}



{% block body %}
    <center>
        <div class=\"container\">
            {{ form_start(form) }}
            <h3>Formulaire d'ajout de Ligne Frais Forfait</h3><br/>
            {{ form_errors(form) }}
            <div class=\"form-group col-md-12\">
                {{ form_label(form.ficheFrais) }}
                {{ form_errors(form.ficheFrais) }}
                {{ form_widget(form.ficheFrais, {'attr' : {'class' : 'form-control' }}) }}
            </div>
            <div class=\"form-row\">
                <div class=\"col-md-6 mb-6\">
                    {{ form_label(form.fraisForfais) }}
                    {{ form_errors(form.fraisForfais) }}
                    {{ form_widget(form.fraisForfais) }}
                </div>
                <div class=\"col-md-6 mb-6\">
                    {{ form_label(form.quantite) }}
                    {{ form_errors(form.quantite) }}
                    {{ form_widget(form.quantite) }}
                </div>
            </div><br/>
            {{ form_widget(form.valid, {'attr' : {'class' : 'btn btn-outline-success'}}) }}
            {{ form_widget(form._token) }}
            {{ form_rest(form) }}
        </div>
    </center>
{% endblock %}", "GSBVisiteurBundle:LigneFraisForfait:ajout.html.twig", "C:\\wamp64\\www\\GSB-Visiteur\\src\\GSB\\VisiteurBundle/Resources/views/LigneFraisForfait/ajout.html.twig");
    }
}
