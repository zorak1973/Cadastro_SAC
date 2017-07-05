<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_4d8b14d468a4cfe0520d82f76d59db9ddc92a8cf70747187a6ac5029dc880bb0 extends Twig_Template
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
        $__internal_9780daf84939a9ed5c507dd17890fbc7867fd4cd1970c5e78b6e0ad39bfb218b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9780daf84939a9ed5c507dd17890fbc7867fd4cd1970c5e78b6e0ad39bfb218b->enter($__internal_9780daf84939a9ed5c507dd17890fbc7867fd4cd1970c5e78b6e0ad39bfb218b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_834fdad22f816b41d7f8d368f6a8697d90535ca9a2f89b392e7e49a210208bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834fdad22f816b41d7f8d368f6a8697d90535ca9a2f89b392e7e49a210208bec->enter($__internal_834fdad22f816b41d7f8d368f6a8697d90535ca9a2f89b392e7e49a210208bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9780daf84939a9ed5c507dd17890fbc7867fd4cd1970c5e78b6e0ad39bfb218b->leave($__internal_9780daf84939a9ed5c507dd17890fbc7867fd4cd1970c5e78b6e0ad39bfb218b_prof);

        
        $__internal_834fdad22f816b41d7f8d368f6a8697d90535ca9a2f89b392e7e49a210208bec->leave($__internal_834fdad22f816b41d7f8d368f6a8697d90535ca9a2f89b392e7e49a210208bec_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
