<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_1588cab0c81fcfbe3ec7ba6de6b381a7e976e80b3604a568f30556ab0b9b6740 extends Twig_Template
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
        $__internal_11983d1dc4c22969ac0e8ea76b64547b14ce000bdf1ddf22df4afbfc445a9674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11983d1dc4c22969ac0e8ea76b64547b14ce000bdf1ddf22df4afbfc445a9674->enter($__internal_11983d1dc4c22969ac0e8ea76b64547b14ce000bdf1ddf22df4afbfc445a9674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_71ba2e7d1661c5d2105aa49ee2bf414910897e7ba2d4d49ac7cce9a2f66c6a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ba2e7d1661c5d2105aa49ee2bf414910897e7ba2d4d49ac7cce9a2f66c6a34->enter($__internal_71ba2e7d1661c5d2105aa49ee2bf414910897e7ba2d4d49ac7cce9a2f66c6a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_11983d1dc4c22969ac0e8ea76b64547b14ce000bdf1ddf22df4afbfc445a9674->leave($__internal_11983d1dc4c22969ac0e8ea76b64547b14ce000bdf1ddf22df4afbfc445a9674_prof);

        
        $__internal_71ba2e7d1661c5d2105aa49ee2bf414910897e7ba2d4d49ac7cce9a2f66c6a34->leave($__internal_71ba2e7d1661c5d2105aa49ee2bf414910897e7ba2d4d49ac7cce9a2f66c6a34_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
