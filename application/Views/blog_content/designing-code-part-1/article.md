Designing code, part 1
Designing code, part 1
An experiment: can code be easy to read, semantically correct, and visually appealing? I gave myself 15 days to find out.
2016-09-21
Ben Gremillion
Tag1, tag2


![Designing code](/blog_content/designing-code-part-1/designing-code-1.jpg)

Making design easy, isn’t.

We include site templates with the Grawlix CMS that artists can style to suit their needs. But one set of code doesn’t fit every webcomic — and few artists want to spend time coding.

So when I started building new themes for version 2 of the Grawlix CMS, I also experimented with writing the most flexible code possible with the fewest tags necessary.


## The flex files

My goals were straightforward:

1. The designs must adapt to a wide range of looks.
2. The code must be easy to read and edit.
3. The designs must adapt to different reading conditions.
4. The code must be semantic and accessible.

Then I gave myself 15 days to develop a design that met those criteria.

Easy and powerful. Universal and unique. Compatible and on time. Yikes. To do all that in one theme, I started with a fundamental question.


## What does a webcomic look like?

Most webcomics today fit a standard format. They have a banner image and site-wide links sit above the comic image itself. Below the image are social media and a blog post. Sometimes you’ll see comments. Occasionally ads fill the gaps. Don’t forget the Patreon or Hiveworks graphics. At the end is a copyright statement.

![Basic webcomic structre diagram](/blog_content/designing-code-part-1/Basic-structure.png)

[Not](http://egypt.urnash.com/rita/chapter/01/) [every](http://www.wormworldsaga.com) [comic](http://alisonwilgus.com/comics/hourly2016.html) [fits](http://www.delilahdirk.com/dd2/p001.html) this mold. [But](http://www.gunnerkrigg.com) [many](http://www.sssscomic.com/comic.php) [do](http://www.scurrycomic.com/scurry-comic). It’s a practical format for both readers and artists. Given that, I wrote several HTML docs with the common elements:

- Banner
- Menu
- Ad
- Back/next navigation
- Comic image
- Back/next navigation (again)
- “Share” links
- Blog post
- Comments
- “Follow” links
- Copyright

It came together in three HTML5 files with variations to test myself against rigidity. I also created two CSS files: one for layout and sizes, and one for colors and typography. 

Only later would I discover my mistake.


## An uncertain start

At first, I didn’t have any art direction. Without an actual comic to design *for,* I was just inventing visuals. 

That’s harder than it sounds. Inventing stuff and hoping it would magically apply to real webcomics doesn’t guarantee success. 

So I started designing for a theme instead of worrying about hitting a particular note. Seemed to work. Along the way I made some technical decisions.

- **Tones:** Our theme system uses one stylesheet for general layout upon which other “tone” CSS files embellish.
- **Semantics:** I wanted to keep the code [valid](http://validator.w3.org/), making it easy for search engines and screen readers to understand.
- **CSS3:** Studying analytics and popular webcomic sites, I decided that what used to be “bleeding edge” is now “acceptable.” Shadows, opacity, transparent PNGs, gradients, and round corners are both possible and practical for most readers.
- **Flexbox layout:** This lets us arrange lots of HTML with less hassle and more common sense.
- **BEM notation:** [Block-element-modifier](http://getbem.com) lingo inspired me to keep names readable.

Those last two were the biggest question marks. [Flexbox requires readers to use modern browsers](http://caniuse.com/#search=flexbox), and I was still grasping the concepts behind BEM. 

In [part two](/blog/post/designing-code-part-1) I’ll tell you how it came together, stumbled, and finally worked it all out.