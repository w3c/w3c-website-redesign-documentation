---
layout: post
title: Headless CMS approach
categories:
  - Development
  - CMS
  - Front-end
description: "Find out about our Headless CMS approach to building the front-end"
author: Simon R Jones
date: 2020-11-27
thumbnail: /assets/images/img-content-management.png
thumbnail_alt: An image of a person with a rake standing on part of a wireframe,
  using the rake to organise the content on the page.
---

We have decided to separate the Content Management System (CMS) and front-end web pages into two layers: using [Craft CMS](https://craftcms.com/)
as a Headless CMS which is only used to manage content and a [Symfony](https://symfony.com/) application to deliver 
front-end pages. We believe this will be more efficient for the long-term development of w3.org. 

Benefits include:

* Symfony is already used to deliver web pages for W3C so is a familiar technology (it's also a well established and powerful PHP framework)
* Craft CMS has good support for [GraphQL](https://graphql.org/) API to help expose content managed in the CMS
* Many pages are created by a variety of different data sources, both from the CMS and other sources
* There is a desire to have an efficient single platform on the front-end to help with future maintenance
* The Headless CMS approach gives a nice separation of concerns, simplifying the CMS side and helping us focus on delivering only what matters on the front-end
* Security and Performance - we only develop what we need on the front-end so can optimize this for security and performance better than a general-purpose CMS
* Flexibility - this also means W3C can use different CMS systems in the future, without having to rebuild the entire frontend 

A Symfony front-end application will deliver the working web pages, the "frontend". This application reads content in from 
Craft, which acts as a Headless CMS, and other data sources as required. Content is passed to the template layer, and web 
pages are rendered via the [Twig](https://twig.symfony.com/) templating system.

You can find out more about [what a headless CMS is](https://www.studio24.net/blog/what-is-a-headless-cms/).
