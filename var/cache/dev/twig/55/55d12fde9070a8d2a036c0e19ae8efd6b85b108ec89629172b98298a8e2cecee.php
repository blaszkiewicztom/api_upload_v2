<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_c7caaeae7ca580913686c5f00f32745d8f867ab0f9529cef075713f176543d2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7049b25a00f1c2ec7c39aaacef23cf88c2e52e748cc03d1154980dab5026622b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7049b25a00f1c2ec7c39aaacef23cf88c2e52e748cc03d1154980dab5026622b->enter($__internal_7049b25a00f1c2ec7c39aaacef23cf88c2e52e748cc03d1154980dab5026622b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a5a85c4dd626ef0891bc7232c066111d54454b4fd57f0c801935f12963cdec0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a85c4dd626ef0891bc7232c066111d54454b4fd57f0c801935f12963cdec0e->enter($__internal_a5a85c4dd626ef0891bc7232c066111d54454b4fd57f0c801935f12963cdec0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7049b25a00f1c2ec7c39aaacef23cf88c2e52e748cc03d1154980dab5026622b->leave($__internal_7049b25a00f1c2ec7c39aaacef23cf88c2e52e748cc03d1154980dab5026622b_prof);

        
        $__internal_a5a85c4dd626ef0891bc7232c066111d54454b4fd57f0c801935f12963cdec0e->leave($__internal_a5a85c4dd626ef0891bc7232c066111d54454b4fd57f0c801935f12963cdec0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
