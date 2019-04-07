<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_bc4c9243db69412244d64c490fd89be6335edb5e68927e20afa9ca38e1eea475 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c03338db7959077c42df67ed45ba7e297e0dfc534aa3142b8d8b60f2c2e4f10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c03338db7959077c42df67ed45ba7e297e0dfc534aa3142b8d8b60f2c2e4f10->enter($__internal_3c03338db7959077c42df67ed45ba7e297e0dfc534aa3142b8d8b60f2c2e4f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_456279a53023b071ca9545d976422120850ed0da5a788144d68e4e2dbb6e3c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456279a53023b071ca9545d976422120850ed0da5a788144d68e4e2dbb6e3c20->enter($__internal_456279a53023b071ca9545d976422120850ed0da5a788144d68e4e2dbb6e3c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c03338db7959077c42df67ed45ba7e297e0dfc534aa3142b8d8b60f2c2e4f10->leave($__internal_3c03338db7959077c42df67ed45ba7e297e0dfc534aa3142b8d8b60f2c2e4f10_prof);

        
        $__internal_456279a53023b071ca9545d976422120850ed0da5a788144d68e4e2dbb6e3c20->leave($__internal_456279a53023b071ca9545d976422120850ed0da5a788144d68e4e2dbb6e3c20_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5df184c0be75337db7220d5d8bc0adb28a6084b89dbc9f4c0f6c426cb69d44af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5df184c0be75337db7220d5d8bc0adb28a6084b89dbc9f4c0f6c426cb69d44af->enter($__internal_5df184c0be75337db7220d5d8bc0adb28a6084b89dbc9f4c0f6c426cb69d44af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6370a5b67afc7fb2cc84b50f9f77da01cbd7a644fbb8884830ffaa6be97fbd2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6370a5b67afc7fb2cc84b50f9f77da01cbd7a644fbb8884830ffaa6be97fbd2d->enter($__internal_6370a5b67afc7fb2cc84b50f9f77da01cbd7a644fbb8884830ffaa6be97fbd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_6370a5b67afc7fb2cc84b50f9f77da01cbd7a644fbb8884830ffaa6be97fbd2d->leave($__internal_6370a5b67afc7fb2cc84b50f9f77da01cbd7a644fbb8884830ffaa6be97fbd2d_prof);

        
        $__internal_5df184c0be75337db7220d5d8bc0adb28a6084b89dbc9f4c0f6c426cb69d44af->leave($__internal_5df184c0be75337db7220d5d8bc0adb28a6084b89dbc9f4c0f6c426cb69d44af_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\GSB\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
