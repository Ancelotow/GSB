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
        $__internal_a98f70ab154de3bcc8eb0aadc40a2f8fd8a35f2c5e9b478cdf29db5196509d06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a98f70ab154de3bcc8eb0aadc40a2f8fd8a35f2c5e9b478cdf29db5196509d06->enter($__internal_a98f70ab154de3bcc8eb0aadc40a2f8fd8a35f2c5e9b478cdf29db5196509d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_df1749646877c2cce56bad4d1fd02fb5daa6b35e4a1e65b1cb2785a1d74a8d81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1749646877c2cce56bad4d1fd02fb5daa6b35e4a1e65b1cb2785a1d74a8d81->enter($__internal_df1749646877c2cce56bad4d1fd02fb5daa6b35e4a1e65b1cb2785a1d74a8d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a98f70ab154de3bcc8eb0aadc40a2f8fd8a35f2c5e9b478cdf29db5196509d06->leave($__internal_a98f70ab154de3bcc8eb0aadc40a2f8fd8a35f2c5e9b478cdf29db5196509d06_prof);

        
        $__internal_df1749646877c2cce56bad4d1fd02fb5daa6b35e4a1e65b1cb2785a1d74a8d81->leave($__internal_df1749646877c2cce56bad4d1fd02fb5daa6b35e4a1e65b1cb2785a1d74a8d81_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_25d66c2d22c4cbf4d096898ebdf409998211f4f7218080304c46f5c3a9531b0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25d66c2d22c4cbf4d096898ebdf409998211f4f7218080304c46f5c3a9531b0c->enter($__internal_25d66c2d22c4cbf4d096898ebdf409998211f4f7218080304c46f5c3a9531b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_97fb59f1c9bccf4e98bc753eb83db0e522e129b9beca9c68b1a683870bd13899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97fb59f1c9bccf4e98bc753eb83db0e522e129b9beca9c68b1a683870bd13899->enter($__internal_97fb59f1c9bccf4e98bc753eb83db0e522e129b9beca9c68b1a683870bd13899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_97fb59f1c9bccf4e98bc753eb83db0e522e129b9beca9c68b1a683870bd13899->leave($__internal_97fb59f1c9bccf4e98bc753eb83db0e522e129b9beca9c68b1a683870bd13899_prof);

        
        $__internal_25d66c2d22c4cbf4d096898ebdf409998211f4f7218080304c46f5c3a9531b0c->leave($__internal_25d66c2d22c4cbf4d096898ebdf409998211f4f7218080304c46f5c3a9531b0c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d32130bf9414041ab3e74a71c2a808614a5507f3077cb7f59bb85003a6267fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d32130bf9414041ab3e74a71c2a808614a5507f3077cb7f59bb85003a6267fe->enter($__internal_4d32130bf9414041ab3e74a71c2a808614a5507f3077cb7f59bb85003a6267fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8cef4f3848ce358ece4d5d33ef49e993355a2ff9e44d390fb48f7a27f58ec227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cef4f3848ce358ece4d5d33ef49e993355a2ff9e44d390fb48f7a27f58ec227->enter($__internal_8cef4f3848ce358ece4d5d33ef49e993355a2ff9e44d390fb48f7a27f58ec227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8cef4f3848ce358ece4d5d33ef49e993355a2ff9e44d390fb48f7a27f58ec227->leave($__internal_8cef4f3848ce358ece4d5d33ef49e993355a2ff9e44d390fb48f7a27f58ec227_prof);

        
        $__internal_4d32130bf9414041ab3e74a71c2a808614a5507f3077cb7f59bb85003a6267fe->leave($__internal_4d32130bf9414041ab3e74a71c2a808614a5507f3077cb7f59bb85003a6267fe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c7de221f81eefe00c8fbe7cdf626f92e8b2614c1bb3a32ba66d8956a98e4e84b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7de221f81eefe00c8fbe7cdf626f92e8b2614c1bb3a32ba66d8956a98e4e84b->enter($__internal_c7de221f81eefe00c8fbe7cdf626f92e8b2614c1bb3a32ba66d8956a98e4e84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_739a9a56ccfd64ba610610e7411394f4b991937cabc7f14c4cc42fac2008ae9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_739a9a56ccfd64ba610610e7411394f4b991937cabc7f14c4cc42fac2008ae9b->enter($__internal_739a9a56ccfd64ba610610e7411394f4b991937cabc7f14c4cc42fac2008ae9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_739a9a56ccfd64ba610610e7411394f4b991937cabc7f14c4cc42fac2008ae9b->leave($__internal_739a9a56ccfd64ba610610e7411394f4b991937cabc7f14c4cc42fac2008ae9b_prof);

        
        $__internal_c7de221f81eefe00c8fbe7cdf626f92e8b2614c1bb3a32ba66d8956a98e4e84b->leave($__internal_c7de221f81eefe00c8fbe7cdf626f92e8b2614c1bb3a32ba66d8956a98e4e84b_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\GSB-Visiteur\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
