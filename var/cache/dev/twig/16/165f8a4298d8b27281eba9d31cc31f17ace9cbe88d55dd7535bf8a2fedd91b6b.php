<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_a441ffc32ee477782f4e160194796c884407204a09609e894de15b05f4b68c77 extends Twig_Template
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
        $__internal_26fe9dd822ea3feefc7bf05ceebfdd7eabc6b1703345c475cc76bdbcad24ea93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26fe9dd822ea3feefc7bf05ceebfdd7eabc6b1703345c475cc76bdbcad24ea93->enter($__internal_26fe9dd822ea3feefc7bf05ceebfdd7eabc6b1703345c475cc76bdbcad24ea93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_f840f5260785ba0d6b2e3ff046995278f4ba35a4dd2333aea35ad2baeb195200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f840f5260785ba0d6b2e3ff046995278f4ba35a4dd2333aea35ad2baeb195200->enter($__internal_f840f5260785ba0d6b2e3ff046995278f4ba35a4dd2333aea35ad2baeb195200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_26fe9dd822ea3feefc7bf05ceebfdd7eabc6b1703345c475cc76bdbcad24ea93->leave($__internal_26fe9dd822ea3feefc7bf05ceebfdd7eabc6b1703345c475cc76bdbcad24ea93_prof);

        
        $__internal_f840f5260785ba0d6b2e3ff046995278f4ba35a4dd2333aea35ad2baeb195200->leave($__internal_f840f5260785ba0d6b2e3ff046995278f4ba35a4dd2333aea35ad2baeb195200_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
