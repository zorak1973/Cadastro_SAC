<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_637367d378c5b10e8da0d089e735878e032e6c1d3b00e63402fd1a2d6d92c046 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_734aabdb4460f99ef33006a31b737d9afef1c1c8d9793906c56fd51bf85f5ba3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_734aabdb4460f99ef33006a31b737d9afef1c1c8d9793906c56fd51bf85f5ba3->enter($__internal_734aabdb4460f99ef33006a31b737d9afef1c1c8d9793906c56fd51bf85f5ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_6bd7d5f2794fdc8641090e751bccb08b61d43c8b03c5ab1dd635abde06587948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd7d5f2794fdc8641090e751bccb08b61d43c8b03c5ab1dd635abde06587948->enter($__internal_6bd7d5f2794fdc8641090e751bccb08b61d43c8b03c5ab1dd635abde06587948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_734aabdb4460f99ef33006a31b737d9afef1c1c8d9793906c56fd51bf85f5ba3->leave($__internal_734aabdb4460f99ef33006a31b737d9afef1c1c8d9793906c56fd51bf85f5ba3_prof);

        
        $__internal_6bd7d5f2794fdc8641090e751bccb08b61d43c8b03c5ab1dd635abde06587948->leave($__internal_6bd7d5f2794fdc8641090e751bccb08b61d43c8b03c5ab1dd635abde06587948_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d4e4aba906d1024705e66ef148846a288b088c53ceb42d2f15e54970bb5d6ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4e4aba906d1024705e66ef148846a288b088c53ceb42d2f15e54970bb5d6ea7->enter($__internal_d4e4aba906d1024705e66ef148846a288b088c53ceb42d2f15e54970bb5d6ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b2ba0b3649aae91198af57fed38b590b4423e310b6af32b09d6f3616d00487a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ba0b3649aae91198af57fed38b590b4423e310b6af32b09d6f3616d00487a8->enter($__internal_b2ba0b3649aae91198af57fed38b590b4423e310b6af32b09d6f3616d00487a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_b2ba0b3649aae91198af57fed38b590b4423e310b6af32b09d6f3616d00487a8->leave($__internal_b2ba0b3649aae91198af57fed38b590b4423e310b6af32b09d6f3616d00487a8_prof);

        
        $__internal_d4e4aba906d1024705e66ef148846a288b088c53ceb42d2f15e54970bb5d6ea7->leave($__internal_d4e4aba906d1024705e66ef148846a288b088c53ceb42d2f15e54970bb5d6ea7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
