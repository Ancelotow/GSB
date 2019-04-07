<?php

/* GSBVisiteurBundle:FicheFrais:ajout.html.twig */
class __TwigTemplate_b35fb79755ffa23feaeba373d5b1fa8186637a593971258d2f28f87cc23da057 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Visiteur:base.html.twig", "GSBVisiteurBundle:FicheFrais:ajout.html.twig", 1);
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
        $__internal_60b715bb00befd9b80cef89a1b437b19a6d7cf801fdb9d8d1841f06eb8d43eeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b715bb00befd9b80cef89a1b437b19a6d7cf801fdb9d8d1841f06eb8d43eeb->enter($__internal_60b715bb00befd9b80cef89a1b437b19a6d7cf801fdb9d8d1841f06eb8d43eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FicheFrais:ajout.html.twig"));

        $__internal_9ce86bb504c4b9d7b415723c529b4557e1d9af5e9449b59dadcf2ca533fac0c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce86bb504c4b9d7b415723c529b4557e1d9af5e9449b59dadcf2ca533fac0c1->enter($__internal_9ce86bb504c4b9d7b415723c529b4557e1d9af5e9449b59dadcf2ca533fac0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FicheFrais:ajout.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60b715bb00befd9b80cef89a1b437b19a6d7cf801fdb9d8d1841f06eb8d43eeb->leave($__internal_60b715bb00befd9b80cef89a1b437b19a6d7cf801fdb9d8d1841f06eb8d43eeb_prof);

        
        $__internal_9ce86bb504c4b9d7b415723c529b4557e1d9af5e9449b59dadcf2ca533fac0c1->leave($__internal_9ce86bb504c4b9d7b415723c529b4557e1d9af5e9449b59dadcf2ca533fac0c1_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_154f0c133867bec3e362b3a6a0b73813dca6fcb26918c0cc211b875c7f4318fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_154f0c133867bec3e362b3a6a0b73813dca6fcb26918c0cc211b875c7f4318fd->enter($__internal_154f0c133867bec3e362b3a6a0b73813dca6fcb26918c0cc211b875c7f4318fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_afb1453986b653006e996a33b18089bf8edb396845c2509689c6b10169927018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb1453986b653006e996a33b18089bf8edb396845c2509689c6b10169927018->enter($__internal_afb1453986b653006e996a33b18089bf8edb396845c2509689c6b10169927018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <center>
        <div class=\"container\">
            ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            <h3>Formulaire d'ajout de fiche frais</h3><br/>
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
            <div class=\"form-row\">
                <div class=\"col-md-6 mb-6\">
                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mois", array()), 'label');
        echo "
                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mois", array()), 'errors');
        echo "
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mois", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"col-md-6 mb-6\">
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbJustificatifs", array()), 'label');
        echo "
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbJustificatifs", array()), 'errors');
        echo "
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbJustificatifs", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre de justificatifs")));
        echo "
                </div>
            </div><br/>
            <div class=\"form-row\">
                <div class=\"col-md-4 mb-6\">
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montantValide", array()), 'label');
        echo "
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montantValide", array()), 'errors');
        echo "
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montantValide", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Montant Valide")));
        echo "
                </div>
                <div class=\"col-md-4 mb-6\">
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etat", array()), 'label');
        echo "
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etat", array()), 'errors');
        echo "
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etat", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Etat ")));
        echo "
                </div>
                <div class=\"col-md-4 mb-6\">
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateNotif", array()), 'label');
        echo "
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateNotif", array()), 'errors');
        echo "
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateNotif", array()), 'widget');
        echo "
                </div>
            </div><br/>
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "valid", array()), 'widget', array("attr" => array("class" => "btn btn-outline-success")));
        echo "
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
        </div>
    </center>
";
        
        $__internal_afb1453986b653006e996a33b18089bf8edb396845c2509689c6b10169927018->leave($__internal_afb1453986b653006e996a33b18089bf8edb396845c2509689c6b10169927018_prof);

        
        $__internal_154f0c133867bec3e362b3a6a0b73813dca6fcb26918c0cc211b875c7f4318fd->leave($__internal_154f0c133867bec3e362b3a6a0b73813dca6fcb26918c0cc211b875c7f4318fd_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:FicheFrais:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 41,  143 => 40,  139 => 39,  133 => 36,  129 => 35,  125 => 34,  119 => 31,  115 => 30,  111 => 29,  105 => 26,  101 => 25,  97 => 24,  89 => 19,  85 => 18,  81 => 17,  75 => 14,  71 => 13,  67 => 12,  61 => 9,  56 => 7,  52 => 5,  43 => 4,  33 => 1,  31 => 2,  11 => 1,);
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
            <h3>Formulaire d'ajout de fiche frais</h3><br/>
            {{ form_errors(form) }}
            <div class=\"form-row\">
                <div class=\"col-md-6 mb-6\">
                    {{ form_label(form.mois) }}
                    {{ form_errors(form.mois) }}
                    {{ form_widget(form.mois, {'attr' : {'class' : 'form-control' }}) }}
                </div>
                <div class=\"col-md-6 mb-6\">
                    {{ form_label(form.nbJustificatifs) }}
                    {{ form_errors(form.nbJustificatifs) }}
                    {{ form_widget(form.nbJustificatifs, {'attr' : {'class' : 'form-control', 'placeholder' : 'Nombre de justificatifs' }}) }}
                </div>
            </div><br/>
            <div class=\"form-row\">
                <div class=\"col-md-4 mb-6\">
                    {{ form_label(form.montantValide) }}
                    {{ form_errors(form.montantValide) }}
                    {{ form_widget(form.montantValide, {'attr' : {'class' : 'form-control', 'placeholder' : 'Montant Valide' }}) }}
                </div>
                <div class=\"col-md-4 mb-6\">
                    {{ form_label(form.etat) }}
                    {{ form_errors(form.etat) }}
                    {{ form_widget(form.etat, {'attr' : {'class' : 'form-control', 'placeholder' : 'Etat ' }}) }}
                </div>
                <div class=\"col-md-4 mb-6\">
                    {{ form_label(form.dateNotif) }}
                    {{ form_errors(form.dateNotif) }}
                    {{ form_widget(form.dateNotif) }}
                </div>
            </div><br/>
            {{ form_widget(form.valid, {'attr' : {'class' : 'btn btn-outline-success'}}) }}
            {{ form_widget(form._token) }}
            {{ form_rest(form) }}
        </div>
    </center>
{% endblock %}", "GSBVisiteurBundle:FicheFrais:ajout.html.twig", "C:\\wamp64\\www\\GSB\\src\\GSB\\VisiteurBundle/Resources/views/FicheFrais/ajout.html.twig");
    }
}
