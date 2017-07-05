<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_f35755c4cd1e8f6fe487421f6b786c6b281de426ca49b0dfc3a2713d4f76d679 extends Twig_Template
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
        $__internal_ddc18df1314b3215d826e426c7107082d8beed8d1393a7c7bea18bb09a5ed178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc18df1314b3215d826e426c7107082d8beed8d1393a7c7bea18bb09a5ed178->enter($__internal_ddc18df1314b3215d826e426c7107082d8beed8d1393a7c7bea18bb09a5ed178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_c6d78eb578a383fcca3fab41ce137ca916fa0f31eb2311c7cf6fcef66a7f5a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d78eb578a383fcca3fab41ce137ca916fa0f31eb2311c7cf6fcef66a7f5a85->enter($__internal_c6d78eb578a383fcca3fab41ce137ca916fa0f31eb2311c7cf6fcef66a7f5a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_ddc18df1314b3215d826e426c7107082d8beed8d1393a7c7bea18bb09a5ed178->leave($__internal_ddc18df1314b3215d826e426c7107082d8beed8d1393a7c7bea18bb09a5ed178_prof);

        
        $__internal_c6d78eb578a383fcca3fab41ce137ca916fa0f31eb2311c7cf6fcef66a7f5a85->leave($__internal_c6d78eb578a383fcca3fab41ce137ca916fa0f31eb2311c7cf6fcef66a7f5a85_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
