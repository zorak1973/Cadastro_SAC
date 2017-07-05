<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c869ebf64edff580a041e72a3207fdea382b124978236309120afef7b3d8ef54 extends Twig_Template
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
        $__internal_c0e54103f588582bbca483cfe74c2d511cb305155a8a3409a1ced76af5c137ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0e54103f588582bbca483cfe74c2d511cb305155a8a3409a1ced76af5c137ef->enter($__internal_c0e54103f588582bbca483cfe74c2d511cb305155a8a3409a1ced76af5c137ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_5e258be8ef0060a7d2df9060e89fecdb9db9a616b252910b9473625960b0ce60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e258be8ef0060a7d2df9060e89fecdb9db9a616b252910b9473625960b0ce60->enter($__internal_5e258be8ef0060a7d2df9060e89fecdb9db9a616b252910b9473625960b0ce60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_c0e54103f588582bbca483cfe74c2d511cb305155a8a3409a1ced76af5c137ef->leave($__internal_c0e54103f588582bbca483cfe74c2d511cb305155a8a3409a1ced76af5c137ef_prof);

        
        $__internal_5e258be8ef0060a7d2df9060e89fecdb9db9a616b252910b9473625960b0ce60->leave($__internal_5e258be8ef0060a7d2df9060e89fecdb9db9a616b252910b9473625960b0ce60_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
