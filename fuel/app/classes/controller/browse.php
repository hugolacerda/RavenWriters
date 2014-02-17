<?php

class Controller_Browse extends App_Controller
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
	 * View and Article by url
	 */
	public function get_index()
	{
		// if (! $browse = Model_Article::get_by_url($url))
		// {
		// 	throw new HttpNotFoundException;
		// }

		$this->template->title = 'Browse';
		$this->template->body  = View::forge('browse/index');
	}
}