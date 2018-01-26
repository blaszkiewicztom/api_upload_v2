<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_c16a9cace8f7c2f4a7bd472d4ba468d259a8a1272ab9358f846b137e117e25d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cedb06c8da23fb6ac101e70a1a51ddadbf2a0e4f31367ac88a45a9afefbd6081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cedb06c8da23fb6ac101e70a1a51ddadbf2a0e4f31367ac88a45a9afefbd6081->enter($__internal_cedb06c8da23fb6ac101e70a1a51ddadbf2a0e4f31367ac88a45a9afefbd6081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_66469ce2f5b997b86a43d1b6b4829a0f1392dc5451ab2e6fdbfe06bb81f66a0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66469ce2f5b997b86a43d1b6b4829a0f1392dc5451ab2e6fdbfe06bb81f66a0e->enter($__internal_66469ce2f5b997b86a43d1b6b4829a0f1392dc5451ab2e6fdbfe06bb81f66a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cedb06c8da23fb6ac101e70a1a51ddadbf2a0e4f31367ac88a45a9afefbd6081->leave($__internal_cedb06c8da23fb6ac101e70a1a51ddadbf2a0e4f31367ac88a45a9afefbd6081_prof);

        
        $__internal_66469ce2f5b997b86a43d1b6b4829a0f1392dc5451ab2e6fdbfe06bb81f66a0e->leave($__internal_66469ce2f5b997b86a43d1b6b4829a0f1392dc5451ab2e6fdbfe06bb81f66a0e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_148b5b6a4ad4e85aca412345b3f7d2489a9ba0f0cbfc37507e37264f95d1a990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_148b5b6a4ad4e85aca412345b3f7d2489a9ba0f0cbfc37507e37264f95d1a990->enter($__internal_148b5b6a4ad4e85aca412345b3f7d2489a9ba0f0cbfc37507e37264f95d1a990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_265b0030e718423cd95bedeeda09ef775643de29fa15718528c1686225fd8235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_265b0030e718423cd95bedeeda09ef775643de29fa15718528c1686225fd8235->enter($__internal_265b0030e718423cd95bedeeda09ef775643de29fa15718528c1686225fd8235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_265b0030e718423cd95bedeeda09ef775643de29fa15718528c1686225fd8235->leave($__internal_265b0030e718423cd95bedeeda09ef775643de29fa15718528c1686225fd8235_prof);

        
        $__internal_148b5b6a4ad4e85aca412345b3f7d2489a9ba0f0cbfc37507e37264f95d1a990->leave($__internal_148b5b6a4ad4e85aca412345b3f7d2489a9ba0f0cbfc37507e37264f95d1a990_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_78e3bff43bea6a289b7e1793813d7a329d50fbe394cddfd2bae47d5c3b1cfda3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78e3bff43bea6a289b7e1793813d7a329d50fbe394cddfd2bae47d5c3b1cfda3->enter($__internal_78e3bff43bea6a289b7e1793813d7a329d50fbe394cddfd2bae47d5c3b1cfda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d1e17a184b773e664c8765ebfcfd15270dc24d04ce9b485169f55ca83255efce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e17a184b773e664c8765ebfcfd15270dc24d04ce9b485169f55ca83255efce->enter($__internal_d1e17a184b773e664c8765ebfcfd15270dc24d04ce9b485169f55ca83255efce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d1e17a184b773e664c8765ebfcfd15270dc24d04ce9b485169f55ca83255efce->leave($__internal_d1e17a184b773e664c8765ebfcfd15270dc24d04ce9b485169f55ca83255efce_prof);

        
        $__internal_78e3bff43bea6a289b7e1793813d7a329d50fbe394cddfd2bae47d5c3b1cfda3->leave($__internal_78e3bff43bea6a289b7e1793813d7a329d50fbe394cddfd2bae47d5c3b1cfda3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_76a3b7acbebde579382a8c57b5742facddebda0f11d54f88ececc1e537158cb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76a3b7acbebde579382a8c57b5742facddebda0f11d54f88ececc1e537158cb9->enter($__internal_76a3b7acbebde579382a8c57b5742facddebda0f11d54f88ececc1e537158cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b158095df12b35c51807de086593731cd35c2a515e53f41eb50a6837ef2febf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b158095df12b35c51807de086593731cd35c2a515e53f41eb50a6837ef2febf2->enter($__internal_b158095df12b35c51807de086593731cd35c2a515e53f41eb50a6837ef2febf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b158095df12b35c51807de086593731cd35c2a515e53f41eb50a6837ef2febf2->leave($__internal_b158095df12b35c51807de086593731cd35c2a515e53f41eb50a6837ef2febf2_prof);

        
        $__internal_76a3b7acbebde579382a8c57b5742facddebda0f11d54f88ececc1e537158cb9->leave($__internal_76a3b7acbebde579382a8c57b5742facddebda0f11d54f88ececc1e537158cb9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
