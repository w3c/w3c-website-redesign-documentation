---
layout: doc
title: "Information architecture research and analysis"
published: false
date: "2020-06-12"
categories: [Planning]
description: "This Information Architecture (IA) report documents the research and analysis carried out by Studio 24, to identify the needs of the primary users of the W3C site, and combine these insights with the company goals, to deliver a proposed new IA structure for the W3C site."
author: Ian Axton, Ben Challoner, Claire McDermott
---

## Introduction

This Information Architecture (IA) report documents the research and analysis carried out by Studio 24, to identify the needs of the primary users of the W3C site, and combine these insights with the company goals, to deliver a proposed new IA structure for the W3C site.

The research comprises a gathering of information from various sources, including the original company goals stated in the RFP, a list of primary users and the design preferences provided by the W3C team, interviews with key stakeholders and responses from a user survey, and a content audit to group existing site content. This research was analysed and output as job stories, grouped by user type, and ordered by priority of user.

This has informed the creation of the new structure for the W3C website, presented in the form of a new sitemap and wireframes. We have also included recommendations on dealing with archived content.


## Research and analysis


### Define company goals


#### How did we do it?


##### Questions we asked



*   What is the website for?
*   What do they want site visitors to do?
*   What are the objectives?
*   How is success measured?
*   Have objectives for the site changed over time?


##### How did we answer the questions?



1. Checked and validated objectives for the site with W3C.
2. Reviewed what is being tracked on Matomo analytics, and confirmed what will be tracked on the new site (if different).
3. Confirmed identified Key Performance Indicators (KPIs).


#### What were the outcomes?

The purpose of the site redesign is described here (source - RFP):

_W3C is incrementally **redesigning its Website and revising the information architecture**_



*   _to show the world who we are and what we offer,_
*   _to improve the organization and usability of the website for key audiences,_
*   _to communicate the W3C brand more effectively, and_
*   _to motivate people to participate in the organization._

_We are doing this because our website is supposed to show the world who we are and what we offer. While the current website is well-designed:_



*   _It is hard to navigate_
*   _It is out-dated in look and non-consistently responsive_
*   _It has too much content that is unsorted_
*   _It lacks a cohesive look_

The objectives, as listed out in the RFP are:



*   _Solidify brand authority, consistent design, uniform appearance_
*   _Create an engaging and easy to navigate experience_
*   _Increase engagement (Members to join) and funding (crowdsourcing) (Join/Donate buttons)_
*   _Ability to re-use redesign (to expand to other phases); enable us to evolve the style guide to cater for new needs & usages; likewise empowers us to make the information architecture evolve based on new themes, priorities_
*   _Optimize (layout, tooling) to make content that meets user needs (content design)_
*   _Optimize presentation, then archive redundant/stale content (inventory of the current content / URL Mapping and 301 Redirects)_
*   _Simpler and robust editing/maintenance (we expect the markup+style to be as simple/minimal as possible, and easy to understand and update over time)_
*   _Create a long-lasting partnership with a web design agency to continue to work with us as our needs and organization evolve_

Therefore, the problems for this project to resolve can be summarised as:

**Make it easier for users to find the content they want**

Measured by tracking user journeys to specific content. To do this we will:



*   Identify user groups and the core content they need, and record the current user journeys needed to find it, particularly the content which is known to be challenging to locate
*   Then we will compare the user journeys once the site has been re-designed.

**Update design to a more modern look and feel, solidify brand authority and consistent, uniform appearance**

Measured by obtaining reviews from users. To do this we will:



*   Compare user sentiments on the current website to the new designs.

**Implement consistent responsive site design**

Measured by testing the new site on different devices, browsers and screen sizes. To do this we will:



*   Create a test plan to detail what devices, browsers and screen sizes will be used for the testing.
*   Share test reports with results of testing.

**Introduce a consistent visual style for the whole site to adopt**

Measured by implementation of the style across all pages which are transitioned. To do this we will:



*   Deliver a style guide to help W3C team create and maintain web pages in the future.
*   Gain feedback from users that develop the site to confirm usability and ease of implementation.

**If we deliver all of the above, we expect to meet the goal to “Increase user participation with W3C”**

Measured by analytics and W3C by tracking goals, which can include:



*   Responses to campaigns 
*   Clicks on Calls to Action (CTAs)
*   Number of new memberships over the course of a set time period compared to the same time period of the previous year
*   Submissions of forms

Additional and alternative goals can be determined as the project progresses.

**Increase membership**

Measured by the number of memberships acquired after the re-design, compared to the number of memberships before, for an agreed period of time, e.g. 12 months.

**Celebrate the achievement of W3C**

Do a better job of highlighting the achievements, key people and how industry uses the standards created by W3C. This could be reflected in better case studies or content focussing on specific achievements of W3C. 


##### Sources:

