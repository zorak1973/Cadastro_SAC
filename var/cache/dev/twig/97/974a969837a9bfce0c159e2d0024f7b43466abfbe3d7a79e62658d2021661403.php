<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f49d971b3c2e794d2f66af4cc44360666b1da440c41b9da5550111eda39d9049 extends Twig_Template
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
        $__internal_73753115b7c87e01d26a2e22e4fe0d3fae7e4b419073ffa39c3916017e5e18ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73753115b7c87e01d26a2e22e4fe0d3fae7e4b419073ffa39c3916017e5e18ec->enter($__internal_73753115b7c87e01d26a2e22e4fe0d3fae7e4b419073ffa39c3916017e5e18ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_55355c26951d8fa6a4630eec8ce36d6f4c0d8d63459e57a36f19e44bc1982e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55355c26951d8fa6a4630eec8ce36d6f4c0d8d63459e57a36f19e44bc1982e33->enter($__internal_55355c26951d8fa6a4630eec8ce36d6f4c0d8d63459e57a36f19e44bc1982e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_73753115b7c87e01d26a2e22e4fe0d3fae7e4b419073ffa39c3916017e5e18ec->leave($__internal_73753115b7c87e01d26a2e22e4fe0d3fae7e4b419073ffa39c3916017e5e18ec_prof);

        
        $__internal_55355c26951d8fa6a4630eec8ce36d6f4c0d8d63459e57a36f19e44bc1982e33->leave($__internal_55355c26951d8fa6a4630eec8ce36d6f4c0d8d63459e57a36f19e44bc1982e33_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
