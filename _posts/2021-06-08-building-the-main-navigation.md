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

The designs for smaller screens showed an off-canvas navigation with a button to toggle the display of the parent items. Further toggles were available to provide access to child and grandchild items. On larger screens, the designs showed the parent items in a single horizontal line and the initial toggle button hidden. The parent items acted as toggles for a single dropdown containing a link to the parent item plus a mixture of child and grandchild items, arranged in three columns.

My first decision was an easy one - to use an unordered list for the navigation markup. It's a tried and tested solution for site navigation, and lets users of assistive technology know how many items are present. Nested, unordered lists have formed the core of the navigation markup across all four prototypes.

Because of differences in mobile and desktop menu designs, had two versions of the markup (only the appropriate one shown via CSS at one time according to viewport breakpoint).

A hamburger icon was chosen for the off-canvas navigation toggle button. As there is still some discussion around the affordance of the hamburger icon, a text label was included for clarity.

Chose to use CSS multi-column technique for desktop dropdown.

Feedback from Léonie Watson about replacing links with buttons (I had been using links and preventDefault). 

Also: "Where there are further layers of the navigation they need to behave in the same way as the parent/child layer. At the moment grandchild layers of the navigation are automatically expanded (on desktop), breaking the earlier convention (on mobile). This makes the experience for sighted keyboard users very laborious if the part of the nav they want is on the other side of the expanded grandchild layers.

It must be possible to close each layer of the navigation using the escape key for the same reason."

Not clear that the child links were links and not just headings.

Didn't like the addition of the close button in the desktop dropdown. And menu should be closable using the Esc key.

Suggestion to move the back button in the mobile child/grandchild menus to sit below the list of links (where did this come from again?)

## Version 2

Removed close button from desktop dropdown. Moved back buttons in mobile menu from top to bottom.

Added Esc key menu close functionality.

Collapsed the grandchild level links in the desktop dropdown to make it easy for keyboard users to skip over them to get to next child link. Was able to use same markup for both mobile and desktop now that behaviour was consistent. But the requirement to collapse links within the desktop dropdown necessitated dropping CSS multi-column technique. Went with CSS grid instead to maintain 3-column presentation.

Didn't like that this resulted in order of links going horizontally rather than in vertical columns. Concern expressed over repeating of child link since the original link was now converted to a toggle button. Also concern regarding extra click needed to toggle grandchild menus on desktop now no longer expanded by default. Visually could no longer see at a glance what sprt of content was within grandchild sections.

Feedback that dropdown should also close if a click event happens outside of it (in addition to using the Esc key).

Request for expanded desktop navigation to standout more from the rest of the website. Also to add a highlight to the appropriate parent item when the dropdown is open (on desktop).

Feedback from some W3C team members suggested exposing the parent items by default on mobile and dropping the off-canvas approach. However, this contradicted other feedback asking for the depth of the header region to be reduced as much as possible.

Request to address styling of basic navigation (non-JS version).

## Version 3

Reverted to CSS multi-column. Grandchild links automatically expanded on both mobile and desktop for a consistent experience.

Relocated back button in mobile menu.

Menu highlight added

Sub menus close if user clicks outside of navigation.

Used varying font sizes and indentation to try to better distinguish child/grandchild links.

Refined the styling of the non-JS version of the navigation. I made decision to only show parent links and hide other links. Should be possible to reach other content from landing pages. No objections raised.

Site map had continued to change while navigation was being prototyped. To help with the review of this version of the navigation, W3C updated the nav to match the planned sitemap contents, prior to internal review.

Most of the feedback W3C received indicated that they found the child/grandchild menu hierarchy confusing and hard to understand and scan on desktop. Further concerns about links being repeated where orginals were replaced with buttons. Mobile nav considered to work well.

Too many items in the dropdown making it hard to scan. Agreed a pause on navigation iterations until site map finalised.

Proposal to have desktop dropdown triggered on hover.

Concerns about use of inline SVG and verbosity of markup.

## Version 4

Cut down number of items listed. Only two levels of links provided rather than three.

Focus on improving visual styling of desktop dropdown. Make link to landing page clearer. Addition of intro text snippet (hidden on mobile to save space) explaining the sort of content linked to from the dropdown.

Improved navigation toggle functionality thanks to Adrian Roselli's article about [disclosure widgets](https://adrianroselli.com/2020/05/disclosure-widgets.html). Was able to trim CSS and JS by dropping aria-hidden.

Changed technique for SVGs to make use of `<use>` element to make the markup less verbose. Results in an additional http request for the file, but the file is cached.
