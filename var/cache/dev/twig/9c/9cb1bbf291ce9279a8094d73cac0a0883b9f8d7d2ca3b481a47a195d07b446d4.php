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
        $__internal_23a54c766a56d1732f7f3e3fbeaf4db5f39bbe846fcd8222d85d634f7a182195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23a54c766a56d1732f7f3e3fbeaf4db5f39bbe846fcd8222d85d634f7a182195->enter($__internal_23a54c766a56d1732f7f3e3fbeaf4db5f39bbe846fcd8222d85d634f7a182195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b5031314fc1d2b2f56c85ebe51b51044b8e6012c7df4919cb8f0b958ab26da38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5031314fc1d2b2f56c85ebe51b51044b8e6012c7df4919cb8f0b958ab26da38->enter($__internal_b5031314fc1d2b2f56c85ebe51b51044b8e6012c7df4919cb8f0b958ab26da38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23a54c766a56d1732f7f3e3fbeaf4db5f39bbe846fcd8222d85d634f7a182195->leave($__internal_23a54c766a56d1732f7f3e3fbeaf4db5f39bbe846fcd8222d85d634f7a182195_prof);

        
        $__internal_b5031314fc1d2b2f56c85ebe51b51044b8e6012c7df4919cb8f0b958ab26da38->leave($__internal_b5031314fc1d2b2f56c85ebe51b51044b8e6012c7df4919cb8f0b958ab26da38_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cee4a7042649b06090eb5c59acf99ee0cfb3f7da22f1ce3d8a9a77d571ad3ee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee4a7042649b06090eb5c59acf99ee0cfb3f7da22f1ce3d8a9a77d571ad3ee4->enter($__internal_cee4a7042649b06090eb5c59acf99ee0cfb3f7da22f1ce3d8a9a77d571ad3ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f0d773d5cf5cbd8465feac98b1b518fff4665807f930bafc230616e3e497bf0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d773d5cf5cbd8465feac98b1b518fff4665807f930bafc230616e3e497bf0f->enter($__internal_f0d773d5cf5cbd8465feac98b1b518fff4665807f930bafc230616e3e497bf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_f0d773d5cf5cbd8465feac98b1b518fff4665807f930bafc230616e3e497bf0f->leave($__internal_f0d773d5cf5cbd8465feac98b1b518fff4665807f930bafc230616e3e497bf0f_prof);

        
        $__internal_cee4a7042649b06090eb5c59acf99ee0cfb3f7da22f1ce3d8a9a77d571ad3ee4->leave($__internal_cee4a7042649b06090eb5c59acf99ee0cfb3f7da22f1ce3d8a9a77d571ad3ee4_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\GSB-Visiteur\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
