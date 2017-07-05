<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_d05d7017d97cf32b9c2101ba53d24f8c721d16bffdd94d7b2058e0cf3d782bbb extends Twig_Template
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
        $__internal_b283469942db2de773acf26628fa6d1b4783f10c7331fca3ffee61ded2cd7470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b283469942db2de773acf26628fa6d1b4783f10c7331fca3ffee61ded2cd7470->enter($__internal_b283469942db2de773acf26628fa6d1b4783f10c7331fca3ffee61ded2cd7470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_14f45564f213876adb25cdc0ad4b14b99a1d4367ad03f8a97c62dc35b818a65d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f45564f213876adb25cdc0ad4b14b99a1d4367ad03f8a97c62dc35b818a65d->enter($__internal_14f45564f213876adb25cdc0ad4b14b99a1d4367ad03f8a97c62dc35b818a65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b283469942db2de773acf26628fa6d1b4783f10c7331fca3ffee61ded2cd7470->leave($__internal_b283469942db2de773acf26628fa6d1b4783f10c7331fca3ffee61ded2cd7470_prof);

        
        $__internal_14f45564f213876adb25cdc0ad4b14b99a1d4367ad03f8a97c62dc35b818a65d->leave($__internal_14f45564f213876adb25cdc0ad4b14b99a1d4367ad03f8a97c62dc35b818a65d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
