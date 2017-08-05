<?php namespace App\Models;

/**
 * Version 1.x Docs
 */
class DocsModel_1 {

	/**
	 * List topics in order of appearance
	 */
	protected $list_topics = array(
		'concepts' => array( 'title' => 'Concepts' ),
		'cms' => array( 'title' => 'CMS tools' ),
		'operational' => array( 'title' => 'Operational' ),
		'customization' => array( 'title' => 'Customization' ),
	);

	/**
	 * Content for each topic in $list_topics
	 */
	protected $list_content = array(
		'concepts' => array(
			'prologue' => array(
				'title' => 'What is the Grawlix CMS?',
				'url' => 'prologue.md'
			),
			'sequential-structure' => array(
				'title' => 'Sequential structure',
				'url' => 'sequential-structure.md'
			),
			'comic-pages' => array(
				'title' => 'Comic pages',
				'description' => 'Comic pages contain graphics that make up the narrative. They’re what readers came to read.',
				'url' => 'comic-pages.md'
			),
			'markers' => array(
				'title' => 'Markers',
				'description' => 'Markers indicate changes in the narrative. We use markers to denote new chapters, scenes, story arcs, epilogues, even bonus material — anything that begins a new set of pages.',
				'url' => 'markers.md'
			),
			'static-pages' => array(
				'title' => 'Static pages',
				'description' => 'A “static page” holds information that doesn’t belong to your comic’s story.',
				'url' => 'static-pages.md'
			),
			'image-optimization' => array(
				'title' => 'Pixel weight, part 1',
				'description' => 'Optimizing your graphics to download quickly is important to keep readers engaged. Here’s how it works.',
				'url' => 'image-optimization.md'
			),
			'image-optimization-2' => array(
				'title' => 'Pixel weight, part 2',
				'description' => 'Optimizing your graphics to download quickly is important to keep readers engaged. Here’s how it works.',
				'url' => 'image-optimization-2.md',
				'visible' => false
			),
			'image-optimization-3' => array(
				'title' => 'Pixel weight, part 3',
				'description' => 'Optimizing your graphics to download quickly is important to keep readers engaged. Here’s how it works.',
				'url' => 'image-optimization-3.md',
				'visible' => false
			)
		),
		'cms' => array(
			'archives' => array(
				'title' => 'Archives',
				'description' => 'Archives let readers browse older pages in your comic. You can control what they see and, to an extent, how they navigate.',
				'url' => 'archives.md'
			),
			'book-view' => array(
				'title' => 'Book view',
				'description' => 'The Grawlix CMS provides an overview of your books’ contents — their pages and markers — called the Book View. This script lists pages in order, allows you to add or remove markers, and to create new pages.',
				'url' => 'book-view.md'
			),
			'media-library' => array(
				'title' => 'Media library',
				'description' => 'Manage your images and their related data, including alt descriptions and thumbnails, from a single source.',
				'url' => 'media-library.md'
			),
			'health-check' => array(
				'title' => 'Health check',
				'description' => 'Health check is a tool to monitor technical aspects of the site. You won’t need this most of the time, but it comes in handy if something seems odd configuration-wise.',
				'url' => 'health-check.md'
			),
			'main-menu' => array(
				'title' => 'Main menu',
				'description' => 'The menu is a series of links in your site’s design that take readers to non-comic pages in your site. Traditionally called navigation or a nav bar, we call the menu a “menu” to differentiate it from the first/back/next/last links on each comic page.',
				'url' => 'main-menu.md'
			),
			'settings' => array(
				'title' => 'Settings',
				'description' => 'You can control site-wide preferences in the “Settings” section of your admin panel.',
				'url' => 'settings.md'
			),
			'social-media' => array(
				'title' => 'Social media',
				'description' => 'Social media refers to the ability to tell people about a site or comic page — “hey, check this out” — often with the push of a button.',
				'url' => 'social-media.md'
			),
		),
		'operational' => array(
			'requirements' => array(
				'title' => 'Requirements',
				'description' => 'Grawlix has a few standard requirements, not unlike WordPress, Kirby, Drupal, or other popular content management systems. Namely PHP, MySQL, FTP, hosting and a domain.',
				'url' => 'requirements.md'
			),
			'installation' => array(
				'title' => 'Installation',
				'description' => 'The Grawlix CMS comes with a file called firstrun.php. As the name implies, this is the script you need to run first. Visit yoursite.com/firstrun.php and follow the prompts.',
				'url' => 'firstrun.md'
			),
			'importing' => array(
				'title' => 'Importing images',
				'description' => 'How to get graphics and image into your comic story.',
				'url' => 'importing.md'
			),
			'ftp' => array(
				'title' => 'FTP',
				'description' => 'FTP is the process of copying files from one computer (like yours) to another (like a web hosting service).',
				'url' => 'ftp.md'
			),
			'ftp-permissions' => array(
				'title' => 'Permissions',
				'description' => 'For security reasons, web servers can prevent certain people from editing certain files.',
				'url' => 'ftp-permissions.md'
			),
			'code-editor' => array(
				'title' => 'Code editors',
				'description' => 'A code editor is a program people use to edit geekish files like HTML docs and PHP scripts. A good code editor saves what you see.',
				'url' => 'code-editor.md'
			),
			'seo' => array(
				'title' => 'SEO',
				'description' => 'Search Engine Optimization (SEO) is a fancy way of saying “make my stuff easy to find in a search.”',
				'url' => 'seo.md'
			),
			'metadata' => array(
				'title' => 'Metadata',
				'description' => 'Metadata is information about information, like a title, date, description or author.',
				'url' => 'metadata.md'
			),
		),
		'customization' => array(
			'themes' => array(
				'title' => 'Themes',
				'description' => 'A theme is a set of files and database info that gives a Grawlix site its unique look and feel.',
				'url' => 'themes.md'
			),
			'show' => array(
				'title' => 'The show() function',
				'description' => 'show() is a function for displaying predefined items that usually come from the database. The text in quotes corresponds to a label used by the Grawlix CMS.',
				'url' => 'show-function.md'
			),
			'snippets' => array(
				'title' => 'The snippet() function',
				'description' => 'Each PHP script in a Grawlix theme is actually part of a given web page. The Grawlix CMS assembles HTML from different parts we call “snippets”.',
				'url' => 'snippets.md'
			),
			'static-patterns' => array(
				'title' => 'Static patterns',
				'description' => 'Patterns are theme files that let you edit the HTML on static pages — specifically, their content blocks.',
				'url' => 'static-patterns.md'
			),
		),
	);

	//--------------------------------------------------------------------

	/**
	 * Put the arrays together and return the table of contents.
	 *
	 * @return		array
	 */
	public function toc()
	{
		$master = array();

		foreach ($this->list_topics as $slug => $arr)
		{
			$master[$slug]['title'] = $arr['title'];
			$master[$slug]['content'] = $this->list_content[$slug];
		}

		return $master;
	}

	//--------------------------------------------------------------------

	/**
	 * Given a page slug, return the list of topics for that entire section.
	 *
	 * @param		string
	 * @return		array
	 */
	public function section($slug)
	{
		foreach ($this->list_content as $section => $list)
		{
			if (array_key_exists($slug, $list))
			{
				$section_list = $this->list_topics[$section];
				$section_list['content'] = $list;
				return $section_list;
			}
		}
	}

	//--------------------------------------------------------------------

}