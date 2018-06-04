<?php

/* partials/mediaembed.html.twig */
class __TwigTemplate_a54b84a9e5c04ef6eb098a424e41efdc15efe1bdcd0391a7c541b655becaffc5 extends Twig_Template
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
        // line 2
        $context["default"] = $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "config", array()), "media", array());
        // line 3
        $context["oembed"] = $this->getAttribute(($context["mediaembed"] ?? null), "service", array());
        // line 4
        echo "
";
        // line 6
        if ( !$this->getAttribute(($context["mediaembed"] ?? null), "success", array())) {
            // line 7
            echo "  ";
            if ($this->getAttribute(($context["default"] ?? null), "responsive", array())) {
                // line 8
                echo "    ";
                $context["class"] = "-responsive mediaembed-msod";
                // line 9
                echo "  ";
            } else {
                // line 10
                echo "    ";
                $context["class"] = ((" mediaembed-msod\" style=\"max-width: " . $this->getAttribute(($context["default"] ?? null), "width", array())) . "px;");
                // line 11
                echo "  ";
            }
            // line 12
            echo "
  <div class=\"mediaembed";
            // line 13
            echo ($context["class"] ?? null);
            echo "\">
    <p class=\"mediaembed-icon\">&#9749;</p>
    <p class=\"mediaembed-error-title\"><b>Unable to process oEmbed media:</b><a href=\"";
            // line 15
            echo $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", array()), "src", array());
            echo "\" alt=\"";
            echo $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", array()), "alt", array());
            echo "\" title=\"";
            echo $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", array()), "title", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", array()), "src", array()));
            echo "</a></p>
    <p class=\"mediaembed-error-message\"><b>Error:</b>";
            // line 16
            echo $this->getAttribute(($context["mediaembed"] ?? null), "message", array());
            echo "</p>
  </div>

