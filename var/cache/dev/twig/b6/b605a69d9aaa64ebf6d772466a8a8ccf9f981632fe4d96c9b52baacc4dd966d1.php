<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_846801f94c64baf9a2dc19545090a8a747d74f839425e5ee374eeb9d87536847 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_e573bc7e02842d6fedeb383168e9fd4c2f9e7197748f2c19e205d70bf8039e51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e573bc7e02842d6fedeb383168e9fd4c2f9e7197748f2c19e205d70bf8039e51->enter($__internal_e573bc7e02842d6fedeb383168e9fd4c2f9e7197748f2c19e205d70bf8039e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_a4fd31d94243587b6a77dbcd119ed79ec31d02b87ad867873ec629ed8603bf65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4fd31d94243587b6a77dbcd119ed79ec31d02b87ad867873ec629ed8603bf65->enter($__internal_a4fd31d94243587b6a77dbcd119ed79ec31d02b87ad867873ec629ed8603bf65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e573bc7e02842d6fedeb383168e9fd4c2f9e7197748f2c19e205d70bf8039e51->leave($__internal_e573bc7e02842d6fedeb383168e9fd4c2f9e7197748f2c19e205d70bf8039e51_prof);

        
        $__internal_a4fd31d94243587b6a77dbcd119ed79ec31d02b87ad867873ec629ed8603bf65->leave($__internal_a4fd31d94243587b6a77dbcd119ed79ec31d02b87ad867873ec629ed8603bf65_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5cc18e66298a6d3498f6f9d20720d5ca68ca5841b9567a5c760788a93f01f78d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc18e66298a6d3498f6f9d20720d5ca68ca5841b9567a5c760788a93f01f78d->enter($__internal_5cc18e66298a6d3498f6f9d20720d5ca68ca5841b9567a5c760788a93f01f78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d16edddee03574147025416a6a4e149e14aaab4e819d647d7d1c4e6bb3d16023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d16edddee03574147025416a6a4e149e14aaab4e819d647d7d1c4e6bb3d16023->enter($__internal_d16edddee03574147025416a6a4e149e14aaab4e819d647d7d1c4e6bb3d16023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d16edddee03574147025416a6a4e149e14aaab4e819d647d7d1c4e6bb3d16023->leave($__internal_d16edddee03574147025416a6a4e149e14aaab4e819d647d7d1c4e6bb3d16023_prof);

        
        $__internal_5cc18e66298a6d3498f6f9d20720d5ca68ca5841b9567a5c760788a93f01f78d->leave($__internal_5cc18e66298a6d3498f6f9d20720d5ca68ca5841b9567a5c760788a93f01f78d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f07282aca2d601451c8ca864286e3afdef24ec45a7fd3b2ad1237c579033c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f07282aca2d601451c8ca864286e3afdef24ec45a7fd3b2ad1237c579033c44->enter($__internal_6f07282aca2d601451c8ca864286e3afdef24ec45a7fd3b2ad1237c579033c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_607d489e5cce106bd890800e09a15be3e83d24ffb4f18f00f0305a974d24c23a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_607d489e5cce106bd890800e09a15be3e83d24ffb4f18f00f0305a974d24c23a->enter($__internal_607d489e5cce106bd890800e09a15be3e83d24ffb4f18f00f0305a974d24c23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_607d489e5cce106bd890800e09a15be3e83d24ffb4f18f00f0305a974d24c23a->leave($__internal_607d489e5cce106bd890800e09a15be3e83d24ffb4f18f00f0305a974d24c23a_prof);

        
        $__internal_6f07282aca2d601451c8ca864286e3afdef24ec45a7fd3b2ad1237c579033c44->leave($__internal_6f07282aca2d601451c8ca864286e3afdef24ec45a7fd3b2ad1237c579033c44_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
