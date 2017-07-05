<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_16920e322050e161ee5f9164c4449d2abf7105e13fa15a48aa83126d7b6b8af3 extends Twig_Template
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
        $__internal_bfc5de63e339b19c21eac491acb19d545b1d67aa326259bfd71404bcb6117705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfc5de63e339b19c21eac491acb19d545b1d67aa326259bfd71404bcb6117705->enter($__internal_bfc5de63e339b19c21eac491acb19d545b1d67aa326259bfd71404bcb6117705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_aca86950d52e7e28c31382eb5afeed40a6aaf73f780b303d58e69c7393b8b2d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca86950d52e7e28c31382eb5afeed40a6aaf73f780b303d58e69c7393b8b2d8->enter($__internal_aca86950d52e7e28c31382eb5afeed40a6aaf73f780b303d58e69c7393b8b2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_bfc5de63e339b19c21eac491acb19d545b1d67aa326259bfd71404bcb6117705->leave($__internal_bfc5de63e339b19c21eac491acb19d545b1d67aa326259bfd71404bcb6117705_prof);

        
        $__internal_aca86950d52e7e28c31382eb5afeed40a6aaf73f780b303d58e69c7393b8b2d8->leave($__internal_aca86950d52e7e28c31382eb5afeed40a6aaf73f780b303d58e69c7393b8b2d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
