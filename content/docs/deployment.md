---
title: Deployment
documentation: true
order: 5
---

# Deployment
Systatic can go anywhere that supports static HTML files. This means you can literally host your site anywhere, even shared hosting if you really want to.

## Hosting
We tend to recommend using either [Netlify](https://netlify.com) or [Github Pages](https://pages.github.com). They both serve HTML files. All you do is push changes to Git and they'll redeploy your site within minutes.

## Deployment command
Thinking of going with Netlify, Heroku, FTP deploys or something? We've got you!

We've introduced a new deployment command which will push host configuration files to your site and it'll deploy to whatever service you need to deploy to.

Here are the services we currently support:
* Netlify
* Heroku
* Github Pages
* Amazon S3
* SFTP

To get started, just run:

```
php systatic deploy
```
