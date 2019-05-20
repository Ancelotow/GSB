<?php

/* GSBVisiteurBundle:Etat:index.html.twig */
class __TwigTemplate_2669980366c02edad94e0365c74a4b31240cf62e0ddb6abdd28748a3d5b52d4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Visiteur:base.html.twig", "GSBVisiteurBundle:Etat:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Visiteur:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb2f0e1fa6cfa845aa494767013ad3bdf42185bcc17620faa6c2f2426a0a009f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb2f0e1fa6cfa845aa494767013ad3bdf42185bcc17620faa6c2f2426a0a009f->enter($__internal_cb2f0e1fa6cfa845aa494767013ad3bdf42185bcc17620faa6c2f2426a0a009f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Etat:index.html.twig"));

        $__internal_5dde57f53118ad44c13ab8354f12d17f1fa9a0a32659e0b4024e62e2b2527516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dde57f53118ad44c13ab8354f12d17f1fa9a0a32659e0b4024e62e2b2527516->enter($__internal_5dde57f53118ad44c13ab8354f12d17f1fa9a0a32659e0b4024e62e2b2527516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Etat:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb2f0e1fa6cfa845aa494767013ad3bdf42185bcc17620faa6c2f2426a0a009f->leave($__internal_cb2f0e1fa6cfa845aa494767013ad3bdf42185bcc17620faa6c2f2426a0a009f_prof);

        
        $__internal_5dde57f53118ad44c13ab8354f12d17f1fa9a0a32659e0b4024e62e2b2527516->leave($__internal_5dde57f53118ad44c13ab8354f12d17f1fa9a0a32659e0b4024e62e2b2527516_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd6df0d1a3805a6597716ec9653063050ec46b010c4293570cf33b33b3f4c046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd6df0d1a3805a6597716ec9653063050ec46b010c4293570cf33b33b3f4c046->enter($__internal_dd6df0d1a3805a6597716ec9653063050ec46b010c4293570cf33b33b3f4c046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bca188c28ef7479621f33f3f16c83d9e63f35961793201db23e10cd5bf09f5b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca188c28ef7479621f33f3f16c83d9e63f35961793201db23e10cd5bf09f5b0->enter($__internal_bca188c28ef7479621f33f3f16c83d9e63f35961793201db23e10cd5bf09f5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <center>
        <div class=\"container\">
            <h3>Liste des Etats</h3><br/>
            <table class=\"table table-dark table-hover\">
                <tr>
                    <th><center>Identifiant</center></th>
                    <th><center>Libellé</center></th>
                </tr>
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["etats"] ?? $this->getContext($context, "etats")));
        foreach ($context['_seq'] as $context["_key"] => $context["unEtat"]) {
            // line 13
            echo "                    <tr>
                        <td><center>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["unEtat"], "id", array()), "html", null, true);
            echo "</center></td>
                        <td><center>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["unEtat"], "libelle", array()), "html", null, true);
            echo "</center></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unEtat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </table><br/>
        </div>
    </center>

";
        
        $__internal_bca188c28ef7479621f33f3f16c83d9e63f35961793201db23e10cd5bf09f5b0->leave($__internal_bca188c28ef7479621f33f3f16c83d9e63f35961793201db23e10cd5bf09f5b0_prof);

        
        $__internal_dd6df0d1a3805a6597716ec9653063050ec46b010c4293570cf33b33b3f4c046->leave($__internal_dd6df0d1a3805a6597716ec9653063050ec46b010c4293570cf33b33b3f4c046_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Etat:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 18,  70 => 15,  66 => 14,  63 => 13,  59 => 12,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":Visiteur:base.html.twig\" %}

{% block body %}
    <center>
        <div class=\"container\">
            <h3>Liste des Etats</h3><br/>
            <table class=\"table table-dark table-hover\">
                <tr>
                    <th><center>Identifiant</center></th>
                    <th><center>Libellé</center></th>
                </tr>
                {% for unEtat in etats %}
                    <tr>
                        <td><center>{{ unEtat.id }}</center></td>
                        <td><center>{{ unEtat.libelle }}</center></td>
                    </tr>
                {% endfor %}
            </table><br/>
        </div>
    </center>

{% endblock %}", "GSBVisiteurBundle:Etat:index.html.twig", "C:\\wamp64\\www\\GSB-Visiteur\\src\\GSB\\VisiteurBundle/Resources/views/Etat/index.html.twig");
    }
}
