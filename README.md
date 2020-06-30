# W3C website redesign project docs site

Project documention for the 2020 W3C website redesign project hosted on https://w3c.studio24.net/

## Getting started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See [deployment](#deployment) for notes on how to deploy the project to staging and prod environments.

## Site URLs

* Live - https://w3c.studio24.net/
* Develop branch - https://develop--ecstatic-mccarthy-0be5bd.netlify.app/
* Local development - http://localhost:4000

The production site is cached via Cloudflare.

## Requirements

* [Deployer](https://deployer.org)
* [Jekyll](https://jekyllrb.com/docs/)

## Installation

Make sure you have Ruby, Bundler and Jekyll installed, see [instructions for Mac](https://jekyllrb.com/docs/installation/macos/).

In project folder, run:

```
bundle install
```

## Build commands

To build and serve the site locally via http://localhost:4000

```
bundle exec jekyll serve
```

## Deployment 

We use [Netlify](https://www.netlify.com) to build and host the working in the open site.

Content is published from the production `production` branch. See [publishing content](/writing-guide/#publishing-content) for how to publish content to production.

Any changes committed to the `develop` branch are auto-deployed to https://develop--ecstatic-mccarthy-0be5bd.netlify.app/

Netlify automatically creates a preview URL for any pull requests that are created to merge into the `production` branch. 
[Login to Netlify](https://app.netlify.com/sites/ecstatic-mccarthy-0be5bd/overview) to view the preview URL.

## Templating

The website uses the [Just the Docs](https://pmarsceill.github.io/just-the-docs/) theme and [Kramdown](https://kramdown.gettalong.org/quickref.html) markdown formatting.

Templates are loaded first from the local `_layouts` folder, next from the parent templates located in the theme. You can find the theme location bia:

```
bundle info --path just-the-docs
```

See https://jekyllrb.com/docs/themes/

CSS overrides for the theme are currently written in `_sass/overrides.scss`