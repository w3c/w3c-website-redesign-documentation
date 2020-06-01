# W3C website redesign project docs site

Project documention for the 2020 W3C website redesign project hosted on https://w3c.studio24.net/

## Getting started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See [deployment](#deployment) for notes on how to deploy the project on staging and prod environments.

## Site URLs

* Live - https://w3c.studio24.net/
* Staging - http://w3c.studio24.dev/
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
bundle exec jekyll serve
```

View site at http://localhost:4000

## Build commands

To build and serve the site via http://localhost:4000

```
bundle exec jekyll serve
```

## Deployment 

### Deploy to production

Only deploy master branch to prod.

```
dep deploy production
```

### Deploy to staging

Please note this deploy process uses Jekyll settings in `_config_staging.yml`, which override those in `_config.yml`

```
dep deploy staging
```

### Deploy a custom branch to staging

```
dep deploy staging --branch=develop
``` 

## Templating

The website uses the [Just the Docs](https://pmarsceill.github.io/just-the-docs/) theme. 

Templates are loaded first from the local `_layouts` folder, next from the parent templates located in the theme. You can find the theme location bia:

```
bundle info --path just-the-docs
```

See https://jekyllrb.com/docs/themes/