<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_f2d4f2e0213ab28955cb91c450e006940e2ed50f8a3e847457decf01b2f99350 extends Twig_Template
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
        $__internal_0a8238eeccbdeab043a7386128f6dc66c00adf79cbfff093ed6b19bcd9416413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a8238eeccbdeab043a7386128f6dc66c00adf79cbfff093ed6b19bcd9416413->enter($__internal_0a8238eeccbdeab043a7386128f6dc66c00adf79cbfff093ed6b19bcd9416413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_31d28d1e45f2bb755176108db8363b0bfeea6e754c9b7d2eed0d098d1ba7f895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d28d1e45f2bb755176108db8363b0bfeea6e754c9b7d2eed0d098d1ba7f895->enter($__internal_31d28d1e45f2bb755176108db8363b0bfeea6e754c9b7d2eed0d098d1ba7f895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_0a8238eeccbdeab043a7386128f6dc66c00adf79cbfff093ed6b19bcd9416413->leave($__internal_0a8238eeccbdeab043a7386128f6dc66c00adf79cbfff093ed6b19bcd9416413_prof);

        
        $__internal_31d28d1e45f2bb755176108db8363b0bfeea6e754c9b7d2eed0d098d1ba7f895->leave($__internal_31d28d1e45f2bb755176108db8363b0bfeea6e754c9b7d2eed0d098d1ba7f895_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
