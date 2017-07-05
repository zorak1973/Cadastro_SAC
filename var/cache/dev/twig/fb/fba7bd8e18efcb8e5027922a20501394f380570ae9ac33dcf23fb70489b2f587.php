<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_aa929fc9592dd64579d99f675b9278320da67392d23de516e8a3234029576776 extends Twig_Template
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
        $__internal_ab6199e899a31deb766c1fb5cedb7460d79954120e92bd44f4bd30313a859e94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab6199e899a31deb766c1fb5cedb7460d79954120e92bd44f4bd30313a859e94->enter($__internal_ab6199e899a31deb766c1fb5cedb7460d79954120e92bd44f4bd30313a859e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_847a0dd8199af304444901ed2fa0abedce7ce02c8de5e2656bb7966eab8eb375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_847a0dd8199af304444901ed2fa0abedce7ce02c8de5e2656bb7966eab8eb375->enter($__internal_847a0dd8199af304444901ed2fa0abedce7ce02c8de5e2656bb7966eab8eb375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ab6199e899a31deb766c1fb5cedb7460d79954120e92bd44f4bd30313a859e94->leave($__internal_ab6199e899a31deb766c1fb5cedb7460d79954120e92bd44f4bd30313a859e94_prof);

        
        $__internal_847a0dd8199af304444901ed2fa0abedce7ce02c8de5e2656bb7966eab8eb375->leave($__internal_847a0dd8199af304444901ed2fa0abedce7ce02c8de5e2656bb7966eab8eb375_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
