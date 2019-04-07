<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_1c6f3a86bc707809b5a79b84c1b4f314f230ccaa6a527eb898618d4dba5b569c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@FOSUser/Registration/register_content.html.twig", 1);
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
        $__internal_2cee527bba458e4c51cb4e4d782ce596d10bf7605fdacbf1045734ebe6ec21a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cee527bba458e4c51cb4e4d782ce596d10bf7605fdacbf1045734ebe6ec21a1->enter($__internal_2cee527bba458e4c51cb4e4d782ce596d10bf7605fdacbf1045734ebe6ec21a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_66ca636390027947f6d9ecbd4555e50a5d50db31bb25cf190d39c3f3d6c2c55c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ca636390027947f6d9ecbd4555e50a5d50db31bb25cf190d39c3f3d6c2c55c->enter($__internal_66ca636390027947f6d9ecbd4555e50a5d50db31bb25cf190d39c3f3d6c2c55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cee527bba458e4c51cb4e4d782ce596d10bf7605fdacbf1045734ebe6ec21a1->leave($__internal_2cee527bba458e4c51cb4e4d782ce596d10bf7605fdacbf1045734ebe6ec21a1_prof);

        
        $__internal_66ca636390027947f6d9ecbd4555e50a5d50db31bb25cf190d39c3f3d6c2c55c->leave($__internal_66ca636390027947f6d9ecbd4555e50a5d50db31bb25cf190d39c3f3d6c2c55c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f9bff693bbb96831da317b739ad062f022afc20ab83cffe700c924b16b5ec00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f9bff693bbb96831da317b739ad062f022afc20ab83cffe700c924b16b5ec00->enter($__internal_6f9bff693bbb96831da317b739ad062f022afc20ab83cffe700c924b16b5ec00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5aee175eaf3870b878d2124f7319b5740d835a654ecd65925866bf23884a27ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aee175eaf3870b878d2124f7319b5740d835a654ecd65925866bf23884a27ac->enter($__internal_5aee175eaf3870b878d2124f7319b5740d835a654ecd65925866bf23884a27ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <center>
        <div class=\"container\">
        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
        <h3>Enregistrement (1/2)</h3><br/>
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
            <div class=\"col-md-6 mb-3\">
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div><br/>
            <div class=\"col-md-6 mb-3\">
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div><br/>
            <div class=\"col-md-6 mb-3\">
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest', array("attr" => array("placeholder" => "Identifiant", "class" => "form-control")));
        echo "
            </div><br/>
            <div>
                <input type=\"submit\" class=\"btn btn-outline-success\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Continuer"), "html", null, true);
        echo "\" />
            </div><br/>
        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        <a href=\"/\" class=\"btn btn-outline-dark\">Retour</a><br/>
        </div>
    </center>
";
        
        $__internal_5aee175eaf3870b878d2124f7319b5740d835a654ecd65925866bf23884a27ac->leave($__internal_5aee175eaf3870b878d2124f7319b5740d835a654ecd65925866bf23884a27ac_prof);

        
        $__internal_6f9bff693bbb96831da317b739ad062f022afc20ab83cffe700c924b16b5ec00->leave($__internal_6f9bff693bbb96831da317b739ad062f022afc20ab83cffe700c924b16b5ec00_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 26,  100 => 24,  94 => 21,  88 => 18,  84 => 17,  80 => 16,  74 => 13,  70 => 12,  66 => 11,  61 => 9,  56 => 7,  52 => 5,  43 => 4,  33 => 1,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% form_theme form 'bootstrap_3_layout.html.twig' %}

{% block body %}
    <center>
        <div class=\"container\">
        {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
        <h3>Enregistrement (1/2)</h3><br/>
        {{ form_errors(form) }}
            <div class=\"col-md-6 mb-3\">
                {{ form_label(form.email) }}
                {{ form_errors(form.email) }}
                {{ form_widget(form.email, {'attr' : {'class' : 'form-control'}}) }}
            </div><br/>
            <div class=\"col-md-6 mb-3\">
                {{ form_label(form.username) }}
                {{ form_errors(form.username) }}
                {{ form_widget(form.username, {'attr' : {'class' : 'form-control'}}) }}
            </div><br/>
            <div class=\"col-md-6 mb-3\">
                {{ form_rest(form, {'attr' : {'placeholder' : 'Identifiant', 'class' : 'form-control'}}) }}
            </div><br/>
            <div>
                <input type=\"submit\" class=\"btn btn-outline-success\" value=\"{{ \"Continuer\"|trans }}\" />
            </div><br/>
        {{ form_end(form) }}
        <a href=\"/\" class=\"btn btn-outline-dark\">Retour</a><br/>
        </div>
    </center>
{% endblock %}
", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp64\\www\\GSB\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register_content.html.twig");
    }
}
