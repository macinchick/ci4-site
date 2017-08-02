<?php namespace App\Controllers;

use CodeIgniter\Controller;

class BaseController extends Controller
{

	protected $helpers = ['cookie', 'filesystem', 'html', 'text'];

	protected $is_patron = NULL;

	//--------------------------------------------------------------------

	public function __construct(...$params)
	{
		// Core controller
		parent::__construct(...$params);

		// Make DB available to controllers
		$this->db = \Config\Database::connect();

		// Hard coded for testing
		$this->is_patron = TRUE;
	}

	//--------------------------------------------------------------------

}
