<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_16a259f06923d5d8bd118b7c5cb04568c0de1b1970c9535fd088498cffb98fd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff1f9bea8f628fb96f1c4299d505ce44a049a5a032f09774f69ccb432d1cdb67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff1f9bea8f628fb96f1c4299d505ce44a049a5a032f09774f69ccb432d1cdb67->enter($__internal_ff1f9bea8f628fb96f1c4299d505ce44a049a5a032f09774f69ccb432d1cdb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_abf0c87c41fb0eb5b2fc8ce4556f1e1efd9ddfedd92d8fbeaba1b288ccfeaf8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abf0c87c41fb0eb5b2fc8ce4556f1e1efd9ddfedd92d8fbeaba1b288ccfeaf8e->enter($__internal_abf0c87c41fb0eb5b2fc8ce4556f1e1efd9ddfedd92d8fbeaba1b288ccfeaf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_ff1f9bea8f628fb96f1c4299d505ce44a049a5a032f09774f69ccb432d1cdb67->leave($__internal_ff1f9bea8f628fb96f1c4299d505ce44a049a5a032f09774f69ccb432d1cdb67_prof);

        
        $__internal_abf0c87c41fb0eb5b2fc8ce4556f1e1efd9ddfedd92d8fbeaba1b288ccfeaf8e->leave($__internal_abf0c87c41fb0eb5b2fc8ce4556f1e1efd9ddfedd92d8fbeaba1b288ccfeaf8e_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_7d61cab084f415b7f2f42c8f6bb30e1065117704d107545957db36052d6a44b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d61cab084f415b7f2f42c8f6bb30e1065117704d107545957db36052d6a44b7->enter($__internal_7d61cab084f415b7f2f42c8f6bb30e1065117704d107545957db36052d6a44b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_7195b79ae705ebbdf28c5e7e922f0f697d13972a120786f48df5c2a0207275a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7195b79ae705ebbdf28c5e7e922f0f697d13972a120786f48df5c2a0207275a7->enter($__internal_7195b79ae705ebbdf28c5e7e922f0f697d13972a120786f48df5c2a0207275a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_7195b79ae705ebbdf28c5e7e922f0f697d13972a120786f48df5c2a0207275a7->leave($__internal_7195b79ae705ebbdf28c5e7e922f0f697d13972a120786f48df5c2a0207275a7_prof);

        
        $__internal_7d61cab084f415b7f2f42c8f6bb30e1065117704d107545957db36052d6a44b7->leave($__internal_7d61cab084f415b7f2f42c8f6bb30e1065117704d107545957db36052d6a44b7_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_fb881cbfb54e001f620ff299988505627111396d81aa6511d9020ea5c17b988c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb881cbfb54e001f620ff299988505627111396d81aa6511d9020ea5c17b988c->enter($__internal_fb881cbfb54e001f620ff299988505627111396d81aa6511d9020ea5c17b988c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_bd84e6d603e7db4cb8dddd7964dd21534dc96d8d76208ebc104c6ab96b43f7ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd84e6d603e7db4cb8dddd7964dd21534dc96d8d76208ebc104c6ab96b43f7ad->enter($__internal_bd84e6d603e7db4cb8dddd7964dd21534dc96d8d76208ebc104c6ab96b43f7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_bd84e6d603e7db4cb8dddd7964dd21534dc96d8d76208ebc104c6ab96b43f7ad->leave($__internal_bd84e6d603e7db4cb8dddd7964dd21534dc96d8d76208ebc104c6ab96b43f7ad_prof);

        
        $__internal_fb881cbfb54e001f620ff299988505627111396d81aa6511d9020ea5c17b988c->leave($__internal_fb881cbfb54e001f620ff299988505627111396d81aa6511d9020ea5c17b988c_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_86ad7ebb078f481c2455c066ab4ddf24ba1f71551c815b8386bd7e34d08b8842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86ad7ebb078f481c2455c066ab4ddf24ba1f71551c815b8386bd7e34d08b8842->enter($__internal_86ad7ebb078f481c2455c066ab4ddf24ba1f71551c815b8386bd7e34d08b8842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_6b764b884084fd751ba050a7b0da15267ac61503505bbaf8bd49a060050ad47e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b764b884084fd751ba050a7b0da15267ac61503505bbaf8bd49a060050ad47e->enter($__internal_6b764b884084fd751ba050a7b0da15267ac61503505bbaf8bd49a060050ad47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_6b764b884084fd751ba050a7b0da15267ac61503505bbaf8bd49a060050ad47e->leave($__internal_6b764b884084fd751ba050a7b0da15267ac61503505bbaf8bd49a060050ad47e_prof);

        
        $__internal_86ad7ebb078f481c2455c066ab4ddf24ba1f71551c815b8386bd7e34d08b8842->leave($__internal_86ad7ebb078f481c2455c066ab4ddf24ba1f71551c815b8386bd7e34d08b8842_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_4afd67e2235c8e553676446c3b6408eb9fd24d8205c409e6cd55a2aa933d408e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4afd67e2235c8e553676446c3b6408eb9fd24d8205c409e6cd55a2aa933d408e->enter($__internal_4afd67e2235c8e553676446c3b6408eb9fd24d8205c409e6cd55a2aa933d408e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_fa2452e63b59c3e6f33e517badd453606cbb96375d15a2ea4abd6d445ebac59d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa2452e63b59c3e6f33e517badd453606cbb96375d15a2ea4abd6d445ebac59d->enter($__internal_fa2452e63b59c3e6f33e517badd453606cbb96375d15a2ea4abd6d445ebac59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_891282fde03b98aa380f7b49947d823314f44f9e0d107f9920ec7e11a772ab1a = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_77d6f5b764b64c46ef867f3f766919fe051ab106604238f63bf4b88cbf665b26 = "{{") && ('' === $__internal_77d6f5b764b64c46ef867f3f766919fe051ab106604238f63bf4b88cbf665b26 || 0 === strpos($__internal_891282fde03b98aa380f7b49947d823314f44f9e0d107f9920ec7e11a772ab1a, $__internal_77d6f5b764b64c46ef867f3f766919fe051ab106604238f63bf4b88cbf665b26)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_fa2452e63b59c3e6f33e517badd453606cbb96375d15a2ea4abd6d445ebac59d->leave($__internal_fa2452e63b59c3e6f33e517badd453606cbb96375d15a2ea4abd6d445ebac59d_prof);

        
        $__internal_4afd67e2235c8e553676446c3b6408eb9fd24d8205c409e6cd55a2aa933d408e->leave($__internal_4afd67e2235c8e553676446c3b6408eb9fd24d8205c409e6cd55a2aa933d408e_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_6e626c6c8fc992c41dd8ad2c7bf301774ed21515db5c1b6fcb7458bbe158a12c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e626c6c8fc992c41dd8ad2c7bf301774ed21515db5c1b6fcb7458bbe158a12c->enter($__internal_6e626c6c8fc992c41dd8ad2c7bf301774ed21515db5c1b6fcb7458bbe158a12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_c29740b7849393073ce4e06a2a5b28b5dc0479a21cd571ed64068dafbe6602a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c29740b7849393073ce4e06a2a5b28b5dc0479a21cd571ed64068dafbe6602a2->enter($__internal_c29740b7849393073ce4e06a2a5b28b5dc0479a21cd571ed64068dafbe6602a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_c29740b7849393073ce4e06a2a5b28b5dc0479a21cd571ed64068dafbe6602a2->leave($__internal_c29740b7849393073ce4e06a2a5b28b5dc0479a21cd571ed64068dafbe6602a2_prof);

        
        $__internal_6e626c6c8fc992c41dd8ad2c7bf301774ed21515db5c1b6fcb7458bbe158a12c->leave($__internal_6e626c6c8fc992c41dd8ad2c7bf301774ed21515db5c1b6fcb7458bbe158a12c_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_1ec843f211ab413a2e355753a90a264d5f22ad73bcae69c6f68e234afeb9fcc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ec843f211ab413a2e355753a90a264d5f22ad73bcae69c6f68e234afeb9fcc2->enter($__internal_1ec843f211ab413a2e355753a90a264d5f22ad73bcae69c6f68e234afeb9fcc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_a55f47b9db5ea3674f0904f550cb972c6c3d58b3ca2af0723046d6a3209ef275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55f47b9db5ea3674f0904f550cb972c6c3d58b3ca2af0723046d6a3209ef275->enter($__internal_a55f47b9db5ea3674f0904f550cb972c6c3d58b3ca2af0723046d6a3209ef275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_a55f47b9db5ea3674f0904f550cb972c6c3d58b3ca2af0723046d6a3209ef275->leave($__internal_a55f47b9db5ea3674f0904f550cb972c6c3d58b3ca2af0723046d6a3209ef275_prof);

        
        $__internal_1ec843f211ab413a2e355753a90a264d5f22ad73bcae69c6f68e234afeb9fcc2->leave($__internal_1ec843f211ab413a2e355753a90a264d5f22ad73bcae69c6f68e234afeb9fcc2_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_21b287fb6a608c98bb832b1f221f7acde3e64b527176b60f9dbab5a16327146d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21b287fb6a608c98bb832b1f221f7acde3e64b527176b60f9dbab5a16327146d->enter($__internal_21b287fb6a608c98bb832b1f221f7acde3e64b527176b60f9dbab5a16327146d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_5f0aba10ac92478b8f5053e4523df8bef5cebfbdbeddea0f694b340e5d97f461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0aba10ac92478b8f5053e4523df8bef5cebfbdbeddea0f694b340e5d97f461->enter($__internal_5f0aba10ac92478b8f5053e4523df8bef5cebfbdbeddea0f694b340e5d97f461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_5f0aba10ac92478b8f5053e4523df8bef5cebfbdbeddea0f694b340e5d97f461->leave($__internal_5f0aba10ac92478b8f5053e4523df8bef5cebfbdbeddea0f694b340e5d97f461_prof);

        
        $__internal_21b287fb6a608c98bb832b1f221f7acde3e64b527176b60f9dbab5a16327146d->leave($__internal_21b287fb6a608c98bb832b1f221f7acde3e64b527176b60f9dbab5a16327146d_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_6c132d4dabf13500e9cedea294a2c3f1ed2d53c02e8f7bfb3ad94c95a6b55e7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c132d4dabf13500e9cedea294a2c3f1ed2d53c02e8f7bfb3ad94c95a6b55e7e->enter($__internal_6c132d4dabf13500e9cedea294a2c3f1ed2d53c02e8f7bfb3ad94c95a6b55e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_f0253d0c5259301780e7ca8fb620909673a24b23ee2a3e851f3915df5c937525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0253d0c5259301780e7ca8fb620909673a24b23ee2a3e851f3915df5c937525->enter($__internal_f0253d0c5259301780e7ca8fb620909673a24b23ee2a3e851f3915df5c937525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_f0253d0c5259301780e7ca8fb620909673a24b23ee2a3e851f3915df5c937525->leave($__internal_f0253d0c5259301780e7ca8fb620909673a24b23ee2a3e851f3915df5c937525_prof);

        
        $__internal_6c132d4dabf13500e9cedea294a2c3f1ed2d53c02e8f7bfb3ad94c95a6b55e7e->leave($__internal_6c132d4dabf13500e9cedea294a2c3f1ed2d53c02e8f7bfb3ad94c95a6b55e7e_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_ecb8a517b16257d5afcc0b216760f9dff66a3534889b4347b854e9af71de8175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecb8a517b16257d5afcc0b216760f9dff66a3534889b4347b854e9af71de8175->enter($__internal_ecb8a517b16257d5afcc0b216760f9dff66a3534889b4347b854e9af71de8175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_0fa6a925f900f8db6758c367acbfb34fe920cb502268d37fda47718531de7c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa6a925f900f8db6758c367acbfb34fe920cb502268d37fda47718531de7c54->enter($__internal_0fa6a925f900f8db6758c367acbfb34fe920cb502268d37fda47718531de7c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_0fa6a925f900f8db6758c367acbfb34fe920cb502268d37fda47718531de7c54->leave($__internal_0fa6a925f900f8db6758c367acbfb34fe920cb502268d37fda47718531de7c54_prof);

        
        $__internal_ecb8a517b16257d5afcc0b216760f9dff66a3534889b4347b854e9af71de8175->leave($__internal_ecb8a517b16257d5afcc0b216760f9dff66a3534889b4347b854e9af71de8175_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_6a0012620432eb9ba299ab66b8e621a87be1a3ae1cc61e8f65382eecd7b379bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a0012620432eb9ba299ab66b8e621a87be1a3ae1cc61e8f65382eecd7b379bf->enter($__internal_6a0012620432eb9ba299ab66b8e621a87be1a3ae1cc61e8f65382eecd7b379bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_66429f1eafc34d1d40d24f761c2e19ece30f9b3f81a9f054446028e4cfed09da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66429f1eafc34d1d40d24f761c2e19ece30f9b3f81a9f054446028e4cfed09da->enter($__internal_66429f1eafc34d1d40d24f761c2e19ece30f9b3f81a9f054446028e4cfed09da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_66429f1eafc34d1d40d24f761c2e19ece30f9b3f81a9f054446028e4cfed09da->leave($__internal_66429f1eafc34d1d40d24f761c2e19ece30f9b3f81a9f054446028e4cfed09da_prof);

        
        $__internal_6a0012620432eb9ba299ab66b8e621a87be1a3ae1cc61e8f65382eecd7b379bf->leave($__internal_6a0012620432eb9ba299ab66b8e621a87be1a3ae1cc61e8f65382eecd7b379bf_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_bd5ebe311e6d766c93bfd1d6cfe1214626033418665152bfb6ccd158ea04342c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd5ebe311e6d766c93bfd1d6cfe1214626033418665152bfb6ccd158ea04342c->enter($__internal_bd5ebe311e6d766c93bfd1d6cfe1214626033418665152bfb6ccd158ea04342c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_3487d0685202b27db887deafeb96831febee93c966dfdd53bdca8bd9d57c20ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3487d0685202b27db887deafeb96831febee93c966dfdd53bdca8bd9d57c20ee->enter($__internal_3487d0685202b27db887deafeb96831febee93c966dfdd53bdca8bd9d57c20ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_3487d0685202b27db887deafeb96831febee93c966dfdd53bdca8bd9d57c20ee->leave($__internal_3487d0685202b27db887deafeb96831febee93c966dfdd53bdca8bd9d57c20ee_prof);

        
        $__internal_bd5ebe311e6d766c93bfd1d6cfe1214626033418665152bfb6ccd158ea04342c->leave($__internal_bd5ebe311e6d766c93bfd1d6cfe1214626033418665152bfb6ccd158ea04342c_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_169ab7ed212306b9e06f54e9e5e9f1423aa07f18715fa564a81b107f33442943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_169ab7ed212306b9e06f54e9e5e9f1423aa07f18715fa564a81b107f33442943->enter($__internal_169ab7ed212306b9e06f54e9e5e9f1423aa07f18715fa564a81b107f33442943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_83e27e80c5357b696528484cf74c2ee10474a0358f72d077bb9360e3e5589f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e27e80c5357b696528484cf74c2ee10474a0358f72d077bb9360e3e5589f25->enter($__internal_83e27e80c5357b696528484cf74c2ee10474a0358f72d077bb9360e3e5589f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_83e27e80c5357b696528484cf74c2ee10474a0358f72d077bb9360e3e5589f25->leave($__internal_83e27e80c5357b696528484cf74c2ee10474a0358f72d077bb9360e3e5589f25_prof);

        
        $__internal_169ab7ed212306b9e06f54e9e5e9f1423aa07f18715fa564a81b107f33442943->leave($__internal_169ab7ed212306b9e06f54e9e5e9f1423aa07f18715fa564a81b107f33442943_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_703b02d5ea3f8c904c9383a8aec95df5018dbd6c8e18bda96bb570396391df56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_703b02d5ea3f8c904c9383a8aec95df5018dbd6c8e18bda96bb570396391df56->enter($__internal_703b02d5ea3f8c904c9383a8aec95df5018dbd6c8e18bda96bb570396391df56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_94009c8a78b55a3addaef148d9820258883f4d60825c15b3bdc61add7b9623e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94009c8a78b55a3addaef148d9820258883f4d60825c15b3bdc61add7b9623e1->enter($__internal_94009c8a78b55a3addaef148d9820258883f4d60825c15b3bdc61add7b9623e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_94009c8a78b55a3addaef148d9820258883f4d60825c15b3bdc61add7b9623e1->leave($__internal_94009c8a78b55a3addaef148d9820258883f4d60825c15b3bdc61add7b9623e1_prof);

        
        $__internal_703b02d5ea3f8c904c9383a8aec95df5018dbd6c8e18bda96bb570396391df56->leave($__internal_703b02d5ea3f8c904c9383a8aec95df5018dbd6c8e18bda96bb570396391df56_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a7f7feda64b09d0d164d063757f997cd8db99b7ec75921b8a9b9b620f07f64dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7f7feda64b09d0d164d063757f997cd8db99b7ec75921b8a9b9b620f07f64dc->enter($__internal_a7f7feda64b09d0d164d063757f997cd8db99b7ec75921b8a9b9b620f07f64dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_7a59333b889934fbd7488fff70b577bd19dc00b83b6682473ad42444c2b73874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a59333b889934fbd7488fff70b577bd19dc00b83b6682473ad42444c2b73874->enter($__internal_7a59333b889934fbd7488fff70b577bd19dc00b83b6682473ad42444c2b73874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_7a59333b889934fbd7488fff70b577bd19dc00b83b6682473ad42444c2b73874->leave($__internal_7a59333b889934fbd7488fff70b577bd19dc00b83b6682473ad42444c2b73874_prof);

        
        $__internal_a7f7feda64b09d0d164d063757f997cd8db99b7ec75921b8a9b9b620f07f64dc->leave($__internal_a7f7feda64b09d0d164d063757f997cd8db99b7ec75921b8a9b9b620f07f64dc_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_2ec8af738eba04362e0b13788f06a0bc5effa44a783413349a0ec6d4796439e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ec8af738eba04362e0b13788f06a0bc5effa44a783413349a0ec6d4796439e7->enter($__internal_2ec8af738eba04362e0b13788f06a0bc5effa44a783413349a0ec6d4796439e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_aa9336bcec065038d7499fa909fc54a83abe61b9d26fd045569ba1afa3707f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9336bcec065038d7499fa909fc54a83abe61b9d26fd045569ba1afa3707f74->enter($__internal_aa9336bcec065038d7499fa909fc54a83abe61b9d26fd045569ba1afa3707f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_aa9336bcec065038d7499fa909fc54a83abe61b9d26fd045569ba1afa3707f74->leave($__internal_aa9336bcec065038d7499fa909fc54a83abe61b9d26fd045569ba1afa3707f74_prof);

        
        $__internal_2ec8af738eba04362e0b13788f06a0bc5effa44a783413349a0ec6d4796439e7->leave($__internal_2ec8af738eba04362e0b13788f06a0bc5effa44a783413349a0ec6d4796439e7_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_a95e4bdc0d432dfc0789d7e30e19f0d2dc3852370026407f1e8b8e17cfb1fe0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a95e4bdc0d432dfc0789d7e30e19f0d2dc3852370026407f1e8b8e17cfb1fe0b->enter($__internal_a95e4bdc0d432dfc0789d7e30e19f0d2dc3852370026407f1e8b8e17cfb1fe0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_ee297c28e16414a93910f65c0943791a8ce027122843a25f2e7aba597370e890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee297c28e16414a93910f65c0943791a8ce027122843a25f2e7aba597370e890->enter($__internal_ee297c28e16414a93910f65c0943791a8ce027122843a25f2e7aba597370e890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ee297c28e16414a93910f65c0943791a8ce027122843a25f2e7aba597370e890->leave($__internal_ee297c28e16414a93910f65c0943791a8ce027122843a25f2e7aba597370e890_prof);

        
        $__internal_a95e4bdc0d432dfc0789d7e30e19f0d2dc3852370026407f1e8b8e17cfb1fe0b->leave($__internal_a95e4bdc0d432dfc0789d7e30e19f0d2dc3852370026407f1e8b8e17cfb1fe0b_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_75d24296c6a35e2020da3739ddd6c373a323a2e8bf80f122012d92a1d4078b73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75d24296c6a35e2020da3739ddd6c373a323a2e8bf80f122012d92a1d4078b73->enter($__internal_75d24296c6a35e2020da3739ddd6c373a323a2e8bf80f122012d92a1d4078b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_82e8a190fbb931bfea9b7399e8ceadd5da55c1265987a1108fda129994171e94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e8a190fbb931bfea9b7399e8ceadd5da55c1265987a1108fda129994171e94->enter($__internal_82e8a190fbb931bfea9b7399e8ceadd5da55c1265987a1108fda129994171e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_82e8a190fbb931bfea9b7399e8ceadd5da55c1265987a1108fda129994171e94->leave($__internal_82e8a190fbb931bfea9b7399e8ceadd5da55c1265987a1108fda129994171e94_prof);

        
        $__internal_75d24296c6a35e2020da3739ddd6c373a323a2e8bf80f122012d92a1d4078b73->leave($__internal_75d24296c6a35e2020da3739ddd6c373a323a2e8bf80f122012d92a1d4078b73_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_804ffe59baede05a78e76e57858549b224804ecd1edf28fe7c8e0e6b0d999c43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_804ffe59baede05a78e76e57858549b224804ecd1edf28fe7c8e0e6b0d999c43->enter($__internal_804ffe59baede05a78e76e57858549b224804ecd1edf28fe7c8e0e6b0d999c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_1e79f157a84278daa9de49f2de78f0db5df463ab2ed38f50a61fd97f1f3bbf8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e79f157a84278daa9de49f2de78f0db5df463ab2ed38f50a61fd97f1f3bbf8b->enter($__internal_1e79f157a84278daa9de49f2de78f0db5df463ab2ed38f50a61fd97f1f3bbf8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 209
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_1e79f157a84278daa9de49f2de78f0db5df463ab2ed38f50a61fd97f1f3bbf8b->leave($__internal_1e79f157a84278daa9de49f2de78f0db5df463ab2ed38f50a61fd97f1f3bbf8b_prof);

        
        $__internal_804ffe59baede05a78e76e57858549b224804ecd1edf28fe7c8e0e6b0d999c43->leave($__internal_804ffe59baede05a78e76e57858549b224804ecd1edf28fe7c8e0e6b0d999c43_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a5c9384c38e5f5f807e09833f8ff1888fa9bab2b817528dc0f9c42dcfb248a82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5c9384c38e5f5f807e09833f8ff1888fa9bab2b817528dc0f9c42dcfb248a82->enter($__internal_a5c9384c38e5f5f807e09833f8ff1888fa9bab2b817528dc0f9c42dcfb248a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e30431e4d0e9d68555ccbeaa40629c134e38bc36cadafbb357658c0204cf43bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30431e4d0e9d68555ccbeaa40629c134e38bc36cadafbb357658c0204cf43bc->enter($__internal_e30431e4d0e9d68555ccbeaa40629c134e38bc36cadafbb357658c0204cf43bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_e30431e4d0e9d68555ccbeaa40629c134e38bc36cadafbb357658c0204cf43bc->leave($__internal_e30431e4d0e9d68555ccbeaa40629c134e38bc36cadafbb357658c0204cf43bc_prof);

        
        $__internal_a5c9384c38e5f5f807e09833f8ff1888fa9bab2b817528dc0f9c42dcfb248a82->leave($__internal_a5c9384c38e5f5f807e09833f8ff1888fa9bab2b817528dc0f9c42dcfb248a82_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_b07204d5352885ffc6309d2f69b49ff363bf05caa453e5fd7e903495624dd1f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b07204d5352885ffc6309d2f69b49ff363bf05caa453e5fd7e903495624dd1f4->enter($__internal_b07204d5352885ffc6309d2f69b49ff363bf05caa453e5fd7e903495624dd1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_01aad42c25f5ec44f7b3bc01083b160f33d4e9c6ad9387799832d2eccd00c03c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01aad42c25f5ec44f7b3bc01083b160f33d4e9c6ad9387799832d2eccd00c03c->enter($__internal_01aad42c25f5ec44f7b3bc01083b160f33d4e9c6ad9387799832d2eccd00c03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_01aad42c25f5ec44f7b3bc01083b160f33d4e9c6ad9387799832d2eccd00c03c->leave($__internal_01aad42c25f5ec44f7b3bc01083b160f33d4e9c6ad9387799832d2eccd00c03c_prof);

        
        $__internal_b07204d5352885ffc6309d2f69b49ff363bf05caa453e5fd7e903495624dd1f4->leave($__internal_b07204d5352885ffc6309d2f69b49ff363bf05caa453e5fd7e903495624dd1f4_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_263008c4f2a6997bc7dc77332d1db2a372217ff56e38771318be0b06a90bf2db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_263008c4f2a6997bc7dc77332d1db2a372217ff56e38771318be0b06a90bf2db->enter($__internal_263008c4f2a6997bc7dc77332d1db2a372217ff56e38771318be0b06a90bf2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_9017d8868cc2450a651681b64cf00c1882a2d878e3b337417858f864ae1f552f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9017d8868cc2450a651681b64cf00c1882a2d878e3b337417858f864ae1f552f->enter($__internal_9017d8868cc2450a651681b64cf00c1882a2d878e3b337417858f864ae1f552f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9017d8868cc2450a651681b64cf00c1882a2d878e3b337417858f864ae1f552f->leave($__internal_9017d8868cc2450a651681b64cf00c1882a2d878e3b337417858f864ae1f552f_prof);

        
        $__internal_263008c4f2a6997bc7dc77332d1db2a372217ff56e38771318be0b06a90bf2db->leave($__internal_263008c4f2a6997bc7dc77332d1db2a372217ff56e38771318be0b06a90bf2db_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_955fea988a1e01602ceb2428a653bad7471a09a902ec2a1fc23eebad98b1e4cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_955fea988a1e01602ceb2428a653bad7471a09a902ec2a1fc23eebad98b1e4cf->enter($__internal_955fea988a1e01602ceb2428a653bad7471a09a902ec2a1fc23eebad98b1e4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_f7baec97f1dd5ef92a2eefa2b2007b0bf739b01eabef73e2c53d7338a019470c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7baec97f1dd5ef92a2eefa2b2007b0bf739b01eabef73e2c53d7338a019470c->enter($__internal_f7baec97f1dd5ef92a2eefa2b2007b0bf739b01eabef73e2c53d7338a019470c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f7baec97f1dd5ef92a2eefa2b2007b0bf739b01eabef73e2c53d7338a019470c->leave($__internal_f7baec97f1dd5ef92a2eefa2b2007b0bf739b01eabef73e2c53d7338a019470c_prof);

        
        $__internal_955fea988a1e01602ceb2428a653bad7471a09a902ec2a1fc23eebad98b1e4cf->leave($__internal_955fea988a1e01602ceb2428a653bad7471a09a902ec2a1fc23eebad98b1e4cf_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_c83c7654dcf123c60c74487ccd6e01434b0717ed29f6d5893596bcaa8b31fade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c83c7654dcf123c60c74487ccd6e01434b0717ed29f6d5893596bcaa8b31fade->enter($__internal_c83c7654dcf123c60c74487ccd6e01434b0717ed29f6d5893596bcaa8b31fade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_1881bbac83f1cabb18cea8217a64cc1b1ad6a322d38fef34e4669fa6d7baead2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1881bbac83f1cabb18cea8217a64cc1b1ad6a322d38fef34e4669fa6d7baead2->enter($__internal_1881bbac83f1cabb18cea8217a64cc1b1ad6a322d38fef34e4669fa6d7baead2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1881bbac83f1cabb18cea8217a64cc1b1ad6a322d38fef34e4669fa6d7baead2->leave($__internal_1881bbac83f1cabb18cea8217a64cc1b1ad6a322d38fef34e4669fa6d7baead2_prof);

        
        $__internal_c83c7654dcf123c60c74487ccd6e01434b0717ed29f6d5893596bcaa8b31fade->leave($__internal_c83c7654dcf123c60c74487ccd6e01434b0717ed29f6d5893596bcaa8b31fade_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_e2539e142c5da747894ce72f0bfeacdbcc8a2c44e42f2a8ba90c19b028468be6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2539e142c5da747894ce72f0bfeacdbcc8a2c44e42f2a8ba90c19b028468be6->enter($__internal_e2539e142c5da747894ce72f0bfeacdbcc8a2c44e42f2a8ba90c19b028468be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_5a0a2c260e95e07599db5e2ffb5cae618159fcaedaac4561eae46dbe79a66f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a0a2c260e95e07599db5e2ffb5cae618159fcaedaac4561eae46dbe79a66f12->enter($__internal_5a0a2c260e95e07599db5e2ffb5cae618159fcaedaac4561eae46dbe79a66f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5a0a2c260e95e07599db5e2ffb5cae618159fcaedaac4561eae46dbe79a66f12->leave($__internal_5a0a2c260e95e07599db5e2ffb5cae618159fcaedaac4561eae46dbe79a66f12_prof);

        
        $__internal_e2539e142c5da747894ce72f0bfeacdbcc8a2c44e42f2a8ba90c19b028468be6->leave($__internal_e2539e142c5da747894ce72f0bfeacdbcc8a2c44e42f2a8ba90c19b028468be6_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_e584d18f435dd537a42a53724bc07e71d8feb2d1f55854ba5438c0ea5c4a2e02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e584d18f435dd537a42a53724bc07e71d8feb2d1f55854ba5438c0ea5c4a2e02->enter($__internal_e584d18f435dd537a42a53724bc07e71d8feb2d1f55854ba5438c0ea5c4a2e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_5b187d647c3c300600b27749d086f6cb88f6bd1dbed244c9bd1d39b06899d74e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b187d647c3c300600b27749d086f6cb88f6bd1dbed244c9bd1d39b06899d74e->enter($__internal_5b187d647c3c300600b27749d086f6cb88f6bd1dbed244c9bd1d39b06899d74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_5b187d647c3c300600b27749d086f6cb88f6bd1dbed244c9bd1d39b06899d74e->leave($__internal_5b187d647c3c300600b27749d086f6cb88f6bd1dbed244c9bd1d39b06899d74e_prof);

        
        $__internal_e584d18f435dd537a42a53724bc07e71d8feb2d1f55854ba5438c0ea5c4a2e02->leave($__internal_e584d18f435dd537a42a53724bc07e71d8feb2d1f55854ba5438c0ea5c4a2e02_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_0cdd202e07ab5a44bc8685a43675cc2a5fb26b2508bf47b4921e7fa38d14563d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cdd202e07ab5a44bc8685a43675cc2a5fb26b2508bf47b4921e7fa38d14563d->enter($__internal_0cdd202e07ab5a44bc8685a43675cc2a5fb26b2508bf47b4921e7fa38d14563d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_2a20fec83e27fc42311cf1dffca09652a977bf06d9553187f3983b3ba941c335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a20fec83e27fc42311cf1dffca09652a977bf06d9553187f3983b3ba941c335->enter($__internal_2a20fec83e27fc42311cf1dffca09652a977bf06d9553187f3983b3ba941c335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_2a20fec83e27fc42311cf1dffca09652a977bf06d9553187f3983b3ba941c335->leave($__internal_2a20fec83e27fc42311cf1dffca09652a977bf06d9553187f3983b3ba941c335_prof);

        
        $__internal_0cdd202e07ab5a44bc8685a43675cc2a5fb26b2508bf47b4921e7fa38d14563d->leave($__internal_0cdd202e07ab5a44bc8685a43675cc2a5fb26b2508bf47b4921e7fa38d14563d_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_e501306cdbb02f24a4d56b6d640b2962cc391ddf8d5713bd6ad9f7411be94847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e501306cdbb02f24a4d56b6d640b2962cc391ddf8d5713bd6ad9f7411be94847->enter($__internal_e501306cdbb02f24a4d56b6d640b2962cc391ddf8d5713bd6ad9f7411be94847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_a91c341ef5c34857a97d3c0911d8d6731b93b7e9006a56c05781a6786be33d5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91c341ef5c34857a97d3c0911d8d6731b93b7e9006a56c05781a6786be33d5c->enter($__internal_a91c341ef5c34857a97d3c0911d8d6731b93b7e9006a56c05781a6786be33d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_a91c341ef5c34857a97d3c0911d8d6731b93b7e9006a56c05781a6786be33d5c->leave($__internal_a91c341ef5c34857a97d3c0911d8d6731b93b7e9006a56c05781a6786be33d5c_prof);

        
        $__internal_e501306cdbb02f24a4d56b6d640b2962cc391ddf8d5713bd6ad9f7411be94847->leave($__internal_e501306cdbb02f24a4d56b6d640b2962cc391ddf8d5713bd6ad9f7411be94847_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\wamp64\\www\\GSB-Visiteur\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
