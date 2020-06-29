---
layout: default
title: Writing guide
permalink: /writing-guide/
nav_exclude: true
description: "A guide to writing content on this working in the open site."
---
#  Writing guide
{: .no_toc }

## Table of contents
{: .no_toc .text-delta }

1. TOC
{:toc}

## Aims of working in the open

Our goal is to show the W3C community how we're working on the W3C website redesign project and to share progress.

We aim to publish content to the working in the open site frequently, where possible on a weekly basis.

Studio 24 will continue to prepare project docs in tools such as Basecamp, Google Docs, InVision, etc. As soon as these 
are ready to share with the W3C team we will publish these to this site, even if they are draft or work-in-progress. This 
also makes it easier to share with the wider W3C project review team who do not have direct access to Basecamp.

If there is a genuine need to only share private docs with the immediate W3C project team we will do so via Basecamp.

All site updates will be added to the timeline. These appear automatically on the homepage, timeline page and RSS feed. 

## Editing content

### Markdown files

Content is written in [Kramdown](https://kramdown.gettalong.org/quickref.html) markdown formatting. You can 
[learn how to write markdown](https://lab.github.com/githubtraining/communicating-using-markdown).

You can either add content as files to the [Git repo](https://github.com/w3c/w3c-website-redesign-documentation) or edit 
content via [NetlifyCMS](https://www.netlifycms.org/).

### NetlifyCMS

To access NetlifyCMS go to [https://ecstatic-mccarthy-0be5bd.netlify.app/admin/](https://ecstatic-mccarthy-0be5bd.netlify.app/admin/)

Login either with your GitHub account (which must have write access to the [repo](https://github.com/w3c/w3c-website-redesign-documentation)) or a Netlify user (you need to be 
invited to join).

#### Contents 
{: .no_toc }
Manage or add new content to the site.

#### Workflow
{: .no_toc }
Review content changes and publish these live. 

#### Media
{: .no_toc }
Add new images to the site, these are saved in `assets/images`.

## Publishing content
We use [Netlify](https://www.netlify.com) to build and host the working in the open site.

Any changes to the `netlify` branch are automatically deployed by Netlify and published to the live site at 
[https://w3c.studio24.net/](https://w3c.studio24.net/)

Please note you cannot publish changes directly to the `netlify` branch, instead you need to create a branch (or use the 
`develop` branch) for any changes and create a pull request to merge these into `netlify`. You can 
also use NetlifyCMS to manage the process of publishing content.

### NetlifyCMS publishing workflow 
All content is added as a draft, which then allows us to go through an editorial workflow to review and publish changes. 
Draft changes are added to a git branch and a new pull request is opened. Once approved, these changes are merged into 
the `netlify` branch.

A summary of how this works appears below (also see [publish mode](https://www.netlifycms.org/docs/configuration-options/#publish-mode)).

* Save draft - Commits to a new branch and opens a pull request
* Edit draft - Pushes another commit to the draft branch/pull request
* Approve and publish draft - Merges pull request and deletes branch

## Add all site updates to the timeline

The timeline acts as a list of all updates made to this site. Please add a timeline entry for all new content additions 
and any content changes (e.g. an updated document).

You can edit this in the `_data/timeline.yml` file or via NetlifyCMS in Data > [Timeline](https://ecstatic-mccarthy-0be5bd.netlify.app/admin/#/collections/data/entries/timeline).

Please note the timeline is displayed in the order of each entry. Therefore, you need to add new entries at the top. 
When adding a timeline entry in NetlifyCMS it will appear at the bottom, so you'll need to drag it to the top.

Each timeline update must contain:

* `title` - short title for this update (try to keep this under 8 words)
* `date` - date this update happened (not the date you publish this update to the site)

Each timeline update may contain:

* `link` - link to further information, for example a document or update post. It's also OK to link to external resources here such as InVIsion or Google Docs. Just make sure the links are publicly accessible.
* `description` - an optional longer description. If you don't include a link you must include a description (one of these is required for the RSS feed) 

## Types of content

### Pages

Content pages on the site. A few pages are excluded from NetlifyCMS since these are HTML and are easier to edit directly
in the HTML file.

#### Front matter
{: .no_toc }
You can also set front matter variables via NetlifyCMS.

* `layout: default` - layout template
* `title` - page title
* `permalink` - the page URL (use start and end slashes) 
* `nav_order` - display in primary nav in this order
* `nav_exclude` - do not display in primary nav, e.g. `nav_exclude: true` 
* `description` - short description of the page 

Example:

```
---
layout: default
title: About Studio 24
permalink: /about-studio24/
nav_order: 7
description: "An introduction to Studio 24 and the team working on this project."
---
```

### Docs

Project documents. We should publish these as soon as we want to share these with the wider W3C team & community. 

#### Front matter
{: .no_toc }
You can also set front matter variables via NetlifyCMS.

* `layout: doc` - layout template
* `title` - page title
* `date` - date (YYYY-MM-DD) document was shared with W3C
* `updated` - date (YYYY-MM-DD) document was last updated on working in open site (optional)
* `categories` - list of categories separated by comma
* `description` - short description of the page
* `author` - the people who wrote the document 

Example: 
 
```
---
layout: doc
title: "Front end standards"
date: "2020-06-12"
updated: "2020-06-30"
categories: [Planning]
description: "The front-end standards we plan to use within the W3C website redesign project are summarised below. Further details on each item appear in this document."
author: Carlos Eriksson, Nicola Saunders
---
```

#### Draft docs
{: .no_toc }
It's OK if these documents are work-in-progress or draft, just note this in the document title and timeline title. E.g.

```
title: Information architecture report (draft)
```

### Updates

Occasional project update posts that are not project documents go here. Think of these as project posts or short updates.

#### Front matter
{: .no_toc }
You can also set front matter variables via NetlifyCMS.

* `layout: post` - layout template
* `title` - page title
* `date` - date (YYYY-MM-DD) document was shared with W3C
* `categories` - list of categories separated by comma
* `description` - short description of the page
* `author` - the people who wrote the document 

