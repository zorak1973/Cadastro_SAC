<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b8d86fcca991f3779369b6ecf9231428b150decb89195f0813f99e57f2bdc5b4 extends Twig_Template
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
        $__internal_8f701e286e205a3353c09443582e3be3504819b25a1bc6c747e9b84b81ba32ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f701e286e205a3353c09443582e3be3504819b25a1bc6c747e9b84b81ba32ae->enter($__internal_8f701e286e205a3353c09443582e3be3504819b25a1bc6c747e9b84b81ba32ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_6ad61ae7cf9c54b0df05d1112219d423e4c0b4249bd677ed8979681267669614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad61ae7cf9c54b0df05d1112219d423e4c0b4249bd677ed8979681267669614->enter($__internal_6ad61ae7cf9c54b0df05d1112219d423e4c0b4249bd677ed8979681267669614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_8f701e286e205a3353c09443582e3be3504819b25a1bc6c747e9b84b81ba32ae->leave($__internal_8f701e286e205a3353c09443582e3be3504819b25a1bc6c747e9b84b81ba32ae_prof);

        
        $__internal_6ad61ae7cf9c54b0df05d1112219d423e4c0b4249bd677ed8979681267669614->leave($__internal_6ad61ae7cf9c54b0df05d1112219d423e4c0b4249bd677ed8979681267669614_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
