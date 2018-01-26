<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_7c4f93a00f0e7a1b6158786040d366a6c8f9815ba6a968cbc66febe06ca345aa extends Twig_Template
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
        $__internal_2792517b594c811321249f5cd8ccd4dbcff7012594b52f3aa63ecf891455b490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2792517b594c811321249f5cd8ccd4dbcff7012594b52f3aa63ecf891455b490->enter($__internal_2792517b594c811321249f5cd8ccd4dbcff7012594b52f3aa63ecf891455b490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_96b7f4ce8a4785bad4b241fee1404501a4d6408444f77cd52962a3b61189a782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96b7f4ce8a4785bad4b241fee1404501a4d6408444f77cd52962a3b61189a782->enter($__internal_96b7f4ce8a4785bad4b241fee1404501a4d6408444f77cd52962a3b61189a782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_2792517b594c811321249f5cd8ccd4dbcff7012594b52f3aa63ecf891455b490->leave($__internal_2792517b594c811321249f5cd8ccd4dbcff7012594b52f3aa63ecf891455b490_prof);

        
        $__internal_96b7f4ce8a4785bad4b241fee1404501a4d6408444f77cd52962a3b61189a782->leave($__internal_96b7f4ce8a4785bad4b241fee1404501a4d6408444f77cd52962a3b61189a782_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
