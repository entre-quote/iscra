<?php

/* partials/youtube.html.twig */
class __TwigTemplate_407bcf55c8ab09f92ebab4091762a00d5631d5b78faa2eca241b01dc7f969e8a extends Twig_Template
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
        echo "<div class=\"grav-youtube\">
    <iframe src=\"";
        // line 2
        echo $this->env->getExtension('Grav\Plugin\Youtube\Twig\YoutubeTwigExtension')->embedUrl(($context["video_id"] ?? null), ($context["player_parameters"] ?? null), ($context["privacy_enhanced_mode"] ?? null));
        echo "\" frameborder=\"0\" allowfullscreen></iframe>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/youtube.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"grav-youtube\">
    <iframe src=\"{{- youtube_embed_url(video_id, player_parameters, privacy_enhanced_mode) -}}\" frameborder=\"0\" allowfullscreen></iframe>
</div>
", "partials/youtube.html.twig", "/Users/dev/Boulot/Mathieu Roy/ISCRA/iscra/user/plugins/youtube/templates/partials/youtube.html.twig");
    }
}
