<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_eca24d4be22485bc04ce85c5e711bf465f2de2043ace770b3481c97efd0c9e66 extends Twig_Template
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
        $__internal_7eb76f3209c47c10c2dce7896d1e4a2847886871ff8abebd081f1713de9023f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eb76f3209c47c10c2dce7896d1e4a2847886871ff8abebd081f1713de9023f2->enter($__internal_7eb76f3209c47c10c2dce7896d1e4a2847886871ff8abebd081f1713de9023f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_027db6c9b787b6cc59c21637df7151b66d6d4211efc9292492920bd541173566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027db6c9b787b6cc59c21637df7151b66d6d4211efc9292492920bd541173566->enter($__internal_027db6c9b787b6cc59c21637df7151b66d6d4211efc9292492920bd541173566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_7eb76f3209c47c10c2dce7896d1e4a2847886871ff8abebd081f1713de9023f2->leave($__internal_7eb76f3209c47c10c2dce7896d1e4a2847886871ff8abebd081f1713de9023f2_prof);

        
        $__internal_027db6c9b787b6cc59c21637df7151b66d6d4211efc9292492920bd541173566->leave($__internal_027db6c9b787b6cc59c21637df7151b66d6d4211efc9292492920bd541173566_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
