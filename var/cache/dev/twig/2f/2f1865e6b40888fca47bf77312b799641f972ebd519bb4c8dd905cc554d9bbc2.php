<?php

/* GSBVisiteurBundle:LigneFraisHorsForfait:ajout.html.twig */
class __TwigTemplate_531df70953534f10ba561777e99db0b5989466217aac9efdeef6b7526c8a622c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Visiteur:base.html.twig", "GSBVisiteurBundle:LigneFraisHorsForfait:ajout.html.twig", 1);
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
        $__internal_5a9eaad9739c4691e573f9f02791d9193b464515a327a973cfad8b7629942473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a9eaad9739c4691e573f9f02791d9193b464515a327a973cfad8b7629942473->enter($__internal_5a9eaad9739c4691e573f9f02791d9193b464515a327a973cfad8b7629942473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:LigneFraisHorsForfait:ajout.html.twig"));

        $__internal_94baf6b3a996fdbbc29a2ec9393d9fba6ed6e81c9f6c6916dbfe282816608069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94baf6b3a996fdbbc29a2ec9393d9fba6ed6e81c9f6c6916dbfe282816608069->enter($__internal_94baf6b3a996fdbbc29a2ec9393d9fba6ed6e81c9f6c6916dbfe282816608069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:LigneFraisHorsForfait:ajout.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a9eaad9739c4691e573f9f02791d9193b464515a327a973cfad8b7629942473->leave($__internal_5a9eaad9739c4691e573f9f02791d9193b464515a327a973cfad8b7629942473_prof);

        
        $__internal_94baf6b3a996fdbbc29a2ec9393d9fba6ed6e81c9f6c6916dbfe282816608069->leave($__internal_94baf6b3a996fdbbc29a2ec9393d9fba6ed6e81c9f6c6916dbfe282816608069_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_73a43cde1d8a21609e1ef965940db9945c4e3ebb8421350671da342fa917a7ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73a43cde1d8a21609e1ef965940db9945c4e3ebb8421350671da342fa917a7ed->enter($__internal_73a43cde1d8a21609e1ef965940db9945c4e3ebb8421350671da342fa917a7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46b20cd1d264866ebcd59768436b5e55f83f1e7d7dbcf573183bada170be8571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b20cd1d264866ebcd59768436b5e55f83f1e7d7dbcf573183bada170be8571->enter($__internal_46b20cd1d264866ebcd59768436b5e55f83f1e7d7dbcf573183bada170be8571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <center>
        <div class=\"container\">
            ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            <h3>Formulaire d'ajout de Ligne Frais Hors Forfait</h3><br/>
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
            <div class=\"form-row\">
                <div class=\"col-md-6 mb-6\">
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ficheFrais", array()), 'label');
        echo "
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ficheFrais", array()), 'errors');
        echo "
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ficheFrais", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"col-md-2,5 mb-6\">
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'label');
        echo "
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
        echo "
                </div>
            </div><br/>
            <div class=\"form-row\">
                <div class=\"col-md-6 mb-6\">
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montant", array()), 'label');
        echo "
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montant", array()), 'errors');
        echo "
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montant", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Votre montant")));
        echo "
                </div>
                <div class=\"col-md-6 mb-6\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "libelle", array()), 'label');
        echo "
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "libelle", array()), 'errors');
        echo "
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "libelle", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Votre libelle")));
        echo "
                </div>
            </div><br/>
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "valid", array()), 'widget', array("attr" => array("class" => "btn btn-outline-success")));
        echo "
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
        </div>
    </center>
";
        
        $__internal_46b20cd1d264866ebcd59768436b5e55f83f1e7d7dbcf573183bada170be8571->leave($__internal_46b20cd1d264866ebcd59768436b5e55f83f1e7d7dbcf573183bada170be8571_prof);

        
        $__internal_73a43cde1d8a21609e1ef965940db9945c4e3ebb8421350671da342fa917a7ed->leave($__internal_73a43cde1d8a21609e1ef965940db9945c4e3ebb8421350671da342fa917a7ed_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:LigneFraisHorsForfait:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 38,  129 => 37,  125 => 36,  119 => 33,  115 => 32,  111 => 31,  105 => 28,  101 => 27,  97 => 26,  89 => 21,  85 => 20,  81 => 19,  75 => 16,  71 => 15,  67 => 14,  61 => 11,  56 => 9,  52 => 7,  43 => 6,  33 => 1,  31 => 2,  11 => 1,);
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
            <h3>Formulaire d'ajout de Ligne Frais Hors Forfait</h3><br/>
            {{ form_errors(form) }}
            <div class=\"form-row\">
                <div class=\"col-md-6 mb-6\">
                    {{ form_label(form.ficheFrais) }}
                    {{ form_errors(form.ficheFrais) }}
                    {{ form_widget(form.ficheFrais, {'attr' : {'class' : 'form-control' }}) }}
                </div>
                <div class=\"col-md-2,5 mb-6\">
                    {{ form_label(form.date) }}
                    {{ form_errors(form.date) }}
                    {{ form_widget(form.date) }}
                </div>
            </div><br/>
            <div class=\"form-row\">
                <div class=\"col-md-6 mb-6\">
                    {{ form_label(form.montant) }}
                    {{ form_errors(form.montant) }}
                    {{ form_widget(form.montant, {'attr' : {'class' : 'form-control', 'placeholder' : 'Votre montant' }}) }}
                </div>
                <div class=\"col-md-6 mb-6\">
                    {{ form_label(form.libelle) }}
                    {{ form_errors(form.libelle) }}
                    {{ form_widget(form.libelle, {'attr' : {'class' : 'form-control', 'placeholder' : 'Votre libelle' }}) }}
                </div>
            </div><br/>
            {{ form_widget(form.valid, {'attr' : {'class' : 'btn btn-outline-success'}}) }}
            {{ form_widget(form._token) }}
            {{ form_rest(form) }}
        </div>
    </center>
{% endblock %}", "GSBVisiteurBundle:LigneFraisHorsForfait:ajout.html.twig", "C:\\wamp64\\www\\GSB-Visiteur\\src\\GSB\\VisiteurBundle/Resources/views/LigneFraisHorsForfait/ajout.html.twig");
    }
}
