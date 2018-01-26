<?php

/* form_table_layout.html.twig */
class __TwigTemplate_d0903393a096dd1b95f492d33aaed463c01713af68b37ed91e3ed120292c3f54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bfa398bbdc56d7a596ed61c6c0e72ace6470386fc0cf85f423a124d82e4ef1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bfa398bbdc56d7a596ed61c6c0e72ace6470386fc0cf85f423a124d82e4ef1c->enter($__internal_3bfa398bbdc56d7a596ed61c6c0e72ace6470386fc0cf85f423a124d82e4ef1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_231303960485b224c81db4f652448b586e17839a35b8f37f9e2a8509b48e8738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_231303960485b224c81db4f652448b586e17839a35b8f37f9e2a8509b48e8738->enter($__internal_231303960485b224c81db4f652448b586e17839a35b8f37f9e2a8509b48e8738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_3bfa398bbdc56d7a596ed61c6c0e72ace6470386fc0cf85f423a124d82e4ef1c->leave($__internal_3bfa398bbdc56d7a596ed61c6c0e72ace6470386fc0cf85f423a124d82e4ef1c_prof);

        
        $__internal_231303960485b224c81db4f652448b586e17839a35b8f37f9e2a8509b48e8738->leave($__internal_231303960485b224c81db4f652448b586e17839a35b8f37f9e2a8509b48e8738_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_46d1f3571b4ab46382fd90fb9889c1c829ac91d180413c73de8ce5a7a5075f54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46d1f3571b4ab46382fd90fb9889c1c829ac91d180413c73de8ce5a7a5075f54->enter($__internal_46d1f3571b4ab46382fd90fb9889c1c829ac91d180413c73de8ce5a7a5075f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a330006790cf6b22215d9a03d983dc9e88050668692103f58543744edeee509b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a330006790cf6b22215d9a03d983dc9e88050668692103f58543744edeee509b->enter($__internal_a330006790cf6b22215d9a03d983dc9e88050668692103f58543744edeee509b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_a330006790cf6b22215d9a03d983dc9e88050668692103f58543744edeee509b->leave($__internal_a330006790cf6b22215d9a03d983dc9e88050668692103f58543744edeee509b_prof);

        
        $__internal_46d1f3571b4ab46382fd90fb9889c1c829ac91d180413c73de8ce5a7a5075f54->leave($__internal_46d1f3571b4ab46382fd90fb9889c1c829ac91d180413c73de8ce5a7a5075f54_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_0691ae3f28d83e27372abdc3cf403d9c1d7f1deb9459b25d1281aafaff70f243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0691ae3f28d83e27372abdc3cf403d9c1d7f1deb9459b25d1281aafaff70f243->enter($__internal_0691ae3f28d83e27372abdc3cf403d9c1d7f1deb9459b25d1281aafaff70f243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_7ff991314efbbe46ecc837084d950f50d13fb59e3baa96d79fa94a86ac51859f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff991314efbbe46ecc837084d950f50d13fb59e3baa96d79fa94a86ac51859f->enter($__internal_7ff991314efbbe46ecc837084d950f50d13fb59e3baa96d79fa94a86ac51859f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_7ff991314efbbe46ecc837084d950f50d13fb59e3baa96d79fa94a86ac51859f->leave($__internal_7ff991314efbbe46ecc837084d950f50d13fb59e3baa96d79fa94a86ac51859f_prof);

        
        $__internal_0691ae3f28d83e27372abdc3cf403d9c1d7f1deb9459b25d1281aafaff70f243->leave($__internal_0691ae3f28d83e27372abdc3cf403d9c1d7f1deb9459b25d1281aafaff70f243_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_5234f28b4e23f5c44349a8bf69097b7efb5b482882265153938a0846593c46be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5234f28b4e23f5c44349a8bf69097b7efb5b482882265153938a0846593c46be->enter($__internal_5234f28b4e23f5c44349a8bf69097b7efb5b482882265153938a0846593c46be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_0db7c2a8af7e1ddc6a99fcc88b6a926081cb58b2ba2805f65b515de4b58f8f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db7c2a8af7e1ddc6a99fcc88b6a926081cb58b2ba2805f65b515de4b58f8f6d->enter($__internal_0db7c2a8af7e1ddc6a99fcc88b6a926081cb58b2ba2805f65b515de4b58f8f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_0db7c2a8af7e1ddc6a99fcc88b6a926081cb58b2ba2805f65b515de4b58f8f6d->leave($__internal_0db7c2a8af7e1ddc6a99fcc88b6a926081cb58b2ba2805f65b515de4b58f8f6d_prof);

        
        $__internal_5234f28b4e23f5c44349a8bf69097b7efb5b482882265153938a0846593c46be->leave($__internal_5234f28b4e23f5c44349a8bf69097b7efb5b482882265153938a0846593c46be_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_9451dd05c777062ec50a5ead52d2c86938146f62582822f55e49310a3c638ea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9451dd05c777062ec50a5ead52d2c86938146f62582822f55e49310a3c638ea2->enter($__internal_9451dd05c777062ec50a5ead52d2c86938146f62582822f55e49310a3c638ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_b385cfc70482e5846f7c099752eeb658c48edee60d087cc9fd979b88367cc7c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b385cfc70482e5846f7c099752eeb658c48edee60d087cc9fd979b88367cc7c7->enter($__internal_b385cfc70482e5846f7c099752eeb658c48edee60d087cc9fd979b88367cc7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form"))) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_b385cfc70482e5846f7c099752eeb658c48edee60d087cc9fd979b88367cc7c7->leave($__internal_b385cfc70482e5846f7c099752eeb658c48edee60d087cc9fd979b88367cc7c7_prof);

        
        $__internal_9451dd05c777062ec50a5ead52d2c86938146f62582822f55e49310a3c638ea2->leave($__internal_9451dd05c777062ec50a5ead52d2c86938146f62582822f55e49310a3c638ea2_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
