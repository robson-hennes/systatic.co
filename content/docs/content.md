---
title: Content
view: docs
---

By default, all content in your Systatic site is stored in the `content` directory. When you build your site, we will combine your content and views together to make static HTML files.

Content can either be written in Markdown files or in HTML files like the good old days.

# Markdown
It's likely that most of your content will be in Markdown files. If you're new to Markdown, you check out [this guide](https://www.markdownguide.org/getting-started/).

You can use a YAML front matter in your Markdown files to add information. For example, a markdown file with a front matter might look a bit like this:

```
---
title: Last Night's Dream
author: Joe Cook
---
I had such a cool dream last night. I couldn't wait to tell you about it.
```

If you would like to use a custom view when you page is built, add the `template` key to your front matter.
```
---
title: Moon
template: space
---
```

# HTML
If you have a certain page which needs to be written in pure HTML, you can create `.html` files in your chosen content directory and they will be built.

When we build your site, we use the HTML as the page content which means there is no need for head tags, body tags. Just plain old HTML.
```
<h1>Carnival</h1>
<p>Roll up, roll up, the carnival is coming to town!</p>
```