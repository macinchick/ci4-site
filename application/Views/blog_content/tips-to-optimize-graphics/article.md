Tips to optimize graphics
Tips to optimize graphics
Learn ways to keep your graphics lean without sacrificing quality
2016-02-15
Ben Gremillion
Tag1, tag2

These days, you can’t count on pixels.

Today many high-resolution screens have pixels so small that people can’t see them individually. As pixels get smaller, so do the images they comprise. A 600-pixel-wide image that reads well on desktop screens will also fit comfortably in a handheld iPhone — and make readers squint. That’s a problem.

![](/blog_content/tips-to-optimize-graphics/Using-hardware-pixels.png)

But phone and tablet manufacturers figured a way to make images stop shrinking size on high-res screens. They redefined pixels.

## More pix, more probs

The goal is to make images look — well, not identical on differently sized screens, but readable at any size.

When a browser on a high-res screen looks at a website, it divides width and height by two. Although a screen might measure, say, 640 pixels wide, it tells the web browser it’s only 320. That means websites don’t look microscopic on high-res screens. 


![](/blog_content/tips-to-optimize-graphics/Using-reference-pixels.png)

This is good news for web designers whose CSS says “make this block *x* pixels wide.” What users see in their handheld devices is similar to what they see on a desktop screen.

It also means that normal images on high-res screens look kinda … blurry. They’re only displaying a quarter of the pixels needed to look sharp. Yes, one fourth: half the width and half the height. That’s a problem.


## 288 won’t save us

There’s a myth that one must convert an image to 72 DPI — dots per inch — when saving for the web in Photoshop or [other image editing apps](http://www.pixelmator.com/). One would think that quadrupling an image’s DPI to 288 would solve the problem. And one would be wrong. It’s not the DPI or PPI of an image that matters when saving for web. It’s the number of pixels. 

If a web page layout is, say, 1,000 pixels across, and your graphic is 800 pixels wide, then the graphic will fit because 800 is less than 1,000. DPI never enters the picture. And if it did, it wouldn’t help.

We spoke to a product manager at Adobe who said that images saved for web are automatically resized *but not resampled* to 72 PPI. Resampling changes the number of pixels to suit PPI; resizing leaves them alone. So images in Photoshop saved for web default to the old Mac standby without actually editing their pixels. So much for 144.

(Incidentally, other image editors have their own processes. Pixelmator, for example, removes all DPI/PPI data from its saved-for-web images to save a few bytes. But it works out the same. We tried it.)

## Size vs. size

For artists concerned about looking great on high-resolution screens, there’s only one solution today: save images four times larger than the design requires. If your website’s designed to display comic images 600&times;800 pixels, then your graphics should measure 1200&times;1,600 pixels.

But it comes at a cost. Making readers download four times as many pixels makes pages load that much slower. Slower pages make a bad reader experience.

While developing the Grawlix CMS, we ran experiments to see what would make sites fast without compromising image quality on screens of any resolution. From that we offer some tips:

- Don’t compress JPGs higher than 70%. Anything higher has [a significant rise in bytes for very little quality gain](https://zurb.com/expo/lessons/boost-website-speed-with-smart-image-compression).
- Aim for images with limited color palettes. The fewer variations in hue and value, the smaller your files will be in bytes. Think low-contrast, if possible.
- Compress in other places. Compensate for byte-heavy graphics by giving people smaller CSS files, less JavaScript, fewer http requests, or anything else that shrinks the overall page load. After all, it’s not just the pics that people receive. Check out [Google PageSpeed](https://developers.google.com/speed/pagespeed/insights/) for optimization tips.
- Photoshop’s JPGs aren’t always ideal. Squeeze bytes with a third-party service like [CompressJPEG](http://compressjpeg.com/) or [TinyPNG](http://compressjpeg.com/) and see if you get smaller file sizes. (Fair warning: you might not, but it’s worth a shot.)

You can read more of our thoughts on images for the web in *[Responsive Web Design Best Practices](https://studio.uxpin.com/ebooks/responsive-web-design-best-practices/)* and our earlier comic on [image optimization](http://www.getgrawlix.com/docs/1/image-optimization).

That’s a solution.