<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_b8dca4c305d2045782d752c34cf9f003a3999a08cbfaadb4e2886373a28d0d34 extends Twig_Template
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
        $__internal_38b3b291d51d1a09997edf9e5a015a2a4d02cc7664f47efc7604ba83baab9a20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b3b291d51d1a09997edf9e5a015a2a4d02cc7664f47efc7604ba83baab9a20->enter($__internal_38b3b291d51d1a09997edf9e5a015a2a4d02cc7664f47efc7604ba83baab9a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_0afcffce35615d88ad61057739091f42217111c28e9930a4e38e4ebcf9ec2fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0afcffce35615d88ad61057739091f42217111c28e9930a4e38e4ebcf9ec2fe4->enter($__internal_0afcffce35615d88ad61057739091f42217111c28e9930a4e38e4ebcf9ec2fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_38b3b291d51d1a09997edf9e5a015a2a4d02cc7664f47efc7604ba83baab9a20->leave($__internal_38b3b291d51d1a09997edf9e5a015a2a4d02cc7664f47efc7604ba83baab9a20_prof);

        
        $__internal_0afcffce35615d88ad61057739091f42217111c28e9930a4e38e4ebcf9ec2fe4->leave($__internal_0afcffce35615d88ad61057739091f42217111c28e9930a4e38e4ebcf9ec2fe4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
