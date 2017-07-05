<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_01c8888eca2b63b988c99dadc1c2c1255115120e98074f251006a5afc96a9858 extends Twig_Template
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
        $__internal_5119d0adfd26478d09f06720fe79f36450e2c6446d395940e4681833d0b9b4be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5119d0adfd26478d09f06720fe79f36450e2c6446d395940e4681833d0b9b4be->enter($__internal_5119d0adfd26478d09f06720fe79f36450e2c6446d395940e4681833d0b9b4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_1dd1ae94e0d20611ce63b7f03ab107ffc6c6946ee77ab922df510c5504e06539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd1ae94e0d20611ce63b7f03ab107ffc6c6946ee77ab922df510c5504e06539->enter($__internal_1dd1ae94e0d20611ce63b7f03ab107ffc6c6946ee77ab922df510c5504e06539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_5119d0adfd26478d09f06720fe79f36450e2c6446d395940e4681833d0b9b4be->leave($__internal_5119d0adfd26478d09f06720fe79f36450e2c6446d395940e4681833d0b9b4be_prof);

        
        $__internal_1dd1ae94e0d20611ce63b7f03ab107ffc6c6946ee77ab922df510c5504e06539->leave($__internal_1dd1ae94e0d20611ce63b7f03ab107ffc6c6946ee77ab922df510c5504e06539_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
