<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_b854d63e1d0056beb343fefc63cb9f5c7c9a6828e9696945757dbcc6260a5c88 extends Twig_Template
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
        $__internal_af8e3f1733baaa0025f4c4c22675c979272d2c4390c1ada3321f4c81d4054c0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af8e3f1733baaa0025f4c4c22675c979272d2c4390c1ada3321f4c81d4054c0a->enter($__internal_af8e3f1733baaa0025f4c4c22675c979272d2c4390c1ada3321f4c81d4054c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_704673bf22ca356156de2db53a3c437ec2e7be756a7f7c74c35e322eb3e8dbdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_704673bf22ca356156de2db53a3c437ec2e7be756a7f7c74c35e322eb3e8dbdc->enter($__internal_704673bf22ca356156de2db53a3c437ec2e7be756a7f7c74c35e322eb3e8dbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_af8e3f1733baaa0025f4c4c22675c979272d2c4390c1ada3321f4c81d4054c0a->leave($__internal_af8e3f1733baaa0025f4c4c22675c979272d2c4390c1ada3321f4c81d4054c0a_prof);

        
        $__internal_704673bf22ca356156de2db53a3c437ec2e7be756a7f7c74c35e322eb3e8dbdc->leave($__internal_704673bf22ca356156de2db53a3c437ec2e7be756a7f7c74c35e322eb3e8dbdc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
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
", "TwigBundle:Exception:traces.xml.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
