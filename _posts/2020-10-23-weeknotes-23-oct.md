---
layout: post
title: Weeknotes, 23 Oct
categories:
  - Planning
  - Design
  - Community
description: Design presentation, design system work, editing the spec, and a community talk for Marie.
author: Simon R Jones, Nicola Saunders
date: 2020-10-23
thumbnail: /assets/images/img-standards.png
thumbnail_alt: Sketch of an American Football Placekicker scoring a field goal.
  The football shows the W3C logo. 'Standards' is written in the end zone.
---

This weeknote covers the last couple of weeks.

## Production phase planning

Our main focus now is to pause production work while we detail all current requirements in the specification. 
Marie has been leading the specification work, with support from 
Simon. Not inconsiderable work due to the volume of things we've discussed during this project.
 
We expect to discuss the spec with W3C next week, with the aim to prioritise tasks for the rest of the production 
phase of this project.

## Design

Last week Ian ran a design presentation with the senior team at W3C, which went very well. This week Coralie has been 
helping collate a range of feedback from W3C and prioritised which points our team needs to focus on.

After responding to a range of valid concerns, we've got agreement on the global design direction. Our plan now is to move 
design into the browser, address the points raised by W3C there, and bring the design closer to the finished result 
directly in HTML/CSS.

We plan to publish the static designs we presented to the working in the open site next week.

## A design system for the W3C site

One of the project deliverables is a design system to accompany the re-designed website. This will document how 
[Apollo](https://apollo.studio24.net/) is used to build the re-designed W3C site, and provide guidance to the W3C on 
how best to carry on using it.

After some initial research on design system tools such as [Cupper from the Paciello Group](https://thepaciellogroup.github.io/cupper/) 
we have chosen to roll out a design system using [Metalsmith](https://metalsmith.io/).

Metalsmith is a static site generator based on [Node.JS](https://nodejs.org/en/) and is used by the Government Digital 
Service to deliver the [GOV.UK Design System](https://design-system.service.gov.uk/).

We have opted to use it with the [Nunjucks](https://mozilla.github.io/nunjucks/templating.html) JavaScript templating 
engine. This is similar to [Twig](https://twig.symfony.com/), which we have used on other projects.

This work is considered internal R&D work for Studio 24 (so not charged to the W3C project), but is crucial for helping 
the team work efficiently in the production phase.

### Community engagement

Marie was asked to give a talk at [extendsConf](https://extendsconf.com/), an online conference focussed on the Craft CMS 
community. She turned around the talk within a week, titled "Accessibility in CMSs... What's stopping us?" and covered 
lots of interesting points.
 
You can 
[read Marie's slides on Google Slides](https://docs.google.com/presentation/d/1-TRYcDcBDC8JoBV7PoxzUCipyH70XjTd_nY2M4fFyH8/view) or 
[listen to Marie's talk on YouTube](https://www.youtube.com/watch?v=coyt8ey6NRk). 

We plan to publish a blog post on this talk to the [Studio 24 site](https://www.studio24.net/blog/) next week.

## Final thoughts

What was good: design presentation, getting agreement on the global design so we can iterate in the browser.

What we found challenging: editing the specification and ensuring it has enough detail. 

What are we looking forward to: discussing the specification with W3C to help focus our work, half-term holiday next week to spend some time with the family!