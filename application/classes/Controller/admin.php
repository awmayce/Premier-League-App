<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Layout {

	public function action_index()
	{
		$team = ORM::factory('team')->order_by('name', 'ASC')->find_all();

		$this->template->title = ('Admin area');
		$this->template->active_admin = ('active');
		$this->template->content = View::factory('admin')
			->bind('team', $team);
	}

	public function action_update()
	{
		$id = $this->request->param('id');

		$update = ORM::factory('team', $id);

		$update->manager = $this->request->post('manager');
		$update->stadium = $this->request->post('stadium');
		$update->nickname = $this->request->post('nickname');
		$update->established = $this->request->post('established');

		$update->save();

		header( 'Location: ' . URL::base() . 'index.php/admin' );
		die();
	}

	public function action_delete()
	{
		$id = $this->request->param('id');

		$delete = ORM::factory('team', $id);

		$delete->delete();

		header( 'location: ' . URL::base() . 'index.php/welcome' );
		die();
	}

	public function action_add()
	{
		$source = $this->request->post('name');
		$source = str_replace(' ', '_', $source);
		$source = strtolower($source);

		$add = ORM::factory('team');

		$add->name        = $this->request->post('name');
		$add->source      = $source;
		$add->manager     = $this->request->post('manager');
		$add->stadium     = $this->request->post('stadium');
		$add->nickname    = $this->request->post('nickname');
		$add->established = $this->request->post('established');

		$add->save();

		header( 'location: ' . URL::base() . 'index.php/welcome' );
		die();
	}

} // End Welcome
