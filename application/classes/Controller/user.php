<?php defined('SYSPATH') or die('No direct script access.');

Class Controller_User extends Controller_Layout {

	public function action_index()
	{
		header('location: '.URL::site('user/login'));
		die();
	}

	public function action_login()
	{
		if ($_POST)
		{
			$post = $this->request->post();
			$success = Auth::instance()->login($post['username'], $post['password']);

			if ($success)
			{
				header("Location: " . URL::base('http')."index.php/welcome");
				die();
			}
			else
			{
				$error = "Username or Password do not match.";
			}
		}


		$this->template->title = 'Login';
		//$this->template->active_login = 'active';
		$this->template->content = View::factory('auth/login')
			->bind('error', $error);

		
	}

	public function action_update()
	{
		if($_POST)
		{
			$post = $this->request->post();

			$update = ORM::factory('user', Auth::instance()->get_user());
			$update->email   = $post['email'];
			$update->team_id = $post['team'];
			$update->save();

			header("location: ".URL::site('user/update'));
			die();
			
		}
		if(Auth::instance()->logged_in())
		{
			$team_id = Auth::instance()->get_user()->team_id;
			$team = ORM::factory('team')->order_by('name', 'ASC')->find_all();
			$this->template->title = 'Update Profile';
			$this->template->content = View::factory('auth/update')
				->bind('team', $team)
				->bind('team_id', $team_id);
		}
		else
		{
			die();
		}
	}

	public function action_changepassword()
	{
		if($_POST)
		{
			$post = $this->request->post();
			$password = Auth::instance()->hash_password($post['password']);

			if ($password === Auth::instance()->get_user()->password)
			{
				if ($post['n_password'] === $post['c_password'])
				{
					$changepassword = ORM::factory('user', Auth::instance()->get_user());
					$changepassword->password = $post['n_password'];
					$changepassword->save();
				}
				else
				{
					$error = 'Passwords do not match';
				}
			}
			else
			{
				$error = 'Incorrect Password';
			}
		}
		if(Auth::instance()->logged_in())
		{
			$this->template->title = 'Change Password';
			$this->template->content = View::factory('auth/password')
				->bind('error', $error);
		}
		else
		{
			die();
		}
	}

	public function action_logout()
	{
		Auth::instance()->logout();
		header("Location: " . URL::site('welcome'));
		die();

	}

}