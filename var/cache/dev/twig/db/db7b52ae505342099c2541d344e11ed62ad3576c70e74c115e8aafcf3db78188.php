<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_98c8ebf3634e45dab48cf80649399ec656e0c87d12d5a9fff83f74e78fe2ae10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_65f2d4fc777b031ba672edf9da8642396293a11b8bbf92bf6427c2e0f4936bcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65f2d4fc777b031ba672edf9da8642396293a11b8bbf92bf6427c2e0f4936bcc->enter($__internal_65f2d4fc777b031ba672edf9da8642396293a11b8bbf92bf6427c2e0f4936bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_4a7ed54ffc371af452d686638b0fb21f46dfc7300c6b184c6cf28487997f6bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a7ed54ffc371af452d686638b0fb21f46dfc7300c6b184c6cf28487997f6bd8->enter($__internal_4a7ed54ffc371af452d686638b0fb21f46dfc7300c6b184c6cf28487997f6bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65f2d4fc777b031ba672edf9da8642396293a11b8bbf92bf6427c2e0f4936bcc->leave($__internal_65f2d4fc777b031ba672edf9da8642396293a11b8bbf92bf6427c2e0f4936bcc_prof);

        
        $__internal_4a7ed54ffc371af452d686638b0fb21f46dfc7300c6b184c6cf28487997f6bd8->leave($__internal_4a7ed54ffc371af452d686638b0fb21f46dfc7300c6b184c6cf28487997f6bd8_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_2deb1f855456a907c510740fbf04a82316c2fbe764da26937be76c0a6c9f968f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2deb1f855456a907c510740fbf04a82316c2fbe764da26937be76c0a6c9f968f->enter($__internal_2deb1f855456a907c510740fbf04a82316c2fbe764da26937be76c0a6c9f968f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_dd713df51d218ce44853bd3cbd03e3a326d66bce23f225ded88ce64f540d80ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd713df51d218ce44853bd3cbd03e3a326d66bce23f225ded88ce64f540d80ef->enter($__internal_dd713df51d218ce44853bd3cbd03e3a326d66bce23f225ded88ce64f540d80ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_dd713df51d218ce44853bd3cbd03e3a326d66bce23f225ded88ce64f540d80ef->leave($__internal_dd713df51d218ce44853bd3cbd03e3a326d66bce23f225ded88ce64f540d80ef_prof);

        
        $__internal_2deb1f855456a907c510740fbf04a82316c2fbe764da26937be76c0a6c9f968f->leave($__internal_2deb1f855456a907c510740fbf04a82316c2fbe764da26937be76c0a6c9f968f_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c69708289e771e08d0efacdf6756cd2ab2c3f3882116cd2e1b7490549c68a342 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c69708289e771e08d0efacdf6756cd2ab2c3f3882116cd2e1b7490549c68a342->enter($__internal_c69708289e771e08d0efacdf6756cd2ab2c3f3882116cd2e1b7490549c68a342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0b095f152cf98b0591207bf8b61128073a01ede7767e6fd2a8e74cf7da0e0072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b095f152cf98b0591207bf8b61128073a01ede7767e6fd2a8e74cf7da0e0072->enter($__internal_0b095f152cf98b0591207bf8b61128073a01ede7767e6fd2a8e74cf7da0e0072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_0b095f152cf98b0591207bf8b61128073a01ede7767e6fd2a8e74cf7da0e0072->leave($__internal_0b095f152cf98b0591207bf8b61128073a01ede7767e6fd2a8e74cf7da0e0072_prof);

        
        $__internal_c69708289e771e08d0efacdf6756cd2ab2c3f3882116cd2e1b7490549c68a342->leave($__internal_c69708289e771e08d0efacdf6756cd2ab2c3f3882116cd2e1b7490549c68a342_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
