<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_72d193c47e5cefa1606e81f54bef72f46f56ae21b5d9056e441f391d612caea1 extends Twig_Template
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
        $__internal_41e6848d5edd7b0406ecd4299041116f2c7250402d456a6e071cb244235f6b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41e6848d5edd7b0406ecd4299041116f2c7250402d456a6e071cb244235f6b9e->enter($__internal_41e6848d5edd7b0406ecd4299041116f2c7250402d456a6e071cb244235f6b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_cd1852bfb7a40d49e6368a308111cc676ed22d5c2338096994554153b63181ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1852bfb7a40d49e6368a308111cc676ed22d5c2338096994554153b63181ac->enter($__internal_cd1852bfb7a40d49e6368a308111cc676ed22d5c2338096994554153b63181ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_41e6848d5edd7b0406ecd4299041116f2c7250402d456a6e071cb244235f6b9e->leave($__internal_41e6848d5edd7b0406ecd4299041116f2c7250402d456a6e071cb244235f6b9e_prof);

        
        $__internal_cd1852bfb7a40d49e6368a308111cc676ed22d5c2338096994554153b63181ac->leave($__internal_cd1852bfb7a40d49e6368a308111cc676ed22d5c2338096994554153b63181ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