";
        } else {
            // line 21
            echo "  ";
            $context["response"] = $this->getAttribute(($context["oembed"] ?? null), "attributes", array());
            // line 22
            echo "  ";
            // line 23
            echo "  ";
            if (((twig_test_empty($this->getAttribute(($context["response"] ?? null), "width", array())) ||  !$this->getAttribute(($context["response"] ?? null), "width", array(), "any", true, true)) || ($this->getAttribute(($context["response"] ?? null), "width", array()) == 0))) {
                // line 24
                echo "    ";
                $context["response"] = twig_array_merge(($context["response"] ?? null), array("width" => (($this->getAttribute(($context["default"] ?? null), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["default"] ?? null), "width", array()), 1)) : (1))));
                // line 25
                echo "  ";
            }
            // line 26
            echo "
  ";
            // line 27
            if (((twig_test_empty($this->getAttribute(($context["response"] ?? null), "height", array())) ||  !$this->getAttribute(($context["response"] ?? null), "height", array(), "any", true, true)) || ($this->getAttribute(($context["response"] ?? null), "height", array()) == 0))) {
                // line 28
                echo "    ";
                $context["response"] = twig_array_merge(($context["response"] ?? null), array("height" => (($this->getAttribute(($context["default"] ?? null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["default"] ?? null), "height", array()), 1)) : (1))));
                // line 29
                echo "  ";
            }
            // line 30
            echo "
  ";
            // line 31
            $context["width"] = $this->getAttribute(($context["response"] ?? null), "width", array());
            // line 32
            echo "  ";
            $context["height"] = $this->getAttribute(($context["response"] ?? null), "height", array());
            // line 33
            echo "  ";
            $context["ratio"] = (($context["height"] ?? null) / ($context["width"] ?? null));
            // line 34
            echo "
  ";
            // line 36
            echo "  ";
            if ($this->getAttribute(($context["default"] ?? null), "adjust", array())) {
                // line 37
                echo "    ";
                // line 38
                echo "    ";
                if ((((($context["width"] ?? null) * ($context["ratio"] ?? null)) > $this->getAttribute(($context["default"] ?? null), "height", array())) || ((($context["height"] ?? null) / ($context["ratio"] ?? null)) > $this->getAttribute(($context["default"] ?? null), "width", array())))) {
                    // line 39
                    echo "      ";
                    // line 40
                    echo "      ";
                    $context["width"] = (($this->getAttribute(($context["default"] ?? null), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["default"] ?? null), "width", array()), 1)) : (1));
                    // line 41
                    echo "      ";
                    $context["height"] = twig_round(($this->getAttribute(($context["default"] ?? null), "width", array()) * ($context["ratio"] ?? null)));
                    // line 42
                    echo "    ";
                }
                // line 43
                echo "  ";
            } else {
                // line 44
                echo "    ";
                $context["width"] = (($this->getAttribute(($context["default"] ?? null), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["default"] ?? null), "width", array()), 1)) : (1));
                // line 45
                echo "    ";
                $context["height"] = (($this->getAttribute(($context["default"] ?? null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["default"] ?? null), "height", array()), 1)) : (1));
                // line 46
                echo "  ";
            }
            // line 47
            echo "
  ";
            // line 49
            echo "  ";
            $context["ratio"] = (($context["height"] ?? null) / ($context["width"] ?? null));
            // line 50
            echo "  ";
            $context["container_styles"] = (("padding-bottom: " . sprintf("%.2f", (($context["ratio"] ?? null) * 100))) . "%;");
            // line 51
            echo "
  ";
            // line 53
            echo "  ";
            if ($this->getAttribute(($context["default"] ?? null), "responsive", array())) {
                // line 54
                echo "    ";
                $context["responsive"] = "-responsive";
                // line 55
                echo "
    ";
                // line 56
                $context["width"] = 1920;
                // line 57
                echo "    ";
                $context["height"] = twig_round((($context["width"] ?? null) * ($context["ratio"] ?? null)));
                // line 58
                echo "  ";
            } else {
                // line 59
                echo "    ";
                $context["styles"] = ((((" style=\"max-width: " . ($context["width"] ?? null)) . "px; max-height: ") . ($context["height"] ?? null)) . "px;\"");
                // line 60
                echo "  ";
            }
            // line 61
            echo "
  ";
            // line 63
            echo "  ";
            if ($this->getAttribute(($context["default"] ?? null), "preview", array())) {
                // line 64
                echo "    ";
                $context["lazyload"] = " lazyload";
                // line 65
                echo "    ";
                $context["lazyload_script"] = " onclick=\"lazyload(this)\"";
                // line 66
                echo "  ";
            }
            // line 67
            echo "
  <div class=\"mediaembed";
            // line 68
            echo ($context["responsive"] ?? null);
            echo " mediaembed-media mediaembed-";
            echo $this->getAttribute(($context["oembed"] ?? null), "type", array());
            echo " mediaembed-";
            echo twig_lower_filter($this->env, $this->getAttribute(($context["oembed"] ?? null), "name", array()));
            echo ($context["lazyload"] ?? null);
            echo "\"";
            echo ($context["styles"] ?? null);
            echo ">
    <div class=\"mediaembed-container\" style=\"";
            // line 69
            echo ($context["container_styles"] ?? null);
            echo "\">
    ";
            // line 71
            echo "
    ";
            // line 73
            echo "    ";
            if (($this->getAttribute(($context["oembed"] ?? null), "type", array()) == "photo")) {
                // line 74
                echo "      ";
                $context["title"] = (((($this->getAttribute($this->getAttribute(($context["oembed"] ?? null), "getOembed", array(), "method"), "provider_name", array()) . ": &#8220;") . $this->getAttribute(($context["oembed"] ?? null), "title", array())) . "&#8221; by ") . $this->getAttribute(($context["oembed"] ?? null), "author", array()));
                // line 75
                echo "      <a class=\"mediaembed-embed\" href=\"";
                echo $this->getAttribute(($context["oembed"] ?? null), "author", array(0 => "url"), "method");
                echo "\" title=\"";
                echo ($context["title"] ?? null);
                echo "\">
        <img src=\"";
                // line 76
                echo $this->getAttribute(($context["oembed"] ?? null), "url", array());
                echo "\" alt=\"";
                echo $this->getAttribute(($context["oembed"] ?? null), "title", array());
                echo "\">
      </a>

    ";
                // line 80
                echo "    ";
            } elseif (($this->getAttribute(($context["oembed"] ?? null), "type", array()) == "video")) {
                // line 81
                echo "      <a href=\"";
                echo $this->getAttribute(($context["oembed"] ?? null), "getEmbedCode", array());
                echo "\" alt=\"";
                echo $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", array()), "alt", array());
                echo "\" title=\"";
                echo $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", array()), "title", array());
                echo "\" class=\"mediaembed-media\"";
                echo ($context["lazyload_script"] ?? null);
                echo ">
        ";
                // line 83
                echo "        <!--
        <iframe class=\"mediaembed-embed\" src=\"";
                // line 84
                echo $this->getAttribute(($context["oembed"] ?? null), "getEmbedCode", array());
                echo "\" width=\"";
                echo ($context["width"] ?? null);
                echo "\" height=\"";
                echo ($context["height"] ?? null);
                echo "\" frameborder=\"0\" scrolling=\"no\" webkitallowfullscreen mozallowfullscreen allowfullscreen>
          <p>Your browser does not support iframes.</p>
        </iframe>
        -->

        ";
                // line 90
                echo "        ";
                if (($this->getAttribute(($context["default"] ?? null), "preview", array()) && $this->getAttribute(($context["oembed"] ?? null), "thumbnail", array()))) {
                    // line 91
                    echo "          <img src=\"";
                    echo $this->getAttribute(($context["oembed"] ?? null), "thumbnail", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", array()), "alt", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", array()), "title", array());
                    echo "\" class=\"mediaembed-thumbnail\" />
        ";
                } else {
                    // line 93
                    echo "          ";
                    // line 94
                    echo "        ";
                }
                // line 95
                echo "
        ";
                // line 97
                echo "        <input type=\"checkbox\" id=\"mediaembed-hidden-input-";
                echo $this->getAttribute(($context["mediaembed"] ?? null), "uid", array());
                echo "\" class=\"mediaembed-input\" />

        ";
                // line 100
                echo "        <noscript>
          <iframe class=\"mediaembed-embed\" src=\"";
                // line 101
                echo $this->getAttribute(($context["oembed"] ?? null), "getEmbedCode", array());
                echo "\" width=\"";
                echo ($context["width"] ?? null);
                echo "\" height=\"";
                echo ($context["height"] ?? null);
                echo "\" frameborder=\"0\" scrolling=\"no\" webkitallowfullscreen mozallowfullscreen allowfullscreen style=\"display: none;\">
            <p>Your browser does not support iframes.</p>
          </iframe>
        </noscript>

        <label class=\"mediaembed-play\" for=\"mediaembed-hidden-input-";
                // line 106
                echo $this->getAttribute(($context["mediaembed"] ?? null), "uid", array());
                echo "\">&#9654;</label>
      </a>

    ";
                // line 110
                echo "    ";
            } elseif (($this->getAttribute(($context["oembed"] ?? null), "type", array()) == "link")) {
                // line 111
                echo "      ";
                $context["title"] = (((($this->getAttribute($this->getAttribute(($context["oembed"] ?? null), "getOembed", array(), "method"), "provider_name", array()) . ": &#8220;") . (($this->getAttribute($this->getAttribute($this->getAttribute(($context["oembed"] ?? null), "mediaembed", array(), "any", false, true), "raw", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["oembed"] ?? null), "mediaembed", array(), "any", false, true), "raw", array(), "any", false, true), "title", array()), ($context["title"] ?? null))) : (($context["title"] ?? null)))) . "&#8221; by ") . $this->getAttribute(($context["oembed"] ?? null), "author", array()));
                // line 112
                echo "      <a href=\"";
                echo $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", array()), "src", array());
                echo "\" alt=\"";
                echo $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", array()), "alt", array());
                echo "\" title=\"";
                echo ($context["title"] ?? null);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", array()), "src", array()));
                echo "</a>
    ";
                // line 114
                echo "    ";
            } elseif (($this->getAttribute(($context["oembed"] ?? null), "type", array()) == "rich")) {
                // line 115
                echo "      <div class=\"mediaembed-media\">";
                echo $this->getAttribute(($context["oembed"] ?? null), "getEmbedCode", array(), "method");
                echo "</div>

    ";
                // line 118
                echo "    ";
            } else {
                // line 119
                echo "      ";
                // line 120
                echo "      <a href=\"";
                echo $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", array()), "src", array());
                echo "\" alt=\"";
                echo $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", array()), "alt", array());
                echo "\" title=\"";
                echo $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", array()), "title", array());
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", array()), "src", array()));
                echo "</a>
    ";
            }
            // line 122
            echo "    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/mediaembed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 122,  338 => 120,  336 => 119,  333 => 118,  327 => 115,  324 => 114,  313 => 112,  310 => 111,  307 => 110,  301 => 106,  289 => 101,  286 => 100,  280 => 97,  277 => 95,  274 => 94,  272 => 93,  262 => 91,  259 => 90,  247 => 84,  244 => 83,  233 => 81,  230 => 80,  222 => 76,  215 => 75,  212 => 74,  209 => 73,  206 => 71,  202 => 69,  191 => 68,  188 => 67,  185 => 66,  182 => 65,  179 => 64,  176 => 63,  173 => 61,  170 => 60,  167 => 59,  164 => 58,  161 => 57,  159 => 56,  156 => 55,  153 => 54,  150 => 53,  147 => 51,  144 => 50,  141 => 49,  138 => 47,  135 => 46,  132 => 45,  129 => 44,  126 => 43,  123 => 42,  120 => 41,  117 => 40,  115 => 39,  112 => 38,  110 => 37,  107 => 36,  104 => 34,  101 => 33,  98 => 32,  96 => 31,  93 => 30,  90 => 29,  87 => 28,  85 => 27,  82 => 26,  79 => 25,  76 => 24,  73 => 23,  71 => 22,  68 => 21,  61 => 16,  51 => 15,  46 => 13,  43 => 12,  40 => 11,  37 => 10,  34 => 9,  31 => 8,  28 => 7,  26 => 6,  23 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Shortcut variables #}
{% set default = mediaembed.config.media %}
{% set oembed = mediaembed.service %}

