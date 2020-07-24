---
layout: doc
title: W3C CMS platform selection - full status update
categories:
  - CMS
description: A summary of the CMS options we reviewed and our recommendation of
  the best one for W3C.
author: Marie Manandise
date: 2020-07-24T14:35:04.069Z
updated: 2020-07-24T14:35:04.101Z
---
# W3C CMS platform selection: full status update

{: .no_toc }

## Table of contents
{: .no_toc .text-delta }

1. TOC
{:toc}

## Summary: the current situation in terms of CMS selection

Last week we pre-selected three CMSes to look into in detail:
* Statamic
* Craft
* WordPress

We proceeded with the CMS trials and were hoping to finalise our recommendation today. Unfortunately, we encountered a hurdle: none of the CMSes comply with the accessibility guidelines (https://www.w3.org/WAI/standards-guidelines/atag/), which is part of the essential requirements for W3C.

It turns out very few, if any, CMSes are compliant with the authoring tools accessibility guidelines. Those who are better on that front do not necessarily cater to the other project requirements.

We now need to step back and explore ways to tackle this issue. In the meantime, this document describes the work we have done so far
in terms of CMS selection and our first thoughts and impressions.


## The CMS selection process

### Defining requirements

The CMS selection criteria were identified and explained in the [CMS strategy and requirements document](https://w3c.studio24.net/docs/cms-strategy-and-requirements/). They are summarised as a list of questions to ask about each CMS in the [‘Choosing a CMS’ section](https://w3c.studio24.net/docs/cms-strategy-and-requirements/#choosing-a-cms).

### Shortlisting

We then looked at a series of CMSes from a high level. We looked at their marketing material to understand their philosophy and their main features; got a sense of the level of activity of their development team and community; scanned their user and developer documentation. 

Based on this first review, we for example excluded all static site builders (e.g. Gatsby, Jekyll). Jekyll and Gatsby can have performance issues when building large sites, which we would rather avoid. Others such as Hugo are built on technology we are not familiar with in the studio. 

We shortlisted three candidate CMSes to look at in more detail. These are all based on the PHP technology stack, which W3C is familiar with.

* Statamic
* Craft CMS
* WordPress

### The review process

This is how we tested Craft and Statamic (we didn’t submit WordPress to that test as we already have extensive experience working with it).

We gave ourselves the brief of installing an instance of the CMS on our computer. We used the CMS to build a website. 

The website needed to be available in two languages, with some content translated, and other content local to each language. 

We needed to create pages and a blog/news section. 

The news content items needed to be written using ‘flexible components’. What we call ‘flexible components’ are blocks of layout. These can be added in any number and in any order. For example, one layout can be a ‘text’ block with a ‘title’ field (plain text) and a ‘content’ field (HTML input via some form of WYSIWYG editor); another layout can be a video block with a ‘title’ field, a ‘video URL’ field, and a field to enter credentials.

We needed to add a company address to the footer of the website.

Finally, we needed to create a (very rough) template for the news item created, i.e. a template file where all the content input by the user would be displayed (without formatting).

All the while we kept referring to the list of requirements to check all the features needed. This means we also looked at user management, media libraries, etc.

## The candidates

#### Statamic

Statamic market themselves as a replacement for traditional CMSes such as WordPress and ExpressionEngine (<https://statamic.com/why>, <https://statamic.com/about>). Established in 2012, their team focuses on building a CMS that maximises productivity for developers. It contains many features out of the box (where other CMS would rely on third-party extensions), including internationalisation.

They also make sure the interface is easy to use by content managers. It has very useful features such as live previews of the content being edited. The media library can be organised in folders. Users can define a focal point for each image and get a preview of how the image will be cropped to all predefined sizes.

Statamic powers the website of [Der Spiegel](https://www.spiegel.de/), a major German newspaper.

This is a commercial option that comes at a low cost: $259 for the license and 1 year of updates and developer support, $59/y after that.

Statamic is a flat file system. All the site configuration and content are stored in text files (yaml files for the configuration and markdown files for the content). This makes the website building process and deployments extremely efficient. It also allows keeping the whole site (including the content) under version control. This means the whole history of the website can be stored and accessed at all times.

A [Laravel](https://laravel.com/) application converts the flat files into web pages (and other features such as users). 

The Statamic CMS is an added layer that allows content editors to manage content via a user interface rather than directly in the markdown files. In other words, the application that renders the website and the CMS are decoupled. If something is lacking in the CMS, a developer can always go and edit the flat files directly. For example, when creating a new user on our local instance of Statamic, we got stuck in the process. We hadn’t set up a way for the CMS to send out emails so our new user could not complete the registration. We simply edited the user file directly. We got unstuck in minutes.

Statamic can be used as part of a headless architecture. It has a content API, which we can customise if need be. Der Spiegel use Statamic as part of their own headless setup to power their website (See [Statamic blog](https://statamic.com/blog/statamic-at-spiegel-scale-2) and [Polygon](https://polygon.rocks/)).

As it is built on Laravel, which implements the MVC architecture (Model-View-Controller), the code base is organised according to well-documented patterns and best practices. This helps when implementing deployments and custom extensions.

#### Craft CMS

According to Craft themselves, Craft is *“a flexible, user-friendly CMS for creating custom digital experiences on the web and beyond”* (<https://docs.craftcms.com/v3/#tech-specs>).

Craft was first released in 2010 and is now in its third version. It is trusted by big names such as Ikea and Netflix. 

It is a commercial option. The license costs $299 and includes a year of updates and support; $59/y after that.

It is built on the [Yii PHP framework](https://www.yiiframework.com/). It follows a ‘traditional’ CMS structure: the site content and configuration are stored in a database (MySQL or PostgreSQL).

Craft is indeed very flexible. It is built with big organisations in mind. It allows managing several **groups** of websites from a single place. It can be extended with an eCommerce plugin built by the Craft team.This is well suited for marketing teams managing several brands, each having a series of localised websites for example. Internationalisation is built-in. 

A lot of the site configuration is set up via the CMS (as opposed to configuration files or code). Developers therefore need to spend a considerable amount of time setting up the content structure via the CMS and can only rely on the interface to perform this task. This involves quite a bit of digging around (at least at first) to edit content structure or find the machine name of a content field for example.

The user interface to manage a piece of content is intuitive and has a nice ‘live preview’ feature. The media library can be organised in folders and it is possible to define a focal point to crop images around it at various sizes. Because it caters for complex groups of websites, it does require a bit of clicking around to find a particular piece of content. 

The Yii framework implements the MVC (Model-View-Controller) pattern. This means front-end templates are nicely decoupled from the CMS logic. They are implemented using the [Twig templating engine](https://twig.symfony.com/), which we are familiar with in the studio. More generally, it means the code base of Craft is organised according to well-documented patterns and best practices. This helps when implementing deployments and custom extensions.

Craft CMS can be used as part of a headless architecture. Resources can be queried using GraphQL.

#### WordPress

WordPress is the tried and tested option. It was first released in 2003 as a blogging platform. Over the years, it gained popularity thanks to its intuitive interface. As its community grew more diverse so did its uses. It started being used as a CMS rather than a blog. It is now powering blogs set up by content creators themselves on [WordPress.com](https://wordpress.com/), small company websites put together and customised by designers and marketing teams, and large enterprise websites with their custom set up, themes, and plugins (e.g. Bloomberg professional, <https://www.bloomberg.com/professional/>).  It is the largest CMS on the market with a huge community of both developers and users behind it.

It is already used to manage some areas of the W3C website (blogs and news). Studio 24 has extensive experience working with WordPress.

Over the years we have devised our optimal WordPress development setup. We use the  [Advanced Custom Fields](https://www.advancedcustomfields.com/) and [Fewbricks](https://github.com/folbert/fewbricks) plugins to customise the editing experience. In the past year, we have started using [Timber](https://www.upstatement.com/timber/) for page templating. Timber allows using the [Twig templating engine](https://twig.symfony.com/) in WordPress templates. This makes for ‘cleaner’ templates in which logic is separated from presentation. We keep an internal list of plugins we know we can use reliably (for security for example). 

Wordpress can be used as a traditional CMS or headless CMS via their REST API. 

##### Our concerns about WordPress in the context of this project

Because we have a lot of experience with Wordpress, we are also very much aware of its limitations in the context of a project of this size and longevity.

First of all, we have concerns about the longevity of WordPress **as we use it**. WordPress released a new version of their editor in 2018: Gutenberg. We have already rejected the use of Gutenberg in the context of this project due to accessibility issues. 

If we choose to do away with Gutenberg now, we cannot go back to it at a later date. This would amount to starting from scratch with the whole CMS setup and theming.

Gutenberg is the future of WordPress. The WordPress core development team keeps pushing it forward and wants to roll it out to all areas of the content management system (navigation, sidebar, options etc.) as opposed to limiting its use to the main content editor as is currently the case.

This means that if we want to use WordPress long term, we will need to circumvent Gutenberg and keep circumventing it for a long time and in more areas of the CMS as time goes by. The plugin we use to do so ([Classic editor](https://wordpress.org/plugins/classic-editor/)) is maintained by the WordPress team and will [stop being officially maintained on December 31st, 2021](https://make.wordpress.org/core/2018/11/07/classic-editor-plugin-support-window/). In the meantime, plugins we currently use to customise the CMS (Advanced custom fields, fewbricks, etc.) might stop being maintained as they will lose their relevance in the context of a widespread adoption of Gutenberg by users and developers.

More generally, we think this push to expand Gutenberg is an indication of WordPress focusing on the requirements of their non-technical user base as opposed to their audience of web developers building custom solutions for their clients. 

Secondly, Wordpress has a lot of history and prides itself on its backwards compatibility. Whilst this makes updating WordPress easy compared to what happens with other CMSes, it means there has never been a radical rewriting and cleaning up of its code since its release in 2004. WordPress is not based on a modern PHP framework following what are now widespread and standard good practices (MVC architecture, namespacing, unit testing, etc.) This has several consequences:

* It makes it difficult to fully automate deployment of the website.
* It increases the likelihood of clashes between plugins (including with custom-built ones) which can result in extra work.
* We need to rely on external plugins for things that come out of the box in more modern CMSes (e.g. we need the Timber plugin to use a templating engine). These are developed by a variety of authors which mean we multiply the number of points of contact for support related to what should ideally be core features.

Similarly, should we choose to follow the headless CMS approach, it is worth noting that a few plugins are again required to expose custom fields in the WordPress RestAPI.

Thirdly, in our experience there is no elegant solution to content localisation and translation in WordPress. There is no built-in mechanism for it. Our recommended (and tested) approach to deal with content internationalization is to set up a multisite instance of WordPress, each language being implemented as one site of the multisite setup. The [Multilingual Press](https://multilingualpress.org/) plugin is then used to match pages that correspond to each other in the various languages. Whilst this solution is good at separating the management of the various languages, it can become an issue if you need to use the multisite feature for other reasons.

Finally, WordPress does not have good long-term content versioning capabilities. The native versioning feature (‘revisions’) does not work well for large numbers of versions. We experienced performance issues with it, mainly due to WordPress’s approach of storing content in a small number of database tables.

## The conclusion we could not come to

If you look at the candidates descriptions above and the [full test notes below](#heading-test-results-and-notes), you can see Statamic solves most of the requirements for this project. On that of tap, we found it very comfortable to use - both for users and developers.

Unfortunately, it does not meet the accessibility requirements. Carlos, our accessibility lead, did a light-touch accessibility audit 

## Test results and notes

### [Statamic](https://statamic.com/)

#### Features checklist

CMS software

* Open source or commercial license? \
  Commercial license but code is publicly available on Github (about 50 contributing developers) \
  Development team of 3 but has contingency plan \
  “*If we're all hit by a bus (and it's not homicide, mind you), Statamic will be open sourced. If we – however unlikely – decide that our collective futures are no longer in line with Statamic's path, we will open source Statamic or find someone to take over who has the customers and community in their best interest.”*
* Is this a mature software product, ideally, one that has at least 2-3 major versions? \
  It has been around for 7 years. V3 officially is being released in the coming weeks.
* How large is the community? \
  2229 Community members on Discord (<https://discord.com/invite/j4aQmZv>) \
  Active forum: <https://statamic.com/forum> \
  Has about 50 contributors on Github (<https://github.com/statamic/cms>)
* Is the CMS under active development? \
  Very much so. The Statamic team is currently finalising documentation and marketing material for the release of version 3. Their developers are quick to react via email or Github issues.
* What’s the quality of documentation? \
  Comprehensive and crystal clear
* What are the technical platform requirements (PHP is preferred)? \
  Based on Laravel (PHP framework) - <https://statamic.dev/requirements>
* What security credentials does the CMS have? Do they have a security team? \
  According to Statamic: “*Statamic is built on [Laravel](https://laravel.com/), the most modern, powerful, and secure PHP framework ever created.*” \
  Being a small team, they do not have a dedicated security team. \
  N.B. There is the possibility to run statamic from above webroot folder to increase security (<https://docs.statamic.com/knowledge-base/running-above-webroot>)  

Content editing

* Intuitive content editing \
  Yes, very intuitive. Including extras we really liked: live preview of the content being edited, a nice media library with the ability to organise assets in folders, the ability to define a focal point in images and preview the various image sizes.
* Support for content fields and flexible components to build content \
  Yes, we could build flexible components. The choice of field types covered everything we needed.
* Does it support a simple workflow for editors (who cannot publish) & publishers? Can this be set on a section-by-section basis (e.g. news)? \
  Yes, we can easily define custom permissions and user groups.
* When two users are editing content does the CMS lock content to help avoid two people overwriting each other's work? \
  No
* Can each piece of content have a created date and a last updated date, to help show users how up-to-date content is? \
  Yes, variables called ‘date’ and ‘last_updated’ are available in the template of an entry
* What options exist to manage personalized content (e.g. content for logged-in users, content for public users) \
  ‘Logged_in/out’ variables are available in template. 

Internationalization

* Does it support translated page content (e.g. translated version of About page)? \
  Yes
* Does it support local content (e.g. local news article that does not exist in English)?  \
  Yes
* What are localisation management tools like? \
  Limited. There is no way to flag content that has been edited and needs their translations edited (‘Translation out of date’ flag). \
  It should be possible to implement this via custom fields exposed in the content listing as a first step.

Front-end 

* Does it have a flexible templating system? \
  Yes, Antlers templating engine (<https://docs.statamic.com/antlers#overview>). There is the possibility of using other templating engines (<https://statamic.dev/template-engines>).
* What options does it have for front-end performance (for content page delivery)? \
  There are several layers of caching, see <https://docs.statamic.com/caching> for details.
* Does it support static site building? \
  No
* Does it have any features that make full-page caching a problem? \
  No, except in the case of content personalisation, which would be an issue with any CMS.
* What personalisation options exist, can this work alongside Varnish full-page caching (e.g. via Vary HTTP headers)? \
  Out of the box: ‘logged_in’ and ‘logged_out’ variables are available in the templates. More data can be injected via the [View_Model object](https://statamic.dev/view-models). Making personalisation work with Varnish is more of a Varnish setup issue, i.e. it is not specific to this CMS. We can explore using front-end rendering of personalised content.

CMS features

* How accessible are the CMS editing tools?

  From the Statamic team: “*We don’t have a measurement or benchmark but we do our best.*”

  <https://twitter.com/fiinixdesign/status/1281553420210577409>

  Statamic did not have a label for accessibility issues until we asked them about it. They have one now that we asked them about it. See [results of our preliminary accessibility assessment](#heading-statamic-notes-on-accessibility).

  https://github.com/statamic/cms/labels/accessibility<https://github.com/statamic/cms/issues>
* Does it support LDAP or OAuth authentication for logging into the CMS? \
  OAuth \
  https://statamic.dev/oauth
* Does it support two-factor authentication for the CMS editor login? \
  Not out of the box but there is plugin we can use for it ($30, <https://statamic.com/addons/jrc9designstudio/2fa>)
* Does it support versioning? How far back can this realistically go? \
  The flat file system means all content can be in version control. The whole history of changes can be kept indefinitely. \
  The CMS can be integrated with Git so changes are pushed to the repository at predefined points of the content editing (e.g. when changes are published)
* Does it support storing content in Git? \
  Yes, see above.
* What options exist to integrate with 3rd party systems?  \
  Depending on the service to integrate, there might be an existing plugin to do it. \
  The [View_Model object ](https://statamic.dev/view-models) can be extended to add data before the template is served. There is also the possibility of writing our own Controllers to fetch data from external sources.
* Can you write plugins (if so, in what programming language)?  \
  Yes, building on statamic objects and the Laravel framework. We can write simple site helpers or develop full addons (<https://statamic.dev/extending>).
* Does it support dynamic functionality on the front-end (e.g. forms)? \
  Yes. Forms are available out of the box.
* Does it support a content API? \
  Yes although we might have to expand it with custom route if we use it as a headless CMS
  
#### Statamic: notes on accessibility

*The accessibility testing was done by Carlos Eriksson.*

For the accessibility testing, I tried a simple use case of adding a News entry.

This use case does not include the user journey in navigating to the content entry page itself. However, my initial impressions suggest the journey itself has accessibility issues as well. For example, the login page fails to meet the following standards (not exhaustive):

- [3.3.2: Labels or Instructions (Level A)](https://www.w3.org/WAI/WCAG21/Understanding/labels-or-instructions.html) - Email and Passwords fields have no associated labels
- [1.4.3: Contrast (Minimum) (Level AA)](https://www.w3.org/WAI/WCAG21/Understanding/contrast-minimum.html) - Text contrast for "Log in" button is insufficient

It should also be noted that the CMS relies on VueJS and without JavaScript, the CMS is completely unusable. Whilst this is not necessarily an issue as Assistive Technology will often execute JavaScript, state changes are often not made available to the Accessibility Tree.

On the page where I created a new News entry, the following issues were identified:

- Some page areas are not accessible by keyboard
- Some heading levels are missing or skipped
- Tab order is not logical (Save button is first)
- Tabs interface is not accessible by keyboard
- Labels which have no fields
- Fields without labels
- Field descriptions aren't associated with the fields they describe
- Buttons without texts (or relying on icons only)
- Some button texts rely on surrounding context for their meaning
- Checkboxes are built using `<div>` elements
- Labels are misused

Based on these issues, my conclusion is that accessibility has not been a consideration during the development of this CMS.

Notes: A more comprehensive audit of Statamic would need to be conducted by a specialised agency, such as Digital Accessibility Centre (DAC).

#### Additional notes and impressions

* At Studio 24, we often use WordPress with a series of plugins to improve the development process. Statamic roughly corresponds to WordPress with all the tools we use integrated within it (Advanced Custom Field Pro, a simpler version of Fewbricks (YAML files), Timber (for templating and custom routes), a Multilingual plugin (but a good one), the Members plugin (for user permissions)) and more.
* Possibility to move to a database for data storage if we experience performance issues. \
  From <https://statamic.dev/principles#flat-first>: “*Statamic 3 has the ability to adapt to any data storage mechanism, from relational databases like MySQL and Postgres, to NoSQL solutions like MongoDB and Redis, and more. As your site scales, you can choose to move from the flat file driver to one best suiting your needs. Deferring this decision prevents premature optimization and technical debt.”*
* Dev tools also include a command line interface
* The debug bar in the front end nicely lays out available variables:

![Screenshot of the Statamic debug bar](/assets/images/statamic-debug-bar.png)

* There is a built-in integration with Amazon S3 for the storage of media files. 
* Example of defining a focal point for an image and previewing it:

![Screenshot of the Statamic feature to define a focal point for an image and previewing it. Shows an image with a preview to choose an image focal point to allow a subject to stay in frame with dynamic photo cropping. ](/assets/images/statamic-image-focal-point.png)

* Nice feature of the content editor: a live preview <https://statamic.dev/live-preview>, including the ability to switch between screen sizes 

![A screenshot of the content editor showing the menu allowing you to switch between screen sizes. Menu options are: Responsive, Laptop, Tablet, Mobile.](/assets/images/statamic-responsive.png)

* Currently waiting for the official release of version 3. According to the Statamic team, the codebase is available, stable and freezed but documentation and marketing material are still work in progress. It should be released in the coming weeks.

### [Craft CMS](https://craftcms.com/)

#### Features checklist

CMS software

* Open source or commercial license? \
  Commercial license but the code is available on Github - <https://github.com/craftcms/cms>
* Is this a mature software product, ideally, one that has at least 2-3 major versions? \
  Started in 2010. Is on version 3.
* How large is the community? \
  4858  members on [discord](https://discord.com/invite/uuDFCTX).  \
  188 contributors on [Github](https://github.com/craftcms/cms).  \
  2000 visitors a day to [their StackExchange forum](https://craftcms.stackexchange.com/).
* Is the CMS under active development? \
  Yes
* What’s the quality of documentation? \
  Comprehensive and clear. The system is complex and therefore there is a lot to read.
* What are the technical platform requirements (PHP is preferred)? \
  Based on the Yii framework (PHP), uses MySQL \
  <https://docs.craftcms.com/v3/requirements.html>
* What security credentials does the CMS have? Do they have a security team? \
  See their security statement below. They have their code audited by team members and 3rd party security experts on a regular basis <https://craftcms.com/knowledge-base/security-faq>

Content editing

* Intuitive content editing \
  It is fairly intuitive but it can be difficult for a user to find their way around it. It allows for complex site structure with multiple groups of sites under one roof. This means more clicks to get to a content item. \
  We like the ‘Live preview’ feature. \
  Developers can do most of their job via the UI. Whether this is a good or bad thing is up for debate. We do think some things would have been better left into configuration files. 
* Support for content fields and flexible components to build content \
  Yes, we can build flexible components.
* Does it support a simple workflow for editors (who cannot publish) & publishers? Can this be set on a section-by-section basis (e.g. news)? \
  Yes, permissions can be set by user groups and overridden for every user.
* When two users are editing content does the CMS lock content to help avoid two people overwriting each other's work? \
  No
* Can each piece of content have a created date and a last updated date, to help show users how up-to-date content is? \
  Yes, variables labeled ‘dateCreated’ and ‘dateUpdated’ are available for each entry template.
* What options exist to manage personalized content (e.g. content for logged-in users, content for public users) \
  A full ‘currentUser’ object is available in the templates.

Internationalization

* Does it support translated page content (e.g. translated version of About page)? \
  Yes
* Does it support local content (e.g. local news article that does not exist in English)?  \
  Yes
* What are localisation management tools like? \
  Limited. There is no way to flag content that has been edited and needs their translations edited (‘Translation out of date’ flag).

Front-end 

* Does it have a flexible templating system? \
  Yes, using the Twig templating engine.
* What options does it have for front-end performance (for content page delivery)?

  The only thing we could find documentation about is the Twig {% raw %}{% cache %}{% endraw %} tag that allows caching portions of templates.
* Does it support static site building? \
  No
* Does it have any features that make full-page caching a problem? \
  No, except for potential personalisation, which would be an issue with any CMS.
* What personalization options exist, can this work alongside Varnish full-page caching (e.g. via Vary HTTP headers)? \
  Out of the box: the ‘currentUser’ variable is available in all templates. More data can be injected via custom Controllers and using hooks.  \
  Whether we can make it work with Varnish caching is more of a Varnish setup issue, i.e. not specific to this CMS.

CMS features

* How accessible are the CMS editing tools? \
  From the Craft CMS team: *“The next major iteration of the control panel will be WCAG AA compliant. In the meantime we’re just fixing critical issues as they are found.”* <https://twitter.com/fiinixdesign/status/1281554602031226880>\
  Craft CMS have a label to group their accessibility issues. Some basic compliance issues appear to stem back to Nov 2019, which have yet to be resolved. \
  <https://github.com/craftcms/cms/issues?q=is%3Aopen+is%3Aissue+label%3A%22accessibility+%3Awheelchair%3A%22>
  See [results of our preliminary accessibility assessment](#heading-craft-notes-on-accessibility)
* Does it support LDAP or OAuth authentication for logging into the CMS? \
  A plugin exists for OAuth (<https://plugins.craftcms.com/oauthclient>)
* Does it support two-factor authentication for the CMS editor login? \
  There is a plugin that adds email-based 2FA (<https://plugins.craftcms.com/email-2fa>)
* Does it support versioning? How far back can this realistically go? \
  Content revisions are stored in the database. I couldn’t find information about how long or how many are kept. According to this forum entry dating back from April 2017, a maximum of 10 are accessible from the user interface, more can be looked at in the database.
* Does it support storing content in Git? \
  No
* What options exist to integrate with 3rd party systems?  \
  It is possible to write custom controllers or use hooks to inject data from external sources. \
  Depending on the third party service, a plugin might exist to do the integration (see <https://plugins.craftcms.com/categories/integrations>).
* Can you write plugins (if so, in what programming language)? \
  Yes, in PHP using the Yii framework.
* Does it support dynamic functionality on the front-end (e.g. forms)? \
  Not out of the box. Commercial plugins to build forms are available for a fee (<https://plugins.craftcms.com/categories/forms>). There is also the possibility of writing our own plugin to implement ad hoc forms.
* Does it support a content API? \
  Yes, the content can be queried using GraphQL.

#### Craft: notes on accessibility

*The accessibility testing was done by Carlos Eriksson.*

For the accessibility testing, I tried a simple use case of adding a News entry.

This use case does not include the user journey in navigating to the content entry page itself. However, my initial impressions suggest the journey itself has accessibility issues as well. For example, the login page fails to meet the following standards (not exhaustive):

- [3.3.2: Labels or Instructions (Level A)](https://www.w3.org/WAI/WCAG21/Understanding/labels-or-instructions.html) - Email and Passwords fields have no associated labels
- [1.4.3: Contrast (Minimum) (Level AA)](https://www.w3.org/WAI/WCAG21/Understanding/contrast-minimum.html) - Text contrast for "Log in" button is insufficient
- [1.4.1 Use of Color](https://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-without-color.html) - Login button is disabled

It should also be noted that without JavaScript, the CMS is completely unusable. Whilst this is not necessarily an issue as Assistive Technology will often execute JavaScript, state changes are often not made available to the Accessibility Tree.

On the page where I created a new News entry, the following issues were identified:

- Buttons and Checkboxes are built using `<div>` elements
- Tab order is not logical (Create button is first)
- Some heading levels are missing or skipped
- Some interactive elements is not accessible by keyboard
- Field descriptions are misuing title attribute
- Buttons without texts (or relying on icons only)
- Some button texts rely on surrounding context for their meaning

Based on these issues, my conclusion is that the developers have some awareness of accessibility best practices but that accessibility wasn't baked into the development process or assessed.

Notes: A more comprehensive audit of Craft would need to be conducted by a specialised agency, such as Digital Accessibility Centre (DAC).

#### Additional notes and impressions

* Installation took minutes (using composer)
* There is a wide variety of plugins - some free (amazon s3 integration plugin for example), some commercial (<https://plugins.craftcms.com/>).
* There are important choices to make re. the content structure which do not have to be made in other CMS. E.g. when deciding whether a field is translatable, here are the options we are presented with: 

![Screenshot from Craft CMS showing the menu options for deciding if/how a field is translatable. Options are: Not translatable, Translate for each site, Translate for each site group, Translate for each language, Custom...](/assets/images/craft-translation.png)

 \
	Another example: this is an option for a simple text field:

![Screenshot from Craft CMS showing the menu options for choosing ‘the type of column this field should get in the database’. Options are: Automatic, varchar (255B), text (~64KB), mediumtext (~16MB).](/assets/images/craft-simple-text.png)

 \
Personally, I would rather these params are set up via config files than cluttering up the CMS. it makes the UI overly complex. \
\
I suspect this must generate a lot of head scratching when initially forgetting to tick a box or choosing the wrong option accidentally.

* Craftquest <https://craftquest.io/> looks interesting. It’s a set of resources for learning Craft in more depth. Some material is free, other resources don’t seem to be but we can’t find their price.
* Front-end has a debug bar but it doesn’t provide a list of variables available in the template. Or at least we couldn’t figure out where it was.

![Screenshot of the Craft CMS debug bar](/assets/images/craft-debug-bar.png)

* Variables in the front-end have a more complex structure than in Statamic and we could not find them listed in the developers’ tools. We had to go dig into the CMS settings and documentation everytime we wanted to find the name of a variable.
* Writing modules and plugins looks pretty elaborate.
* We suspect URL structure to be too constrained for ‘structures’. We couldn’t find a clear way of overriding them.
* The learning curve is steeper than for Statamic (for the developer using the UI to set up the site structure). There are quite a few concepts to get our head around e.g. ‘sections’ can be ‘channels’, ‘singles’ or ‘structures’. 
* The choice of field types is very limited (no rich text editor or video field for example). We would need to rely on third party plugins to have all the field types required. And for things such as conditional rules for displaying fields. It makes it a bit difficult to work out the total cost of plugins.
* Template assignment seems to be per content type only. We didn’t find out a way to make it more granular.
* We had a few difficulties with fundamental things:
* Defining the assets upload directory (and there was no default)
* We hit ‘reserved’ terms straight away for things that could be scoped

![Screenshot of Craft CMS field settings showing the top field 'Name' filled with the copy 'Title'. The next field 'Handle' filled with the copy 'text-title' showing an error message '"title" is a reserver word.](/assets/images/craft-reserved-terms.png)

* Craft CMS comes with a powerful API tool (GraphQL to generate queries) but it requires some investment in learning.

### [WordPress](https://wordpress.org)

#### Features checklist

CMS software

* Open source or commercial license? \
  Open source
* Is this a mature software product, ideally, one that has at least 2-3 major versions? \
  Yes, it has been around since 2003 and is on version 5
* How large is the community? \
  Very large and diverse (from users settings their website themselves to developers building enterprise websites.
* Is the CMS under active development? \
  Yes
* What’s the quality of documentation? \
  It is extensive. There are a lot of third party resources to complement the official documentation. It can be inconsistent for that reason and because the code itself is inconsistent.
* What are the technical platform requirements (PHP is preferred)? \
  PHP and MySQL - <https://wordpress.org/about/requirements/>
* What security credentials does the CMS have? Do they have a security team? \
  WordPress does not have a good reputation in terms of security. Although most security issues stem from misuse and bad practice from third party plugin and theme developers. \
  WordPress has a security team. See their security statement - <https://wordpress.org/about/security/>

Content editing

* Intuitive content editing \
  Gutenberg - there is a lot of debate on whether Gutenberg is actually an improvement on the editing experience. \
  We stick to the classic editor and custom fields to better organise the content and display it in the front-end. It is fairly intuitive but the use of multiple plugins and custom fields can clutter the screen and deteriorate the editing experience somewhat.
* Support for content fields and flexible components to build content \
  Yes, via the use of the Advanced Custom Fields plugin
* Does it support a simple workflow for editors (who cannot publish) & publishers? Can this be set on a section-by-section basis (e.g. news)? \
  Yes, often requires the use of the Members plugin to achieve the right level of granularity
* When two users are editing content does the CMS lock content to help avoid two people overwriting each other's work?

  Yes
* Can each piece of content have a created date and a last updated date, to help show users how up-to-date content is? \
  Yes, post object has a published date and last modified date
* What options exist to manage personalized content (e.g. content for logged-in users, content for public users) \
  Ability to call on current_user variable in the templates via PHP functions.

Internationalization

* Does it support translated page content (e.g. translated version of About page)? \
  Not out of the box. Translation and localisation requires the use of third-party plugin
* Does it support local content (e.g. local news article that does not exist in English)? \
  Using translation plugins, yes.
* What are localisation management tools like? \
  Some translation plugins include translation management features (flagging which content requires updating after the source has been edited) but these plugins are not recommended. We had issues using them in the past, they are not well adapted to the extensive use of custom fields.

Front-end 

* Does it have a flexible templating system? \
  Not out of the box. WordPress does not have a templating engine per se. The templates are a mix of HTML and PHP tags. \
  We can use Twig in WordPress by adding the Timber plugin.
* What options does it have for front-end performance (for content page delivery)? \
  Caching plugins exist but we have never settled on one that was satisfactory. We tend to use Varnish instead.
* Does it support static site building? \
  No
* Does it have any features that make full-page caching a problem? \
  No more than other CMSes
* What personalization options exist, can this work alongside Varnish full-page caching (e.g. via Vary HTTP headers)? \
  Out of the box: The current_user object is available in the templates. More data can be fetched via custom PHP functions. This is more of a Varnish set up issue, i.e. not specific to this CMS. Could also use front-end rendering of personalised content (e.g via web components)

CMS features

* How accessible are the CMS editing tools? \
  The Gutenberg editor accessibility issues are quite well documented so I will refer to the audit results. <https://www.wpcampus.org/blog/2019/05/gutenberg-audit-results/>
* Does it support LDAP or OAuth authentication for logging into the CMS? \
  A series of plugins exist to implement OAuth or LDAP
* Does it support two-factor authentication for the CMS editor login? \
  Yes, using a 2FA plugin
* Does it support versioning? How far back can this realistically go? \
  Yes, WordPress keeps a history of content changes. Although these can create performance issues when there is a long history of changes to a piece of content.
* Does it support storing content in Git? \
  No
* What options exist to integrate with 3rd party systems?  \
  Possibility to write custom code to fetch external data.
* Can you write plugins (if so, in what programming language)?  \
  Yes, in PHP
* Does it support dynamic functionality on the front-end (e.g. forms)? \
  Not out of the box but via plugins. We have experience writing our own ad hoc forms as the forms plugins have not always been reliable.
* Does it support a content API? \
  Yes. It often needs to be expanded on using third party plugins or custom code.
