---
layout: post
title: Redesigning the landing page for Technical Reports
categories:
  - Prototyping
  - Accessibility
  - Design
  - Content
  - Build
description: A review of the design and front-end build of the landing page for Technical Reports.
author: Carlos Eriksson
date: 2021-07-21
updated: 2021-07-29

---

## Table of contents
{: .no_toc .text-delta }

1. TOC
{:toc}

## Introduction

From March to July this year, we worked on the redesigning the landing page for Technical Reports.

In this article, I document the problems, processes and decisions made along the way.

To help you understand the work and this article, I'll explain some words we'll be using here. Later, as we introduce new words, I'll also explain those.

Let's begin.

## The words that will help you

The W3C produce two types of Technical Reports: **normative and non-normative.**

Normative reports are widely reviewed and, in many cases such as with Web Content Accessibility Guidelines (WCAG), legal requirements. That is to say, they are the norm.

Non-normative reports document pretty much everything else, and often include use cases, practices, and code examples. They are not legal requirements and not the norm.

Normative reports go through a structured process:

1. Working draft
2. Candidate Recommendation (Candidate Recommendation Snapshot, Candidate Recommendation Draft)
3. Proposed Recommendation (Proposed Edited Recommendation)
4. Recommendation

Additionally, the Normative report process includes words such as First Public Working Draft, Rescinded, Obsoleted, Superseded, and Restored but aside for a brief mention of Superseded, we won't look at these in this article.

Non-normative reports are more flexible and can be published right away, though sometimes they'll go through this process:

1. Working draft
2. Group note

Normative and non-normative reports are both in the [W3C Technical Report Development Process][process].

## Purpose and goal

The goal here is to make the [Technical Reports][tr] landing page as welcoming as possible for new users, while still being useful for expert users.

The Technical Reports themselves serve a myriad of people in different positions and roles, and because of this the landing page has a responsibility to be clear and direct.



## The problems in version 1

Back in April, after confirming requirements with W3C, we published our [first draft of a specification](/docs/technical-reports-specification/) for the Technical Reports page. 

However, given the large amount of data on the TR page, after this initial design work the team had concerns on how well the page would perform in the real world. We decided to build [version 1](/designs/TR-listing-family-view/) and populate it with real data so that it would be easier to review how well this page works. 

In our review, we're looking at these kinds of problems: architectural, structural, content, interactions and presentational.

On we go.

### Material honesty

To explain where reports are in their process of maturity, we're introducing two new words here: In progress and Complete, we call these Statuses.

In the form, we present a select element for these Statuses, which when activated reveal two groups of checkboxes. Some of these checkboxes change the state of multiple other checkboxes.

The problem here is that we have elements that look like something they're not---it isn't a select element---, and when interacted with, behave in unexpected ways---activating the first checkbox in group 1 also changes the rest in that group. This element was an attempt to combine a set of complex filters in one place, but it doesn't work and I believe using form elements that act as the user would expect will be simpler and more effective. I call this material honesty.

### Mixing report types and their statuses

We're staying with the statuses and we're going to think about how we're grouping reports across these checkboxes and our new words.

- Complete
  - Recommendation
  - Group note

- In progress
  - Working draft
  - Candidate Recommendation
  - Proposed  Recommendation
  - Proposed Edited Recommendation

There are currently 298 Recommendations and 369 Group notes that are completed.

The problem is, we are mixing normative reports and non-normative reports based on their maturity, adding further confusion to an already confusing collection of words. If you don't know which is which, knowing if it's Complete or In progress won't help much.


### Mismatched cause and effect

Now let's take a step back and think about this page as a whole.

In its default state, whilst none of the form options is activated we show you all 1017 reports.

In the searched state, after you've activated options in the form, we now show you reports which match your options.

The problem here, is that whilst the searched state makes sense, the default state does not: if you have done nothing, we ought to show you nothing.


### Layout changes

We're introducing a new word here: Families. A broad group. They're currently \~280 Families.

Once we have searched, the layout changes significantly between the default state and the searched state.

In the default state, we show all 1017 reports and group them by 280 Families. Then within each of these Families, we group reports by their statuses (In progress and Complete). Reports are ordered by recency. Let's call this the Family layout.

