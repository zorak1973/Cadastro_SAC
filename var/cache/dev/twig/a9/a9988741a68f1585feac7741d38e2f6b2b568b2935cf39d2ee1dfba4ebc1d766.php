<?php

/* @KnpPaginator/Pagination/sortable_link.html.twig */
class __TwigTemplate_cd2404c4c39a1f63fbbf2df25b74074e3355268f07c93ddfea338dc3ae47d519 extends Twig_Template
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
        $__internal_c69c99550780dcb8553d42815f8e6c732ffc90be04077e2497d637953415a4f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c69c99550780dcb8553d42815f8e6c732ffc90be04077e2497d637953415a4f1->enter($__internal_c69c99550780dcb8553d42815f8e6c732ffc90be04077e2497d637953415a4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        $__internal_e762c895bd107c32779d34ed72c80abddb0dbdea00473db7581475f2a7dd4544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e762c895bd107c32779d34ed72c80abddb0dbdea00473db7581475f2a7dd4544->enter($__internal_e762c895bd107c32779d34ed72c80abddb0dbdea00473db7581475f2a7dd4544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_c69c99550780dcb8553d42815f8e6c732ffc90be04077e2497d637953415a4f1->leave($__internal_c69c99550780dcb8553d42815f8e6c732ffc90be04077e2497d637953415a4f1_prof);

        
        $__internal_e762c895bd107c32779d34ed72c80abddb0dbdea00473db7581475f2a7dd4544->leave($__internal_e762c895bd107c32779d34ed72c80abddb0dbdea00473db7581475f2a7dd4544_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/sortable_link.html.twig";
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
        return new Twig_Source("<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>{{ title }}</a>
", "@KnpPaginator/Pagination/sortable_link.html.twig", "C:\\projetos\\cadastro\\vendor\\knplabs\\knp-paginator-bundle\\Resources\\views\\Pagination\\sortable_link.html.twig");
    }
}
