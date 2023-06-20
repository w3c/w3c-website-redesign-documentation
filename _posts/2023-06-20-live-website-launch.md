---
layout: post
title: W3C live website launch
categories:
- Live
description: The redesigned W3C website has gone live today on w3.org
author: "Simon R Jones"
date: 2023-06-20 

---

After working in partnership with W3C for the past 3 years, the redesigned W3C website has gone live today on [w3.org](https://www.w3.org/)!

This is a massive achievement for the W3C and Studio 24 teams and one I’m really proud of. I’ve written more on this on 
the [Studio 24 website](https://www.studio24.net/blog/w3c-launch-their-new-website/), you can also read W3C’s blog post [LINK].

After a pause since April last year, we’ve been working with W3C again since May on some improvements and helping address 
issues reported from the community on the Beta website. Issues are tracked on a [GitHub project board](https://github.com/orgs/w3c/projects/27) 
and are prioritised by the W3C team.

This work recently included updating to Craft 4 and PHP 8 and a number of front-end fixes. The update to Craft went fairly smoothly, 
but the update to PHP 8 created a number of dependencies we had to solve, including updating servers and using [Deployer 7](https://deployer.org/) 
for deployment (previous versions don’t work with PHP 8). This also gave me the chance to contribute some improvements 
to the [Craft CMS recipe](https://deployer.org/docs/7.x/recipe/craftcms) in Deployer!