In the searched state, we show the result reports without Families or statuses. Reports are ordered by recency. We'll call this the List layout.

The problem here is that the layout changing, when the state changes, is confusing.





### Unpredictable interactions

Now, we've reached a single report, where we present you with the following information at a glance and hide the rest in a collapsible element.

1. Report title, as link
2. W3C Technical Report Development Process
3. Chevron, as toggle for the collapsible
4. Last updated date
5. Family
6. Tags

To understand the problems here, we need to think back to the layout changes.

In the Family layout, each Family presents its reports grouped by Status, where each downward arrow represents a collapsible.

For example, in any given Family:

- Complete
  - Report ↓
  - Report ↓
  - Associated documents ↓
    - Report ↓
    - Report ↓

- In progress
  - Report ↓
  - Report ↓
  - Associated documents ↓
    - Report ↓
    - Report ↓

We're only showing the Family layout if you haven't searched. Once you search, with the List layout, we implode the nested list and instead present you with this:

- Report ↓
- Report ↓
- Report ↓
- Report ↓
- Report ↓
- Report ↓
- Report ↓
- Report ↓


The original design thinking was to display a short summary of information to help users scan the page, and allow users to expand this to see more detail. 

However, the problem here is inconsistency and complexity. Two collapsible groups of content with different presentations and interactions which depend on what state the page is in.

Sometimes the title of the collapsible is also the element that toggles the collapsible, sometimes it isn't. Sometimes this element is to the far right, forcing your eyes to move across the page in a criss-cross pattern, some times it isn't.

*Fun fact: during development, JavaScript struggled to cope with progressively enhancing 1017 reports into nested collapsible.*


### Overwhelming amount of information

Once you toggle a report collapsible we present you with all the following information:

1. Family
2. Status (In Progress, or Complete)
3. Report title, as link
4. W3C Technical Report Development Process
5. Chevron, as toggle for the collapsible
6. Last updated date
7. Tags
8. Abstract
9. Editors
10. Working Group, as link
11. Family
12. Series, as link
13. Report title, as link
14. Translations, one for each translation, as link


The main problem here is that this is an overwhelming amount of information that may not be important to most visitors.

Additionally. for visitors who use keyboards to navigate, you'll need to navigate five Tab stops per report---add one for each translation, which for Web Content Accessibility Guidelines (WCAG) 2.1 is eight additional Tab stops.



### Other minor problems

Review which sorting order is most useful.






## Fixing the problems for version 2

After reviewing v1 the team decided I would research and think about some new solutions.

The result of this process were [a sketch for the default page](/wireframes/TR-IA-initial-state) and [a partial sketch for the searched state](/wireframes/TR-IA-with-results). Partial because we're introducing quite a few changes and decided it would be easier to stress test these in [build v2][v2-all].

### Embracing standard web elements

We're suggesting to make these elements present in a predictable way---so for example, checkboxes should look like checkboxes and work like checkboxes.


### Changing the words we use to describe things

Before we address the problem of mixing report types and statuses, let's take a step back and look at the words themselves, because we think they are a bigger problem.

We would go so far as to say that the biggest obstacle to understanding the technical reports for a majority of people is the inconsistent use of terms and the ambiguity of the term 'Recommendation' for normative reports.

*Fun fact: I asked people in our agency and almost no one knew whether normative or non-normative were legal requirements.*

So, our suggestion is to change the words. We suggest making it clear that a report is a Recommendation or a Group Note, regardless of its place in the maturity process. And making it even clearer, which ones are legal requirements and which ones aren't.

Normative reports ought to be called:

1. Draft Standard
2. Candidate Standard (Candidate Standard Snapshot, Candidate Standard Update)
3. Proposed Standard (Proposed Edited Standard)
4. Standard

Non-normative reports ought to be called:

1. Draft Note
2. Note

Although this could be considered W3C Technical Report Development Process, v2, let's call it 'Standard or Note'.

***

Taking a moment to listen to the community, shows us that we're not alone in struggling to understand the Technical Reports that W3C publish.

