<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_feb6e629fc88edb491033f9214fc8ac1afeed849210e6323db883bcbee506f5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e52f19dda7c41e6502771a8b81f48b1ca0291eb9b7f44ed5b563eb44df7b7cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e52f19dda7c41e6502771a8b81f48b1ca0291eb9b7f44ed5b563eb44df7b7cd->enter($__internal_9e52f19dda7c41e6502771a8b81f48b1ca0291eb9b7f44ed5b563eb44df7b7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_0d9f3ebbe5412627640a6ce73765ed01646aed17ba53913fedaafa9026244b53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9f3ebbe5412627640a6ce73765ed01646aed17ba53913fedaafa9026244b53->enter($__internal_0d9f3ebbe5412627640a6ce73765ed01646aed17ba53913fedaafa9026244b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_9e52f19dda7c41e6502771a8b81f48b1ca0291eb9b7f44ed5b563eb44df7b7cd->leave($__internal_9e52f19dda7c41e6502771a8b81f48b1ca0291eb9b7f44ed5b563eb44df7b7cd_prof);

        
        $__internal_0d9f3ebbe5412627640a6ce73765ed01646aed17ba53913fedaafa9026244b53->leave($__internal_0d9f3ebbe5412627640a6ce73765ed01646aed17ba53913fedaafa9026244b53_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b85f5a865653961254e94d767fa5112e253649b4c4dd5840f47a1c86d0cf83e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b85f5a865653961254e94d767fa5112e253649b4c4dd5840f47a1c86d0cf83e->enter($__internal_2b85f5a865653961254e94d767fa5112e253649b4c4dd5840f47a1c86d0cf83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ef758d49f704d7ee9ab654c970bce4a31fbe35788a486dfd97d831350dc36d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef758d49f704d7ee9ab654c970bce4a31fbe35788a486dfd97d831350dc36d1e->enter($__internal_ef758d49f704d7ee9ab654c970bce4a31fbe35788a486dfd97d831350dc36d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ef758d49f704d7ee9ab654c970bce4a31fbe35788a486dfd97d831350dc36d1e->leave($__internal_ef758d49f704d7ee9ab654c970bce4a31fbe35788a486dfd97d831350dc36d1e_prof);

        
        $__internal_2b85f5a865653961254e94d767fa5112e253649b4c4dd5840f47a1c86d0cf83e->leave($__internal_2b85f5a865653961254e94d767fa5112e253649b4c4dd5840f47a1c86d0cf83e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_df8e1dd811c6cec199206db3b7d25b737cfc54780d4d096b6f0bf7f120ea8d2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df8e1dd811c6cec199206db3b7d25b737cfc54780d4d096b6f0bf7f120ea8d2f->enter($__internal_df8e1dd811c6cec199206db3b7d25b737cfc54780d4d096b6f0bf7f120ea8d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_45313ac899129ce28127aaade3766c1ca06d3fc86bfb5daad99b2dba447c1c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45313ac899129ce28127aaade3766c1ca06d3fc86bfb5daad99b2dba447c1c8c->enter($__internal_45313ac899129ce28127aaade3766c1ca06d3fc86bfb5daad99b2dba447c1c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_45313ac899129ce28127aaade3766c1ca06d3fc86bfb5daad99b2dba447c1c8c->leave($__internal_45313ac899129ce28127aaade3766c1ca06d3fc86bfb5daad99b2dba447c1c8c_prof);

        
        $__internal_df8e1dd811c6cec199206db3b7d25b737cfc54780d4d096b6f0bf7f120ea8d2f->leave($__internal_df8e1dd811c6cec199206db3b7d25b737cfc54780d4d096b6f0bf7f120ea8d2f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e820ffe31f519083db307fe36600c08208ce09577203b2745f56df51eb22a3ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e820ffe31f519083db307fe36600c08208ce09577203b2745f56df51eb22a3ad->enter($__internal_e820ffe31f519083db307fe36600c08208ce09577203b2745f56df51eb22a3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_abb1edce4ce814bf307584f3952bdd058792de31ff4ee5880c6564d0d4e5c172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abb1edce4ce814bf307584f3952bdd058792de31ff4ee5880c6564d0d4e5c172->enter($__internal_abb1edce4ce814bf307584f3952bdd058792de31ff4ee5880c6564d0d4e5c172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_abb1edce4ce814bf307584f3952bdd058792de31ff4ee5880c6564d0d4e5c172->leave($__internal_abb1edce4ce814bf307584f3952bdd058792de31ff4ee5880c6564d0d4e5c172_prof);

        
        $__internal_e820ffe31f519083db307fe36600c08208ce09577203b2745f56df51eb22a3ad->leave($__internal_e820ffe31f519083db307fe36600c08208ce09577203b2745f56df51eb22a3ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
