Customizing overview
Starter guide to customizing the Grawlix CMS v1
Learn how customize your webcomic site.
2015-01-23
Ben Gremillion
Tag1, tag2

Your art is unique. Your comic website should be too. Believing that, we designed the Grawlix CMS’s default theme with flexibility in mind. 

While its default layout follows common webcomic conventions, a Grawlix-based site can look like anything. For example, compare [El Indon](http://el-indon.com) to [Greystone Inn](http://greystoneinn.net): two different looks, same CMS. **In this post you’ll learn how to customize Indotherm, the default theme.**

## What you need to know

This post assumes you’ve [installed the Grawlix CMS](./firstrun), have a code editor (like [Coda](http://panic.com/coda/), [Sublime Text](http://www.sublimetext.com) or [Dreamweaver](http://www.adobe.com/products/dreamweaver.html)), can [send files via FTP](./ftp), and know a little HTML and CSS. We also figure you can make images for the web. You do *not* need to know PHP, though it wouldn’t hurt.

Blah blah nerd stuff … If you’re in a hurry to get stylin’ then skip down to “making changes.” If you want to understand what’s going on, keep reading.

# The concepts: which files to change

If you’re just getting started, we suggest editing the default Indotherm theme, located in `/themes/indotherm` in your site. We designed it to be dissected, and the examples in this post will use Indotherm as a basis. Some changes only need a bit of CSS. Others call for some HTML work. We’ll cover both, starting with the easiest.


## Tone files for quick CSS tweaks

Grawlix themes have two sets of CSS:

* A file called “theme.css” that manages the site’s layout, typefaces, colors, etc. of the site.
* Tone files that modify the `theme.css` styles.

Both types are located in `/themes/indotherm`.

Tone files are amendments to the `theme.css` file. The theme file may say “make the background red,” but a tone file can override that: “no, paint it black.” That gives us two advantages. 

**First, you can use different tones in different [markers](./markers),** subtly (or drastically) altering the look of your site to match the story at any given time. No chapters? No worries. You can tell the Grawlix CMS to use one tone file across the whole site.

![Button to turn on “multitone” options](/docs_content/1/content/turn-on-multi-theme.png)

Above: Want one tone across the whole site? Keep multi-theme off. Want to change tones per marker? Turn this on.

**Second, tone files make the CSS easier to edit.** Theme.css files are complicated. If you’re a hard-core HTML/CSS guru, you can go crazy with the `theme.css` file. Heck, wipe it clean and start over if you want. But if you just want to tweak, say, the link colors, then edit a tone file. In particular, we designed Indotherm’s `tone.grawlix.css` file for easy access.

While researching webcomic site designs, we saw that most followed a standard layout — but backgrounds and banners varied wildly. So we ship Indotherm with two tones: Grawlix and Whiteout. Grawlix puts the main comic inside a box, while Whiteout keeps everything on the same background. You can edit either to fit your needs.


## Partial HTML files abound

Some theme changes need a little HTML hackery — specifically, changing the banner image and navigation type. To that end you’ll need to edit PHP scripts. Now, don’t panic. Although they *say* PHP, theme files are mostly bits of HTML. 

There are two types of HTML files (PHP scripts, whatever) you can edit: snippets and pages. The difference? *Snippets* are reusable, swappable nuggets of code that fit inside page files. For example, if you want comic navigation with an “random” link, you would add the `snippet.comic-nav-random.php` snippet file to the `page.comic.php` script. [Learn more about snippets](./snippets).

There are three kinds of page templates: Comic, static and archive. Each controls a different kind of page in your site, and are named accordingly. [Learn about comic pages](./comic-pages). 

Snippets and pages are easy to tell apart: snippet files begin with “snippet,” as in `snippet.footer.php` and pages begin with “page,” like `page.comic.php`. That’s important because when you’re starting out, you’ll make most of your changes in the snippets.

**Getting geeky:** The Grawlix CMS’s theme code is based on [Foundation for Sites](http://foundation.zurb.com), a popular front-end CSS framework.

## Summary

- The Grawlix CMS uses two different kinds of CSS files: themes and tones.
- Theme.css files contain the bulk of a site’s CSS.
- Tone files amend theme.css files.
- You can make many changes by editing just the tone files.
- There are three page template files: comic, static and archive.
- Reusable snippets of HTML plug into these page templates.

# Making changes

Enough talk. Let’s get to work. In this section we’ll refer to lines in the default Indotherm snippet and tone files, version 1, to help you quickly make a Grawlix-based site your own.


## Change the background image

1. Create an image for the background.
2. Upload it to `/assets/images/theme` in your site.
3. Change the path and filename in the tone file on line 5 of `tone.grawlix.css`.

Optionally you can edit other CSS properties on lines 6–8 like:

- background-repeat
- background-position
- background-size

##Change the background to a flat color

1. Remove the background-image property from line 5 of `tone.grawlix.css`.
2. Edit line 4, `background-color`, with a hex value of your choice.
3. Delete line 29 to erase the white box enveloping the comic.

## Replace the banner image

1. Create an image for the banner (800 pixels max width in Indotherm v1).
2. Upload the image to `/assets/images/theme` in your site.
3. Go to `snippet.header.php` in the theme folder.
4. Change the `src` path inside of the image with `role="banner"` on line 32.

The theme will center your graphic if it’s less than 800 pixels wide.


## Edit the site menu links’ color

Change the `color` value on lines 47 in `tone.grawlix.css`. That’s it.


## Comic navigation options

“Comic navigation” refers to the first/previous/next/latest links in a webcomic site. Sometimes these include a link to a random comic. Or not. To account for these two varieties, Indotherm v1 has two different nav snippets. 

* `<?snippet('comic-nav')?>` — Navigation with no extra links.
* `<?snippet('comic-nav-random')?>` — Navigation with a link to a random comic.

By default Indotherm uses the simplest of the two, without a random link. You can change that in `page.comic.php` on lines 4 and 14.

One more thing: for readers’ convenience, Indotherm puts comic navigation both above *and* below the comic image. If you only want one set of nav links, delete line 4 (nav above the comic) or 14 (nav below the comic) in `page.comic.php`.


## Comic navigation images

1. [Upload](./ftp) your navigation images, if any, to `/assets/images/theme`. You can name the files anything you want.
2. Choose which type of navigation you want (see “comic navigation options” above).
3. Change [`src` attributes](http://www.quackit.com/html_5/tags/html_img_tag.cfm) of all `<img>` elements to match your uploaded files.
4. Just want text? Delete the `<img>` elements.


## Change the typefaces

Change [typefaces](http://www.w3schools.com/cssref/pr_font_font-family.asp) by adding `body { font-family … }` circa line 4 in the `tone.grawlix.css` file.


# Going forward

Our end goal with the Grawlix CMS is a tool that doesn’t look like a Grawlix CMS site. Although Indotherm has a definite look, we encourage everyone to tinker, hack and rebuild it to fit their own unique style. Or start from scratch, which we’ll cover soon.

- [Read more about themes](./themes) in the Grawlix CMS docs.
- [Learn about the Foundation for Sites grid](http://zurb.com/university/lessons/using-small-medium-and-large-in-a-foundation-for-sites-grid) at ZURB University.
- [Reference HTML elements](http://html5doctor.com/element-index/) at HTML5 Doctor.
- [Learn about the CSS background properties](https://developer.mozilla.org/en-US/docs/Web/CSS/background) at Mozilla.
- [Get CSS tricks](https://css-tricks.com/snippets/css/) at, um, CSS tricks.
- [Discover hex color secrets](http://www.smashingmagazine.com/2012/10/04/the-code-side-of-color/) at Smashing Magazine.

