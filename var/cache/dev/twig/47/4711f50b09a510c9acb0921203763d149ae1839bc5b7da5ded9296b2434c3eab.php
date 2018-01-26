<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_56367c7953679acfd39be405243fbec2d5c5222309ea3b43efae9f1a2042b91b extends Twig_Template
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
        $__internal_9c008b1b4f3b3513add59f7333456fb98ed5fccf5ae3a14eada3d2139826dde1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c008b1b4f3b3513add59f7333456fb98ed5fccf5ae3a14eada3d2139826dde1->enter($__internal_9c008b1b4f3b3513add59f7333456fb98ed5fccf5ae3a14eada3d2139826dde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_74da9ca3cadd6973a506411aa63c73ba8c51c6c830fb6f3ac136a12d97e26889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74da9ca3cadd6973a506411aa63c73ba8c51c6c830fb6f3ac136a12d97e26889->enter($__internal_74da9ca3cadd6973a506411aa63c73ba8c51c6c830fb6f3ac136a12d97e26889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_9c008b1b4f3b3513add59f7333456fb98ed5fccf5ae3a14eada3d2139826dde1->leave($__internal_9c008b1b4f3b3513add59f7333456fb98ed5fccf5ae3a14eada3d2139826dde1_prof);

        
        $__internal_74da9ca3cadd6973a506411aa63c73ba8c51c6c830fb6f3ac136a12d97e26889->leave($__internal_74da9ca3cadd6973a506411aa63c73ba8c51c6c830fb6f3ac136a12d97e26889_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
