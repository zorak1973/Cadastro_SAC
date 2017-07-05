<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_717376fdace9d1390dcb59884eea0651d79e3cc377472bb03b2b0a3e598bd4a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_3b3934d0c7b2b1a16ebd8503b966d054debb07522980ad0924f13a9a8472f37f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b3934d0c7b2b1a16ebd8503b966d054debb07522980ad0924f13a9a8472f37f->enter($__internal_3b3934d0c7b2b1a16ebd8503b966d054debb07522980ad0924f13a9a8472f37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6b5dfc4e24f3a47a4d1ff2b8ef2d1d4c6de96045cddae75086deb6c8a218b1cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b5dfc4e24f3a47a4d1ff2b8ef2d1d4c6de96045cddae75086deb6c8a218b1cd->enter($__internal_6b5dfc4e24f3a47a4d1ff2b8ef2d1d4c6de96045cddae75086deb6c8a218b1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b3934d0c7b2b1a16ebd8503b966d054debb07522980ad0924f13a9a8472f37f->leave($__internal_3b3934d0c7b2b1a16ebd8503b966d054debb07522980ad0924f13a9a8472f37f_prof);

        
        $__internal_6b5dfc4e24f3a47a4d1ff2b8ef2d1d4c6de96045cddae75086deb6c8a218b1cd->leave($__internal_6b5dfc4e24f3a47a4d1ff2b8ef2d1d4c6de96045cddae75086deb6c8a218b1cd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_27d479642382c1730ae78a1e6445cd99a42a35c36092ea8be71e55447f983a7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27d479642382c1730ae78a1e6445cd99a42a35c36092ea8be71e55447f983a7d->enter($__internal_27d479642382c1730ae78a1e6445cd99a42a35c36092ea8be71e55447f983a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_82ffe4fd4b28721f2a2a95109a790fc89757de34583b6f86ab7b0177f379f824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ffe4fd4b28721f2a2a95109a790fc89757de34583b6f86ab7b0177f379f824->enter($__internal_82ffe4fd4b28721f2a2a95109a790fc89757de34583b6f86ab7b0177f379f824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_82ffe4fd4b28721f2a2a95109a790fc89757de34583b6f86ab7b0177f379f824->leave($__internal_82ffe4fd4b28721f2a2a95109a790fc89757de34583b6f86ab7b0177f379f824_prof);

        
        $__internal_27d479642382c1730ae78a1e6445cd99a42a35c36092ea8be71e55447f983a7d->leave($__internal_27d479642382c1730ae78a1e6445cd99a42a35c36092ea8be71e55447f983a7d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
