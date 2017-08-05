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

	public function version_1($slug)
	{
		$path = $this->content_path.'1/'.$slug.'.md';
		$this->get_post($path);
	}

	//--------------------------------------------------------------------

	public function get_post($path)
	{
		$data = $this->view_data;
		echo '<pre>$data|';print_r($data);echo '|</pre>';

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
		echo '<pre>$data|';print_r($data);echo '|</pre>';
	}

	//--------------------------------------------------------------------

}
