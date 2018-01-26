<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_9206a7603d187f9284be916321fd78c66c812a63eb9c2ced3db38f94ce49e2a4 extends Twig_Template
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
        $__internal_027cc69640616f32a8cf64e505748a325ac5c5b46a86062e6b8af6d4c705f1f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_027cc69640616f32a8cf64e505748a325ac5c5b46a86062e6b8af6d4c705f1f3->enter($__internal_027cc69640616f32a8cf64e505748a325ac5c5b46a86062e6b8af6d4c705f1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_1d189b41a9cef81173473d9c2d9863d2bc0e3036383a28988da40a8c6f173ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d189b41a9cef81173473d9c2d9863d2bc0e3036383a28988da40a8c6f173ffa->enter($__internal_1d189b41a9cef81173473d9c2d9863d2bc0e3036383a28988da40a8c6f173ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_027cc69640616f32a8cf64e505748a325ac5c5b46a86062e6b8af6d4c705f1f3->leave($__internal_027cc69640616f32a8cf64e505748a325ac5c5b46a86062e6b8af6d4c705f1f3_prof);

        
        $__internal_1d189b41a9cef81173473d9c2d9863d2bc0e3036383a28988da40a8c6f173ffa->leave($__internal_1d189b41a9cef81173473d9c2d9863d2bc0e3036383a28988da40a8c6f173ffa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
