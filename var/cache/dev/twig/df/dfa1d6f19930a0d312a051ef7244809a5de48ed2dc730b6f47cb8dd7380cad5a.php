<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_dc8ccda5571cf5f3522b73c002e7d4c05ecd207e5ae2f24e9e201e2b3148664a extends Twig_Template
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
        $__internal_91c2f1aff382344ddec49c4ef8c181215bfe11d559b274a0b9b747a6725f4713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91c2f1aff382344ddec49c4ef8c181215bfe11d559b274a0b9b747a6725f4713->enter($__internal_91c2f1aff382344ddec49c4ef8c181215bfe11d559b274a0b9b747a6725f4713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_1dd2799f2da46848405609aea5b81eee7987485012b382bfdcfe71e4f8d52e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd2799f2da46848405609aea5b81eee7987485012b382bfdcfe71e4f8d52e0f->enter($__internal_1dd2799f2da46848405609aea5b81eee7987485012b382bfdcfe71e4f8d52e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_91c2f1aff382344ddec49c4ef8c181215bfe11d559b274a0b9b747a6725f4713->leave($__internal_91c2f1aff382344ddec49c4ef8c181215bfe11d559b274a0b9b747a6725f4713_prof);

        
        $__internal_1dd2799f2da46848405609aea5b81eee7987485012b382bfdcfe71e4f8d52e0f->leave($__internal_1dd2799f2da46848405609aea5b81eee7987485012b382bfdcfe71e4f8d52e0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
