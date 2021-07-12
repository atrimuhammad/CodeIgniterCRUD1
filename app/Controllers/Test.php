<?php

namespace App\Controllers;

class Test extends BaseController
{
	public function dummy()
	{
		return view('welcome_message');
	}
}