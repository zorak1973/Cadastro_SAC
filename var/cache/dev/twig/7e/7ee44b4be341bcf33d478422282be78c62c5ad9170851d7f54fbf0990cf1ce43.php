<?php

/* ::base.html.twig */
class __TwigTemplate_f1464b36071f3f1f9b7c10dca80ba69f9f795e501ba6ab49b816b2787c315873 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ede38403378f7b9c5269aecad54f4b1dc317628dfcfa14c914f9bb54119c72c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ede38403378f7b9c5269aecad54f4b1dc317628dfcfa14c914f9bb54119c72c->enter($__internal_6ede38403378f7b9c5269aecad54f4b1dc317628dfcfa14c914f9bb54119c72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_e5f865bb30b8cfd5b7600eab23291bb837ff6b46d67881f771c8d471ad7153dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f865bb30b8cfd5b7600eab23291bb837ff6b46d67881f771c8d471ad7153dc->enter($__internal_e5f865bb30b8cfd5b7600eab23291bb837ff6b46d67881f771c8d471ad7153dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t\t\t<nav class=\"navbar navbar-inverse navbar-fixed-top\">
\t\t\t  <div class=\"container\">
\t\t\t\t<div class=\"navbar-header\">
\t\t\t   
\t\t\t\t  <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t  </button>
\t\t\t\t  <!--<a class=\"navbar-brand\" href=\"#\">Project name</a>-->
\t\t\t\t   <img class=\"navbar-btn\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/tele1.png"), "html", null, true);
        echo "\" height=\"30\" width=\"30\" />
\t\t\t\t  <a class=\"navbar-brand\" href=\"#\">SAC</a>
\t\t\t\t  
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t <!-- Static navbar -->
\t\t\t  
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t  <div class=\"navbar-header\">
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t\t\t\t  <span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t
\t\t\t\t  </div>
\t\t\t\t  <div id=\"navbar\" class=\"navbar-collapse collapse\">
\t\t\t\t\t<ul class=\"nav navbar-right navbar-nav\">
\t\t\t\t\t  <li><a href=\"/\">Home</a></li>
\t\t\t\t\t  <li><a href=\"/chamado/criar\">Abrir Chamado</a></li>
\t\t\t\t\t  <li><a href=\"/chamado/listar\">Chamados Abertos</a></li>
\t\t\t\t\t  
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t  
\t\t\t\t\t
\t\t\t\t\t</div><!--/.navbar-collapse -->
\t\t\t\t
\t\t\t\t\t</div><!--container fluid/. -->
\t\t\t\t</div><!--container -->
\t\t\t</nav>
\t\t
\t\t
\t\t
\t\t
        ";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "\t<hr />
   
  </div>
\t\t";
        // line 69
        $this->displayBlock('javascripts', $context, $blocks);
        // line 76
        echo "    </body>
