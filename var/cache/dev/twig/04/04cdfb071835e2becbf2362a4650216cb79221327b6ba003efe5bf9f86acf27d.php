<?php

/* base.html.twig */
class __TwigTemplate_8eb128e1266ac9dd380c08c9f4bc5b6030f0f32aea9d6872e4144cc3e647cdfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25772b28487b4f8a3117bf4d8f9140ad627fcbd9cd82ca631c256cc4accc8112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25772b28487b4f8a3117bf4d8f9140ad627fcbd9cd82ca631c256cc4accc8112->enter($__internal_25772b28487b4f8a3117bf4d8f9140ad627fcbd9cd82ca631c256cc4accc8112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c7fa3a440aae4d8431f62974f497a9b7b2d4f5323d87f925e4f04b8a2254114b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7fa3a440aae4d8431f62974f497a9b7b2d4f5323d87f925e4f04b8a2254114b->enter($__internal_c7fa3a440aae4d8431f62974f497a9b7b2d4f5323d87f925e4f04b8a2254114b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_25772b28487b4f8a3117bf4d8f9140ad627fcbd9cd82ca631c256cc4accc8112->leave($__internal_25772b28487b4f8a3117bf4d8f9140ad627fcbd9cd82ca631c256cc4accc8112_prof);

        
        $__internal_c7fa3a440aae4d8431f62974f497a9b7b2d4f5323d87f925e4f04b8a2254114b->leave($__internal_c7fa3a440aae4d8431f62974f497a9b7b2d4f5323d87f925e4f04b8a2254114b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_0bc42aaeb864083b97e97eb5e84bbd607963a7b96fc84666a0c3e04bbfd66519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc42aaeb864083b97e97eb5e84bbd607963a7b96fc84666a0c3e04bbfd66519->enter($__internal_0bc42aaeb864083b97e97eb5e84bbd607963a7b96fc84666a0c3e04bbfd66519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a0d4355444a7a305a6e9b0b94f9a4f7ff56a2033ced5b9f09075bc100d8ae67c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d4355444a7a305a6e9b0b94f9a4f7ff56a2033ced5b9f09075bc100d8ae67c->enter($__internal_a0d4355444a7a305a6e9b0b94f9a4f7ff56a2033ced5b9f09075bc100d8ae67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a0d4355444a7a305a6e9b0b94f9a4f7ff56a2033ced5b9f09075bc100d8ae67c->leave($__internal_a0d4355444a7a305a6e9b0b94f9a4f7ff56a2033ced5b9f09075bc100d8ae67c_prof);

        
        $__internal_0bc42aaeb864083b97e97eb5e84bbd607963a7b96fc84666a0c3e04bbfd66519->leave($__internal_0bc42aaeb864083b97e97eb5e84bbd607963a7b96fc84666a0c3e04bbfd66519_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a77eb63225190ddd1798da75021d2df50c514bfb617d179032acf6f7f2822500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a77eb63225190ddd1798da75021d2df50c514bfb617d179032acf6f7f2822500->enter($__internal_a77eb63225190ddd1798da75021d2df50c514bfb617d179032acf6f7f2822500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b7f2214fc9477d887dbe8287b2f144101e584e1043ed81cab813904ccc5175f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7f2214fc9477d887dbe8287b2f144101e584e1043ed81cab813904ccc5175f2->enter($__internal_b7f2214fc9477d887dbe8287b2f144101e584e1043ed81cab813904ccc5175f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
        ";
        
        $__internal_b7f2214fc9477d887dbe8287b2f144101e584e1043ed81cab813904ccc5175f2->leave($__internal_b7f2214fc9477d887dbe8287b2f144101e584e1043ed81cab813904ccc5175f2_prof);

        
        $__internal_a77eb63225190ddd1798da75021d2df50c514bfb617d179032acf6f7f2822500->leave($__internal_a77eb63225190ddd1798da75021d2df50c514bfb617d179032acf6f7f2822500_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_4be8151a1d31653e1dc66841bd0fed4593aee9e3f62371b798c35079c720b6cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be8151a1d31653e1dc66841bd0fed4593aee9e3f62371b798c35079c720b6cf->enter($__internal_4be8151a1d31653e1dc66841bd0fed4593aee9e3f62371b798c35079c720b6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_48956eec8b244fc0c1b6021a9d8ab014c7ce07dfe6f917ed693c31aa4f5a203e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48956eec8b244fc0c1b6021a9d8ab014c7ce07dfe6f917ed693c31aa4f5a203e->enter($__internal_48956eec8b244fc0c1b6021a9d8ab014c7ce07dfe6f917ed693c31aa4f5a203e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_48956eec8b244fc0c1b6021a9d8ab014c7ce07dfe6f917ed693c31aa4f5a203e->leave($__internal_48956eec8b244fc0c1b6021a9d8ab014c7ce07dfe6f917ed693c31aa4f5a203e_prof);

        
        $__internal_4be8151a1d31653e1dc66841bd0fed4593aee9e3f62371b798c35079c720b6cf->leave($__internal_4be8151a1d31653e1dc66841bd0fed4593aee9e3f62371b798c35079c720b6cf_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3e1e000d4a819fdf0feb6a90f6c1d4f3f473a043e6f5b67304e21240d3a46ef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e1e000d4a819fdf0feb6a90f6c1d4f3f473a043e6f5b67304e21240d3a46ef3->enter($__internal_3e1e000d4a819fdf0feb6a90f6c1d4f3f473a043e6f5b67304e21240d3a46ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b0c1930d08c7de44c4fdbc65b69acfcd5e3b76fbf3c3b6be30a0afa27644d102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c1930d08c7de44c4fdbc65b69acfcd5e3b76fbf3c3b6be30a0afa27644d102->enter($__internal_b0c1930d08c7de44c4fdbc65b69acfcd5e3b76fbf3c3b6be30a0afa27644d102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "            <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_b0c1930d08c7de44c4fdbc65b69acfcd5e3b76fbf3c3b6be30a0afa27644d102->leave($__internal_b0c1930d08c7de44c4fdbc65b69acfcd5e3b76fbf3c3b6be30a0afa27644d102_prof);

        
        $__internal_3e1e000d4a819fdf0feb6a90f6c1d4f3f473a043e6f5b67304e21240d3a46ef3->leave($__internal_3e1e000d4a819fdf0feb6a90f6c1d4f3f473a043e6f5b67304e21240d3a46ef3_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 15,  121 => 14,  104 => 13,  93 => 8,  84 => 7,  66 => 6,  54 => 19,  51 => 14,  49 => 13,  42 => 10,  40 => 7,  36 => 6,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
            <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\app\\Resources\\views\\base.html.twig");
    }
}
