<?php

/* @Page:/Users/dev/Boulot/Mathieu Roy/ISCRA/iscra/user/pages/plan-du-site */
class __TwigTemplate_c7e819a2febac8a636482c4cb3ade2c9c703b90e1b5917416bd8646891f08dfb extends Twig_Template
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
        // line 1
        echo "<ul>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 3
            echo "
    ";
            // line 4
            if (($this->getAttribute($context["p"], "title", array()) != "Documentation")) {
                // line 5
                echo "
    <li><a href=\"";
                // line 6
                echo $this->getAttribute($context["p"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["p"], "title", array());
                echo "</a></li>

    ";
            }
            // line 9
            echo "
    ";
            // line 10
            if (($this->getAttribute($this->getAttribute($context["p"], "children", array()), "count", array()) > 0)) {
                // line 11
                echo "        <ul>
            ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["p"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["sp"]) {
                    // line 13
                    echo "                <li><a href=\"";
                    echo $this->getAttribute($context["sp"], "url", array());
                    echo "\">";
                    echo $this->getAttribute($context["sp"], "title", array());
                    echo "</a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sp'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "        </ul>
    ";
            }
            // line 17
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/dev/Boulot/Mathieu Roy/ISCRA/iscra/user/pages/plan-du-site";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  69 => 17,  65 => 15,  54 => 13,  50 => 12,  47 => 11,  45 => 10,  42 => 9,  34 => 6,  31 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul>
    {% for p in page.collection %}

    {% if p.title != 'Documentation' %}

    <li><a href=\"{{ p.url }}\">{{ p.title }}</a></li>

    {% endif %}

    {% if p.children.count > 0 %}
        <ul>
            {% for sp in p.children %}
                <li><a href=\"{{ sp.url }}\">{{ sp.title }}</a></li>
            {% endfor %}
        </ul>
    {% endif %}

    {% endfor %}
</ul>
", "@Page:/Users/dev/Boulot/Mathieu Roy/ISCRA/iscra/user/pages/plan-du-site", "");
    }
}
