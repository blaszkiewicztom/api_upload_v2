<?php

/* :default:active.html.twig */
class __TwigTemplate_4f89cee7d5cce28d54c9ea2097c7a83abb7bcc6adb2e5e48e40dec315b69b002 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:active.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0260a3fa3477518e2150b8b4f7083a131e3d5a3ab8d62e9c70238affef6f4ea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0260a3fa3477518e2150b8b4f7083a131e3d5a3ab8d62e9c70238affef6f4ea2->enter($__internal_0260a3fa3477518e2150b8b4f7083a131e3d5a3ab8d62e9c70238affef6f4ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:active.html.twig"));

        $__internal_46df779aa0136f380ad9164310cd93212742e03d95fbb056078a0ae3b8e05afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46df779aa0136f380ad9164310cd93212742e03d95fbb056078a0ae3b8e05afe->enter($__internal_46df779aa0136f380ad9164310cd93212742e03d95fbb056078a0ae3b8e05afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:active.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0260a3fa3477518e2150b8b4f7083a131e3d5a3ab8d62e9c70238affef6f4ea2->leave($__internal_0260a3fa3477518e2150b8b4f7083a131e3d5a3ab8d62e9c70238affef6f4ea2_prof);

        
        $__internal_46df779aa0136f380ad9164310cd93212742e03d95fbb056078a0ae3b8e05afe->leave($__internal_46df779aa0136f380ad9164310cd93212742e03d95fbb056078a0ae3b8e05afe_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b18bb111d65ecc3c7a5095bf94bf0e58ee6287fe9db3cba96b6660c99e81a203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b18bb111d65ecc3c7a5095bf94bf0e58ee6287fe9db3cba96b6660c99e81a203->enter($__internal_b18bb111d65ecc3c7a5095bf94bf0e58ee6287fe9db3cba96b6660c99e81a203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cbf9eb397dfd86380a2c0089d06e04ee968ad97b00d933446a2c8578df0b9541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbf9eb397dfd86380a2c0089d06e04ee968ad97b00d933446a2c8578df0b9541->enter($__internal_cbf9eb397dfd86380a2c0089d06e04ee968ad97b00d933446a2c8578df0b9541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 col-sm-12 col-lg-12 col-xl-12\">
                    <ul class=\"nav justify-content-center nav-tabs\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"#\">Active</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleted");
        echo "\">Deleted</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("upload");
        echo "\">Upload</a>
                        </li>
                    </ul>
                </div>
            </div>
        <br>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "file_deleted_successfully"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 22
            echo "            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"alert alert-success\" role=\"alert\">
                        ";
            // line 25
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "file_restored_successfully"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 31
            echo "            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"alert alert-success\" role=\"alert\">
                        ";
            // line 34
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "file_uploaded_successfully"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 40
            echo "            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"alert alert-success\" role=\"alert\">
                        ";
            // line 43
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            <div class=\"row\">
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["activeImages"] ?? $this->getContext($context, "activeImages")));
        foreach ($context['_seq'] as $context["_key"] => $context["activeImage"]) {
            // line 50
            echo "                    <div class=\"col-md-6 col-lg-6 col-xl-6 col-sm-12\">
                        <div class=\"card p-3\">
                            <img class=\"card-img-top img-fluid\" style=\"max-height: 240px\" src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["activeImage"], "fileName", array()), "html", null, true);
            echo "\" alt=\"Image\">
                            <div class=\"card-block\">
                                <h4 class=\"card-title\">Card title</h4>
                                <p class=\"card-text\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["activeImage"], "description", array()), "html", null, true);
            echo "</p>
                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Buttons\">
                                <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("api_download", array("id" => $this->getAttribute($context["activeImage"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-secondary\" role=\"button\">Download</a>
                                <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("api_delete", array("id" => $this->getAttribute($context["activeImage"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-secondary\" role=\"button\">Delete</a>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activeImage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "            </div>
    </div>

";
        
        $__internal_cbf9eb397dfd86380a2c0089d06e04ee968ad97b00d933446a2c8578df0b9541->leave($__internal_cbf9eb397dfd86380a2c0089d06e04ee968ad97b00d933446a2c8578df0b9541_prof);

        
        $__internal_b18bb111d65ecc3c7a5095bf94bf0e58ee6287fe9db3cba96b6660c99e81a203->leave($__internal_b18bb111d65ecc3c7a5095bf94bf0e58ee6287fe9db3cba96b6660c99e81a203_prof);

    }

    public function getTemplateName()
    {
        return ":default:active.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 64,  165 => 59,  161 => 58,  155 => 55,  148 => 52,  144 => 50,  140 => 49,  137 => 48,  126 => 43,  121 => 40,  116 => 39,  105 => 34,  100 => 31,  95 => 30,  84 => 25,  79 => 22,  75 => 21,  66 => 15,  60 => 12,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}

    <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 col-sm-12 col-lg-12 col-xl-12\">
                    <ul class=\"nav justify-content-center nav-tabs\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"#\">Active</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('deleted') }}\">Deleted</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('upload') }}\">Upload</a>
                        </li>
                    </ul>
                </div>
            </div>
        <br>
        {% for msg in app.session.flashbag.get('file_deleted_successfully') %}
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"alert alert-success\" role=\"alert\">
                        {{ msg }}
                    </div>
                </div>
            </div>
        {% endfor %}
        {% for msg in app.session.flashbag.get('file_restored_successfully') %}
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"alert alert-success\" role=\"alert\">
                        {{ msg }}
                    </div>
                </div>
            </div>
        {% endfor %}
        {% for msg in app.session.flashbag.get('file_uploaded_successfully') %}
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"alert alert-success\" role=\"alert\">
                        {{ msg }}
                    </div>
                </div>
            </div>
        {% endfor %}
            <div class=\"row\">
                {% for activeImage in activeImages %}
                    <div class=\"col-md-6 col-lg-6 col-xl-6 col-sm-12\">
                        <div class=\"card p-3\">
                            <img class=\"card-img-top img-fluid\" style=\"max-height: 240px\" src=\"{{ asset('images/') }}{{ activeImage.fileName }}\" alt=\"Image\">
                            <div class=\"card-block\">
                                <h4 class=\"card-title\">Card title</h4>
                                <p class=\"card-text\">{{ activeImage.description }}</p>
                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Buttons\">
                                <a href=\"{{ path('api_download',{'id' : activeImage.id} ) }}\" class=\"btn btn-secondary\" role=\"button\">Download</a>
                                <a href=\"{{ path('api_delete',{'id' : activeImage.id} ) }}\" class=\"btn btn-secondary\" role=\"button\">Delete</a>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
    </div>

{% endblock %}


", ":default:active.html.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\app/Resources\\views/default/active.html.twig");
    }
}
