<?php

/* chamado/index.html.twig */
class __TwigTemplate_070418e15a6f24e07eafe2da6cdef1e206963be111f1f0567dbbea0535367d30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "chamado/index.html.twig", 1);
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
        $__internal_b027ab09e517b3927ff8fd7a5a0217bff3bf8db6aaa5c5ee774efe4b59684453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b027ab09e517b3927ff8fd7a5a0217bff3bf8db6aaa5c5ee774efe4b59684453->enter($__internal_b027ab09e517b3927ff8fd7a5a0217bff3bf8db6aaa5c5ee774efe4b59684453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chamado/index.html.twig"));

        $__internal_6fb56382e11a762e2a9256e7d3575b8ab55c963f69dc4a816352ce19ca2399db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb56382e11a762e2a9256e7d3575b8ab55c963f69dc4a816352ce19ca2399db->enter($__internal_6fb56382e11a762e2a9256e7d3575b8ab55c963f69dc4a816352ce19ca2399db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chamado/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b027ab09e517b3927ff8fd7a5a0217bff3bf8db6aaa5c5ee774efe4b59684453->leave($__internal_b027ab09e517b3927ff8fd7a5a0217bff3bf8db6aaa5c5ee774efe4b59684453_prof);

        
        $__internal_6fb56382e11a762e2a9256e7d3575b8ab55c963f69dc4a816352ce19ca2399db->leave($__internal_6fb56382e11a762e2a9256e7d3575b8ab55c963f69dc4a816352ce19ca2399db_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3b0406beaa91e8e2c12610252e1f41fa728ef22bb6caaf4313a6a30198cb76f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3b0406beaa91e8e2c12610252e1f41fa728ef22bb6caaf4313a6a30198cb76f->enter($__internal_d3b0406beaa91e8e2c12610252e1f41fa728ef22bb6caaf4313a6a30198cb76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6607be3a3a092db0fa6ccf8e8dfed6d9ff1022cb083944a0dc0e392533246707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6607be3a3a092db0fa6ccf8e8dfed6d9ff1022cb083944a0dc0e392533246707->enter($__internal_6607be3a3a092db0fa6ccf8e8dfed6d9ff1022cb083944a0dc0e392533246707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t\t<div class=\"jumbotron\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<h2><span class=\"glyphicon glyphicon-home\"></span>&nbsp;Formulário</h2>
\t\t\t\t\t<!--<hr />-->
\t\t\t\t\t<p class=\"text-success\"><strong>Cadastro de Chamados - SAC </strong></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
<table width=\"50%\" style=\"margin:0px auto\">
<tr><td>\t\t
";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

<div>
";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'label');
        echo "
";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'errors');
        echo "
";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'widget');
        echo "
</div>

<div>
";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacao", array()), 'label');
        echo "
";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacao", array()), 'errors');
        echo "
";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacao", array()), 'widget', array("attr" => array("class" => "campo_obs")));
        echo "
</div>

<div>
";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dataAbertura", array()), 'label');
        echo "
";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dataAbertura", array()), 'errors');
        echo "
";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dataAbertura", array()), 'widget');
        echo "
</div>

";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</td></tr></table>
";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "observacao", array()), "html", null, true);
        echo "

";
        
        $__internal_6607be3a3a092db0fa6ccf8e8dfed6d9ff1022cb083944a0dc0e392533246707->leave($__internal_6607be3a3a092db0fa6ccf8e8dfed6d9ff1022cb083944a0dc0e392533246707_prof);

        
        $__internal_d3b0406beaa91e8e2c12610252e1f41fa728ef22bb6caaf4313a6a30198cb76f->leave($__internal_d3b0406beaa91e8e2c12610252e1f41fa728ef22bb6caaf4313a6a30198cb76f_prof);

    }

    public function getTemplateName()
    {
        return "chamado/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 37,  112 => 35,  106 => 32,  102 => 31,  98 => 30,  91 => 26,  87 => 25,  83 => 24,  76 => 20,  72 => 19,  68 => 18,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
\t\t\t\t\t<h2><span class=\"glyphicon glyphicon-home\"></span>&nbsp;Formulário</h2>
\t\t\t\t\t<!--<hr />-->
\t\t\t\t\t<p class=\"text-success\"><strong>Cadastro de Chamados - SAC </strong></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
<table width=\"50%\" style=\"margin:0px auto\">
<tr><td>\t\t
{{ form_start(form) }}

<div>
{{ form_label(form.titulo) }}
{{ form_errors(form.titulo) }}
{{ form_widget(form.titulo) }}
</div>

<div>
{{ form_label(form.observacao) }}
{{ form_errors(form.observacao) }}
{{ form_widget(form.observacao, {'attr': {'class': 'campo_obs'}}) }}
</div>

<div>
{{ form_label(form.dataAbertura) }}
{{ form_errors(form.dataAbertura) }}
{{ form_widget(form.dataAbertura) }}
</div>

{{ form_end(form) }}
</td></tr></table>
{{ form.vars.value.observacao }}

{% endblock %}
", "chamado/index.html.twig", "C:\\projetos\\cadastro\\app\\Resources\\views\\chamado\\index.html.twig");
    }
}
