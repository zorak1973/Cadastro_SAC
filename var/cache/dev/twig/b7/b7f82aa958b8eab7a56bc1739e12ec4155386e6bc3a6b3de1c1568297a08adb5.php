<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_65e5e40c9eee2f6cfd960bce89f46824d6c8622f6b3bef4925d043accb1eee1f extends Twig_Template
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
        $__internal_2edcdcd81118688584d01cc0a0b01f93c614445de59a2dbc0c85e7b3a1803754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2edcdcd81118688584d01cc0a0b01f93c614445de59a2dbc0c85e7b3a1803754->enter($__internal_2edcdcd81118688584d01cc0a0b01f93c614445de59a2dbc0c85e7b3a1803754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_ca7291464d8485dfe66625f178cff44386805ea2ba60dafd965570e540a5cd45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7291464d8485dfe66625f178cff44386805ea2ba60dafd965570e540a5cd45->enter($__internal_ca7291464d8485dfe66625f178cff44386805ea2ba60dafd965570e540a5cd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_2edcdcd81118688584d01cc0a0b01f93c614445de59a2dbc0c85e7b3a1803754->leave($__internal_2edcdcd81118688584d01cc0a0b01f93c614445de59a2dbc0c85e7b3a1803754_prof);

        
        $__internal_ca7291464d8485dfe66625f178cff44386805ea2ba60dafd965570e540a5cd45->leave($__internal_ca7291464d8485dfe66625f178cff44386805ea2ba60dafd965570e540a5cd45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
