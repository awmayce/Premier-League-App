<?php defined('SYSPATH') or die('No direct script access.');

Class Controller_Layout extends Controller_Template {

	public $template = 'template/main';

	public function before()
	{
		parent::before();
		$logged_in = Auth::instance()->logged_in();
		
		if ($logged_in)
		{
			$user = ORM::factory('user', Auth::instance()->get_user());
			$team = ORM::factory('team', $user->team_id);
		}

		if (Auth::instance()->logged_in("admin") == 1)
		{
			$role = 'admin';
		}
		else
		{
			$role = 'user';
		}

		$this->template->navigation = View::factory('template/navigation')
			->bind('logged_in', $logged_in)
			->bind('user', $user)
			->bind('team', $team)
			->bind('role', $role);
	}

	public function after()
	{
		parent::after();
	}

}