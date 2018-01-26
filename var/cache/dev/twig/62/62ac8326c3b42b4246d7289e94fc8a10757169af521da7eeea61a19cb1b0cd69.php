<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_85dbe5a7240fbf99b129b93de412380527e3b543d73444001aed10f029b89763 extends Twig_Template
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
        $__internal_5ddc0fb272460b36b47c69f139b1e9701cfa67efdc80cc61dddfdb803c89bb19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ddc0fb272460b36b47c69f139b1e9701cfa67efdc80cc61dddfdb803c89bb19->enter($__internal_5ddc0fb272460b36b47c69f139b1e9701cfa67efdc80cc61dddfdb803c89bb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_46dd3a573e64f7f74bcfae54949e464e8fd016f81610fc7950a86189240596d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46dd3a573e64f7f74bcfae54949e464e8fd016f81610fc7950a86189240596d3->enter($__internal_46dd3a573e64f7f74bcfae54949e464e8fd016f81610fc7950a86189240596d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_5ddc0fb272460b36b47c69f139b1e9701cfa67efdc80cc61dddfdb803c89bb19->leave($__internal_5ddc0fb272460b36b47c69f139b1e9701cfa67efdc80cc61dddfdb803c89bb19_prof);

        
        $__internal_46dd3a573e64f7f74bcfae54949e464e8fd016f81610fc7950a86189240596d3->leave($__internal_46dd3a573e64f7f74bcfae54949e464e8fd016f81610fc7950a86189240596d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
