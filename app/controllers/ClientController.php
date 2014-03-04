<?php

class ClientController extends BaseController {
	
	public function getIndex()
	{
		$users = User::all();
		return View::make('clients.index', array('users' => $users));
	}
}
