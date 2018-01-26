<?php

/* :default:upload.html.twig */
class __TwigTemplate_fa21ddd6264ce9fe5e9d913b2b977c3c7a55b13cf9dd6479a96434482d5e686c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:upload.html.twig", 1);
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
        $__internal_09e80df23e6f7aa2c64522a8100de29b142137a4adbd12ab5624a2ac4f23a31e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09e80df23e6f7aa2c64522a8100de29b142137a4adbd12ab5624a2ac4f23a31e->enter($__internal_09e80df23e6f7aa2c64522a8100de29b142137a4adbd12ab5624a2ac4f23a31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:upload.html.twig"));

        $__internal_4bd38b31c1e39d72013cb24396645f637d122fac785fb6ba99d4d184ba36ecf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd38b31c1e39d72013cb24396645f637d122fac785fb6ba99d4d184ba36ecf1->enter($__internal_4bd38b31c1e39d72013cb24396645f637d122fac785fb6ba99d4d184ba36ecf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:upload.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09e80df23e6f7aa2c64522a8100de29b142137a4adbd12ab5624a2ac4f23a31e->leave($__internal_09e80df23e6f7aa2c64522a8100de29b142137a4adbd12ab5624a2ac4f23a31e_prof);

        
        $__internal_4bd38b31c1e39d72013cb24396645f637d122fac785fb6ba99d4d184ba36ecf1->leave($__internal_4bd38b31c1e39d72013cb24396645f637d122fac785fb6ba99d4d184ba36ecf1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_061624bb7f978d3706438358fc143441f2ee2403590af5e1889f5b0a4bf7599b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_061624bb7f978d3706438358fc143441f2ee2403590af5e1889f5b0a4bf7599b->enter($__internal_061624bb7f978d3706438358fc143441f2ee2403590af5e1889f5b0a4bf7599b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05dc36bee25f1a086ec59716fcad44ad3b9a2854e8da1ee615e3f57b0d2d6052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05dc36bee25f1a086ec59716fcad44ad3b9a2854e8da1ee615e3f57b0d2d6052->enter($__internal_05dc36bee25f1a086ec59716fcad44ad3b9a2854e8da1ee615e3f57b0d2d6052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_05dc36bee25f1a086ec59716fcad44ad3b9a2854e8da1ee615e3f57b0d2d6052->leave($__internal_05dc36bee25f1a086ec59716fcad44ad3b9a2854e8da1ee615e3f57b0d2d6052_prof);

        
        $__internal_061624bb7f978d3706438358fc143441f2ee2403590af5e1889f5b0a4bf7599b->leave($__internal_061624bb7f978d3706438358fc143441f2ee2403590af5e1889f5b0a4bf7599b_prof);

    }

    public function getTemplateName()
    {
        return ":default:upload.html.twig";
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

{% endblock %}", ":default:upload.html.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\app/Resources\\views/default/upload.html.twig");
    }
}
