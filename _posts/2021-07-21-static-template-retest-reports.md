---
layout: post
title: Static Template Retest Reports
categories:
  - Accessibility
  - Test
description: Issues noted in the static template retests for accessibility, browser and device testing 
author: Julia Sang
date: 2021-07-21
thumbnail: /assets/images/img_accessibilty.png
thumbnail_alt: Sketch of a dog with wheels and a harness to aid mobility. The dog is sitting by a hole in the ground and cannot cross over. The hole leads underground to a lake filled with crocodiles. A sign next to the hole says "mind the gap".

---

Recently the [Digital Accessibility Centre](https://digitalaccessibilitycentre.org/) (DAC) completed a restest on updated following their [previous report](/updates/accessibility-round2/).

[Read the DAC test report (DOCX, 612 KB)](/assets/downloads/DAC-W3C-Prototype-Accessibility-Report-Round2-Retest-24-06-2021.docx)

DAC raised 4 issues:
* Carousel - recent changes need to be rolled back (this has been done)
* Search for posts - copy updated needed to be more descriptive 
* Autocomplete form field - this is something we have decided we will not resolve for the following reasons: 
  * It is a usability issue, not an accessibility issue (i.e. it works, just not as well as it should do in Edge) 
  * It is only occurring on the Microsoft Edge browser
  * It uses the same autocomplete as available on the [gov.uk design system](https://alphagov.github.io/accessible-autocomplete/examples/), which is showing the same bug. The example DAC refer us to is this one, although they concede they hadn't tested it previously on Edge, so hadn't spotted the issue
  * We don't have time to rebuild the field and test, but as it still functions, we see it being a low priority anyway
  * We've raised it as a bug with gov.uk in github, if they find a solution it can be brought over to this project in time.
* Link - this is related to the sub-navigation built for groups. The link issue has been raised because the navigation doesn't take you to another page. But when the component is integrated into the group pages, it will, so the issue raised should not be present.


[Zoonou](https://zoonou.com/) also completed a retest of [previously raised issues](https://w3c.studio24.net/updates/compatibility-round2-test-results/). 

[Read the Zoonou test report (DOCX, 953 KB)](/assets/downloads/Zoonou-W3C-Website-test-report-24-06-2021.docx)

There were two remaining issues raised by Zoonou:
* Business – Carousel Does Not Fit on Screen in its Entirety at Once. We will resolve this by introducing a character limit for carousel copy.
* Buttons Have Inconsistent Selected State. The MacOS issue appears to be resolved in Safari v14. In Safari v13 the active state does appear briefly but appears to be overridden almost instantaneously by the hover state if the pointer is still over the button. Overall this feels like a minor issue and we will not address it at this time.
 
