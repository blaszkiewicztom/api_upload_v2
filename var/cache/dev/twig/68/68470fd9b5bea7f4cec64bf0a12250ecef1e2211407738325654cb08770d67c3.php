<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_6f0c23303578e5b7035dc34594879ecb65e0ae7a14877445846281f04636c7f9 extends Twig_Template
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
        $__internal_c923899b3c3dccebc11ba52084ad0d6794e83eeb335e9b5e24f8ad74de93c55d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c923899b3c3dccebc11ba52084ad0d6794e83eeb335e9b5e24f8ad74de93c55d->enter($__internal_c923899b3c3dccebc11ba52084ad0d6794e83eeb335e9b5e24f8ad74de93c55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_dddf9ddf2c78f6d0de8c57dbf493685e8f1c470dbb7a48b67513238adb5360e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dddf9ddf2c78f6d0de8c57dbf493685e8f1c470dbb7a48b67513238adb5360e9->enter($__internal_dddf9ddf2c78f6d0de8c57dbf493685e8f1c470dbb7a48b67513238adb5360e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_c923899b3c3dccebc11ba52084ad0d6794e83eeb335e9b5e24f8ad74de93c55d->leave($__internal_c923899b3c3dccebc11ba52084ad0d6794e83eeb335e9b5e24f8ad74de93c55d_prof);

        
        $__internal_dddf9ddf2c78f6d0de8c57dbf493685e8f1c470dbb7a48b67513238adb5360e9->leave($__internal_dddf9ddf2c78f6d0de8c57dbf493685e8f1c470dbb7a48b67513238adb5360e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
