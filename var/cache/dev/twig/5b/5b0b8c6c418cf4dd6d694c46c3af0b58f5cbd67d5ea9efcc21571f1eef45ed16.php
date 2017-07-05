<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_e90658c809db29b041dd19e9d51fc29f3aefccbd45e3245bf57163ae05f48d32 extends Twig_Template
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
        $__internal_3e2819d5a256dd2b6847906a5ac6cb9ce5f40800a105a110dbf03093310644ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e2819d5a256dd2b6847906a5ac6cb9ce5f40800a105a110dbf03093310644ed->enter($__internal_3e2819d5a256dd2b6847906a5ac6cb9ce5f40800a105a110dbf03093310644ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_eb1da3015c365b9732d10cdf05050f7d857e00cd41f8bd8f671100603a7fe389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1da3015c365b9732d10cdf05050f7d857e00cd41f8bd8f671100603a7fe389->enter($__internal_eb1da3015c365b9732d10cdf05050f7d857e00cd41f8bd8f671100603a7fe389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_3e2819d5a256dd2b6847906a5ac6cb9ce5f40800a105a110dbf03093310644ed->leave($__internal_3e2819d5a256dd2b6847906a5ac6cb9ce5f40800a105a110dbf03093310644ed_prof);

        
        $__internal_eb1da3015c365b9732d10cdf05050f7d857e00cd41f8bd8f671100603a7fe389->leave($__internal_eb1da3015c365b9732d10cdf05050f7d857e00cd41f8bd8f671100603a7fe389_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_13a1c727bf1a348cfbc0afd5ac109f5b06a2b257ca1e6456d00e178124f25fa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a1c727bf1a348cfbc0afd5ac109f5b06a2b257ca1e6456d00e178124f25fa3->enter($__internal_13a1c727bf1a348cfbc0afd5ac109f5b06a2b257ca1e6456d00e178124f25fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ecf1641ce7600d3af792b61d925404af40aba4e168d35db19fd61a4479e5f858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf1641ce7600d3af792b61d925404af40aba4e168d35db19fd61a4479e5f858->enter($__internal_ecf1641ce7600d3af792b61d925404af40aba4e168d35db19fd61a4479e5f858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ecf1641ce7600d3af792b61d925404af40aba4e168d35db19fd61a4479e5f858->leave($__internal_ecf1641ce7600d3af792b61d925404af40aba4e168d35db19fd61a4479e5f858_prof);

        
        $__internal_13a1c727bf1a348cfbc0afd5ac109f5b06a2b257ca1e6456d00e178124f25fa3->leave($__internal_13a1c727bf1a348cfbc0afd5ac109f5b06a2b257ca1e6456d00e178124f25fa3_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a3d71bc0b7cfd91b113113cfe639e8563023512299496d58c7531c349a016376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3d71bc0b7cfd91b113113cfe639e8563023512299496d58c7531c349a016376->enter($__internal_a3d71bc0b7cfd91b113113cfe639e8563023512299496d58c7531c349a016376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3de8510de0ca2321f7d7e416e35743d06c6e884fffd53b5026bc2cab089e0c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3de8510de0ca2321f7d7e416e35743d06c6e884fffd53b5026bc2cab089e0c4a->enter($__internal_3de8510de0ca2321f7d7e416e35743d06c6e884fffd53b5026bc2cab089e0c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3de8510de0ca2321f7d7e416e35743d06c6e884fffd53b5026bc2cab089e0c4a->leave($__internal_3de8510de0ca2321f7d7e416e35743d06c6e884fffd53b5026bc2cab089e0c4a_prof);

        
        $__internal_a3d71bc0b7cfd91b113113cfe639e8563023512299496d58c7531c349a016376->leave($__internal_a3d71bc0b7cfd91b113113cfe639e8563023512299496d58c7531c349a016376_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_905b3f65e83be64eae413c60052a5b1622cae78a639075998912ee78bbcb124d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_905b3f65e83be64eae413c60052a5b1622cae78a639075998912ee78bbcb124d->enter($__internal_905b3f65e83be64eae413c60052a5b1622cae78a639075998912ee78bbcb124d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0948a1f67210096615b854a59f5fef7c4934d204321203657beecc94815fdd74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0948a1f67210096615b854a59f5fef7c4934d204321203657beecc94815fdd74->enter($__internal_0948a1f67210096615b854a59f5fef7c4934d204321203657beecc94815fdd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0948a1f67210096615b854a59f5fef7c4934d204321203657beecc94815fdd74->leave($__internal_0948a1f67210096615b854a59f5fef7c4934d204321203657beecc94815fdd74_prof);

        
        $__internal_905b3f65e83be64eae413c60052a5b1622cae78a639075998912ee78bbcb124d->leave($__internal_905b3f65e83be64eae413c60052a5b1622cae78a639075998912ee78bbcb124d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
