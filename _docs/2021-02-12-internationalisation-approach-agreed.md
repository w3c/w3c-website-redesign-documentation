---
layout: blog
title: Internationalisation approach agreed
categories:
  - Internationalization
description: Read about the agreed approach for internationalization on the new W3C website.
author: Simon Jones
date: 2021-02-12T09:05:00.451Z
updated: 2021-02-12T09:05:00.475Z
thumbnail: /assets/images/img-i18n.png
thumbnail_alt: Illustration of a person holding to her ear a tin can with a
  string attached leading away from her. Coming from the line of the string are
  letters in many different alphabets.
---
## Internationalization

The W3C website serves a global audience. Internationalization features, alongside the accessibility requirements, are crucial to ensuring a good user experience. Our approach to supporting localized content on the W3C website is detailed in this section.

### Different types of localized content

Localized content is presented to the user in a number of ways:



1. Localized websites: a website in a local language which contains a range of pages and translated content.
2. Translated pages: only specific content items are translated (e.g. a Press Release or Specification).
3. In-page localized content: where translated content is included on a page which is made up of a different language (e.g. a Testimonial).

#### <a name="localizedwebsites"></a>Localized websites

Initially, W3C plan to manage localized websites for the following languages: 



* English (American English)
* Chinese (Simplified Chinese)
* Japanese



More languages can be added in the future, but it is not anticipated that W3C will have a large number of different localized websites supported.



American English is the default language for the website and this will form the main W3C website.



Each localized website will have its own sitemap, some items of content will match between various languages (translated content), some items of content will be specific to a language. 

##### A note on content negotiation

Please note this approach matches the current usage more accurately and offers a localized country site for users. It does, however, mean we cannot easily use content negotiation to serve pages since we have multiple sites rather than one site whose content is entirely translated in all available languages.



Given only part of the site will be translated, rather than the entire site, having separate localized sites seems a more sensible option.



It is also [better for SEO](https://help.localizejs.com/docs/search-engine-optimization-seo) to have unique URLs for each language.



However, we wanted to note we are aware W3C is very keen on [content negotiation](https://www.w3.org/International/questions/qa-when-lang-neg.en). We do not think this would work well in practice considering the structure of the W3C website in the different languages.

##### Expected navigation

It is expected that localized websites will contain a subset of content from the main W3C website. We expect these sites to contain:



* Homepage
* Top navigation links (e.g. Standards)
* News (translations of W3C news where available, it is unlikely this will cover all news items due to available time & resources)
* Local pages, not on the main w3.org site (e.g. local news, contacts page)
* Navigation links may direct to English-only pages (e.g. TR page), when this happens the menu item should indicate the language. We recommend W3C adds the language code after the menu link to indicate this (e.g. ‘\[EN]’). 
* In addition Studio 24 will add a new content field to navigation for “Target page language” which can be used to set the target page language for menu links. From this we can automatically set the correct “hreflang” attribute in HTML.

#### Translated pages

W3C also manages localized content for individual pages, the two most common examples are Press Releases and Technical Reports. This content does not require a full localized site, but will still be available on the new W3C site.



Where a page has a translated version we plan to highlight this on the page, see [This page is also available in another language](#anotherlanguage).

#### In-page localized content

##### Member Testimonials

We expect to have some translated testimonials that are displayed on the English website. This content will be retrieved and displayed in the web pages automatically. The required “lang” attribute will be added to its containing HTML element.

##### Other in-page localized content

It will be possible for W3C to manually add localized content into pages in the CMS.

### User experience

#### Provide links, not automated translations

We do not plan to use content negotiation to automatically direct users to a translated piece of content (as noted above in [localized websites](#localizedwebsites)).



There are many use cases in which the language defined in the browser is not the user’s preferred language, for example:

* User may be using another computer (e.g. web cafe, public terminal) so redirecting to the browser’s default language is inappropriate
* User speak English as a second language and may prefer to view the English page which has more content,
* User doesn’t know how to defined their browser’s language

#### <a name="anotherlanguage"></a>This page is also available in another language

Where individual pages are translated a message will be displayed on the page to state this page is available in other languages with direct links to those pages. This message will appear near the top of the page main content (under the page title) to ensure it is easy to find, including for users who are jumping to the content via the ‘Skip to content’ link.



Where individual pages are not translated this message will not appear.



We’ll use the “hreflang” attribute to indicate the link target language.

#### Adding translations information to listing pages

We recommend adding links to listing pages to indicate content is also available in different languages. For example:



* Available in: Italiano (Italian), 简体中文 (Simplified Chinese), dansk (Danish), Nederlands (Dutch), suomi (Finnish), 한국어 (Korean)

We recommend this for the Technical Reports listing page and Press Releases listing page.

#### Language website links

All pages will contain links to localized website homepages, at the top of the page. 

### Craft CMS approach

Localized content will be set up as a separate site in Craft CMS. This helps us achieve the following:



* Have translated versions of pages in a local language (e.g. a Press Release translated in Chinese).
* Have independent pages in the local language website (e.g. a local event only available on the Chinese website).
* Have different primary navigation, if required, on a local language website. Please note not all languages will include this, we only plan for Chinese and Japanese to have a full localized site at launch.



The primary way to translate content will be to have a localized page on the local country website.

#### In-page translated content

It will also be possible to add translated content in a different language. On the front-end this will be marked up in the appropriate language.



When in-page translated content is inserted automatically (e.g. Member testimonials), the appropriate language attribute will be automatically added to its HTML container element.



Where it has to be added manually, it will be possible to use the WYSIWYG editor in ‘HTML mode’ to manually add the language attribute. 



#### Managing localized content in the CMS

We will ensure it is straightforward to see a list of translated pages so CMS editors can manage this content.



However, it is not possible to flag up which translated pages need updating when the source page (English) is updated. 

### URLs

#### Languages

American English will be set as the ‘default’ site appearing directly under the base URL [www.w3.org/](http://www.w3.org/) 



Other languages will appear under a ‘subfolder’ using the two-character ISO code for languages:

* The Simplified Chinese site under [https://www.w3.org/zh/](https://w3.org/cn) 
* The Japanese site under [https://www.w3.org/ja/](https://w3.org/ja)



Languages that do not have a full localized site, but do have translated content, will use the same URL structure. For example:



* French pages [https://www.w3.org/fr/](https://w3.org/fr)



##### Languages without a full localized site

We recommend for languages without a full localized site (e.g. French) that the homepage URL has a temporary redirect to a suitable location (e.g. a content page detailing what content W3C publishes in different languages). 



#### Base URL

The base URL for the default language, American English, is [www.w3.org/](http://www.w3.org/) 



We are retaining the existing URL for the English site for a number of reasons:



* Matches current URL structure, so is a pragmatic solution
* Does not require unnecessary URL changes (e.g. we don’t really want to change the /TR page URL)
* Avoids an unnecessary technical work to update a large number of URLs



There is a risk a user may create root-level web pages in Craft CMS that cannot be served (since only required root paths will be served by the front-end application). To mitigate against this, Studio 24 will explore whether its possible to write a small plugin to add a warning message to any pages that have invalid root path URLs.



#### Path URLs

Each local website can have its own URL structure, however, it is recommended to follow the conventions from the American English site. 



For example, if an English news article has a URL of <https://www.w3.org/en/blog/2020/strategic-highlights> the French translation would have a URL of <https://www.w3.org/fr/blog/2020/strategic-highlights>



Studio 24 originally recommended translating slugs, though it was felt to be too complex and may cause technical issues with logging. It is possible to translate URL slugs in the CMS if you wish to do so.