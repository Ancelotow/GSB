<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_9c91c38dcd246700545dedb78ddfacc191bd7a641090e1b691e6d6313ae12e6a extends Twig_Template
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
        $__internal_56a161f4d5365451182900e14f6d94be7d11f08fedd0278609d25444bf953477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56a161f4d5365451182900e14f6d94be7d11f08fedd0278609d25444bf953477->enter($__internal_56a161f4d5365451182900e14f6d94be7d11f08fedd0278609d25444bf953477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_8360a4220edd0e262d585d54e7338b32b03a1ffe4e2c50d164db6a50647e24df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8360a4220edd0e262d585d54e7338b32b03a1ffe4e2c50d164db6a50647e24df->enter($__internal_8360a4220edd0e262d585d54e7338b32b03a1ffe4e2c50d164db6a50647e24df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_56a161f4d5365451182900e14f6d94be7d11f08fedd0278609d25444bf953477->leave($__internal_56a161f4d5365451182900e14f6d94be7d11f08fedd0278609d25444bf953477_prof);

        
        $__internal_8360a4220edd0e262d585d54e7338b32b03a1ffe4e2c50d164db6a50647e24df->leave($__internal_8360a4220edd0e262d585d54e7338b32b03a1ffe4e2c50d164db6a50647e24df_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9300e05a87a8d72a2c7c464184114c42f24ecb7262bc90b2b61d0acd320655e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9300e05a87a8d72a2c7c464184114c42f24ecb7262bc90b2b61d0acd320655e9->enter($__internal_9300e05a87a8d72a2c7c464184114c42f24ecb7262bc90b2b61d0acd320655e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dabd1e5e9758772cc5de2ef41860dd1ecd8d833c662c4413408c09b438b09388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dabd1e5e9758772cc5de2ef41860dd1ecd8d833c662c4413408c09b438b09388->enter($__internal_dabd1e5e9758772cc5de2ef41860dd1ecd8d833c662c4413408c09b438b09388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_dabd1e5e9758772cc5de2ef41860dd1ecd8d833c662c4413408c09b438b09388->leave($__internal_dabd1e5e9758772cc5de2ef41860dd1ecd8d833c662c4413408c09b438b09388_prof);

        
        $__internal_9300e05a87a8d72a2c7c464184114c42f24ecb7262bc90b2b61d0acd320655e9->leave($__internal_9300e05a87a8d72a2c7c464184114c42f24ecb7262bc90b2b61d0acd320655e9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\GSB-Visiteur\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
