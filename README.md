# w3c-website-redesign-documentation

Documentation site hosted on the Studio24 web server in AWS Singlecloud 1

## Getting started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See [deployment](#markdown-header-deployment) for notes on how to deploy the project on staging and live environments.

## Site URLs

* Live - https://w3c.studio24.net/
* Staging - http://w3c.studio24.dev/

The live site is cached via Cloudflare

## Installation
This will clone the repo into a new folder with the same name as the repo.

````bash
cd ~/Sites
git clone git@github.com:studio24/w3c-website-redesign-documentation.git
```

## Deployment

We use [Deployer](https://deployer.org) for deployment.  
__Note__ Currently there are no shared files/directories or apache writable configuration

Deploy to production (deploys master branch):

```
dep deploy production
```

Deploy to staging:

```
dep deploy staging
```

Deploy a custom branch to staging:

```
dep deploy staging --branch=branch-name-to-deploy
``` 


## Authors
- **Author Name** - *Alan Isaacson*
