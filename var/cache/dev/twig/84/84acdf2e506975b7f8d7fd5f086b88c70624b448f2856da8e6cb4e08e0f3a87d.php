<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_1beef7ac4e60b87bfa3cba3e002b7717eb8f38a6734a285ff9b652141963c1df extends Twig_Template
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
        $__internal_74eb3f1e9d13a1998e59bce230f7be4c6034fe2b61038cfbfdb641a1a26b1627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74eb3f1e9d13a1998e59bce230f7be4c6034fe2b61038cfbfdb641a1a26b1627->enter($__internal_74eb3f1e9d13a1998e59bce230f7be4c6034fe2b61038cfbfdb641a1a26b1627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_c09eeb258a5028e798c4e54c0430fc0335403e1f983fcb5fb112c97feccf1d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09eeb258a5028e798c4e54c0430fc0335403e1f983fcb5fb112c97feccf1d91->enter($__internal_c09eeb258a5028e798c4e54c0430fc0335403e1f983fcb5fb112c97feccf1d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_74eb3f1e9d13a1998e59bce230f7be4c6034fe2b61038cfbfdb641a1a26b1627->leave($__internal_74eb3f1e9d13a1998e59bce230f7be4c6034fe2b61038cfbfdb641a1a26b1627_prof);

        
        $__internal_c09eeb258a5028e798c4e54c0430fc0335403e1f983fcb5fb112c97feccf1d91->leave($__internal_c09eeb258a5028e798c4e54c0430fc0335403e1f983fcb5fb112c97feccf1d91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
