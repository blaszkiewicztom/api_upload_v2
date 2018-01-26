<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_4c474b72ca47b4120060b3fc7d154497b67e3bc1faeb825e667a9522513a7fb3 extends Twig_Template
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
        $__internal_eec523ec4e59f799dc5392e39ef3199f7b26a09748c8fd67b890895f694d9c89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec523ec4e59f799dc5392e39ef3199f7b26a09748c8fd67b890895f694d9c89->enter($__internal_eec523ec4e59f799dc5392e39ef3199f7b26a09748c8fd67b890895f694d9c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_461b772abd3d97dfeb8dbb4fccf78632ebc35144d859e000c95326741f47dc49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_461b772abd3d97dfeb8dbb4fccf78632ebc35144d859e000c95326741f47dc49->enter($__internal_461b772abd3d97dfeb8dbb4fccf78632ebc35144d859e000c95326741f47dc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_eec523ec4e59f799dc5392e39ef3199f7b26a09748c8fd67b890895f694d9c89->leave($__internal_eec523ec4e59f799dc5392e39ef3199f7b26a09748c8fd67b890895f694d9c89_prof);

        
        $__internal_461b772abd3d97dfeb8dbb4fccf78632ebc35144d859e000c95326741f47dc49->leave($__internal_461b772abd3d97dfeb8dbb4fccf78632ebc35144d859e000c95326741f47dc49_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
