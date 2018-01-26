<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_485e4aed25c772f9801fe96a4f4fea615c18cc6288e0fd783a87d85395b3872b extends Twig_Template
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
        $__internal_fe01304563085c0ed283c8429635035cbb698fa124594aa8dc99ab7bf3d80385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe01304563085c0ed283c8429635035cbb698fa124594aa8dc99ab7bf3d80385->enter($__internal_fe01304563085c0ed283c8429635035cbb698fa124594aa8dc99ab7bf3d80385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_b55e73a779d1ae500a80130b7b3cdf5ebaefdb801a9f167bf09db3375c106f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b55e73a779d1ae500a80130b7b3cdf5ebaefdb801a9f167bf09db3375c106f04->enter($__internal_b55e73a779d1ae500a80130b7b3cdf5ebaefdb801a9f167bf09db3375c106f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_fe01304563085c0ed283c8429635035cbb698fa124594aa8dc99ab7bf3d80385->leave($__internal_fe01304563085c0ed283c8429635035cbb698fa124594aa8dc99ab7bf3d80385_prof);

        
        $__internal_b55e73a779d1ae500a80130b7b3cdf5ebaefdb801a9f167bf09db3375c106f04->leave($__internal_b55e73a779d1ae500a80130b7b3cdf5ebaefdb801a9f167bf09db3375c106f04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
