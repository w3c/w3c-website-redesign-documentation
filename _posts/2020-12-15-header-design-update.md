---
layout: post
title: Header Design Update
categories:
  - Design
  - Internationalisation
description: Our updated header design, balancing the many requirements for this
  area of the website.
author: Marie Manandise
date: 2020-12-15T16:16:22.728Z
thumbnail: /assets/images/img-content-management.png
thumbnail_alt: "A person standing on a giant piece of paper with an illustration
  of part of a web page. The person has a rake, and is using it to rake the
  content to make it look neater. "
---
# Revising the header area layout

## The process

At the end of November we sent our first [full template designs](/updates/designs-for-the-default-landing-and-business-templates/) to W3C for  their feedback, along with the prototype of the [main navigation](/updates/prototyping-the-main-navigation/). 

We collated all feedback and recommendations regarding the ‘My account’ menu, the language controls, beta banner and overall look-and-feel of the header. We looked more closely at internationalisation, reviewing the Web Accessibility Initiative (WAI) [translation recommendations](https://www.w3.org/wiki/WAI_Translations) to include as many as possible. And we updated the header area design in response. 

For each design presented here, we described (some of) the users we had in mind when making choices, particularly regarding internationalisation. We kept accessibility and usability in mind throughout the process.

These designs are the result of putting all these considerations together. This means we had to make compromises between some items of feedback and other, more general rules. They are now back with the W3C team for review and feedback. 

Finally, apologies for inaccurate translations! We’ll be working on that!

## Scenario 1

This is a page in French. It is available in English, Simplified Chinese, and French. We are viewing it on a medium screen.

[View the design to illustrate scenario 1](/designs/medium-french/)

### The main language selector

The first piece of content you see on the page in the top bar. 

All languages are listed here, whether the current page exists in the target language or not.

If the current page is not available in a target language, “Homepage” is added next to that language to indicate the user will be redirected to the homepage in that language if they click the link.

If I am a Japanese speaker, I am made aware that there is content in Japanese despite the fact this page is not available in Japanese.

### The language selector for the current content

Situated under the page title, before the page contents. 

Lists only the languages in which this particular page is available.

If I am using a screen reader and jumped to the content using a ‘Skip to content’ link, I can still switch to a version of this page in another language.

## Scenario 2

A page available in English only, viewed on desktop, with the beta banner added to it.

[View the design to illustrate scenario 2](/designs/header-wide/)

## **Scenario 3**

This is a page in English. It is available in English only. We are viewing it in a small screen. The language of the browser is set to French.

[View the design to illustrate scenario 3](/designs/header-mobile/)

### The main language selector

The second piece of content you see on the page, under the beta banner

Due to a lack of space, the language selector is a drop down. We labelled it with an icon. The icon contains a roman and chinese character. To follow accessibility guidelines, the icon is accompanied by a text label.

If I am a non-English speaker (and maybe don’t use the roman alphabet), I am likely to understand the icon as it contains characters from different alphabets. There is a chance that I know a bit of English and therefore know the meaning of the word ‘language’

### The browser language detection

The blue box at the bottom of the design.

This is our answer to content negotiation. We looked into it and thought there were too many scenarios in which the browser language did not correspond to  the user’s preferred language.

Here the page is in English but the browser language is set to French. I am prompted to switch to French, or ignore. (The copy reads “Your browser language  is set to French. Switch to French. Ignore (Don’t switch to French)”.\
\
If my preferred language is French, I can switch to French. There is a label that indicates I will be redirected to the homepage in French (and not this particular page).\
\
If I am an English speaker using a browser set to French (I just moved to France and bought this mobile device and haven’t worked out how to switch to English yet), the last phrase tells me what this control is about and how to get rid of it.\
\
This message only appears once.

## The account menu

[View the design to illustrate the account menu on a medium screen ](/designs/medium-account-menu/)

[](/designs/medium-account-menu/)As a user logged in to my W3C account, I can click on the ‘My account’ link and see a drop down menu with:

* My name
* My email address
* A link to my account
* A ‘Log out’ link

In this case, I didn’t upload a photo for my avatar, so the first letter of my name appear in the disk next to ‘My Account’

If the user had uploaded an avatar, it would appear instead.

If the user is not logged in, a ‘default’ avatar is displayed. Clicking ‘My Account’ redirects the user to the W3C account page (<https://www.w3.org/users/myprofile>) which will prompt the user to log in.

## What did not do, and why

### Remove text next to icons (icons are self-explanatory)

This goes against accessibility guidelines which state that icons alone can be too ambiguous. It's important not to rely on visual cues only. There is an exception for (strong/familiar) brand icons (e.g. the Twitter icon in the footer). The logic being 'if you know the name, you will know about the logo/icon'.

In the case of the language dropdown label on small screens, we do understand it is only readable by users who understand the currently displayed language. We are therefore making a compromise with accessibility considerations by keeping the label. We assume that most non-English native users are likely to have English as a second language, are most likely to land on the English website first and therefore will be able to understand the 'Language' label.

### Display language in the current language between brackets.

E.g. if I am viewing a page in French the menu should read: 

* English (anglais) 
* Francais (francais) 
* 日本語 (japonais)

We considered this but decided against it for two reasons: 

* We already need to add "Homepage" next to the language when the currently viewed page is not available in the target language; adding the language translation after that takes too much space
* We privileged making room for the "Homepage" labels rather than the translation of the language as we think that information is more valuable. 

### Add the language navigation next to the main navigation or as part of it

Unfortunately, there isn't enough room in that area of the header. Otherwise the font size of the main navigation would have to be reduced significantly, which would lead to accessibility issues. Alternatively the breakpoint for the desktop version of the header would have to be pushed to a very large screen width.

Also, it is recommended that the language navigation be as high as possible on the page.

### Adding a site-wide search functionality to the header - or anywhere on the site.

We strongly recommend against this while the search engine remains as DuckDuckGo.

We recognise the search is currently an important feature of the site, because due to the poor site IA it is the only way users can find information. A lot of work has been done in this project on the website structure and the main navigation in order to make navigation clearer - and content easier to find.

While there still may be a use for site search, the only potential option as part of this project phase is to redirect users to the existing search engine - DuckDuckGo. However we think this is a poor user experience and recommend against it.

Instead our recommendation is to go live with the revised site IA, and review the requirements for a site-wide search as part of a future project phase.

Note: listing pages do have a search feature for relevant content, such as news, events and TR pages.

### Labelling English as the original language

From <https://www.w3.org/wiki/WAI_Translations>:

This will not always the case here; some content is local to a particular language (does not have an EN translation). We are also already adding the language name in the current language between brackets, adding yet another piece of content could get cluttered and confusing.