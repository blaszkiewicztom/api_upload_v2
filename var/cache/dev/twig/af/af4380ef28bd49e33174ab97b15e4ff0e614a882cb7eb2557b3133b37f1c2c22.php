<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_f9961aff56ccdd18fa9eb6810d2db8c9a73a558b08cd350f47ac33fb506cba18 extends Twig_Template
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
        $__internal_fbe83018b44a4f6cfa00cbf081f2512478c73a4adfd48cc9da9130320ea7e186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe83018b44a4f6cfa00cbf081f2512478c73a4adfd48cc9da9130320ea7e186->enter($__internal_fbe83018b44a4f6cfa00cbf081f2512478c73a4adfd48cc9da9130320ea7e186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_313b1bd11bc5f7958b4518f1ced72c733222c6750bb3624e37eca854affb531c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_313b1bd11bc5f7958b4518f1ced72c733222c6750bb3624e37eca854affb531c->enter($__internal_313b1bd11bc5f7958b4518f1ced72c733222c6750bb3624e37eca854affb531c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_fbe83018b44a4f6cfa00cbf081f2512478c73a4adfd48cc9da9130320ea7e186->leave($__internal_fbe83018b44a4f6cfa00cbf081f2512478c73a4adfd48cc9da9130320ea7e186_prof);

        
        $__internal_313b1bd11bc5f7958b4518f1ced72c733222c6750bb3624e37eca854affb531c->leave($__internal_313b1bd11bc5f7958b4518f1ced72c733222c6750bb3624e37eca854affb531c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
