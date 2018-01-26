<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a18c89212dbcf611cf2ad1ecdef1fa1e33a407ac9c9f4d2cf46ae2e4659da33b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_b94b2742d7fa6a883a77e8c5a06bbbb0e01c80137de708ed67abbb55dd7cf3f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b94b2742d7fa6a883a77e8c5a06bbbb0e01c80137de708ed67abbb55dd7cf3f7->enter($__internal_b94b2742d7fa6a883a77e8c5a06bbbb0e01c80137de708ed67abbb55dd7cf3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_12a0497a21c3cb4d722d0f840e2262ff381146e39ddabf8f15c41b2c6f3b3f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a0497a21c3cb4d722d0f840e2262ff381146e39ddabf8f15c41b2c6f3b3f58->enter($__internal_12a0497a21c3cb4d722d0f840e2262ff381146e39ddabf8f15c41b2c6f3b3f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b94b2742d7fa6a883a77e8c5a06bbbb0e01c80137de708ed67abbb55dd7cf3f7->leave($__internal_b94b2742d7fa6a883a77e8c5a06bbbb0e01c80137de708ed67abbb55dd7cf3f7_prof);

        
        $__internal_12a0497a21c3cb4d722d0f840e2262ff381146e39ddabf8f15c41b2c6f3b3f58->leave($__internal_12a0497a21c3cb4d722d0f840e2262ff381146e39ddabf8f15c41b2c6f3b3f58_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8e0df319fbb51e5838cf0c554cf901062cf9e52af77fb6cfa474f806dbb7ed4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e0df319fbb51e5838cf0c554cf901062cf9e52af77fb6cfa474f806dbb7ed4c->enter($__internal_8e0df319fbb51e5838cf0c554cf901062cf9e52af77fb6cfa474f806dbb7ed4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f32e7f620d094d3435c75ac334e15f057b64c5f5a53d497cc7a6f0875ce43eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32e7f620d094d3435c75ac334e15f057b64c5f5a53d497cc7a6f0875ce43eec->enter($__internal_f32e7f620d094d3435c75ac334e15f057b64c5f5a53d497cc7a6f0875ce43eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_f32e7f620d094d3435c75ac334e15f057b64c5f5a53d497cc7a6f0875ce43eec->leave($__internal_f32e7f620d094d3435c75ac334e15f057b64c5f5a53d497cc7a6f0875ce43eec_prof);

        
        $__internal_8e0df319fbb51e5838cf0c554cf901062cf9e52af77fb6cfa474f806dbb7ed4c->leave($__internal_8e0df319fbb51e5838cf0c554cf901062cf9e52af77fb6cfa474f806dbb7ed4c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
