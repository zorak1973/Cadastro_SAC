<?php

/* @KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig */
class __TwigTemplate_c9d854b438cb2af51ec0aecf838da08ff3cf30455a9b489907c883582c47f7ba extends Twig_Template
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
        $__internal_c1506b66de7294668dbb6e7cbf4f5d1651e41a2f9d385b93b84b0f83d1a5ff3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1506b66de7294668dbb6e7cbf4f5d1651e41a2f9d385b93b84b0f83d1a5ff3e->enter($__internal_c1506b66de7294668dbb6e7cbf4f5d1651e41a2f9d385b93b84b0f83d1a5ff3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig"));

        $__internal_359ba346d43d39e327b3952f3974ade98db56ea3da911c26ccca0e968c93dceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359ba346d43d39e327b3952f3974ade98db56ea3da911c26ccca0e968c93dceb->enter($__internal_359ba346d43d39e327b3952f3974ade98db56ea3da911c26ccca0e968c93dceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig"));

        // line 12
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 13
            echo "    <nav>
        <ul class=\"pagination\">

            ";
            // line 16
            if (array_key_exists("previous", $context)) {
                // line 17
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" rel=\"prev\" href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_previous", array(), "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
                </li>
            ";
            } else {
                // line 21
                echo "                <li class=\"page-item disabled\">
                    <span class=\"page-link\">&laquo;&nbsp;";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_previous", array(), "KnpPaginatorBundle"), "html", null, true);
                echo "</span>
                </li>
            ";
            }
            // line 25
            echo "
            ";
            // line 26
            if (((isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) > 1)) {
                // line 27
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => 1))), "html", null, true);
                echo "\">1</a>
                </li>
                ";
                // line 30
                if (((isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) == 3)) {
                    // line 31
                    echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => 2))), "html", null, true);
                    echo "\">2</a>
                    </li>
                ";
                } elseif ((                // line 34
(isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) != 2)) {
                    // line 35
                    echo "                    <li class=\"page-item disabled\">
                        <span class=\"page-link\">&hellip;</span>
                    </li>
                ";
                }
                // line 39
                echo "            ";
            }
            // line 40
            echo "
            ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 42
                echo "                ";
                if (($context["page"] != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    // line 43
                    echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                    // line 44
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                    </li>
                ";
                } else {
                    // line 47
                    echo "                    <li class=\"page-item active\">
                        <span class=\"page-link\">";
                    // line 48
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
                    </li>
                ";
                }
                // line 51
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "
            ";
            // line 54
            if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > (isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")))) {
                // line 55
                echo "                ";
                if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > ((isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")) + 1))) {
                    // line 56
                    echo "                    ";
                    if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > ((isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")) + 2))) {
                        // line 57
                        echo "                        <li class=\"page-item disabled\">
                            <span class=\"page-link\">&hellip;</span>
                        </li>
                    ";
                    } else {
                        // line 61
                        echo "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                        // line 62
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => ((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) - 1)))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) - 1), "html", null, true);
                        echo "</a>
                        </li>
                    ";
                    }
                    // line 65
                    echo "                ";
                }
                // line 66
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            // line 70
            echo "
            ";
            // line 71
            if (array_key_exists("next", $context)) {
                // line 72
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" rel=\"next\" href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_next", array(), "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</a>
                </li>
            ";
            } else {
                // line 76
                echo "                <li  class=\"page-item disabled\">
                    <span class=\"page-link\">";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_next", array(), "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</span>
                </li>
            ";
            }
            // line 80
            echo "        </ul>
    </nav>
";
        }
        
        $__internal_c1506b66de7294668dbb6e7cbf4f5d1651e41a2f9d385b93b84b0f83d1a5ff3e->leave($__internal_c1506b66de7294668dbb6e7cbf4f5d1651e41a2f9d385b93b84b0f83d1a5ff3e_prof);

        
        $__internal_359ba346d43d39e327b3952f3974ade98db56ea3da911c26ccca0e968c93dceb->leave($__internal_359ba346d43d39e327b3952f3974ade98db56ea3da911c26ccca0e968c93dceb_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 80,  186 => 77,  183 => 76,  175 => 73,  172 => 72,  170 => 71,  167 => 70,  159 => 67,  156 => 66,  153 => 65,  145 => 62,  142 => 61,  136 => 57,  133 => 56,  130 => 55,  128 => 54,  125 => 53,  118 => 51,  112 => 48,  109 => 47,  101 => 44,  98 => 43,  95 => 42,  91 => 41,  88 => 40,  85 => 39,  79 => 35,  77 => 34,  72 => 32,  69 => 31,  67 => 30,  62 => 28,  59 => 27,  57 => 26,  54 => 25,  48 => 22,  45 => 21,  37 => 18,  34 => 17,  32 => 16,  27 => 13,  25 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Twitter Bootstrap v4-alpha.6 Sliding pagination control implementation.
 *
 * View that can be used with the pagination module
 * from the Twitter Bootstrap CSS Toolkit
 * https://v4-alpha.getbootstrap.com/components/pagination/
 *
 */
#}
{% if pageCount > 1 %}
    <nav>
        <ul class=\"pagination\">

            {% if previous is defined %}
                <li class=\"page-item\">
                    <a class=\"page-link\" rel=\"prev\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">&laquo;&nbsp;{{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}</a>
                </li>
            {% else %}
                <li class=\"page-item disabled\">
                    <span class=\"page-link\">&laquo;&nbsp;{{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}</span>
                </li>
            {% endif %}

            {% if startPage > 1 %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): 1})) }}\">1</a>
                </li>
                {% if startPage == 3 %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): 2})) }}\">2</a>
                    </li>
                {% elseif startPage != 2 %}
                    <li class=\"page-item disabled\">
                        <span class=\"page-link\">&hellip;</span>
                    </li>
                {% endif %}
            {% endif %}

            {% for page in pagesInRange %}
                {% if page != current %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                    </li>
                {% else %}
                    <li class=\"page-item active\">
                        <span class=\"page-link\">{{ page }}</span>
                    </li>
                {% endif %}

            {% endfor %}

            {% if pageCount > endPage %}
                {% if pageCount > (endPage + 1) %}
                    {% if pageCount > (endPage + 2) %}
                        <li class=\"page-item disabled\">
                            <span class=\"page-link\">&hellip;</span>
                        </li>
                    {% else %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): (pageCount - 1)})) }}\">{{ pageCount -1 }}</a>
                        </li>
                    {% endif %}
                {% endif %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): pageCount})) }}\">{{ pageCount }}</a>
                </li>
            {% endif %}

            {% if next is defined %}
                <li class=\"page-item\">
                    <a class=\"page-link\" rel=\"next\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">{{ 'label_next'|trans({}, 'KnpPaginatorBundle') }}&nbsp;&raquo;</a>
                </li>
            {% else %}
                <li  class=\"page-item disabled\">
                    <span class=\"page-link\">{{ 'label_next'|trans({}, 'KnpPaginatorBundle') }}&nbsp;&raquo;</span>
                </li>
            {% endif %}
        </ul>
    </nav>
{% endif %}
", "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", "C:\\projetos\\cadastro\\vendor\\knplabs\\knp-paginator-bundle\\Resources\\views\\Pagination\\twitter_bootstrap_v4_pagination.html.twig");
    }
}
