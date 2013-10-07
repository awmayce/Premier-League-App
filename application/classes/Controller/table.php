<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Table extends Controller_Layout {

	public function action_index()
	{
		$team = ORM::factory('team')->order_by('name', 'ASC')->find_all();


		$this->template->title = ('Table');
		$this->template->active_table = ('active');
		$this->template->content = View::factory('table')
			->bind('team', $team);
	}

} // End Welcome
