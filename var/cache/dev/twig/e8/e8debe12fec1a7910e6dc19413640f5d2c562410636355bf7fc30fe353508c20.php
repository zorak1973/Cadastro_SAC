<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_6c50285872ccafd2110631cb27056e88c3a87472fb09c99846762ad4fef96894 extends Twig_Template
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
        $__internal_6e98898e86c07118ae8dc1c07fe44145df29b933b75ae9df25a8d9d7c6e9290d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e98898e86c07118ae8dc1c07fe44145df29b933b75ae9df25a8d9d7c6e9290d->enter($__internal_6e98898e86c07118ae8dc1c07fe44145df29b933b75ae9df25a8d9d7c6e9290d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_0b405240c6d3a5562baee17bedd70bbbe92e34cf5574942815de7c2ad1eebba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b405240c6d3a5562baee17bedd70bbbe92e34cf5574942815de7c2ad1eebba9->enter($__internal_0b405240c6d3a5562baee17bedd70bbbe92e34cf5574942815de7c2ad1eebba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6e98898e86c07118ae8dc1c07fe44145df29b933b75ae9df25a8d9d7c6e9290d->leave($__internal_6e98898e86c07118ae8dc1c07fe44145df29b933b75ae9df25a8d9d7c6e9290d_prof);

        
        $__internal_0b405240c6d3a5562baee17bedd70bbbe92e34cf5574942815de7c2ad1eebba9->leave($__internal_0b405240c6d3a5562baee17bedd70bbbe92e34cf5574942815de7c2ad1eebba9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
