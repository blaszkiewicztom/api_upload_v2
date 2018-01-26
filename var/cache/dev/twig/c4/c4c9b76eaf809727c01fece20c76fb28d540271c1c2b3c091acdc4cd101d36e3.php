<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_36e7882e4a4f96332d6800c6101500fa04b0b119a853fd8bdd9c72b389c61073 extends Twig_Template
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
        $__internal_3176acae2c564bb1cc03809a7725ebf11b2183b0bf2f142c51103b5a48517fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3176acae2c564bb1cc03809a7725ebf11b2183b0bf2f142c51103b5a48517fa2->enter($__internal_3176acae2c564bb1cc03809a7725ebf11b2183b0bf2f142c51103b5a48517fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_16f01c4602ee9ecd7db963136f74675075af4de4e916832ffae8684bf806618d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f01c4602ee9ecd7db963136f74675075af4de4e916832ffae8684bf806618d->enter($__internal_16f01c4602ee9ecd7db963136f74675075af4de4e916832ffae8684bf806618d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_3176acae2c564bb1cc03809a7725ebf11b2183b0bf2f142c51103b5a48517fa2->leave($__internal_3176acae2c564bb1cc03809a7725ebf11b2183b0bf2f142c51103b5a48517fa2_prof);

        
        $__internal_16f01c4602ee9ecd7db963136f74675075af4de4e916832ffae8684bf806618d->leave($__internal_16f01c4602ee9ecd7db963136f74675075af4de4e916832ffae8684bf806618d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
