Asterisk: an annotated theme for webcomics
Introducing Asterisk, a new Grawlix 1 theme
Asterisk is a new webcomic site theme for Grawlix 1 that educates as much as it styles. Loaded with notes, it’s part theme, part instruction manual.
2016-09-03
Ben Gremillion
Tags

![Asterisk teaser image](/blog_content/introducing-asterisk-webcomic-theme/simple-asterisk-teaser.png)

Following [our recent e-book on HTML & CSS](http://www.getgrawlix.com/blog/post/learning-html-css-book-intro), we’re thrilled to announce a new theme: **Asterisk.** It comes with four tones — two practical and two informative — to help you learn to make great webcomic sites. Best of all, it’s loaded with inline notes to tell you what’s going on, why we set it up that way, and how it works.

## HTML, CSS, & the Grawlix CMS

The Grawlix CMS can work with almost any HTML/CSS you write. But to help get artists started, version 1.1 comes with two themes: Indotherm and Stick Figure. Indotherm is more complex — and realistic. We designed Stick Figure for you to build upon. 

(Psst, [check out some of the wildly different looks artists have created](http://www.getgrawlix.com/case_studies).)

But as artists kept asking questions, we saw the need for a more streamlined theme with as much help text as real code. And so Asterisk was born.

Well, it wasn’t *that* easy. We spent weeks experimenting with ways to make things straightforward. The result is a more forward-thinking set of code designed for easy reading and flexible editing.

## Tones make theming easier

Tones are variations on a theme. A theme file, that is. I mean, the whole theme is more than one file. But —

Lemme start over.

Tones change the look of *groups* of pages — say, comics that publish around Halloween, or guest art days, or to reflect the mood if your story takes a dramatic turn.

Each theme comes with a file named `theme.css` that defines the site’s general layout. Tone files control color, typography, and some graphics.

Tones override styles in `theme.css`. For example, if `theme.css` says “make the text black,” and a tone says “make the text red,” then the text will be red.

Since most of the look comes from `theme.css`, tweaking a tone is a quick way to adjust styles without writing much CSS. Themes can have hundreds of pre-set properties. Tones usually have a handful.

## Installing Grawlix themes

If you have a website that uses the Grawlix CMS, here’s what to do.

1. [Download and unzip the files](http://www.getgrawlix.com/themes/asterisk-1.zip).
2. Upload it to your site’s “themes” folder.
3. Go to “themes” in your admin panel and click on “install Asterisk”.
4. Click on its name to register its tones.
5. Click “back to list,” and choose a theme and tone your site should use from the drop-down list.

## How do I customize a tone?

There are many ways to make a Grawlix theme. Some artists ignore our code and start from scratch. Others barely modify files we supply. Both ways are fine, but here I’ll show you how to make your own tone file.

Included in this theme are two empty tones: `tone.zero.css` and `tone.zero-annotated.css`. Except that empty isn’t *empty.* The “zero” tones have many CSS selectors that indicate the important sections of the website. That means you don’t have to dig through HTML to figure out what you can change. The plain file lists selectors; the “annotated” version includes notes.

Here’s how to start:

1. Duplicate `tone.zero.css`.
2. Rename the copy “tone.my-style.css”.
3. Click the theme’s name in the “themes” section of your admin panel to register the tone named “my style.”
4. Set your site’s look to use that tone with the drop-down list.

From now on, when you change the file named `tone.my-site.css` your site will change too. Now let’s see it in action.

1. Open `tone.my-site.css` in [your favorite code editor](http://www.getgrawlix.com/docs/1/code-editor). 
2. Near the top you’ll see a line beginning `html,body`. Immediately after that, add this: `background-color: purple;`
3. Save and, if necessary, [re-upload it](http://www.getgrawlix.com/docs/1/ftp) to your site.

Presto, your site has a purple background. But that’s just an example. Check out the other included tones for more inspiration.

## Learn more

Customizing your webcomic site just got easier with Asterisk. Let `theme.css` do the heavy theming and learn from nine included tones to make your webcomic site as unique as your art. [Download the theme](http://www.getgrawlix.com/goodies) and get started today.
