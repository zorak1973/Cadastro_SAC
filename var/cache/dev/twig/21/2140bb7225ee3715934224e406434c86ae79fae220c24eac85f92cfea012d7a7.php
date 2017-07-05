<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2c84c05a26f06532e14aab2773edb4e5744686ca504078e088de660bc016be7b extends Twig_Template
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
        $__internal_eedee7b161153d11be6ceca16657dea7112506c05485fe874122c92d9f9cbe24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eedee7b161153d11be6ceca16657dea7112506c05485fe874122c92d9f9cbe24->enter($__internal_eedee7b161153d11be6ceca16657dea7112506c05485fe874122c92d9f9cbe24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_f29c6f9abd40765b10f288a035677d835f8da931a70427f058ebfa2c509a8b7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29c6f9abd40765b10f288a035677d835f8da931a70427f058ebfa2c509a8b7f->enter($__internal_f29c6f9abd40765b10f288a035677d835f8da931a70427f058ebfa2c509a8b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_eedee7b161153d11be6ceca16657dea7112506c05485fe874122c92d9f9cbe24->leave($__internal_eedee7b161153d11be6ceca16657dea7112506c05485fe874122c92d9f9cbe24_prof);

        
        $__internal_f29c6f9abd40765b10f288a035677d835f8da931a70427f058ebfa2c509a8b7f->leave($__internal_f29c6f9abd40765b10f288a035677d835f8da931a70427f058ebfa2c509a8b7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
