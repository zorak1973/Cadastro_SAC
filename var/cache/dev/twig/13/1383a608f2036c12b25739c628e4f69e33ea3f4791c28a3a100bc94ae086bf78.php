<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_1f43c71697de7a44310664ceb5cab46f6d70ea3a0ab1c359b9728174d2c75920 extends Twig_Template
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
        $__internal_004c4b813d009abd7d618902adfdf93119ff1ed571c3a5061b815c0f41bf6988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_004c4b813d009abd7d618902adfdf93119ff1ed571c3a5061b815c0f41bf6988->enter($__internal_004c4b813d009abd7d618902adfdf93119ff1ed571c3a5061b815c0f41bf6988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_c2a209fe26a34389ce3c165e9cd579056d5216c307daf4d0f7efcc0fd40cd646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a209fe26a34389ce3c165e9cd579056d5216c307daf4d0f7efcc0fd40cd646->enter($__internal_c2a209fe26a34389ce3c165e9cd579056d5216c307daf4d0f7efcc0fd40cd646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_004c4b813d009abd7d618902adfdf93119ff1ed571c3a5061b815c0f41bf6988->leave($__internal_004c4b813d009abd7d618902adfdf93119ff1ed571c3a5061b815c0f41bf6988_prof);

        
        $__internal_c2a209fe26a34389ce3c165e9cd579056d5216c307daf4d0f7efcc0fd40cd646->leave($__internal_c2a209fe26a34389ce3c165e9cd579056d5216c307daf4d0f7efcc0fd40cd646_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
