<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_08cee3b191b7e1ea277672ff92571ee455a6e58ec5712271098bcb5db1126b03 extends Twig_Template
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
        $__internal_0dbbfbc83a3761fcb27b4b65f75aec51e248d8320b3e4adeda523cf41c4546d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dbbfbc83a3761fcb27b4b65f75aec51e248d8320b3e4adeda523cf41c4546d1->enter($__internal_0dbbfbc83a3761fcb27b4b65f75aec51e248d8320b3e4adeda523cf41c4546d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_ca44fd701ba176c455290ea3632a596159187e18911324cb98ef318a1b6b8241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca44fd701ba176c455290ea3632a596159187e18911324cb98ef318a1b6b8241->enter($__internal_ca44fd701ba176c455290ea3632a596159187e18911324cb98ef318a1b6b8241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0dbbfbc83a3761fcb27b4b65f75aec51e248d8320b3e4adeda523cf41c4546d1->leave($__internal_0dbbfbc83a3761fcb27b4b65f75aec51e248d8320b3e4adeda523cf41c4546d1_prof);

        
        $__internal_ca44fd701ba176c455290ea3632a596159187e18911324cb98ef318a1b6b8241->leave($__internal_ca44fd701ba176c455290ea3632a596159187e18911324cb98ef318a1b6b8241_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd19aaf2bd3dc4b596e7ea320840d145cd3b131d7f5bca094fae9ed6f7e87f50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd19aaf2bd3dc4b596e7ea320840d145cd3b131d7f5bca094fae9ed6f7e87f50->enter($__internal_fd19aaf2bd3dc4b596e7ea320840d145cd3b131d7f5bca094fae9ed6f7e87f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_633fd1341dadd34bafa1cff16eb14fc6263536e788b59d0efab8c1bf10d2a685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_633fd1341dadd34bafa1cff16eb14fc6263536e788b59d0efab8c1bf10d2a685->enter($__internal_633fd1341dadd34bafa1cff16eb14fc6263536e788b59d0efab8c1bf10d2a685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_633fd1341dadd34bafa1cff16eb14fc6263536e788b59d0efab8c1bf10d2a685->leave($__internal_633fd1341dadd34bafa1cff16eb14fc6263536e788b59d0efab8c1bf10d2a685_prof);

        
        $__internal_fd19aaf2bd3dc4b596e7ea320840d145cd3b131d7f5bca094fae9ed6f7e87f50->leave($__internal_fd19aaf2bd3dc4b596e7ea320840d145cd3b131d7f5bca094fae9ed6f7e87f50_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
