<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_753cf2bfaf01ee5352343cb0124a53b8af2da8365bfa8b18c3438b0d991da2b0 extends Twig_Template
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
        $__internal_b5f5e1d530a2d4302524d2e19947f519f4ff0627f7b1ce3075a786cbdec30b06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5f5e1d530a2d4302524d2e19947f519f4ff0627f7b1ce3075a786cbdec30b06->enter($__internal_b5f5e1d530a2d4302524d2e19947f519f4ff0627f7b1ce3075a786cbdec30b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_92469ff2229f6c51201923929b66e7ea575f22acd5c9a4c41ba84948b61ae262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92469ff2229f6c51201923929b66e7ea575f22acd5c9a4c41ba84948b61ae262->enter($__internal_92469ff2229f6c51201923929b66e7ea575f22acd5c9a4c41ba84948b61ae262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_b5f5e1d530a2d4302524d2e19947f519f4ff0627f7b1ce3075a786cbdec30b06->leave($__internal_b5f5e1d530a2d4302524d2e19947f519f4ff0627f7b1ce3075a786cbdec30b06_prof);

        
        $__internal_92469ff2229f6c51201923929b66e7ea575f22acd5c9a4c41ba84948b61ae262->leave($__internal_92469ff2229f6c51201923929b66e7ea575f22acd5c9a4c41ba84948b61ae262_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
