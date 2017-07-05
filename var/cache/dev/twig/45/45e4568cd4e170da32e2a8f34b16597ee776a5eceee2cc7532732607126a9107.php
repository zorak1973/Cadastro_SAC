<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_61ba8cb3f175c05d081c3f477f63e8275222ced7828dde77dde11c2ca9d3295e extends Twig_Template
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
        $__internal_d056efc97fef763c773012fa40207c30d21046bbdcadf97324d70e7a3f48d6fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d056efc97fef763c773012fa40207c30d21046bbdcadf97324d70e7a3f48d6fd->enter($__internal_d056efc97fef763c773012fa40207c30d21046bbdcadf97324d70e7a3f48d6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b5cec6040afb193ef57ec94ea49eca2e65fa2c77e44ce54ca527b347930da57d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5cec6040afb193ef57ec94ea49eca2e65fa2c77e44ce54ca527b347930da57d->enter($__internal_b5cec6040afb193ef57ec94ea49eca2e65fa2c77e44ce54ca527b347930da57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d056efc97fef763c773012fa40207c30d21046bbdcadf97324d70e7a3f48d6fd->leave($__internal_d056efc97fef763c773012fa40207c30d21046bbdcadf97324d70e7a3f48d6fd_prof);

        
        $__internal_b5cec6040afb193ef57ec94ea49eca2e65fa2c77e44ce54ca527b347930da57d->leave($__internal_b5cec6040afb193ef57ec94ea49eca2e65fa2c77e44ce54ca527b347930da57d_prof);

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
", "@Framework/Form/form_rest.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
