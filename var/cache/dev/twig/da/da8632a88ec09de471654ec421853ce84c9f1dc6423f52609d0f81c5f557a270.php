<?php

/* GSBVisiteurBundle:FicheFrais:index.html.twig */
class __TwigTemplate_9d92f95ce0d065dfd6e91cfa9605f42279b0801106527a152388f07d7c0b0fc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Visiteur:base.html.twig", "GSBVisiteurBundle:FicheFrais:index.html.twig", 1);
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
        $__internal_434d556a8a60170ee08f6c7668010822e64863cb5add3b30c3b18fb0074fb799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_434d556a8a60170ee08f6c7668010822e64863cb5add3b30c3b18fb0074fb799->enter($__internal_434d556a8a60170ee08f6c7668010822e64863cb5add3b30c3b18fb0074fb799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FicheFrais:index.html.twig"));

        $__internal_610a8d127dcd1a3a993079d3523d7392b5a45b4312c293da29befbaf2df70e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_610a8d127dcd1a3a993079d3523d7392b5a45b4312c293da29befbaf2df70e40->enter($__internal_610a8d127dcd1a3a993079d3523d7392b5a45b4312c293da29befbaf2df70e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FicheFrais:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_434d556a8a60170ee08f6c7668010822e64863cb5add3b30c3b18fb0074fb799->leave($__internal_434d556a8a60170ee08f6c7668010822e64863cb5add3b30c3b18fb0074fb799_prof);

        
        $__internal_610a8d127dcd1a3a993079d3523d7392b5a45b4312c293da29befbaf2df70e40->leave($__internal_610a8d127dcd1a3a993079d3523d7392b5a45b4312c293da29befbaf2df70e40_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_acfe5eb1ba86f31f0375cc63918fde6f1f729e4feec306d0c800f1c3673d38c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acfe5eb1ba86f31f0375cc63918fde6f1f729e4feec306d0c800f1c3673d38c6->enter($__internal_acfe5eb1ba86f31f0375cc63918fde6f1f729e4feec306d0c800f1c3673d38c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5cc61f80e02c7b791270212727de14f01986918da93c7a09aaf70edc4e68a175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cc61f80e02c7b791270212727de14f01986918da93c7a09aaf70edc4e68a175->enter($__internal_5cc61f80e02c7b791270212727de14f01986918da93c7a09aaf70edc4e68a175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <center>
        <div class=\"container\">
            <h3>Liste des Fiche Frais</h3><br/>
            <table class=\"table table-dark table-hover\">
                <tr>
                    <th>Mois</th>
                    <th>Nombre de Justificatifs</th>
                    <th>Montant valide</th>
                    <th>Etat</th>
                    <th>Date de la Notifications</th>
                    <th>Modifier</th>
                </tr>
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ff"] ?? $this->getContext($context, "ff")));
        foreach ($context['_seq'] as $context["_key"] => $context["unFF"]) {
            // line 17
            echo "                    <tr>
                        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute(($context["mois"] ?? $this->getContext($context, "mois")), ($this->getAttribute($context["unFF"], "mois", array()) - 1), array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFF"], "nbJustificatifs", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFF"], "montantValide", array()), "html", null, true);
            echo " €</td>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFF"], "LeEtat", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["unFF"], "dateNotif", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td><a href=\"/visiteur/fiche_frais/modifier/";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFF"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">MODIFIER</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFF'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </table><br/>
            <a href=\"/visiteur/fiche_frais/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVELLE<br/>FICHE FRAIS</a><br/>
        </div>
    </center>

";
        
        $__internal_5cc61f80e02c7b791270212727de14f01986918da93c7a09aaf70edc4e68a175->leave($__internal_5cc61f80e02c7b791270212727de14f01986918da93c7a09aaf70edc4e68a175_prof);

        
        $__internal_acfe5eb1ba86f31f0375cc63918fde6f1f729e4feec306d0c800f1c3673d38c6->leave($__internal_acfe5eb1ba86f31f0375cc63918fde6f1f729e4feec306d0c800f1c3673d38c6_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:FicheFrais:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 26,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
            <h3>Liste des Fiche Frais</h3><br/>
            <table class=\"table table-dark table-hover\">
                <tr>
                    <th>Mois</th>
                    <th>Nombre de Justificatifs</th>
                    <th>Montant valide</th>
                    <th>Etat</th>
                    <th>Date de la Notifications</th>
                    <th>Modifier</th>
                </tr>
                {% for unFF in ff %}
                    <tr>
                        <td>{{ mois[unFF.mois - 1] }}</td>
                        <td>{{ unFF.nbJustificatifs }}</td>
                        <td>{{ unFF.montantValide }} €</td>
                        <td>{{ unFF.LeEtat }}</td>
                        <td>{{ unFF.dateNotif|date('d/m/Y') }}</td>
                        <td><a href=\"/visiteur/fiche_frais/modifier/{{ unFF.id }}\" class=\"btn btn-outline-primary\">MODIFIER</a></td>
                    </tr>
                {% endfor %}
            </table><br/>
            <a href=\"/visiteur/fiche_frais/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVELLE<br/>FICHE FRAIS</a><br/>
        </div>
    </center>

{% endblock %}", "GSBVisiteurBundle:FicheFrais:index.html.twig", "C:\\wamp64\\www\\GSB\\src\\GSB\\VisiteurBundle/Resources/views/FicheFrais/index.html.twig");
    }
}
