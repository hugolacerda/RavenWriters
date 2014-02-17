<?php

class Controller_Article extends App_Controller
{
	/**
	 *
	 */
	public function before()
	{
		// run this first in all before methods
		parent::before();
	}

	/**
	 *
	 */
	// public function get_index()
	// {

	// }

	/**
	 * View and Article by url
	 */
	public function get_index()
	{
		// if (! $article = Model_Article::get_by_url($url))
		// {
		// 	throw new HttpNotFoundException;
		// }





		$this->template->title = 'Article';
		$this->template->body  = View::forge('article/view', [
			'article' => null, //$article,
		]);
	}
}