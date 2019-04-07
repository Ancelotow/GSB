<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ea5783d5b7ece22d928e8204a40784b8ec6b0e44c97d55be62952f2a2b88ecec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_999f360f34370b8c58f77939f3559fb906cd16ef7e9aa0d1222338e8096cc161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_999f360f34370b8c58f77939f3559fb906cd16ef7e9aa0d1222338e8096cc161->enter($__internal_999f360f34370b8c58f77939f3559fb906cd16ef7e9aa0d1222338e8096cc161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7402ccc478950e20ca5b4fafd5c69f14b4fb8084f7505c0ab02d6e75f4e5bf91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7402ccc478950e20ca5b4fafd5c69f14b4fb8084f7505c0ab02d6e75f4e5bf91->enter($__internal_7402ccc478950e20ca5b4fafd5c69f14b4fb8084f7505c0ab02d6e75f4e5bf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_999f360f34370b8c58f77939f3559fb906cd16ef7e9aa0d1222338e8096cc161->leave($__internal_999f360f34370b8c58f77939f3559fb906cd16ef7e9aa0d1222338e8096cc161_prof);

        
        $__internal_7402ccc478950e20ca5b4fafd5c69f14b4fb8084f7505c0ab02d6e75f4e5bf91->leave($__internal_7402ccc478950e20ca5b4fafd5c69f14b4fb8084f7505c0ab02d6e75f4e5bf91_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8282cd7fa0f70228b4e5efebc55c9b3a23794be3f211e591709e3127a790d51e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8282cd7fa0f70228b4e5efebc55c9b3a23794be3f211e591709e3127a790d51e->enter($__internal_8282cd7fa0f70228b4e5efebc55c9b3a23794be3f211e591709e3127a790d51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_18cb91b7cfa641b133869db29fd5fbd724d0ad2c142e9c80c6e4d86db0cd4569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18cb91b7cfa641b133869db29fd5fbd724d0ad2c142e9c80c6e4d86db0cd4569->enter($__internal_18cb91b7cfa641b133869db29fd5fbd724d0ad2c142e9c80c6e4d86db0cd4569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_18cb91b7cfa641b133869db29fd5fbd724d0ad2c142e9c80c6e4d86db0cd4569->leave($__internal_18cb91b7cfa641b133869db29fd5fbd724d0ad2c142e9c80c6e4d86db0cd4569_prof);

        
        $__internal_8282cd7fa0f70228b4e5efebc55c9b3a23794be3f211e591709e3127a790d51e->leave($__internal_8282cd7fa0f70228b4e5efebc55c9b3a23794be3f211e591709e3127a790d51e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8f41724dc19764d6daeaee8d209d52052dbb12eb0ea57c2abf1ecd206047df31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f41724dc19764d6daeaee8d209d52052dbb12eb0ea57c2abf1ecd206047df31->enter($__internal_8f41724dc19764d6daeaee8d209d52052dbb12eb0ea57c2abf1ecd206047df31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c9a99e3c38a9df5ba0f5556170cf36d302c429ea4c77d7571615d4dc2fa00fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a99e3c38a9df5ba0f5556170cf36d302c429ea4c77d7571615d4dc2fa00fc0->enter($__internal_c9a99e3c38a9df5ba0f5556170cf36d302c429ea4c77d7571615d4dc2fa00fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c9a99e3c38a9df5ba0f5556170cf36d302c429ea4c77d7571615d4dc2fa00fc0->leave($__internal_c9a99e3c38a9df5ba0f5556170cf36d302c429ea4c77d7571615d4dc2fa00fc0_prof);

        
        $__internal_8f41724dc19764d6daeaee8d209d52052dbb12eb0ea57c2abf1ecd206047df31->leave($__internal_8f41724dc19764d6daeaee8d209d52052dbb12eb0ea57c2abf1ecd206047df31_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_69dbcda61e91af20363c12652e9a1ef0edd036f8e7761ec662688ff8feb8d305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69dbcda61e91af20363c12652e9a1ef0edd036f8e7761ec662688ff8feb8d305->enter($__internal_69dbcda61e91af20363c12652e9a1ef0edd036f8e7761ec662688ff8feb8d305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ab473ed10b2c72da9e71815b9e05c923c803ba980f44ef6efe25fc654a427a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab473ed10b2c72da9e71815b9e05c923c803ba980f44ef6efe25fc654a427a41->enter($__internal_ab473ed10b2c72da9e71815b9e05c923c803ba980f44ef6efe25fc654a427a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ab473ed10b2c72da9e71815b9e05c923c803ba980f44ef6efe25fc654a427a41->leave($__internal_ab473ed10b2c72da9e71815b9e05c923c803ba980f44ef6efe25fc654a427a41_prof);

        
        $__internal_69dbcda61e91af20363c12652e9a1ef0edd036f8e7761ec662688ff8feb8d305->leave($__internal_69dbcda61e91af20363c12652e9a1ef0edd036f8e7761ec662688ff8feb8d305_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\GSB\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
