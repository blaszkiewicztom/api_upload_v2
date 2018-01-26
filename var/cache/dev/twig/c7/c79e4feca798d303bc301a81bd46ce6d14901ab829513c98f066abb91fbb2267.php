<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_36834c5878cc6b66295e6bf901f8ed4e3cd9bd70ac8028cffce051d1a5cd319e extends Twig_Template
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
        $__internal_bcafa115c108967951880f521dde3ed3ce1d4923d4a78707590def840b41b993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcafa115c108967951880f521dde3ed3ce1d4923d4a78707590def840b41b993->enter($__internal_bcafa115c108967951880f521dde3ed3ce1d4923d4a78707590def840b41b993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_e8851a2f962aa2bb68183b61c561887ed7f24e9e6bfb194ed209d45393bd77ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8851a2f962aa2bb68183b61c561887ed7f24e9e6bfb194ed209d45393bd77ee->enter($__internal_e8851a2f962aa2bb68183b61c561887ed7f24e9e6bfb194ed209d45393bd77ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_bcafa115c108967951880f521dde3ed3ce1d4923d4a78707590def840b41b993->leave($__internal_bcafa115c108967951880f521dde3ed3ce1d4923d4a78707590def840b41b993_prof);

        
        $__internal_e8851a2f962aa2bb68183b61c561887ed7f24e9e6bfb194ed209d45393bd77ee->leave($__internal_e8851a2f962aa2bb68183b61c561887ed7f24e9e6bfb194ed209d45393bd77ee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
