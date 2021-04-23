---
layout: post
title: Accessibility testing - round 1 retest
categories:
  - Accessibility
  - Test
description: Results from the retest and notes on what we didn't do, and why
author: Julia Sang
date: 2021-04-23
thumbnail: /assets/images/img_accessibilty.png
thumbnail_alt: Sketch of a dog with wheels and a harness to aid mobility. The dog is sitting by a hole in the ground and cannot cross over. The hole leads underground to a lake filled with crocodiles. A sign next to the hole says "mind the gap".

---

This week, the [Disability Accessibility Centre](https://digitalaccessibilitycentre.org/) (DAC) completed a retest on the first three static templates, following their [initial testing.](/updates/accessibility-testing-round1/)

Nicki worked through the report and updated areas of code to address the issues (a few notes on this can be read below).

Read the retest report

There were four issues flagged in the report:

* 1 needs to be addressed regarding the carousel 
* 2 are content-related and will be resolved when there is real, content in the site
* 1 is related to the navigation, which is not actually ready for testing yet (although it’s great to know the rest of the navigation doesn’t have issues!) 

## Areas noted in discussions on best-practice with DAC

### Studio 24 comments: 

**Non-descriptive links 1**
We don't think it is necessary to add the dir attribute to the language option links. This is already defined on the <html> element and does not need to change direction for Simplified Chinese or Japanese.

**Decorative images**

To confirm, the image is being used purely as an example for the prototype. It will be the responsibility of the W3C site editors to choose appropriate alt text for images, or to leave an empty alt attribute in the case of decorative images.

**Changes in text presentation**

The <em> and <strong> elements are not commonly announced unless one very specific settings are enabled on screen readers. They are semantic HTML elements and do not require further treatment with e.g. hidden text as suggested. However, we will flag this to the W3C site editors and ask them to bear it in mind and consider alternative means for flagging important content by making use of e.g. headings.



### DAC response: 

>  I agree with the feedback below hence why a lot of my issues were under usability.

 

---



### Studio 24 comments:

 **Incorrect use of ARIA**

As per Adrian Roselli’s advice on responsive tables (https://adrianroselli.com/2020/11/under-engineered-responsive-tables.html), I am not removing the role, aria-labelledby or tab index attributes. These are required in the event that the table needs to scroll horizontally if the table is wider than its parent container. However, I am updating the JavaScript to completely remove all of these attributes if there is no overflow detected.

**Reflow**

As per the same article from Adrian Roselli mentioned under “Incorrect use of ARIA”, the current markup and styling should satisfy the WCAG SC 1.4.10 Reflow (AA) by preventing the entire page from having two axes of scrolling (big table, small viewport). I do not think there is a lot more that can be done on this.



### DAC response:

>  I’m still not 100% with the role of “group” though as this is semantically incorrect, and having the label the same as the table caption is a little confusing and should be more descriptive, like “Scrollable region for table: Members of the Spice Girls”. This can be done using an aria-label=”Scrollable region for table: ”, and an ID (e.g. “unique-caption-id-region”) on the “region”, plus the addition to the aria-labelledby, “unique-caption-id-region unique-caption-id” (pointing to itself), this then will be more descriptive.
>
> * The role is semantically incorrect, could you use role of region?
> * The label of the region should be more descriptive I feel, explaining to screen reader users what it is for.

 

### **Studio 24 response:** 

> The role has been changed to “region" instead of “group" for the re-test and we will have a further think about the aria labelling.
