<?php

/* :Visiteur:base.html.twig */
class __TwigTemplate_c9b40d7035bea92c8cb47a028bd68ab2afe381efb2bd071fef2e957bee8896df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'session' => array($this, 'block_session'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'script' => array($this, 'block_script'),
            'icnon' => array($this, 'block_icnon'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96ad57eeb93d417746bfbb4d8ab022fb73a1a0a6840d85a55b767da3e065f660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96ad57eeb93d417746bfbb4d8ab022fb73a1a0a6840d85a55b767da3e065f660->enter($__internal_96ad57eeb93d417746bfbb4d8ab022fb73a1a0a6840d85a55b767da3e065f660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Visiteur:base.html.twig"));

        $__internal_107d940e5015adfab02be47e1cf67f6740c7ec3c5b284b362652f98541837eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107d940e5015adfab02be47e1cf67f6740c7ec3c5b284b362652f98541837eed->enter($__internal_107d940e5015adfab02be47e1cf67f6740c7ec3c5b284b362652f98541837eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Visiteur:base.html.twig"));

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
        $this->displayBlock('script', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('icnon', $context, $blocks);
        // line 19
        echo "    </head>
    <body>
    ";
        // line 21
        $this->displayBlock('menu', $context, $blocks);
        // line 64
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "    </body>
</html>
";
        
        $__internal_96ad57eeb93d417746bfbb4d8ab022fb73a1a0a6840d85a55b767da3e065f660->leave($__internal_96ad57eeb93d417746bfbb4d8ab022fb73a1a0a6840d85a55b767da3e065f660_prof);

        
        $__internal_107d940e5015adfab02be47e1cf67f6740c7ec3c5b284b362652f98541837eed->leave($__internal_107d940e5015adfab02be47e1cf67f6740c7ec3c5b284b362652f98541837eed_prof);

    }

    // line 1
    public function block_session($context, array $blocks = array())
    {
        $__internal_0eb789eff98af86cef898bcea932f067f76cf48cfb40a4da19be34c7da862297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb789eff98af86cef898bcea932f067f76cf48cfb40a4da19be34c7da862297->enter($__internal_0eb789eff98af86cef898bcea932f067f76cf48cfb40a4da19be34c7da862297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "session"));

        $__internal_76b8ff2e3a8b614e8433c45206da4ef618ff4c6b79dea931913f6ed7486a0a26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76b8ff2e3a8b614e8433c45206da4ef618ff4c6b79dea931913f6ed7486a0a26->enter($__internal_76b8ff2e3a8b614e8433c45206da4ef618ff4c6b79dea931913f6ed7486a0a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "session"));

        
        $__internal_76b8ff2e3a8b614e8433c45206da4ef618ff4c6b79dea931913f6ed7486a0a26->leave($__internal_76b8ff2e3a8b614e8433c45206da4ef618ff4c6b79dea931913f6ed7486a0a26_prof);

        
        $__internal_0eb789eff98af86cef898bcea932f067f76cf48cfb40a4da19be34c7da862297->leave($__internal_0eb789eff98af86cef898bcea932f067f76cf48cfb40a4da19be34c7da862297_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce1117e2c6371a514b1e7066ed7b9cf4682f1efbae5b00e13813a96c0e1d18a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce1117e2c6371a514b1e7066ed7b9cf4682f1efbae5b00e13813a96c0e1d18a8->enter($__internal_ce1117e2c6371a514b1e7066ed7b9cf4682f1efbae5b00e13813a96c0e1d18a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c86fc8d3c15dbd6a8139740b991316d3d78796a126c31501fd138a92124ec019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86fc8d3c15dbd6a8139740b991316d3d78796a126c31501fd138a92124ec019->enter($__internal_c86fc8d3c15dbd6a8139740b991316d3d78796a126c31501fd138a92124ec019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GSB";
        
        $__internal_c86fc8d3c15dbd6a8139740b991316d3d78796a126c31501fd138a92124ec019->leave($__internal_c86fc8d3c15dbd6a8139740b991316d3d78796a126c31501fd138a92124ec019_prof);

        
        $__internal_ce1117e2c6371a514b1e7066ed7b9cf4682f1efbae5b00e13813a96c0e1d18a8->leave($__internal_ce1117e2c6371a514b1e7066ed7b9cf4682f1efbae5b00e13813a96c0e1d18a8_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4ef734cb9e37d73f4320048212c3ff0696b8ff3d03943238321d9401c6f3d9c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ef734cb9e37d73f4320048212c3ff0696b8ff3d03943238321d9401c6f3d9c5->enter($__internal_4ef734cb9e37d73f4320048212c3ff0696b8ff3d03943238321d9401c6f3d9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b1d6dd2e9c21d54a6b13cdba2e501fa63eed44fe11cc47f3e7d90c9a85b3d59d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d6dd2e9c21d54a6b13cdba2e501fa63eed44fe11cc47f3e7d90c9a85b3d59d->enter($__internal_b1d6dd2e9c21d54a6b13cdba2e501fa63eed44fe11cc47f3e7d90c9a85b3d59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b1d6dd2e9c21d54a6b13cdba2e501fa63eed44fe11cc47f3e7d90c9a85b3d59d->leave($__internal_b1d6dd2e9c21d54a6b13cdba2e501fa63eed44fe11cc47f3e7d90c9a85b3d59d_prof);

        
        $__internal_4ef734cb9e37d73f4320048212c3ff0696b8ff3d03943238321d9401c6f3d9c5->leave($__internal_4ef734cb9e37d73f4320048212c3ff0696b8ff3d03943238321d9401c6f3d9c5_prof);

    }

    // line 13
    public function block_script($context, array $blocks = array())
    {
        $__internal_984b9b56ffe3c0c7c46fa86fbd46881c08a0e8fd9426148444e7f5f5ce2ef408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_984b9b56ffe3c0c7c46fa86fbd46881c08a0e8fd9426148444e7f5f5ce2ef408->enter($__internal_984b9b56ffe3c0c7c46fa86fbd46881c08a0e8fd9426148444e7f5f5ce2ef408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_d554f944ca9bae80767e3c3bb77ca1b3679974cdf414184e017757c9775e0a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d554f944ca9bae80767e3c3bb77ca1b3679974cdf414184e017757c9775e0a65->enter($__internal_d554f944ca9bae80767e3c3bb77ca1b3679974cdf414184e017757c9775e0a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 14
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slim.min.js"), "html", null, true);
        echo "\"  ></script>
            <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/poppers.min.js"), "html", null, true);
        echo "\" ></script>
            <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap2.min.js"), "html", null, true);
        echo "\" ></script>
        ";
        
        $__internal_d554f944ca9bae80767e3c3bb77ca1b3679974cdf414184e017757c9775e0a65->leave($__internal_d554f944ca9bae80767e3c3bb77ca1b3679974cdf414184e017757c9775e0a65_prof);

        
        $__internal_984b9b56ffe3c0c7c46fa86fbd46881c08a0e8fd9426148444e7f5f5ce2ef408->leave($__internal_984b9b56ffe3c0c7c46fa86fbd46881c08a0e8fd9426148444e7f5f5ce2ef408_prof);

    }

    // line 18
    public function block_icnon($context, array $blocks = array())
    {
        $__internal_296222ffd85fcc1ec548db7c55d28960fb9f8b897cb3b56dabea5cc2dfe2c3c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_296222ffd85fcc1ec548db7c55d28960fb9f8b897cb3b56dabea5cc2dfe2c3c7->enter($__internal_296222ffd85fcc1ec548db7c55d28960fb9f8b897cb3b56dabea5cc2dfe2c3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icnon"));

        $__internal_d780976e0094636196c2b507517b5ec54bf283be12bf121e8e54eeae320eb22d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d780976e0094636196c2b507517b5ec54bf283be12bf121e8e54eeae320eb22d->enter($__internal_d780976e0094636196c2b507517b5ec54bf283be12bf121e8e54eeae320eb22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icnon"));

        echo "<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/gsb.gif"), "html", null, true);
        echo "\" />";
        
        $__internal_d780976e0094636196c2b507517b5ec54bf283be12bf121e8e54eeae320eb22d->leave($__internal_d780976e0094636196c2b507517b5ec54bf283be12bf121e8e54eeae320eb22d_prof);

        
        $__internal_296222ffd85fcc1ec548db7c55d28960fb9f8b897cb3b56dabea5cc2dfe2c3c7->leave($__internal_296222ffd85fcc1ec548db7c55d28960fb9f8b897cb3b56dabea5cc2dfe2c3c7_prof);

    }

    // line 21
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ae805745315dca45d6eaa793e9377da0dcb3cf1db3f895dc7156d5656616f9ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae805745315dca45d6eaa793e9377da0dcb3cf1db3f895dc7156d5656616f9ab->enter($__internal_ae805745315dca45d6eaa793e9377da0dcb3cf1db3f895dc7156d5656616f9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d33dcad44a8076fe377bba8591f341060b396bc3561353ec759ac03291708e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d33dcad44a8076fe377bba8591f341060b396bc3561353ec759ac03291708e5b->enter($__internal_d33dcad44a8076fe377bba8591f341060b396bc3561353ec759ac03291708e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 22
        echo "        <nav class=\"navbar navbar-expand-lg navbar-dark bg-info\">
            <a class=\"navbar-brand\" href=\"/visiteur/\">GSB-VISITEUR</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ETAT
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"/visiteur/etat\">LISTER</a>
                            <a class=\"dropdown-item\" href=\"/visiteur/etat/ajouter\">AJOUTER</a>
                        </div>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            FICHE FRAIS
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"/visiteur/fiche_frais\">LISTER</a>
                            <a class=\"dropdown-item\" href=\"/visiteur/fiche_frais/rechercher/mois\">CONSULTER PAR MOIS</a>
                            <a class=\"dropdown-item\" href=\"/visiteur/fiche_frais/ajouter\">AJOUTER</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"/visiteur/ligne_frais_forfait\">CONSULTER LIGNE FRAIS FORFAIT</a>
                            <a class=\"dropdown-item\" href=\"/visiteur/ligne_frais_hors_forfait\">CONSULTER LIGNE FRAIS HORS FORFAIT</a>
                            <a class=\"dropdown-item\" href=\"/visiteur/frais_forfait\">CONSULTER FRAIS FORFAIT</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"/visiteur/ligne_frais_forfait/ajouter\">AJOUTER LIGNE FRAIS FORFAIT</a>
                            <a class=\"dropdown-item\" href=\"/visiteur/ligne_frais_hors_forfait/ajouter\">AJOUTER LIGNE FRAIS HORS FORFAIT</a>
                            <a class=\"dropdown-item\" href=\"/visiteur/frais_forfait/ajouter\">AJOUTER FRAIS FORFAIT</a>
                        </div>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link\">";
        // line 57
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
        echo "</a>
                    </li>
                </ul>
                <a href=\"/deconnexion\" class=\"btn btn-outline-danger\">Déconnexion</a>
            </div>
        </nav><br/>
    ";
        
        $__internal_d33dcad44a8076fe377bba8591f341060b396bc3561353ec759ac03291708e5b->leave($__internal_d33dcad44a8076fe377bba8591f341060b396bc3561353ec759ac03291708e5b_prof);

        
        $__internal_ae805745315dca45d6eaa793e9377da0dcb3cf1db3f895dc7156d5656616f9ab->leave($__internal_ae805745315dca45d6eaa793e9377da0dcb3cf1db3f895dc7156d5656616f9ab_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_2715d2d81d76d13cca3f54af3ac6af27a3df5a2e89bfea5c6b98fec3205e430b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2715d2d81d76d13cca3f54af3ac6af27a3df5a2e89bfea5c6b98fec3205e430b->enter($__internal_2715d2d81d76d13cca3f54af3ac6af27a3df5a2e89bfea5c6b98fec3205e430b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b6a5f040ab13bfcc51a3c43e2a29bd6268cebb9273f2adb67add8275b6002c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b6a5f040ab13bfcc51a3c43e2a29bd6268cebb9273f2adb67add8275b6002c1->enter($__internal_2b6a5f040ab13bfcc51a3c43e2a29bd6268cebb9273f2adb67add8275b6002c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2b6a5f040ab13bfcc51a3c43e2a29bd6268cebb9273f2adb67add8275b6002c1->leave($__internal_2b6a5f040ab13bfcc51a3c43e2a29bd6268cebb9273f2adb67add8275b6002c1_prof);

        
        $__internal_2715d2d81d76d13cca3f54af3ac6af27a3df5a2e89bfea5c6b98fec3205e430b->leave($__internal_2715d2d81d76d13cca3f54af3ac6af27a3df5a2e89bfea5c6b98fec3205e430b_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5eeea20e3647ca620f552171408ac73842e2114747ad53c7eee01ba408c98cc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eeea20e3647ca620f552171408ac73842e2114747ad53c7eee01ba408c98cc5->enter($__internal_5eeea20e3647ca620f552171408ac73842e2114747ad53c7eee01ba408c98cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e25fc952b5e1112145d54b80b24d7f752340721a675269b7cf1279b1b98c89c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e25fc952b5e1112145d54b80b24d7f752340721a675269b7cf1279b1b98c89c4->enter($__internal_e25fc952b5e1112145d54b80b24d7f752340721a675269b7cf1279b1b98c89c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e25fc952b5e1112145d54b80b24d7f752340721a675269b7cf1279b1b98c89c4->leave($__internal_e25fc952b5e1112145d54b80b24d7f752340721a675269b7cf1279b1b98c89c4_prof);

        
        $__internal_5eeea20e3647ca620f552171408ac73842e2114747ad53c7eee01ba408c98cc5->leave($__internal_5eeea20e3647ca620f552171408ac73842e2114747ad53c7eee01ba408c98cc5_prof);

    }

    public function getTemplateName()
    {
        return ":Visiteur:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  276 => 65,  259 => 64,  242 => 57,  205 => 22,  196 => 21,  176 => 18,  164 => 16,  160 => 15,  155 => 14,  146 => 13,  134 => 11,  130 => 10,  126 => 9,  121 => 8,  112 => 7,  94 => 6,  77 => 1,  65 => 66,  62 => 65,  59 => 64,  57 => 21,  53 => 19,  50 => 18,  47 => 13,  45 => 7,  41 => 6,  35 => 2,  33 => 1,);
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
        {% block script %}
            <script src=\"{{ asset('js/slim.min.js') }}\"  ></script>
            <script src=\"{{ asset('js/poppers.min.js') }}\" ></script>
            <script src=\"{{ asset('js/bootstrap2.min.js') }}\" ></script>
        {% endblock %}
        {% block icnon %}<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('img/gsb.gif') }}\" />{% endblock %}
    </head>
    <body>
    {% block menu %}
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-info\">
            <a class=\"navbar-brand\" href=\"/visiteur/\">GSB-VISITEUR</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ETAT
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"/visiteur/etat\">LISTER</a>
                            <a class=\"dropdown-item\" href=\"/visiteur/etat/ajouter\">AJOUTER</a>
                        </div>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            FICHE FRAIS
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"/visiteur/fiche_frais\">LISTER</a>
                            <a class=\"dropdown-item\" href=\"/visiteur/fiche_frais/rechercher/mois\">CONSULTER PAR MOIS</a>
                            <a class=\"dropdown-item\" href=\"/visiteur/fiche_frais/ajouter\">AJOUTER</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"/visiteur/ligne_frais_forfait\">CONSULTER LIGNE FRAIS FORFAIT</a>
                            <a class=\"dropdown-item\" href=\"/visiteur/ligne_frais_hors_forfait\">CONSULTER LIGNE FRAIS HORS FORFAIT</a>
                            <a class=\"dropdown-item\" href=\"/visiteur/frais_forfait\">CONSULTER FRAIS FORFAIT</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"/visiteur/ligne_frais_forfait/ajouter\">AJOUTER LIGNE FRAIS FORFAIT</a>
                            <a class=\"dropdown-item\" href=\"/visiteur/ligne_frais_hors_forfait/ajouter\">AJOUTER LIGNE FRAIS HORS FORFAIT</a>
                            <a class=\"dropdown-item\" href=\"/visiteur/frais_forfait/ajouter\">AJOUTER FRAIS FORFAIT</a>
                        </div>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link\">{{ app.user.username|upper }}</a>
                    </li>
                </ul>
                <a href=\"/deconnexion\" class=\"btn btn-outline-danger\">Déconnexion</a>
            </div>
        </nav><br/>
    {% endblock %}
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", ":Visiteur:base.html.twig", "C:\\wamp64\\www\\GSB\\app/Resources\\views/Visiteur/base.html.twig");
    }
}
