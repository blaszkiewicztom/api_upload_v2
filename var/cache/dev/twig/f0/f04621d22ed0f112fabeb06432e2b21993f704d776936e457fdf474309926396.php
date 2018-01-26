<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_62544e74b063199095b3bffe78bc54a809e2f5778a200caac989bf2395a8ac01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f49b57871be6acdb634c9728536ed42d28697df3389a9b20339aa7e06ae0d06d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f49b57871be6acdb634c9728536ed42d28697df3389a9b20339aa7e06ae0d06d->enter($__internal_f49b57871be6acdb634c9728536ed42d28697df3389a9b20339aa7e06ae0d06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_5fc5463f51a76785676da39382e24bcba168e316ef5f0ff352a058e455a9ad1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc5463f51a76785676da39382e24bcba168e316ef5f0ff352a058e455a9ad1d->enter($__internal_5fc5463f51a76785676da39382e24bcba168e316ef5f0ff352a058e455a9ad1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f49b57871be6acdb634c9728536ed42d28697df3389a9b20339aa7e06ae0d06d->leave($__internal_f49b57871be6acdb634c9728536ed42d28697df3389a9b20339aa7e06ae0d06d_prof);

        
        $__internal_5fc5463f51a76785676da39382e24bcba168e316ef5f0ff352a058e455a9ad1d->leave($__internal_5fc5463f51a76785676da39382e24bcba168e316ef5f0ff352a058e455a9ad1d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dd97b99aba42ad6d1aa8b493d9cf1c9b20a4439baec539ba4d3e9f39d45fef4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd97b99aba42ad6d1aa8b493d9cf1c9b20a4439baec539ba4d3e9f39d45fef4c->enter($__internal_dd97b99aba42ad6d1aa8b493d9cf1c9b20a4439baec539ba4d3e9f39d45fef4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_125738f7857cbc93d6b046db0c69bf7df38da195cb56406ce71718873ccfa5ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_125738f7857cbc93d6b046db0c69bf7df38da195cb56406ce71718873ccfa5ee->enter($__internal_125738f7857cbc93d6b046db0c69bf7df38da195cb56406ce71718873ccfa5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_125738f7857cbc93d6b046db0c69bf7df38da195cb56406ce71718873ccfa5ee->leave($__internal_125738f7857cbc93d6b046db0c69bf7df38da195cb56406ce71718873ccfa5ee_prof);

        
        $__internal_dd97b99aba42ad6d1aa8b493d9cf1c9b20a4439baec539ba4d3e9f39d45fef4c->leave($__internal_dd97b99aba42ad6d1aa8b493d9cf1c9b20a4439baec539ba4d3e9f39d45fef4c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
