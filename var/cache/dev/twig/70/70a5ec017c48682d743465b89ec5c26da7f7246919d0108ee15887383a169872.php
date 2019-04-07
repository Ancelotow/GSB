<?php

/* :Comptable:base.html.twig */
class __TwigTemplate_aa0606555c02640dca7297753a489951fb91715359810da6a6a31bd68ae8b490 extends Twig_Template
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
        $__internal_230cd26fc36718d4f6af48be708d5ed52346e603eede6f47dbbbdf959e901f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_230cd26fc36718d4f6af48be708d5ed52346e603eede6f47dbbbdf959e901f56->enter($__internal_230cd26fc36718d4f6af48be708d5ed52346e603eede6f47dbbbdf959e901f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Comptable:base.html.twig"));

        $__internal_c24606db34b43733e47f390302aa206d84c0773252c44538a093075c6d3bb248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24606db34b43733e47f390302aa206d84c0773252c44538a093075c6d3bb248->enter($__internal_c24606db34b43733e47f390302aa206d84c0773252c44538a093075c6d3bb248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Comptable:base.html.twig"));

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
        echo "    ";
        $this->displayBlock('script', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('icnon', $context, $blocks);
        // line 19
        echo "</head>
<body>
";
        // line 21
        $this->displayBlock('menu', $context, $blocks);
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "</body>
</html>";
        
        $__internal_230cd26fc36718d4f6af48be708d5ed52346e603eede6f47dbbbdf959e901f56->leave($__internal_230cd26fc36718d4f6af48be708d5ed52346e603eede6f47dbbbdf959e901f56_prof);

        
        $__internal_c24606db34b43733e47f390302aa206d84c0773252c44538a093075c6d3bb248->leave($__internal_c24606db34b43733e47f390302aa206d84c0773252c44538a093075c6d3bb248_prof);

    }

    // line 1
    public function block_session($context, array $blocks = array())
    {
        $__internal_a8360dc4192a32c1546c6a96405b768f907db9413871ca4328012418cb3b371d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8360dc4192a32c1546c6a96405b768f907db9413871ca4328012418cb3b371d->enter($__internal_a8360dc4192a32c1546c6a96405b768f907db9413871ca4328012418cb3b371d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "session"));

        $__internal_d23613477747f6f9e6a97e821559d331cce0b9cc1fbf6509a5bf437aab7e189d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d23613477747f6f9e6a97e821559d331cce0b9cc1fbf6509a5bf437aab7e189d->enter($__internal_d23613477747f6f9e6a97e821559d331cce0b9cc1fbf6509a5bf437aab7e189d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "session"));

        
        $__internal_d23613477747f6f9e6a97e821559d331cce0b9cc1fbf6509a5bf437aab7e189d->leave($__internal_d23613477747f6f9e6a97e821559d331cce0b9cc1fbf6509a5bf437aab7e189d_prof);

        
        $__internal_a8360dc4192a32c1546c6a96405b768f907db9413871ca4328012418cb3b371d->leave($__internal_a8360dc4192a32c1546c6a96405b768f907db9413871ca4328012418cb3b371d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b3eaff084df275f7da943a17902cbbf4c284dff5513cb51e4835a2d9208a9ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b3eaff084df275f7da943a17902cbbf4c284dff5513cb51e4835a2d9208a9ad->enter($__internal_6b3eaff084df275f7da943a17902cbbf4c284dff5513cb51e4835a2d9208a9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a3ca77503e3bf20482b64edd6177c3d87784e686c3548a3a01b7b6a2d9a001d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ca77503e3bf20482b64edd6177c3d87784e686c3548a3a01b7b6a2d9a001d2->enter($__internal_a3ca77503e3bf20482b64edd6177c3d87784e686c3548a3a01b7b6a2d9a001d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GSB";
        
        $__internal_a3ca77503e3bf20482b64edd6177c3d87784e686c3548a3a01b7b6a2d9a001d2->leave($__internal_a3ca77503e3bf20482b64edd6177c3d87784e686c3548a3a01b7b6a2d9a001d2_prof);

        
        $__internal_6b3eaff084df275f7da943a17902cbbf4c284dff5513cb51e4835a2d9208a9ad->leave($__internal_6b3eaff084df275f7da943a17902cbbf4c284dff5513cb51e4835a2d9208a9ad_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e6abba2e01090247cd1bb2e67f7bb9227bec91d53ecb29af7850d87b3090825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e6abba2e01090247cd1bb2e67f7bb9227bec91d53ecb29af7850d87b3090825->enter($__internal_9e6abba2e01090247cd1bb2e67f7bb9227bec91d53ecb29af7850d87b3090825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_514ef3f30da4e398742da5dc0e67b70fcf9ab677bc662402fd218de5a60e4f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_514ef3f30da4e398742da5dc0e67b70fcf9ab677bc662402fd218de5a60e4f72->enter($__internal_514ef3f30da4e398742da5dc0e67b70fcf9ab677bc662402fd218de5a60e4f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link href=\"";
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
        
        $__internal_514ef3f30da4e398742da5dc0e67b70fcf9ab677bc662402fd218de5a60e4f72->leave($__internal_514ef3f30da4e398742da5dc0e67b70fcf9ab677bc662402fd218de5a60e4f72_prof);

        
        $__internal_9e6abba2e01090247cd1bb2e67f7bb9227bec91d53ecb29af7850d87b3090825->leave($__internal_9e6abba2e01090247cd1bb2e67f7bb9227bec91d53ecb29af7850d87b3090825_prof);

    }

    // line 13
    public function block_script($context, array $blocks = array())
    {
        $__internal_b845856b7b9722db231d2f767e176d3f1df6f460b9bab524a5a168552bc0cd69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b845856b7b9722db231d2f767e176d3f1df6f460b9bab524a5a168552bc0cd69->enter($__internal_b845856b7b9722db231d2f767e176d3f1df6f460b9bab524a5a168552bc0cd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_7abf4d4277bf65a51aff49c09c4e19e0c9d8961ca81e8a572b9c5303b0015b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7abf4d4277bf65a51aff49c09c4e19e0c9d8961ca81e8a572b9c5303b0015b66->enter($__internal_7abf4d4277bf65a51aff49c09c4e19e0c9d8961ca81e8a572b9c5303b0015b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 14
        echo "        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
    ";
        
        $__internal_7abf4d4277bf65a51aff49c09c4e19e0c9d8961ca81e8a572b9c5303b0015b66->leave($__internal_7abf4d4277bf65a51aff49c09c4e19e0c9d8961ca81e8a572b9c5303b0015b66_prof);

        
        $__internal_b845856b7b9722db231d2f767e176d3f1df6f460b9bab524a5a168552bc0cd69->leave($__internal_b845856b7b9722db231d2f767e176d3f1df6f460b9bab524a5a168552bc0cd69_prof);

    }

    // line 18
    public function block_icnon($context, array $blocks = array())
    {
        $__internal_54413093eb83992b813198cc19b113d07474c41ecc532e1f53a36cad3102abc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54413093eb83992b813198cc19b113d07474c41ecc532e1f53a36cad3102abc2->enter($__internal_54413093eb83992b813198cc19b113d07474c41ecc532e1f53a36cad3102abc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icnon"));

        $__internal_a9bd12a8f4f6603db8f065c15b9232478e1197a1502300dbdc8b570c9c7640bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9bd12a8f4f6603db8f065c15b9232478e1197a1502300dbdc8b570c9c7640bb->enter($__internal_a9bd12a8f4f6603db8f065c15b9232478e1197a1502300dbdc8b570c9c7640bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icnon"));

        echo "<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/gsb.gif"), "html", null, true);
        echo "\" />";
        
        $__internal_a9bd12a8f4f6603db8f065c15b9232478e1197a1502300dbdc8b570c9c7640bb->leave($__internal_a9bd12a8f4f6603db8f065c15b9232478e1197a1502300dbdc8b570c9c7640bb_prof);

        
        $__internal_54413093eb83992b813198cc19b113d07474c41ecc532e1f53a36cad3102abc2->leave($__internal_54413093eb83992b813198cc19b113d07474c41ecc532e1f53a36cad3102abc2_prof);

    }

    // line 21
    public function block_menu($context, array $blocks = array())
    {
        $__internal_54647499c1200e49b5962179ccae32893755384eee50f795a4606b308e7afd10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54647499c1200e49b5962179ccae32893755384eee50f795a4606b308e7afd10->enter($__internal_54647499c1200e49b5962179ccae32893755384eee50f795a4606b308e7afd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ee6b1fdc241410df5010f82afa1ff781fad6e5d606b60d5fbb2df99703ef1c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6b1fdc241410df5010f82afa1ff781fad6e5d606b60d5fbb2df99703ef1c17->enter($__internal_ee6b1fdc241410df5010f82afa1ff781fad6e5d606b60d5fbb2df99703ef1c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 22
        echo "    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <a class=\"navbar-brand\" href=\"/visiteur/\">GSB-COMPTABLE</a>
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
                        <a class=\"dropdown-item\" href=\"/comptable/etat\">LISTER</a>
                        <a class=\"dropdown-item\" href=\"/comptable/etat/ajouter\">AJOUTER</a>
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        FICHE FRAIS
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"/comptable/fiche_frais\">LISTER</a>
                        <a class=\"dropdown-item\" href=\"/comptable/fiche_frais/rechercher/mois\">CONSULTER PAR MOIS</a>
                        <a class=\"dropdown-item\" href=\"/comptable/fiche_frais/ajouter\">AJOUTER</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"/comptable/ligne_frais_forfait\">CONSULTER LIGNE FRAIS FORFAIT</a>
                        <a class=\"dropdown-item\" href=\"/comptable/ligne_frais_hors_forfait\">CONSULTER LIGNE FRAIS HORS FORFAIT</a>
                        <a class=\"dropdown-item\" href=\"/comptable/frais_forfait\">CONSULTER FRAIS FORFAIT</a>
                    </div>
                </li>
                <li>
                    <a href=\"#\" class=\"nav-link\">";
        // line 53
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
        echo "</a>
                </li>
            </ul>
            <a href=\"/deconnexion\" class=\"btn btn-outline-danger\">Déconnexion</a>
        </div>
    </nav><br/>
";
        
        $__internal_ee6b1fdc241410df5010f82afa1ff781fad6e5d606b60d5fbb2df99703ef1c17->leave($__internal_ee6b1fdc241410df5010f82afa1ff781fad6e5d606b60d5fbb2df99703ef1c17_prof);

        
        $__internal_54647499c1200e49b5962179ccae32893755384eee50f795a4606b308e7afd10->leave($__internal_54647499c1200e49b5962179ccae32893755384eee50f795a4606b308e7afd10_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4092fd3cdb20c05e8eb0ecbe76156bb11233cbcdf3c77d2a11d065c10051035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4092fd3cdb20c05e8eb0ecbe76156bb11233cbcdf3c77d2a11d065c10051035->enter($__internal_b4092fd3cdb20c05e8eb0ecbe76156bb11233cbcdf3c77d2a11d065c10051035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26bc0f2e4f4667ad1d7c7efab70eec38ee14eb0b1d6318896b0819cbb377a427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26bc0f2e4f4667ad1d7c7efab70eec38ee14eb0b1d6318896b0819cbb377a427->enter($__internal_26bc0f2e4f4667ad1d7c7efab70eec38ee14eb0b1d6318896b0819cbb377a427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_26bc0f2e4f4667ad1d7c7efab70eec38ee14eb0b1d6318896b0819cbb377a427->leave($__internal_26bc0f2e4f4667ad1d7c7efab70eec38ee14eb0b1d6318896b0819cbb377a427_prof);

        
        $__internal_b4092fd3cdb20c05e8eb0ecbe76156bb11233cbcdf3c77d2a11d065c10051035->leave($__internal_b4092fd3cdb20c05e8eb0ecbe76156bb11233cbcdf3c77d2a11d065c10051035_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_96e946991dcf225ac720d490d06830b7d7d4deb6a589e5cf0e11f6a03ec3591b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96e946991dcf225ac720d490d06830b7d7d4deb6a589e5cf0e11f6a03ec3591b->enter($__internal_96e946991dcf225ac720d490d06830b7d7d4deb6a589e5cf0e11f6a03ec3591b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_82b402287318cc5653b322773b0f5ccb73919979779ffad84d4ba3adebf4d61b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b402287318cc5653b322773b0f5ccb73919979779ffad84d4ba3adebf4d61b->enter($__internal_82b402287318cc5653b322773b0f5ccb73919979779ffad84d4ba3adebf4d61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_82b402287318cc5653b322773b0f5ccb73919979779ffad84d4ba3adebf4d61b->leave($__internal_82b402287318cc5653b322773b0f5ccb73919979779ffad84d4ba3adebf4d61b_prof);

        
        $__internal_96e946991dcf225ac720d490d06830b7d7d4deb6a589e5cf0e11f6a03ec3591b->leave($__internal_96e946991dcf225ac720d490d06830b7d7d4deb6a589e5cf0e11f6a03ec3591b_prof);

    }

    public function getTemplateName()
    {
        return ":Comptable:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  261 => 61,  244 => 60,  227 => 53,  194 => 22,  185 => 21,  165 => 18,  152 => 14,  143 => 13,  131 => 11,  127 => 10,  123 => 9,  118 => 8,  109 => 7,  91 => 6,  74 => 1,  63 => 62,  61 => 61,  59 => 60,  57 => 21,  53 => 19,  50 => 18,  47 => 13,  45 => 7,  41 => 6,  35 => 2,  33 => 1,);
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
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
    {% endblock %}
    {% block icnon %}<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('img/gsb.gif') }}\" />{% endblock %}
</head>
<body>
{% block menu %}
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <a class=\"navbar-brand\" href=\"/visiteur/\">GSB-COMPTABLE</a>
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
                        <a class=\"dropdown-item\" href=\"/comptable/etat\">LISTER</a>
                        <a class=\"dropdown-item\" href=\"/comptable/etat/ajouter\">AJOUTER</a>
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        FICHE FRAIS
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"/comptable/fiche_frais\">LISTER</a>
                        <a class=\"dropdown-item\" href=\"/comptable/fiche_frais/rechercher/mois\">CONSULTER PAR MOIS</a>
                        <a class=\"dropdown-item\" href=\"/comptable/fiche_frais/ajouter\">AJOUTER</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"/comptable/ligne_frais_forfait\">CONSULTER LIGNE FRAIS FORFAIT</a>
                        <a class=\"dropdown-item\" href=\"/comptable/ligne_frais_hors_forfait\">CONSULTER LIGNE FRAIS HORS FORFAIT</a>
                        <a class=\"dropdown-item\" href=\"/comptable/frais_forfait\">CONSULTER FRAIS FORFAIT</a>
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
</html>", ":Comptable:base.html.twig", "C:\\wamp64\\www\\GSB\\app/Resources\\views/Comptable/base.html.twig");
    }
}
