<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_de946ca8aff5cd80057ce5464367ca5bbd19d11e57f8b052aa7c68ceb98db548 extends Twig_Template
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
        $__internal_36e515698aaef64e8e7b1f2186c63fed1ee9705903a6319af883753c74250109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36e515698aaef64e8e7b1f2186c63fed1ee9705903a6319af883753c74250109->enter($__internal_36e515698aaef64e8e7b1f2186c63fed1ee9705903a6319af883753c74250109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_8b09f464d673e6b358e299dfaa4c8d13bebd0802e7fdd0ac41823c54ebb24fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b09f464d673e6b358e299dfaa4c8d13bebd0802e7fdd0ac41823c54ebb24fb6->enter($__internal_8b09f464d673e6b358e299dfaa4c8d13bebd0802e7fdd0ac41823c54ebb24fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_36e515698aaef64e8e7b1f2186c63fed1ee9705903a6319af883753c74250109->leave($__internal_36e515698aaef64e8e7b1f2186c63fed1ee9705903a6319af883753c74250109_prof);

        
        $__internal_8b09f464d673e6b358e299dfaa4c8d13bebd0802e7fdd0ac41823c54ebb24fb6->leave($__internal_8b09f464d673e6b358e299dfaa4c8d13bebd0802e7fdd0ac41823c54ebb24fb6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
