The show( ) function
The show( ) function
The `show()` function displays bits of information you control in the admin panel.
2015-01-23
Ben Gremillion
Tag1, tag2

**`<?=show('item')?>` is a PHP function that displays predefined items which usually come from the database.** The text in 'single quotes' corresponds to a label used by the Grawlix CMS. The list so far is:

### Comics

- `'blog_post'` — Body content of the current comic page’s blog post
- `'blog_title'` — Headline of the blog post of the current comic page
- `'comic_css_first'` — Class names for styling the first link
- `'comic_css_latest'` — Class names for styling the most recent link
- `'comic_css_next'` — Class names for styling the next link
- `'comic_css_prev'` — Class names for styling the previous link
- `'comic_css_rand'` — Class names for styling the random link
- `'comic_image'` — The graphic(s) of the current comic page
- `'comic_url_first'` — Displays the `href` (link) to the first page in the comic book
- `'comic_url_latest'` — Displays the `href` to the most recent comic page
- `'comic_url_next'` — Displays the `href` to the next comic page
- `'comic_url_prev'` — Displays the `href` to the previous comic page
- `'comic_url_rand'` — Displays the `href` to some comic page … who knows where?
- `'date_publish'` — Date on which the current comic page became available to read
- `'page_title'` — Name of the current [comic page](./comic-pages)
- `'permalink'` — Full, absolute URL for the current comic page
- `'publish_frequency'` — Show how often the site updates
- `'rss'` — Display a link to the site’s RSS feed
- `'transcript'` — Contents of the current comic page’s text transcript

### Archives

- `'archive_content'` — Displays the [customized archives](./archives)
- `'archive_css_next'` — Class names for styling the next archive page link
- `'archive_css_prev'` — Class names for styling the previous archive page link
- `'archive_headline'` — Title of the archives
- `'archive_url'` — Displays the `href` (link) to the main archive page
- `'archive_url_next'` — Displays the `href` to the next archive page when using multipage archives
- `'archive_url_prev'` — Displays the `href` to the previous archive page when using multipage archives

### Static pages

- `'page_content'` — Displays a block of [static page content](./static-pages) formatted with [patterns](./static-patterns)

### General info

- `'support_head'`
- `'support_foot'`
- `'meta_head'`
- `'favicons'`
- `'site_name'` (see [metadata](./metadata))
- `'home_url'`
- `'copyright'` (see [metadata](./metadata))
- `'artist_name'` (see [metadata](./metadata))
- `'links'`
- `'menu'` (see [main menu](./main-menu))

## show_ad( )

`<?=show_ad('label')?>` is a function for displaying ads from services you’ve setup in the Panel. The label in quotes matches the label used by the Grawlix CMS to define that specific ad slot.

## Wrap up

`<?=show()?>` displays bits of information you control in the admin panel.