<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_96f3b0246fe8d2cd7514367afacebfd985fe2572fdcbc7ae40a593dd68966a66 extends Twig_Template
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
        $__internal_8561992ab22458a24861389d44b6bb07299597fdf0c25f49e5167e1f9b6849f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8561992ab22458a24861389d44b6bb07299597fdf0c25f49e5167e1f9b6849f1->enter($__internal_8561992ab22458a24861389d44b6bb07299597fdf0c25f49e5167e1f9b6849f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_78ca5755f6c09dc47fa9f30213b2254db6d47d6550a150d61541417b9b516450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ca5755f6c09dc47fa9f30213b2254db6d47d6550a150d61541417b9b516450->enter($__internal_78ca5755f6c09dc47fa9f30213b2254db6d47d6550a150d61541417b9b516450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_8561992ab22458a24861389d44b6bb07299597fdf0c25f49e5167e1f9b6849f1->leave($__internal_8561992ab22458a24861389d44b6bb07299597fdf0c25f49e5167e1f9b6849f1_prof);

        
        $__internal_78ca5755f6c09dc47fa9f30213b2254db6d47d6550a150d61541417b9b516450->leave($__internal_78ca5755f6c09dc47fa9f30213b2254db6d47d6550a150d61541417b9b516450_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
