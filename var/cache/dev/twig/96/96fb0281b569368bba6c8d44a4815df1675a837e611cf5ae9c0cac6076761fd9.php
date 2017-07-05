<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_154bfcf961d95bfb30a1e0f69e092ef38166bbd8c9be08084b2a3625f491a5db extends Twig_Template
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
        $__internal_1c3f2a92ba0a3e497116118b0dfe9e3ace34746f94d432d26f7baeabcd0b0a32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c3f2a92ba0a3e497116118b0dfe9e3ace34746f94d432d26f7baeabcd0b0a32->enter($__internal_1c3f2a92ba0a3e497116118b0dfe9e3ace34746f94d432d26f7baeabcd0b0a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_b0f66077a26e0e3eca7022fdca2d51c1b94f991a376ccd58a16613a9f9ec247c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f66077a26e0e3eca7022fdca2d51c1b94f991a376ccd58a16613a9f9ec247c->enter($__internal_b0f66077a26e0e3eca7022fdca2d51c1b94f991a376ccd58a16613a9f9ec247c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1c3f2a92ba0a3e497116118b0dfe9e3ace34746f94d432d26f7baeabcd0b0a32->leave($__internal_1c3f2a92ba0a3e497116118b0dfe9e3ace34746f94d432d26f7baeabcd0b0a32_prof);

        
        $__internal_b0f66077a26e0e3eca7022fdca2d51c1b94f991a376ccd58a16613a9f9ec247c->leave($__internal_b0f66077a26e0e3eca7022fdca2d51c1b94f991a376ccd58a16613a9f9ec247c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
