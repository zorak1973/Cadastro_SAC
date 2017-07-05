<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_37a263ddde921e8a5fdd88f4a393597e5e58e1b53f453a1f1313c24db1b50e0e extends Twig_Template
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
        $__internal_83ee3825332c5c82dadf948ff28f3a8a97c1e13487b0be9c1e4613c9aa867bf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83ee3825332c5c82dadf948ff28f3a8a97c1e13487b0be9c1e4613c9aa867bf3->enter($__internal_83ee3825332c5c82dadf948ff28f3a8a97c1e13487b0be9c1e4613c9aa867bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_183ffe080ed61888cd3f9078e2c7f83d742c835e264131db64db73651fcad379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_183ffe080ed61888cd3f9078e2c7f83d742c835e264131db64db73651fcad379->enter($__internal_183ffe080ed61888cd3f9078e2c7f83d742c835e264131db64db73651fcad379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_83ee3825332c5c82dadf948ff28f3a8a97c1e13487b0be9c1e4613c9aa867bf3->leave($__internal_83ee3825332c5c82dadf948ff28f3a8a97c1e13487b0be9c1e4613c9aa867bf3_prof);

        
        $__internal_183ffe080ed61888cd3f9078e2c7f83d742c835e264131db64db73651fcad379->leave($__internal_183ffe080ed61888cd3f9078e2c7f83d742c835e264131db64db73651fcad379_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
