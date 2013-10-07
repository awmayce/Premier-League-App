<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Layout {

	public function action_index()
	{
		$this->template->title = ('Home');
		$this->template->active_home = ('active');
		$this->template->content = View::factory('home');
	}

} // End Welcome
