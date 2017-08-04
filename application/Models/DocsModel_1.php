<?php namespace App\Models;

/**
 * Version 1.x Docs
 */

class DocsModel_1 {

	public $traffic_list_topics = array(
		'cms' => array( 'title' => 'Tools' ),
		'concepts' => array( 'title' => 'Concepts' ),
		'customization' => array( 'title' => 'Customization' ),
		'docs' => array( 'title' => 'Docs' ),
		'glossary' => array( 'title' => 'Glossary' ),
		'main' => array( 'title' => 'Main' ),
		'misc' => array( 'title' => 'Miscellaneous' ),
		'operational' => array( 'title' => 'Operational' ),
	);

	public $traffic_list = array(
		'main' => array(
			'prologue' => array(
				'title' => 'What is the Grawlix CMS?',
				'url' => 'prologue.md'
			),
			'sequential-structure' => array(
				'title' => 'Sequential structure',
				'url' => 'sequential-structure.md'
			)
		),
		'docs' => array(
			'topics' => array(
				'title' => 'Topics',
				'url' => 'topics.php'
			),
			'search' => array(
				'title' => 'Search',
				'url' => 'search.php'
			),
			'license' => array(
				'title' => 'License',
				'url' => 'license.md'
			),
		),
		'concepts' => array(
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
		'cms' => array(
			'advertising' => array(
				'title' => 'Advertising',
				'description' => 'Ads are clickable parts of a theme that take people to other sites, preferably with the intent of spending moolah.',
				'url' => 'advertising.md'
			),
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
			'health-check' => array(
				'title' => 'Health check',
				'description' => 'Health check is a tool to monitor technical aspects of the site. You won’t need this most of the time, but it comes in handy if something seems odd configuration-wise.',
				'url' => 'health-check.md'
			),
			'link-list' => array(
				'title' => 'Link list',
				'description' => 'A “link list” is a collection of sites that artists want to share with her/his readers. The Grawlix CMS comes with two link lists: One that appears on the side of a page, and one that’s an entire page.',
				'url' => 'link-list.md'
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
		'customization' => array(
			'overview' => array(
				'title' => 'Overview',
				'description' => 'overview',
				'url' => 'customizing-overview.md'
			),
			'themes' => array(
				'title' => 'Themes',
				'description' => 'A theme is a set of files and database info that gives a Grawlix site its unique look and feel.',
				'url' => 'themes.md'
			),
			'show' => array(
				'title' => 'Show',
				'description' => 'show() is a function for displaying predefined items that usually come from the database. The text in quotes corresponds to a label used by the Grawlix CMS.',
				'url' => 'show-function.md'
			),
			'snippets' => array(
				'title' => 'Snippets',
				'description' => 'Each PHP script in a Grawlix theme is actually part of a given web page. The Grawlix CMS assembles HTML from different parts we call “snippets”.',
				'url' => 'snippets.md'
			),
		),
		'glossary' => array(
			'apache' => array(
				'title' => 'Apache',
				'description' => 'Apache is a program that sends web pages to browsers that request data.',
				'url' => 'apache.md'
			),
			'domain-name' => array(
				'title' => 'Domain name',
				'description' => 'A domain name is the principle address of a website.',
				'url' => 'domain-name.md'
			),
			'web-host' => array(
				'title' => 'Web host',
				'description' => 'A web host is a company that owns computers (servers) that specialize in giving information to browsers on demand.',
				'url' => 'web-host.md'
			),
			'url' => array(
				'title' => 'URL',
				'description' => 'URL stands for Uniform Resource Location. It’s the complete address of a page on the web.',
				'url' => 'url.md'
			),
		),
		'misc' => array(
			'special-thanks' => array(
				'title' => 'Special thanks',
				'description' => '',
				'url' => 'shout-out.md'
			),
		),
	);

	//--------------------------------------------------------------------

	public function __construct()
	{
	}

	//--------------------------------------------------------------------


}