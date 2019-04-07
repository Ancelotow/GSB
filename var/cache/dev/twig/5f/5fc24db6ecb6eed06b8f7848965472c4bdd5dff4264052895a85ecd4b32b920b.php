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
        $__internal_c6c96ee6357d26b10323e2be8dc0149cbc613924d1ea8e49d00bfd4c7b3735ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c96ee6357d26b10323e2be8dc0149cbc613924d1ea8e49d00bfd4c7b3735ed->enter($__internal_c6c96ee6357d26b10323e2be8dc0149cbc613924d1ea8e49d00bfd4c7b3735ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_14b433c83139754b29e276ab1492fea7124e69735488c483db34e7a87089cef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14b433c83139754b29e276ab1492fea7124e69735488c483db34e7a87089cef2->enter($__internal_14b433c83139754b29e276ab1492fea7124e69735488c483db34e7a87089cef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c6c96ee6357d26b10323e2be8dc0149cbc613924d1ea8e49d00bfd4c7b3735ed->leave($__internal_c6c96ee6357d26b10323e2be8dc0149cbc613924d1ea8e49d00bfd4c7b3735ed_prof);

        
        $__internal_14b433c83139754b29e276ab1492fea7124e69735488c483db34e7a87089cef2->leave($__internal_14b433c83139754b29e276ab1492fea7124e69735488c483db34e7a87089cef2_prof);

    }

    // line 1
    public function block_session($context, array $blocks = array())
    {
        $__internal_1f76831feae9f21a62469d8c669ac9820326ce685f3f8beab2990a392f237129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f76831feae9f21a62469d8c669ac9820326ce685f3f8beab2990a392f237129->enter($__internal_1f76831feae9f21a62469d8c669ac9820326ce685f3f8beab2990a392f237129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "session"));

        $__internal_a737be546de34ffb77b6604f3cb9faa098444ae6a511fb25b96c338536ce8478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a737be546de34ffb77b6604f3cb9faa098444ae6a511fb25b96c338536ce8478->enter($__internal_a737be546de34ffb77b6604f3cb9faa098444ae6a511fb25b96c338536ce8478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "session"));

        
        $__internal_a737be546de34ffb77b6604f3cb9faa098444ae6a511fb25b96c338536ce8478->leave($__internal_a737be546de34ffb77b6604f3cb9faa098444ae6a511fb25b96c338536ce8478_prof);

        
        $__internal_1f76831feae9f21a62469d8c669ac9820326ce685f3f8beab2990a392f237129->leave($__internal_1f76831feae9f21a62469d8c669ac9820326ce685f3f8beab2990a392f237129_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e52d8d2849421190a1d018bcbdd5da4d711500dcb061e6218aa86d5e977ba9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e52d8d2849421190a1d018bcbdd5da4d711500dcb061e6218aa86d5e977ba9c->enter($__internal_0e52d8d2849421190a1d018bcbdd5da4d711500dcb061e6218aa86d5e977ba9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3e968f673a38ee16fe9a1c8b4f99ef1e964f8088f8f1f7f3dc6417fb35174452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e968f673a38ee16fe9a1c8b4f99ef1e964f8088f8f1f7f3dc6417fb35174452->enter($__internal_3e968f673a38ee16fe9a1c8b4f99ef1e964f8088f8f1f7f3dc6417fb35174452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GSB";
        
        $__internal_3e968f673a38ee16fe9a1c8b4f99ef1e964f8088f8f1f7f3dc6417fb35174452->leave($__internal_3e968f673a38ee16fe9a1c8b4f99ef1e964f8088f8f1f7f3dc6417fb35174452_prof);

        
        $__internal_0e52d8d2849421190a1d018bcbdd5da4d711500dcb061e6218aa86d5e977ba9c->leave($__internal_0e52d8d2849421190a1d018bcbdd5da4d711500dcb061e6218aa86d5e977ba9c_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6627c9c257e7e0e1bb68cb3699b062874ad0a2af3a93edf382f830736dd944f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6627c9c257e7e0e1bb68cb3699b062874ad0a2af3a93edf382f830736dd944f1->enter($__internal_6627c9c257e7e0e1bb68cb3699b062874ad0a2af3a93edf382f830736dd944f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b95d245e81243dc2071668bdf264861414872343cb11596de722731826534667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95d245e81243dc2071668bdf264861414872343cb11596de722731826534667->enter($__internal_b95d245e81243dc2071668bdf264861414872343cb11596de722731826534667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b95d245e81243dc2071668bdf264861414872343cb11596de722731826534667->leave($__internal_b95d245e81243dc2071668bdf264861414872343cb11596de722731826534667_prof);

        
        $__internal_6627c9c257e7e0e1bb68cb3699b062874ad0a2af3a93edf382f830736dd944f1->leave($__internal_6627c9c257e7e0e1bb68cb3699b062874ad0a2af3a93edf382f830736dd944f1_prof);

    }

    // line 13
    public function block_icnon($context, array $blocks = array())
    {
        $__internal_eb98b5b3621ae36b106db9216a4e78cf476427af1bf00692dd0deae437d0aaa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb98b5b3621ae36b106db9216a4e78cf476427af1bf00692dd0deae437d0aaa8->enter($__internal_eb98b5b3621ae36b106db9216a4e78cf476427af1bf00692dd0deae437d0aaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icnon"));

        $__internal_8390375f6f13b81ffe5396d774dba86203c9cb9af3abd8468efac1809bb50ba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8390375f6f13b81ffe5396d774dba86203c9cb9af3abd8468efac1809bb50ba0->enter($__internal_8390375f6f13b81ffe5396d774dba86203c9cb9af3abd8468efac1809bb50ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icnon"));

        echo "<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/gsb.gif"), "html", null, true);
        echo "\" />";
        
        $__internal_8390375f6f13b81ffe5396d774dba86203c9cb9af3abd8468efac1809bb50ba0->leave($__internal_8390375f6f13b81ffe5396d774dba86203c9cb9af3abd8468efac1809bb50ba0_prof);

        
        $__internal_eb98b5b3621ae36b106db9216a4e78cf476427af1bf00692dd0deae437d0aaa8->leave($__internal_eb98b5b3621ae36b106db9216a4e78cf476427af1bf00692dd0deae437d0aaa8_prof);

    }

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b3da34aae94de8ffbf5f19f9b8e522dd06718fda9a403bf584eb2d0f8f60cb2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3da34aae94de8ffbf5f19f9b8e522dd06718fda9a403bf584eb2d0f8f60cb2f->enter($__internal_b3da34aae94de8ffbf5f19f9b8e522dd06718fda9a403bf584eb2d0f8f60cb2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_68b1765a6924595fdd12edb24180f8a4a06a7e9ffee0b8ea7d3b1f83bb6b5399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b1765a6924595fdd12edb24180f8a4a06a7e9ffee0b8ea7d3b1f83bb6b5399->enter($__internal_68b1765a6924595fdd12edb24180f8a4a06a7e9ffee0b8ea7d3b1f83bb6b5399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_68b1765a6924595fdd12edb24180f8a4a06a7e9ffee0b8ea7d3b1f83bb6b5399->leave($__internal_68b1765a6924595fdd12edb24180f8a4a06a7e9ffee0b8ea7d3b1f83bb6b5399_prof);

        
        $__internal_b3da34aae94de8ffbf5f19f9b8e522dd06718fda9a403bf584eb2d0f8f60cb2f->leave($__internal_b3da34aae94de8ffbf5f19f9b8e522dd06718fda9a403bf584eb2d0f8f60cb2f_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_b51e51409eed291e506aabdfe027033d33ede024afdffea5776bb6c3e89e541c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b51e51409eed291e506aabdfe027033d33ede024afdffea5776bb6c3e89e541c->enter($__internal_b51e51409eed291e506aabdfe027033d33ede024afdffea5776bb6c3e89e541c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_588f65d6079a6383bb599803f89ed3d4e9d17a12d30c4fb5ab214dc65a202e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_588f65d6079a6383bb599803f89ed3d4e9d17a12d30c4fb5ab214dc65a202e7f->enter($__internal_588f65d6079a6383bb599803f89ed3d4e9d17a12d30c4fb5ab214dc65a202e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_588f65d6079a6383bb599803f89ed3d4e9d17a12d30c4fb5ab214dc65a202e7f->leave($__internal_588f65d6079a6383bb599803f89ed3d4e9d17a12d30c4fb5ab214dc65a202e7f_prof);

        
        $__internal_b51e51409eed291e506aabdfe027033d33ede024afdffea5776bb6c3e89e541c->leave($__internal_b51e51409eed291e506aabdfe027033d33ede024afdffea5776bb6c3e89e541c_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f8c6b9443e3ed0e1faeeb9390b07ce4c56933fff4ffed0f76d74aacc8a75095a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c6b9443e3ed0e1faeeb9390b07ce4c56933fff4ffed0f76d74aacc8a75095a->enter($__internal_f8c6b9443e3ed0e1faeeb9390b07ce4c56933fff4ffed0f76d74aacc8a75095a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b85c7ec4d0d2afb3c8d027268100399a377986086331e17584e4403a1c810eb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b85c7ec4d0d2afb3c8d027268100399a377986086331e17584e4403a1c810eb8->enter($__internal_b85c7ec4d0d2afb3c8d027268100399a377986086331e17584e4403a1c810eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b85c7ec4d0d2afb3c8d027268100399a377986086331e17584e4403a1c810eb8->leave($__internal_b85c7ec4d0d2afb3c8d027268100399a377986086331e17584e4403a1c810eb8_prof);

        
        $__internal_f8c6b9443e3ed0e1faeeb9390b07ce4c56933fff4ffed0f76d74aacc8a75095a->leave($__internal_f8c6b9443e3ed0e1faeeb9390b07ce4c56933fff4ffed0f76d74aacc8a75095a_prof);

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
", "::base.html.twig", "C:\\wamp64\\www\\GSB\\app/Resources\\views/base.html.twig");
    }
}
