Media library
Media library
The media library is a set of tools you can use to manage image files registered in your website’s database.
2017-07-22
Ben Gremillion
Tag1, tag2

**The media library is a set of tools you can use to manage image files registered in your website’s database.** These include comic and static images, but not theme images. Not yet.

The media library, which comes independently of the core CMS, includes an image browser, metadata editor, usage manager, and a thumbnail generator for web hosts that allow server-side image creation.

## Browser

![Media browser](/docs_content/1/media-lib-browser.png)

As the name suggests, the browser screen lets you view and search for images. Unlike the comic book view, which searches by page title, the image browser searches by filename, path, or description (alt attribute). 

Click a trash can icon to permanently delete an image and its database record. No pressure — and no undo, either.

Click an image in the browser to edit its record and make a thumbnail in the editor. If you’re searching for static images, the “edit” icon will instead take you to the block editor.

## Editor

![Image metadata editor](/docs_content/1/media-lib-editor.png)

The metadata editor, which only applies to comic images, lets you focus on one particular graphic to change its description (alt attribute), upload a custom thumbnail, and review how the image is used.

The “main image” is the actual graphic you uploaded for a comic page. Its “thumbnail” is a smaller copy (technically stored in the same folder as the main image).

If your web host allows, you can generate a thumbnail based on the main image by clicking the aptly-named “generate thumbnail” button. If your web host does *not* allow image manipulation, the button will not appear.

But if you can’t auto-generate one, or choose to upload your own, remember that it must be the same file type as the original. For example, if the main image is a JPG, the thumbnail must also be a JPG.

## Usage

The usage screen lets you control on which comic pages an image appears. Clicking “add” will make the image appear on that page, along with any other images the page displays. Clicking “remove” will do the opposite. In the unlikely case you’ll want the same graphic on more than one page, the system won’t try to stop you.

## Thumbnail generator

If your web host permits image manipulation, at the bottom of the media library’s browser is link to the thumbnail generator screen. Clicking to the screen presents you with two options: (re)create all or fill in the blanks.

Clicking “create all thumbnails” will create new thumbnails for each of your comic images, **whether or not they already have one.**

Clicking “fill out thumbnails” will only create thumbnails for comic images that don’t already have them. That’s useful when upgrading, or if you accidentally delete a thumbnail file.

## Wrap up

- Unlike the book view, the media library lets you find and edit assets at the image level.
- Your web host may or may not allow you to automatically generate thumbnails, which readers can see in the archives page (version 1.5).
- Replace any comic image file by uploading a new copy with the media library’s editor.
- Assign or remove a given image to different comic page(s) by clicking “manage usage” on the edit screen.