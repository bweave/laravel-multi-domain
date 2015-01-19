<?php

namespace Acme\Controllers\Client;

use Acme\Controllers\BaseController;
use Illuminate\Support\Facades\View;

class PagesController extends BaseController {

	/**
	 * Display the Client Homepage
	 *
	 * @return Response
	 */
	public function home()
	{
		return View::make('index')->withGreeting('Hi there from the Client PagesController!');
	}

}
