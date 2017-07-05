<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_b357c47b7228bad7d375941215fd3de733456903ff7fd17418f2bb7c0601c3aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a26445c721793dd277f8adf02f904e303fffb8fa93ab9ef20137643ecc08e1d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a26445c721793dd277f8adf02f904e303fffb8fa93ab9ef20137643ecc08e1d0->enter($__internal_a26445c721793dd277f8adf02f904e303fffb8fa93ab9ef20137643ecc08e1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_27d1fac896400b6281f5bf6aac38559df3aba3cb6c91bb4be2997f92e00b96c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d1fac896400b6281f5bf6aac38559df3aba3cb6c91bb4be2997f92e00b96c0->enter($__internal_27d1fac896400b6281f5bf6aac38559df3aba3cb6c91bb4be2997f92e00b96c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a26445c721793dd277f8adf02f904e303fffb8fa93ab9ef20137643ecc08e1d0->leave($__internal_a26445c721793dd277f8adf02f904e303fffb8fa93ab9ef20137643ecc08e1d0_prof);

        
        $__internal_27d1fac896400b6281f5bf6aac38559df3aba3cb6c91bb4be2997f92e00b96c0->leave($__internal_27d1fac896400b6281f5bf6aac38559df3aba3cb6c91bb4be2997f92e00b96c0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5be700c15c7dca49d857a90c514f43c1d68fac57a4efe89900d0b90509a7eed9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5be700c15c7dca49d857a90c514f43c1d68fac57a4efe89900d0b90509a7eed9->enter($__internal_5be700c15c7dca49d857a90c514f43c1d68fac57a4efe89900d0b90509a7eed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_16b7a5e1a3ef78553b68058ba8763193868b232c95f3647897d4e1e47f3a2386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b7a5e1a3ef78553b68058ba8763193868b232c95f3647897d4e1e47f3a2386->enter($__internal_16b7a5e1a3ef78553b68058ba8763193868b232c95f3647897d4e1e47f3a2386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_16b7a5e1a3ef78553b68058ba8763193868b232c95f3647897d4e1e47f3a2386->leave($__internal_16b7a5e1a3ef78553b68058ba8763193868b232c95f3647897d4e1e47f3a2386_prof);

        
        $__internal_5be700c15c7dca49d857a90c514f43c1d68fac57a4efe89900d0b90509a7eed9->leave($__internal_5be700c15c7dca49d857a90c514f43c1d68fac57a4efe89900d0b90509a7eed9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_81f353832df50d7e57e324a7412fa6b1af5f554d3e1378e40ca433beeb81e9b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81f353832df50d7e57e324a7412fa6b1af5f554d3e1378e40ca433beeb81e9b0->enter($__internal_81f353832df50d7e57e324a7412fa6b1af5f554d3e1378e40ca433beeb81e9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bf9c803f48ed8d59e6b6401031179a4d21c9e6f7f82440d225dafd33d95c577a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf9c803f48ed8d59e6b6401031179a4d21c9e6f7f82440d225dafd33d95c577a->enter($__internal_bf9c803f48ed8d59e6b6401031179a4d21c9e6f7f82440d225dafd33d95c577a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_bf9c803f48ed8d59e6b6401031179a4d21c9e6f7f82440d225dafd33d95c577a->leave($__internal_bf9c803f48ed8d59e6b6401031179a4d21c9e6f7f82440d225dafd33d95c577a_prof);

        
        $__internal_81f353832df50d7e57e324a7412fa6b1af5f554d3e1378e40ca433beeb81e9b0->leave($__internal_81f353832df50d7e57e324a7412fa6b1af5f554d3e1378e40ca433beeb81e9b0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4694b752bdc06bd621eea4b9c403ce42a6d68644aaa4034b6f41cc6cdc337cfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4694b752bdc06bd621eea4b9c403ce42a6d68644aaa4034b6f41cc6cdc337cfa->enter($__internal_4694b752bdc06bd621eea4b9c403ce42a6d68644aaa4034b6f41cc6cdc337cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1338ecf53d1c40c6be750086efb32f6a30fdd5b9bb5d5b17ccaa5422f27d270f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1338ecf53d1c40c6be750086efb32f6a30fdd5b9bb5d5b17ccaa5422f27d270f->enter($__internal_1338ecf53d1c40c6be750086efb32f6a30fdd5b9bb5d5b17ccaa5422f27d270f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1338ecf53d1c40c6be750086efb32f6a30fdd5b9bb5d5b17ccaa5422f27d270f->leave($__internal_1338ecf53d1c40c6be750086efb32f6a30fdd5b9bb5d5b17ccaa5422f27d270f_prof);

        
        $__internal_4694b752bdc06bd621eea4b9c403ce42a6d68644aaa4034b6f41cc6cdc337cfa->leave($__internal_4694b752bdc06bd621eea4b9c403ce42a6d68644aaa4034b6f41cc6cdc337cfa_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
