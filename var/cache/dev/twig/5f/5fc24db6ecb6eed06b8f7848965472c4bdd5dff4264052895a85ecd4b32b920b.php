<?php

/* ::base.html.twig */
class __TwigTemplate_a6c97574c106c6c23d08d667bcb0fdcc6196ab1158d85c2d3ce0facaa4c39a58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'session' => array($this, 'block_session'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'icnon' => array($this, 'block_icnon'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a453952cd7e76094f89ed8e1a6a63082d340f2359bafb5b616420807abef9229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a453952cd7e76094f89ed8e1a6a63082d340f2359bafb5b616420807abef9229->enter($__internal_a453952cd7e76094f89ed8e1a6a63082d340f2359bafb5b616420807abef9229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_0d74eca9f5c9209b19e2036bbaa85ec01af2f4e5f3c1d3b6a028e0d0b9a64914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d74eca9f5c9209b19e2036bbaa85ec01af2f4e5f3c1d3b6a028e0d0b9a64914->enter($__internal_0d74eca9f5c9209b19e2036bbaa85ec01af2f4e5f3c1d3b6a028e0d0b9a64914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        $this->displayBlock('session', $context, $blocks);
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('icnon', $context, $blocks);
        // line 14
        echo "    </head>
    <body>
    ";
        // line 16
        $this->displayBlock('menu', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "    </body>
</html>
";
        
        $__internal_a453952cd7e76094f89ed8e1a6a63082d340f2359bafb5b616420807abef9229->leave($__internal_a453952cd7e76094f89ed8e1a6a63082d340f2359bafb5b616420807abef9229_prof);

        
        $__internal_0d74eca9f5c9209b19e2036bbaa85ec01af2f4e5f3c1d3b6a028e0d0b9a64914->leave($__internal_0d74eca9f5c9209b19e2036bbaa85ec01af2f4e5f3c1d3b6a028e0d0b9a64914_prof);

    }

    // line 1
    public function block_session($context, array $blocks = array())
    {
        $__internal_6960cccc6e6e2203b5fb42a001ba120b12553523f13c2cf792a30524171b5c92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6960cccc6e6e2203b5fb42a001ba120b12553523f13c2cf792a30524171b5c92->enter($__internal_6960cccc6e6e2203b5fb42a001ba120b12553523f13c2cf792a30524171b5c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "session"));

        $__internal_5d86432def0a504d3d92e28655484db7df23bea8042ccb27fedd6b1b5b15e79f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d86432def0a504d3d92e28655484db7df23bea8042ccb27fedd6b1b5b15e79f->enter($__internal_5d86432def0a504d3d92e28655484db7df23bea8042ccb27fedd6b1b5b15e79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "session"));

        
        $__internal_5d86432def0a504d3d92e28655484db7df23bea8042ccb27fedd6b1b5b15e79f->leave($__internal_5d86432def0a504d3d92e28655484db7df23bea8042ccb27fedd6b1b5b15e79f_prof);

        
        $__internal_6960cccc6e6e2203b5fb42a001ba120b12553523f13c2cf792a30524171b5c92->leave($__internal_6960cccc6e6e2203b5fb42a001ba120b12553523f13c2cf792a30524171b5c92_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_dca24096414e8ebc295022ce912d85429fbeafa25b380c39ca1599f750f47c71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dca24096414e8ebc295022ce912d85429fbeafa25b380c39ca1599f750f47c71->enter($__internal_dca24096414e8ebc295022ce912d85429fbeafa25b380c39ca1599f750f47c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4509f6293d09ebd9559e0afdfca97963b0dacd480dcc96f8da1e3bc02f2018fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4509f6293d09ebd9559e0afdfca97963b0dacd480dcc96f8da1e3bc02f2018fb->enter($__internal_4509f6293d09ebd9559e0afdfca97963b0dacd480dcc96f8da1e3bc02f2018fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GSB";
        
        $__internal_4509f6293d09ebd9559e0afdfca97963b0dacd480dcc96f8da1e3bc02f2018fb->leave($__internal_4509f6293d09ebd9559e0afdfca97963b0dacd480dcc96f8da1e3bc02f2018fb_prof);

        
        $__internal_dca24096414e8ebc295022ce912d85429fbeafa25b380c39ca1599f750f47c71->leave($__internal_dca24096414e8ebc295022ce912d85429fbeafa25b380c39ca1599f750f47c71_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3d070f6317f16a584c423bb28bd7c0937d82d0a45ba88e14dea89432e830f93c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d070f6317f16a584c423bb28bd7c0937d82d0a45ba88e14dea89432e830f93c->enter($__internal_3d070f6317f16a584c423bb28bd7c0937d82d0a45ba88e14dea89432e830f93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1af525dec04485055a5702f0910060fd61b93a834239951de52bbd66fecd735d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1af525dec04485055a5702f0910060fd61b93a834239951de52bbd66fecd735d->enter($__internal_1af525dec04485055a5702f0910060fd61b93a834239951de52bbd66fecd735d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-grid.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-reboot.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/gsb.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_1af525dec04485055a5702f0910060fd61b93a834239951de52bbd66fecd735d->leave($__internal_1af525dec04485055a5702f0910060fd61b93a834239951de52bbd66fecd735d_prof);

        
        $__internal_3d070f6317f16a584c423bb28bd7c0937d82d0a45ba88e14dea89432e830f93c->leave($__internal_3d070f6317f16a584c423bb28bd7c0937d82d0a45ba88e14dea89432e830f93c_prof);

    }

    // line 13
    public function block_icnon($context, array $blocks = array())
    {
        $__internal_9f7f7be6e00b5fd5c73e9ee6c88d0cd0447bce5371ffb201185421e8cb0717d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f7f7be6e00b5fd5c73e9ee6c88d0cd0447bce5371ffb201185421e8cb0717d4->enter($__internal_9f7f7be6e00b5fd5c73e9ee6c88d0cd0447bce5371ffb201185421e8cb0717d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icnon"));

        $__internal_bf05f24243c51f5edd48c07ea766c89f7f86e90fb9781cf4407c552806225e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf05f24243c51f5edd48c07ea766c89f7f86e90fb9781cf4407c552806225e1b->enter($__internal_bf05f24243c51f5edd48c07ea766c89f7f86e90fb9781cf4407c552806225e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icnon"));

        echo "<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/gsb.gif"), "html", null, true);
        echo "\" />";
        
        $__internal_bf05f24243c51f5edd48c07ea766c89f7f86e90fb9781cf4407c552806225e1b->leave($__internal_bf05f24243c51f5edd48c07ea766c89f7f86e90fb9781cf4407c552806225e1b_prof);

        
        $__internal_9f7f7be6e00b5fd5c73e9ee6c88d0cd0447bce5371ffb201185421e8cb0717d4->leave($__internal_9f7f7be6e00b5fd5c73e9ee6c88d0cd0447bce5371ffb201185421e8cb0717d4_prof);

    }

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d80d714bb28cfa653cc7b8a29de40feecdaa34f877026d55447aec93e940f5ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d80d714bb28cfa653cc7b8a29de40feecdaa34f877026d55447aec93e940f5ac->enter($__internal_d80d714bb28cfa653cc7b8a29de40feecdaa34f877026d55447aec93e940f5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b68c322091241705c518df42ceeb9aa8860ef5f02d7d25521e48ff3ef6353c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b68c322091241705c518df42ceeb9aa8860ef5f02d7d25521e48ff3ef6353c23->enter($__internal_b68c322091241705c518df42ceeb9aa8860ef5f02d7d25521e48ff3ef6353c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 17
        echo "        <center>
            <a class=\"navbar-brand\" href=\"/\">
                <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo1.gif"), "html", null, true);
        echo "\" width=\"300\" >
            </a>
        </center>
        <br/>
    ";
        
        $__internal_b68c322091241705c518df42ceeb9aa8860ef5f02d7d25521e48ff3ef6353c23->leave($__internal_b68c322091241705c518df42ceeb9aa8860ef5f02d7d25521e48ff3ef6353c23_prof);

        
        $__internal_d80d714bb28cfa653cc7b8a29de40feecdaa34f877026d55447aec93e940f5ac->leave($__internal_d80d714bb28cfa653cc7b8a29de40feecdaa34f877026d55447aec93e940f5ac_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6c7916fffe0325f0e2b6115bd63dc8834200fc89598fad1f06efb9274d285cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c7916fffe0325f0e2b6115bd63dc8834200fc89598fad1f06efb9274d285cc->enter($__internal_c6c7916fffe0325f0e2b6115bd63dc8834200fc89598fad1f06efb9274d285cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0a9cffb6890a5c7be38ca3806765a331b6eadef154ddd2806596e0a26faa943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a9cffb6890a5c7be38ca3806765a331b6eadef154ddd2806596e0a26faa943->enter($__internal_c0a9cffb6890a5c7be38ca3806765a331b6eadef154ddd2806596e0a26faa943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c0a9cffb6890a5c7be38ca3806765a331b6eadef154ddd2806596e0a26faa943->leave($__internal_c0a9cffb6890a5c7be38ca3806765a331b6eadef154ddd2806596e0a26faa943_prof);

        
        $__internal_c6c7916fffe0325f0e2b6115bd63dc8834200fc89598fad1f06efb9274d285cc->leave($__internal_c6c7916fffe0325f0e2b6115bd63dc8834200fc89598fad1f06efb9274d285cc_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bcb2ce68078f735125acb50accef54ea2cf74d78bdbbe4313c310951cd438d39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcb2ce68078f735125acb50accef54ea2cf74d78bdbbe4313c310951cd438d39->enter($__internal_bcb2ce68078f735125acb50accef54ea2cf74d78bdbbe4313c310951cd438d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2922ef1ca89f14975511bb334d272d6de3342b42b843629e01b88551896484a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2922ef1ca89f14975511bb334d272d6de3342b42b843629e01b88551896484a8->enter($__internal_2922ef1ca89f14975511bb334d272d6de3342b42b843629e01b88551896484a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2922ef1ca89f14975511bb334d272d6de3342b42b843629e01b88551896484a8->leave($__internal_2922ef1ca89f14975511bb334d272d6de3342b42b843629e01b88551896484a8_prof);

        
        $__internal_bcb2ce68078f735125acb50accef54ea2cf74d78bdbbe4313c310951cd438d39->leave($__internal_bcb2ce68078f735125acb50accef54ea2cf74d78bdbbe4313c310951cd438d39_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  207 => 25,  190 => 24,  175 => 19,  171 => 17,  162 => 16,  142 => 13,  130 => 11,  126 => 10,  122 => 9,  117 => 8,  108 => 7,  90 => 6,  73 => 1,  61 => 26,  58 => 25,  55 => 24,  53 => 16,  49 => 14,  46 => 13,  44 => 7,  40 => 6,  34 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block session %}{% endblock %}
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}GSB{% endblock %}</title>
        {% block stylesheets %}
            <link href=\"{{ asset('css/bootstrap.css') }}\" rel=\"stylesheet\" />
            <link href=\"{{ asset('css/bootstrap-grid.css') }}\" rel=\"stylesheet\" />
            <link href=\"{{ asset('css/bootstrap-reboot.css') }}\" rel=\"stylesheet\" />
            <link href=\"{{ asset('css/gsb.css') }}\" rel=\"stylesheet\" />
        {% endblock %}
        {% block icnon %}<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('img/gsb.gif') }}\" />{% endblock %}
    </head>
    <body>
    {% block menu %}
        <center>
            <a class=\"navbar-brand\" href=\"/\">
                <img src=\"{{ asset('img/logo1.gif') }}\" width=\"300\" >
            </a>
        </center>
        <br/>
    {% endblock %}
    {% block body %}{% endblock %}
    {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp64\\www\\GSB-Visiteur\\app/Resources\\views/base.html.twig");
    }
}
