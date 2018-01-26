<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_35cb1df13486512f2ff9b001219f58f72dee2b5f8cfdcb8c9546d9ebe7a3fce6 extends Twig_Template
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
        $__internal_48653e6ea92fdb057b50e30535dba44b134809b6cd00ee76af5f657484fb35f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48653e6ea92fdb057b50e30535dba44b134809b6cd00ee76af5f657484fb35f9->enter($__internal_48653e6ea92fdb057b50e30535dba44b134809b6cd00ee76af5f657484fb35f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_526256a5ba69aeff63006fb0f39d7c0a8a4f608fc439978000641b757f3bb9c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_526256a5ba69aeff63006fb0f39d7c0a8a4f608fc439978000641b757f3bb9c3->enter($__internal_526256a5ba69aeff63006fb0f39d7c0a8a4f608fc439978000641b757f3bb9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_48653e6ea92fdb057b50e30535dba44b134809b6cd00ee76af5f657484fb35f9->leave($__internal_48653e6ea92fdb057b50e30535dba44b134809b6cd00ee76af5f657484fb35f9_prof);

        
        $__internal_526256a5ba69aeff63006fb0f39d7c0a8a4f608fc439978000641b757f3bb9c3->leave($__internal_526256a5ba69aeff63006fb0f39d7c0a8a4f608fc439978000641b757f3bb9c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
