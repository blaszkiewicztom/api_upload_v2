<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_6de72676ab4def473a065713c9db6f795272cbc53f748243c446a1546c865061 extends Twig_Template
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
        $__internal_4c4cc8290d4586f26de6a0ca09497985dcaf865e445d1f622ec3ae6b0fb6f744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c4cc8290d4586f26de6a0ca09497985dcaf865e445d1f622ec3ae6b0fb6f744->enter($__internal_4c4cc8290d4586f26de6a0ca09497985dcaf865e445d1f622ec3ae6b0fb6f744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_e860d593daa6f9fdfc100d4682c5c190030572bed71e8e91be85800e2c115307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e860d593daa6f9fdfc100d4682c5c190030572bed71e8e91be85800e2c115307->enter($__internal_e860d593daa6f9fdfc100d4682c5c190030572bed71e8e91be85800e2c115307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_4c4cc8290d4586f26de6a0ca09497985dcaf865e445d1f622ec3ae6b0fb6f744->leave($__internal_4c4cc8290d4586f26de6a0ca09497985dcaf865e445d1f622ec3ae6b0fb6f744_prof);

        
        $__internal_e860d593daa6f9fdfc100d4682c5c190030572bed71e8e91be85800e2c115307->leave($__internal_e860d593daa6f9fdfc100d4682c5c190030572bed71e8e91be85800e2c115307_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
