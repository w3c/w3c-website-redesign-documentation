---
layout: post
title: Browser and device testing round 1 results
categories:
  - Prototype
  - HTML/CSS
description: The first three static templates have been tested, read about the outcome
author: Julia Sang
date: 2021-03-10
thumbnail: /assets/images/img-standards.png
thumbnail_alt: Sketch of an American Football Placekicker scoring a field goal. The football shows the W3C logo. 'Standards' is written in the end zone.

---
This week [Zoonou](https://zoonou.com/) completed browser and device testing for our [first three static templates](/updates/first3-templates/).  Zoonou tested against the browser list defined in the [Front-end Standards](/docs/front-end-standards) project documentation and on a range of devices.

Zoonou found only four issues with the templates which I have summarised below (the full issues are recorded in the Studio 24 private instance of JIRA, as for this phase of the project we are using JIRA for all task and issue management). You can [read the full issue report on Google Drive](https://docs.google.com/document/d/1ejUkBnW6cObAj8W2mpRWxpddoxWxkMlb/)

The issues will be worked on in April when we start back on HTML/CSS work. 

- - -

## W3C-406 - Business – Carousel Navigation Dots Do Not Follow Carousel Screens

It has been observed that navigation dots on the carousel on the Business page do not move when the user navigates to different screens using the arrow buttons. It is expected that the carousel screen indicator dots would follow the current screen that is present on page.

Steps to recreate: 
1.	Go to URL: [https://w3c-dev.studio24.dev/business/index.html](https://w3c-dev.studio24.dev/business/index.html) 
2.	Scroll down to the ‘What organisation think about us’ carousel
3.	Select the carousel navigation arrows
4.	Observe that the screen indicator does not follow the shown content

Environment: believed to be global 
Reproduction rate: 100% - Consistently reproducible. 
Severity: 4. Cosmetic Issue/ Typo

## W3C-407 - Business – Breadcrumbs Arrow Is Cut Off

It has been observed that the last breadcrumb arrow on the Business page is partly cut off. It is expected that the breadcrumb graphics would be present on screen in full.

Note: this issue has been observed across the three page templates tested.

Steps to recreate: 
1.	Go to URL: [https://w3c-dev.studio24.dev/business/index.html](https://w3c-dev.studio24.dev/business/index.html) 
2.	Observe that the breadcrumbs arrow is partly cut off

Environment:
iPhone 8 - iOS 14.4 - Safari 14
iPhone XS - iOS 13.2.3 - Safari 13
Reproduction rate: 100% - Consistently reproducible.
Severity: 4. Cosmetic Issue/ Typo

## W3C-408 - Business – W3C Member Logos Render Longer Than Expected

It has been observed that W3C member company logos on the Business page render longer than expected, causing the user to need to scroll a long way to view and move past them. It is expected that the logos would render in a square shape, as seen on other environments, including Windows 10 – Chrome.

Steps to recreate: 
1.	Go to URL: [https://w3c-dev.studio24.dev/business/index.html](https://w3c-dev.studio24.dev/business/index.html) 
2.	Scroll down to the ‘Over 20 companies are W3C members’ section
3.	Observe that the logo tiles are longer than expected

Environment: Believed to be a Safari specific issue
Reproduction rate: 100% - Consistently reproducible. 
Severity: 4. Cosmetic Issue/ Typo

## W3C-409 - [Suggestion] Business – Ways to Get Involved Button Location

It has been observed that the ‘Ways to get involved’ buttons render on two lines on mobile devices. It could be suggested that instead of two lines, these buttons would be located on the same line underneath the copy ‘Ways to get involved’, when they cannot fit on the same line with the copy. This way the placement of the buttons would not leave an empty space after the second button. Please see attached screenshot for current placement of buttons.

Steps to recreate: 
1.	Go to URL: [https://w3c-dev.studio24.dev/business/index.html](https://w3c-dev.studio24.dev/business/index.html) 
2.	Scroll down to the ‘Ways to get involved’ copy
3.	Observe that the placement of the buttons

Environment:
iPhone 8 - iOS 14.4 - Safari 14
Google Pixel 2XL – Android 11 – Chrome 88
Reproduction rate: 100% - Consistently reproducible.
Severity: 5. Feature Enhancement/ Suggestion/ Query


