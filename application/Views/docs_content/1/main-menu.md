Main menu
Main menu
The main menu is how readers get around the site, outside of the comic itself.
2015-01-23
Ben Gremillion
Tag1, tag2

**The menu is a series of links in your site’s design that take readers to non-comic pages in your site.** Traditionally called navigation or a nav bar, we call the menu a “menu” to differentiate it from the first/back/next/last links on each comic page. That’s comic navigation. Links to Home, About, FAQ — that’s the menu.

Technically, the menu is a series of [URLs](./url) within your site. Editing the main menu in your admin panel lets you control which page is called what — in terms of links. This is important to set up both for [SEO](./seo) and readability. That is, if your “about the comic” page is located at “yoursite.com/contact” people will look at you funny.

## Internal vs external links

The menu can offer two kinds of links: **Internal,** or “standard” links, and **external** links that point to other websites altogether — say, if you have a store or a Patreon campaign. You can create and delete external links on a whim. Internal links, though, are built automatically when you create a static page. Your comic and its archive also get menu links automatically.

## Features

- **Title:** The text that appears in your site’s menu and [title tag](./seo).
- **URL:** Each page’s unique location within your site. Notice how each begins with a slash /. That’s mandatory for internal links.
- **Type:** Describes what kind of page, such as [static](./static-pages) pages or an [archive](./archives) page.
- **Actions:** Tap the slider to hide or reveal each menu item to your site’s main menu. Hiding a menu item does not delete the page itself. Tap the pencil icon to edit each item’s title or URL.

## Arranging a menu bar

You can sort menu bar links in any order you choose with “Main Menu” in your admin panel. It’s pretty easy: drag-n-drop them into the arrangement you want. 

Click the switch on the right side of a link to show it to or hide it from your readers. Dark grey bars denote links that the readers can’t see. They could get there if they know its URL, though. “Hide” just means “keep it out of the menu” not “banish it to the netherworld of Dante’s 404 errors. Or something.

Changing a link’s position in the menu, or hiding it from view, does not affect its address on the web.

## Locations in your site

Your site’s main menu controls every static page’s location within your site. That is, the **/something** part of mysite.com**/something**.

These “locations” look like: “/faq”. If your site was “mycomic.co.uk” then your FAQ page would be located at “mycomic.co.uk**/faq**”

You can change that to, say, “/answers”. Then the FAQ’s full [URL](./url) would be “mycomic.co.uk**/answers**”. Or “/ministry-of-funny-walks” so its URL would be “mycomic.co.uk**/ministry-of-funny-walks**”.

### URL requirements

There are a couple of caveats. You can’t change the 404 error page URL, or the site’s home page URL. The Grawlix CMS requires these to stay as they are.

Also, that forward slash “/” is required at the beginning of every location. Without it you’d have **“mycomic.co.ukministry-of-funny-walks”**.

### Why change a location?

Because Google, DuckDuckGo, Bing, and the like consider a page’s URL when trying to figure out what the page is about.

There’s also creative branding. If you’re telling a detective story, then “/inquiries” might be more appropriate than plain ol’ “/faq”.

### Why *not* change a location?

If people have bookmarked a page’s address, and you change it, then their link is invalid and will direct them to the /404 error page.

Point is, people and search engines alike are fond of knowing where a page is. Once you set a page’s location, it’s best not to change it.

<aside><p>**Getting geeky again:** A “301 redirect” is a forwarding address. If “mycomic.co.uk/arthur” turns into “mycomic.co.uk/brian”, then a 301 redirect tells everyone who asks for /arthur to go bug /brian instead.</p></aside>

## Wrap up

- The menu is a collection of site-wide links
- It’s also where you control each static page’s unique address
