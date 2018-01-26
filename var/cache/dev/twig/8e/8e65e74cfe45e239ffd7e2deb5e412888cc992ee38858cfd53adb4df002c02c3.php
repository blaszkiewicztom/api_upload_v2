<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_70abc4c8fd9430dcf46f5d347006f3c0c4a0f092887fa973d21463b58eb4a191 extends Twig_Template
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
        $__internal_e8a53d006bca1b7e949a8906a10168cf8d489c9d534d40421961cea07602fb97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8a53d006bca1b7e949a8906a10168cf8d489c9d534d40421961cea07602fb97->enter($__internal_e8a53d006bca1b7e949a8906a10168cf8d489c9d534d40421961cea07602fb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_7e4d163b8c1f43b518aa311184fe546db70ae4314fa7f25f02fbd43da6aeabd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e4d163b8c1f43b518aa311184fe546db70ae4314fa7f25f02fbd43da6aeabd5->enter($__internal_7e4d163b8c1f43b518aa311184fe546db70ae4314fa7f25f02fbd43da6aeabd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e8a53d006bca1b7e949a8906a10168cf8d489c9d534d40421961cea07602fb97->leave($__internal_e8a53d006bca1b7e949a8906a10168cf8d489c9d534d40421961cea07602fb97_prof);

        
        $__internal_7e4d163b8c1f43b518aa311184fe546db70ae4314fa7f25f02fbd43da6aeabd5->leave($__internal_7e4d163b8c1f43b518aa311184fe546db70ae4314fa7f25f02fbd43da6aeabd5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
