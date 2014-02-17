<?php

class Controller_Home extends App_Controller
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
	public function get_index()
	{
		$this->template->title = 'Home';
		$this->template->body  = View::forge('home/index');
	}
}