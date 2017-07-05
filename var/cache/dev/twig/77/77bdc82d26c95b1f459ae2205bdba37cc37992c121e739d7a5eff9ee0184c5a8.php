<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_016a1580270e9fd3344745bde47b4df93bc3b2bc0fecac98f67ab0a81115acd0 extends Twig_Template
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
        $__internal_10102923628dd9111ebf0226098105bf1d365faa8fd36c6080d7be428d54bb6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10102923628dd9111ebf0226098105bf1d365faa8fd36c6080d7be428d54bb6b->enter($__internal_10102923628dd9111ebf0226098105bf1d365faa8fd36c6080d7be428d54bb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_3c5c9348b80d4c28dc10e5432650294ed41dd4b40e844382a11bd6cef1e4da1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5c9348b80d4c28dc10e5432650294ed41dd4b40e844382a11bd6cef1e4da1b->enter($__internal_3c5c9348b80d4c28dc10e5432650294ed41dd4b40e844382a11bd6cef1e4da1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_10102923628dd9111ebf0226098105bf1d365faa8fd36c6080d7be428d54bb6b->leave($__internal_10102923628dd9111ebf0226098105bf1d365faa8fd36c6080d7be428d54bb6b_prof);

        
        $__internal_3c5c9348b80d4c28dc10e5432650294ed41dd4b40e844382a11bd6cef1e4da1b->leave($__internal_3c5c9348b80d4c28dc10e5432650294ed41dd4b40e844382a11bd6cef1e4da1b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
