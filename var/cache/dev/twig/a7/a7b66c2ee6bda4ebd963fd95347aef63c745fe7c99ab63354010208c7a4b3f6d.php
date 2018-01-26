<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_a83e3b2abf2856ff06149b88451421d091fb6a5414e82d3fc5b5e3865a8c6428 extends Twig_Template
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
        $__internal_fd384dc94838e9afb51e6ac885ddc1e7d6465701de643f613e9f171540dc9483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd384dc94838e9afb51e6ac885ddc1e7d6465701de643f613e9f171540dc9483->enter($__internal_fd384dc94838e9afb51e6ac885ddc1e7d6465701de643f613e9f171540dc9483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_b2560a16ac295eacaf2fd325fdee47575bd20c2cd6b3acadddd863b67e503de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2560a16ac295eacaf2fd325fdee47575bd20c2cd6b3acadddd863b67e503de7->enter($__internal_b2560a16ac295eacaf2fd325fdee47575bd20c2cd6b3acadddd863b67e503de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_fd384dc94838e9afb51e6ac885ddc1e7d6465701de643f613e9f171540dc9483->leave($__internal_fd384dc94838e9afb51e6ac885ddc1e7d6465701de643f613e9f171540dc9483_prof);

        
        $__internal_b2560a16ac295eacaf2fd325fdee47575bd20c2cd6b3acadddd863b67e503de7->leave($__internal_b2560a16ac295eacaf2fd325fdee47575bd20c2cd6b3acadddd863b67e503de7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
