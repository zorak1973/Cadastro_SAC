<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_59a488abf45f3c009941f66d1b68fbc299e4ce0c78ab91b389dce3449993ab1c extends Twig_Template
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
        $__internal_cb4d76184341043943fe53bcc259d76e893e4dad1f0ae6cb60f7ceaeb281a009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb4d76184341043943fe53bcc259d76e893e4dad1f0ae6cb60f7ceaeb281a009->enter($__internal_cb4d76184341043943fe53bcc259d76e893e4dad1f0ae6cb60f7ceaeb281a009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_0b3176877838d12c0f7543192c0e9a76f38a8699990c467321d257223e929d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3176877838d12c0f7543192c0e9a76f38a8699990c467321d257223e929d82->enter($__internal_0b3176877838d12c0f7543192c0e9a76f38a8699990c467321d257223e929d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_cb4d76184341043943fe53bcc259d76e893e4dad1f0ae6cb60f7ceaeb281a009->leave($__internal_cb4d76184341043943fe53bcc259d76e893e4dad1f0ae6cb60f7ceaeb281a009_prof);

        
        $__internal_0b3176877838d12c0f7543192c0e9a76f38a8699990c467321d257223e929d82->leave($__internal_0b3176877838d12c0f7543192c0e9a76f38a8699990c467321d257223e929d82_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
