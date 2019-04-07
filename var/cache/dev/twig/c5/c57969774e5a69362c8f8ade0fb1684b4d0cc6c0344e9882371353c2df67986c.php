<?php

/* GSBVisiteurBundle:FraisForfait:ajout.html.twig */
class __TwigTemplate_fbb776d41b7ddd15df919c1e22027692fac3e7352daec55e541d388bf9f40855 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Visiteur:base.html.twig", "GSBVisiteurBundle:FraisForfait:ajout.html.twig", 1);
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
        $__internal_2241f0b4ce3e80c5e0bc50e77a5feae0bffc7f3dcf2b346dfdf3e3f469331986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2241f0b4ce3e80c5e0bc50e77a5feae0bffc7f3dcf2b346dfdf3e3f469331986->enter($__internal_2241f0b4ce3e80c5e0bc50e77a5feae0bffc7f3dcf2b346dfdf3e3f469331986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FraisForfait:ajout.html.twig"));

        $__internal_e5f4e5251ffb0db156a8f6fcf55a5089f1a62da0ec859cd95c2f70eb72424496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f4e5251ffb0db156a8f6fcf55a5089f1a62da0ec859cd95c2f70eb72424496->enter($__internal_e5f4e5251ffb0db156a8f6fcf55a5089f1a62da0ec859cd95c2f70eb72424496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FraisForfait:ajout.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2241f0b4ce3e80c5e0bc50e77a5feae0bffc7f3dcf2b346dfdf3e3f469331986->leave($__internal_2241f0b4ce3e80c5e0bc50e77a5feae0bffc7f3dcf2b346dfdf3e3f469331986_prof);

        
        $__internal_e5f4e5251ffb0db156a8f6fcf55a5089f1a62da0ec859cd95c2f70eb72424496->leave($__internal_e5f4e5251ffb0db156a8f6fcf55a5089f1a62da0ec859cd95c2f70eb72424496_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d4e948d2d926156530ef90d8482163377044ed368e9ef52d342916090108db1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d4e948d2d926156530ef90d8482163377044ed368e9ef52d342916090108db1->enter($__internal_9d4e948d2d926156530ef90d8482163377044ed368e9ef52d342916090108db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f39069e862d5fd2ef90ce78ceb1834e7a4f4ff9d3858ec348490a9666db4c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f39069e862d5fd2ef90ce78ceb1834e7a4f4ff9d3858ec348490a9666db4c8a->enter($__internal_0f39069e862d5fd2ef90ce78ceb1834e7a4f4ff9d3858ec348490a9666db4c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <center>
        <div class=\"container\">
            ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            <h3>Formulaire d'ajout de Frais Forfait</h3><br/>
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
            <div class=\"form-group col-md-3\">
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "libelle", array()), 'label');
        echo "
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "libelle", array()), 'errors');
        echo "
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "libelle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            <div class=\"form-group col-md-3\">
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montant", array()), 'label');
        echo "
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montant", array()), 'errors');
        echo "
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montant", array()), 'widget');
        echo "
            </div><br/>
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "valid", array()), 'widget', array("attr" => array("class" => "btn btn-outline-success")));
        echo "
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
        </div>
    </center>
";
        
        $__internal_0f39069e862d5fd2ef90ce78ceb1834e7a4f4ff9d3858ec348490a9666db4c8a->leave($__internal_0f39069e862d5fd2ef90ce78ceb1834e7a4f4ff9d3858ec348490a9666db4c8a_prof);

        
        $__internal_9d4e948d2d926156530ef90d8482163377044ed368e9ef52d342916090108db1->leave($__internal_9d4e948d2d926156530ef90d8482163377044ed368e9ef52d342916090108db1_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:FraisForfait:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 24,  97 => 23,  93 => 22,  88 => 20,  84 => 19,  80 => 18,  74 => 15,  70 => 14,  66 => 13,  61 => 11,  56 => 9,  52 => 7,  43 => 6,  33 => 1,  31 => 2,  11 => 1,);
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
            <h3>Formulaire d'ajout de Frais Forfait</h3><br/>
            {{ form_errors(form) }}
            <div class=\"form-group col-md-3\">
                {{ form_label(form.libelle) }}
                {{ form_errors(form.libelle) }}
                {{ form_widget(form.libelle, {'attr' : {'class' : 'form-control' }}) }}
            </div>
            <div class=\"form-group col-md-3\">
                {{ form_label(form.montant) }}
                {{ form_errors(form.montant) }}
                {{ form_widget(form.montant) }}
            </div><br/>
            {{ form_widget(form.valid, {'attr' : {'class' : 'btn btn-outline-success'}}) }}
            {{ form_widget(form._token) }}
            {{ form_rest(form) }}
        </div>
    </center>
{% endblock %}", "GSBVisiteurBundle:FraisForfait:ajout.html.twig", "C:\\wamp64\\www\\GSB\\src\\GSB\\VisiteurBundle/Resources/views/FraisForfait/ajout.html.twig");
    }
}
