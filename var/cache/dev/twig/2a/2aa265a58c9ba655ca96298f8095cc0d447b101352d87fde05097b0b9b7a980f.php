<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_31f132c209946628eb224cb063da71af2b41d7b2572de143f6d0157981a007a4 extends Twig_Template
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
        $__internal_a3e8a35b96c1f74b9844a9416a06e4608ac8236e4959c7112803078b958d30a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3e8a35b96c1f74b9844a9416a06e4608ac8236e4959c7112803078b958d30a8->enter($__internal_a3e8a35b96c1f74b9844a9416a06e4608ac8236e4959c7112803078b958d30a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_56e63eb7d08a8c9bf25b81503f9efb44617b68a3e215057ae8b41ab0046c5ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e63eb7d08a8c9bf25b81503f9efb44617b68a3e215057ae8b41ab0046c5ba7->enter($__internal_56e63eb7d08a8c9bf25b81503f9efb44617b68a3e215057ae8b41ab0046c5ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a3e8a35b96c1f74b9844a9416a06e4608ac8236e4959c7112803078b958d30a8->leave($__internal_a3e8a35b96c1f74b9844a9416a06e4608ac8236e4959c7112803078b958d30a8_prof);

        
        $__internal_56e63eb7d08a8c9bf25b81503f9efb44617b68a3e215057ae8b41ab0046c5ba7->leave($__internal_56e63eb7d08a8c9bf25b81503f9efb44617b68a3e215057ae8b41ab0046c5ba7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
