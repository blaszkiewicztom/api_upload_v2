<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_eebdc5cd0bd7426e9b239271196937d978c14c68e9d52cb63f4282857c183271 extends Twig_Template
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
        $__internal_f56f5f5e387e0c269d4996be10f3619d48a2fec1a360708bc7b16c3ac2d16dd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f56f5f5e387e0c269d4996be10f3619d48a2fec1a360708bc7b16c3ac2d16dd7->enter($__internal_f56f5f5e387e0c269d4996be10f3619d48a2fec1a360708bc7b16c3ac2d16dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_2abb4f24d57184ea249e46413955a96560dbcf29adb78ba5d197fc2642cd6b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2abb4f24d57184ea249e46413955a96560dbcf29adb78ba5d197fc2642cd6b6c->enter($__internal_2abb4f24d57184ea249e46413955a96560dbcf29adb78ba5d197fc2642cd6b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f56f5f5e387e0c269d4996be10f3619d48a2fec1a360708bc7b16c3ac2d16dd7->leave($__internal_f56f5f5e387e0c269d4996be10f3619d48a2fec1a360708bc7b16c3ac2d16dd7_prof);

        
        $__internal_2abb4f24d57184ea249e46413955a96560dbcf29adb78ba5d197fc2642cd6b6c->leave($__internal_2abb4f24d57184ea249e46413955a96560dbcf29adb78ba5d197fc2642cd6b6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
