<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_c84e351aa5e374f3e15bfd64e1b154404e12514e7d21a43e146440b44c40e577 extends Twig_Template
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
        $__internal_686b3fff444cc20b1b7c18aefd0de42369a558c7df19245066021df0fffefde1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_686b3fff444cc20b1b7c18aefd0de42369a558c7df19245066021df0fffefde1->enter($__internal_686b3fff444cc20b1b7c18aefd0de42369a558c7df19245066021df0fffefde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_e8d07e30c205ca762ce667f64dcb60e9cfa2ca232d7b5f99f575901e0e253797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8d07e30c205ca762ce667f64dcb60e9cfa2ca232d7b5f99f575901e0e253797->enter($__internal_e8d07e30c205ca762ce667f64dcb60e9cfa2ca232d7b5f99f575901e0e253797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_686b3fff444cc20b1b7c18aefd0de42369a558c7df19245066021df0fffefde1->leave($__internal_686b3fff444cc20b1b7c18aefd0de42369a558c7df19245066021df0fffefde1_prof);

        
        $__internal_e8d07e30c205ca762ce667f64dcb60e9cfa2ca232d7b5f99f575901e0e253797->leave($__internal_e8d07e30c205ca762ce667f64dcb60e9cfa2ca232d7b5f99f575901e0e253797_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
