<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_b2b2f2e21e0d54b2f8b17a5068f65bca0535cba5a8444a54c47e64a7d830c384 extends Twig_Template
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
        $__internal_cc90a4c3be21cdd382d2aff0a56545af225bfb6807ab3633719d266a9a8ff797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc90a4c3be21cdd382d2aff0a56545af225bfb6807ab3633719d266a9a8ff797->enter($__internal_cc90a4c3be21cdd382d2aff0a56545af225bfb6807ab3633719d266a9a8ff797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_1757cc2341af6d753c212e6883a262397bd9f3c77ab61b23305bc193aebe9e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1757cc2341af6d753c212e6883a262397bd9f3c77ab61b23305bc193aebe9e86->enter($__internal_1757cc2341af6d753c212e6883a262397bd9f3c77ab61b23305bc193aebe9e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_cc90a4c3be21cdd382d2aff0a56545af225bfb6807ab3633719d266a9a8ff797->leave($__internal_cc90a4c3be21cdd382d2aff0a56545af225bfb6807ab3633719d266a9a8ff797_prof);

        
        $__internal_1757cc2341af6d753c212e6883a262397bd9f3c77ab61b23305bc193aebe9e86->leave($__internal_1757cc2341af6d753c212e6883a262397bd9f3c77ab61b23305bc193aebe9e86_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
