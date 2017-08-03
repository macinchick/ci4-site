File permissions
File permissions
Every file on your host’s server lets different people access it through a three-digit number.
2015-01-23
Ben Gremillion
Tag1, tag2

**Web hosts are [big on security](http://www.rackspace.com/managed_hosting/services/security/). Every file and folder in a web server has *permissions,* or settings that control who may edit, add to or delete files & folders.**

The idea is to:

- Keep other people out of your account (and you out of theirs)
- Cut down on hack attacks from nefarious hackers
- Help organize files if more than one person has access to the same account

Why should you care? Because certain parts of the Grawlix CMS need special permissions to run properly. For example, you use the Grawlix CMS’s “bulk import” feature to upload many images at once. The folder into which those pics go needs permission to accept new images. After all, you don’t want just *anyone* to add pages to your comic.

The Grawlix CMS makes its own folders and generally sets the correct permissions, but you may need to tweak settings. Here’s how that works.

## Ownership

Every file has an owner. In most cases, that’s you. Ownership gives the right to edit or delete a file. If you own a file, you can make any change you want, or replace it with a new file, or destroy it altogether. 

### Grawlix CMS ownership

The Grawlix CMS owns you upload through the admin panel. For example, when you upload comic page images with the “new page” feature, the Grawlix CMS assumes ownership of those images. That allows it to move the images around, create thumbnails, and replace the images if necessary.

### Your ownership

You own what you upload by FTP.

As mentioned earlier, FTP is a means of copying files to another computer. To do that, you need to log in. The server then knows who you are and, when you upload files, acknowledges that you own what you upload.

That limits what the Grawlix CMS can do with the files, though, especially with graphics. The Grawlix CMS can make comic pages, no problem. But it can’t replace or delete an image that you own … at least, not without your permission.

## Permission numbers

444, 766, 777 — all these numbers indicate different levels of security. [The specifics](http://www.linux.org/threads/file-permissions-chmod.4094/) aren’t important here — all you need to know is that every number has a different meaning, and you only need to care about a few of them.

**644: Anyone can read a comic book, but not dog-ear the pages.** This is akin to a physical comic book with laminated pages: Anyone can read a page set to 644, and even make their own fan art. But the original file is safely sealed away. That means hackers can’t easily scrawl all over it with Sharpies for their own nefarious purpose. While traditionally it implies [constricted consumption of media](http://en.wikipedia.org/wiki/John_Philip_Sousa#Hostility_to_recording), 644 protects websites from outside interference.

**755: Someone can read and use, but *not* edit, a file marked 755.** Anyone can read the page and someone with a scanner could edit a copy of the page to, say, add color to a black and white illustration. But they can’t change the original. You don’t want hackers editing your files, but 755 has its uses. Folders are best set to 755 so the Grawlix CMS can add images to them, for example. But people *could* [riff on it](http://thehawkeyeinitiative.com).

**777: Given access to the server, everyone can edit or delete a file with a 777 permissions code.** Malicious hackers, given enough time, can edit or delete a file set to 777. It’s dangerous, which is why we recommend only setting a file to 777 if a) it’s an image and b) you plan to [import it immediately](./importing).

## Wrap up

- “Ownership” of a file determines who can do what — notably edit, delete or replace it.
- You generally own everything that you upload by FTP.
- The server owns everything sent by the admin panel.
- You can grant the server permission to edit/replace/delete a file.
