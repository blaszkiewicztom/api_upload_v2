<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_79f558f5d54dcb7c888e4fd0e7bfc5eebc9f819e1f2c2036478f254bfbf59364 extends Twig_Template
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
        $__internal_d2c707e15bfc1bc620b58fce7191d465f7b8dbabd37d6fc32a204d258419aafe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2c707e15bfc1bc620b58fce7191d465f7b8dbabd37d6fc32a204d258419aafe->enter($__internal_d2c707e15bfc1bc620b58fce7191d465f7b8dbabd37d6fc32a204d258419aafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_4c639afd926a0024ded040ee844edc1a29c27b856f18fe03ba9928bcb5666d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c639afd926a0024ded040ee844edc1a29c27b856f18fe03ba9928bcb5666d06->enter($__internal_4c639afd926a0024ded040ee844edc1a29c27b856f18fe03ba9928bcb5666d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_d2c707e15bfc1bc620b58fce7191d465f7b8dbabd37d6fc32a204d258419aafe->leave($__internal_d2c707e15bfc1bc620b58fce7191d465f7b8dbabd37d6fc32a204d258419aafe_prof);

        
        $__internal_4c639afd926a0024ded040ee844edc1a29c27b856f18fe03ba9928bcb5666d06->leave($__internal_4c639afd926a0024ded040ee844edc1a29c27b856f18fe03ba9928bcb5666d06_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
