<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_4f0aed13e5da3622484c8aefd721a5a2508f89cb0ccb596d999e5d47a6ffc236 extends Twig_Template
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
        $__internal_74197c3bb162913f8bd27203954ff670b45359ea719fc08a22a5109d34fbd0f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74197c3bb162913f8bd27203954ff670b45359ea719fc08a22a5109d34fbd0f9->enter($__internal_74197c3bb162913f8bd27203954ff670b45359ea719fc08a22a5109d34fbd0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_8d806fa6d6fffd49dd664f4a35f2ee62eeb7bd81c8c1733ff58a949da99b73ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d806fa6d6fffd49dd664f4a35f2ee62eeb7bd81c8c1733ff58a949da99b73ef->enter($__internal_8d806fa6d6fffd49dd664f4a35f2ee62eeb7bd81c8c1733ff58a949da99b73ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_74197c3bb162913f8bd27203954ff670b45359ea719fc08a22a5109d34fbd0f9->leave($__internal_74197c3bb162913f8bd27203954ff670b45359ea719fc08a22a5109d34fbd0f9_prof);

        
        $__internal_8d806fa6d6fffd49dd664f4a35f2ee62eeb7bd81c8c1733ff58a949da99b73ef->leave($__internal_8d806fa6d6fffd49dd664f4a35f2ee62eeb7bd81c8c1733ff58a949da99b73ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
