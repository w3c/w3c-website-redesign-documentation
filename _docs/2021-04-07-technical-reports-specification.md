---
layout: doc
title: Technical Reports Specification
categories:
  - Usability
description: Recommended improvements to the Techincal Reports page
author: Simon R Jones, Ian Axton
date: 2021-04-08
thumbnail: /assets/images/img-content-management.png
thumbnail_alt: A person standing on a giant piece of paper with an illustration of part of a web page. The person has a rake, and is using it to rake the content to make it look neater.

---

{: .no_toc }

The Technical Report (TR) page is a very important part of the W3C website. It allows people, interested in the work being done to move web standards forward, to find all related specifications and guidelines. Following a content review, interviews with key W3C team members in this area including Denis Ah-Kang and Dominique Hazaël-Massieux, a set of improvements were identified and worked on. On this page you can:
* Read below the final specification for the new page
* [View the page design as it will appear on initial load with content organised by 'family'](/designs/TR-listing-family-view/)  



## Table of contents
{: .no_toc .text-delta }

1. TOC
{:toc}

## Purpose

Allow users to quickly and easily view Technical Report documents (specifications & group notes).



## Key requirements

- Clear, skimmable list of TR documents (see comment: "[consistent spacing between items and density](https://lists.w3.org/Archives/Public/spec-prod/2021JanMar/0012.html)").
- Give user options to search & display filtered list of results. 
- No pagination, display all results for current view.
- Ensure performance is good on desktop & mobile.
- Make sure users can share links to the TR page (page URL should update when view changes, e.g. search/filter options are chosen).
- Try to make this page understandable for new users, though we recognise its main use is by expert users.

## Result layouts

Results are displayed in two different layouts:

### 1. By family layout
Through discussions with W3C we've come up with the idea of organising TR documents by "family". This is a useful grouping which reflects what the documents are used for, we believe this will help new users make sense of what W3C works on.

This view is only used on the initial page load.

Examples include:

- CSS Animations
- CSS Fonts
- JSON-LD
- Web of Things

