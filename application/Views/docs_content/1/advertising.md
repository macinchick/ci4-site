Advertisements
Advertisements
Ads in your webcomic site include Google Adsense and custom “house” ads that link to external websites.
2015-01-23
Ben Gremillion
Tag1, tag2

**Ads are clickable parts of a theme that take people to other sites, preferably with the intent of spending moolah.** If you’re in the business of making money off your site, then ads are a must. Luckily the Grawlix CMS lets you add different kinds of, err, ads to your site. I mean, you can put different money-making graphics and code snippets onto your website. But first, let’s talk about slots.

## Theme slots
*Slots* are locations in your comic’s theme that can hold ads. These vary in size, shape, and location, and different themes have different numbers of slots.

Each slot has a specific size, measured in pixels. You can only put ads that are less than or equal to the slot’s dimensions. That is, you can fit a 300&times;300 graphic into a hole that measures 300&times;300. Likewise, a 200&times;100 ad would work fine. But you can’t plop a 782&times;90 ad into a 300&times;300 slot. 792 is just too wide. And 640&times;480 is right out.

The Grawlix CMS’s default templates lean towards [IAB standards](https://en.wikipedia.org/wiki/Web_banner#Standard_sizes), and support just about anything else. As for file types, you can upload the usual suspects: JPG, PNG and GIF.

Speaking of, ads come in three forms:

- House ads
- Project Wonderful
- Google Adsense

## House ads

House ads, a.k.a. promos, are graphics and links that you create and manage yourself. While these are a cinch to set up, they don’t generate revenue — they just entice readers to click. If you’re selling your own swag or want to tout your Patreon campaign, promos are the way.

Each promo as a few parts:

- **Image:** Graphic that readers see. Theme ad slots (see above) look to an ad’s image when figuring out if the ad will fit the slot’s width/height.
- **Destination:** The URL to which ads take readers when tapped.
- **Code:** If you have your own HTML or JavaScript for an ad. If you enter code, themes will ignore image and destination.

## Project Wonderful

We’ve worked with [Project Wonderful](http://projectwonderful.com) to make adding their ads to your site easy. Enter your Wonderful ID into the Grawlix CMS, and Grawlix will read which ads are available to your Wonderful account.

About those ads: You cannot manage your Project Wonderful account from within the Grawlix CMS. You can, however, choose which ads from Wonderful go where in your site (see “ad slots” below).

<aside><p>**A geeky thanks:** We can do all of this because the good folks at Project Wonderful were kind enough to give us access to their API. I’d like to give a shout-out to their team for accommodating some of our specific requests.</p></aside>

## Google Adwords
Yes, we support Google Adwords. That’s words, plural: If you have more than one ad, or even more than one account, you can add their code to the Grawlix CMS.

From a practical standpoint, Adwords are dead simple. Google provides to you snippets of code that generate their ads automagically. Pop that code into the appropriate site, tap “save,” and you’re done. To Grawlix, Adsense ads occupy a minimum of 100x100 pixels in a [theme slot](#theme-slots). 

