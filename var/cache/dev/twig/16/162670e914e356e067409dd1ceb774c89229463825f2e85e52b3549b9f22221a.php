<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_adc4de45c815cccfe19ee368999eb5e90fc2c8065b34ce5ff4173fd0e96520fd extends Twig_Template
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
        $__internal_0ad215f4c7bcfebade9cc1fc6a8ed7a1d98a1a7485e8e9a8394f76fd7ffc9747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ad215f4c7bcfebade9cc1fc6a8ed7a1d98a1a7485e8e9a8394f76fd7ffc9747->enter($__internal_0ad215f4c7bcfebade9cc1fc6a8ed7a1d98a1a7485e8e9a8394f76fd7ffc9747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_937d927b9baf39603b9644d9e5ffa79a5fb4a4c2f7232ef9bb7400a1164a873c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_937d927b9baf39603b9644d9e5ffa79a5fb4a4c2f7232ef9bb7400a1164a873c->enter($__internal_937d927b9baf39603b9644d9e5ffa79a5fb4a4c2f7232ef9bb7400a1164a873c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_0ad215f4c7bcfebade9cc1fc6a8ed7a1d98a1a7485e8e9a8394f76fd7ffc9747->leave($__internal_0ad215f4c7bcfebade9cc1fc6a8ed7a1d98a1a7485e8e9a8394f76fd7ffc9747_prof);

        
        $__internal_937d927b9baf39603b9644d9e5ffa79a5fb4a4c2f7232ef9bb7400a1164a873c->leave($__internal_937d927b9baf39603b9644d9e5ffa79a5fb4a4c2f7232ef9bb7400a1164a873c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\symfony\\api_upload_img\\api_upload_img\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
