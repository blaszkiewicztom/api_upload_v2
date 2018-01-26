<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_4ec976ae6e511fe4cb14b9f7759217057ff271d67276ab21a130ae6f55ae031c extends Twig_Template
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
        $__internal_511581e8b832ae20124d68052ed483ba32f0ac740ee267ddaa506395b58e90c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_511581e8b832ae20124d68052ed483ba32f0ac740ee267ddaa506395b58e90c0->enter($__internal_511581e8b832ae20124d68052ed483ba32f0ac740ee267ddaa506395b58e90c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_5fc54daf241a7958486e4a9153e339707a3e3ac5353de36f91c262003069325f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc54daf241a7958486e4a9153e339707a3e3ac5353de36f91c262003069325f->enter($__internal_5fc54daf241a7958486e4a9153e339707a3e3ac5353de36f91c262003069325f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_511581e8b832ae20124d68052ed483ba32f0ac740ee267ddaa506395b58e90c0->leave($__internal_511581e8b832ae20124d68052ed483ba32f0ac740ee267ddaa506395b58e90c0_prof);

        
        $__internal_5fc54daf241a7958486e4a9153e339707a3e3ac5353de36f91c262003069325f->leave($__internal_5fc54daf241a7958486e4a9153e339707a3e3ac5353de36f91c262003069325f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
