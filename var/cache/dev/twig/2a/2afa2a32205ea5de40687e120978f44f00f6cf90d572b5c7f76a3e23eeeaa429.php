<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_0090cea7e8fb52b27d5433caca7b1d88d15aa4ba9d12fd022442aee7cecf49c6 extends Twig_Template
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
        $__internal_a996ed428bca7b7206ad51b34b481ad4beac02eaec4e86e6820283981e2416fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a996ed428bca7b7206ad51b34b481ad4beac02eaec4e86e6820283981e2416fa->enter($__internal_a996ed428bca7b7206ad51b34b481ad4beac02eaec4e86e6820283981e2416fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_363a2f26826a677ef7ecc3754261c84035aba16e30804449a8683abc40d5bd1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363a2f26826a677ef7ecc3754261c84035aba16e30804449a8683abc40d5bd1b->enter($__internal_363a2f26826a677ef7ecc3754261c84035aba16e30804449a8683abc40d5bd1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a996ed428bca7b7206ad51b34b481ad4beac02eaec4e86e6820283981e2416fa->leave($__internal_a996ed428bca7b7206ad51b34b481ad4beac02eaec4e86e6820283981e2416fa_prof);

        
        $__internal_363a2f26826a677ef7ecc3754261c84035aba16e30804449a8683abc40d5bd1b->leave($__internal_363a2f26826a677ef7ecc3754261c84035aba16e30804449a8683abc40d5bd1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
