<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_301c6e09455b8f09533713885f0b1ff46f85777a4ebef71dbb96e81f12981155 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_5f7aba11c013fa9592bf7ed48c27915f669425b1a565c88a9e651adf815f9802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f7aba11c013fa9592bf7ed48c27915f669425b1a565c88a9e651adf815f9802->enter($__internal_5f7aba11c013fa9592bf7ed48c27915f669425b1a565c88a9e651adf815f9802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_f8709e896a51d02241038492dd16fbf0657eed3660a622efc42d13594fd2de95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8709e896a51d02241038492dd16fbf0657eed3660a622efc42d13594fd2de95->enter($__internal_f8709e896a51d02241038492dd16fbf0657eed3660a622efc42d13594fd2de95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f7aba11c013fa9592bf7ed48c27915f669425b1a565c88a9e651adf815f9802->leave($__internal_5f7aba11c013fa9592bf7ed48c27915f669425b1a565c88a9e651adf815f9802_prof);

        
        $__internal_f8709e896a51d02241038492dd16fbf0657eed3660a622efc42d13594fd2de95->leave($__internal_f8709e896a51d02241038492dd16fbf0657eed3660a622efc42d13594fd2de95_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a736dfbe02aa49108ab2287cc345e81f3ad16ba5994c49b703b5febee2b7e9ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a736dfbe02aa49108ab2287cc345e81f3ad16ba5994c49b703b5febee2b7e9ef->enter($__internal_a736dfbe02aa49108ab2287cc345e81f3ad16ba5994c49b703b5febee2b7e9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9e09cbb1783d71b615339fa640b1ce9cfc135f519c62357315dfcd8aa7d7d77f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e09cbb1783d71b615339fa640b1ce9cfc135f519c62357315dfcd8aa7d7d77f->enter($__internal_9e09cbb1783d71b615339fa640b1ce9cfc135f519c62357315dfcd8aa7d7d77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9e09cbb1783d71b615339fa640b1ce9cfc135f519c62357315dfcd8aa7d7d77f->leave($__internal_9e09cbb1783d71b615339fa640b1ce9cfc135f519c62357315dfcd8aa7d7d77f_prof);

        
        $__internal_a736dfbe02aa49108ab2287cc345e81f3ad16ba5994c49b703b5febee2b7e9ef->leave($__internal_a736dfbe02aa49108ab2287cc345e81f3ad16ba5994c49b703b5febee2b7e9ef_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c44111a681eabbb006b8ee36f9212b3cb24d6b6a1b41cb3fc39febb6525979a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44111a681eabbb006b8ee36f9212b3cb24d6b6a1b41cb3fc39febb6525979a2->enter($__internal_c44111a681eabbb006b8ee36f9212b3cb24d6b6a1b41cb3fc39febb6525979a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a374e42c8c6fc55bf470263222b2a1f15027439190124d75aacb3d1e9477fdfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a374e42c8c6fc55bf470263222b2a1f15027439190124d75aacb3d1e9477fdfd->enter($__internal_a374e42c8c6fc55bf470263222b2a1f15027439190124d75aacb3d1e9477fdfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a374e42c8c6fc55bf470263222b2a1f15027439190124d75aacb3d1e9477fdfd->leave($__internal_a374e42c8c6fc55bf470263222b2a1f15027439190124d75aacb3d1e9477fdfd_prof);

        
        $__internal_c44111a681eabbb006b8ee36f9212b3cb24d6b6a1b41cb3fc39febb6525979a2->leave($__internal_c44111a681eabbb006b8ee36f9212b3cb24d6b6a1b41cb3fc39febb6525979a2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
