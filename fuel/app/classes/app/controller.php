<?php

/**
 * 
 * 
 */
class App_Controller extends Controller_Template
{
	/**
	 *
	 */
	protected $user = null;

	/**
	 *
	 */
	public function before()
	{
		// run this first in all before methods
		parent::before();

		// 
		$this->_init_user();

		// 
		if ($this->template)
		{
			$this->_init_template();
		}
	}


	/**
	 *
	 */
	public function is_logged_in()
	{
		return isset($this->user);
	}


	/**
	 * 
	 */
	private function _init_user()
	{
		if (Auth::check())
		{
			$this->user = Model_User::query()->where('id', Auth::get_user_id()[1])->get_one();
		}
	}

	/**
	 * 
	 */
	private function _init_template()
	{
		
		$this->template->set_global('user', $this->user, false);
	}
}