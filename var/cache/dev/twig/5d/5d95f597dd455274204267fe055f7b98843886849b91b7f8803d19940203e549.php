<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_cb2741ce1d0bc887f0b9b3a57e95d872b19451ad5ae51e2a551b50665f6bfec3 extends Twig_Template
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
        $__internal_a22f2349fc5cd0cf4fa1dd23289644f95146db856af2682bd5306273f6592874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a22f2349fc5cd0cf4fa1dd23289644f95146db856af2682bd5306273f6592874->enter($__internal_a22f2349fc5cd0cf4fa1dd23289644f95146db856af2682bd5306273f6592874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_f9a3b25c4b22a33a9c20d3f90c3f4f95b0a35da1400ef86814c357cfe3e63cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a3b25c4b22a33a9c20d3f90c3f4f95b0a35da1400ef86814c357cfe3e63cdd->enter($__internal_f9a3b25c4b22a33a9c20d3f90c3f4f95b0a35da1400ef86814c357cfe3e63cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_a22f2349fc5cd0cf4fa1dd23289644f95146db856af2682bd5306273f6592874->leave($__internal_a22f2349fc5cd0cf4fa1dd23289644f95146db856af2682bd5306273f6592874_prof);

        
        $__internal_f9a3b25c4b22a33a9c20d3f90c3f4f95b0a35da1400ef86814c357cfe3e63cdd->leave($__internal_f9a3b25c4b22a33a9c20d3f90c3f4f95b0a35da1400ef86814c357cfe3e63cdd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
