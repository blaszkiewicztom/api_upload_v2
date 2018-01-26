<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_757246e7aa1852f127ba3f435b94a2aa0710a380f019017e60575df1ee23f865 extends Twig_Template
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
        $__internal_936e579cbdc3be674e660b1870326c052e94c48cb8f86e1eab76fff862fcf833 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_936e579cbdc3be674e660b1870326c052e94c48cb8f86e1eab76fff862fcf833->enter($__internal_936e579cbdc3be674e660b1870326c052e94c48cb8f86e1eab76fff862fcf833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_b3b8d2d3d9e1e4981bf1827d3c89fd97e91e86e7213a82cbaad2aa729869045b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b8d2d3d9e1e4981bf1827d3c89fd97e91e86e7213a82cbaad2aa729869045b->enter($__internal_b3b8d2d3d9e1e4981bf1827d3c89fd97e91e86e7213a82cbaad2aa729869045b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_936e579cbdc3be674e660b1870326c052e94c48cb8f86e1eab76fff862fcf833->leave($__internal_936e579cbdc3be674e660b1870326c052e94c48cb8f86e1eab76fff862fcf833_prof);

        
        $__internal_b3b8d2d3d9e1e4981bf1827d3c89fd97e91e86e7213a82cbaad2aa729869045b->leave($__internal_b3b8d2d3d9e1e4981bf1827d3c89fd97e91e86e7213a82cbaad2aa729869045b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
