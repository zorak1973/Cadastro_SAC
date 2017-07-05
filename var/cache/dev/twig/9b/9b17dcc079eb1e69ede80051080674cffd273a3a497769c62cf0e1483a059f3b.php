<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_62afdc2acdb84995af937538e6dc17dfe733bcee1da5135db2549c46e049ab6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71266c1133c0244b0242c6b65eab3053597e180a84c7b414658bf334cc50524f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71266c1133c0244b0242c6b65eab3053597e180a84c7b414658bf334cc50524f->enter($__internal_71266c1133c0244b0242c6b65eab3053597e180a84c7b414658bf334cc50524f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_27baab6c07935ef358d2e41ffe1f4261ba5f768057ebf916723fb71e19abf71d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27baab6c07935ef358d2e41ffe1f4261ba5f768057ebf916723fb71e19abf71d->enter($__internal_27baab6c07935ef358d2e41ffe1f4261ba5f768057ebf916723fb71e19abf71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_71266c1133c0244b0242c6b65eab3053597e180a84c7b414658bf334cc50524f->leave($__internal_71266c1133c0244b0242c6b65eab3053597e180a84c7b414658bf334cc50524f_prof);

        
        $__internal_27baab6c07935ef358d2e41ffe1f4261ba5f768057ebf916723fb71e19abf71d->leave($__internal_27baab6c07935ef358d2e41ffe1f4261ba5f768057ebf916723fb71e19abf71d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_36b5b508e8eac403948935b43505dea0a5706d0f1131c8d9e20e5432145d73c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36b5b508e8eac403948935b43505dea0a5706d0f1131c8d9e20e5432145d73c3->enter($__internal_36b5b508e8eac403948935b43505dea0a5706d0f1131c8d9e20e5432145d73c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9b5f2d11f11ec91c49acf2a7394b37d20ed460a4effee256fb4e21ad15bb4f3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5f2d11f11ec91c49acf2a7394b37d20ed460a4effee256fb4e21ad15bb4f3d->enter($__internal_9b5f2d11f11ec91c49acf2a7394b37d20ed460a4effee256fb4e21ad15bb4f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9b5f2d11f11ec91c49acf2a7394b37d20ed460a4effee256fb4e21ad15bb4f3d->leave($__internal_9b5f2d11f11ec91c49acf2a7394b37d20ed460a4effee256fb4e21ad15bb4f3d_prof);

        
        $__internal_36b5b508e8eac403948935b43505dea0a5706d0f1131c8d9e20e5432145d73c3->leave($__internal_36b5b508e8eac403948935b43505dea0a5706d0f1131c8d9e20e5432145d73c3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
