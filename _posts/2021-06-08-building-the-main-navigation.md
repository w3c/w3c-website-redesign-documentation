---
layout: post
title: Building the main navigation
categories:
  - Prototyping
  - Accessibility
description: A review of the main navigation front-end build, from first prototype to client sign off.
author: Nicola Saunders
date: 2021-06-08
---

In autumn 2020 I started the front-end build of the main navigation prototype for the W3C website redesign. Nine months and four versions later, an approved prototype is ready for CMS integration. Here I document the decisions and processes made along the way.

## Version 1

The draft sitemap at the time had three levels of items, and this formed the basis of the [first version](https://w3c-dev.studio24.dev/navigation-v1/index.html) of the navigation.

The designs for smaller (read 'mobile and tablet') screens showed an off-canvas navigation with a button to toggle the display of the parent items. Further toggles were available to provide access to child and grandchild items. On larger (read 'desktop') screens, the designs showed the parent items in a single horizontal line and the initial toggle button hidden. The parent items acted as toggles for a single dropdown containing a link to the parent item plus a mixture of child and grandchild items, arranged in three columns.

A hamburger icon was used for the initial state of the off-canvas navigation toggle button. As there is still some discussion around the affordance of the hamburger icon, a text label was included for clarity.

### Markup decisions

Before worrying about any styles or interaction behaviour, I needed to nail the underlying HTML markup. Using semantic elements makes those next steps less troublesome, and is the foundation to providing an accessible user experience.

My first decision was an easy one - to use unordered lists. It's a tried and tested solution for website navigation, and lets users of assistive technology know how many items are present. Nested, unordered lists have formed the core of the navigation markup across all four prototypes.

The design showed the navigation behaving in different ways across small and large screens, beyond the off-canvas approach outlined above:

- Grandchild items were collapsed on mobile, yet expanded on desktop
- The desktop dropdown had a button to close it that wasn't required on mobile
- The mobile version needed extra buttons to allow users to move between the three collapsed levels of navigation.

So I decided upon having two copies of the navigation markup, one for small screens and one for large screens, and hiding the unused version with the CSS `display: none;` property at the desired viewport breakpoint. This was adding a lot to the HTML, but I felt this would be better than the additional CSS and JavaScript that would be needed to manipulate a single set of navigation markup.

### Thinking about styles

The basis for choosing the viewport breakpoint at which the off-canvas menu was no longer required was not hugely scientific. I took a pixel measurement from the desktop version of the design, converted this to the relative `em` unit and added a bit extra to try and allow for changes in line length for translations from English to other languages.

Using unordered lists for the markup, it was necessary to adjust the CSS to remove the bullet indicators. However, doing so [removes list element semantics](https://www.scottohara.me/blog/2019/01/12/lists-and-safari.html). Because I felt it was important for users to know how many items were in the navigation, I opted to add `role="list"` in conjunction with the `.clean-list` class in Apollo[^1], [^2] on the `<ul>` elements to restore the list semantics.

I opted to use [CSS multi-column layout](https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Columns) as a simple and robust way of creating the three columns needed for the desktop dropdown. I was keen to keep the CSS as light as possible given the amount of HTML.

I won't go into details here, as it is probably worthy of a separate post, but in our [front end standards document](https://w3c.studio24.net/docs/front-end-standards) we agreed to consider internationalization (i18n) in the front-end build, paying special attention to typography, bidirectionality and sizing. So I needed to use [CSS logical properties](https://rtlstyling.com/posts/rtl-styling#css-logical-properties) where possible and tread carefully when using directional declarations such as `margin-left` etc.

### Adding JavaScript for interactions

I used [event delegation](https://gomakethings.com/checking-event-target-selectors-with-event-bubbling-in-vanilla-javascript/) to handle the toggling of off-canvas navigation and the various sub-levels. This is more performant than using multiple event listeners on individual elements.

While I did use a button to toggle the off-canvas navigation, I used `event.preventDefault()` as a familiar approach to prevent the click event on navigation links that needed to act as toggles for the sub-levels. As you will see, I now know better!!

### Feedback on the first prototype

[Léonie Watson](https://twitter.com/LeonieWatson) was among the people asked to take the prototype for a test-drive, and I am extremely grateful for her feedback.

I had used a combination of `aria-labelledby` and visually-hidden text to label the `<nav>` element. Léonie pointed out that this was resulting in screen readers announcing:

"Main navigation region"
"Main"
"List of 7 items"
...

Her recommendation was to use `aria-label` instead. Knowing that the site will be translated in the future, I thought it would be better to [avoid using `aria-label`](https://adrianroselli.com/2019/11/aria-label-does-not-translate.html). After mulling things over for a while, in the final navigation prototype I decided to follow Léonie's advice. We will be providing a list of all strings that will need to be translations, so this should not be overlooked.

Léonie also called out my use of the `event.preventDefault()` JavaScript technique mentioned above, saying that the [links should be buttons as they do not navigate anywhere](https://christianheilmann.com/2019/02/05/links-that-dont-go-anywhere-should-be-buttons/). Full disclosure here: I should not have used this approach. I did it without thinking, having seen other developers do it and knowing that it worked. But that's not respectful to end users - and I hope that by making this point here, it will dissuade others from repeating my error.

Also: "Where there are further layers of the navigation they need to behave in the same way as the parent/child layer. At the moment grandchild layers of the navigation are automatically expanded (on desktop), breaking the earlier convention (on mobile). This makes the experience for sighted keyboard users very laborious if the part of the nav they want is on the other side of the expanded grandchild layers.

It must be possible to close each layer of the navigation using the escape key for the same reason."

Not clear that the child links were links and not just headings.

Didn't like the addition of the close button in the desktop dropdown. And menu should be closable using the Esc key.

Suggestion to move the back button in the mobile child/grandchild menus to sit below the list of links (where did this come from again?)

## Version 2

Removed close button from desktop dropdown. Moved back buttons in mobile menu from top to bottom.

Added Esc key menu close functionality.

Collapsed the grandchild level links in the desktop dropdown to make it easy for keyboard users to skip over them to get to next child link. Was able to use same markup for both mobile and desktop now that behaviour was consistent. But the requirement to collapse links within the desktop dropdown necessitated dropping CSS multi-column technique. Went with CSS grid instead to maintain 3-column presentation.

Didn't like that this resulted in order of links going horizontally rather than in vertical columns. Concern expressed over repeating of child link since the original link was now converted to a toggle button. Also concern regarding extra click needed to toggle grandchild menus on desktop now no longer expanded by default. Visually could no longer see at a glance what sprt of content was within grandchild sections.

Feedback that dropdown should also close if a click event happens outside of it (in addition to using the Esc key).

Request for expanded desktop navigation to standout more from the rest of the website. Also to add a highlight to the appropriate parent item when the dropdown is open (on desktop).

Feedback from some W3C team members suggested exposing the parent items by default on mobile and dropping the off-canvas approach. However, this contradicted other feedback asking for the depth of the header region to be reduced as much as possible.

Request to address styling of basic navigation (non-JS version).

## Version 3

Reverted to CSS multi-column. Grandchild links automatically expanded on both mobile and desktop for a consistent experience.

Relocated back button in mobile menu.

Menu highlight added

Sub menus close if user clicks outside of navigation.

Used varying font sizes and indentation to try to better distinguish child/grandchild links.

Refined the styling of the non-JS version of the navigation. I made decision to only show parent links and hide other links. Should be possible to reach other content from landing pages. No objections raised.

Site map had continued to change while navigation was being prototyped. To help with the review of this version of the navigation, W3C updated the nav to match the planned sitemap contents, prior to internal review.

Most of the feedback W3C received indicated that they found the child/grandchild menu hierarchy confusing and hard to understand and scan on desktop. Further concerns about links being repeated where orginals were replaced with buttons. Mobile nav considered to work well.

Too many items in the dropdown making it hard to scan. Agreed a pause on navigation iterations until site map finalised.

Proposal to have desktop dropdown triggered on hover.

Concerns about use of inline SVG and verbosity of markup.

## Version 4

Cut down number of items listed. Only two levels of links provided rather than three.

Focus on improving visual styling of desktop dropdown. Make link to landing page clearer. Addition of intro text snippet (hidden on mobile to save space) explaining the sort of content linked to from the dropdown.

Improved navigation toggle functionality thanks to Adrian Roselli's article about [disclosure widgets](https://adrianroselli.com/2020/05/disclosure-widgets.html). Was able to trim CSS and JS by dropping aria-hidden.

Changed technique for SVGs to make use of `<use>` element to make the markup less verbose. Results in an additional http request for the file, but the file is cached.

## References

[^1]: [Apollo v2 website](https://apollo.studio24.net/)
[^2]: [Apollo v2 GitHub repo](https://github.com/studio24/apollo/tree/apollo-v2)