<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_0ba4a2d0d5001d36685ffba816b3c57d4ac4d7a35c5c54cbf41d1521a0e411de extends Twig_Template
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
        $__internal_6775b73d9e923a651aa8c2484aac52216db4fadd55acd4d8f273c8816ebe0421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6775b73d9e923a651aa8c2484aac52216db4fadd55acd4d8f273c8816ebe0421->enter($__internal_6775b73d9e923a651aa8c2484aac52216db4fadd55acd4d8f273c8816ebe0421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_bbee2ac535ba7d2604d18c6647d3185ab5893533906b792434c3a37cd6461087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbee2ac535ba7d2604d18c6647d3185ab5893533906b792434c3a37cd6461087->enter($__internal_bbee2ac535ba7d2604d18c6647d3185ab5893533906b792434c3a37cd6461087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6775b73d9e923a651aa8c2484aac52216db4fadd55acd4d8f273c8816ebe0421->leave($__internal_6775b73d9e923a651aa8c2484aac52216db4fadd55acd4d8f273c8816ebe0421_prof);

        
        $__internal_bbee2ac535ba7d2604d18c6647d3185ab5893533906b792434c3a37cd6461087->leave($__internal_bbee2ac535ba7d2604d18c6647d3185ab5893533906b792434c3a37cd6461087_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
", "TwigBundle:Exception:error.json.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
