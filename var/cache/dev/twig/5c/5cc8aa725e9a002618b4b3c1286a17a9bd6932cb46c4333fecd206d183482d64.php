<?php

/* lucky/number.html.twig */
class __TwigTemplate_b888b5285eb0263a8568e51ea9273bf94882422fe55624ac07f53d93b19bcb4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4144214858c019ff2229197455368ed7cd5c867787b233f8cfb1788bb535f5ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4144214858c019ff2229197455368ed7cd5c867787b233f8cfb1788bb535f5ae->enter($__internal_4144214858c019ff2229197455368ed7cd5c867787b233f8cfb1788bb535f5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $__internal_35a7bcac2a5f32efdc433c53ba041bcfadcc55535a64e7af4c687535bc1ec60b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a7bcac2a5f32efdc433c53ba041bcfadcc55535a64e7af4c687535bc1ec60b->enter($__internal_35a7bcac2a5f32efdc433c53ba041bcfadcc55535a64e7af4c687535bc1ec60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        echo "\t\t
<h1>Your lucky number is ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["number"]) ? $context["number"] : $this->getContext($context, "number")), "html", null, true);
        echo "</h1>

<img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/images.jpg"), "html", null, true);
        echo "\" alt=\"Symfony!\" />";
        
        $__internal_4144214858c019ff2229197455368ed7cd5c867787b233f8cfb1788bb535f5ae->leave($__internal_4144214858c019ff2229197455368ed7cd5c867787b233f8cfb1788bb535f5ae_prof);

        
        $__internal_35a7bcac2a5f32efdc433c53ba041bcfadcc55535a64e7af4c687535bc1ec60b->leave($__internal_35a7bcac2a5f32efdc433c53ba041bcfadcc55535a64e7af4c687535bc1ec60b_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5e98edd1a386f28fd5500687426faa8c42e461f4d67dd753f49349aa4f210a37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e98edd1a386f28fd5500687426faa8c42e461f4d67dd753f49349aa4f210a37->enter($__internal_5e98edd1a386f28fd5500687426faa8c42e461f4d67dd753f49349aa4f210a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7c13a887b077c7beef2c1f2e4420da80afa0cc5f985a2f97079cbd31ae5e5340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c13a887b077c7beef2c1f2e4420da80afa0cc5f985a2f97079cbd31ae5e5340->enter($__internal_7c13a887b077c7beef2c1f2e4420da80afa0cc5f985a2f97079cbd31ae5e5340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/960.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/template.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_7c13a887b077c7beef2c1f2e4420da80afa0cc5f985a2f97079cbd31ae5e5340->leave($__internal_7c13a887b077c7beef2c1f2e4420da80afa0cc5f985a2f97079cbd31ae5e5340_prof);

        
        $__internal_5e98edd1a386f28fd5500687426faa8c42e461f4d67dd753f49349aa4f210a37->leave($__internal_5e98edd1a386f28fd5500687426faa8c42e461f4d67dd753f49349aa4f210a37_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 3,  56 => 2,  47 => 1,  36 => 7,  31 => 5,  28 => 4,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block stylesheets %}
<link href=\"{{ asset('css/960.css') }}\" rel=\"stylesheet\" />
<link href=\"{{ asset('css/template.css') }}\" rel=\"stylesheet\" />
{% endblock %}\t\t
<h1>Your lucky number is {{ number }}</h1>

<img src=\"{{ asset('images/images.jpg') }}\" alt=\"Symfony!\" />", "lucky/number.html.twig", "C:\\projetos\\cadastro\\app\\Resources\\views\\lucky\\number.html.twig");
    }
}
