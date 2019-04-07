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
        $__internal_67a7a6782cf6fac4a668f23e5f8cf2d34df18af331bc398cf414f0a3c05acc77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67a7a6782cf6fac4a668f23e5f8cf2d34df18af331bc398cf414f0a3c05acc77->enter($__internal_67a7a6782cf6fac4a668f23e5f8cf2d34df18af331bc398cf414f0a3c05acc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3023f49ab465555eb1ffb4e292c22cc0c385b478ef1cab44cd1b771cbdc6161a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3023f49ab465555eb1ffb4e292c22cc0c385b478ef1cab44cd1b771cbdc6161a->enter($__internal_3023f49ab465555eb1ffb4e292c22cc0c385b478ef1cab44cd1b771cbdc6161a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67a7a6782cf6fac4a668f23e5f8cf2d34df18af331bc398cf414f0a3c05acc77->leave($__internal_67a7a6782cf6fac4a668f23e5f8cf2d34df18af331bc398cf414f0a3c05acc77_prof);

        
        $__internal_3023f49ab465555eb1ffb4e292c22cc0c385b478ef1cab44cd1b771cbdc6161a->leave($__internal_3023f49ab465555eb1ffb4e292c22cc0c385b478ef1cab44cd1b771cbdc6161a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fee515783f58451a6bb470c67602c77b875a88d673990ee637ec85f9f90a3752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fee515783f58451a6bb470c67602c77b875a88d673990ee637ec85f9f90a3752->enter($__internal_fee515783f58451a6bb470c67602c77b875a88d673990ee637ec85f9f90a3752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d50e124531742eb123736d12b526350e730205787abe553bdd9ee8a09c9fc9aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d50e124531742eb123736d12b526350e730205787abe553bdd9ee8a09c9fc9aa->enter($__internal_d50e124531742eb123736d12b526350e730205787abe553bdd9ee8a09c9fc9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d50e124531742eb123736d12b526350e730205787abe553bdd9ee8a09c9fc9aa->leave($__internal_d50e124531742eb123736d12b526350e730205787abe553bdd9ee8a09c9fc9aa_prof);

        
        $__internal_fee515783f58451a6bb470c67602c77b875a88d673990ee637ec85f9f90a3752->leave($__internal_fee515783f58451a6bb470c67602c77b875a88d673990ee637ec85f9f90a3752_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7fc20b7e1a519a0e4ae578110c54b301143d68865002acd59ca1faeeb014d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7fc20b7e1a519a0e4ae578110c54b301143d68865002acd59ca1faeeb014d4b->enter($__internal_f7fc20b7e1a519a0e4ae578110c54b301143d68865002acd59ca1faeeb014d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_de01ed0b80135a2d9ae7f40bfc95dda116719458dedc88db98cb3f2b4e9b705d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de01ed0b80135a2d9ae7f40bfc95dda116719458dedc88db98cb3f2b4e9b705d->enter($__internal_de01ed0b80135a2d9ae7f40bfc95dda116719458dedc88db98cb3f2b4e9b705d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_de01ed0b80135a2d9ae7f40bfc95dda116719458dedc88db98cb3f2b4e9b705d->leave($__internal_de01ed0b80135a2d9ae7f40bfc95dda116719458dedc88db98cb3f2b4e9b705d_prof);

        
        $__internal_f7fc20b7e1a519a0e4ae578110c54b301143d68865002acd59ca1faeeb014d4b->leave($__internal_f7fc20b7e1a519a0e4ae578110c54b301143d68865002acd59ca1faeeb014d4b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f15064a7d2d87de2fecd0c877a064fc7bf0acd8d7ed01a3a45bbad6803122821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f15064a7d2d87de2fecd0c877a064fc7bf0acd8d7ed01a3a45bbad6803122821->enter($__internal_f15064a7d2d87de2fecd0c877a064fc7bf0acd8d7ed01a3a45bbad6803122821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41e9df9e92672beb5b9e9ade7599e5eab75511f123cbf4888d699a614046e65a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e9df9e92672beb5b9e9ade7599e5eab75511f123cbf4888d699a614046e65a->enter($__internal_41e9df9e92672beb5b9e9ade7599e5eab75511f123cbf4888d699a614046e65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_41e9df9e92672beb5b9e9ade7599e5eab75511f123cbf4888d699a614046e65a->leave($__internal_41e9df9e92672beb5b9e9ade7599e5eab75511f123cbf4888d699a614046e65a_prof);

        
        $__internal_f15064a7d2d87de2fecd0c877a064fc7bf0acd8d7ed01a3a45bbad6803122821->leave($__internal_f15064a7d2d87de2fecd0c877a064fc7bf0acd8d7ed01a3a45bbad6803122821_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\GSB\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
