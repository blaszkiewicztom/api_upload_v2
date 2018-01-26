<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_b5f573f9eeb448028a14f96d4cd63f717612588105a7b561999058ebce694cc3 extends Twig_Template
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
        $__internal_c23332944e74abc2a75f835b1f0783ab382de9cf4efca61a9acb3105dc4a4da5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c23332944e74abc2a75f835b1f0783ab382de9cf4efca61a9acb3105dc4a4da5->enter($__internal_c23332944e74abc2a75f835b1f0783ab382de9cf4efca61a9acb3105dc4a4da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_bd09765d85ac1443f29d0bc50430856ca0c1918cd7c62920453b29e07007e008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd09765d85ac1443f29d0bc50430856ca0c1918cd7c62920453b29e07007e008->enter($__internal_bd09765d85ac1443f29d0bc50430856ca0c1918cd7c62920453b29e07007e008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c23332944e74abc2a75f835b1f0783ab382de9cf4efca61a9acb3105dc4a4da5->leave($__internal_c23332944e74abc2a75f835b1f0783ab382de9cf4efca61a9acb3105dc4a4da5_prof);

        
        $__internal_bd09765d85ac1443f29d0bc50430856ca0c1918cd7c62920453b29e07007e008->leave($__internal_bd09765d85ac1443f29d0bc50430856ca0c1918cd7c62920453b29e07007e008_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