{# Processing error #}
{% if not mediaembed.success %}
  {% if default.responsive %}
    {% set class = \"-responsive mediaembed-msod\" %}
  {% else  %}
    {% set class = \" mediaembed-msod\\\" style=\\\"max-width: \" ~ default.width ~ \"px;\" %}
  {% endif %}

  <div class=\"mediaembed{{ class }}\">
    <p class=\"mediaembed-icon\">&#9749;</p>
    <p class=\"mediaembed-error-title\"><b>Unable to process oEmbed media:</b><a href=\"{{ mediaembed.raw.src }}\" alt=\"{{ mediaembed.raw.alt }}\" title=\"{{ mediaembed.raw.title }}\">{{ mediaembed.raw.src|e }}</a></p>
    <p class=\"mediaembed-error-message\"><b>Error:</b>{{ mediaembed.message }}</p>
  </div>

{# Setup block #}
{% else %}
  {% set response = oembed.attributes %}
  {# Normalize response #}
  {% if (response.width is empty) or not (response.width is defined) or (response.width == 0) %}
    {% set response = response|merge({'width' : default.width|default(1)}) %}
  {% endif %}

  {% if (response.height is empty) or not (response.height is defined) or (response.height == 0) %}
    {% set response = response|merge({'height' : default.height|default(1)}) %}
  {% endif %}

  {% set width = response.width %}
  {% set height = response.height %}
  {% set ratio = height / width %}

  {# Adjust OEmbed media dimensions or restrict them? #}
  {% if default.adjust %}
    {# Check if computed height is larger than default setting #}
    {% if (width * ratio) > default.height or (height / ratio) > default.width %}
      {# Rescale width and height #}
      {% set width = default.width|default(1) %}
      {% set height = (default.width * ratio)|round %}
    {% endif %}
  {% else %}
    {% set width = default.width|default(1) %}
    {% set height = default.height|default(1) %}
  {% endif %}

  {# Recompute aspect ratio #}
  {% set ratio = height / width %}
  {% set container_styles = \"padding-bottom: \" ~ \"%.2f\"|format(ratio * 100) ~ \"%;\" %}

  {# Embed responsive OEmbed media #}
  {% if default.responsive %}
    {% set responsive = \"-responsive\" %}

    {% set width = 1920 %}
    {% set height = (width * ratio)|round %}
  {% else  %}
    {% set styles = \" style=\\\"max-width: \" ~ width ~ \"px; max-height: \" ~ height ~ \"px;\\\"\" %}
  {% endif %}

  {# Setup lazy loading media for those with preview enabled #}
  {% if default.preview %}
    {% set lazyload = \" lazyload\" %}
    {% set lazyload_script = \" onclick=\\\"lazyload(this)\\\"\" %}
  {% endif %}

  <div class=\"mediaembed{{ responsive }} mediaembed-media mediaembed-{{ oembed.type }} mediaembed-{{ oembed.name|lower }}{{ lazyload }}\"{{ styles }}>
    <div class=\"mediaembed-container\" style=\"{{ container_styles }}\">
    {# Embed content according to media type #}

    {# -- Photo -- #}
    {% if oembed.type == \"photo\" %}
      {% set title = oembed.getOembed().provider_name ~ ': &#8220;' ~ oembed.title ~ '&#8221; by ' ~ oembed.author %}
      <a class=\"mediaembed-embed\" href=\"{{ oembed.author('url') }}\" title=\"{{ title }}\">
        <img src=\"{{ oembed.url }}\" alt=\"{{ oembed.title }}\">
      </a>

    {# -- Video -- #}
    {% elseif oembed.type == \"video\" %}
      <a href=\"{{ oembed.getEmbedCode }}\" alt=\"{{ mediaembed.raw.alt }}\" title=\"{{ mediaembed.raw.title }}\" class=\"mediaembed-media\"{{ lazyload_script }}>
        {# JavaScript lazy-loading #}
        <!--
        <iframe class=\"mediaembed-embed\" src=\"{{ oembed.getEmbedCode }}\" width=\"{{ width }}\" height=\"{{ height }}\" frameborder=\"0\" scrolling=\"no\" webkitallowfullscreen mozallowfullscreen allowfullscreen>
          <p>Your browser does not support iframes.</p>
        </iframe>
        -->

        {# Show Thumbnail #}
        {% if default.preview and oembed.thumbnail %}
          <img src=\"{{ oembed.thumbnail }}\" alt=\"{{ mediaembed.raw.alt }}\" title=\"{{ mediaembed.raw.title }}\" class=\"mediaembed-thumbnail\" />
        {% else %}
          {# Show placeholder #}
        {% endif %}

        {# Toggle for loading iframe content #}
        <input type=\"checkbox\" id=\"mediaembed-hidden-input-{{  mediaembed.uid }}\" class=\"mediaembed-input\" />

        {# Implement JavaScript-less lazyload technique #}
        <noscript>
          <iframe class=\"mediaembed-embed\" src=\"{{ oembed.getEmbedCode }}\" width=\"{{ width }}\" height=\"{{ height }}\" frameborder=\"0\" scrolling=\"no\" webkitallowfullscreen mozallowfullscreen allowfullscreen style=\"display: none;\">
            <p>Your browser does not support iframes.</p>
          </iframe>
        </noscript>

        <label class=\"mediaembed-play\" for=\"mediaembed-hidden-input-{{  mediaembed.uid }}\">&#9654;</label>
      </a>

    {# -- Link -- #}
    {% elseif oembed.type == \"link\" %}
      {% set title = oembed.getOembed().provider_name ~ ': &#8220;' ~ oembed.mediaembed.raw.title|default(title) ~ '&#8221; by ' ~ oembed.author %}
      <a href=\"{{ mediaembed.raw.src }}\" alt=\"{{ mediaembed.raw.alt }}\" title=\"{{ title }}\">{{ mediaembed.raw.src|e }}</a>
    {# -- Rich media -- #}
    {% elseif oembed.type == \"rich\" %}
      <div class=\"mediaembed-media\">{{ oembed.getEmbedCode() }}</div>

    {# -- Nothing from above -- #}
    {% else %}
      {# Show at least a link for the user #}
      <a href=\"{{ mediaembed.raw.src }}\" alt=\"{{ mediaembed.raw.alt }}\" title=\"{{ mediaembed.raw.title }}\">{{ mediaembed.raw.src|e }}</a>
    {% endif %}
    </div>
  </div>
{% endif %}
", "partials/mediaembed.html.twig", "/home/entrequoqs/www/iscra/user/plugins/mediaembed/templates/partials/mediaembed.html.twig");
    }
}
