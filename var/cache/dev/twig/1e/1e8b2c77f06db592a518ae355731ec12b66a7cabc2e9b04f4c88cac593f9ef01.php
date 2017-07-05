<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_cf565104853d3e362da8e1df6ac6301cb3dfd4e8c1248b77bd46c5223ff5bf1c extends Twig_Template
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
        $__internal_101c3c49f217e537e1c2e457886251a13c1a5b9ff4ab3b1443ba7bcd9c03c790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_101c3c49f217e537e1c2e457886251a13c1a5b9ff4ab3b1443ba7bcd9c03c790->enter($__internal_101c3c49f217e537e1c2e457886251a13c1a5b9ff4ab3b1443ba7bcd9c03c790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_7c51c40a77ade181347a103eb133b7463892ae06e856ab5a86f4d7a3addcd71a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c51c40a77ade181347a103eb133b7463892ae06e856ab5a86f4d7a3addcd71a->enter($__internal_7c51c40a77ade181347a103eb133b7463892ae06e856ab5a86f4d7a3addcd71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_101c3c49f217e537e1c2e457886251a13c1a5b9ff4ab3b1443ba7bcd9c03c790->leave($__internal_101c3c49f217e537e1c2e457886251a13c1a5b9ff4ab3b1443ba7bcd9c03c790_prof);

        
        $__internal_7c51c40a77ade181347a103eb133b7463892ae06e856ab5a86f4d7a3addcd71a->leave($__internal_7c51c40a77ade181347a103eb133b7463892ae06e856ab5a86f4d7a3addcd71a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
