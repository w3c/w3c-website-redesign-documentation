---
layout: doc
title: "Choosing a front end framework"
date: "2020-06-02"
categories: [Front-End]
description: "A summary of W3C's requirements for a Front-End CSS framework to build w3.org and Studio 24's recommendations."
author: Nicola Saunders
---

A key requirement of the W3C website redesign is the ability for the W3C Team to be able to maintain their website and 
build new web pages on an ongoing basis. This has a key bearing on the choice of front end framework used for the redesign.

There are two groups of thought on this:

1. Using an existing front end framework (Bootstrap being the most likely choice)
2. Using a custom-built framework (Apollo by Studio 24)

Existing front end frameworks, such as Bootstrap, provide the ability to quickly create common UI elements with a 
consistent look and feel, and offer plenty of documentation and community support. However, they often bring with them 
a sizeable codebase which can have a negative impact on performance. Studio 24 has also developed alternative approaches 
using our Apollo CSS framework, or set of patterns, to build client projects with.

This document seeks to present the pros and cons of Bootstrap and Apollo, to help the decision-making process. 
Ultimately, whatever works best for the W3C team is the right approach to take, especially where wider team buy-in is 
required.

## Bootstrap

Bootstrap[^1] is a large framework catering for the needs of a vast range of websites, from blogs to tech startups to 
massive enterprises. It has been around since 2011, has had over twenty releases, and is used on thousands of websites 
worldwide. It came at a time when developers were first getting to grips with responsive design, and when there were 
large differences between browsers.

### Pros of using Bootstrap

#### W3C team familiarity
The W3C team is already familiar with using Bootstrap.

#### Lots of ready-made components and example templates
Bootstrap has a gallery of components and example templates, with blocks of code that can be copied and pasted into 
projects. This should make it easier for the W3C team to maintain their site going forwards.
 
#### Good documentation
The Bootstrap site provides detailed documentation on each aspect of the framework, together with notes on implementation, 
accessibility concerns, potential CSS bugs and links to external references.

#### Plenty of online tutorials
Given its popularity and longevity, there is no shortage of online resources for learning how to use Bootstrap and extend 
it in customised ways. It should be reasonably simple for somebody with minimal front-end experience to pick up and use.

#### Strong community support
Bootstrap enjoys immense support from the global developer community. There is a level of reassurance that, in the case 
of encountering an issue with Bootstrap, somebody else will have already found a resolution. If not, it is easy to reach 
out to others for support.
  
### Cons of using Bootstrap

#### Anticipated increase in Studio 24 development time
We expect that Studio 24 development time will be increased when using Bootstrap. This is due in part to our familiarity 
with Apollo as compared to Bootstrap, however, we also anticipate the need to strip back/override Bootstrap and this 
will introduce an additional overhead [^2]. 

#### Anticipated lack of flexibility
Studio 24 has used frameworks such as Foundation in the past and found them to impose limitations on our creativity and 
what we can deliver for clients. It's not possible to know for sure if this would be an issue with Bootstrap and W3C but 
it's one of the reasons we decided as an agency to develop our own CSS tools to build client sites with. 

#### Large codebase
Often with frameworks like Bootstrap, while a lot of the CSS required to make a specific component could be re-used to 
make other components, instead it becomes tied to the namespace for a very specific use case. Styles that could readily 
be shared are instead duplicated, further adding to the codebase.

The minified CSS for version 4.5.0 of Bootstrap is 160KB, while the minified JavaScript is 60KB. The minified version of 
the latest jQuery, which is a dependency of Bootstrap, comes in at 80KB. 

The larger the file size, the heavier the download cost for end users, but the time it takes for a device to parse the 
downloaded files should also be taken into account [^3].

Studio 24 would look to strip back Bootstrap to a basic level, which would lower the file size, and using gzip would 
further reduce file size.

#### jQuery dependency
It is the opinion of Studio 24 that most of the common use cases for jQuery are now covered by modern web APIs. 
Selecting/removing DOM elements, adding/removing classes, changing content and AJAX requests can all be managed via 
vanilla JavaScript [^4].

#### Harder to keep pace with the latest front end technologies
Because of the size and scale of Bootstrap, it understandably takes longer to safely integrate the newest front end 
techniques. For example, the current Flexbox spec has been fully supported in all modern browsers, including mobile, 
IE11 and Edge, since August 2015 [^5]. The first stable version of Bootstrap with Flexbox support was released in 
January 2018.

## Apollo

The first version of Apollo was released in 2017. It was developed by Front-End Developer and Accessibility Lead, 
Carlos Eriksson, “with performance and accessibility as first-class passengers”.

Version 2.0 of Apollo[^6] has been in development since autumn 2019, led by Front-End Developer Nicola Saunders, and is 
approaching its initial release[^7]. There are currently areas that remain a work in progress - most notably the organisation 
and inclusion of JavaScript, and updating documentation. 

Apollo is not trying to be comparable to Bootstrap. Less of a framework and more of a layout system, it provides a solid, 
minimalist starting point for Studio 24 project work and is quick for us to tailor to individual client needs.

### Pros of using Apollo

#### Anticipated development efficiencies

