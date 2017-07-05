<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_97a2cf30224c33471c303faa6d2b67f90465a400d1b56b5af70d90660d4b6f71 extends Twig_Template
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
        $__internal_261abf33b361d7a4f394864f7a0a92d3cc6d944ef2f70185ba7b71cdc8dabdbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_261abf33b361d7a4f394864f7a0a92d3cc6d944ef2f70185ba7b71cdc8dabdbf->enter($__internal_261abf33b361d7a4f394864f7a0a92d3cc6d944ef2f70185ba7b71cdc8dabdbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_6fdc19939d9a5372b19fad47a2c5d3bf7dd5ca2ed8eea98a885565ff72410525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fdc19939d9a5372b19fad47a2c5d3bf7dd5ca2ed8eea98a885565ff72410525->enter($__internal_6fdc19939d9a5372b19fad47a2c5d3bf7dd5ca2ed8eea98a885565ff72410525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_261abf33b361d7a4f394864f7a0a92d3cc6d944ef2f70185ba7b71cdc8dabdbf->leave($__internal_261abf33b361d7a4f394864f7a0a92d3cc6d944ef2f70185ba7b71cdc8dabdbf_prof);

        
        $__internal_6fdc19939d9a5372b19fad47a2c5d3bf7dd5ca2ed8eea98a885565ff72410525->leave($__internal_6fdc19939d9a5372b19fad47a2c5d3bf7dd5ca2ed8eea98a885565ff72410525_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
