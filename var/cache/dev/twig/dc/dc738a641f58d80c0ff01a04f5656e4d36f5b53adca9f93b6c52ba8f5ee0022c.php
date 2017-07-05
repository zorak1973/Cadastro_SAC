<?php

/* :chamado:form.html.twig */
class __TwigTemplate_d351e61ae8b62e3be24436c807a04e4fa21d67333ae429b10eefee4dab6db7cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":chamado:form.html.twig", 1);
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
        $__internal_9726b4b2f80f76acb2149bd1d160fd6a08b01e9e9af581bf0be344fe6d365e9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9726b4b2f80f76acb2149bd1d160fd6a08b01e9e9af581bf0be344fe6d365e9f->enter($__internal_9726b4b2f80f76acb2149bd1d160fd6a08b01e9e9af581bf0be344fe6d365e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chamado:form.html.twig"));

        $__internal_bd303685ab6ac892336120d0b8bcb7077bf99d828ab3d822b877a0fd4e9a55d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd303685ab6ac892336120d0b8bcb7077bf99d828ab3d822b877a0fd4e9a55d1->enter($__internal_bd303685ab6ac892336120d0b8bcb7077bf99d828ab3d822b877a0fd4e9a55d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chamado:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9726b4b2f80f76acb2149bd1d160fd6a08b01e9e9af581bf0be344fe6d365e9f->leave($__internal_9726b4b2f80f76acb2149bd1d160fd6a08b01e9e9af581bf0be344fe6d365e9f_prof);

        
        $__internal_bd303685ab6ac892336120d0b8bcb7077bf99d828ab3d822b877a0fd4e9a55d1->leave($__internal_bd303685ab6ac892336120d0b8bcb7077bf99d828ab3d822b877a0fd4e9a55d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0896a23f386eb8886f5e626a95c6a3edec88cc942d4054376e03af7a4bb6ee71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0896a23f386eb8886f5e626a95c6a3edec88cc942d4054376e03af7a4bb6ee71->enter($__internal_0896a23f386eb8886f5e626a95c6a3edec88cc942d4054376e03af7a4bb6ee71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f665b9a919da4aac3d40d092777fe1896f09803c9c1c8484c60d043077313ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f665b9a919da4aac3d40d092777fe1896f09803c9c1c8484c60d043077313ad0->enter($__internal_f665b9a919da4aac3d40d092777fe1896f09803c9c1c8484c60d043077313ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t\t<div class=\"jumbotron\" style=\"border-bottom:3px solid #111\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<h2><span class=\"glyphicon glyphicon-list-alt\"></span>&nbsp;Formulário</h2>
\t\t\t\t\t<!--<hr />-->
\t\t\t\t\t<p><strong>Cadastro de Chamados - SAC </strong></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
<div class=\"container\">
      <!-- Example row of columns -->
\t  <div class=\"form-group\">
\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "Aviso"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 18
            echo "\t\t\t<div class=\"flash-Aviso\">
\t\t\t\t<div class=\"alert alert-success alert-dismissable\">
\t\t\t\t\t<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
\t\t\t\t\t<p class=\"text-success\"><strong>";
            // line 21
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</strong></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t  </div>
\t\t";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
<div class=\"form-group\">
     <div class=\"row\">
\t\t<div class=\"col-md-3\"></div>
\t\t<div class=\"col-md-6\">
\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nome", array()), 'label');
        echo "
\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nome", array()), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nome", array()), 'errors');
        echo "
\t\t</div>
\t</div>
</div>
<div class=\"form-group\">
     <div class=\"row\">
\t\t<div class=\"col-md-3\"></div>
\t\t<div class=\"col-md-3\">
\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"col-md-2\">
\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pedido_id", array()), 'label');
        echo "
\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pedido_id", array()), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"col-md-1\">
\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pedido_id", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"col-md-2\">
\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
\t\t</div>
\t</div>
</div>
<div class=\"form-group\">
     <div class=\"row\">
\t\t<div class=\"col-md-3\"></div>
\t\t<div class=\"col-md-6\">
\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'label');
        echo "
\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'errors');
        echo "
\t\t</div>
\t</div>
</div>
<div class=\"form-group\">
\t<div class=\"row\">
\t\t<div class=\"col-md-3\"></div>
\t\t<div class=\"col-md-6\">
\t\t";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacao", array()), 'label');
        echo "
\t\t";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacao", array()), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacao", array()), 'errors');
        echo "
