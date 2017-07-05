<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_44af8426003115707fadb05c76bacb8e656ddda0c339c756015df583b483bc16 extends Twig_Template
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
        $__internal_96cf05a8e205837e990d9ffb4a79f164715ee4fb16e506ee1c3fa898b285e68f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96cf05a8e205837e990d9ffb4a79f164715ee4fb16e506ee1c3fa898b285e68f->enter($__internal_96cf05a8e205837e990d9ffb4a79f164715ee4fb16e506ee1c3fa898b285e68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_00f3309d26cf50703cab3ae9a85502bc46c5322fdc616d028d425116e8c098c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00f3309d26cf50703cab3ae9a85502bc46c5322fdc616d028d425116e8c098c4->enter($__internal_00f3309d26cf50703cab3ae9a85502bc46c5322fdc616d028d425116e8c098c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_96cf05a8e205837e990d9ffb4a79f164715ee4fb16e506ee1c3fa898b285e68f->leave($__internal_96cf05a8e205837e990d9ffb4a79f164715ee4fb16e506ee1c3fa898b285e68f_prof);

        
        $__internal_00f3309d26cf50703cab3ae9a85502bc46c5322fdc616d028d425116e8c098c4->leave($__internal_00f3309d26cf50703cab3ae9a85502bc46c5322fdc616d028d425116e8c098c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
