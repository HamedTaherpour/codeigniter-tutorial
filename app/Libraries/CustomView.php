<?php namespace App\Libraries;

class CustomView
{
	public function postItem($post)
	{
		return view('layout/itemPost', ['post' => $post]);
	}
}
