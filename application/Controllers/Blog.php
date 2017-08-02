<?php namespace App\Controllers;

class Blog extends BaseController
{

	public function index()
	{
		echo view('site/header');
		echo view('blog/main');
		echo view('site/footer');
	}

	//--------------------------------------------------------------------

}
