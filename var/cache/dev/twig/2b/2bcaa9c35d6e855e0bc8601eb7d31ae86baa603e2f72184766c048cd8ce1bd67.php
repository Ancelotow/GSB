<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_e6e03b15c8c72f870eccd4eeb2300e1428616fa792a09bd557ca0c2f0e5acdaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ac619a8cd7556c3284db4ad14b2d57d68195fc628a59c2c5f38986910267c51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ac619a8cd7556c3284db4ad14b2d57d68195fc628a59c2c5f38986910267c51->enter($__internal_4ac619a8cd7556c3284db4ad14b2d57d68195fc628a59c2c5f38986910267c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_da70db98fb223b0ded46440fb4f54131419e767bdaefc988174412e818319f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da70db98fb223b0ded46440fb4f54131419e767bdaefc988174412e818319f5d->enter($__internal_da70db98fb223b0ded46440fb4f54131419e767bdaefc988174412e818319f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_4ac619a8cd7556c3284db4ad14b2d57d68195fc628a59c2c5f38986910267c51->leave($__internal_4ac619a8cd7556c3284db4ad14b2d57d68195fc628a59c2c5f38986910267c51_prof);

        
        $__internal_da70db98fb223b0ded46440fb4f54131419e767bdaefc988174412e818319f5d->leave($__internal_da70db98fb223b0ded46440fb4f54131419e767bdaefc988174412e818319f5d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_44bf683a209d8a16a1057ae800ab58597c45466d93381b49396c0b658b25c5f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44bf683a209d8a16a1057ae800ab58597c45466d93381b49396c0b658b25c5f6->enter($__internal_44bf683a209d8a16a1057ae800ab58597c45466d93381b49396c0b658b25c5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cc078d6baab6411632a11de8d532df8a2ae1848b4a4951e684d1e226a701a957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc078d6baab6411632a11de8d532df8a2ae1848b4a4951e684d1e226a701a957->enter($__internal_cc078d6baab6411632a11de8d532df8a2ae1848b4a4951e684d1e226a701a957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cc078d6baab6411632a11de8d532df8a2ae1848b4a4951e684d1e226a701a957->leave($__internal_cc078d6baab6411632a11de8d532df8a2ae1848b4a4951e684d1e226a701a957_prof);

        
        $__internal_44bf683a209d8a16a1057ae800ab58597c45466d93381b49396c0b658b25c5f6->leave($__internal_44bf683a209d8a16a1057ae800ab58597c45466d93381b49396c0b658b25c5f6_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_bf7972fe5a59d20bd46c5c825e82b809b6a20d3ff7423bedb57cd953141ca073 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf7972fe5a59d20bd46c5c825e82b809b6a20d3ff7423bedb57cd953141ca073->enter($__internal_bf7972fe5a59d20bd46c5c825e82b809b6a20d3ff7423bedb57cd953141ca073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fa4af11f8805ced3fb101a854230a92e30dca2f6b0490450ec08806b16b3b97c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4af11f8805ced3fb101a854230a92e30dca2f6b0490450ec08806b16b3b97c->enter($__internal_fa4af11f8805ced3fb101a854230a92e30dca2f6b0490450ec08806b16b3b97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fa4af11f8805ced3fb101a854230a92e30dca2f6b0490450ec08806b16b3b97c->leave($__internal_fa4af11f8805ced3fb101a854230a92e30dca2f6b0490450ec08806b16b3b97c_prof);

        
        $__internal_bf7972fe5a59d20bd46c5c825e82b809b6a20d3ff7423bedb57cd953141ca073->leave($__internal_bf7972fe5a59d20bd46c5c825e82b809b6a20d3ff7423bedb57cd953141ca073_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b0f7c2204ac683c68c4d5e6aa6eb8e35131abaf8e5afe2d3a00cdc52b0c5fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b0f7c2204ac683c68c4d5e6aa6eb8e35131abaf8e5afe2d3a00cdc52b0c5fa2->enter($__internal_9b0f7c2204ac683c68c4d5e6aa6eb8e35131abaf8e5afe2d3a00cdc52b0c5fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_140a37e7d39d9f939e96e7c43a264a26307cc5b0897373b634daa37333cb6423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140a37e7d39d9f939e96e7c43a264a26307cc5b0897373b634daa37333cb6423->enter($__internal_140a37e7d39d9f939e96e7c43a264a26307cc5b0897373b634daa37333cb6423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_140a37e7d39d9f939e96e7c43a264a26307cc5b0897373b634daa37333cb6423->leave($__internal_140a37e7d39d9f939e96e7c43a264a26307cc5b0897373b634daa37333cb6423_prof);

        
        $__internal_9b0f7c2204ac683c68c4d5e6aa6eb8e35131abaf8e5afe2d3a00cdc52b0c5fa2->leave($__internal_9b0f7c2204ac683c68c4d5e6aa6eb8e35131abaf8e5afe2d3a00cdc52b0c5fa2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\GSB-Visiteur\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
