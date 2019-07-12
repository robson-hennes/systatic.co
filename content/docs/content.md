---
title: Content
documentation: true
order: 8
---

# Content
All content (that is not remote) is in Markdown files. We'll detect any `.md` or `.markdown` files in two levels of your collection's location. 

In Markdown files, we allow you to add a front matter to the top of it. Front matter is basically YAML in a Markdown file separated with three dashes above and below the YAML.

For example, this is what a Markdown file might look like when it has a front matter.

```
---
title: My Holiday to London
author: Jim
---
I recently went to London in the UK and I loved it. Let me tell you all about it.
```

Using the front matter you can specify things like views, slugs and other things.

### View
```
---
view: post
---
```

The `view` front matter attribute will change the view for the page to the `post.blade.php` view, if of course it exists.

### Slug
```
---
slug: London-holiday
---
```

The `slug` front matter attribute will set the page's slug to whatever you set it to.

### Filetype
```
---
filetype: xml
---
```

The `filetype` front matter attribute will change the filetype of the outputted file.

This might be useful if you want to output RSS feeds or sitemaps.