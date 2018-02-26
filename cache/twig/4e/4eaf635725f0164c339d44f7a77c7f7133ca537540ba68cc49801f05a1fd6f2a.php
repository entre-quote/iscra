<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_360fcfd0b770d936a316c805af9276bec042a1793042d79d1adbf11db383bace extends Twig_Template
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
            <div class=\"bog-item-media\">
                Media :
                ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Medias", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                    // line 52
                    echo "                ";
                    echo $context["media"];
                    echo "
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
        ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Medias", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 59
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "    </div>

    <div class=\"blog-item-tags\">
        ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Themes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 65
                echo "        <a href=\"";
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
            // line 67
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Interventions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["intervention"]) {
                // line 68
                echo "        <a href=\"";
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
            // line 70
            echo "    </div>

    ";
        } elseif (        // line 72
($context["truncate"] ?? null)) {
            echo " <!-- Affichage en liste tronqué avec le séparateur -->

    <div class=\"blog-item-container\">
        <div class=\"blog-item-header\">

            ";
            // line 77
            if (($context["header_image_media"] ?? null)) {
                // line 78
                echo "            <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\" class=\"img-wrapper\">
                ";
                // line 79
                echo $this->getAttribute(($context["header_image_media"] ?? null), "html", array());
                echo "
            </a>
            ";
            }
            // line 82
            echo "
            <a href=\"";
            // line 83
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">
                <h2>
                    ";
            // line 85
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "
                    <span>";
            // line 86
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "subTitle", array());
            echo "</span>
                </h2>
            </a>
        </div>

        <div class=\"p-summary e-content\">
            <a href=\"";
            // line 92
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">
                ";
            // line 93
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
            </a>

            <a href=\"";
            // line 96
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\" class=\"read-more\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.CONTINUE_READING");
            echo "</a>
        </div>

        ";
            // line 99
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Medias", array()) == true)) {
                // line 100
                echo "        <div class=\"blog-item-plus\">
            <div class=\"bog-item-media\">
                Media :
                ";
                // line 103
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Medias", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                    // line 104
                    echo "                ";
                    echo $context["media"];
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "            </div>
        </div>
        ";
            }
            // line 109
            echo "
        ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Medias", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 111
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "    </div>

    <div class=\"blog-item-tags\">
        ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Themes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 117
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
            // line 119
            echo "
        ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Interventions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["intervention"]) {
                // line 121
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
            // line 123
            echo "    </div>

    ";
        } else {
            // line 125
            echo " <!-- Affichage complet -->

    <h1>
        ";
            // line 128
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "
        <span>";
            // line 129
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "subTitle", array());
            echo "</span>
    </h1>

    <div class=\"taxonomies-display\">
        <a href=\"";
            // line 133
            echo ($context["base_url_absolute"] ?? null);
            echo "/themes/\">Thème(s) :</a>

        <ul class=\"tax-list\">
            ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Themes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 137
                echo "
            <li><a href=\"";
                // line 138
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
            // line 141
            echo "        </ul>

        <a href=\"";
            // line 143
            echo ($context["base_url_absolute"] ?? null);
            echo "/interventions/\">Intervention(s) :</a>
        <ul class=\"tax-list\">
            ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Interventions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["intervention"]) {
                // line 146
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
            // line 148
            echo "        </ul>
    </div>

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
        return array (  450 => 162,  443 => 158,  439 => 156,  433 => 153,  430 => 152,  428 => 151,  423 => 148,  410 => 146,  406 => 145,  401 => 143,  397 => 141,  384 => 138,  381 => 137,  377 => 136,  371 => 133,  364 => 129,  360 => 128,  355 => 125,  350 => 123,  339 => 121,  335 => 120,  332 => 119,  321 => 117,  317 => 116,  312 => 113,  305 => 111,  301 => 110,  298 => 109,  293 => 106,  284 => 104,  280 => 103,  275 => 100,  273 => 99,  265 => 96,  259 => 93,  255 => 92,  246 => 86,  242 => 85,  237 => 83,  234 => 82,  228 => 79,  223 => 78,  221 => 77,  213 => 72,  209 => 70,  196 => 68,  191 => 67,  178 => 65,  174 => 64,  169 => 61,  162 => 59,  158 => 58,  155 => 57,  150 => 54,  141 => 52,  137 => 51,  132 => 48,  130 => 47,  124 => 44,  120 => 43,  113 => 39,  109 => 38,  100 => 32,  96 => 31,  91 => 29,  88 => 28,  82 => 25,  77 => 24,  75 => 23,  69 => 20,  66 => 19,  63 => 18,  60 => 17,  58 => 16,  53 => 14,  50 => 13,  48 => 12,  45 => 11,  42 => 10,  39 => 9,  36 => 8,  33 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
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
        <a href=\"{{base_url}}/themes/{{ theme |replace({'é': 'e', 'â': 'a', 'ï': 'i'})|hyphenize }}\" class=\"p-theme\">{{ theme }}</a>
        {% endfor %}
        {% for intervention in page.taxonomy.Interventions %}
        <a href=\"{{base_url}}/interventions/{{ intervention |replace({'é': 'e', 'â': 'a'})|hyphenize }}\" class=\"p-intervention\">{{ intervention }}</a>
        {% endfor %}
    </div>

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
