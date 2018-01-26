<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_57d814ae7a5c5f64d42260e83a82f960845cb8c9bc3160451feab8838296c572 extends Twig_Template
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
        $__internal_feeb3a643b46e12d84d0a2e03ad8b107b8c51dad62c71cc00af8a7e210a5b2ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feeb3a643b46e12d84d0a2e03ad8b107b8c51dad62c71cc00af8a7e210a5b2ea->enter($__internal_feeb3a643b46e12d84d0a2e03ad8b107b8c51dad62c71cc00af8a7e210a5b2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_fe9d48c5f1677daade4111755cbb40f61a49083f72613ff897e0b2655f7d6254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe9d48c5f1677daade4111755cbb40f61a49083f72613ff897e0b2655f7d6254->enter($__internal_fe9d48c5f1677daade4111755cbb40f61a49083f72613ff897e0b2655f7d6254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_feeb3a643b46e12d84d0a2e03ad8b107b8c51dad62c71cc00af8a7e210a5b2ea->leave($__internal_feeb3a643b46e12d84d0a2e03ad8b107b8c51dad62c71cc00af8a7e210a5b2ea_prof);

        
        $__internal_fe9d48c5f1677daade4111755cbb40f61a49083f72613ff897e0b2655f7d6254->leave($__internal_fe9d48c5f1677daade4111755cbb40f61a49083f72613ff897e0b2655f7d6254_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
