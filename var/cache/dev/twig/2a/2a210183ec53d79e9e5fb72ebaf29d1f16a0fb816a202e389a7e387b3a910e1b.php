<?php

/* GSBComptableBundle:Default:index.html.twig */
class __TwigTemplate_8fe4de0f05bd4e3457b6c092ff798de99156c7bcc851d30eab63a193f8730757 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Comptable:base.html.twig", "GSBComptableBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Comptable:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4447c23d5ad20458164ce70aea1f598066ed30f30124cd55d16e7229a9d60ca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4447c23d5ad20458164ce70aea1f598066ed30f30124cd55d16e7229a9d60ca6->enter($__internal_4447c23d5ad20458164ce70aea1f598066ed30f30124cd55d16e7229a9d60ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBComptableBundle:Default:index.html.twig"));

        $__internal_804c3c9e73cc9f4e2965f07d1b3217934393b86de6eb216a93eaa0be5994ef67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804c3c9e73cc9f4e2965f07d1b3217934393b86de6eb216a93eaa0be5994ef67->enter($__internal_804c3c9e73cc9f4e2965f07d1b3217934393b86de6eb216a93eaa0be5994ef67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBComptableBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4447c23d5ad20458164ce70aea1f598066ed30f30124cd55d16e7229a9d60ca6->leave($__internal_4447c23d5ad20458164ce70aea1f598066ed30f30124cd55d16e7229a9d60ca6_prof);

        
        $__internal_804c3c9e73cc9f4e2965f07d1b3217934393b86de6eb216a93eaa0be5994ef67->leave($__internal_804c3c9e73cc9f4e2965f07d1b3217934393b86de6eb216a93eaa0be5994ef67_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d82978fff3b39b3ff62045d95323147b59fce28b20a213e7a9d62fc250340b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d82978fff3b39b3ff62045d95323147b59fce28b20a213e7a9d62fc250340b6->enter($__internal_7d82978fff3b39b3ff62045d95323147b59fce28b20a213e7a9d62fc250340b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba9b86bbe528b65006cc1ba9f55b1b7e94dd0fd55030c60f6656610347dbe58f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba9b86bbe528b65006cc1ba9f55b1b7e94dd0fd55030c60f6656610347dbe58f->enter($__internal_ba9b86bbe528b65006cc1ba9f55b1b7e94dd0fd55030c60f6656610347dbe58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <center>
        <h3>Bienvenue sur votre espace Comptable ";
        // line 5
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "nomComptable"), "method")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "prenomComptable"), "method"), "html", null, true);
        echo "</h3>
    </center>
";
        
        $__internal_ba9b86bbe528b65006cc1ba9f55b1b7e94dd0fd55030c60f6656610347dbe58f->leave($__internal_ba9b86bbe528b65006cc1ba9f55b1b7e94dd0fd55030c60f6656610347dbe58f_prof);

        
        $__internal_7d82978fff3b39b3ff62045d95323147b59fce28b20a213e7a9d62fc250340b6->leave($__internal_7d82978fff3b39b3ff62045d95323147b59fce28b20a213e7a9d62fc250340b6_prof);

    }

    public function getTemplateName()
    {
        return "GSBComptableBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends':Comptable:base.html.twig' %}

{% block body %}
    <center>
        <h3>Bienvenue sur votre espace Comptable {{ app.session.get('nomComptable')|upper }} {{ app.session.get('prenomComptable') }}</h3>
    </center>
{% endblock %}", "GSBComptableBundle:Default:index.html.twig", "C:\\wamp64\\www\\GSB\\src\\GSB\\ComptableBundle/Resources/views/Default/index.html.twig");
    }
}
