---
title: 'Plan du site'
process:
    twig: true
    markdown: false
twig_first: true
content:
    items: '@root'
articles:
    items: '@page.descendants : /articles'
---

<ul>
    {% for p in page.collection %}

    <li><a href="{{ p.url }}">{{ p.title }}</a></li>

    {% if p.children.count > 0 %}
        <ul>
            {% for sp in p.children %}
                <li><a href="{{ sp.url }}">{{ sp.title }}</a></li>
            {% endfor %}
        </ul>
    {% endif %}

    {% endfor %}
</ul>
