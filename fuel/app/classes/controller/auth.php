<?php

class Controller_Auth extends App_Controller
{
	/**
	 *
	 */
	public function get_signup()
	{

	}

	/**
	 *
	 */
	public function post_signup()
	{
		$email    = Input::post('email');
		$password = Input::post('password');
		$confirm  = Input::post('confirm');

		try
		{
			// call Auth to create this user
			$user_id = Auth::create_user($email, $password, $email);

			// if a user was created succesfully
			if (! $user_id)
			{
				Response::redirect('/');
			}
			
			// log the user in
			Auth::force_login($user_id);

			// 
			Response::redirect('/');
		}

		// catch exceptions from the create_user() call
		catch (\SimpleUserUpdateException $e)
		{
			// duplicate email address
			if ($e->getCode() == 2)
			{
				
			}

			// duplicate username
			elseif ($e->getCode() == 3)
			{
				
			}

			// this can't happen, but you'll never know...
			else
			{
				
			}
		}
	}





	public function action_login()
	{
		// already logged in?
		if (\Auth::check())
		{
			// yes, so go back to the page the user came from, or the
			// application dashboard if no previous page can be detected
			\Messages::info(__('login.already-logged-in'));
			\Response::redirect_back('dashboard');
		}

		// was the login form posted?
		if (\Input::method() == 'POST')
		{
			// check the credentials.
			if (\Auth::instance()->login(\Input::param('username'), \Input::param('password')))
			{
				// did the user want to be remembered?
				if (\Input::param('remember', false))
				{
					// create the remember-me cookie
					\Auth::remember_me();
				}
				else
				{
					// delete the remember-me cookie if present
					\Auth::dont_remember_me();
				}

				// logged in, go back to the page the user came from, or the
				// application dashboard if no previous page can be detected
				\Response::redirect_back('dashboard');
			}
			else
			{
				// login failed, show an error message
				\Messages::error(__('login.failure'));
			}
		}

		// display the login page
		return \View::forge('login/login');
	}


	/**
	 *
	 */
	public function get_logout()
	{
		Auth::logout();

		Response::redirect('/');
	}
}