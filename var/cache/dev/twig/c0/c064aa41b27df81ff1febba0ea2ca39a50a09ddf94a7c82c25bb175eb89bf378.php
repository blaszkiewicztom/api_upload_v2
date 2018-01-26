<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0671531c531cec2fe2598471ba5c005aeffb157b6b704a4cdf430fb6e32b0839 extends Twig_Template
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
        $__internal_a7ecdcc342efb9429dc2ba946a58d5fc85e73b56691d8996dee1ed27d530165a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7ecdcc342efb9429dc2ba946a58d5fc85e73b56691d8996dee1ed27d530165a->enter($__internal_a7ecdcc342efb9429dc2ba946a58d5fc85e73b56691d8996dee1ed27d530165a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_3dde194a1c876f5c461f01028876d61243a7061ccbb8e8bc9d6fa7dc1ce1d11d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dde194a1c876f5c461f01028876d61243a7061ccbb8e8bc9d6fa7dc1ce1d11d->enter($__internal_3dde194a1c876f5c461f01028876d61243a7061ccbb8e8bc9d6fa7dc1ce1d11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a7ecdcc342efb9429dc2ba946a58d5fc85e73b56691d8996dee1ed27d530165a->leave($__internal_a7ecdcc342efb9429dc2ba946a58d5fc85e73b56691d8996dee1ed27d530165a_prof);

        
        $__internal_3dde194a1c876f5c461f01028876d61243a7061ccbb8e8bc9d6fa7dc1ce1d11d->leave($__internal_3dde194a1c876f5c461f01028876d61243a7061ccbb8e8bc9d6fa7dc1ce1d11d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
