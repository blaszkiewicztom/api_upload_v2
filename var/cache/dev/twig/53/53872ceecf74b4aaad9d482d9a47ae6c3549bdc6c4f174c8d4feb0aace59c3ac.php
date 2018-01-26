<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_e820af6b7e0a6fce1507ac48901640404e2cbff7bda3610aec40324994b8e6bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4bd08088c1bf425779fb0f927b219644319f4a388c22c11c977c1c20fcc8409c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bd08088c1bf425779fb0f927b219644319f4a388c22c11c977c1c20fcc8409c->enter($__internal_4bd08088c1bf425779fb0f927b219644319f4a388c22c11c977c1c20fcc8409c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_32ab8dae25176ed0d790711b5e0cfd19f36b483bcd53065935a28016134c7f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ab8dae25176ed0d790711b5e0cfd19f36b483bcd53065935a28016134c7f9b->enter($__internal_32ab8dae25176ed0d790711b5e0cfd19f36b483bcd53065935a28016134c7f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_4bd08088c1bf425779fb0f927b219644319f4a388c22c11c977c1c20fcc8409c->leave($__internal_4bd08088c1bf425779fb0f927b219644319f4a388c22c11c977c1c20fcc8409c_prof);

        
        $__internal_32ab8dae25176ed0d790711b5e0cfd19f36b483bcd53065935a28016134c7f9b->leave($__internal_32ab8dae25176ed0d790711b5e0cfd19f36b483bcd53065935a28016134c7f9b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fdbd6a8cbf8d7491093077c1545f0cffae45088d04033e59838c67283d90c28d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdbd6a8cbf8d7491093077c1545f0cffae45088d04033e59838c67283d90c28d->enter($__internal_fdbd6a8cbf8d7491093077c1545f0cffae45088d04033e59838c67283d90c28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_889d1c03e762a3cf8dfb53723a393ad95844cc361a4134680a42efa96a59780f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_889d1c03e762a3cf8dfb53723a393ad95844cc361a4134680a42efa96a59780f->enter($__internal_889d1c03e762a3cf8dfb53723a393ad95844cc361a4134680a42efa96a59780f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_889d1c03e762a3cf8dfb53723a393ad95844cc361a4134680a42efa96a59780f->leave($__internal_889d1c03e762a3cf8dfb53723a393ad95844cc361a4134680a42efa96a59780f_prof);

        
        $__internal_fdbd6a8cbf8d7491093077c1545f0cffae45088d04033e59838c67283d90c28d->leave($__internal_fdbd6a8cbf8d7491093077c1545f0cffae45088d04033e59838c67283d90c28d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e5a5899e5f85e8f54b14678e081d023182810c385ada8f34fc31502d9d8376e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5a5899e5f85e8f54b14678e081d023182810c385ada8f34fc31502d9d8376e3->enter($__internal_e5a5899e5f85e8f54b14678e081d023182810c385ada8f34fc31502d9d8376e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b25a1c953bd10553d7aa14748366a71aa1227fc9c7ea25804cf8ccd831e686ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25a1c953bd10553d7aa14748366a71aa1227fc9c7ea25804cf8ccd831e686ad->enter($__internal_b25a1c953bd10553d7aa14748366a71aa1227fc9c7ea25804cf8ccd831e686ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b25a1c953bd10553d7aa14748366a71aa1227fc9c7ea25804cf8ccd831e686ad->leave($__internal_b25a1c953bd10553d7aa14748366a71aa1227fc9c7ea25804cf8ccd831e686ad_prof);

        
        $__internal_e5a5899e5f85e8f54b14678e081d023182810c385ada8f34fc31502d9d8376e3->leave($__internal_e5a5899e5f85e8f54b14678e081d023182810c385ada8f34fc31502d9d8376e3_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd6a9fb5a9fb4ca6ba75566e7b13bbbaabbe78c25d6a3e5b0d653bc87bcea261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd6a9fb5a9fb4ca6ba75566e7b13bbbaabbe78c25d6a3e5b0d653bc87bcea261->enter($__internal_dd6a9fb5a9fb4ca6ba75566e7b13bbbaabbe78c25d6a3e5b0d653bc87bcea261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc2cf57a84c0262e3a4227385e93725849bfc25e6fdaa5372ebe507b70181ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc2cf57a84c0262e3a4227385e93725849bfc25e6fdaa5372ebe507b70181ba8->enter($__internal_bc2cf57a84c0262e3a4227385e93725849bfc25e6fdaa5372ebe507b70181ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bc2cf57a84c0262e3a4227385e93725849bfc25e6fdaa5372ebe507b70181ba8->leave($__internal_bc2cf57a84c0262e3a4227385e93725849bfc25e6fdaa5372ebe507b70181ba8_prof);

        
        $__internal_dd6a9fb5a9fb4ca6ba75566e7b13bbbaabbe78c25d6a3e5b0d653bc87bcea261->leave($__internal_dd6a9fb5a9fb4ca6ba75566e7b13bbbaabbe78c25d6a3e5b0d653bc87bcea261_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
