<?php

/* item.html.twig */
class __TwigTemplate_c0628f7d466bb52bebd7f8ba3f05e8b2460a55fae61aa2fcae124f4e871b74c6 extends Twig_Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "71554901")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
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

\t\t<section class=\"item\">
\t\t\t   {% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false} %}
\t\t</section>

\t{% endblock %}

{% endembed %}
", "item.html.twig", "/Users/dev/Boulot/Mathieu Roy/ISCRA/iscra/user/themes/starter/templates/item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_c0628f7d466bb52bebd7f8ba3f05e8b2460a55fae61aa2fcae124f4e871b74c6_71554901 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
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
\t\t<section class=\"item\">
\t\t\t   ";
        // line 6
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 6)->display(array_merge($context, array("blog" => $this->getAttribute(($context["page"] ?? null), "parent", array()), "truncate" => false)));
        // line 7
        echo "\t\t</section>

\t";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 7,  89 => 6,  85 => 4,  82 => 3,  19 => 1,);
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

\t\t<section class=\"item\">
\t\t\t   {% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false} %}
\t\t</section>

\t{% endblock %}

{% endembed %}
", "item.html.twig", "/Users/dev/Boulot/Mathieu Roy/ISCRA/iscra/user/themes/starter/templates/item.html.twig");
    }
}
