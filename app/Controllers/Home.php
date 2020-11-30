<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('template/header');
		echo view('page/index');
		echo view('template/footer');
	}

	public function showPost()
	{
		echo view('template/header');
		echo view('page/post');
		echo view('template/footer');
	}
}