</html>
";
        
        $__internal_6ede38403378f7b9c5269aecad54f4b1dc317628dfcfa14c914f9bb54119c72c->leave($__internal_6ede38403378f7b9c5269aecad54f4b1dc317628dfcfa14c914f9bb54119c72c_prof);

        
        $__internal_e5f865bb30b8cfd5b7600eab23291bb837ff6b46d67881f771c8d471ad7153dc->leave($__internal_e5f865bb30b8cfd5b7600eab23291bb837ff6b46d67881f771c8d471ad7153dc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_913d71a046a05eae6279d7f399f786b400ab04bc8ba483af51f46d7a0ee4ac88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_913d71a046a05eae6279d7f399f786b400ab04bc8ba483af51f46d7a0ee4ac88->enter($__internal_913d71a046a05eae6279d7f399f786b400ab04bc8ba483af51f46d7a0ee4ac88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a6615e9d56476aaabdce092030170148abbc066031b5b7a69123c049519246b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6615e9d56476aaabdce092030170148abbc066031b5b7a69123c049519246b8->enter($__internal_a6615e9d56476aaabdce092030170148abbc066031b5b7a69123c049519246b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Serviço de Atendimento ao Consumidor (SAC)";
        
        $__internal_a6615e9d56476aaabdce092030170148abbc066031b5b7a69123c049519246b8->leave($__internal_a6615e9d56476aaabdce092030170148abbc066031b5b7a69123c049519246b8_prof);

        
        $__internal_913d71a046a05eae6279d7f399f786b400ab04bc8ba483af51f46d7a0ee4ac88->leave($__internal_913d71a046a05eae6279d7f399f786b400ab04bc8ba483af51f46d7a0ee4ac88_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_89014fd193a3a66db27e424b110dcb225ae26abd6c2aab39fe14e0727449d1db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89014fd193a3a66db27e424b110dcb225ae26abd6c2aab39fe14e0727449d1db->enter($__internal_89014fd193a3a66db27e424b110dcb225ae26abd6c2aab39fe14e0727449d1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b0853341ff0d31bacb0fc92415773659ac99b3784fc0c44f7adc9cdabf803949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0853341ff0d31bacb0fc92415773659ac99b3784fc0c44f7adc9cdabf803949->enter($__internal_b0853341ff0d31bacb0fc92415773659ac99b3784fc0c44f7adc9cdabf803949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t\t
\t\t\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/960.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t\t\t<!--<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/template.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />-->
\t\t\t<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t\t\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-ui.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t\t\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jumbotron.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t\t\t
\t\t";
        
        $__internal_b0853341ff0d31bacb0fc92415773659ac99b3784fc0c44f7adc9cdabf803949->leave($__internal_b0853341ff0d31bacb0fc92415773659ac99b3784fc0c44f7adc9cdabf803949_prof);

        
        $__internal_89014fd193a3a66db27e424b110dcb225ae26abd6c2aab39fe14e0727449d1db->leave($__internal_89014fd193a3a66db27e424b110dcb225ae26abd6c2aab39fe14e0727449d1db_prof);

    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        $__internal_18ff09f9efe0dc929482cf0a20610e84df4be91bbf0dba0d17659b274f675b89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18ff09f9efe0dc929482cf0a20610e84df4be91bbf0dba0d17659b274f675b89->enter($__internal_18ff09f9efe0dc929482cf0a20610e84df4be91bbf0dba0d17659b274f675b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_036527984987619e0415b0fa94dc1738b0750c3d72a7166199e9d78f2614c4a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036527984987619e0415b0fa94dc1738b0750c3d72a7166199e9d78f2614c4a6->enter($__internal_036527984987619e0415b0fa94dc1738b0750c3d72a7166199e9d78f2614c4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_036527984987619e0415b0fa94dc1738b0750c3d72a7166199e9d78f2614c4a6->leave($__internal_036527984987619e0415b0fa94dc1738b0750c3d72a7166199e9d78f2614c4a6_prof);

        
        $__internal_18ff09f9efe0dc929482cf0a20610e84df4be91bbf0dba0d17659b274f675b89->leave($__internal_18ff09f9efe0dc929482cf0a20610e84df4be91bbf0dba0d17659b274f675b89_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7c0ec08878a39b6586fba3fd11123f1f1e18f5bcc9313e6c4039e8e2b75600bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c0ec08878a39b6586fba3fd11123f1f1e18f5bcc9313e6c4039e8e2b75600bb->enter($__internal_7c0ec08878a39b6586fba3fd11123f1f1e18f5bcc9313e6c4039e8e2b75600bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_091790503716c3ef8678a7e58e9357f5a83fe63411c7f84d1bafc1a5d63332b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091790503716c3ef8678a7e58e9357f5a83fe63411c7f84d1bafc1a5d63332b6->enter($__internal_091790503716c3ef8678a7e58e9357f5a83fe63411c7f84d1bafc1a5d63332b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "\t\t\t
\t\t\t<script type='text/javascript' src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript/jquery-2.0.3.min.js"), "html", null, true);
        echo "\" />
\t\t\t<script type='text/javascript' src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript/jquery-ui.min.js"), "html", null, true);
        echo "\" />
\t\t\t<script type='text/javascript' src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript/bootstrap.min.js"), "html", null, true);
        echo "\" />
\t\t\t<script type='text/javascript' src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript/default.js"), "html", null, true);
        echo "\" />
\t\t";
        
        $__internal_091790503716c3ef8678a7e58e9357f5a83fe63411c7f84d1bafc1a5d63332b6->leave($__internal_091790503716c3ef8678a7e58e9357f5a83fe63411c7f84d1bafc1a5d63332b6_prof);

        
        $__internal_7c0ec08878a39b6586fba3fd11123f1f1e18f5bcc9313e6c4039e8e2b75600bb->leave($__internal_7c0ec08878a39b6586fba3fd11123f1f1e18f5bcc9313e6c4039e8e2b75600bb_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 74,  215 => 73,  211 => 72,  207 => 71,  204 => 70,  195 => 69,  178 => 65,  165 => 12,  161 => 11,  157 => 10,  153 => 9,  149 => 8,  146 => 7,  137 => 6,  119 => 5,  107 => 76,  105 => 69,  100 => 66,  98 => 65,  59 => 29,  41 => 15,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Serviço de Atendimento ao Consumidor (SAC){% endblock %}</title>
        {% block stylesheets %}
\t\t
\t\t\t<link href=\"{{ asset('css/960.css') }}\" rel=\"stylesheet\" />
\t\t\t<!--<link href=\"{{ asset('css/template.css') }}\" rel=\"stylesheet\" />-->
\t\t\t<link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\" />
\t\t\t<link href=\"{{ asset('css/jquery-ui.min.css') }}\" rel=\"stylesheet\" />
\t\t\t<link href=\"{{ asset('css/jumbotron.css') }}\" rel=\"stylesheet\" />
\t\t\t
\t\t{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
\t\t\t<nav class=\"navbar navbar-inverse navbar-fixed-top\">
\t\t\t  <div class=\"container\">
\t\t\t\t<div class=\"navbar-header\">
\t\t\t   
\t\t\t\t  <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t  </button>
\t\t\t\t  <!--<a class=\"navbar-brand\" href=\"#\">Project name</a>-->
\t\t\t\t   <img class=\"navbar-btn\" src=\"{{ asset('images/tele1.png') }}\" height=\"30\" width=\"30\" />
\t\t\t\t  <a class=\"navbar-brand\" href=\"#\">SAC</a>
\t\t\t\t  
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t <!-- Static navbar -->
\t\t\t  
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t  <div class=\"navbar-header\">
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t\t\t\t  <span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t
\t\t\t\t  </div>
\t\t\t\t  <div id=\"navbar\" class=\"navbar-collapse collapse\">
\t\t\t\t\t<ul class=\"nav navbar-right navbar-nav\">
\t\t\t\t\t  <li><a href=\"/\">Home</a></li>
\t\t\t\t\t  <li><a href=\"/chamado/criar\">Abrir Chamado</a></li>
\t\t\t\t\t  <li><a href=\"/chamado/listar\">Chamados Abertos</a></li>
\t\t\t\t\t  
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t  
\t\t\t\t\t
\t\t\t\t\t</div><!--/.navbar-collapse -->
\t\t\t\t
\t\t\t\t\t</div><!--container fluid/. -->
\t\t\t\t</div><!--container -->
\t\t\t</nav>
\t\t
\t\t
\t\t
\t\t
        {% block body %}{% endblock %}
\t<hr />
   
  </div>
\t\t{% block javascripts %}
\t\t\t
\t\t\t<script type='text/javascript' src=\"{{ asset('javascript/jquery-2.0.3.min.js') }}\" />
\t\t\t<script type='text/javascript' src=\"{{ asset('javascript/jquery-ui.min.js') }}\" />
\t\t\t<script type='text/javascript' src=\"{{ asset('javascript/bootstrap.min.js') }}\" />
\t\t\t<script type='text/javascript' src=\"{{ asset('javascript/default.js') }}\" />
\t\t{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\projetos\\cadastro\\app/Resources\\views/base.html.twig");
    }
}
