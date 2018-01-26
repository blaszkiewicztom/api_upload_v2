<?php

/* default/upload.html.twig */
class __TwigTemplate_0b7ba29c050577423d9a7d23597637b8012f09d689415e9dd51c5f8760e3e6d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/upload.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ee0c3fe42318b43503c028cf7a7b7860c23a3759ff0fc0f1733666d96512379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee0c3fe42318b43503c028cf7a7b7860c23a3759ff0fc0f1733666d96512379->enter($__internal_3ee0c3fe42318b43503c028cf7a7b7860c23a3759ff0fc0f1733666d96512379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/upload.html.twig"));

        $__internal_82db3e87313127740d8b0c6c576a934a0dc97487877920818d80f64b2f5de290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82db3e87313127740d8b0c6c576a934a0dc97487877920818d80f64b2f5de290->enter($__internal_82db3e87313127740d8b0c6c576a934a0dc97487877920818d80f64b2f5de290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/upload.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ee0c3fe42318b43503c028cf7a7b7860c23a3759ff0fc0f1733666d96512379->leave($__internal_3ee0c3fe42318b43503c028cf7a7b7860c23a3759ff0fc0f1733666d96512379_prof);

        
        $__internal_82db3e87313127740d8b0c6c576a934a0dc97487877920818d80f64b2f5de290->leave($__internal_82db3e87313127740d8b0c6c576a934a0dc97487877920818d80f64b2f5de290_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7a4b9802bc116ff08e76e05e5d63eecab55dc653046a82dbd2033709116cf4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7a4b9802bc116ff08e76e05e5d63eecab55dc653046a82dbd2033709116cf4d->enter($__internal_f7a4b9802bc116ff08e76e05e5d63eecab55dc653046a82dbd2033709116cf4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e7e4c94ecf121ec746aee331f4a67d6204352b4e3c0ed365c36cc848c9aad7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e4c94ecf121ec746aee331f4a67d6204352b4e3c0ed365c36cc848c9aad7e2->enter($__internal_e7e4c94ecf121ec746aee331f4a67d6204352b4e3c0ed365c36cc848c9aad7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-lg-12 col-xl-12\">
                <ul class=\"nav justify-content-center nav-tabs\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("active");
        echo "\">Active</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleted");
        echo "\">Deleted</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" href=\"#\">Upload</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-lg-12 col-xl-12\">
                ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["uploadForm"] ?? $this->getContext($context, "uploadForm")), 'form_start');
        echo "
                <div class=\"form-group\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["uploadForm"] ?? $this->getContext($context, "uploadForm")), "description", array()), 'row');
        echo "</div>
                <div class=\"form-group\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["uploadForm"] ?? $this->getContext($context, "uploadForm")), "file", array()), 'row');
        echo "</div>
                <button type=\"submit\" class=\"btn btn-secondary\">Upload</button>
                ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["uploadForm"] ?? $this->getContext($context, "uploadForm")), 'form_end');
        echo "
            </div>
        </div>
    </div>

";
        
        $__internal_e7e4c94ecf121ec746aee331f4a67d6204352b4e3c0ed365c36cc848c9aad7e2->leave($__internal_e7e4c94ecf121ec746aee331f4a67d6204352b4e3c0ed365c36cc848c9aad7e2_prof);

        
        $__internal_f7a4b9802bc116ff08e76e05e5d63eecab55dc653046a82dbd2033709116cf4d->leave($__internal_f7a4b9802bc116ff08e76e05e5d63eecab55dc653046a82dbd2033709116cf4d_prof);

    }

    public function getTemplateName()
    {
        return "default/upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 27,  84 => 25,  80 => 24,  76 => 23,  63 => 13,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-lg-12 col-xl-12\">
                <ul class=\"nav justify-content-center nav-tabs\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('active') }}\">Active</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('deleted') }}\">Deleted</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" href=\"#\">Upload</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-lg-12 col-xl-12\">
                {{ form_start(uploadForm) }}
                <div class=\"form-group\">{{ form_row(uploadForm.description) }}</div>
                <div class=\"form-group\">{{ form_row(uploadForm.file) }}</div>
                <button type=\"submit\" class=\"btn btn-secondary\">Upload</button>
                {{ form_end(uploadForm) }}
            </div>
        </div>
    </div>

{% endblock %}", "default/upload.html.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\app\\Resources\\views\\default\\upload.html.twig");
    }
}
