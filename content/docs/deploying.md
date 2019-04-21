---
title: Deploying
view: docs
---

# Netlify (recommended)
To deploy to Netlify, create a new site with your Systatic site repository.

During setup you will be asked for the build command and the publish directory. Your build command will be `php systatic build` and your publish directory will be the `dist` directory. 

After setup your site will build and your Systatic site should be working!

# Github Pages
Due to the way Github Pages works, you can't run build commands when deploying. You can just deploy static HTML sites.

However, there is another method of deploying to Github Pages.

First, you'll need to create an npm project inside your Systatic site. You'll also need to install the `push-dir` package globally.

```
npm install -g push-dir
```

Then you'll need to add a script to your `package.json` file. 

```
"scripts": {
    "deploy": "php systatic build && push-dir --dir=dist --branch=gh-pages"
},
```

Now to deploy, run the command `npm run deploy` and your site will be built and deployed to the `gh-pages` branch of your repository.

As long as you have Github Pages enabled on your repository, your Systatic site should be live on Github Pages.

# Heroku
To deploy to Heroku, the first thing you'll need to do is create your a file called `Procfile`. Don't use any file extensions on the file and make sure its in the root directory of your repository. In that file, copy in this:

```
web: bash heroku.sh
```

Next, create a file called `heroku.sh` in your reposistory root. This is a bash script which Heroku will run at deployment time to build your site and run the web server. In the file, copy this.

```
php systatic build && vendor/bin/heroku-php-apache2 dist/
```

That's you, push to Git and Heroku should deploy your site!