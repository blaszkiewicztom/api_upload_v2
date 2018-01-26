<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_d5d1354b471faa25defd1c0b2c668badc96a77e64fcb78cca08d7bcf86b282bc extends Twig_Template
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
        $__internal_81b1607e58b9ec70c64a02dd179dfcc0e0cbd8f5029371e85666df98c1f5df35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81b1607e58b9ec70c64a02dd179dfcc0e0cbd8f5029371e85666df98c1f5df35->enter($__internal_81b1607e58b9ec70c64a02dd179dfcc0e0cbd8f5029371e85666df98c1f5df35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_18dc8a02e05f120185d4ee2a6f1326a0fb909e3c5f6c1d6f98c0dfadda10b35e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18dc8a02e05f120185d4ee2a6f1326a0fb909e3c5f6c1d6f98c0dfadda10b35e->enter($__internal_18dc8a02e05f120185d4ee2a6f1326a0fb909e3c5f6c1d6f98c0dfadda10b35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_81b1607e58b9ec70c64a02dd179dfcc0e0cbd8f5029371e85666df98c1f5df35->leave($__internal_81b1607e58b9ec70c64a02dd179dfcc0e0cbd8f5029371e85666df98c1f5df35_prof);

        
        $__internal_18dc8a02e05f120185d4ee2a6f1326a0fb909e3c5f6c1d6f98c0dfadda10b35e->leave($__internal_18dc8a02e05f120185d4ee2a6f1326a0fb909e3c5f6c1d6f98c0dfadda10b35e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
