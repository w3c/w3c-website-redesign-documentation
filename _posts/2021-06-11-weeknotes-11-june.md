---
layout: post
title: Weeknotes, 11 June
categories:
  - Design system
  - Build
  - CMS
  - Symfony
description: Good progress across HTML testing, navigation, TR layout review and Symfony app development   
author: Simon Jones
date: 2021-06-11
thumbnail: /assets/images/img-standards.png
thumbnail_alt: Sketch of an American Football Placekicker scoring a field goal. The football shows the W3C logo. 'Standards' is written in the end zone.

---

It's been busy recently on the W3C project and this post covers the last couple of weeks.

## Navigation signed off

After a lot of iteration W3C approved version 4 of the [navigation](https://w3c-dev.studio24.dev/navigation-v4/index.html). 
This underwent a large number of variations until we've settled on what we hope is a simple, usable and accessible navigation.

You can read about how the navigation evolved and some of the accessibility and usability considerations in Nicola's 
detailed post on [building the navigation](/posts/building-the-main-navigation/).

## Static HTML template QA and feedback guide

Our process is to build web page layouts and components into static HTML before integration into the website. This keeps 
the front-end clean and simple, and enables faster testing. The [static HTML 
templates](https://w3c-dev.studio24.dev/) have now all gone through browser and device testing (courtesy of 
testing company [Zoonou](https://zoonou.com/)), and you can [read their latest test reports](/updates/compatibility-round2-test-results/). The accessibility testing (courtesy of testing company [DAC](digitalaccessibilitycentre.org/)) is also nearly complete, we will publish this report when we receive it.

Nicola's current work is reviewing the test results and making fixes across the templates. 

We have also been working on [feedback guidelines](/updates/feedback-guide/) with the W3C team, to help the next stage of the project run smoothly and effectively. 

## Design system

Part of the project deliverables is to create a design system which includes the templates and components in HTML/CSS and 
documentation on how to use them. This will help the W3C team create and maintain the website in the future.

Originally we planned to use JavaScript build tools to create this (we created a prototype using [Metalsmith](https://metalsmith.io/)), 
however, since W3C recommended the use of a [Symfony bundle](https://symfony.com/doc/current/bundles.html) to store Twig templates (to help re-use)
we realised it would make more sense to store the design system docs alongside this.

Simon wrote some test code (a year ago now!) to use PHP to generate design system docs from Twig templates, so he is looking 
at whether this can be used to generate design system docs alongside the template bundle. If successful, this would mean 
we could manage both the templates and documentation in the same place (which would be far more efficient and remove 
some duplication). 

## TR page layout

Last week we had a good discussion with W3C on the [TR page](https://www.w3.org/TR/). We initially reviewed this but once 
we started build a few issues arose so we decided to revisit one more time to ensure we iron out some usability and 
accessibility issues. Carlos and Simon have been reviewing this, we aim to feedback to W3C on our findings next week.

## Craft CMS setup

Marie and Sean have worked to set up and configure CraftCMS, we've had to move people around a little to accommodate other 
project work but this week Marie is finishing off CMS configuration so we have access to all content 
types and components in the CMS. This will also enable W3C to start testing the CMS by adding content.

## Symfony application

The front-end website is a Symfony web application, which ties together content from CraftCMS and other sources. This is 
[headless CMS](https://w3c.studio24.net/updates/headless-cms/) setup which offers W3C some flexibility for the future.

Jean-Gui (W3C) has been helping set up the structure and common functionality of the Symfony app, including 
translations and template integration via a bundle. 

Marie has been helping setup the asset build process for templates this week. 

Matt and Simon have been working on testing the data connection layer and getting this working in Symfony to help enable 
others to start contributing to integrating complete web pages in the Symfony app (tying together the build templates 
with the content from CraftCMS and other sources).

## And the rest...

What was good: navigation approval. This is an essential bit of the site and has been through four rounds of iteration. So it's fantastic to come to a consensus of approval on this version!

What we found challenging: the timeline to finish the project can't be confirmed until the CMS work and Symfony application work is complete. As soon as this is done, we will need to take a look at the remaining project time with W3C and sense-check if the current dates are still achievable, or if they need to move. 

What are we looking forward to: finishing the static HTML template QA phase, getting the default page integrated into the Symfony app! 
