Importing art
Importing art
“Importing” is the process of adding images to your webcomic site.
2015-01-23
Ben Gremillion
Tag1, tag2

Your art is the heart of your comic. So importing images from your computer to a website is a must. **The Grawlix CMS gives you two ways to do that, depending on how many images you want to add at once, and how you want them organized.**

I’ll spare you the geekery. Bottom line:

- One image — Simple page uploader
- More than one image — FTP importer

Each has its pros and cons, depending on how you use them. 

## Single-page upload

The fastest, easiest way to add a page to your comic is to by the chapter “new page” feature. This script prompts you to create a complete page:

- Image
- Page title
- Chapter
- Publication date
- Blog post
- [Transcript](./seo)

## FTP importer

![Screenshot of FTP’ing into the /import folder](/docs_content/1/new-pages-by-ftp.png)

If you want to create more than one page at a time, or want to make more than one chapter at a time, you need the FTP importer. It’s important to note that this not an *uploader.* It doesn’t take files from your computer and put them online. Instead, it reads a folder that’s already on your website. Let me explain. 

Web browsers aren’t designed to upload many, many files in one go. [FTP](./ftp), though, is great at uploading bunches of files — hundreds, if necessary, even thousands. So we figured, why not take advantage of that?

Here’s how it works.

First, **organize your comic images into folders on your computer.** Don’t just make folders and throw in comic images. Each folder represents a group starting with a new [marker](./markers), so keeping them straight is a must. Also, the new markers will be named whatever the folders are called. If a folder is called, say, “Chapter 1” then so will its marker. Name a folder “Prologue” and the Grawlix CMS will create a marker called “Prologue.”

Next, visit the Grawlix CMS via FTP and you’ll find a folder called “import”. Upload your comic folders into this “import” folder.

Finally, go to “new page” in your admin panel and tap “create multiple comic pages.” You should see a list of folders. Tap the “import” button to start the process.

<aside><p>**Getting geeky:** In hindsight, FTP is obvious. During our initial tests we routinely added and deleted up to 900 graphic files by direct uploads, dramatically cutting our testing time. It was so handy that, like [the diagnostic tool](./health-check), we decided to keep it on. After all, we reasoned, artists are already required to upload the Grawlix CMS via FTP. Reliable + quick = practical. The downside? It requires artists to leave the panel. We decided it was worth the extra steps when we faced a real site that had 1,470 images.</p></aside>


## Wrap up

- How you add comic pages depends on what you’re trying to do, and how much you’re trying to do it. 
- If you only have one page at a time, use the “new page” tool. 
- If you have more than one, then organize them into folders and use the FTP importer.