<?php
namespace controller;

use ifeiwu\Controller;

class Error extends Controller
{
	
	public function index($message)
	{
		header('HTTP/1.1 404 Not Found');
		
		$this->assign('message', $message);
		$this->display('404');
	}

}
