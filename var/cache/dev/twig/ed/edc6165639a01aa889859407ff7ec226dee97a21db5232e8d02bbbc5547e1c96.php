<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_27743deb36239a3dd2f084992684dd275890f7d272245c485a7a630951077629 extends Twig_Template
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
        $__internal_ad9e532a54037feea5e0c4ec3773ad788469a83ba663a864bf6aa41354ac7465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad9e532a54037feea5e0c4ec3773ad788469a83ba663a864bf6aa41354ac7465->enter($__internal_ad9e532a54037feea5e0c4ec3773ad788469a83ba663a864bf6aa41354ac7465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_eae12a6cbc5bfdc82d64c456efb0d5a607d1b08020605e72cdb47a58aa9e7017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae12a6cbc5bfdc82d64c456efb0d5a607d1b08020605e72cdb47a58aa9e7017->enter($__internal_eae12a6cbc5bfdc82d64c456efb0d5a607d1b08020605e72cdb47a58aa9e7017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_ad9e532a54037feea5e0c4ec3773ad788469a83ba663a864bf6aa41354ac7465->leave($__internal_ad9e532a54037feea5e0c4ec3773ad788469a83ba663a864bf6aa41354ac7465_prof);

        
        $__internal_eae12a6cbc5bfdc82d64c456efb0d5a607d1b08020605e72cdb47a58aa9e7017->leave($__internal_eae12a6cbc5bfdc82d64c456efb0d5a607d1b08020605e72cdb47a58aa9e7017_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
