<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_7952e1c8594787413123aeb1575c7b2ebea4c402e0d23d05df41cb0374a6f2ea extends Twig_Template
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
        $__internal_9a733e5f7dba3eee8ea557a5e7e69ea7df0075c486c810c0c06d5054127bc8fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a733e5f7dba3eee8ea557a5e7e69ea7df0075c486c810c0c06d5054127bc8fc->enter($__internal_9a733e5f7dba3eee8ea557a5e7e69ea7df0075c486c810c0c06d5054127bc8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_bdf0414a107f48cc6d1ac1bbcd7e1ba8346f4a5344573eac4940aaa768ceb3ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdf0414a107f48cc6d1ac1bbcd7e1ba8346f4a5344573eac4940aaa768ceb3ea->enter($__internal_bdf0414a107f48cc6d1ac1bbcd7e1ba8346f4a5344573eac4940aaa768ceb3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_9a733e5f7dba3eee8ea557a5e7e69ea7df0075c486c810c0c06d5054127bc8fc->leave($__internal_9a733e5f7dba3eee8ea557a5e7e69ea7df0075c486c810c0c06d5054127bc8fc_prof);

        
        $__internal_bdf0414a107f48cc6d1ac1bbcd7e1ba8346f4a5344573eac4940aaa768ceb3ea->leave($__internal_bdf0414a107f48cc6d1ac1bbcd7e1ba8346f4a5344573eac4940aaa768ceb3ea_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
