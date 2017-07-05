<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_3626e00e91e5299fcfc5c5ba07b368ded3b3ed269e0c2856bc7ac38a90f5522a extends Twig_Template
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
        $__internal_43bbc43c3681a59457aa0452b088a7fb953b3a5175c8e5908c9cbd6c611b2c39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43bbc43c3681a59457aa0452b088a7fb953b3a5175c8e5908c9cbd6c611b2c39->enter($__internal_43bbc43c3681a59457aa0452b088a7fb953b3a5175c8e5908c9cbd6c611b2c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_cfbed52e59cf9a3d8e2810b3c7db858dc1bb348cd8df72a8719268910b2584e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfbed52e59cf9a3d8e2810b3c7db858dc1bb348cd8df72a8719268910b2584e3->enter($__internal_cfbed52e59cf9a3d8e2810b3c7db858dc1bb348cd8df72a8719268910b2584e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_43bbc43c3681a59457aa0452b088a7fb953b3a5175c8e5908c9cbd6c611b2c39->leave($__internal_43bbc43c3681a59457aa0452b088a7fb953b3a5175c8e5908c9cbd6c611b2c39_prof);

        
        $__internal_cfbed52e59cf9a3d8e2810b3c7db858dc1bb348cd8df72a8719268910b2584e3->leave($__internal_cfbed52e59cf9a3d8e2810b3c7db858dc1bb348cd8df72a8719268910b2584e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
