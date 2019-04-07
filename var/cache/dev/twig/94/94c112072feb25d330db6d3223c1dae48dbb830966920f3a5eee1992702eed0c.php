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
        $__internal_48a6c6ebbf92be56a46ddc13c5063a08ea9aaaccf3b8e17ff096c75b1856dd32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a6c6ebbf92be56a46ddc13c5063a08ea9aaaccf3b8e17ff096c75b1856dd32->enter($__internal_48a6c6ebbf92be56a46ddc13c5063a08ea9aaaccf3b8e17ff096c75b1856dd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Etat:index.html.twig"));

        $__internal_56efd5bb132995a098d6e27fc75072eb3bc17c44c46addf00885f13ad75feb66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56efd5bb132995a098d6e27fc75072eb3bc17c44c46addf00885f13ad75feb66->enter($__internal_56efd5bb132995a098d6e27fc75072eb3bc17c44c46addf00885f13ad75feb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Etat:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48a6c6ebbf92be56a46ddc13c5063a08ea9aaaccf3b8e17ff096c75b1856dd32->leave($__internal_48a6c6ebbf92be56a46ddc13c5063a08ea9aaaccf3b8e17ff096c75b1856dd32_prof);

        
        $__internal_56efd5bb132995a098d6e27fc75072eb3bc17c44c46addf00885f13ad75feb66->leave($__internal_56efd5bb132995a098d6e27fc75072eb3bc17c44c46addf00885f13ad75feb66_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f172ef74d5710c47a41560f433b4a26ed570a725311753aa037efa01838fc273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f172ef74d5710c47a41560f433b4a26ed570a725311753aa037efa01838fc273->enter($__internal_f172ef74d5710c47a41560f433b4a26ed570a725311753aa037efa01838fc273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_549affa803533a32fbde29ddb0e439b15ae81c8c40cb3c204847090f6c5826c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549affa803533a32fbde29ddb0e439b15ae81c8c40cb3c204847090f6c5826c1->enter($__internal_549affa803533a32fbde29ddb0e439b15ae81c8c40cb3c204847090f6c5826c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_549affa803533a32fbde29ddb0e439b15ae81c8c40cb3c204847090f6c5826c1->leave($__internal_549affa803533a32fbde29ddb0e439b15ae81c8c40cb3c204847090f6c5826c1_prof);

        
        $__internal_f172ef74d5710c47a41560f433b4a26ed570a725311753aa037efa01838fc273->leave($__internal_f172ef74d5710c47a41560f433b4a26ed570a725311753aa037efa01838fc273_prof);

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

{% endblock %}", "GSBVisiteurBundle:Etat:index.html.twig", "C:\\wamp64\\www\\GSB\\src\\GSB\\VisiteurBundle/Resources/views/Etat/index.html.twig");
    }
}
