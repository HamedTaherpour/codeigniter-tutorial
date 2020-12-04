<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data ['posts'] = [
			[
				'title' => 'Post A',
				'img' => 'assets/img/img-1.jpg',
				'content' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
				'date' => '2020/10/10'
			],
			[
				'title' => 'Post B',
				'img' => 'assets/img/img-2.jpg',
				'content' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
				'date' => '2020/10/12'
			],
			[
				'title' => 'Post C',
				'img' => 'assets/img/img-3.jpg',
				'content' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
				'date' => '2020/10/13'
			],
			[
				'title' => 'Post D',
				'img' => 'assets/img/img-4.jpg',
				'content' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
				'date' => '2020/10/15'
			],
			[
				'title' => 'Post E',
				'img' => 'assets/img/img-5.jpg',
				'content' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
				'date' => '2020/10/16'
			],
			[
				'title' => 'Post F',
				'img' => 'assets/img/img-6.jpg',
				'content' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
				'date' => '2020/10/17'
			],

		];

		echo view('template/header');
		echo view('page/index', $data);
		echo view('template/footer');
	}

	public function showPost()
	{
		echo view('template/header');
		echo view('page/post');
		echo view('template/footer');
	}
}
