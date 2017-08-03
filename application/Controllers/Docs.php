<?php namespace App\Controllers;

class Docs extends BaseController
{

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

	public function index()
	{
		$data = $this->view_data;

		echo view('site/header', $data);
		echo view('docs/main', $data);
		echo view('site/footer', $data);
	}

	//--------------------------------------------------------------------

}
