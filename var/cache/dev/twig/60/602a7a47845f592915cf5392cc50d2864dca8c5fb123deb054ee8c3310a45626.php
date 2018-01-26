<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_b250c77af9079a71e8132d3eede198ef8e854a466bda8ddb7ce234c2f415e8e9 extends Twig_Template
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
        $__internal_8691a7d8a97b532faa3095814d337a41916f259ee1ffa231d00e970ceed9288d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8691a7d8a97b532faa3095814d337a41916f259ee1ffa231d00e970ceed9288d->enter($__internal_8691a7d8a97b532faa3095814d337a41916f259ee1ffa231d00e970ceed9288d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_fd6445120822b834a9d5c9dee1fe1888f0355bb78308e79792c4a49877834b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd6445120822b834a9d5c9dee1fe1888f0355bb78308e79792c4a49877834b57->enter($__internal_fd6445120822b834a9d5c9dee1fe1888f0355bb78308e79792c4a49877834b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('date_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('time_widget', $context, $blocks);
        // line 95
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 133
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 179
        echo "
";
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('form_label', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('choice_label', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('radio_label', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 229
        echo "
";
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('form_row', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('button_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('choice_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('date_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('time_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 265
        echo "
";
        // line 266
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('radio_row', $context, $blocks);
        // line 279
        echo "
";
        // line 281
        echo "
";
        // line 282
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_8691a7d8a97b532faa3095814d337a41916f259ee1ffa231d00e970ceed9288d->leave($__internal_8691a7d8a97b532faa3095814d337a41916f259ee1ffa231d00e970ceed9288d_prof);

        
        $__internal_fd6445120822b834a9d5c9dee1fe1888f0355bb78308e79792c4a49877834b57->leave($__internal_fd6445120822b834a9d5c9dee1fe1888f0355bb78308e79792c4a49877834b57_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_508f8de289dc962a498728fdf05dbd00c6299445f5a7650d599d0eb7e4524889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_508f8de289dc962a498728fdf05dbd00c6299445f5a7650d599d0eb7e4524889->enter($__internal_508f8de289dc962a498728fdf05dbd00c6299445f5a7650d599d0eb7e4524889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_a62e489cbd6ef4f61a9d4e2a0fb77df65030f0b19533bc0c1e39f8502e4f7d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a62e489cbd6ef4f61a9d4e2a0fb77df65030f0b19533bc0c1e39f8502e4f7d32->enter($__internal_a62e489cbd6ef4f61a9d4e2a0fb77df65030f0b19533bc0c1e39f8502e4f7d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a62e489cbd6ef4f61a9d4e2a0fb77df65030f0b19533bc0c1e39f8502e4f7d32->leave($__internal_a62e489cbd6ef4f61a9d4e2a0fb77df65030f0b19533bc0c1e39f8502e4f7d32_prof);

        
        $__internal_508f8de289dc962a498728fdf05dbd00c6299445f5a7650d599d0eb7e4524889->leave($__internal_508f8de289dc962a498728fdf05dbd00c6299445f5a7650d599d0eb7e4524889_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_7da9b8c1b34b431a20c36e15a96d1d3203c0c8f21a3881390ea0ea99ae4379de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7da9b8c1b34b431a20c36e15a96d1d3203c0c8f21a3881390ea0ea99ae4379de->enter($__internal_7da9b8c1b34b431a20c36e15a96d1d3203c0c8f21a3881390ea0ea99ae4379de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_7c4725478665415acaa13387d447ed0ea942517a0fdb26bb85c9c4b383fb2a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4725478665415acaa13387d447ed0ea942517a0fdb26bb85c9c4b383fb2a83->enter($__internal_7c4725478665415acaa13387d447ed0ea942517a0fdb26bb85c9c4b383fb2a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_7c4725478665415acaa13387d447ed0ea942517a0fdb26bb85c9c4b383fb2a83->leave($__internal_7c4725478665415acaa13387d447ed0ea942517a0fdb26bb85c9c4b383fb2a83_prof);

        
        $__internal_7da9b8c1b34b431a20c36e15a96d1d3203c0c8f21a3881390ea0ea99ae4379de->leave($__internal_7da9b8c1b34b431a20c36e15a96d1d3203c0c8f21a3881390ea0ea99ae4379de_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_289d761e7ae79e580b0560e892863356b07684bdc07a730dd3f6640cc80b688c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_289d761e7ae79e580b0560e892863356b07684bdc07a730dd3f6640cc80b688c->enter($__internal_289d761e7ae79e580b0560e892863356b07684bdc07a730dd3f6640cc80b688c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_4acc88c841c0b8bd08a4ba486eb17c67ac714bf82c3f51f4c07e8656be8632d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4acc88c841c0b8bd08a4ba486eb17c67ac714bf82c3f51f4c07e8656be8632d5->enter($__internal_4acc88c841c0b8bd08a4ba486eb17c67ac714bf82c3f51f4c07e8656be8632d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_4acc88c841c0b8bd08a4ba486eb17c67ac714bf82c3f51f4c07e8656be8632d5->leave($__internal_4acc88c841c0b8bd08a4ba486eb17c67ac714bf82c3f51f4c07e8656be8632d5_prof);

        
        $__internal_289d761e7ae79e580b0560e892863356b07684bdc07a730dd3f6640cc80b688c->leave($__internal_289d761e7ae79e580b0560e892863356b07684bdc07a730dd3f6640cc80b688c_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_da633281df701af21e3a40363f1628037ae0862f01aff34c25bc7b020a62eb3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da633281df701af21e3a40363f1628037ae0862f01aff34c25bc7b020a62eb3a->enter($__internal_da633281df701af21e3a40363f1628037ae0862f01aff34c25bc7b020a62eb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_2ba20c832a3715b6a86b3340f386acba62b2c1b34b24ec58e3be1a09bd9af4da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba20c832a3715b6a86b3340f386acba62b2c1b34b24ec58e3be1a09bd9af4da->enter($__internal_2ba20c832a3715b6a86b3340f386acba62b2c1b34b24ec58e3be1a09bd9af4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_1b54dc5cce5d887284b234455c66d9a76ff979b3a41857db0014d4020211b93a = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_65400d5053ac4f3f63fe3e28fdcc898c1774e4e16579a97ee265af79f206379c = "{{") && ('' === $__internal_65400d5053ac4f3f63fe3e28fdcc898c1774e4e16579a97ee265af79f206379c || 0 === strpos($__internal_1b54dc5cce5d887284b234455c66d9a76ff979b3a41857db0014d4020211b93a, $__internal_65400d5053ac4f3f63fe3e28fdcc898c1774e4e16579a97ee265af79f206379c)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_7cc1c2cbd3619ec1dde1131e16adfa238b08a1466dc995cf6a7fce6f00339f81 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_a5e6917a98c56525cf7395abb61e40d21625a3c844225c9cedb096bf7af52fda = "}}") && ('' === $__internal_a5e6917a98c56525cf7395abb61e40d21625a3c844225c9cedb096bf7af52fda || $__internal_a5e6917a98c56525cf7395abb61e40d21625a3c844225c9cedb096bf7af52fda === substr($__internal_7cc1c2cbd3619ec1dde1131e16adfa238b08a1466dc995cf6a7fce6f00339f81, -strlen($__internal_a5e6917a98c56525cf7395abb61e40d21625a3c844225c9cedb096bf7af52fda))));
        // line 25
        echo "    ";
        if ((($context["prepend"] ?? $this->getContext($context, "prepend")) || ($context["append"] ?? $this->getContext($context, "append")))) {
            // line 26
            echo "        <div class=\"input-group\">
            ";
            // line 27
            if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
                // line 28
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 30
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 31
            if (($context["append"] ?? $this->getContext($context, "append"))) {
                // line 32
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 34
            echo "        </div>
    ";
        } else {
            // line 36
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_2ba20c832a3715b6a86b3340f386acba62b2c1b34b24ec58e3be1a09bd9af4da->leave($__internal_2ba20c832a3715b6a86b3340f386acba62b2c1b34b24ec58e3be1a09bd9af4da_prof);

        
        $__internal_da633281df701af21e3a40363f1628037ae0862f01aff34c25bc7b020a62eb3a->leave($__internal_da633281df701af21e3a40363f1628037ae0862f01aff34c25bc7b020a62eb3a_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_d28fdc9bdbd18665777ba2b3fc919167f005a17bc9024c387cb60a0768d908e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d28fdc9bdbd18665777ba2b3fc919167f005a17bc9024c387cb60a0768d908e1->enter($__internal_d28fdc9bdbd18665777ba2b3fc919167f005a17bc9024c387cb60a0768d908e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_5b9a5ad46301f9b4bf6d56866ff0592ae0c8ac847502e74c389fe0f1a7ccbe4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9a5ad46301f9b4bf6d56866ff0592ae0c8ac847502e74c389fe0f1a7ccbe4a->enter($__internal_5b9a5ad46301f9b4bf6d56866ff0592ae0c8ac847502e74c389fe0f1a7ccbe4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_5b9a5ad46301f9b4bf6d56866ff0592ae0c8ac847502e74c389fe0f1a7ccbe4a->leave($__internal_5b9a5ad46301f9b4bf6d56866ff0592ae0c8ac847502e74c389fe0f1a7ccbe4a_prof);

        
        $__internal_d28fdc9bdbd18665777ba2b3fc919167f005a17bc9024c387cb60a0768d908e1->leave($__internal_d28fdc9bdbd18665777ba2b3fc919167f005a17bc9024c387cb60a0768d908e1_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_fc0f9636dc9280a100faa91c2c9367b6f2b24fe139fa4ef9ff62ff21c073c458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc0f9636dc9280a100faa91c2c9367b6f2b24fe139fa4ef9ff62ff21c073c458->enter($__internal_fc0f9636dc9280a100faa91c2c9367b6f2b24fe139fa4ef9ff62ff21c073c458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_a3ec1ea0c2594e16339035eff8a155f1ef9a377101066841a535631a1d8e3255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ec1ea0c2594e16339035eff8a155f1ef9a377101066841a535631a1d8e3255->enter($__internal_a3ec1ea0c2594e16339035eff8a155f1ef9a377101066841a535631a1d8e3255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 48
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 51
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 52
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 57
            echo "</div>";
        }
        
        $__internal_a3ec1ea0c2594e16339035eff8a155f1ef9a377101066841a535631a1d8e3255->leave($__internal_a3ec1ea0c2594e16339035eff8a155f1ef9a377101066841a535631a1d8e3255_prof);

        
        $__internal_fc0f9636dc9280a100faa91c2c9367b6f2b24fe139fa4ef9ff62ff21c073c458->leave($__internal_fc0f9636dc9280a100faa91c2c9367b6f2b24fe139fa4ef9ff62ff21c073c458_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_12f73bd2bc6b8873ba084cc75aaaab7580d610f2116b0b843333357a4fe43741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12f73bd2bc6b8873ba084cc75aaaab7580d610f2116b0b843333357a4fe43741->enter($__internal_12f73bd2bc6b8873ba084cc75aaaab7580d610f2116b0b843333357a4fe43741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_2d93c13de77ca89bcb4d8bf1f85b8112d669749cea095a7b69494350ba748438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d93c13de77ca89bcb4d8bf1f85b8112d669749cea095a7b69494350ba748438->enter($__internal_2d93c13de77ca89bcb4d8bf1f85b8112d669749cea095a7b69494350ba748438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 62
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 63
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 65
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 66
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 67
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 69
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 70
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 71
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 72
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 74
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 75
                echo "</div>";
            }
        }
        
        $__internal_2d93c13de77ca89bcb4d8bf1f85b8112d669749cea095a7b69494350ba748438->leave($__internal_2d93c13de77ca89bcb4d8bf1f85b8112d669749cea095a7b69494350ba748438_prof);

        
        $__internal_12f73bd2bc6b8873ba084cc75aaaab7580d610f2116b0b843333357a4fe43741->leave($__internal_12f73bd2bc6b8873ba084cc75aaaab7580d610f2116b0b843333357a4fe43741_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_9612e912ba97cbbe0bbbf0b82919d811c4166a2eca726b9058e8fd131e7d0e33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9612e912ba97cbbe0bbbf0b82919d811c4166a2eca726b9058e8fd131e7d0e33->enter($__internal_9612e912ba97cbbe0bbbf0b82919d811c4166a2eca726b9058e8fd131e7d0e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_139c40438bfac6fa90f75caae46c5e65239005bf6a0905b3944b0fa377d7bc6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139c40438bfac6fa90f75caae46c5e65239005bf6a0905b3944b0fa377d7bc6a->enter($__internal_139c40438bfac6fa90f75caae46c5e65239005bf6a0905b3944b0fa377d7bc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 81
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 82
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 84
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 85
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 86
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 89
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 90
                echo "</div>";
            }
        }
        
        $__internal_139c40438bfac6fa90f75caae46c5e65239005bf6a0905b3944b0fa377d7bc6a->leave($__internal_139c40438bfac6fa90f75caae46c5e65239005bf6a0905b3944b0fa377d7bc6a_prof);

        
        $__internal_9612e912ba97cbbe0bbbf0b82919d811c4166a2eca726b9058e8fd131e7d0e33->leave($__internal_9612e912ba97cbbe0bbbf0b82919d811c4166a2eca726b9058e8fd131e7d0e33_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_158953519cf0df113808b0a0f43cb8752260f7587852ced7e3bb5c568661d2e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_158953519cf0df113808b0a0f43cb8752260f7587852ced7e3bb5c568661d2e0->enter($__internal_158953519cf0df113808b0a0f43cb8752260f7587852ced7e3bb5c568661d2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_eaaaded101a16f28e283c2cbdd4866a9de02d3170b2fc96d739779684a040656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaaaded101a16f28e283c2cbdd4866a9de02d3170b2fc96d739779684a040656->enter($__internal_eaaaded101a16f28e283c2cbdd4866a9de02d3170b2fc96d739779684a040656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 96
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 102
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 103
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 106
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 108
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 109
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 110
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 111
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 112
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 113
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 117
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 119
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 120
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 121
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 122
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 123
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 124
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 128
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 129
            echo "</div>";
        }
        
        $__internal_eaaaded101a16f28e283c2cbdd4866a9de02d3170b2fc96d739779684a040656->leave($__internal_eaaaded101a16f28e283c2cbdd4866a9de02d3170b2fc96d739779684a040656_prof);

        
        $__internal_158953519cf0df113808b0a0f43cb8752260f7587852ced7e3bb5c568661d2e0->leave($__internal_158953519cf0df113808b0a0f43cb8752260f7587852ced7e3bb5c568661d2e0_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_5afaf592ae9520943b365fe1df556abdc81839ab9c26e74dc5d2e41ca2e00957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5afaf592ae9520943b365fe1df556abdc81839ab9c26e74dc5d2e41ca2e00957->enter($__internal_5afaf592ae9520943b365fe1df556abdc81839ab9c26e74dc5d2e41ca2e00957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_0de562ff5cae24f72d619c0110e5a4d93700aa13ac995a560d985be69b6d0fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de562ff5cae24f72d619c0110e5a4d93700aa13ac995a560d985be69b6d0fb3->enter($__internal_0de562ff5cae24f72d619c0110e5a4d93700aa13ac995a560d985be69b6d0fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_0de562ff5cae24f72d619c0110e5a4d93700aa13ac995a560d985be69b6d0fb3->leave($__internal_0de562ff5cae24f72d619c0110e5a4d93700aa13ac995a560d985be69b6d0fb3_prof);

        
        $__internal_5afaf592ae9520943b365fe1df556abdc81839ab9c26e74dc5d2e41ca2e00957->leave($__internal_5afaf592ae9520943b365fe1df556abdc81839ab9c26e74dc5d2e41ca2e00957_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_75680f62baef7c9d171dee4f1b90f55f5883e56d572d8f35f1e06869d8e57543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75680f62baef7c9d171dee4f1b90f55f5883e56d572d8f35f1e06869d8e57543->enter($__internal_75680f62baef7c9d171dee4f1b90f55f5883e56d572d8f35f1e06869d8e57543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_683b2eb78df9d0c0f57a2ff719de8ddf9986ed3ff4cf3770fc76472740dd0e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683b2eb78df9d0c0f57a2ff719de8ddf9986ed3ff4cf3770fc76472740dd0e92->enter($__internal_683b2eb78df9d0c0f57a2ff719de8ddf9986ed3ff4cf3770fc76472740dd0e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 139
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 141
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 142
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 143
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 147
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 149
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 150
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 151
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "</div>";
        }
        
        $__internal_683b2eb78df9d0c0f57a2ff719de8ddf9986ed3ff4cf3770fc76472740dd0e92->leave($__internal_683b2eb78df9d0c0f57a2ff719de8ddf9986ed3ff4cf3770fc76472740dd0e92_prof);

        
        $__internal_75680f62baef7c9d171dee4f1b90f55f5883e56d572d8f35f1e06869d8e57543->leave($__internal_75680f62baef7c9d171dee4f1b90f55f5883e56d572d8f35f1e06869d8e57543_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_a1f6aaf253ad0a1554de2ab683605cbae00ea2ff96e407c78506541518149853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f6aaf253ad0a1554de2ab683605cbae00ea2ff96e407c78506541518149853->enter($__internal_a1f6aaf253ad0a1554de2ab683605cbae00ea2ff96e407c78506541518149853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_0ad00143c53225826634ee92c5be199349b9806c554457a71e3297dddbc825c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad00143c53225826634ee92c5be199349b9806c554457a71e3297dddbc825c5->enter($__internal_0ad00143c53225826634ee92c5be199349b9806c554457a71e3297dddbc825c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 159
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 160
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 161
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 163
            echo "<div class=\"checkbox\">";
            // line 164
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 165
            echo "</div>";
        }
        
        $__internal_0ad00143c53225826634ee92c5be199349b9806c554457a71e3297dddbc825c5->leave($__internal_0ad00143c53225826634ee92c5be199349b9806c554457a71e3297dddbc825c5_prof);

        
        $__internal_a1f6aaf253ad0a1554de2ab683605cbae00ea2ff96e407c78506541518149853->leave($__internal_a1f6aaf253ad0a1554de2ab683605cbae00ea2ff96e407c78506541518149853_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_50e3209a66e9a576432c744cd4c28345f9179f97d255f029115ab6eceef1ac50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50e3209a66e9a576432c744cd4c28345f9179f97d255f029115ab6eceef1ac50->enter($__internal_50e3209a66e9a576432c744cd4c28345f9179f97d255f029115ab6eceef1ac50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_982a881870d631e874d11934d5843205777954852bc328b3039e6ea9522281d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982a881870d631e874d11934d5843205777954852bc328b3039e6ea9522281d1->enter($__internal_982a881870d631e874d11934d5843205777954852bc328b3039e6ea9522281d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 170
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 171
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 172
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 174
            echo "<div class=\"radio\">";
            // line 175
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 176
            echo "</div>";
        }
        
        $__internal_982a881870d631e874d11934d5843205777954852bc328b3039e6ea9522281d1->leave($__internal_982a881870d631e874d11934d5843205777954852bc328b3039e6ea9522281d1_prof);

        
        $__internal_50e3209a66e9a576432c744cd4c28345f9179f97d255f029115ab6eceef1ac50->leave($__internal_50e3209a66e9a576432c744cd4c28345f9179f97d255f029115ab6eceef1ac50_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_0bb591ddd2d315e80b3a9f0f9250d0a63598516746f5cf7e985f16a0aeb6eb18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bb591ddd2d315e80b3a9f0f9250d0a63598516746f5cf7e985f16a0aeb6eb18->enter($__internal_0bb591ddd2d315e80b3a9f0f9250d0a63598516746f5cf7e985f16a0aeb6eb18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_29c5324a583045f1bd1b23be369e048a1eb4c7ca77e6b68b862ba415fd4d2d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c5324a583045f1bd1b23be369e048a1eb4c7ca77e6b68b862ba415fd4d2d98->enter($__internal_29c5324a583045f1bd1b23be369e048a1eb4c7ca77e6b68b862ba415fd4d2d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_29c5324a583045f1bd1b23be369e048a1eb4c7ca77e6b68b862ba415fd4d2d98->leave($__internal_29c5324a583045f1bd1b23be369e048a1eb4c7ca77e6b68b862ba415fd4d2d98_prof);

        
        $__internal_0bb591ddd2d315e80b3a9f0f9250d0a63598516746f5cf7e985f16a0aeb6eb18->leave($__internal_0bb591ddd2d315e80b3a9f0f9250d0a63598516746f5cf7e985f16a0aeb6eb18_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_5d665a77a192350e6f666dd1c82c29fea666f1eec5f4d86844226ce1dbc00ddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d665a77a192350e6f666dd1c82c29fea666f1eec5f4d86844226ce1dbc00ddc->enter($__internal_5d665a77a192350e6f666dd1c82c29fea666f1eec5f4d86844226ce1dbc00ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_de96bdc336348e6eee12faabc501f9a66c7607bb30b372822efd34365966a5d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de96bdc336348e6eee12faabc501f9a66c7607bb30b372822efd34365966a5d4->enter($__internal_de96bdc336348e6eee12faabc501f9a66c7607bb30b372822efd34365966a5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_de96bdc336348e6eee12faabc501f9a66c7607bb30b372822efd34365966a5d4->leave($__internal_de96bdc336348e6eee12faabc501f9a66c7607bb30b372822efd34365966a5d4_prof);

        
        $__internal_5d665a77a192350e6f666dd1c82c29fea666f1eec5f4d86844226ce1dbc00ddc->leave($__internal_5d665a77a192350e6f666dd1c82c29fea666f1eec5f4d86844226ce1dbc00ddc_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_47c59f236021066abf67940c0f959d3400ebb40e21d2efc8c231dc7c45518880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47c59f236021066abf67940c0f959d3400ebb40e21d2efc8c231dc7c45518880->enter($__internal_47c59f236021066abf67940c0f959d3400ebb40e21d2efc8c231dc7c45518880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_d4db876b51ba606bb9a89e083be41123803ea0590049865708dd5f8776684a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4db876b51ba606bb9a89e083be41123803ea0590049865708dd5f8776684a1d->enter($__internal_d4db876b51ba606bb9a89e083be41123803ea0590049865708dd5f8776684a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d4db876b51ba606bb9a89e083be41123803ea0590049865708dd5f8776684a1d->leave($__internal_d4db876b51ba606bb9a89e083be41123803ea0590049865708dd5f8776684a1d_prof);

        
        $__internal_47c59f236021066abf67940c0f959d3400ebb40e21d2efc8c231dc7c45518880->leave($__internal_47c59f236021066abf67940c0f959d3400ebb40e21d2efc8c231dc7c45518880_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_d17b38d060f871d5c2be476c990105671f52770fbfee083b8cff0d06b61a104e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d17b38d060f871d5c2be476c990105671f52770fbfee083b8cff0d06b61a104e->enter($__internal_d17b38d060f871d5c2be476c990105671f52770fbfee083b8cff0d06b61a104e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_6ae31b22f7fe1fe8f0f38df6806c4c616c44838378ac7c827dc9f270e59d6307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae31b22f7fe1fe8f0f38df6806c4c616c44838378ac7c827dc9f270e59d6307->enter($__internal_6ae31b22f7fe1fe8f0f38df6806c4c616c44838378ac7c827dc9f270e59d6307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6ae31b22f7fe1fe8f0f38df6806c4c616c44838378ac7c827dc9f270e59d6307->leave($__internal_6ae31b22f7fe1fe8f0f38df6806c4c616c44838378ac7c827dc9f270e59d6307_prof);

        
        $__internal_d17b38d060f871d5c2be476c990105671f52770fbfee083b8cff0d06b61a104e->leave($__internal_d17b38d060f871d5c2be476c990105671f52770fbfee083b8cff0d06b61a104e_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_1f3efba1605d360a88df3f0496cc02d3f5096ad165b06c4b25530bd3f114789c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f3efba1605d360a88df3f0496cc02d3f5096ad165b06c4b25530bd3f114789c->enter($__internal_1f3efba1605d360a88df3f0496cc02d3f5096ad165b06c4b25530bd3f114789c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_a6b05c06f95375f60238876a9ea51b1a5f36158524764fb9a19ae18e21df49e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b05c06f95375f60238876a9ea51b1a5f36158524764fb9a19ae18e21df49e7->enter($__internal_a6b05c06f95375f60238876a9ea51b1a5f36158524764fb9a19ae18e21df49e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 206
        echo "    ";
        // line 207
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 208
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 209
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 210
                echo "        ";
            }
            // line 211
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 212
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 213
                echo "        ";
            }
            // line 214
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 215
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 216
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 217
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 218
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 221
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 224
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
            // line 225
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 226
            echo "</label>
    ";
        }
        
        $__internal_a6b05c06f95375f60238876a9ea51b1a5f36158524764fb9a19ae18e21df49e7->leave($__internal_a6b05c06f95375f60238876a9ea51b1a5f36158524764fb9a19ae18e21df49e7_prof);

        
        $__internal_1f3efba1605d360a88df3f0496cc02d3f5096ad165b06c4b25530bd3f114789c->leave($__internal_1f3efba1605d360a88df3f0496cc02d3f5096ad165b06c4b25530bd3f114789c_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_cec426971a5d0464c8da2acd96d5d36fe07da3324c484fb87563adb3bbebc7f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cec426971a5d0464c8da2acd96d5d36fe07da3324c484fb87563adb3bbebc7f6->enter($__internal_cec426971a5d0464c8da2acd96d5d36fe07da3324c484fb87563adb3bbebc7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_88e518c03b71f2d21d01e960acfc893abb1679ec9fa35f3860bfd74ba9f15cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e518c03b71f2d21d01e960acfc893abb1679ec9fa35f3860bfd74ba9f15cf1->enter($__internal_88e518c03b71f2d21d01e960acfc893abb1679ec9fa35f3860bfd74ba9f15cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 233
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 235
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 236
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 237
        echo "</div>";
        
        $__internal_88e518c03b71f2d21d01e960acfc893abb1679ec9fa35f3860bfd74ba9f15cf1->leave($__internal_88e518c03b71f2d21d01e960acfc893abb1679ec9fa35f3860bfd74ba9f15cf1_prof);

        
        $__internal_cec426971a5d0464c8da2acd96d5d36fe07da3324c484fb87563adb3bbebc7f6->leave($__internal_cec426971a5d0464c8da2acd96d5d36fe07da3324c484fb87563adb3bbebc7f6_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_e4de3fd53dce1c9fd952d52f26eb3d83f6e7e127e1c3542bbfac8485d8f63be9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4de3fd53dce1c9fd952d52f26eb3d83f6e7e127e1c3542bbfac8485d8f63be9->enter($__internal_e4de3fd53dce1c9fd952d52f26eb3d83f6e7e127e1c3542bbfac8485d8f63be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_849689c93d7a4d10bc36c08dee71c6adeb01810db035077710d62480ec78c3e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_849689c93d7a4d10bc36c08dee71c6adeb01810db035077710d62480ec78c3e0->enter($__internal_849689c93d7a4d10bc36c08dee71c6adeb01810db035077710d62480ec78c3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_849689c93d7a4d10bc36c08dee71c6adeb01810db035077710d62480ec78c3e0->leave($__internal_849689c93d7a4d10bc36c08dee71c6adeb01810db035077710d62480ec78c3e0_prof);

        
        $__internal_e4de3fd53dce1c9fd952d52f26eb3d83f6e7e127e1c3542bbfac8485d8f63be9->leave($__internal_e4de3fd53dce1c9fd952d52f26eb3d83f6e7e127e1c3542bbfac8485d8f63be9_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_1f49c8029391b9f362a528f754e50392df725d326e62afb940e37c5372d58759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f49c8029391b9f362a528f754e50392df725d326e62afb940e37c5372d58759->enter($__internal_1f49c8029391b9f362a528f754e50392df725d326e62afb940e37c5372d58759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_2b9788acf49798d754803c8ceaa476cc75b945d3041642835122f8ef9cc58ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9788acf49798d754803c8ceaa476cc75b945d3041642835122f8ef9cc58ceb->enter($__internal_2b9788acf49798d754803c8ceaa476cc75b945d3041642835122f8ef9cc58ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2b9788acf49798d754803c8ceaa476cc75b945d3041642835122f8ef9cc58ceb->leave($__internal_2b9788acf49798d754803c8ceaa476cc75b945d3041642835122f8ef9cc58ceb_prof);

        
        $__internal_1f49c8029391b9f362a528f754e50392df725d326e62afb940e37c5372d58759->leave($__internal_1f49c8029391b9f362a528f754e50392df725d326e62afb940e37c5372d58759_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_2663b72e8ab16a7aa36769c7c83aa408724e69c00e5b77b843d1e80ebd7267d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2663b72e8ab16a7aa36769c7c83aa408724e69c00e5b77b843d1e80ebd7267d4->enter($__internal_2663b72e8ab16a7aa36769c7c83aa408724e69c00e5b77b843d1e80ebd7267d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_9471cd93a9d85d3b06b5f87d3f0070f9d524cf09c735433a721da1ea0b95e7bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9471cd93a9d85d3b06b5f87d3f0070f9d524cf09c735433a721da1ea0b95e7bb->enter($__internal_9471cd93a9d85d3b06b5f87d3f0070f9d524cf09c735433a721da1ea0b95e7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9471cd93a9d85d3b06b5f87d3f0070f9d524cf09c735433a721da1ea0b95e7bb->leave($__internal_9471cd93a9d85d3b06b5f87d3f0070f9d524cf09c735433a721da1ea0b95e7bb_prof);

        
        $__internal_2663b72e8ab16a7aa36769c7c83aa408724e69c00e5b77b843d1e80ebd7267d4->leave($__internal_2663b72e8ab16a7aa36769c7c83aa408724e69c00e5b77b843d1e80ebd7267d4_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_84502b117ac7d55005037b04dc7e9ae35e432fecfb9c90a0126e56e2e8b681b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84502b117ac7d55005037b04dc7e9ae35e432fecfb9c90a0126e56e2e8b681b4->enter($__internal_84502b117ac7d55005037b04dc7e9ae35e432fecfb9c90a0126e56e2e8b681b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_38a88a25dcfa2227f22f3ba7422fdad9f35cfe1f7d86696b1c06291fea089bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a88a25dcfa2227f22f3ba7422fdad9f35cfe1f7d86696b1c06291fea089bd4->enter($__internal_38a88a25dcfa2227f22f3ba7422fdad9f35cfe1f7d86696b1c06291fea089bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_38a88a25dcfa2227f22f3ba7422fdad9f35cfe1f7d86696b1c06291fea089bd4->leave($__internal_38a88a25dcfa2227f22f3ba7422fdad9f35cfe1f7d86696b1c06291fea089bd4_prof);

        
        $__internal_84502b117ac7d55005037b04dc7e9ae35e432fecfb9c90a0126e56e2e8b681b4->leave($__internal_84502b117ac7d55005037b04dc7e9ae35e432fecfb9c90a0126e56e2e8b681b4_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_80bed76d4b3bbe82a28ec995b465037af36d5baa9c09386d98e012c58775fe3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80bed76d4b3bbe82a28ec995b465037af36d5baa9c09386d98e012c58775fe3f->enter($__internal_80bed76d4b3bbe82a28ec995b465037af36d5baa9c09386d98e012c58775fe3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_08540a05f178d41091f4d8872db48e13cc6ac5d49dbfde9f007f28b5920fcfa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08540a05f178d41091f4d8872db48e13cc6ac5d49dbfde9f007f28b5920fcfa6->enter($__internal_08540a05f178d41091f4d8872db48e13cc6ac5d49dbfde9f007f28b5920fcfa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_08540a05f178d41091f4d8872db48e13cc6ac5d49dbfde9f007f28b5920fcfa6->leave($__internal_08540a05f178d41091f4d8872db48e13cc6ac5d49dbfde9f007f28b5920fcfa6_prof);

        
        $__internal_80bed76d4b3bbe82a28ec995b465037af36d5baa9c09386d98e012c58775fe3f->leave($__internal_80bed76d4b3bbe82a28ec995b465037af36d5baa9c09386d98e012c58775fe3f_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_fd7b56c1775060430597c2adf9534ddb177a8718d3a0a53ef4bbebc9ea3b48b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd7b56c1775060430597c2adf9534ddb177a8718d3a0a53ef4bbebc9ea3b48b6->enter($__internal_fd7b56c1775060430597c2adf9534ddb177a8718d3a0a53ef4bbebc9ea3b48b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_0356e1c47370e42bc07d730347e4f38bad168749ec04d5b36e0090b45d4b26ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0356e1c47370e42bc07d730347e4f38bad168749ec04d5b36e0090b45d4b26ef->enter($__internal_0356e1c47370e42bc07d730347e4f38bad168749ec04d5b36e0090b45d4b26ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 267
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 268
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 269
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 270
        echo "</div>";
        
        $__internal_0356e1c47370e42bc07d730347e4f38bad168749ec04d5b36e0090b45d4b26ef->leave($__internal_0356e1c47370e42bc07d730347e4f38bad168749ec04d5b36e0090b45d4b26ef_prof);

        
        $__internal_fd7b56c1775060430597c2adf9534ddb177a8718d3a0a53ef4bbebc9ea3b48b6->leave($__internal_fd7b56c1775060430597c2adf9534ddb177a8718d3a0a53ef4bbebc9ea3b48b6_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_8130d4a42139bb48d1abc857399c77310e6a2d5f9c6c9d4218b1c81a36a050ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8130d4a42139bb48d1abc857399c77310e6a2d5f9c6c9d4218b1c81a36a050ef->enter($__internal_8130d4a42139bb48d1abc857399c77310e6a2d5f9c6c9d4218b1c81a36a050ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_7487fd9b5e434fe343b952025cfbca9a0c56657c7b3201e1709fda94d845255f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7487fd9b5e434fe343b952025cfbca9a0c56657c7b3201e1709fda94d845255f->enter($__internal_7487fd9b5e434fe343b952025cfbca9a0c56657c7b3201e1709fda94d845255f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 274
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 275
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 277
        echo "</div>";
        
        $__internal_7487fd9b5e434fe343b952025cfbca9a0c56657c7b3201e1709fda94d845255f->leave($__internal_7487fd9b5e434fe343b952025cfbca9a0c56657c7b3201e1709fda94d845255f_prof);

        
        $__internal_8130d4a42139bb48d1abc857399c77310e6a2d5f9c6c9d4218b1c81a36a050ef->leave($__internal_8130d4a42139bb48d1abc857399c77310e6a2d5f9c6c9d4218b1c81a36a050ef_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_a233cfc2136950d20be0b374db38eb9b3c070c7debfb19fb88e774e723588f29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a233cfc2136950d20be0b374db38eb9b3c070c7debfb19fb88e774e723588f29->enter($__internal_a233cfc2136950d20be0b374db38eb9b3c070c7debfb19fb88e774e723588f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_649f64a7c3babbf5f06cac25fb77f468f699ad947dee7b1028bef411ba552667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_649f64a7c3babbf5f06cac25fb77f468f699ad947dee7b1028bef411ba552667->enter($__internal_649f64a7c3babbf5f06cac25fb77f468f699ad947dee7b1028bef411ba552667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 283
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 284
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 285
            echo "    <ul class=\"list-unstyled\">";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 287
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "</ul>
    ";
            // line 290
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_649f64a7c3babbf5f06cac25fb77f468f699ad947dee7b1028bef411ba552667->leave($__internal_649f64a7c3babbf5f06cac25fb77f468f699ad947dee7b1028bef411ba552667_prof);

        
        $__internal_a233cfc2136950d20be0b374db38eb9b3c070c7debfb19fb88e774e723588f29->leave($__internal_a233cfc2136950d20be0b374db38eb9b3c070c7debfb19fb88e774e723588f29_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1149 => 290,  1146 => 289,  1138 => 287,  1134 => 286,  1132 => 285,  1126 => 284,  1124 => 283,  1115 => 282,  1105 => 277,  1103 => 276,  1101 => 275,  1095 => 274,  1086 => 273,  1076 => 270,  1074 => 269,  1072 => 268,  1066 => 267,  1057 => 266,  1047 => 263,  1045 => 262,  1036 => 261,  1026 => 258,  1024 => 257,  1015 => 256,  1005 => 253,  1003 => 252,  994 => 251,  984 => 248,  982 => 247,  973 => 246,  963 => 243,  961 => 242,  959 => 241,  950 => 240,  940 => 237,  938 => 236,  936 => 235,  934 => 234,  928 => 233,  919 => 232,  907 => 226,  903 => 225,  888 => 224,  884 => 221,  881 => 218,  880 => 217,  879 => 216,  877 => 215,  874 => 214,  871 => 213,  868 => 212,  865 => 211,  862 => 210,  859 => 209,  856 => 208,  853 => 207,  851 => 206,  842 => 205,  832 => 202,  830 => 200,  821 => 199,  811 => 196,  809 => 194,  800 => 193,  790 => 190,  788 => 189,  779 => 187,  769 => 184,  767 => 183,  758 => 182,  747 => 176,  745 => 175,  743 => 174,  740 => 172,  738 => 171,  736 => 170,  727 => 169,  716 => 165,  714 => 164,  712 => 163,  709 => 161,  707 => 160,  705 => 159,  696 => 158,  685 => 154,  679 => 151,  678 => 150,  677 => 149,  673 => 148,  669 => 147,  662 => 143,  661 => 142,  660 => 141,  656 => 140,  654 => 139,  645 => 138,  635 => 135,  633 => 134,  624 => 133,  613 => 129,  609 => 128,  604 => 124,  598 => 123,  592 => 122,  586 => 121,  580 => 120,  574 => 119,  568 => 118,  562 => 117,  557 => 113,  551 => 112,  545 => 111,  539 => 110,  533 => 109,  527 => 108,  521 => 107,  515 => 106,  510 => 103,  507 => 102,  505 => 101,  501 => 100,  499 => 99,  496 => 97,  494 => 96,  485 => 95,  473 => 90,  470 => 89,  460 => 88,  455 => 86,  453 => 85,  451 => 84,  448 => 82,  446 => 81,  437 => 80,  425 => 75,  423 => 74,  421 => 72,  420 => 71,  419 => 70,  418 => 69,  413 => 67,  411 => 66,  409 => 65,  406 => 63,  404 => 62,  395 => 61,  384 => 57,  382 => 56,  380 => 55,  378 => 54,  376 => 53,  372 => 52,  370 => 51,  367 => 49,  365 => 48,  356 => 47,  345 => 43,  343 => 42,  341 => 41,  332 => 40,  321 => 36,  317 => 34,  311 => 32,  309 => 31,  307 => 30,  301 => 28,  299 => 27,  296 => 26,  293 => 25,  290 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 282,  200 => 281,  197 => 279,  195 => 273,  192 => 272,  190 => 266,  187 => 265,  185 => 261,  182 => 260,  180 => 256,  177 => 255,  175 => 251,  172 => 250,  170 => 246,  167 => 245,  165 => 240,  162 => 239,  160 => 232,  157 => 231,  154 => 229,  152 => 205,  149 => 204,  147 => 199,  144 => 198,  142 => 193,  139 => 192,  137 => 187,  134 => 186,  132 => 182,  129 => 181,  126 => 179,  124 => 169,  121 => 168,  119 => 158,  116 => 157,  114 => 138,  111 => 137,  109 => 133,  107 => 95,  105 => 80,  102 => 79,  100 => 61,  97 => 60,  95 => 47,  92 => 46,  90 => 40,  87 => 39,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
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
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

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
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
