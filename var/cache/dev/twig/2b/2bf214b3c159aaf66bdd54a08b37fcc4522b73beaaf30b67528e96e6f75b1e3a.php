<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_2cb87bd6e52985cc713e0f57d89da70f69e3bf086e5852c564e1c6939cc3993b extends Twig_Template
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
        $__internal_04ca2421a279c352acfa6c27fdc9de4a995994c89b8354a55bf6115dd594afd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ca2421a279c352acfa6c27fdc9de4a995994c89b8354a55bf6115dd594afd2->enter($__internal_04ca2421a279c352acfa6c27fdc9de4a995994c89b8354a55bf6115dd594afd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_ea6128049bd12fe2c6801563eef34622f0a54e042afd17cbed9efec2126d2f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea6128049bd12fe2c6801563eef34622f0a54e042afd17cbed9efec2126d2f3b->enter($__internal_ea6128049bd12fe2c6801563eef34622f0a54e042afd17cbed9efec2126d2f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_04ca2421a279c352acfa6c27fdc9de4a995994c89b8354a55bf6115dd594afd2->leave($__internal_04ca2421a279c352acfa6c27fdc9de4a995994c89b8354a55bf6115dd594afd2_prof);

        
        $__internal_ea6128049bd12fe2c6801563eef34622f0a54e042afd17cbed9efec2126d2f3b->leave($__internal_ea6128049bd12fe2c6801563eef34622f0a54e042afd17cbed9efec2126d2f3b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
