<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3cb401ce01179e7febba4add88440ddc0b56fed70c748ae5230ef70d062d41dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_ee50b2bcd99a91102a318b50f9080b938dd572e4056e4669f69cbfe7cb4c0543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee50b2bcd99a91102a318b50f9080b938dd572e4056e4669f69cbfe7cb4c0543->enter($__internal_ee50b2bcd99a91102a318b50f9080b938dd572e4056e4669f69cbfe7cb4c0543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5ad64178c93c5d315729be51a5d24ac04c8cfa0fa8e71f3020673f6d3d0142a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad64178c93c5d315729be51a5d24ac04c8cfa0fa8e71f3020673f6d3d0142a0->enter($__internal_5ad64178c93c5d315729be51a5d24ac04c8cfa0fa8e71f3020673f6d3d0142a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee50b2bcd99a91102a318b50f9080b938dd572e4056e4669f69cbfe7cb4c0543->leave($__internal_ee50b2bcd99a91102a318b50f9080b938dd572e4056e4669f69cbfe7cb4c0543_prof);

        
        $__internal_5ad64178c93c5d315729be51a5d24ac04c8cfa0fa8e71f3020673f6d3d0142a0->leave($__internal_5ad64178c93c5d315729be51a5d24ac04c8cfa0fa8e71f3020673f6d3d0142a0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_91f68b7553bb70177b2b090b298e2684ae50424ec7641f1eaa31581599533614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f68b7553bb70177b2b090b298e2684ae50424ec7641f1eaa31581599533614->enter($__internal_91f68b7553bb70177b2b090b298e2684ae50424ec7641f1eaa31581599533614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_849f910ca0301072f278aa10b963c24f416cd4fb1695f7e3573a3dde3b5c5f24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_849f910ca0301072f278aa10b963c24f416cd4fb1695f7e3573a3dde3b5c5f24->enter($__internal_849f910ca0301072f278aa10b963c24f416cd4fb1695f7e3573a3dde3b5c5f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_849f910ca0301072f278aa10b963c24f416cd4fb1695f7e3573a3dde3b5c5f24->leave($__internal_849f910ca0301072f278aa10b963c24f416cd4fb1695f7e3573a3dde3b5c5f24_prof);

        
        $__internal_91f68b7553bb70177b2b090b298e2684ae50424ec7641f1eaa31581599533614->leave($__internal_91f68b7553bb70177b2b090b298e2684ae50424ec7641f1eaa31581599533614_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2ad8951c2cb8469a945d9795f8b06924d9d7775cea23edd2fc2c6cb31528fb9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ad8951c2cb8469a945d9795f8b06924d9d7775cea23edd2fc2c6cb31528fb9c->enter($__internal_2ad8951c2cb8469a945d9795f8b06924d9d7775cea23edd2fc2c6cb31528fb9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a94922696590424ee36824cd6abc1ff54eaed75149d0a2b34ea361c4c5ebc7a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a94922696590424ee36824cd6abc1ff54eaed75149d0a2b34ea361c4c5ebc7a9->enter($__internal_a94922696590424ee36824cd6abc1ff54eaed75149d0a2b34ea361c4c5ebc7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a94922696590424ee36824cd6abc1ff54eaed75149d0a2b34ea361c4c5ebc7a9->leave($__internal_a94922696590424ee36824cd6abc1ff54eaed75149d0a2b34ea361c4c5ebc7a9_prof);

        
        $__internal_2ad8951c2cb8469a945d9795f8b06924d9d7775cea23edd2fc2c6cb31528fb9c->leave($__internal_2ad8951c2cb8469a945d9795f8b06924d9d7775cea23edd2fc2c6cb31528fb9c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c7a8bfb7436fa9f336ec834343eab53e748c51d836a56a718e92dc7033feadd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7a8bfb7436fa9f336ec834343eab53e748c51d836a56a718e92dc7033feadd0->enter($__internal_c7a8bfb7436fa9f336ec834343eab53e748c51d836a56a718e92dc7033feadd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_288342b0b7ba61eac31a77d095402b7a876df349d8200125349c16a85c969133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288342b0b7ba61eac31a77d095402b7a876df349d8200125349c16a85c969133->enter($__internal_288342b0b7ba61eac31a77d095402b7a876df349d8200125349c16a85c969133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_288342b0b7ba61eac31a77d095402b7a876df349d8200125349c16a85c969133->leave($__internal_288342b0b7ba61eac31a77d095402b7a876df349d8200125349c16a85c969133_prof);

        
        $__internal_c7a8bfb7436fa9f336ec834343eab53e748c51d836a56a718e92dc7033feadd0->leave($__internal_c7a8bfb7436fa9f336ec834343eab53e748c51d836a56a718e92dc7033feadd0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
