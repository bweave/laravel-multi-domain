<?php

namespace Acme\Controllers\Admin;

use Acme\Controllers\BaseController;
use Illuminate\Support\Facades\View;

class PagesController extends BaseController {

	/**
	 * Display the Admin Homepage
	 *
	 * @return Response
	 */
	public function home()
	{
		return View::make('index')->withGreeting('Hi there from the Admin PagesController!');
	}

}
