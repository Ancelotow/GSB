<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a35744566d9b57c9d75f896b274f2bf4e9227d98331dd73e7cfebdf0d5e64471 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5194ef5f346a3f769e700bf41cf0be6d223654b607e15af2048666cde8c08300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5194ef5f346a3f769e700bf41cf0be6d223654b607e15af2048666cde8c08300->enter($__internal_5194ef5f346a3f769e700bf41cf0be6d223654b607e15af2048666cde8c08300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9009e5afb043d954003b6602a178e842573f4aaa4be2e5d5d5c323e36f1d5311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9009e5afb043d954003b6602a178e842573f4aaa4be2e5d5d5c323e36f1d5311->enter($__internal_9009e5afb043d954003b6602a178e842573f4aaa4be2e5d5d5c323e36f1d5311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5194ef5f346a3f769e700bf41cf0be6d223654b607e15af2048666cde8c08300->leave($__internal_5194ef5f346a3f769e700bf41cf0be6d223654b607e15af2048666cde8c08300_prof);

        
        $__internal_9009e5afb043d954003b6602a178e842573f4aaa4be2e5d5d5c323e36f1d5311->leave($__internal_9009e5afb043d954003b6602a178e842573f4aaa4be2e5d5d5c323e36f1d5311_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f27e1667c9d257b84c48689789b2e1af4714b27974e8712f3ed88176122992a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27e1667c9d257b84c48689789b2e1af4714b27974e8712f3ed88176122992a5->enter($__internal_f27e1667c9d257b84c48689789b2e1af4714b27974e8712f3ed88176122992a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_19f34f889f749b2f04a10a8282c7f7e41a544bdb5f3a07a1295b1dd98407b6c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f34f889f749b2f04a10a8282c7f7e41a544bdb5f3a07a1295b1dd98407b6c3->enter($__internal_19f34f889f749b2f04a10a8282c7f7e41a544bdb5f3a07a1295b1dd98407b6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_19f34f889f749b2f04a10a8282c7f7e41a544bdb5f3a07a1295b1dd98407b6c3->leave($__internal_19f34f889f749b2f04a10a8282c7f7e41a544bdb5f3a07a1295b1dd98407b6c3_prof);

        
        $__internal_f27e1667c9d257b84c48689789b2e1af4714b27974e8712f3ed88176122992a5->leave($__internal_f27e1667c9d257b84c48689789b2e1af4714b27974e8712f3ed88176122992a5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_290a5d2bd4324adaa32f8cb6cf44ef58389bea7b712b602a68935a02168eeebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_290a5d2bd4324adaa32f8cb6cf44ef58389bea7b712b602a68935a02168eeebc->enter($__internal_290a5d2bd4324adaa32f8cb6cf44ef58389bea7b712b602a68935a02168eeebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2f478b9c713da5f1d7b14f0b38c1c7d664c27876569c994976e1f037155665b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f478b9c713da5f1d7b14f0b38c1c7d664c27876569c994976e1f037155665b3->enter($__internal_2f478b9c713da5f1d7b14f0b38c1c7d664c27876569c994976e1f037155665b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2f478b9c713da5f1d7b14f0b38c1c7d664c27876569c994976e1f037155665b3->leave($__internal_2f478b9c713da5f1d7b14f0b38c1c7d664c27876569c994976e1f037155665b3_prof);

        
        $__internal_290a5d2bd4324adaa32f8cb6cf44ef58389bea7b712b602a68935a02168eeebc->leave($__internal_290a5d2bd4324adaa32f8cb6cf44ef58389bea7b712b602a68935a02168eeebc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f31e3d8655949000af48cd272fccc1379db21d07102ac80686ec944cb7ca7e1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f31e3d8655949000af48cd272fccc1379db21d07102ac80686ec944cb7ca7e1b->enter($__internal_f31e3d8655949000af48cd272fccc1379db21d07102ac80686ec944cb7ca7e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c3d42ed1a9d1161477c47e85307d7fd322f92bcbb1c44cfcbad2aca152080f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d42ed1a9d1161477c47e85307d7fd322f92bcbb1c44cfcbad2aca152080f66->enter($__internal_c3d42ed1a9d1161477c47e85307d7fd322f92bcbb1c44cfcbad2aca152080f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c3d42ed1a9d1161477c47e85307d7fd322f92bcbb1c44cfcbad2aca152080f66->leave($__internal_c3d42ed1a9d1161477c47e85307d7fd322f92bcbb1c44cfcbad2aca152080f66_prof);

        
        $__internal_f31e3d8655949000af48cd272fccc1379db21d07102ac80686ec944cb7ca7e1b->leave($__internal_f31e3d8655949000af48cd272fccc1379db21d07102ac80686ec944cb7ca7e1b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\GSB-Visiteur\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
