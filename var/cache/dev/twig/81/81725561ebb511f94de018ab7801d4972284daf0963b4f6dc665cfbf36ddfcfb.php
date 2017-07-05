<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_e847dad80492d4e9b078cdc5b7c3417466fb72183cacfe4891d100a5c90ab091 extends Twig_Template
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
        $__internal_83cd927b64be5cdc2ecf1e514116563fa526636fca095fd9f4bfa4d43475e85f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83cd927b64be5cdc2ecf1e514116563fa526636fca095fd9f4bfa4d43475e85f->enter($__internal_83cd927b64be5cdc2ecf1e514116563fa526636fca095fd9f4bfa4d43475e85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_1352bf6a6dff1b4bd75d0bcf58684ac6f6ce09a1e273d424e00e71bc659bafed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1352bf6a6dff1b4bd75d0bcf58684ac6f6ce09a1e273d424e00e71bc659bafed->enter($__internal_1352bf6a6dff1b4bd75d0bcf58684ac6f6ce09a1e273d424e00e71bc659bafed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_83cd927b64be5cdc2ecf1e514116563fa526636fca095fd9f4bfa4d43475e85f->leave($__internal_83cd927b64be5cdc2ecf1e514116563fa526636fca095fd9f4bfa4d43475e85f_prof);

        
        $__internal_1352bf6a6dff1b4bd75d0bcf58684ac6f6ce09a1e273d424e00e71bc659bafed->leave($__internal_1352bf6a6dff1b4bd75d0bcf58684ac6f6ce09a1e273d424e00e71bc659bafed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
