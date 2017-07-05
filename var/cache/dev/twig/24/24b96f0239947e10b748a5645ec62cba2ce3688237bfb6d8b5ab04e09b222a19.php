<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0fe1b28eb065b1e9d981c3c6b2382f65efad77cfbf07e29a524443f47d914024 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3403cceceb9441486dba9d22eed67309ba8abe524d470b3f03b6dcb463b99696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3403cceceb9441486dba9d22eed67309ba8abe524d470b3f03b6dcb463b99696->enter($__internal_3403cceceb9441486dba9d22eed67309ba8abe524d470b3f03b6dcb463b99696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_1f20eecc15ff2f10b2858e21ed8a408d59e9fb11630a29026b437870e92de051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f20eecc15ff2f10b2858e21ed8a408d59e9fb11630a29026b437870e92de051->enter($__internal_1f20eecc15ff2f10b2858e21ed8a408d59e9fb11630a29026b437870e92de051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_3403cceceb9441486dba9d22eed67309ba8abe524d470b3f03b6dcb463b99696->leave($__internal_3403cceceb9441486dba9d22eed67309ba8abe524d470b3f03b6dcb463b99696_prof);

        
        $__internal_1f20eecc15ff2f10b2858e21ed8a408d59e9fb11630a29026b437870e92de051->leave($__internal_1f20eecc15ff2f10b2858e21ed8a408d59e9fb11630a29026b437870e92de051_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
