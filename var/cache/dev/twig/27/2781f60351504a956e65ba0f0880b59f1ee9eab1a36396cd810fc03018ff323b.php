<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a155f3f32d660bbcfc4f0b384c34f70ab26182ee99862c9b7c63fef372e4d2a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_d49d5bb5d0b6d2d7a371e64493e183e5b3440c1172b6ea742a54d081acc08133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d49d5bb5d0b6d2d7a371e64493e183e5b3440c1172b6ea742a54d081acc08133->enter($__internal_d49d5bb5d0b6d2d7a371e64493e183e5b3440c1172b6ea742a54d081acc08133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_ff3a73af13aa913c4b945601c91e8bee75801bf4955eb0389d8d0c709aea1b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff3a73af13aa913c4b945601c91e8bee75801bf4955eb0389d8d0c709aea1b61->enter($__internal_ff3a73af13aa913c4b945601c91e8bee75801bf4955eb0389d8d0c709aea1b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d49d5bb5d0b6d2d7a371e64493e183e5b3440c1172b6ea742a54d081acc08133->leave($__internal_d49d5bb5d0b6d2d7a371e64493e183e5b3440c1172b6ea742a54d081acc08133_prof);

        
        $__internal_ff3a73af13aa913c4b945601c91e8bee75801bf4955eb0389d8d0c709aea1b61->leave($__internal_ff3a73af13aa913c4b945601c91e8bee75801bf4955eb0389d8d0c709aea1b61_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c5f2b8edae32ec40d7925cb402a92023cf2dcfd0ee62255224bba8db1769aa05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5f2b8edae32ec40d7925cb402a92023cf2dcfd0ee62255224bba8db1769aa05->enter($__internal_c5f2b8edae32ec40d7925cb402a92023cf2dcfd0ee62255224bba8db1769aa05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d15ddd3973ac3c4b9e448587b8a408f13d864a8fef46558a7d26ef89b8510685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d15ddd3973ac3c4b9e448587b8a408f13d864a8fef46558a7d26ef89b8510685->enter($__internal_d15ddd3973ac3c4b9e448587b8a408f13d864a8fef46558a7d26ef89b8510685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d15ddd3973ac3c4b9e448587b8a408f13d864a8fef46558a7d26ef89b8510685->leave($__internal_d15ddd3973ac3c4b9e448587b8a408f13d864a8fef46558a7d26ef89b8510685_prof);

        
        $__internal_c5f2b8edae32ec40d7925cb402a92023cf2dcfd0ee62255224bba8db1769aa05->leave($__internal_c5f2b8edae32ec40d7925cb402a92023cf2dcfd0ee62255224bba8db1769aa05_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f0f00e44c69504b01d05ad1b968be6666f7eb783aed4cb5d55d97e3a3cd9e06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f0f00e44c69504b01d05ad1b968be6666f7eb783aed4cb5d55d97e3a3cd9e06->enter($__internal_2f0f00e44c69504b01d05ad1b968be6666f7eb783aed4cb5d55d97e3a3cd9e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ef316c3b058cc16e75a62afa3039a86438c045d4d17fef958f7e2d7cd4e0742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef316c3b058cc16e75a62afa3039a86438c045d4d17fef958f7e2d7cd4e0742->enter($__internal_1ef316c3b058cc16e75a62afa3039a86438c045d4d17fef958f7e2d7cd4e0742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1ef316c3b058cc16e75a62afa3039a86438c045d4d17fef958f7e2d7cd4e0742->leave($__internal_1ef316c3b058cc16e75a62afa3039a86438c045d4d17fef958f7e2d7cd4e0742_prof);

        
        $__internal_2f0f00e44c69504b01d05ad1b968be6666f7eb783aed4cb5d55d97e3a3cd9e06->leave($__internal_2f0f00e44c69504b01d05ad1b968be6666f7eb783aed4cb5d55d97e3a3cd9e06_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_151074b1294d4e8a6f40b06396f887cf516b7a5ea28cca4bea326c73d35ee04c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_151074b1294d4e8a6f40b06396f887cf516b7a5ea28cca4bea326c73d35ee04c->enter($__internal_151074b1294d4e8a6f40b06396f887cf516b7a5ea28cca4bea326c73d35ee04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_38cc12e23d296434ce1b58e9ee0d0f7fc72458566694f44805c0ddfb9954b637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38cc12e23d296434ce1b58e9ee0d0f7fc72458566694f44805c0ddfb9954b637->enter($__internal_38cc12e23d296434ce1b58e9ee0d0f7fc72458566694f44805c0ddfb9954b637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_38cc12e23d296434ce1b58e9ee0d0f7fc72458566694f44805c0ddfb9954b637->leave($__internal_38cc12e23d296434ce1b58e9ee0d0f7fc72458566694f44805c0ddfb9954b637_prof);

        
        $__internal_151074b1294d4e8a6f40b06396f887cf516b7a5ea28cca4bea326c73d35ee04c->leave($__internal_151074b1294d4e8a6f40b06396f887cf516b7a5ea28cca4bea326c73d35ee04c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
