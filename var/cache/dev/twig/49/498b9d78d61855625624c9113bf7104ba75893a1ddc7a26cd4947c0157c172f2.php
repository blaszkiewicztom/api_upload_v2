<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_56073a2aa7075702bebc801ef2500d237b2e4bc6ca774bac578619e946001fb7 extends Twig_Template
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
        $__internal_5952b1323b2e7ebd183be53960c9fd828959c458ae72a116a882ff86f649d6ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5952b1323b2e7ebd183be53960c9fd828959c458ae72a116a882ff86f649d6ab->enter($__internal_5952b1323b2e7ebd183be53960c9fd828959c458ae72a116a882ff86f649d6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_ead22f9586cbf4eca57321e70109b588d71c2a7d1e414b71ffaa68b499f53d63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead22f9586cbf4eca57321e70109b588d71c2a7d1e414b71ffaa68b499f53d63->enter($__internal_ead22f9586cbf4eca57321e70109b588d71c2a7d1e414b71ffaa68b499f53d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_5952b1323b2e7ebd183be53960c9fd828959c458ae72a116a882ff86f649d6ab->leave($__internal_5952b1323b2e7ebd183be53960c9fd828959c458ae72a116a882ff86f649d6ab_prof);

        
        $__internal_ead22f9586cbf4eca57321e70109b588d71c2a7d1e414b71ffaa68b499f53d63->leave($__internal_ead22f9586cbf4eca57321e70109b588d71c2a7d1e414b71ffaa68b499f53d63_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
