<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_b1931d4af22138973f61740577b97a99f8b9823d09083360ee9dcb3e2bdebf23 extends Twig_Template
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
        $__internal_a23617484caf0efb79c4073fce8ce2d5dfd43093fbd50d95a874f1afa0744006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a23617484caf0efb79c4073fce8ce2d5dfd43093fbd50d95a874f1afa0744006->enter($__internal_a23617484caf0efb79c4073fce8ce2d5dfd43093fbd50d95a874f1afa0744006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_832668610ea36e2e09b98335662ee863c0da8c455660025d11bddc65a1999af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832668610ea36e2e09b98335662ee863c0da8c455660025d11bddc65a1999af8->enter($__internal_832668610ea36e2e09b98335662ee863c0da8c455660025d11bddc65a1999af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a23617484caf0efb79c4073fce8ce2d5dfd43093fbd50d95a874f1afa0744006->leave($__internal_a23617484caf0efb79c4073fce8ce2d5dfd43093fbd50d95a874f1afa0744006_prof);

        
        $__internal_832668610ea36e2e09b98335662ee863c0da8c455660025d11bddc65a1999af8->leave($__internal_832668610ea36e2e09b98335662ee863c0da8c455660025d11bddc65a1999af8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
