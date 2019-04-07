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
        $__internal_a72c3bc4e1d1ee6392b230137e782aa3ec167fa60afb806ef0943cbe7f7455c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a72c3bc4e1d1ee6392b230137e782aa3ec167fa60afb806ef0943cbe7f7455c3->enter($__internal_a72c3bc4e1d1ee6392b230137e782aa3ec167fa60afb806ef0943cbe7f7455c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f033bfd622609a05b791fe2434e497ddc9a81c07980894c30b944f9310cefeab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f033bfd622609a05b791fe2434e497ddc9a81c07980894c30b944f9310cefeab->enter($__internal_f033bfd622609a05b791fe2434e497ddc9a81c07980894c30b944f9310cefeab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a72c3bc4e1d1ee6392b230137e782aa3ec167fa60afb806ef0943cbe7f7455c3->leave($__internal_a72c3bc4e1d1ee6392b230137e782aa3ec167fa60afb806ef0943cbe7f7455c3_prof);

        
        $__internal_f033bfd622609a05b791fe2434e497ddc9a81c07980894c30b944f9310cefeab->leave($__internal_f033bfd622609a05b791fe2434e497ddc9a81c07980894c30b944f9310cefeab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eebdfab6dd58ecc1c15809baf0e0087de4444236fd75c6f63d7f8ccc061de57d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eebdfab6dd58ecc1c15809baf0e0087de4444236fd75c6f63d7f8ccc061de57d->enter($__internal_eebdfab6dd58ecc1c15809baf0e0087de4444236fd75c6f63d7f8ccc061de57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aae036a1224116bbf460b1c2a655f2a07d7ec6d8182f3b6af4b31046b2d3ff3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae036a1224116bbf460b1c2a655f2a07d7ec6d8182f3b6af4b31046b2d3ff3e->enter($__internal_aae036a1224116bbf460b1c2a655f2a07d7ec6d8182f3b6af4b31046b2d3ff3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_aae036a1224116bbf460b1c2a655f2a07d7ec6d8182f3b6af4b31046b2d3ff3e->leave($__internal_aae036a1224116bbf460b1c2a655f2a07d7ec6d8182f3b6af4b31046b2d3ff3e_prof);

        
        $__internal_eebdfab6dd58ecc1c15809baf0e0087de4444236fd75c6f63d7f8ccc061de57d->leave($__internal_eebdfab6dd58ecc1c15809baf0e0087de4444236fd75c6f63d7f8ccc061de57d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b90f9158554e0d7aab357b7e4a0da3eb528b1f43ca9401095fc0136105d6e1c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b90f9158554e0d7aab357b7e4a0da3eb528b1f43ca9401095fc0136105d6e1c8->enter($__internal_b90f9158554e0d7aab357b7e4a0da3eb528b1f43ca9401095fc0136105d6e1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_833dcdf05cb8279328addbcd4bd6899b6926e88d0a3a8179c8f9b08730cdcf85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_833dcdf05cb8279328addbcd4bd6899b6926e88d0a3a8179c8f9b08730cdcf85->enter($__internal_833dcdf05cb8279328addbcd4bd6899b6926e88d0a3a8179c8f9b08730cdcf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_833dcdf05cb8279328addbcd4bd6899b6926e88d0a3a8179c8f9b08730cdcf85->leave($__internal_833dcdf05cb8279328addbcd4bd6899b6926e88d0a3a8179c8f9b08730cdcf85_prof);

        
        $__internal_b90f9158554e0d7aab357b7e4a0da3eb528b1f43ca9401095fc0136105d6e1c8->leave($__internal_b90f9158554e0d7aab357b7e4a0da3eb528b1f43ca9401095fc0136105d6e1c8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ba8dd700ab09235207be81c09c4f8401d73abdc69c33620a750b798346bef14d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba8dd700ab09235207be81c09c4f8401d73abdc69c33620a750b798346bef14d->enter($__internal_ba8dd700ab09235207be81c09c4f8401d73abdc69c33620a750b798346bef14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_82353b9a73ca017f4172d248c7f5d474376f3cf161acf893cbd8f72b64842d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82353b9a73ca017f4172d248c7f5d474376f3cf161acf893cbd8f72b64842d7d->enter($__internal_82353b9a73ca017f4172d248c7f5d474376f3cf161acf893cbd8f72b64842d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_82353b9a73ca017f4172d248c7f5d474376f3cf161acf893cbd8f72b64842d7d->leave($__internal_82353b9a73ca017f4172d248c7f5d474376f3cf161acf893cbd8f72b64842d7d_prof);

        
        $__internal_ba8dd700ab09235207be81c09c4f8401d73abdc69c33620a750b798346bef14d->leave($__internal_ba8dd700ab09235207be81c09c4f8401d73abdc69c33620a750b798346bef14d_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\GSB\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
