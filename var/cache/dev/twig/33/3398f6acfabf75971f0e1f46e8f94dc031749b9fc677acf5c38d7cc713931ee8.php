<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7c8326abee58e2a9b407591040681ccf28b94b28b40e411e81fe5293530a4da7 extends Twig_Template
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
        $__internal_e0f6f65478c75968083110988e4ec771db2789d97cae07db591abc3ed3fe06e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f6f65478c75968083110988e4ec771db2789d97cae07db591abc3ed3fe06e6->enter($__internal_e0f6f65478c75968083110988e4ec771db2789d97cae07db591abc3ed3fe06e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_8b5ab10949d5401c67cfe22c1b5d209524764c127f7cfcf696e482dd17c9a991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b5ab10949d5401c67cfe22c1b5d209524764c127f7cfcf696e482dd17c9a991->enter($__internal_8b5ab10949d5401c67cfe22c1b5d209524764c127f7cfcf696e482dd17c9a991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e0f6f65478c75968083110988e4ec771db2789d97cae07db591abc3ed3fe06e6->leave($__internal_e0f6f65478c75968083110988e4ec771db2789d97cae07db591abc3ed3fe06e6_prof);

        
        $__internal_8b5ab10949d5401c67cfe22c1b5d209524764c127f7cfcf696e482dd17c9a991->leave($__internal_8b5ab10949d5401c67cfe22c1b5d209524764c127f7cfcf696e482dd17c9a991_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
