---
layout: post
title: On not choosing WordPress for the W3C redesign project
categories:
  - CMS
description: "Explaining the background of our choice on CMS platform and the response to a recent WordPress Tavern post"
author: Simon R Jones
date: 2020-09-25
thumbnail: /assets/images/img-content-management.png
thumbnail_alt: Sketch of a person with a rake standing on part of a wireframe, using the rake to organise the content on the page.
---

The W3C redesign project is an incredibly exciting one for us at Studio 24, it's an honour to be working with an 
organisation we have looked up to for our whole career. But it's also challenging, with many aspects coming under 
more scrutiny than we're normally used to. It's also made harder in this time of pandemic, with increased anxiety and 
challenges working effectively during this "new normal" we're all living in. 

We're happy to rise to this challenge. Yesterday a well written article was published by WordPress Tavern on 
[W3C dropping WordPress from consideration](https://wptavern.com/w3c-drops-wordpress-from-consideration-for-redesign-narrows-cms-shortlist-to-statamic-and-craft) 
which I'd like to respond to.

## In context of the project

We've tackled a huge variety of work so far from initial Discovery, User Research, Information Architecture, Content 
Design and UX Design that has helped move the project forward.

The CMS platform decision is just part of this and for the end website is one of the less visible aspects. As you can 
read from [Marie's report on the work we did to choose Craft CMS](/docs/cms-selection-report/) you can see the steps we went through to help 
shortlist and choose a CMS.

For us, and the requirements from W3C, the delivery of accessible HTML/CSS pages that meet user needs is the most important part of this project - and 
where we are focussing our time. All in, we spent around 15 days on the CMS platform choice. Enough to help evaluate 
a limited number of options, but not enough to do a thorough review of the state of accessibility in a wide range of CMSs. 

We were surprised by the accessibility issues that cropped up in CMS platforms after our [initial CMS review](/docs/w3c-cms-selection-process-update/).
This prompted us to prioritise accessibility above other requirements due to the [principles and values of W3C](https://www.w3.org/Consortium/mission#principles).

## Challenges of Gutenberg (for now)

[Studio 24](https://www.studio24.net/) is a firm supporter of open source software and we use [WordPress](https://www.wordpress.org/)
extensively for our client work. For this project we had committed to not selecting a CMS until we'd had the chance to
better understand client requirements.

The key reason we decided against WordPress was due to Gutenberg. Many have written about the [accessibility issues](https://www.marcozehe.de/my-thoughts-on-gutenberg-accessibility/) 
the project has had as well as the positive [steps to improve accessibility in Gutenberg](https://www.marcozehe.de/whats-new-for-accessibility-in-gutenberg-7-2/).

Gutenberg is an exciting and really interesting development. Many CMS vendors are looking at ways to allow editors to 
create more flexible content from compontents or blocks. However, this comes with huge challenges on how to make innovative
user interfaces accessible. WordPress decided to use the JavaScript framework [React](https://reactjs.org/) 
to meet these needs.

We [tested Gutenberg](https://medium.com/studio24/we-tried-converting-a-bespoke-website-design-in-wordpress-with-gutenberg-42e11986b05a) 
six months before it was released in WordPress 5. Recently we worked on a project for the University of Cambridge creating 
a site for their [Alumni magazine](https://magazine.alumni.cam.ac.uk/). 
This launched in April 2020 and uses Gutenberg to manage content. This gave us a good idea of how Gutenberg works. 
In June, we reviewed the current accessibility issue backlog ([issues](https://github.com/WordPress/gutenberg/labels/Accessibility%20%28a11y%29), [a11y project](https://github.com/WordPress/gutenberg/projects/25)) and 
had some feedback from users with accessibility needs who had difficulties using the current user interface. 
This was a contributing factor in our decision that WordPress was not a good fit for this project.

Given the importance the WordPress project has put on Gutenberg as the future of WordPress we did not feel it was reasonable to recommend using the Classic Editor if there is 
a good chance this will not be supported in the future. At present [Classic Editor is slated for end of life in Dec 2021](https://make.wordpress.org/core/2018/11/07/classic-editor-plugin-support-window/).

We look forward to the continued development of Gutenberg and applaud efforts to make it more accessible. We appreciate improvements 
have been made since our review and we're very glad to see the [WordPress Accessibility Day](https://wpaccessibilityday.org/) on 2nd October.

## Front-end complexity

From a business perspective I also believe Gutenberg creates a complexity issue that makes it challenging for use by many agencies
who create custom websites for clients; where we have a need to create lots of bespoke blocks and page elements for individual client projects.

The use of React complicates front-end build. We have very talented front-end developers, however, they are not React 
experts - nor should they need to be. I believe front-end should be built as standards-compliant HTML/CSS with JavaScript 
used to enrich functionality where necessary and appropriate. For example, the use of React to manage Gutenberg block HTML makes this 
difficult due to the nature of the block HTML being tightly coupled to React via the JSX templating system. 
 
As of yet, we have not found a satisfactory (and profitable) way to build custom Gutenberg blocks for commercial
projects. We won't stop trying though and plan to do more R&D with Gutenberg in the future. The W3C project, however, did 
not feel like the right place to do this. On a project as wide-ranging as this one, development time does become a factor.

Drupal also has this complexity issue which makes developing sites harder than it needs to be, and is why we didn't 
consider that platform either. I've talked to [other agencies who have decided to drop Drupal](https://torchbox.com/blog/torchbox-has-dropped-drupal/) 
due to its complexity. 

## The question of open source

The W3C embraces and supports the 
open web. However, as an agency we also have to be practical when it comes to the tools we use to build sites. From our
review, which was focussed on PHP-based CMSs, Craft and Statamic came out as meeting all the key requirements and are both
very developer-friendly platforms. An important consideration for a tool that we need to hand over to W3C to maintain in 
the future.   

While their [source code](https://github.com/craftcms/cms) is open, they do have commercial licenses and cost money (though a modest sum). 
Charging money enables small teams to develop good software, so we're not ideologically against this business model. 
Both platforms are well respected in the community and well-used by professionals, running sites such as [Netflix](https://media.netflix.com/en/)
and [Big Commerce](https://www.bigcommerce.com/) in Craft, [Spiegel Plus](https://www.spiegel.de/plus/) and [FreshBooks](https://www.freshbooks.com/)
 in Statamic.

We are using open source technology in the majority of this project (HTML/CSS, JavaScript, PHP, Symfony). While Craft is a proprietary 
CMS, this has given us the advantage of direct access to the team developing the CMS which has helped improve accessibility 
in these CMSs. We hope this helps move accessibility forward in the CMS industry.  

Open tools will continue to be used to publish the standards of the web. The [Technical Reports](https://www.w3.org/TR/)
page is powered by [Symfony](https://symfony.com/) and specifications will continue to be published to [GitHub](https://github.com/w3c) 
to facilitate open discussion. Nothing's changing with how the W3C work in the open.

## A note on front-end delivery

One final note. We are currently considering a [Headless CMS](https://www.studio24.net/blog/what-is-a-headless-cms/) option 
for front-end page delivery. This means using the CMS in a decoupled way to manage content but use a separate system to deliver front-end 
pages. Please note this solution would not be reliant on JavaScript (e.g. a single page app which is common with headless). 
Under this option we'd use Symfony to deliver front-end pages which is an established technology W3C already use across a lot of the site.
 
This may give W3C better flexibility for the future, though comes at a cost of added complexity. 
The W3C site is already made up of a lot of different systems, the CMS is just one part of the what makes 
up the varied content on [w3.org](https://www.w3.org/).

I hope this helps explain the thought process behind our decision a little more and addresses some of the valid concerns 
highlighted in the WordPress Tavern post.
