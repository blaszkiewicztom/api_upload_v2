<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_38db984c2cfecf8d58c1676f3f0c707b4772204966a63a03797aa518e3fdfa8b extends Twig_Template
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
        $__internal_4939776be2ac32ed0e34861a6d7479e5d7971907d15b199c32cc8ed12b1c73f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4939776be2ac32ed0e34861a6d7479e5d7971907d15b199c32cc8ed12b1c73f3->enter($__internal_4939776be2ac32ed0e34861a6d7479e5d7971907d15b199c32cc8ed12b1c73f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_0eb37f25dd98ff1315832700c98930cd56c29ffac58afcc5516afe051f678275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb37f25dd98ff1315832700c98930cd56c29ffac58afcc5516afe051f678275->enter($__internal_0eb37f25dd98ff1315832700c98930cd56c29ffac58afcc5516afe051f678275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4939776be2ac32ed0e34861a6d7479e5d7971907d15b199c32cc8ed12b1c73f3->leave($__internal_4939776be2ac32ed0e34861a6d7479e5d7971907d15b199c32cc8ed12b1c73f3_prof);

        
        $__internal_0eb37f25dd98ff1315832700c98930cd56c29ffac58afcc5516afe051f678275->leave($__internal_0eb37f25dd98ff1315832700c98930cd56c29ffac58afcc5516afe051f678275_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
