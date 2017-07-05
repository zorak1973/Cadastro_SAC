<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_732607f0135a435f973679258c0efb3affdc664aa224c4bf885f3bf96242164d extends Twig_Template
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
        $__internal_38441606a6f1f0c82dce076fbce4f1105bd540a6d5dd45e654090f147b882ceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38441606a6f1f0c82dce076fbce4f1105bd540a6d5dd45e654090f147b882ceb->enter($__internal_38441606a6f1f0c82dce076fbce4f1105bd540a6d5dd45e654090f147b882ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_854c154d45dc55b34278a3534321315ab27b8fdb5016887d3d9aac90d61d3ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854c154d45dc55b34278a3534321315ab27b8fdb5016887d3d9aac90d61d3ce8->enter($__internal_854c154d45dc55b34278a3534321315ab27b8fdb5016887d3d9aac90d61d3ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_38441606a6f1f0c82dce076fbce4f1105bd540a6d5dd45e654090f147b882ceb->leave($__internal_38441606a6f1f0c82dce076fbce4f1105bd540a6d5dd45e654090f147b882ceb_prof);

        
        $__internal_854c154d45dc55b34278a3534321315ab27b8fdb5016887d3d9aac90d61d3ce8->leave($__internal_854c154d45dc55b34278a3534321315ab27b8fdb5016887d3d9aac90d61d3ce8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\projetos\\cadastro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
