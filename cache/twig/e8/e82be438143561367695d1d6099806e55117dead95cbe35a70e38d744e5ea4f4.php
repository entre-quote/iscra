<?php

/* default.html.twig */
class __TwigTemplate_4e03f9a7f27eb4f23d8ef60c059e37e3b69d2eb6fd3845b5a37054bd05bbc82d extends Twig_Template
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
        $this->loadTemplate("default.html.twig", "default.html.twig", 1, "1771648363")->display($context);
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

\t{% block content %}

\t\t<h2>{{ page.title }}</h2>
\t\t{{ content }}

\t{% endblock %}

{% endembed %}
", "default.html.twig", "/Users/dev/Boulot/Mathieu Roy/ISCRA/iscra/user/themes/starter/templates/default.html.twig");
    }
}


/* default.html.twig */
class __TwigTemplate_4e03f9a7f27eb4f23d8ef60c059e37e3b69d2eb6fd3845b5a37054bd05bbc82d_1771648363 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
\t\t<h2>";
        // line 5
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h2>
\t\t";
        // line 6
        echo ($context["content"] ?? null);
        echo "

\t";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 6,  87 => 5,  84 => 4,  81 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

\t{% block content %}

\t\t<h2>{{ page.title }}</h2>
\t\t{{ content }}

\t{% endblock %}

{% endembed %}
", "default.html.twig", "/Users/dev/Boulot/Mathieu Roy/ISCRA/iscra/user/themes/starter/templates/default.html.twig");
    }
}
