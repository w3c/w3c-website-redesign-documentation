---
layout: post
title: Group page usability recommendations
categories:
  - Design
  - Content
description: Improving the usability of W3C Group pages
author: Julia Sang
date: 2021-03-22
thumbnail: /assets/images/img-content-management.png
thumbnail_alt: "A person standing on a giant piece of paper with an illustration of part of a web page. The person has a rake, and is using it to rake the content to make it look neater."

---

When the W3C website project was awarded to Studio 24, one of the areas that we were asked to review and improve was the Group pages. However, we did not have enough time within the budget to do a full template redesign of the key group pages:
* Main Group landing page ([https://www.w3.org/groups/](https://www.w3.org/groups/))
* Sub-group landing page (for example [https://www.w3.org/groups/wg/](https://www.w3.org/groups/wg/))
* Group detail pages (for example [https://www.w3.org/groups/wg/eowg](https://www.w3.org/groups/wg/eowg))

So we compromised with W3C and agreed to do a content review. Our output is solutions to improve usability and the design of any missing components needed to implement the solutions. This post summarises our recommendations. 

## User problems on Group pages and proposed solutions

### "I don't understand what groups do and how they are organised"

**Problem:** 

* Difficult to understand what groups do and their terminology

**Recommendation:** 

* Ensure content on the purpose of groups uses simple and clear language

### "How can I find a relevant group?"

**Problem:**

* How do I find a group based on my interests? 
* How do I know what category of group to look in?
* Are groups related to Business Ecosystems?

**Recommendation:** 

* Relate groups to Tags and Business Ecosystems
* Provide a keyword search to find a group
* Display group description in listing pages to help users understand group purpose more easily


### "It is hard to find out what is happening in my group"

**Problem:**

* Difficult to find recent activity
* Difficult to keep track of progress (i.e. I am a web developer and want to know the progress of the group that is developing the specification I am eagerly waiting for)

**Recommendation:** 

* Add calendar
* Add group activity
* Add news for a group

### "It is hard to find out how to get involved in my group"

**Problem:**

* Hard to see how to join

**Recommendation:** 

* Make it clearer who can join a group
* Use clear call to actions, removing any confusing text

### "I can't always find out about events" 

**Problem:**

* How can I see a list of events for a group?
* How can I subscribe to updates?
* How can I see upcoming events across multiple groups?

**Recommendation:** 

* Calendar page for each group


## Our proposed solutions for Group pages


We completed a detailed review of all the group pages, and identified three additional components to be designed. These are:
* Call to action buttons need colour variations (positive, negative, neutral)
* Group listing card (name, description, business ecosystem, tags)
* Secondary navigation at top of group detail pages

[View designs for the new components](/designs/group-new-components/)

### Main Group landing page solutions
Example: [https://www.w3.org/groups/](https://www.w3.org/groups/)

* Add a keyword search to top of page to help people find groups based on keywords.
* Search form:
   * Keyword text field
   * Group type (radio or checkboxes): Working Groups, Interest Groups, Community Groups, Business Groups, Task Forces
* We recommend [against select lists](https://design-system.service.gov.uk/components/select/). If the above UI is too busy we can hide group type on landing page and only expose on search results page.
* Keep current group explanatory content.
* Use call to action button styles to link to sub-group landing pages.
* Suggest adding Task Forces to landing page since this is a missing group type.

### Sub-group landing page
Example: [https://www.w3.org/groups/wg/](https://www.w3.org/groups/wg/)

* Keep current basic layout and introductory content. 
* Add a keyword search to find groups within this group type. Do not display group type options on this search (since will be pre-selected).
* List groups and display:
   * Group name
   * Description (helps users understand purpose)
   * Business ecosystems & tags associated with that group
* Do not use collapsable pattern, show all content by default. This means links to secondary pages are removed, we feel the use case for these on the listing page is small.
* Move closed groups link to bottom of page.

### Search results page

* Return search results matching keyword against group name, group short name, related business ecosystem, or tag.
* Search form:
   * Keyword text field
   * Group type (radio or checkboxes): Working Groups, Interest Groups, Community Groups, Business Groups, Task Forces
* We recommend [against select lists](https://design-system.service.gov.uk/components/select/).
* Introductory content:
   * Your search returned 25 results for open groups. You can also search for closed groups.
   * “Closed groups” is a link that repeats the current search for closed groups.
* Display search results in same format as sub-group landing page.

### Group detail pages 
Example: [https://www.w3.org/groups/wg/eowg](https://www.w3.org/groups/wg/eowg)

Sub navigation:
* Summary
* News
* (Activity) - may not be available for launch due to complexity
* Participants
* Calendar
* Tools
* Publications
* Task Forces
* IPR<br>

#### Group detail - summary
Example: [https://www.w3.org/groups/wg/css](https://www.w3.org/groups/wg/css)
* Secondary navigation to sub-pages needs to be clear and near the top of the page. 
* Where sub-nav pages do not exist, do not include these in the nav.
* Content for this page to follow current model with a few small changes:
   * General information (as now). The sub-title “general information” is redundant and could be removed.
   * Format date (spell out month) for charter, or use locale format
   * On charter add history link to link to the Charter history page. E.g. Chartered until 30 Sept 2022 (history)
   * Leadership (as now).

* New “Links” section to replace Mailing list displaying:
   * Social links (e.g. Twitter, YouTube)
   * Social links should be worded as call to actions, e.g. Follow us on Twitter
   * Mailing list. Could be simplified by: www-style@w3.org (view archive)
* Participation
   * Short sentence stating who can join this group so it is clear. E.g. This group is open to W3C members or invited experts.
   * How to join link for full instructions
   * Move “Patent Policy status” to How to join page
   * Buttons to join / leave group should be intelligent (e.g. only display join button if you work for a W3C member)
* Summary of latest activity (e.g. 5 latest items).<br>

#### Group detail - news
* New page aimed at new users and existing members
* Display list of recent News articles and Blog posts (e.g. 5 latest of each)
* Use same layout as used for News listing page
* Offer RSS feed links to news and blog content for this group<br>

#### Group detail - Activity
New page aimed at existing group members
* Display group activity as an activity stream
* This should display the following content in order of date that it is published
* Content includes:
   * New or extended charter
   * New leadership 
   * New participants
   * Technical Reports 
   * Group Notes

* Data should be polled and stored in a single location to make this easy to query. Suggested data to store:
   * Label
   * Link
   * Date
   * Type (e.g. charter)
   * Group ID
* This feature may not be feasible to develop for launch, so is considered future work<br>

#### Group detail - Participants
Example: [https://www.w3.org/groups/wg/css/participants](https://www.w3.org/groups/wg/css/participants)

* Keep layout as it currently is - it works well (use the new people listing template)
* View former participants link could be moved to bottom of page to make this less prominent<br>


#### Group detail - Calendar

Example mockup: [https://gor.w3.org/groups/wg/dx/calendar?tz=America%2FNew_York&past=](https://gor.w3.org/groups/wg/dx/calendar?tz=America%2FNew_York&past=) 

* Use W3C mockup with a few changes:
* Dates and time recommendations:
   * Spell out the name of the month.
   * Spell out timezones, e.g. Eastern Daylight Time
   * Consider using timezone abbreviations (e.g. ET, GMT, CET).
   * Display event origin time first, followed by time in user’s local timezone.
   * Display date in user’s locale format if possible (may not require user choice if can be auto-detected)
   * Undertake user testing with community.
* Examples:
   * 28 January 2021, 14:00 - 15:30 Eastern Daylight Time (18:00 - 19:30 UTC)
* Display event description on page, there does not seem to be a need to hide this content.
* Event title can link to event details page.<br>

#### Group detail - Tools
Example: [https://www.w3.org/groups/wg/css/tools](https://www.w3.org/groups/wg/css/tools)


* Current layout is OK
* We are recommending to display social links on Summary page (e.g. Twitter, YouTube)
* Social links should be worded as call to actions, e.g. Follow us on Twitter
* Remove “Version Control” and replace with new section beneath other tools content
* New sub-heading: Version control
* Display list of GitHub/GitLab/etc repos that exist for this group directly on this page
* See data example: [https://www.w3.org/PM/Groups/repositories.html?gid=32061](https://www.w3.org/PM/Groups/repositories.html?gid=32061)<br>


#### Group detail - Publications
Example: [https://www.w3.org/groups/wg/css/publications](https://www.w3.org/groups/wg/css/publications)

* Current layout is OK
* We recommend displaying all Technical Reports & Group Notes using the same card layout as the TR page
* Review filters and sort order after TR listing page design work is complete<br>

#### Group details - Task forces
Example: [https://www.w3.org/groups/wg/css/task-forces](https://www.w3.org/groups/wg/css/task-forces)
* Current layout is OK
* This page lists related Task Force groups so should use the same layout as the Group listing page<br>

#### Group detail - IPR
Mockup: [https://w3c.github.io/redesign-mockups/groups/wg/css/ipr/](https://w3c.github.io/redesign-mockups/groups/wg/css/ipr/) 

* This is a pretty technical area which we do not have clear understanding of, so do not have any recommendations. 

