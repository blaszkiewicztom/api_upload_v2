<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d419c98b0908dfbd92e04cdc42f69b8b5b1c3c8e7b1f60691d0f0b54f59636fc extends Twig_Template
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
        $__internal_b852c9d85def41b29b8f74b0d0e0b509cb10d6d5677192ccf12b6a375c23eb1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b852c9d85def41b29b8f74b0d0e0b509cb10d6d5677192ccf12b6a375c23eb1e->enter($__internal_b852c9d85def41b29b8f74b0d0e0b509cb10d6d5677192ccf12b6a375c23eb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_74d23670293c51d0ab49c3fc606583d32d7fc633639fe4e15a4401fd5590afdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d23670293c51d0ab49c3fc606583d32d7fc633639fe4e15a4401fd5590afdd->enter($__internal_74d23670293c51d0ab49c3fc606583d32d7fc633639fe4e15a4401fd5590afdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b852c9d85def41b29b8f74b0d0e0b509cb10d6d5677192ccf12b6a375c23eb1e->leave($__internal_b852c9d85def41b29b8f74b0d0e0b509cb10d6d5677192ccf12b6a375c23eb1e_prof);

        
        $__internal_74d23670293c51d0ab49c3fc606583d32d7fc633639fe4e15a4401fd5590afdd->leave($__internal_74d23670293c51d0ab49c3fc606583d32d7fc633639fe4e15a4401fd5590afdd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
