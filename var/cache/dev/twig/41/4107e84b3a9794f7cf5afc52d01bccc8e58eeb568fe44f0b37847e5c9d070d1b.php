<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_5f19a65f930332c9dbf67b01f5d53d8115aa1c9a27b20e19ad7f51938ef8a707 extends Twig_Template
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
        $__internal_09aab9917faf935d464ff304d4aad779f6e1dfa9e048cb2c8203e53f5a155090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09aab9917faf935d464ff304d4aad779f6e1dfa9e048cb2c8203e53f5a155090->enter($__internal_09aab9917faf935d464ff304d4aad779f6e1dfa9e048cb2c8203e53f5a155090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_62b7f69f910ad3ac7c07c66e2e7fbf0cb187e7315a8e1a34917159ce62cab1df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b7f69f910ad3ac7c07c66e2e7fbf0cb187e7315a8e1a34917159ce62cab1df->enter($__internal_62b7f69f910ad3ac7c07c66e2e7fbf0cb187e7315a8e1a34917159ce62cab1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_09aab9917faf935d464ff304d4aad779f6e1dfa9e048cb2c8203e53f5a155090->leave($__internal_09aab9917faf935d464ff304d4aad779f6e1dfa9e048cb2c8203e53f5a155090_prof);

        
        $__internal_62b7f69f910ad3ac7c07c66e2e7fbf0cb187e7315a8e1a34917159ce62cab1df->leave($__internal_62b7f69f910ad3ac7c07c66e2e7fbf0cb187e7315a8e1a34917159ce62cab1df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
