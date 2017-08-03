Installation
Installation
Learn how to install the Grawlix CMS.
2015-01-23
Ben Gremillion
Tag1, tag2

**The Grawlix CMS is a software package that you download from us, upload to your [web host](./web-host), configure … and then your site’s online.**

If you’re new to web hosting in general, read [Jordan Rodriguez’s getting-started guide](http://www.thedaemoschronicles.com/grawlix-cms-setup-walkthrough/).

Watch this quick video on how it all works, or read the instructions below.

<iframe src="https://player.vimeo.com/video/167557820" width="700" height="438" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

The video’s brief. So here’s everything written out, step by step.

## What you’ll need

Hang on — before you begin, make sure your web host meets [the requirements](./requirements). TL;DR — you need a [domain name](domain-name), a server with PHP and [MySQL](./mysql), a simple [code editor](./code-editor) and a [FTP](./ftp) program. It’s not as bad as it sounds. The first three usually come with your [web host](./web-host).

## What you’ll use

“Firstrun” is the script that sets up the Grawlix CMS. It will prompt you for information including:

- Your database name
- Database host name
- Database username 
- Database password

Your web host should provide this information, depending on its control panel and support channels. You’ll also need:

- Your name and email address
- An admin username and password of your choice
- The name of your comic

## The installation process

Follow these steps to install the Grawlix CMS.

1. FTP the files to your web host
2. Go to yoursitename.com/firstrun.php
3. Follow the prompts for database and comic info
4. Rename <span class="path">htaccess.txt</span> to <span class="path">.htaccess</span>
5. Rename <span class="path">config.sample.php</span> to <span class="path">config.php</span>
6. Delete <span class="path">firstrun.php</span>


Firstrun will ask for the information above as it does its thing. If you run into trouble, [ask us for help](/forum).

