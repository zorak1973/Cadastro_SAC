<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_354f36da962f918ce53c0a71a669c75c7ceb1109301f3bbf2922997d94fff2b8 extends Twig_Template
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
        $__internal_7dd2fa82054bf9ef39f139579f0400b26e8084df0431f62de3584815692ba0e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dd2fa82054bf9ef39f139579f0400b26e8084df0431f62de3584815692ba0e6->enter($__internal_7dd2fa82054bf9ef39f139579f0400b26e8084df0431f62de3584815692ba0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_62222554fc2a67a9d08a0bf01e00afdf312bd65c7180c8da6f055c2c07cca113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62222554fc2a67a9d08a0bf01e00afdf312bd65c7180c8da6f055c2c07cca113->enter($__internal_62222554fc2a67a9d08a0bf01e00afdf312bd65c7180c8da6f055c2c07cca113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7dd2fa82054bf9ef39f139579f0400b26e8084df0431f62de3584815692ba0e6->leave($__internal_7dd2fa82054bf9ef39f139579f0400b26e8084df0431f62de3584815692ba0e6_prof);

        
        $__internal_62222554fc2a67a9d08a0bf01e00afdf312bd65c7180c8da6f055c2c07cca113->leave($__internal_62222554fc2a67a9d08a0bf01e00afdf312bd65c7180c8da6f055c2c07cca113_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
