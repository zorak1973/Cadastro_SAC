<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_2ef22f9098ca132af44901c2cbb616fd254f2105e2015dacb517c56399aa49f4 extends Twig_Template
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
        $__internal_3fdfa88e808b9b185ae1826e1ae3c1e8e6380160e4756ca36dc28c3728562497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fdfa88e808b9b185ae1826e1ae3c1e8e6380160e4756ca36dc28c3728562497->enter($__internal_3fdfa88e808b9b185ae1826e1ae3c1e8e6380160e4756ca36dc28c3728562497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_45ac0ad2daa935d92f296d4eafdcb98abd772565fb896d4502215918cc85ed19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45ac0ad2daa935d92f296d4eafdcb98abd772565fb896d4502215918cc85ed19->enter($__internal_45ac0ad2daa935d92f296d4eafdcb98abd772565fb896d4502215918cc85ed19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_3fdfa88e808b9b185ae1826e1ae3c1e8e6380160e4756ca36dc28c3728562497->leave($__internal_3fdfa88e808b9b185ae1826e1ae3c1e8e6380160e4756ca36dc28c3728562497_prof);

        
        $__internal_45ac0ad2daa935d92f296d4eafdcb98abd772565fb896d4502215918cc85ed19->leave($__internal_45ac0ad2daa935d92f296d4eafdcb98abd772565fb896d4502215918cc85ed19_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
", "@Twig/Exception/error.txt.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
