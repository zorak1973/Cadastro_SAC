<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_ce2226f75a7dcd49a346d2df79c5f30293e21aab88b682389680deab5d2126fe extends Twig_Template
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
        $__internal_88b82c010139945d7b6121d0f93e50800fee97fc9e05ae1545e873ae2cd6a2a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88b82c010139945d7b6121d0f93e50800fee97fc9e05ae1545e873ae2cd6a2a9->enter($__internal_88b82c010139945d7b6121d0f93e50800fee97fc9e05ae1545e873ae2cd6a2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_58df0886a5ba37edd6a22cc317d8396636db48c2d57d02fdc9510dadeb94d3d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58df0886a5ba37edd6a22cc317d8396636db48c2d57d02fdc9510dadeb94d3d1->enter($__internal_58df0886a5ba37edd6a22cc317d8396636db48c2d57d02fdc9510dadeb94d3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_88b82c010139945d7b6121d0f93e50800fee97fc9e05ae1545e873ae2cd6a2a9->leave($__internal_88b82c010139945d7b6121d0f93e50800fee97fc9e05ae1545e873ae2cd6a2a9_prof);

        
        $__internal_58df0886a5ba37edd6a22cc317d8396636db48c2d57d02fdc9510dadeb94d3d1->leave($__internal_58df0886a5ba37edd6a22cc317d8396636db48c2d57d02fdc9510dadeb94d3d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