Rian Rietveld (in [We need to talk about WCAG][rian]) and Hidde de Vries (in [What's ‘normative’ in WCAG?][hidde]) have written recent articles about this and other problems, and both articles are worth a read.

Additionally, we're suggesting keeping Standards and Notes in separate groups of fields in the form, removing In Progress and Complete statuses.

*Later, I was informed that the W3C is already in [the process of reviewing these words][newprocess].*

### Cause and effect

We're changing the default state. Instead of showing all 1017 reports when you haven't actually searched, let's show you nothing.

This creates a more coherent cause and effect because you are now in charge of the page and how its state changes to reflect your choices.

For new users, we're suggesting giving people some quick links to useful content. Meanwhile, for all users, we're suggesting consistent URL patterns that reflect the state of the page, which in turn can be shared and bookmarked.

[Default state page and its content][v2-default]:

> Search for: Standards only, any reports in progress, everything tagged with Accessibility, or all reports.

### Layout consistency

Layouts ought to remain consistent if the only thing that has fundamentally changed is the content that is shown through search.

Through more in-depth conversations with W3C, we've concluded that there's a possibility that Families can provide a useful grouping for Technical Reports.

Because of this, we're suggesting keeping the Family list but using it for both states.





### Predictable interactions

To address the inconsistency and complexity of different collapsible groups of content, we're suggesting removing all the collapsibles for Technical Reports.






### Content reduction

To address the problem of an overwhelming amount of information that may not be important to most visitors, we're suggesting removing most of it from this page.

The key question guiding this is: would this content and its users be better served by another page?

After reviewing the content and who it's for, we've narrowed down the content outline for any report from 14 to 7:

1. Family
2. Standard or Note
3. Report title, as link
4. Last updated date
5. Tags
6. Editors
7. Translations, as link

Additionally, for visitors who use keyboards to navigate, we now have one Tab stop per report---adding only one additional Tab stop for translations of any report.

Note: Translations are important but somewhat infrequent---when compared to the number of reports which have no translations. We're also not sure how to handle community translations that aren't Authorised by W3C. Both of these will need some more thinking.

### The minor fixes

We're suggesting ordering reports by newest-to-oldest.

We're suggesting changing the Standard label for superseded reports that haven't been Retired to say: 'Superseded Standard'.

Example:

```
Superseded Standard
Web Content Accessibility Guidelines (WCAG) 2.0

Standard
Web Content Accessibility Guidelines (WCAG) 2.1
````





## Now what?

This is where you come in.

The solutions here attempt to solve present problems whilst keeping one eye on the horizon of things to come for the web---which is likely to be many more technical reports.

With this article, the W3C are sharing this work with their users and we're sharing it with you.

Technical Reports serve a myriad of people in different positions and roles, and that includes you.

We have created three prototypes for your review.

* [Technical Reports Default State](https://w3c-dev.studio24.dev/technical-reports-v2/index.html)
* [Technical Reports Searched State (all reports)](https://w3c-dev.studio24.dev/technical-reports-v2/search-results-all.html)
* [Technical Reports Searched State (any report tagged with accessibility)](https://w3c-dev.studio24.dev/technical-reports-v2/search-results-a11y.html)

[Now we want your feedback][feedback].

Does this make it easier to understand which reports are normative and what normative even means?

Does this make it easier to find what you're looking for?

(Please note, this work still needs a review of how we link to translated content, a final styling review and to be accessibility, browser and device tested). 


[feedback]: /feedback
[v1-build]: v1link
[v2-default]: https://w3c-dev.studio24.dev/technical-reports-v2/index.html
[v2-all]: https://w3c-dev.studio24.dev/technical-reports-v2/search-results-all.html
[v2-a11y]: https://w3c-dev.studio24.dev/technical-reports-v2/search-results-a11y.html
[tr]: https://www.w3.org/TR/
[htmlelements]: https://developer.mozilla.org/en-US/docs/Web/HTML/Element
[process]: https://www.w3.org/2020/Process-20200915/
[newprocess]: https://www.w3.org/Consortium/Process/Drafts/#note-track
[hidde]: https://hiddedevries.nl/en/blog/2021-04-27-whats-normative-in-wcag
[rian]: https://level-level.com/blog/we-need-to-talk-about-wcag/
[default-sketch]: /designs/TR-IA-initial-state
[searched-sketch]: /designs/TR-IA-with-results
