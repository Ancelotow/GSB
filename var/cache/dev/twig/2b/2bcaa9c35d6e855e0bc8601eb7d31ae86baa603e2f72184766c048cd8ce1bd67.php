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
        $__internal_968c1b46d825ddd5c91631ed3298e818198c7f7774b13722a4d8c40eeb8ea910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_968c1b46d825ddd5c91631ed3298e818198c7f7774b13722a4d8c40eeb8ea910->enter($__internal_968c1b46d825ddd5c91631ed3298e818198c7f7774b13722a4d8c40eeb8ea910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_dc54d7bb1ef553cde93540b7f1e9b20c6d7a632023436d1d5892592784f8941e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc54d7bb1ef553cde93540b7f1e9b20c6d7a632023436d1d5892592784f8941e->enter($__internal_dc54d7bb1ef553cde93540b7f1e9b20c6d7a632023436d1d5892592784f8941e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_968c1b46d825ddd5c91631ed3298e818198c7f7774b13722a4d8c40eeb8ea910->leave($__internal_968c1b46d825ddd5c91631ed3298e818198c7f7774b13722a4d8c40eeb8ea910_prof);

        
        $__internal_dc54d7bb1ef553cde93540b7f1e9b20c6d7a632023436d1d5892592784f8941e->leave($__internal_dc54d7bb1ef553cde93540b7f1e9b20c6d7a632023436d1d5892592784f8941e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d575c6f6c1df9af18818860b7c75292acf2d36c3a1710b9d24d83d7b07571bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d575c6f6c1df9af18818860b7c75292acf2d36c3a1710b9d24d83d7b07571bf->enter($__internal_0d575c6f6c1df9af18818860b7c75292acf2d36c3a1710b9d24d83d7b07571bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d55bec8a6500bf8f86995f4ecf75d09a6d23eb4282471547fb68892c0ce6d94d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d55bec8a6500bf8f86995f4ecf75d09a6d23eb4282471547fb68892c0ce6d94d->enter($__internal_d55bec8a6500bf8f86995f4ecf75d09a6d23eb4282471547fb68892c0ce6d94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d55bec8a6500bf8f86995f4ecf75d09a6d23eb4282471547fb68892c0ce6d94d->leave($__internal_d55bec8a6500bf8f86995f4ecf75d09a6d23eb4282471547fb68892c0ce6d94d_prof);

        
        $__internal_0d575c6f6c1df9af18818860b7c75292acf2d36c3a1710b9d24d83d7b07571bf->leave($__internal_0d575c6f6c1df9af18818860b7c75292acf2d36c3a1710b9d24d83d7b07571bf_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_971d6247a091cbc646fbfdf604340fa867ed5372680ab8e74ef4977e8a55f8fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_971d6247a091cbc646fbfdf604340fa867ed5372680ab8e74ef4977e8a55f8fa->enter($__internal_971d6247a091cbc646fbfdf604340fa867ed5372680ab8e74ef4977e8a55f8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4dd08306d2cce5b35c12071ba8fbd9412d5cff9dd8a8db4f377c2d9d0e2b14d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd08306d2cce5b35c12071ba8fbd9412d5cff9dd8a8db4f377c2d9d0e2b14d3->enter($__internal_4dd08306d2cce5b35c12071ba8fbd9412d5cff9dd8a8db4f377c2d9d0e2b14d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4dd08306d2cce5b35c12071ba8fbd9412d5cff9dd8a8db4f377c2d9d0e2b14d3->leave($__internal_4dd08306d2cce5b35c12071ba8fbd9412d5cff9dd8a8db4f377c2d9d0e2b14d3_prof);

        
        $__internal_971d6247a091cbc646fbfdf604340fa867ed5372680ab8e74ef4977e8a55f8fa->leave($__internal_971d6247a091cbc646fbfdf604340fa867ed5372680ab8e74ef4977e8a55f8fa_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d097d288e2d489e484fdbc89b0ab9db5a20c699a67658e70658814e67bfee8f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d097d288e2d489e484fdbc89b0ab9db5a20c699a67658e70658814e67bfee8f8->enter($__internal_d097d288e2d489e484fdbc89b0ab9db5a20c699a67658e70658814e67bfee8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6d6bd726691fd1c1d6785b0355367b11360ce674189c4cdd265fc53d1f6f984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d6bd726691fd1c1d6785b0355367b11360ce674189c4cdd265fc53d1f6f984->enter($__internal_f6d6bd726691fd1c1d6785b0355367b11360ce674189c4cdd265fc53d1f6f984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f6d6bd726691fd1c1d6785b0355367b11360ce674189c4cdd265fc53d1f6f984->leave($__internal_f6d6bd726691fd1c1d6785b0355367b11360ce674189c4cdd265fc53d1f6f984_prof);

        
        $__internal_d097d288e2d489e484fdbc89b0ab9db5a20c699a67658e70658814e67bfee8f8->leave($__internal_d097d288e2d489e484fdbc89b0ab9db5a20c699a67658e70658814e67bfee8f8_prof);

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
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\GSB\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
