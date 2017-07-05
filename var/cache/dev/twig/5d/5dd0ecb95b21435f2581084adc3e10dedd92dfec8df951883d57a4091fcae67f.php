<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_096519f019be2e523d200230e72e3b63963cb2a1bf0270b993e1ad39c702aedb extends Twig_Template
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
        $__internal_bb19cbc329f3fd20cca68d07c164880614c58279cabb8e798f4ea665ade08de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb19cbc329f3fd20cca68d07c164880614c58279cabb8e798f4ea665ade08de1->enter($__internal_bb19cbc329f3fd20cca68d07c164880614c58279cabb8e798f4ea665ade08de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_49a8b1446061ad3ac8501bb3b584f8afda6a1c1d8ae484211a7dcdf6adb1b829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a8b1446061ad3ac8501bb3b584f8afda6a1c1d8ae484211a7dcdf6adb1b829->enter($__internal_49a8b1446061ad3ac8501bb3b584f8afda6a1c1d8ae484211a7dcdf6adb1b829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_bb19cbc329f3fd20cca68d07c164880614c58279cabb8e798f4ea665ade08de1->leave($__internal_bb19cbc329f3fd20cca68d07c164880614c58279cabb8e798f4ea665ade08de1_prof);

        
        $__internal_49a8b1446061ad3ac8501bb3b584f8afda6a1c1d8ae484211a7dcdf6adb1b829->leave($__internal_49a8b1446061ad3ac8501bb3b584f8afda6a1c1d8ae484211a7dcdf6adb1b829_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
