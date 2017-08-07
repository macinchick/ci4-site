Our CMS security system and encryption proves themselves capable
Security checks out … and so does Ben
One day we tested our security system by simply logging out. Success! Sorta. I couldn’t get back in.
2016-10-15
Ben Gremillion
Tags

![Our security is tighter than this](/assets/blog/login-checks-out-and-so-does-ben/lock.jpg)

*[Originally posted at Patreon](https://www.patreon.com/posts/login-checks-out-6732678)*

From login to data entry, security touches every aspect of  web app. But by nature, security is picky.

Until recently, we didn’t dare log out of version 2 beta because the new secure login screen wasn’t fully developed. But it happened anyway. And in spite of being an avid [1password](https://vimeo.com/88901304) user, I neglected to jot down my login credentials. Oops.

While hacking his way back in, I hit several *intentional* obstacles.

- Passwords can not be recovered, only changed. Once encrypted, they’re encrypted for good.
- The system scans bits of information that I create, like character bios and blog posts, even if I had already given my username and password.
- Future versions of the Grawlix CMS will not display errors, hiding sensitive “here’s how it *should* work” information. 

So I faced a blank page and an identity challenge at every turn. Luckily I had full access to the database, and got back in with a new user and a fresh password — one reason databases have their own logins. 

Security is tight by necessity, and we’re taking steps to make sure that only artists who own their site can get in — provided they don’t pull a Ben.