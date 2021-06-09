---
layout: post
title: Feedback guide
categories:
  - User Acceptance Testing
description: A plan on how to give feedback on the site build: what kind of feedback to give and when to give it.
author: Julia Sang
date: 2021-06-09
thumbnail: /assets/images/img-standards.png
thumbnail_alt: Sketch of an American Football Placekicker scoring a field goal. The football shows the W3C logo. 'Standards' is written in the end zone.

---

# A guide to giving feedback on the site build

## Why do we need a guide? 

In recent conversations with Coralie and Vivien from W3C, we have realised we need to be clearer about when we need feedback and what kind of feedback we are looking for.

We want to make it easy for people to give their input, while considering what has been signed-off during design, so we don't have to revisit areas already approved. 

We need find the balance between asking people to review our work when we are happy with the quality, but not too late in the process that making change has a big impact.

So we have come up with this guide! Any feedback you have on it, [let us know](/feedback/)! 

## When are we looking for feedback? 

Once we have completed all the bug fixes from [Zoonou](https://zoonou.com/) and [DAC](https://digitalaccessibilitycentre.org/) and are satisfied the front end templates:

* meet the agreed design and specification
* have passed a design review (Ian will lead on this)
* pass WCAG2.1 AAA accessibility standards (for code, content is out of scope)  (DAC will lead on this)
* display correctly in agreed browsers and across different screensizes  (Zoonou will lead on this)

We will send all the templates over to W3C for a final review. At this stage all feedback will be added openly to the GitHub [frontend repo](https://github.com/w3c/w3c-website-frontend/issues) or the [Craft repo](https://github.com/w3c/w3c-website-craft/issues) for CMS issues. 

We will agree with W3C a set period of time in which to give feedback. In this time we expect W3C to gather feedback from everyone who has an interest in the pages (i.e. not just the immediate team). This is because amend time is limited, so we want to ensure W3C have all feedback in, before remediation work is started. 

Once W3C is satisfied all stakeholders have given their feedback, the core W3C team will review and prioritise the feedback. Any items not related to our work (i.e. content) can be assigned to the W3C team. Any items related to our work can be left unassigned in priority order, for us to review.

To help review and prioritise feedback, we will, where relevant, publish why we have done things on this Working in the Open site to be used as a reference point.

When giving feedback, and prioritising work, we ask W3C to consider:

* There are three review points: 

  * One review phase of static templates, before they are integrated into the front-end app. This phase has 3 days of time allocated to reviewing feedback and making changes.

  * Two review phases for the site once it is loaded with content (this is user acceptance testing). Each of these phases has 8 days of time allocated to reviewing feedback and making changes (total 16 days). The 16 days includes any iteration time required for the account/sign in pages.

  * Once this time is used up, further changes are considered out-of-scope (unless a Change Request is agreed). As we know, web projects can be finessed forever, which is why we need to set boundaries on how much time we can dedicate this phase of the project.

* As we have a limited number of days to spend fixing issues, prioritising of issues is really important. We will work through the list of issues in priority order, if we run out of time before all items are completed, remaining items will either need to move to the next round of fixes or a future phase of the project.  

* The pages have been built to the approved spec and designs. If feedback deviates from these approved documents we are unlikely to implement it unless there is a good reason, it is a trivial change, W3C are willing to raise a Change Request or W3C want us to spend time from the bug-fixing pot on a new feature or improvement.

* If there are code issues raised we will review and consider if they should be addressed. If not we will give an explanation as to why. As a rule of thumb, we are happy to correct code that is going against official coding standards. Things are more nuanced when it comes to best practices as, if standards are 'set in stone', best practices aren't. They are up to debate.

 We have been following best practices to the best of our collective knowledge. Where best practices were conflicting, we have prioritised them in this order:

  * accessibility/semantics
  * usability
  * performance
  * markup readability.

  With that in mind, we are happy to correct code where we would have failed respecting this order of  priority when making best practice choices. 

  All these choices should be documented on this 'Working in the Open' site for the community to read and debate. 

* Adding/modifying features of the [Craft content management system](https://craftcms.com/) is out of scope. We are happy to issue feature requests to the Craft development team. It is then up to them to prioritise feature requests.

  We are directly in touch with the Craft developers. They have been very responsive, particularly when missing features were critical to the functioning of the website (i.e. ability to add timezone to a date, pushing comments via GraphQL).


## What kind of feedback are we looking for?


### Front-end templates and components

These have all been through a design and specification review and approval process with the W3C team. We have built the templates to the approved design and specification. Once the templates are built we will:

* fix a browser or device bug identified by Zoonou, assuming the time to fix is proportionate to the importance of the bug
* fix accessibility bugs identified by DAC which are code related
* fix issues raised by W3C in priority order, until the time at each phase is used up. 

### Symfony Front-end app

Once the front-end app is built we test that it matches the approved specification. Then during the W3C feedback phase we will:

* fix issues raised by W3C in priority order, until the time at each phase is used up. 

The Symfony front-end app is one area where W3C can contribute more towards (with Studio 24 support). So it's possible for us to prioritise other fixes if W3C can assist with fixes in the front-end app.


### CMS

Once the CMS is built we will test that it matches the approved specification. Then during the W3C feedback phase we will:

* fix issues raised by W3C in priority order, until the time at each phase is used up. 


### TR exception

We have made an exception to the above process on the TR page, and included an additional round of iteration in-browser, because we know how important this page is to W3C and the people who use the page, and we really want to support W3C in getting it right. However once the next round of wireframes is approved, we will need to follow the above process again with no additional round of iteration unless there is a change request. A further note on this will be published in the weeknotes later this week.  
