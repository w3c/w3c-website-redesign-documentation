---
layout: post
title: Prototyping the main navigation - version 3
categories:
  - Prototyping
  - Accessibility
description: An update on version 3 of our navigation prototype
author: Julia Sang
date: 2021-01-18T17:43:12.894Z
---
In November, we shared the [second version](https://w3c.studio24.net/updates/prototyping-the-main-navigation/) of the navigation prototype we have been working on. \
\
We received a lot of [feedback](https://docs.google.com/document/d/1pBbRi91p1Zr81Ct8ZsRuA8A0rkR-BfGayt4gRPeCZJM/edit#heading=h.hz0jwnbpsvew) from the W3C team, some which was directly relevant to the prototype, and some which was focussed on the site map. As this prototype is using example content, we agreed with the W3C team to only address feedback specific to its function and styling. Therefore, all other header content and navigation has been temporarily hidden (with the exception of the button to trigger the mobile off-canvas navigation). Furthermore, the content shown in the sub-navigation is not fixed and should be considered as indicative.\
\
The Version 3 (V3) prototype of the main site navigation is now available for review at <https://w3c-dev.studio24.dev/navigation-v3.html>

\
**V3 sees the following changes:**

* Reverting to CSS multi-column layout for the desktop sub-navigation (as per V1)
* Grandchild lists expanded by default on desktop (as per V1)
* Grandchild lists also expanded by default on mobile
* Changes in font size and margins to indicate child and grandchild items
* Button to return to parent list on mobile moved to the top (as per V1)
* Desktop sub-navigation closes if a user clicks outside of the sub-navigation area, in addition to using the Escape/ESC key
* Highlight added to relevant parent item when sub-navigation is opened on desktop
* Light background colour added to desktop sub-navigation
* Styling of the main navigation in the absence of JavaScript
* Addition of search to the main navigation, which will link to a separate search page

\
\
**What has not been addressed:**

* We have retained the off-canvas navigation on mobile. While feedback from some W3C team members suggested exposing it by default, this contradicted other feedback asking for the depth of the header region to be reduced as much as possible.
* We were unable to reproduce reported differences between Chrome and Firefox. We believe this issue to be specific to the user's settings in Chrome.

W3C is reviewing this version and we would also be pleased to hear from other people if you would like to [share your feedback](https://w3c.studio24.net/feedback/).
