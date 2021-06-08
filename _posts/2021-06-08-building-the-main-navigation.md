---
layout: post
title: Building the main navigation
categories:
  - Prototyping
  - Accessibility
description: A review of the main navigation front-end build, from first prototype to client sign off.
author: Nicola Saunders
date: 2021-06-08
---

In autumn 2020 I started the front-end build of the main navigation prototype for the W3C website redesign. Nine months and four versions later, an approved prototype is ready for CMS integration. Here I document the decisions and processes that have brought us this far.

## Version 1

The proposed sitemap at the time had three levels of items, and this formed the basis of the [first version](https://w3c-dev.studio24.dev/navigation-v1/index.html) of the navigation.

The designs for smaller screens showed an off-canvas navigation with a button to toggle the display of the parent items. Further toggles were available to provide access to child and grandchild items. On larger screens, the designs showed the parent items in a single horizontal line and the initial toggle button hidden. The parent items acted as toggles for a single dropdown containing a link to tha parent item plus a mixture of child and grandchild items.

My first decision was an easy one - to use an unordered list for the navigation markup. It's a tried and tested solution for site navigation, and lets users of assistive technology know how many items are present. Nested, unordered lists have formed the core of the navigation markup across all four prototypes.

A hamburger icon was chosen for the off-canvas navigation toggle button. As there is still some discussion around the affordance of the hamburger icon, a text label was included for clarity.

## Version 2

## Version 3

## Version 4
