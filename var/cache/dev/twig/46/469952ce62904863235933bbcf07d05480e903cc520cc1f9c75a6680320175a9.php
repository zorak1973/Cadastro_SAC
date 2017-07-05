<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_06c9fa6ed343f01b99b1d0abc5f45264a241e3ca4e5af0c7ea95a1168a8cb16e extends Twig_Template
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
        $__internal_8264706dfa9c5305bca9491ec7d413189481345f1d1772d2b04a0293a2134513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8264706dfa9c5305bca9491ec7d413189481345f1d1772d2b04a0293a2134513->enter($__internal_8264706dfa9c5305bca9491ec7d413189481345f1d1772d2b04a0293a2134513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_22cbb6ff1070264e186058b350d24d76c59c226a96d53ec458038e280071b3b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22cbb6ff1070264e186058b350d24d76c59c226a96d53ec458038e280071b3b9->enter($__internal_22cbb6ff1070264e186058b350d24d76c59c226a96d53ec458038e280071b3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_8264706dfa9c5305bca9491ec7d413189481345f1d1772d2b04a0293a2134513->leave($__internal_8264706dfa9c5305bca9491ec7d413189481345f1d1772d2b04a0293a2134513_prof);

        
        $__internal_22cbb6ff1070264e186058b350d24d76c59c226a96d53ec458038e280071b3b9->leave($__internal_22cbb6ff1070264e186058b350d24d76c59c226a96d53ec458038e280071b3b9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
