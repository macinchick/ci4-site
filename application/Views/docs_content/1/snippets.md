The snippet( ) function
The snippet( ) function
Snippets are bits of reusable code for your webcomic’s theme.
2015-01-23
Ben Gremillion
Tag1, tag2

**Each PHP script in a Grawlix theme is actually part of a given web page.** The Grawlix CMS assembles HTML from different parts we call “snippets”. Writing this code:

`<?=snippet('header')?>`

Will grab the contents of a file called <span class="path">snippet.header.php</span> and add it to the overall file. For example, the file called page.comic.php includes a header, a footer, and other snippets.

Technically you could name a snippet anything you want, like <span class="path">snippet.wokkawokka.php</span>, as long as it begins with “snippet” and ends with “php”.

Here are some real snippets that the Grawlix CMS uses:

- header
- comic-nav
- share
- follow
- twitterstream
- transcript
- comments
- footer
- sidebar
- googleanalytics

These files must use the `.php` extension, but they don’t have to contain any PHP. Also, you can create your own snippets.

## Wrap up

`snippet('name')` is a function for including a template file from your install’s filesystem. The text in quotes matches part of a filename. For example, `snippet('header')` corresponds to <span class="path">snippet.header.php</span>. Likewise `snippet('wokkawokka')` would grab the “wokkawokka” snippet. That’s just an example, though. [It’s not real](https://www.youtube.com/watch?v=ci9gPZnqiGY). 