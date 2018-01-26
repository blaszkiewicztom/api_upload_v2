<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c64e635d3890110a4884487d09dd512ba47a508bdb5a0010a62aa59874bd146a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ceb33f8411a39c2ebc4c7aa54f6c55212e710f0237346a6e7d6dddbf0a97b3a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb33f8411a39c2ebc4c7aa54f6c55212e710f0237346a6e7d6dddbf0a97b3a6->enter($__internal_ceb33f8411a39c2ebc4c7aa54f6c55212e710f0237346a6e7d6dddbf0a97b3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_09e75dd2241abdb039238ee38e933fbcd0202e4ba0b91fe9c95d962d9190df80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e75dd2241abdb039238ee38e933fbcd0202e4ba0b91fe9c95d962d9190df80->enter($__internal_09e75dd2241abdb039238ee38e933fbcd0202e4ba0b91fe9c95d962d9190df80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ceb33f8411a39c2ebc4c7aa54f6c55212e710f0237346a6e7d6dddbf0a97b3a6->leave($__internal_ceb33f8411a39c2ebc4c7aa54f6c55212e710f0237346a6e7d6dddbf0a97b3a6_prof);

        
        $__internal_09e75dd2241abdb039238ee38e933fbcd0202e4ba0b91fe9c95d962d9190df80->leave($__internal_09e75dd2241abdb039238ee38e933fbcd0202e4ba0b91fe9c95d962d9190df80_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e7b1f513482a4a99395a81b4aa25dff4c3d09ce1ae7eee8d56305fb0909653c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7b1f513482a4a99395a81b4aa25dff4c3d09ce1ae7eee8d56305fb0909653c4->enter($__internal_e7b1f513482a4a99395a81b4aa25dff4c3d09ce1ae7eee8d56305fb0909653c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c28f77fc0eb7a708125dc09ed052172e9af28ceed4c7f51df939d6c986773e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28f77fc0eb7a708125dc09ed052172e9af28ceed4c7f51df939d6c986773e09->enter($__internal_c28f77fc0eb7a708125dc09ed052172e9af28ceed4c7f51df939d6c986773e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c28f77fc0eb7a708125dc09ed052172e9af28ceed4c7f51df939d6c986773e09->leave($__internal_c28f77fc0eb7a708125dc09ed052172e9af28ceed4c7f51df939d6c986773e09_prof);

        
        $__internal_e7b1f513482a4a99395a81b4aa25dff4c3d09ce1ae7eee8d56305fb0909653c4->leave($__internal_e7b1f513482a4a99395a81b4aa25dff4c3d09ce1ae7eee8d56305fb0909653c4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
