<?php defined('SYSPATH') or die('No direct script access.');

class Controller_App extends Controller_Layout {

	public function action_index()
	{
		if(!Auth::instance()->logged_in())
		{
			$this->template->title = ('Access Denied');
			$this->template->content = "<div class='alert alert-warning'>You must be logged in to access this page</div>";
		}
		else
		{
			$team = ORM::factory('team')->order_by('name', 'ASC')->find_all();
			$app_area = "Click a team to see their information";

			$this->template->title = ('The App');
			$this->template->active_app = ('active');
			$this->template->content = View::factory('app')
				->bind('team', $team)
				->bind('app_area', $app_area);
		}	
	}

	public function action_team()
	{
		if(!Auth::instance()->logged_in())
		{
			$this->template->title = ('Access Denied');
			$this->template->content = "<div class='alert alert-warning'>You must be logged in to access this page</div>";
		}
		else
		{
			$id = $this->request->param('id');
			$team = ORM::factory('team')->order_by('name', 'ASC')->find_all();
			$team_info = ORM::factory('team', $id);

			$this->template->title = ('The App');
			$this->template->active_app = ('active');
			$this->template->content = View::factory('app')
				->bind('team', $team)
				->bind('team_info', $team_info);
		}	
	}

} // End Welcome
