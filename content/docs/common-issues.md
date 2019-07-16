---
title: 'Common Issues'
documentation: true
order: 12
---

# Common Issues
## My WordPress import fails
Sometimes, Importing from WordPress fails. There are many reasons this could happen.
* You've locked down the WordPress REST API to require authentication.
* Your site has HTTP authentication
* You're using a really old version of WordPress and there is no REST API.

## Netlify has issues building my site
This is fairly common. Systatic requires PHP 7.2 but Netlify's default PHP version is 5.6. All you need to do is go to your Netlify environment settings and add a new row with the key of `PHP_VERSION` and the value of `7.2`. Then just rebuild your site and it should work!

## I have another issue
If you have another issue that you can't find the answer for here, join [our Discord](https://discord.gg/sxkrycQ) and ask. We'll try and help as quick as we can.