There are currently 278 families. See Google Doc of [current family list](https://docs.google.com/spreadsheets/d/1WlqmB1ZTUo-nqpZ-E_bMUHD_KCcHUC10c2uctsj9Cv0/edit?pli=1#gid=0) prepared by W3C.

We propose to:

- Display TR documents by family for the initial first page view
- Order the families by which contain the most recent items (e.g. a family which has not been updated for a few years would appear lower down the page than a family which has current work in progress)
- Within each family group TR items by:
  - Completed
  - Work in Progress
  - Associated documents
- Within each sub-grouping order by most recent
- Only display most recent item in a series for maturity level = recommendation (e.g. display HTML 5.2, not HTML 4.0)
- Do not display Retired documents 

To help understand this view, W3C provided an [example mockup of TR docs by family](https://cdn.statically.io/gh/w3c/tr-pages/family-grouping/family-mockup/status.html).

### 2. By specification name layout
*This is the normal view for all other searches on the TR listing page. This corresponds more closely to the current view.*

- Display each TR result, one per row
- Ordered by most recent
- Do not display Retired documents


## Retired documents
W3C do not want to display retired documents on the TR listing page. Users can view retired documents via the Series page which W3C plan to create. W3C also plan to create a "Retired TR listing page" based on the TR listing page that only diusplays retired documents.

The TR listing page should have a link to "Retired Technical Reports" to allow users to find this. This is lower priority content.



## Default view

When the TR page first loads:

- Display all TR documents organised by family
- Do not display Retired items
- Sorted by most recent (i.e. families with the most recent content)

## Content to display for each TR item

Displayed by default:

- Specification name 
- Family name (hide on the family layout)
- Link to Series page (only displays if document is part of a series)
- Status label (e.g. Complete)
- Specification maturity label (e.g. WD: Working Draft, for Group notes this is: Note)
- Date of publication (suggest date format DD MMMM YYYY, e.g. 15 October 2020)
- Tag/s

Secondary content, appears when item is selected:

- Description 
- Editors
- Working group
- Translated versions

## Example data

Default:

- Web Content Accessibility Guidelines (WCAG) 2.1 
- Family: WCAG
- View series
- Status label: Complete
- Specification maturity label: REC
- 5 June 2018
- Tag/s: Accessibility

Secondary:

- Web Content Accessibility Guidelines (WCAG) 2.1 covers a wide range of recommendations for making Web content more accessible. Following these guidelines will make content accessible to a wider range of people with disabilities, including blindness and low vision, deafness and hearing loss, learning disabilities, cognitive limitations, limited movement, speech disabilities, photosensitivity, and combinations of these. These guidelines address accessibility of web content on desktops, laptops, tablets, and mobile devices. Following these guidelines will also often make your Web content more usable to users in general.
- Editors: Andrew Kirkpatrick, Joshue O Connor, Alastair Campbell, Michael Cooper 
- Working group: Accessibility Guidelines Working Group
- Available in: Italiano (Italian), 简体中文 (Simplified Chinese), dansk (Danish), Nederlands (Dutch), suomi (Finnish), 한국어 (Korean)


## A note on acronyms

> ```
> One challenge will be the use of acronyms. Convention is to expand the 
> acronym the first time it's used in a document with the acronym in 
> parenthesis after it, but this is going to be difficult given that 
> filtering will mean the first instance of an acronym like "CR" may 
> change. The best idea I can come up with is to create a glossary and to 
> link to it from somewhere reasonably easy to find on the /TR page (a W3C 
> glossary might be a good thing to "do once, link to often" from 
> elsewhere too come to think of it).
> ```

[https://lists.w3.org/Archives/Public/spec-prod/2021JanMar/0004.html](https://lists.w3.org/Archives/Public/spec-prod/2021JanMar/0004.html)

Acronyms only apply to "maturity level" label, these are currently used on the TR page and presumably are well understood by expert users. Ideally we would like to avoid the use of a separate glossary where possible.

Acronym values for "maturity level" are:

- WD = Working Draft
- CR = Candidate Recommendation
- PER = Proposed Edited Recommendation
- PR = Proposed Recommendation
- REC = Recommendation
- RET = Retired
- Note = Group Note

We will review whether its feasible to [expand this acronym on first usage](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/abbr#accessibility_concerns). 



## Search

Keyword search to return filtered list of TR items based on whether keywords exist in:

- Specification name
- Specification family

Search results will use the By specification name layout.



Result reloads data on page and updates page URL (e.g. ?search=keywords). 



## Filters

Search filters exist to display specific TR items. Ideally any filters can be combined together.

- Tags
- Status & Maturity level (may be one or two filters - see note below)
- View all (resets filters and views all data)

We recommend keyword search and filters can be used in conjunction.

Users can select one or many tags for a search.

Result reloads data on page and updates page URL (e.g. ?status=complete).

## Tags values

- Accessibility
- CSS
- Data
- DOM
- Graphics
- HTML
- HTTP
- Internationalization
- Media
- Performance
- Privacy
- Security
- Web API
- Web of Things
- XML


## Status & Maturity level values

Status is Complete / In Progress. Maturity levels are Recommendation, Working Draft, etc.

W3C have suggested using one status field and use sub-groups to make it clear to users which maturity levels apply to Complete / In Progress. 



> <optgroup>](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/optgroup) displays the data in a select box as above but it wouldn't allow the user to select 'Complete' or 'In Progress'.


Using optgroup would stop users being able to select Complete or In Progress, which feels useful. However, it does not make sense to select Complete/In Progress and a maturity status. Or Complete/In Progress and an invalid maturity level. 

Studio 24 will review the most suitable solution.



```
├── Complete
│   ├── Recommendation
│   └── Group Note
└── In Progress
    ├── Working Draft
    ├── Candidate Recommendation
    ├── Proposed Recommendation
    └── Proposed Edited Recommendation
```

## Sorting

Sort options by:

- Most recent (the default sort order)
- Name (A to Z)
- Name (Z to A)

Sorting applies to both layouts. If the user changes the sort on the family layout, we would simply re-order the blocks and not switch to the spec-by-spec layout.



## What does Studio 24 build?

Studio 24 will design and build the static HTML templates for the TR page. There should be two templates, one for each layout (by family, by spec name).

Where possible the HTML used for the family and spec name layouts should be indentical. This will aid DOM manipulation if W3C decide to search/filter TR content client-side. For example, each TR item should contain the same HTML content on both views - with possible layout via CSS.

Studio 24 will work on minimal JavaScript only for this page, which is responsible for allowing users to read content - not loading or searching data. JavaScript that Studio 24 is responsible for is expected to be:

- Display / hide secondary content (or we will use [detail/summary](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/details) native HTML functionality if possible)
- Given page content is expected to reload via Ajax (not a complete page load) accessibility guidance for how to alert the user to new page content.

## What does W3C build?

W3C will need to write the JavaScript to power the data loading, search and filter. Core requirements are:

- Load all initial data. Initial default content is only:
  - Family name
  - Date of most recent document within a family to aid sorting
  - TR documents: Specification name, Status label, Specification maturity label, Date of publication
- Load secondary content for an individual TR document (on-demand)
- Search (expected to work via an API endpoint)
- Filter (expected to work via an API endpoint
- On each page view change, update the URL via GET params. E.g. 
  - https://www.w3.org/TR/?family=JSON-LD
  - https://www.w3.org/TR/?search=WCAG
  - https://www.w3.org/TR/?search=CSS&status=complete&sort=AZ

## Data loading strategy
We recommend loading the minimum data required to aid performance:

- Only load data for items that appear on current view
- Data should be cached to speed up requests (using Varnish)
- When user views secondary content this loads data via an Ajax call
- Search and filters reloads data on page via an Ajax call
- Sort will re-order current loaded data client-side (and not reload it)

W3C have expressed an interest in searching/fitlering client-side, we recommend this is tested to evaluate performance.

## Series page
W3C have suggested adding a series page for use on specification documents that are in a series (e.g. HTML or WCAG). This page would display:

- History of specification documents
- Editors draft
