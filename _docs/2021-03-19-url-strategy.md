---
layout: doc
title: URL strategy
categories:
  - Architecture
description: Our URL and redirect strategy for the w3.org website
author: Simon R Jones, Marie Manandise
date: 2020-08-13
updated: 2021-03-17
thumbnail: /assets/images/img-standards.png
thumbnail_alt: Sketch of an American Football Placekicker scoring a field goal.
    The football shows the W3C logo. 'Standards' is written in the end zone.
---

{: .no_toc }

This document outlines our recommendations for URLs and redirects for the new W3C website. This document was originally 
written in August, 2020, and updated in early 2021 after decisions were made on various aspects of the front-end site 
build (e.g. [internationalization](/docs/internationalization-approach-agreed/)).

## Table of contents
{: .no_toc .text-delta }

1. TOC
{:toc}
   
## Goals

The goals of the URL strategy are to:

*   give clear guidance to W3C on how to design URLs for www.w3.org
*   have clean, human-readable URLs which have a predictable format
*   meet the spirit of the W3C persistence policy
*   ensure old URLs do not break

Back in 1999, usability expert Jakob Neilsen wrote that URLs are a critical part of the web user interface ([URL as UI](https://www.nngroup.com/articles/url-as-ui/)). 
His views are just as valid today. URLs help engender trust, they help people explore a website, and most importantly 
users to share web links to content.

## How URLs are currently managed

With over 2 million documents and one of the longest running websites in the world it’s important that w3.org get their 
URL strategy right. Unsurprisingly, being around for 30 years and generating URLS over that long period of time results 
in a series of maintenance and usability issues that we’d like to try to help improve.

We detailed how URLs are currently managed in the [Technical systems audit](https://w3c.studio24.net/docs/technical-systems-audit/#managing-urls). 
Key issues include:

*   Confusing URL structure for users
*   Old pages sitting alongside new pages in the same URL space which are difficult to manage
*   Huge number of redirects which are difficult to manage

## URL persistence

W3C is committed to a policy of persisting URLs, informed by Tim Berners-Lee’s article [Cool URIs don’t change](https://www.w3.org/Provider/Style/URI) 
and the official [W3C URI Persistence Policy](https://www.w3.org/Consortium/Persistence.html).

Things often break on the web, pages are lost and users are frustrated. The idea of treating URLs as permanent objects 
with stable URLs that do not change is a good thing. It helps the integrity of the web, it creates a historical record, 
it helps search engines index your site and therefore people find it, and it offers a good example for others to follow.

The W3C URI Persistence Policy states the following resources should always remain available:

*   The home page "[https://www.w3.org/](https://www.w3.org/)".
*   Those which start "https://www.w3.org/" immediately followed by four decimal digits (year-based URLs). In principle, 
    these cover content published on a specific date (e.g. a conference talk) but year-based URLs have been used widely 
    across the site for normal pages whose URLs should be updated.
*   Those which start "https://www.w3.org/TR/" immediately followed by four decimal digits (technical reports).
*   Those which start with "[https://www.w3.org/ns/](https://www.w3.org/ns/)".

The result of these policies is W3C has treated all pages on w3.org as follows:

*   Don’t delete anything
*   Don’t change old URLs

## Our recommendations

### Clean URLs

URLs should not contain file extensions such as “.html”, we recommend clean URLs made up of human-readable words. Clean 
URLs are composed of words in lower-case characters separated by dashes “-”.

Instead of: [https://www.w3.org/Consortium/facts.html](https://www.w3.org/Consortium/facts.html)

Use: [https://www.w3.org/about/facts](https://www.w3.org/about/facts)
Use: [https://www.w3.org/about/facts](https://www.w3.org/about/facts)

### Standardise on lower-case URLs

Use lower-case URLs. Implement redirects to send users to the correct URL if they type the URL with upper-case.

Instead of: [https://www.w3.org/Press/](https://www.w3.org/Press/)

Use: [https://www.w3.org/press-releases/](https://www.w3.org/press-releases/)

### Prefer short URLs

Short URLs are better than long URLs.

Instead of: [https://www.w3.org/Consortium/Legal/logo-usage-20000308](https://www.w3.org/Consortium/Legal/logo-usage-20000308)

Use: [https://www.w3.org/get-involved/logos](https://www.w3.org/get-involved/logos) .

### Prefer shallow URLs

We recommend shallow URLs with a minimum use of sub-paths. This helps reduce the risk of changing URLs in the future.

We do not recommend always creating sub-paths in a URL just to reflect the global navigation. Instead, sub-paths should 
only be created where they make sense (e.g. where part of a collection of content and is unlikely to change in the future).

Instead of: [https://www.w3.org/Consortium/membership](https://www.w3.org/Consortium/membership)

Use: [https://www.w3.org/membership/](https://www.w3.org/membership)

Example of a useful sub-path: [https://www.w3.org/groups/wg/css](https://www.w3.org/groups/wg/css)

### Hackable URLs

Generally speaking, any use of URL paths should reflect a hierarchy of content. Therefore, if the user edits (or hacks) 
the URL to remove sub-paths, content should exist at the parent path.

For: [https://www.w3.org/news/2020/page-title](https://www.w3.org/news/2020/page-title)

This page should exist: [https://www.w3.org/news/2020/](https://www.w3.org/news/2020/)

### Use query parameters for filters

Best practise notes that a URL should identify a unique resource.

A common pattern is to use filters to change the content displayed on a page (e.g. filter by category or pagination). 
These can be included in the URL via paths (e.g. _URL/page/2_) or query params (e.g. _URL?page=2_).

Given filters do not create a unique resource and break the hierarchical, hackable nature of URLs we recommend the use 
of query params for filters.

For example, for the TR search page:

[https://www.w3.org/tr?tag=accessibility](https://www.w3.org/tr?tag=accessibility)

[https://www.w3.org/tr?tag=accessibility&status=in-progress](https://www.w3.org/tr?tag=accessibility&status=in-progress)

And for a news listing page:

[https://www.w3.org/news/2020?page=2](https://www.w3.org/news/2020?page=2)

But use a sub-path for an individual news article (which is a resource; these sub-paths identifying a resources are often 
referred to as ‘slugs’):

[https://www.w3.org/news/2020/page-title](https://www.w3.org/news/2020/page-title)

### URLs are public

It should be assumed all URLs are public and must not contain any sensitive or personal information. For any unique 
one-time URLs (e.g. password resets) see [W3C guidance on capability URLs](https://www.w3.org/TR/capability-urls/).


### Simplify URLs for high-level pages

We recommend simplifying high-level page URLs and switching to lower-case. Redirects can be implemented for old URLs.

Instead of: [https://www.w3.org/Consortium/](https://www.w3.org/Consortium/)

Use: [https://www.w3.org/about/](https://www.w3.org/about/)

Instead of: [https://www.w3.org/participate/eventscal](https://www.w3.org/participate/eventscal)

Use: [https://www.w3.org/events/](https://www.w3.org/events/)

### Language-based URLs

Part of this project is to support multiple languages on the w3.org site. W3C is an international organisation who wants 
to be seen to communicate internationally. However, it is not possible to translate all web content and the default 
language for communication in W3C is American English.

We recommend that by default URLs are treated as American English and there is no requirement to add the language code 
to English language URLs.

American English: [https://www.w3.org/press-releases/2020/web-for-merchants](https://www.w3.org/press-releases/2020/web-for-merchants)

The main reasons for this are:

*   Matches current URL structure, so is a pragmatic solution
*   Does not require unnecessary URL changes (e.g. we don’t really want to change the /TR page URL)
*   Avoids an unnecessary technical work to update and redirect a large number of URLs

For pages in different languages, we recommend prefixing the URL pattern with the ISO 639-1 two-letter language code.

Simplified Chinese: [https://www.w3.org/zh/press-releases/2020/web-for-merchants](https://www.w3.org/zh/press-releases/2020/web-for-merchants)

Japanese: [https://www.w3.org/ja/press-releases/2020/web-for-merchants](https://www.w3.org/ja/press-releases/2020/web-for-merchants)

We have recommended translating the URL path too, however, it has been highlighted that it may not be practical.

### Change how year-based URLs are used

Date-based URLs are used inconsistently on the W3C site. While we cannot do a full audit of all pages on w3.org, we 
believe the only current valid use cases for a date-based URL are:

*   Published documents where the published date is relevant, e.g. a technical report [https://www.w3.org/TR/2019/NOTE-turingtest-20191209/](https://www.w3.org/TR/2019/NOTE-turingtest-20191209/)
*   Content that is clearly tied to a date, e.g. a workshop [https://www.w3.org/2020/06/machine-learning-workshop/](https://www.w3.org/2020/06/machine-learning-workshop/)

Generally speaking, if dates are introduced into URLs we recommend keeping them as simple as possible, for example only use the year or year and month.

Instead of: [https://www.w3.org/2003/08/Workshops/](https://www.w3.org/2003/08/Workshops/)

Use: [https://www.w3.org/workshops](https://www.w3.org/workshops)

Example of year-based URL: [https://www.w3.org/press-releases/2020/page-title](https://www.w3.org/press-releases/2020/page-title)

### Groups own a top-level URL space on w3.org

At present [W3C working groups](https://www.w3.org/groups/) use URLs to host content for the activity of that group in 
W3C. This content is distinct from the more general content on high-level pages on w3.org. Examples include:

*   [https://www.w3.org/WAI/](https://www.w3.org/WAI/)
*   [https://www.w3.org/Privacy/](https://www.w3.org/Privacy/)
*   [https://www.w3.org/International/](https://www.w3.org/International/)
*   [https://www.w3.org/WoT/IG/](https://www.w3.org/WoT/IG/)

We recommend each group owns its own top-level URL space. Where possible, convert this to lower-case for consistency.

The WoT example is currently confusing since at present marketing content exists at [https://www.w3.org/WoT/](https://www.w3.org/WoT/) 
and activity content exists at [https://www.w3.org/WoT/IG/](https://www.w3.org/WoT/IG/)  (with a different design).

We recommend avoiding URLs that are very close together that switch design completely, since this can be confusing for 
users.

We recommend moving any marketing content elsewhere and allowing the WoT group to own the URL space [https://www.w3.org/wot/](https://www.w3.org/wot/)

### Consider sub-domains for important pages

Generally, all URLs are on the w3.org domain space. For important pages that make sense to manage separately we 
recommend W3C consider setting up sub-domains for these URLs.

One use case is the system status page at [https://www.w3.org/2003/08/system-status](https://www.w3.org/2003/08/system-status)

This uses a date-based URL, which we recommend against for content pages, and is an important page that users will want 
to refer to regularly. Ideally it would be hosted separately to the main W3C site to avoid being affected by downtime of 
the main site - which it is supposed to report on.

We recommend moving this to an easy-to-remember URL such as [https://status.w3.org/](https://status.w3.org/)

### Where we do not recommend changing URLs

It is not practical to change all URLs on w3.org.

For example, if any of our recommendations clash with an existing 301 permanent redirect we do not recommend changing 
this. Permanent redirects are aggressively cached and are intended to be used for redirects that do not change.

Examples of where we do not recommend URLs are changed:

*   If there is a 301 permanent redirect from the new proposed URL to another URL. If it’s really important to change 
    the 301 redirect, change this to a 302 redirect as soon as possible in anticipation of the permanent change
*   If a URL is used by a group for its website (to host content related to the activity of that group) we’d recommend 
    liaising with the group to decide the feasibility of changing the URL.

### Legacy pages

We recommend legacy page URLs are left as-is. We have recommended in our [IA recommendations](https://docs.google.com/document/d/1qVUWoRqMD95LE9z22dP5hPbToKnRugv4jK83L3pXvts/view) 
adding a banner to legacy pages to indicate they are archived and no longer updated.

## Redirect strategy

### New website URLs

A [log of new site URLs](https://docs.google.com/spreadsheets/d/1a9pm5HWzcidtLPCeFRz4F0Ir4TT3oOK54FlEEd3IXUE/edit) is 
being maintained at Google Sheets. This will act as a guide to URL format and structure until the Beta site is launched.

### Redirects log

The new website structure raises a lot of recommended redirects. Some are simple changes from an old URL to a new one, 
some are patterns (e.g. moving a section).

A [log of redirects to implement](https://docs.google.com/spreadsheets/d/1z_OeCjOQQaZCXTF3ud8-0YqPYoy99MGdNs6BCOwbdsk/edit) 
is being maintained at Google Sheets. Again, this will be maintained until the Beta site is launched.

### 301s and 302 redirects

All recommended redirects should be checked to see if they already have a redirect in place. Given the large number of 
URLs managed at W3C this is a medium risk.

For any 302 temporary redirects these are fine to update.

For any 301 permanent redirects, these need to be reviewed to confirm it is safe to change. If so, they must be updated 
to a 302 temporary redirect as soon as possible - to help the process of updating the redirect in the future.

### Implementing redirects

It is the responsibility of W3C to implement all redirects. Studio 24 will advise on URL structure.

### Managing web redirects

There are a number of different systems currently used to manage redirects. There are currently a large number of 
redirects and rewrites in place, many of which may not even be active because they are superseded by other rules.

The [Technical audit report](https://w3c.studio24.net/docs/technical-systems-audit/#how-urls-and-redirects-are-currently-managed) 
notes the following methods for managing these at present:

*   HAProxy config on the www.w3.org front end
*   Apache config on the web mirrors
*   Apache .htaccess files on the web mirrors
*   Apache/nginx config on backend servers (Symfony, wikis, blogs)
*   The [Web Rewrite tool](https://www.w3.org/admin/webrewrites/list ) is also used to manage redirects. This generates 
    a [map file](https://www.haproxy.com/blog/introduction-to-haproxy-maps/) used by HAProxy to more efficiently manage redirects.

Given the large number of redirects managed at W3C it makes most sense to centralise these in the Web Rewrite tool. This 
would enable adding features such as automated tests to help ensure URLs are robust.

Where complex rules need to be left in server configuration, for example capitalisation rules, ideally these would be 
kept to a minimum so they are easier to manage.

Since there is a large volume of these URLs, any such work would have to be phased. For example:



1. Audit URLs and identify those that can be moved to the Web Rewrite tool
2. Set up automated testing to test the rules currently in place, this will help identify rules that are no longer active
3. Move redirects across to Web Rewrite tool in a number of phases

Implementing this work is outside the scope of the current website redesign project, though Studio 24 is happy to help 
advise where possible.

#### Redirects on the Beta site

While the new site is being tested on the Beta site, it would be useful to test redirects just on the Beta site and not 
on the live Production site.

It may, therefore, be necessary to add a “state” for redirects in the Web Redirect system. This field could have a value 
of “production” or “beta” to indicate where it is used. The default value could be “production” which reflects current usage.

### Testing redirects

Given the huge number of existing redirects it would be useful to develop tools to help test redirects and allow W3C users 
to propose new redirects.

The first step in this is to create a test suite that can be used to test existing redirects before any changes are made. 
This is a good practise, test-driven approach.

We recommend a testing suite that allows to:

*   Test existing redirects, identified by:
    *   A reference to the tool or redirect rule that defines this redirect (so it is possible to identify what config 
        this rule is defined in, in case you it needs to be edited)
    *   Test URLs to test the redirects against where these are expect to go
*   Identify whether a redirect works and point to page content which returns a 200 status code (ideally via one single 
    301 redirect)
*   Identify what system performed the redirect, one way to do this is via adding headers at each point of the system 
    (e.g. [X-Redirect-By](https://developer.yoast.com/blog/x-redirect-by-header/))
*   Identify whether a redirect points to another redirect (not best practise and may be an issue)
*   Identify whether a redirect creates an infinite loop of redirects, this could be defined by over 10 chained redirects
*   Identify whether a redirect points to another error status code
*   Log or notify on any unexpected issue

This would allow validating the current redirects work and identify any issues. This may help to prune the current 
redirect list to remove any unnecessary redirects in the first instance.

If redirects are then moved to a new system, the test suite can be re-run to detect any issues. And it can be run in the 
future to ensure the website and URLs are robust.

W3C have noted they have a [Test Suite](https://www.w3.org/Systems/Testing/) that is used to test URLs, however, this is 
“not used very actively.” We believe a fairly comprehensive test suite is needed before making any wide-ranging changes. 
Studio 24 cannot access this test suite so it is not clear if this just tests URLs or wider services. Our recommendation 
is a dedicated URL testing tool.

Given W3C Systems team’s knowledge of Symfony, one option is using [Symfony HTTPClient](https://symfony.com/doc/current/components/http_client.html) 
which supports concurrent HTTP requests. 
