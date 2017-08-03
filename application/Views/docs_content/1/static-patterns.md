Static page patterns
Static page patterns
Patterns control the layout and code in static pages’ content blocks.
2017-04-14
Ben Gremillion
Tag1, tag2

**Patterns are theme files that let you edit the HTML on [static pages](./static-pages) — specifically, their content blocks.**

Except for freeform pages, every static page organizes its information into “content blocks.” For example, a cast page puts each of its characters’ bios into its own content block. Three characters equals three blocks.

## Selecting patterns per page

To choose which pattern a page uses, go edit the page in the admin panel. Select a pattern from the “patterns” drop-down list and hit save.

## Creating end editing patterns

You can edit any pattern file with a standard code editor and a working knowledge of HTML. Anything goes: patterns can contain as much or as little code as you need.

To edit the CSS related to a pattern, add the classes you create to the site’s tone file. If you create a `<div>` with where `class="bats"`, then your CSS would need a selector for `.bats{}` .

To create a new pattern file, make a new, empty file whose name begins with “pattern” and ends with “php”. For example, <span class="path">pattern.bleep-layout.php</span> would contain a pattern named “bleep layout”. Inside of that file you can write any HTML you like, as well as placeholders for blocks’ content.

To delete a pattern file, simply delete it from your theme folder — after making sure no pages are set to use it.

## Placeholders

Placeholders, sometimes called “wildcards,” are bits of text that say “put stuff here.” 

For example, if a cast page featured a character named Alice, then the system would replace `{title}` with “Alice”. When the system displays the bio for a character named, say, Bob, then it would replace `{title}` with “Bob”.

Version 1.3 of the Grawlix CMS supports four placeholders:

- `{title}`
- `{content}`
- `{link}`
- `(image}`

Each corresponds to a field in the static page editor.

## Wrap up

- Static patterns control the HTML for static pages’ content blocks.
- Patterns’ file names directly correspond to their names in the admin panel.
- Placeholders indicate where information from each content block will go in the HTML.