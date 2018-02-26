<?php

/* partials/_header.html.twig */
class __TwigTemplate_b1f4b9a14d5fb7435109b49f248caf6cde6ba2013dd561d9cdd08eff572d6bf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'header_navigation' => array($this, 'block_header_navigation'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = array())
    {
        // line 2
        echo "<header>
    <div>
        <a class=\"logo\" href=\"";
        // line 4
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">
            <h1>
                <img src=\"";
        // line 6
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo-iscra.svg");
        echo "\" alt=\"Institut Social et Coopératif en Recherche Appliquée\">
            </h1>
        </a>
        <nav class=\"mini-nav\">
            <a href=\"";
        // line 10
        echo ($context["base_url_absolute"] ?? null);
        echo "/contact\">Contact</a>
            <a href=\"http://www.iscra.org/waln/subscribe.php\" target=\"_blank\">Inscription à la newsletter</a>
        </nav>
    </div>

    ";
        // line 15
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 20
        echo "

</header>
";
    }

    // line 15
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 16
        echo "    <nav class=\"main-nav\">
        ";
        // line 17
        $this->loadTemplate("partials/_navigation.html.twig", "partials/_header.html.twig", 17)->display($context);
        // line 18
        echo "    </nav>
    ";
    }

    public function getTemplateName()
    {
        return "partials/_header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 18,  66 => 17,  63 => 16,  60 => 15,  53 => 20,  51 => 15,  43 => 10,  36 => 6,  31 => 4,  27 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block header %}
<header>
    <div>
        <a class=\"logo\" href=\"{{ base_url == '' ? '/' : base_url }}\">
            <h1>
                <img src=\"{{ url('theme://images/logo-iscra.svg') }}\" alt=\"Institut Social et Coopératif en Recherche Appliquée\">
            </h1>
        </a>
        <nav class=\"mini-nav\">
            <a href=\"{{ base_url_absolute }}/contact\">Contact</a>
            <a href=\"http://www.iscra.org/waln/subscribe.php\" target=\"_blank\">Inscription à la newsletter</a>
        </nav>
    </div>

    {% block header_navigation %}
    <nav class=\"main-nav\">
        {% include 'partials/_navigation.html.twig' %}
    </nav>
    {% endblock %}


</header>
{% endblock %}
", "partials/_header.html.twig", "/Users/dev/Boulot/Mathieu Roy/ISCRA/iscra/user/themes/starter/templates/partials/_header.html.twig");
    }
}
