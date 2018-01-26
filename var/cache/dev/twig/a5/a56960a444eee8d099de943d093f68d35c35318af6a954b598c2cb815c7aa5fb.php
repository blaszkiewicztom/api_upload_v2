<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_97298e49cf0eba6393cfb10a37f06dd0fb6055fd4aac887858c46273bb0137aa extends Twig_Template
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
        $__internal_1bbd1a74e63dfab72d3e9c351661c080fc10aa0b25fbda511f8350d8a15c8101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bbd1a74e63dfab72d3e9c351661c080fc10aa0b25fbda511f8350d8a15c8101->enter($__internal_1bbd1a74e63dfab72d3e9c351661c080fc10aa0b25fbda511f8350d8a15c8101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_a055a451574ec8a327a5e32e944c1ced86d3d5182a5427338c8b78b881c6fbea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a055a451574ec8a327a5e32e944c1ced86d3d5182a5427338c8b78b881c6fbea->enter($__internal_a055a451574ec8a327a5e32e944c1ced86d3d5182a5427338c8b78b881c6fbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1bbd1a74e63dfab72d3e9c351661c080fc10aa0b25fbda511f8350d8a15c8101->leave($__internal_1bbd1a74e63dfab72d3e9c351661c080fc10aa0b25fbda511f8350d8a15c8101_prof);

        
        $__internal_a055a451574ec8a327a5e32e944c1ced86d3d5182a5427338c8b78b881c6fbea->leave($__internal_a055a451574ec8a327a5e32e944c1ced86d3d5182a5427338c8b78b881c6fbea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
