<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_65e9af272d364cb6ef80cef4dd86e179e2ce0e7a5dd686f5a78c6893b819efcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6503106625da9a12aa0e02aead9f609a13e032ccfe71cc4374f841a70884045a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6503106625da9a12aa0e02aead9f609a13e032ccfe71cc4374f841a70884045a->enter($__internal_6503106625da9a12aa0e02aead9f609a13e032ccfe71cc4374f841a70884045a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_88bfce87545498f13c54a69f062dcc94ca0e593dcdab3a021af614cb61a80d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88bfce87545498f13c54a69f062dcc94ca0e593dcdab3a021af614cb61a80d98->enter($__internal_88bfce87545498f13c54a69f062dcc94ca0e593dcdab3a021af614cb61a80d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_6503106625da9a12aa0e02aead9f609a13e032ccfe71cc4374f841a70884045a->leave($__internal_6503106625da9a12aa0e02aead9f609a13e032ccfe71cc4374f841a70884045a_prof);

        
        $__internal_88bfce87545498f13c54a69f062dcc94ca0e593dcdab3a021af614cb61a80d98->leave($__internal_88bfce87545498f13c54a69f062dcc94ca0e593dcdab3a021af614cb61a80d98_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_66ac65f89b0236323e4d8c10badbb19ce741fa57ab4cff4cd06d7eff49b00885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66ac65f89b0236323e4d8c10badbb19ce741fa57ab4cff4cd06d7eff49b00885->enter($__internal_66ac65f89b0236323e4d8c10badbb19ce741fa57ab4cff4cd06d7eff49b00885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_d7ea0bc8fe087778b00a08ffbac990e5a3f0cf00a5cff8b49d01c637bfa3b660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ea0bc8fe087778b00a08ffbac990e5a3f0cf00a5cff8b49d01c637bfa3b660->enter($__internal_d7ea0bc8fe087778b00a08ffbac990e5a3f0cf00a5cff8b49d01c637bfa3b660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_d7ea0bc8fe087778b00a08ffbac990e5a3f0cf00a5cff8b49d01c637bfa3b660->leave($__internal_d7ea0bc8fe087778b00a08ffbac990e5a3f0cf00a5cff8b49d01c637bfa3b660_prof);

        
        $__internal_66ac65f89b0236323e4d8c10badbb19ce741fa57ab4cff4cd06d7eff49b00885->leave($__internal_66ac65f89b0236323e4d8c10badbb19ce741fa57ab4cff4cd06d7eff49b00885_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_30cfc95749b991087acae2968c50165bae3a5d84b402bdd14e8ca7ac96fcbb79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30cfc95749b991087acae2968c50165bae3a5d84b402bdd14e8ca7ac96fcbb79->enter($__internal_30cfc95749b991087acae2968c50165bae3a5d84b402bdd14e8ca7ac96fcbb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_7a3fc94bccd27aad1ed13dd7cdaa880c9ff62010d6e028715c9cd70d13bfd444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a3fc94bccd27aad1ed13dd7cdaa880c9ff62010d6e028715c9cd70d13bfd444->enter($__internal_7a3fc94bccd27aad1ed13dd7cdaa880c9ff62010d6e028715c9cd70d13bfd444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7a3fc94bccd27aad1ed13dd7cdaa880c9ff62010d6e028715c9cd70d13bfd444->leave($__internal_7a3fc94bccd27aad1ed13dd7cdaa880c9ff62010d6e028715c9cd70d13bfd444_prof);

        
        $__internal_30cfc95749b991087acae2968c50165bae3a5d84b402bdd14e8ca7ac96fcbb79->leave($__internal_30cfc95749b991087acae2968c50165bae3a5d84b402bdd14e8ca7ac96fcbb79_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_0d0c5f1c404f63f80c5d2e19a96b167c8a5e5547ff85a778fdde584f6eaffbe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d0c5f1c404f63f80c5d2e19a96b167c8a5e5547ff85a778fdde584f6eaffbe0->enter($__internal_0d0c5f1c404f63f80c5d2e19a96b167c8a5e5547ff85a778fdde584f6eaffbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_989e474b8991655f567b527052bcd1f642899501cf53527b87eed722a52ca92a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_989e474b8991655f567b527052bcd1f642899501cf53527b87eed722a52ca92a->enter($__internal_989e474b8991655f567b527052bcd1f642899501cf53527b87eed722a52ca92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_989e474b8991655f567b527052bcd1f642899501cf53527b87eed722a52ca92a->leave($__internal_989e474b8991655f567b527052bcd1f642899501cf53527b87eed722a52ca92a_prof);

        
        $__internal_0d0c5f1c404f63f80c5d2e19a96b167c8a5e5547ff85a778fdde584f6eaffbe0->leave($__internal_0d0c5f1c404f63f80c5d2e19a96b167c8a5e5547ff85a778fdde584f6eaffbe0_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1c76f407ddf8300d8b5785297609108adab1de82dd8c5b9672c7dfeeb9d1da2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c76f407ddf8300d8b5785297609108adab1de82dd8c5b9672c7dfeeb9d1da2b->enter($__internal_1c76f407ddf8300d8b5785297609108adab1de82dd8c5b9672c7dfeeb9d1da2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_5c3dfc4729e96186b3b052d87c41991a21a245d46a2ec99f61ce7ce3a97c8ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3dfc4729e96186b3b052d87c41991a21a245d46a2ec99f61ce7ce3a97c8ff8->enter($__internal_5c3dfc4729e96186b3b052d87c41991a21a245d46a2ec99f61ce7ce3a97c8ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_5c3dfc4729e96186b3b052d87c41991a21a245d46a2ec99f61ce7ce3a97c8ff8->leave($__internal_5c3dfc4729e96186b3b052d87c41991a21a245d46a2ec99f61ce7ce3a97c8ff8_prof);

        
        $__internal_1c76f407ddf8300d8b5785297609108adab1de82dd8c5b9672c7dfeeb9d1da2b->leave($__internal_1c76f407ddf8300d8b5785297609108adab1de82dd8c5b9672c7dfeeb9d1da2b_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_61e457ed64deb8f10cee8747a9b38123c0a5993fed2b9987f0a5f0425d547af8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61e457ed64deb8f10cee8747a9b38123c0a5993fed2b9987f0a5f0425d547af8->enter($__internal_61e457ed64deb8f10cee8747a9b38123c0a5993fed2b9987f0a5f0425d547af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_d5d8e4869bf2c21c4da3b5765914fa64cd0cf3076dc673412a0753d5d0c864ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d8e4869bf2c21c4da3b5765914fa64cd0cf3076dc673412a0753d5d0c864ca->enter($__internal_d5d8e4869bf2c21c4da3b5765914fa64cd0cf3076dc673412a0753d5d0c864ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_d5d8e4869bf2c21c4da3b5765914fa64cd0cf3076dc673412a0753d5d0c864ca->leave($__internal_d5d8e4869bf2c21c4da3b5765914fa64cd0cf3076dc673412a0753d5d0c864ca_prof);

        
        $__internal_61e457ed64deb8f10cee8747a9b38123c0a5993fed2b9987f0a5f0425d547af8->leave($__internal_61e457ed64deb8f10cee8747a9b38123c0a5993fed2b9987f0a5f0425d547af8_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_68559fac3fd3cd99dd9f63540d51c0fcb115627e2baafee35a9408bb3d659745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68559fac3fd3cd99dd9f63540d51c0fcb115627e2baafee35a9408bb3d659745->enter($__internal_68559fac3fd3cd99dd9f63540d51c0fcb115627e2baafee35a9408bb3d659745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_c487dab6d2f43fcafed67908e456fb503cf806afc79d945c3afbfb1e48a7f182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c487dab6d2f43fcafed67908e456fb503cf806afc79d945c3afbfb1e48a7f182->enter($__internal_c487dab6d2f43fcafed67908e456fb503cf806afc79d945c3afbfb1e48a7f182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_c487dab6d2f43fcafed67908e456fb503cf806afc79d945c3afbfb1e48a7f182->leave($__internal_c487dab6d2f43fcafed67908e456fb503cf806afc79d945c3afbfb1e48a7f182_prof);

        
        $__internal_68559fac3fd3cd99dd9f63540d51c0fcb115627e2baafee35a9408bb3d659745->leave($__internal_68559fac3fd3cd99dd9f63540d51c0fcb115627e2baafee35a9408bb3d659745_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_ca1d3e7a5cfd842ab2faa5a9972ee024cbed8c5f2ead693838387d2f6ec06065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca1d3e7a5cfd842ab2faa5a9972ee024cbed8c5f2ead693838387d2f6ec06065->enter($__internal_ca1d3e7a5cfd842ab2faa5a9972ee024cbed8c5f2ead693838387d2f6ec06065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_56055411a204d9129f9263adf3c84cc5ac8068700e24ba9f00c168db0211b818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56055411a204d9129f9263adf3c84cc5ac8068700e24ba9f00c168db0211b818->enter($__internal_56055411a204d9129f9263adf3c84cc5ac8068700e24ba9f00c168db0211b818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_56055411a204d9129f9263adf3c84cc5ac8068700e24ba9f00c168db0211b818->leave($__internal_56055411a204d9129f9263adf3c84cc5ac8068700e24ba9f00c168db0211b818_prof);

        
        $__internal_ca1d3e7a5cfd842ab2faa5a9972ee024cbed8c5f2ead693838387d2f6ec06065->leave($__internal_ca1d3e7a5cfd842ab2faa5a9972ee024cbed8c5f2ead693838387d2f6ec06065_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_98b3f29c329f955b2f19265fca5c7f13b8d8a0a4bfd71e712b2d49286166ff85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98b3f29c329f955b2f19265fca5c7f13b8d8a0a4bfd71e712b2d49286166ff85->enter($__internal_98b3f29c329f955b2f19265fca5c7f13b8d8a0a4bfd71e712b2d49286166ff85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_03877ab116e691531a15c39af0663236283a9409af750473c956ee6cf9a50e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03877ab116e691531a15c39af0663236283a9409af750473c956ee6cf9a50e7a->enter($__internal_03877ab116e691531a15c39af0663236283a9409af750473c956ee6cf9a50e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_03877ab116e691531a15c39af0663236283a9409af750473c956ee6cf9a50e7a->leave($__internal_03877ab116e691531a15c39af0663236283a9409af750473c956ee6cf9a50e7a_prof);

        
        $__internal_98b3f29c329f955b2f19265fca5c7f13b8d8a0a4bfd71e712b2d49286166ff85->leave($__internal_98b3f29c329f955b2f19265fca5c7f13b8d8a0a4bfd71e712b2d49286166ff85_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_c0ac2e367830d1c1cb3b50ddd5c698085c33626a34c74a3d7f6fffa23d4bff61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0ac2e367830d1c1cb3b50ddd5c698085c33626a34c74a3d7f6fffa23d4bff61->enter($__internal_c0ac2e367830d1c1cb3b50ddd5c698085c33626a34c74a3d7f6fffa23d4bff61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_ad04988dd21eee6f428eb3622597df5e104fa93fd1beea896e82e3bb805c0a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad04988dd21eee6f428eb3622597df5e104fa93fd1beea896e82e3bb805c0a2d->enter($__internal_ad04988dd21eee6f428eb3622597df5e104fa93fd1beea896e82e3bb805c0a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ad04988dd21eee6f428eb3622597df5e104fa93fd1beea896e82e3bb805c0a2d->leave($__internal_ad04988dd21eee6f428eb3622597df5e104fa93fd1beea896e82e3bb805c0a2d_prof);

        
        $__internal_c0ac2e367830d1c1cb3b50ddd5c698085c33626a34c74a3d7f6fffa23d4bff61->leave($__internal_c0ac2e367830d1c1cb3b50ddd5c698085c33626a34c74a3d7f6fffa23d4bff61_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_8ff13a984c9ca3348a6a3e0c03a89249d3c362b9cea0ca608289272a30740b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ff13a984c9ca3348a6a3e0c03a89249d3c362b9cea0ca608289272a30740b66->enter($__internal_8ff13a984c9ca3348a6a3e0c03a89249d3c362b9cea0ca608289272a30740b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_73e9f5055b59e5b52ca377d5565520c2fa879cd8fc602732a86483294d0ee69d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e9f5055b59e5b52ca377d5565520c2fa879cd8fc602732a86483294d0ee69d->enter($__internal_73e9f5055b59e5b52ca377d5565520c2fa879cd8fc602732a86483294d0ee69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_73e9f5055b59e5b52ca377d5565520c2fa879cd8fc602732a86483294d0ee69d->leave($__internal_73e9f5055b59e5b52ca377d5565520c2fa879cd8fc602732a86483294d0ee69d_prof);

        
        $__internal_8ff13a984c9ca3348a6a3e0c03a89249d3c362b9cea0ca608289272a30740b66->leave($__internal_8ff13a984c9ca3348a6a3e0c03a89249d3c362b9cea0ca608289272a30740b66_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
