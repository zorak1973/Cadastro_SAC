<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_2c0be5c3e7862e31f6a2e89741eae269f17b15ad9bd4113487a933f88b16b020 extends Twig_Template
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
        $__internal_8586b3f1da984e88e285599169999213b86c6d41bd70165512f6d153f622bc0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8586b3f1da984e88e285599169999213b86c6d41bd70165512f6d153f622bc0f->enter($__internal_8586b3f1da984e88e285599169999213b86c6d41bd70165512f6d153f622bc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_d3d7ee93400886538b27e9d7f1c88e2297e176f89a01c4ac6e521a5f68c42fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d7ee93400886538b27e9d7f1c88e2297e176f89a01c4ac6e521a5f68c42fac->enter($__internal_d3d7ee93400886538b27e9d7f1c88e2297e176f89a01c4ac6e521a5f68c42fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8586b3f1da984e88e285599169999213b86c6d41bd70165512f6d153f622bc0f->leave($__internal_8586b3f1da984e88e285599169999213b86c6d41bd70165512f6d153f622bc0f_prof);

        
        $__internal_d3d7ee93400886538b27e9d7f1c88e2297e176f89a01c4ac6e521a5f68c42fac->leave($__internal_d3d7ee93400886538b27e9d7f1c88e2297e176f89a01c4ac6e521a5f68c42fac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
