---
layout: post
title: Header design finalisation
categories:
  - Design
  - Accessibility
description: The final changes agreed with W3C to the header area design
author: Julia Sang
date: 2021-01-13T11:36:35.943Z
thumbnail: /assets/images/img-content-management.png
thumbnail_alt: A person standing on a giant piece of paper with an illustration
  of part of a web page. The person has a rake, and is using it to rake the
  content to make it look neater.
---
In mid-December we [revised the header area layout](/updates/header-design-update/) to take into account all the feedback we had received. 

Last week we received [feedback](https://docs.google.com/document/d/1f94iNee43vkFR6K2PN3hTshPnmAxRQYPie5_pti7_dM/edit?pli=1#heading=h.hz0jwnbpsvew) from the W3C team on this version of the layout. On Tuesday 12th January we had a team meeting to review the feedback together, with the aim of making final decisions about the last required changes to the header area, so it can be signed-off by the W3C team. 

The meeting was attended by:

* Coralie Mercier, Vivien Lacourba and Gerald Oskoboiny from W3C
* Marie Manandise, Ian Axton and Julia Sang from Studio 24

## Discussion points

We have a very interesting discussion over several points, which are summarised below.

There was an agreed need to save space in the header and to try to reduce its height. The points discussed are summarise below

**Quick wins to save space** 

1. Some work can be done in browser to reduce the spacing / height of elements
2. There will be some space saved when the beta banner is no-longer in use

**Do icons need text labels (could we save space by removing them)?**
Usability best-practice recommends that most icons are not universally recognised and do still need text labels to help users identify them. These includes icons such as the hamburger menu (3 lines vertically stacked, used to indicate navigation options are available on click) and a silhouette of a person's head (used to indicate options related to a website user account). An exception to this is the search icon which is almost universally recognised at this time. At the end of the discussion we agreed to keep text labels against all icons, except for search - and to look for other ways to save space. 

**Could we save space by moving the language selection menu to the footer?**\
This really asks the question: 

   "Is the W3C site an English site with a few translated pages, or are there localised versions of the W3C site?"

The answer from W3C was clearly that there are localised versions of the W3C sites. Therefore we should stick to the W3C recommendations for language navigation on localised sites, as we have currently designed.

**Can we reduce space taken up by the my account / login feature?**

This relates to previous work we have done about the role of accounts and the [on-boarding process](https://docs.google.com/presentation/d/16VQIUv2ugeZG8mNmAtZtHnaMo2E4y9x7YxKA_tPq-Xw/view#slide=id.g8f8cc95ca1_0_266) for new users. How important is it for users to create accounts and login? The answer is that only a small number of user groups need to login to the site, and actually, many people create accounts and then don't use them because content is not relevant. Therefore it was agreed that we could make this feature less prominent in certain scenarios. 

## Decision points

The outcome of the meeting was an agreement on the following final changes to be made to the header area:

**Search**\
We have added a search icon which will link to a search tool managed by W3C (outside the scope of this project). The search icon is recognised universally enough that it does not need to have the text label 'search' next to it.

* On mobile it will appear in the fly-out menu, to save space in the header. 
* On desktop it will be visible on the top menu as an icon.

**Language menu**

* The language selector will stay in it's current position, but there will be design tweaks to reduce it's height
* We recommended that it is not built as a drop-down, because that would require a select button for accessibility reasons. Therefore it will be built using the `<details>` element. This means the whole language bar area will expand down to reveal the links to the other language sites that a user can select from. We discussed and didn't think this would be a problem, as it would generally only need to be done by a user once. 

**Account / profile menu:**\
In an attempt to save space on mobile, we agreed that the log-in / register button will move to the fly-out menu, still visible on the first level navigation. 

* On mobile 

  * logged out state - login icon and label will be in the fly-out menu. 
  * logged in state - avatar will appear in the header (with the dropdown menu available). This is so that logged-in users can easily see that they are logged in and can access their account menu quickly.
* On desktop 

  * logged out state - login icon and label will be visible on the main header
  * logged in state - avatar will appear in the header (with the dropdown menu available).
* If there is a notification for you there will be a red dot to indicate

## Updated header design

See the updated header design.

It includes: 

* Two rows of layouts to illustrate the logged-out state (top row) and the logged-in state (the bottom row).
* Mobile layouts - one version with a beta banner and one version without
* Desktop layouts - one version with a beta banner and one version without

It does not show the changes to the mobile fly-out menu, as these will be done directly in build.