\t\t</div>
\t</div>\t
</div>\t
<div class=\"form-group\">
\t<div class=\"row\">
\t\t<div class=\"col-md-3\"></div>
\t\t
\t\t<div class=\"col-md-2\">
\t\t";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t
\t\t</div>
\t</div>
</div>\t
<div class=\"form-group\">
\t<div class=\"row\">
\t\t<div class=\"col-md-3\"></div>
\t\t<div class=\"col-md-6\">
\t\t";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t</div>
\t\t
\t</div>
</div>\t
</div>
";
        // line 107
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "



";
        
        $__internal_f665b9a919da4aac3d40d092777fe1896f09803c9c1c8484c60d043077313ad0->leave($__internal_f665b9a919da4aac3d40d092777fe1896f09803c9c1c8484c60d043077313ad0_prof);

        
        $__internal_0896a23f386eb8886f5e626a95c6a3edec88cc942d4054376e03af7a4bb6ee71->leave($__internal_0896a23f386eb8886f5e626a95c6a3edec88cc942d4054376e03af7a4bb6ee71_prof);

    }

    public function getTemplateName()
    {
        return ":chamado:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 107,  213 => 99,  199 => 88,  187 => 79,  181 => 76,  177 => 75,  166 => 67,  160 => 64,  156 => 63,  145 => 55,  139 => 52,  133 => 49,  129 => 48,  123 => 45,  119 => 44,  108 => 36,  102 => 33,  98 => 32,  90 => 27,  86 => 26,  83 => 25,  73 => 21,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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

\t\t<div class=\"jumbotron\" style=\"border-bottom:3px solid #111\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<h2><span class=\"glyphicon glyphicon-list-alt\"></span>&nbsp;Formulário</h2>
\t\t\t\t\t<!--<hr />-->
\t\t\t\t\t<p><strong>Cadastro de Chamados - SAC </strong></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
<div class=\"container\">
      <!-- Example row of columns -->
\t  <div class=\"form-group\">
\t\t{% for flash_message in app.session.flashBag.get('Aviso') %}
\t\t\t<div class=\"flash-Aviso\">
\t\t\t\t<div class=\"alert alert-success alert-dismissable\">
\t\t\t\t\t<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
\t\t\t\t\t<p class=\"text-success\"><strong>{{ flash_message }}</strong></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t  </div>
\t\t{{ form_start(form) }}
\t\t{{ form_errors(form) }}
<div class=\"form-group\">
     <div class=\"row\">
\t\t<div class=\"col-md-3\"></div>
\t\t<div class=\"col-md-6\">
\t\t{{ form_label(form.nome) }}
\t\t{{ form_widget(form.nome) }}
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t{{ form_errors(form.nome) }}
\t\t</div>
\t</div>
</div>
<div class=\"form-group\">
     <div class=\"row\">
\t\t<div class=\"col-md-3\"></div>
\t\t<div class=\"col-md-3\">
\t\t{{ form_label(form.email) }}
\t\t{{ form_widget(form.email) }}
\t\t</div>
\t\t<div class=\"col-md-2\">
\t\t{{ form_label(form.pedido_id) }}
\t\t{{ form_widget(form.pedido_id) }}
\t\t</div>
\t\t<div class=\"col-md-1\">
\t\t{{ form_errors(form.pedido_id) }}
\t\t</div>
\t\t<div class=\"col-md-2\">
\t\t{{ form_errors(form.email) }}
\t\t</div>
\t</div>
</div>
<div class=\"form-group\">
     <div class=\"row\">
\t\t<div class=\"col-md-3\"></div>
\t\t<div class=\"col-md-6\">
\t\t{{ form_label(form.titulo) }}
\t\t{{ form_widget(form.titulo) }}
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t{{ form_errors(form.titulo) }}
\t\t</div>
\t</div>
</div>
<div class=\"form-group\">
\t<div class=\"row\">
\t\t<div class=\"col-md-3\"></div>
\t\t<div class=\"col-md-6\">
\t\t{{ form_label(form.observacao) }}
\t\t{{ form_widget(form.observacao) }}
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t{{ form_errors(form.observacao) }}
\t\t</div>
\t</div>\t
</div>\t
<div class=\"form-group\">
\t<div class=\"row\">
\t\t<div class=\"col-md-3\"></div>
\t\t
\t\t<div class=\"col-md-2\">
\t\t{{ form_widget(form.save) }}
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t
\t\t</div>
\t</div>
</div>\t
<div class=\"form-group\">
\t<div class=\"row\">
\t\t<div class=\"col-md-3\"></div>
\t\t<div class=\"col-md-6\">
\t\t{{ form_widget(form.save) }}
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t</div>
\t\t
\t</div>
</div>\t
</div>
{{ form_end(form) }}



{% endblock %}", ":chamado:form.html.twig", "C:\\projetos\\cadastro\\app/Resources\\views/chamado/form.html.twig");
    }
}
