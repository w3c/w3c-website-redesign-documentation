---
layout: doc
title: "Front end standards"
date: "2020-06-12"
updated: "2020-06-30"
categories: [Planning]
description: "The front-end standards we plan to use within the W3C website redesign project are summarised below. Further details on each item appear in this document."
author: Carlos Eriksson, Nicola Saunders
thumbnail: "/assets/images/img-standards.png"
thumbnail_alt: "Sketch of an American Football Placekicker scoring a field goal. The football shows the W3C logo. 'Standards' is written in the end zone."
---

## Executive summary

The front-end standards we plan to use within the W3C website redesign project are summarised below. Further details on each item appear in this document.



*   Performance budget for critical-path resources of no more than 170KB (compressed but not minified) to guarantee a fast website, even on inexpensive mobile devices and slow 3G.
*   Do not minify HTML, CSS or JavaScript to help others read the code and learn from it. This may have a small impact on performance, so we may deliver slightly above this budget.
*   WCAG 2.1 Level AA accessibility at a minimum, with an ideal target of AAA. accessibility wherever possible.
*   Consider internationalization (i18n) in the front-end build, paying special attention to typography, bidirectionality and sizing.
*   We target modern browsers (current stable version and one version before) and Internet Explorer 11 for full layout support. Page content must remain accessible in older browsers, though page layout is not required to be the same.
*   We will use standard HTML5, CSS and JavaScript to build the site, 
*   We use SASS to manage CSS files.
*   We use NPM scripts to build front-end assets. Once HTML build starts we’ll run through this with the Systems Team. It’s been noted they use [Symfony Webpack](https://symfony.com/doc/current/frontend.html) to build front-end assets.


## Page speed (performance)

_“Performance must be as good as or better than the current site.”_

We recommend creating performance budgets: a target for how long a user has to wait before the site is usable, known as [Time-to-Interactive (TTI)](https://web.dev/tti/). We do this through a list of how large each template is allowed to be, grouped by resource-type. We can measure against these budgets during development and aim to stay within them by making decisions that will impact features or page resources.


### Why performance matters

Performance is a fundamental component of the user experience, people are impatient and won’t wait for a slow website. Whilst the idea of an average page is a myth, the reality is that websites are growing larger by the month.

Poor performance results in a decrease in revenue, traffic, conversions, and overall user satisfaction. Case study after case study shows that improving performance, even marginally, will impact the bottom line. The situation is no different on mobile where 71% of people say they expect sites to load as quickly or faster on their phone when compared to the desktop.

A study by Akamai shows that 40% of people will abandon a website that takes more than 3 seconds to load.

The two biggest contributors to slow websites are:



*   Images, which account for 60% (1.8 MB on an average page) of the assets required to display most pages, and are often not resized or optimised for their context.
*   JavaScript which, although smaller in size, has a much bigger impact on performance resulting in pages taking a long time before people can interact with them.


### Your current website

Overall, testing your frequently-visited pages shows that your website performance is in the 90th percentile, with some exceptions*. Your current site takes an average of 2.7 seconds for first-load** which is good.

[https://docs.google.com/spreadsheets/d/1DkTcK024oWhGerYbamHDNObGPWpIPLKjBKyTpCrFGGE/edit#gid=1323628854](https://docs.google.com/spreadsheets/d/1DkTcK024oWhGerYbamHDNObGPWpIPLKjBKyTpCrFGGE/edit#gid=1323628854)


### Our recommendations

We recommend 2.7 seconds for first-load TTI and less than 1 second for subsequent (cached) loads. The Google Lighthouse performance assessment settings are as follows:



*   Emulated Nexus 5X
*   1,600 KB per second link
*   150 milliseconds round-trip-time (RTT)

Using the [Performance Budget Calculator](https://www.performancebudget.io/) with a desired 3 seconds loading time on a Mobile 3G - Fast connection (1.6 Mbps) gives us a **maximum 600 KB budget**.


#### Critical rendering path

We also recommend thinking about the [critical rendering path](https://developers.google.com/web/fundamentals/performance/critical-rendering-path/) of your website: the set of steps browsers must take to convert HTML, CSS and JavaScript into a rendered web page that can be interacted with.

Based on the performance assessment settings suggested in a [real world performance budget](https://infrequently.org/2017/10/can-you-afford-it-real-world-web-performance-budgets/):



*   Moto G4
*   400 KB per second link
*   400 milliseconds round-trip-time (RTT)

With a desired 5 seconds for first-load TTI and no more than 2 seconds for subsequent (cached) loads this equates to a **maximum 170 KB budget **for critical path resources (minified and compressed).

These budgets are split into different resource types (HTML, CSS, JavaScript, images, fonts and video) because they have different impacts on the TTI. Together, we will decide what these splits should be and different templates may justify their own budget splits.

***Note: Some pages, such as [https://www.w3.org/TR/](https://www.w3.org/TR/) has TTI of 10.4 seconds due to a large (over 1.5 MB) HTML resource and could benefit from being paginated.**

****Note: These measurements were made in March 2020 using the Google Lighthouse Tool. The newer [Google Web Vitals Initiative](https://web.dev/vitals/) uses updated terminology and methods, and it may be worth repeating the measurements using this newer set of guidelines.**


#### Additional recommendations

There are many performance improvements which can be implemented on a server and hosting level. These are often one-time tasks with great benefits for your visitors. While some of these recommendations may seem self-evident, an audit of your site shows that these are not currently implemented consistently.



*   Enable text compression (such as [Brotli](https://github.com/google/brotli) with gzip fallback)
*   Properly size images for their viewport context
*   Serve static assets with an efficient cache policy


### How we measure performance

Throughout the development process we measure against these budgets and stay within them by either: 



*   optimising an existing feature or resource,
*   removing an existing feature or resource, or
*   not adding the new feature or resource

We use Google Lighthouse to measure the performance because it gives us standalone documents which are easy to share, and allows for potential future continuous integration (CI).


## Accessibility

_“WCAG 2.1, ideally Level AAA (Level AA as a minimum)”_

The W3C is at the heart of what the web is and does. As such, it is absolutely vital that your website is accessible to visitors of all backgrounds and situations.

Following the core WCAG principles (Perceivable, Operable, Understandable and Robust), our aim is to achieve WCAG 2.1, Level AA plus all Level AAA guidelines that can be reasonably met. Claiming a specific level is less important than making your website the best it can be for your users.

We do not believe that aiming for Level AAA will preclude the use of any common component/User Interface (UI) patterns, but design and functionality will need to be assessed against the [AAA guidelines](https://www.w3.org/WAI/WCAG21/quickref/?currentsidebar=%23col_customize&showtechniques=146&levels=a%2Caa&technologies=smil%2Cpdf%2Cflash%2Csl#hiddensc), such as:



*   Ensuring the size of the target for pointer inputs is at least 44 CSS pixels wide/tall if the target is not within a sentence or block of text, or the size is not determined by the User Agent or modified by the user
*   For text less than 18 point if not bold and less than 14 point if bold, ensuring a contrast ratio of 7:1 exists between text (and images of text) and the background behind the text
*   For text that is at least 18 point if not bold and at least 14 point if bold, ensuring the contrast ratio outlined in the previous point is at east 4:5:1

We will rely on using native and semantic HTML to provide a solid baseline for content and page structure, with a focus on simple and maintainable markup and CSS. We apply a mobile-first approach to build, starting with the single column page structure before considering other layouts. This will ensure the foundation of the site is device-agnostic and machine-readable.

Where interactivity needs to be added to any elements with JavaScript, we will follow [WAI-ARIA established patterns and guidelines](https://www.w3.org/TR/wai-aria-practices/). It is worth noting that, the more interactive elements there are, the more ARIA knowledge will be needed and the more effort required to test those elements.

Accessibility checks will be made in house for each major page component/template during development with reference to the [WCAG Quick Reference Guide](https://www.w3.org/WAI/WCAG21/quickref/), to ensure accessibility is at the forefront of our process from the outset and not a box-ticking exercise later on.


## Internationalisation

The W3C website serves a global audience. Internationalisation features, alongside the accessibility requirements outlined above, are crucial to ensuring a good user experience. We need to consider the following with respect to front end standards:


### Typography



*   Language declarations (in HTML and use of appropriate CSS selectors)
*   Font support for different languages


### Bidirectionality (impacting at both text and layout levels)



*   Declaring directionality within the HTML when we know we are dealing with right-to-left (rtl) text
*   Auto detecting directionality for e.g. user input or data generated from a database (auto value of the dir attribute and use of the bdi element)
*   Default character alignment
*   Ordering of columns in tables, multi-column, flex and grid layouts
*   Scroll direction
*   Use of [CSS logical properties and values](https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Logical_Properties), [directionality-based CSS selectors](https://developer.mozilla.org/en-US/docs/Web/CSS/:dir) and [language-based CSS selectors](https://developer.mozilla.org/en-US/docs/Web/CSS/:lang)


### Sizing



*   Font-size and line-height considerations for character density and stacking of accents above/below characters
*   Managing content of various lengths with font-relative units and intrinsic web design techniques: programming a flexibility model rather than explicit declarations of where elements should sit.

We will pay particular attention to [W3C internationalisation techniques for authoring HTML and CSS](https://www.w3.org/International/techniques/authoring-html) and other resources on [right-to-left styling](https://rtlstyling.com/posts/rtl-styling).


## Browser compliance and support

Whilst acknowledging that we must provide a robust, working site for all users irrespective of device, browser or network conditions, we advise following the current [Government Digital Service (GDS) guidelines on browser support](https://www.gov.uk/service-manual/technology/designing-for-different-browsers-and-devices#browsers-to-test-in):


<table>
  <tr>
   <th scope="col">Operating system</th>
   <th scope="col">Browser</th>
   <th scope="col">Support</th>
  </tr>
  <tr>
   <th scope="row">Windows</th>
   <td>
     <ul>
     <li><del>Internet Explorer 11</del></li>
     <li>Edge (latest versions)</li>
     <li>Google Chrome (latest versions)</li>
     <li>Mozilla Firefox (latest versions)</li>
     </ul>
   </td>
   <td>Compliant
   </td>
  </tr>
  <tr>
   <th scope="row">macOS</th>
   <td>
     <ul>
     <li>Safari 12 and later</li>
     <li>Google Chrome (latest versions)</li>
     <li>Mozilla Firefox (latest versions)</li>
     </ul>
   </td>
   <td>Compliant
   </td>
  </tr>
  <tr>
    <th scope="row">iOS</th>
    <td>
      <ul>
      <li>Safari for iOS 12.1 and later</li>
      <li>Google Chrome (latest versions)</li>
      </ul>
    </td>
   <td>Compliant
   </td>
  </tr>
  <tr>
   <th scope="row">Android</th>
   <td>
     <ul>
     <li>Google Chrome (latest versions)</li>
     <li>Samsung Internet (latest versions)</li>
     </ul>
   </td>
   <td>Compliant
   </td>
  </tr>
</table>




*   **Compliant** means that the website must look as good as it does in modern browsers. Users must be able to access the information they need and/or complete their task without layout issues causing them problems.
*   **Latest versions** refers to the latest stable version and the version immediately before that.

Older browsers will receive a more simplified single column layout, and progressive enhancement will be used to provide advanced CSS and JavaScript to supporting browsers.


### Your current website

<table>
<thead>
  <tr>
   <th scope="col">Browser</th>
   <th scope="col">Usage</th>
  </tr>
</thead>
  <tr>
   <td>Google Chrome (20 latest versions)
   </td>
   <td>53.33%
   </td>
  </tr>
  <tr>
   <td>Mobile Safari 12.1 and later
   </td>
   <td>10.25%
   </td>
  </tr>
  <tr>
   <td>Mozilla Firefox (7 latest versions)
   </td>
   <td>5.67%
   </td>
  </tr>
  <tr>
   <td>Safari 12 and later
   </td>
   <td>3.14%
   </td>
  </tr>
  <tr>
   <td>Edge (8 latest versions)
   </td>
   <td>2.96%
   </td>
  </tr>
  <tr>
   <td>Internet Explorer 11
   </td>
   <td>1.23%
   </td>
  </tr>
  <tr>
   <td>Samsung Internet (latest versions)
   </td>
   <td>0.92%
   </td>
  </tr>
</table>


This browser list is fairly similar to the GDS browser list. However, it is important for us to note that for Chrome, Firefox and Edge your site receives visits from a broader range of versions of those browsers.


_Update: 30 June 2020_

Based on the decreasing usage of IE11 and [Microsoft encouraging its users to use Edge](https://docs.microsoft.com/en-us/lifecycle/faq/internet-explorer-microsoft-edge) the decision has been made not to include IE11 in the list of browsers that we target for the advanced experience. While the website needs to work on IE11, it does not have to be pretty or highly optimised for that browser.