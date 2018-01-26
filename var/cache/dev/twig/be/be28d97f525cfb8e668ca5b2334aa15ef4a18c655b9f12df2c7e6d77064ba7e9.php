<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6990c63a7b4cf0dc84459eeac3962c2b9ca31539c99958954c00b74ee8204583 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_323ebfd2e19c80f024052a8a6007633e85915b7765395bf76072957316b91d8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323ebfd2e19c80f024052a8a6007633e85915b7765395bf76072957316b91d8d->enter($__internal_323ebfd2e19c80f024052a8a6007633e85915b7765395bf76072957316b91d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0599ef45e33c46ed70ade49986d552de7e4ceed3b3c0369a7a269b7a3a6042a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0599ef45e33c46ed70ade49986d552de7e4ceed3b3c0369a7a269b7a3a6042a5->enter($__internal_0599ef45e33c46ed70ade49986d552de7e4ceed3b3c0369a7a269b7a3a6042a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_323ebfd2e19c80f024052a8a6007633e85915b7765395bf76072957316b91d8d->leave($__internal_323ebfd2e19c80f024052a8a6007633e85915b7765395bf76072957316b91d8d_prof);

        
        $__internal_0599ef45e33c46ed70ade49986d552de7e4ceed3b3c0369a7a269b7a3a6042a5->leave($__internal_0599ef45e33c46ed70ade49986d552de7e4ceed3b3c0369a7a269b7a3a6042a5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4d6fcb2453e9d20221aae3463ba06e08281b9140356eea727b9a2de9b8ce83c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d6fcb2453e9d20221aae3463ba06e08281b9140356eea727b9a2de9b8ce83c0->enter($__internal_4d6fcb2453e9d20221aae3463ba06e08281b9140356eea727b9a2de9b8ce83c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2940687f882f40957544a5d954797014302b1b27e4a2cf1b129f092745305a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2940687f882f40957544a5d954797014302b1b27e4a2cf1b129f092745305a59->enter($__internal_2940687f882f40957544a5d954797014302b1b27e4a2cf1b129f092745305a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2940687f882f40957544a5d954797014302b1b27e4a2cf1b129f092745305a59->leave($__internal_2940687f882f40957544a5d954797014302b1b27e4a2cf1b129f092745305a59_prof);

        
        $__internal_4d6fcb2453e9d20221aae3463ba06e08281b9140356eea727b9a2de9b8ce83c0->leave($__internal_4d6fcb2453e9d20221aae3463ba06e08281b9140356eea727b9a2de9b8ce83c0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c2e07e496eeed042c8d32d6964668100ef17712fdde6f0faba40137394142fdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2e07e496eeed042c8d32d6964668100ef17712fdde6f0faba40137394142fdc->enter($__internal_c2e07e496eeed042c8d32d6964668100ef17712fdde6f0faba40137394142fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d9f4c578aeab10cafaa1ccfca54f455adcf923dd03b626954b4a86c8d8486250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f4c578aeab10cafaa1ccfca54f455adcf923dd03b626954b4a86c8d8486250->enter($__internal_d9f4c578aeab10cafaa1ccfca54f455adcf923dd03b626954b4a86c8d8486250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d9f4c578aeab10cafaa1ccfca54f455adcf923dd03b626954b4a86c8d8486250->leave($__internal_d9f4c578aeab10cafaa1ccfca54f455adcf923dd03b626954b4a86c8d8486250_prof);

        
        $__internal_c2e07e496eeed042c8d32d6964668100ef17712fdde6f0faba40137394142fdc->leave($__internal_c2e07e496eeed042c8d32d6964668100ef17712fdde6f0faba40137394142fdc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc5c6980465622ec80c3dec7a2373a12f10f0a85a73a0d4a3531ad3d6350c3a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc5c6980465622ec80c3dec7a2373a12f10f0a85a73a0d4a3531ad3d6350c3a3->enter($__internal_cc5c6980465622ec80c3dec7a2373a12f10f0a85a73a0d4a3531ad3d6350c3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9e455eb853aa65dab8ca04a449a89b93889cffd649951f6616b2ddaeb72780d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e455eb853aa65dab8ca04a449a89b93889cffd649951f6616b2ddaeb72780d0->enter($__internal_9e455eb853aa65dab8ca04a449a89b93889cffd649951f6616b2ddaeb72780d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9e455eb853aa65dab8ca04a449a89b93889cffd649951f6616b2ddaeb72780d0->leave($__internal_9e455eb853aa65dab8ca04a449a89b93889cffd649951f6616b2ddaeb72780d0_prof);

        
        $__internal_cc5c6980465622ec80c3dec7a2373a12f10f0a85a73a0d4a3531ad3d6350c3a3->leave($__internal_cc5c6980465622ec80c3dec7a2373a12f10f0a85a73a0d4a3531ad3d6350c3a3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
