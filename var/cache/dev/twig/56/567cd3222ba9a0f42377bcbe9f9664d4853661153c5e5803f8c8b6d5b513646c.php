<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_082deb79fa712ca4b9aafd9ff4abfccfdfc6cbf3e7e08e8b3441da93976f75fc extends Twig_Template
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
        $__internal_a48a759e1f9e0caa212ed1f083d168c2833aa30e3641f7188353cb3d49ff882a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a48a759e1f9e0caa212ed1f083d168c2833aa30e3641f7188353cb3d49ff882a->enter($__internal_a48a759e1f9e0caa212ed1f083d168c2833aa30e3641f7188353cb3d49ff882a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_eedaef0b4f500c9397ef0ba152785b0924c8dced663dbc6a5f231ec9c24d3d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eedaef0b4f500c9397ef0ba152785b0924c8dced663dbc6a5f231ec9c24d3d8a->enter($__internal_eedaef0b4f500c9397ef0ba152785b0924c8dced663dbc6a5f231ec9c24d3d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_a48a759e1f9e0caa212ed1f083d168c2833aa30e3641f7188353cb3d49ff882a->leave($__internal_a48a759e1f9e0caa212ed1f083d168c2833aa30e3641f7188353cb3d49ff882a_prof);

        
        $__internal_eedaef0b4f500c9397ef0ba152785b0924c8dced663dbc6a5f231ec9c24d3d8a->leave($__internal_eedaef0b4f500c9397ef0ba152785b0924c8dced663dbc6a5f231ec9c24d3d8a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
