<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_9f196846f7742a469e03cab6834d872ebbf65dbf25fcbe5449e61118d4d0bede extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e613f61a942a93a3709eff515deee48386ad0e3be851bf88aace292f9449ca66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e613f61a942a93a3709eff515deee48386ad0e3be851bf88aace292f9449ca66->enter($__internal_e613f61a942a93a3709eff515deee48386ad0e3be851bf88aace292f9449ca66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_b495619ec588d1c51a2ee296310cf7f8c59a3829633bff1b295deab08ecc0e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b495619ec588d1c51a2ee296310cf7f8c59a3829633bff1b295deab08ecc0e1c->enter($__internal_b495619ec588d1c51a2ee296310cf7f8c59a3829633bff1b295deab08ecc0e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e613f61a942a93a3709eff515deee48386ad0e3be851bf88aace292f9449ca66->leave($__internal_e613f61a942a93a3709eff515deee48386ad0e3be851bf88aace292f9449ca66_prof);

        
        $__internal_b495619ec588d1c51a2ee296310cf7f8c59a3829633bff1b295deab08ecc0e1c->leave($__internal_b495619ec588d1c51a2ee296310cf7f8c59a3829633bff1b295deab08ecc0e1c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c46e89c154da81f22934e2d7532b24cc3e9fb26ebd511e905b53af872c12f1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c46e89c154da81f22934e2d7532b24cc3e9fb26ebd511e905b53af872c12f1e->enter($__internal_2c46e89c154da81f22934e2d7532b24cc3e9fb26ebd511e905b53af872c12f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_755cdaf1b5ceab5012ee898424e46b33c829ebca2abebc4c4ef097287b0a8ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_755cdaf1b5ceab5012ee898424e46b33c829ebca2abebc4c4ef097287b0a8ced->enter($__internal_755cdaf1b5ceab5012ee898424e46b33c829ebca2abebc4c4ef097287b0a8ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_755cdaf1b5ceab5012ee898424e46b33c829ebca2abebc4c4ef097287b0a8ced->leave($__internal_755cdaf1b5ceab5012ee898424e46b33c829ebca2abebc4c4ef097287b0a8ced_prof);

        
        $__internal_2c46e89c154da81f22934e2d7532b24cc3e9fb26ebd511e905b53af872c12f1e->leave($__internal_2c46e89c154da81f22934e2d7532b24cc3e9fb26ebd511e905b53af872c12f1e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_27c13b09e62b6bdc9941aded5465d579d4c6634c63847b87263e64f81c238c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27c13b09e62b6bdc9941aded5465d579d4c6634c63847b87263e64f81c238c38->enter($__internal_27c13b09e62b6bdc9941aded5465d579d4c6634c63847b87263e64f81c238c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d83a7f96540b9080d839c378eae796454670efab251390f21527205a95ccd4e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d83a7f96540b9080d839c378eae796454670efab251390f21527205a95ccd4e4->enter($__internal_d83a7f96540b9080d839c378eae796454670efab251390f21527205a95ccd4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d83a7f96540b9080d839c378eae796454670efab251390f21527205a95ccd4e4->leave($__internal_d83a7f96540b9080d839c378eae796454670efab251390f21527205a95ccd4e4_prof);

        
        $__internal_27c13b09e62b6bdc9941aded5465d579d4c6634c63847b87263e64f81c238c38->leave($__internal_27c13b09e62b6bdc9941aded5465d579d4c6634c63847b87263e64f81c238c38_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
