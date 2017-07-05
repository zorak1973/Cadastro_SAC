<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_6351fd3b6228f6c0cd02371552db9580dffdf1bc232becfca747a44eebae5abe extends Twig_Template
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
        $__internal_a7de5d8411767fd31bdb39b282d36e53a89c8dec22344a780a7cffb470d0b7ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7de5d8411767fd31bdb39b282d36e53a89c8dec22344a780a7cffb470d0b7ae->enter($__internal_a7de5d8411767fd31bdb39b282d36e53a89c8dec22344a780a7cffb470d0b7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_c47f48dce5ad803ed6a09b0835e6a64cfb6fe56c466dec55d89bf5939eeb8e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c47f48dce5ad803ed6a09b0835e6a64cfb6fe56c466dec55d89bf5939eeb8e42->enter($__internal_c47f48dce5ad803ed6a09b0835e6a64cfb6fe56c466dec55d89bf5939eeb8e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a7de5d8411767fd31bdb39b282d36e53a89c8dec22344a780a7cffb470d0b7ae->leave($__internal_a7de5d8411767fd31bdb39b282d36e53a89c8dec22344a780a7cffb470d0b7ae_prof);

        
        $__internal_c47f48dce5ad803ed6a09b0835e6a64cfb6fe56c466dec55d89bf5939eeb8e42->leave($__internal_c47f48dce5ad803ed6a09b0835e6a64cfb6fe56c466dec55d89bf5939eeb8e42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
