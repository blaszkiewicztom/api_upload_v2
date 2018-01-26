<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_9b7962b2c63c7f8d6fefcc1127ad11d4301cac7c7bd8a354870a69a080bb2cc1 extends Twig_Template
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
        $__internal_9a2a4510fab6a7fb603b5f7c6d033014ac6a28d1e40efe335b00a2efeedd5fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a2a4510fab6a7fb603b5f7c6d033014ac6a28d1e40efe335b00a2efeedd5fac->enter($__internal_9a2a4510fab6a7fb603b5f7c6d033014ac6a28d1e40efe335b00a2efeedd5fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_de8ff4cececbcad338ba6332b80528efeb80663c2fc3f4d3f40e0048acb4a4f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de8ff4cececbcad338ba6332b80528efeb80663c2fc3f4d3f40e0048acb4a4f8->enter($__internal_de8ff4cececbcad338ba6332b80528efeb80663c2fc3f4d3f40e0048acb4a4f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_9a2a4510fab6a7fb603b5f7c6d033014ac6a28d1e40efe335b00a2efeedd5fac->leave($__internal_9a2a4510fab6a7fb603b5f7c6d033014ac6a28d1e40efe335b00a2efeedd5fac_prof);

        
        $__internal_de8ff4cececbcad338ba6332b80528efeb80663c2fc3f4d3f40e0048acb4a4f8->leave($__internal_de8ff4cececbcad338ba6332b80528efeb80663c2fc3f4d3f40e0048acb4a4f8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
