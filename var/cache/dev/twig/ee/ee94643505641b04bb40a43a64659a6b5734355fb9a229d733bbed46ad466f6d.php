<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_60c537b8ffdef8e299aa7482b38a4055d750deb31b8d95cc5e436fd21da647f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@FOSUser/Security/login_content.html.twig", 1);
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
        $__internal_6de5be93f81ab633ceead4a2e74a62df4c2b84af656884763137b94664f4dcb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6de5be93f81ab633ceead4a2e74a62df4c2b84af656884763137b94664f4dcb0->enter($__internal_6de5be93f81ab633ceead4a2e74a62df4c2b84af656884763137b94664f4dcb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_e5a987feb90c8afc710d0637326716b0eda56e315a21c0c616e22244e9406ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a987feb90c8afc710d0637326716b0eda56e315a21c0c616e22244e9406ce0->enter($__internal_e5a987feb90c8afc710d0637326716b0eda56e315a21c0c616e22244e9406ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6de5be93f81ab633ceead4a2e74a62df4c2b84af656884763137b94664f4dcb0->leave($__internal_6de5be93f81ab633ceead4a2e74a62df4c2b84af656884763137b94664f4dcb0_prof);

        
        $__internal_e5a987feb90c8afc710d0637326716b0eda56e315a21c0c616e22244e9406ce0->leave($__internal_e5a987feb90c8afc710d0637326716b0eda56e315a21c0c616e22244e9406ce0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e18c2e7cadbf86dbacf1d647a7e9afcceff7d94034b063f6ba0f412a7a9c0c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e18c2e7cadbf86dbacf1d647a7e9afcceff7d94034b063f6ba0f412a7a9c0c82->enter($__internal_e18c2e7cadbf86dbacf1d647a7e9afcceff7d94034b063f6ba0f412a7a9c0c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f39f80123fa7742a7e25a844cab07af041ca2d77a5b28e6bd76147eebefce31d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39f80123fa7742a7e25a844cab07af041ca2d77a5b28e6bd76147eebefce31d->enter($__internal_f39f80123fa7742a7e25a844cab07af041ca2d77a5b28e6bd76147eebefce31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <center>
        <div class=\"container\">
            <form action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                <h3>RV-VISITEUR</h3><br/>
                ";
        // line 8
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 9
            echo "                    <div class=\"alert alert-danger\" role=\"alert\" >";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Identifiant ou mot de passe invalide.", $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 11
        echo "                ";
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 12
            echo "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                ";
        }
        // line 14
        echo "                <div class=\"col-md-6 mb-3\">
                    <label for=\"username\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Identifiant"), "html", null, true);
        echo "</label><br/>
                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" />
                </div><br/>
                <div class=\"col-md-6 mb-3\">
                    <label for=\"password\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mot de passe"), "html", null, true);
        echo "</label><br/>
                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
                </div><br/>
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Se rappeler de moi"), "html", null, true);
        echo "</label><br/>

                <input type=\"submit\" class=\"btn btn-outline-success\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Connexion"), "html", null, true);
        echo "\" />
            </form><br/>
            <a href=\"/\" class=\"btn btn-outline-dark\">Retour</a>
        </div>
    </center>
";
        
        $__internal_f39f80123fa7742a7e25a844cab07af041ca2d77a5b28e6bd76147eebefce31d->leave($__internal_f39f80123fa7742a7e25a844cab07af041ca2d77a5b28e6bd76147eebefce31d_prof);

        
        $__internal_e18c2e7cadbf86dbacf1d647a7e9afcceff7d94034b063f6ba0f412a7a9c0c82->leave($__internal_e18c2e7cadbf86dbacf1d647a7e9afcceff7d94034b063f6ba0f412a7a9c0c82_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 25,  95 => 23,  88 => 19,  82 => 16,  78 => 15,  75 => 14,  69 => 12,  66 => 11,  60 => 9,  58 => 8,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block body %}
    <center>
        <div class=\"container\">
            <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                <h3>RV-VISITEUR</h3><br/>
                {% if error %}
                    <div class=\"alert alert-danger\" role=\"alert\" >{{ \"Identifiant ou mot de passe invalide.\"|trans(error.messageData, 'security') }}</div>
                {% endif %}
                {% if csrf_token %}
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                {% endif %}
                <div class=\"col-md-6 mb-3\">
                    <label for=\"username\">{{ 'Identifiant'|trans }}</label><br/>
                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" />
                </div><br/>
                <div class=\"col-md-6 mb-3\">
                    <label for=\"password\">{{ 'Mot de passe'|trans }}</label><br/>
                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
                </div><br/>
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">{{ 'Se rappeler de moi'|trans }}</label><br/>

                <input type=\"submit\" class=\"btn btn-outline-success\" id=\"_submit\" name=\"_submit\" value=\"{{ 'Connexion'|trans }}\" />
            </form><br/>
            <a href=\"/\" class=\"btn btn-outline-dark\">Retour</a>
        </div>
    </center>
{% endblock %}
", "@FOSUser/Security/login_content.html.twig", "C:\\wamp64\\www\\GSB-Visiteur\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login_content.html.twig");
    }
}
