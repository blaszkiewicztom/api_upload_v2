<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_586cf34fc332012e2a4bca86550a9617b8934e3edbe3dca00301ed4acef8d50d extends Twig_Template
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
        $__internal_0a966a1b197306de6d5ea0b0dc9bf3b29578b71a1acf13dbab7e714f950c95be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a966a1b197306de6d5ea0b0dc9bf3b29578b71a1acf13dbab7e714f950c95be->enter($__internal_0a966a1b197306de6d5ea0b0dc9bf3b29578b71a1acf13dbab7e714f950c95be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_71a54ddc478b7ec6c6d875f9aa780cf26f5e3fcf8f2168a4d3a3c2d2adfedafd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a54ddc478b7ec6c6d875f9aa780cf26f5e3fcf8f2168a4d3a3c2d2adfedafd->enter($__internal_71a54ddc478b7ec6c6d875f9aa780cf26f5e3fcf8f2168a4d3a3c2d2adfedafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_0a966a1b197306de6d5ea0b0dc9bf3b29578b71a1acf13dbab7e714f950c95be->leave($__internal_0a966a1b197306de6d5ea0b0dc9bf3b29578b71a1acf13dbab7e714f950c95be_prof);

        
        $__internal_71a54ddc478b7ec6c6d875f9aa780cf26f5e3fcf8f2168a4d3a3c2d2adfedafd->leave($__internal_71a54ddc478b7ec6c6d875f9aa780cf26f5e3fcf8f2168a4d3a3c2d2adfedafd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
