<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_932b0b606b54f4fd00af34cfa3676fd2b31eb9cc791f6b50c522dae405f22077 extends Twig_Template
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
        $__internal_a6242014b7d0f0741e73efcafb21ab69c15be97cc0306bad61c2e18bcb3a9115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6242014b7d0f0741e73efcafb21ab69c15be97cc0306bad61c2e18bcb3a9115->enter($__internal_a6242014b7d0f0741e73efcafb21ab69c15be97cc0306bad61c2e18bcb3a9115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_318f3753853ca016f827ca9e467228dc7ea42efd233e75286f936d1209d8b355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318f3753853ca016f827ca9e467228dc7ea42efd233e75286f936d1209d8b355->enter($__internal_318f3753853ca016f827ca9e467228dc7ea42efd233e75286f936d1209d8b355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a6242014b7d0f0741e73efcafb21ab69c15be97cc0306bad61c2e18bcb3a9115->leave($__internal_a6242014b7d0f0741e73efcafb21ab69c15be97cc0306bad61c2e18bcb3a9115_prof);

        
        $__internal_318f3753853ca016f827ca9e467228dc7ea42efd233e75286f936d1209d8b355->leave($__internal_318f3753853ca016f827ca9e467228dc7ea42efd233e75286f936d1209d8b355_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
