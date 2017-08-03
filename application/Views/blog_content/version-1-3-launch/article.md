Version 1.3 is live
Version 1.3 is live
We’re thrilled to announce the latest version of the Grawlix CMS for webcomics.
2017-04-17
Ben Gremillion
Tag1, tag2

![Bleep with a sign](/blog_content/version-1-3-launch/Bleep-sign-v1.3.png)

Today we’re launching version 1.3 of the Grawlix CMS. This edition fixes some outstanding bugs and makes significant changes to static pages.

So what’s new?

- You can now rearrange static content blocks as you please.
- You can also safely delete content blocks.
- You can edit the site’s description, which appears in RSS feeds.
- Database changes pave the way for version 2.
- Asterisk is now a built-in theme.
- Each built-in theme now has a readme file that answers frequently-asked questions.
- Asterisk has reached version 2 (more on that later); Indotherm and Stick Figure both are up to v1.2.
- Success messages have more enthusiasm! Woo!

Various bug fixes and improvements:

- The system correctly reads timezones.
- Removed the outdated Markdown parser.
- Squashed a bug that broke external links in the site menu.
- Firstrun instructions are clearer.
- Added additional code in .htaccess should make for greater server compatibility.
- Fixed a problem that prevented certain themes from loading correctly.
- Fixed code that would occasionally cause sites to launch a blank site root directory.
- Fixed a bug that occasionally misplaced slashes in comic image file paths.
- Fixed a bug that sometimes overwrote image path data when adding new content blocks to static pages.

## Customize static pages with Patterns

Previous versions of the Grawlix CMS hid static page HTML deep inside the codebase. No more. *[Patterns](http://www.getgrawlix.com/docs/1/static-patterns)* let artists directly edit static pages’ HTML and CSS, customizing their looks more than ever. 

Themes in version 1.3 come with five patterns apiece that place content blocks’ images above, to the left, or to the right of the text content — or display none at all. They arrange content via Flexbox, and come with documentation in the theme CSS. And creating your own patterns is easy: just name a file “pattern.(something).php” in your theme folder. [Read more](http://www.getgrawlix.com/docs/1/static-patterns) or [ask us](mailto:grawlixcomix@gmail.com) about patterns.

## Get going

New artists can [download and install](http://www.getgrawlix.com/downloads) the system as usual. It has the same [system requirements](http://getgrawlix.com/docs/1/requirements) as before.

Upgrading from version 1.2 takes a few steps, which you can find in the included readme file when you download the system. So [grab your copy](http://www.getgrawlix.com/downloads) today. Happy publishing!