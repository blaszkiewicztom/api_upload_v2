<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_1c72c0ccbd07678a5e2396edc5ea9e597a19ded79a2da9807d53f8185850b6a2 extends Twig_Template
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
        $__internal_931f591b22651bf23decbc75fef97bc0609e678d8b2fa0c5d2ed891fc20fca8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_931f591b22651bf23decbc75fef97bc0609e678d8b2fa0c5d2ed891fc20fca8a->enter($__internal_931f591b22651bf23decbc75fef97bc0609e678d8b2fa0c5d2ed891fc20fca8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_45684d98da3fed4efa0f85200aeaa7b1c63215039b4980e47bf1ad29060d5eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45684d98da3fed4efa0f85200aeaa7b1c63215039b4980e47bf1ad29060d5eb6->enter($__internal_45684d98da3fed4efa0f85200aeaa7b1c63215039b4980e47bf1ad29060d5eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_931f591b22651bf23decbc75fef97bc0609e678d8b2fa0c5d2ed891fc20fca8a->leave($__internal_931f591b22651bf23decbc75fef97bc0609e678d8b2fa0c5d2ed891fc20fca8a_prof);

        
        $__internal_45684d98da3fed4efa0f85200aeaa7b1c63215039b4980e47bf1ad29060d5eb6->leave($__internal_45684d98da3fed4efa0f85200aeaa7b1c63215039b4980e47bf1ad29060d5eb6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
