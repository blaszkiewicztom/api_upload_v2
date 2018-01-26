<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_c5fb76e0492696c236c3090de4e55bb4f31e75a55209476bd085fd3d86e5cb60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_bb2dd70f0635c4d88de3ea9ec8b3a694fb68339d5c98f6e80e7a925f363cd488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb2dd70f0635c4d88de3ea9ec8b3a694fb68339d5c98f6e80e7a925f363cd488->enter($__internal_bb2dd70f0635c4d88de3ea9ec8b3a694fb68339d5c98f6e80e7a925f363cd488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_3e2efe3638cc359994ed581909081ece08be8782dd17b8088199ab82e9e788c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e2efe3638cc359994ed581909081ece08be8782dd17b8088199ab82e9e788c4->enter($__internal_3e2efe3638cc359994ed581909081ece08be8782dd17b8088199ab82e9e788c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb2dd70f0635c4d88de3ea9ec8b3a694fb68339d5c98f6e80e7a925f363cd488->leave($__internal_bb2dd70f0635c4d88de3ea9ec8b3a694fb68339d5c98f6e80e7a925f363cd488_prof);

        
        $__internal_3e2efe3638cc359994ed581909081ece08be8782dd17b8088199ab82e9e788c4->leave($__internal_3e2efe3638cc359994ed581909081ece08be8782dd17b8088199ab82e9e788c4_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f1b009e796082a5a28dc53947bf63375868fba1554c3edba9bb0126b0f75414d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1b009e796082a5a28dc53947bf63375868fba1554c3edba9bb0126b0f75414d->enter($__internal_f1b009e796082a5a28dc53947bf63375868fba1554c3edba9bb0126b0f75414d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_209fb616fbdf107051e3c7e910eca7f98cc08e7bade7aa1505977d0fbbcb9cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_209fb616fbdf107051e3c7e910eca7f98cc08e7bade7aa1505977d0fbbcb9cec->enter($__internal_209fb616fbdf107051e3c7e910eca7f98cc08e7bade7aa1505977d0fbbcb9cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_209fb616fbdf107051e3c7e910eca7f98cc08e7bade7aa1505977d0fbbcb9cec->leave($__internal_209fb616fbdf107051e3c7e910eca7f98cc08e7bade7aa1505977d0fbbcb9cec_prof);

        
        $__internal_f1b009e796082a5a28dc53947bf63375868fba1554c3edba9bb0126b0f75414d->leave($__internal_f1b009e796082a5a28dc53947bf63375868fba1554c3edba9bb0126b0f75414d_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_45c336110544d76b528bcbaa73deabb14d892a5bf547e78d1c3f1c15cf3025ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45c336110544d76b528bcbaa73deabb14d892a5bf547e78d1c3f1c15cf3025ad->enter($__internal_45c336110544d76b528bcbaa73deabb14d892a5bf547e78d1c3f1c15cf3025ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5ca09971526b89dac7e1ee1b042014817f84428eee7a9ad6628ce8ebf52c9051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ca09971526b89dac7e1ee1b042014817f84428eee7a9ad6628ce8ebf52c9051->enter($__internal_5ca09971526b89dac7e1ee1b042014817f84428eee7a9ad6628ce8ebf52c9051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_5ca09971526b89dac7e1ee1b042014817f84428eee7a9ad6628ce8ebf52c9051->leave($__internal_5ca09971526b89dac7e1ee1b042014817f84428eee7a9ad6628ce8ebf52c9051_prof);

        
        $__internal_45c336110544d76b528bcbaa73deabb14d892a5bf547e78d1c3f1c15cf3025ad->leave($__internal_45c336110544d76b528bcbaa73deabb14d892a5bf547e78d1c3f1c15cf3025ad_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
