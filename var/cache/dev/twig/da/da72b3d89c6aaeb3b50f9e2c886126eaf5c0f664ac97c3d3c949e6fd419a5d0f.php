<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_ab735ff90b6a82f98974fd4cea0275ff34a15da97162c4df63d8275af7e365d4 extends Twig_Template
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
        $__internal_b022876884e331553eacf80010aab81529ee89b6014b6a306f051d4459fa1231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b022876884e331553eacf80010aab81529ee89b6014b6a306f051d4459fa1231->enter($__internal_b022876884e331553eacf80010aab81529ee89b6014b6a306f051d4459fa1231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_9fe918f0aae8834a35ae977d3ab2da4ddbe6bd11b64edec6a28ac11f0bc89798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe918f0aae8834a35ae977d3ab2da4ddbe6bd11b64edec6a28ac11f0bc89798->enter($__internal_9fe918f0aae8834a35ae977d3ab2da4ddbe6bd11b64edec6a28ac11f0bc89798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_b022876884e331553eacf80010aab81529ee89b6014b6a306f051d4459fa1231->leave($__internal_b022876884e331553eacf80010aab81529ee89b6014b6a306f051d4459fa1231_prof);

        
        $__internal_9fe918f0aae8834a35ae977d3ab2da4ddbe6bd11b64edec6a28ac11f0bc89798->leave($__internal_9fe918f0aae8834a35ae977d3ab2da4ddbe6bd11b64edec6a28ac11f0bc89798_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
