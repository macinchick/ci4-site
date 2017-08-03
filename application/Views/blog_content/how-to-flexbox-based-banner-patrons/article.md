Create your own responsive webcomic banner graphics
How to create and lay out custom, responsive webcomic and banner
Artists who to build custom graphics for their webcomic banners should use this new design technique.
2017-04-08
Ben Gremillion
Tag1, tag2


The top of a webcomic site is valuable real estate. In addition to telling readers the comic’s name, they must also set the tone and often let readers navigate non-comic site pages.

Here’s one way to build an attractive, responsive site banner based on techniques in the upcoming Asterisk 2 theme.

## Make the art

First create the graphics. For this demo we’ll assume a mobile-optimized menu — 480 pixels wide — and a widescreen version. Notice that in both versions, the link graphics stay the exact same size. This means we can reuse them for both sizes.

![Final webcomic mobile banner](/blog_content/how-to-flexbox-based-banner-patrons/Final-480.jpg)

![Final webcomic widescreen banner](/blog_content/how-to-flexbox-based-banner-patrons/Final-960.jpg)

Whether you use Photoshop or another tool, chances are you built your graphics with layers. If so, then save both backgrounds, sans-link layers. Then save each link graphic as its own file.

![List of files](/blog_content/how-to-flexbox-based-banner-patrons/file-list.png)

## Structure and content

Create the menu area in code:

- A `div` element for the overall container
- A `figure` element for the banner
- A `nav` element for the menu

Then add the images to the menu `nav`, one anchor at a time.

![The banner HTML](/blog_content/how-to-flexbox-based-banner-patrons/the-html.png)

## Layout and style

Next we’ll use CSS Flexbox to arrange the various elements into their rightful places.

We start with a responsive foundation — `.container` — at 480px wide and expands to 960px wide when the browser is wide enough.

![Set up the container](/blog_content/how-to-flexbox-based-banner-patrons/1-setup-container.png)

Unlike `.container`, which we can use anywhere in the site, `.banner` only appears once, and so gets its own styles. Here we make it stack elements into a column by default …

![Lay out the mobile banner](/blog_content/how-to-flexbox-based-banner-patrons/2-setup-mobile-banner.png)

… and expands them into a shallow row when the browser is wide enough. As it implies, `align-items: center` will keep the navigation and banner image in the middle of the container.

![Lay out the widescreen banner](/blog_content/how-to-flexbox-based-banner-patrons/3-widescreen-banner.png)

The menu items — those clickable navigation graphics — also reside in a Flexbox container, `nav`. The `flex-wrap` property makes them flow onto the next line when necessary, and `justify-content` gives them a little space. To help that along, we also pad them out with the `.nav a` selector.

![Set up the banner navigation menu](/blog_content/how-to-flexbox-based-banner-patrons/4-banner-nav.png)

And widescreen browsers? Simple: make sure they fit into a reasonable space, for example 320px wide, and use `justify-content: space-around`, which keeps their spacing consistent.

![Adjust the menu for wide-screen browsers](/blog_content/how-to-flexbox-based-banner-patrons/5-banner-widescreen-nav.png)

## See for yourself

Asterisk 2 will debut with Grawlix CMS version 1.3, but as patrons you’re eligible for an advanced look. [Get the code](/blog_content/how-to-flexbox-based-banner-patrons/banner-tutorial-april-2017.zip) so you can try this menu/header technique yourself.

— Ben