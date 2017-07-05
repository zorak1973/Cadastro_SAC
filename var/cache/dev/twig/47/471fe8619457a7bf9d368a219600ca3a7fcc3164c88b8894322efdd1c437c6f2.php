<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_46a6fdda86d006463a0143f836e0c86678c24aef2436cb70b86456619e5473ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcbd9fadfca70cb2b55c74a0dc8c5d52f21f491048ede759a05e07d1c956ec7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcbd9fadfca70cb2b55c74a0dc8c5d52f21f491048ede759a05e07d1c956ec7d->enter($__internal_dcbd9fadfca70cb2b55c74a0dc8c5d52f21f491048ede759a05e07d1c956ec7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_7ca5c6a8e36c9a2d5e1bd6dbda1b22f596ca69b9483741ce4397fbac949b4a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca5c6a8e36c9a2d5e1bd6dbda1b22f596ca69b9483741ce4397fbac949b4a10->enter($__internal_7ca5c6a8e36c9a2d5e1bd6dbda1b22f596ca69b9483741ce4397fbac949b4a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcbd9fadfca70cb2b55c74a0dc8c5d52f21f491048ede759a05e07d1c956ec7d->leave($__internal_dcbd9fadfca70cb2b55c74a0dc8c5d52f21f491048ede759a05e07d1c956ec7d_prof);

        
        $__internal_7ca5c6a8e36c9a2d5e1bd6dbda1b22f596ca69b9483741ce4397fbac949b4a10->leave($__internal_7ca5c6a8e36c9a2d5e1bd6dbda1b22f596ca69b9483741ce4397fbac949b4a10_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c14ec099f9a5f281f51e7f61e6ca0f936644c0046d5f9faa29e93730a8ef0740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c14ec099f9a5f281f51e7f61e6ca0f936644c0046d5f9faa29e93730a8ef0740->enter($__internal_c14ec099f9a5f281f51e7f61e6ca0f936644c0046d5f9faa29e93730a8ef0740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4e4128ad6e987680ea6275dbad60b0fc1e3df3e8573bb5b9fe8ffaf2c8f0af93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4128ad6e987680ea6275dbad60b0fc1e3df3e8573bb5b9fe8ffaf2c8f0af93->enter($__internal_4e4128ad6e987680ea6275dbad60b0fc1e3df3e8573bb5b9fe8ffaf2c8f0af93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4e4128ad6e987680ea6275dbad60b0fc1e3df3e8573bb5b9fe8ffaf2c8f0af93->leave($__internal_4e4128ad6e987680ea6275dbad60b0fc1e3df3e8573bb5b9fe8ffaf2c8f0af93_prof);

        
        $__internal_c14ec099f9a5f281f51e7f61e6ca0f936644c0046d5f9faa29e93730a8ef0740->leave($__internal_c14ec099f9a5f281f51e7f61e6ca0f936644c0046d5f9faa29e93730a8ef0740_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_849aba7f20a5063b153305a7ae5e841ab29f34739d836950ffa3910e072b4bc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_849aba7f20a5063b153305a7ae5e841ab29f34739d836950ffa3910e072b4bc0->enter($__internal_849aba7f20a5063b153305a7ae5e841ab29f34739d836950ffa3910e072b4bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_55047ed58f7ce43a6047d169fba893468319018a16864600dbf81752dbf79de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55047ed58f7ce43a6047d169fba893468319018a16864600dbf81752dbf79de2->enter($__internal_55047ed58f7ce43a6047d169fba893468319018a16864600dbf81752dbf79de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_55047ed58f7ce43a6047d169fba893468319018a16864600dbf81752dbf79de2->leave($__internal_55047ed58f7ce43a6047d169fba893468319018a16864600dbf81752dbf79de2_prof);

        
        $__internal_849aba7f20a5063b153305a7ae5e841ab29f34739d836950ffa3910e072b4bc0->leave($__internal_849aba7f20a5063b153305a7ae5e841ab29f34739d836950ffa3910e072b4bc0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b07bdc557bb0a6d77d8b57d766dfaa9964116bb560211de666ba1d98c65cb75d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b07bdc557bb0a6d77d8b57d766dfaa9964116bb560211de666ba1d98c65cb75d->enter($__internal_b07bdc557bb0a6d77d8b57d766dfaa9964116bb560211de666ba1d98c65cb75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2ea2225a649c1ab72bf7a0c3f68166224303455a9f0e73237a4156dc1f85c6ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea2225a649c1ab72bf7a0c3f68166224303455a9f0e73237a4156dc1f85c6ad->enter($__internal_2ea2225a649c1ab72bf7a0c3f68166224303455a9f0e73237a4156dc1f85c6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2ea2225a649c1ab72bf7a0c3f68166224303455a9f0e73237a4156dc1f85c6ad->leave($__internal_2ea2225a649c1ab72bf7a0c3f68166224303455a9f0e73237a4156dc1f85c6ad_prof);

        
        $__internal_b07bdc557bb0a6d77d8b57d766dfaa9964116bb560211de666ba1d98c65cb75d->leave($__internal_b07bdc557bb0a6d77d8b57d766dfaa9964116bb560211de666ba1d98c65cb75d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
