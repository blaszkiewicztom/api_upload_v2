<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_0100111f239fee85d11b6bd7463503b30d158f2da1a5c3f544bba61d6ba51eff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
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
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ca41810a3868bd6516103cd9f0bf399e57749290dc156c35af06d7805421beb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ca41810a3868bd6516103cd9f0bf399e57749290dc156c35af06d7805421beb->enter($__internal_2ca41810a3868bd6516103cd9f0bf399e57749290dc156c35af06d7805421beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_fa3e0ac662bb8f2e969e3d53503f76e6957b63d3d815bbbbeb69b8f760208acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa3e0ac662bb8f2e969e3d53503f76e6957b63d3d815bbbbeb69b8f760208acc->enter($__internal_fa3e0ac662bb8f2e969e3d53503f76e6957b63d3d815bbbbeb69b8f760208acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ca41810a3868bd6516103cd9f0bf399e57749290dc156c35af06d7805421beb->leave($__internal_2ca41810a3868bd6516103cd9f0bf399e57749290dc156c35af06d7805421beb_prof);

        
        $__internal_fa3e0ac662bb8f2e969e3d53503f76e6957b63d3d815bbbbeb69b8f760208acc->leave($__internal_fa3e0ac662bb8f2e969e3d53503f76e6957b63d3d815bbbbeb69b8f760208acc_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b133894a9d0fbdaa359c3bc3abca2f1e59b74ed21c68518075c2de073be9ac82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b133894a9d0fbdaa359c3bc3abca2f1e59b74ed21c68518075c2de073be9ac82->enter($__internal_b133894a9d0fbdaa359c3bc3abca2f1e59b74ed21c68518075c2de073be9ac82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_d83fec9029ccaf6ec9e8848271d0d2213c29a694d014fa2f79a376cd1d492cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d83fec9029ccaf6ec9e8848271d0d2213c29a694d014fa2f79a376cd1d492cb3->enter($__internal_d83fec9029ccaf6ec9e8848271d0d2213c29a694d014fa2f79a376cd1d492cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d83fec9029ccaf6ec9e8848271d0d2213c29a694d014fa2f79a376cd1d492cb3->leave($__internal_d83fec9029ccaf6ec9e8848271d0d2213c29a694d014fa2f79a376cd1d492cb3_prof);

        
        $__internal_b133894a9d0fbdaa359c3bc3abca2f1e59b74ed21c68518075c2de073be9ac82->leave($__internal_b133894a9d0fbdaa359c3bc3abca2f1e59b74ed21c68518075c2de073be9ac82_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_ca32fc1efbc1e09bb454593c4c03b530209441c4d7e14e64707789a478f5f2e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca32fc1efbc1e09bb454593c4c03b530209441c4d7e14e64707789a478f5f2e3->enter($__internal_ca32fc1efbc1e09bb454593c4c03b530209441c4d7e14e64707789a478f5f2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_f3986c8d47509095439a24a4b9548a0a47a3b3c966d41c2ea0d201249f109794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3986c8d47509095439a24a4b9548a0a47a3b3c966d41c2ea0d201249f109794->enter($__internal_f3986c8d47509095439a24a4b9548a0a47a3b3c966d41c2ea0d201249f109794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_f3986c8d47509095439a24a4b9548a0a47a3b3c966d41c2ea0d201249f109794->leave($__internal_f3986c8d47509095439a24a4b9548a0a47a3b3c966d41c2ea0d201249f109794_prof);

        
        $__internal_ca32fc1efbc1e09bb454593c4c03b530209441c4d7e14e64707789a478f5f2e3->leave($__internal_ca32fc1efbc1e09bb454593c4c03b530209441c4d7e14e64707789a478f5f2e3_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_c469bc91efae1e4962d4d01ead7ccd8e51433886cddfea7229552e11c08e0310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c469bc91efae1e4962d4d01ead7ccd8e51433886cddfea7229552e11c08e0310->enter($__internal_c469bc91efae1e4962d4d01ead7ccd8e51433886cddfea7229552e11c08e0310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_5bd808a1b8f4f9c93de1566d9875d8df466a8ce57548e8d5bb0c15d0953975a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd808a1b8f4f9c93de1566d9875d8df466a8ce57548e8d5bb0c15d0953975a7->enter($__internal_5bd808a1b8f4f9c93de1566d9875d8df466a8ce57548e8d5bb0c15d0953975a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_5bd808a1b8f4f9c93de1566d9875d8df466a8ce57548e8d5bb0c15d0953975a7->leave($__internal_5bd808a1b8f4f9c93de1566d9875d8df466a8ce57548e8d5bb0c15d0953975a7_prof);

        
        $__internal_c469bc91efae1e4962d4d01ead7ccd8e51433886cddfea7229552e11c08e0310->leave($__internal_c469bc91efae1e4962d4d01ead7ccd8e51433886cddfea7229552e11c08e0310_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_2ad7db8b232a1577eb9d8449ee51be387cc8bf8646c1ca1f4f28376166ecdaf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ad7db8b232a1577eb9d8449ee51be387cc8bf8646c1ca1f4f28376166ecdaf0->enter($__internal_2ad7db8b232a1577eb9d8449ee51be387cc8bf8646c1ca1f4f28376166ecdaf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_16a2878d83e81d7b8c6a2dfde5a5807de739d1d60dddbedc1e137b622af61ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a2878d83e81d7b8c6a2dfde5a5807de739d1d60dddbedc1e137b622af61ad6->enter($__internal_16a2878d83e81d7b8c6a2dfde5a5807de739d1d60dddbedc1e137b622af61ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_16a2878d83e81d7b8c6a2dfde5a5807de739d1d60dddbedc1e137b622af61ad6->leave($__internal_16a2878d83e81d7b8c6a2dfde5a5807de739d1d60dddbedc1e137b622af61ad6_prof);

        
        $__internal_2ad7db8b232a1577eb9d8449ee51be387cc8bf8646c1ca1f4f28376166ecdaf0->leave($__internal_2ad7db8b232a1577eb9d8449ee51be387cc8bf8646c1ca1f4f28376166ecdaf0_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_c5753be96a8f3ba16ab21c9413d02f7e573a0d82670b844ea594f5a96fb1fc12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5753be96a8f3ba16ab21c9413d02f7e573a0d82670b844ea594f5a96fb1fc12->enter($__internal_c5753be96a8f3ba16ab21c9413d02f7e573a0d82670b844ea594f5a96fb1fc12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_fa154a5032442c0d91e4693467c40a42ffd43344e90e746ec0748337efb0e022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa154a5032442c0d91e4693467c40a42ffd43344e90e746ec0748337efb0e022->enter($__internal_fa154a5032442c0d91e4693467c40a42ffd43344e90e746ec0748337efb0e022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_fa154a5032442c0d91e4693467c40a42ffd43344e90e746ec0748337efb0e022->leave($__internal_fa154a5032442c0d91e4693467c40a42ffd43344e90e746ec0748337efb0e022_prof);

        
        $__internal_c5753be96a8f3ba16ab21c9413d02f7e573a0d82670b844ea594f5a96fb1fc12->leave($__internal_c5753be96a8f3ba16ab21c9413d02f7e573a0d82670b844ea594f5a96fb1fc12_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_2bbfb014bfd71e83e99b645c9bd528f4a226d33e8e3660dcf4290209227b9d5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bbfb014bfd71e83e99b645c9bd528f4a226d33e8e3660dcf4290209227b9d5d->enter($__internal_2bbfb014bfd71e83e99b645c9bd528f4a226d33e8e3660dcf4290209227b9d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_d725b1a1c97330f497bdf4260793d72688150af6e087caec295ccc4e22ecd3b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d725b1a1c97330f497bdf4260793d72688150af6e087caec295ccc4e22ecd3b2->enter($__internal_d725b1a1c97330f497bdf4260793d72688150af6e087caec295ccc4e22ecd3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_d725b1a1c97330f497bdf4260793d72688150af6e087caec295ccc4e22ecd3b2->leave($__internal_d725b1a1c97330f497bdf4260793d72688150af6e087caec295ccc4e22ecd3b2_prof);

        
        $__internal_2bbfb014bfd71e83e99b645c9bd528f4a226d33e8e3660dcf4290209227b9d5d->leave($__internal_2bbfb014bfd71e83e99b645c9bd528f4a226d33e8e3660dcf4290209227b9d5d_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_31ee19b8a1a6ea320720df8e8b1292b3c3436bbe70def8266d51c457b4416ce6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31ee19b8a1a6ea320720df8e8b1292b3c3436bbe70def8266d51c457b4416ce6->enter($__internal_31ee19b8a1a6ea320720df8e8b1292b3c3436bbe70def8266d51c457b4416ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_f340afcad4b7d21034306d9bb8f38ce3ac6e38ac5b1e0a1bede7479b4783f227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f340afcad4b7d21034306d9bb8f38ce3ac6e38ac5b1e0a1bede7479b4783f227->enter($__internal_f340afcad4b7d21034306d9bb8f38ce3ac6e38ac5b1e0a1bede7479b4783f227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_f340afcad4b7d21034306d9bb8f38ce3ac6e38ac5b1e0a1bede7479b4783f227->leave($__internal_f340afcad4b7d21034306d9bb8f38ce3ac6e38ac5b1e0a1bede7479b4783f227_prof);

        
        $__internal_31ee19b8a1a6ea320720df8e8b1292b3c3436bbe70def8266d51c457b4416ce6->leave($__internal_31ee19b8a1a6ea320720df8e8b1292b3c3436bbe70def8266d51c457b4416ce6_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_f17879c54eafd1d688a0b23393752d34727db228acf2481b705e8ff1b405da0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f17879c54eafd1d688a0b23393752d34727db228acf2481b705e8ff1b405da0a->enter($__internal_f17879c54eafd1d688a0b23393752d34727db228acf2481b705e8ff1b405da0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_24e504b9b22efafb2624a83cfdcaa2bba04479e8c92cdb0a2b4bb6ed65376eaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e504b9b22efafb2624a83cfdcaa2bba04479e8c92cdb0a2b4bb6ed65376eaf->enter($__internal_24e504b9b22efafb2624a83cfdcaa2bba04479e8c92cdb0a2b4bb6ed65376eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_24e504b9b22efafb2624a83cfdcaa2bba04479e8c92cdb0a2b4bb6ed65376eaf->leave($__internal_24e504b9b22efafb2624a83cfdcaa2bba04479e8c92cdb0a2b4bb6ed65376eaf_prof);

        
        $__internal_f17879c54eafd1d688a0b23393752d34727db228acf2481b705e8ff1b405da0a->leave($__internal_f17879c54eafd1d688a0b23393752d34727db228acf2481b705e8ff1b405da0a_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_171b75e92c987d51df72f1f578715ed1e68f19d7de7afa618326c2df0c4e6a28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_171b75e92c987d51df72f1f578715ed1e68f19d7de7afa618326c2df0c4e6a28->enter($__internal_171b75e92c987d51df72f1f578715ed1e68f19d7de7afa618326c2df0c4e6a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_647c4a249a965757abec5c189079a3510ea0bc4fc3c8f827d0c2350746737d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_647c4a249a965757abec5c189079a3510ea0bc4fc3c8f827d0c2350746737d96->enter($__internal_647c4a249a965757abec5c189079a3510ea0bc4fc3c8f827d0c2350746737d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_647c4a249a965757abec5c189079a3510ea0bc4fc3c8f827d0c2350746737d96->leave($__internal_647c4a249a965757abec5c189079a3510ea0bc4fc3c8f827d0c2350746737d96_prof);

        
        $__internal_171b75e92c987d51df72f1f578715ed1e68f19d7de7afa618326c2df0c4e6a28->leave($__internal_171b75e92c987d51df72f1f578715ed1e68f19d7de7afa618326c2df0c4e6a28_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_8bb055740b55918443b5223d1354efad6782b8615f25d6e6492b0d3d4ac9ec9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bb055740b55918443b5223d1354efad6782b8615f25d6e6492b0d3d4ac9ec9e->enter($__internal_8bb055740b55918443b5223d1354efad6782b8615f25d6e6492b0d3d4ac9ec9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_89b1156ada6f4f573f569f63c7164d3fc59128dd07af01c7ec0968e0726c9126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b1156ada6f4f573f569f63c7164d3fc59128dd07af01c7ec0968e0726c9126->enter($__internal_89b1156ada6f4f573f569f63c7164d3fc59128dd07af01c7ec0968e0726c9126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_89b1156ada6f4f573f569f63c7164d3fc59128dd07af01c7ec0968e0726c9126->leave($__internal_89b1156ada6f4f573f569f63c7164d3fc59128dd07af01c7ec0968e0726c9126_prof);

        
        $__internal_8bb055740b55918443b5223d1354efad6782b8615f25d6e6492b0d3d4ac9ec9e->leave($__internal_8bb055740b55918443b5223d1354efad6782b8615f25d6e6492b0d3d4ac9ec9e_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_e78b9af104b83d3298187ae636b945fa054ed34c56f7deb9c54b648286383ea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e78b9af104b83d3298187ae636b945fa054ed34c56f7deb9c54b648286383ea0->enter($__internal_e78b9af104b83d3298187ae636b945fa054ed34c56f7deb9c54b648286383ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_07eb845a58202a5d1fd594784090a68a360583bf0207e14106fa56b1ba36557f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07eb845a58202a5d1fd594784090a68a360583bf0207e14106fa56b1ba36557f->enter($__internal_07eb845a58202a5d1fd594784090a68a360583bf0207e14106fa56b1ba36557f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_07eb845a58202a5d1fd594784090a68a360583bf0207e14106fa56b1ba36557f->leave($__internal_07eb845a58202a5d1fd594784090a68a360583bf0207e14106fa56b1ba36557f_prof);

        
        $__internal_e78b9af104b83d3298187ae636b945fa054ed34c56f7deb9c54b648286383ea0->leave($__internal_e78b9af104b83d3298187ae636b945fa054ed34c56f7deb9c54b648286383ea0_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_6b819b02349bf2f23dbeb9b9947924ce1148aeeb5cb291c17fea285dfce071ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b819b02349bf2f23dbeb9b9947924ce1148aeeb5cb291c17fea285dfce071ff->enter($__internal_6b819b02349bf2f23dbeb9b9947924ce1148aeeb5cb291c17fea285dfce071ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_3582b37f38101fe790eeb858db73b504f9b65c4eac8556354cd05bcbdc815824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3582b37f38101fe790eeb858db73b504f9b65c4eac8556354cd05bcbdc815824->enter($__internal_3582b37f38101fe790eeb858db73b504f9b65c4eac8556354cd05bcbdc815824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_3582b37f38101fe790eeb858db73b504f9b65c4eac8556354cd05bcbdc815824->leave($__internal_3582b37f38101fe790eeb858db73b504f9b65c4eac8556354cd05bcbdc815824_prof);

        
        $__internal_6b819b02349bf2f23dbeb9b9947924ce1148aeeb5cb291c17fea285dfce071ff->leave($__internal_6b819b02349bf2f23dbeb9b9947924ce1148aeeb5cb291c17fea285dfce071ff_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_82722d21eda212bf69a6ae4747e96ecb20972381ec5e1ffc24f85f7d3650f146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82722d21eda212bf69a6ae4747e96ecb20972381ec5e1ffc24f85f7d3650f146->enter($__internal_82722d21eda212bf69a6ae4747e96ecb20972381ec5e1ffc24f85f7d3650f146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_59622706053a5909deb8e00bc73b66e4f43f8d18e71570b34d9e7c6447c04099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59622706053a5909deb8e00bc73b66e4f43f8d18e71570b34d9e7c6447c04099->enter($__internal_59622706053a5909deb8e00bc73b66e4f43f8d18e71570b34d9e7c6447c04099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_59622706053a5909deb8e00bc73b66e4f43f8d18e71570b34d9e7c6447c04099->leave($__internal_59622706053a5909deb8e00bc73b66e4f43f8d18e71570b34d9e7c6447c04099_prof);

        
        $__internal_82722d21eda212bf69a6ae4747e96ecb20972381ec5e1ffc24f85f7d3650f146->leave($__internal_82722d21eda212bf69a6ae4747e96ecb20972381ec5e1ffc24f85f7d3650f146_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_3e57aa67b031f443ac6a93ffc077358dc4eb65590f0303be37afce7a2246fefb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e57aa67b031f443ac6a93ffc077358dc4eb65590f0303be37afce7a2246fefb->enter($__internal_3e57aa67b031f443ac6a93ffc077358dc4eb65590f0303be37afce7a2246fefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_8cdda3454a115d22641a72b0fc8db42bc8d1042f7da77930d5fcde2360074303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cdda3454a115d22641a72b0fc8db42bc8d1042f7da77930d5fcde2360074303->enter($__internal_8cdda3454a115d22641a72b0fc8db42bc8d1042f7da77930d5fcde2360074303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_8cdda3454a115d22641a72b0fc8db42bc8d1042f7da77930d5fcde2360074303->leave($__internal_8cdda3454a115d22641a72b0fc8db42bc8d1042f7da77930d5fcde2360074303_prof);

        
        $__internal_3e57aa67b031f443ac6a93ffc077358dc4eb65590f0303be37afce7a2246fefb->leave($__internal_3e57aa67b031f443ac6a93ffc077358dc4eb65590f0303be37afce7a2246fefb_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_de9f7a27f9d4d42baef37bbac836b1be02c3bb16a243aba864314ae26f446bc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de9f7a27f9d4d42baef37bbac836b1be02c3bb16a243aba864314ae26f446bc8->enter($__internal_de9f7a27f9d4d42baef37bbac836b1be02c3bb16a243aba864314ae26f446bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_fcac12da63a69e8121f5b0c918e6d3bf58c40a06208982b0e3716624fa6d2bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcac12da63a69e8121f5b0c918e6d3bf58c40a06208982b0e3716624fa6d2bfa->enter($__internal_fcac12da63a69e8121f5b0c918e6d3bf58c40a06208982b0e3716624fa6d2bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_fcac12da63a69e8121f5b0c918e6d3bf58c40a06208982b0e3716624fa6d2bfa->leave($__internal_fcac12da63a69e8121f5b0c918e6d3bf58c40a06208982b0e3716624fa6d2bfa_prof);

        
        $__internal_de9f7a27f9d4d42baef37bbac836b1be02c3bb16a243aba864314ae26f446bc8->leave($__internal_de9f7a27f9d4d42baef37bbac836b1be02c3bb16a243aba864314ae26f446bc8_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_735629cc68989fc541eaa5b9acef8a812945515b2767425dc33187b348785874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_735629cc68989fc541eaa5b9acef8a812945515b2767425dc33187b348785874->enter($__internal_735629cc68989fc541eaa5b9acef8a812945515b2767425dc33187b348785874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_afcbfaa5521eef8b78a8abc7e10d1c84670fd533ada8d2af5a079783842b487f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afcbfaa5521eef8b78a8abc7e10d1c84670fd533ada8d2af5a079783842b487f->enter($__internal_afcbfaa5521eef8b78a8abc7e10d1c84670fd533ada8d2af5a079783842b487f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_afcbfaa5521eef8b78a8abc7e10d1c84670fd533ada8d2af5a079783842b487f->leave($__internal_afcbfaa5521eef8b78a8abc7e10d1c84670fd533ada8d2af5a079783842b487f_prof);

        
        $__internal_735629cc68989fc541eaa5b9acef8a812945515b2767425dc33187b348785874->leave($__internal_735629cc68989fc541eaa5b9acef8a812945515b2767425dc33187b348785874_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_3b227f3525e57ee817450f69c4cf410289c9abb393e5b8cd68bd9c611746beea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b227f3525e57ee817450f69c4cf410289c9abb393e5b8cd68bd9c611746beea->enter($__internal_3b227f3525e57ee817450f69c4cf410289c9abb393e5b8cd68bd9c611746beea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_1c075ee9c053aa8380d68f927ccdc7e8c1e532fcfd95cb51ffd653cfdd31cd1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c075ee9c053aa8380d68f927ccdc7e8c1e532fcfd95cb51ffd653cfdd31cd1f->enter($__internal_1c075ee9c053aa8380d68f927ccdc7e8c1e532fcfd95cb51ffd653cfdd31cd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
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
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_1c075ee9c053aa8380d68f927ccdc7e8c1e532fcfd95cb51ffd653cfdd31cd1f->leave($__internal_1c075ee9c053aa8380d68f927ccdc7e8c1e532fcfd95cb51ffd653cfdd31cd1f_prof);

        
        $__internal_3b227f3525e57ee817450f69c4cf410289c9abb393e5b8cd68bd9c611746beea->leave($__internal_3b227f3525e57ee817450f69c4cf410289c9abb393e5b8cd68bd9c611746beea_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_925d788509526e7c651620bc52f52da1ccab93e81bf567d0c9107e503705e985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_925d788509526e7c651620bc52f52da1ccab93e81bf567d0c9107e503705e985->enter($__internal_925d788509526e7c651620bc52f52da1ccab93e81bf567d0c9107e503705e985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e75e22885357c4e6183beb6117e95628f18a13503921727046af2b0b249140a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75e22885357c4e6183beb6117e95628f18a13503921727046af2b0b249140a3->enter($__internal_e75e22885357c4e6183beb6117e95628f18a13503921727046af2b0b249140a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_e75e22885357c4e6183beb6117e95628f18a13503921727046af2b0b249140a3->leave($__internal_e75e22885357c4e6183beb6117e95628f18a13503921727046af2b0b249140a3_prof);

        
        $__internal_925d788509526e7c651620bc52f52da1ccab93e81bf567d0c9107e503705e985->leave($__internal_925d788509526e7c651620bc52f52da1ccab93e81bf567d0c9107e503705e985_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_8f6042b2240d39b7bc95be67dc9f7ba19d64c6c547776ec0c109e5c000ad19c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f6042b2240d39b7bc95be67dc9f7ba19d64c6c547776ec0c109e5c000ad19c8->enter($__internal_8f6042b2240d39b7bc95be67dc9f7ba19d64c6c547776ec0c109e5c000ad19c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_08019249260ac4b3413eec7ba2cfce046374e7e6d85f01fe6eafb665d9d8d043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08019249260ac4b3413eec7ba2cfce046374e7e6d85f01fe6eafb665d9d8d043->enter($__internal_08019249260ac4b3413eec7ba2cfce046374e7e6d85f01fe6eafb665d9d8d043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_08019249260ac4b3413eec7ba2cfce046374e7e6d85f01fe6eafb665d9d8d043->leave($__internal_08019249260ac4b3413eec7ba2cfce046374e7e6d85f01fe6eafb665d9d8d043_prof);

        
        $__internal_8f6042b2240d39b7bc95be67dc9f7ba19d64c6c547776ec0c109e5c000ad19c8->leave($__internal_8f6042b2240d39b7bc95be67dc9f7ba19d64c6c547776ec0c109e5c000ad19c8_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_30d39a92515ede6f77d3ca74b0a96f475edfacc0169b2ae914640bbb5040a955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30d39a92515ede6f77d3ca74b0a96f475edfacc0169b2ae914640bbb5040a955->enter($__internal_30d39a92515ede6f77d3ca74b0a96f475edfacc0169b2ae914640bbb5040a955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_07480ab37476b584df06b94f416bb569955638df341487d905c012441cce9fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07480ab37476b584df06b94f416bb569955638df341487d905c012441cce9fe4->enter($__internal_07480ab37476b584df06b94f416bb569955638df341487d905c012441cce9fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_07480ab37476b584df06b94f416bb569955638df341487d905c012441cce9fe4->leave($__internal_07480ab37476b584df06b94f416bb569955638df341487d905c012441cce9fe4_prof);

        
        $__internal_30d39a92515ede6f77d3ca74b0a96f475edfacc0169b2ae914640bbb5040a955->leave($__internal_30d39a92515ede6f77d3ca74b0a96f475edfacc0169b2ae914640bbb5040a955_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_317dee996a4fff10df552d52c200964b791708b08a45ccebc7d0722fc702c65c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_317dee996a4fff10df552d52c200964b791708b08a45ccebc7d0722fc702c65c->enter($__internal_317dee996a4fff10df552d52c200964b791708b08a45ccebc7d0722fc702c65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_7d5afec82c31b66c8aa5753376475986cbe41a8ead92e5a9bf97c1adaa5a765d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d5afec82c31b66c8aa5753376475986cbe41a8ead92e5a9bf97c1adaa5a765d->enter($__internal_7d5afec82c31b66c8aa5753376475986cbe41a8ead92e5a9bf97c1adaa5a765d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7d5afec82c31b66c8aa5753376475986cbe41a8ead92e5a9bf97c1adaa5a765d->leave($__internal_7d5afec82c31b66c8aa5753376475986cbe41a8ead92e5a9bf97c1adaa5a765d_prof);

        
        $__internal_317dee996a4fff10df552d52c200964b791708b08a45ccebc7d0722fc702c65c->leave($__internal_317dee996a4fff10df552d52c200964b791708b08a45ccebc7d0722fc702c65c_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_dab0882d944763ef929a9c21e1b6971ae481698d6557a857e052bd4e9e85d9f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dab0882d944763ef929a9c21e1b6971ae481698d6557a857e052bd4e9e85d9f8->enter($__internal_dab0882d944763ef929a9c21e1b6971ae481698d6557a857e052bd4e9e85d9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_d0a542ea7198a8efea9853d199aa4fa81a72c93759f7714757b262b223f8a92e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a542ea7198a8efea9853d199aa4fa81a72c93759f7714757b262b223f8a92e->enter($__internal_d0a542ea7198a8efea9853d199aa4fa81a72c93759f7714757b262b223f8a92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d0a542ea7198a8efea9853d199aa4fa81a72c93759f7714757b262b223f8a92e->leave($__internal_d0a542ea7198a8efea9853d199aa4fa81a72c93759f7714757b262b223f8a92e_prof);

        
        $__internal_dab0882d944763ef929a9c21e1b6971ae481698d6557a857e052bd4e9e85d9f8->leave($__internal_dab0882d944763ef929a9c21e1b6971ae481698d6557a857e052bd4e9e85d9f8_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_fc228cc670be8e77c9e795349e78e534854eb1f35f7fee31d4040f0499ffab7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc228cc670be8e77c9e795349e78e534854eb1f35f7fee31d4040f0499ffab7d->enter($__internal_fc228cc670be8e77c9e795349e78e534854eb1f35f7fee31d4040f0499ffab7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_4cd82a88fd6f167c142f805ad9d208766342c722db2f0513ff3d87843f5bd802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cd82a88fd6f167c142f805ad9d208766342c722db2f0513ff3d87843f5bd802->enter($__internal_4cd82a88fd6f167c142f805ad9d208766342c722db2f0513ff3d87843f5bd802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_4cd82a88fd6f167c142f805ad9d208766342c722db2f0513ff3d87843f5bd802->leave($__internal_4cd82a88fd6f167c142f805ad9d208766342c722db2f0513ff3d87843f5bd802_prof);

        
        $__internal_fc228cc670be8e77c9e795349e78e534854eb1f35f7fee31d4040f0499ffab7d->leave($__internal_fc228cc670be8e77c9e795349e78e534854eb1f35f7fee31d4040f0499ffab7d_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_81526afd08a85ca94a2e96e9f0e87e646d25959864016bfac9c56d25d02e34f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81526afd08a85ca94a2e96e9f0e87e646d25959864016bfac9c56d25d02e34f8->enter($__internal_81526afd08a85ca94a2e96e9f0e87e646d25959864016bfac9c56d25d02e34f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_b2fdd4f18c1a4e196cc58a2c443c66aeacc0e2452b1bae178294edbbad2ab2f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2fdd4f18c1a4e196cc58a2c443c66aeacc0e2452b1bae178294edbbad2ab2f5->enter($__internal_b2fdd4f18c1a4e196cc58a2c443c66aeacc0e2452b1bae178294edbbad2ab2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_b2fdd4f18c1a4e196cc58a2c443c66aeacc0e2452b1bae178294edbbad2ab2f5->leave($__internal_b2fdd4f18c1a4e196cc58a2c443c66aeacc0e2452b1bae178294edbbad2ab2f5_prof);

        
        $__internal_81526afd08a85ca94a2e96e9f0e87e646d25959864016bfac9c56d25d02e34f8->leave($__internal_81526afd08a85ca94a2e96e9f0e87e646d25959864016bfac9c56d25d02e34f8_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_2058f77dfaa40ab9cf474b76fa765f561c7c7ac1cf508fc22dab7326693f933c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2058f77dfaa40ab9cf474b76fa765f561c7c7ac1cf508fc22dab7326693f933c->enter($__internal_2058f77dfaa40ab9cf474b76fa765f561c7c7ac1cf508fc22dab7326693f933c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6a728a35a041e6c889606987fca1a171b3b4d74e30c11cf519dd37ef67ec2d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a728a35a041e6c889606987fca1a171b3b4d74e30c11cf519dd37ef67ec2d2b->enter($__internal_6a728a35a041e6c889606987fca1a171b3b4d74e30c11cf519dd37ef67ec2d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_6a728a35a041e6c889606987fca1a171b3b4d74e30c11cf519dd37ef67ec2d2b->leave($__internal_6a728a35a041e6c889606987fca1a171b3b4d74e30c11cf519dd37ef67ec2d2b_prof);

        
        $__internal_2058f77dfaa40ab9cf474b76fa765f561c7c7ac1cf508fc22dab7326693f933c->leave($__internal_2058f77dfaa40ab9cf474b76fa765f561c7c7ac1cf508fc22dab7326693f933c_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
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
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\foundation_5_layout.html.twig");
    }
}
