---
layout: doc
title: "CMS selection report"
date: "2020-09-25"
categories: ["cms", "Accessibility"]
description: "Craft CMS is selected to build the re-designed W3C website. Here is a description of our selection process."
author: "Marie Manandise"
---

W3C and Studio 24 have selected the Craft CMS to build the re-designed W3C website.

The process that led to that decision turned out to be a lot more convoluted than expected and taught us a lot about
the state of accessibility of authoring tools on the web.

{: .no_toc }

## Table of contents
{: .no_toc .text-delta }

1. TOC
{:toc}


## Summary of the previous steps

We started by drafting a list of [CMS requirements](/docs/cms-strategy-and-requirements/). We then
pre-selected three CMSes to review in more detail: Craft, Statamic, and WordPress. We published our conclusions in a [CMS
selection status update](/docs/w3c-cms-selection-process-update/).

As you can read in the status update above, we discounted WordPress, partly because of accessibility issues of its new Gutenberg editor. We also didn’t want to be left relying on the Classic Editor which there is a real risk will be unmaintained in the near future.

We were left with Statamic and Craft. We had a slight preference for Statamic due to its keeping content under version control and ease of use by developers, 
but both CMSes would allow us to build the required features of the re-designed W3C website in fairly similar ways.

The issue was: neither Craft nor Statamic were following the required [Authoring Tools Accessibility Guidelines](https://www.w3.org/WAI/standards-guidelines/atag/) (AA standards or at least close to it).

A light touch review by our Accessibility lead, Carlos Eriksson, revealed that accessibility had not been baked into the 
development process of either tool, with Craft CMS doing a little better and demonstrating some awareness of accessible 
best practices.

What ensued was a quest for an accessible CMS that also bears all the features of a modern CMS.

## Looking at accessibility first

We scoured the web for accessible CMSes.

We started by looking for accessibility reviews or assessments of CMSes. It turns out not much work has been done on that at all. And the few reviews that we found out about were focusing on **whether the CMS was helping
content authors to produce accessible content** as opposed to whether the editing tool itself was accessible.

We also looked up CMS communities that had accessibility groups/initiatives. These are rare and typically the accessibility initiative is not fully integrated
into the development process and/or is in the early stages (awareness-raising or planning rather than implementation).

In general, whenever we came across a CMS with a better accessibility reputation we faced one or more of the following issues:

* features too limiting
* development stack Studio 24 and W3C are not familiar with
* unresponsive community
* accessibility initiative at early stages or marginal (not integrated into main development effort)
* accessibility was related to content produced rather than to the editing experience

### Reaching out to experts

We wanted to make sure we were not missing anything obvious so we reached out to a few experts in the field of accessibility.

We got in touch with Cam Nicholl from the [Digital Accessibility Centre](http://www.digitalaccessibilitycentre.org/). She did know of one accessible
CMS: [Jadu](https://www.jadu.net/). Unfortunately, Jadu is very much closed source. Its code is not publicly available, and it is not possible to download a demo or access one
online.

We reached out to Susanna Laurin, from [Funka](https://www.funka.com/en/), who has been working on an EU-funded project to review CMS accessibility. Here is her response:

> "Funka is investigating, auditing and testing authoring tools, as part of our consultancy assignments and in different research projects. Since 2018, we are focusing on built-in accessibility – or ”accessibility by default” – in content management systems and editors, in three different EU-funded research projects, where we cover the most used CMS in public sector in the EU (licensed as well as open source products). Based on our experience, I would say that none of the tools are accessible by default – they all need work arounds or tweaking to comply with accessibility requirements.
> 
> "When it comes to the content creation environment; the 'back office' of the tools, the situation is even worse. We have never found a CMS that provides an accessible content creation environment at the same time as it works like a professional tool covering all the functionality I am sure W3C requires.
> 
> "Of course I can’t promise that there isn’t a tool out there that we have missed, but it would have been hiding very well for the last 20 or so years."

We had a conversation with Hidde de Vries, from the [Web Accessibility initiative](https://www.w3.org/WAI/). 
He also suspected there would currently not be any CMSes that fully comply with the [Authoring Tools Accessibility Guidelines (ATAG)](https://www.w3.org/WAI/standards-guidelines/atag/).


## Getting CMSes up to accessibility standards

If we couldn't find a CMS that is accessible 'out-of-the-box', maybe we could get a CMS team to work towards making their tool accessible.

When taking that approach, the first questions to answer are:

* How much work does it involve for the CMS to meet ATAG AA compliance?
* Can this be achieved by the launch date for the W3C website?

Answering these is not a trivial matter. It requires a proper accessibility assessment by an accessibility specialist. And it is a process that takes time.

It seems obvious now. It wasn't obvious to any of us at the time. This is something we only fully realised in the course of conversations with CMS vendors.

### The large open source option

One name that kept cropping up in conversations is [Drupal](https://www.drupal.org/). It is an open-source project, supported by a large community. It powers the website
of large organisations (e.g. the [World Economic Forum](https://www.weforum.org/)). And it has a good reputation in terms of accessibility.

The Drupal community has made a [commitment to accessibility since version 7](https://www.drupal.org/about/features/accessibility) (it is currently on version 9).

We had initially **not** considered Drupal because, from our experience with it, the complexity of its configuration is a liability; even more so in large projects.

We have used Drupal on a range of projects in the past, both version 7 and the first year or so of version 8. We had a number of challenges with the platform, including complexity, steep learning curve, missing core features, and complex bugs with things like translations and the REST API. Due to this we decided to stop using Drupal for new projects in our agency, which influenced our decision.

Looking at accessibility, although it has a good reputation and accessibility is part of its development process, it is not fully accessible. To make it meet the required standards would mean contributing to the code
(doing it ourselves), for which we don't currently have the resources, or getting the community to work on it. Unfortunately, due to the size of the Drupal community and the fact that it is decentralised, this process would take a very long time.

In this case, we felt working with a smaller CMS development team would be a more effective way to tackle specific accessibility concerns as we could have a direct conversation with the developers who set out the development roadmap of their CMS.

### Reaching out to developers of our pre-selected CMSes

We therefore got in touch with the authors of Statamic and Craft. We asked them whether they were interested in making their CMS accessible and whether they thought they could put the resources into that work.

We were pleased with their reactions. Both teams were open to the conversation and gave us time and attention. Both teams also started
making accessibility improvements to their CMS as a result of our initial report

In parallel we also looked at how much timer we (Studio 24 and the W3C) could put into assisting with the work (reporting issues, issuing pull requests).
With the pressures of pandemic affecting us for the foreseeable future, we came to the realisation that we don't have the capacity to assist with this at present.

Carlos Eriksson, our accessibility lead, and Hidde De Vries, from the [Web Accessibility Initiative (WAI)](https://www.w3.org/WAI/), each performed a quick accessibility assessment of the two CMSes. This revealed the scale
of the work required to make them compliant was also bigger than we had initially anticipated.

I wish to add that, had we looked at other CMSes of the same calibre, we would very likely have reached the same conclusions. These developers are doing a great job.

In the end, our decision mostly came down to available resources.
Craft had already committed to reach AA compliance in Craft 4 (it is currently on version 3.5, the release of version 4 is planned for April 2021). They had also arranged
for an external agency to provide them with accessibility issues to tackle weekly. In the end, they decided instead to hire an in-house accessibility specialist to perform assessments and assist
the development team in adopting accessibility patterns in the long run.

## Relaxing the brief a little

Due to the state of accessibility of authoring tools in general and the scale of the task of making any CMS accessible, we realised we would not get a CMS that follows all the Authoring Tools Accessibility Guidelines (AA standards) by the planned launch date of the new W3C website.

We therefore suggested a phased approach. The first phase would be for the content editing interface of the CMS to be usable by non-sighted users; this should be achieved by the launch date. The reason for this is that some members of the W3C staff, who will contribute to the content of the website,
are non-sighted. It is imperative that all members of staff have the same level of access to the content editing experience.

We are currently considering simplifying our design approach to help meet this deadline. We usually design 'flexible components' that can be added to web pages in any number and order. These
require a complex editing interface allowing nestings and re-ordering. Such interfaces are typically difficult to make accessible. We might opt for a more 'static' approach which requires a simpler
editing interface.

The second phase of work would consist in modifying the CMS to meet AA standards. This would be achieved by a date the CMS authors would be comfortable committing to.

## Conclusion

Call us naive but none of us had anticipated accessibility would become such a central part of our CMS selection process. We had underestimated:

* the lack of accessibility of authoring tools, 
* the lack of research on the web on authoring tool accessibility, 
* the resources required to assess accessibility, 
* and the work required to meet accessibility guidelines.

We greatly appreciated the reactions of the Craft and the Statamic teams: their willingness to work on accessibility and the time they have already
devoted to it.

Craft went the extra mile by committing to a roadmap to reach compliance and hiring an in-house accessibility expert to report accessibility issues and educate the development team.

Finally, we really wish for this experience to bump up accessibility on the community's agenda.

## Acknowledgements

In the end, many people were involved in this process and devoted some of their precious time to it.
We'd like to thank the Craft team, Jack from Statamic, Susanna from Funka, Cam from the DAC, Hidde De Vries from the WAI.

I'd also like to thank Carlos Eriksson, our accessibility lead, and the whole team at Studio 24 who let me pick their collective brain.