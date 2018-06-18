<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_350f01493f6a3da644e32a8138791350239558a4ecbcf7a53273316e9e579be0 extends Twig_Template
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
        echo "<article class=\"blog-item\">

    ";
        // line 3
        $context["header_image"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image", array()), true);
        // line 4
        echo "    ";
        $context["header_image_file"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image_file", array());
        // line 5
        echo "
    ";
        // line 6
        if (($context["header_image_file"] ?? null)) {
            // line 7
            echo "    ";
            $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), ($context["header_image_file"] ?? null), array(), "array");
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "    ";
            $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
            // line 10
            echo "    ";
        }
        // line 11
        echo "
    ";
        // line 12
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
            // line 13
            echo "
    ";
            // line 14
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "

    ";
            // line 16
            if ( !($context["truncate"] ?? null)) {
                // line 17
                echo "    ";
                $context["show_prev_next"] = true;
                // line 18
                echo "    ";
            }
            // line 19
            echo "
    ";
        } elseif ((        // line 20
($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", array()) != $this->getAttribute(($context["page"] ?? null), "content", array())))) {
            echo " <!-- Affichage en liste sans séparateur -->
    <div class=\"blog-item-container\">
        <div class=\"blog-item-header\">
            ";
            // line 23
            if (($context["header_image_media"] ?? null)) {
                // line 24
                echo "            <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\" class=\"img-wrapper\">
                ";
                // line 25
                echo $this->getAttribute(($context["header_image_media"] ?? null), "html", array());
                echo "
            </a>
            ";
            }
            // line 28
            echo "
            <a href=\"";
            // line 29
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">
                <h2>
                    ";
            // line 31
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "
                    <span>";
            // line 32
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "subTitle", array());
            echo "</span>
                </h2>
            </a>
        </div>

        <div class=\"p-summary\">
            <a href=\"";
            // line 38
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">
                ";
            // line 39
            echo $this->getAttribute(($context["page"] ?? null), "summary", array());
            echo "
            </a>
        </div>

        <a href=\"";
            // line 43
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\" class=\"read-more\">
            ";
            // line 44
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.CONTINUE_READING");
            echo "
        </a>

        ";
            // line 47
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Medias", array()) == true)) {
                // line 48
                echo "        <div class=\"blog-item-plus\">
            <div class=\"blog-item-media\">
                Media :
                ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Medias", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                    // line 52
                    echo "                <img src=\"";
                    echo ($context["theme_url"] ?? null);
                    echo "/images/icons/";
                    echo $context["media"];
                    echo ".png\" alt=\"";
                    echo $context["media"];
                    echo "\">
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "            </div>
        </div>
        ";
            }
            // line 57
            echo "
    </div>

        ";
            // line 60
            if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Themes", array()) == true) || ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Interventions", array()) == true))) {
                // line 61
                echo "            <div class=\"blog-item-tags\">
                ";
                // line 62
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Themes", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                    // line 63
                    echo "                <a href=\"";
                    echo ($context["base_url"] ?? null);
                    echo "/themes/";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", twig_replace_filter($context["theme"], array("é" => "e", "â" => "a", "ï" => "i")));
                    echo "\" class=\"p-theme\">";
                    echo $context["theme"];
                    echo "</a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Interventions", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["intervention"]) {
                    // line 66
                    echo "                <a href=\"";
                    echo ($context["base_url"] ?? null);
                    echo "/interventions/";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", twig_replace_filter($context["intervention"], array("é" => "e", "â" => "a")));
                    echo "\" class=\"p-intervention\">";
                    echo $context["intervention"];
                    echo "</a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intervention'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "            </div>
        ";
            }
            // line 70
            echo "    ";
        } elseif (($context["truncate"] ?? null)) {
            echo " <!-- Affichage en liste tronqué avec le séparateur -->

    <div class=\"blog-item-container\">
        <div class=\"blog-item-header\">

            ";
            // line 75
            if (($context["header_image_media"] ?? null)) {
                // line 76
                echo "            <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\" class=\"img-wrapper\">
                ";
                // line 77
                echo $this->getAttribute(($context["header_image_media"] ?? null), "html", array());
                echo "
            </a>
            ";
            }
            // line 80
            echo "
            <a href=\"";
            // line 81
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">
                <h2>
                    ";
            // line 83
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "
                    <span>";
            // line 84
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "subTitle", array());
            echo "</span>
                </h2>
            </a>
        </div>

        <div class=\"p-summary e-content\">
            <a href=\"";
            // line 90
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">
                ";
            // line 91
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
            </a>

            <a href=\"";
            // line 94
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\" class=\"read-more\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.CONTINUE_READING");
            echo "</a>
        </div>

        ";
            // line 97
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Medias", array()) == true)) {
                // line 98
                echo "        <div class=\"blog-item-plus\">
            <div class=\"bog-item-media\">
                Media :
                ";
                // line 101
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Medias", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                    // line 102
                    echo "                ";
                    echo $context["media"];
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                echo "            </div>
        </div>
        ";
            }
            // line 107
            echo "
        ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Medias", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 109
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "    </div>

    <div class=\"blog-item-tags\">
        ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Themes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 115
                echo "        <a href=\"/themes/";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", twig_replace_filter($context["theme"], array("é" => "e", "â" => "a", "ï" => "i")));
                echo "\" class=\"p-theme\">";
                echo $context["theme"];
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "
        ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Interventions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["intervention"]) {
                // line 119
                echo "        <a href=\"/interventions/";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", twig_replace_filter($context["intervention"], array("é" => "e", "â" => "a")));
                echo "\" class=\"p-intervention\">";
                echo $context["intervention"];
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intervention'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "    </div>

    ";
        } else {
            // line 123
            echo " <!-- Affichage complet -->

    <h1>
        ";
            // line 126
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "
        <span>";
            // line 127
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "subTitle", array());
            echo "</span>
    </h1>

    ";
            // line 130
            if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Themes", array()) == true) || ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Interventions", array()) == true))) {
                // line 131
                echo "    <div class=\"taxonomies-display\">
        <a href=\"";
                // line 132
                echo ($context["base_url_absolute"] ?? null);
                echo "/themes/\">Thème(s) :</a>

        <ul class=\"tax-list\">
            ";
                // line 135
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Themes", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                    // line 136
                    echo "
            <li><a href=\"";
                    // line 137
                    echo ($context["base_url_absolute"] ?? null);
                    echo "/themes/";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", twig_replace_filter($context["theme"], array("é" => "e", "è" => "e", "â" => "a", "ï" => "i")));
                    echo "\" class=\"p-theme\">";
                    echo $context["theme"];
                    echo "</a></li>

            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 140
                echo "        </ul>

        <a href=\"";
                // line 142
                echo ($context["base_url_absolute"] ?? null);
                echo "/interventions/\">Intervention(s) :</a>
        <ul class=\"tax-list\">
            ";
                // line 144
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Interventions", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["intervention"]) {
                    // line 145
                    echo "            <li><a href=\"";
                    echo ($context["base_url_absolute"] ?? null);
                    echo "/interventions/";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", twig_replace_filter($context["intervention"], array("é" => "e", "â" => "a")));
                    echo "\" class=\"p-intervention\">";
                    echo $context["intervention"];
                    echo "</a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intervention'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 147
                echo "        </ul>
    </div>
    ";
            }
            // line 150
            echo "
    ";
            // line 151
            if (($context["header_image_media"] ?? null)) {
                // line 152
                echo "    <div class=\"img-article\">
        ";
                // line 153
                echo $this->getAttribute(($context["header_image_media"] ?? null), "html", array());
                echo "
    </div>
    ";
            }
            // line 156
            echo "
    <div class=\"txt-article\">
        ";
            // line 158
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
    </div>

    ";
        }
        // line 162
        echo "
