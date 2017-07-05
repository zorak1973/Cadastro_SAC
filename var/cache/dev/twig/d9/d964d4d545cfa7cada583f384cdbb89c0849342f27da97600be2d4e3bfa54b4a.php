<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_a1bbc12e41a93db2a2ed53f0c70e58f2e8bbc816d75e3907bc8ebe3780edf7d8 extends Twig_Template
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
        $__internal_9fdf4676cacec117aa7dcab2b86a4cade14cca0d7f202807a103ab7b1e0af6d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fdf4676cacec117aa7dcab2b86a4cade14cca0d7f202807a103ab7b1e0af6d4->enter($__internal_9fdf4676cacec117aa7dcab2b86a4cade14cca0d7f202807a103ab7b1e0af6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_351b5750f1e2ac34018b9ac5db9a720b2d442b3039c7811ad3e26ab5a8938cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351b5750f1e2ac34018b9ac5db9a720b2d442b3039c7811ad3e26ab5a8938cd4->enter($__internal_351b5750f1e2ac34018b9ac5db9a720b2d442b3039c7811ad3e26ab5a8938cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9fdf4676cacec117aa7dcab2b86a4cade14cca0d7f202807a103ab7b1e0af6d4->leave($__internal_9fdf4676cacec117aa7dcab2b86a4cade14cca0d7f202807a103ab7b1e0af6d4_prof);

        
        $__internal_351b5750f1e2ac34018b9ac5db9a720b2d442b3039c7811ad3e26ab5a8938cd4->leave($__internal_351b5750f1e2ac34018b9ac5db9a720b2d442b3039c7811ad3e26ab5a8938cd4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
