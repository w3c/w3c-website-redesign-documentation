---
layout: post
title: Weeknotes, 11 June
categories:
  - Design
  - Build
description: Good progress across HTML testing, navigation, TR layout review and Symfony app development   
author: Simon Jones
date: 2021-06-11
thumbnail: /assets/images/img-standards.png
thumbnail_alt: Sketch of an American Football Placekicker scoring a field goal. The football shows the W3C logo. 'Standards' is written in the end zone.

---

It's been busy recently on the W3C project and this post covers the last couple of weeks.

## Navigation signed off

After a lot of iteration the W3C approved the [navigation](https://w3c-dev.studio24.dev/navigation-v4/index.html). This 
underwent a large number of variations until we've settled on what we hope is a simple, usable and accessible navigation.

You can read about how the navigation evolved and some of the accessibility and usability considerations in Nicola's 
post on [building the navigation](/posts/building-the-main-navigation/).

## Static HTML template QA

Our process is to build web page layouts and components into static HTML before integration into the website. This keeps 
the front-end clean and simple, and enables faster testing. Currently the [static HTML 
templates](https://w3c-dev.studio24.dev/) have gone through two rounds of browser and device testing (courtesy of 
testing company [Zoonou](https://zoonou.com/)) and are and accessibility testing (courtesy of testing copmpany [DAC](digitalaccessibilitycentre.org/)).

Nicola's current work is reviewing the [round two testing results](https://w3c.studio24.net/updates/compatibility-round2-test-results/) 
and making fixes across a range of templates. We are currently awaiting the round two accessibility testing report, which we hope to 
get next week.

## TR page layout

Last week we had a good discussion with W3C on the [TR page](https://www.w3.org/TR/). We initially reviewed this but once 
we started build a few issues arose so we decided to revisit one more time to ensure we iron out some usability and 
accessibility issues. Carlos and Simon have been reviewing this.

## Craft CMS setup

Marie and Sean have worked to set up and configure CraftCMS, we've had to move people around a little to accommodate other 
project work but this week Marie is finishing off CMS configuration so we have access to all content 
types and components in the CMS. This will also enable W3C to start testing the CMS by adding content!

## Symfony application

The front-end website is a Symfony web application, which ties together content from CraftCMS and other sources. This is 
[headless CMS](https://w3c.studio24.net/updates/headless-cms/) setup which offers W3C some flexibility for the future.

Jean-Gui (W3C) has been helping set up the structure and common functionality of the Symfony app, including 
translations and template integration via a bundle. 

Matt and Simon have been working on testing the data connection layer and getting this working in Symfony to help enable 
others to start contributing to integrating complete web pages in the Symfony app (tying together the build templates 
with the content from CraftCMS and other sources).

## And the rest...

What was good: navigation approval

What we found challenging: 

What are we looking forward to: finishing the static HTML template QA phase
