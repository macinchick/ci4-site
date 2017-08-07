Design great websites with this comic-first approach
Design great websites with this comic-first approach
Building a website isn’t like creating a comic. Readers come first. Comic comes second. Site, a distant third.
2016-03-15
Ben Gremillion
Tag1, tag2

More than crafting a site that looks good, artists designing a website must solve problems in communication. They have to quickly tell readers where they are, set the comic’s tone, show readers how to get around the site — and make sure it works well in a variety of browsers and screen sizes.

These factors and others drove our development of the Grawlix CMS, and we intentionally designed templates with as few frills as possible. How? To solve design problems, we use “comic-first” and “mobile-first” approaches.

## Comic-first

Let’s forget color and style for a moment, and settle on some priorities.

We want readers to keep clicking through pages. That’s a goal that most webcomics share. Readers come for the comics, so playing them up is our top priority.

Playing up the comic often means playing down everything else. It’s easy to do — if you can resist the temptation to over-design.

**Background:** No matter how tempting, don’t create a background that distracts from the comic. Your website should support the comic. Save your creativity for the comic itself. The texture behind [Stand Still, Stay Silent](http://www.sssscomic.com/comic.php) fits the art style well without demanding attention. And [Kiwi Blitz’s](http://www.kiwiblitz.com/) background uses relatively muted colors compared to the comic it supports.

**Navigation:** Balance between making back/next links obvious yet unobtrusive. Good links are easy to spot, usually by being on their own. [Diesel Sweeties’](http://www.dieselsweeties.com/) black-on-white arrows stand apart from everything else, making them easy to find, yet their simplicity and size compared to the comic don’t detract from the reading experience.

**Banner image:** Also called the hero art, this image tells readers what they’re reading. It usually includes the webcomic’s name. Sometimes it features a character or two from the comic, posing for a metaphorical photo. Best practice suggests that the banner image should never force readers to scroll to see the comic. [Girls With Slingshots](http://www.girlswithslingshots.com/) has a relatively small banner image; its distinctive art style (and, of course, its [domain name](http://getgrawlix-mvc.dev/docs/1/domain-name)) is enough to tell readers where they are.

## Mobile-first

Mobile-first design is the process of designing for small screens, then adding or adapting content for large screens. The idea was[ proposed by Luke Wroblewski](http://www.lukew.com/ff/entry.asp?933) as a way to focus make sites that will age well while being easier to design.

The idea: it’s easier to add elements than remove them later, so design for small screens — say, 600 pixels wide or less — then add elements for larger screens. This principle is part of responsive web design (RWD), which changes a site to fit varying screen sizes. 

![responsive web design vs. not responsive](/assets/blog/designing-webcomic-site/rwd-vs-not.png)

As seen above, responsive websites change their format to fit differently-sized screens. Sometimes that means more than stacking headers and sidebars and such. Buttons get larger to allow for people’s fingers, rather than pixel-precise mouse cursors. Headers shrink to let people see content sooner. And sometimes, like the small-screen design of [Arch Bros.](http://arch-bros.com/) navigation transforms into an off-canvas menu.

## Design and the Grawlix CMS

The Grawlix CMS is design-agnostic. That means artists aren’t limited to what comes installed. They can create any look they want with their own HTML/CSS. But they don’t have to reinvent their own responsive web design. 

We researched many sites when building version 1 of the Grawlix CMS. It didn’t take long to notice a trend. Most sites followed a single-column format that introduced the site and let readers navigate pages before showing the comic itself. From that we developed a basic structure for our built-in themes:

![Illustration of the average webcomic format we found.](/assets/blog/designing-webcomic-site/standard-site-structure.png)

It’s all arranged in a single column that’s easy to use on smaller screens.

Not that every site follows the same format. [Gastrophobia](http://gastrophobia.com/) and [Let’s Speak English](http://www.marycagle.com/) employ narrow side columns, for example. But every site we’ve seen puts their comic in the middle, right where readers have come to expect them.

In our opinion, a site’s design should support its comic stylistically, without stealing the show. Those styles vary, but the best ones set a tone — and nothing else. Give it a shot when you [download and install](http://www.getgrawlix.com/downloads/) the software on your web host of choice.