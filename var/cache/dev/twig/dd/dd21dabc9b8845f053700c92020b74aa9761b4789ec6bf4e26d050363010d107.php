<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_63193181ddafe490eab742f288ecd34e57ce365f3631ebc8b874474f90f2a524 extends Twig_Template
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
        $__internal_4ba47be613263e30b17cddd499fda4121635dbcac961037dc08e694d414a762b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba47be613263e30b17cddd499fda4121635dbcac961037dc08e694d414a762b->enter($__internal_4ba47be613263e30b17cddd499fda4121635dbcac961037dc08e694d414a762b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_75a9b5a5e8f7f9a420ce71efd2d3a1162ed72f1091db9e44d5d24427db6fb28a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75a9b5a5e8f7f9a420ce71efd2d3a1162ed72f1091db9e44d5d24427db6fb28a->enter($__internal_75a9b5a5e8f7f9a420ce71efd2d3a1162ed72f1091db9e44d5d24427db6fb28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_4ba47be613263e30b17cddd499fda4121635dbcac961037dc08e694d414a762b->leave($__internal_4ba47be613263e30b17cddd499fda4121635dbcac961037dc08e694d414a762b_prof);

        
        $__internal_75a9b5a5e8f7f9a420ce71efd2d3a1162ed72f1091db9e44d5d24427db6fb28a->leave($__internal_75a9b5a5e8f7f9a420ce71efd2d3a1162ed72f1091db9e44d5d24427db6fb28a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
