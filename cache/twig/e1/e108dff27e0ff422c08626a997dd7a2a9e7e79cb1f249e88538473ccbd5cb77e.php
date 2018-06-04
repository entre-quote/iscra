<?php

/* partials/vimeo.html.twig */
class __TwigTemplate_3a2d3b9c3579203d77215561e4de73ae17f5e430667a57f62d68e7c29eea1aac extends Twig_Template
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
        echo $this->env->getExtension('Grav\Plugin\Vimeo\Twig\VimeoTwigExtension')->embedVideo(($context["video_id"] ?? null), ($context["player_parameters"] ?? null));
    }

    public function getTemplateName()
    {
        return "partials/vimeo.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{- vimeo_embed_video(video_id, player_parameters) -}}
", "partials/vimeo.html.twig", "/Users/dev/Boulot/Mathieu Roy/ISCRA/iscra/user/plugins/vimeo/templates/partials/vimeo.html.twig");
    }
}
