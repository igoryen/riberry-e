---
title: Strona startowa
class: home

sitemap:
    changefreq: monthly
    priority: 1.03

content:
    items: @self.children.children
    order:
        by: date
        dir: desc
    limit: 5
    pagination: true

feed:
    description: Tytuł artykułu
    limit: 10
---

