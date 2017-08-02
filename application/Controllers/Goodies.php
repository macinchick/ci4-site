<?php namespace App\Controllers;

class Goodies extends BaseController
{

	public function index()
	{

		if ($this->is_patron === TRUE)
		{
			return view('goodies');
		}
		else
		{
			return view('goodies-blocked');
		}

	}

	//--------------------------------------------------------------------

}
