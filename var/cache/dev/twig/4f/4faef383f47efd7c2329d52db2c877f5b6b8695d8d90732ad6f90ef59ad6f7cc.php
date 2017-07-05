<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_03436badc0a70561d532fa874c83307b2400a014aa8d6dbc00ac08098ee4fc5b extends Twig_Template
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
        $__internal_ac5d6fb4bf8a55b25592634aeaa393327ef5813b2008b417d6a806c0b3dd8df7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac5d6fb4bf8a55b25592634aeaa393327ef5813b2008b417d6a806c0b3dd8df7->enter($__internal_ac5d6fb4bf8a55b25592634aeaa393327ef5813b2008b417d6a806c0b3dd8df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_89e0414904d63aa3e953f39b30040ecb9264c3214c2c409044a2da093e9d7a8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e0414904d63aa3e953f39b30040ecb9264c3214c2c409044a2da093e9d7a8e->enter($__internal_89e0414904d63aa3e953f39b30040ecb9264c3214c2c409044a2da093e9d7a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ac5d6fb4bf8a55b25592634aeaa393327ef5813b2008b417d6a806c0b3dd8df7->leave($__internal_ac5d6fb4bf8a55b25592634aeaa393327ef5813b2008b417d6a806c0b3dd8df7_prof);

        
        $__internal_89e0414904d63aa3e953f39b30040ecb9264c3214c2c409044a2da093e9d7a8e->leave($__internal_89e0414904d63aa3e953f39b30040ecb9264c3214c2c409044a2da093e9d7a8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
