<?php

/* partials/_navigation.html.twig */
class __TwigTemplate_b6c68566684a8c9f4c953400d9fcbd8e818126a112bbdb8b9688a1adb6c74a18 extends Twig_Template
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
        // line 14
        echo "

";
        // line 16
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdown", array()), "enabled", array())) {
            // line 17
            echo "    ";
            echo $this->getAttribute($this, "loop", array(0 => ($context["pages"] ?? null)), "method");
            echo "
";
        } else {
            // line 19
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 20
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("selected") : (""));
                // line 21
                echo "        <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
            <a href=\"";
                // line 22
                echo $this->getAttribute($context["page"], "url", array());
                echo "\"><span>";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "</span></a>
        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("selected") : (""));
                // line 4
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    // line 5
                    echo "                <a href=\"";
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\" class=\"has-children ";
                    echo ($context["current_page"] ?? null);
                    echo "\"><span>";
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "</span></a>
                <nav class=\"sub-menu\">
                    ";
                    // line 7
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"]), "method");
                    echo "
                </nav>
        ";
                } else {
                    // line 10
                    echo "                <a href=\"";
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\" class=\"";
                    echo ($context["current_page"] ?? null);
                    echo "\"><span>";
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "</span></a>
        ";
                }
                // line 12
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/_navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 12,  97 => 10,  91 => 7,  81 => 5,  78 => 4,  75 => 3,  70 => 2,  58 => 1,  44 => 22,  39 => 21,  36 => 20,  31 => 19,  25 => 17,  23 => 16,  19 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro loop(page) %}
    {% for p in page.children.visible %}
        {% set current_page = (p.active or p.activeChild) ? 'selected' : '' %}
        {% if p.children.visible.count > 0 %}
                <a href=\"{{ p.url }}\" class=\"has-children {{ current_page }}\"><span>{{ p.menu }}</span></a>
                <nav class=\"sub-menu\">
                    {{ _self.loop(p) }}
                </nav>
        {% else %}
                <a href=\"{{ p.url }}\" class=\"{{ current_page }}\"><span>{{ p.menu }}</span></a>
        {% endif %}
    {% endfor %}
{% endmacro %}


{% if theme_config.dropdown.enabled %}
    {{ _self.loop(pages) }}
{% else %}
    {% for page in pages.children.visible %}
        {% set current_page = (page.active or page.activeChild) ? 'selected' : '' %}
        <li class=\"{{ current_page }}\">
            <a href=\"{{ page.url }}\"><span>{{ page.menu }}</span></a>
        </li>
    {% endfor %}
{% endif %}
", "partials/_navigation.html.twig", "/home/entrequoqs/www/iscra/user/themes/starter/templates/partials/_navigation.html.twig");
    }
}
