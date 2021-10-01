---
layout: post
title: Weeknotes, 1 Oct
categories:
  - Build
  - CMS
  - Symfony
  - Headless
description: We're currently in the middle of a three-week sprint of work to build out the frontend website for w3.org
author: Simon Jones
date: 2021-10-01
thumbnail: /assets/images/img-standards.png
thumbnail_alt: Sketch of an American Football Placekicker scoring a field goal. The football shows the W3C logo. 'Standards' is written in the end zone.

---

## Frontend integration sprint

We're currently in the middle of a three-week sprint of work to build out the frontend website for w3.org

This started last week and is planned to finish next week when we hope to have the majority of the front-end pages built, 
with data pulled from CraftCMS and the W3C API, and integrated with templates from the [design system](https://design-system.w3.org/). 

We have three team members at Studio 24 working on this, Marie, Nicki and Simon, working across CraftCMS, the Symfony front-end app, 
and templating. We're also helped by W3C developer [Jean-Guilhem Rouel](https://www.w3.org/People/Jean-Gui/) who is 
working alongside our team helping with Symfony and data integration work. 

Project manager Julia is co-ordinating the work, with assistance from Marie as tech lead. With work across three different 
GitHub repos it's useful to have both a PM and a tech lead to co-ordinate and prioritise things!

## Templating

The team have finished the default template, are working on the business ecosystem pages, landing pages, news and blog pages.
Various issues have been solved on the way, including breadcrumb generation, social sharing metadata, and adding 
HTML attributes to SVG icons to make them more accessible.

## Data

Most of our data integration is pulling content from CraftCMS. This uses [GraphQL](https://graphql.org/), a flexible but sometimes complex API 
format (especially so with custom content fields in a CMS). Jean-Guilhem has been writing and optimising our GraphQL 
queries, as well as integrating with the [W3C API](https://www.w3.org/api/) 
(a REST API) to retrieve member data.

## Headless CMS preview

Simon has been working on linking up the preview functionality in CraftCMS with the frontend app. Blog posts like this 
one from nystudio107 on [Headless Preview in Craft CMS](https://nystudio107.com/blog/headless-preview-in-craft-cms) have
been really helpful, the [Craft](https://craftcms.com/) team have also given us lots of tips.

As of writing, the CMS preview is almost fully working, which means when users select view page or preview links in the 
CMS they are taken to the separate frontend app to view the site in the correct templates.

Instead of building a dedicated preview controller on the frontend
we've taken the approach to send preview requests to the live URL. This is more helpful since pages are often built from 
a combination of different data and unique page templates. CraftCMS sends a unique one-time token which 
can be used when retrieving draft page content. Simon is adding a [custom panel to the Symfony web debug toolbar](https://symfony.com/doc/current/profiler/data_collector.html)
to help debugging API queries that are used to build the page.

## Localization 

We've also had to rethink some approaches as we build pages. One example is localization, which in practise is often complex. 

The W3C site currently has translated content in 9 languages. Most of these are translations of [Press Releases](https://www.w3.org/Press/) and there 
isn't enough content to have a completely separate site in most languages (so these are just standalone translated pages). 
For this project, W3C has a separate site for the American English, Chinese, and Japanese language sites. 

For languages with standalone translated pages we had originally considered displaying those pages
within the English page layout (with the English language primary navigation) and then embed the translated content in the main article location. 
In practise, this is very confusing for users, with header and footer content in English and the main article in another language. 
We're using the Symfony translation system, which also means any static text like "Read this page in" would also 
display in English on these pages (since the locale is set to English).

This isn't good UX so at present we're looking at using a basic template for these pages and ensure all page content is 
translated for consistency (and to allow the whole page to be set to the correct locale). This does mean we have to hardcode 
any primary navigation - but it's better for users so feels like the right decision.


## Final thoughts

What was good: working together collaboratively on this sprint!

What we found challenging: working on multiple git repos can be confusing and requires care over our workflow. 

What are we looking forward to: getting as many templates built as possible so W3C can start writing content.