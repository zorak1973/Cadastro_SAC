<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_e3745b8a56397c75d089da5fd9c57e27a9de3e2ca8aff76b15cd7a470ee4b049 extends Twig_Template
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
        $__internal_9eea1d9c85bec2fd02970e8f712699eed2955609b5ac239aaaab84f388a6aeef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eea1d9c85bec2fd02970e8f712699eed2955609b5ac239aaaab84f388a6aeef->enter($__internal_9eea1d9c85bec2fd02970e8f712699eed2955609b5ac239aaaab84f388a6aeef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_84e2c6d63fa5de696d750d32d7f624f6ede8c44fb8527018071e093ea6763c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84e2c6d63fa5de696d750d32d7f624f6ede8c44fb8527018071e093ea6763c83->enter($__internal_84e2c6d63fa5de696d750d32d7f624f6ede8c44fb8527018071e093ea6763c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_9eea1d9c85bec2fd02970e8f712699eed2955609b5ac239aaaab84f388a6aeef->leave($__internal_9eea1d9c85bec2fd02970e8f712699eed2955609b5ac239aaaab84f388a6aeef_prof);

        
        $__internal_84e2c6d63fa5de696d750d32d7f624f6ede8c44fb8527018071e093ea6763c83->leave($__internal_84e2c6d63fa5de696d750d32d7f624f6ede8c44fb8527018071e093ea6763c83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
