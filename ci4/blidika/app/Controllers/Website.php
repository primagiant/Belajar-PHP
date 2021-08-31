<?php

namespace App\Controllers;

class Website extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home | Dashboard',
		];
		return view('website/index', $data);
	}

	public function detail()
	{
		$data = [
			'title' => 'Detail | nantijudulproject',
		];
		return view('website/detail', $data);
	}
}
