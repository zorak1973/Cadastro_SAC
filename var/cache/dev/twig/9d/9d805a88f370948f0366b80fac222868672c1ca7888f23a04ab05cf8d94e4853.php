<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_32e1446e105cd128241b5699d190cc08797bb878f6ba638abff78913f3239d92 extends Twig_Template
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
        $__internal_c4a69ca174b5842642f7abff4e7ed37f92834ddd3a76be18d45957d17f993f17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4a69ca174b5842642f7abff4e7ed37f92834ddd3a76be18d45957d17f993f17->enter($__internal_c4a69ca174b5842642f7abff4e7ed37f92834ddd3a76be18d45957d17f993f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_062855f90b2d7c0e498014c196de8aa3f8270a5357327ff89ec394ef044251cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062855f90b2d7c0e498014c196de8aa3f8270a5357327ff89ec394ef044251cf->enter($__internal_062855f90b2d7c0e498014c196de8aa3f8270a5357327ff89ec394ef044251cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_c4a69ca174b5842642f7abff4e7ed37f92834ddd3a76be18d45957d17f993f17->leave($__internal_c4a69ca174b5842642f7abff4e7ed37f92834ddd3a76be18d45957d17f993f17_prof);

        
        $__internal_062855f90b2d7c0e498014c196de8aa3f8270a5357327ff89ec394ef044251cf->leave($__internal_062855f90b2d7c0e498014c196de8aa3f8270a5357327ff89ec394ef044251cf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