</article>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 162,  446 => 158,  442 => 156,  436 => 153,  433 => 152,  431 => 151,  428 => 150,  423 => 147,  410 => 145,  406 => 144,  401 => 142,  397 => 140,  384 => 137,  381 => 136,  377 => 135,  371 => 132,  368 => 131,  366 => 130,  360 => 127,  356 => 126,  351 => 123,  346 => 121,  335 => 119,  331 => 118,  328 => 117,  317 => 115,  313 => 114,  308 => 111,  301 => 109,  297 => 108,  294 => 107,  289 => 104,  280 => 102,  276 => 101,  271 => 98,  269 => 97,  261 => 94,  255 => 91,  251 => 90,  242 => 84,  238 => 83,  233 => 81,  230 => 80,  224 => 77,  219 => 76,  217 => 75,  208 => 70,  204 => 68,  191 => 66,  186 => 65,  173 => 63,  169 => 62,  166 => 61,  164 => 60,  159 => 57,  154 => 54,  141 => 52,  137 => 51,  132 => 48,  130 => 47,  124 => 44,  120 => 43,  113 => 39,  109 => 38,  100 => 32,  96 => 31,  91 => 29,  88 => 28,  82 => 25,  77 => 24,  75 => 23,  69 => 20,  66 => 19,  63 => 18,  60 => 17,  58 => 16,  53 => 14,  50 => 13,  48 => 12,  45 => 11,  42 => 10,  39 => 9,  36 => 8,  33 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<article class=\"blog-item\">

    {% set header_image = page.header.header_image|defined(true) %}
    {% set header_image_file = page.header.header_image_file %}

    {% if header_image_file %}
    {% set header_image_media = page.media.images[header_image_file] %}
    {% else %}
    {% set header_image_media = page.media.images|first %}
    {% endif %}

    {% if page.header.continue_link is sameas(false) %}

    {{ page.content }}

    {% if not truncate %}
    {% set show_prev_next = true %}
    {% endif %}

    {% elseif truncate and page.summary != page.content %} <!-- Affichage en liste sans séparateur -->
    <div class=\"blog-item-container\">
        <div class=\"blog-item-header\">
            {% if header_image_media %}
            <a href=\"{{ page.url }}\" class=\"img-wrapper\">
                {{ header_image_media.html }}
            </a>
            {% endif %}

            <a href=\"{{ page.url }}\">
                <h2>
                    {{ page.title }}
                    <span>{{ page.header.subTitle }}</span>
                </h2>
            </a>
        </div>

        <div class=\"p-summary\">
            <a href=\"{{page.url}}\">
                {{ page.summary }}
            </a>
        </div>

        <a href=\"{{ page.url }}\" class=\"read-more\">
            {{ 'BLOG.ITEM.CONTINUE_READING'|t }}
        </a>

        {% if page.taxonomy.Medias == true %}
        <div class=\"blog-item-plus\">
            <div class=\"blog-item-media\">
                Media :
                {% for media in page.taxonomy.Medias %}
                <img src=\"{{ theme_url }}/images/icons/{{ media }}.png\" alt=\"{{ media }}\">
                {% endfor %}
            </div>
        </div>
        {% endif %}

    </div>

        {% if page.taxonomy.Themes == true or page.taxonomy.Interventions == true  %}
            <div class=\"blog-item-tags\">
                {% for theme in page.taxonomy.Themes %}
                <a href=\"{{base_url}}/themes/{{ theme |replace({'é': 'e', 'â': 'a', 'ï': 'i'})|hyphenize }}\" class=\"p-theme\">{{ theme }}</a>
                {% endfor %}
                {% for intervention in page.taxonomy.Interventions %}
                <a href=\"{{base_url}}/interventions/{{ intervention |replace({'é': 'e', 'â': 'a'})|hyphenize }}\" class=\"p-intervention\">{{ intervention }}</a>
                {% endfor %}
            </div>
        {% endif %}
    {% elseif truncate %} <!-- Affichage en liste tronqué avec le séparateur -->

    <div class=\"blog-item-container\">
        <div class=\"blog-item-header\">

            {% if header_image_media %}
            <a href=\"{{ page.url }}\" class=\"img-wrapper\">
                {{ header_image_media.html }}
            </a>
            {% endif %}

            <a href=\"{{ page.url }}\">
                <h2>
                    {{ page.title }}
                    <span>{{ page.header.subTitle }}</span>
                </h2>
            </a>
        </div>

        <div class=\"p-summary e-content\">
            <a href=\"{{ page.url }}\">
                {{ page.content }}
            </a>

            <a href=\"{{ page.url }}\" class=\"read-more\">{{ 'BLOG.ITEM.CONTINUE_READING'|t }}</a>
        </div>

        {% if page.taxonomy.Medias == true %}
        <div class=\"blog-item-plus\">
            <div class=\"bog-item-media\">
                Media :
                {% for media in page.taxonomy.Medias %}
                {{ media }}
                {% endfor %}
            </div>
        </div>
        {% endif %}

        {% for theme in page.taxonomy.Medias %}

        {% endfor %}
    </div>

    <div class=\"blog-item-tags\">
        {% for theme in page.taxonomy.Themes %}
        <a href=\"/themes/{{ theme |replace({'é': 'e', 'â': 'a', 'ï': 'i'})|hyphenize }}\" class=\"p-theme\">{{ theme }}</a>
        {% endfor %}

        {% for intervention in page.taxonomy.Interventions %}
        <a href=\"/interventions/{{ intervention |replace({'é': 'e', 'â': 'a'})|hyphenize }}\" class=\"p-intervention\">{{ intervention }}</a>
        {% endfor %}
    </div>

    {% else %} <!-- Affichage complet -->

    <h1>
        {{ page.title }}
        <span>{{page.header.subTitle}}</span>
    </h1>

    {% if page.taxonomy.Themes == true or page.taxonomy.Interventions == true  %}
    <div class=\"taxonomies-display\">
        <a href=\"{{ base_url_absolute }}/themes/\">Thème(s) :</a>

        <ul class=\"tax-list\">
            {% for theme in page.taxonomy.Themes %}

            <li><a href=\"{{ base_url_absolute }}/themes/{{ theme |replace({'é': 'e','è': 'e', 'â': 'a', 'ï': 'i'})|hyphenize }}\" class=\"p-theme\">{{ theme }}</a></li>

            {% endfor %}
        </ul>

        <a href=\"{{ base_url_absolute }}/interventions/\">Intervention(s) :</a>
        <ul class=\"tax-list\">
            {% for intervention in page.taxonomy.Interventions %}
            <li><a href=\"{{ base_url_absolute }}/interventions/{{ intervention |replace({'é': 'e', 'â': 'a'})|hyphenize }}\" class=\"p-intervention\">{{ intervention }}</a></li>
            {% endfor %}
        </ul>
    </div>
    {% endif %}

    {% if header_image_media %}
    <div class=\"img-article\">
        {{ header_image_media.html }}
    </div>
    {% endif %}

    <div class=\"txt-article\">
        {{ page.content }}
    </div>

    {% endif %}

</article>
", "partials/blog_item.html.twig", "/Users/dev/Boulot/Mathieu Roy/ISCRA/iscra/user/themes/starter/templates/partials/blog_item.html.twig");
    }
}
