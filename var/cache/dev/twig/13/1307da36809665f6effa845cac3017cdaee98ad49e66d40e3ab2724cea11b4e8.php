<?php

/* GSBVisiteurBundle:FicheFrais:update.html.twig */
class __TwigTemplate_d921c62c5fabd4b5d2b9f1dbe04460bb0b69e51ad7549034d84178793030ea0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Visiteur:base.html.twig", "GSBVisiteurBundle:FicheFrais:update.html.twig", 1);
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
        $__internal_979481e7484562fcc6d6efc7f8c92d1b24742b8a079dc64d6101e08ee58edbb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_979481e7484562fcc6d6efc7f8c92d1b24742b8a079dc64d6101e08ee58edbb7->enter($__internal_979481e7484562fcc6d6efc7f8c92d1b24742b8a079dc64d6101e08ee58edbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FicheFrais:update.html.twig"));

        $__internal_132fbbcb41c07644582e8712eaf571dc21487fc17e120eea3f65943e31aa6058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_132fbbcb41c07644582e8712eaf571dc21487fc17e120eea3f65943e31aa6058->enter($__internal_132fbbcb41c07644582e8712eaf571dc21487fc17e120eea3f65943e31aa6058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FicheFrais:update.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_979481e7484562fcc6d6efc7f8c92d1b24742b8a079dc64d6101e08ee58edbb7->leave($__internal_979481e7484562fcc6d6efc7f8c92d1b24742b8a079dc64d6101e08ee58edbb7_prof);

        
        $__internal_132fbbcb41c07644582e8712eaf571dc21487fc17e120eea3f65943e31aa6058->leave($__internal_132fbbcb41c07644582e8712eaf571dc21487fc17e120eea3f65943e31aa6058_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_66e029594c93ecf8dd715ceb65bd8c5541975878a0e6310913810b5470a5c9fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66e029594c93ecf8dd715ceb65bd8c5541975878a0e6310913810b5470a5c9fe->enter($__internal_66e029594c93ecf8dd715ceb65bd8c5541975878a0e6310913810b5470a5c9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9247b195b5d7a2924d40b29c089c828b3726260b11498954e24ac8a0efcb6338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9247b195b5d7a2924d40b29c089c828b3726260b11498954e24ac8a0efcb6338->enter($__internal_9247b195b5d7a2924d40b29c089c828b3726260b11498954e24ac8a0efcb6338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idvisiteur", array()), 'label');
        echo "
                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idvisiteur", array()), 'errors');
        echo "
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idvisiteur", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->getAttribute(($context["ff"] ?? $this->getContext($context, "ff")), "LeVisiteur", array()))));
        echo "
                </div>
                <div class=\"col-md-6 mb-6\">
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mois", array()), 'label');
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ff"] ?? $this->getContext($context, "ff")), "mois", array()), "html", null, true);
        echo "
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mois", array()), 'errors');
        echo "
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mois", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div><br/>
            <div class=\"form-row\">
                <div class=\"col-md-3 mb-6\">
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbJustificatifs", array()), 'label');
        echo "
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbJustificatifs", array()), 'errors');
        echo "
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbJustificatifs", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->getAttribute(($context["ff"] ?? $this->getContext($context, "ff")), "nbJustificatifs", array()))));
        echo "
                </div>
                <div class=\"col-md-3 mb-6\">
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montantValide", array()), 'label');
        echo "
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montantValide", array()), 'errors');
        echo "
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montantValide", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->getAttribute(($context["ff"] ?? $this->getContext($context, "ff")), "montantValide", array()))));
        echo "
                </div>
                <div class=\"col-md-3 mb-6\">
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etat", array()), 'label');
        echo "
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etat", array()), 'errors');
        echo "
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etat", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->getAttribute(($context["ff"] ?? $this->getContext($context, "ff")), "LeEtat", array()))));
        echo "
                </div>
                <div class=\"col-md-3 mb-6\">
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateNotif", array()), 'label');
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["ff"] ?? $this->getContext($context, "ff")), "dateNotif", array()), "d/m/Y"), "html", null, true);
        echo "
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateNotif", array()), 'errors');
        echo "
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateNotif", array()), 'widget');
        echo "
                </div>
            </div><br/>
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "valid", array()), 'widget', array("attr" => array("class" => "btn btn-outline-success")));
        echo "
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
        </div>
    </center>
";
        
        $__internal_9247b195b5d7a2924d40b29c089c828b3726260b11498954e24ac8a0efcb6338->leave($__internal_9247b195b5d7a2924d40b29c089c828b3726260b11498954e24ac8a0efcb6338_prof);

        
        $__internal_66e029594c93ecf8dd715ceb65bd8c5541975878a0e6310913810b5470a5c9fe->leave($__internal_66e029594c93ecf8dd715ceb65bd8c5541975878a0e6310913810b5470a5c9fe_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:FicheFrais:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 46,  161 => 45,  157 => 44,  151 => 41,  147 => 40,  141 => 39,  135 => 36,  131 => 35,  127 => 34,  121 => 31,  117 => 30,  113 => 29,  107 => 26,  103 => 25,  99 => 24,  91 => 19,  87 => 18,  81 => 17,  75 => 14,  71 => 13,  67 => 12,  61 => 9,  56 => 7,  52 => 5,  43 => 4,  33 => 1,  31 => 2,  11 => 1,);
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
                    {{ form_label(form.idvisiteur) }}
                    {{ form_errors(form.idvisiteur) }}
                    {{ form_widget(form.idvisiteur, {'attr' : {'class' : 'form-control', 'placeholder' : ff.LeVisiteur }}) }}
                </div>
                <div class=\"col-md-6 mb-6\">
                    {{ form_label(form.mois) }} {{ ff.mois }}
                    {{ form_errors(form.mois) }}
                    {{ form_widget(form.mois, {'attr' : {'class' : 'form-control' }}) }}
                </div>
            </div><br/>
            <div class=\"form-row\">
                <div class=\"col-md-3 mb-6\">
                    {{ form_label(form.nbJustificatifs) }}
                    {{ form_errors(form.nbJustificatifs) }}
                    {{ form_widget(form.nbJustificatifs, {'attr' : {'class' : 'form-control', 'placeholder' : ff.nbJustificatifs }}) }}
                </div>
                <div class=\"col-md-3 mb-6\">
                    {{ form_label(form.montantValide) }}
                    {{ form_errors(form.montantValide) }}
                    {{ form_widget(form.montantValide, {'attr' : {'class' : 'form-control', 'placeholder' : ff.montantValide }}) }}
                </div>
                <div class=\"col-md-3 mb-6\">
                    {{ form_label(form.etat) }}
                    {{ form_errors(form.etat) }}
                    {{ form_widget(form.etat, {'attr' : {'class' : 'form-control', 'placeholder' : ff.LeEtat }}) }}
                </div>
                <div class=\"col-md-3 mb-6\">
                    {{ form_label(form.dateNotif) }} {{ ff.dateNotif|date('d/m/Y') }}
                    {{ form_errors(form.dateNotif) }}
                    {{ form_widget(form.dateNotif) }}
                </div>
            </div><br/>
            {{ form_widget(form.valid, {'attr' : {'class' : 'btn btn-outline-success'}}) }}
            {{ form_widget(form._token) }}
            {{ form_rest(form) }}
        </div>
    </center>
{% endblock %}", "GSBVisiteurBundle:FicheFrais:update.html.twig", "C:\\wamp64\\www\\GSB\\src\\GSB\\VisiteurBundle/Resources/views/FicheFrais/update.html.twig");
    }
}
