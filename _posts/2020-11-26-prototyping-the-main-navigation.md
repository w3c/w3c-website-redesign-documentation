---
layout: post
title: Prototyping the main navigation
categories:
  - Prototyping
  - Accessibility
description: "Find out how we have been prototyping the main navigation and give
  us your feedback on how it works. "
author: Julia Sang
date: 2020-11-26T10:42:01.013Z
---
Over the past few weeks we have been prototyping the main navigation. 

On our first version, which can be found at <https://w3c-dev.studio24.dev/navigation.html>, we got some excellent feedback 
from the [W3C team](https://w3c.studio24.net/about-w3c/) and [Léonie Watson](https://twitter.com/LeonieWatson) on visual, 
functional and technical areas.

We have prepared a second version of prototype of the main navigation, which can be found at <https://w3c-dev.studio24.dev/navigation-v2.html>. 

W3C is reviewing this second version and we would also be pleased to hear from other people if you would like to  [share your feedback](https://w3c.studio24.net/feedback/). Some notes:

* All links in the navigation link to one 'basic page' so that links can be tested
* Items still to do:
  * The menu will close when someone clicks outside of it. 
  * The visual design is to be looked at again, we have had feedback that it could be shaded to differentiate it from the page behind
  * The menu content isn't reflective of all the pages in the site map, only a few have been added as an indication of how it could work.
* We have temporarily hidden the skip links, header content (with the exception of the button to toggle the mobile navigation), language navigation and footer content. This is because we want to focus on the main site navigation.

The version 2 prototype address feedback from the version 1 prototype and has the following changes:

* A single block of HTML markup used for both mobile and desktop versions of the navigation
* Correction of the list nesting
* Replacement of the aria-labelledby attribute with a visually-hidden heading inside the nav element (we are using this approach because the aria-label attribute, recommended by Léonie Watson, is reportedly not always translated)
* Use of buttons to toggle child menus and grandchild menus, rather than links disabled via JavaScript
* Ensuring that the default state of menus (with regards to aria-hidden/aria-expanded) is the same on both mobile and desktop
* Support for using the Escape/Esc key to close any open level of navigation
* Revised styles for distinguishing between child and grandchild links on desktop