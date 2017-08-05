<?php namespace App\Controllers;

use App\Models\DocsModel_1;

use App\Libraries\Parsedown;

class Docs extends BaseController
{

	/**
	 * Directory that contains content files
	 */
	protected $content_path = APPPATH.'Views/docs_content/';

	/**
	 * Data for views
	 */
	public $view_data = array(
		'meta_title' => 'Documentation',
		'page_title' => 'Documentation',
		'meta_description' => 'How to install and use the Grawlix CMS.',
	);

	//--------------------------------------------------------------------

	public function __construct(...$params)
	{
		// Need this
		parent::__construct(...$params);
	}

	//--------------------------------------------------------------------

	/**
	 * Display the list of doc topics
	 */
	public function index()
	{
		$data = $this->view_data;

		$docs = new DocsModel_1();
		$data['topics'] = $docs->toc();

		echo view('site/header', $data);
		echo view('docs/main', $data);
		echo view('site/footer', $data);
	}

	//--------------------------------------------------------------------

	/**
	 * Display a version 1 doc page.
	 *
	 * @param		string
	 */
	public function version_1($slug)
	{
		$path = $this->content_path.'1/'.$slug.'.md';
		$data = $this->get_post($path);

		$docs = new DocsModel_1();
		$data['topics'] = $docs->section($slug);
		$data['current_slug'] = $slug;

		echo view('site/header', $data);
		echo view('docs/post', $data);
		echo view('site/footer', $data);
	}

	//--------------------------------------------------------------------

	/**
	 * Parse the markdown file for this doc page.
	 *
	 * @param		string
	 * @return		array
	 */
	public function get_post($path)
	{
		$data = $this->view_data;

		if (file_exists($path))
		{
			$text = file($path);
			$data['meta_title'] = trim(array_shift($text));
			$data['headline'] = trim(array_shift($text));
			$data['meta_description'] = trim(array_shift($text));
			$data['date'] = trim(array_shift($text));
			$data['byline'] = trim(array_shift($text));
			$data['tags'] = trim(array_shift($text));
			$data['extra'] = trim(array_shift($text));

			$content = implode("\n", $text);
			$parsedown = new Parsedown();
			$data['article_content'] = $parsedown->text($content);
		}

		return $data;
	}

	//--------------------------------------------------------------------

}
