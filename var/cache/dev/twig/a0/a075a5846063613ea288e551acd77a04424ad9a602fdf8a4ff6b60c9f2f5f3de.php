<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_b696253cb9a22c1afd9843290fb11c4053b98a83a3c0fb8f48a7022fbefeb2f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e6789846eb519d921fc11c8981e8e980e405f7bdd9d47982280b426909b26d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e6789846eb519d921fc11c8981e8e980e405f7bdd9d47982280b426909b26d1->enter($__internal_2e6789846eb519d921fc11c8981e8e980e405f7bdd9d47982280b426909b26d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_f2b271a2ab4b556517fdb1a53e056a9f4e9ac0dc195388ffaf94cb2a5688a36b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2b271a2ab4b556517fdb1a53e056a9f4e9ac0dc195388ffaf94cb2a5688a36b->enter($__internal_f2b271a2ab4b556517fdb1a53e056a9f4e9ac0dc195388ffaf94cb2a5688a36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e6789846eb519d921fc11c8981e8e980e405f7bdd9d47982280b426909b26d1->leave($__internal_2e6789846eb519d921fc11c8981e8e980e405f7bdd9d47982280b426909b26d1_prof);

        
        $__internal_f2b271a2ab4b556517fdb1a53e056a9f4e9ac0dc195388ffaf94cb2a5688a36b->leave($__internal_f2b271a2ab4b556517fdb1a53e056a9f4e9ac0dc195388ffaf94cb2a5688a36b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_12690b276f9d197a29b246f2ea19768045881f1fe3ac444bcbe76876254d03fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12690b276f9d197a29b246f2ea19768045881f1fe3ac444bcbe76876254d03fa->enter($__internal_12690b276f9d197a29b246f2ea19768045881f1fe3ac444bcbe76876254d03fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4b69e9c2354d7f2b17f529cded6a74d72be496f61e862550c4f2494becc35999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b69e9c2354d7f2b17f529cded6a74d72be496f61e862550c4f2494becc35999->enter($__internal_4b69e9c2354d7f2b17f529cded6a74d72be496f61e862550c4f2494becc35999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4b69e9c2354d7f2b17f529cded6a74d72be496f61e862550c4f2494becc35999->leave($__internal_4b69e9c2354d7f2b17f529cded6a74d72be496f61e862550c4f2494becc35999_prof);

        
        $__internal_12690b276f9d197a29b246f2ea19768045881f1fe3ac444bcbe76876254d03fa->leave($__internal_12690b276f9d197a29b246f2ea19768045881f1fe3ac444bcbe76876254d03fa_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca9b2394089eec1aa913d7e40cda5d6235afe92d14b61b97e123175034a3e518 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca9b2394089eec1aa913d7e40cda5d6235afe92d14b61b97e123175034a3e518->enter($__internal_ca9b2394089eec1aa913d7e40cda5d6235afe92d14b61b97e123175034a3e518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0a39432c7d3ccf1ae78527108f8debf50564f375cefb3b8e901307b340a68c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a39432c7d3ccf1ae78527108f8debf50564f375cefb3b8e901307b340a68c2->enter($__internal_d0a39432c7d3ccf1ae78527108f8debf50564f375cefb3b8e901307b340a68c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_d0a39432c7d3ccf1ae78527108f8debf50564f375cefb3b8e901307b340a68c2->leave($__internal_d0a39432c7d3ccf1ae78527108f8debf50564f375cefb3b8e901307b340a68c2_prof);

        
        $__internal_ca9b2394089eec1aa913d7e40cda5d6235afe92d14b61b97e123175034a3e518->leave($__internal_ca9b2394089eec1aa913d7e40cda5d6235afe92d14b61b97e123175034a3e518_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
