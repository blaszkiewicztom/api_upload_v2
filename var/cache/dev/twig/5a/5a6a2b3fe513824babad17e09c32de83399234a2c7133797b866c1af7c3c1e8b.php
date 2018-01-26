<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_9735e8557bd733a88a1e34e2ffff87bf913b52d4c3bd003d5753874d59651864 extends Twig_Template
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
        $__internal_ca7e49ce41d24769ee830a95d5c01249f4f9a46774b7f3ec4dfaaf1767b9a666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca7e49ce41d24769ee830a95d5c01249f4f9a46774b7f3ec4dfaaf1767b9a666->enter($__internal_ca7e49ce41d24769ee830a95d5c01249f4f9a46774b7f3ec4dfaaf1767b9a666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_1c2b8fc5dd61ca4e6db75c68ce1481b557089df17fd4a9d35a0d3fd7ce89ea5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c2b8fc5dd61ca4e6db75c68ce1481b557089df17fd4a9d35a0d3fd7ce89ea5b->enter($__internal_1c2b8fc5dd61ca4e6db75c68ce1481b557089df17fd4a9d35a0d3fd7ce89ea5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
        
        $__internal_ca7e49ce41d24769ee830a95d5c01249f4f9a46774b7f3ec4dfaaf1767b9a666->leave($__internal_ca7e49ce41d24769ee830a95d5c01249f4f9a46774b7f3ec4dfaaf1767b9a666_prof);

        
        $__internal_1c2b8fc5dd61ca4e6db75c68ce1481b557089df17fd4a9d35a0d3fd7ce89ea5b->leave($__internal_1c2b8fc5dd61ca4e6db75c68ce1481b557089df17fd4a9d35a0d3fd7ce89ea5b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <title>An Error Occurred: {{ status_text }}</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"{{ status_code }} {{ status_text }}\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
", "TwigBundle:Exception:error.html.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.html.twig");
    }
}
