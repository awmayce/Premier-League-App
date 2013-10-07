<?php defined('SYSPATH') or die('No direct script access.');

Class Controller_Register extends Controller_Layout {

	public function action_index()
	{
		$team = ORM::factory('team')->order_by('name', 'ASC')->find_all();

		$this->template->title = 'Register';
		//$this->template->active_login = 'active';
		$this->template->content = View::factory('auth/register')
			->bind('team', $team);
	}
	public function action_add()
	{
		$user   = $this->request->post('username');
		$pass   = $this->request->post('password');
		$email  = $this->request->post('email');
		$team_id= $this->request->post('team_id');
		
		$newuser = ORM::factory('user');

		$newuser->username = $user;
		$newuser->password = $pass;
		$newuser->email    = $email;
		$newuser->team_id  = $team_id;
		$newuser->save();

		$role = ORM::factory('role')->where('name', '=', 'login')->find();
		$newuser->add('roles', $role);

		header('location: ' . URL::site('user'));
		die();
	}

}