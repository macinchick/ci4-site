Using FTP
Using FTP
FTP is the process by which you put files on remote computers like web servers.
2015-01-23
Ben Gremillion
Tag1, tag2

**File Transfer Protocol, or FTP, is a fancy way of saying “send files to a different computer,” like when you upload files to your web host.**

Sending files by FTP is a common geek-ish thing you can do. It’s required for many CMSes, including the Grawlix CMS. Good news is, modern programs make it reasonably easy to do.

<iframe src="https://player.vimeo.com/video/155339645" width="700" height="438" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

FTP is the act of copying files from one computer to another. It could be between almost any computer, but for website purposes, we mean sending files between your personal computer and a [web server](./web-host). **Uploading** files means “copying them from your computer to a different computer.” **Downloading** is the opposite: “getting copies of files onto your computer from somewhere else.”

Up or down, you can transfer any kind of file you have [permission](./ftp-permissions) to access — even the ones you can’t see.

![Animation showing how to upload files via FTP](/docs_content/1/FTP-demo-2b.gif)

Above: Uploading files is usually as simple as dragging files from your computer (left) to a web host (right).

## Invisible files

FTP tools make it possible to see so-called “invisible” files: those that a Mac or Windows PC won’t show in their respective Finder and Explorer. These files are hidden from common users because they’re not something that common users need to deal with. 

But websites are neither common, nor are they users. So here’s how they work: Invisible files’ names begin with a dot, like “<span class="path">.something</span>”.

A particular invisible file — <span class="path">.htaccess</span> — [is required](./requirements) to run the Grawlix CMS. But you can’t see it. That’s why the Grawlix CMS comes with a file named <span class="path">htaccess.txt</span>. After you upload this file, rename it: drop the <span class="path">.txt</span> (including the dot) and put a dot at the beginning of its name. So <span class="path">htaccess.txt</span> becomes <span class="path">.htaccess</span> after you upload it to your web host.

## FTP programs

Lots of programs will let you send files to remote servers. Some are free. Some have lots of features. Popular ones include [Fetch](http://fetchsoftworks.com), [Filezilla](https://filezilla-project.org/download.php?type=client), [Transmit](http://panic.com/transmit) and [WinFTP](http://win-ftp-client.soft32.com). You can’t go wrong with something that will let you **transfer files** and **set file permissions.** Bonus points if it lets you **rename files** on the server.

## Wrap up

- FTP is the process of copying files between remote computers.
- FTP programs allow you to see “invisible” files, or those whose file names begin with a dot.
- You need a FTP program that will let you transfer files and set file permissions, which most do.
