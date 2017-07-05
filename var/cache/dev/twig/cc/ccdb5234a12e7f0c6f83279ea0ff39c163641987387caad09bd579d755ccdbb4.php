<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_60b6eb165ac536a2b8c4793c344caaf0ae6073c89018a89449472957a4119e81 extends Twig_Template
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
        $__internal_c34a1685c9d3d85e3f9316979bbdf0535e744a8f21159bc72cbbac9cee6752d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c34a1685c9d3d85e3f9316979bbdf0535e744a8f21159bc72cbbac9cee6752d0->enter($__internal_c34a1685c9d3d85e3f9316979bbdf0535e744a8f21159bc72cbbac9cee6752d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_c03cae653257e0d5d7b347bd4daa954d77e36e0023295ecf972f14c9baa3e533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c03cae653257e0d5d7b347bd4daa954d77e36e0023295ecf972f14c9baa3e533->enter($__internal_c03cae653257e0d5d7b347bd4daa954d77e36e0023295ecf972f14c9baa3e533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c34a1685c9d3d85e3f9316979bbdf0535e744a8f21159bc72cbbac9cee6752d0->leave($__internal_c34a1685c9d3d85e3f9316979bbdf0535e744a8f21159bc72cbbac9cee6752d0_prof);

        
        $__internal_c03cae653257e0d5d7b347bd4daa954d77e36e0023295ecf972f14c9baa3e533->leave($__internal_c03cae653257e0d5d7b347bd4daa954d77e36e0023295ecf972f14c9baa3e533_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
