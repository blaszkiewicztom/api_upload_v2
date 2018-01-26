<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2bd4ed182c7901271a808034a7ff5f0e731cb01a6df0ffa59e4a090e4f3f1706 extends Twig_Template
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
        $__internal_7f936447f77ec8ec2d659e993742d08b29fb07e1d5dc10a764c509df7beadb0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f936447f77ec8ec2d659e993742d08b29fb07e1d5dc10a764c509df7beadb0a->enter($__internal_7f936447f77ec8ec2d659e993742d08b29fb07e1d5dc10a764c509df7beadb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_eafd025ad20f3b79e91e73c92c5cbfc046325337e569d41463aa6f59a2ff29a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eafd025ad20f3b79e91e73c92c5cbfc046325337e569d41463aa6f59a2ff29a3->enter($__internal_eafd025ad20f3b79e91e73c92c5cbfc046325337e569d41463aa6f59a2ff29a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7f936447f77ec8ec2d659e993742d08b29fb07e1d5dc10a764c509df7beadb0a->leave($__internal_7f936447f77ec8ec2d659e993742d08b29fb07e1d5dc10a764c509df7beadb0a_prof);

        
        $__internal_eafd025ad20f3b79e91e73c92c5cbfc046325337e569d41463aa6f59a2ff29a3->leave($__internal_eafd025ad20f3b79e91e73c92c5cbfc046325337e569d41463aa6f59a2ff29a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
