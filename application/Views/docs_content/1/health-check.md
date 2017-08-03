Health Check
Health Check
These diagnostic tools will help you check for basic problems across your webcomic site.
2015-01-23
Ben Gremillion
Tag1, tag2

**Health Check is a tool to monitor technical aspects of the site.** You won’t need this often, but it comes in handy if something seems odd configuration-wise. Odd, as in:

- Going to yoursite.com/anypage always gives a 404 error
- The site feels unusually sluggish
- You suspect something’s been hacked
- You care about [search engine optimization](./seo)

Although Health Check isn’t comprehensive, it’s a good thing to check out every now and then.

## Permissions

[The Grawlix CMS needs access](./ftp-permissions) to certain folders in your site. Permissions in Health Check indicates which of those folders it can act upon. While this is critical to the system’s operations, readers shouldn’t notice a difference if something goes awry.

If you can’t upload pictures in the Grawlix CMS’s admin panel, check the permissions section of Health Check, then use FTP to change [the necessary settings](./ftp-permissions).

## Panel files

The admin panel comes with every file it needs — no more, no less. Yet some hack attempts will add files to the website. Health Check has a list of every file that *should* be in the admin panel. If anything extra shows up, it will notify you in the panel files section.

## Access

This file, visible only in [FTP](./ftp), is like a traffic cop for URLs. That is, any time someone goes to a page on your site, .htaccess is responsible for conjuring up the right content. Without this file, readers can’t reach practically any of your [static](./static-pages) or [comic](./comic-pages) pages.

## SEO

Search engine optimization is a nebulous topic. The Grawlix CMS can only do so much to help you get found organically. But it’ll try. The SEO section of Health Check warns you of untitled, non-descriptive (extra short) and redundant comic page titles.

## Orphaned images

Orphaned images come in two varieties: Those that the Grawlix CMS finds, but aren’t part of pages; and those that pages *claim* to have, but don’t exist.

### Unregistered images

Let’s say you upload a few hundred comic page images via FTP. The Grawlix CMS will notify you of these, and let you create pages for them. Handy if the panel’s uploader chokes on too many megabytes of files.

### Missing registered images

Every comic page needs at least one graphic, but it’s possible to delete these (usually by FTP) without killing the pages themselves. In this case, the Grawlix CMS will suggest you replace or re-upload the files.


## Image weight

Readers appreciate fast websites. Image file size is one of the biggest factors in speed — or, more specifically, lack of speed. The image weight section warns you which images appear to be too big (or unusually small) for their size.

## Wrap up

Health Check is a tool that notifies you of certain common problems, and how to fix them.

<aside><p>**Behind the curtain:** The Health Check script began as many different tools we used to troubleshoot early versions of the Grawlix CMS. As the site developed, we realized that artists might also benefit from a quick status report. After that, including Health Check was a no-brainer.</p></aside>