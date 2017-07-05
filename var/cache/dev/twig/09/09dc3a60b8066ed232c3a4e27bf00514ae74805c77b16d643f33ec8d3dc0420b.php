<?php

/* base.html.twig */
class __TwigTemplate_9aa6f18a2e5dc5a235f049842580c4db5014ec92fe8ea12aca3079cdefb14370 extends Twig_Template
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
        $__internal_e6e6527e3f6952dbf7f5bb3db123c17a31168a986a0bdce8b96dc9249216e99b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6e6527e3f6952dbf7f5bb3db123c17a31168a986a0bdce8b96dc9249216e99b->enter($__internal_e6e6527e3f6952dbf7f5bb3db123c17a31168a986a0bdce8b96dc9249216e99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5ff555efbd8c7740cff74dbe9af95412b1930640bf0140eb79a955de2de74420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ff555efbd8c7740cff74dbe9af95412b1930640bf0140eb79a955de2de74420->enter($__internal_5ff555efbd8c7740cff74dbe9af95412b1930640bf0140eb79a955de2de74420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e6e6527e3f6952dbf7f5bb3db123c17a31168a986a0bdce8b96dc9249216e99b->leave($__internal_e6e6527e3f6952dbf7f5bb3db123c17a31168a986a0bdce8b96dc9249216e99b_prof);

        
        $__internal_5ff555efbd8c7740cff74dbe9af95412b1930640bf0140eb79a955de2de74420->leave($__internal_5ff555efbd8c7740cff74dbe9af95412b1930640bf0140eb79a955de2de74420_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_76bd369355086a98a83ab4e64c8fd0f4a2fd0de9907430f1f19c58231d10e588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76bd369355086a98a83ab4e64c8fd0f4a2fd0de9907430f1f19c58231d10e588->enter($__internal_76bd369355086a98a83ab4e64c8fd0f4a2fd0de9907430f1f19c58231d10e588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8440a243cca73bcf47370f6dcf5254f12288ffa4aa166ebb8df301d50ac15d3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8440a243cca73bcf47370f6dcf5254f12288ffa4aa166ebb8df301d50ac15d3b->enter($__internal_8440a243cca73bcf47370f6dcf5254f12288ffa4aa166ebb8df301d50ac15d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Serviço de Atendimento ao Consumidor (SAC)";
        
        $__internal_8440a243cca73bcf47370f6dcf5254f12288ffa4aa166ebb8df301d50ac15d3b->leave($__internal_8440a243cca73bcf47370f6dcf5254f12288ffa4aa166ebb8df301d50ac15d3b_prof);

        
        $__internal_76bd369355086a98a83ab4e64c8fd0f4a2fd0de9907430f1f19c58231d10e588->leave($__internal_76bd369355086a98a83ab4e64c8fd0f4a2fd0de9907430f1f19c58231d10e588_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0540a292f9ab246150bbf2f5ce7739f2766eb6cf869e75a7223d2c6ce68c47da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0540a292f9ab246150bbf2f5ce7739f2766eb6cf869e75a7223d2c6ce68c47da->enter($__internal_0540a292f9ab246150bbf2f5ce7739f2766eb6cf869e75a7223d2c6ce68c47da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_243f74bd15643a334bb7680cea26ffe13151289950a1f6e6814abd6c6d7cef11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_243f74bd15643a334bb7680cea26ffe13151289950a1f6e6814abd6c6d7cef11->enter($__internal_243f74bd15643a334bb7680cea26ffe13151289950a1f6e6814abd6c6d7cef11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_243f74bd15643a334bb7680cea26ffe13151289950a1f6e6814abd6c6d7cef11->leave($__internal_243f74bd15643a334bb7680cea26ffe13151289950a1f6e6814abd6c6d7cef11_prof);

        
        $__internal_0540a292f9ab246150bbf2f5ce7739f2766eb6cf869e75a7223d2c6ce68c47da->leave($__internal_0540a292f9ab246150bbf2f5ce7739f2766eb6cf869e75a7223d2c6ce68c47da_prof);

    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fc03535f67913f5db28947e08a277a7adb5e0a7de58d7588f441687a9782b86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fc03535f67913f5db28947e08a277a7adb5e0a7de58d7588f441687a9782b86->enter($__internal_1fc03535f67913f5db28947e08a277a7adb5e0a7de58d7588f441687a9782b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a8cb863a13fe9cf8e1e0b8dbaf854e324bd39e737366c3504d0bbde0b37987d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8cb863a13fe9cf8e1e0b8dbaf854e324bd39e737366c3504d0bbde0b37987d->enter($__internal_8a8cb863a13fe9cf8e1e0b8dbaf854e324bd39e737366c3504d0bbde0b37987d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8a8cb863a13fe9cf8e1e0b8dbaf854e324bd39e737366c3504d0bbde0b37987d->leave($__internal_8a8cb863a13fe9cf8e1e0b8dbaf854e324bd39e737366c3504d0bbde0b37987d_prof);

        
        $__internal_1fc03535f67913f5db28947e08a277a7adb5e0a7de58d7588f441687a9782b86->leave($__internal_1fc03535f67913f5db28947e08a277a7adb5e0a7de58d7588f441687a9782b86_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ddc5f54717e5c10243299e48d1ec15a40ffb33913a3aa624d3627bd5d0adb3a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc5f54717e5c10243299e48d1ec15a40ffb33913a3aa624d3627bd5d0adb3a6->enter($__internal_ddc5f54717e5c10243299e48d1ec15a40ffb33913a3aa624d3627bd5d0adb3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3ba9aea3e9fc0639c4349b8eb71be0a9e5406c4ddf36299b78fc5ee013173f18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba9aea3e9fc0639c4349b8eb71be0a9e5406c4ddf36299b78fc5ee013173f18->enter($__internal_3ba9aea3e9fc0639c4349b8eb71be0a9e5406c4ddf36299b78fc5ee013173f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_3ba9aea3e9fc0639c4349b8eb71be0a9e5406c4ddf36299b78fc5ee013173f18->leave($__internal_3ba9aea3e9fc0639c4349b8eb71be0a9e5406c4ddf36299b78fc5ee013173f18_prof);

        
        $__internal_ddc5f54717e5c10243299e48d1ec15a40ffb33913a3aa624d3627bd5d0adb3a6->leave($__internal_ddc5f54717e5c10243299e48d1ec15a40ffb33913a3aa624d3627bd5d0adb3a6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\projetos\\cadastro\\app\\Resources\\views\\base.html.twig");
    }
}
