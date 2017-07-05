<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8d8c4dddf62ef869d2994c323990b3bd506973152f5f81d234d8e0e794295a8f extends Twig_Template
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
        $__internal_1cdaf3f71cf505f3e0ca6a18ca36438fba24c625f5453415073d48feff7e9b5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cdaf3f71cf505f3e0ca6a18ca36438fba24c625f5453415073d48feff7e9b5f->enter($__internal_1cdaf3f71cf505f3e0ca6a18ca36438fba24c625f5453415073d48feff7e9b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_f701db8229b5c6e6e0c8528205ad0bf5b433a648cc5d725ca62cca868506540f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f701db8229b5c6e6e0c8528205ad0bf5b433a648cc5d725ca62cca868506540f->enter($__internal_f701db8229b5c6e6e0c8528205ad0bf5b433a648cc5d725ca62cca868506540f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1cdaf3f71cf505f3e0ca6a18ca36438fba24c625f5453415073d48feff7e9b5f->leave($__internal_1cdaf3f71cf505f3e0ca6a18ca36438fba24c625f5453415073d48feff7e9b5f_prof);

        
        $__internal_f701db8229b5c6e6e0c8528205ad0bf5b433a648cc5d725ca62cca868506540f->leave($__internal_f701db8229b5c6e6e0c8528205ad0bf5b433a648cc5d725ca62cca868506540f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
