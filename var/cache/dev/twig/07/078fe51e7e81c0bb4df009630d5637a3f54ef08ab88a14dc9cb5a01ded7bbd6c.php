<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_fdd456654328bcc9a50e81d2e926a052e9c6facb1481352f20b2486783d24c79 extends Twig_Template
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
        $__internal_51ab6348ee634bb9c8d3cbffdd7415a3aeea8b11f992a004f370a34a76acac77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51ab6348ee634bb9c8d3cbffdd7415a3aeea8b11f992a004f370a34a76acac77->enter($__internal_51ab6348ee634bb9c8d3cbffdd7415a3aeea8b11f992a004f370a34a76acac77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_edf2adba858d95c871f4d8d9643ae19666a85d94b2731410ea4c8eae706b37a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edf2adba858d95c871f4d8d9643ae19666a85d94b2731410ea4c8eae706b37a7->enter($__internal_edf2adba858d95c871f4d8d9643ae19666a85d94b2731410ea4c8eae706b37a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_51ab6348ee634bb9c8d3cbffdd7415a3aeea8b11f992a004f370a34a76acac77->leave($__internal_51ab6348ee634bb9c8d3cbffdd7415a3aeea8b11f992a004f370a34a76acac77_prof);

        
        $__internal_edf2adba858d95c871f4d8d9643ae19666a85d94b2731410ea4c8eae706b37a7->leave($__internal_edf2adba858d95c871f4d8d9643ae19666a85d94b2731410ea4c8eae706b37a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
