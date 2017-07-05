<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e2b4a452d978b20e5cb937e1cf95bbf09d10f717cd995aaa6e4cf0b5a05f8742 extends Twig_Template
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
        $__internal_a4187aa494193e57dd1c8bfc02296a40c98355b3339297db4f6ecf4b788e34cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4187aa494193e57dd1c8bfc02296a40c98355b3339297db4f6ecf4b788e34cf->enter($__internal_a4187aa494193e57dd1c8bfc02296a40c98355b3339297db4f6ecf4b788e34cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_4f48c8aa9472a7859299aa8e4754f957f67d46da23aeaa68024a0acb9d60bfa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f48c8aa9472a7859299aa8e4754f957f67d46da23aeaa68024a0acb9d60bfa6->enter($__internal_4f48c8aa9472a7859299aa8e4754f957f67d46da23aeaa68024a0acb9d60bfa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a4187aa494193e57dd1c8bfc02296a40c98355b3339297db4f6ecf4b788e34cf->leave($__internal_a4187aa494193e57dd1c8bfc02296a40c98355b3339297db4f6ecf4b788e34cf_prof);

        
        $__internal_4f48c8aa9472a7859299aa8e4754f957f67d46da23aeaa68024a0acb9d60bfa6->leave($__internal_4f48c8aa9472a7859299aa8e4754f957f67d46da23aeaa68024a0acb9d60bfa6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