Given Studio 24’s familiarity with Apollo, and that it will be carefully and considerately extended to meet the specific 
needs of the W3C, we believe it will be quicker and more efficient for Studio 24 to work with than Bootstrap.

#### Increased flexibility

Studio 24 can essentially change any aspect of Apollo as needed for this project.

#### Performance gains

Apollo has been heavily influenced by the Every Layout[^8] project and techniques used in the Springer Nature Front End Playbook[^9]. 
Starting from a semantic HTML base, it is largely a collection of informed layout “primitives”, which can be combined 
and composed in multiple configurations to create discrete components and larger templates.

By focusing more on reusable layout “primitives”, and leaning on the power of the CSS cascade, inheritance and what 
modern browsers offer by default, Apollo aims to be leaner than Bootstrap. This should give an inherent boost to performance.

#### Uses modern CSS and web APIs

Apollo uses Flexbox, CSS Grid and CSS logical properties. Being smaller than Bootstrap, it is more flexible at testing 
and incorporating cutting edge front end technologies. It would be nice to see these being used on the W3C site.

### Cons of using Apollo

#### Not a well-known framework with large community support

Apollo has been used by the studio to deliver projects for a wide range of clients, but as a primarily internal tool it 
does not have the level of global developer adoption and support that Bootstrap has. This may be a cause for concern. 
To mitigate this, Studio 24 has released Apollo as an open source project and will be continuing to develop and maintain 
it via other client projects we work on.

#### Not as comprehensive as Bootstrap

Indeed, Apollo is not aiming to replicate Bootstrap. It does not provide a direct cut-and-paste library of components 
and templates. However, as noted in the ‘pros’ above, this also means the code size is smaller and more performant. 

#### Anticipated expense of the W3C team having to learn how it works

Given all of the above, it is likely that the W3C team will have to (re)learn certain aspects of HTML/CSS/JS to become 
familiar with how Apollo works and what it can achieve. This may not be desired, and it may be preferable to stick with 
something that the team is comfortable with.

## Responses to questions

_Updated: 4 June 2020_

From our agency-perspective, Studio 24 would prefer to work with Apollo, but we understand if the need to use a standard 
tool such as Bootstrap is required and we'll work with this if it's the better option for W3C. 

### What’s the ETA regarding Apollo 2?
Our first Beta version is available now. There is still some work in progress, as mentioned above. Our intention is to 
do the final polishing and documentation on the first project we use with Apollo v2, which we're hoping will be W3C.

### If we go with Apollo, will you use Apollo 1 or Apollo 2 for the redesign?
Apollo 2.

### How often do you release new minor versions of Apollo? How can we keep track of that? By subscribing to the GitHub repo?
We will look to release minor versions as and when we need to during client projects. We expect that to be around 2-4 
releases a year. We plan to ensure backward compatibility and will start a changelog file if there are any important notes to 
be aware of between versions. Yes, you can keep track of this by watching for new releases via GitHub.

### What is the upgrade path when new versions of Apollo are released? Do you follow semantic versioning to ensure backward 
compatibility between minor versions?
Apollo 2 will follow semantic versioning[^10].

### Related to the previous questions, does the upgrade from Apollo 1 to Apollo 2 require a lot of changes in the templates?
We don't plan to use Apollo v1 for W3C so this shouldn't be an issue. Apollo v2 is a complete overhaul so it's not really 
intended to upgrade from v1. We may create an upgrade guide for our own team to help on other projects.

### How does Studio 24 handle requests from former clients for new components?
At a minimum we'll certainly respond and try to help where we can. If the request aligns with current work we're doing, 
or exists in another client project we've worked on, we're happy to share code for this and add it back to Apollo. Our 
normal policy if we need to do new work for a client is that we'd look at this as charged maintenance work.

### How does Apollo integrate with Webpack, more specifically Webpack Encore, that we use in our Symfony code?
It doesn't at present, though if this is a requirement we are happy to do this as part of the W3C project. We're aware 
webpack is a standard way of managing front-end assets in Symfony[^11].

## References

[^1]: [Bootstrap website](https://getbootstrap.com/)
[^2]: [Should You Use Bootstrap or Material Design for Your Design System?](https://superfriendlydesign.systems/articles/should-you-use-bootstrap-or-material-design-for-your-design-system/), SuperFriendly
[^3]: [Ditching jQuery](https://gomakethings.com/ditching-jquery/#why-go-native), Chris Ferdinandi
[^4]: [Should you use or learn jQuery in 2020?](https://flaviocopes.com/jquery/), Flavio Copes
[^5]: [What IS Flexbox?](https://medium.com/@spaceninja/what-is-flexbox-6aed968555ef), Scott Vandehey
[^6]: [Apollo v2 website](https://apollo.studio24.net/)
[^7]: [Apollo v2 GitHub repo](https://github.com/studio24/apollo/tree/apollo-v2)
[^8]: [Every Layout](https://every-layout.dev/)
[^9]: [Springer Nature Front End Playbook](https://github.com/springernature/frontend-playbook)
[^10]: [Semantic Versioning](https://semver.org/)
[^11]: [Managing CSS and JavaScript in Symfony](https://symfony.com/doc/current/frontend.html)
