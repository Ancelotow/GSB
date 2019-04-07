<?php

/* GSBVisiteurBundle:FraisForfait:index.html.twig */
class __TwigTemplate_40e57de5a8eddeef5e55c14f1fa2338c5b89ba434da45a2a785a4703d52351dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Visiteur:base.html.twig", "GSBVisiteurBundle:FraisForfait:index.html.twig", 1);
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
        $__internal_f07f7a40c67737567244dbbbb4c496afbf29c16a350e5786a6d60740cdaef849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f07f7a40c67737567244dbbbb4c496afbf29c16a350e5786a6d60740cdaef849->enter($__internal_f07f7a40c67737567244dbbbb4c496afbf29c16a350e5786a6d60740cdaef849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FraisForfait:index.html.twig"));

        $__internal_2444fd621bc7738a0443d9707e7fd1b538f8cd8218993f071ab69a9d880d29fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2444fd621bc7738a0443d9707e7fd1b538f8cd8218993f071ab69a9d880d29fd->enter($__internal_2444fd621bc7738a0443d9707e7fd1b538f8cd8218993f071ab69a9d880d29fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FraisForfait:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f07f7a40c67737567244dbbbb4c496afbf29c16a350e5786a6d60740cdaef849->leave($__internal_f07f7a40c67737567244dbbbb4c496afbf29c16a350e5786a6d60740cdaef849_prof);

        
        $__internal_2444fd621bc7738a0443d9707e7fd1b538f8cd8218993f071ab69a9d880d29fd->leave($__internal_2444fd621bc7738a0443d9707e7fd1b538f8cd8218993f071ab69a9d880d29fd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ede53ea7d582ccbc662e08dee26b46141cb8df583969f564dec3a7c35d547e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ede53ea7d582ccbc662e08dee26b46141cb8df583969f564dec3a7c35d547e4->enter($__internal_8ede53ea7d582ccbc662e08dee26b46141cb8df583969f564dec3a7c35d547e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce9be09b0cffbcd8eeae89488e54895c4809d6a0634a61c5c12b554ab2466935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce9be09b0cffbcd8eeae89488e54895c4809d6a0634a61c5c12b554ab2466935->enter($__internal_ce9be09b0cffbcd8eeae89488e54895c4809d6a0634a61c5c12b554ab2466935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <center>
        <div class=\"container\">
            <h3>Liste des Frais Forfaits</h3><br/>
            <table class=\"table table-dark table-hover\">
                <tr>
                    <th>Libelle</th>
                    <th>Montant</th>
                    <th>Modifier</th>
                </tr>
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ff"] ?? $this->getContext($context, "ff")));
        foreach ($context['_seq'] as $context["_key"] => $context["unFF"]) {
            // line 14
            echo "                    <tr>
                        <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFF"], "libelle", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFF"], "montant", array()), "html", null, true);
            echo " €</td>
                        <td><a href=\"/visiteur/frais_forfait/modifier/";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFF"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">MODIFIER</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFF'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            </table><br/>
            <a href=\"/visiteur/frais_forfait/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVELLE<br/>FRAIS FORFAIT</a><br/>
        </div>
    </center>

";
        
        $__internal_ce9be09b0cffbcd8eeae89488e54895c4809d6a0634a61c5c12b554ab2466935->leave($__internal_ce9be09b0cffbcd8eeae89488e54895c4809d6a0634a61c5c12b554ab2466935_prof);

        
        $__internal_8ede53ea7d582ccbc662e08dee26b46141cb8df583969f564dec3a7c35d547e4->leave($__internal_8ede53ea7d582ccbc662e08dee26b46141cb8df583969f564dec3a7c35d547e4_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:FraisForfait:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  75 => 17,  71 => 16,  67 => 15,  64 => 14,  60 => 13,  49 => 4,  40 => 3,  11 => 1,);
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
            <h3>Liste des Frais Forfaits</h3><br/>
            <table class=\"table table-dark table-hover\">
                <tr>
                    <th>Libelle</th>
                    <th>Montant</th>
                    <th>Modifier</th>
                </tr>
                {% for unFF in ff %}
                    <tr>
                        <td>{{ unFF.libelle }}</td>
                        <td>{{ unFF.montant }} €</td>
                        <td><a href=\"/visiteur/frais_forfait/modifier/{{ unFF.id }}\" class=\"btn btn-outline-primary\">MODIFIER</a></td>
                    </tr>
                {% endfor %}
            </table><br/>
            <a href=\"/visiteur/frais_forfait/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVELLE<br/>FRAIS FORFAIT</a><br/>
        </div>
    </center>

{% endblock %}", "GSBVisiteurBundle:FraisForfait:index.html.twig", "C:\\wamp64\\www\\GSB\\src\\GSB\\VisiteurBundle/Resources/views/FraisForfait/index.html.twig");
    }
}
