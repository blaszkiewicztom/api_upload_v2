<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_129959f5cd242415409d7d567f8c0ed8fc338cdf2ffefb6d8bf32b6585c803cf extends Twig_Template
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
        $__internal_93f14128c669ed01b2a33c34e2d7d7797ec56efeb1bed67770b9f1e8b5f9ab0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f14128c669ed01b2a33c34e2d7d7797ec56efeb1bed67770b9f1e8b5f9ab0d->enter($__internal_93f14128c669ed01b2a33c34e2d7d7797ec56efeb1bed67770b9f1e8b5f9ab0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_ed978ddeebbff788f091cc1fe4d407d34cc538ab1eeeadaade8dcb595e3d0928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed978ddeebbff788f091cc1fe4d407d34cc538ab1eeeadaade8dcb595e3d0928->enter($__internal_ed978ddeebbff788f091cc1fe4d407d34cc538ab1eeeadaade8dcb595e3d0928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_93f14128c669ed01b2a33c34e2d7d7797ec56efeb1bed67770b9f1e8b5f9ab0d->leave($__internal_93f14128c669ed01b2a33c34e2d7d7797ec56efeb1bed67770b9f1e8b5f9ab0d_prof);

        
        $__internal_ed978ddeebbff788f091cc1fe4d407d34cc538ab1eeeadaade8dcb595e3d0928->leave($__internal_ed978ddeebbff788f091cc1fe4d407d34cc538ab1eeeadaade8dcb595e3d0928_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
