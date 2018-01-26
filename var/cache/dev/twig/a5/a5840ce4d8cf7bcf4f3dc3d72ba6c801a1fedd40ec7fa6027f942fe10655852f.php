<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_073e8bd8836175acb9d9c3a2d16015cbc1797237a5dcb9eb0a485ca8f6465335 extends Twig_Template
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
        $__internal_a7ee3bfccaa547081e55b13ffa4f446d403290276025e4ff8597a0ac11f414e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7ee3bfccaa547081e55b13ffa4f446d403290276025e4ff8597a0ac11f414e2->enter($__internal_a7ee3bfccaa547081e55b13ffa4f446d403290276025e4ff8597a0ac11f414e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_db17d44957175c116abefbcf174745bb9916232bcc52b484d3bc120f2e24f8be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db17d44957175c116abefbcf174745bb9916232bcc52b484d3bc120f2e24f8be->enter($__internal_db17d44957175c116abefbcf174745bb9916232bcc52b484d3bc120f2e24f8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_a7ee3bfccaa547081e55b13ffa4f446d403290276025e4ff8597a0ac11f414e2->leave($__internal_a7ee3bfccaa547081e55b13ffa4f446d403290276025e4ff8597a0ac11f414e2_prof);

        
        $__internal_db17d44957175c116abefbcf174745bb9916232bcc52b484d3bc120f2e24f8be->leave($__internal_db17d44957175c116abefbcf174745bb9916232bcc52b484d3bc120f2e24f8be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
