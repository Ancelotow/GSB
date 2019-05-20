<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e3e4dc6ab442b32469b218c4247c1cfc6f4289546884d6987d89aa007acf6779 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1597e650d35e8624fda4723086acbe1f4a9667d6a5c3044229276fd065291af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1597e650d35e8624fda4723086acbe1f4a9667d6a5c3044229276fd065291af3->enter($__internal_1597e650d35e8624fda4723086acbe1f4a9667d6a5c3044229276fd065291af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1f975b9109eb6ee89e470eb0c991f004ec0530efeb43058988c1189f38f571da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f975b9109eb6ee89e470eb0c991f004ec0530efeb43058988c1189f38f571da->enter($__internal_1f975b9109eb6ee89e470eb0c991f004ec0530efeb43058988c1189f38f571da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1597e650d35e8624fda4723086acbe1f4a9667d6a5c3044229276fd065291af3->leave($__internal_1597e650d35e8624fda4723086acbe1f4a9667d6a5c3044229276fd065291af3_prof);

        
        $__internal_1f975b9109eb6ee89e470eb0c991f004ec0530efeb43058988c1189f38f571da->leave($__internal_1f975b9109eb6ee89e470eb0c991f004ec0530efeb43058988c1189f38f571da_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c9e50e759d7082131eb8cda51e6e013f463fa0bd287fd156912d2408d12af116 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9e50e759d7082131eb8cda51e6e013f463fa0bd287fd156912d2408d12af116->enter($__internal_c9e50e759d7082131eb8cda51e6e013f463fa0bd287fd156912d2408d12af116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4f7f3dcf5c4e35b7a1cd3dd9c5914b0c812d6786ea762f03e7204bc170cc0a02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f7f3dcf5c4e35b7a1cd3dd9c5914b0c812d6786ea762f03e7204bc170cc0a02->enter($__internal_4f7f3dcf5c4e35b7a1cd3dd9c5914b0c812d6786ea762f03e7204bc170cc0a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_4f7f3dcf5c4e35b7a1cd3dd9c5914b0c812d6786ea762f03e7204bc170cc0a02->leave($__internal_4f7f3dcf5c4e35b7a1cd3dd9c5914b0c812d6786ea762f03e7204bc170cc0a02_prof);

        
        $__internal_c9e50e759d7082131eb8cda51e6e013f463fa0bd287fd156912d2408d12af116->leave($__internal_c9e50e759d7082131eb8cda51e6e013f463fa0bd287fd156912d2408d12af116_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f7c0d93437ee5b1767b4f1f6af628dbd1d50d756e295cadb16867bd1e799a22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f7c0d93437ee5b1767b4f1f6af628dbd1d50d756e295cadb16867bd1e799a22->enter($__internal_7f7c0d93437ee5b1767b4f1f6af628dbd1d50d756e295cadb16867bd1e799a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b2336bf6c132ca8adb6e29c7ef2fe312c173c46c17abe1f33d351625354388ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2336bf6c132ca8adb6e29c7ef2fe312c173c46c17abe1f33d351625354388ed->enter($__internal_b2336bf6c132ca8adb6e29c7ef2fe312c173c46c17abe1f33d351625354388ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b2336bf6c132ca8adb6e29c7ef2fe312c173c46c17abe1f33d351625354388ed->leave($__internal_b2336bf6c132ca8adb6e29c7ef2fe312c173c46c17abe1f33d351625354388ed_prof);

        
        $__internal_7f7c0d93437ee5b1767b4f1f6af628dbd1d50d756e295cadb16867bd1e799a22->leave($__internal_7f7c0d93437ee5b1767b4f1f6af628dbd1d50d756e295cadb16867bd1e799a22_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_18f484ccef1cfa54f2f1c8167795694800a1f116d044025ec0c0f33f5c0028c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18f484ccef1cfa54f2f1c8167795694800a1f116d044025ec0c0f33f5c0028c9->enter($__internal_18f484ccef1cfa54f2f1c8167795694800a1f116d044025ec0c0f33f5c0028c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e812bf7afa34fcc2c1430034b15fe2608e01c353c2dcc2da2d4fcd78e30f053b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e812bf7afa34fcc2c1430034b15fe2608e01c353c2dcc2da2d4fcd78e30f053b->enter($__internal_e812bf7afa34fcc2c1430034b15fe2608e01c353c2dcc2da2d4fcd78e30f053b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e812bf7afa34fcc2c1430034b15fe2608e01c353c2dcc2da2d4fcd78e30f053b->leave($__internal_e812bf7afa34fcc2c1430034b15fe2608e01c353c2dcc2da2d4fcd78e30f053b_prof);

        
        $__internal_18f484ccef1cfa54f2f1c8167795694800a1f116d044025ec0c0f33f5c0028c9->leave($__internal_18f484ccef1cfa54f2f1c8167795694800a1f116d044025ec0c0f33f5c0028c9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\GSB-Visiteur\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
