<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_d18e00b41a9bdf6f29855fe030890aaea1533ba9bb2de64e6ab32e4e396c7826 extends Twig_Template
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
        $__internal_3279033d346187400b75f876b23873fc893ea3575da4bc52fca60265f97664b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3279033d346187400b75f876b23873fc893ea3575da4bc52fca60265f97664b4->enter($__internal_3279033d346187400b75f876b23873fc893ea3575da4bc52fca60265f97664b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_562e0c4993e094e11432b75bec19a282671e326eb6530acc7597234a45218435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_562e0c4993e094e11432b75bec19a282671e326eb6530acc7597234a45218435->enter($__internal_562e0c4993e094e11432b75bec19a282671e326eb6530acc7597234a45218435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_3279033d346187400b75f876b23873fc893ea3575da4bc52fca60265f97664b4->leave($__internal_3279033d346187400b75f876b23873fc893ea3575da4bc52fca60265f97664b4_prof);

        
        $__internal_562e0c4993e094e11432b75bec19a282671e326eb6530acc7597234a45218435->leave($__internal_562e0c4993e094e11432b75bec19a282671e326eb6530acc7597234a45218435_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
