<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_18614579ceb50d6a4b42cfc43fd37084baeb97631bd7317f8d888e342a5e02c6 extends Twig_Template
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
        $__internal_3a0b5020b294d6361f1bf5b52497ba9f5556eb28a594139105d3e4feea599d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a0b5020b294d6361f1bf5b52497ba9f5556eb28a594139105d3e4feea599d0b->enter($__internal_3a0b5020b294d6361f1bf5b52497ba9f5556eb28a594139105d3e4feea599d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_16da206962bb6950d23d10f1e83b898547c3ca36c5b19246dd38c9c05a5bb7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16da206962bb6950d23d10f1e83b898547c3ca36c5b19246dd38c9c05a5bb7cd->enter($__internal_16da206962bb6950d23d10f1e83b898547c3ca36c5b19246dd38c9c05a5bb7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_3a0b5020b294d6361f1bf5b52497ba9f5556eb28a594139105d3e4feea599d0b->leave($__internal_3a0b5020b294d6361f1bf5b52497ba9f5556eb28a594139105d3e4feea599d0b_prof);

        
        $__internal_16da206962bb6950d23d10f1e83b898547c3ca36c5b19246dd38c9c05a5bb7cd->leave($__internal_16da206962bb6950d23d10f1e83b898547c3ca36c5b19246dd38c9c05a5bb7cd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
