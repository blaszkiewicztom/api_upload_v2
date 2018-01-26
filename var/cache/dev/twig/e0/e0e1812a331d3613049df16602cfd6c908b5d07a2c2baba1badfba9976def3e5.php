<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_1e1a17583b10d64d619fe953441ba326f05082a21117e5c3df7044141cfdd851 extends Twig_Template
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
        $__internal_7bb8af8f8314e347e9c79b7e37eb5a4e50ae5700b35825e75827938166253578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bb8af8f8314e347e9c79b7e37eb5a4e50ae5700b35825e75827938166253578->enter($__internal_7bb8af8f8314e347e9c79b7e37eb5a4e50ae5700b35825e75827938166253578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_eabddcb60137f649de9594272e662aa1ea0f934e17e60ac63308889a369dbc3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eabddcb60137f649de9594272e662aa1ea0f934e17e60ac63308889a369dbc3b->enter($__internal_eabddcb60137f649de9594272e662aa1ea0f934e17e60ac63308889a369dbc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7bb8af8f8314e347e9c79b7e37eb5a4e50ae5700b35825e75827938166253578->leave($__internal_7bb8af8f8314e347e9c79b7e37eb5a4e50ae5700b35825e75827938166253578_prof);

        
        $__internal_eabddcb60137f649de9594272e662aa1ea0f934e17e60ac63308889a369dbc3b->leave($__internal_eabddcb60137f649de9594272e662aa1ea0f934e17e60ac63308889a369dbc3b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
