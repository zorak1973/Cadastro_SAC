<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_3f6a2ad23a8ca89c2d719f1ea2b45559b46ac495b9fb5d41ec4d7c4f0cf53b39 extends Twig_Template
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
        $__internal_e6ae07af9ffda12091e7ca63c142ad86274d292a2c20510a0b855da36c78b1f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6ae07af9ffda12091e7ca63c142ad86274d292a2c20510a0b855da36c78b1f7->enter($__internal_e6ae07af9ffda12091e7ca63c142ad86274d292a2c20510a0b855da36c78b1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_d7821b27b6e82b5a1df60a5e974524a6abb5809982a58f5b91aac2b4da6e8b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7821b27b6e82b5a1df60a5e974524a6abb5809982a58f5b91aac2b4da6e8b5e->enter($__internal_d7821b27b6e82b5a1df60a5e974524a6abb5809982a58f5b91aac2b4da6e8b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_e6ae07af9ffda12091e7ca63c142ad86274d292a2c20510a0b855da36c78b1f7->leave($__internal_e6ae07af9ffda12091e7ca63c142ad86274d292a2c20510a0b855da36c78b1f7_prof);

        
        $__internal_d7821b27b6e82b5a1df60a5e974524a6abb5809982a58f5b91aac2b4da6e8b5e->leave($__internal_d7821b27b6e82b5a1df60a5e974524a6abb5809982a58f5b91aac2b4da6e8b5e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
