Themes
Themes
Themes control the look and feel of webcomic sites. Learn about theming and customizing your webcomic site.
2015-01-23
Ben Gremillion
Tag1, tag2

**A theme is a set of files and database info that gives a Grawlix site its unique look and feel.** 

The HTML for every page in a Grawlix-based website, from its home to the FAQ to a comic page to the archives, comes from a set of scripts collectively called a “theme.” While your site might have several themes installed, it only runs one theme at a time.

To seriously edit Grawlix themes, you need [a working knowledge](https://gumroad.com/l/SACCb) of HTML, CSS, and PHP.

## Customizing your site’s HTML

Most theme scripts are named for what they do. <span class="path">page.archive.php</span>, for example, generates HTML for the archive page. There are also snippet files, which contain reusable bits of code, and CSS files that determine its layout, colors, typography, etc.

To edit a theme’s HTML, you need to edit its PHP scripts. There are three types of those.

**Page scripts** begin with the word “page,” like <span class="path">page.comic.php</span>. These are the main files that comprise the different *types* of pages on your site — specifically, the comic pages, static pages and archive page.

**[Snippets](./snippets)** begin with the word “snippet”, like <span class="path">snippet.header.php</span>. Snippets are bits of code that Grawlix adds to page scripts where appropriate. They’re useful for HTML that will get used throughout a site, like the header and footer. Take the header snippet, which contains the HTML `<head>` and opening `<body>` elements. Every page script would stick that snippet’s code right at the top of the page.

**[Patterns](./static-patterns)** begin with the word “pattern”, like <span class="path">pattern.image-left.php</span>. These scripts contain the HTML for static pages’ content blocks. Placeholders indicate where information from each block, like a cast member’s name, should go.

## PHP includes

By “generates HTML” we mean “does a bunch of geeky stuff on the server that browsers never see.” Web browsers deal with HTML, CSS and JavaScript. Web servers use PHP to write the HTML on demand.

For example, let’s say you have 50 pages in your comic. When a reader wants to read one of them, the Grawlix CMS figures out what page number they’re on, and uses <span class="path">page.comic.php</span> as a template for the web page that the reader will see. The CMS adds the appropriate comic image, blog post and transcript, as well as the header and footer snippets.

It works because in Grawlix themes, each PHP script contains a bit of the whole HTML file that readers’ browsers display. The header script holds the beginning, the footer holds the end, and other scripts handle the middle. Grawlix strings ’em all together every time a reader visits a page.

## [Snippets](./snippets)

You can add a snippet to a page script with a bit of PHP code. `<?=snippet('name')?>` is a function that *includes* a template file from your theme. The text in quotes matches part of a filename. For example, `header` corresponds to `snippet.header.php`. These files must use the `.php` extension, but they don’t have to contain any PHP. A bit of plain HTML is fine. 

You can also create your own snippets. Just create a file called `snippet.your-custom-name.php`, then add it to a page script with `<?=snippet('your-custom-name')?>`.

## [show( )](./show)

`<?=show('item')?>` is a function that displays predefined items which usually come from the database. The text in quotes corresponds to a label used by Grawlix. For example, `<?=show('date_publish')?>` will show readers the publication date of the comic page they’re reading.

For a list of the predefined items, [read more about the show() function](./show)

## [show_ad( )](./show)

Ads work almost the same as `<?=show('item')?>`. `<?=show_ad('label')?>` is a function that displays ads from services you’ve setup in the admin panel. The difference between `show()` and `show_ad()` is that for `show_ad('x')`, the label in quotes matches the label used by Grawlix to define that specific ad slot.

## Wrap up

- Themes are a collection of files that control your site’s look and feel.
- “Page” scripts are the core files for your comic, static, and archive pages.
- “Snippet” scripts are reusable scripts that complete the page scripts.
- “Pattern” scripts contain HTML for static content blocks.
- `show()` is a function that inserts bits of information from your admin panel into each page or snippet.