<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_3641a8007e2101d5b8ce9b0059e9909173c728e1593f8fd3199055aa63837a7d extends Twig_Template
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
        $__internal_4d016d3f8022e0cdcfa0a932b61aaf968560b6bd333a0bf633f9b960dbceaeec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d016d3f8022e0cdcfa0a932b61aaf968560b6bd333a0bf633f9b960dbceaeec->enter($__internal_4d016d3f8022e0cdcfa0a932b61aaf968560b6bd333a0bf633f9b960dbceaeec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_b42e836ad01cd1215141e2adae71ec4351c3aeab7770de1a62831f5c6bf51fef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42e836ad01cd1215141e2adae71ec4351c3aeab7770de1a62831f5c6bf51fef->enter($__internal_b42e836ad01cd1215141e2adae71ec4351c3aeab7770de1a62831f5c6bf51fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_4d016d3f8022e0cdcfa0a932b61aaf968560b6bd333a0bf633f9b960dbceaeec->leave($__internal_4d016d3f8022e0cdcfa0a932b61aaf968560b6bd333a0bf633f9b960dbceaeec_prof);

        
        $__internal_b42e836ad01cd1215141e2adae71ec4351c3aeab7770de1a62831f5c6bf51fef->leave($__internal_b42e836ad01cd1215141e2adae71ec4351c3aeab7770de1a62831f5c6bf51fef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
