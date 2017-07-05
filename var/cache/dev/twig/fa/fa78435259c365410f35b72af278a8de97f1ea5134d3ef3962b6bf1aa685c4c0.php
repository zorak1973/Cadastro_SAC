<?php

/* chamado/list.html.twig */
class __TwigTemplate_e01d304f388eb489f7b80d4c0c5d0586803f0b685bcab05fb44d1d0c68659788 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "chamado/list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2bcfb1eb625e717fb6a558e92ea36b925df9109ccb6b5d805daf11606a60eb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2bcfb1eb625e717fb6a558e92ea36b925df9109ccb6b5d805daf11606a60eb2->enter($__internal_f2bcfb1eb625e717fb6a558e92ea36b925df9109ccb6b5d805daf11606a60eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chamado/list.html.twig"));

        $__internal_21b098e20a4b013f1639cd75e02b366b42867069f481d6654aa46f329143d009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b098e20a4b013f1639cd75e02b366b42867069f481d6654aa46f329143d009->enter($__internal_21b098e20a4b013f1639cd75e02b366b42867069f481d6654aa46f329143d009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chamado/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2bcfb1eb625e717fb6a558e92ea36b925df9109ccb6b5d805daf11606a60eb2->leave($__internal_f2bcfb1eb625e717fb6a558e92ea36b925df9109ccb6b5d805daf11606a60eb2_prof);

        
        $__internal_21b098e20a4b013f1639cd75e02b366b42867069f481d6654aa46f329143d009->leave($__internal_21b098e20a4b013f1639cd75e02b366b42867069f481d6654aa46f329143d009_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef634721b19a2e9c52a226e3b51e8fe2afe358b1f67241bb9fdf536efe3fd283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef634721b19a2e9c52a226e3b51e8fe2afe358b1f67241bb9fdf536efe3fd283->enter($__internal_ef634721b19a2e9c52a226e3b51e8fe2afe358b1f67241bb9fdf536efe3fd283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c4b7d9b740a21399b8675a733ea0f0f75f6f47d447927406461dc37796880de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c4b7d9b740a21399b8675a733ea0f0f75f6f47d447927406461dc37796880de->enter($__internal_3c4b7d9b740a21399b8675a733ea0f0f75f6f47d447927406461dc37796880de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t\t<div class=\"jumbotron\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<h2><span class=\"glyphicon glyphicon-list\"></span>&nbsp;Lista</h2>
\t\t\t\t\t<!--<hr />-->
\t\t\t\t\t<p><strong>Chamados Abertos - SAC </strong></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
<div class=\"container\">
<table class=\"table table-hover table-responsive\">
<tr>
<th>Núm.Chamado</th>
<th>Título</th>
<th>Observação</th>
<th>";
        // line 19
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["chamados"]) ? $context["chamados"] : $this->getContext($context, "chamados")), "Pedido", "c.pedido_id");
        echo "</th>
<th>";
        // line 20
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["chamados"]) ? $context["chamados"] : $this->getContext($context, "chamados")), "E-mail Cliente", "cl.email");
        echo "</th>
</tr>\t\t

\t
\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chamados"]) ? $context["chamados"] : $this->getContext($context, "chamados")));
        foreach ($context['_seq'] as $context["_key"] => $context["chm"]) {
            // line 25
            echo "\t<tr>
\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["chm"], "id", array()), "html", null, true);
            echo "</td>
\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["chm"], "titulo", array()), "html", null, true);
            echo "</td>
\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["chm"], "observacao", array()), "html", null, true);
            echo "</td>
\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["chm"], "pedido", array()), "id", array()), "html", null, true);
            echo "</td>
\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["chm"], "cliente", array()), "email", array()), "html", null, true);
            echo "</td>
\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</table>\t
\t
\t<div class=\"navigation text-center\">
    ";
        // line 36
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["chamados"]) ? $context["chamados"] : $this->getContext($context, "chamados")));
        echo "
\t</div>
</div>
";
        
        $__internal_3c4b7d9b740a21399b8675a733ea0f0f75f6f47d447927406461dc37796880de->leave($__internal_3c4b7d9b740a21399b8675a733ea0f0f75f6f47d447927406461dc37796880de_prof);

        
        $__internal_ef634721b19a2e9c52a226e3b51e8fe2afe358b1f67241bb9fdf536efe3fd283->leave($__internal_ef634721b19a2e9c52a226e3b51e8fe2afe358b1f67241bb9fdf536efe3fd283_prof);

    }

    public function getTemplateName()
    {
        return "chamado/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 36,  109 => 33,  100 => 30,  96 => 29,  92 => 28,  88 => 27,  84 => 26,  81 => 25,  77 => 24,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
\t\t<div class=\"jumbotron\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<h2><span class=\"glyphicon glyphicon-list\"></span>&nbsp;Lista</h2>
\t\t\t\t\t<!--<hr />-->
\t\t\t\t\t<p><strong>Chamados Abertos - SAC </strong></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
<div class=\"container\">
<table class=\"table table-hover table-responsive\">
<tr>
<th>Núm.Chamado</th>
<th>Título</th>
<th>Observação</th>
<th>{{ knp_pagination_sortable(chamados, 'Pedido', 'c.pedido_id') }}</th>
<th>{{ knp_pagination_sortable(chamados, 'E-mail Cliente', 'cl.email') }}</th>
</tr>\t\t

\t
\t{% for chm in chamados %}
\t<tr>
\t<td>{{ chm.id }}</td>
\t<td>{{ chm.titulo }}</td>
\t<td>{{ chm.observacao }}</td>
\t<td>{{ chm.pedido.id }}</td>
\t<td>{{ chm.cliente.email }}</td>
\t</tr>
\t{% endfor %}
</table>\t
\t
\t<div class=\"navigation text-center\">
    {{ knp_pagination_render(chamados) }}
\t</div>
</div>
{% endblock %}
", "chamado/list.html.twig", "C:\\projetos\\cadastro\\app\\Resources\\views\\chamado\\list.html.twig");
    }
}
