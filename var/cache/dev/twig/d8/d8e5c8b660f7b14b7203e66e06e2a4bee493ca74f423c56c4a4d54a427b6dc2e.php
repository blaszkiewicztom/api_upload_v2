<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_01ac7b0db3004b9793e742a654c03f0a286db98d33faf2f3c0aefbbbf7fd00cf extends Twig_Template
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
        $__internal_e2457142cbe481998aea5336ebc7b2ddedfdd169d3e9168fc14ec986e6dbab8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2457142cbe481998aea5336ebc7b2ddedfdd169d3e9168fc14ec986e6dbab8b->enter($__internal_e2457142cbe481998aea5336ebc7b2ddedfdd169d3e9168fc14ec986e6dbab8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_48584507d93ebb45d238acab87ebc5436d4ba646286e5506405f974e9a5a158a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48584507d93ebb45d238acab87ebc5436d4ba646286e5506405f974e9a5a158a->enter($__internal_48584507d93ebb45d238acab87ebc5436d4ba646286e5506405f974e9a5a158a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_e2457142cbe481998aea5336ebc7b2ddedfdd169d3e9168fc14ec986e6dbab8b->leave($__internal_e2457142cbe481998aea5336ebc7b2ddedfdd169d3e9168fc14ec986e6dbab8b_prof);

        
        $__internal_48584507d93ebb45d238acab87ebc5436d4ba646286e5506405f974e9a5a158a->leave($__internal_48584507d93ebb45d238acab87ebc5436d4ba646286e5506405f974e9a5a158a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
