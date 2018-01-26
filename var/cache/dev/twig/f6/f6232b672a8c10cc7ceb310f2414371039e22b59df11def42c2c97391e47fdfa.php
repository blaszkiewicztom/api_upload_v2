<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_51da208c03300646ff45b0cfdc4e6ce308abb15f00cdbb8c4c4dc6ebae1c0b12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dcb2d03a754ab03b753070daef29bdfe96ebbf2c7de30716045c71c722ee54f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dcb2d03a754ab03b753070daef29bdfe96ebbf2c7de30716045c71c722ee54f->enter($__internal_8dcb2d03a754ab03b753070daef29bdfe96ebbf2c7de30716045c71c722ee54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_13f83f739e6ce21921af9708afe175272a69c58d2d84ea6287e8976aeb5588e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f83f739e6ce21921af9708afe175272a69c58d2d84ea6287e8976aeb5588e1->enter($__internal_13f83f739e6ce21921af9708afe175272a69c58d2d84ea6287e8976aeb5588e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dcb2d03a754ab03b753070daef29bdfe96ebbf2c7de30716045c71c722ee54f->leave($__internal_8dcb2d03a754ab03b753070daef29bdfe96ebbf2c7de30716045c71c722ee54f_prof);

        
        $__internal_13f83f739e6ce21921af9708afe175272a69c58d2d84ea6287e8976aeb5588e1->leave($__internal_13f83f739e6ce21921af9708afe175272a69c58d2d84ea6287e8976aeb5588e1_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_4902c2b0edbb5ca2a7c53e0a5a7139a0c5e0daf0baf6f8aeb1c0ece54335dcaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4902c2b0edbb5ca2a7c53e0a5a7139a0c5e0daf0baf6f8aeb1c0ece54335dcaf->enter($__internal_4902c2b0edbb5ca2a7c53e0a5a7139a0c5e0daf0baf6f8aeb1c0ece54335dcaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_2dd0bdc12691b95fffcf240e074dd19de9725e5988b5aa2a461baa5da11a634e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd0bdc12691b95fffcf240e074dd19de9725e5988b5aa2a461baa5da11a634e->enter($__internal_2dd0bdc12691b95fffcf240e074dd19de9725e5988b5aa2a461baa5da11a634e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_2dd0bdc12691b95fffcf240e074dd19de9725e5988b5aa2a461baa5da11a634e->leave($__internal_2dd0bdc12691b95fffcf240e074dd19de9725e5988b5aa2a461baa5da11a634e_prof);

        
        $__internal_4902c2b0edbb5ca2a7c53e0a5a7139a0c5e0daf0baf6f8aeb1c0ece54335dcaf->leave($__internal_4902c2b0edbb5ca2a7c53e0a5a7139a0c5e0daf0baf6f8aeb1c0ece54335dcaf_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2e2142c3ee6c72882f84acc5ed318d277c237140b7fa325a3b1a6ec15be4a617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e2142c3ee6c72882f84acc5ed318d277c237140b7fa325a3b1a6ec15be4a617->enter($__internal_2e2142c3ee6c72882f84acc5ed318d277c237140b7fa325a3b1a6ec15be4a617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_45c477ac5c7746c6c5f25fe154ad319f43617eed94111ee076a46e26ca0c50ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c477ac5c7746c6c5f25fe154ad319f43617eed94111ee076a46e26ca0c50ac->enter($__internal_45c477ac5c7746c6c5f25fe154ad319f43617eed94111ee076a46e26ca0c50ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_45c477ac5c7746c6c5f25fe154ad319f43617eed94111ee076a46e26ca0c50ac->leave($__internal_45c477ac5c7746c6c5f25fe154ad319f43617eed94111ee076a46e26ca0c50ac_prof);

        
        $__internal_2e2142c3ee6c72882f84acc5ed318d277c237140b7fa325a3b1a6ec15be4a617->leave($__internal_2e2142c3ee6c72882f84acc5ed318d277c237140b7fa325a3b1a6ec15be4a617_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
