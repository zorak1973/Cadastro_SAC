<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_381585099cc46163e8d761645ec34327dd6a65e4b4b091ed503eee5277016c19 extends Twig_Template
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
        $__internal_1c3fbc248bec4e07102005f1338f411c86c9a1f351883ea84ef733a65ff9768c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c3fbc248bec4e07102005f1338f411c86c9a1f351883ea84ef733a65ff9768c->enter($__internal_1c3fbc248bec4e07102005f1338f411c86c9a1f351883ea84ef733a65ff9768c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_f452bdab3b91c6a3d012fe30f25bdda52442fc8ff46b33444f90ea94c827e38e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f452bdab3b91c6a3d012fe30f25bdda52442fc8ff46b33444f90ea94c827e38e->enter($__internal_f452bdab3b91c6a3d012fe30f25bdda52442fc8ff46b33444f90ea94c827e38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_1c3fbc248bec4e07102005f1338f411c86c9a1f351883ea84ef733a65ff9768c->leave($__internal_1c3fbc248bec4e07102005f1338f411c86c9a1f351883ea84ef733a65ff9768c_prof);

        
        $__internal_f452bdab3b91c6a3d012fe30f25bdda52442fc8ff46b33444f90ea94c827e38e->leave($__internal_f452bdab3b91c6a3d012fe30f25bdda52442fc8ff46b33444f90ea94c827e38e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
