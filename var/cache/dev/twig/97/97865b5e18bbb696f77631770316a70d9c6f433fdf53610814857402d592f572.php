<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_a2f056f3b7df34decb35d457daf503e7856df1f8fd0913b1d58a3992a7ef41be extends Twig_Template
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
        $__internal_193061ca3864a70d565e675c60175fa49d60da471fa04310ca724dc1a92993b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_193061ca3864a70d565e675c60175fa49d60da471fa04310ca724dc1a92993b8->enter($__internal_193061ca3864a70d565e675c60175fa49d60da471fa04310ca724dc1a92993b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_76ccc4e27e7e9c29d5b7b4bfc20f3251c3c6dd5a552176ab632556e4f937db63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ccc4e27e7e9c29d5b7b4bfc20f3251c3c6dd5a552176ab632556e4f937db63->enter($__internal_76ccc4e27e7e9c29d5b7b4bfc20f3251c3c6dd5a552176ab632556e4f937db63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_193061ca3864a70d565e675c60175fa49d60da471fa04310ca724dc1a92993b8->leave($__internal_193061ca3864a70d565e675c60175fa49d60da471fa04310ca724dc1a92993b8_prof);

        
        $__internal_76ccc4e27e7e9c29d5b7b4bfc20f3251c3c6dd5a552176ab632556e4f937db63->leave($__internal_76ccc4e27e7e9c29d5b7b4bfc20f3251c3c6dd5a552176ab632556e4f937db63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
