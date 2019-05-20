<?php

/* GSBAccueilBundle:Default:visiteur.html.twig */
class __TwigTemplate_d28d348411d8944cd5c3798444df8ce6f4d7f3431c275c63113cdeb836d35f3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GSBAccueilBundle:Default:visiteur.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d534235e3e801c4263c98054af88100870fdb7ae8e8f4ad9074a62c2af384499 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d534235e3e801c4263c98054af88100870fdb7ae8e8f4ad9074a62c2af384499->enter($__internal_d534235e3e801c4263c98054af88100870fdb7ae8e8f4ad9074a62c2af384499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBAccueilBundle:Default:visiteur.html.twig"));

        $__internal_bc85b9f091ce409510431d790a826b6540147d390f11ce43342d14fd1d970929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc85b9f091ce409510431d790a826b6540147d390f11ce43342d14fd1d970929->enter($__internal_bc85b9f091ce409510431d790a826b6540147d390f11ce43342d14fd1d970929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBAccueilBundle:Default:visiteur.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d534235e3e801c4263c98054af88100870fdb7ae8e8f4ad9074a62c2af384499->leave($__internal_d534235e3e801c4263c98054af88100870fdb7ae8e8f4ad9074a62c2af384499_prof);

        
        $__internal_bc85b9f091ce409510431d790a826b6540147d390f11ce43342d14fd1d970929->leave($__internal_bc85b9f091ce409510431d790a826b6540147d390f11ce43342d14fd1d970929_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4c578431648b3d8eadb7e92d82be0651cb69854973c020d760f155aeec7b3d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4c578431648b3d8eadb7e92d82be0651cb69854973c020d760f155aeec7b3d9->enter($__internal_f4c578431648b3d8eadb7e92d82be0651cb69854973c020d760f155aeec7b3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba55a3cff2a37bb646c9390105b1be574e835135d46ac9c627ce5a07773ca2ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba55a3cff2a37bb646c9390105b1be574e835135d46ac9c627ce5a07773ca2ef->enter($__internal_ba55a3cff2a37bb646c9390105b1be574e835135d46ac9c627ce5a07773ca2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <center>
        <div class=\"container\">
            ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post"));
        echo "
            <h3>Enregistrement (2/2)</h3><br/>
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
            <div class=\"col-md-6 mb-3\">
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div><br/>
            <div class=\"col-md-6 mb-3\">
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'label');
        echo "
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div><br/>
            <div class=\"col-md-6 mb-3\">
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", array()), 'label');
        echo "
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div><br/>
            <div class=\"col-md-6 mb-3\">
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'label');
        echo "
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'errors');
        echo "
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div><br/>
            <div class=\"col-md-6 mb-3\">
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cp", array()), 'label');
        echo "
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cp", array()), 'errors');
        echo "
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cp", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div><br/>
            <div class=\"col-md-6 mb-3\">
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date_embauche", array()), 'label');
        echo "
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date_embauche", array()), 'errors');
        echo "
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date_embauche", array()), 'widget');
        echo "
            </div><br/>
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "valid", array()), 'widget', array("attr" => array("class" => "btn btn-outline-success")));
        echo "
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            <a href=\"/\" class=\"btn btn-outline-danger\">Annuler</a><br/>
        </div>
    </center>
";
        
        $__internal_ba55a3cff2a37bb646c9390105b1be574e835135d46ac9c627ce5a07773ca2ef->leave($__internal_ba55a3cff2a37bb646c9390105b1be574e835135d46ac9c627ce5a07773ca2ef_prof);

        
        $__internal_f4c578431648b3d8eadb7e92d82be0651cb69854973c020d760f155aeec7b3d9->leave($__internal_f4c578431648b3d8eadb7e92d82be0651cb69854973c020d760f155aeec7b3d9_prof);

    }

    public function getTemplateName()
    {
        return "GSBAccueilBundle:Default:visiteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 43,  157 => 42,  153 => 41,  149 => 40,  144 => 38,  140 => 37,  136 => 36,  130 => 33,  126 => 32,  122 => 31,  116 => 28,  112 => 27,  108 => 26,  102 => 23,  98 => 22,  94 => 21,  88 => 18,  84 => 17,  80 => 16,  74 => 13,  70 => 12,  66 => 11,  61 => 9,  56 => 7,  52 => 5,  43 => 4,  33 => 1,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends\"::base.html.twig\" %}
{% form_theme form 'bootstrap_3_layout.html.twig' %}

{% block body %}
    <center>
        <div class=\"container\">
            {{ form_start(form, {'method': 'post'}) }}
            <h3>Enregistrement (2/2)</h3><br/>
            {{ form_errors(form) }}
            <div class=\"col-md-6 mb-3\">
                {{ form_label(form.nom) }}
                {{ form_errors(form.nom) }}
                {{ form_widget(form.nom, {'attr' : {'class' : 'form-control'}}) }}
            </div><br/>
            <div class=\"col-md-6 mb-3\">
                {{ form_label(form.prenom) }}
                {{ form_errors(form.prenom) }}
                {{ form_widget(form.prenom, {'attr' : {'class' : 'form-control'}}) }}
            </div><br/>
            <div class=\"col-md-6 mb-3\">
                {{ form_label(form.adresse) }}
                {{ form_errors(form.adresse) }}
                {{ form_widget(form.adresse, {'attr' : {'class' : 'form-control'}}) }}
            </div><br/>
            <div class=\"col-md-6 mb-3\">
                {{ form_label(form.ville) }}
                {{ form_errors(form.ville) }}
                {{ form_widget(form.ville, {'attr' : {'class' : 'form-control'}}) }}
            </div><br/>
            <div class=\"col-md-6 mb-3\">
                {{ form_label(form.cp) }}
                {{ form_errors(form.cp) }}
                {{ form_widget(form.cp, {'attr' : {'class' : 'form-control'}}) }}
            </div><br/>
            <div class=\"col-md-6 mb-3\">
                {{ form_label(form.date_embauche) }}
                {{ form_errors(form.date_embauche) }}
                {{ form_widget(form.date_embauche) }}
            </div><br/>
            {{ form_widget(form.valid, {'attr' : {'class' : 'btn btn-outline-success'}}) }}
            {{ form_widget(form._token) }}
            {{ form_rest(form) }}
            {{ form_end(form) }}
            <a href=\"/\" class=\"btn btn-outline-danger\">Annuler</a><br/>
        </div>
    </center>
{% endblock %}", "GSBAccueilBundle:Default:visiteur.html.twig", "C:\\wamp64\\www\\GSB-Visiteur\\src\\GSB\\AccueilBundle/Resources/views/Default/visiteur.html.twig");
    }
}
