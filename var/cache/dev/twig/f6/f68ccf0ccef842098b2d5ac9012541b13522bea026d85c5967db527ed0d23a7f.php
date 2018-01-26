<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ca31f3e65daa037a908467cb48d4b63cee836fb212e1a8e5fc09140e39bdfa33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_651dff3098c86601824864737d04eb708305fc8096195dea3c30dacd99714508 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_651dff3098c86601824864737d04eb708305fc8096195dea3c30dacd99714508->enter($__internal_651dff3098c86601824864737d04eb708305fc8096195dea3c30dacd99714508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_8a33be593ca05a5007f225521529db4c263380ba4bdf8ba00a29e25e800bc51e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a33be593ca05a5007f225521529db4c263380ba4bdf8ba00a29e25e800bc51e->enter($__internal_8a33be593ca05a5007f225521529db4c263380ba4bdf8ba00a29e25e800bc51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_651dff3098c86601824864737d04eb708305fc8096195dea3c30dacd99714508->leave($__internal_651dff3098c86601824864737d04eb708305fc8096195dea3c30dacd99714508_prof);

        
        $__internal_8a33be593ca05a5007f225521529db4c263380ba4bdf8ba00a29e25e800bc51e->leave($__internal_8a33be593ca05a5007f225521529db4c263380ba4bdf8ba00a29e25e800bc51e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5ad8ad4dddd0e14a9c93c85ad67d8f3048bf23fb6ffd0e93cb5d0dfdb21aeb9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ad8ad4dddd0e14a9c93c85ad67d8f3048bf23fb6ffd0e93cb5d0dfdb21aeb9a->enter($__internal_5ad8ad4dddd0e14a9c93c85ad67d8f3048bf23fb6ffd0e93cb5d0dfdb21aeb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_66e2f1f2e51037e1954c1e37d4bf246633d7def9dabdbdc2781d4b7e4057d01c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e2f1f2e51037e1954c1e37d4bf246633d7def9dabdbdc2781d4b7e4057d01c->enter($__internal_66e2f1f2e51037e1954c1e37d4bf246633d7def9dabdbdc2781d4b7e4057d01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_66e2f1f2e51037e1954c1e37d4bf246633d7def9dabdbdc2781d4b7e4057d01c->leave($__internal_66e2f1f2e51037e1954c1e37d4bf246633d7def9dabdbdc2781d4b7e4057d01c_prof);

        
        $__internal_5ad8ad4dddd0e14a9c93c85ad67d8f3048bf23fb6ffd0e93cb5d0dfdb21aeb9a->leave($__internal_5ad8ad4dddd0e14a9c93c85ad67d8f3048bf23fb6ffd0e93cb5d0dfdb21aeb9a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f034ddcee032417e69a0e97ad6f6f0b30110e36cedff95e66f003ef5d266bee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f034ddcee032417e69a0e97ad6f6f0b30110e36cedff95e66f003ef5d266bee2->enter($__internal_f034ddcee032417e69a0e97ad6f6f0b30110e36cedff95e66f003ef5d266bee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_08c40086a76cb569bc82872bc4cc4682156eeeee1374ff7b3d59eab253e91d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c40086a76cb569bc82872bc4cc4682156eeeee1374ff7b3d59eab253e91d6a->enter($__internal_08c40086a76cb569bc82872bc4cc4682156eeeee1374ff7b3d59eab253e91d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_08c40086a76cb569bc82872bc4cc4682156eeeee1374ff7b3d59eab253e91d6a->leave($__internal_08c40086a76cb569bc82872bc4cc4682156eeeee1374ff7b3d59eab253e91d6a_prof);

        
        $__internal_f034ddcee032417e69a0e97ad6f6f0b30110e36cedff95e66f003ef5d266bee2->leave($__internal_f034ddcee032417e69a0e97ad6f6f0b30110e36cedff95e66f003ef5d266bee2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8a5197b20547d68d98cf7a17fc1cd190faae91cdfd9651c0a79e4503a795e89d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a5197b20547d68d98cf7a17fc1cd190faae91cdfd9651c0a79e4503a795e89d->enter($__internal_8a5197b20547d68d98cf7a17fc1cd190faae91cdfd9651c0a79e4503a795e89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_33c64af26613ad783c58ab920ceb6826261b671f5e4ec0aa44ba56817c3fdbce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c64af26613ad783c58ab920ceb6826261b671f5e4ec0aa44ba56817c3fdbce->enter($__internal_33c64af26613ad783c58ab920ceb6826261b671f5e4ec0aa44ba56817c3fdbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_33c64af26613ad783c58ab920ceb6826261b671f5e4ec0aa44ba56817c3fdbce->leave($__internal_33c64af26613ad783c58ab920ceb6826261b671f5e4ec0aa44ba56817c3fdbce_prof);

        
        $__internal_8a5197b20547d68d98cf7a17fc1cd190faae91cdfd9651c0a79e4503a795e89d->leave($__internal_8a5197b20547d68d98cf7a17fc1cd190faae91cdfd9651c0a79e4503a795e89d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
