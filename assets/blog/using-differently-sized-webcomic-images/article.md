Adaptive images in websites mean mobile-screen friendliness
When is one image more than one image? When smart web design accounts for the future
The more web images adapt to readers’ needs, the more users will avoid laggy load times and get back to enjoying your webcomic.
2016-11-19
Ben Gremillion
Tags

![Photo within an iPhone of the same view](/assets/blog/using-differently-sized-webcomic-images/photo-photo.jpg)

HTML image tags are simple things. They say “put a picture here,” tell the browser where to get the picture, and provide a message if the picture is unavailable.

They harken back to a simpler time when designers made websites to fit an average screen size — say, a thousand pixels wide — and if your screen was too small, you needed to upgrade.

These days, though, screens run the gamut from small smartphones to 30” monitors. And the image element, with its one-size-fits-all approach, is starting to look primitive. Yet no one can agree on how to change it. Competing ideas have broken out, few of which browser-makers implemented. 

But the future is bright — or at least, less cluttered. At the time of this writing, two techniques are likely to supersede the plain image tag: the `picture` element and `srcset`, short for “source set.” And since we strive for a great comic reading experience, future versions of our CMS will use them to display webcomics.

## A load-bearing issue

The simplest solution is to load a large graphic — say, 2,000 pixels square — and hope the readers’ browsers are smart enough to shrink them well. That’s like saying “a XXXL shirt fits everyone, doesn’t it?” Yeah, it’ll cover what it needs to, but what a baggy waste.

If someone’s browser window is 800 pixels wide, and the comic image is 2,000 pixels wide, then they’re downloading 1,200 extra pixels for no good reason. Bloated files make sites load slower, leading to bored readers, and who wants that?

## How do new techniques work?

The `srcset` solution is simple: artists upload different sizes of the same graphic — for example, 600, 800 and 1,000 pixels wide. HTML tells the browser, “here are the available sizes,” and the browser chooses the most appropriate one.

That way readers on small screens don’t have to download humungous graphics they can’t see anyway — but readers with large screens are treated to the large version.

The technical bits get more complex, which is where the Grawlix CMS comes in.

## Future plans

Artists won’t have to worry about the technical details unless they want to. Our system will tackle the problem for them in two ways. 

First, future versions will automatically create smaller versions of every large comic image artists send it. Upload a 1,200-pixel-wide graphic? The system will create appropriate smaller versions, plus a thumbnail.

Second, artists will have the opportunity to override the automatic versions with creations of their own. That lets them control quality, or even develop other graphics specially made for smaller screens.

## Going forward

It’s worth repeating that the web is not print, but a distinct medium with its own properties. Webcomics *need* different sizes for different reading experiences. The more we adapt to readers’ needs, the more they’ll avoid laggy load times and get back to enjoying your comic.

