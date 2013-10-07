<?php defined('SYSPATH') or die('No direct script access.');

Class Controller_Team extends Controller_Layout {

	public function action_index()
	{
		header("location: ".URL::Site('welcome'));
		die();
	}

	public function action_no()
	{
		$id = $this->request->param('id');
		$team = ORM::factory('team', $id);

		if (!isset($team->id))
		{
	 		header("location: ".URL::site('welcome'));
	 		die();
		}

		$this->template->title = $team->name;
		$this->template->content = View::factory('team')
			->bind('team', $team);
	}

}