[https://www.w3.org/2019/11/website-redesign-rfp.html](https://www.w3.org/2019/11/website-redesign-rfp.html)

[https://www.w3.org/wiki/2020_website_redesign](https://www.w3.org/wiki/2020_website_redesign)


### Define user goals

A key challenge of this project is balancing different audience needs. Our work here is to help identify different user groups and what they want to do on the site.


#### How did we do it?


##### Questions we asked



*   Who are the primary and secondary users of the site?
*   Why do they come to the site?
*   What are they doing on the site and why?


##### How did we answer the questions?



1. Confirmed primary and secondary user groups with W3C
2. Conducted stakeholder interviews with representatives of the primary user groups.
3. Conducted user survey to identify the main requirements for different user groups.
4. Analysed responses to confirm user requirements, ranked by priority of user and priority of task
5. Listed out job stories


#### What were the outcomes?

The confirmed list of users, and the order of priority can be found here:

[https://www.w3.org/wiki/2020_website_redesign/users](https://www.w3.org/wiki/2020_website_redesign/users)


##### User groups

To help us understand the W3C users, their motivations and needs, we worked with W3C to document a list of the main user groups that use the W3C website. This gives us a strong platform on which we can design a successful site.

We created this list of users by first of all reviewing site content and known user groups. The list was shared with W3C and iterated with input from both the project team and other interested people via the W3C website redesign wiki.

The final list of user groups can be seen below:



1. Members 
    1. Advisory Committee Representative (Member rep)
    2. Member employee
    3. Advisory Board Member (Elected reps)
2. Prospective Members
    4. Management: Why is joining W3C worth my money?
    5. Engineer: How would joining W3C help my project? How do I convince my company to join?
    6. Lawyer: What are the legal obligations and risks of participation?
3. Group participants 
    7. W3C Group participant
    8. W3C Chair
    9. W3C Spec Editor
    10. W3C Invited Expert
    11. W3C Translator
4. Web developers & designers 
    12. Intermediate Web developers: have a better grasp of W3C, awareness of upcoming new technologies, and guidance on how to bring input and feedback to the standardization process.
    13. Expert Web developers: convert them into active contributors to W3C work, either via spec contributions, issue discussions, MDN documentation and test case development.
    14. Technical Contributors: Give more exposure to their work and their influence on the Web, and encourage them to expand their commitment to the W3C mission.
    15. Web influencers, DevRel teams: convince them of the value of helping grow the W3C community and expand the reach of our messages.
5. Internal 
    16. W3C Staff (including W3C Group Staff Contact)
    17. W3C Evangelist
    18. W3C Chapter
6.  The Financial Supporter 
    19. Grassroots - small donations from web developers
    20. Sponsors - info about sponsoring W3C meetings and activities
    21. Funders - why W3C is worth supporting through large grants
7. Press
8. Other 
    22. Beginner Web developers: give them general awareness of what W3C is, what it does, how it works, and that it can be interacted with. Orient them toward our offering of tools (validators) and learning material (W3Cx, MDN).
    23. The Jobseeker
    24. The Casual user


##### Stakeholder interviews

We conducted 12 “face to face” stakeholder interviews with key contributors and users of the W3C website between 20th-22nd May 2020. These were people suggested by W3C as they have a vested interest in the project’s success.

The key stakeholders that we interviewed were:



*   Léonie Watson - longtime WG chair + AB member
*   Charles Nevile (chaals) - Former W3C Team, Former AC rep, current AB member, WG participant
*   Laurent Flory, Chief Information and Digital Officer, Université de Lyon - AC Rep, works with researchers who are participating in W3C WGs
*   Sam Weiler - W3C staff
*   Richard Ishida - W3C Team, I18N lead
*   Alan Bird - W3C Team, W3C business development lead
*   John Riviello - Comcast AC rep + volunteered to be an audience resource in the Website redesign project
*   Chris Needham - AC rep, IG Chair, WG participant, and media industry point of view
*   Michael Champion - Longtime large US corp AC rep + AB member (recently retired)
*   Nigel Megitt - small WG chair
*   Daniel Peitner - WG participant, has dabbled in designing a WG homepage

We also sent interview questions to:



*   fantasai - longtime WG participant + AB member
*   Rachel Andrew - CSSWG invited expert + new AC rep + CSS educator

**What questions did we ask?**



*   What are your primary reasons for visiting the W3C site usually?
*   What information within the website is most useful to you?
*   What does the W3C website help you achieve?
*   How do you access this information currently?
*   Does anything get in the way of you completing your tasks or make finding the information harder? What would make it easier?
*   Do you look at any secondary information or are you purely focussed on one thing?
*   Is there any other information that would be of interest to you?
*   Is there anything you would like to be able to do onsite that you can’t currently?
*   What do you think success looks like in this redesign?
*   What challenges do you see this project facing?
*   What do you think about the tone of voice and how things are communicated? Is the information clear, concise and easy to understand?
*   What impression does the current W3C site give off?
*   Final Thoughts?


##### Analysis of responses from the stakeholder interviews


###### The homepage - Needs to be clean, clear and easy to navigate

It should explain why the user should read on, why they shouldn’t leave the page. The homepage should grab users right away and invite them to go further. 

The older version of the site had lots of links on the homepage which was helpful – much quicker to find things. People are there to work, but they also need onboarding when they are new to the organisation so a more intuitive and user-friendly homepage is a must.


###### The navigation - Improved signposting for a broader range of user groups

The biggest challenge from the stakeholder’s perspective is the multitude of different audiences and deciding how to get them where they need to go as quickly as possible. With reps, chairs, members, developers and community groups, there are in the region of 100 different user types.

It became clear in these interviews that this redesign needs to help renew faith in the information architecture within the W3C community so they don’t rely on google, twitter and emails to access information.


###### Member login - Make it easier to login and more apparent when logged in

Currently there is no distinct indication of whether the user is logged in or not, which often causes confusion. The login fields feel disconnected rather than integrated with the website.

Also, there is no clear option available to logout to end your session with either.


###### Visual style - A consistent design will improve coherence

With a consistent design the whole website would feel more coherent. It feels disparate at the moment. As you click from one thing to another the visual design changes completely. 

A few examples of pages linked from the homepage with different design:

[https://www.w3.org/International/](https://www.w3.org/International/)

[https://www.w3.org/Guide/](https://www.w3.org/Guide/)

[https://www.w3.org/developers/](https://www.w3.org/developers/)

[https://www.w3.org/Consortium/cepc/](https://www.w3.org/Consortium/cepc/)


###### Design - Social channel integration 

It was requested that the redesign include integration with social media e.g. videos from Youtube or a Twitter feed within the templates.


###### Marketing - Website should be better at telling the W3C story

Some stakeholders mentioned that in the original brief some people wanted a media website – something more like a marketing site. The website needs to show how great the W3C is e.g. use Tim Berners-Lee’s name.

The website should promote the benefits of being a member in a broader, clearer and more accessible way. Some stakeholders explained how historically W3C had the assumption that a technically minded employee would drive the membership and get their companies to join, but they aren’t the budget holders and don’t have authority to sign off on the membership fee. The website needs to speak to people at a higher level who are more involved with business strategy.


###### Search - Needs to return more relevant results

On a website this size, a working search function is vital. A number of stakeholders outlined how they would either resort to using a search engine to find what they were looking for or they would go via links in emails or peer-created documents.

The W3C site currently relies on DuckDuckGo for its site search, which is powered by Bing. Multiple users explained how they had used the function initially but when it failed to bring up their desired results they stopped using it altogether. 


###### Current content - Guidance on writing for a wider audience

It was the perception of many stakeholders that contributors often write information as it “comes out of their brain” and assume people reading it will understand. Writers could do with more of an understanding of the users who come to the site – including those who don’t know what the W3C does or who are not technically minded. This could be encouraged with a writing guide outlining things such as how to front load your arguments, how to break up your paragraphs, how to not use passive tense.

It was also generally expressed that the site is too text heavy and the idea in the last redesign to make the font smaller didn’t address the issue but exacerbated it. The information is very dense – maybe build ‘how to’ info to help people achieve what they want to do. Explainers are helpful. Helping users see the overall picture, and then allowing them to delve deeper. Improved site design, with text breaks to make reading easier, will also help to make the more information-heavy pages easy for the user to digest.

Most of the information is difficult to understand, it's written in an academic or technical language. This makes it difficult to communicate standards with UX designers.


###### Legacy content - Introduce labels to indicate whether content is still relevant or archived 

One frustration is how there is a refusal to get rid of old pages. It would be OK to have a historical snapshot if current information were easier to find – for example a banner pointing to the new one. There isn’t any clear metadata to say if a source is stale.

In regards to updates on content how can users tell that it’s up to date or not?

E.g. an old document may still be correct and could be archived or it might be wrong / outdated due to technology moving on. W3C hasn’t deleted a webpage in 27 years. All this content is just sitting there, but it has no relevance. 

Stakeholders expressed their frustration at the duplication of information – some of it is kept in a wiki, some on Github, some on-site. There’s no clear authoritative source. There could be different versions of the same page with information that doesn’t match.

It was also mentioned that the ‘Strategic Highlights’ document was vitally important and needs to be more interactive. [https://www.w3.org/2020/05/w3c-highlights/](https://www.w3.org/2020/05/w3c-highlights/)


###### Working Groups - Should be given a greater presence

In regards to Working groups it was a pretty universal opinion that they need to be brought back into the fold more. More transparency is needed in regards to what the working groups are doing. E.g. What's their charter? Who are the chairs? When are the meetings? Can we read the minutes? How were decisions made?

Historically Working Groups are independent and do their own thing with their sites, which may have to continue. High level information should all be within the new design though.


###### Calendar - Add one that works

A common request amongst stakeholders was for a decent calendaring system. For an organisation that hosts dozens of meetings most days it is vital that people can easily find information on what all the different groups are doing. The current calendar is not very usable, according to a number of stakeholders.

[https://www.w3.org/participate/eventscal](https://www.w3.org/participate/eventscal)


###### Internationalisation - Must be factored in from the start

It was advised by all that we need to think about internationalisation and multiple translations from the very beginning. There is extensive guidance within [https://www.w3.org/standards/webdesign/i18n](https://www.w3.org/standards/webdesign/i18n) 

We will work alongside Richard Ishida and the Internationalisation Working Group to implement best practices.

It was requested that the redesign include integration with social media e.g. videos from Youtube or a Twitter feed with the templates.


###### Speak to web developer community

When asked what success looks like within this redesign, the general consensus was if the new website can speak more to the web developer community that would be a huge win. The site should show the role that W3C has played in the development of the technology and showcasing some of the big achievements the organisation has had. It is responsible for things we’re all using every day and highlighting some of those things on the site would be very beneficial to all user groups.

As a final thought it would be nice to have a quick, easy and clear way for developers and designers to be able to show their support for innovations. 




##### User survey

In addition to the stakeholder interviews, we wanted to gather feedback from a wide-range of W3C website users to make sure we included as many of the core user groups of the website as possible, and that we weren’t excluding any minority groups in our user experience work.

We used [SurveyGizmo](https://www.surveygizmo.com/) to run the survey, based on [community-driven research](https://a11y.reviews/#surveygizmo) and because they publish their [accessibility credentials](https://help.surveygizmo.com/help/surveygizmos-accessibility-compliance).

We analysed data from the survey between 11th May to 21st May, 2020. In this time we had 95 responses.

The survey was advertised in the following places:



*   W3C wiki
*   W3C Slack channel
*   W3C web redesign email group
*   W3C website
*   W3C Twitter & LinkedIn accounts

[View the survey](http://sgiz.eu/s3/W3C-re-design-help-improve-our-website) 

Survey sources:



*   42 from the web redesign email group
*   36 from W3C Twitter  & LinkedIn accounts
*   12 from W3C Blog link
*   3 from W3C Slack channel
*   2 from W3C Wiki

User groups:



*   50 identified as web developers or designers
*   27 were W3C members
*   27 were Community Group participants
*   21 were Working Group participants
*   7 were W3C staff
*   29 identified as something else

Note - Users could identify with multiple groups


##### High-level user needs

Based on the user survey and stakeholder interviews, we’ve identified a number of high-level user needs illustrated in the following mind map.

![User needs mindmap, high level](/assets/images/user-needs-mindmap-high-level.png)


![User needs mindmap, expanded](/assets/images/user-needs-mindmap.png)


See [https://whimsical.com/9mhkt45GTfwkdpMuZtRgq7](https://whimsical.com/9mhkt45GTfwkdpMuZtRgq7) 


##### Job stories gathered from user research

A job story is a way of capturing what users want to do on your site. They focus on targeted actions, the user’s motivation and the intended outcome. This helps give more context and helps explain why users want to do things._ _Job stories are an alternative to user stories, we find them more focussed and easier to check against our work in web design projects.


    _“We frame every design problem in a Job, focusing on the triggering event or situation, the motivation and goal, and the intended outcome,”_


    [The dribbblisation of design](https://www.intercom.com/blog/the-dribbblisation-of-design/), Intercom blog

Job stories are formatted as: When [situation], I want to [motivation], so I can [expected outcome].

See [Replacing The User Story With The Job Story](https://jtbd.info/replacing-the-user-story-with-the-job-story-af7cdee10c27) and [Jobs To Be Done](https://alistapart.com/article/jobs-to-be-done/)**.**

The following job stories are loosely grouped into user types, however, many job stories apply to many different types of users.


###### W3C Members

When I am managing my organisation’s membership at W3C

I want to find information on who at my organisation is a W3C member, which groups they are members of, and any pending applications to join that I need to approve 

So I can understand who is participating where.

 \
I.A  \
Story status: Successfully Completed

When visiting a group page a user can view the companies and participants. \
When I visit my homepage, I can find the information here. A notification alert is also shown in the topbar.

When I exercise my role as  Advisory Committee representative

I want to find out who participates in a group, what a group’s charter is, links to GitHub and the mailing list archives for a group

So I can make informed decisions about which groups to join.

I.A  \
Story status: Successfully Completed \
You can find this via the group page 

When I exercise my role as  Advisory Committee (AC) representative

I want to find out the maturity status of a particular specification and how it has progressed to that point

So I can make informed decisions about how to vote on AC decisions. \
Story status: Successfully Completed \
Wires: Each specifications has a status - a timeline has not been added

When I am exercise my role as  Advisory Committee representative

I want to find out what groups an individual participates in

So I can make informed decisions about how to evaluate candidates to the Technical Architecture Group and Advisory Board.

Story status: Incomplete

I.A Question: How do you evaluate them? On their activity? \
Each member I presume has/should have a public profile?

When managing a group

I want to find group membership lists, AC contacts, AC tasks (voting, joining/assigning people to groups), Chair tasks (meeting setup, cross-group contacts, tool documentation)

So I can achieve The things I need to do as a group chair and AC representative.

Story status: Successfully Completed \
Need clarification on how the permissions work and how it currently works.

When I’m doing research

I want to find the latest strategic highlights document

So I can see the summary of progress and achievements over the past several months. \
Story status: Successfully Completed \
Specification milestones are linked from [https://invis.io/Q5X01GLUBA8#/413920351_Groups_Landing](https://invis.io/Q5X01GLUBA8#/413920351_Groups_Landing)


###### Group participants 

When I am participating in a group

I want to find the mailing list archive

So I can track a discussion on a piece of work I am looking into.

Story status: Incomplete \
I.A Is ‘mailing list’ the right terminology. This sounds like it’s a discussion. How is this currently displayed? Should this be a discussion thread within each group?

[https://invis.io/Q5X01GLUBA8#/413920356_Group-_out_of_scope](https://invis.io/Q5X01GLUBA8#/413920356_Group-_out_of_scope)

When I am participating in a group

I want to find recommendations and information from the W3C groups

So I can have a reliable source of information on the guidelines for my work.

Story status: Successfully Completed \
We should ensure that all groups have the same template structure and it’s not like the wild west. Each group will link to standards.

[https://invis.io/Q5X01GLUBA8#/413920356_Group-_out_of_scope](https://invis.io/Q5X01GLUBA8#/413920356_Group-_out_of_scope)

When I am participating in a group

I want to read CSS specifications, descriptions and examples of different features

So I can better understand what specification issues still need to be solved and what is not defined. \
Story status: Successfully Completed \
specifications are linked to from a group.  \
We need to illustrate a group page with all requirements. Currently we haven’t done this. It feels like a couple of days work to understand all the requirements. 

[https://invis.io/Q5X01GLUBA8#/413920356_Group-_out_of_scope](https://invis.io/Q5X01GLUBA8#/413920356_Group-_out_of_scope)

When I am participating in a group

I want to monitor progress with the development of a specific standard

So I can influence the development of the standard

IA \
Story status: Successfully Completed \
Specifications being discussed should be added to a group page. Clicking on one would take the user to the specification lab. Potential solution is to add a group tag/filter.  

[https://invis.io/Q5X01GLUBA8#/413920356_Group-_out_of_scope](https://invis.io/Q5X01GLUBA8#/413920356_Group-_out_of_scope) \
[https://invis.io/Q5X01GLUBA8#/413920281_Standards_-_Specification_Lab](https://invis.io/Q5X01GLUBA8#/413920281_Standards_-_Specification_Lab)

When I am participating in a group

I want to find mailing list discussion histories, or details on a W3C spec

So I can reference it in an ongoing technical discussion

Story status: Successfully Completed \
Link to specification from a group page. Clicking on one would take the user to the specification lab. Does a specification page have discussion history? 

[https://invis.io/Q5X01GLUBA8#/413920356_Group-_out_of_scope](https://invis.io/Q5X01GLUBA8#/413920356_Group-_out_of_scope) \
[https://invis.io/Q5X01GLUBA8#/413920284_Standards_-_specification_Lab_-_Specification](https://invis.io/Q5X01GLUBA8#/413920284_Standards_-_specification_Lab_-_Specification)

When I’m working on a specification

I want to find detail of a CSS spec, or to check on one of the specs I'm an editor of if I've made a change

So I can ensure my editing work is accurate \
Story status: Successfully Completed

You should be able to check this on the standard \
[https://invis.io/Q5X01GLUBA8#/413920284_Standards_-_specification_Lab_-_Specification](https://invis.io/Q5X01GLUBA8#/413920284_Standards_-_specification_Lab_-_Specification)

When I am participating in a group

I want to find information relating to the W3C's policies, governance, accountability, structure and administration

So I can better understand the W3C and increase my ability to advise W3C on matters of governance, policy, finance, diversity and inclusion.

Story status: Successfully Completed \
You can find this information within the help section

[https://invis.io/Q5X01GLUBA8#/413920344_Landing_Help_-_Faq](https://invis.io/Q5X01GLUBA8#/413920344_Landing_Help_-_Faq)

When I am participating in a group

I want to find group charters and specifications

So I can understand about my working group and the specifications it works on.

Story status: Successfully Completed \
This information is found within the group 

When I’m participating in a group

I want to find when a group meeting is scheduled

So I can plan my meeting attendance.

Story status: Successfully Completed \
This information is found within the group 

When I’m participating in a group

I want to find when a group meeting is scheduled

So I can write a detailed agenda for the meeting.

Story status: Successfully Completed \
This information is found within the group 

When I am participating in a group

I want to read the latest editor’s draft of a specification

So I can edit specifications.  \
Story status: Successfully Completed \
I.A \
Drafts will be linked to from the group page

When I am participating in a group

I want to read an email thread from a W3C mailing list

So I can participate in discussion of technical issues related to specifications.

Story status: Successfully Completed \
This information is found within the group  \
Q; Is this information only viewable by members of groups? And not the public.  \
This information is found within the group 

		

When I am participating in a group

I want to read the charter of a particular W3C group 

So I can make informed decisions about where and when to spend my time and energy.

Story status: Successfully Completed \
This information is found within the group 

When I am looking to participate in a group

I want to find which working groups and community groups are open

So I can get more involved with specific work areas.

Story status: Successfully Completed \
A status is displayed in the group list item. Is ‘open’ the correct term?

When I am participating in a group

I want to find which people or companies are in working groups and community groups

So I can contact the right people to learn more.

Story status: Successfully Completed \
Note: A Group page and its children pages haven’t been fully worked up in the wires as they were originally deemed out of scope - this may have changed. 


###### Web developers and designers

When I am researching

I want to learn more about recent updates with new standards

So I can keep up to date with current trends. \
Story status: Successfully Completed \
We’ve added a sort by ‘activity’ to the standards listing would help, you can also view the strategic highlights. We may need to highlight changes in a better way for example when a standard has been made mature, a notification could display. 

When I am researching

I want to find out about new HTML tags and CSS properties and how to use them

So I can find out about new trends and technologies and use these to build websites.

Story status: Successfully Completed \
Would this information be within a standard/group/ \
We haven’t solved this could be via search as it’s wider reaching than a category such as this page

Or could be a tag or category in blog or news. \
[https://invis.io/Q5X01GLUBA8#/413920264_Standards_-_Category ](https://invis.io/Q5X01GLUBA8#/413920264_Standards_-_Category) \


When I am building a website

I want to find out specific techniques about accessibility

So I can build more accessible web pages in my projects.

Story status: Successfully Completed \
This can be found by visiting the standards section. \
[https://invis.io/Q5X01GLUBA8#/413920260_Standards](https://invis.io/Q5X01GLUBA8#/413920260_Standards)

When I am building a website

I want to find specific details in specifications or standards

So I can find clarity in cases where I have doubts on how to implement something. \
Story status: Successfully Completed \
[https://invis.io/Q5X01GLUBA8#/413920278_Standards_-_Category_-_Topic](https://invis.io/Q5X01GLUBA8#/413920278_Standards_-_Category_-_Topic)

When I am building a website

I want to find specific details in specifications or standards

So I can find out accurate facts instead of trawling the web.

Story status: Successfully Completed \
The user will need to navigate through the standards menu. [https://invis.io/Q5X01GLUBA8#/413920278_Standards_-_Category_-_Topic](https://invis.io/Q5X01GLUBA8#/413920278_Standards_-_Category_-_Topic)

When I am building a website

I want to find specific details in specifications or standards

So I can achieve better quality in markup. \
Story status: Successfully Completed

The user will need to navigate through the standards menu. 

[https://invis.io/Q5X01GLUBA8#/413920278_Standards_-_Category_-_Topic](https://invis.io/Q5X01GLUBA8#/413920278_Standards_-_Category_-_Topic)

[https://invis.io/Q5X01GLUBA8#/413920281_Standards_-_Specification_Lab](https://invis.io/Q5X01GLUBA8#/413920281_Standards_-_Specification_Lab)

When I am building a website

I want to use the markup validation service

So I can see if my markup is in compliance with the recommendations. \
Story status: Successfully Completed \
Currently validators are found on the standards pages. Is there a case for validation tools to also have its own area within standards and specifications ‘validation tools’? Or are they specific to the standard? 

[https://validator.w3.org/services](https://validator.w3.org/services) A landing page for these together would be great!

When I am writing web content

I want to find the proper guidelines on writing semantic HTML

So I can achieve good search engine indexing and my text is properly represented to all users. \
Story status: Successfully Completed

Wires: Solved  \
The user will need to navigate through the standards menu. 

[https://invis.io/Q5X01GLUBA8#/413920260_Standards](https://invis.io/Q5X01GLUBA8#/413920260_Standards)

When I am designing a website

I want to find out about UX best practises to create accessible products

So I can ensure I meet the rules and guidelines for designing with accessibility and allow people of any age or background to access the information they need.

Story status: Successfully Completed \
User goes in via standards 

When I am reviewing an open source project

I want to find relevant information on web standards

So I can review or give feedback to open source projects and become a more well rounded developer/researcher.

Story status: Successfully Completed \
User goes in via standards 

When I am looking for a job

I want to read about current openings and latest W3C news

So I can find a suitable career opportunity.

Story status: Successfully Completed

Found in About W3C > Job opportunities

When I am looking to do give something back

I want to find a clear path (with baby steps) to how someone new to the scene can contribute

So I can contribute to the community.

Story status: Successfully Completed \
A guide to participation is in the ‘participation section and the ‘help’ guides

When I am studying for a PhD

I want to find out up-to-date information about developments in the web and web technologies

So I can study content for my master project idea.

Story status: Successfully Completed \
User can find this content in the development categories - possibly rename ‘categories’ to areas.


###### Other users

When I’m testing a site

I want to find detailed success criteria with working examples for developers 

So I can ensure a site meets accessibility compliance

Story status: Successfully Completed \
User can find this content in the standards section

When I’m researching my lesson plan

I want to find HTML and accessibility standards

So I can teach my students there is an open 'standard' that anyone can contribute to for future development of the web, as well as useful reference material for when they are unsure of how to do something.

Story status: Successfully Completed \
User can find this content in the standards section


##### Sources:



*   [User stories feedback from W3C](https://www.w3.org/wiki/2020_website_redesign/users)
*   [SurveyGizmo](https://www.surveygizmo.com/) public survey run 17th to 21st May, 2020


### Competitor Analysis


#### How did we do it?


##### Questions we asked



*   Who does W3C benchmark itself against?
*   Are there any sites that they want to emulate?


##### How we answered the questions



1. Listed comparable websites and what aspects of those sites are liked by W3C
2. Listed elements that W3C does not like


#### What were the outcomes?


##### A list of websites that have been identified as positive examples by W3C, with reference to elements that they like and why:

These organisations are similar to W3C in what they do and have a visually appealing site with graphics: 



*   [https://www.linuxfoundation.org/](https://www.linuxfoundation.org/)
*   [https://training.linuxfoundation.org/](https://training.linuxfoundation.org/)
*   [https://www.internetsociety.org/](https://www.internetsociety.org/)

W3C finds the way that Data Tracker presents groups is ‘compelling’:



*   [https://datatracker.ietf.org/](https://datatracker.ietf.org/)

_ _

This site has an example of a useful “getting started” page:



*   [https://ietf.org/about/participate/get-started/starting/](https://ietf.org/about/participate/get-started/starting/)

Examples of sites that W3C feel are easy to navigate, have good search facilities, and provide high-quality information:



*   [https://www.debian.org/](https://www.debian.org/)
*   [https://en.wikipedia.org/](https://en.wikipedia.org/)

 

This site has been identified as good because it serves the primary user need (booking a train ticket) right at the start. It is ‘easy to read & use, and works without JavaScript’. Note, however - URLs do not last for longer than a few minutes, which is not a good user experience:



*   [https://www.bahn.de/](https://www.bahn.de/)

    _ _


A site with an easy to read style. Note, however - the fixed menu bar is not preferred functionality :



*   [https://www.beyond.fr/](https://www.beyond.fr/)

    _ _


A selection of sites that have been mentioned as easy to use.



*   [https://www.gov.uk/](https://www.gov.uk/)<span style="text-decoration:underline;"> </span>- fast, clearly written, accessible, navigable
*   [https://developer.mozilla.org/en-US/](https://developer.mozilla.org/en-US/)
*   [https://about.gitlab.com/](https://about.gitlab.com/)
*   [https://en.wikipedia.org/wiki/Main_Page](https://en.wikipedia.org/wiki/Main_Page)
*   [https://github.com/ ](https://github.com/)(However, this also features in the list of examples of functionality that is not liked by users as well, please see further down)
*   [https://squamish.ca/](https://squamish.ca/) 


##### List of sites and web applications identified as not being liked by the client, with reasons why:

W3C has shared the web application GitHub that as an example of certain things to avoid in the new site:



*   Too much additional information above and to the side of main content on the page
*   Use of 404 status rather than 401
*   Requires horizontal scrolling
*   [https://www.github.com/](https://www.github.com/)

This website has easy to read pages, but the issue is that the URLs do not last for long before they are reloaded. The learning from this is that URLs on the site should stay consistent and not change (unless with a suitable redirect in place).



*   [https://www.nicematin.com/](https://www.nicematin.com/)

Zoom is given as an example of a site that makes an assumption about the user’s system (offering the application download for Windows users more readily than for Mac users), which can create a barrier to the user’s ability to use the site and/or tools.



*   [https://zoom.us/download](https://zoom.us/download)

    _ _


Twitter’s forward/back navigation was observed as often breaking, and embedded tweets don’t allow the user to use a right-click to open the post in a new tab. An example of site functionality not working as expected.

_ _

Mozilla has a good looking site, but some of the content that the user might be looking for (how to participate, what the organisation does) is not immediately easy to locate.



*   [https://www.mozilla.org/](https://www.mozilla.org/)

Unicode is another example of a site that hides who they are and what they do (in this instance it is in the footer). The expectation is for this information to be readily available on the homepage, and to be understood by the user within 10 seconds of being on a website. 



*   [https://home.unicode.org/](https://home.unicode.org/)


### Define content


#### How did we do it?


##### Questions we asked



*   Do we have an Inventory of content, what to keep and what to delete?
*   How can we identify any new content requirements


##### How did we answer the questions?



1. We sorted the content sections as websites, based on analytics data.
2. We created content groupings for the current site.


#### What were the outcomes?

We have accessed the analytics data on the site, to identify which sections of the website had the most and least traffic. Additional analysis will be conducted in due course, to help inform the scope of work.

Due to the scale of the website, the content sections for the site have been grouped by the different websites within w3.org, rather than a review of each individual page. The list is presented here:

[https://docs.google.com/spreadsheets/d/1sRz9YSgywH6NqzNXHUIfcDKYLmrMYtB2rJXfb9ZsQrA/edit#gid=0](https://docs.google.com/spreadsheets/d/1sRz9YSgywH6NqzNXHUIfcDKYLmrMYtB2rJXfb9ZsQrA/edit#gid=0)

These websites have been ordered by the number of visits and page views. This list contains 494 different sites, which demonstrates the scale of the website as a whole. 237 of these sites have had less than 100 visits in this time period, including 45 that have had no visits. This could be due to the inaccessible nature of the content, or that the content is no longer relevant or of interest to users.

The top 5 sites based on number of visits and pageviews are:



1. [https://validator.w3.org/](https://validator.w3.org/)
2. [https://www.w3.org/](https://www.w3.org/)
3. [https://www.w3.org/WAI/](https://www.w3.org/WAI/)
4. [https://www.w3.org/blog/](https://www.w3.org/blog/)
5. [https://www.w3.org/community/](https://www.w3.org/community/)


#### W3C content groupings

We conducted an audit of the content as it is on the website currently. This helps us understand the current content groupings and is an early step for us to start thinking about how to better organise content on w3.org.

The content groupings can be viewed on Whimsical at the following link:

[https://whimsical.com/FLyhowvgfFwmRui3NMEgQV](https://whimsical.com/FLyhowvgfFwmRui3NMEgQV)

**A text version of the content groupings is below:**

**Group 1: Standards**

Find and implement a standard

Content in this grouping:

**All Standards (active and draft)**



*   Web Design and Applications
    *   HTML & CSS
    *   JavaScript Web APIs
    *   Graphics
    *   Audio and Video
    *   Accessibility
    *   Internationalization
    *   Mobile Web
    *   Privacy
    *   Math on the Web
*   Web of Devices
    *   Mobile Web
    *   Voice Browsing
    *   Device Independence and Content Adaptation
    *   Multimodal Access
    *   Web and TV \

*   Web Architecture
    *   Architecture Principles
    *   Identifiers
    *   Protocols
    *   Meta Formats
    *   Protocol and Meta Format Considerations
    *   Internationalization \

*   Semantic Web
    *   Linked Data
    *   Vocabularies
    *   Query
    *   Inference
    *   Vertical Applications
*   XML Technologies
    *   XML Essentials
    *   Efficient Interchange
    *   Schema
    *   Security
    *   Components
    *   Publishing
    *   Transformation
    *   Processing
    *   Query
    *   Internationalization \

*   Web of Services
    *   Security
    *   Payments
    *   Internationalization
*   Browsers and Authoring tools
    *   Browsers, Media Players
    *   Authoring Tools, Social Media 

About the standards



*   About W3C Standards
*   Standards FAQ
*   Specification Reviews and Public Feedback on standards
*   ...

Code and implementation



*   Implementation and Open Source Code Contributions
*   W3C Bibliography Generator
*   Validators

_Related Content for a standard or group of standards:_



*   _News_
*   _Events_
*   _Tutorials_
*   _Courses_
*   _..._



---


**Group 2: Learning Resources**

Choose a way of learning

**Online training**



*   Tutorials & Courses
*   Podcasts & Videos
*   W3Cx
*   W3C Dev Campus

**Events**



*   Talks
*   Conferences endorsed by W3C
*   Endorested conferences archive
*   Regional events



---


**Group 3: Participate Content**

Ways you can participate

Content in this grouping:

In Technical feedback

Help promote the standards

In code implementation

In specification reviews and public feedback

In our forums

W3C Chapters

Geographic based community of individuals interested in W3Cs activities 

**Discussion groups**



*   Overview
*   Public working groups
*   Interest groups
*   Community and Business groups
*   Archived groups
*   Participant guidebook
*   Specification milestones

 \
**Ways to keep updated**



*   Weekly newsletter sign-up

**Content which aids participation**



*   Find W3C Liaisons

**Meetings**



*   Group meetings
*   Membership meetings
*   Technical Plenary (TPAC) Meetings

**Workshops**



*   Current workshops
*   Archive

**Events**



*   Talks
*   Conferences endorsed by W3C
*   Endorsed conferences archive
*   Regional events



---


**Group 4: Help and FAQ**

Getting help and answers

Content in this grouping:

FAQ about W3C website

W3C site map

**Account information **



*   W3C user account management
*   Public account request form
*   Member account request form

**Account login/password assistance**



*   Change password
*   Recover login or password

**Ways to contact**



*   Contact
*   ERCIM
*   Keio
*   MIT
*   W3C Staff
*   Regional contacts

**Mailing lists (TBC)**



*   FAQ
*   On subject tagging
*   Archive editing policy
*   Managing mailing list subscriptions
*   Guidelines for attachments
*   Email forgery prevention using SPF



---


**Group 5: About**

Catchall

Content in this grouping:

**Information on W3C**



*   W3C Mission
*   Facts About W3C
*   History

**Policies, Licences, Terms...**



*   Policies and Legal Information
*   Licenses for W3C Test Suites
*   Policies for Contribution of Test Cases to W3C
*   Intellectual Rights FAQ
*   W3C Privacy Statements
*   W3C Document License
*   W3C Trademarks and Generic Terms
*   W3C® Trademark and Service Mark License
*   W3C Software Notice and License
*   W3C Invited Expert and Collaborators Agreement
*   W3C URI Persistence Policy
*   Mirroring the W3C Site
*   Translations of the Copyright Notice

**What’s happening**



*   News 
*   Blog

**People and jobs**



*   Fellows Program
*   People at W3C
*   Job opportunities

**Marketing materials**



*   Logos and Icons
*   Translations

**Sponsorship and donations**



*   Organization Sponsor
*   Supporters Program
*   Supporters Program Policies
*   Supporters Program FAQ
*   Event Sponsor
*   Web for All Sponsor
*   Developer Sponsor



---


**Group 6: Membership**

Getting help and answers

Content in this grouping:

**Why join**



*   Membership Benefits
*   Join W3C
*   Membership FAQ

**Cost of membership**



*   Membership Fees
    *   Membership Fees (July 2013)
    *   Membership Fees (February 2012)

**Other**



*   Current Members
*   Member Statistics
*   Member Submissions
*   Member Testimonials
*   History
*   Instructions for Members
*   W3C Invited Experts
*   External Contributions
*   Invited Expert and Collaborator Agreement



---


**Group 7: Industries**

Getting help and answers

Content in this grouping:

Automotive

Entertainment (TV and Broadcasting)

Publishing

Web Payments

Web of Data

Web and Telecommunications

Web of Things
