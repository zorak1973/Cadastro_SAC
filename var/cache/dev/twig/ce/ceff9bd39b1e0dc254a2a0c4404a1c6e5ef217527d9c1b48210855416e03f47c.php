<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ce7de9709547f06f9f7b4f671769c4eb0442ac96c5f2dacf012d10b2daff0557 extends Twig_Template
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
        $__internal_15fc3cd9487f4a940aee0cf47fc7a885b4f32780630301f370218ababa2281fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15fc3cd9487f4a940aee0cf47fc7a885b4f32780630301f370218ababa2281fd->enter($__internal_15fc3cd9487f4a940aee0cf47fc7a885b4f32780630301f370218ababa2281fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_4dca4d158ab2aa9bcdfc48fa08a0fa6ad085fce8162e214f4f1591f9aaafa84c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dca4d158ab2aa9bcdfc48fa08a0fa6ad085fce8162e214f4f1591f9aaafa84c->enter($__internal_4dca4d158ab2aa9bcdfc48fa08a0fa6ad085fce8162e214f4f1591f9aaafa84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_15fc3cd9487f4a940aee0cf47fc7a885b4f32780630301f370218ababa2281fd->leave($__internal_15fc3cd9487f4a940aee0cf47fc7a885b4f32780630301f370218ababa2281fd_prof);

        
        $__internal_4dca4d158ab2aa9bcdfc48fa08a0fa6ad085fce8162e214f4f1591f9aaafa84c->leave($__internal_4dca4d158ab2aa9bcdfc48fa08a0fa6ad085fce8162e214f4f1591f9aaafa84c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
