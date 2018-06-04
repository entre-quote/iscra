<?php

/* partials/base.html.twig */
class __TwigTemplate_61a97fc25f6d6f73ac7ce7bc83b3a2483eb2a9a8cf5309c9c3cf28c4be4c0644 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", array())));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 43
        echo "</head>
<body class=\"";
        // line 44
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo " container\">

";
        // line 46
        $this->loadTemplate("partials/_header.html.twig", "partials/base.html.twig", 46)->display($context);
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->loadTemplate("partials/_footer.html.twig", "partials/base.html.twig", 54)->display($context);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('bottom', $context, $blocks);
        // line 59
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "<meta charset=\"utf-8\" />
<title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>

<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
<link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

<!-- Matomo -->
<script type=\"text/javascript\">
var _paq = _paq || [];
/* tracker methods like \"setCustomDimension\" should be called before \"trackPageView\" */
_paq.push(['trackPageView']);
_paq.push(['enableLinkTracking']);
(function() {
    var u=\"//entre-quote.fr/piwik/\";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
})();
</script>
<!-- End Matomo Code -->

";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/styles.css", 1 => 98), "method");
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 100), "method");
    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        // line 49
        echo "<main>
    ";
        // line 50
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "</main>
";
    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
    }

    // line 56
    public function block_bottom($context, array $blocks = array())
    {
        // line 57
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 57,  164 => 56,  159 => 50,  154 => 51,  152 => 50,  149 => 49,  146 => 48,  142 => 22,  139 => 21,  135 => 17,  132 => 16,  109 => 24,  107 => 21,  102 => 19,  100 => 16,  95 => 14,  91 => 13,  88 => 12,  86 => 11,  75 => 7,  72 => 6,  69 => 5,  62 => 59,  60 => 56,  57 => 55,  55 => 54,  52 => 53,  50 => 48,  47 => 47,  45 => 46,  40 => 44,  37 => 43,  35 => 5,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
{% block head %}
<meta charset=\"utf-8\" />
<title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
{% include 'partials/metadata.html.twig' %}

<link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />
<link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

{% block stylesheets %}
{% do assets.addCss('theme://css/styles.css', 98) %}
{% endblock %}
{{ assets.css() }}

{% block javascripts %}
{% do assets.addJs('jquery', 100) %}
{% endblock %}
{{ assets.js() }}

<!-- Matomo -->
<script type=\"text/javascript\">
var _paq = _paq || [];
/* tracker methods like \"setCustomDimension\" should be called before \"trackPageView\" */
_paq.push(['trackPageView']);
_paq.push(['enableLinkTracking']);
(function() {
    var u=\"//entre-quote.fr/piwik/\";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
})();
</script>
<!-- End Matomo Code -->

{% endblock head%}
</head>
<body class=\"{{ page.header.body_classes }} container\">

{% include 'partials/_header.html.twig' %}

{% block body %}
<main>
    {% block content %}{% endblock %}
</main>
{% endblock %}

{% include 'partials/_footer.html.twig' %}

{% block bottom %}
{{ assets.js('bottom') }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "/Users/dev/Boulot/Mathieu Roy/ISCRA/iscra/user/themes/starter/templates/partials/base.html.twig");
    }
}
