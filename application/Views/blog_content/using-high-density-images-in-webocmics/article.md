Using high-density images in webcomics
Using high-density images in webcomics
Modern screens are sharper than ever. That creates an opportunity for webcomic artists to show their work at a higher resolution than ever … except that we’re not quite ready.
2016-08-13
Ben Gremillion
Tags

Let’s talk about web images at large.

Big, high-resolution images are a popular trend in web design today. When done well, they *show* people what the site is about at first glance. 

For webcomics, that’s a given: most display the most recent comic page right from the start. But before we throw gloriously gigantic graphics onto our websites, we have to consider the consequences of going big.

##  What is high-res? 

High-resolution images use more pixels than normal images, but display them in the same amount of space. The extra pixels make the images look extra sharp — on high-res screens.

There are more of those every year, from [tablets](http://www.cnet.com/news/tablets-with-the-best-screens/) to [laptops](http://www.theregister.co.uk/2014/11/28/five_high_dpi_laptops_roundup/) to [certain monitors](http://lifehacker.com/five-best-4k-computer-monitors-1712678664). That's good news. It means webcomics have time to prepare. But how?

## PPI doesn’t matter one bit

There’s a myth that one must convert an image to 72 PPI — points per inch — when saving for the web in Photoshop. But Photoshop does that for you. 

We spoke to an Adobe product manager who confirmed that images saved for web are resized (but not resampled) to 72 PPI. That means it keeps the same number of pixels but resets PPI to the original Mac display setting.

Now, understand that “resampling” means to change an image’s pixel dimensions, while “resizing” means to change the size of those pixels when printed. Only the former affects how it looks in a browser.

In truth, pixels are pixels when saving images for the web, and points per inch doesn’t matter. The tricky part today is that a pixel on the screen isn’t strictly a pixel in design.

## Device pixels vs. design pixels

Many small screens today use pixels so small that users can’t discern them with the naked eye. An iPad Air 2 screen, for example, [measures 2048×1536 pixels](https://www.apple.com/ipad-air-2/) on a screen only 9.7” wide. That would spell bad news for webcomics whose images are, say, 960 pixels wide — less than half the width of the tablet. What looks great on desktop browsers looks minuscule on high-res tablets and smartphones.

Luckily the makers of high-resolution devices took that into account with “device independent pixels.”

*Physical pixels* are the actual dots that a screen displays, like the iPad’s 2048 width. High-density screens cram more than one physical pixel into a *device independent pixel* (DIP), [sometimes called optical reference units](http://alistapart.com/article/a-pixel-identity-crisis#section2). The iPad example would measure 1024 DIPs wide.

![Diagram of regular vs. high-res images](/blog_content/using-high-density-images-in-webocmics/Hi-res-art.png)

Pixel measurements in CSS refer to DIPs, not physical pixels. That means websites designed for 320 pixel-wide screens, but displayed on screens with 640 physical pixels, will still look like they’re 320 pixels wide.

All this is important for readability, or the fine art of preventing users from squinting on handheld devices, while making images look four times more crisp than their traditional desktop counterparts.

## Going forward

If your webcomic calls for large graphics, we urge you to consider the user how quickly the images will download. Faster is better. The best rule of thumb is to find the minimum acceptable quality per byte. 

And for those high-res screens? We don’t believe they’re a factor … yet. Give it five years before people start complaining your comic looks low-res.