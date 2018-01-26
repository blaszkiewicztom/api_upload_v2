<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b07ec5cca134c7d4b95332b346d33f61399850c05dba85952143eadc46ad9ed5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df4cfa82a5f89ea4e3508f3eef38792c9687bc5aa15e32871aa6d46f13575f36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df4cfa82a5f89ea4e3508f3eef38792c9687bc5aa15e32871aa6d46f13575f36->enter($__internal_df4cfa82a5f89ea4e3508f3eef38792c9687bc5aa15e32871aa6d46f13575f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_810159e81457f20a12543cb6fea9972d766712ab3aeaeec8cc9843bb8d35356c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_810159e81457f20a12543cb6fea9972d766712ab3aeaeec8cc9843bb8d35356c->enter($__internal_810159e81457f20a12543cb6fea9972d766712ab3aeaeec8cc9843bb8d35356c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df4cfa82a5f89ea4e3508f3eef38792c9687bc5aa15e32871aa6d46f13575f36->leave($__internal_df4cfa82a5f89ea4e3508f3eef38792c9687bc5aa15e32871aa6d46f13575f36_prof);

        
        $__internal_810159e81457f20a12543cb6fea9972d766712ab3aeaeec8cc9843bb8d35356c->leave($__internal_810159e81457f20a12543cb6fea9972d766712ab3aeaeec8cc9843bb8d35356c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_de978154c4a13fea8ec1f4d4205be4f02dcd3cc1e9f0d866b8ff5188713e5f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de978154c4a13fea8ec1f4d4205be4f02dcd3cc1e9f0d866b8ff5188713e5f51->enter($__internal_de978154c4a13fea8ec1f4d4205be4f02dcd3cc1e9f0d866b8ff5188713e5f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_641341e19fd725d97359fa89f1c876062cfcf9d0ab694160580b7185b1d1006a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_641341e19fd725d97359fa89f1c876062cfcf9d0ab694160580b7185b1d1006a->enter($__internal_641341e19fd725d97359fa89f1c876062cfcf9d0ab694160580b7185b1d1006a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_641341e19fd725d97359fa89f1c876062cfcf9d0ab694160580b7185b1d1006a->leave($__internal_641341e19fd725d97359fa89f1c876062cfcf9d0ab694160580b7185b1d1006a_prof);

        
        $__internal_de978154c4a13fea8ec1f4d4205be4f02dcd3cc1e9f0d866b8ff5188713e5f51->leave($__internal_de978154c4a13fea8ec1f4d4205be4f02dcd3cc1e9f0d866b8ff5188713e5f51_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d51451cfac7fbd244a4b60368721ea2a61c7902b223a5349edbbcea5459fc424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d51451cfac7fbd244a4b60368721ea2a61c7902b223a5349edbbcea5459fc424->enter($__internal_d51451cfac7fbd244a4b60368721ea2a61c7902b223a5349edbbcea5459fc424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2b186b1d3e6b09bcf4d2d1a8ef671f3e2a3c043058aee8ed25d325073472bde5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b186b1d3e6b09bcf4d2d1a8ef671f3e2a3c043058aee8ed25d325073472bde5->enter($__internal_2b186b1d3e6b09bcf4d2d1a8ef671f3e2a3c043058aee8ed25d325073472bde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2b186b1d3e6b09bcf4d2d1a8ef671f3e2a3c043058aee8ed25d325073472bde5->leave($__internal_2b186b1d3e6b09bcf4d2d1a8ef671f3e2a3c043058aee8ed25d325073472bde5_prof);

        
        $__internal_d51451cfac7fbd244a4b60368721ea2a61c7902b223a5349edbbcea5459fc424->leave($__internal_d51451cfac7fbd244a4b60368721ea2a61c7902b223a5349edbbcea5459fc424_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6d905cc0940459f59addf2f0627fa4c5ba2c3e7f5839cb09379a01ae928ba4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6d905cc0940459f59addf2f0627fa4c5ba2c3e7f5839cb09379a01ae928ba4f->enter($__internal_f6d905cc0940459f59addf2f0627fa4c5ba2c3e7f5839cb09379a01ae928ba4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b7085e5d527c9657abce61026dce833823657dcacd93745f679a2a330326b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7085e5d527c9657abce61026dce833823657dcacd93745f679a2a330326b94->enter($__internal_0b7085e5d527c9657abce61026dce833823657dcacd93745f679a2a330326b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_0b7085e5d527c9657abce61026dce833823657dcacd93745f679a2a330326b94->leave($__internal_0b7085e5d527c9657abce61026dce833823657dcacd93745f679a2a330326b94_prof);

        
        $__internal_f6d905cc0940459f59addf2f0627fa4c5ba2c3e7f5839cb09379a01ae928ba4f->leave($__internal_f6d905cc0940459f59addf2f0627fa4c5ba2c3e7f5839cb09379a01ae928ba4f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
