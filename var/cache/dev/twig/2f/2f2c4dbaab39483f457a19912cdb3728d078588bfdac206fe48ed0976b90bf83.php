<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_73f8540cd0b7346a35a37a5398c08291580db39f6030d92832bccb8426551629 extends Twig_Template
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
        $__internal_d91e7d615ab54c30d4cd696b4189e62fde2846040f168c45801ae7dd54816c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d91e7d615ab54c30d4cd696b4189e62fde2846040f168c45801ae7dd54816c21->enter($__internal_d91e7d615ab54c30d4cd696b4189e62fde2846040f168c45801ae7dd54816c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_49659636f453f21badf786a72dc307871fae8ce26a102b8ae8b821b18e6a865c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49659636f453f21badf786a72dc307871fae8ce26a102b8ae8b821b18e6a865c->enter($__internal_49659636f453f21badf786a72dc307871fae8ce26a102b8ae8b821b18e6a865c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_d91e7d615ab54c30d4cd696b4189e62fde2846040f168c45801ae7dd54816c21->leave($__internal_d91e7d615ab54c30d4cd696b4189e62fde2846040f168c45801ae7dd54816c21_prof);

        
        $__internal_49659636f453f21badf786a72dc307871fae8ce26a102b8ae8b821b18e6a865c->leave($__internal_49659636f453f21badf786a72dc307871fae8ce26a102b8ae8b821b18e6a865c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
