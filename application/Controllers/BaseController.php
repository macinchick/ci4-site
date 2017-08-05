<?php namespace App\Controllers;

use CodeIgniter\Controller;

class BaseController extends Controller
{

	protected $helpers = ['cookie', 'filesystem', 'form', 'html', 'text'];

	protected $logged_in = NULL;

	//--------------------------------------------------------------------

	public function __construct(...$params)
	{
		// Core controller
		parent::__construct(...$params);

		// Make DB available to controllers
		$this->db = \Config\Database::connect();

		// Hard coded for testing
		$this->logged_in = TRUE;
	}

	//--------------------------------------------------------------------

}
