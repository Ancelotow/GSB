<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_acc7b1a9aceeff7027fdb0ed55a27af5e255da948a85b73dd887e777557bd646 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d5e055d1ad7b024084572fef79abab122df14b9e70baad504c7fdd27dbb2e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d5e055d1ad7b024084572fef79abab122df14b9e70baad504c7fdd27dbb2e0e->enter($__internal_2d5e055d1ad7b024084572fef79abab122df14b9e70baad504c7fdd27dbb2e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_1f801c1113242f148cf8d55071bd8b80495870bfb794290432068e299ece72fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f801c1113242f148cf8d55071bd8b80495870bfb794290432068e299ece72fd->enter($__internal_1f801c1113242f148cf8d55071bd8b80495870bfb794290432068e299ece72fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_2d5e055d1ad7b024084572fef79abab122df14b9e70baad504c7fdd27dbb2e0e->leave($__internal_2d5e055d1ad7b024084572fef79abab122df14b9e70baad504c7fdd27dbb2e0e_prof);

        
        $__internal_1f801c1113242f148cf8d55071bd8b80495870bfb794290432068e299ece72fd->leave($__internal_1f801c1113242f148cf8d55071bd8b80495870bfb794290432068e299ece72fd_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ed14f0253327308bd3b93b8cc2e7ea619aef44677bd7fcf79104fcc1a1a089f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ed14f0253327308bd3b93b8cc2e7ea619aef44677bd7fcf79104fcc1a1a089f->enter($__internal_6ed14f0253327308bd3b93b8cc2e7ea619aef44677bd7fcf79104fcc1a1a089f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6925d2cf3c809f5741526c602b4d8b02894f872f58f1e2614477ece3cb1d9e32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6925d2cf3c809f5741526c602b4d8b02894f872f58f1e2614477ece3cb1d9e32->enter($__internal_6925d2cf3c809f5741526c602b4d8b02894f872f58f1e2614477ece3cb1d9e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_6925d2cf3c809f5741526c602b4d8b02894f872f58f1e2614477ece3cb1d9e32->leave($__internal_6925d2cf3c809f5741526c602b4d8b02894f872f58f1e2614477ece3cb1d9e32_prof);

        
        $__internal_6ed14f0253327308bd3b93b8cc2e7ea619aef44677bd7fcf79104fcc1a1a089f->leave($__internal_6ed14f0253327308bd3b93b8cc2e7ea619aef44677bd7fcf79104fcc1a1a089f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 4,  29 => 3,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# extends \"@FOSUser/layout.html.twig\" #}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\GSB-Visiteur\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
