<?php

/* default/index.html.twig */
class __TwigTemplate_5677b62d72c4cd86e5955983e85e394cdd895bbaaa5f9f880e4adaafb5e18ffb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_818d9b31234fddd97b039abe61a9f989f2eb97a2049f7e7e6f2733ca5b1b44c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_818d9b31234fddd97b039abe61a9f989f2eb97a2049f7e7e6f2733ca5b1b44c0->enter($__internal_818d9b31234fddd97b039abe61a9f989f2eb97a2049f7e7e6f2733ca5b1b44c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_a32a7d4d6597093ddce9fa2c8815ba80e23397734dbe928461c38401a0124717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a32a7d4d6597093ddce9fa2c8815ba80e23397734dbe928461c38401a0124717->enter($__internal_a32a7d4d6597093ddce9fa2c8815ba80e23397734dbe928461c38401a0124717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_818d9b31234fddd97b039abe61a9f989f2eb97a2049f7e7e6f2733ca5b1b44c0->leave($__internal_818d9b31234fddd97b039abe61a9f989f2eb97a2049f7e7e6f2733ca5b1b44c0_prof);

        
        $__internal_a32a7d4d6597093ddce9fa2c8815ba80e23397734dbe928461c38401a0124717->leave($__internal_a32a7d4d6597093ddce9fa2c8815ba80e23397734dbe928461c38401a0124717_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_db5cbf50d3de425f4310d11459ab839e690e32f7cc68a3ffb630fa3ea7e1fc33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db5cbf50d3de425f4310d11459ab839e690e32f7cc68a3ffb630fa3ea7e1fc33->enter($__internal_db5cbf50d3de425f4310d11459ab839e690e32f7cc68a3ffb630fa3ea7e1fc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46fdfb05fc4b131debb436413ae66c69f48edcfdcd4b0d2f9e95300250575f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46fdfb05fc4b131debb436413ae66c69f48edcfdcd4b0d2f9e95300250575f66->enter($__internal_46fdfb05fc4b131debb436413ae66c69f48edcfdcd4b0d2f9e95300250575f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"jumbotron\" style=\"border-bottom:3px solid #111\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<h2><span class=\"glyphicon glyphicon-home\"></span>&nbsp;Bem-vindo ao Serviço de Atendimento ao Consumidor.</h2>
\t\t\t\t\t<!--<hr />-->
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
<div class=\"container\">
\t\t

      <!-- Example row of columns -->
      <div class=\"row\">
        <div class=\"col-md-4\">
          <h2><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/rommel.jpg"), "html", null, true);
        echo "\" class=\"img-rounded img-thumbnail\"   />&nbsp;Rommel</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          
\t    <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Mais detalhes &raquo;</a></p>
        </div>
        <div class=\"col-md-4\">
          <h2><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Von_Paulusb.jpg"), "html", null, true);
        echo "\" class=\"img-thumbnail\"   />&nbsp;Von Paulus</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          
\t    <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Mais detalhes &raquo;</a></p>
       </div>
        <div class=\"col-md-4\">
          <h2><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/zhukovb.jpg"), "html", null, true);
        echo "\" class=\"img-rounded img-thumbnail\"   />&nbsp;Zhukov</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          
\t    <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Mais detalhes &raquo;</a></p>
        </div>
      </div>

\t
\t
\t<hr>
\t
      
    </div>
";
        
        $__internal_46fdfb05fc4b131debb436413ae66c69f48edcfdcd4b0d2f9e95300250575f66->leave($__internal_46fdfb05fc4b131debb436413ae66c69f48edcfdcd4b0d2f9e95300250575f66_prof);

        
        $__internal_db5cbf50d3de425f4310d11459ab839e690e32f7cc68a3ffb630fa3ea7e1fc33->leave($__internal_db5cbf50d3de425f4310d11459ab839e690e32f7cc68a3ffb630fa3ea7e1fc33_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 30,  75 => 24,  66 => 18,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"jumbotron\" style=\"border-bottom:3px solid #111\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<h2><span class=\"glyphicon glyphicon-home\"></span>&nbsp;Bem-vindo ao Serviço de Atendimento ao Consumidor.</h2>
\t\t\t\t\t<!--<hr />-->
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
<div class=\"container\">
\t\t

      <!-- Example row of columns -->
      <div class=\"row\">
        <div class=\"col-md-4\">
          <h2><img src=\"{{ asset('images/rommel.jpg') }}\" class=\"img-rounded img-thumbnail\"   />&nbsp;Rommel</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          
\t    <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Mais detalhes &raquo;</a></p>
        </div>
        <div class=\"col-md-4\">
          <h2><img src=\"{{ asset('images/Von_Paulusb.jpg') }}\" class=\"img-thumbnail\"   />&nbsp;Von Paulus</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          
\t    <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Mais detalhes &raquo;</a></p>
       </div>
        <div class=\"col-md-4\">
          <h2><img src=\"{{ asset('images/zhukovb.jpg') }}\" class=\"img-rounded img-thumbnail\"   />&nbsp;Zhukov</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          
\t    <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Mais detalhes &raquo;</a></p>
        </div>
      </div>

\t
\t
\t<hr>
\t
      
    </div>
{% endblock %}
", "default/index.html.twig", "C:\\projetos\\cadastro\\app\\Resources\\views\\default\\index.html.twig");
    }
}
