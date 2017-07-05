<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_7aebdef9ce927a8939cd3b8f325fac12291bdb8664dc5406e54ea255a47b6f12 extends Twig_Template
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
        $__internal_537c78eea7b9ac11330cf28bd16d801ad76a1f3354fc23e74ee0ee80c480a7da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_537c78eea7b9ac11330cf28bd16d801ad76a1f3354fc23e74ee0ee80c480a7da->enter($__internal_537c78eea7b9ac11330cf28bd16d801ad76a1f3354fc23e74ee0ee80c480a7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_7e2b368c5e01cd43bfa3561bd1ea131efd6923931c6409ada1a8415f7e95218a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e2b368c5e01cd43bfa3561bd1ea131efd6923931c6409ada1a8415f7e95218a->enter($__internal_7e2b368c5e01cd43bfa3561bd1ea131efd6923931c6409ada1a8415f7e95218a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_537c78eea7b9ac11330cf28bd16d801ad76a1f3354fc23e74ee0ee80c480a7da->leave($__internal_537c78eea7b9ac11330cf28bd16d801ad76a1f3354fc23e74ee0ee80c480a7da_prof);

        
        $__internal_7e2b368c5e01cd43bfa3561bd1ea131efd6923931c6409ada1a8415f7e95218a->leave($__internal_7e2b368c5e01cd43bfa3561bd1ea131efd6923931c6409ada1a8415f7e95218a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
