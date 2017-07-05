<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_a6d83cd62f26b919d3685e496a96bd62dd33704f9299dee13324cbd574a3aca2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_984839336e167b0bc3ccc700c3877cd9b8988c0a2bb39def3b20037cb4d06b8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_984839336e167b0bc3ccc700c3877cd9b8988c0a2bb39def3b20037cb4d06b8a->enter($__internal_984839336e167b0bc3ccc700c3877cd9b8988c0a2bb39def3b20037cb4d06b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_35f25df5045af4c3e95a8861770b786a7ac8f6dd19c016440d7d4125d6b1f4a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f25df5045af4c3e95a8861770b786a7ac8f6dd19c016440d7d4125d6b1f4a2->enter($__internal_35f25df5045af4c3e95a8861770b786a7ac8f6dd19c016440d7d4125d6b1f4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_984839336e167b0bc3ccc700c3877cd9b8988c0a2bb39def3b20037cb4d06b8a->leave($__internal_984839336e167b0bc3ccc700c3877cd9b8988c0a2bb39def3b20037cb4d06b8a_prof);

        
        $__internal_35f25df5045af4c3e95a8861770b786a7ac8f6dd19c016440d7d4125d6b1f4a2->leave($__internal_35f25df5045af4c3e95a8861770b786a7ac8f6dd19c016440d7d4125d6b1f4a2_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_be474c2542c3f097cde770a319e0070c8c0a2521464b34b2600b4451d470f5b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be474c2542c3f097cde770a319e0070c8c0a2521464b34b2600b4451d470f5b4->enter($__internal_be474c2542c3f097cde770a319e0070c8c0a2521464b34b2600b4451d470f5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_b23b1712f602ec8eb19f888632cb7f2b92528f11a294b1f0783348faaad404ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23b1712f602ec8eb19f888632cb7f2b92528f11a294b1f0783348faaad404ab->enter($__internal_b23b1712f602ec8eb19f888632cb7f2b92528f11a294b1f0783348faaad404ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_b23b1712f602ec8eb19f888632cb7f2b92528f11a294b1f0783348faaad404ab->leave($__internal_b23b1712f602ec8eb19f888632cb7f2b92528f11a294b1f0783348faaad404ab_prof);

        
        $__internal_be474c2542c3f097cde770a319e0070c8c0a2521464b34b2600b4451d470f5b4->leave($__internal_be474c2542c3f097cde770a319e0070c8c0a2521464b34b2600b4451d470f5b4_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_153672f8eab1b2d833bf70985ab2d58742df01544c44e771ff1bf475d33e93cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_153672f8eab1b2d833bf70985ab2d58742df01544c44e771ff1bf475d33e93cd->enter($__internal_153672f8eab1b2d833bf70985ab2d58742df01544c44e771ff1bf475d33e93cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c60c3988e4192959b6a6da86adfba403f669e4eee1b9cea2a93df209fdfe6809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c60c3988e4192959b6a6da86adfba403f669e4eee1b9cea2a93df209fdfe6809->enter($__internal_c60c3988e4192959b6a6da86adfba403f669e4eee1b9cea2a93df209fdfe6809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_c60c3988e4192959b6a6da86adfba403f669e4eee1b9cea2a93df209fdfe6809->leave($__internal_c60c3988e4192959b6a6da86adfba403f669e4eee1b9cea2a93df209fdfe6809_prof);

        
        $__internal_153672f8eab1b2d833bf70985ab2d58742df01544c44e771ff1bf475d33e93cd->leave($__internal_153672f8eab1b2d833bf70985ab2d58742df01544c44e771ff1bf475d33e93cd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
