<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_698dfafb41601eb7c7017cfcaea185815886d07aaa5f5fd74d1472028df02bd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_66574b246631f58bec5a3faecc3b6d6c3bfd4e19f8898395f85bff9e2d61ec37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66574b246631f58bec5a3faecc3b6d6c3bfd4e19f8898395f85bff9e2d61ec37->enter($__internal_66574b246631f58bec5a3faecc3b6d6c3bfd4e19f8898395f85bff9e2d61ec37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_beee7d0362bbe862bcc31bead1b8eae88a09c7837da6fc1fedc7c7b5af18bef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beee7d0362bbe862bcc31bead1b8eae88a09c7837da6fc1fedc7c7b5af18bef5->enter($__internal_beee7d0362bbe862bcc31bead1b8eae88a09c7837da6fc1fedc7c7b5af18bef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66574b246631f58bec5a3faecc3b6d6c3bfd4e19f8898395f85bff9e2d61ec37->leave($__internal_66574b246631f58bec5a3faecc3b6d6c3bfd4e19f8898395f85bff9e2d61ec37_prof);

        
        $__internal_beee7d0362bbe862bcc31bead1b8eae88a09c7837da6fc1fedc7c7b5af18bef5->leave($__internal_beee7d0362bbe862bcc31bead1b8eae88a09c7837da6fc1fedc7c7b5af18bef5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aeb8ba8306094c56f8b884750086df846c65fec97a24c84d2b361aff4576984f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeb8ba8306094c56f8b884750086df846c65fec97a24c84d2b361aff4576984f->enter($__internal_aeb8ba8306094c56f8b884750086df846c65fec97a24c84d2b361aff4576984f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_347fa100ef574313ba8987803d08a11ad82ea4fa8b416f585d05238696a423b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347fa100ef574313ba8987803d08a11ad82ea4fa8b416f585d05238696a423b3->enter($__internal_347fa100ef574313ba8987803d08a11ad82ea4fa8b416f585d05238696a423b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_347fa100ef574313ba8987803d08a11ad82ea4fa8b416f585d05238696a423b3->leave($__internal_347fa100ef574313ba8987803d08a11ad82ea4fa8b416f585d05238696a423b3_prof);

        
        $__internal_aeb8ba8306094c56f8b884750086df846c65fec97a24c84d2b361aff4576984f->leave($__internal_aeb8ba8306094c56f8b884750086df846c65fec97a24c84d2b361aff4576984f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cf085f95a29312329942dfdc9fce0f4dbc7c10f46626d10b4bda5387725de3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cf085f95a29312329942dfdc9fce0f4dbc7c10f46626d10b4bda5387725de3e->enter($__internal_8cf085f95a29312329942dfdc9fce0f4dbc7c10f46626d10b4bda5387725de3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b689e818a041913f8c4ef1998993d9b19ac7b628ea3b9ff8d60b8bfa94567df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b689e818a041913f8c4ef1998993d9b19ac7b628ea3b9ff8d60b8bfa94567df7->enter($__internal_b689e818a041913f8c4ef1998993d9b19ac7b628ea3b9ff8d60b8bfa94567df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b689e818a041913f8c4ef1998993d9b19ac7b628ea3b9ff8d60b8bfa94567df7->leave($__internal_b689e818a041913f8c4ef1998993d9b19ac7b628ea3b9ff8d60b8bfa94567df7_prof);

        
        $__internal_8cf085f95a29312329942dfdc9fce0f4dbc7c10f46626d10b4bda5387725de3e->leave($__internal_8cf085f95a29312329942dfdc9fce0f4dbc7c10f46626d10b4bda5387725de3e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
