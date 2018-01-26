<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_798b57c5a5c886445791e7bb156077280bda52ee2cbaff71bd25f1980cf7ef1f extends Twig_Template
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
        $__internal_d8a7b3c8e79f280ddac4926d46e4f5bd01705153d3d3daa4bebf97013c89fe41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8a7b3c8e79f280ddac4926d46e4f5bd01705153d3d3daa4bebf97013c89fe41->enter($__internal_d8a7b3c8e79f280ddac4926d46e4f5bd01705153d3d3daa4bebf97013c89fe41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_e73ff73057ebd92204fd178d8af95554eadb48d0fc5c72307737a689a830cebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73ff73057ebd92204fd178d8af95554eadb48d0fc5c72307737a689a830cebd->enter($__internal_e73ff73057ebd92204fd178d8af95554eadb48d0fc5c72307737a689a830cebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_d8a7b3c8e79f280ddac4926d46e4f5bd01705153d3d3daa4bebf97013c89fe41->leave($__internal_d8a7b3c8e79f280ddac4926d46e4f5bd01705153d3d3daa4bebf97013c89fe41_prof);

        
        $__internal_e73ff73057ebd92204fd178d8af95554eadb48d0fc5c72307737a689a830cebd->leave($__internal_e73ff73057ebd92204fd178d8af95554eadb48d0fc5c72307737a689a830cebd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
