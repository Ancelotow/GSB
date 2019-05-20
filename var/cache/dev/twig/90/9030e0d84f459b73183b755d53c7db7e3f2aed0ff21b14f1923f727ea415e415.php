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
        $__internal_f8c8177af895ea88c0d47b6b509f0c2f9001001e0b4781d464bf896bed5a968e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c8177af895ea88c0d47b6b509f0c2f9001001e0b4781d464bf896bed5a968e->enter($__internal_f8c8177af895ea88c0d47b6b509f0c2f9001001e0b4781d464bf896bed5a968e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Visiteur:base.html.twig"));

        $__internal_2bf3e4181fbbb7501b54c56813e26b45c2015c8dda8c83c9f3314ed1be55ef60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf3e4181fbbb7501b54c56813e26b45c2015c8dda8c83c9f3314ed1be55ef60->enter($__internal_2bf3e4181fbbb7501b54c56813e26b45c2015c8dda8c83c9f3314ed1be55ef60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Visiteur:base.html.twig"));

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
        // line 61
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "    </body>
</html>
";
        
        $__internal_f8c8177af895ea88c0d47b6b509f0c2f9001001e0b4781d464bf896bed5a968e->leave($__internal_f8c8177af895ea88c0d47b6b509f0c2f9001001e0b4781d464bf896bed5a968e_prof);

        
        $__internal_2bf3e4181fbbb7501b54c56813e26b45c2015c8dda8c83c9f3314ed1be55ef60->leave($__internal_2bf3e4181fbbb7501b54c56813e26b45c2015c8dda8c83c9f3314ed1be55ef60_prof);

    }

    // line 1
    public function block_session($context, array $blocks = array())
    {
        $__internal_35156a55bd640c13bd9b9e823e63e0e7357d0718f1049fb64626c0a1a2d05c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35156a55bd640c13bd9b9e823e63e0e7357d0718f1049fb64626c0a1a2d05c04->enter($__internal_35156a55bd640c13bd9b9e823e63e0e7357d0718f1049fb64626c0a1a2d05c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "session"));

        $__internal_7ad922c2a23da36594e9ef423e8ca7fe673df34f311f7de643a7edb964965cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad922c2a23da36594e9ef423e8ca7fe673df34f311f7de643a7edb964965cb6->enter($__internal_7ad922c2a23da36594e9ef423e8ca7fe673df34f311f7de643a7edb964965cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "session"));

        
        $__internal_7ad922c2a23da36594e9ef423e8ca7fe673df34f311f7de643a7edb964965cb6->leave($__internal_7ad922c2a23da36594e9ef423e8ca7fe673df34f311f7de643a7edb964965cb6_prof);

        
        $__internal_35156a55bd640c13bd9b9e823e63e0e7357d0718f1049fb64626c0a1a2d05c04->leave($__internal_35156a55bd640c13bd9b9e823e63e0e7357d0718f1049fb64626c0a1a2d05c04_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_518aa487477f688c27160c78dffb0ece25cbca46e44416d1c2cdb45649f08481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_518aa487477f688c27160c78dffb0ece25cbca46e44416d1c2cdb45649f08481->enter($__internal_518aa487477f688c27160c78dffb0ece25cbca46e44416d1c2cdb45649f08481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d689c8b5b57427cee25acb03cadb3deda405b8139ca7781948d529d165474747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d689c8b5b57427cee25acb03cadb3deda405b8139ca7781948d529d165474747->enter($__internal_d689c8b5b57427cee25acb03cadb3deda405b8139ca7781948d529d165474747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GSB";
        
        $__internal_d689c8b5b57427cee25acb03cadb3deda405b8139ca7781948d529d165474747->leave($__internal_d689c8b5b57427cee25acb03cadb3deda405b8139ca7781948d529d165474747_prof);

        
        $__internal_518aa487477f688c27160c78dffb0ece25cbca46e44416d1c2cdb45649f08481->leave($__internal_518aa487477f688c27160c78dffb0ece25cbca46e44416d1c2cdb45649f08481_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9324020c0c92a6c516aaaf825ac2207e611598e7b12a5bea368e7cbe5fed164b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9324020c0c92a6c516aaaf825ac2207e611598e7b12a5bea368e7cbe5fed164b->enter($__internal_9324020c0c92a6c516aaaf825ac2207e611598e7b12a5bea368e7cbe5fed164b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a2a0f7bf091f0023c5dfcc63de9a4ff2e40e300db1d17244369f2730506103a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a0f7bf091f0023c5dfcc63de9a4ff2e40e300db1d17244369f2730506103a4->enter($__internal_a2a0f7bf091f0023c5dfcc63de9a4ff2e40e300db1d17244369f2730506103a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a2a0f7bf091f0023c5dfcc63de9a4ff2e40e300db1d17244369f2730506103a4->leave($__internal_a2a0f7bf091f0023c5dfcc63de9a4ff2e40e300db1d17244369f2730506103a4_prof);

        
        $__internal_9324020c0c92a6c516aaaf825ac2207e611598e7b12a5bea368e7cbe5fed164b->leave($__internal_9324020c0c92a6c516aaaf825ac2207e611598e7b12a5bea368e7cbe5fed164b_prof);

    }

    // line 13
    public function block_script($context, array $blocks = array())
    {
        $__internal_e21cc270232f19c44a120ddad0648c511256dc30fa0bdce1385b1b0700e11335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e21cc270232f19c44a120ddad0648c511256dc30fa0bdce1385b1b0700e11335->enter($__internal_e21cc270232f19c44a120ddad0648c511256dc30fa0bdce1385b1b0700e11335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_fcf6854f33b4679e39972e90c01cc4d6f0397fda8237970e394b29a509d2a698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf6854f33b4679e39972e90c01cc4d6f0397fda8237970e394b29a509d2a698->enter($__internal_fcf6854f33b4679e39972e90c01cc4d6f0397fda8237970e394b29a509d2a698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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
        
        $__internal_fcf6854f33b4679e39972e90c01cc4d6f0397fda8237970e394b29a509d2a698->leave($__internal_fcf6854f33b4679e39972e90c01cc4d6f0397fda8237970e394b29a509d2a698_prof);

        
        $__internal_e21cc270232f19c44a120ddad0648c511256dc30fa0bdce1385b1b0700e11335->leave($__internal_e21cc270232f19c44a120ddad0648c511256dc30fa0bdce1385b1b0700e11335_prof);

    }

    // line 18
    public function block_icnon($context, array $blocks = array())
    {
        $__internal_a36380e2b6ea75a5624ca9d5fc5ab34d5de9699ca2ed76be69f9c20120aa8113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a36380e2b6ea75a5624ca9d5fc5ab34d5de9699ca2ed76be69f9c20120aa8113->enter($__internal_a36380e2b6ea75a5624ca9d5fc5ab34d5de9699ca2ed76be69f9c20120aa8113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icnon"));

        $__internal_498e6baec2b8293cf9b9a7a2f35d388406cf0e7c8ec1af6b17e9273d8f3ca813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_498e6baec2b8293cf9b9a7a2f35d388406cf0e7c8ec1af6b17e9273d8f3ca813->enter($__internal_498e6baec2b8293cf9b9a7a2f35d388406cf0e7c8ec1af6b17e9273d8f3ca813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icnon"));

        echo "<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/gsb.gif"), "html", null, true);
        echo "\" />";
        
        $__internal_498e6baec2b8293cf9b9a7a2f35d388406cf0e7c8ec1af6b17e9273d8f3ca813->leave($__internal_498e6baec2b8293cf9b9a7a2f35d388406cf0e7c8ec1af6b17e9273d8f3ca813_prof);

        
        $__internal_a36380e2b6ea75a5624ca9d5fc5ab34d5de9699ca2ed76be69f9c20120aa8113->leave($__internal_a36380e2b6ea75a5624ca9d5fc5ab34d5de9699ca2ed76be69f9c20120aa8113_prof);

    }

    // line 21
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bbaf81830734ee4eb1dc558000e97c0741a5ee892fafb0523afc919ac9b0fc04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbaf81830734ee4eb1dc558000e97c0741a5ee892fafb0523afc919ac9b0fc04->enter($__internal_bbaf81830734ee4eb1dc558000e97c0741a5ee892fafb0523afc919ac9b0fc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b745cd1c72e1d4602204c35c536b03260c0e55b16d9b979e327c3a4687a5d8c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b745cd1c72e1d4602204c35c536b03260c0e55b16d9b979e327c3a4687a5d8c1->enter($__internal_b745cd1c72e1d4602204c35c536b03260c0e55b16d9b979e327c3a4687a5d8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 22
        echo "        <nav class=\"navbar navbar-expand-lg navbar-dark bg-info\">
            <a class=\"navbar-brand\" href=\"/visiteur/\">GSB-VISITEUR</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item dropdown\">
                        <a href=\"/visiteur/etat\" class=\"nav-link\">ETAT</a>
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
                    <li class=\"nav-item dropdown\">
                        <a href=\"/visiteur/fiche_frais/synthese\" class=\"nav-link\">SYNTHESE</a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link\">";
        // line 54
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
        echo "</a>
                    </li>
                </ul>
                <a href=\"/deconnexion\" class=\"btn btn-outline-danger\">Déconnexion</a>
            </div>
        </nav><br/>
    ";
        
        $__internal_b745cd1c72e1d4602204c35c536b03260c0e55b16d9b979e327c3a4687a5d8c1->leave($__internal_b745cd1c72e1d4602204c35c536b03260c0e55b16d9b979e327c3a4687a5d8c1_prof);

        
        $__internal_bbaf81830734ee4eb1dc558000e97c0741a5ee892fafb0523afc919ac9b0fc04->leave($__internal_bbaf81830734ee4eb1dc558000e97c0741a5ee892fafb0523afc919ac9b0fc04_prof);

    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        $__internal_baef560eee5dc57e75a258aa9f74bc54d00b67ee9974e89713645d1a52e21e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baef560eee5dc57e75a258aa9f74bc54d00b67ee9974e89713645d1a52e21e71->enter($__internal_baef560eee5dc57e75a258aa9f74bc54d00b67ee9974e89713645d1a52e21e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7b9c8210f928436a4421648b13373aeb8d74700388a8ef4bd50a2e8791fb2b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b9c8210f928436a4421648b13373aeb8d74700388a8ef4bd50a2e8791fb2b1->enter($__internal_a7b9c8210f928436a4421648b13373aeb8d74700388a8ef4bd50a2e8791fb2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a7b9c8210f928436a4421648b13373aeb8d74700388a8ef4bd50a2e8791fb2b1->leave($__internal_a7b9c8210f928436a4421648b13373aeb8d74700388a8ef4bd50a2e8791fb2b1_prof);

        
        $__internal_baef560eee5dc57e75a258aa9f74bc54d00b67ee9974e89713645d1a52e21e71->leave($__internal_baef560eee5dc57e75a258aa9f74bc54d00b67ee9974e89713645d1a52e21e71_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_79033d2dcdded4e0ee131606227cc016c499dd7d215cbfbe1584b6d449d13129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79033d2dcdded4e0ee131606227cc016c499dd7d215cbfbe1584b6d449d13129->enter($__internal_79033d2dcdded4e0ee131606227cc016c499dd7d215cbfbe1584b6d449d13129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8b7eda2e9d0627221938e2f55fcaf24deb53185f0906e3cec6db180e932712ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7eda2e9d0627221938e2f55fcaf24deb53185f0906e3cec6db180e932712ae->enter($__internal_8b7eda2e9d0627221938e2f55fcaf24deb53185f0906e3cec6db180e932712ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8b7eda2e9d0627221938e2f55fcaf24deb53185f0906e3cec6db180e932712ae->leave($__internal_8b7eda2e9d0627221938e2f55fcaf24deb53185f0906e3cec6db180e932712ae_prof);

        
        $__internal_79033d2dcdded4e0ee131606227cc016c499dd7d215cbfbe1584b6d449d13129->leave($__internal_79033d2dcdded4e0ee131606227cc016c499dd7d215cbfbe1584b6d449d13129_prof);

    }

    public function getTemplateName()
    {
        return ":Visiteur:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  273 => 62,  256 => 61,  239 => 54,  205 => 22,  196 => 21,  176 => 18,  164 => 16,  160 => 15,  155 => 14,  146 => 13,  134 => 11,  130 => 10,  126 => 9,  121 => 8,  112 => 7,  94 => 6,  77 => 1,  65 => 63,  62 => 62,  59 => 61,  57 => 21,  53 => 19,  50 => 18,  47 => 13,  45 => 7,  41 => 6,  35 => 2,  33 => 1,);
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
                        <a href=\"/visiteur/etat\" class=\"nav-link\">ETAT</a>
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
                    <li class=\"nav-item dropdown\">
                        <a href=\"/visiteur/fiche_frais/synthese\" class=\"nav-link\">SYNTHESE</a>
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
", ":Visiteur:base.html.twig", "C:\\wamp64\\www\\GSB-Visiteur\\app/Resources\\views/Visiteur/base.html.twig");
    }
}
