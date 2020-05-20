# W3C website redesign project docs site

Project documention for the 2020 W3C website redesign project hosted on https://w3c.studio24.net/

## Getting started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See [deployment](#deployment) for notes on how to deploy the project on staging and prod environments.

## Site URLs

* Live - https://w3c.studio24.net/
* Staging - http://w3c.studio24.dev/

The production site is cached via Cloudflare.

## Requirements

* [Deployer](https://deployer.org)

## Installation

TODO

## Deployment 

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
dep deploy staging --branch=develop
``` 
