<?php namespace App\Controllers;

class Goodies extends BaseController
{

	/**
	 * Data for views
	 */
	public $view_data = array(
		'meta_title' => 'Goodies',
		'page_title' => 'Goodies',
		'meta_description' => 'Cool stuff for supporters.',
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

		$view = 'goodies';

		// Restricted to current supporters
		$this->logged_in !== TRUE ? $view .= '-blocked' : $view;

		echo view('site/header', $data);
		echo view($view, $data);
		echo view('site/footer', $data);
	}

	//--------------------------------------------------------------------

}
