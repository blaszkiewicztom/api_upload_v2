<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_986d4c31291229d3121764758b73cd20ad69a7772377f5c3040cfc74301f5f32 extends Twig_Template
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
        $__internal_53fec7888f9256e8a315f3278ce0a3928a1771a516e86600dc0ec761d4996771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53fec7888f9256e8a315f3278ce0a3928a1771a516e86600dc0ec761d4996771->enter($__internal_53fec7888f9256e8a315f3278ce0a3928a1771a516e86600dc0ec761d4996771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_d6d81bf2c3ab697e8a6937a3c762b1239b40413b03eb41d8ca6fc65cbc04e7dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d81bf2c3ab697e8a6937a3c762b1239b40413b03eb41d8ca6fc65cbc04e7dd->enter($__internal_d6d81bf2c3ab697e8a6937a3c762b1239b40413b03eb41d8ca6fc65cbc04e7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_53fec7888f9256e8a315f3278ce0a3928a1771a516e86600dc0ec761d4996771->leave($__internal_53fec7888f9256e8a315f3278ce0a3928a1771a516e86600dc0ec761d4996771_prof);

        
        $__internal_d6d81bf2c3ab697e8a6937a3c762b1239b40413b03eb41d8ca6fc65cbc04e7dd->leave($__internal_d6d81bf2c3ab697e8a6937a3c762b1239b40413b03eb41d8ca6fc65cbc04e7dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
