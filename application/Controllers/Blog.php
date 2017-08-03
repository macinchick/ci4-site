<?php namespace App\Controllers;

class Blog extends BaseController
{

	/**
	 * Data for views
	 */
	public $view_data = array(
		'meta_title' => 'Blog',
		'page_title' => 'Blog',
		'meta_description' => 'News and notes about webcomic production and the Grawlix CMS.',
	);

	//--------------------------------------------------------------------

	public function __construct(...$params)
	{
		// Need this
		parent::__construct(...$params);
	}

	//--------------------------------------------------------------------

	public function index()
	{
		$data = $this->view_data;

		echo view('site/header', $data);
		echo view('blog/main', $data);
		echo view('site/footer', $data);
	}

	//--------------------------------------------------------------------

	public function post($slug)
	{
		echo '<pre>$slug|';print_r($slug);echo '|</pre>';

		echo '<pre>$this->request|';print_r($this->request->uri);echo '|</pre>';


		$data = $this->view_data;

		echo view('site/header', $data);
		echo view('blog/main', $data);
		echo view('site/footer', $data);
	}

	//--------------------------------------------------------------------

}
