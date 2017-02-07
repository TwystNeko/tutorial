<?php declare(strict_types = 1);

namespace App\Controllers;
use Http\Response;
use Http\Request;

class Signup
{
	private $request;
	private $response;

	public function __construct(Response $response, Request $request)
	{
		$this->response = $response;
		$this->request = $request;
	}

	public function show()
	{
		$content = "<h1>Hello World!</h1>";
		$content .= "And howdy, ". $this->request->getParameter('name', 'stranger');

		$this->response->setContent($content); 
	}
}