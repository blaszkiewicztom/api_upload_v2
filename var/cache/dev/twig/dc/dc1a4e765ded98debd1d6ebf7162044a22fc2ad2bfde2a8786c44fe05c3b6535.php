<?php

/* ::base.html.twig */
class __TwigTemplate_55eb37c53adcb4813688c86ad2cb41300b9b29774edf1462a6d49718ddce4d1b extends Twig_Template
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
        $__internal_db816932a355a465a8102ad7f223941249472c390c1326553c85c1f4fa979ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db816932a355a465a8102ad7f223941249472c390c1326553c85c1f4fa979ed0->enter($__internal_db816932a355a465a8102ad7f223941249472c390c1326553c85c1f4fa979ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_fc4b98ba88be41953bb4fc8585b0d0ac4e2873b7c81ba6a3adc02c0df2619e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc4b98ba88be41953bb4fc8585b0d0ac4e2873b7c81ba6a3adc02c0df2619e09->enter($__internal_fc4b98ba88be41953bb4fc8585b0d0ac4e2873b7c81ba6a3adc02c0df2619e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_db816932a355a465a8102ad7f223941249472c390c1326553c85c1f4fa979ed0->leave($__internal_db816932a355a465a8102ad7f223941249472c390c1326553c85c1f4fa979ed0_prof);

        
        $__internal_fc4b98ba88be41953bb4fc8585b0d0ac4e2873b7c81ba6a3adc02c0df2619e09->leave($__internal_fc4b98ba88be41953bb4fc8585b0d0ac4e2873b7c81ba6a3adc02c0df2619e09_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3603d1e708dec79c09c5fa1652c7ffc92e8011ac72802bfdd2fd8dd07d0f46da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3603d1e708dec79c09c5fa1652c7ffc92e8011ac72802bfdd2fd8dd07d0f46da->enter($__internal_3603d1e708dec79c09c5fa1652c7ffc92e8011ac72802bfdd2fd8dd07d0f46da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b62cdd304c509be2d2b316955f38a79eadf189524c28d083def5f976aa48a476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b62cdd304c509be2d2b316955f38a79eadf189524c28d083def5f976aa48a476->enter($__internal_b62cdd304c509be2d2b316955f38a79eadf189524c28d083def5f976aa48a476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b62cdd304c509be2d2b316955f38a79eadf189524c28d083def5f976aa48a476->leave($__internal_b62cdd304c509be2d2b316955f38a79eadf189524c28d083def5f976aa48a476_prof);

        
        $__internal_3603d1e708dec79c09c5fa1652c7ffc92e8011ac72802bfdd2fd8dd07d0f46da->leave($__internal_3603d1e708dec79c09c5fa1652c7ffc92e8011ac72802bfdd2fd8dd07d0f46da_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1127b4d2533578520249d70660a1d8b59a44bb8fa83fbb66c95f0f6d2ff2b0fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1127b4d2533578520249d70660a1d8b59a44bb8fa83fbb66c95f0f6d2ff2b0fa->enter($__internal_1127b4d2533578520249d70660a1d8b59a44bb8fa83fbb66c95f0f6d2ff2b0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1cde79f7c4d8376b8f64fd981c789d273fd96e7ef7b5419ed5ce26dabf8e9911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cde79f7c4d8376b8f64fd981c789d273fd96e7ef7b5419ed5ce26dabf8e9911->enter($__internal_1cde79f7c4d8376b8f64fd981c789d273fd96e7ef7b5419ed5ce26dabf8e9911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
        ";
        
        $__internal_1cde79f7c4d8376b8f64fd981c789d273fd96e7ef7b5419ed5ce26dabf8e9911->leave($__internal_1cde79f7c4d8376b8f64fd981c789d273fd96e7ef7b5419ed5ce26dabf8e9911_prof);

        
        $__internal_1127b4d2533578520249d70660a1d8b59a44bb8fa83fbb66c95f0f6d2ff2b0fa->leave($__internal_1127b4d2533578520249d70660a1d8b59a44bb8fa83fbb66c95f0f6d2ff2b0fa_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_5aca2d9f58307ab6c6d4355d2b5aa83a7a4585e88597790786ee77a1fa1391f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aca2d9f58307ab6c6d4355d2b5aa83a7a4585e88597790786ee77a1fa1391f2->enter($__internal_5aca2d9f58307ab6c6d4355d2b5aa83a7a4585e88597790786ee77a1fa1391f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9df87c71c01bf28e85d354d664ed16e42e36dc782192a204f6de1ea66e75fcf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df87c71c01bf28e85d354d664ed16e42e36dc782192a204f6de1ea66e75fcf0->enter($__internal_9df87c71c01bf28e85d354d664ed16e42e36dc782192a204f6de1ea66e75fcf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9df87c71c01bf28e85d354d664ed16e42e36dc782192a204f6de1ea66e75fcf0->leave($__internal_9df87c71c01bf28e85d354d664ed16e42e36dc782192a204f6de1ea66e75fcf0_prof);

        
        $__internal_5aca2d9f58307ab6c6d4355d2b5aa83a7a4585e88597790786ee77a1fa1391f2->leave($__internal_5aca2d9f58307ab6c6d4355d2b5aa83a7a4585e88597790786ee77a1fa1391f2_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b50f6b319e6f9b2be33943943d93f2bef696c3557feeb73e59606239cb0bc7ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b50f6b319e6f9b2be33943943d93f2bef696c3557feeb73e59606239cb0bc7ea->enter($__internal_b50f6b319e6f9b2be33943943d93f2bef696c3557feeb73e59606239cb0bc7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9a99bde9a35240e8369c7dadd34b652960762dd1448f39a736b63ee2cc55bfd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a99bde9a35240e8369c7dadd34b652960762dd1448f39a736b63ee2cc55bfd5->enter($__internal_9a99bde9a35240e8369c7dadd34b652960762dd1448f39a736b63ee2cc55bfd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "            <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_9a99bde9a35240e8369c7dadd34b652960762dd1448f39a736b63ee2cc55bfd5->leave($__internal_9a99bde9a35240e8369c7dadd34b652960762dd1448f39a736b63ee2cc55bfd5_prof);

        
        $__internal_b50f6b319e6f9b2be33943943d93f2bef696c3557feeb73e59606239cb0bc7ea->leave($__internal_b50f6b319e6f9b2be33943943d93f2bef696c3557feeb73e59606239cb0bc7ea_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\app/Resources\\views/base.html.twig");
    }
}
