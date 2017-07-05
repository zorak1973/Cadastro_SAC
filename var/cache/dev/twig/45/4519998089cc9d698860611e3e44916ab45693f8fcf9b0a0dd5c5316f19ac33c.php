<?php

/* :lucky:number.html.twig */
class __TwigTemplate_fc988d41e6903b3ae595cd51d4409877fbc4da9a9166e3a8e9571c612a436f24 extends Twig_Template
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
        $__internal_866f73606ae81af21895ef369405d7b6f57fec32c27ba2fe30450846ccc28bf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_866f73606ae81af21895ef369405d7b6f57fec32c27ba2fe30450846ccc28bf5->enter($__internal_866f73606ae81af21895ef369405d7b6f57fec32c27ba2fe30450846ccc28bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":lucky:number.html.twig"));

        $__internal_7110636d85fefc0f75e256211ae437efb1dd03c4b31f65c662baab71a66bf2fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7110636d85fefc0f75e256211ae437efb1dd03c4b31f65c662baab71a66bf2fb->enter($__internal_7110636d85fefc0f75e256211ae437efb1dd03c4b31f65c662baab71a66bf2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":lucky:number.html.twig"));

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
        
        $__internal_866f73606ae81af21895ef369405d7b6f57fec32c27ba2fe30450846ccc28bf5->leave($__internal_866f73606ae81af21895ef369405d7b6f57fec32c27ba2fe30450846ccc28bf5_prof);

        
        $__internal_7110636d85fefc0f75e256211ae437efb1dd03c4b31f65c662baab71a66bf2fb->leave($__internal_7110636d85fefc0f75e256211ae437efb1dd03c4b31f65c662baab71a66bf2fb_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7da0222348443900cc1ea082b2a0799f2e4721b3693e24395252c2c3c17f5eb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7da0222348443900cc1ea082b2a0799f2e4721b3693e24395252c2c3c17f5eb2->enter($__internal_7da0222348443900cc1ea082b2a0799f2e4721b3693e24395252c2c3c17f5eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9a28025078565cf796a1a3614def0b46eceb14a5668af3aa661ca201c9f2e976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a28025078565cf796a1a3614def0b46eceb14a5668af3aa661ca201c9f2e976->enter($__internal_9a28025078565cf796a1a3614def0b46eceb14a5668af3aa661ca201c9f2e976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/960.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/template.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_9a28025078565cf796a1a3614def0b46eceb14a5668af3aa661ca201c9f2e976->leave($__internal_9a28025078565cf796a1a3614def0b46eceb14a5668af3aa661ca201c9f2e976_prof);

        
        $__internal_7da0222348443900cc1ea082b2a0799f2e4721b3693e24395252c2c3c17f5eb2->leave($__internal_7da0222348443900cc1ea082b2a0799f2e4721b3693e24395252c2c3c17f5eb2_prof);

    }

    public function getTemplateName()
    {
        return ":lucky:number.html.twig";
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

<img src=\"{{ asset('images/images.jpg') }}\" alt=\"Symfony!\" />", ":lucky:number.html.twig", "C:\\projetos\\cadastro\\app/Resources\\views/lucky/number.html.twig");
    }
}
