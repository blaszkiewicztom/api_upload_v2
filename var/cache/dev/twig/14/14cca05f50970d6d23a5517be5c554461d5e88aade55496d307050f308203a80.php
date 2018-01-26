<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_ccff04363ce1e6ea518183d73e3ac106acdaf0e63458bf16568347c84ad3d860 extends Twig_Template
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
        $__internal_8dd19622c46b513d9211b9bb803321454240858ce63c92ce72e99e89959cb61c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dd19622c46b513d9211b9bb803321454240858ce63c92ce72e99e89959cb61c->enter($__internal_8dd19622c46b513d9211b9bb803321454240858ce63c92ce72e99e89959cb61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_7831d079641dbc03e4e7123d9a1fef10564954e9bced109f480e1448e343606f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7831d079641dbc03e4e7123d9a1fef10564954e9bced109f480e1448e343606f->enter($__internal_7831d079641dbc03e4e7123d9a1fef10564954e9bced109f480e1448e343606f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_8dd19622c46b513d9211b9bb803321454240858ce63c92ce72e99e89959cb61c->leave($__internal_8dd19622c46b513d9211b9bb803321454240858ce63c92ce72e99e89959cb61c_prof);

        
        $__internal_7831d079641dbc03e4e7123d9a1fef10564954e9bced109f480e1448e343606f->leave($__internal_7831d079641dbc03e4e7123d9a1fef10564954e9bced109f480e1448e343606f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
