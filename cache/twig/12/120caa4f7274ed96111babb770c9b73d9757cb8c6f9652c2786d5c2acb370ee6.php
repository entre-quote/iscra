<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_4da0f10e81bc1f183d08056234cad428cab493fef069cc1436c0a6ee58c5ed73 extends Twig_Template
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

        ";
            // line 63
            if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Themes", array()) == true) || ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Interventions", array()) == true))) {
                // line 64
                echo "            <div class=\"blog-item-tags\">
                ";
                // line 65
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Themes", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                    // line 66
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
                // line 68
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Interventions", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["intervention"]) {
                    // line 69
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
                // line 71
                echo "            </div>
        ";
            }
            // line 73
            echo "    ";
        } elseif (($context["truncate"] ?? null)) {
            echo " <!-- Affichage en liste tronqué avec le séparateur -->

    <div class=\"blog-item-container\">
        <div class=\"blog-item-header\">

            ";
            // line 78
            if (($context["header_image_media"] ?? null)) {
                // line 79
                echo "            <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\" class=\"img-wrapper\">
                ";
                // line 80
                echo $this->getAttribute(($context["header_image_media"] ?? null), "html", array());
                echo "
            </a>
            ";
            }
            // line 83
            echo "
            <a href=\"";
            // line 84
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">
                <h2>
                    ";
            // line 86
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "
                    <span>";
            // line 87
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "subTitle", array());
            echo "</span>
                </h2>
            </a>
        </div>

        <div class=\"p-summary e-content\">
            <a href=\"";
            // line 93
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">
                ";
            // line 94
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
            </a>

            <a href=\"";
            // line 97
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\" class=\"read-more\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.CONTINUE_READING");
            echo "</a>
        </div>

        ";
            // line 100
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Medias", array()) == true)) {
                // line 101
                echo "        <div class=\"blog-item-plus\">
            <div class=\"bog-item-media\">
                Media :
                ";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Medias", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                    // line 105
                    echo "                ";
                    echo $context["media"];
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "            </div>
        </div>
        ";
            }
            // line 110
            echo "
        ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Medias", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 112
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "    </div>

    <div class=\"blog-item-tags\">
        ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Themes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 118
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
            // line 120
            echo "
        ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Interventions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["intervention"]) {
                // line 122
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
            // line 124
            echo "    </div>

    ";
        } else {
            // line 126
            echo " <!-- Affichage complet -->

    <h1>
        ";
            // line 129
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "
        <span>";
            // line 130
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "subTitle", array());
            echo "</span>
    </h1>

    ";
            // line 133
            if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Themes", array()) == true) || ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Interventions", array()) == true))) {
                // line 134
                echo "    <div class=\"taxonomies-display\">
        <a href=\"";
                // line 135
                echo ($context["base_url_absolute"] ?? null);
                echo "/themes/\">Thème(s) :</a>

        <ul class=\"tax-list\">
            ";
                // line 138
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Themes", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                    // line 139
                    echo "
            <li><a href=\"";
                    // line 140
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
                // line 143
                echo "        </ul>

        <a href=\"";
                // line 145
                echo ($context["base_url_absolute"] ?? null);
                echo "/interventions/\">Intervention(s) :</a>
        <ul class=\"tax-list\">
            ";
                // line 147
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "Interventions", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["intervention"]) {
                    // line 148
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
                // line 150
                echo "        </ul>
    </div>
    ";
            }
            // line 153
            echo "
    ";
            // line 154
            if (($context["header_image_media"] ?? null)) {
                // line 155
                echo "    <div class=\"img-article\">
        ";
                // line 156
                echo $this->getAttribute(($context["header_image_media"] ?? null), "html", array());
                echo "
    </div>
    ";
            }
            // line 159
            echo "
    <div class=\"txt-article\">
        ";
            // line 161
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
    </div>

    ";
        }
        // line 165
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
        return array (  462 => 165,  455 => 161,  451 => 159,  445 => 156,  442 => 155,  440 => 154,  437 => 153,  432 => 150,  419 => 148,  415 => 147,  410 => 145,  406 => 143,  393 => 140,  390 => 139,  386 => 138,  380 => 135,  377 => 134,  375 => 133,  369 => 130,  365 => 129,  360 => 126,  355 => 124,  344 => 122,  340 => 121,  337 => 120,  326 => 118,  322 => 117,  317 => 114,  310 => 112,  306 => 111,  303 => 110,  298 => 107,  289 => 105,  285 => 104,  280 => 101,  278 => 100,  270 => 97,  264 => 94,  260 => 93,  251 => 87,  247 => 86,  242 => 84,  239 => 83,  233 => 80,  228 => 79,  226 => 78,  217 => 73,  213 => 71,  200 => 69,  195 => 68,  182 => 66,  178 => 65,  175 => 64,  173 => 63,  169 => 61,  162 => 59,  158 => 58,  155 => 57,  150 => 54,  141 => 52,  137 => 51,  132 => 48,  130 => 47,  124 => 44,  120 => 43,  113 => 39,  109 => 38,  100 => 32,  96 => 31,  91 => 29,  88 => 28,  82 => 25,  77 => 24,  75 => 23,  69 => 20,  66 => 19,  63 => 18,  60 => 17,  58 => 16,  53 => 14,  50 => 13,  48 => 12,  45 => 11,  42 => 10,  39 => 9,  36 => 8,  33 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
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
", "partials/blog_item.html.twig", "/home/entrequoqs/www/iscra/user/themes/starter/templates/partials/blog_item.html.twig");
    }
}
