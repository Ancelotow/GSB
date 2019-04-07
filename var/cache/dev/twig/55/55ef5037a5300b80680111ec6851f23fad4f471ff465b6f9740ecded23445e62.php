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
        $__internal_f2710ed05a81b97bfd15425d3e2b0674d01fcb91d35c88f1437bcd2fb291ea6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2710ed05a81b97bfd15425d3e2b0674d01fcb91d35c88f1437bcd2fb291ea6e->enter($__internal_f2710ed05a81b97bfd15425d3e2b0674d01fcb91d35c88f1437bcd2fb291ea6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_557823d91a34dfedce31f66a86918a3375abdd86a32321345e259b670edd2ac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557823d91a34dfedce31f66a86918a3375abdd86a32321345e259b670edd2ac5->enter($__internal_557823d91a34dfedce31f66a86918a3375abdd86a32321345e259b670edd2ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_f2710ed05a81b97bfd15425d3e2b0674d01fcb91d35c88f1437bcd2fb291ea6e->leave($__internal_f2710ed05a81b97bfd15425d3e2b0674d01fcb91d35c88f1437bcd2fb291ea6e_prof);

        
        $__internal_557823d91a34dfedce31f66a86918a3375abdd86a32321345e259b670edd2ac5->leave($__internal_557823d91a34dfedce31f66a86918a3375abdd86a32321345e259b670edd2ac5_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f44cc9af69fec6e79693256a527943094eb0dd6eb24e522ac00d327004dd6510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f44cc9af69fec6e79693256a527943094eb0dd6eb24e522ac00d327004dd6510->enter($__internal_f44cc9af69fec6e79693256a527943094eb0dd6eb24e522ac00d327004dd6510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8fb0d062880fcf120098225312ae9b1964d0cfe14381e350f91ecb8321cf76dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb0d062880fcf120098225312ae9b1964d0cfe14381e350f91ecb8321cf76dd->enter($__internal_8fb0d062880fcf120098225312ae9b1964d0cfe14381e350f91ecb8321cf76dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_8fb0d062880fcf120098225312ae9b1964d0cfe14381e350f91ecb8321cf76dd->leave($__internal_8fb0d062880fcf120098225312ae9b1964d0cfe14381e350f91ecb8321cf76dd_prof);

        
        $__internal_f44cc9af69fec6e79693256a527943094eb0dd6eb24e522ac00d327004dd6510->leave($__internal_f44cc9af69fec6e79693256a527943094eb0dd6eb24e522ac00d327004dd6510_prof);

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
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\GSB\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
