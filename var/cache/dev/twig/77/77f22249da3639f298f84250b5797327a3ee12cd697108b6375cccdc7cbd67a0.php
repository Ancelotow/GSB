<?php

/* GSBAccueilBundle:Default:comptable.html.twig */
class __TwigTemplate_2360551e7a14581974e3351d59a6eb732298098678f86e04af2d12cd3cf8bb5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GSBAccueilBundle:Default:comptable.html.twig", 1);
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
        $__internal_1ccef477a4b8de3ba617050d2a0d5f05f45349b9c0ee6294e4bc433f228ad001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ccef477a4b8de3ba617050d2a0d5f05f45349b9c0ee6294e4bc433f228ad001->enter($__internal_1ccef477a4b8de3ba617050d2a0d5f05f45349b9c0ee6294e4bc433f228ad001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBAccueilBundle:Default:comptable.html.twig"));

        $__internal_17d99ddadebef237e1b50d6a50b0bd7f215e92c96bba0d31a59190922aa2fb8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d99ddadebef237e1b50d6a50b0bd7f215e92c96bba0d31a59190922aa2fb8e->enter($__internal_17d99ddadebef237e1b50d6a50b0bd7f215e92c96bba0d31a59190922aa2fb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBAccueilBundle:Default:comptable.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ccef477a4b8de3ba617050d2a0d5f05f45349b9c0ee6294e4bc433f228ad001->leave($__internal_1ccef477a4b8de3ba617050d2a0d5f05f45349b9c0ee6294e4bc433f228ad001_prof);

        
        $__internal_17d99ddadebef237e1b50d6a50b0bd7f215e92c96bba0d31a59190922aa2fb8e->leave($__internal_17d99ddadebef237e1b50d6a50b0bd7f215e92c96bba0d31a59190922aa2fb8e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_98cfc5a772f2d854eebc2fa8e1e67c382fe22ec7b5778658a554536b77cc947c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98cfc5a772f2d854eebc2fa8e1e67c382fe22ec7b5778658a554536b77cc947c->enter($__internal_98cfc5a772f2d854eebc2fa8e1e67c382fe22ec7b5778658a554536b77cc947c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f9fdb1a4987a2bf13389c3f8e1cf7a2462c75db748df9a74ef9b63ddf16b9a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9fdb1a4987a2bf13389c3f8e1cf7a2462c75db748df9a74ef9b63ddf16b9a11->enter($__internal_f9fdb1a4987a2bf13389c3f8e1cf7a2462c75db748df9a74ef9b63ddf16b9a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <center>
        <h3>RV-COMPTABLE</h3><br/>
        <p>Cette section est indisponible pour le moment.</p><br/>
        <a href=\"/\" class=\"btn btn-outline-dark\">Retour</a>
    </center>
";
        
        $__internal_f9fdb1a4987a2bf13389c3f8e1cf7a2462c75db748df9a74ef9b63ddf16b9a11->leave($__internal_f9fdb1a4987a2bf13389c3f8e1cf7a2462c75db748df9a74ef9b63ddf16b9a11_prof);

        
        $__internal_98cfc5a772f2d854eebc2fa8e1e67c382fe22ec7b5778658a554536b77cc947c->leave($__internal_98cfc5a772f2d854eebc2fa8e1e67c382fe22ec7b5778658a554536b77cc947c_prof);

    }

    public function getTemplateName()
    {
        return "GSBAccueilBundle:Default:comptable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends\"::base.html.twig\" %}

{% block body %}
    <center>
        <h3>RV-COMPTABLE</h3><br/>
        <p>Cette section est indisponible pour le moment.</p><br/>
        <a href=\"/\" class=\"btn btn-outline-dark\">Retour</a>
    </center>
{% endblock %}", "GSBAccueilBundle:Default:comptable.html.twig", "C:\\wamp64\\www\\GSB\\src\\GSB\\AccueilBundle/Resources/views/Default/comptable.html.twig");
    }
}
