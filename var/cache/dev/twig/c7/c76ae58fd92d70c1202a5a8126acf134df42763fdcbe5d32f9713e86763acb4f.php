<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_80e038e57198ce36372a13fe701c7b429301683d75f771ac1da8d2a473555ab2 extends Twig_Template
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
        $__internal_1e802b223b1709602f9d1eb083d1bb56112dd97725d7c0e92e23b8c4449bfd62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e802b223b1709602f9d1eb083d1bb56112dd97725d7c0e92e23b8c4449bfd62->enter($__internal_1e802b223b1709602f9d1eb083d1bb56112dd97725d7c0e92e23b8c4449bfd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_30f70f52dd3892f555290467c1693f03b308ab1e771aef8abb2cf20aede4bbd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f70f52dd3892f555290467c1693f03b308ab1e771aef8abb2cf20aede4bbd2->enter($__internal_30f70f52dd3892f555290467c1693f03b308ab1e771aef8abb2cf20aede4bbd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_1e802b223b1709602f9d1eb083d1bb56112dd97725d7c0e92e23b8c4449bfd62->leave($__internal_1e802b223b1709602f9d1eb083d1bb56112dd97725d7c0e92e23b8c4449bfd62_prof);

        
        $__internal_30f70f52dd3892f555290467c1693f03b308ab1e771aef8abb2cf20aede4bbd2->leave($__internal_30f70f52dd3892f555290467c1693f03b308ab1e771aef8abb2cf20aede4bbd2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
