<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_571d32a3f90b3150e1e8cea2fad47bb1751258f4b60f54ebd870d00f06c0fd50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad111999b39df27f497a479186185cab02b26a59bdc0cd1d907200a813538895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad111999b39df27f497a479186185cab02b26a59bdc0cd1d907200a813538895->enter($__internal_ad111999b39df27f497a479186185cab02b26a59bdc0cd1d907200a813538895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_8b782b3077ed11ad9718bbc38970c9893f79056435f81b31beabf3067e603147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b782b3077ed11ad9718bbc38970c9893f79056435f81b31beabf3067e603147->enter($__internal_8b782b3077ed11ad9718bbc38970c9893f79056435f81b31beabf3067e603147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ad111999b39df27f497a479186185cab02b26a59bdc0cd1d907200a813538895->leave($__internal_ad111999b39df27f497a479186185cab02b26a59bdc0cd1d907200a813538895_prof);

        
        $__internal_8b782b3077ed11ad9718bbc38970c9893f79056435f81b31beabf3067e603147->leave($__internal_8b782b3077ed11ad9718bbc38970c9893f79056435f81b31beabf3067e603147_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b3c138514b2a4015b8959ce13cafb68ca8e17b8a70e2dde9c2fa288b45744043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3c138514b2a4015b8959ce13cafb68ca8e17b8a70e2dde9c2fa288b45744043->enter($__internal_b3c138514b2a4015b8959ce13cafb68ca8e17b8a70e2dde9c2fa288b45744043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_72b0784f70159b8e980ca4aa3b448f5c4f124b0bf60025bdd0ef32e0ebc8d1ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b0784f70159b8e980ca4aa3b448f5c4f124b0bf60025bdd0ef32e0ebc8d1ea->enter($__internal_72b0784f70159b8e980ca4aa3b448f5c4f124b0bf60025bdd0ef32e0ebc8d1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_72b0784f70159b8e980ca4aa3b448f5c4f124b0bf60025bdd0ef32e0ebc8d1ea->leave($__internal_72b0784f70159b8e980ca4aa3b448f5c4f124b0bf60025bdd0ef32e0ebc8d1ea_prof);

        
        $__internal_b3c138514b2a4015b8959ce13cafb68ca8e17b8a70e2dde9c2fa288b45744043->leave($__internal_b3c138514b2a4015b8959ce13cafb68ca8e17b8a70e2dde9c2fa288b45744043_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
