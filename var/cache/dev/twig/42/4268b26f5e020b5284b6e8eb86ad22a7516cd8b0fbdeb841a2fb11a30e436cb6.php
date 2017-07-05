<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_a28497f8c756a7608103d24546310fe55adb80215e8e65cd72ad8a09e9fc5e56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05df99b114ed61d37e480489736e894ed521251a8282375915dbebff618b911a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05df99b114ed61d37e480489736e894ed521251a8282375915dbebff618b911a->enter($__internal_05df99b114ed61d37e480489736e894ed521251a8282375915dbebff618b911a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_7fd38a08d630e9539594aca9bae5a3f1498dd2c5034124849b6257834d75ec12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fd38a08d630e9539594aca9bae5a3f1498dd2c5034124849b6257834d75ec12->enter($__internal_7fd38a08d630e9539594aca9bae5a3f1498dd2c5034124849b6257834d75ec12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05df99b114ed61d37e480489736e894ed521251a8282375915dbebff618b911a->leave($__internal_05df99b114ed61d37e480489736e894ed521251a8282375915dbebff618b911a_prof);

        
        $__internal_7fd38a08d630e9539594aca9bae5a3f1498dd2c5034124849b6257834d75ec12->leave($__internal_7fd38a08d630e9539594aca9bae5a3f1498dd2c5034124849b6257834d75ec12_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb70dd0b189432a095ff9127b00c5b2a6a29f9a5a7991906a1b72ba21cafa679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb70dd0b189432a095ff9127b00c5b2a6a29f9a5a7991906a1b72ba21cafa679->enter($__internal_eb70dd0b189432a095ff9127b00c5b2a6a29f9a5a7991906a1b72ba21cafa679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4a4332aa853f6e0466008c7ba3f430e53ef58dfb03fd1935abedb2d76cc6d6a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4332aa853f6e0466008c7ba3f430e53ef58dfb03fd1935abedb2d76cc6d6a1->enter($__internal_4a4332aa853f6e0466008c7ba3f430e53ef58dfb03fd1935abedb2d76cc6d6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4a4332aa853f6e0466008c7ba3f430e53ef58dfb03fd1935abedb2d76cc6d6a1->leave($__internal_4a4332aa853f6e0466008c7ba3f430e53ef58dfb03fd1935abedb2d76cc6d6a1_prof);

        
        $__internal_eb70dd0b189432a095ff9127b00c5b2a6a29f9a5a7991906a1b72ba21cafa679->leave($__internal_eb70dd0b189432a095ff9127b00c5b2a6a29f9a5a7991906a1b72ba21cafa679_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e033442bf07d1fd8e0e83400ca7ba698ab307c89219467af1ba577394536b5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e033442bf07d1fd8e0e83400ca7ba698ab307c89219467af1ba577394536b5a->enter($__internal_8e033442bf07d1fd8e0e83400ca7ba698ab307c89219467af1ba577394536b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f3cc3229cf45e878f21becb818a23bbdd12e10d1146a80df1a72b43dd3c5623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f3cc3229cf45e878f21becb818a23bbdd12e10d1146a80df1a72b43dd3c5623->enter($__internal_5f3cc3229cf45e878f21becb818a23bbdd12e10d1146a80df1a72b43dd3c5623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_5f3cc3229cf45e878f21becb818a23bbdd12e10d1146a80df1a72b43dd3c5623->leave($__internal_5f3cc3229cf45e878f21becb818a23bbdd12e10d1146a80df1a72b43dd3c5623_prof);

        
        $__internal_8e033442bf07d1fd8e0e83400ca7ba698ab307c89219467af1ba577394536b5a->leave($__internal_8e033442bf07d1fd8e0e83400ca7ba698ab307c89219467af1ba577394536b5a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
