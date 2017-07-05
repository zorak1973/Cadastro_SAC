<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1e5f410ba113dbdfed64e1b8c4be2d83d97d6c4d2e7ddc30c124a5b61097e7b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a97229d66e2e3ab277baa4c6fa1bf79ffc650b89ee88c80fef0969d1614ee0d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a97229d66e2e3ab277baa4c6fa1bf79ffc650b89ee88c80fef0969d1614ee0d3->enter($__internal_a97229d66e2e3ab277baa4c6fa1bf79ffc650b89ee88c80fef0969d1614ee0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_47653e18c685b2e2a58c74472e9f882bb5becd1bae6f9b76954a17a17818f90a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47653e18c685b2e2a58c74472e9f882bb5becd1bae6f9b76954a17a17818f90a->enter($__internal_47653e18c685b2e2a58c74472e9f882bb5becd1bae6f9b76954a17a17818f90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a97229d66e2e3ab277baa4c6fa1bf79ffc650b89ee88c80fef0969d1614ee0d3->leave($__internal_a97229d66e2e3ab277baa4c6fa1bf79ffc650b89ee88c80fef0969d1614ee0d3_prof);

        
        $__internal_47653e18c685b2e2a58c74472e9f882bb5becd1bae6f9b76954a17a17818f90a->leave($__internal_47653e18c685b2e2a58c74472e9f882bb5becd1bae6f9b76954a17a17818f90a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da146be006256f7c0dcffcb04f1cf86e611f72c0a6802908e676ef6e00944f67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da146be006256f7c0dcffcb04f1cf86e611f72c0a6802908e676ef6e00944f67->enter($__internal_da146be006256f7c0dcffcb04f1cf86e611f72c0a6802908e676ef6e00944f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_347319eeb84136278140a5ecb81a0902bd9ce7abf86258111f34b2873e5a4149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347319eeb84136278140a5ecb81a0902bd9ce7abf86258111f34b2873e5a4149->enter($__internal_347319eeb84136278140a5ecb81a0902bd9ce7abf86258111f34b2873e5a4149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_347319eeb84136278140a5ecb81a0902bd9ce7abf86258111f34b2873e5a4149->leave($__internal_347319eeb84136278140a5ecb81a0902bd9ce7abf86258111f34b2873e5a4149_prof);

        
        $__internal_da146be006256f7c0dcffcb04f1cf86e611f72c0a6802908e676ef6e00944f67->leave($__internal_da146be006256f7c0dcffcb04f1cf86e611f72c0a6802908e676ef6e00944f67_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_11a642465bc0f3808bea15dd4cc626e0b82d312d0d1d99f93ebefd626631c0a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11a642465bc0f3808bea15dd4cc626e0b82d312d0d1d99f93ebefd626631c0a9->enter($__internal_11a642465bc0f3808bea15dd4cc626e0b82d312d0d1d99f93ebefd626631c0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2d2937d35c1100a431e2df12e8aa141ac6392750420fa8b2789a6010081d7cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d2937d35c1100a431e2df12e8aa141ac6392750420fa8b2789a6010081d7cad->enter($__internal_2d2937d35c1100a431e2df12e8aa141ac6392750420fa8b2789a6010081d7cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2d2937d35c1100a431e2df12e8aa141ac6392750420fa8b2789a6010081d7cad->leave($__internal_2d2937d35c1100a431e2df12e8aa141ac6392750420fa8b2789a6010081d7cad_prof);

        
        $__internal_11a642465bc0f3808bea15dd4cc626e0b82d312d0d1d99f93ebefd626631c0a9->leave($__internal_11a642465bc0f3808bea15dd4cc626e0b82d312d0d1d99f93ebefd626631c0a9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6d6a39c536aab1767c2d1d7494f5c3bacbc4bdb6f1f0085639c1a08dbc9cea5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6d6a39c536aab1767c2d1d7494f5c3bacbc4bdb6f1f0085639c1a08dbc9cea5->enter($__internal_e6d6a39c536aab1767c2d1d7494f5c3bacbc4bdb6f1f0085639c1a08dbc9cea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac9891ad90591e7296783c71522cddfa607c5efed6b9a1ebd2ce369418084341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9891ad90591e7296783c71522cddfa607c5efed6b9a1ebd2ce369418084341->enter($__internal_ac9891ad90591e7296783c71522cddfa607c5efed6b9a1ebd2ce369418084341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ac9891ad90591e7296783c71522cddfa607c5efed6b9a1ebd2ce369418084341->leave($__internal_ac9891ad90591e7296783c71522cddfa607c5efed6b9a1ebd2ce369418084341_prof);

        
        $__internal_e6d6a39c536aab1767c2d1d7494f5c3bacbc4bdb6f1f0085639c1a08dbc9cea5->leave($__internal_e6d6a39c536aab1767c2d1d7494f5c3bacbc4bdb6f1f0085639c1a08dbc9cea5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
