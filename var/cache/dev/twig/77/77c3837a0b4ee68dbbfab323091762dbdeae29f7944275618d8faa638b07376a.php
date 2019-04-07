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
        $__internal_1edbbe711cc504c62f651bca46a1593507ca18ca3257c993ade7112915bac3be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1edbbe711cc504c62f651bca46a1593507ca18ca3257c993ade7112915bac3be->enter($__internal_1edbbe711cc504c62f651bca46a1593507ca18ca3257c993ade7112915bac3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_cf012ee0ab6eb2f8cc08d4d9e1b6fc9291c077b6305f9fa6166e98fda9878c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf012ee0ab6eb2f8cc08d4d9e1b6fc9291c077b6305f9fa6166e98fda9878c46->enter($__internal_cf012ee0ab6eb2f8cc08d4d9e1b6fc9291c077b6305f9fa6166e98fda9878c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_1edbbe711cc504c62f651bca46a1593507ca18ca3257c993ade7112915bac3be->leave($__internal_1edbbe711cc504c62f651bca46a1593507ca18ca3257c993ade7112915bac3be_prof);

        
        $__internal_cf012ee0ab6eb2f8cc08d4d9e1b6fc9291c077b6305f9fa6166e98fda9878c46->leave($__internal_cf012ee0ab6eb2f8cc08d4d9e1b6fc9291c077b6305f9fa6166e98fda9878c46_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_15e05f58a9773937eb5af5147468a8922bffce4309f74c7b168357f0f8e9b247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15e05f58a9773937eb5af5147468a8922bffce4309f74c7b168357f0f8e9b247->enter($__internal_15e05f58a9773937eb5af5147468a8922bffce4309f74c7b168357f0f8e9b247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8c72649698d9dffe7960da85554562f7fe742b10f949307f2ab771439368e396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c72649698d9dffe7960da85554562f7fe742b10f949307f2ab771439368e396->enter($__internal_8c72649698d9dffe7960da85554562f7fe742b10f949307f2ab771439368e396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_8c72649698d9dffe7960da85554562f7fe742b10f949307f2ab771439368e396->leave($__internal_8c72649698d9dffe7960da85554562f7fe742b10f949307f2ab771439368e396_prof);

        
        $__internal_15e05f58a9773937eb5af5147468a8922bffce4309f74c7b168357f0f8e9b247->leave($__internal_15e05f58a9773937eb5af5147468a8922bffce4309f74c7b168357f0f8e9b247_prof);

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
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\GSB\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
