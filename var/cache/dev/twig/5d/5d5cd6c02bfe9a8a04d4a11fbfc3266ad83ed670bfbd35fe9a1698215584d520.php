<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_667ce21214aecb0a4c20bb4efaa0b352a631e0bbf06d7a253b8bcdf6b98b7714 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_01173197d5a6735bcdcdc6f694426824cf2e46855dba32ef05bcb9e64265d494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01173197d5a6735bcdcdc6f694426824cf2e46855dba32ef05bcb9e64265d494->enter($__internal_01173197d5a6735bcdcdc6f694426824cf2e46855dba32ef05bcb9e64265d494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_cd0ab8f8e8efb116160ee9b142b8012ef6bbea410266a5e81a3c69c957b7417e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0ab8f8e8efb116160ee9b142b8012ef6bbea410266a5e81a3c69c957b7417e->enter($__internal_cd0ab8f8e8efb116160ee9b142b8012ef6bbea410266a5e81a3c69c957b7417e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01173197d5a6735bcdcdc6f694426824cf2e46855dba32ef05bcb9e64265d494->leave($__internal_01173197d5a6735bcdcdc6f694426824cf2e46855dba32ef05bcb9e64265d494_prof);

        
        $__internal_cd0ab8f8e8efb116160ee9b142b8012ef6bbea410266a5e81a3c69c957b7417e->leave($__internal_cd0ab8f8e8efb116160ee9b142b8012ef6bbea410266a5e81a3c69c957b7417e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b95b729b9184503e236719eccc90474fd562781615720ee994e64be25d698d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b95b729b9184503e236719eccc90474fd562781615720ee994e64be25d698d8->enter($__internal_4b95b729b9184503e236719eccc90474fd562781615720ee994e64be25d698d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_95237811b5f849a075f1f05695337ddb5997efdd03ed28153fb6e128329b8811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95237811b5f849a075f1f05695337ddb5997efdd03ed28153fb6e128329b8811->enter($__internal_95237811b5f849a075f1f05695337ddb5997efdd03ed28153fb6e128329b8811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_95237811b5f849a075f1f05695337ddb5997efdd03ed28153fb6e128329b8811->leave($__internal_95237811b5f849a075f1f05695337ddb5997efdd03ed28153fb6e128329b8811_prof);

        
        $__internal_4b95b729b9184503e236719eccc90474fd562781615720ee994e64be25d698d8->leave($__internal_4b95b729b9184503e236719eccc90474fd562781615720ee994e64be25d698d8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_22113187c53867da4261fcf0888410909b650d26a25ce6034376063967870120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22113187c53867da4261fcf0888410909b650d26a25ce6034376063967870120->enter($__internal_22113187c53867da4261fcf0888410909b650d26a25ce6034376063967870120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_243d7f8a75b90bed26cb78ec610858cf01703a1103daf96adeeb3c2f533b7922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_243d7f8a75b90bed26cb78ec610858cf01703a1103daf96adeeb3c2f533b7922->enter($__internal_243d7f8a75b90bed26cb78ec610858cf01703a1103daf96adeeb3c2f533b7922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_243d7f8a75b90bed26cb78ec610858cf01703a1103daf96adeeb3c2f533b7922->leave($__internal_243d7f8a75b90bed26cb78ec610858cf01703a1103daf96adeeb3c2f533b7922_prof);

        
        $__internal_22113187c53867da4261fcf0888410909b650d26a25ce6034376063967870120->leave($__internal_22113187c53867da4261fcf0888410909b650d26a25ce6034376063967870120_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
