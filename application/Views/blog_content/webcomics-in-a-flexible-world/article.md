Webcomics in a responsive web design world
Webcomics must adapt to a flexible world
Webcomics must respond to change. Specifically, the changes in their webbish medium.
2016-01-16
Ben Gremillion
Tag1, tag2

It’s a fact: people use the internet on the go. Smartphones and tablets are among the most popular web-surfing tools today, and that’s not about to change. Just ask Taptastic, whose iOS and Android apps are proof that people read comics on tiny screens.

And how do comics from any source look on both widescreen displays and tiny phone screens? It’s not always pretty. Or readable.

# ![Bleep on an iPhone](/blog_content/webcomics-in-a-flexible-world/bleep-in-a-phone.png)

What looks great on our large screens can get illegible on small ones. While not everyone expects full-page comics to look great on iPhones, it’s hard to ignore the potential readership we could earn if our sites, at least, didn’t require 21” Panasonics.

So what do we do about it?

## Responding to change

Responsive web design is the practice of making sites work well under different conditions. Designers usually treat “different” as browser width, measured in pixels, or content width, measured in rems or ems. Both approaches apply directly to webcomics, but in different ways. 

I’ll spare you the tech talk. It all comes down to websites that change depending on what the user’s computer (desktop, laptop, tablet, phone, etc) can display. This is done with … 

Wait, I said I’d skip the code. For specifics check out *[Responsive Web Design Best Practices](https://studio.uxpin.com/ebooks/responsive-web-design-best-practices/),* a book that I co-wrote, and [When Pages are Not Paper](http://www.webdesignerdepot.com/2012/09/when-pages-are-not-paper-the-designers-guide-to-layout-code/), an article I penned on laying out pages with code.

Mobile-savvy webcomic sites rearrange their contents to fit the space available. If there’s no room for a sidebar, then the sidebar gets pushed down the page. If a header’s too large, it gets reduced. If navigation is too unwieldy, then it’s pushed into an off-canvas menu. (Back and next buttons, however, tend to grow until they’re [large enough for fingers to hit](http://studio.uxpin.com/blog/is-40-pixels-enough-for-fat-finger-ui/).) 

Recently Google Product Director Luke Wroblewski [described five categories](https://www.lukew.com/ff/entry.asp?1514) of such transformations. We used these and other principles to create webcomic themes for the Grawlix CMS.

Today, the system ships with two themes, both of which we designed to fit on a variety of screen sizes. Based on [ZURB Foundation](http://foundation.zurb.com), these themes take a “mobile-first” approach that plans websites to expand rather than contract. 

“Expand” is the operative word. We can’t predict on what future devices people will view comics. In 2010 a clever fellow named Ethan Maroctte [described the practice of responsive web design](http://alistapart.com/article/responsive-web-design). As I wrote, “Now more than ever, we’re designing work meant to be viewed along a gradient of different experiences.”

But for webcomics, all that dances around the issue.

## Text reflows, images shrink

Most Webcomics today are based on thinking from yesterday. They compose panels of varying sizes into fixed-width and -height images, just like printed books. 

But unlike books, readers size their web browsers to unpredictable bounds. Sometimes they expand to their full 20” screens. Other times they’ll shrink it to half of their 13” laptop screens, or view it full-width on their smartphones. 

It’s unpredictable, but that doesn’t have to scare us off. [Scott McCloud’s experiments](http://scottmccloud.com/1-webcomics/index.html) with webcomic formats and others like [Hobo Lobo](http://hobolobo.net) by Stevan Živadinović and [Wormworld Saga](http://www.wormworldsaga.com) by Daniel Lieske demonstrate that we can use the web’s flexible format to our advantage. It’s a medium in its own right, not a second-class citizen to print.

The problem is that text responds to varying screen sizes *much* better than images do. Text, like the paragraphs you’re reading now, flow when crunched between tight margins. Shrink or expand your browser now to see it in action. 

Images, however, have fixed boundaries. They’re static objects that have two options: get smaller and get larger.

## Making it work in the real world

Alas, we don’t have a definitive solution yet. Every comic’s different, just like every artist’s goals. But looking forward we have a few ideas.

- **Build comics panel by panel.** Block grids reflow nicely on the web, making images stack when they run out of room. It trades fancy layouts for reader-friendliness.
- **Draw pages for different sizes.** Creating multiple comic images for varying screens sounds like more work. And it is. But doing so will provide a better reading experience.
- **Aim for 600.** There’s no sweet spot, but images that are about 600 pixels wide — in general — work well on everything from smartphones and up. It’s hardly ideal for many comics, whose detail, text or line weight rely on many more pixels. But it’s a start.
- **Test, test, test.** Nothing beats trying a comic on a real device. Don’t forget that few people have your exact computer configuration. Look at your work on other people’s screens. Load it up on an Android phone. Discover that “pixel-perfect” is relative.

Yeah, I said no tech, but some exciting developments are on the way.

A technical solution to help responsive webcomics is a proposal called `srcset`, short for “source set.” It means readers get a different image depending on what they’re using to browse the web. 

Using a smartphone? They get a stack of frames. Using a tablet? They get a series of panels — but not too many. Browser on a widescreen monitor? They get an image best suited for their capabilities. In short, srcset may lead to every solution we imagine today.

With this in mind, the Grawlix CMS lets artists upload multiple images per comic page. You might say we’re responding for the need change …

If you draw webcomics, then you need to pay attention to the medium. The web isn’t print. It’s fluid, and every reader has a different viewing experience. There’s no one solution to this design problem, but there is time to experiment. And the sooner we start, the better.