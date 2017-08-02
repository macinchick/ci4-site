<?php namespace App\Controllers;

use CodeIgniter\Controller;

class BaseController extends Controller
{

	/**
	 * An array of helpers to be automatically loaded upon class instantiation.
	 *
	 * @var		array
	 */
	protected $helpers = ['cookie', 'html', 'text'];

	//--------------------------------------------------------------------


}
