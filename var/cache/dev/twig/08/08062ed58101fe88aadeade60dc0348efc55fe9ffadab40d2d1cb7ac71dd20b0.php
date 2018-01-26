<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_592f2ef7f7e0dd1505a55168843a4b89dd149f8b495ff9c0bfb90f80d041b018 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbe8fdb19001d173e6a292faf9983f2d7449f4967c9e0e4aebf9ae336f5449b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe8fdb19001d173e6a292faf9983f2d7449f4967c9e0e4aebf9ae336f5449b2->enter($__internal_cbe8fdb19001d173e6a292faf9983f2d7449f4967c9e0e4aebf9ae336f5449b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_6919a0e81c3ef642293ba4bcd3fe7147263a9c5f63a45cf40a5da6714864b203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6919a0e81c3ef642293ba4bcd3fe7147263a9c5f63a45cf40a5da6714864b203->enter($__internal_6919a0e81c3ef642293ba4bcd3fe7147263a9c5f63a45cf40a5da6714864b203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbe8fdb19001d173e6a292faf9983f2d7449f4967c9e0e4aebf9ae336f5449b2->leave($__internal_cbe8fdb19001d173e6a292faf9983f2d7449f4967c9e0e4aebf9ae336f5449b2_prof);

        
        $__internal_6919a0e81c3ef642293ba4bcd3fe7147263a9c5f63a45cf40a5da6714864b203->leave($__internal_6919a0e81c3ef642293ba4bcd3fe7147263a9c5f63a45cf40a5da6714864b203_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_11befa7b618bf421bfd7162e8abaa9f5d7ef503713acff77d3199b35e1a0daa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11befa7b618bf421bfd7162e8abaa9f5d7ef503713acff77d3199b35e1a0daa1->enter($__internal_11befa7b618bf421bfd7162e8abaa9f5d7ef503713acff77d3199b35e1a0daa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_51d38e9ec2494f4b74ce3edf640d7f01690e04aa514e48f613e935cb891add50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d38e9ec2494f4b74ce3edf640d7f01690e04aa514e48f613e935cb891add50->enter($__internal_51d38e9ec2494f4b74ce3edf640d7f01690e04aa514e48f613e935cb891add50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_51d38e9ec2494f4b74ce3edf640d7f01690e04aa514e48f613e935cb891add50->leave($__internal_51d38e9ec2494f4b74ce3edf640d7f01690e04aa514e48f613e935cb891add50_prof);

        
        $__internal_11befa7b618bf421bfd7162e8abaa9f5d7ef503713acff77d3199b35e1a0daa1->leave($__internal_11befa7b618bf421bfd7162e8abaa9f5d7ef503713acff77d3199b35e1a0daa1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8026025d0800a1dce3bb76fdff2d4d57d555d742ea13fdab26c7360e95fc91a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8026025d0800a1dce3bb76fdff2d4d57d555d742ea13fdab26c7360e95fc91a8->enter($__internal_8026025d0800a1dce3bb76fdff2d4d57d555d742ea13fdab26c7360e95fc91a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_376fc79d6331a133b0bd06c1eef13911e41c915ef2b1c3aebc8e850568f1f194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_376fc79d6331a133b0bd06c1eef13911e41c915ef2b1c3aebc8e850568f1f194->enter($__internal_376fc79d6331a133b0bd06c1eef13911e41c915ef2b1c3aebc8e850568f1f194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_376fc79d6331a133b0bd06c1eef13911e41c915ef2b1c3aebc8e850568f1f194->leave($__internal_376fc79d6331a133b0bd06c1eef13911e41c915ef2b1c3aebc8e850568f1f194_prof);

        
        $__internal_8026025d0800a1dce3bb76fdff2d4d57d555d742ea13fdab26c7360e95fc91a8->leave($__internal_8026025d0800a1dce3bb76fdff2d4d57d555d742ea13fdab26c7360e95fc91a8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
