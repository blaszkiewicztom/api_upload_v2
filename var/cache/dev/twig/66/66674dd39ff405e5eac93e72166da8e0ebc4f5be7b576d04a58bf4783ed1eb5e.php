<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_110193cdaf01b1daba799979889f2bbb492b3fd695fdbec11af8431c47e75332 extends Twig_Template
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
        $__internal_16db7b8ed8b52227487e16eca1dd678aae5d302aa8b8c3cb1660b72fd4326d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16db7b8ed8b52227487e16eca1dd678aae5d302aa8b8c3cb1660b72fd4326d48->enter($__internal_16db7b8ed8b52227487e16eca1dd678aae5d302aa8b8c3cb1660b72fd4326d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_803d0eeadf95062327d65f6c057613f0b6f8b0c9bb8c4bf0b44395aa900be11d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_803d0eeadf95062327d65f6c057613f0b6f8b0c9bb8c4bf0b44395aa900be11d->enter($__internal_803d0eeadf95062327d65f6c057613f0b6f8b0c9bb8c4bf0b44395aa900be11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_16db7b8ed8b52227487e16eca1dd678aae5d302aa8b8c3cb1660b72fd4326d48->leave($__internal_16db7b8ed8b52227487e16eca1dd678aae5d302aa8b8c3cb1660b72fd4326d48_prof);

        
        $__internal_803d0eeadf95062327d65f6c057613f0b6f8b0c9bb8c4bf0b44395aa900be11d->leave($__internal_803d0eeadf95062327d65f6c057613f0b6f8b0c9bb8c4bf0b44395aa900be11d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
