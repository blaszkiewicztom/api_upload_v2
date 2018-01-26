<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_5501c01480766b11e461a8f49fe185ccd3ee42b34febee5193a2941caf923d88 extends Twig_Template
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
        $__internal_55fc4c71742ddbee60e10a5a9da184f17d95c65077ebbe0e74a896d491598a2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55fc4c71742ddbee60e10a5a9da184f17d95c65077ebbe0e74a896d491598a2c->enter($__internal_55fc4c71742ddbee60e10a5a9da184f17d95c65077ebbe0e74a896d491598a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_847b6301a1a148d1d97d2596fe7c930fd34c9e8a9a2ad829ec5fbbc949341432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_847b6301a1a148d1d97d2596fe7c930fd34c9e8a9a2ad829ec5fbbc949341432->enter($__internal_847b6301a1a148d1d97d2596fe7c930fd34c9e8a9a2ad829ec5fbbc949341432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_55fc4c71742ddbee60e10a5a9da184f17d95c65077ebbe0e74a896d491598a2c->leave($__internal_55fc4c71742ddbee60e10a5a9da184f17d95c65077ebbe0e74a896d491598a2c_prof);

        
        $__internal_847b6301a1a148d1d97d2596fe7c930fd34c9e8a9a2ad829ec5fbbc949341432->leave($__internal_847b6301a1a148d1d97d2596fe7c930fd34c9e8a9a2ad829ec5fbbc949341432_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
