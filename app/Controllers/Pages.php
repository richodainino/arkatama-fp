<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function view($page = 'home')
	{
		if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}

		return view('templates/header')
			. view('pages/' . $page)
			. view('templates/footer');
	}
}
