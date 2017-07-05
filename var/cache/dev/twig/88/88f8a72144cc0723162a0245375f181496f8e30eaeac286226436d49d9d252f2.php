<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_13010b721f563f9136a4e1a00bedb393106d5a59d5b010e9ade3306cc5c9e791 extends Twig_Template
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
        $__internal_2a91bfcedaf57eb5c1e9cf4326c4a9ed70a3d5321c7a593bce9c63635b642080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a91bfcedaf57eb5c1e9cf4326c4a9ed70a3d5321c7a593bce9c63635b642080->enter($__internal_2a91bfcedaf57eb5c1e9cf4326c4a9ed70a3d5321c7a593bce9c63635b642080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        $__internal_1689a90bf951b0920219535da324c310ecb3a6586ad63976b122c9ff4cc4b70c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1689a90bf951b0920219535da324c310ecb3a6586ad63976b122c9ff4cc4b70c->enter($__internal_1689a90bf951b0920219535da324c310ecb3a6586ad63976b122c9ff4cc4b70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

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
        
        $__internal_2a91bfcedaf57eb5c1e9cf4326c4a9ed70a3d5321c7a593bce9c63635b642080->leave($__internal_2a91bfcedaf57eb5c1e9cf4326c4a9ed70a3d5321c7a593bce9c63635b642080_prof);

        
        $__internal_1689a90bf951b0920219535da324c310ecb3a6586ad63976b122c9ff4cc4b70c->leave($__internal_1689a90bf951b0920219535da324c310ecb3a6586ad63976b122c9ff4cc4b70c_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
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
", "KnpPaginatorBundle:Pagination:sortable_link.html.twig", "C:\\projetos\\cadastro\\vendor\\knplabs\\knp-paginator-bundle/Resources/views/Pagination/sortable_link.html.twig");
    }
}
