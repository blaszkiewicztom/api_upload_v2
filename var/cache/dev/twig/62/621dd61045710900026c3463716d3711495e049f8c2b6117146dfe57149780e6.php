<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_4c688d9c0e2c3536f890bfa84b256f8e4200cd0b8ed533b674194bf02060d445 extends Twig_Template
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
        $__internal_f7ae4ab486c3fe4f8bcc0c12dd231533e09c5ee8238e46f19586c9b1a4498bab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7ae4ab486c3fe4f8bcc0c12dd231533e09c5ee8238e46f19586c9b1a4498bab->enter($__internal_f7ae4ab486c3fe4f8bcc0c12dd231533e09c5ee8238e46f19586c9b1a4498bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_33ded5cc2fbc5fa7134e968390d1ae6fa2b716d8ceeccfe50f39d9d6f9e87cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ded5cc2fbc5fa7134e968390d1ae6fa2b716d8ceeccfe50f39d9d6f9e87cf1->enter($__internal_33ded5cc2fbc5fa7134e968390d1ae6fa2b716d8ceeccfe50f39d9d6f9e87cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f7ae4ab486c3fe4f8bcc0c12dd231533e09c5ee8238e46f19586c9b1a4498bab->leave($__internal_f7ae4ab486c3fe4f8bcc0c12dd231533e09c5ee8238e46f19586c9b1a4498bab_prof);

        
        $__internal_33ded5cc2fbc5fa7134e968390d1ae6fa2b716d8ceeccfe50f39d9d6f9e87cf1->leave($__internal_33ded5cc2fbc5fa7134e968390d1ae6fa2b716d8ceeccfe50f39d9d6f9e87cf1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
