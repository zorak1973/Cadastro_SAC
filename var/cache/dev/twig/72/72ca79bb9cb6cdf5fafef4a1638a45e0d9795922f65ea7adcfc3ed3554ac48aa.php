<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e4fc914eb6799267bd9ca5c9d958b06b7e1a918dc495e3e9c520c03c6d1a1f9a extends Twig_Template
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
        $__internal_5ec28de74d350e9fc893bc6bba12606e5791d6231d5825593a544b488d84f6c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ec28de74d350e9fc893bc6bba12606e5791d6231d5825593a544b488d84f6c9->enter($__internal_5ec28de74d350e9fc893bc6bba12606e5791d6231d5825593a544b488d84f6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_2c6df3e3c9f20da0513526fc3e27d1c486f0ab7a6cc564de33a75640e2d6326c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c6df3e3c9f20da0513526fc3e27d1c486f0ab7a6cc564de33a75640e2d6326c->enter($__internal_2c6df3e3c9f20da0513526fc3e27d1c486f0ab7a6cc564de33a75640e2d6326c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5ec28de74d350e9fc893bc6bba12606e5791d6231d5825593a544b488d84f6c9->leave($__internal_5ec28de74d350e9fc893bc6bba12606e5791d6231d5825593a544b488d84f6c9_prof);

        
        $__internal_2c6df3e3c9f20da0513526fc3e27d1c486f0ab7a6cc564de33a75640e2d6326c->leave($__internal_2c6df3e3c9f20da0513526fc3e27d1c486f0ab7a6cc564de33a75640e2d6326c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
