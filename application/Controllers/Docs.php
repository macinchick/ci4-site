<?php namespace App\Controllers;

use App\Models\DocsModel_1;

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

	public function version_1($keyword)
	{
		$data = $this->view_data;
		echo '<pre>$data|';print_r($data);echo '|</pre>';

		echo '<pre>$keyword|';print_r($keyword);echo '|</pre>';
	}

}
