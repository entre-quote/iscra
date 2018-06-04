<?php

/* partials/_footer.html.twig */
class __TwigTemplate_2b46b939aaaca6f269bf015aa2d43f3ce808c95cad17ac5cfba484d98adc59ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = array())
    {
        // line 2
        echo "
<footer class=\"grid-4-small-2\">

    ";
        // line 5
        if (twig_in_filter("themes", $this->getAttribute(($context["uri"] ?? null), "path", array()))) {
            // line 6
            echo "        <div>
            <a href=\"";
            // line 7
            echo ($context["base_url_absolute"] ?? null);
            echo "/interventions/etude-recherche-action\">Étude, recherche-action</a>
            <a href=\"";
            // line 8
            echo ($context["base_url_absolute"] ?? null);
            echo "/interventions/formation\">Formation</a>
            <a href=\"";
            // line 9
            echo ($context["base_url_absolute"] ?? null);
            echo "/interventions/conferences-et-debats-publics\">Conférences et débats publics</a>
        </div>
        <div>
            <a href=\"";
            // line 12
            echo ($context["base_url_absolute"] ?? null);
            echo "/interventions/publications\">Publications</a>
            <a href=\"";
            // line 13
            echo ($context["base_url_absolute"] ?? null);
            echo "/interventions/ressources-pedagogiques\">Ressources pédagogiques</a>
            <a href=\"";
            // line 14
            echo ($context["base_url_absolute"] ?? null);
            echo "/interventions/univers-cite-des-savoirs-impliques\">Univers-cité des savoirs impliqués</a>
        </div>
    ";
        } else {
            // line 17
            echo "        <div>
            <a href=\"";
            // line 18
            echo ($context["base_url_absolute"] ?? null);
            echo "/themes/jeunesse\">Jeunesse</a>
            <a href=\"";
            // line 19
            echo ($context["base_url_absolute"] ?? null);
            echo "/themes/discrimination\">Discrimination</a>
            <a href=\"";
            // line 20
            echo ($context["base_url_absolute"] ?? null);
            echo "/themes/histoire-et-memoire\">Histoire et mémoire</a>
        </div>
        <div>
            <a href=\"";
            // line 23
            echo ($context["base_url_absolute"] ?? null);
            echo "/themes/developpement-du-pouvoir-d-agir\">Développement et pouvoir d'agir</a>
            <a href=\"";
            // line 24
            echo ($context["base_url_absolute"] ?? null);
            echo "/themes/laicite\">Laïcité</a>
            <a href=\"";
            // line 25
            echo ($context["base_url_absolute"] ?? null);
            echo "/themes/autres-themes\">Autres thèmes</a>
        </div>
    ";
        }
        // line 28
        echo "
    <div class=\"limit\">
        <a href=\"";
        // line 30
        echo ($context["base_url_absolute"] ?? null);
        echo "/reseau\">Réseau</a>
        <!-- <a href=\"";
        // line 31
        echo ($context["base_url_absolute"] ?? null);
        echo "/archives\">Archives</a> -->
    </div>
    <div>
        <a href=\"";
        // line 34
        echo ($context["base_url_absolute"] ?? null);
        echo "/mentions-legales\">Mentions légales</a>
        <a href=\"";
        // line 35
        echo ($context["base_url_absolute"] ?? null);
        echo "/plan-du-site\">Plan du site</a>
        <a href=\"#\"><img src=\"";
        // line 36
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo-fb.png");
        echo "\" alt=\"\"></a>
    </div>
</footer>

";
    }

    public function getTemplateName()
    {
        return "partials/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  117 => 36,  113 => 35,  109 => 34,  103 => 31,  99 => 30,  95 => 28,  89 => 25,  85 => 24,  81 => 23,  75 => 20,  71 => 19,  67 => 18,  64 => 17,  58 => 14,  54 => 13,  50 => 12,  44 => 9,  40 => 8,  36 => 7,  33 => 6,  31 => 5,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block footer %}

<footer class=\"grid-4-small-2\">

    {% if 'themes' in uri.path %}
        <div>
            <a href=\"{{ base_url_absolute }}/interventions/etude-recherche-action\">Étude, recherche-action</a>
            <a href=\"{{ base_url_absolute }}/interventions/formation\">Formation</a>
            <a href=\"{{ base_url_absolute }}/interventions/conferences-et-debats-publics\">Conférences et débats publics</a>
        </div>
        <div>
            <a href=\"{{ base_url_absolute }}/interventions/publications\">Publications</a>
            <a href=\"{{ base_url_absolute }}/interventions/ressources-pedagogiques\">Ressources pédagogiques</a>
            <a href=\"{{ base_url_absolute }}/interventions/univers-cite-des-savoirs-impliques\">Univers-cité des savoirs impliqués</a>
        </div>
    {% else %}
        <div>
            <a href=\"{{ base_url_absolute }}/themes/jeunesse\">Jeunesse</a>
            <a href=\"{{ base_url_absolute }}/themes/discrimination\">Discrimination</a>
            <a href=\"{{ base_url_absolute }}/themes/histoire-et-memoire\">Histoire et mémoire</a>
        </div>
        <div>
            <a href=\"{{ base_url_absolute }}/themes/developpement-du-pouvoir-d-agir\">Développement et pouvoir d'agir</a>
            <a href=\"{{ base_url_absolute }}/themes/laicite\">Laïcité</a>
            <a href=\"{{ base_url_absolute }}/themes/autres-themes\">Autres thèmes</a>
        </div>
    {% endif %}

    <div class=\"limit\">
        <a href=\"{{ base_url_absolute }}/reseau\">Réseau</a>
        <!-- <a href=\"{{ base_url_absolute }}/archives\">Archives</a> -->
    </div>
    <div>
        <a href=\"{{ base_url_absolute }}/mentions-legales\">Mentions légales</a>
        <a href=\"{{ base_url_absolute }}/plan-du-site\">Plan du site</a>
        <a href=\"#\"><img src=\"{{ url('theme://images/logo-fb.png') }}\" alt=\"\"></a>
    </div>
</footer>

{% endblock %}
", "partials/_footer.html.twig", "/Users/dev/Boulot/Mathieu Roy/ISCRA/iscra/user/themes/starter/templates/partials/_footer.html.twig");
    }
}
