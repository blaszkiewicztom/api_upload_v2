<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_0521621ad159c956b1cfdfe7fbbe6ef3a18a2935e9d7065d84a34e068f376dbc extends Twig_Template
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
        $__internal_d264c294718793802039b3d6edf70a3b4ebea6ac8a858b04ea0e0b45f99a8f8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d264c294718793802039b3d6edf70a3b4ebea6ac8a858b04ea0e0b45f99a8f8c->enter($__internal_d264c294718793802039b3d6edf70a3b4ebea6ac8a858b04ea0e0b45f99a8f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_57d3f3771823825196869438b94b50c5faaa0f65abdb9e0c6f4324313cca6d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57d3f3771823825196869438b94b50c5faaa0f65abdb9e0c6f4324313cca6d53->enter($__internal_57d3f3771823825196869438b94b50c5faaa0f65abdb9e0c6f4324313cca6d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_d264c294718793802039b3d6edf70a3b4ebea6ac8a858b04ea0e0b45f99a8f8c->leave($__internal_d264c294718793802039b3d6edf70a3b4ebea6ac8a858b04ea0e0b45f99a8f8c_prof);

        
        $__internal_57d3f3771823825196869438b94b50c5faaa0f65abdb9e0c6f4324313cca6d53->leave($__internal_57d3f3771823825196869438b94b50c5faaa0f65abdb9e0c6f4324313cca6d53_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
