<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_68db94391f8ef45d4342397002cbbefcdb74080baecc6c14caa4e9bed45d8887 extends Twig_Template
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
        $__internal_4136766e9be1d8cb02eb50ecd464f682d58e9452355bf067693288326dc28796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4136766e9be1d8cb02eb50ecd464f682d58e9452355bf067693288326dc28796->enter($__internal_4136766e9be1d8cb02eb50ecd464f682d58e9452355bf067693288326dc28796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_4bc38ef74212ffffd13b52f18b025e0f32f9dee212087e45ceae229f196adbee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc38ef74212ffffd13b52f18b025e0f32f9dee212087e45ceae229f196adbee->enter($__internal_4bc38ef74212ffffd13b52f18b025e0f32f9dee212087e45ceae229f196adbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4136766e9be1d8cb02eb50ecd464f682d58e9452355bf067693288326dc28796->leave($__internal_4136766e9be1d8cb02eb50ecd464f682d58e9452355bf067693288326dc28796_prof);

        
        $__internal_4bc38ef74212ffffd13b52f18b025e0f32f9dee212087e45ceae229f196adbee->leave($__internal_4bc38ef74212ffffd13b52f18b025e0f32f9dee212087e45ceae229f196adbee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
