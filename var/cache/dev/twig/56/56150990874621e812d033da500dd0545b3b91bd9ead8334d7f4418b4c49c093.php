<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_a7d5ce382e4ffc1bb564dbc7ce93d9e1a6e8f9d0a2571c2f9142ac74be86de8a extends Twig_Template
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
        $__internal_8e3e3e711fdb88fd60ee36489e7a0e275ba4ca25bde81257e03cd29a94d6348c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e3e3e711fdb88fd60ee36489e7a0e275ba4ca25bde81257e03cd29a94d6348c->enter($__internal_8e3e3e711fdb88fd60ee36489e7a0e275ba4ca25bde81257e03cd29a94d6348c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_13810565b0614a675181ad3340ba776614ddfe7bb2303d0afe508995c59ee3b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13810565b0614a675181ad3340ba776614ddfe7bb2303d0afe508995c59ee3b8->enter($__internal_13810565b0614a675181ad3340ba776614ddfe7bb2303d0afe508995c59ee3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_8e3e3e711fdb88fd60ee36489e7a0e275ba4ca25bde81257e03cd29a94d6348c->leave($__internal_8e3e3e711fdb88fd60ee36489e7a0e275ba4ca25bde81257e03cd29a94d6348c_prof);

        
        $__internal_13810565b0614a675181ad3340ba776614ddfe7bb2303d0afe508995c59ee3b8->leave($__internal_13810565b0614a675181ad3340ba776614ddfe7bb2303d0afe508995c59ee3b8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
