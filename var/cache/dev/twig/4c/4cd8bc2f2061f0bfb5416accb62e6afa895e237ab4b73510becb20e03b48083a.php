<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_ff0c3f3e0fbc3de0ea42374be6504a82bb1fa56d0a3e1f4fb3e5359d08dbd757 extends Twig_Template
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
        $__internal_565098866e685204947e38f4700e932032539ecd3abc795190700b686dfb057a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_565098866e685204947e38f4700e932032539ecd3abc795190700b686dfb057a->enter($__internal_565098866e685204947e38f4700e932032539ecd3abc795190700b686dfb057a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_f309f0c9f84a0e4fe433b0d00b425bf07d5718a28e9928896ce9a7f510e6be43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f309f0c9f84a0e4fe433b0d00b425bf07d5718a28e9928896ce9a7f510e6be43->enter($__internal_f309f0c9f84a0e4fe433b0d00b425bf07d5718a28e9928896ce9a7f510e6be43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_565098866e685204947e38f4700e932032539ecd3abc795190700b686dfb057a->leave($__internal_565098866e685204947e38f4700e932032539ecd3abc795190700b686dfb057a_prof);

        
        $__internal_f309f0c9f84a0e4fe433b0d00b425bf07d5718a28e9928896ce9a7f510e6be43->leave($__internal_f309f0c9f84a0e4fe433b0d00b425bf07d5718a28e9928896ce9a7f510e6be43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
