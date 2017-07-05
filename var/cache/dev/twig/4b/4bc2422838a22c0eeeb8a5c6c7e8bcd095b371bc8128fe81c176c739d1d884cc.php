<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c11fc7a586dbf876e26230cfcd5925222f77bd9ca0280593b4d64ece9b87ffa1 extends Twig_Template
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
        $__internal_9c1c0489bec180197aed9407bae8e21aa8c3e6365b0e71f38da05abea0a3a61a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c1c0489bec180197aed9407bae8e21aa8c3e6365b0e71f38da05abea0a3a61a->enter($__internal_9c1c0489bec180197aed9407bae8e21aa8c3e6365b0e71f38da05abea0a3a61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_623b62642205e945bdfe4d2ba2318f251ffcaabe2c63d3c0db7dffb703ee8ad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623b62642205e945bdfe4d2ba2318f251ffcaabe2c63d3c0db7dffb703ee8ad4->enter($__internal_623b62642205e945bdfe4d2ba2318f251ffcaabe2c63d3c0db7dffb703ee8ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9c1c0489bec180197aed9407bae8e21aa8c3e6365b0e71f38da05abea0a3a61a->leave($__internal_9c1c0489bec180197aed9407bae8e21aa8c3e6365b0e71f38da05abea0a3a61a_prof);

        
        $__internal_623b62642205e945bdfe4d2ba2318f251ffcaabe2c63d3c0db7dffb703ee8ad4->leave($__internal_623b62642205e945bdfe4d2ba2318f251ffcaabe2c63d3c0db7dffb703ee8ad4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
