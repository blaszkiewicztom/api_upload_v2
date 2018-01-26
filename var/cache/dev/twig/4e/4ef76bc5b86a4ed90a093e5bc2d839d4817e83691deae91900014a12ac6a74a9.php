<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_b241b3ee455cc9b3bdd1a3a215e64dad2f0fbce5dc2d88053b4452e8f2d0a7c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b210f8bdd29fd9bb5f28a9a6482901269345c1d82482badaec9cf073e571adf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b210f8bdd29fd9bb5f28a9a6482901269345c1d82482badaec9cf073e571adf->enter($__internal_1b210f8bdd29fd9bb5f28a9a6482901269345c1d82482badaec9cf073e571adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_ce4d2f73a0efe5fe352da4959f47b6e15874f8f2979863e2ff82276cbec6cc44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4d2f73a0efe5fe352da4959f47b6e15874f8f2979863e2ff82276cbec6cc44->enter($__internal_ce4d2f73a0efe5fe352da4959f47b6e15874f8f2979863e2ff82276cbec6cc44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1b210f8bdd29fd9bb5f28a9a6482901269345c1d82482badaec9cf073e571adf->leave($__internal_1b210f8bdd29fd9bb5f28a9a6482901269345c1d82482badaec9cf073e571adf_prof);

        
        $__internal_ce4d2f73a0efe5fe352da4959f47b6e15874f8f2979863e2ff82276cbec6cc44->leave($__internal_ce4d2f73a0efe5fe352da4959f47b6e15874f8f2979863e2ff82276cbec6cc44_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
