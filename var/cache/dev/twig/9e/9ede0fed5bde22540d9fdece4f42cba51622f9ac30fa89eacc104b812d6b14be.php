<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b201afd74387b7decedbfd7e68f241408a630c0c9782d57865170b717b466962 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_e35df0362ec75e969e8708a09de1ae69e6a22b8c38e4c943e0f96351edc4f9ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e35df0362ec75e969e8708a09de1ae69e6a22b8c38e4c943e0f96351edc4f9ce->enter($__internal_e35df0362ec75e969e8708a09de1ae69e6a22b8c38e4c943e0f96351edc4f9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5ac9339bddd6210929174061a0ae184c0fd4565c2c150260c6284a9f0e6110c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac9339bddd6210929174061a0ae184c0fd4565c2c150260c6284a9f0e6110c7->enter($__internal_5ac9339bddd6210929174061a0ae184c0fd4565c2c150260c6284a9f0e6110c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e35df0362ec75e969e8708a09de1ae69e6a22b8c38e4c943e0f96351edc4f9ce->leave($__internal_e35df0362ec75e969e8708a09de1ae69e6a22b8c38e4c943e0f96351edc4f9ce_prof);

        
        $__internal_5ac9339bddd6210929174061a0ae184c0fd4565c2c150260c6284a9f0e6110c7->leave($__internal_5ac9339bddd6210929174061a0ae184c0fd4565c2c150260c6284a9f0e6110c7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a3af52be03c82d3336437c918889da715202b7f13aa58a394e903e4cd231dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a3af52be03c82d3336437c918889da715202b7f13aa58a394e903e4cd231dea->enter($__internal_2a3af52be03c82d3336437c918889da715202b7f13aa58a394e903e4cd231dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eafc314bf8fb078f2fd72054b0819f1ead313d15f202db2491077a112590393e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eafc314bf8fb078f2fd72054b0819f1ead313d15f202db2491077a112590393e->enter($__internal_eafc314bf8fb078f2fd72054b0819f1ead313d15f202db2491077a112590393e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_eafc314bf8fb078f2fd72054b0819f1ead313d15f202db2491077a112590393e->leave($__internal_eafc314bf8fb078f2fd72054b0819f1ead313d15f202db2491077a112590393e_prof);

        
        $__internal_2a3af52be03c82d3336437c918889da715202b7f13aa58a394e903e4cd231dea->leave($__internal_2a3af52be03c82d3336437c918889da715202b7f13aa58a394e903e4cd231dea_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_af0261f4c59e452ce09e1b947617f81df82015f86f29d94579b3bc8111deb3ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af0261f4c59e452ce09e1b947617f81df82015f86f29d94579b3bc8111deb3ee->enter($__internal_af0261f4c59e452ce09e1b947617f81df82015f86f29d94579b3bc8111deb3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3265b8a2ff4a02dea99ccbcbbada69a203e2d5f71917c67af47e359d3cb7313f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3265b8a2ff4a02dea99ccbcbbada69a203e2d5f71917c67af47e359d3cb7313f->enter($__internal_3265b8a2ff4a02dea99ccbcbbada69a203e2d5f71917c67af47e359d3cb7313f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3265b8a2ff4a02dea99ccbcbbada69a203e2d5f71917c67af47e359d3cb7313f->leave($__internal_3265b8a2ff4a02dea99ccbcbbada69a203e2d5f71917c67af47e359d3cb7313f_prof);

        
        $__internal_af0261f4c59e452ce09e1b947617f81df82015f86f29d94579b3bc8111deb3ee->leave($__internal_af0261f4c59e452ce09e1b947617f81df82015f86f29d94579b3bc8111deb3ee_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3aaf86a4c128dcbc65222c47a57cb56c7a262ad764b6e097bc7818ca4e07bf7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aaf86a4c128dcbc65222c47a57cb56c7a262ad764b6e097bc7818ca4e07bf7b->enter($__internal_3aaf86a4c128dcbc65222c47a57cb56c7a262ad764b6e097bc7818ca4e07bf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8866679a0a0d14fdf569461fc8dc0c573ae3d15591f83f43a40969fa94997cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8866679a0a0d14fdf569461fc8dc0c573ae3d15591f83f43a40969fa94997cd4->enter($__internal_8866679a0a0d14fdf569461fc8dc0c573ae3d15591f83f43a40969fa94997cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8866679a0a0d14fdf569461fc8dc0c573ae3d15591f83f43a40969fa94997cd4->leave($__internal_8866679a0a0d14fdf569461fc8dc0c573ae3d15591f83f43a40969fa94997cd4_prof);

        
        $__internal_3aaf86a4c128dcbc65222c47a57cb56c7a262ad764b6e097bc7818ca4e07bf7b->leave($__internal_3aaf86a4c128dcbc65222c47a57cb56c7a262ad764b6e097bc7818ca4e07bf7b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
