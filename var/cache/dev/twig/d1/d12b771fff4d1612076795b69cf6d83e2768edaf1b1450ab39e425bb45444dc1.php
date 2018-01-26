<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_27c226119963ad8ce484a5d7b98923a109c360d5dfb3a087a97b27990d460f71 extends Twig_Template
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
        $__internal_ea8a02d7c1625f8176cae5d3dc93e5ae8609cbdab7737dc2ad879b89304a666a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea8a02d7c1625f8176cae5d3dc93e5ae8609cbdab7737dc2ad879b89304a666a->enter($__internal_ea8a02d7c1625f8176cae5d3dc93e5ae8609cbdab7737dc2ad879b89304a666a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_6b059d678e72df76151b0296608c2cb9e36a275e3fa14d616851719db35b9906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b059d678e72df76151b0296608c2cb9e36a275e3fa14d616851719db35b9906->enter($__internal_6b059d678e72df76151b0296608c2cb9e36a275e3fa14d616851719db35b9906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ea8a02d7c1625f8176cae5d3dc93e5ae8609cbdab7737dc2ad879b89304a666a->leave($__internal_ea8a02d7c1625f8176cae5d3dc93e5ae8609cbdab7737dc2ad879b89304a666a_prof);

        
        $__internal_6b059d678e72df76151b0296608c2cb9e36a275e3fa14d616851719db35b9906->leave($__internal_6b059d678e72df76151b0296608c2cb9e36a275e3fa14d616851719db35b9906_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
