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

The designs for small (read 'mobile and tablet') screens showed an off-canvas navigation with a button to toggle the display of the parent items. Further toggles were available to provide access to child and grandchild items. On large (read 'desktop') screens, the designs showed the parent items in a single horizontal line and the initial toggle button hidden. The parent items acted as toggles for a single dropdown containing a link to the parent item plus a mixture of child and grandchild items, arranged in three columns.

A hamburger icon was used for the initial state of the off-canvas navigation toggle button. As there is still some discussion around [the affordance of the hamburger icon](https://www.bbc.co.uk/news/magazine-31602745), a text label was included to [improve information scent](https://www.nngroup.com/articles/find-navigation-mobile-even-hamburger/).

### Markup decisions

Before worrying about any styles or interaction behaviour, I needed to nail the underlying HTML markup. Using semantic elements makes those next steps less troublesome, and is the foundation to providing an accessible user experience.

My first decision was an easy one - to use unordered lists. It's a tried and tested solution for website navigation, and lets users of assistive technology know how many items are present. Nested, unordered lists have formed the core of the navigation markup across all four prototypes.

The design showed the navigation behaving in different ways across small and large screens, beyond the off-canvas approach outlined above:

- Grandchild items were collapsed on small screens, yet expanded on large screens
- On large screens, the dropdown had a button to close it that wasn't required on small screens
- The small screen version needed extra buttons to allow users to move between the three collapsed levels of navigation.

So I decided upon having two copies of the navigation markup, one for small screens and one for large screens, and hiding the unused version with the CSS `display: none;` property at the desired viewport breakpoint. This was adding a lot to the HTML, but I felt this would be better than the additional CSS and JavaScript that would be needed to manipulate a single set of navigation markup.

### Thinking about styles

The basis for choosing the viewport breakpoint at which the off-canvas menu was no longer required was not hugely scientific. I took a pixel measurement from the desktop version of the design, converted this to the relative `em` unit and added a bit extra to try and allow for changes in line length for translations from English to other languages.

Using unordered lists for the markup, it was necessary to adjust the CSS to remove the bullet indicators. However, doing so [removes list element semantics](https://www.scottohara.me/blog/2019/01/12/lists-and-safari.html). Because I felt it was important for users to know how many items were in the navigation, I opted to add `role="list"` in conjunction with the `.clean-list` class in Apollo[^1], [^2] on the `<ul>` elements to restore the list semantics.

I opted to use [CSS multi-column layout](https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Columns) as a simple and robust way of creating the three columns needed for the desktop dropdown. I was keen to keep the CSS as light as possible given the amount of HTML.

I won't go into details here, as it is probably worthy of a separate post, but in our [front end standards document](https://w3c.studio24.net/docs/front-end-standards) we agreed to consider internationalization (i18n) in the front-end build. So I needed to use [CSS logical properties](https://rtlstyling.com/posts/rtl-styling#css-logical-properties) where possible and tread carefully when using directional declarations such as `margin-left` etc.

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

Léonie also called out my use of the `event.preventDefault()` JavaScript technique mentioned above, noting that the [links should be buttons as they do not navigate anywhere](https://christianheilmann.com/2019/02/05/links-that-dont-go-anywhere-should-be-buttons/). Full disclosure here: I should not have used this approach. I did it without thinking, having seen other developers do it and knowing that it worked. But that's not respectful to end users - and I hope that by making this point here, it will dissuade others from repeating my error.

Furthermore, Léonie commented on the lack of consistency in navigation behaviour. The decision to have grandchild items expanded on the large screen layout was not in keeping with the earlier convention (on small screens) and made the experience for sighted keyboard users very laborious to navigate between child items. It must be possible to close each layer of navigation using <kbd>Esc</kbd> for the same reason.

The W3C team felt there was a lack of clarity as to what were links, what were headings (there were no headings!), and which links were children/grandchildren on large screens. Where I had duplicated links when the original was being used to toggle a level of navigation, there was concern about the amount of vertical space that was being used. The close button for the dropdown on large screens was not popular, and they echoed Léonie's point about being able to use the <kbd>Esc</kbd> key.

This gave us a plenty of food for thought for the next prototype.

## Version 2

### HTML and JavaScript improvements

From Léonie's feedback on the (lack of) consistency of the navigation and making it more efficient for sighted keyboard users, we decided to leave the grandchild level collapsed on both small and large screens. This meant that I could consolidate the two versions of the navigation markup (one for small screens, the other for large screens) into a single `<nav>` and cut out a lot of repetitive HTML (and fix an error with my list nesting!)

I also refactored the JavaScript to replace any link that would need to toggle a navigation level with a button, and repeat the link within the dropdown to allow users to reach that destination. Support for closing the navigation levels with the <kbd>Esc</kbd> key was added, and the dropdown close button for large screens was removed.

### Switching from multi-column to grid layout

Unfortnately, collapsing the grandchild items on large screens did not work with CSS multi-column layout. Using flexbox wasn't an option; I wanted the list of content to flow naturally across columns, and adding `<div>` elements to try and split things out felt bloated and would have invalidated the markup. So I used CSS grid to arrange items in the large screen dropdown.

Although this created the visual appearance of columns, items were no longer arranged vertically in columns. Now, they were arranged horizontally in rows, with one item added to each column until a row is complete, at which point a new implicit row is added. Additionally, when grandchild items were toggled open in one column, areas of whitespace would appear within the neighbouring columns.

### Feedback on the second prototype

While they felt the navigation worked well on small screens, the W3C team disliked the changes resulting from collapsing the grandchild items and using CSS grid. The visual grouping of related items no longer felt right, and there was concern about the additional step needed to reveal grandchild items. On the previous prototype, it was easy to scan all of the available options in a given dropdown. This was a trade-off against the improvements for keyboard users.

There was some concern about the apparent duplication of items in the menus. A question was raised as to whether this was problematic from an accessibility point of view; this was not the case, as duplicate links were not used (a link was replaced with a button and then re-inserted into the subsequent dropdown).

It was flagged that, in addition to closing the navigation levels with the <kbd>Esc</kbd> key, users should also be able to close the navigation by clicking/tapping outside of the navigation region.

A suggestion to drop the off-canvas navigation and expose the parent items from the outset created some discussion within the W3C team. This contradicted with other feedback to reduce the vertical height of the header region, and was not pursued.

The consensus was that the changes still had not suitably distinguished between child and grandchild items. Additionally, more work was needed to make the large screen dropdown stand out from the rest of the page content, and to highlight the selected `<li>`. The non-JS version of the navigation was also in need of stylistic attention; something that I was aware of but had moved towards the back of my list of priorities.

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
