<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_db32f6deb84c30cc95ee6ffe0cc67bc792fccd95b9584b77c7255f4c3c87f814 extends Twig_Template
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
        $__internal_4eee6b8b61cde30695cc439f627fe863569531d59f10d5a54958cc0d3c091304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eee6b8b61cde30695cc439f627fe863569531d59f10d5a54958cc0d3c091304->enter($__internal_4eee6b8b61cde30695cc439f627fe863569531d59f10d5a54958cc0d3c091304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_a2556f1694aa51f062637c6945b9159b4ac2e98deed31acd70d2df3d2e39095a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2556f1694aa51f062637c6945b9159b4ac2e98deed31acd70d2df3d2e39095a->enter($__internal_a2556f1694aa51f062637c6945b9159b4ac2e98deed31acd70d2df3d2e39095a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4eee6b8b61cde30695cc439f627fe863569531d59f10d5a54958cc0d3c091304->leave($__internal_4eee6b8b61cde30695cc439f627fe863569531d59f10d5a54958cc0d3c091304_prof);

        
        $__internal_a2556f1694aa51f062637c6945b9159b4ac2e98deed31acd70d2df3d2e39095a->leave($__internal_a2556f1694aa51f062637c6945b9159b4ac2e98deed31acd70d2df3d2e39095a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
